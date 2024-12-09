<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisiModel;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    function index()
    {     
        $data['title'] = 'Visi & Misi';
        $data['data'] = VisiMisiModel::where('id', 1)->first();
        return view('admin.visi_misi.index', $data);
    }

    function edit_visi_misi()
    {     
        $data['title'] = 'Edit Visi & Misi';
        $data['data'] = VisiMisiModel::where('id', 1)->first();
        return view('admin.visi_misi.form_visi_misi', $data);
    }

    function update_visi_misi(Request $request)
    {   
        $visimisi = VisiMisiModel::where('id', 1)->first();
        $q = $visimisi->update($request->all());
        if($q)
        {
            return redirect()->route('backend/visi-misi')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

}