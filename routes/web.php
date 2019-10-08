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
// riwayat jabatan
Route::resource('/riwayat_jabatan','Riwayat\RiwayatJabatanController');
Route::post('/riwayat_jabatan/update','Riwayat\RiwayatJabatanController@updates')->name('riwayat_jabatan.update');
Route::post('/riwayat_jabatan/delete','Riwayat\RiwayatJabatanController@destroy')->name('riwayat_jabatan.delete');
// Route::post('/riwayat_jabatan','Riwayat\RiwayatJabatanController@store')->name('riwayat_jabatan.store');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/master','masterController');
Route::resource('/profile','ProfileController');
// //setting controller // //
Route::resource('/setting/divisi','Setting\DivisiController');
Route::post('/setting/divisi/update','Setting\DivisiController@update')->name('divisi.update');
Route::post('/setting/divisi/delete','Setting\DivisiController@destroy')->name('divisi.delete');
//
Route::resource('/setting/unit_kerja','Setting\UnitKerjaController');
Route::post('/setting/unit_kerja/update','Setting\UnitKerjaController@update')->name('unit_kerja.update');
Route::post('/setting/unit_kerja/delete','Setting\UnitKerjaController@destroy')->name('unit_kerja.delete');
// pangkat
Route::resource('/setting/pangkat','Setting\PangkatController');
Route::post('pangkat/update', 'Setting\PangkatController@update')->name('pangkat.update');
Route::post('pangkat/delete', 'Setting\PangkatController@destroy')->name('pangkat.delete');
// setting jabatan
Route::resource('/setting/jabatan','Setting\JabatanController');
Route::post('/setting/update', 'Setting\jabatanController@update')->name('jabatan.update');
Route::post('/setting/delete', 'Setting\jabatanController@destroy')->name('jabatan.delete');
//
Route::resource('/setting/cuti','Setting\CutiController');

// // end setting // //
// keluarga
Route::resource('/keluarga','KeluargaController');
Route::post('/keluarga/update','KeluargaController@update')->name('keluarga.update');
Route::post('/keluarga/delete','KeluargaController@destroy')->name('keluarga.delete');
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
Route::post('/kecakapan_bahasa/update','Kecakapan\KecakapanBahasaController@update')->name('kecakapan_bahasa.update');
Route::post('/kecakapan_bahasa/delete','Kecakapan\KecakapanBahasaController@destroy')->name('kecakapan_bahasa.delete');
// kecakapan olahraga
Route::resource('/kecakapan_olahraga','Kecakapan\KecakapanOlahRagaController');
Route::post('/kecakapan_olahraga/update','Kecakapan\KecakapanOlahRagaController@update')->name('kecakapan_olahraga.update');
Route::post('/kecakapan_olahraga/delete','Kecakapan\KecakapanOlahRagaController@destroy')->name('kecakapan_olahraga.delete');
//
Route::resource('/kecakapan_brevet','Kecakapan\KecakapanBrevetController');
// tanda jasa
Route::resource('/tanda_jasa','TandaJasaController');
Route::post('/tanda_jasa/update','TandaJasaController@update')->name('tanda_jasa.update');
Route::post('/tanda_jasa/delete','TandaJasaController@destroy')->name('tanda_jasa.delete');
// di bawah masih eror ada dupilcate
Route::resource('/riwayat_gaji','Riwayat\RiwayatGajiController');

// R pangkat
Route::resource('/riwayat_kepangkatan','Riwayat\RiwayatKepangkatanController');
Route::post('/riwayat_kepangkatan/update','Riwayat\RiwayatKepangkatanController@update')->name('riwayat_kepangkatan.update');
Route::post('/riwayat_kepangkatan/delete','Riwayat\RiwayatKepangkatanController@destroy')->name('riwayat_kepangkatan.delete');
// gaji
Route::resource('/riwayat_unit_kerja','Riwayat\RiwayatGajiController');
Route::post('/riwayat_unit_kerja/update','Riwayat\RiwayatGajiController@update')->name('riwayat_gaji.update');
Route::post('/riwayat_unit_kerja/delete','Riwayat\RiwayatGajiController@destroy')->name('riwayat_gaji.delete');
//
Route::get('/setting/getDivisi','Setting\DivisiController@getDivisi')->name('getDivisi');
