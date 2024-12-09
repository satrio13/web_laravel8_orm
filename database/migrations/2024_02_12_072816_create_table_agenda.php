<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_agenda', 100);
            $table->string('berapa_hari', 1);
            $table->date('tgl')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->string('jam_mulai', 20);
            $table->string('jam_selesai', 20);
            $table->text('keterangan')->nullable();
            $table->string('tempat', 100);
            $table->string('gambar', 250)->nullable();
            $table->string('slug', 150);
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
        Schema::dropIfExists('tb_agenda');
    }

}