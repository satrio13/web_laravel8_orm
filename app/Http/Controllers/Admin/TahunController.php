<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TahunModel;
use App\Models\RekapUNModel;
use App\Models\RekapUSModel;
use App\Models\SiswaModel;
use App\Models\PrestasiSiswaModel;
use App\Models\PrestasiGuruModel;
use App\Models\PrestasiSekolahModel;
use App\Models\AlumniModel;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    function index()
    {     
        $data['title'] = 'Tahun Akademik';
        $data['data'] = TahunModel::orderBy('tahun', 'desc')->get();
        return view('admin.tahun.index', $data);
    }

    function tambah_tahun()
    {     
        $data['title'] = 'Tambah Tahun Akademik';
        return view('admin.tahun.form_tambah', $data);
    }

    function simpan_tahun(Request $request)
    {
        $request->validate([
            'tahun' => 'required|max:10'
        ]);
        
        $q = TahunModel::create($request->all());
        if($q)
        {
            return redirect()->route('backend/tahun')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_tahun($id)
    {   
        $tahun = TahunModel::findOrFail($id);
        $data['title'] = 'Edit Tahun Akademik';
        $data['data'] = $tahun;
        return view('admin.tahun.form_edit', $data);
    }  

    function update_tahun(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required|max:10'
        ]);

        $tahun = TahunModel::select('id_tahun')->findOrFail($id);
        $q = $tahun->update($request->all());
        if($q)
        {
            return redirect()->route('backend/tahun')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_tahun($id)
    {
        $data = TahunModel::select('id_tahun')->findOrFail($id);

        $cek_un = RekapUNModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_us = RekapUSModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_s = SiswaModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_p_siswa = PrestasiSiswaModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_p_guru = PrestasiGuruModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_p_sekolah = PrestasiSekolahModel::select('id_tahun')->where('id_tahun', $id)->first();
        $cek_a = AlumniModel::select('id_tahun')->where('id_tahun', $id)->first();
        if($cek_un OR $cek_us OR $cek_s OR $cek_p_siswa OR $cek_p_guru OR $cek_p_sekolah OR $cek_a)
        {
            return redirect()->route('backend/tahun')->with(['error' => 'Data gagal dihapus, karena sudah berelasi!']);
        }else
        {
            $q = $data->delete();
            if($q)
            {
                return redirect()->route('backend/tahun')->with(['success' => 'Data Berhasil Dihapus!']);
            }else
            {
                return redirect()->route('backend/tahun')->with(['errors' => 'Data Gagal Dihapus!']);
            }
        }
    }  
    
}