@extends('layouts.app')
@section('content')
<div class="owl-carousel owl-theme">    
    @foreach($banner as $r)
        <div style="max-height:600px">
            <img class="img-fluid w-100 d-block" src="/img/banner/{{ $r->gambar }}">
            <div class="carousel-caption">
                <h3 class="text-shadow">{{ $r->judul }}</h3>
                <p class="text-shadow animated slideInLeft">{{ $r->keterangan }}</p>
                @if(!empty($r->link))
                    <a href="{{ $r->link }}" class="btn bg-warning border border-white btn-sm"><b>{{ $r->button }}</b></a>
                @endif
            </div>
        </div>
    @endforeach
</div>
<br>
<section class="details-card">
    <div class="container">
        <div class="row m-1 border">
            <div class="col-md-12 bg-theme text-white">
                <h3 class="mt-2"><b><i class="fa fa-calendar"></i>
                    @if(jenjang() == 1 OR jenjang() == 2)
                        AGENDA SEKOLAH
                    @else
                        AGENDA MADRASAH
                    @endif
                </b></h3>
            </div>
            @if($agenda->count() > 0)
                @foreach($agenda as $r)
                    @php
                        if($r->gambar != '' AND file_exists("img/agenda/$r->gambar"))
                        {
                            $img = $r->gambar;
                        }else
                        {
                            $img = 'no-image.png';
                        }

                        $tgl_sekarang = date('Y-m-d');
                        if($r->berapa_hari == 2 AND $r->tgl_mulai != '0000-00-00' AND $r->tgl_selesai != '0000-00-00')
                        {
                            $tgl = date('d-m-Y', strtotime($r->tgl_mulai)).' s.d. '.date('d-m-Y', strtotime($r->tgl_selesai));
                            if($tgl_sekarang == $r->tgl_mulai)
                            {
                                $status = '<span class="bg-primary"><h4><b>TODAY</b></h4></span>';
                            }elseif($tgl_sekarang > $r->tgl_mulai)
                            {
                                $status = '<span class="bg-danger"><h4><b>DONE</b></h4></span>';
                            }elseif($tgl_sekarang < $r->tgl_mulai)
                            {
                                $status = '<span class="bg-success"><h4><b>SOON</b></h4></span>';

                            }else
                            {
                                $status = '';
                            }
                        }elseif($r->berapa_hari == 1 AND $r->tgl != '0000-00-00')
                        {
                            $tgl = date('d-m-Y', strtotime($r->tgl));
                            if($tgl_sekarang == $r->tgl)
                            {
                                $status = '<span class="bg-primary"><h4><b>TODAY</b></h4></span>';
                            }elseif($tgl_sekarang > $r->tgl)
                            {
                                $status = '<span class="bg-danger"><h4><b>DONE</b></h4></span>';
                            }elseif($tgl_sekarang < $r->tgl)
                            {
                                $status = '<span class="bg-success"><h4><b>SOON</b></h4></span>';
                            }else
                            {
                                $status = '';
                            }
                        }else
                        {
                            $status = '';
                        } 

                        if($r->jam_mulai != '' AND $r->jam_selesai != '')
                        {
                            $jam = date('H:i', strtotime($r->jam_mulai)).' s.d. '.date('H:i', strtotime($r->jam_selesai));
                        }else
                        {
                            $jam = '';
                        }
                    @endphp
                    <div class="col-md-4 text-break mt-2">
                        <div class="card h-100">
                            <div class="card-body p-1">
                                <div class="card-img">
                                    <a href="{{ route('agenda/detail', $r->slug) }}">
                                        <img src="/img/agenda/{!! $img !!}" class="img img-fluid mt-2" style="height: 150px; object-fit: contain;">
                                        {!! $status !!}
                                    </a>
                                </div>
                                <div class="card-desc">
                                    <h5>
                                        <a href="{{ route('agenda/detail', $r->slug) }}" class="text-decoration-none judul_link"><b>{{ $r->nama_agenda }}</b></a>
                                    </h5>
                                    <table width="100%">
                                        <tr>
                                            <td width="25%" valign="top"><i class="fa fa-calendar"></i> Tgl</td>
                                            <td valign="top">:</td>
                                            <td>{{ $tgl }}</td>
                                        </tr>
                                        <tr>
                                            <td width="25%" valign="top"><i class="fa fa-clock-o"></i> Jam</td>
                                            <td valign="top">:</td>
                                            <td>{{ $jam }}</td>
                                        </tr>
                                        <tr>
                                            <td width="25%" valign="top"><i class="fa fa-map-marker"></i> Tempat</td>
                                            <td valign="top">:</td>
                                            <td>{{ $r->tempat }}</td>
                                        </tr>
                                    </table>
                                    <div class="text-right">
                                        <a href="route('agenda/detail', $r->slug) }}" class="btn btn-dark btn-sm">Lihat Detail <i class="fa fa-arrow-right"></i></a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <br>
                        <a href="{{ route('agenda') }}" class="btn btn-dark btn-sm">Lihat Selengkapnya <i class="fa fa-angle-right"></i></a>
                    <br><br>
                </div>
            @else
                <div class="col-md-12 text-center text-danger">
                    <br>
                        <h5>BELUM ADA AGENDA</h5>
                    <br>
                </div>
            @endif  
            <br>
        </div>
    </div>
