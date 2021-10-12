<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/job_details/{id}', 'FrontendController@job_details')->name('job_details');
Route::post('/daftar', 'FrontendController@daftar')->name('daftar');
Route::post('/absen/{id}', 'FrontendController@absen')->name('absen');
Route::get('/masukan_kode/{id}', 'FrontendController@masukan_kode')->name('masukan_kode');


Route::get('/logout', function () {
    Auth::logout();
    
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Jobs
Route::get('/posting_lowongan', 'HomeController@posting_lowongan')->name('posting_lowongan');
Route::post('/store_jobs', 'HomeController@store_jobs')->name('store_jobs');
Route::get('/attendance', 'HomeController@attendance')->name('attendance');
