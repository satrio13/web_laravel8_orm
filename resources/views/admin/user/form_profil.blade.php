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
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        {!! pesan_sukses(session('success')) !!}
                    @elseif(session('error'))
                        {!! pesan_gagal(session('error')) !!}
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">FORM {{ strtoupper($title) }}</h3>
                        </div>
                        <form method="POST" action="{{ route('backend/update-profil') }}" id="form">
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
                                    <label class="col-sm-2 col-form-label">EMAIL <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type='email' name='email' class='form-control sepasi required' placeholder='Email' value="{{ old('email', $data->email) }}">
                                        <small class="text-danger">
                                            {{ ($errors->first('email')) ? $errors->first('email') : '' }}
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
                                <button type="button" class='btn btn-danger float-right btn sm' onclick='self.history.back()'><i class="fa fa-arrow-left"></i> BATAL</button>
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
            handle_sepasi();
        });

        function handle_validate()
        {
            $('#form').validate();
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