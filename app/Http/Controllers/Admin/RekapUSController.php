<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RekapUSModel;
use App\Models\TahunModel;
use App\Models\KurikulumModel;
use Illuminate\Http\Request;

class RekapUSController extends Controller
{
    function index()
    {     
        $data['title'] = 'Rekap US';
        $data['data'] = RekapUSModel::with(['kurikulum', 'tahun'])->latest()->get();
        return view('admin.rekap_us.index', $data);
    }

    function tambah_rekap_us()
    {     
        $data['title'] = 'Tambah Rekap US';
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        $data['mapel'] = KurikulumModel::orderBy('mapel', 'asc')->get();
        return view('admin.rekap_us.form_tambah', $data);
    }
    
    function simpan_rekap_us(Request $request)
    {   
        $request->validate([
            'id_tahun' => 'required|numeric',
            'id_kurikulum' => 'required|numeric',
            'tertinggi' => 'required|numeric',
            'terendah' => 'required|numeric',
            'rata' => 'required|numeric'
        ]);

        $q = RekapUSModel::create($request->all());
        if($q)
        {
            return redirect()->route('backend/rekap-us')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_rekap_us($id)
    {   
        $rekap = RekapUSModel::findOrFail($id);
        $data['title'] = 'Edit Rekap US';
        $data['data'] = $rekap;
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        $data['mapel'] = KurikulumModel::orderBy('mapel', 'asc')->get();
        return view('admin.rekap_us.form_edit', $data);
    }

    function update_rekap_us(Request $request, $id)
    {   
        $request->validate([
            'id_tahun' => 'required|numeric',
            'id_kurikulum' => 'required|numeric',
            'tertinggi' => 'required|numeric',
            'terendah' => 'required|numeric',
            'rata' => 'required|numeric'
        ]);
        
        $rekap = RekapUSModel::select('id_us')->findOrFail($id);
        $q = $rekap->update($request->all());
        if($q)
        {
            return redirect()->route('backend/rekap-us')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_rekap_us($id)
    {
        $data = RekapUSModel::select('id_us')->findOrFail($id);
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/rekap-us')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/rekap-us')->with(['error' => 'Data Gagal Dihapus!']);
        }   
    }

}