</section>
<br>
<section class="details-card">
    <div class="container">
        <div class="row m-1 border">
            <div class="col-md-12 bg-theme text-white">
                <h3 class="mt-2"><b><i class="fa fa-bullhorn"></i> PENGUMUMAN</b></h3>
            </div>
            @if($pengumuman->count() > 0)
                @foreach($pengumuman as $r)
                    @php
                        if($r->gambar != '' AND file_exists("img/pengumuman/$r->gambar"))
                        {
                            $img = $r->gambar;
                        }else
                        {
                            $img = 'no-image.png';
                        }

                        $j = strlen($r->isi);
                        if($j > 100)
                        {
                            $isi_pengumuman = $r->isi; 
                            $isi = substr($isi_pengumuman,0,100); 
                            $isi = substr($isi_pengumuman,0,strrpos($isi," "));
                            $isi = $isi.' ...';
                        }else
                        {
                            $isi = $r->isi;
                        }
                    @endphp


                    <div class="col-md-3 text-break mt-2">
                        <div class="card h-100">
                            <div class="card-body p-1">
                                <div class="card-img">
                                    <a href="{{ route('pengumuman/detail', $r->slug) }}">
                                        <img src="/img/pengumuman/{!! $img !!}" class="img img-fluid mt-2" style="height: 150px; object-fit: contain;">
                                    </a>
                                </div>
                                <div class="card-desc">
                                    <h5>
                                        <a href="{{ route('pengumuman/detail', $r->slug) }}" class="text-decoration-none judul_link"><b>{{ $r->nama }}</b></a>
                                    </h5>
                                    <span class="badge badge-primary"><i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }}</span>
                                    <span class="badge badge-danger"><i class="fa fa-clock-o"></i> {{ date('H:i', strtotime($r->created_at)) }}</span> 
                                    <hr>
                                    <p>{!! htmlspecialchars_decode($isi) !!}</p>
                                    <div class="text-right">
                                        <a href="{{ route('pengumuman/detail', $r->slug) }}" class="btn btn-dark btn-sm">Lihat Detail <i class="fa fa-arrow-right"></i></a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <br>
                        <a href="{{ route('pengumuman') }}" class="btn btn-dark btn-sm">Lihat Selengkapnya <i class="fa fa-angle-right"></i></a>
                    <br><br>
                </div>
            @else
                <div class="col-md-12 text-center text-danger">
                    <br>
                        <h5>BELUM ADA PENGUMUMAN</h5>
                    <br>
                </div>
            @endif
            <br>
        </div>
    </div>
