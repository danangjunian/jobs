<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('account', function (Blueprint $table) {
                $table->increments('id_account');
                $table->integer('nib_perusahaan',);
                $table->string('nama_account');
                $table->string('email_account');
                $table->string('no_account');
                $table->string('level_account');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();

                // $table->foreign('nib_perusahaan')->references('nib_perusahaan')->on('master_jobs')->onDelete('cascade');
            });

           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
