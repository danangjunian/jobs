<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->string('tentang');
            $table->string('skill');
            $table->string('medsos');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('s1');
            $table->date('tahun_sd');
            $table->date('tahun_smp');
            $table->date('tahun_sma');
            $table->date('tahun_s1');
            $table->integer('ipk');
            $table->date('tahun_kerja');
            $table->string('perusahaan');
            $table->string('jabatan');
        });
    }
      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