</section>
<br>
<section class="details-card">
    <div class="container">
        <div class="row m-1 border">
            <div class="col-md-12 bg-theme text-white">
                <h3 class="mt-2"><b><i class="fa fa-newspaper-o"></i> BERITA TERBARU</b></h3>
            </div>
            @if($berita->count() > 0)
                @foreach($berita as $r)
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


                    <div class="col-md-3 text-break mt-2">
                        <div class="card h-100">
                            <div class="card-body p-1">
                                <div class="card-img">
                                    <a href="{{ route('berita/detail', $r->slug) }}">
                                        <img src="/img/berita/{!! $img !!}" class="img img-fluid mt-2" style="height: 150px; object-fit: contain;">
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
                                        <a href="{{ route('pengumuman/detail', $r->slug) }}" class="btn btn-dark btn-sm">Lihat Detail <i class="fa fa-arrow-right"></i></a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <br>
                        <a href="{{ route('berita') }}" class="btn btn-dark btn-sm">Lihat Selengkapnya <i class="fa fa-angle-right"></i></a>
                    <br><br>
                </div>
            @else
                <div class="col-md-12 text-center text-danger">
                    <br>
                        <h5>BELUM ADA BERITA</h5>
                    <br>
                </div>
            @endif
            <br>
        </div>
    </div>
</section>
<br>
<section>
    <div class="container">
        <div class="row m-1 border">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 bg-theme text-white">
                        <h3 class="mt-2"><b><i class="fa fa-download"></i> DOWNLOAD</b></h3>
                    </div>
                    <div class="col-md-12 p-2">
                        <ul class="list-group">
                            @if($download->count() > 0)
                                @foreach($download as $r)
                                    <li class="list-group-item text-break">
                                        <b><a href="{{ route('download/hits', $r->file) }}" class="text-dark">{{ $r->nama_file }}</a></b>
                                        <br><small class="text-muted"><b><i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }} | <i class="fa fa-download"></i> {{ $r->hits }} x</b></small>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item text-danger text-center"><h5>BELUM ADA DOWNLOAD</h5></li>
                            @endif
                        </ul> 
                        <a href="{{ route('download') }}" class="btn btn-dark btn-sm btn-block mt-2"><b>Lihat Selengkapnya</b></a><br>
                    </div>
                </div>   
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 bg-theme text-white">
                        <h3 class="mt-2"><b><i class="fa fa-link"></i> LINK TERKAIT</b></h3>
                    </div>
                    <div class="col-md-12 p-2">
                        <ul class="list-group">
                            @if($link->count() > 0)
                                @foreach($link as $r)
                                    <li class="list-group-item d-flex justify-content-start text-break">
                                        <i class="fa fa-check-circle mr-2 mt-2"></i>
                                        <a href="{{ $r->link }}" class="text-dark">{{ $r->nama }}</a>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item text-danger text-center"><h5>BELUM ADA LINK</h5></li>
                            @endif
                        </ul>   
                        <a href="javascript:void(0)" class="btn btn-dark btn-sm btn-block mt-2"><b>Lihat Selengkapnya</b></a><br>
                    </div> 
                </div>   
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 bg-theme text-white">
                        <h3 class="mt-2"><b><i class="fa fa-users"></i> EKSTRAKURIKULER</b></h3>
                    </div>
                    <div class="col-md-12 p-2">
                        <ul class="list-group">
                            @if($ekstrakurikuler->count() > 0)
                                @foreach($ekstrakurikuler as $r)
                                    <li class="list-group-item text-break">
                                        <a href="{{ route('ekstrakurikuler/detail', $r->slug) }}" target="_blank" class="text-dark"><b>{{ $r->nama_ekstrakurikuler }}</b></a>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item text-danger text-center"><h5>BELUM ADA EKSTRAKURIKULER</h5></li>
                            @endif
                        </ul> 
                        <a href="{{ route('ekstrakurikuler') }}" class="btn btn-dark btn-sm btn-block mt-2"><b>Lihat Selengkapnya</b></a><br>
                    </div>
                </div>   
            </div>
        </div> 
    </div>
