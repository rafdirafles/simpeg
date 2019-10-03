<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat_jabatan extends Model
{
    //
    protected $fillable=['nip_nrp','id_jabaran','nomor_sk','pejabat','tgl_sk','tgl_mulai_terhitung','keterangan'];
}
