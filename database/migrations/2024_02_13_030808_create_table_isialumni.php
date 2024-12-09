<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIsialumni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('tb_isialumni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('th_lulus', 4);
            $table->string('sma', 100)->nullable();
            $table->string('pt', 100)->nullable();
            $table->string('instansi', 100)->nullable();
            $table->string('alamatins', 100)->nullable();
            $table->string('hp', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->text('kesan')->nullable();
            $table->string('gambar', 250)->nullable();
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
        Schema::dropIfExists('tb_isialumni');
    }

}