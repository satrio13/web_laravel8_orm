@extends('admin.layouts.app')
@section('content')
    @php
        $berapa_hari = old('berapa_hari');
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
                            <li class="breadcrumb-item"><a href="{{ route('backend/agenda') }}">Agenda</a></li>
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
                        <form method="POST" action="{{ route('backend/simpan-agenda') }}" enctype="multipart/form-data" id="form">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA AGENDA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_agenda" maxlength="100" value="{{ old('nama_agenda') }}" class="form-control" placeholder="NAMA AGENDA" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('nama_agenda')) ? $errors->first('nama_agenda') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">BERAPA HARI <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <select name="berapa_hari" class="form-control" id="berapa_hari" required>
                                            <option value="1" @if($berapa_hari == 1) selected @endif>1 Hari</option>
                                            <option value="2" @if($berapa_hari == 2) selected @endif>Lebih dari 1 hari</option>
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('berapa_hari')) ? $errors->first('berapa_hari') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row" id="tgl1" <?php if($berapa_hari == 2){ ?> style="display:none" <?php }else{ } ?> >
                                    <label class="col-sm-2 col-form-label">TANGGAL <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type='date' name='tgl' class='form-control' value="{{ old('tgl') }}" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('tgl')) ? $errors->first('tgl') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row" id="tgl_mulai" <?php if($berapa_hari == 2){ }else{ ?> style="display:none" <?php } ?> >
                                    <label class="col-sm-2 col-form-label">TANGGAL MULAI <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type='date' name='tgl_mulai' class='form-control' value="{{ old('tgl_mulai') }}" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('tgl_mulai')) ? $errors->first('tgl_mulai') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row" id="tgl_selesai" <?php if($berapa_hari == 2){ }else{ ?> style="display:none" <?php } ?> >
                                    <label class="col-sm-2 col-form-label">TANGGAL SELESAI <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type='date' name='tgl_selesai' class='form-control' value="{{ old('tgl_selesai') }}" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('tgl_selesai')) ? $errors->first('tgl_selesai') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JAM <span class="text-danger">*</span></label>
                                    <div class="col-sm-2">
                                        <input type='time' name='jam_mulai' class='form-control' value="{{ old('jam_mulai') }}" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('jam_mulai')) ? $errors->first('jam_mulai') : '' }} 
                                        </small>
                                    </div>s.d.
                                    <div class="col-sm-2">
                                        <input type='time' name='jam_selesai' class='form-control' value="{{ old('jam_selesai') }}" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('jam_selesai')) ? $errors->first('jam_selesai') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TEMPAT <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="tempat" maxlength="100" value="{{ old('tempat') }}" class="form-control" placeholder="NAMA TEMPAT" required>
                                        <small class="text-danger">
                                            {{ ($errors->first('tempat')) ? $errors->first('tempat') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KETERANGAN</label>
                                    <div class="col-sm-8">
                                        <textarea class="textarea" name="keterangan">{{ old('keterangan') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">GAMBAR</label>
                                    <div class="col-sm-5">
                                        <img class='img-responsive' id='preview_gambar' width='150px'>
                                        <input type='file' name='gambar' accept='image/png, image/jpeg' id="file-upload" class='form-control' onchange='readURL(this);'>
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
                                <a href="{{ route('backend/agenda') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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
            handle_summernote();
            handle_berapa_hari();
        });

        function handle_validate()
        {
            $("#form").validate();
        }

        function handle_summernote()
        {
            $(".textarea").summernote();
        }

        function handle_berapa_hari()
        {
            $("#berapa_hari").change(function ()
            {
                var id = $(this).val();
                if(id == "1")
                {
                    $("#tgl1").fadeIn(500);
                    $("#tgl_mulai").hide();
                    $("#tgl_selesai").hide();
                }else if(id == "2")
                {
                    $("#tgl1").hide();
                    $("#tgl_mulai").fadeIn(500);
                    $("#tgl_selesai").fadeIn(500);
                }
            });
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