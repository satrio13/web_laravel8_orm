<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AlbumModel;
use App\Models\FotoModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    function foto()
    {     
        $data['titleweb'] = 'Galeri Foto - '.title();
		$data['title'] = 'Foto';
        $data['data'] = AlbumModel::where('is_active', 1)->latest()->paginate(8);
        return view('galeri/foto', $data);
    }

    function album($slug)
    {
        $cek = AlbumModel::where('slug', $slug)->where('is_active', 1)->first();
        if($cek)
        {
            $get = $cek;
            $data['titleweb'] = $get->album.' - '.title();
            $data['title'] = $get->album;
            $data['data'] = FotoModel::select('tb_foto.*', 'tb_album.*')->join('tb_album','tb_foto.id_album', '=', 'tb_album.id_album')->where('tb_album.is_active',1)->where('tb_album.slug', $slug)->orderBy('tb_foto.created_at','desc')->get();
            return view('galeri/album', $data);
        }else
        {
            abort(404);
        }   
    }

    function video()
    {
        $data['titleweb'] = 'Galeri Video - '.title();
		$data['title'] = 'Video';
        $data['data'] = VideoModel::latest()->paginate(8);
        return view('galeri/video', $data);
    }

}