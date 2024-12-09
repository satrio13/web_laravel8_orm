<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiSiswaModel extends Model
{
    protected $table = 'tb_prestasi_siswa';
    protected $guarded = [];

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }
    
}