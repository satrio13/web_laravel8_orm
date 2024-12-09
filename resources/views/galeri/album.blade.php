@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12"><h3><b>{{ $title }}</b></h3><hr></div>
    </div>
    <div class="row">
        @if($data->count() > 0)
            @foreach($data as $r)
                <div class="col-md-3 mb-3 text-break">
                    <div class="card">
                        @if($r->foto !='' AND file_exists("img/foto/$r->foto"))
                            <a href="/img/foto/{{ $r->foto }}" class="image-link">
                                <img src="/img/foto/{{ $r->foto }}" class="img img-fluid" style="object-fit:contain; width:100%; max-height:150px;">
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12 text-center text-danger">
                <b>BELUM ADA FOTO DI DALAM ALBUM INI</b>
            </div>
        @endif
    </div>
</div>
<br><br>
@endsection