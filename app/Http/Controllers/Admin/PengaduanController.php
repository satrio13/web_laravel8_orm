<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengaduanModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    function index()
    {     
        $data['title'] = 'Pengaduan';
        $data['data'] = PengaduanModel::latest()->get();
        return view('admin.pengaduan.index', $data);
    }

    function lihat_pengaduan($id)
	{ 
        $data = PengaduanModel::findOrFail($id);
        return response()->json($data);  
    }

    function hapus_pengaduan($id)
    {
        $data = PengaduanModel::select('id')->findOrFail($id);
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/pengaduan')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/pengaduan')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}