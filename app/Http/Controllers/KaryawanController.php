<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function index()
    {     
        $data['titleweb'] = 'Karyawan - '.title();
		$data['title'] = 'Karyawan';
        $data['data'] = KaryawanModel::orderBy('nama', 'asc')->get();
        return view('karyawan.index', $data);
    }

    function detail($id)
    {
        $karyawan = KaryawanModel::findOrFail($id);
        $data['titleweb'] = 'Detail Karyawan - '.title();
        $data['title'] = 'Detail Karyawan';
        $data['data'] = $karyawan;
        return view('karyawan/detail', $data);
    }

}