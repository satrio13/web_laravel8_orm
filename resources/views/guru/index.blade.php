@extends('layouts.app')
@section('content')
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
        <div class="col-md-12"><h3><b>TENAGA EDUKATIF</b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped table-sm" id="datatable">
                    <thead class="bg-theme text-white text-center">
                        <tr>
                            <th width="5%">NO</th>
                            <th>NAMA</th>
                            <th>NIP</th>
                            <th>NUPTK</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0)
                        @foreach($data as $no => $r)
                            <tr>
                            <td class="text-center">{{ $no + 1 }}</td>
                            <td><a href="{{ route('guru/detail', $r->id) }}" target="_blank">{{ $r->nama }}</a></td>
                            <td>{{ $r->nip }}</td>
                            <td>{{ $r->nuptk }}</td>
                            <td>{{ $r->alamat }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center text-danger" colspan="5">DATA KOSONG</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection