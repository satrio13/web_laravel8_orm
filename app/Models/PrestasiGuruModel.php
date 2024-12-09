<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiGuruModel extends Model
{
    protected $table = 'tb_prestasi_guru';
    protected $guarded = [];

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }

}