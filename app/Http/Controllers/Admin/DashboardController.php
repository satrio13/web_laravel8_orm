<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IsiAlumniModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $data['title'] = 'Hasil Penelusuran Alumni';
        $data['data'] = IsiAlumniModel::latest()->get();
        return view('admin.alumni.penelusuran_alumni', $data);
    }
    
}