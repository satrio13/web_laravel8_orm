<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoModel extends Model
{
    protected $table = 'tb_foto';
    protected $primaryKey = 'id_foto';
    protected $guarded = [];

    function album()
    {
        return $this->belongsTo(AlbumModel::class, 'id_album');
    }

}