<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AlumniModel;
use App\Models\IsiAlumniModel;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    function index()
    {     
        $data['titleweb'] = 'Alumni - '.title();
		$data['title'] = 'Alumni';
        $data['data'] = AlumniModel::with('tahun')->latest()->get();
        return view('alumni/index', $data);
    }

    function penelusuran_alumni()
    {     
        $data['titleweb'] = 'Penelusuran Alumni - '.title();
		$data['title'] = 'Penelusuran Alumni';
        $data['data'] = IsiAlumniModel::where('status', 1)->latest()->get();
        return view('alumni/penelusuran', $data);
    }

    function simpan_penelusuran_alumni(Request $request)
    {     
        $request->validate([
            'nama' => 'required|max:100',
            'th_lulus' => 'required|min:4|max:4',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/alumni'), $nama_gambar);
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar, 'status' => 0]);
        $q = IsiAlumniModel::create($data);
        if($q)
        {
            return redirect()->route('alumni/penelusuran-alumni')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

}