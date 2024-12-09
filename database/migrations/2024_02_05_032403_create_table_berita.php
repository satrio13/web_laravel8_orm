<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() 
    {
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->text('isi');
            $table->string('gambar', 250)->nullable();
            $table->integer('dibaca');
            $table->unsignedInteger('id_user');
            $table->string('is_active', 1);
            $table->string('hari', 10);
            $table->date('tgl');
            $table->string('slug', 150);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('tb_user')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_berita');
    }

}