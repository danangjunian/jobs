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
            $table->bigInteger('lamar_id');
            $table->bigInteger('didik_id');
            $table->string('namadepan');
            $table->string('namabelakang');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
           
                 
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
