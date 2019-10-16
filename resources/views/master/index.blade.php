@extends('layouts.admin.app')

@section('asset-top')

@endsection
@section('body')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
<!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

            <h3 class="kt-subheader__title">TABEL PEGAWAI</h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <span class="kt-subheader__desc">MASTER DATA</span>
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
                    <h3 class="kt-portlet__head-title" style="margin-right:20px">Tabel Pegawai</h3>
                </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i> Import
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
                            <a href="{{route('master.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>New Record
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="kt-portlet__body">
        <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                <thead>
                    <tr>

                        <th>Nama</th>
                        <th>NIP/NRP</th>
                        <th>Email</th>
                        <th>Jenis Pegawai</th>
                        <th>No KTA Pegawai</th>
                        <th>No hp</th>
                        <th>Agama</th>
                        <th>actions</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($datas as $data)
                    <tr>

                        <td>{{$data->nama_pegawai}}</td>
                        <td>{{$data->nip_nrp}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->jenis_pegawai}}</td>
                        <td>{{$data->no_kta_pegawai}}</td>
                        <td>{{$data->no_hp}}</td>
                        <td>{{$data->agama}}</td>
                        {{-- <td>
                            @foreach ($data->data_keluarga as $item)
                                {{$item->nama}}<br>
                            @endforeach
                        </td> --}}
                        <td>
                        <a class="flaticon-folder-1" href="{{route('master.show',$data->nip_nrp)}}" ></a>
                        <a class="flaticon-edit" href="{{route('master.edit_pegawai',$data->nip_nrp)}}" ></a>
                        <a href="#" class="flaticon-delete" data-catid={{$data->nip_nrp}} data-toggle="modal" data-target="#delete"></a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        <!--end: Datatable -->
        </div>
        </div>
    </div>
    </div>
</div>

{{-- hapus --}}
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form action="{{route('master.destroy','test')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="modal-body">
                        <p>Apakah Anda Yakin Menghapus Data </strong>
                    </div>
                    <input type="hidden" name="id" id="cat_id" value="">
                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-hapus-pendidikan-non-formal">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('asset-buttom')
 <script src="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
 {{-- <script src="{{ asset('template/assets/js/pages/crud/datatables/data-sources/html.js')}}" type="text/javascript"></script> --}}

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            responsive: true
        });
    } );
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
@endsection
