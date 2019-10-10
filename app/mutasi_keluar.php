<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mutasi_keluar extends Model
{
    //
    protected $fillable=[ 'nip_nrp',
    'tempat_tujuan',
    'nomor_sk',
    'pejabat',
    'tanggal_sk',
    'tmt','keterangan'];
}
