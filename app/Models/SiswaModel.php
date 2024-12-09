<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = 'tb_siswa';
    protected $guarded = [];

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }

}