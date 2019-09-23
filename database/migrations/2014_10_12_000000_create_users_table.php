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
            $table->bigIncrements('id');
            $table->string('nama_pegawai');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('no_kta_pegawai');
            $table->string('jenis_pegawai');
            $table->string('nip_nrp');
            $table->string('nidn');
            $table->text('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->enum('agama', ['islam', 'kristen','katolik','hindu','budha','konghucu']);
            $table->string('no_kep_jabatan');
            $table->string('no_ktp');
            $table->enum('status_menikah', ['belum kawin', 'kawin','janda','duda']);
            $table->string('no_kk');

            $table->string('hobi');
            $table->string('no_tlp');
            $table->string('no_hp');
            $table->date('tgl_masuk');
            $table->double('tinggi_badan');
            $table->string('berat_badan');
            $table->string('warna_rambut');
            $table->string('bentuk_muka');
            $table->string('warna_kulit');
            $table->text('ciri_khas');
            $table->string('cacat_tubuh');
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
