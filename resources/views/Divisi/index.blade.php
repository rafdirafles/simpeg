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
                        <h3 class="kt-subheader__title">TABEL Divisi</h3>
                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        <span class="kt-subheader__desc">MASTER DATA</span>
                            <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-divisi"> Tambah Divisi</a>
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
                            <h3 class="kt-portlet__head-title" style="margin-right:20px">Divisi</h3>
                        </div>
                        <div class="ajax-loader">
                                <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <button href="#" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#modal-add-divisi"><i class="la la-plus"></i> Tambah Divisi</button>
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
                                    <th>Divisi</th>
                                    <th>Actions</th>
                                </tr>
                        </thead>
                            @php
                            $no=1;
                            @endphp
                        <!-- data form ajax -->
                        <tbody id="show_divisi">
                            </tbody>
                        <!--ende -->
                    </table>
                </div>
            </div>
        </div>
    </div>

<!------------------------------------------------------------------- MODAL divisi ------------------------------------------>
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-divisi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="myModalLabel">Tambah Divisi</h3>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label" for="title">Nama Unit Kerja :</label>
                        <select name="id_unit_kerja" class="form-control"  data-error="Please enter unit kerja." required>
                            <option value="">Pilih Unit Kerja</option>
                            @foreach ($unit as $data)
                                <option value="{{$data->id}}">{{$data->nama_unit_kerja}}</option>
                            @endforeach
                        </select>
                        <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                    <div class="form-group">
                            <label class="control-label" for="title">Divisi :</label>
                            <input type="text" name="nama_devisi" class="form-control" data-error="Please enter title." required />
                            <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn_simpan_divisi">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item-devisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <form data-toggle="validator" method="post">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label class="control-label" for="title">Nama Unit Kerja :</label>
                        <select name="id_unit_kerja" id="id_unit_kerja" class="form-control"  data-error="Please enter unit kerja." required>
                            <option value="">Pilih Unit Kerja</option>
                            @foreach ($unit as $data)
                                <option value="{{$data->id}}">{{$data->nama_unit_kerja}}</option>
                            @endforeach
                        </select>
                        <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">Divisi :</label>
                        <input type="text" name="nama_devisi" class="form-control" data-error="Please enter title." required />
                        <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary edit-divisi">Edit</button>
                    </div>
                </form>
            </div>
            <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------------------------Hapus data------------------------------>
<div class="modal fade" id="hapus-divisi">
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
                <button class="btn btn-primary" id="btn_hapus_divisi">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>              
<!------------------------end hapus------------------------------>
<!------------------------------------------------------------------ end MODAL divisi ------------------------------------------>


<script>
     var dataUnit='<?php echo $unit?>'
</script>

@endsection

@section('asset-buttom')
<!------------------------------------------------------------------ divisi  ------------------------------------------>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        tampil_data_divisi();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_data_divisi(){
            $.ajax({
                type  : 'GET',
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url   : '/setting/divisi/show',
                async : true,
                dataType : 'json',
                success : function(data){
                    var i;
                    var no=1;
                    var rows = '';
                    $.each( data, function( key, value ) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+ no++ +'</td>';
                        rows = rows + '<td>'+value.unit_kerja.nama_unit_kerja+'</td>';
                        rows = rows + '<td>'+value.nama_devisi+'</td>';
                        rows = rows + '<td style="display:none;">'+value.id_unit_kerja+'</td>';
                        rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-devisi" class="badge badge-success edit-item-devisi"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-divisi" class="badge badge-danger delete-divisi"><span class="fas fa-fw fa-trash"></button>';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    });
                    $('#show_divisi').html(rows);
                },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            });
        }
        //Simpan Barang
        $('#btn_simpan_divisi').click(function(){
            var nama_devisi=$("input[name=nama_devisi]").val();
            var id_unit_kerja=$("select[name=id_unit_kerja]").val();
            event.preventDefault();
                $.ajax({
                    type : "POST",
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url  : '{{route('divisi.store')}}',
                    datatype:"html",
                    data : {id_unit_kerja:id_unit_kerja,nama_devisi:nama_devisi,_token: '{{csrf_token()}}' },
                    success: function(data){
                        $("input[name=nama_devisi]").val("");
                        $("select[name=id_unit_kerja]").val("");
                        tampil_data_divisi();
                        $('#modal-add-divisi').modal('hide');
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
      
        $("body").on("click",".edit-item-devisi",function(){
            var id = $(this).parent("td").data('id');
            var unit_kerja =  $(this).parent("td").prev("td").prev("td").prev("td").text();
            var divisi = $(this).parent("td").prev("td").prev("td").text();
            var z= $(this).parent("td").prev("td").text();
            //
            var i;
            var x= document.getElementById("id_unit_kerja");
                for(i=0; i<x.options.length;i++){
                    if(x.options[i].value == z){
                        $("#edit-item-devisi").find("select[name=id_unit_kerja]").val(z);
                    }
                    else{
                        $("#edit-item-devisi").find("select[name=id_unit_kerja]").val();

                    }
                }
            $("#edit-item-devisi").find("input[name='nama_devisi']").val(divisi);
            $("#edit-item-devisi").find("input[name='id']").val(id);
            
        });
        /* Updated  Post baru (Updated new Post) */
        $(".edit-divisi").click(function(e){
            e.preventDefault();
            var id = $("#edit-item-devisi").find("input[name='id']").val();
            var nama_devisi = $("#edit-item-devisi").find("input[name='nama_devisi']").val();
            var id_unit_kerja =  $("#edit-item-devisi").find("select[name=id_unit_kerja]").val();
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('divisi.update')}}',
                data:{id:id,id_unit_kerja:id_unit_kerja,nama_devisi:nama_devisi,_token: '{{csrf_token()}}'},
            }).done(function(data){
                tampil_data_divisi();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
            // console.log(unit_kerja);
        })
        // ketika delete button
        $("body").on("click",".delete-divisi",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-divisi").find("input[name='id_hapus']").val(id);
           
        });
        /* Remove Post (Hapus) */
        $("#btn_hapus_divisi").click(function(e){
            e.preventDefault();
            var id = $("#hapus-divisi").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('divisi.delete')}}',
                data:{id:id,_token: '{{csrf_token()}}'},
                success: function(data){    
                    $(".modal").modal('hide');
                }
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_divisi();
            });
        });
    });
</script>
@endsection
