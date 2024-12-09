<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KurikulumModel;
use App\Models\TahunModel;
use App\Models\KalenderModel;
use App\Models\RekapUSModel;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    function kurikulum()
    {     
        $data['titleweb'] = 'Kurikulum - '.title();
		$data['title'] = 'Kurikulum';
        $data['kelompok_a'] = KurikulumModel::where('is_active', 1)->where('kelompok', 'A')->orderBy('no_urut','asc')->get(); 
        $data['kelompok_b'] = KurikulumModel::where('is_active', 1)->where('kelompok', 'B')->orderBy('no_urut','asc')->get(); 
        $data['kelompok_c'] = KurikulumModel::where('is_active', 1)->where('kelompok', 'C')->orderBy('no_urut','asc')->get(); 
        return view('pendidikan/kurikulum', $data);
    }

    function kalender()
    {     
        $data['titleweb'] = 'Kalender Akademik - '.title();
		$data['title'] = 'Kalender Akademik';
        $data['data'] = KalenderModel::where('id', 1)->first();
        return view('pendidikan/kalender', $data);
    }

    function rekap_us(Request $request)
    {     
        if(jenjang() == 1 OR jenjang() == 2)
        { 
            $jenis = 'Sekolah';
        }else
        {
            $jenis = 'Madrasah';
        }
        
        $data['titleweb'] = "Rekap Ujian $jenis - ".title();
        $data['title'] = "Rekap Ujian $jenis";
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        $data['submit'] = $request->input('submit');
        $data['id_tahun'] = $request->input('id_tahun');
        $data['data'] = RekapUSModel::select('tb_rekap_us.*', 'tb_kurikulum.mapel', 'tb_kurikulum.is_active', 'tb_tahun.tahun')->join('tb_kurikulum','tb_rekap_us.id_kurikulum', '=', 'tb_kurikulum.id_kurikulum')->join('tb_tahun','tb_rekap_us.id_tahun', '=', 'tb_tahun.id_tahun')->where('tb_rekap_us.id_tahun', $request->input('id_tahun'))->orderBy('tb_kurikulum.mapel','asc')->get();
        return view('pendidikan/rekap_us', $data);
    }

}