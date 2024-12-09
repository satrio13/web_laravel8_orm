@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>  
    </div> 
    <div class="row">
        <div class="col-md-12"><h3><b>STRUKTUR ORGANISASI</b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if($data->isi != '' AND file_exists("img/struktur/$data->isi"))
                <a href="/img/struktur/{{ $data->isi }}" class="image-link">
                    <img src="/img/struktur/{{ $data->isi }}" class="img img-fluid">
                </a>
            @endif            
        </div>
    </div>
</div>
<br><br><br>
@endsection