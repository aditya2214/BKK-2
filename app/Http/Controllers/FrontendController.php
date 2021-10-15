<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class FrontendController extends Controller
{
    public $searching;

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

    public function masukan_kode($id){
        $cek_kode_vacancy = \App\Vacancy::where('id',$id)->first();

        return view('front.kode_vacancy',compact('cek_kode_vacancy'));
    }

    public function absen(Request $request,$id){
        $cek_kode_vacancy = \App\Vacancy::where('id',$id)->first();
        $cek_request = $request->kode_loker;

        if ($cek_request == $cek_kode_vacancy->kode_vacancy) {
            Alert::success('Berhasil', 'Silahkan Isi Biodata Anda!!!');
            return view('front.form_absensi',compact('cek_kode_vacancy'));
        }else{
            Alert::error('Gagal', 'Kode Tes Salah!!!');
            return redirect()->back();
        }
    }

    public function storeAbsensi(Request $request, $id){
        
        $storeAbsen = \App\Attendance::create([
            'id_vacancy' => $id,
            'full_name'  => $request->full_name,
            'gender' => $request-> gender,
            'active_email' => $request->active_email,
            'nik' => $request->nik,
            'kabupaten' => $request->kabupaten,
            'address' => $request->address,
            'place' => $request->place,
            'date_and_place' => $request->date_and_place,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'school' => $request->school,
            'graduation_year' => $request->graduation_year,
            'experience' => $request->experience,
            'no_handphone' => $request->no_handphone
        ]);

        Alert::success('Berhasil', 'Data Absensi Anda Sudah Masuk!!!');
        return redirect('/');
    }

    public function pengumuman(){

        $search_cek = $this->searching;

        return view('front.pengumuman',compact('search_cek'));
    }

    public function searching(Request $request){
        $this->searching = $request->searching;
        $search_cek = $this->searching;
        $get_attendances = \App\Attendance::where('nik',$request->searching)->orWhere('active_email',$request->searching)->orWhere('no_handphone',$request->searching)->get();

        return view('front.pengumuman',compact('get_attendances','search_cek'));

    }


}
