<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIjinPenelitian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ijin_penelitian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 200);
            $table->text('alamat');
            $table->string('no_hp', 20);
            $table->string('instansi', 200);
            $table->text('permohonan');
            $table->text('file');
            $table->string('status', 1);
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
        Schema::dropIfExists('tb_ijin_penelitian');
    }
    
}
