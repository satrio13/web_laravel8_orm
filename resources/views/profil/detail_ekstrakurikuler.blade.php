@extends('layouts.app')
@section('content')
<section id="isi" class="pt-3 pb-5">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9 text-break">
                <h3><b>{{ $title }}</b></h3>
            </div>
        <div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-break">
                <div class="row">
                    @if($data->gambar != '' AND file_exists("img/ekstrakurikuler/$data->gambar"))
                        <div class="col-md-12">
                            <a href="/img/ekstrakurikuler/{{ $data->gambar }}" class="image-link">
                                <img src="/img/ekstrakurikuler/{{ $data->gambar }}" class="img img-fluid">
                            </a>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <br>{!! htmlspecialchars_decode($data->keterangan) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-none d-md-block">
                <ol class="breadcrumb-homepage breadcrumb bg-theme" style="margin-bottom: 5px">
                    <li class="text-white"><i class="fa fa-newspaper-o"></i> <b>BERITA POPULER</b></li>
                </ol>
                <ul class="list-group">
                    @if($berita_populer->count() > 0)
                        @foreach($berita_populer as $r)
                            @php
                                if($r->gambar != '' AND file_exists("img/berita/$r->gambar"))
                                {
                                    $img = $r->gambar;
                                }else
                                {
                                    $img = 'no-image.png';
                                }
                            @endphp
                            <li class="list-group-item d-flex justify-content-start align-items-start text-break">
                                <a href="{{ route('berita/detail', $r->slug) }}">
                                    <img src="/img/berita/{{ $img }}" class="img img-fluid mr-2" style="max-width: 80px">
                                </a>
                                <small>
                                    <a href="{{ route('berita/detail', $r->slug) }}" class="text-dark">{{ $r->nama }}</a>
                                    <br><i class="fa fa-calendar"></i> <b>{{ date('d M Y', strtotime($r->created_at)) }}</b>
                                </small>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item d-flex justify-content-center text-danger text-break">
                            <b>BELUM ADA BERITA</b>
                        </li>                    
                    @endif
                </ul>
                <br>
                <ol class="breadcrumb-homepage breadcrumb bg-theme" style="margin-bottom: 5px">
                    <li class="text-white"><i class="fa fa-link"></i> <b>LINK TERKAIT</b></li>
                </ol>
                <ul class="list-group">
                    @if($link_terkait->count() > 0)
                        @foreach($link_terkait as $r)
                            @if(is_url($r->link))
                                <li class="list-group-item d-flex justify-content-start text-break">
                                    <i class="fa fa-check-circle mr-2 mt-2"></i>      
                                    <a href="{{ $r->link }}" class="text-dark">{{ $r->nama }}</a>
                                </li>              
                            @else
                                <li class="list-group-item d-flex justify-content-start text-break">
                                    <i class="fa fa-check-circle  mr-2 mt-2"></i>
                                    <a href="javascript:void(0)" class="text-dark" onclick="return alert("LINK OFF")">{{ $r->nama }}</a>
                                </a>
                            @endif
                        @endforeach
                    @else
                        <li class="list-group-item d-flex justify-content-center text-danger text-break">
                            <b>BELUM ADA LINK</b>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>  
</section>         
@endsection