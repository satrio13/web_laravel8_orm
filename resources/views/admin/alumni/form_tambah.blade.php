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
                            <li class="breadcrumb-item"><a href="{{ route('backend/alumni') }}">Alumni</a></li>
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
                        <form method="POST" action="{{ route('backend/simpan-alumni') }}" id="form">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TAHUN PELAJARAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <select name="id_tahun" class="form-control required">
                                            @foreach($tahun as $r)    
                                                <option value="{{ $r->id_tahun }}" {{ (old('id_tahun') == $r->id_tahun) ? 'selected' : '' }}  >{{ $r->tahun }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">

                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JUMLAH LAKI-LAKI <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type="number" name="jml_l" min="0" value="{{ old('jml_l') }}" class="form-control required">
                                        <small class="text-danger">
                                       
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JUMLAH PEREMPUAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type="number" name="jml_p" min="0" value="{{ old('jml_p') }}" class="form-control required">
                                        <small class="text-danger">
                                        
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <span class="text-danger"><b>*</b></span>) Field Wajib Diisi
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> SIMPAN</button>
                                <a href="{{ route('backend/alumni') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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