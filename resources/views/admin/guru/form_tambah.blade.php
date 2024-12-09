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
                            <li class="breadcrumb-item"><a href="{{ route('backend/guru') }}">Guru</a></li>
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
                        <form method="POST" action="{{ route('backend/simpan-guru') }}" enctype="multipart/form-data" id="form">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA LENGKAP <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" maxlength="100" value="{{ old('nama') }}" class="form-control required" placeholder="NAMA LENGKAP">
                                        <small class="text-danger">
                                            {{ ($errors->first('nama')) ? $errors->first('nama') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIP BARU</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nip" maxlength="25" value="{{ old('nip') }}" class="form-control" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">DUK</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="duk" maxlength="20" value="{{ old('duk') }}" class="form-control" placeholder="DUK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIP LAMA</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="niplama" maxlength="25" value="{{ old('niplama') }}" class="form-control" placeholder="NIP LAMA">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NUPTK</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nuptk" maxlength="25" value="{{ old('nuptk') }}" class="form-control" placeholder="NUPTK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NO KARPEG</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nokarpeg" maxlength="12" value="{{ old('nokarpeg') }}" class="form-control" placeholder="NO KARPEG">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TEMPAT LAHIR <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tmp_lahir" maxlength="50" value="{{ old('tmp_lahir') }}" class="form-control required" placeholder="TEMPAT LAHIR">
                                        <small class="text-danger">
                                            {{ ($errors->first('tmp_lahir')) ? $errors->first('tmp_lahir') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TANGGAL LAHIR <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control required" placeholder="dd/mm/yyyy">
                                        <small class="text-danger">
                                            {{ ($errors->first('tgl_lahir')) ? $errors->first('tgl_lahir') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">STATUS PEGAWAI <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statuspeg" value="PNS" id="radioPrimary1" {{ (old('statuspeg') == 'PNS') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary1">PNS</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statuspeg" value="CPNS" id="radioPrimary2" {{ (old('statuspeg') == 'CPNS') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary2">CPNS</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statuspeg" value="GTT" id="radioPrimary3" {{ (old('statuspeg') == 'GTT') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary3">GTT</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <br><label for="statuspeg" class="error"></label>
                                        <small class="text-danger">
                                            {{ ($errors->first('statuspeg')) ? $errors->first('statuspeg') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">GOLONGAN RUANG</label>
                                    <div class="col-sm-5">
                                        <select name="golruang" class="form-control">
                                            <option value="-">-</option>
                                            <option value="I/a" {{ (old('golruang') == 'I/a') ? 'selected' : '' }} >I/a</option>
                                            <option value="I/b" {{ (old('golruang') == 'I/b') ? 'selected' : '' }} >I/b</option>
                                            <option value="I/c" {{ (old('golruang') == 'I/c') ? 'selected' : '' }} >I/c</option>
                                            <option value="I/d" {{ (old('golruang') == 'I/d') ? 'selected' : '' }} >I/d</option>
                                            <option value="II/a" {{ (old('golruang') == 'II/a') ? 'selected' : '' }} >II/a</option>
                                            <option value="II/b" {{ (old('golruang') == 'II/b') ? 'selected' : '' }} >II/b</option>
                                            <option value="II/c" {{ (old('golruang') == 'II/c') ? 'selected' : '' }} >II/c</option>
                                            <option value="II/d" {{ (old('golruang') == 'II/d') ? 'selected' : '' }} >II/d</option>
                                            <option value="III/a" {{ (old('golruang') == 'III/a') ? 'selected' : '' }} >III/a</option>
                                            <option value="III/b" {{ (old('golruang') == 'III/b') ? 'selected' : '' }} >III/b</option>
                                            <option value="III/c" {{ (old('golruang') == 'III/c') ? 'selected' : '' }} >III/c</option>
                                            <option value="III/d" {{ (old('golruang') == 'III/d') ? 'selected' : '' }} >III/d</option>
                                            <option value="IV/a" {{ (old('golruang') == 'IV/a') ? 'selected' : '' }} >IV/a</option>
                                            <option value="IV/b" {{ (old('golruang') == 'IV/b') ? 'selected' : '' }} >IV/b</option>
                                            <option value="IV/c" {{ (old('golruang') == 'IV/c') ? 'selected' : '' }} >IV/c</option>
                                            <option value="IV/d" {{ (old('golruang') == 'IV/d') ? 'selected' : '' }} >IV/d</option>   
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TANGGAL TMT CPNS</label>
                                    <div class="col-sm-5">
                                        <input type="date" name="tmt_cpns" value="{{ old('tmt_cpns') }}" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="col-sm-4">
                                        <small class="text-danger">tidak perlu diisi jika status masih GTT</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TANGGAL TMT PNS</label>
                                    <div class="col-sm-5">
                                        <input type="date" name="tmt_pns" value="{{ old('tmt_pns') }}" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="col-sm-4">
                                        <small class="text-danger">tidak perlu diisi jika status masih GTT atau CPNS</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JENIS KELAMIN <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="jk" value="1" id="radioPrimary4" {{ (old('jk') == 1) ? 'checked' : '' }} required> 
                                            <label for="radioPrimary4">Laki-Laki</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="jk" value="2" id="radioPrimary5" {{ (old('jk') == 2) ? 'checked' : '' }} required> 
                                            <label for="radioPrimary5">Perempuan</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <br><label for="jk" class="error"></label>
                                        <small class="text-danger">
                                            {{ ($errors->first('jk')) ? $errors->first('jk') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">AGAMA</label>
                                    <div class="col-sm-5">
                                        <select name="agama" class="form-control">
                                            <option value="1" {{ (old('agama') == 1) ? 'selected' : '' }} >Islam</option>
                                            <option value="2" {{ (old('agama') == 2) ? 'selected' : '' }} >Kristen Katolik</option>
                                            <option value="3" {{ (old('agama') == 3) ? 'selected' : '' }} >Kristen Protestan</option>
                                            <option value="4" {{ (old('agama') == 4) ? 'selected' : '' }} >Hindu</option>
                                            <option value="5" {{ (old('agama') == 5) ? 'selected' : '' }} >Budha</option>
                                            <option value="6" {{ (old('agama') == 6) ? 'selected' : '' }} >Konghuchu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="alamat" maxlength="100" value="{{ old('alamat') }}" class="form-control" placeholder="ALAMAT">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TINGKAT PENDIDIKAN TERAKHIR</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tingkat_pt" maxlength="20" value="{{ old('tingkat_pt') }}" class="form-control" placeholder="PENDIDIKAN TERAKHIR">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">PRODI</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="prodi" maxlength="50" value="{{ old('prodi') }}" class="form-control" placeholder="PRODI">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TAHUN LULUS</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="th_lulus" minlength="4" maxlength="4" value="{{ old('th_lulus') }}" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="TAHUN LULUS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">STATUS AKTIF <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="status" value="Aktif" id="radioPrimary6" {{ (old('status') == 'Aktif') ? 'checked' : '' }}  required> 
                                            <label for="radioPrimary6">Aktif</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="status" value="Mutasi" id="radioPrimary7" {{ (old('status') == 'Mutasi') ? 'checked' : '' }}  required> 
                                            <label for="radioPrimary7">Mutasi</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="status" value="Pensiun" id="radioPrimary8" {{ (old('status') == 'Pensiun') ? 'checked' : '' }}  required> 
                                            <label for="radioPrimary8">Pensiun</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <br><label for="status" class="error"></label>
                                        <small class="text-danger">
                                            {{ ($errors->first('statuspeg')) ? $errors->first('statuspeg') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">STATUS GURU <span class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statusguru" value="Mapel" id="radioPrimary9" {{ (old('statusguru') == 'Mapel') ? 'checked' : '' }}  required> 
                                            <label for="radioPrimary9">Mapel</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statusguru" value="BP/BK" id="radioPrimary10" {{ (old('statusguru') == 'BP/BK') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary10">BP/BK</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" name="statusguru" value="Kurikulum" id="radioPrimary11" {{ (old('statusguru') == 'Kurikulum') ? 'checked' : '' }} required> 
                                            <label for="radioPrimary11">Kurikulum</label> 
                                            &nbsp;&nbsp;&nbsp; 
                                        </div>
                                        <br><label for="statusguru" class="error"></label>
                                        <small class="text-danger">
                                            {{ ($errors->first('statusguru')) ? $errors->first('statusguru') : '' }}
                                        </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-5">
                                        <input type="email" name="email" maxlength="100" value="{{ old('email') }}" class="form-control" placeholder="EMAIL">
                                        <small class="text-danger">
                                            {{ ($errors->first('email')) ? $errors->first('email') : '' }}
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">FOTO</label>
                                    <div class="col-sm-5">
                                        <img class='img-responsive' id='preview_gambar' width='150px'>
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
                                <a href="{{ route('backend/guru') }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-arrow-left"></i> BATAL</a>
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