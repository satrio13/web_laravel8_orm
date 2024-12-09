<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 25)->nullable();
            $table->string('duk', 20)->nullable();
            $table->string('niplama', 25)->nullable();
            $table->string('nuptk', 25)->nullable();
            $table->string('nokarpeg', 12)->nullable();
            $table->string('golruang', 5)->nullable();
            $table->string('statuspeg', 5);
            $table->string('nama', 100);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->date('tmt_cpns')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->string('jk', 1);
            $table->string('agama', 1);
            $table->string('alamat', 100)->nullable();
            $table->string('pt', 60)->nullable();
            $table->string('tingkat_pt', 20)->nullable();
            $table->string('prodi', 50)->nullable();
            $table->string('th_lulus', 4)->nullable();
            $table->string('gambar', 250)->nullable();
            $table->string('status', 10);
            $table->string('email', 100)->nullable();
            $table->string('tugas', 50)->nullable();
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
        Schema::dropIfExists('tb_karyawan');
    }

}