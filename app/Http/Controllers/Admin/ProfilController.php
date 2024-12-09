<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilController extends Controller
{
    function index()
    {     
        $data['title'] = 'Profil Website';
        $data['data'] = ProfilModel::where('id', 1)->first();
        return view('admin.profil.index', $data);
    }

    function edit_profil_web()
    {
        $data['title'] = 'Edit Profil Website';
        $data['data'] = ProfilModel::where('id', 1)->first();
        return view('admin.profil.form_profil', $data);
    }

    function update_profil_web(Request $request)
    {
        $request->validate([
            'nama_web' => 'required|max:100',
            'jenjang' => 'required|numeric',
            'meta_description' => 'required|max:300',
            'meta_keyword' => 'required|max:200',
            'alamat' => 'required|max:300',
            'email' => 'required|email|max:100',
            'telp' => 'required|max:20',
            'fax' => 'required|max:20',
            'whatsapp' => 'max:20',
            'akreditasi' => 'max:5',
            'kurikulum' => 'required|max:30',
            'nama_kepsek' => 'required|max:100',
            'nama_operator' => 'required|max:100',
            'instagram' => 'nullable|url|max:200',
            'facebook' => 'nullable|url|max:200',
            'twitter' => 'nullable|url|max:200',
            'youtube' => 'nullable|url|max:200'
        ]);
        
        $profil = ProfilModel::where('id', 1)->first();
        $q = $profil->update($request->all());
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function logo_web()
    {
        $data['title'] = 'Edit Logo Website';
        $data['data'] = ProfilModel::select('logo_web')->where('id', 1)->first();
        return view('admin.profil.form_logo_web', $data);
    }

    function update_logo_web(Request $request)
    {
        $request->validate([
            'logo_web' => 'required|image|mimes:jpeg,jpg,png|max:1024'
        ]);
        
        $profil = ProfilModel::select('id', 'logo_web')->where('id', 1)->first();
        if($request->hasFile('logo_web') AND $request->file('logo_web')->isValid()) 
        {
            $gambar = $request->file('logo_web');
            $nama_gambar = time().'_'.$gambar->getClientOriginalName();
            $gambar->move(public_path('img/logo'), $nama_gambar);
            if(File::exists("img/logo/$profil->logo_web"))
            {
                File::delete("img/logo/$profil->logo_web");
            }
        }   

        $data = ['logo_web' => $nama_gambar];
        $q = $profil->update($data);
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File Gagal Diupdate, silahkan coba lagi!']);
        }
    }

    function favicon()
    {
        $data['title'] = 'Edit Favicon';
        $data['data'] = ProfilModel::select('favicon')->where('id', 1)->first();
        return view('admin.profil.form_favicon', $data);
    }

    function update_favicon(Request $request)
    {
        $request->validate([
            'favicon' => 'required|max:100'
        ]);
        
        $profil = ProfilModel::select('id', 'favicon')->where('id', 1)->first();
        if($request->hasFile('favicon') AND $request->file('favicon')->isValid()) 
        {
            $gambar = $request->file('favicon');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/logo'), $nama_gambar);
            if(File::exists("img/logo/$profil->favicon"))
            {
                File::delete("img/logo/$profil->favicon");
            }               
        }

        $data = ['favicon' => $nama_gambar];
        $q = $profil->update($data);
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File Gagal Diupdate, silahkan coba lagi!']);
        }
    }

    function logo_admin()
    {
        $data['title'] = 'Edit Logo Login Admin';
        $data['data'] = ProfilModel::select('logo_admin')->where('id', 1)->first();
        return view('admin.profil.form_logo_admin', $data);
    }

    function update_logo_admin(Request $request)
    {
        $request->validate([
            'logo_admin' => 'required|image|mimes:jpeg,jpg,png|max:1024'
        ]);
        
        $profil = ProfilModel::select('id', 'logo_admin')->where('id', 1)->first();
        if($request->hasFile('logo_admin') AND $request->file('logo_admin')->isValid()) 
        {
            $gambar = $request->file('logo_admin');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/logo'), $nama_gambar);
            if(File::exists("img/logo/$profil->logo_admin"))
            {
                File::delete("img/logo/$profil->logo_admin");
            }
        }

        $data = ['logo_admin' => $nama_gambar];
        $q = $profil->update($data);
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File Gagal Diupdate, silahkan coba lagi!']);
        }
    }

    function gambar_profil()
    {
        $data['title'] = 'Edit Gambar Profil';
        $data['data'] = ProfilModel::select('gambar')->where('id', 1)->first();
        return view('admin.profil.form_gambar_profil', $data);
    }

    function update_gambar_profil(Request $request)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
        ]);
        
        $nama_gambar = '';
        $profil = ProfilModel::select('id', 'gambar')->where('id', 1)->first();
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->getClientOriginalName();
            $gambar->move(public_path('img/profil'), $nama_gambar);
            if(File::exists("img/profil/$profil->gambar"))
            {
                File::delete("img/profil/$profil->gambar");
            }
        }

        $data = ['gambar' => $nama_gambar];
        $q = $profil->update($data);
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File Gagal Diupdate, silahkan coba lagi!']);
        }
    }

    function file()
    {
        $data['title'] = 'Edit File';
        $data['data'] = ProfilModel::select('file')->where('id', 1)->first();
        return view('admin.profil.form_file', $data);
    }

    function update_file(Request $request)
    {
        $request->validate([
            'file' => 'mimes:pdf|max:5120'
        ]);
        
        $nama_file = '';
        $profil = ProfilModel::select('id', 'file')->where('id', 1)->first();
        if($request->hasFile('file') AND $request->file('file')->isValid()) 
        {
            $file = $request->file('file');
            $nama_file = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('file'), $nama_file);
            if(File::exists("file/$profil->file"))
            {
                File::delete("file/$profil->file");
            }    
        }

        $data = ['file' => $nama_file];
        $q = $profil->update($data);
        if($q)
        {
            return redirect()->route('backend/profil-web')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File Gagal Diupdate, silahkan coba lagi!']);
        }
    }

}