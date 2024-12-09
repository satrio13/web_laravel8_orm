<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DownloadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    function index()
    {     
        $data['title'] = 'Download';
        $data['data'] = DownloadModel::with('user')->latest()->get();
        return view('admin.download.index', $data);
    }

    function tambah_download()
    {     
        $data['title'] = 'Tambah Download';
        return view('admin.download.form_tambah', $data);
    }

    function simpan_download(Request $request)
    {   
        $request->validate([
            'nama_file' => 'required|max:100',
            'is_active' => 'required',
            'file' => 'required|max:7168'
        ]);
            
        $nama_file = '';
        if($request->hasFile('file') AND $request->file('file')->isValid())
        {
            $file = $request->file('file');
            $nama_file = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('file'), $nama_file);
        }

        $data = array_merge($request->all(), ['file' => $nama_file, 'hits' => 0, 'id_user' => session('id_user')]);
        $q = DownloadModel::create($data);
        if($q)
        {
            return redirect()->route('backend/download')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_download($id)
    {     
        $download = DownloadModel::findOrFail($id); 
        $data['title'] = 'Edit Download';
        $data['data'] = $download;
        return view('admin.download.form_edit', $data);
    }

    function update_download(Request $request, $id)
    {   
        $request->validate([
            'nama_file' => 'required|max:100',
            'is_active' => 'required',
            'file' => 'max:7168'
        ]);
            
        $download = DownloadModel::select('id', 'file')->findOrFail($id);             
        if($request->hasFile('file') AND $request->file('file')->isValid())
        {   
            $file = $request->file('file');
            $nama_file = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('file'), $nama_file);
            if(File::exists("file/$download->file"))
            {
                File::delete("file/$download->file");
            }
        }else
        {
            $nama_file = $download->file;
        }
            
        $data = array_merge($request->all(), ['file' => $nama_file, 'id_user' => session('id_user')]);
        $q = $download->update($data);
        if($q)
        {
            return redirect()->route('backend/download')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_download($id)
    {
        $data = DownloadModel::select('id', 'file')->findOrFail($id);   
        if(File::exists("file/$data->file"))
        {
            File::delete("file/$data->file");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/download')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/download')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}