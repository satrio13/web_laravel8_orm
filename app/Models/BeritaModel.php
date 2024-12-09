<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    protected $table = 'tb_berita';
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    }  

}