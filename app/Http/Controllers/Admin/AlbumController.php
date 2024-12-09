<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlbumModel;
use App\Models\FotoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    function index()
    {     
        $data['title'] = 'Album';
        $data['data'] = AlbumModel::latest()->get();
        return view('admin.album.index', $data);
    }

    function tambah_album()
    {     
        $data['title'] = 'Tambah Album';
        return view('admin.album.form_tambah', $data);
    }

    function simpan_album(Request $request)
    {
        $request->validate([
            'album' => 'required|max:50',
            'is_active' => 'required'
        ]);

        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('album'), '-')]);
        $q = AlbumModel::create($data);
        if($q)
        {
            return redirect()->route('backend/album')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_album($id)
    {   
        $album = AlbumModel::findOrFail($id);
        $data['title'] = 'Edit Album';
        $data['data'] = $album;
        return view('admin.album.form_edit', $data);
    }  

    function update_album(Request $request, $id)
    {
        $request->validate([
            'album' => 'required|max:50',
            'is_active' => 'required'
        ]);

        $album = AlbumModel::select('id_album')->findOrFail($id);
        $data = array_merge($request->all(), ['slug' => Str::slug($request->input('album'), '-')]);
        $q = $album->update($data);
        if($q)
        {
            return redirect()->route('backend/album')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_album($id)
    {
        $data = AlbumModel::select('id_album')->findOrFail($id);

        $cek_foto = FotoModel::select('id_album')->where('id_album', $id)->first();
        if($cek_foto)
        {
            return redirect()->route('backend/album')->with(['error' => 'Data gagal dihapus, karena sudah berelasi!']);
        }else
        {
            $q = $data->delete();
            if($q)
            {
                return redirect()->route('backend/album')->with(['success' => 'Data Berhasil Dihapus!']);
            }else
            {
                return redirect()->route('backend/album')->with(['success' => 'Data Gagal Dihapus!']);
            }
        }
    }

}