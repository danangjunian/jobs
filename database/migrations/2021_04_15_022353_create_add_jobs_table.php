<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_jobs', function (Blueprint $table) {
            $table->id('id_jobs');
            $table->integer('id_pelamar')->unsigned();
            $table->string('email_perusahaan');
            $table->string('judul_jobs');
            $table->string('lokasi_jobs');
            $table->string('tag_jobs');
            $table->string('deskripsi_jobs');
            $table->string('deskripsi_jobs');
            $table->date('jobs_dibuka');
            $table->date('jobs_ditutup');

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
        Schema::dropIfExists('add_jobs');
    }
}
