<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    function index()
    {     
        $data['title'] = 'Agenda';
        $data['data'] = AgendaModel::latest()->get();
        return view('admin.agenda.index', $data);
    }

    function tambah_agenda()
    {     
        $data['title'] = 'Tambah Agenda';
        return view('admin.agenda.form_tambah', $data);
    }

    function simpan_agenda(Request $request)
    {   
        if($request->input('berapa_hari') == '1')
        {
            $request->validate([
                'nama_agenda' => 'required|max:100',
                'berapa_hari' => 'required|numeric',
                'tgl' => 'required|date',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'tempat' => 'required|max:100',
                'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
            ]);
        }else
        {
            $request->validate([
                'nama_agenda' => 'required|max:100',
                'berapa_hari' => 'required|numeric',
                'tgl_mulai' => 'required|date|before_or_equal:tgl_selesai',
                'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'tempat' => 'required|max:100',
                'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
            ]);
        }
            
        $nama_gambar = '';
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/agenda'), $nama_gambar);
        }

        $data = array_merge($request->all(), ['gambar' => $nama_gambar, 'slug' => Str::slug($request->input('nama_agenda'), '-')]);
        $q = AgendaModel::create($data);
        if($q)
        {
            return redirect()->route('backend/agenda')->with(['success' => 'Data Berhasil Disimpan!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    function edit_agenda($id)
    {   
        $agenda = AgendaModel::findOrFail($id);
        $data['title'] = 'Edit Agenda';
        $data['data'] = $agenda;
        return view('admin.agenda.form_edit', $data);
    }  

    function update_agenda(Request $request, $id)
    {
        if($request->input('berapa_hari') == '1')
        {
            $request->validate([
                'nama_agenda' => 'required|max:100',
                'berapa_hari' => 'required|numeric',
                'tgl' => 'required|date',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'tempat' => 'required|max:100',
                'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
            ]);
        }else
        {
            $request->validate([
                'nama_agenda' => 'required|max:100',
                'berapa_hari' => 'required|numeric',
                'tgl_mulai' => 'required|date',
                'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'tempat' => 'required|max:100',
                'gambar' => 'image|mimes:jpeg,jpg,png|max:1024'
            ]);
        }

        $agenda = AgendaModel::select('id', 'gambar')->findOrFail($id);
        if($request->hasFile('gambar') AND $request->file('gambar')->isValid()) 
        {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'_'.$gambar->hashName();
            $gambar->move(public_path('img/agenda'), $nama_gambar);
            if(File::exists("img/agenda/$agenda->gambar"))
            {
                File::delete("img/agenda/$agenda->gambar");
            }
        }else
        {
            $nama_gambar = $agenda->gambar;
        }

        $data = array_merge($request->all(), ['gambar' => $nama_gambar, 'slug' => Str::slug($request->input('nama_agenda'), '-')]);
        $q = $agenda->update($data);
        if($q)
        {
            return redirect()->route('backend/agenda')->with(['success' => 'Data Berhasil Diupdate!']);
        }else
        {
            return redirect()->back()->withInput()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    function hapus_agenda($id)
    {
        $data = AgendaModel::select('id', 'gambar')->findOrFail($id);
        if(File::exists("img/agenda/$data->gambar"))
        {
            File::delete("img/agenda/$data->gambar");
        }
        
        $q = $data->delete();
        if($q)
        {
            return redirect()->route('backend/agenda')->with(['success' => 'Data Berhasil Dihapus!']);
        }else
        {
            return redirect()->route('backend/agenda')->with(['errors' => 'Data Gagal Dihapus!']);
        }
    }  

}