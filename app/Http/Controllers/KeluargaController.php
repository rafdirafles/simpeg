<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Data_keluarga;
class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=user::all();
        return view('Keluarga.index',compact('datas'));

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
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'hubungan_keluarga'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'status_hidup'=>'required',
            'pekerjaan'=>'required',
           
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        Data_keluarga::create($request->all());
        return back()->with('success','Data berhasil di tambahkan');
       
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
        
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'hubungan_keluarga'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'status_hidup'=>'required',
            'pekerjaan'=>'required',
           
        ]);
        $data=Data_keluarga::findOrfail($id);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        $data->update($request->all());
        return back()->with('success','Data berhasil di edit');
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
        $data=Data_keluarga::findOrFail($id);
        $data->delete();
        return back()->with('success','Data berhasil di delete');
    }
}
