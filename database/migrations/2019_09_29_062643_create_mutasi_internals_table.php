<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutasiInternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_internals', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->string('tempat_bekerja',50);
            $table->string('nomor_sk',50);
            $table->string('pejabat',50);
            $table->date('tanggal_sk');
            $table->date('tmt');
            $table->string('keterangan',50);
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
        Schema::dropIfExists('mutasi_internals');
    }
}
