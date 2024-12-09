<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $guarded = [];
}