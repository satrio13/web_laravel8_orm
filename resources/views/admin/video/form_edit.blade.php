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
                            <li class="breadcrumb-item"><a href="{{ route('backend/video') }}">Video</a></li>
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
                        <form method="POST" action="{{ route('backend/update-video', $data->id_video) }}" id="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JUDUL VIDEO <span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="judul" maxlength="100" value="{{ old('judul', $data->judul) }}" class="form-control required" placeholder="JUDUL VIDEO">
                                        <small class="text-danger">
                                            {{ ($errors->first('judul')) ? $errors->first('judul') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KETERANGAN VIDEO</label>
                                    <div class="col-sm-6">
                                        <textarea name="keterangan" class="form-control" maxlength="200" placeholder="KETERANGAN VIDEO">{{ old('keterangan', $data->keterangan) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KODE VIDEO DARI YOUTUBE <span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="link" maxlength="100" value="{{ old('link', $data->link) }}" class="form-control required" placeholder="KODE VIDEO DARI YOUTUBE">
                                        <small class="text-danger">
                                            {{ ($errors->first('link')) ? $errors->first('link') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CONTOH DETAIL</label>
                                    <div class="col-sm-6">
                                        <img src="/img/video/youtube.jpg" class="img img-fluid">
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
                                <a href="{{ route('backend/video') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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