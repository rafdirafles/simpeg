<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    //
    protected $fillable=['id','id_unit_kerja','nama_devisi'];

    public function unit_kerja(){
        return $this->belongsTo('App\Unit_kerja','id_unit_kerja');
     }

}
