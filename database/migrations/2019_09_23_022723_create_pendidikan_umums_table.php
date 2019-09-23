<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_umums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
            $table->string('jenjang_pendidikan');
            $table->string('nama_sekolah');
            $table->string('jurusan');
            $table->string('kota');
            $table->integer('tahun_lulus');
            $table->string('no_ijazah');
            $table->string('file');






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
        Schema::dropIfExists('pendidikan_umums');
    }
}
