<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLegalisirOnline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_legalisir_online', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('nis', 50);
            $table->string('nisn', 50);
            $table->string('alumni_tahun', 10);
            $table->string('no_hp', 20);
            $table->string('ijazah', 1)->nullable();
            $table->integer('jml_lembar_ijazah')->nullable();
            $table->string('rapor', 1)->nullable();
            $table->integer('jml_lembar_rapor')->nullable();
            $table->string('skhun', 1)->nullable();
            $table->integer('jml_lembar_skhun')->nullable();
            $table->string('skhuam', 1)->nullable();
            $table->integer('jml_lembar_skhuam')->nullable();
            $table->string('skl', 1)->nullable();
            $table->integer('jml_lembar_skl')->nullable();
            $table->text('alamat_kirim');
            $table->string('ekspedisi', 10);
            $table->text('file_ijazah')->nullable();
            $table->text('file_rapor')->nullable();
            $table->text('file_skhun')->nullable();
            $table->text('file_skhuam')->nullable();
            $table->text('file_skl')->nullable();
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
        Schema::dropIfExists('tb_legalisir_online');
    }

}