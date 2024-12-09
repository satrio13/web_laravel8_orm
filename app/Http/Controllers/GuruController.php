<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index()
    {     
        $data['titleweb'] = 'Guru - '.title();
		$data['title'] = 'Guru';
        $data['data'] = GuruModel::orderBy('nama', 'asc')->get();
        return view('guru.index', $data);
    }

    function detail($id)
    {
        $guru = GuruModel::findOrFail($id);
        $data['titleweb'] = 'Detail Guru - '.title();
        $data['title'] = 'Detail Guru';
        $data['data'] = $guru;
        return view('guru/detail', $data);
    }

}