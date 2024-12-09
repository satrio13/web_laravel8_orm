<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEkstrakurikuler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ekstrakurikuler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ekstrakurikuler', 100);
            $table->string('gambar', 250);
            $table->text('keterangan')->nullable();
            $table->string('slug', 120);
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
        Schema::dropIfExists('tb_ekstrakurikuler');
    }

}
