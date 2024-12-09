@extends('admin.layouts.app')
@section('content')
    @php    
        $id_tahun = old('id_tahun') ?? $data->id_tahun;
        $jenis = old('jenis') ?? $data->jenis;
        $prestasi = old('prestasi') ?? $data->prestasi;
        $tingkat = old('tingkat') ?? $data->tingkat;
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
                            <li class="breadcrumb-item"><a href="{{ route('backend/prestasi-guru') }}">Prestasi Guru</a></li>
                            <li class="breadcrumb-item active">{{ $title }}/li>
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
                        <form method="POST" action="{{ route('backend/update-prestasi-guru', $data->id) }}" enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TAHUN PELAJARAN <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="id_tahun" class="form-control required">
                                            @foreach($tahun as $r)    
                                                <option value="{{ $r->id_tahun }}" {{ ($id_tahun == $r->id_tahun) ? 'selected' : '' }} >{{ $r->tahun }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('id_tahun')) ? $errors->first('id_tahun') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JENIS <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="jenis" class="form-control required">
                                            <option value="1" {{ ($jenis == 1) ? 'selected' : '' }} >Akademik</option>
                                            <option value="2" {{ ($jenis == 2) ? 'selected' : '' }} >Non Akademik</option>
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('jenis')) ? $errors->first('jenis') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA LOMBA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" maxlength="100" value="{{ old('nama', $data->nama) }}" class="form-control required" placeholder="NAMA LOMBA">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama')) ? $errors->first('nama') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">PRESTASI <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="prestasi" class="form-control required">
                                            <option value="1" {{ ($prestasi == 1) ? 'selected' : '' }} >Juara 1</option>
                                            <option value="2" {{ ($prestasi == 2) ? 'selected' : '' }} >Juara 2</option>
                                            <option value="3" {{ ($prestasi == 3) ? 'selected' : '' }} >Juara 3</option>
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('prestasi')) ? $errors->first('prestasi') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA GURU <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_guru" maxlength="100" value="{{ old('nama_guru', $data->nama_guru) }}" class="form-control required" placeholder="NAMA GURU">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama_guru')) ? $errors->first('nama_guru') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TINGKAT <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <select name="tingkat" class="form-control required">
                                            <option value="1" {{ ($tingkat == 1) ? 'selected' : '' }} >Kabupaten</option>
                                            <option value="2" {{ ($tingkat == 2) ? 'selected' : '' }} >Karesidenan</option>
                                            <option value="3" {{ ($tingkat == 3) ? 'selected' : '' }} >Provinsi</option>
                                            <option value="4" {{ ($tingkat == 4) ? 'selected' : '' }} >Nasional</option>
                                            <option value="5" {{ ($tingkat == 5) ? 'selected' : '' }} >Internasional</option>
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('tingkat')) ? $errors->first('tingkat') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KETERANGAN</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="keterangan" maxlength="100" value="{{ old('keterangan', $data->keterangan) }}" class="form-control" placeholder="KETERANGAN">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">GAMBAR</label>
                                    <div class="col-sm-5">
                                        @if(empty($data->gambar))
                                            <img class='img-responsive' id='preview_gambar' width='150px'>
                                        @else
                                            <img class='img-responsive' id='preview_gambar' width='150px' src="/img/prestasi_guru/{{ $data->gambar }}">
                                        @endif
                                        <input type='file' name='gambar' id="file-upload" accept='image/png, image/jpeg' class='form-control' onchange='readURL(this);'>
                                        <small style="color: red"> *) format file JPG/PNG ukuran maksimal 1 MB</small>
                                        <small class="text-danger mt-2">
                                            {{ ($errors->first('gambar')) ? $errors->first('gambar') : '' }}
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
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return VerifyUploadSizeIsOK()"><i class="fa fa-check"></i> SIMPAN</button>
                                <a href="{{ route('backend/prestasi-guru') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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

        function VerifyUploadSizeIsOK()
        {
            var UploadFieldID = "file-upload";
            var MaxSizeInBytes = 1048576;
            var fld = document.getElementById(UploadFieldID);
            if(fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes)
            {
                setTimeout(function () { 
                    swal({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Ukuran gambar/foto terlalu besar!!',
                        showConfirmButton: false,
                        timer: 5000
                    });
                },2000); 
                return false;
            }
            return true;
        } 
    </script>
@endsection