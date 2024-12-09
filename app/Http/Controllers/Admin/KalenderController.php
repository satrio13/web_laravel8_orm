<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KalenderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KalenderController extends Controller
{
    function index()
    {     
        $data['title'] = 'Kalender';
        $data['data'] = KalenderModel::where('id', 1)->first();
        return view('admin.kalender.index', $data);
    }

    function update_kalender(Request $request)
    {   
        $request->validate([
            'file' => 'max:5120'
        ]);
            
        $kalender = KalenderModel::where('id', 1)->first();
        if($request->hasFile('file') AND $request->file('file')->isValid())
        {
            $gambar = $request->file('file');
            $nama_gambar = time().'_'.$gambar->getClientOriginalName();
            $gambar->move(public_path('img/kalender'), $nama_gambar);
            if(File::exists("img/kalender/$kalender->kalender"))
            {
                File::delete("img/kalender/$kalender->kalender");
            }
        }else
        {
            $nama_gambar = '';
        }
        
        $data = ['kalender' => $nama_gambar];
        $q = $kalender->update($data);
        if($q)
        {
            return redirect()->route('backend/kalender')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
}