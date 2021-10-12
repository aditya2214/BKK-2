<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class FrontendController extends Controller
{
    public function index(){
        $vacancy = \App\Vacancy::all();

        return view('front.home',compact('vacancy'));
    }

    public function job_details($id){
        $vacancy_detail = \App\Vacancy::where('id',$id)->first();

        return view('front.job_detail',compact('vacancy_detail'));
    }

    // public function daftar(Request $request){
    //     return $request->all();

    // }

    // public function masukan_kode($id){
    //     $cek_kode_vacancy = \App\Vacancy::where('id',$id)->first();

    //     return view('front.kode_vacancy',compact('cek_kode_vacancy'));
    // }

    // public function absen(Request $request,$id){
    //     $cek_kode_vacancy = \App\Vacancy::where('id',$id)->first();
    //     $cek_request = $request->kode_loker;

    //     if ($cek_request == $cek_kode_vacancy->kode_vacancy) {
    //         Alert::success('Berhasil', 'Silahkan Isi Biodata Anda!!!');
    //         return view('front.form_peserta');
    //     }else{
    //         Alert::error('Gagal', 'Kode Tes Salah!!!');
    //         return redirect()->back();
    //     }
    // }
}
