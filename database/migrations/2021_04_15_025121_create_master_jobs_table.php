<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jobs', function (Blueprint $table) {
            $table->increments('master_jobs_id', true);
            $table->string('nama_perusahaan');
            $table->string('nama_pendafatar');
            $table->string('email_perusahaan');
            $table->string('nomor_hp_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('webste_perusahaan');
            $table->string('nib_perusahaan');
            $table->string('penaggung_jawab');
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
        Schema::dropIfExists('master_jobs');
    }
}
