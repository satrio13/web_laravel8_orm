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
        <div class="col-md-12"><h3><b>PESERTA DIDIK</b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="bg-theme text-white text-center">
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
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0)
                        @foreach($data as $no => $r)
                        <tr>
                            <td class="text-center">{{ $no + 1 }}</td>
                            <td>{{ $r->tahun }}</td>
                            <td class="text-center">{{ $r->jml1pa; }}</td>
                            <td class="text-center">{{ $r->jml1pi; }}</td>
                            <td class="text-center">{{ $r->jml1pa+$r->jml1pi; }}</td>
                            <td class="text-center">{{ $r->jml2pa; }}</td>
                            <td class="text-center">{{ $r->jml2pi; }}</td>
                            <td class="text-center">{{ $r->jml2pa+$r->jml2pi; }}</td>
                            <td class="text-center">{{ $r->jml3pa; }}</td>
                            <td class="text-center">{{ $r->jml3pi; }}</td>
                            <td class="text-center">{{ $r->jml3pa+$r->jml3pi; }}</td>
                            <td class="text-center">{{ $r->jml1pa+$r->jml1pi+$r->jml2pa+$r->jml2pi+$r->jml3pa+$r->jml3pi; }}</td>
                        </tr>
                        @endforeach
                    @else                    
                        <tr>
                            <td class="text-center" colspan="12">DATA KOSONG</td>
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