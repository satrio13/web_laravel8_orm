<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use App\Models\BeritaModel;
use App\Models\LinkModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    function index(Request $request)
    {     
        $data['titleweb'] = 'Agenda - '.title();
		$data['title'] = 'Agenda';
        
        $keyword = $request->input('q');
        if($keyword)
        {
            $data['data'] = AgendaModel::where('nama_agenda', 'like', '%'.$keyword.'%')->latest()->paginate(6);
        }else
        {
            $data['data'] = AgendaModel::latest()->paginate(6);
        }
        
        $data['cari'] = $keyword;
        return view('agenda.index', $data);
    }

    function detail($slug)
    {
        $cek = AgendaModel::where('slug', $slug)->first();
        if($cek)
        {
            $get = $cek;
            $data['titleweb'] = $get->nama_agenda.' - '.title();
            $data['title'] = $get->nama_agenda;
            $data['data'] = $get;
            $data['berita_populer'] = BeritaModel::select('id','nama','gambar','dibaca','is_active','hari','created_at','slug')->where('is_active', 1)->where('slug', '!=', $slug)->orderBy('dibaca','desc')->limit(3,0)->get();
            $data['link_terkait'] = LinkModel::where('is_active', 1)->latest()->get();
            return view('agenda.detail', $data);
        }else
        {
            abort(404);
        }     
    }

}