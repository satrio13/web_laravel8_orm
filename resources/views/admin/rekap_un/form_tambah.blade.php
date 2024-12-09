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
                            <li class="breadcrumb-item"><a href="{{ route('backend/rekap-un') }}">Rekap UN</a></li>
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
                        <form method="POST" action="{{ route('backend/simpan-rekap-un') }}" id="form">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TAHUN PELAJARAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <select name="id_tahun" class="form-control required">
                                            @foreach($tahun as $r)    
                                                <option value="{{ $r->id_tahun }}" {{ (old('id_tahun') == $r->id_tahun) ? 'selected' : '' }} >{{ $r->tahun }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('id_tahun')) ? $errors->first('id_tahun') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">MATA PELAJARAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <select name="id_kurikulum" class="form-control required">
                                            @foreach($mapel as $r)    
                                                <option value="{{ $r->id_kurikulum }}" {{ (old('id_kurikulum') == $r->id_kurikulum) ? 'checked' : '' }} >{{ $r->mapel }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('id_kurikulum')) ? $errors->first('id_kurikulum') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NILAI TERTINGGI <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="tertinggi" value="{{ old('tertinggi') }}" min="0" class="form-control required" onkeypress="return hanyaAngka(event)" placeholder="NILAI TERTINGGI">
                                        <small class="text-danger">
                                            {{ ($errors->first('tertinggi')) ? $errors->first('tertinggi') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NILAI TERENDAH <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="terendah" value="{{ old('terendah') }}" min="0" class="form-control required" onkeypress="return hanyaAngka(event)" placeholder="NILAI TERENDAH">
                                        <small class="text-danger">
                                            {{ ($errors->first('terendah')) ? $errors->first('terendah') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NILAI RATA-RATA <span class="text-danger">*</span></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="rata" value="{{ old('rata') }}" min="0" class="form-control required" onkeypress="return hanyaAngka(event)" placeholder="NILAI RATA-RATA">
                                        <small class="text-danger">
                                            {{ ($errors->first('rata')) ? $errors->first('rata') : '' }}
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
                                <a href="{{ route('backend/rekap-un') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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

        function hanyaAngka(evt)
        {
            var charCode = evt.which ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
            return true;
        }
    </script>
@endsection