<?php

namespace App\Http\Controllers;

use App\Pendidikan_polri;
use Illuminate\Http\Request;

class PendidikanPolriController extends Controller
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
            'nama_pendidikan'=>'required',
            'tahun'=>'required',
            'lama_bulan'=>'required',
            'rangking'=>'required',
            'lulus_tidak'=>'required',
            'file' =>'file|max:2048|',
        ]);
        if(empty($request->file('file'))){
            $nama_file='-';
        }
        else{
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'img';
            $file->move($tujuan_upload,$nama_file);
        }
        Pendidikan_polri::create([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'tahun'=>$request->tahun,
            'lama_bulan'=>$request->lama_bulan,
            'lulus_tidak'=>$request->lulus_tidak,
            'rangking'=>$request->rangking,
            'file' =>$nama_file,
        ]);
        return back()->with('success','data pendidikan berhasil ditambahkan');
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
        $data=Pendidikan_polri::findOrFail($id);
        $file = $request->file('file');
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_pendidikan'=>'required',
            'tahun'=>'required',
            'lama_bulan'=>'required',
            'rangking'=>'required',
            'lulus_tidak'=>'required',
            'file' =>'file|max:2048|mimes:pdf',
        ]);
        if(empty($request->file('file'))){
            $nama_file='-';
        }
        else{
            if(!$data->file == '-'){
                $image_path = public_path().'/img/'.$data->file;
                unlink($image_path);
            }
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'img';
            $file->move($tujuan_upload,$nama_file);
        }
        $data->update([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'tahun'=>$request->tahun,
            'lama_bulan'=>$request->lama_bulan,
            'rangking'=>$request->rangking,
            'lulus_tidak'=>$request->lulus_tidak,
            'file' =>$nama_file,
        ]);
        return back()->with('success','data pendidikan berhasil diedit');
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
        $data=Pendidikan_polri::findOrFail($id);
        $data->delete();
        return back()->with('success','data pendidikan berhasil dihapus');
    }
}
