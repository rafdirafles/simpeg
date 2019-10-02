@extends('layouts.admin.app')

@section('body')
    @include('master.modal_show.pendidikan_kejuruan')
    @include('master.modal_show.pendidikan_umum')
    @include('master.modal_show.keluarga')
    @include('master.modal_show.kecakapan_bahasa')
    @include('master.modal_show.kecakapan_olahraga');
@endsection

@section('asset-buttom')
    <script>
        
    </script>
@endsection