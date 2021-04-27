<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply', function (Blueprint $table) {
            $table->bigInteger('id_pelamar')->unsigned();
            $table->bigInteger('id_jobs')->unsigned();          

            $table->foreign('id_pelamar')->references('pelamar_id')->on('pelamar')->onDelete('cascade');
            $table->foreign('id_jobs')->references('jobs_id')->on('add_jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply');
    }
}
