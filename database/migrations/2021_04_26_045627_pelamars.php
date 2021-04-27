<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelamars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id('pelamar_id');
            $table->bigInteger('lamar_id')->unsigned();
            $table->bigInteger('didik_id')->unsigned();
            $table->string('namadepan');
            $table->string('namabelakang');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
           
            $table->foreign('lamar_id')->references('id')->on('pengalaman_kerja')->onDelete('cascade');
            $table->foreign('didik_id')->references('id')->on('pendidikan')->onDelete('cascade');
            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar');
    }
}
