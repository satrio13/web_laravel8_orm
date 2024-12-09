<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiswaModel;
use App\Models\TahunModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {     
        $data['title'] = 'Peserta Didik';
        $data['data'] = SiswaModel::with('tahun')->latest()->get();
        return view('admin.siswa.index', $data);
    }

    function tambah_siswa()
    {     
        $data['title'] = 'Tambah Peserta Didik';
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        $data['profil'] = profil_web();
        return view('admin.siswa.form_tambah', $data);
    }

    function simpan_siswa(Request $request)
    {
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jml1pa' => 'required|numeric',
            'jml1pi' => 'required|numeric',
            'jml2pa' => 'required|numeric',
            'jml2pi' => 'required|numeric',
            'jml3pa' => 'required|numeric',
            'jml3pi' => 'required|numeric'
        ]);

        $q = SiswaModel::create($request->all());
        if($q)
        {
            return redirect()->route('backend/siswa')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_siswa($id)
    {   
        $siswa = SiswaModel::findOrFail($id); 
        $data['title'] = 'Edit Peserta Didik';
        $data['data'] = $siswa;
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        $data['profil'] = profil_web();
        return view('admin.siswa.form_edit', $data);
    }  

    function update_siswa(Request $request, $id)
    {
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jml1pa' => 'required|numeric',
            'jml1pi' => 'required|numeric',
            'jml2pa' => 'required|numeric',
            'jml2pi' => 'required|numeric',
            'jml3pa' => 'required|numeric',
            'jml3pi' => 'required|numeric'
        ]);

        $siswa = SiswaModel::select('id')->findOrFail($id); 
        $q = $siswa->update($request->all());
        if($q)
        {
            return redirect()->route('backend/siswa')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }   

    function hapus_siswa($id)
    {   
        $data = SiswaModel::select('id')->findOrFail($id); 
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/siswa')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/siswa')->with(['error' => 'Data Gagal Dihapus!']);
        }   
        
    }

}