<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekapUSModel extends Model
{
    protected $table = 'tb_rekap_us';
    protected $primaryKey = 'id_us';
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