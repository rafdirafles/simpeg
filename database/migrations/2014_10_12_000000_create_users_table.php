<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('nip_nrp',20)->primary()->unique();
            $table->string('nama_pegawai',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('gelar_depan',20);
            $table->string('gelar_belakang',20);
            $table->string('no_kta_pegawai',30)->unique();
            $table->string('jenis_pegawai',30);
            $table->string('password',255);
            $table->string('nidn',30);
            $table->text('alamat');
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->rememberToken();
            $table->enum('agama', ['Islam', 'Kristen','Katolik','Hindu','Budha','Konghucu']);
            $table->string('no_kep_jabatan',30);
            $table->string('nik')->unique();
            $table->enum('status_menikah', ['Belum Kawin', 'Kawin','Janda','Duda']);
            $table->string('no_kk',16);
            $table->string('hobi',100);
            $table->string('no_tlp',20);
            $table->string('no_hp',12);
            $table->date('tgl_masuk');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->string('warna_rambut',50);
            $table->string('bentuk_muka',50);
            $table->string('warna_kulit',50);
            $table->text('ciri_khas');
            $table->string('cacat_tubuh',50);
            $table->string('foto',200);
            $table->unsignedinteger('id_unit_kerja');
            $table->foreign('id_unit_kerja')->references('id')->on('unit_kerjas');
            $table->boolean('is_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
