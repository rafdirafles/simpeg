<?php

namespace App\Http\Controllers;

use App\Data_keluarga;
use App\Kecakapan_bahasa;
use App\Kecakapan_brevet;
use App\Kecakapan_olahraga_dan_beladiri;
use App\Pendidikan_kejuruan;
use App\Pendidikan_umum;
use App\user;
use App\Unit_kerja;
use App\Pendidikan_non_formal;
use App\Pendidikan_polri;
use App\Riwayat_gaji_berkala;
use App\Riwayat_jabatan;
use App\Tanda_jasa_Prestasi;
use Illuminate\Http\Request;

class masterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=user::all();
        return view('master.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas=Unit_kerja::all();
        return view('master.create',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'nip_nrp'=>['required'],
            'nama_pegawai'=>'required|string',
            'gelar_depan'=>'required',
            'gelar_belakang'=>'required',
            'no_kta_pegawai'=>'required',
            'jenis_pegawai'=>'required',
            'email'=>'required|unique:users',
            'password'=>'min:6|required_with:re_password|same:re_password',
            're_password' => 'min:6',
            'nidn'=>'required',
            'alamat'=>'required',
            'tempat_lahir'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'tanggal_lahir'=>'required|date',
            'jk'=>'required',
            'agama'=>'required|string',
            'no_kep_jabatan'=>'required|string',
            'nik'=>'required|string|unique:users',
            'status_menikah'=>'required|string',
            'no_kk'=>'required|string',
            'hobi'=>'required|string',
            'no_tlp'=>'required|string',
            'no_hp'=>'required|string',
            'tgl_masuk'=>'required|date',
            'warna_rambut'=>'required|string',
            'bentuk_muka'=>'required|string',
            'warna_kulit'=>'required|string',
            'ciri_khas'=>'required|string',
            'cacat_tubuh'=>'required|string',
            'id_unit_kerja'=>'required',
            'hobi'=>'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img';
        $file->move($tujuan_upload,$nama_file);

		user::create([
            'foto' => $nama_file ,
            'nip_nrp'=> $request->nip_nrp,
            'nama_pegawai'=> $request->nama_pegawai,
            'gelar_depan'=> $request->gelar_depan,
            'gelar_belakang'=> $request->gelar_belakang,
            'no_kta_pegawai'=> $request->no_kta_pegawai,
            'jenis_pegawai'=> $request->jenis_pegawai,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'nidn'=> $request->nidn,
            'alamat'=> $request->alamat,
            'tempat_lahir'=> $request->tempat_lahir,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'jk'=> $request->jk,
            'agama'=> $request->agama,
            'no_kep_jabatan'=>$request->no_kep_jabatan,
            'nik'=> $request->nik,
            'status_menikah'=> $request->status_menikah,
            'no_kk'=> $request->no_kk,
            'hobi'=> $request->hobi,
            'no_tlp'=> $request->no_tlp,
            'no_hp'=> $request->no_hp,
            'tgl_masuk'=> $request->tgl_masuk,
            'tinggi_badan'=> $request->tinggi_badan,
            'berat_badan'=> $request->berat_badan,
            'warna_rambut'=> $request->warna_rambut,
            'bentuk_muka'=> $request->bentuk_muka,
            'warna_kulit'=> $request->warna_kulit,
            'ciri_khas'=> $request->ciri_khas,
            'cacat_tubuh'=> $request->cacat_tubuh,
            'id_unit_kerja'=> $request->id_unit_kerja,
            'is_status'=>1


        ]);
        return back()->with('success','data berhasil ditambahkan');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datas=user::findOrFail($id);
        $p_umum=Pendidikan_umum::where('nip_nrp',$id)->get();
        $p_umum->groupBy('nip_nrp');
        // 
        $p_kejuruan=Pendidikan_kejuruan::where('nip_nrp',$id)->get();
        $p_kejuruan->groupBy('nip_nrp');
        // 
        $keluargas=Data_keluarga::where('nip_nrp',$id)->get();
        $keluargas->groupBy('nip_nrp');
        //
        $k_bahasa=Kecakapan_bahasa::where('nip_nrp',$id)->get();
        $k_bahasa->groupBy('nip_nrp');
        // 
        $k_olahraga=Kecakapan_olahraga_dan_beladiri::where('nip_nrp',$id)->get();
        $k_olahraga->groupBy('nip_nrp');
        // 
        $k_brevet=Kecakapan_brevet::where('nip_nrp',$id)->get();
        $k_brevet->groupBy('nip_nrp');
        // 
        $tanda_jasas=Tanda_jasa_Prestasi::where('nip_nrp',$id)->get();
        $tanda_jasas->groupBy('nip_nrp');
        // 
        $p_polris=Pendidikan_polri::where('nip_nrp',$id)->get();
        $p_polris->groupBy('nip_nrp');
        //
        $r_gaji=Riwayat_gaji_berkala::where('nip_nrp',$id)->get();
        $r_gaji->groupBy('nip_nrp');
        // 
        $r_jabatan=Riwayat_jabatan::where('nip_nrp',$id)->get();
        $r_jabatan->groupBy('nip_nrp');
        return view('Master.show',compact('datas','p_umum','p_kejuruan','keluargas','k_bahasa','k_olahraga','k_brevet',
        'tanda_jasas','p_polris','r_gaji','r_jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $data=User::findOrFail($request->id);
        $data->delete();
        return back()->with("success","data berhasil di Hapus");
    }
}
