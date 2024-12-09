<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KaryawanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KaryawanController extends Controller
{
    function index()
    {     
        $data['title'] = 'Karyawan';
        $data['data'] = KaryawanModel::latest()->get();
        return view('admin.karyawan.index', $data);
    }

    function tambah_karyawan()
    {     
        $data['title'] = 'Tambah Karyawan';
        return view('admin.karyawan.form_tambah', $data);
    }

    function simpan_karyawan(Request $request)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'tmp_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'statuspeg' => 'required|max:5',
            'status' => 'required|max:10',
            'email' => 'nullable|email|max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/karyawan'), $nama_gambar);
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = KaryawanModel::create($data);
        if($q)
        {
            return redirect()->route('backend/karyawan')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_karyawan($id)
    {
        $karyawan = KaryawanModel::findOrFail($id);
        $data['title'] = 'Edit Karyawan';
        $data['data'] = $karyawan;
        return view('admin.karyawan.form_edit', $data);
    }

    function update_karyawan(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'tmp_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'statuspeg' => 'required|max:5',
            'status' => 'required|max:10',
            'email' => 'nullable|email|max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
            
        $karyawan = KaryawanModel::select('id', 'gambar')->findOrFail($id);
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/karyawan'), $nama_gambar);
            if(File::exists("img/karyawan/$karyawan->gambar")) 
            {
                File::delete("img/karyawan/$karyawan->gambar");
            }
        }else
        {
            $nama_gambar = $karyawan->gambar;
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = $karyawan->update($data);
        if($q)
        {
            return redirect()->route('backend/karyawan')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    function hapus_karyawan($id)
    {
        $data = KaryawanModel::select('id', 'gambar')->findOrFail($id);
        if(File::exists("img/karyawan/$data->gambar"))
        {
            File::delete("img/karyawan/$data->gambar");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/karyawan')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/karyawan')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }

    function lihat_karyawan($id)
    {
        $data = KaryawanModel::findOrFail($id);
        return response()->json($data);  
    }

}