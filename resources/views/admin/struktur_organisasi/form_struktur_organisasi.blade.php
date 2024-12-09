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
                            <li class="breadcrumb-item"><a href="{{ route('backend/struktur-organisasi') }}">Struktur Organisasi</a></li>
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
                        <form method="POST" action="{{ route('backend/update-struktur-organisasi') }}" enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">GAMBAR <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        @if(empty($data->isi))
                                            <img class='img-responsive' id='preview_gambar' width='150px'>
                                        @else
                                            <img class='img-responsive' id='preview_gambar' width='150px' src="/img/struktur/{{ $data->isi }}">
                                        @endif
                                        <input type='file' class='form-control' name='struktur' accept='image/png, image/jpeg' onchange='readURL(this);' required>
                                        <p style="color: red"> *) format file JPG/PNG ukuran maksimal 3 MB</p>
                                        <small class="text-danger mt-2">
                                            {{ ($errors->first('struktur')) ? $errors->first('struktur') : '' }} 
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> SIMPAN</button>
                                <a href="{{ route('backend/struktur-organisasi') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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
        function readURL(input)
        {
            if(input.files && input.files[0])
            {
                var reader = new FileReader();
                reader.onload = function (e)
                {
                    $("#preview_gambar").attr("src", e.target.result);
                    //.width(300); // Menentukan lebar gambar preview (dalam pixel)
                    //.height(200); // // Menentukan tinggi gambar preview (dalam pixel)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection