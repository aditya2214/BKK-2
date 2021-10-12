<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
