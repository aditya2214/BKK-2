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
        ]);

        Alert::success('Berhasil', 'Loker Telah Di Publish!!!');
        return redirect()->back();
    }

    public function attendance(){
        $vacancy = \App\Vacancy::all();

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
        $get_attendances = \App\Attendance::where('id_vacancy',$this->id_loker)->get();
        return view('back.seleksi_peserta',compact('vacancy','get_attendances','pilih_loker'));
    }

    public function seleksi(Request $request){
        // return $request->all();
        if ($request->id_peserta == null) {
            Alert::error('Error', ' Halaman hanya 1 sesi <br> Harap Pilih Data Peserta!!!');
            return redirect('/seleksi_peserta');
        }
        $id_peserta = $request->id_peserta;

        foreach ($id_peserta as $key => $value) {
            // return $value;
            # code...
            $storeSeleksi = \App\absenSortir::create([
                'id_peserta' => $value,
                'kategori_tes' => $request->tes_apa,
                'status_tes' => $request->status_tes,
            ]);
        }
        Alert::success('Berhasil', 'Sukses Sortir Data!!!');
        return redirect('/seleksi_peserta');
    }

    
    public function delete_kategori_test($id){
        $delete_kategori_test = \App\absenSortir::where('id',$id)->delete();

        Alert::success('Berhasil', 'Sukses Hapus Tes!!!');
        return redirect('/seleksi_peserta');
    }


























































    public function test(){
        $app = DB::table('absen_sortirs')
            ->join('attendances','absen_sortirs.id_peserta','attendances.id')
            ->join('vacancies','attendances.id_vacancy','vacancies.id')
            ->get();
    
        return $app;
    }
    
    public function delete(){
        $delete = \App\absenSortir::truncate();
        $attendance =  \App\Attendance::truncate();
    }
}
