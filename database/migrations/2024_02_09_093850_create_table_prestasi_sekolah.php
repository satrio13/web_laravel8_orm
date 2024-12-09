<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrestasiSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('tb_prestasi_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tahun');
            $table->string('nama', 100);
            $table->string('prestasi', 100);
            $table->string('tingkat', 1);
            $table->string('jenis', 1);
            $table->string('keterangan', 100)->nullable();
            $table->string('gambar', 250)->nullable();
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
        Schema::dropIfExists('tb_prestasi_sekolah');
    }

}