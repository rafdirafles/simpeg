<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatUnitKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_unit_kerjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
            $table->string('jenis_mutasi');
            $table->unsignedBigInteger('unit_kerja');
            $table->foreign('unit_kerja')->references('id')->on('unit_kerjas')->onDelete('cascade');
            $table->string('no_sk');
            $table->date('tgl_sk');
            $table->string('keterangan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
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
        Schema::dropIfExists('riwayat_unit_kerjas');
    }
}
