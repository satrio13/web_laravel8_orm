<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumniModel;
use App\Models\IsiAlumniModel;
use App\Models\TahunModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlumniController extends Controller
{
    function index()
    {     
        $data['title'] = 'Alumni';
        $data['data'] = AlumniModel::with('tahun')->latest()->get();
        return view('admin.alumni.index', $data);
    }

    function tambah_alumni()
    {     
        $data['title'] = 'Tambah Alumni';
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        return view('admin.alumni.form_tambah', $data);
    }

    function simpan_alumni(Request $request)
    {
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jml_l' => 'required|numeric',
            'jml_p' => 'required|numeric',
        ]);

        $q = AlumniModel::create($request->all());
        if($q)
        {
            return redirect()->route('backend/alumni')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_alumni($id)
    {   
        $alumni = AlumniModel::findOrFail($id);
        $data['title'] = 'Edit Alumni';
        $data['data'] = $alumni;
        $data['tahun'] = TahunModel::orderBy('tahun', 'desc')->get();
        return view('admin.alumni.form_edit', $data);    
    } 

    function update_alumni(Request $request, $id)
    {
        $request->validate([
            'id_tahun' => 'required|numeric',
            'jml_l' => 'required|numeric',
            'jml_p' => 'required|numeric',
        ]);

        $alumni = AlumniModel::select('id')->findOrFail($id);
        $q = $alumni->update($request->all());
        if($q)
        {
            return redirect()->route('backend/alumni')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_alumni($id)
    {   
        $data = AlumniModel::select('id')->findOrFail($id);
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/alumni')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/alumni')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    } 

    function penelusuran_alumni()
    {     
        $data['title'] = 'Penelusuran Alumni';
        $data['data'] = IsiAlumniModel::latest()->get();
        return view('admin.alumni.penelusuran_alumni', $data);
    }

    function lihat_alumni($id)
	{ 
        $data = IsiAlumniModel::findOrFail($id);
        return response()->json($data);  
    }

    function status($id)
	{ 
        $data = IsiAlumniModel::select('id','status')->findOrFail($id);
        return response()->json($data);      
    }

    function save_status(Request $request)
	{   
        $id = $request->input('id');
        $alumni = IsiAlumniModel::select('id')->findOrFail($id);
        $q = $alumni->update($request->all());
        return response()->json($q);  
    }

    function hapus_penelusuran_alumni($id)
    {
        $data = IsiAlumniModel::select('id', 'gambar')->findOrFail($id);      
        if(File::exists("img/alumni/$data->gambar"))
        {
            File::delete("img/alumni/$data->gambar");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/penelusuran-alumni')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/penelusuran-alumni')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}