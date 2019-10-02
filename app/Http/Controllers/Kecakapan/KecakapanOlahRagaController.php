<?php

namespace App\Http\Controllers\Kecakapan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kecakapan_olahraga_dan_beladiri;

class KecakapanOlahRagaController extends Controller
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
            'nama_olahraga'=>'required'
        ]);
        
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        Kecakapan_olahraga_dan_beladiri::create($request->all());
        return redirect()->route('master.index')->with('success','Data berhasil ditambahkan');
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
        $data=Kecakapan_olahraga_dan_beladiri::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_olahraga'=>'required'
        ]);
        
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        $data->update($request->all());
        return redirect()->route('master.index/'.$id)->with('success','Data berhasil ditambahkan');
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
        $data=Kecakapan_olahraga_dan_beladiri::findOrFail($id);
        $data->delete();
        return redirect()->route('master/',$id)->with('success','Data berhasil ditambahkan');
    }
}
