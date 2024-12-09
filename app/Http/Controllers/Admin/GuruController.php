<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    function index()
    {     
        $data['title'] = 'Guru';
        $data['data'] = GuruModel::latest()->get();
        return view('admin.guru.index', $data);
    }

    function tambah_guru()
    {     
        $data['title'] = 'Tambah Guru';
        return view('admin.guru.form_tambah', $data);
    }

    function simpan_guru(Request $request)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'tmp_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'statuspeg' => 'required|max:5',
            'status' => 'required|max:10',
            'statusguru' => 'required|max:12',
            'email' => 'nullable|email|max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid())
        {            
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/guru'), $nama_gambar);
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = GuruModel::create($data);
        if($q)
        {
            return redirect()->route('backend/guru')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_guru($id)
    {
        $guru = GuruModel::findOrFail($id);
        $data['title'] = 'Edit Guru';
        $data['data'] = $guru;
        return view('admin.guru.form_edit', $data);
    }

    function update_guru(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'tmp_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'statuspeg' => 'required|max:5',
            'status' => 'required|max:10',
            'statusguru' => 'required|max:12',
            'email' => 'nullable|email|max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
            
        $guru = GuruModel::select('id', 'gambar')->findOrFail($id);
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid())
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/guru'), $nama_gambar);
            if(File::exists("img/guru/$guru->gambar"))
            {
                File::delete("img/guru/$guru->gambar");
            }
        }else
        {
            $nama_gambar = $guru->gambar;
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = $guru->update($data);
        if($q)
        {
            return redirect()->route('backend/guru')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    function hapus_guru($id)
    {
        $data = GuruModel::select('id', 'gambar')->findOrFail($id);  
        if(File::exists("img/guru/$data->gambar"))
        {
            File::delete("img/guru/$data->gambar");
        }

        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/guru')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/guru')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }

    function lihat_guru($id)
    {
        $data = GuruModel::findOrFail($id);   
        return response()->json($data);  
    }

}