<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekapUNModel extends Model
{
    protected $table = 'tb_rekap_un';
    protected $primaryKey = 'id_un';
    protected $guarded = [];

    function kurikulum()
    {
        return $this->belongsTo(KurikulumModel::class, 'id_kurikulum');
    }

    function tahun()
    {
        return $this->belongsTo(TahunModel::class, 'id_tahun');
    }

}