<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up() 
    {
        Schema::create('tb_profil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_web', 100);
            $table->string('jenjang', 1);
            $table->string('logo_web', 250);
            $table->string('logo_admin', 250);
            $table->string('favicon', 250);
            $table->string('meta_description', 300);
            $table->string('meta_keyword', 200);
            $table->text('profil', 100)->nullable();
            $table->string('alamat', 300);
            $table->string('email', 100);
            $table->string('telp', 20);
            $table->string('fax', 20);
            $table->string('whatsapp', 20)->nullable();
            $table->string('akreditasi', 5);
            $table->string('kurikulum', 30);
            $table->string('file', 250)->nullable();
            $table->string('nama_kepsek', 100);
            $table->string('nama_operator', 100);
            $table->string('instagram', 200)->nullable();
            $table->string('facebook', 200)->nullable();
            $table->string('twitter', 200)->nullable();
            $table->string('youtube', 200)->nullable();
            $table->string('gambar', 250)->nullable();
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
        Schema::dropIfExists('tb_profil');
    }

}