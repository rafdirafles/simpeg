@extends('layouts.admin.app')

@section('body')
    <h3>kejuruan</h3>
    @include('master.modal_show.pendidikan_kejuruan')
    <h3>pendidikan umum</h3>
    @include('master.modal_show.pendidikan_umum')
    <h3>keluarga</h3>
    @include('master.modal_show.keluarga')
    <h3>keckapan bahasa</h3>
    @include('master.modal_show.kecakapan_bahasa')
    <h3>olahraga</h3>
    @include('master.modal_show.kecakapan_olahraga');
    <h3>brevet</h3>
    @include('master.modal_show.kecakapan_brevet');
    <h3>tanda jasa</h3>
    @include('master.modal_show.tanda_jasa');
    <h3>pendidikan polri</h3>
    @include('master.modal_show.pendidikan_polri');
    <h3>Riwayat Gaji</h3>
    @include('master.modal_show.riwayat_gaji');
@endsection

@section('asset-buttom')
   
@endsection