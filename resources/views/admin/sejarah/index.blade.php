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
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead class="bg-secondary text-center">
                                        <tr>
                                            <th>SEJARAH</th>
                                            <th width="10%">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                @if($data->isi != '')
                                                    {!! htmlspecialchars_decode($data->isi) !!}
                                                @else
                                                    <div class="text-danger">Sejarah belum diisi</div>
                                                @endif
                                            </td>
                                            <td class="text-center" nowrap>
                                                <a href="{{ route('backend/edit-sejarah') }}" class="btn btn-info btn-xs" title="EDIT DATA">EDIT</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')

@endsection