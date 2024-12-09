<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrestasiSiswaModel;
use App\Models\TahunModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiSiswaController extends Controller
{
    function index()
    {     
        $data['title'] = 'Prestasi Siswa';
        $data['data'] = PrestasiSiswaModel::with('tahun')->latest()->get();
        return view('admin.prestasi_siswa.index', $data);
    }

    function tambah_prestasi_siswa()
    {     
        $data['title'] = 'Tambah Prestasi Siswa';
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        return view('admin.prestasi_siswa.form_tambah', $data);
    }

    function simpan_prestasi_siswa(Request $request)
    {   
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jenis' => 'required|numeric',
            'nama' => 'required|max:100',
            'prestasi' => 'required|max:100',
            'nama_siswa' => 'required|max:100',
            'kelas' => 'max:6',
            'tingkat' => 'required|numeric',
            'keterangan' => 'max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ],
        [
            'nama.required' => 'Kolom nama lomba harus diisi.',
            'nama.max:100' => 'Kolom nama lomba harus kurang dari atau sama dengan :value karakter.'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/prestasi_siswa'), $nama_gambar);
        }

        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = PrestasiSiswaModel::create($data);
        if($q)
        {
            return redirect()->route('backend/prestasi-siswa')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_prestasi_siswa($id)
    {   
        $prestasi = PrestasiSiswaModel::findOrFail($id); 
        $data['title'] = 'Edit Prestasi Siswa';
        $data['data'] = $prestasi;
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        return view('admin.prestasi_siswa.form_edit', $data);
    }

    function update_prestasi_siswa(Request $request, $id)
    {   
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jenis' => 'required|numeric',
            'nama' => 'required|max:100',
            'prestasi' => 'required|max:100',
            'nama_siswa' => 'required|max:100',
            'kelas' => 'max:6',
            'tingkat' => 'required|numeric',
            'keterangan' => 'max:100',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ],
        [
            'nama.required' => 'Kolom nama lomba harus diisi.',
            'nama.max:100' => 'Kolom nama lomba harus kurang dari atau sama dengan :value karakter.'
        ]);
            
        $prestasi = PrestasiSiswaModel::select('id', 'gambar')->findOrFail($id);
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/prestasi_siswa'), $nama_gambar);
            if(File::exists("img/prestasi_siswa/$prestasi->gambar"))
            {
                File::delete("img/prestasi_siswa/$prestasi->gambar");
            }
        }else
        {
            $nama_gambar = $prestasi->gambar;
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = $prestasi->update($data);
        if($q)
        {
            return redirect()->route('backend/prestasi-siswa')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_prestasi_siswa($id)
    {   
        $data = PrestasiSiswaModel::select('id', 'gambar')->findOrFail($id);
        if(File::exists("img/prestasi_siswa/$data->gambar"))
        {
            File::delete("img/prestasi_siswa/$data->gambar");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/prestasi-siswa')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/prestasi-siswa')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }
   
}