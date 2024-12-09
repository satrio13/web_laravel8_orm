<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunModel extends Model
{
    protected $table = 'tb_tahun';
    protected $primaryKey = 'id_tahun';
    protected $guarded = [];

    function alumni() 
    {
        return $this->hasMany(AlumniModel::class);
    }

    function prestasi_guru() 
    {
        return $this->hasMany(PrestasiGuruModel::class);
    }

    function prestasi_siswa() 
    {
        return $this->hasMany(PrestasiSiswaModel::class);
    }

    function prestasi_sekolah() 
    {
        return $this->hasMany(PrestasiSekolahModel::class);
    }

    function rekap_un() 
    {
        return $this->hasMany(RekapUNModel::class);
    }

    function rekap_us() 
    {
        return $this->hasMany(RekapUSModel::class);
    }

    function siswa() 
    {
        return $this->hasMany(SiswaModel::class);
    }  

}