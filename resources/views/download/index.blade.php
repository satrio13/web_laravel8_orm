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
        <div class="col-md-12"><h3><b>DOWNLOAD</b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped table-sm" id="datatable">
                    <thead class="bg-theme text-white text-center">
                        <tr>
                            <th width="5%">NO</th>
                            <th>NAMA FILE</th>
                            <th>TGL UPLOAD</th>
                            <th>HITS</th>
                            <th width="15%">DOWNLOAD</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0)
                        @foreach($data as $no => $r)
                            <tr>
                                <td class="text-center">{{ $no + 1 }}.</td>
                                <td>{{ $r->nama_file }}</td>
                                <td>{{ date('d-m-Y', strtotime($r->created_at)) }}</td>
                                <td class="text-center">{{ $r->hits }}</td>
                                <td class="text-center">
                                    <a href="{{ route('download/hits', $r->file) }}" class="btn bg-theme btn-sm"><i class="fa fa-download text-white"></i></a>
                                </td>
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