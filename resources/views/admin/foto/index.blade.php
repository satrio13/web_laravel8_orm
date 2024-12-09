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
            @if(session('success'))
                {!! pesan_sukses(session('success')) !!}
            @elseif(session('error'))
                {!! pesan_gagal(session('error')) !!}
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">FORM {{ strtoupper($title) }}</h3>
                </div>
                <form method="POST" action="{{ route('backend/simpan-foto') }}" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ALBUM <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <select name="id_album" class="form-control">
                                    @foreach($album as $r)
                                        <option value="{{ $r->id_album }}">{{ $r->album }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    {{ ($errors->first('id_album')) ? $errors->first('id_album') : '' }}
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">FOTO <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="file" name="files[]" id="file-upload" accept='image/png, image/jpeg' class='form-control' required multiple/>
                                <small style="color: red"> *) format file JPG/PNG ukuran maksimal semua file 7 MB</small>
                                <small class="text-danger mt-2">
                                    {{ ($errors->first('files')) ? $errors->first('files') : '' }}
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
                        <button type="submit" class="btn btn-primary btn-sm" onclick="return VerifyUploadSizeIsOK()"><i class="fa fa-check"></i> UPLOAD</button>
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

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped table-sm" id="datatable">
                                <thead class="bg-secondary text-center">
                                    <tr>
                                        <th width="5%" nowrap>NO</th>
                                        <th width="20%" nowrap>FOTO</th>
                                        <th nowrap>ALBUM</th>
                                        <th nowrap>WAKTU UPLOAD</th>
                                        <th nowrap>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $no => $r)
                                    @php
                                        if($r->foto != '' AND file_exists("img/foto/$r->foto"))
                                        {
                                            $img = '<a href="/img/foto/'.$r->foto.'" target="_blank">
                                                        <img src="/img/foto/'.$r->foto.'" class="img img-fluid" width="100px">
                                                    </a>';
                                        }else
                                        {
                                            $img = '';
                                        }
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $no + 1 }}</td>
                                        <td class="text-center">{!! $img !!}</td>
                                        <td>{{ $r->album->album }}</td>
                                        <td>{{ date('d-m-Y H:i:s', strtotime($r->created_at)) }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#konfirmasi_hapus" 
                                            data-href="{{ route('backend/hapus-foto', $r->id_foto) }}" title="HAPUS DATA">HAPUS</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    </div>

    <div class="modal fade mt-5" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>  
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            handle_datatable();
            handle_confirm_delete();
        });

        function handle_datatable()
        {
            $("#datatable").DataTable();
        }

        function handle_confirm_delete()
        {
            $("#konfirmasi_hapus").on("show.bs.modal", function (e) {
                $(this).find(".btn-ok").attr("href", $(e.relatedTarget).data("href"));
            });
        }       

        function VerifyUploadSizeIsOK()
        {
            var UploadFieldID = "file-upload";
            var MaxSizeInBytes = 7340032;
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
                window.setTimeout(function(){ 
                } ,5000);
                return false;
            }
            return true;
        } 
    </script>
@endsection