@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12"><h3><b> @if(jenjang() == 1 OR jenjang() == 2)
                                            REKAP UJIAN SEKOLAH
                                        @elseif(jenjang() == 3 OR jenjang() == 4)
                                            REKAP UJIAN MADRASAH
                                        @endif                                        
                                    </b></h3><hr></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('pendidikan/rekap-us') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <select name="id_tahun" class="form-control">
                                @foreach($tahun as $r)
                                    <option value="{{ $r->id_tahun }}" {{ ($id_tahun == $r->id_tahun) ? 'selected' : '' }} >{{ $r->tahun }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button type="submit" name="submit" value="Submit" class="btn bg-theme text-white"><i class="fa fa-search"></i> Cari Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            @if(isset($submit))
                @if(jenjang() == 1 OR jenjang() == 2)
                    <h5 class="text-center">REKAP UJIAN SEKOLAH TAHUN PELAJARAN {{ tahun($id_tahun) }}</h5>
                @elseif(jenjang() == 3 OR jenjang() == 4)
                    <h5 class="text-center">REKAP UJIAN MADRASAH TAHUN PELAJARAN {{ tahun($id_tahun) }}</h5>
                @endif  
                <div class="table table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="bg-theme text-white text-center">
                            <tr>
                                <th width="5%">NO</th>
                                <th>TAHUN PELAJARAN</th>
                                <th>MATA PELAJARAN</th>
                                <th>TERTINGGI</th>
                                <th>TERENDAH</th>
                                <th>RATA-RATA</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($data->count() > 0)
                            @foreach($data as $no => $r)
                                <tr>
                                    <td class="text-center">{{ $no + 1 }}</td>
                                    <td>{{ $r->tahun }}</td>
                                    <td>{{ $r->mapel }}</td>
                                    <td class="text-center">{{ $r->tertinggi }}</td>
                                    <td class="text-center">{{ $r->terendah }}</td>
                                    <td class="text-center">{{ $r->rata }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="6">DATA KOSONG</td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                </div>
            @else 
                <div class="text-center text-danger">ANDA BELUM MELAKUKAN PENCARIAN</div>
            @endif
        </div>
    </div>
</div>
<br><br>
@endsection