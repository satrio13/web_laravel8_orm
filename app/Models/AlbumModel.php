<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumModel extends Model
{
    protected $table = 'tb_album';
    protected $primaryKey = 'id_album';
    protected $guarded = [];

    function foto() 
    {
        return $this->hasMany(FotoModel::class);
    }

}