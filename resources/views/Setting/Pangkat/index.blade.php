@extends('layouts.admin.app')
@section('asset-top')
   
@endsection
@section('body')
<!-- tabel mulai -->
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-container ">
                        <div class="kt-subheader__main">

                        <h3 class="kt-subheader__title">TABEL PANGKAT</h3>

                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                        <span class="kt-subheader__desc">MASTER DATA</span>
                            <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-pangkat"> Tambah Barang</a>
                        </div>
                    </div>
                </div>
            <!-- end:: Content Head -->
            <!-- begin:: Content -->
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span>
                                <h3 class="kt-portlet__head-title" style="margin-right:20px">Pangkat</h3>
                            </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-download"></i> Export
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="kt-nav">
                                                        <li class="kt-nav__section kt-nav__section--first">
                                                            <span class="kt-nav__section-text">Choose an option</span>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon la la-print"></i><span class="kt-nav__link-text">Print</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon la la-copy"></i><span class="kt-nav__link-text">Copy</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon la la-file-excel-o"></i><span class="kt-nav__link-text">Excel</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon la la-file-text-o"></i><span class="kt-nav__link-text">CSV</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i><span class="kt-nav__link-text">PDF</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="#" cclass="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#modal-add-pangkat"><i class="la la-plus"></i> Tambah Barang</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <div class="kt-portlet__body">
                        <table class="table table-striped- table-bordered table-hover table-checkable " id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pangkat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                                    @php
                                    $no=1;
                                    @endphp
                                  
                            <tbody id="show_pangkat">
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
</div>
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-pangkat" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title" id="myModalLabel">Tambah Pangkat</h3>
        </div>
        <form class="form-horizontal">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Pangkat*</label>
                    <input class="form-control" required id="message-text" name="nama_pangkat" type="text"></input>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-info" id="btn_simpan_pangkat">Simpan</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <!--END MODAL ADD-->
@endsection

@section('asset-buttom')
<script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            tampil_data_barang();   //pemanggilan fungsi tampil barang.
                //fungsi tampil barang
            function tampil_data_barang(){
                    $.ajax({
                        type  : 'GET',
                        url   : '/setting/pangkat/show',
                        async : true,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr>'+
                                        '<td>'+data[i].nama_pangkat+'</td>'+
                                        '<td style="text-align:right;">'+
                                            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_pangkat').html(html);
                               
                        },
                        
                   
    
                });
            }


            //Simpan Barang
            $('#btn_simpan_pangkat').click(function(){
                var nama_pangkat=$("input[name=nama_pangkat]").val();
                event.preventDefault();
                    $.ajax({
                    type : "POST",
                    url  : '{{route('pangkat.store')}}',
                    datatype:"html",
                    data : {nama_pangkat:nama_pangkat,_token: '{{csrf_token()}}' },
                    success: function(data){
                        $("input[name=nameGoesHere]").val("");
                        tampil_data_barang();
                        $('#modal-add-pangkat').modal('hide');
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                    alert(xhr.status);
                },
                });
                return false;
                
            });
    
        });
    </script>
@endsection