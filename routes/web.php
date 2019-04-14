<?php

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

Route::get('/', 'PagesController@index');
Route::get('/list_user', 'PagesController@list_user');
Route::get('/list_sekolah_terdaftar', 'PagesController@list_sekolah_terdaftar');
Route::get('/list_sekolah_gsm', 'PagesController@list_sekolah_gsm');
Route::get('/list_sekolah_indonesia', 'PagesController@list_sekolah_indonesia');
Route::get('/list_assesor', 'PagesController@list_assesor');
Route::get('/list_permintaan_assesor', 'PagesController@list_permintaan_assesor');
Route::get('/input_modul', 'PagesController@input_modul');
Route::get('/list_materi_basic', 'PagesController@list_materi_basic');
Route::get('/list_materi_advanced', 'PagesController@list_materi_advanced');
Route::get('/detail_sekolah', 'PagesController@detail_sekolah');
Route::get('/detail_user', 'PagesController@detail_user');
Route::get('/penilaian_user', 'PagesController@penilaian_user');
Route::get('/detail_modul', 'PagesController@detail_modul');
