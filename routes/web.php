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
Route::post('/storeAbsensi/{id}', 'FrontendController@storeAbsensi')->name('storeAbsensi');
Route::get('/pengumuman', 'FrontendController@pengumuman')->name('pengumuman');
Route::post('/searching', 'FrontendController@searching')->name('searching');


Route::get('/logout', function () {
    Auth::logout();
    
    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Jobs
Route::get('/posting_lowongan', 'HomeController@posting_lowongan')->name('posting_lowongan');
Route::post('/store_jobs', 'HomeController@store_jobs')->name('store_jobs');
Route::get('/attendance', 'HomeController@attendance')->name('attendance');
Route::get('/daftar_peserta/{id}', 'HomeController@daftar_peserta')->name('daftar_peserta');
Route::get('/seleksi_peserta', 'HomeController@seleksi_peserta')->name('seleksi_peserta');
Route::get('/select_loker', 'HomeController@select_loker')->name('select_loker');
Route::post('/seleksi', 'HomeController@seleksi')->name('seleksi');
Route::get('/delete_kategori_test/{id}', 'HomeController@delete_kategori_test')->name('delete_kategori_test');
Route::get('update_vac/{id}', 'HomeController@update_vac')->name('update_vac');






Route::get('test', 'HomeController@test')->name('test');
Route::get('delete', 'HomeController@delete')->name('delete');
