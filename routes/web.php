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
Route::post('/daftarStore/{id}', 'FrontendController@daftarStore')->name('daftarStore');
Route::get('/front_test_online', 'FrontendController@front_test_online')->name('front_test_online');
Route::get('/storeKodeTes/{id}', 'FrontendController@storeKodeTes')->name('storeKodeTes');
Route::get('/masukan_kode_tes_online/{id}', 'FrontendController@masukan_kode_tes_online')->name('masukan_kode_tes_online');
Route::post('/absen_tes_online/{id}', 'FrontendController@absen_tes_online')->name('absen_tes_online');

Route::get('/logout', function () {
    Auth::logout();
    
    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Jobs
Route::get('/posting_lowongan', 'HomeController@posting_lowongan')->name('posting_lowongan');
Route::post('/store_jobs', 'HomeController@store_jobs')->name('store_jobs');
Route::post('/update_jobs/{id}', 'HomeController@update_jobs')->name('update_jobs');
Route::get('/attendance', 'HomeController@attendance')->name('attendance');
Route::get('/daftar_peserta/{id}', 'HomeController@daftar_peserta')->name('daftar_peserta');
Route::get('/seleksi_peserta', 'HomeController@seleksi_peserta')->name('seleksi_peserta');
Route::get('/select_loker', 'HomeController@select_loker')->name('select_loker');
Route::get('/import_seleksi', 'HomeController@import_seleksi')->name('import_seleksi');
Route::get('/upload_seleksi', 'HomeController@upload_seleksi')->name('upload_seleksi');
Route::post('/seleksi', 'HomeController@seleksi')->name('seleksi');
Route::get('/delete_kategori_test/{id}', 'HomeController@delete_kategori_test')->name('delete_kategori_test');
Route::get('update_vac/{id}', 'HomeController@update_vac')->name('update_vac');
Route::get('hapus_vac/{id}', 'HomeController@hapus_vac')->name('hapus_vac');
Route::get('/mitra_bkk', 'HomeController@mitra_bkk')->name('mitra_bkk');
Route::post('/store_mitra', 'HomeController@store_mitra')->name('store_mitra');
Route::get('/whatsapp/{id}', 'HomeController@whatsapp')->name('whatsapp');
Route::post('/siswa/import_excel', 'HomeController@import_excel');
Route::get('/test_online', 'HomeController@test_online');
Route::get('/select_loker_test', 'HomeController@select_loker_test')->name('select_loker_test');
Route::get('/switch_01/{id}', 'HomeController@switch_01');
Route::get('/switch_02/{id}', 'HomeController@switch_02');
Route::get('/storeLinkGform/{id}', 'HomeController@storeLinkGform')->name('storeLinkGform');
Route::get('/delete_link_test/{id}', 'HomeController@delete_link_test')->name('delete_link_test');
Route::get('/pengguna', 'HomeController@pengguna');
Route::get('/delete_user/{id}', 'HomeController@delete_user')->name('delete_user');
Route::get('/logs', 'HomeController@logs');
Route::get('/profile_detail', 'HomeController@profile_detail');


Route::get('test', 'HomeController@test')->name('test');
Route::get('delete', 'HomeController@delete')->name('delete');
