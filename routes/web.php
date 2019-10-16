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
// master pegawai
Route::resource('/master','masterController');
Route::post('/master/update','masterController@update')->name('master.update');
Route::get('/master/{id}/edit_pegawai','masterController@edit_pegawai')->name('master.edit_pegawai');
Route::post('/master/divisis','masterController@divisis')->name('master.divisis');
Route::resource('/profile','ProfileController');

// // ================setting controller ===========================// //
// divisi
Route::resource('/setting/divisi','Setting\DivisiController');
Route::post('/setting/divisi/update','Setting\DivisiController@update')->name('divisi.update');
Route::post('/setting/divisi/delete','Setting\DivisiController@destroy')->name('divisi.delete');
// unitkerja
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
// // ================setting controller ===========================// //
// R keluarga
Route::resource('/keluarga','KeluargaController');
Route::post('/keluarga/update','KeluargaController@update')->name('keluarga.update');
Route::post('/keluarga/delete','KeluargaController@destroy')->name('keluarga.delete');
// R pendidikan umum
Route::resource('/pendidikan_umum','PendidikanUmumController');
Route::post('/pendidikan_umum/update','PendidikanUmumController@update')->name('pendidikan_umum.update');
Route::post('/pendidikan_umum/delete','PendidikanUmumController@destroy')->name('pendidikan_umum.delete');
// R pendidikan kejuruan
Route::resource('/pendidikan_kejuruan','PendidikankejuruanController');
Route::post('/pendidikan_kejuruan/update','PendidikankejuruanController@update')->name('pendidikan_kejuruan.update');
Route::post('/pendidikan_kejuruan/delete','PendidikankejuruanController@destroy')->name('pendidikan_kejuruan.delete');
// Rpendidikan polri
Route::resource('/pendidikan_polri','PendidikanPolriController');
Route::post('/pendidikan_polri/update','PendidikanPolriController@update')->name('pendidikan_polri.update');
Route::post('/pendidikan_polri/delete','PendidikanPolriController@destroy')->name('pendidikan_polri.delete');
// R pendidikan Non Formal
Route::resource('/pendidikan_non_formal','PendidikanNonFormalController');
Route::post('/pendidikan_non_formal/update','PendidikanNonFormalController@update')->name('pendidikan_non_formal.update');
Route::post('/pendidikan_non_formal/delete','PendidikanNonFormalController@destroy')->name('pendidikan_non_formal.delete');
// R kecakapan bahasa
Route::resource('/kecakapan_bahasa','Kecakapan\KecakapanBahasaController');
Route::post('/kecakapan_bahasa/update','Kecakapan\KecakapanBahasaController@update')->name('kecakapan_bahasa.update');
Route::post('/kecakapan_bahasa/delete','Kecakapan\KecakapanBahasaController@destroy')->name('kecakapan_bahasa.delete');
// R kecakapan olahraga
Route::resource('/kecakapan_olahraga','Kecakapan\KecakapanOlahRagaController');
Route::post('/kecakapan_olahraga/update','Kecakapan\KecakapanOlahRagaController@update')->name('kecakapan_olahraga.update');
Route::post('/kecakapan_olahraga/delete','Kecakapan\KecakapanOlahRagaController@destroy')->name('kecakapan_olahraga.delete');
// R brevet
Route::resource('/kecakapan_brevet','Kecakapan\KecakapanBrevetController');
Route::post('/kecakapan_brevet/update','Kecakapan\KecakapanBrevetController@update')->name('kecakapan_brevet.update');
Route::post('/kecakapan_brevet/delete','Kecakapan\KecakapanBrevetController@destroy')->name('kecakapan_brevet.delete');
// R tanda jasa
Route::resource('/tanda_jasa','TandaJasaController');
Route::post('/tanda_jasa/update','TandaJasaController@update')->name('tanda_jasa.update');
Route::post('/tanda_jasa/delete','TandaJasaController@destroy')->name('tanda_jasa.delete');
// R pangkat
Route::resource('/riwayat_kepangkatan','Riwayat\RiwayatKepangkatanController');
Route::post('/riwayat_kepangkatan/update','Riwayat\RiwayatKepangkatanController@update')->name('riwayat_kepangkatan.update');
Route::post('/riwayat_kepangkatan/delete','Riwayat\RiwayatKepangkatanController@destroy')->name('riwayat_kepangkatan.delete');
// R gaji
Route::resource('/riwayat_gaji','Riwayat\RiwayatGajiController');
Route::post('/riwayat_gaji/update','Riwayat\RiwayatGajiController@update')->name('riwayat_gaji.update');
Route::post('/riwayat_gaji/delete','Riwayat\RiwayatGajiController@destroy')->name('riwayat_gaji.delete');
// R jabatan
Route::resource('/riwayat_jabatan','Riwayat\RiwayatJabatanController');
Route::post('/riwayat_jabatan/update','Riwayat\RiwayatJabatanController@updates')->name('riwayat_jabatan.update');
Route::post('/riwayat_jabatan/delete','Riwayat\RiwayatJabatanController@destroy')->name('riwayat_jabatan.delete');

// Mutasi keluar
Route::resource('/mutasi_keluar','Mutasi\MutasiKeluarController');
Route::post('/mutasi_keluar/update','Mutasi\MutasiKeluarController@update')->name('mutasi_keluar.update');
Route::post('/mutasi_keluar/delete','Mutasi\MutasiKeluarController@destroy')->name('mutasi_keluar.delete');
// Mutasi internal
Route::resource('/mutasi_internal','Mutasi\MutasiInternalController');
Route::post('/mutasi_internal/update','Mutasi\MutasiInternalController@update')->name('mutasi_internal.update');
Route::post('/mutasi_internal/delete','Mutasi\MutasiInternalController@destroy')->name('mutasi_internal.delete');
Route::post('/mutasi_internal/divisi','Mutasi\MutasiInternalController@divisi')->name('mutasi_internal.divisi');
Route::post('/mutasi_internal/editdivisi','Mutasi\MutasiInternalController@editDivisi')->name('mutasi_internal.editdivisi');


//
Route::get('/setting/getDivisi','Setting\DivisiController@getDivisi')->name('getDivisi');
// cuti
Route::resource('/cuti','CutiController');
