<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
    public function up()
    {
        Schema::create('tb_foto', function (Blueprint $table) {
            $table->increments('id_foto');
            $table->unsignedInteger('id_album');
            $table->string('foto', 250);
            $table->timestamps();

            $table->foreign('id_album')->references('id_album')->on('tb_album')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_foto');
    }

}