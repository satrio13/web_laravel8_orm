<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    protected $table = 'tb_video';
    protected $primaryKey = 'id_video';
    protected $guarded = [];
}