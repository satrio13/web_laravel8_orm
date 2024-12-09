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
        <div class="col-md-12"><h3><b>DATA ALUMNI</b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped table-sm" id="datatable">
                    <thead class="bg-theme text-white text-center">
                        <tr>
                            <th width="5%">NO</th>
                            <th>TAHUN PELAJARAN</th>
                            <th>JUMLAH LAKI-LAKI</th>
                            <th>JUMLAH PEREMPUAN</th>
                            <th>JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0) 
                        @foreach($data as $no => $r)
                            <tr>
                                <td class="text-center">{{ $no + 1 }}.</td>
                                <td>{{ $r->tahun->tahun }}</td>
                                <td class="text-right">{{ $r->jml_l }}</td>
                                <td class="text-right">{{ $r->jml_p }}</td>
                                <td class="text-right">{{ $r->jml_l + $r->jml_p }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Data Kosong</td>
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