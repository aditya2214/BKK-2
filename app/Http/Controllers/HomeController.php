<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function pengumuman(){

        return view('back.pengumuman');
    }

    public function seleksi_peserta(){

        $pilih_loker = $this->id_loker;
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::where('id_vacancy',$this->id_loker)->get();
        return view('back.seleksi_peserta',compact('vacancy','get_attendances','id_loker'));
    }

    public function select_loker(Request $request){
        return $request->all();
        $this->id_loker = $request->select;
    }
}
