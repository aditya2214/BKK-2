<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth;
use Alert;
use App\Exports\SiswaExport;
use App\Imports\absenSortir2;
use App\Imports\PesertaImport;
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
        $count_pengguna = \App\User::count();

        return view('back.home',compact('count_lowongan','count_pengguna'));
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

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'Running Function Created Loker '.$request->title_job
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

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'Running Function Updated Loker '.$request->title_job
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
        $vacan = \App\Vacancy::where('id',$id)->first();
        $get_attendances = \App\Attendance::where('id_vacancy',$id)->get();

        return view('back.daftar_peserta',compact('get_attendances','vacan'));
    }


    public function seleksi_peserta(){

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        return view('back.seleksi_peserta',compact('vacancy','pilih_loker'));
    }

    public function import_seleksi(){

        $pilih_loker = $this->id_loker;
        $vacancy2 = \App\Vacancy::where('id',$pilih_loker)->first();
        $vacancy = \App\Vacancy::all();
        return view('back.import_seleksi',compact('vacancy','pilih_loker','vacancy2'));
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
            
            // store log
            $storeLog = \App\Log::create([
                'id_user' => Auth::user()->id,
                'aksi' => 'Running Function Seleksi Loker Otomatis' 
            ]);

            // notifikasi dengan session
            Alert::success('Berhasil', 'Sukses Sortir Data!!!');
     
            // alihkan halaman kembali
            return redirect()->back();
        } catch (\Throwable $th) {
             // notifikasi dengan session
             Alert::error('Error', '!!!'.$th);
     
             // alihkan halaman kembali
             return redirect()->back();
        }
    }

    public function peserta_import_excel(Request $request) 
	{
		// validasi
        // try {
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
            $file->move('file_peserta',$nama_file);
     
            // import data
            Excel::import(new PesertaImport, public_path('/file_peserta/'.$nama_file));
            
            // store log
            $storeLog = \App\Log::create([
                'id_user' => Auth::user()->id,
                'aksi' => 'Running Function Seleksi Loker Otomatis' 
            ]);

            // notifikasi dengan session
            Alert::success('Berhasil', 'Sukses Import Data Peserta Data!!!');
     
            // alihkan halaman kembali
            return redirect()->back();
        // } catch (\Throwable $th) {
        //      // notifikasi dengan session
        //      Alert::error('Error', '!!!'.$th);
     
        //      // alihkan halaman kembali
        //      return redirect()->back();
        // }
    }
    




    public function select_loker(Request $request){
        // return $request->all();
        $this->id_loker = $request->select;

        $pilih_loker = $this->id_loker;
        $vacancy2 = \App\Vacancy::where('id',$pilih_loker)->first();
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::with('seleksi_r')->where('id_vacancy',$this->id_loker)->get();
        return view('back.seleksi_peserta',compact('vacancy','get_attendances','pilih_loker','vacancy2'));
    }

    public function select_loker_test(Request $request){
        $this->id_loker = $request->select;
        $pilih_loker = $this->id_loker;
        $vacancy2 = \App\Vacancy::where('id',$pilih_loker)->first();
        $vacancy = \App\Vacancy::all();
        $LinkGform = \App\LinkGform::where('id_loker',$pilih_loker)->get();

        return view('back.test_online',compact('vacancy','pilih_loker','LinkGform','vacancy2'));

    }

    public function upload_seleksi(Request $request){
        // return $request->all();
        $this->id_loker = $request->select;

        $pilih_loker = $this->id_loker;
        $vacancy2 = \App\Vacancy::where('id',$pilih_loker)->first();
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::with('seleksi_r')->where('id_vacancy',$this->id_loker)->get();
        return view('back.import_seleksi',compact('vacancy','get_attendances','pilih_loker','vacancy2'));
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
        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'Running Function Seleksi Pesetra Manual '
        ]);
        Alert::success('Berhasil', 'Sukses Sortir Data!!!');
        return redirect()->back();
    }

    
    public function delete_kategori_test($id){
        $delete_kategori_test = \App\absenSortir::where('id',$id)->delete();

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'running function delete_kategori_test '
        ]);

        Alert::success('Berhasil', 'Sukses Hapus Tes!!!');
        return redirect()->back();
    }


    public function update_vac($id){
        $update_vac = \App\Vacancy::where('id',$id)->first();
        
        return view('back.update_vac',compact('update_vac'));
    }

    public function hapus_vac($id){
        $get_vac = \App\Vacancy::where('id',$id)->first();
        $get_att = \App\Attendance::where('id_vacancy',$get_vac->id)->get();
        foreach ($get_att as $key => $gt) {
            $absenSortir_del = \App\absenSortir::where('id_peserta',$gt->id)->delete();
        }
        $delete_att = \App\Attendance::where('id_vacancy',$get_vac->id)->delete();
        $delete_vac = \App\Vacancy::where('id',$id)->delete();

        
        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'Running Function Hapus Lowongan '
        ]);
        Alert::success('Success', 'Menghapus lowongan'.$get_vac->title_vacancy);
        return redirect()->back();

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

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'running function store_mitra '
        ]);


        return redirect()->back();
    }


    public function test_online(){
        $vacancy = \App\Vacancy::all();
        $pilih_loker = $this->id_loker;
        $vacancy2 = \App\Vacancy::where('id',$pilih_loker)->first();
        $LinkGform = \App\LinkGform::where('id_loker',$pilih_loker)->get();
        return view('back.test_online',compact("vacancy","pilih_loker","LinkGform","vacancy2"));
    }

    public function storeLinkGform(Request $request, $id){
        $vacancy = \App\Vacancy::where('id',$id)->first();
        // return $vacancy;
        $storeLinkGform = \App\LinkGform::create([
            'id_loker' => $id,
            'link_gfom' => $request->link
        ]);

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'running function storeLinkGform '.$vacancy->title_vacancy
        ]);
        
        Alert::success('Berhasil', 'Sukses Masukan Link tes ' .$vacancy->title_vacancy);
        return redirect()->back();
    }

    public function whatsapp($id){
        return "";
    }

    public function switch_01($id){
        $sw_01 = \App\Vacancy::where('id',$id)->update([
            'switch' => 1
        ]);

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'running function switch on '
        ]);

        Alert::info('SWITCH ON', 'Success');
        return redirect('attendance');
    }

    public function switch_02($id){
        $sw_02 = \App\Vacancy::where('id',$id)->update([
            'switch' => 0
        ]);

        $storeLog = \App\Log::create([
            'id_user' => Auth::user()->id,
            'aksi' => 'running function switch off '
        ]);

        Alert::info('SWITCH OFF', 'Success');
        return redirect('attendance');
    }

    public function delete_link_test($id){
        $delete_link_test = \App\LinkGform::where('id',$id)->delete();
        Alert::success('Success', 'Link Berhasil Dihapus');
        return redirect()->back();
    }

    public function pengguna(){
        $users = \App\User::all();

        return view('back.pengguna',compact('users'));
    }

    public function delete_user($id){
        $delete_user = \App\User::where('id',$id)->delete();

        Alert::success('Success', 'Akun Berhasil Dihapus');
        return redirect('login');

    }

    public function logs(){

        $logs = \App\Log::orderBy('id','DESC')->limit(100)->get();

        return view('back.logs',compact('logs'));
    }

    public function profile_detail(){

        return view('back.profile_detail');
    }


























































    public function test(){
        $app = DB::table('absen_sortirs')
            ->get();
    
        return $app;
    }
    
    public function delete(){
        $delete = \App\absenSortir::truncate();
        $attendance =  \App\Attendance::truncate();
    }
}
