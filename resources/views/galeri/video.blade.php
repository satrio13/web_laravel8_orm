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
        <div class="col-md-12"><h3><b>GALERI VIDEO</b></h3><hr></div>
    </div>
    <div class="row">
        @if($data->count() > 0)
            @foreach($data as $r) 
                <div class="col-md-4 mb-3 text-break">
                    <div class="card h-100">
                        <iframe src="https://www.youtube.com/embed/{{ $r->link }}"></iframe>
                        <div class="card-body">
                            <p class="card-text"><b>{{ $r->judul }}</b></p>
                            <small>{{ $r->keterangan }}</small>
                        </div>
                        <div class="card-footer">
                            <small>Waktu Upload: <i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }} <i class="fa fa-clock-o"></i> {{ date('H:i', strtotime($r->created_at)) }} WIB</small>
                        </div>
                    </div>
                </div>
            @endforeach 
        @else
            <div class="col-md-12 text-break text-center text-danger">
                <b>GALERI VIDEO MASIH KOSONG</b>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12 mt-4 d-flex justify-content-center">
            {{ $data->links() }}
        </div>
    </div>
</div>
<br>
@endsection