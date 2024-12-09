@extends('admin.layouts.app')
@section('content')
    @php
        $id_tahun = old('id_tahun') ?? $data->id_tahun;
    @endphp
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
                            <li class="breadcrumb-item"><a href="{{ route('backend/siswa') }}">Peserta Didik</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    @if(session('error'))
                        {!! pesan_gagal(session('error')) !!}
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">FORM {{ strtoupper($title) }}</h3>
                        </div>
                        <form method="POST" action="{{ route('backend/update-siswa', $data->id) }}" id="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TAHUN PELAJARAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <select name="id_tahun" class="form-control required">
                                            @foreach($tahun as $r)
                                                <option value="{{ $r->id_tahun }}" {{ ($id_tahun == $r->id_tahun) ? 'selected' : '' }} >{{ $r->tahun }}</option>
                                            @Endforeach
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('id_tahun')) ? $errors->first('id_tahun') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php if($profil->jenjang == 1 OR $profil->jenjang == 3){ echo'KELAS VII'; }else{ echo'KELAS X'; } ?> <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml1pa" min="0" value="{{ old('jml1pa', $data->jml1pa) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRA">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml1pa')) ? $errors->first('jml1pa') : '' }}
                                        </small>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml1pi" min="0" value="{{ old('jml1pi', $data->jml1pi) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRI">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml1pi')) ? $errors->first('jml1pi') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php if($profil->jenjang == 1 OR $profil->jenjang == 3){ echo'KELAS VIII'; }else{ echo'KELAS XI'; } ?> <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml2pa" min="0" value="{{ old('jml2pa', $data->jml2pa) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRA">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml2pa')) ? $errors->first('jml2pa') : '' }}
                                        </small>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml2pi" min="0" value="{{ old('jml2pi', $data->jml2pi) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRI">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml2pi')) ? $errors->first('jml2pi') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php if($profil->jenjang == 1 OR $profil->jenjang == 3){ echo'KELAS IX'; }else{ echo'KELAS XII'; } ?> <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml3pa" min="0" value="{{ old('jml3pa', $data->jml3pa) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRA">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml3pa')) ? $errors->first('jml3pa') : '' }}
                                        </small>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" name="jml3pi" min="0" value="{{ old('jml3pi', $data->jml3pi) }}" class="form-control required" placeholder="JUMLAH SISWA PUTRI">
                                        <small class="text-danger">
                                            {{ ($errors->first('jml3pi')) ? $errors->first('jml3pi') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <span class="text-danger"><b>*</b></span>) Field Wajib Diisi 
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> SIMPAN</button>
                                <a href="{{ route('backend/siswa') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            handle_validate();
        });

        function handle_validate()
        {
            $("#form").validate();
        }
    </script>
@endsection