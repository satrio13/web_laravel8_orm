<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DownloadModel;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    function index()
    {
        $data['titleweb'] = 'Download - '.title();
		$data['title'] = 'Download';
        $data['data'] = DownloadModel::where('is_active', 1)->latest()->get();
        return view('download/index', $data);
    }

    function hits($file)
    {
        $cek = DownloadModel::where('is_active', 1)->where('file', $file)->first();
        if($cek)
        {
            $download = $cek;
            $upd = ['hits' => $cek->hits + 1];
            $download->update($upd);
            $path = "file/$cek->file";
            if(!file_exists($path))
            {
                return abort(404, 'File not found');
            }else
            {
                // Membuat response download
                $response = response()->download($path);
                
                // Mengatur header untuk mematikan caching
                $response->headers->add([
                    'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                    'Pragma' => 'no-cache',
                    'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT', // Tanggal kedaluwarsa
                ]);

                return $response;
            }
        }else
        {
            abort(404);
        }
    }

}