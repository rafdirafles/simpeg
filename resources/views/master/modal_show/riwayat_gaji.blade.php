
 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
            <th>No</th>
            <th>Gaji</th>
            <th>TMT</th>
            <th>Nomor SK</th>
            <th>Pejabat</th>
            <th>Tanggal SK</th>
            <th>Dasar Peraturan</th>
            <th width="10%">Aksi</th>
        </thead>
        <tbody>
          @php
            $no=1;
          @endphp
         @foreach ($r_gaji as $gaji)
         <tr>
             <td>{{$no++}}</td>
             <td>{{$gaji->gaji}}</td>
             <td>{{$gaji->tmt}}</td>
             <td>{{$gaji->nomor_sk}}</td>
             <td>{{$gaji->pejabat}}</td>
             <td>{{$gaji->tanggal_sk}}</td>
             <td>{{$gaji->dasar_peraturan}}</td>
             
            <td>
                <a class="badge badge-success" href="#modal-edit-gaji<?php echo $gaji->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                <a class="badge badge-danger" href="#modal-hapus-gaji<?php echo $gaji->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
            </td>
          </tr>
          @endforeach
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_gaji">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
    </table>
<!------------------------end table------------------------------>
<!------------------------edit------------------------------>
<?php $no=0; foreach($r_gaji as $x): $no++; ?>
<div class="modal fade" id="modal-edit-gaji<?= $x->id; ?>">
    <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">EDIT RIWAYAT GAJI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{route('riwayat_gaji.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
            {{method_field('patch')}}
            {{csrf_field()}}
            <input type="hidden" readonly value="{{$x->nip_nrp}}" name="nip_nrp" class="form-control" >
            <div class="form-group">
                <label for="message-text" class="form-control-label">Gaji *</label>
                <input class="form-control" id="message-text" value="{{$x->gaji}}" name="gaji" type="number" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">TMT *</label>
                <input class="form-control" id="message-text" value="{{$x->tmt}}" name="tmt" type="date" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Nomor SK *</label>
                <input type="text" class="form-control" value="{{$x->nomor_sk}}" name="nomor_sk" id="message-text" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Pejabat *</label>
                <input type="text" class="form-control" value="{{$x->pejabat}}" name="pejabat" id="message-text" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Tanggal SK</label>
                <input class="form-control" id="message-text" value="{{$x->tanggal_sk}}" name="tanggal_sk" type="date" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
                <input class="form-control" id="message-text" type="text" value="{{$x->dasar_peraturan}}" name="dasar_peraturan" required>
            </div>
        </div>
        {{-- end body --}}
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" id="submit" class="btn btn-primary" />
        </div>
    </form>
    </div>
    </div>
</div>              
<?php endforeach;?>
<!------------------------end edit------------------------------>

<!------------------------add data------------------------------>
<div class="modal fade" id="add_gaji">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">RIWAYAT GAJI</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
    <form action="{{route('riwayat_gaji.store')}}" method="post" name="registration">
        @csrf
        <input type="hidden" value="{{ $datas->nip_nrp}}" name="nip_nrp">
        <div class="form-group">
            <label for="message-text" class="form-control-label">Gaji *</label>
            <input class="form-control" id="message-text" name="gaji" type="number" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="form-control-label">TMT *</label>
            <input class="form-control" id="message-text" name="tmt" type="date" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="form-control-label">Nomor SK *</label>
            <input type="text" class="form-control" name="nomor_sk" id="message-text" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="form-control-label">Pejabat *</label>
            <input type="text" class="form-control" name="pejabat" id="message-text" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="form-control-label">Tanggal SK</label>
            <input class="form-control" id="message-text" name="tanggal_sk" type="date" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
            <input class="form-control" id="message-text" type="text" name="dasar_peraturan" required>
        </div>
        <!-- end body -->
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
<!------------------------end add------------------------------>

<!------------------------Hapus data------------------------------>
@foreach ($r_gaji as $gaji)
<div class="modal fade" id="modal-hapus-gaji<?= $gaji->id; ?>">
<div class="modal-dialog">
    <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">HAPUS DATA RIWAYAT GAJI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <form action="{{route('riwayat_gaji.destroy',$gaji->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-danger" />
        </div>
    </form>
    </div>
</div>
</div>    
@endforeach 
       <!------------------------end hapus------------------------------>
@section('asset-buttom')
      
@endsection
            