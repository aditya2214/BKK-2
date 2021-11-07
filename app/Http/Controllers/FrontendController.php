<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert,PDF;

class FrontendController extends Controller
{
    public $searching;

    public $tes_online;


    public function index(){
        $vacancy = \App\Vacancy::where('switch',1)->orderBy('id','DESC')->limit(3)->get();
        $vacancy2 = \App\Vacancy::where('switch',1)->orderBy('id','DESC')->get();

        return view('front.home',compact('vacancy','vacancy2'));
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
            'gender' => $request->gender,
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
            'graduation_year' => $request->graduation_year.'-'.date('d'),
            'experience' => $request->experience,
            'no_handphone' => $request->no_handphone
        ]);

        Alert::success('Berhasil', 'Data Absensi Anda Sudah Masuk!!!');
        return redirect('/');
    }

    public function daftarStore(Request $request,$id){
        // try {
            $daftarStore = \App\Pendaftaran::create([
                'id_loker' => $id,
                'nama_lengkap' => $request->nama_lengkap,
                'no_handphone' => $request->no_handphone
            ]);

            $dt = \App\Pendaftaran::where('id',$daftarStore->id)->first();
            // return $dt;
 
            $pdf = PDF::loadview('front.pdf_pendaftaran',compact('dt'))->setPaper('a4', 'landscape');
            return $pdf->stream();
 
        // } catch (\Exception $e) {
        //     Alert::error('Error', 'Pendaftaran Gagal, Schreenshot Error dan Hubungi dan Kirimkan Hasil ke admin BKK!!!');
        //     return redirect()->back();
        // }
    }

    public function pengumuman(){

        $search_cek = $this->searching;

        return view('front.pengumuman',compact('search_cek'));
    }

    public function searching(Request $request){
        $this->searching = $request->search;
        $search_cek = $this->searching;
        // return $search_cek;
        $get_attendances = \App\Attendance::where('nik',$request->search)->orWhere('active_email',$request->search)->orWhere('no_handphone',$request->search)->get();

        // return $get_attendances;

        return view('front.pengumuman',compact('get_attendances','search_cek'));

    }

    public function front_test_online($id){
        $this->tes_online = $id;

        $tes_online = $this->tes_online;
        $vacancies = \App\Vacancy::OrderBy('id','DESC')->get();

        return view('front.daftar_loker',compact('tes_online','vacancies'));
    }

    public function storeKodeTes(Request $request, $id){
        return $id;
        
        $cek_kode_vacancy = \App\Vacancy::where('id',$id)->first();
        $link = \App\LinkGform::where('id_loker',$id)->first();

        $cek_request = $request->Kode_tes;

        if ($cek_request == $cek_kode_vacancy->kode_vacancy) {
            
            return view('https://'.$link);
        }else{
            Alert::error('Gagal', 'Kode Tes Salah!!!');
            return redirect()->back();
        }
    }

}
