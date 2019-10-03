<?php

namespace App\Http\Controllers\Riwayat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Riwayat_gaji_berkala;

class RiwayatGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nip_nrp'=>'required',
            'gaji'=>'required',
            'tmt'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'dasar_peraturan'=>'required',
        ]);
        Riwayat_gaji_berkala::create($request->all());
        return back()->with('success','data berhasil ditambahkan');
       
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
        $data=Riwayat_gaji_berkala::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'gaji'=>'required',
            'tmt'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'dasar_peraturan'=>'required',
        ]);
        $data->update($request->all());
        return back()->with('success','data berhasil diedit');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Riwayat_gaji_berkala::findOrFail($id);
        $data->delete();
        return back()->with('success','data berhasil dihapus');
    }
}
