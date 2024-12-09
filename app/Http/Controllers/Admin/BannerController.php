<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    function index()
    {     
        $data['title'] = 'Banner';
        $data['data'] = BannerModel::latest()->get();
        return view('admin.banner.index', $data);
    }

    function tambah_banner()
    {     
        $data['title'] = 'Tambah Banner';
        return view('admin.banner.form_tambah', $data);
    }

    function simpan_banner(Request $request)
    {   
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:1024',
            'judul' => 'max:100',
            'keterangan' => 'max:200',
            'button' => 'max:30',
            'link' => 'nullable|url|max:300',
            'is_active' => 'required'
        ]);
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {            
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/banner'), $nama_gambar);
        }
    
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = BannerModel::create($data);
        if($q)
        {
            return redirect()->route('backend/banner')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_banner($id)
    {
        $banner = BannerModel::findOrFail($id);
        $data['title'] = 'Edit Banner';
        $data['data'] = $banner;
        return view('admin.banner.form_edit', $data);
    }

    function update_banner(Request $request, $id)
    {   
        $request->validate([
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024',
            'judul' => 'max:100',
            'keterangan' => 'max:200',
            'button' => 'max:30',
            'link' => 'nullable|url|max:300',
            'is_active' => 'required'
        ]);
            
        $banner = BannerModel::select('id', 'gambar')->findOrFail($id);
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid())
        {   
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/banner'), $nama_gambar);
            if(File::exists("img/banner/$banner->gambar"))
            {
                File::delete("img/banner/$banner->gambar");
            }
        }else
        {
            $nama_gambar = $banner->gambar;
        }
        
        $data = array_merge($request->all(), ['gambar' => $nama_gambar]);
        $q = $banner->update($data);
        if($q)
        {
            return redirect()->route('backend/banner')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_banner($id)
    {
        $data = BannerModel::select('id', 'gambar')->findOrFail($id); 
        if(File::exists("img/banner/$data->gambar"))
        {
            File::delete("img/banner/$data->gambar");
        }

        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/banner')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/banner')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    } 

}