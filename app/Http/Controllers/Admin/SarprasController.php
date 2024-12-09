<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SarprasModel;
use Illuminate\Http\Request;

class SarprasController extends Controller
{
    function index()
    {     
        $data['title'] = 'Sarana & Prasarana';
        $data['data'] = SarprasModel::where('id', 1)->first();
        return view('admin.sarpras.index', $data);
    }

    function edit_sarpras()
    {     
        $data['title'] = 'Edit Sarana & Prasarana';
        $data['data'] = SarprasModel::where('id', 1)->first();
        return view('admin.sarpras.form_sarpras', $data);
    }

    function update_sarpras(Request $request)
    {   
        $sarpras = SarprasModel::where('id', 1)->first();
        $q = $sarpras->update($request->all());
        if($q)
        {
            return redirect()->route('backend/sarpras')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

}