<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey ='nip_nrp';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'nip_nrp','nama_pegawai','gelar_depan','gelar_belakang','no_kta_pegawai','jenis_pegawai',
        'email','password','nidn','alamat','tempat_lahir','tanggal_lahir','jk','agama','no_kep_jabatan','nik','status_menikah','no_kk',
        'hobi','no_tlp','no_hp','tgl_masuk','tinggi_badan','berat_badan','warna_rambut','bentuk_muka','warna_kulit','ciri_khas',
        'cacat_tubuh','id_unit_kerja','is_status','foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function unit_kerja(){
        return $this->belongsTo('App\Unit_kerja','id_unit_kerja');
    }

    public function Data_keluarga(){
        return $this->hasMany('App\Data_keluarga','nip_nrp');
    }
}
