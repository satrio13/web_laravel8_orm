<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FotoModel;
use App\Models\AlbumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FotoController extends Controller
{
    function index()
    {     
        $data['title'] = 'Foto';
        $data['album'] = AlbumModel::orderBy('album', 'desc')->get();
        $data['data'] = FotoModel::with('album')->latest()->get();
        return view('admin.foto.index', $data);
    }

    function simpan_foto(Request $request)
    {   
        $request->validate([
            'id_album' => 'required',
            'files.*' => 'image|mimes:jpeg,jpg,png|max:7168'
        ]);

        $files = $request->file('files');
        if(!empty($files))
        {
            foreach($files as $file)
            {
                $nama_file = time().'_'.$file->hashName();
                $file->move(public_path('img/foto'), $nama_file);

                $data = [
                    'id_album' => $request->input('id_album'),
                    'foto' => $nama_file
                ];

                $q = FotoModel::create($data);
            }

            if($q)
            {
                return redirect()->route('backend/foto')->with(['success' => 'File Berhasil Diupload!']);
            }else
            {
                return redirect()->back()->withInput()->with(['error' => 'File gagal diupload, silahkan coba lagi!!']);
            }
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'File gagal diupload! periksa kembali format dan ukuran file anda..']);
        }
    }

    function hapus_foto($id)
    {
        $data = FotoModel::select('id_foto', 'foto')->findOrFail($id);  
        if(File::exists("img/foto/$data->foto"))
        {
            File::delete("img/foto/$data->foto");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/foto')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/foto')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}