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
                        <div class="card-header">
                            <a href="{{ route('backend/tambah-berita') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Berita</a>
                            <a href="" target="_self" class="btn bg-maroon btn-sm"><i class="fas fa-sync-alt"></i> Refresh</a>
                            <br><br>
                            <h3 class="text-center">{{ strtoupper($title) }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped table-sm" id="datatable">
                                    <thead class="bg-secondary text-center">
                                        <tr>
                                            <th width="5%">NO</th>
                                            <th>NAMA BERITA</th>
                                            <th>ISI</th>
                                            <th>GAMBAR</th>
                                            <th>OLEH</th>
                                            <th>TANGGAL</th>
                                            <th>STATUS</th>
                                            <th>DIBACA</th>
                                            <th>AKSI</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $r)
                                        @php
                                            if(strlen($r->isi) > 200)
                                            {
                                                $isi = substr($r->isi,0,200); 
                                                $berita = substr($r->isi,0,strrpos($isi," ")). '...';
                                            }else
                                            {
                                                $berita = $r->isi;
                                            }

                                            if($r->gambar != '' AND file_exists("img/berita/$r->gambar"))
                                            {
                                                $img = '<a href="/img/berita/'.$r->gambar.'" target="_blank">
                                                            <img src="/img/berita/'.$r->gambar.'" class="img img-fluid" width="100px">
                                                        </a>'; 
                                            }else
                                            {
                                                $img = '';
                                            }

                                            if($r->is_active == 1)
                                            {
                                                $status = '<span class="badge badge-primary">Aktif</span>';
                                            }else
                                            {
                                                $status = '<span class="badge badge-danger">Non Aktif</span>';
                                            }
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $no + 1 }}</td>
                                            <td>{{ $r->nama }}</td>
                                            <td>{!! htmlspecialchars_decode($berita) !!}</td>
                                            <td class="text-center">{!! $img !!}</td>
                                            <td>{{ $r->user->nama }}</td>
                                            <td>{{ $r->hari. ', ' .date('d-m-Y', strtotime($r->tgl)) }}</td>
                                            <td class="text-center">{!! $status !!}</td>
                                            <td>{{ $r->dibaca }} Kali</td>
                                            <td class="text-center" nowrap>
                                                <a href="{{ route('backend/edit-berita', $r->id) }}" class="btn btn-info btn-xs" title="EDIT DATA">EDIT</a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#konfirmasi_hapus" data-href="{{ route('backend/hapus-berita', $r->id) }}" title="HAPUS DATA">HAPUS</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade mt-5" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>    
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            handle_datatable();
            handle_confirm_delete();
        });

        function handle_datatable()
        {
            $("#datatable").DataTable();
        }

        function handle_confirm_delete()
        {
            $("#konfirmasi_hapus").on("show.bs.modal", function (e) {
                $(this).find(".btn-ok").attr("href", $(e.relatedTarget).data("href"));
            });
        }       
    </script>
@endsection