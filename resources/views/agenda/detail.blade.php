@extends('layouts.app')
@section('content')
<section id="isi" class="pt-3 pb-5">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agenda') }}">Agenda</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-9 text-break"><h3><b>{{ $title }}</b></h3><hr></div>
        <div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-break">
                <div class="row">
                    @if($data->gambar != '' AND file_exists("img/agenda/$data->gambar"))
                        <div class="col-md-12">
                            <a href="/img/agenda/{{ $data->gambar }}" class="image-link">
                                <img src="/img/agenda/{{ $data->gambar }}" class="img img-fluid"><br>
                            </a>
                        </div>
                    @endif
                    <div class="col-md-12">
                        {!! htmlspecialchars_decode($data->keterangan) !!}
                        <hr>
                        <table>
                            <tr>
                                <td style="vertical-align: top"><i class="fa fa-calendar"></i></td>
                                <td style="vertical-align: top" width="15%">Tanggal</td>
                                <td style="vertical-align: top">:</td>
                                <td style="vertical-align: top">                                     
                                    @if($data->berapa_hari == 2 AND $data->tgl_mulai != '0000-00-00' AND $data->tgl_selesai != '0000-00-00')
                                        {{ date('d-m-Y', strtotime($data->tgl_mulai)).' s.d. '.date('d-m-Y', strtotime($data->tgl_selesai)) }}
                                    @elseif($data->berapa_hari == 1 AND $data->tgl != '0000-00-00')
                                        {{ date('d-m-Y', strtotime($data->tgl)) }}
                                    @else
                                    
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top"><i class="fa fa-map-marker"></i></td>
                                <td style="vertical-align: top" width="15%">Jam</td>
                                <td style="vertical-align: top">:</td>
                                <td style="vertical-align: top">
                                    @if($data->jam_mulai != '' AND $data->jam_selesai != '')
                                        {{ date('H:i', strtotime($data->jam_mulai)).' s.d. '.date('H:i', strtotime($data->jam_selesai)) }}
                                    @endif 
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top"><i class="fa fa-clock-o"></i></td>
                                <td style="vertical-align: top" width="15%">Tempat</td>
                                <td style="vertical-align: top">:</td>
                                <td style="vertical-align: top">{{ $data->tempat }}</td>
                            </tr>
                        </table>
                        <hr>
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