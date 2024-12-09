<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumniModel extends Model
{
    protected $table = 'tb_alumni';
    protected $guarded = [];

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }
    
}