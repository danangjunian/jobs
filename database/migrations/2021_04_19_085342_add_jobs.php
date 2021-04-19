<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('master_id')->unsigned();;
            $table->bigInteger('tipekerja_id')->unsigned();;
            $table->bigInteger('kategori_id')->unsigned();;
            $table->bigInteger('tag_id')->unsigned();;
            $table->string('judul_jobs');
            $table->string('lokasi_jobs');
            $table->text('deskripsi_jobs');
            $table->date('jobs_dibuka');
            $table->date('jobs_ditutup');
            $table->timestamps();

            $table->foreign('master_id')->references('id')->on('master_jobs')->onDelete('cascade');
            $table->foreign('tipekerja_id')->references('id')->on('tipe_kerja')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_kerja')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_jobs');
    }
}
