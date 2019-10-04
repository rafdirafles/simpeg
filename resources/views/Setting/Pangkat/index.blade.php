@extends('layouts.admin.app')
@section('asset-top')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

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
                        <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-pangkat"> Tambah Pangkat</a>
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
                    <div class="ajax-loader">
                            <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
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
                                <button href="#" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#modal-add-pangkat"><i class="la la-plus"></i> Tambah Pangkat</button>
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
               
                <h3 class="modal-title" id="myModalLabel">Tambah Pangkat</h3>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Nama Pangkat :</label>
                            <input type="text" name="nama_pangkat" class="form-control" data-error="Please enter title." required />
                            <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan_pangkat">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                  <form data-toggle="validator" action="/pangkat/" method="put">
                      <div class="form-group">
                          <label class="control-label" for="title">Nama Pangkat *:</label>
                          <input type="text" name="nama_pangkat" class="form-control" data-error="Please enter title." required />
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                      </div>
                  </form>
            </div>
             <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
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
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url   : '/setting/pangkat/show',
                async : true,
                dataType : 'json',
                success : function(data){
                    var i;
                    var no=1;
                    var rows = '';
                    $.each( data, function( key, value ) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+ no++ +'</td>';
                        rows = rows + '<td>'+value.nama_pangkat+'</td>';
                        rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item" class="badge badge-success edit-item"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" class="badge badge-danger remove-item"><span class="fas fa-fw fa-trash"></button>';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    });
                    $('#show_pangkat').html(rows);
                },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            });
        }
        //Simpan Barang
        $('#btn_simpan_pangkat').click(function(){
            var nama_pangkat=$("input[name=nama_pangkat]").val();
            event.preventDefault();
                $.ajax({
                    type : "POST",
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url  : '{{route('pangkat.store')}}',
                    datatype:"html",
                    data : {nama_pangkat:nama_pangkat,_token: '{{csrf_token()}}' },
                    success: function(data){
                        $("input[name=nama_pangkat]").val("");
                        tampil_data_barang();
                        $('#modal-add-pangkat').modal('hide');
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                            alert("Mohon Data Masukkan Dengan Tepat");
                        },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                }).done(function(data){
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
        });
        /* Edit Post */
        var url = 'pangkat';
        $("body").on("click",".edit-item",function(){
            var id = $(this).parent("td").data('id');
            var nama_pangkat = $(this).parent("td").prev("td").text();
            // $("#edit-item").find("input[name='title']").val(title);
            $("#edit-item").find("input[name='nama_pangkat']").val(nama_pangkat);
            $("#edit-item").find("form").attr("action",url + '/' + id);
        });
        /* Updated  Post baru (Updated new Post) */
        $(".crud-submit-edit").click(function(e){
            e.preventDefault();
            var form_action = $("#edit-item").find("form").attr("action");
            var nama_pangkat = $("#edit-item").find("input[name='nama_pangkat']").val();
            $.ajax({
                dataType: 'json',
                type:'PUT',
                url: form_action,
                data:{nama_pangkat:nama_pangkat,},
            }).done(function(data){
                tampil_data_barang();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
        })
        /* Remove Post (Hapus) */
        $("body").on("click",".remove-item",function(){
            var id = $(this).parent("td").data('id');
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'delete',
                url: url + '/' + id,
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_barang();
            });
        });
    });
</script>
@endsection
