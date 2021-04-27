<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekeolah');
            $table->bigInteger('kualifikasi_id')->unsigned();
            $table->date('tahun_mulai');
            $table->date('tahun_lulus');

            $table->foreign('kualifikasi_id')->references('id_kualifikasi')->on('kualifikasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikans');
    }
}
