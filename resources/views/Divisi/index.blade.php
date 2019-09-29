

@extends('layouts.admin.app')

@section('asset-top')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('body')

@if ($succes = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <div class="alert-text">{{$succes}}</div>
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif
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
                        <button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                <i class="la la-plus"></i>
                                New Record
                        </button>
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
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->unit_kerja->nama_unit_kerja}}</td>
                                        <td>{{$data->nama_devisi}}</td>
                                        <td>
                                            <button class="flaticon-edit" data-mytitle="{{$data->nama_devisi}}" data-mydescription="{{$data->id_unit_kerja}}" data-catid={{$data->id}} data-toggle="modal" data-target="#edit">Edit</button>
                                            {{-- <a href="{{route('divisi.edit',$data->id)}}" class="btn-primary btn-sm">edit</a> --}}
                                            <button class="flaticon-delete" data-catid={{$data->id}} data-toggle="modal" data-target="#delete">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!--end: Datatable -->
                    </div>
                </div>	</div>
                <!-- end:: Content -->
        </div>
    </div>

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

                                <button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#add" data-whatever="@mdo">
                                        <i class="la la-plus"></i>
                                        New Record
                                </button>
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
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($unit as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama_unit_kerja}}</td>
                                            <td>
                                                <button class="flaticon-edit" data-mytitle="{{$data->nama_unit_kerja}}" data-mydescription="" data-catid={{$data->id}} data-toggle="modal" data-target="#edit_unit_kerja">Edit</button>
                                                <button class="flaticon-delete" data-catid={{$data->id}} data-toggle="modal" data-target="#delete_unit_kerja">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div>	</div>
                    <!-- end:: Content -->
            </div>
        </div>

</div>


{{-- modal add --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('divisi.store')}}" method="post">
                  @csrf
                <div class="form-group">
                  <label class="">Unit kerja</label>
                  <select class="form-control @error('id_unit_kerja') is-invalid @enderror" value="{{ old('id_unit_kerja') }}" name="id_unit_kerja" id="sel1">
                      <option>select unit kerja</option>
                      @foreach ($unit as $data)
                          <option value="{{$data->id}}">{{$data->nama_unit_kerja}}</option>
                      @endforeach
                  </select>
                      @error('id_unit_kerja')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                </div>
                <div class="form-group">
                  <label class="">Nama Divisi</label>
                  <input type="tetx" name="nama_devisi" class="form-control @error('nama_devisi') is-invalid @enderror" value="{{ old('nama_devisi') }}" placeholder="Masukkan unit kerja exp:siak">
                  @error('nama_devisi')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
{{-- delete modal --}}
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('divisi.destroy','test')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                    <input type="hidden" name="id" id="cat_id" value="">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
    </div>
    </div>
</div>
{{-- edit modal --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
        </div>
        <form action="{{route('divisi.update','test')}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
            <div class="modal-body">
                <input type="hidden" name="id" id="cat_id" value="">
                <div class="form-group">
                    <label for="title">Nama divisi</label>
                    <input type="text" class="form-control @error('nama_devisi') is-invalid @enderror" value="{{ old('nama_devisi') }}" name="nama_devisi" id="title">
                    @error('nama_devisi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label>Unit Kerja</label>
                <select class="form-control unit_kerja" name="id_unit_kerja" required>
                    <option value="">No Selected</option>
                </select>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
    </div>
</div>
{{-- end modal divisi --}}

{{-- begin modal unit kerja --}}
{{-- add modal --}}
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Unit Kerja</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('unit_kerja.store')}}" method="post">
                  @csrf

                <div class="form-group">
                  <label class="">Nama Unit Kerja</label>
                  <input type="tetx" name="nama_unit_kerja" class="form-control @error('nama_unit_kerja') is-invalid @enderror" value="{{ old('nama_unit_kerja') }}" placeholder="Masukkan unit kerja exp:Bindik" required>
                  @error('nama_unit_kerja')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
{{-- delete modal --}}
<div class="modal modal-danger fade" id="delete_unit_kerja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('unit_kerja.destroy','test')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                    <input type="hidden" name="id" id="cat_id" value="">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
    </div>
    </div>
</div>
{{-- edit modal --}}
<div class="modal fade" id="edit_unit_kerja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
        </div>
        <form action="{{route('unit_kerja.update','test')}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
            <div class="modal-body">
                <input type="hidden" name="id" id="cat_id" value="">
                <div class="form-group">
                    <label for="title">Nama Unit Kerja</label>
                    <input type="text" class="form-control @error('nama_unit_kerja') is-invalid @enderror" value="{{ old('nama_unit_kerja') }}" name="nama_unit_kerja" id="title">
                    @error('nama_unit_kerja')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
@section('asset-buttom')
    <script>
         $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
    <script>
     $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var cat_id = button.data('catid')
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
      console.log('cat_id')
     })
    </script>
    <script>
    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var title = button.data('mytitle')
        var description = button.data('mydescription')
        var cat_id = button.data('catid')
        var modal = $(this)
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #selection').val(description);
        modal.find('.modal-body #cat_id').val(cat_id);
        $.ajax({
            url : "{{route('getDivisi')}}",
            method : "get",
            async : true,
            dataType : 'json',
            success : function(data){
                $('select[name="id_unit_kerja"]').empty();
                $.each(data, function(key, value) {
                    if(description==value.id){
                        $('select[name="id_unit_kerja"]').append('<option value="'+ value.id +'" selected>'+ value.nama_unit_kerja +'</option>');
                    }else{
                        $('select[name="id_unit_kerja"]').append('<option value="'+ value.id +'">'+ value.nama_unit_kerja +'</option>');
                    }
                });

            }
        });
    })
    </script>
    @error('nama_devisi')
     <script>
     $(document).ready(function(){
         $('#edit').modal({show: true});
     })

     $(document).ready(function () {
            var lama="<?php echo old('nama_devisi')?>"
            $("#title").val(lama);
        })
     </script>

    @enderror

    {{-- begin modal unit kerja --}}
    <script>
            $('#edit_unit_kerja').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var title = button.data('mytitle')
                var cat_id = button.data('catid')
                var modal = $(this)
                modal.find('.modal-body #title').val(title);
                modal.find('.modal-body #cat_id').val(cat_id);
            })
    </script>
    <script>
        $('#delete_unit_kerja').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var cat_id = button.data('catid')
        var modal = $(this)
        modal.find('.modal-body #cat_id').val(cat_id);
        console.log('cat_id')
     })
    </script>
@endsection