</section>
<br>
<section>
    <div class="container">
        <div class="row m-1 border">
            <div class="col-md-12 bg-theme text-white">
                <h3 class="mt-2"><b><i class="fa fa-image"></i> GALERI</b></h3>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @if($album->count() > 0)
                        @foreach($album as $r)
                            @php
                                $get = get_foto($r->id_album);
                                if($get['status'] == true)
                                {
                                    $img = $get['foto'];
                                }else
                                {
                                    $img = 'no-image.png';
                                }
                            @endphp
                            <div class="col-md-6 mb-3 mt-3 text-break">
                                <div class="card h-100">
                                    <a href="{{ route('galeri/album', $r->slug) }}">
                                        <img src="/img/foto/{{ $img }}" class="img img-fluid card-img mt-2" style="height: 150px; object-fit: contain;">
                                    </a>
                                    <div class="card-body">
                                        <a href="{{ route('galeri/album', $r->slug) }}" class="card-text judul_link text-decoration-none"><b>{{ $r->album }}</b></a>
                                    </div>
                                    <div class="card-footer">
                                        <small><i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }} | <i class="fa fa-folder-open"></i>{{ jml_foto($r->id_album) }} Foto</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center">
                            <a href="{{ route('galeri/foto') }}" class="btn btn-dark btn-sm">Lihat Galeri Foto <i class="fa fa-angle-right"></i></a>
                            <br><br>
                        </div>
                    @else
                        <div class="col-md-12 text-center text-danger">
                            <br><b>BELUM ADA ALBUM FOTO</b>
                        </div>
                    @endif
                </div>   
            </div>
            <div class="col-md-6">
                <div class="row">
                    @if($video->count() > 0)
                        @foreach($video as $r) 
                            <div class="col-md-6 mb-3 mt-3 text-break">
                                <div class="card h-100">
                                    <iframe src="https://www.youtube.com/embed/{{ $r->link }}"></iframe>
                                    <div class="card-body">
                                        <a href="https://www.youtube.com/embed/{{ $r->link }}" target="_blank" class="card-text judul_link text-decoration-none"><b>{{ $r->judul }}</b></a>
                                    </div>
                                    <div class="card-footer">
                                        <small><i class="fa fa-calendar"></i> {{ tgl_indo($r->created_at) }} <i class="fa fa-clock-o"></i> {{ date('H:i', strtotime($r->created_at)) }} WIB</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center">
                            <a href="{{ route('galeri/video') }}" class="btn btn-dark btn-sm">Lihat Galeri Video <i class="fa fa-angle-right"></i></a>
                            <br><br>
                        </div>
                    @else
                        <div class="col-md-12 text-break text-center text-danger">
                            <br><b>GALERI VIDEO MASIH KOSONG</b>
                        </div>
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row m-1">
                    <div class="col-12 bg-theme text-white">
                        <h3 class="mt-2"><b><i class="fa fa-graduation-cap"></i> ALUMNI</b></h3>
                    </div>
                </div>
                <div class="row m-1 border">
                    <div class="col-md-12">
                        @if($alumni->count() > 0)    
                            <div class="owl-carousel owl-theme">
                            @foreach($alumni as $r)
                                @php
                                    if(!empty($r->gambar) AND file_exists("img/alumni/$r->gambar"))
                                    {
                                        $img = $r->gambar;
                                    }else
                                    {
                                        $img = 'no-image.png';
                                    }
                                @endphp
                                <div class="text-break ml-5 mr-5">
                                    <img src="/img/alumni/{{ $img }}" class="img img-fluid mt-4" style="object-fit:contain; max-height:100px;">
                                    <p class="text-center">" {{ $r->kesan }} "</p>
                                    <p class="text-center"><b>{{ $r->nama }}</b></p>
                                </div>
                            @endforeach
                            </div>
                        @else
                            <div class="text-center p-4">
                                <h5>SILAHKAN MENGISI DATA ALUMNI</h5>
                                <a href="{{ route('alumni/penelusuran-alumni') }}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Isi Data Alumni</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row m-1">
                    <div class="col-12 bg-theme text-white">
                        <h3 class="mt-2"><b><i class="fa fa-comment"></i> PENGADUAN</b></h3>
                    </div>
                </div>
                <div class="row m-1 border">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('pengaduan') }}" title="Klik Disini untuk menuju halaman pengaduan {{ title() }}">
                            <img src="/file/pengaduan.png" class="img img-fluid mt-2 mb-2" style="height: 70px; object-fit: contain;">
                        </a>
                    </div>
                </div>    
            </div>
        </div>  
    </div>          
</section>
<br>     
@endsection