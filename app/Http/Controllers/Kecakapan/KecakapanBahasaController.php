<?php

namespace App\Http\Controllers\Kecakapan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kecakapan_bahasa;

class KecakapanBahasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
            'jenis_bahasa'=>'required',
            'nama_bahasa'=>'required',
            'kemampuan_bahasa'=>'required',
        ]);
        Kecakapan_bahasa::create($request->all());
        return back()->with('success','Data berhasil ditambahkan');
        // return $request->all();
    }

    public function update(Request $request, $id)
    {
        //
        $data=Kecakapan_bahasa::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'jenis_bahasa'=>'required',
            'nama_bahasa'=>'required',
            'kemampuan_bahasa'=>'required',
        ]);
        $data->update($request->all());
        return back()->with('success','Data berhasil diedit');
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
        $data=Kecakapan_bahasa::findOrFail($id);
        $data->delete();
        return back()->with('success','Data berhasil diedit');
    }
}
