@extends('layouts.app')
@section('content')
<section id="agenda" class="pt-3 pb-5">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12"><h3><b>BERITA<hr></b></h3></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form method="GET" action="{{ route('berita') }}">
                    <div class="input-group">
                        <input type="text" name="q" value="{{ $cari }}" class="form-control" placeholder="cari berita" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn bg-theme text-white"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if(!empty($cari))
            <div class="row mt-3">
                <div class="col-md-12">
                    Hasil pencarian menggunakan keyword: {{ $cari }}
                </div>
            </div>
        @endif
        <div class="row">
            @if($data->count() > 0)
                @foreach($data as $r)
                    @php
                        if($r->gambar != '' AND file_exists("img/berita/$r->gambar"))
                        {
                            $img = $r->gambar;
                        }else
                        {
                            $img = 'no-image.png';
                        }

                        $j = strlen($r->isi);
                        if($j > 100)
                        {
                            $isi_berita = $r->isi; 
                            $isi = substr($isi_berita,0,100); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
                            $isi = $isi.' ...';
                        }else
                        {
                            $isi = $r->isi;
                        }
                    @endphp
                    <div class="col-md-3 text-break mt-4">
                        <div class="card h-100">
                            <div class="card-body p-1">
                                <div class="card-img">
                                    <a href="{{ route('berita/detail', $r->slug) }}">
                                        <img src="/img/berita/{{ $img }}" class="img img-fluid mt-2" style="height: 150px; object-fit: contain;">
                                    </a>
                                </div>
                                <div class="card-desc">
                                    <h5>
                                        <a href="{{ route('berita/detail', $r->slug) }}" class="text-decoration-none judul_link"><b>{{ $r->nama }}</b></a>
                                    </h5>
                                    <span class="badge badge-primary"><i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }}</span>
                                    <span class="badge badge-danger"><i class="fa fa-clock-o"></i> {{ date('H:i', strtotime($r->created_at)) }}</span> 
                                    <hr>
                                    <p>{!! htmlspecialchars_decode($isi) !!}</p>
                                    <div class="text-right">
                                        <a href="{{ route('berita/detail', $r->slug) }}" class="btn btn-dark btn-sm">Lihat Detail <i class="fa fa-arrow-right"></i></a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center text-danger">
                    <b>BELUM ADA BERITA</b>
                </div>
                <br><br><br><br><br>            
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 mt-4 d-flex justify-content-center">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</section>
@endsection