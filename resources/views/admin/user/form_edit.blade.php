@extends('admin.layouts.app')
@section('content')
    @php
        $is_active = old('is_active') ?? $data->is_active;
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
                            <li class="breadcrumb-item"><a href="{{ route('backend/users') }}">Users</a></li>
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
                        <form method="POST" action="{{ route('backend/update-user', $data->id_user) }}" id="form-user">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type='text' name='nama' maxlength="100" class='form-control required' placeholder='Nama' value="{{ old('nama', $data->nama) }}">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama')) ? $errors->first('nama') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">USERNAME <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type='text' name='username' class='form-control sepasi required' minlength="5" maxlength="30" placeholder='Username' value="{{ old('username', $data->username) }}" autocomplete="off">
                                        <small class="text-danger">
                                            {{ ($errors->first('username')) ? $errors->first('username') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">PASSWORD</label>
                                    <div class="col-sm-5">
                                        <input type='password' name='password' class='form-control sepasi' minlength="5" maxlength="30" placeholder='* Kosongkan jika password tidak ingin diganti.' autocomplete="off">
                                        <small class="text-danger">
                                            {{ ($errors->first('password')) ? $errors->first('password') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">EMAIL <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type='email' name='email' class='form-control sepasi required' placeholder='Email' value="{{ old('email', $data->email) }}">
                                        <small class="text-danger">
                                            {{ ($errors->first('email')) ? $errors->first('email') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">STATUS AKTIF <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="is_active" value="1" id="radioPrimary1" {{ ($is_active == '1') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary1">Aktif</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="is_active" value="0" id="radioPrimary2" {{ ($is_active == '0') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary2">Non Aktif</label>
                                        </div>
                                        <br><label for="is_active" class="error"></label>
                                        <small class="text-danger">
                                            {{ ($errors->first('is_active')) ? $errors->first('is_active') : '' }}
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
                                <a href="{{ route('backend/users') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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
            handle_validate_user();
            handle_sepasi();
        });

        function handle_validate_user()
        {
            $('#form-user').validate({
                rules: 
                {
                    password2:
                    {
                        equalTo: "#password1"
                    }
                },
                messages:
                {
                    password2:
                    {
                        equalTo: "Password tidak sama"
                    }
                }
            });
        }

        function handle_sepasi()
        {
            $(".sepasi").on({
                keydown: function(e) {
                    if (e.which === 32)
                    return false;
                },
                change: function() {
                    this.value = this.value.replace(/\s/g, "");  
                }
            });
        }
    </script>
@endsection