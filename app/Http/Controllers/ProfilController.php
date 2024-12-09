<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProfilModel;
use App\Models\SejarahModel;
use App\Models\VisiMisiModel;
use App\Models\StrukturOrganisasiModel;
use App\Models\SarprasModel;
use App\Models\EkstrakurikulerModel;
use App\Models\BeritaModel;
use App\Models\LinkModel;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    function index()
    {     
        if(jenjang() == 1 OR jenjang() == 2)
        {
            $data['titleweb'] = 'Profil Sekolah - '.title();
            $data['title'] = 'Profil Sekolah';
        }else
        {
            $data['titleweb'] = 'Profil Madrasah - '.title();
            $data['title'] = 'Profil Madrasah';
        }
     
        $data['data'] = ProfilModel::where('id', 1)->first();
        return view('profil.index', $data);
    }

    function sejarah()
    {
        $data['titleweb'] = 'Sejarah - '.title();
        $data['title'] = 'Sejarah';
        $data['data'] = SejarahModel::where('id', 1)->first();
        return view('profil/sejarah', $data);
    }

    function visi_misi()
    {
        $data['titleweb'] = 'Visi & Misi - '.title();
        $data['title'] = 'Visi & Misi';
        $data['data'] = VisiMisiModel::where('id', 1)->first();
        return view('profil/visi_misi', $data);
    }

    function struktur_organisasi()
    {
        $data['titleweb'] = 'Struktur Organisasi - '.title();
        $data['title'] = 'Struktur Organisasi';
        $data['data'] = StrukturOrganisasiModel::where('id', 1)->first();
        return view('profil/struktur_organisasi', $data);
    }

    function sarpras()
    {
        $data['titleweb'] = 'Sarana & Prasarana - '.title();
        $data['title'] = 'Sarana & Prasarana';
        $data['data'] = SarprasModel::where('id', 1)->first();
        return view('profil/sarpras', $data);
    }

    function ekstrakurikuler()
    {
        $data['titleweb'] = 'Ekstrakurikuler - '.title();
        $data['title'] = 'Ekstrakurikuler';
        $data['data'] = EkstrakurikulerModel::orderBy('nama_ekstrakurikuler', 'asc')->get();
        return view('profil/ekstrakurikuler', $data);
    }

    function detail_ekstrakurikuler($slug)
    {
        $cek = EkstrakurikulerModel::where('slug', $slug)->first();
        if($cek)
        {   
            $get = $cek;
            $data['titleweb'] = $get->nama_ekstrakurikuler.' - '.title();
            $data['title'] = $get->nama_ekstrakurikuler;
            $data['data'] = $get;
            $data['berita_populer'] = BeritaModel::select('id','nama','gambar','dibaca','is_active','hari','created_at','slug')->where('is_active', 1)->where('slug', '!=', $slug)->orderBy('dibaca','desc')->limit(3,0)->get();
            $data['link_terkait'] = LinkModel::where('is_active', 1)->latest()->get();
            return view('profil/detail_ekstrakurikuler', $data);
        }else
        {
            abort(404);
        }
    }

}