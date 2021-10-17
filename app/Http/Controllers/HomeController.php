<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;

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
        return view('back.home');
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
        return redirect()->back();
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

    public function select_loker(Request $request){
        // return $request->all();
        $this->id_loker = $request->select;

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::with('seleksi_r')->where('id_vacancy',$this->id_loker)->get();

        return view('back.seleksi_peserta',compact('vacancy','get_attendances','pilih_loker'));
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
