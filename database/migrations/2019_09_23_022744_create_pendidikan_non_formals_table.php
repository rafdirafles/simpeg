<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanNonFormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_non_formals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
            $table->string('nama_pendidikan');
            $table->integer('lama_pendidikan');
            $table->integer('tahun_pendidikan');
            $table->string('tempat_pendidikan');
            $table->string('keterangan');
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
        Schema::dropIfExists('pendidikan_non_formals');
    }
}
