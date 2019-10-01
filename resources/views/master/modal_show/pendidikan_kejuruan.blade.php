<h2>Pendidikan Kejuruan</h2>
<div class="kt-container  kt-grid__item kt-grid__item--fluid">

</div>
<table border="1">
    <tr>
        <td>Nama Pendidikan</td>
        <td>Kota</td>
        <td>Tahun lulus</td>
        <td>Lama bulan</td>
        <td>Ranking</td>
        <td>Lulus/Tidak</td>
        <td>keterangan</td>
        <td>File</td>
        <td>action</td>
    </tr>
    @foreach ($p_kejuruan as $kejuruan)
        <tr>
        <td>{{$kejuruan->nama_pendidikan}}</td>
        <td>{{$kejuruan->kota}}</td>
        <td>{{$kejuruan->tahun_lulus}}</td>
        <td>{{$kejuruan->lama_bulan}}</td>
        <td>{{$kejuruan->rangking}}</td>
        <td>{{$kejuruan->is_lulus_tidak}}</td>
        <td>{{$kejuruan->keterangan}}</td>
        <td>{{$kejuruan->file}}</td>
        <td>
            <a href="#" class="flaticon-delete" data-id={{$kejuruan->id}} data-toggle="modal" data-target="#pendidikanumum_delete"></a>
            <a href="#" class="flaticon-edit" data-namapendidikan="{{$kejuruan->nama_pendidikan}}" data-kota="{{$kejuruan->kota}}" data-tahunlulus="{{$kejuruan->tahun_lulus}}" data-kota="{{$kejuruan->lama_bulan}}" data-tahunlulus="{{$kejuruan->rangking}}" data-lulustidak="{{$kejuruan->is_lulus_tidak}}" data-file="{{$kejuruan->keterangan}}" data-file="{{$kejuruan->file}}" data-file="{{$kejuruan->nip_nrp}}" data-id="{{$kejuruan->id}}"  data-toggle="modal" data-target="#pendidikanumum_edit"></a>
            {{-- <a href="#" class="flaticon-plus" data-toggle="modal" data-target="#pendidikankejuruan"></a> --}}

        </tr>
    @endforeach
</table>
<button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kejuruan" data-whatever="@mdo">
        <i class="la la-plus"></i>
        New Record
</button>
 <!-- Modal kejuruan-->
 <div class="modal fade" id="kejuruan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('pendidikan_kejuruan.store')}}" method="post">
                  @csrf

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan</label>
                            <input class="form-control" id="message-text" name="nama_pendidikan" type="text"></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Kota</label>
                            <input class="form-control" id="message-text" name="kota" type="text"></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Lulus</label>
                            <input type="date" class="form-control" name="tahun_lulus"id="message-text">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Studi </label>
                            <input class="form-control" id="message-text" name="lama_bulan"type="text"></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Ranking</label>
                            <input class="form-control" id="message-text" name="ranking"type="text"></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lulus / Tidak</label>
                            <select class="form-control kt-select2" id="kt_select2_1" name="is_lulus_tidak">
                                    <option value="">select lulus</option>
                                    <!-- @foreach ($datas as $data) -->
                                    <option value=""></option>
                                    <!-- @endforeach -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" id="message-text" name="keterangan" type="text"></input>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" id="message-text" type="file" name="file"></input>
                    </form>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
<!-- Selesai -->
{{-- modal edit --}}
<div class="modal fade" id="pendidikanumum_edit" tabindex="-1" role="dialog" aria-labelledby="jdlpendidikanumum" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="jdlpendidikanumum">EDIT PENDIDIKAN UMUM</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pendidikan_umum.update','test')}}" name="edit_form" method="post" enctype="multipart/form-data">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" value="" name="nip_nrp" id="file">
                    <input type="hidden" value="" name="id" id="id">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Jenjang Pendidikan</label>
                        <select name="jenjang_pendidikan" id="namapendidikan" class="form-control">
                            <option value="">Pilih jenjang pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SLTA">SLTP</option>
                            <option value="SLTA">SLTA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Sekolah</label>
                        <input class="form-control" id="kota" name="nama_sekolah" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">tahunlulus</label>
                        <input class="form-control" id="tahunlulus" name="tahunlulus" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Kota</label>
                        <input class="form-control" id="kota" name="kota" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun Lulus</label>
                        <input type="text" class="form-control" name="tahun_lulus" id="tahunlulus" placeholder="exp:2019">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nomer Ijazah </label>
                        <input type="text" class="form-control" id="lulustidak" name="no_ijazah" >
                    </div>
                    <div class="form-group">
                        <img src="" alt="kkk" id="file" width="40%"><br>
                        <label for="message-text" class="form-control-label">file </label>
                        <input class="form-control" type="file" name="file">
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end edit --}}
<div class="modal modal-danger fade" id="pendidikanumum_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form  action="{{route('pendidikan_kejuruan.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            <div class="modal-body">
                <input type="hidden" name="id" id="id" value="">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
    </div>
    </div>
</div>
@section('asset-buttom')
<script>
<script>
        $('#pendidikanumum_delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>
</script>
@endsection


