@extends('layouts.admin.app')
@section('asset-top')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@endsection
@section('body')

<div class="row">
    <div class="col-md-6">
        <div class="card" style="margin-left:10px">
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                        <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Crud divisi
                    </div>
                </div>

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                Basic
                            </h3>
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
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;
                        {{-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            New Record
                        </a> --}}
                        <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-divisi"> New Record</a>
                    </div>
                </div>		</div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Unit Kerja</th>
                                    <th>Divisi</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!-- data form ajax -->
                            <tbody id="show_divisi">
                            </tbody>
                            <!--ende -->

                        </table>
                        <!--end: Datatable -->
                    </div>
                </div>	</div>
                <!-- end:: Content -->
        </div>
    </div>
    {{-- -------------------------------------------------table unit kerja------------------------------------------------------- --}}
    <div class="col-md-6">
        <div class="card" style="margin-left:10px">
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                        <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        Crud Unit Kerja
                    </div>
                </div>

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">

                            <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-unit_kerja"> New Record</a>
                    </div>
                </div>		</div>
                    </div>

                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
                        <!--end: Datatable -->
                    </div>
                </div>	</div>
                <!-- end:: Content -->
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
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan_divisi">Simpan</button>
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
                  <form data-toggle="validator" action="/divisi/" method="put">
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
                    <div class="form-group">
                            <button type="submit" class="btn btn-success edit-divisi">Submit</button>
                    </div>
                  </form>
            </div>
             <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------------------------------------------------------------------ end MODAL divisi ------------------------------------------>
<!-- MODAL ADD unit kerja -->
<div class="modal fade" id="modal-add-unit_kerja" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
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
                        <button class="btn btn-info" id="btn_simpan_unit_kerja">Simpan</button>
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
                      <form data-toggle="validator" action="/unit_kerja/" method="put">
                        <div class="form-group">
                                <label class="control-label" for="title">Nama Unit Kerja:</label>
                                <input type="text" name="nama_unit_kerja" class="form-control" data-error="Please enter nama unit kerja." required />
                                <p style="color:red"><div class="help-block with-errors"></div></p>
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success edit-unit_kerja">Submit</button>
                        </div>
                      </form>
                </div>
                 <!-- body modal -->
            </div>
        </div>
    </div>
    <!--end MODAL-->
<!-----------------------------------------------------------------  MODAL unit kerja ------------------------------------------>
<!------------------------------------------------------------------ end MODAL  ------------------------------------------>

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
                        rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-devisi" class="badge badge-success edit-item-devisi"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" class="badge badge-danger delete-divisi"><span class="fas fa-fw fa-trash"></button>';
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
        var url = 'divisi';
        $("body").on("click",".edit-item-devisi",function(){
            var id = $(this).parent("td").data('id');
            var unit_kerja= $(this).parent("td").prev("td").prev("td").text();
            var divisi = $(this).parent("td").prev("td").text();
            // $("#edit-item-devisi").find("input[name='title']").val(title);
            var selected;
            if(unit_kerja == "")
            $("#edit-item-devisi").find("select[name=id_unit_kerja]").val(2);
            // $("#id_unit_kerja").val(unit_kerja).change();
            // $('#id_unit_kerja  option[value="val2"]').prop("selected", true);

            $("#edit-item-devisi").find("input[name='nama_devisi']").val(divisi);
            $("#edit-item-devisi").find("form").attr("action",url + '/' + id);
            console.log(unit_kerja);
           
        });
        /* Updated  Post baru (Updated new Post) */
        $(".edit-divisi").click(function(e){
            e.preventDefault();
            var form_action = $("#edit-item-devisi").find("form").attr("action");
            var nama_devisi = $("#edit-item-devisi").find("input[name='nama_devisi']").val();
            var id_unit_kerja =  $("#edit-item-devisi").find("select[name=id_unit_kerja]").val();
            $.ajax({
                dataType: 'json',
                type:'PUT',
                url: form_action,
                data:{id_unit_kerja:id_unit_kerja,nama_devisi:nama_devisi},
            }).done(function(data){
                tampil_data_divisi();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
            // console.log(unit_kerja);
        })
        /* Remove Post (Hapus) */
        $("body").on("click",".delete-divisi",function(){
            var id = $(this).parent("td").data('id');
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'delete',
                url: url + '/' + id,
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_divisi();
            });
        });
    });
</script>
<!----------------------------------------------------------------- end divisi  ------------------------------------------>
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
                            rows = rows + '<a href="#" class="badge badge-danger delete-unit_kerja"><span class="fas fa-fw fa-trash"></button>';
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
                            $('#modal-add-unit_kerja').modal('hide');
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
            var url = 'unit_kerja';
            $("body").on("click",".edit-item-unit_kerja",function(){
                var id = $(this).parent("td").data('id');
                var unit_kerja = $(this).parent("td").prev("td").text();
                $("#edit-item-unit_kerja").find("input[name='nama_unit_kerja']").val(unit_kerja);
                $("#edit-item-unit_kerja").find("form").attr("action",url + '/' + id);
              
               
            });
            /* Updated  Post baru (Updated new Post) */
            $(".edit-unit_kerja").click(function(e){
                e.preventDefault();
                var form_action = $("#edit-item-unit_kerja").find("form").attr("action");
                var unit_kerja = $("#edit-item-unit_kerja").find("input[name='nama_unit_kerja']").val();
                $.ajax({
                    dataType: 'json',
                    type:'PUT',
                    url: form_action,
                    data:{nama_unit_kerja:unit_kerja,},
                }).done(function(data){
                   tampil_data_unit_kerja();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
                // console.log(unit_kerja);
            })
            /* Remove Post (Hapus) */
            $("body").on("click",".delete-unit_kerja",function(){
                var id = $(this).parent("td").data('id');
                var c_obj = $(this).parents("tr");
                $.ajax({
                    dataType: 'json',
                    type:'delete',
                    url: url + '/' + id,
                }).done(function(data){
                    c_obj.remove();
                    toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                   tampil_data_unit_kerja();
                });
            });
        });
    </script>
<!------------------------------------------------------------------ unit kerja  ------------------------------------------>
@endsection
