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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/master','masterController');
Route::resource('/profile','ProfileController');
// setting controller
Route::resource('/setting/divisi','Setting\DivisiController');
Route::resource('/setting/unit_kerja','Setting\UnitKerjaController');
Route::resource('/setting/cuti','Setting\CutiController');
// end setting
// keluarga
Route::resource('/keluarga','KeluargaController');
// cuti
Route::resource('/cuti','CutiController');
//pendidikan umum
Route::resource('/pendidikan_umum','PendidikanUmumController');
// pendidikan kejuruan
Route::resource('/pendidikan_kejuruan','PendidikankejuruanController');
//
Route::resource('/pendidikan_polri','PendidikanPolriController'); 
// kecakapan bahasa
Route::resource('/kecakapan_bahasa','Kecakapan\KecakapanBahasaController');
// kecakapan olahraga
Route::resource('/kecakapan_olahraga','Kecakapan\KecakapanOlahRagaController');
// 
Route::resource('/kecakapan_brevet','Kecakapan\KecakapanBrevetController');
// 
Route::resource('/tanda_jasa','TandaJasaController');

Route::get('/setting/getDivisi','Setting\DivisiController@getDivisi')->name('getDivisi');
