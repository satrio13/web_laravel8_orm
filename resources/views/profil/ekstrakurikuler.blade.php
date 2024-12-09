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
        <div class="col-md-12"><h3><b>DAFTAR EKSTRAKURIKULER</b></h3><hr></div>
    </div>
    @foreach($data as $no => $r)
        <div class="row">
            <div class="col-md-12"><b>{{ $no + 1 }}. <a href="{{ route('ekstrakurikuler/detail', $r->slug) }}" class="text-dark" title="lihat detail">{{ $r->nama_ekstrakurikuler }}</a></b></div>
        </div>
    @endforeach
</div>
<br><br>
@endsection