<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up() 
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tahun');
            $table->integer('jml1pa');
            $table->integer('jml1pi');
            $table->integer('jml2pa');
            $table->integer('jml2pi');
            $table->integer('jml3pa');
            $table->integer('jml3pi');
            $table->timestamps();

            $table->foreign('id_tahun')->references('id_tahun')->on('tb_tahun')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_siswa');
    }

}