<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRekapUn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('tb_rekap_un', function (Blueprint $table) {
            $table->increments('id_un');
            $table->unsignedInteger('id_kurikulum');
            $table->integer('tertinggi');
            $table->integer('terendah');
            $table->integer('rata');
            $table->unsignedInteger('id_tahun');
            $table->timestamps();

            $table->foreign('id_kurikulum')->references('id_kurikulum')->on('tb_kurikulum')->onDelete('no action');
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
        Schema::dropIfExists('tb_rekap_un');
    }

}