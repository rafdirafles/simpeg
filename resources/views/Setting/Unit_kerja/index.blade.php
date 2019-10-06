@extends('layouts.admin.app')
@section('asset-top')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
@endsection
@section('body')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">TABEL Unit Kerja</h3>
                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        <span class="kt-subheader__desc">MASTER DATA</span>
                            <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-unit-kerja"> Tambah Unit Kerja</a>
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
                            <h3 class="kt-portlet__head-title" style="margin-right:20px">Unit Kerja</h3>
                        </div>
                        <div class="ajax-loader">
                                <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <button href="#" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#modal-add-unit-kerja"><i class="la la-plus"></i> Tambah Unit Kerja</button>
                                    {{-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-unit_kerja"> New Record</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="kt-portlet__body">
                    <table class="table table-striped- table-bordered table-hover table-checkable " id="datatable">
                        <thead>
                                <tr>
                                        <th>No</th>
                                        <th>Nama Unit Kerja</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="show_unit_kerja">
                                </tbody >
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--  --}}
<!-- MODAL ADD unit kerja -->
<div class="modal fade" id="modal-add-unit-kerja" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Unit Kerja</h3>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Nama Unit Kerja :</label>
                            <input type="text" name="nama_unit_kerja" class="form-control" data-error="Please enter title." required />
                            <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary" id="btn_simpan_unit_kerja">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item-unit_kerja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" >
                        <input type="hidden" name="id">
                        <div class="form-group">
                                <label class="control-label" for="title">Nama Unit Kerja:</label>
                                <input type="text" name="nama_unit_kerja" class="form-control" data-error="Please enter nama unit kerja." required />
                                <p style="color:red"><div class="help-block with-errors"></div></p>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary edit-unit_kerja">Edit</button>
                        </div>
                    </form>

            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------------------------Hapus data------------------------------>
<div class="modal fade" id="hapus-unit-kerja">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form method="post">
                {{csrf_field()}}
                <input type="hidden" name="id_hapus">
                <div class="modal-body">
                    <p>Apakah Anda Yakin Menghapus Data </strong>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn-hapus-unit-kerja">Hapus</button>
                </div>
            </form>
            </div>
        </div>
    </div>              
    <!------------------------end hapus------------------------------>
<!-----------------------------------------------------------------  MODAL unit kerja ------------------------------------------>
@endsection
@section('asset-buttom')
<script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            tampil_data_unit_kerja();   //pemanggilan fungsi tampil barang.
            //fungsi tampil barang
            function tampil_data_unit_kerja(){
                $.ajax({
                    type  : 'GET',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url   : '/setting/unit_kerja/show',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var i;
                        var no=1;
                        var rows = '';
                        $.each( data, function( key, value ) {
                            rows = rows + '<tr>';
                            rows = rows + '<td>'+ no++ +'</td>';
                            rows = rows + '<td>'+value.nama_unit_kerja+'</td>';
                            rows = rows + '<td data-id="'+value.id+'">';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-unit_kerja" class="badge badge-success edit-item-unit_kerja"><span class="fas fa-fw fa-edit " ></a> ';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-unit-kerja" class="badge badge-danger delete-unit-kerja"><span class="fas fa-fw fa-trash"></button>';
                            rows = rows + '</td>';
                            rows = rows + '</tr>';
                        });
                        $('#show_unit_kerja').html(rows);
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            }
            //Simpan Barang
            $('#btn_simpan_unit_kerja').click(function(){
                var nama_unit_kerja=$("input[name=nama_unit_kerja]").val();
                event.preventDefault();
                    $.ajax({
                        type : "POST",
                        beforeSend: function(){
                            $('.ajax-loader').css("visibility", "visible");
                        },
                        url  : '{{route('unit_kerja.store')}}',
                        datatype:"html",
                        data : {nama_unit_kerja:nama_unit_kerja,_token: '{{csrf_token()}}' },
                        success: function(data){
                            $("input[name=nama_unit_kerja]").val("");
                            tampil_data_unit_kerja();
                            $('.modal').modal('hide');
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
          
            $("body").on("click",".edit-item-unit_kerja",function(){
                var id = $(this).parent("td").data('id');
                var unit_kerja = $(this).parent("td").prev("td").text();
                $("#edit-item-unit_kerja").find("input[name='nama_unit_kerja']").val(unit_kerja);
                $("#edit-item-unit_kerja").find("input[name='id']").val(id);
               
               
            });
            /* Updated  Post baru (Updated new Post) */
            $(".edit-unit_kerja").click(function(e){
                e.preventDefault();
                var id =   $("#edit-item-unit_kerja").find("input[name='id']").val();
                var unit_kerja = $("#edit-item-unit_kerja").find("input[name='nama_unit_kerja']").val();
                $.ajax({
                    dataType: 'json',
                    type:'POST',
                    url: '{{route('unit_kerja.update')}}',
                    data:{id:id,nama_unit_kerja:unit_kerja,_token: '{{csrf_token()}}'},
                }).done(function(data){
                   tampil_data_unit_kerja();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
                // console.log(unit_kerja);
            })
            // klik delete
            $("body").on("click",".delete-unit-kerja",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-unit-kerja").find("input[name='id_hapus']").val(id);
            
            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-unit-kerja").click(function(e){
                event.preventDefault();
            var id = $("#hapus-unit-kerja").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('unit_kerja.delete')}}',
                
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_unit_kerja();
                  $(".modal").modal('hide');
            });
            });
        });
    </script>
@endsection