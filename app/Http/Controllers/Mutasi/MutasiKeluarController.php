<?php

namespace App\Http\Controllers\Mutasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\mutasi_keluar;
use App\User;

class MutasiKeluarController extends Controller
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
            'tempat_tujuan'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'tmt'=>'required',

        ]);
        $data=mutasi_keluar::create($request->all());
        $user=User::findOrFail($request->nip_nrp);
        $user->update([
            'is_status'=>'0',
        ]);
        return Response()->json($data);
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
        $data=mutasi_keluar::where('nip_nrp',$id)->get();
        return Response()->json($data);
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
    public function update(Request $request)
    {
        //
        $id=$request->id;
        $data=mutasi_keluar::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'tempat_tujuan'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'tmt'=>'required',
        ]);
        $data->update($request->all());
        return Response()->json($data);
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
        $id=$request->id;
        $data=mutasi_keluar::findOrFail($id);
        $data->delete();
        return Response()->json($data);

    }
}
