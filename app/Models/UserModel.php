<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $guarded = [];

    function pengumuman() 
    {
        return $this->hasMany(PengumumanModel::class);
    }
    
    function berita() 
    {
        return $this->hasMany(BeritaModel::class);
    }

    function download() 
    {
        return $this->hasMany(DownloadModel::class);
    }

    function cek_username($id, $username)
    {
        return $this->where('username', $username)->where('id_user', '!=', $id)->count();
    }

    function cek_email($id, $email)
    {
        return $this->where('email', $email)->where('id_user', '!=', $id)->count();
    }

}