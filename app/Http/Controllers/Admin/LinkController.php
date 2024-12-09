<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LinkModel;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    function index()
    {     
        $data['title'] = 'Link Terkait';
        $data['data'] = LinkModel::latest()->get();
        return view('admin.link.index', $data);
    }

    function tambah_link()
    {     
        $data['title'] = 'Tambah Link Terkait';
        return view('admin.link.form_tambah', $data);
    }

    function simpan_link(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'link' => 'required|url',
            'is_active' => 'required'
        ],
        [
            'nama.required' => 'Kolom nama halaman harus diisi.',
            'nama.max:100' => 'Kolom nama halaman harus kurang dari atau sama dengan :value karakter.'
        ]);

        $q = LinkModel::create($request->all());
        if($q)
        {
            return redirect()->route('backend/link')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_link($id)
    {   
        $link = LinkModel::findOrFail($id);
        $data['title'] = 'Edit Link Terkait';
        $data['data'] = $link;
        return view('admin.link.form_edit', $data);
    }  

    function update_link(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'link' => 'required|url',
            'is_active' => 'required'
        ],
        [
            'nama.required' => 'Kolom nama halaman harus diisi.',
            'nama.max:100' => 'Kolom nama halaman harus kurang dari atau sama dengan :value karakter.'
        ]);

        $link = LinkModel::select('id')->findOrFail($id);
        $q = $link->update($request->all());
        if($q)
        {
            return redirect()->route('backend/link')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_link($id)
    {
        $data = LinkModel::select('id')->findOrFail($id);
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/link')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/link')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  
    
}