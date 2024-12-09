@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('backend') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        {!! pesan_sukses(session('success')) !!}
                    @elseif(session('error'))
                        {!! pesan_gagal(session('error')) !!}
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">NAMA SEKOLAH / MADRASAH</div>
                                    <div class="col-md-6">: {{ $data->nama_web }}</div>
                                    <div class="col-md-4"><a href="{{ route('backend/edit-profil-web') }}" class="btn btn-primary float-right btn-sm"><i class="fa fa-edit"></i> EDIT PROFIL WEB</a></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">JENJANG</div>
                                    <div class="col-md-10">: 
                                                            @if($data->jenjang == 1)
                                                                SMP     
                                                            @elseif($data->jenjang == 2)
                                                                SMA
                                                            @elseif($data->jenjang == 3)
                                                                MTs  
                                                            @elseif($data->jenjang == 4)
                                                                MAN  
                                                            @endif
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">LOGO WEBSITE</div>
                                    <div class="col-md-10">: 
                                                            <img src="/img/logo/{{ $data->logo_web }}" style="object-fit:contain; max-height:150px;">
                                                            <a href="{{ route('backend/logo-web') }}" class="text-bold ml-3"><i class="fa fa-edit"></i> EDIT LOGO WEB</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">FAVICON WEBSITE</div>
                                    <div class="col-md-10">: 
                                                            <img src="/img/logo/{{ $data->favicon }}" style="object-fit:contain; max-height:150px;">
                                                            <a href="{{ route('backend/favicon') }}" class="text-bold ml-3"><i class="fa fa-edit"></i> EDIT FAVICON WEB</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">LOGO LOGIN ADMIN</div>
                                    <div class="col-md-10">: 
                                                            <img src="/img/logo/{{ $data->logo_admin }}" style="object-fit:contain; max-height:150px;">
                                                            <a href="{{ route('backend/logo-admin') }}" class="text-bold ml-3"><i class="fa fa-edit"></i> EDIT LOGO LOGIN ADMIN</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">META DESCRIPTION</div>
                                    <div class="col-md-10">: {{ $data->meta_description }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">META KEYWORD</div>
                                    <div class="col-md-10">: {{ $data->meta_keyword }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">PROFIL</div>
                                    <div class="col-md-10">: {!! htmlspecialchars_decode($data->profil) !!}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">ALAMAT</div>
                                    <div class="col-md-10">: {{ $data->alamat }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">EMAIL</div>
                                    <div class="col-md-10">: {{ $data->email }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">TELP</div>
                                    <div class="col-md-10">: {{ $data->telp }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">FAX</div>
                                    <div class="col-md-10">: {{ $data->fax }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">WHATSAPP</div>
                                    <div class="col-md-10">: {{ $data->whatsapp }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">AKREDITASI</div>
                                    <div class="col-md-10">: {{ $data->akreditasi }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">KURIKULUM</div>
                                    <div class="col-md-10">: {{ $data->kurikulum }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">NAMA KEPSEK / KAMAD</div>
                                    <div class="col-md-10">: {{ $data->nama_kepsek }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">NAMA OPERATOR</div>
                                    <div class="col-md-10">: {{ $data->nama_operator }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">INSTAGRAM</div>
                                    <div class="col-md-10">: {{ $data->instagram }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">FACEBOOK</div>
                                    <div class="col-md-10">: {{ $data->facebook }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">TWITTER</div>
                                    <div class="col-md-10">: {{ $data->twitter }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">YOUTUBE</div>
                                    <div class="col-md-10">: {{ $data->youtube }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">GAMBAR PROFIL</div>
                                    <div class="col-md-10">: 
                                                            @if(!empty($data->gambar))
                                                                <img src="/img/profil/{{ $data->gambar }}" style="object-fit:contain; max-height:150px;">
                                                                <a href="{{ route('backend/gambar-profil') }}" class="text-bold ml-3">
                                                                    <i class="fa fa-edit"></i> EDIT GAMBAR PROFIL
                                                                </a>
                                                            @else
                                                                <a href="{{ route('backend/gambar-profil') }}" class="text-bold ml-3">
                                                                    <i class="fa fa-edit"></i> TAMBAH GAMBAR PROFIL
                                                                </a>  
                                                            @endif                                                            
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-bold">FILE</div>
                                    <div class="col-md-10">: 
                                                            @if(!empty($data->file))
                                                                <b><a href="/file/{{ $data->file }}" target="_blank">{{ $data->file }}</a></b><br>
                                                                <a href="{{ route('backend/file') }}" class="text-bold"><i class="fa fa-edit"></i> EDIT FILE</a>
                                                            @else
                                                                <span class="text-danger text-bold">Belum Ada File</span> <a href="{{ route('backend/file') }}" class="text-bold"><br><i class="fa fa-edit"></i> TAMBAH FILE</a>
                                                            @endif 
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')

@endsection