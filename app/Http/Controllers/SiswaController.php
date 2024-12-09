<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {     
        $data['titleweb'] = 'Peserta Didik - '.title();
		$data['title'] = 'Peserta Didik';
        $data['data'] = SiswaModel::select('tb_siswa.*','tb_tahun.tahun')->join('tb_tahun', 'tb_siswa.id_tahun', '=', 'tb_tahun.id_tahun')->orderBy('tb_tahun.tahun', 'desc')->get();
        return view('siswa.index', $data);
    }

}