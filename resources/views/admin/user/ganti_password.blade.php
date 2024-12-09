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
                        <form method="POST" action="{{ route('backend/update-password') }}" id="form-user">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">USERNAME <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="username" minlength="5" maxlength="30" readonly class="form-control sepasi required" value="{{ $username }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PASSWORD BARU <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="password" name="password1" id="password1" value="{{ old('password1') }}" minlength="5" maxlength="30" placeholder="Password Baru" class="form-control sepasi required required">
                                        <small class="text-danger">
                                            {{ ($errors->first('password1')) ? $errors->first('password1') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ULANG PASSWORD BARU <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="password" name="password2" id="password2" value="{{ old('password2') }}" minlength="5" maxlength="30" placeholder="Ketik Ulang Password Baru" class="form-control sepasi required">
                                        <small class="text-danger">
                                            {{ ($errors->first('password2')) ? $errors->first('password2') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PASSWORD LAMA <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="password" name="password3" id="password3" value="{{ old('password3') }}" minlength="5" maxlength="30" placeholder="Password Lama" class="form-control required">
                                        <small class="text-danger">
                                            {{ ($errors->first('password3')) ? $errors->first('password3') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <span class="text-danger"><b>*</b></span>) Field Wajib Diisi
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> SIMPAN</button>
                                <button type="button" class='btn btn-danger btn-sm float-right' onclick='self.history.back()'><i class="fa fa-arrow-left"></i> BATAL</button>
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