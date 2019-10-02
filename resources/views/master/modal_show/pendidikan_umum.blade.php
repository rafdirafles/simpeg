<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
                <th>No</th>
                <th>Jenjang Pendidikan</th>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Kota</th>
                <th>Tahun Lulus</th>
                <th>No. Ijazah</th>
                <th>File</th>
                <th width="10%">Aksi</th>
        </thead>
        <tbody>
                @php
                $no=1;
            @endphp
            @foreach ($p_umum as $umum)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$umum->jenjang_pendidikan}}</td>
                    <td>{{$umum->nama_sekolah}}</td>
                    <td>{{$umum->jurusan}}</td>
                    <td>{{$umum->kota}}</td>
                    <td>{{$umum->tahun_lulus}}</td>
                    <td>{{$umum->no_ijazah}}</td>
                    <td>{{$umum->file}}</td>
                    <td>
                        <a href="#" class="badge badge-success" data-jenjangpendidikan="{{$umum->jenjang_pendidikan}}" data-tahunlulus="{{$umum->tahun_lulus}}" data-jurusan="{{$umum->jurusan}}" data-kota="{{$umum->kota}}" data-tahunlulus="{{$umum->tahun_lulus}}" data-noijazah="{{$umum->no_ijazah}}" data-file="{{$umum->file}}" data-nipnrp="{{$umum->nip_nrp}}" data-id="{{$umum->id}}"  data-toggle="modal" data-target="#edit_pumum"><span class="fas fa-fw fa-edit"></span></a>
                        <button class="flaticon-delete" data-deletepumum={{$umum->id}} data-toggle="modal" data-target="#delete_pumum">Delete</button>
                    </td>
                </tr>
            @endforeach
            <button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#tambah_pumum" data-whatever="@mdo">
                    <i class="la la-plus"></i>
                    New Record
            </button>
        </tbody>
</table>
{{-- delete --}}
<div class="modal modal-danger fade" id="delete_pumum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('pendidikan_umum.destroy','test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            <div class="modal-body">
            <center><img src="{{asset('/img/police_stop.gif')}}" alt=""></center>
            <p class="text-center" style="color:red ">
            Are you sure you want to delete this?
            </p>
            <input type="hidden" name="id" id="delete_pumum" value="">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>
{{-- tambah_pumum --}}
<div class="modal fade" id="tambah_pumum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('pendidikan_umum.store')}}" method="post" enctype="multipart/form-data" name="registration">
                @csrf
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                    <select name="jenjang_pendidikan" id="" class="form-control" required>
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
                    <label for="message-text" class="form-control-label">Nama Sekolah *</label>
                    <input class="form-control" id="message-text" name="nama_sekolah" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jurusan </label>
                    <input class="form-control" id="message-text" name="jurusan" type="text">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Kota *</label>
                    <input class="form-control" id="message-text" name="kota" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                    <input type="number" class="form-control" name="tahun_lulus" id="message-text" required placeholder="exp:2019">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Nomer Ijazah * </label>
                    <input type="text" class="form-control" id="message-text" name="no_ijazah" required >
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">file </label>
                    <input class="form-control" id="message-text" type="file" name="file">
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
{{-- edit --}}
<div class="modal fade" id="edit_pumum" tabindex="-1" role="dialog" aria-labelledby="jdlpendidikanumum" aria-hidden="true">
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
    <input type="hidden" value="" name="nip_nrp" id="nipnrp">
    <input type="hidden" value="" name="id" id="id">
    <div class="form-group">
    <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
    <select name="jenjang_pendidikan" id="jenjangpendidikan" class="form-control" required>
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
    <label for="message-text" class="form-control-label">Nama Sekolah *</label>
    <input class="form-control" id="tahunlulus" name="nama_sekolah" type="text" required>
    </div>
    <div class="form-group">
    <label for="message-text" class="form-control-label">Jurusan</label>
    <input class="form-control" id="jurusan" name="jurusan" type="text">
    </div>
    <div class="form-group">
    <label for="message-text" class="form-control-label">Kota *</label>
    <input class="form-control" id="kota" name="kota" type="text" required>
    </div>
    <div class="form-group">
    <label for="message-text" class="form-control-label">Tahun Lulus *</label>
    <input type="number" class="form-control" name="tahun_lulus" id="tahunlulus" placeholder="exp:2019" required>
    </div>
    <div class="form-group">
    <label for="message-text" class="form-control-label">Nomer Ijazah *</label>
    <input type="text" class="form-control" id="noijazah" name="no_ijazah" required>
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
@section('asset-buttton')
<script>
        $('#pendidikanumum_edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var nipnrp = button.data('nipnrp')
            var jenjangpendidikan = button.data('jenjangpendidikan')
            var namasekolah = button.data('namasekolah')
            var jurusan = button.data('jurusan')
            var kota = button.data('kota')
            var tahunlulus = button.data('tahunlulus')
            var noijazah = button.data('noijazah')
            var id = button.data('id')
            var file = button.data('file')
            var modal = $(this)
            modal.find('.modal-body #jenjangpendidikan').val(jenjangpendidikan);
            modal.find('.modal-body #nipnrp').val(nipnrp);
            modal.find('.modal-body #namasekolah').val(namasekolah);
            modal.find('.modal-body #jurusan').val(jurusan);
            modal.find('.modal-body #kota').val(kota);
            modal.find('.modal-body #tahunlulus').val(tahunlulus);
            modal.find('.modal-body #noijazah').val(noijazah);
            modal.find('.modal-body #id').val(id);
            modal.find('img#file').attr('src', '<?php echo asset('img')?>/'+file);
        })
    </script>
    {{-- end --}}
    {{-- script delete --}}
    <script>
        $('#pendidikanumum_delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>
    {{-- end --}}
    {{-- script validation --}}
    <script>
        $(document).ready(function() {
            $("form[name='registration']").validate({
                rules: {
                    jenjang_pendidikan:"required",
                    nama_sekolah:"required",
                    kota:"required",

                    no_ijazah:"required",
                    tahun_lulus: {
                        required: true,
                        number: true
                    },
                },
                messages: {
                    jenjang_pendidikan:"Masukkan Jenjang Pendidikan",
                    nama_sekolah:"Masukkan Nama Sekolah",
                    kota:"Masukkan Nama Kota",
                    no_ijazah:"Masukkan No ijazah",
                    tahun_lulus: {
                        required: "Masukkan Jenjang Pendidikan",
                    },
                },
                submitHandler: function(form) {
                        form.submit();
                }
            });
        });
        // edit validation
        $(document).ready(function() {
            $(document).ready(function() {
                $("form[name='edit_form']").validate({
                    rules: {
                        jenjang_pendidikan:"required",
                        nama_sekolah:"required",
                        kota:"required",

                        no_ijazah:"required",
                        tahun_lulus: {
                            required: true,
                            number: true
                        },
                    },
                    messages: {
                        jenjang_pendidikan:"Masukkan Jenjang Pendidikan",
                        nama_sekolah:"Masukkan Nama Sekolah",
                        kota:"Masukkan Nama Kota",
                        no_ijazah:"Masukkan No ijazah",
                        tahun_lulus: {
                            required: "Masukkan Jenjang Pendidikan",
                        },
                    },
                    submitHandler: function(form) {
                            form.submit();
                    }
                });
            });
        });
    </script>
@endsection
  
    


