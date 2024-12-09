@extends('admin.layouts.app')
@section('content')
    @php
        $jenjang = old('jenjang') ?? $data->jenjang;
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
                            <li class="breadcrumb-item"><a href="{{ route('backend/profil-web') }}">Profil Web</a></li>
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
                        <form method="POST" action="{{ route('backend/update-profil-web') }}" enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA SEKOLAH / MADRASAH <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_web" maxlength="100" value="{{ old('nama_web', $data->nama_web) }}" class="form-control required" placeholder="NAMA WEBSITE">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama_web')) ? $errors->first('nama_web') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JENJANG <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="jenjang" class="form-control required">
                                            <option value="1" {{ ($jenjang == 1) ? 'selected' : '' }} >SMP</option>
                                            <option value="2" {{ ($jenjang == 2) ? 'selected' : '' }} >SMA</option>
                                            <option value="3" {{ ($jenjang == 3) ? 'selected' : '' }} >MTs</option>
                                            <option value="4" {{ ($jenjang == 4) ? 'selected' : '' }} >MAN</option>
                                        </select>
                                        <small class="text-danger">
                                            {{ ($errors->first('jenjang')) ? $errors->first('jenjang') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">META DESCRIPTION <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea name="meta_description" maxlength="300" class="form-control required">{{ old('meta_description', $data->meta_description) }}</textarea>
                                        <small class="text-danger">
                                            {{ ($errors->first('meta_description')) ? $errors->first('meta_description') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">META KEYWORD <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="meta_keyword" maxlength="200" value="{{ old('meta_keyword', $data->meta_keyword) }}" class="form-control required" placeholder="META KEYWORD">
                                        <small class="text-danger">
                                            {{ ($errors->first('meta_keyword')) ? $errors->first('meta_keyword') : '' }} 
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">PROFIL</label>
                                    <div class="col-sm-8">
                                        <textarea name="profil" class="textarea">{{ old('profil', $data->profil) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ALAMAT <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea name="alamat" maxlength="300" class="form-control required">{{ old('alamat', $data->alamat) }}</textarea>
                                        <small class="text-danger">
                                            {{ ($errors->first('alamat')) ? $errors->first('alamat') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">EMAIL <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" maxlength="100" value="{{ old('email', $data->email) }}" class="form-control required" placeholder="EMAIL">
                                        <small class="text-danger">
                                            {{ ($errors->first('email')) ? $errors->first('email') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TELP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="telp" maxlength="20" value="{{ old('telp', $data->telp) }}" class="form-control required" placeholder="TELP">
                                        <small class="text-danger">
                                            {{ ($errors->first('telp')) ? $errors->first('telp') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">FAX <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="fax" maxlength="20" value="{{ old('fax', $data->fax) }}" class="form-control required" placeholder="FAX">
                                        <small class="text-danger">
                                            {{ ($errors->first('fax')) ? $errors->first('fax') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">WHATSAPP</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="whatsapp" maxlength="20" value="{{ old('whatsapp', $data->whatsapp) }}" class="form-control" placeholder="WHATSAPP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">AKREDITASI</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="akreditasi" maxlength="2" value="{{ old('akreditasi', $data->akreditasi) }}" class="form-control" placeholder="AKREDITASI">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KURIKULUM <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kurikulum" maxlength="30" value="{{ old('kurikulum', $data->kurikulum) }}" class="form-control required" placeholder="KURIKULUM">
                                        <small class="text-danger">
                                            {{ ($errors->first('kurikulum')) ? $errors->first('kurikulum') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA KEPSEK / KAMAD <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama_kepsek" maxlength="100" value="{{ old('nama_kepsek', $data->nama_kepsek) }}" class="form-control required" placeholder="NAMA KEPSEK">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama_kepsek')) ? $errors->first('nama_kepsek') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA OPERATOR <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama_operator" maxlength="100" value="{{ old('nama_operator', $data->nama_operator) }}" class="form-control required" placeholder="NAMA OPERATOR">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama_operator')) ? $errors->first('nama_operator') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">INSTAGRAM</label>
                                    <div class="col-sm-8">
                                        <input type="url" name="instagram" maxlength="200" value="{{ old('instagram', $data->instagram) }}" class="form-control" placeholder="INSTAGRAM">
                                        <small class="text-danger">
                                            {{ ($errors->first('instagram')) ? $errors->first('instagram') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">FACEBOOK</label>
                                    <div class="col-sm-8">
                                        <input type="url" name="facebook" maxlength="200" value="{{ old('facebook', $data->facebook) }}" class="form-control" placeholder="FACEBOOK">
                                        <small class="text-danger">
                                            {{ ($errors->first('facebook')) ? $errors->first('facebook') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TWITTER</label>
                                    <div class="col-sm-8">
                                        <input type="url" name="twitter" maxlength="150" value="{{ old('twitter', $data->twitter) }}" class="form-control" placeholder="TWITTER">
                                        <small class="text-danger">
                                            {{ ($errors->first('twitter')) ? $errors->first('twitter') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">YOUTUBE</label>
                                    <div class="col-sm-8">
                                        <input type="url" name="youtube" maxlength="150" value="{{ old('youtube', $data->youtube) }}" class="form-control" placeholder="YOUTUBE">
                                        <small class="text-danger">
                                            {{ ($errors->first('youtube')) ? $errors->first('youtube') : '' }}
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
                                <a href="{{ route('backend/profil-web') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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
        });

        function handle_validate()
        {
            $("#form").validate();
        }

        function handle_summernote()
        {
            $(".textarea").summernote();
        }
    </script>
@endsection