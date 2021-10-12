<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $vacancy = \App\Vacancy::all();

        return view('front.home',compact('vacancy'));
    }
}
