<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanPolrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_polris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
            $table->string('nama_pendidikan');
            $table->integer('tahun');
            $table->string('lulus_tidak');
            $table->integer('lama_bulan');
            $table->integer('rangking');
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
        Schema::dropIfExists('pendidikan_polris');
    }
}
