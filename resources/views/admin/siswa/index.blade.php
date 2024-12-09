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
                            <a href="{{ route('backend/tambah-siswa') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Peserta Didik</a>
                            <a href="" target="_self" class="btn bg-maroon btn-sm"><i class="fas fa-sync-alt"></i> Refresh</a>
                            <br><br>
                            <h3 class="text-center">{{ strtoupper($title) }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped table-sm" id="datatable">
                                    <thead class="bg-secondary text-center">
                                        <tr>
                                            <th colspan="2">JUMLAH PESERTA DIDIK</th>
                                            <th colspan="3">Kelas  
                                                                @if(jenjang() == 1 OR jenjang() == 3)
                                                                    VII
                                                                @elseif(jenjang() == 2 OR jenjang() == 4)
                                                                    X
                                                                @endif
                                            </th>
                                            <th colspan="3">Kelas  
                                                                @if(jenjang() == 1 OR jenjang() == 3)
                                                                    VIII
                                                                @elseif(jenjang() == 2 OR jenjang() == 4)                                                                
                                                                    XI
                                                                @endif
                                            </th>
                                            <th colspan="3">Kelas  
                                                                @if(jenjang() == 1 OR jenjang() == 3)
                                                                    IX
                                                                @elseif(jenjang() == 2 OR jenjang() == 4)
                                                                    XII
                                                                @endif 
                                            </th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th width="5%">NO</th>
                                            <th>TAHUN PELAJARAN</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>TOTAL</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>TOTAL</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>TOTAL</th>
                                            <th>JUMLAH</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $r)
                                        <tr>
                                            <td class="text-center">{{ $no + 1 }}</td>
                                            <td>{{ $r->tahun->tahun }}</td>  
                                            <td class="text-center">{{ $r->jml1pa }}</td>  
                                            <td class="text-center">{{ $r->jml1pi }}</td>  
                                            <td class="text-center">{{ $r->jml1pa + $r->jml1pi }}</td>  
                                            <td class="text-center">{{ $r->jml2pa }}</td>  
                                            <td class="text-center">{{ $r->jml2pi }}</td>  
                                            <td class="text-center">{{ $r->jml2pa + $r->jml2pi }}</td>  
                                            <td class="text-center">{{ $r->jml3pa }}</td>  
                                            <td class="text-center">{{ $r->jml3pi }}</td>  
                                            <td class="text-center">{{ $r->jml3pa + $r->jml3pi }}</td>  
                                            <td class="text-center">{{ $r->jml1pa + $r->jml1pi + $r->jml2pa + $r->jml2pi + $r->jml3pa + $r->jml3pi }}</td>  
                                            <td class="text-center" nowrap>
                                                <a href="{{ route('backend/edit-siswa', $r->id) }}" class="btn btn-info btn-xs" title="EDIT DATA">EDIT</a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#konfirmasi_hapus" data-href="{{ route('backend/hapus-siswa', $r->id) }}" title="HAPUS DATA">HAPUS</a>
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