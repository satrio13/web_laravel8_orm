<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BeritaModel;
use App\Models\LinkModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    function index(Request $request)
    {     
        $data['titleweb'] = 'Berita - '.title();
		$data['title'] = 'Berita';
        
        $keyword = $request->input('q');
        if($keyword)
        {
            $data['data'] = BeritaModel::where('is_active', 1)->where('nama', 'like', '%'.$keyword.'%')->latest()->paginate(8);
        }else
        {
            $data['data'] = BeritaModel::where('is_active', 1)->latest()->paginate(8);
        }
        
        $data['cari'] = $keyword;
        return view('berita.index', $data);
    }

    function detail($slug)
    {
        $cek = BeritaModel::where('slug', $slug)->where('is_active', 1)->first();
        if($cek)
        {
            $get = $cek;
            $data['titleweb'] = $get->nama.' - '.title();
            $data['title'] = $get->nama;
                        
            $upd = ['dibaca' => $cek->dibaca + 1];
            $get->update($upd);

            $data['data'] = $get;
            $data['berita_populer'] = BeritaModel::select('id','nama','gambar','dibaca','is_active','hari','created_at','slug')->where('is_active', 1)->where('slug', '!=', $slug)->orderBy('dibaca','desc')->limit(3,0)->get();
            $data['link_terkait'] = LinkModel::where('is_active', 1)->latest()->get();
            return view('berita.detail', $data);
        }else
        {
            abort(404);
        }     
    }

}