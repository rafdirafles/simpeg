<?php

namespace App\Http\Controllers\Setting;
use App\divisi;
use App\Unit_kerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $unit=Unit_kerja::all();
        $datas=Divisi::all();
        return view('Divisi.index',compact('datas','unit'));
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
        return view('Divisi.create',compact('datas'));
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
            'id_unit_kerja'=>'required|integer',
            'nama_devisi'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
        Divisi::create($request->all());
        return redirect()->route('divisi.index')->with("success","data berhasil di tambahkan");
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
        $unit=Unit_kerja::all();
        $datas=Divisi::findOrFail($id);
        return view('divisi.edit',compact('datas','unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data=Divisi::findOrFail($request->id);
        $this->validate($request,[
            'id_unit_kerja'=>'required|integer',
            'nama_devisi'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
       $data->update($request->all());
       return redirect()->route('divisi.index')->with("success","data berhasil di Edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data=Divisi::findOrFail($request->id);
        $data->delete();
        return redirect()->route('divisi.index')->with("success","data berhasil di Hapus");
    }
    public function getDivisi(){
        $data=Unit_kerja::all();
        return $data;
    }
}
