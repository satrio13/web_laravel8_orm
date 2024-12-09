<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DownloadModel extends Model
{
    protected $table = 'tb_download';
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    } 
    
}