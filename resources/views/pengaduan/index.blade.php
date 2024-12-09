@extends('layouts.app')
@section('content')
<section id="isi" class="pt-3 pb-3 text-dark">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <div class="row">
                <div class="col-md-12"><h3><b>LAYANAN PENGADUAN</b></h3><hr></div>
            <div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-light">
                    <div class="alert alert-danger mt-2"><b>Identitas Pengadu Dirahasiakan</b></div>
                    @if(session('success'))
                        {!! pesan_sukses(session('success')) !!}
                    @elseif(session('error'))
                        {!! pesan_gagal(session('error')) !!}
                    @endif
                    <form method="POST" action="{{ route('simpan-pengaduan') }}" id="form">
                    @csrf
                    <div class="row p-2">
                        <div class="col-md-3"><label for="nama">NAMA</label> <span class="text-danger">*</span></div>
                        <div class="col-md-5">
                            <input type="text" name="nama" id="nama" maxlength="50" value="{{ old('nama') }}" placeholder="Masukan Nama" class="form-control required">
                            <small class="text-danger">
                                {{ ($errors->first('nama')) ? $errors->first('nama') : '' }} 
                            </small>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-3"><label for="status">STATUS</label> <span class="text-danger">*</span></div>
                        <div class="col-md-5">
                            <select name="status" id="status" class="form-control required digits">
                                <option value="1" {{ (old('status') == '1') ? 'selected' : '' }} >Peserta Didik</option>
                                <option value="2" {{ (old('status') == '2') ? 'selected' : '' }} >Wali Murid</option>
                                <option value="3" {{ (old('status') == '3') ? 'selected' : '' }} >Masyarakat</option>
                            </select>
                            <small class="text-danger">
                                {{ ($errors->first('status')) ? $errors->first('status') : '' }} 
                            </small>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-3"><label for="isi">URAIAN PENGADUAN</label> <span class="text-danger">*</span></div>
                        <div class="col-md-5">
                            <textarea class="form-control required" name="isi" id="isi">{{ old('isi') }}</textarea>
                            <small class="text-danger">
                                {{ ($errors->first('isi')) ? $errors->first('isi') : '' }} 
                            </small>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <button type="submit" class="btn bg-theme text-white"><i class="fa fa-send"></i> KIRIM</button>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection