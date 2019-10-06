@extends('layouts.admin.app')

@section('body')
    {{-- <h3>kejuruan</h3>
    @include('master.modal_show.pendidikan_kejuruan')
    <h3>pendidikan umum</h3>
    @include('master.modal_show.pendidikan_umum')
    <h3>keluarga</h3>
    @include('master.modal_show.keluarga')
    <h3>keckapan bahasa</h3>
    @include('master.modal_show.kecakapan_bahasa')
    <h3>olahraga</h3>
    @include('master.modal_show.kecakapan_olahraga');
    <h3>brevet</h3>
    @include('master.modal_show.kecakapan_brevet');
    <h3>tanda jasa</h3>
    @include('master.modal_show.tanda_jasa');--}}
    <h3>pendidikan polri</h3>
    @include('master.modal_show.pendidikan_polri');
    <h3>Riwayat Gaji</h3>
    {{-- @include('master.modal_show.riwayat_gaji'); --}}
    <h3>Riwayat jabatan</h3>
    {{-- @include('master.modal_show.riwayat_gaji');  --}}
    @include('master.modal_show.riwayat_jabatan');
@endsection

@section('asset-buttom')
<script>
        // $(document).ready(function(){
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
          
        //     //Simpan Barang
        //     $('#btn_simpan_jabatan').click(function(){
        //         var nama_jabatan=$("input[name=nama_jabatan]").val();
        //         event.preventDefault();
        //             $.ajax({
        //                 type : "POST",
        //                 beforeSend: function(){
        //                     $('.ajax-loader').css("visibility", "visible");
        //                 },
        //                 url  : '{{route('jabatan.store')}}',
        //                 datatype:"html",
        //                 data : {nama_jabatan:nama_jabatan,_token: '{{csrf_token()}}' },
        //                 success: function(data){
        //                     $("input[name=nama_jabatan]").val("");
        //                     tampil_data_riwayat_jabatan();
        //                     $('#modal-add-jabatan').modal('hide');
        //                 },
        //                 error: function(xhr, ajaxOptions, thrownError){
        //                         alert("Mohon Data Masukkan Dengan Tepat");
        //                     },
        //                 complete: function(){
        //                     $('.ajax-loader').css("visibility", "hidden");
        //                 }
        //             }).done(function(data){
        //                 toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        //             })
        //     });
        //     /* Edit Post */
        //     var url = 'jabatan';
        //     $("body").on("click",".edit-item",function(){
        //         var id = $(this).parent("td").data('id');
        //         var nama_jabatan = $(this).parent("td").prev("td").text();

        //         $("#edit-item").find("input[name='nama_jabatan']").val(nama_jabatan);
        //         $("#edit-item").find("form").attr("action",url + '/' + id);
        //     });
        //     /* Updated  Post baru (Updated new Post) */
        //     $(".edit-jabatan").click(function(e){
        //         e.preventDefault();
        //         var form_action = $("#edit-item").find("form").attr("action");
        //         var nama_jabatan = $("#edit-item").find("input[name='nama_jabatan']").val();
        //         $.ajax({
        //             dataType: 'json',
        //             type:'PUT',
        //             url: form_action,
        //             data:{nama_jabatan:nama_jabatan,},
        //         }).done(function(data){
        //             tampil_data_riwayat_jabatan();
        //             $(".modal").modal('hide');
        //             toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        //         })
        //     })
        //     /* Remove Post (Hapus) */
        //     $("body").on("click",".delete-jabatan",function(){
        //         var id = $(this).parent("td").data('id');
        //         var c_obj = $(this).parents("tr");
        //         $.ajax({
        //             dataType: 'json',
        //             type:'delete',
        //             url: url + '/' + id,
        //         }).done(function(data){
        //             c_obj.remove();
        //             toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        //             tampil_data_riwayat_jabatan();
        //         });
        //     });
        // });
</script>
@endsection