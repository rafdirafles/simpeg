<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Riwayat_jabatan extends Model
{
    //
    protected $fillable=['nip_nrp','id_jabaran','nomor_sk','pejabat','tgl_sk','tgl_mulai_terhitung','keterangan'];

    public function pangkat(){
        return $this->belongsTo('App\Pangkat','id_pangkat');
    }
}
