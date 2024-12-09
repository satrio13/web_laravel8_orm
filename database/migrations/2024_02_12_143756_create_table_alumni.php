<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('tb_alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tahun');
            $table->integer('jml_l');
            $table->integer('jml_p');
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
        Schema::dropIfExists('tb_alumni');
    }

}