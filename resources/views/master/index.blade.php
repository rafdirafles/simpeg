<?php $master = 'kt-menu__item  kt-menu__item--rel kt-menu__item--here'; ?>

@extends('layouts.admin.app')
@section('body')

<a href="{{route('master.create')}}">add</a>




<table border="1">
    
        @foreach ($datas as $data)
        <tr>
            <td>{{$data->nama_pegawai}}</td>
            <td>{{$data->unit_kerja->nama_unit_kerja}}
        </tr>
        @endforeach
      
  
</table>









@endsection

@section('asset-buttom')
<script src="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable( {
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        } );
    } );
</script>

@endsection
