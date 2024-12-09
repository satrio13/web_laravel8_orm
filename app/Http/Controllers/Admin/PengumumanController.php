<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengumumanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PengumumanController extends Controller
{
    function index()
    {     
        $data['title'] = 'Pengumuman';
        $data['data'] = PengumumanModel::with('user')->latest()->get();
        return view('admin.pengumuman.index', $data);
    }

    function tambah_pengumuman()
    {     
        $data['title'] = 'Tambah Pengumuman';
        return view('admin.pengumuman.form_tambah', $data);
    }

    function simpan_pengumuman(Request $request)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'isi' => 'required',
            'is_active' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ],
        [
            'nama.required' => 'Kolom nama pengumuman harus diisi.',
            'nama.max:100' => 'Kolom nama pengumuman harus kurang dari atau sama dengan :value karakter.'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/pengumuman'), $nama_gambar);
        }

        $data = array_merge($request->all(), ['gambar' => $nama_gambar, 'dibaca' => 0, 'id_user' => session('id_user'), 'hari' => hari_ini_indo(), 'tgl' => tgl_jam_simpan_sekarang(), 'slug' => Str::slug($request->input('nama'), '-')]);
        $q = PengumumanModel::create($data);
        if($q)
        {
            return redirect()->route('backend/pengumuman')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_pengumuman($id)
    {
        $pengumuman = PengumumanModel::findOrFail($id); 
        $data['title'] = 'Edit Pengumuman';
        $data['data'] = $pengumuman;
        return view('admin.pengumuman.form_edit', $data);
    }

    function update_pengumuman(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required|max:100',
            'isi' => 'required',
            'is_active' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ],
        [
            'nama.required' => 'Kolom nama pengumuman harus diisi.',
            'nama.max:100' => 'Kolom nama pengumuman harus kurang dari atau sama dengan :value karakter.'
        ]);
            
        $pengumuman = PengumumanModel::select('id', 'gambar')->findOrFail($id); 
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/pengumuman'), $nama_gambar);
            if(File::exists("img/pengumuman/$pengumuman->gambar"))
            {
                File::delete("img/pengumuman/$pengumuman->gambar");
            }
        }else
        {
            $nama_gambar = $pengumuman->gambar;
        }
            
        $data = array_merge($request->all(), ['gambar' => $nama_gambar, 'id_user' => session('id_user'), 'slug' => Str::slug($request->input('nama'), '-')]);
        $q = $pengumuman->update($data);
        if($q)
        {
            return redirect()->route('backend/pengumuman')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_pengumuman($id)
    {
        $data = PengumumanModel::select('id', 'gambar')->findOrFail($id); 
        if(File::exists("img/pengumuman/$data->gambar"))
        {
            File::delete("img/pengumuman/$data->gambar");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/pengumuman')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/pengumuman')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}