<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use App\Exports\SiswaExport;
use App\Imports\absenSortir2;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public $id_loker = 0;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_lowongan = \App\Vacancy::count();
        return view('back.home',compact('count_lowongan'));
    }

    public function posting_lowongan(){

        return view('back.posting_lowongan');
    }

    public function store_jobs(Request $request){
        $storeVacancy = \App\Vacancy::create([
            'kode_vacancy'=>$request->job_kode,
            'title_vacancy'=>$request->title_job,
            'place_and_date'=>$request->place_and_date,
            'recruitment'=>$request->other_requirement,
            'notes'=>$request->notes,
            'switch' => $request->switch
        ]);

        Alert::success('Berhasil', 'Loker Telah Di Publish!!!');
        return redirect()->back();
    }

    public function update_jobs(Request $request,$id){
        $storeVacancy = \App\Vacancy::where('id',$id)->update([
            'kode_vacancy'=>$request->job_kode,
            'title_vacancy'=>$request->title_job,
            'place_and_date'=>$request->place_and_date,
            'recruitment'=>$request->other_requirement,
            'notes'=>$request->notes,
            'switch' => $request->switch
        ]);

        Alert::success('Berhasil', 'Loker Telah Di Update!!!');
        return redirect('attendance');
    }

    public function attendance(){
        $vacancy = \App\Vacancy::all();
        // foreach ($vacancy as $key => $value) {
        //     $count = $value->attendance_r->count();
        // }
        // return $count;

        

        return view('back.attendance',compact('vacancy'));
    }

    public function daftar_peserta($id){
        $get_attendances = \App\Attendance::where('id_vacancy',$id)->get();

        return view('back.daftar_peserta',compact('get_attendances'));
    }


    public function seleksi_peserta(){

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        return view('back.seleksi_peserta',compact('vacancy','pilih_loker'));
    }

    public function import_seleksi(){

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        return view('back.import_seleksi',compact('vacancy','pilih_loker'));
    }

    public function import_excel(Request $request) 
	{
		// validasi
        try {
            //code...
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);
     
            // menangkap file excel
            $file = $request->file('file');
            
            // dd($file);
     
            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();
     
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_siswa',$nama_file);
     
            // import data
            Excel::import(new absenSortir2, public_path('/file_siswa/'.$nama_file));
     
            // notifikasi dengan session
            Alert::success('Berhasil', 'Sukses Sortir Data!!!');
     
            // alihkan halaman kembali
            return redirect()->back();
        } catch (\Throwable $th) {
             // notifikasi dengan session
             Alert::error('Error', 'Priksa Kembali File Excel Yang Di Import!!!');
     
             // alihkan halaman kembali
             return redirect()->back();
        }
	}



    public function select_loker(Request $request){
        // return $request->all();
        $this->id_loker = $request->select;

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::with('seleksi_r')->where('id_vacancy',$this->id_loker)->get();
        return view('back.seleksi_peserta',compact('vacancy','get_attendances','pilih_loker'));
    }

    public function select_loker_test(Request $request){
        $this->id_loker = $request->select;
        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();

        return view('back.test_online',compact('vacancy','pilih_loker'));

    }

    public function upload_seleksi(Request $request){
        // return $request->all();
        $this->id_loker = $request->select;

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::with('seleksi_r')->where('id_vacancy',$this->id_loker)->get();
        return view('back.import_seleksi',compact('vacancy','get_attendances','pilih_loker'));
    }

    public function seleksi(Request $request){
        // return $request->all();

        // return $request->all();
        if ($request->id_peserta == null) {
            Alert::error('Error', ' Halaman hanya 1 sesi : Harap Pilih Data Peserta!!!');
            return redirect('/select_loker');
        }
        $id_peserta = $request->id_peserta;

        foreach ($id_peserta as $key => $value) {
            // return $value;
            # code...
            $storeSeleksi = \App\absenSortir::create([
                'id_peserta' => $value,
                'kategori_tes' => $request->tes_apa,
                'status_tes' => $request->status_tes,
                'notes2' => $request->catatan
            ]);
        }
        Alert::success('Berhasil', 'Sukses Sortir Data!!!');
        return redirect()->back();
    }

    
    public function delete_kategori_test($id){
        $delete_kategori_test = \App\absenSortir::where('id',$id)->delete();

        Alert::success('Berhasil', 'Sukses Hapus Tes!!!');
        return redirect()->back();
    }


    public function update_vac($id){
        $update_vac = \App\Vacancy::where('id',$id)->first();

        return view('back.update_vac',compact('update_vac'));
    }

    public function mitra_bkk(){

        $mitra_bkk = \App\MitraBkk::all();

        return view('back.mitra_bkk',compact('mitra_bkk'));
    }

    public function store_mitra(Request $request){
        $store_mitra = \App\MitraBkk::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'images' => $request->images->store('photos','public')
        ]);

        return redirect()->back();
    }


    public function test_online(){
        $vacancy = \App\Vacancy::all();
        $pilih_loker = $this->id_loker;
        return view('back.test_online',compact("vacancy","pilih_loker"));
    }

    public function storeLinkGform(Request $request, $id){
        
    }

    public function whatsapp($id){
        return "";
    }

    public function switch_01($id){
        $sw_01 = \App\Vacancy::where('id',$id)->update([
            'switch' => 1
        ]);

        Alert::info('SWITCH ON', 'Success');
        return redirect('attendance');
    }

    public function switch_02($id){
        $sw_02 = \App\Vacancy::where('id',$id)->update([
            'switch' => 0
        ]);

        Alert::info('SWITCH OFF', 'Success');
        return redirect('attendance');
    }


























































    public function test(){
        $app = DB::table('absen_sortirs')
            ->get();
    
        return $app;
    }
    
    public function delete(){
        $delete = \App\absenSortir::truncate();
        $attendance =  \App\Attendance::truncate();
        $vacancy = \App\Vacancy::truncate();
    }
}
