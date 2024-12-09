<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiSekolahModel extends Model
{
    protected $table = 'tb_prestasi_sekolah';
    protected $guarded = [];

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }
    
}