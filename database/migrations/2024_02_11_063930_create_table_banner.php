<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    public function up()
    {
        Schema::create('tb_banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar', 250);
            $table->string('judul', 100)->nullable();
            $table->string('keterangan', 200)->nullable();
            $table->string('link', 300)->nullable();
            $table->string('button', 30)->nullable();
            $table->string('is_active', 1);
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
        Schema::dropIfExists('tb_banner');
    }

}