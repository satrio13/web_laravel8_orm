<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\AgendaModel;
use App\Models\PengumumanModel;
use App\Models\BeritaModel;
use App\Models\DownloadModel;
use App\Models\LinkModel;
use App\Models\EkstrakurikulerModel;
use App\Models\AlbumModel;
use App\Models\VideoModel;
use App\Models\IsiAlumniModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index()
    {     
        $data['titleweb'] = title();
        $data['banner'] = BannerModel::where('is_active', 1)->latest()->get();
        $data['agenda'] = AgendaModel::latest()->limit(3,0)->get();
        $data['pengumuman'] = PengumumanModel::where('is_active', 1)->latest()->limit(4,0)->get();
        $data['berita'] = BeritaModel::where('is_active', 1)->latest()->limit(4,0)->get();
        $data['download'] = DownloadModel::where('is_active', 1)->latest()->limit(5,0)->get();
        $data['link'] = LinkModel::where('is_active', 1)->latest()->get();
        $data['ekstrakurikuler'] = EkstrakurikulerModel::latest()->limit(5,0)->get();
        $data['album'] = AlbumModel::where('is_active', 1)->latest()->limit(2,0)->get();
        $data['video'] = VideoModel::latest()->limit(2,0)->get();
        $data['alumni'] = IsiAlumniModel::where('status', 1)->where('kesan', '!=', '')->where('gambar', '!=', '')->latest()->limit(6,0)->get();
        return view('home', $data);
    }

}