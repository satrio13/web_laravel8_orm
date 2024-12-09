<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKurikulum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('tb_kurikulum', function (Blueprint $table) {
            $table->increments('id_kurikulum');
            $table->string('mapel', 50);
            $table->integer('alokasi');
            $table->string('kelompok', 5);
            $table->integer('no_urut');
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
        Schema::dropIfExists('tb_kurikulum');
    }

}