
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
                <td>No</td>
                <td>Nama Pendidikan</td>
                <td>Kota</td>
                <td>Tahun lulus</td>
                <td>Lama bulan</td>
                <td>Ranking</td>
                <td>Lulus/Tidak</td>
                <td>keterangan</td>
                <td>File</td>
                <td>action</td>
        </thead>
        <tbody>
                @php
                $no=1;
            @endphp
            @foreach ($p_kejuruan as $kejuruan)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$kejuruan->nama_pendidikan}}</td>
                <td>{{$kejuruan->kota}}</td>
                <td>{{$kejuruan->tahun_lulus}}</td>
                <td>{{$kejuruan->lama_bulan}}</td>
                <td>{{$kejuruan->rangking}}</td>
                <td>{{$kejuruan->is_lulus_tidak}}</td>
                <td>{{$kejuruan->keterangan}}</td>
                <td>{{$kejuruan->file}}</td>
                    <td>
                        <a class="badge badge-success" href="#modal-editkejuruan<?php echo $kejuruan->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span> Edit</a>
                        <a class="badge badge-danger" href="#modal-hapuskejuruan<?php echo $kejuruan->id?>" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span> Hapus</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
</table>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kejuruan">
        (+) TAMBAH
      </button>

{{-- edit --}}
@foreach ($p_kejuruan as $kejuruan)
<div class="modal fade" id="modal-editkejuruan<?= $kejuruan->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Kategori</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <form action="{{route('pendidikan_umum.update',$kejuruan->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
        {{method_field('patch')}}
        {{csrf_field()}}
        <div class="form-group">
                <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
        <input class="form-control" id="message-text" name="nama_pendidikan" value="{{$kejuruan->nama_pendidikan}}" type="text" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Kota *</label>
                <input class="form-control" id="message-text" name="kota" type="text" value="{{$kejuruan->kota}}" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                <input type="number" class="form-control" name="tahun_lulus" id="message-text" value="{{$kejuruan->tahun_lulus}}" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Lama Studi *</label>
                <input class="form-control" id="message-text" name="lama_bulan" type="number" value="{{$kejuruan->lama_bulan}}" required></input>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Ranking</label>
                <input class="form-control" id="message-text" name="ranking" type="number" value="{{$kejuruan->rangking}}" >
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Lulus / Tidak</label>
                <select required class="form-control kt-select2" id="kt_select2_1" name="is_lulus_tidak">
                        <option value="">select lulus</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Keterangan</label>
                <input class="form-control" id="message-text" name="keterangan" type="text" value="{{$kejuruan->keterangan}}"></input>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">file </label>
                <input class="form-control" id="message-text" type="file" name="file"></input>
            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Edit" />
        </div>
    </form>
    </div>
  </div>
</div>              
<?php endforeach;?>
{{-- end edit --}}

{{-- add --}}
<div class="modal fade" id="add_kejuruan">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kategori</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form action="{{route('pendidikan_umum.store')}}" method="post" enctype="multipart/form-data" name="registration">
                @csrf
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                    <select name="jenjang_pendidikan"  class="form-control" required>
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
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="SImpan" />
            </div>
      </form>
          </div>
        </div>
</div>
{{-- ednd --}}
{{-- hapus --}}
@foreach ($p_kejuruan as $kejuruan)
<div class="modal fade" id="modal-hapuskejuruan<?= $kejuruan->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Hapus Kejuruan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <form action="{{route('pendidikan_kejuruan.destroy',$kejuruan->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
    
      <div class="modal-body">
          <p>Apakah Anda Yakin Menghapus Data </strong>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Hapus" />
      </div>
    </form>
    </div>
  </div>
</div>              
<?php endforeach;?>

    


