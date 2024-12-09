<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PrestasiSiswaModel;
use App\Models\PrestasiGuruModel;
use App\Models\PrestasiSekolahModel;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    function prestasi_siswa()
    {     
        $data['titleweb'] = 'Prestasi Siswa - '.title();
		$data['title'] = 'Prestasi Siswa';
        $data['data'] = PrestasiSiswaModel::with('tahun')->latest()->get();
        return view('prestasi/prestasi_siswa', $data);
    }

    function prestasi_guru()
    {     
        $data['titleweb'] = 'Prestasi Guru - '.title();
		$data['title'] = 'Prestasi Guru';
        $data['data'] = PrestasiGuruModel::with('tahun')->latest()->get();
        return view('prestasi/prestasi_guru', $data);
    }

    function prestasi_sekolah()
    {     
        if(jenjang() == 1 OR jenjang() == 2)
        {
            $data['titleweb'] = 'Prestasi Sekolah - '.title();
            $data['title'] = 'Prestasi Sekolah';
            $data['data'] = PrestasiSekolahModel::with('tahun')->latest()->get();
            return view('prestasi/prestasi_sekolah', $data);
        }else
        {
            abort(404);
        }
    }

    function prestasi_madrasah()
    {     
        if(jenjang() == 3 OR jenjang() == 4)
        {
            $data['titleweb'] = 'Prestasi Madrasah - '.title();
            $data['title'] = 'Prestasi Madrasah';
            $data['data'] = PrestasiSekolahModel::with('tahun')->latest()->get();
            return view('prestasi/prestasi_sekolah', $data);
        }else
        {
            abort(404);
        }
    }

}