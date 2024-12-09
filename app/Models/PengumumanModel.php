<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumumanModel extends Model
{
    protected $table = 'tb_pengumuman';
    protected $guarded = [];
    
    function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    }  

}