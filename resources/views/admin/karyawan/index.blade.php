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
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('backend/tambah-karyawan') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Karyawan</a>
                            <a href="" target="_self" class="btn bg-maroon btn-sm"><i class="fas fa-sync-alt"></i> Refresh</a>
                            <br><br>
                            <h3 class="text-center">{{ strtoupper($title) }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped table-sm" id="datatable">
                                    <thead class="bg-secondary text-center">
                                        <tr>
                                            <th width="5%">NO</th>
                                            <th>NAMA</th>
                                            <th>NIP</th>
                                            <th>JK</th>
                                            <th>STATUS PEGAWAI</th>
                                            <th>TUGAS</th>
                                            <th>STATUS AKTIF</th>
                                            <th>FOTO</th>
                                            <th width="15%">AKSI</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $no => $r)
                                        @php
                                            if($r->jk == 1)
                                            {
                                                $jk = 'L';
                                            }elseif($r->jk == 2)
                                            {
                                                $jk = 'P';
                                            }

                                            if($r->gambar != '' AND file_exists("img/karyawan/$r->gambar"))
                                            {
                                                $img = '<a href="/img/karyawan/'.$r->gambar.'" target="_blank">
                                                            <img src="/img/karyawan/'.$r->gambar.'" class="img img-fluid" width="100px">
                                                        </a>'; 
                                            }else
                                            {
                                                $img = '';
                                            }
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $no + 1 }}</td>
                                            <td>{{ $r->nama }}</td>
                                            <td>{{ $r->nip }}</td>
                                            <td class="text-center">{{ $jk }}</td>
                                            <td>{{ $r->statuspeg }}</td>
                                            <td>{{ $r->tugas }}</td>
                                            <td>{{ $r->status }}</td>
                                            <td class="text-center">{!! $img !!}</td>
                                            <td class="text-center" nowrap>
                                                <a href="javascript:void(0)" onclick="detail('{{ $r->id }}')" class="btn btn-primary btn-xs" title="LIHAT DETAIL">DETAIL</a>
                                                <a href="{{ route('backend/edit-karyawan', $r->id) }}" class="btn btn-info btn-xs" title="EDIT DATA">EDIT</a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#konfirmasi_hapus" data-href="{{ route('backend/hapus-karyawan', $r->id) }}" title="HAPUS DATA">HAPUS</a>
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
    
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Detail Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="load" class="text-center"></div>
                    <div class="row">
                        <div class="col-md-12 text-center" id="img">
                            
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">NAMA LENGKAP</div>
                        <div class="col-md-10" id="nama"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">NIP BARU</div>
                        <div class="col-md-10" id="nip"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">DUK</div>
                        <div class="col-md-10" id="duk"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">NIP LAMA</div>
                        <div class="col-md-10" id="niplama"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">NUPTK</div>
                        <div class="col-md-10" id="nuptk"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">NO KARPEG</div>
                        <div class="col-md-10" id="nokarpeg"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TEMPAT LAHIR</div>
                        <div class="col-md-10" id="tmp_lahir"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TGL LAHIR</div>
                        <div class="col-md-10" id="tgl_lahir"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">STATUS PEGAWAI</div>
                        <div class="col-md-10" id="statuspeg"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TUGAS</div>
                        <div class="col-md-10" id="tugas"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">GOLONGAN RUANG</div>
                        <div class="col-md-10" id="golruang"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TANGGAL TMT CPNS</div>
                        <div class="col-md-10" id="tmt_cpns"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TANGGAL TMT PNS</div>
                        <div class="col-md-10" id="tmt_pns"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">JENIS KELAMIN</div>
                        <div class="col-md-10" id="jk"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">AGAMA</div>
                        <div class="col-md-10" id="agama"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">ALAMAT</div>
                        <div class="col-md-10" id="alamat"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TINGKAT PENDIDIKAN TERAKHIR</div>
                        <div class="col-md-10" id="tingkat_pt"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">PRODI</div>
                        <div class="col-md-10" id="prodi"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">TAHUN LULUS</div>
                        <div class="col-md-10" id="th_lulus"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">STATUS AKTIF</div>
                        <div class="col-md-10" id="status"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 text-bold">EMAIL</div>
                        <div class="col-md-10" id="email"></div>
                    </div>
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

        function cek_session(callback)
        {
            $.ajax({
                url: base_url + "/auth/cek-session", 
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    if(!data.session_active)
                    {
                        swal({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Sesi anda telah habis, silahkan login kembali',
                            timer: 5000
                        }).then(() => {
                            window.location.reload(); 
                        });
                    }else
                    {
                        callback();
                    }
                },
                error: function()
                {
                   alert_gagal('Error checking session. Please check your internet connection!');
                }
            });
        }

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
        
        function detail(id)
        {
            cek_session(function()
            {
                $.ajax({
                    url : base_url + "/backend/lihat-karyawan/"+id,
                    type: "GET",
                    dataType: "JSON",
                    beforeSend: function()
                    {
                        $("#load").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
                    },
                    success: function(data)
                    {
                        var nip = data.nip ?? '';
                        var duk = data.duk ?? '';
                        var niplama = data.niplama ?? '';
                        var nuptk = data.nuptk ?? '';
                        var nokarpeg = data.nokarpeg ?? '';
                        var golruang = data.golruang ?? '';
                        var alamat = data.alamat ?? '';
                        var tingkat_pt = data.tingkat_pt ?? '';
                        var prodi = data.prodi ?? '';
                        var th_lulus = data.th_lulus ?? '';
                        var email = data.email ?? '';
                        var tugas = data.tugas ?? '';

                        var fileUrl = base_url +'/img/karyawan/'+ data.gambar;
                        check_file_exists(fileUrl, function(exists)
                        {
                            if(data.gambar !== '')
                            {
                                $("#img").html('<img src="'+ base_url +'/img/karyawan/'+ data.gambar +'" class="img img-fluid img-thumbnail" width="120px">');
                            }else
                            {
                                $("#img").html('');
                            }
                        });

                        var tgl_lahir = (data.tgl_lahir != '0000-00-00' && data.tgl_lahir !== null) ? tgl_indo(data.tgl_lahir) : '';
                        var tmt_cpns = (data.tmt_cpns != '0000-00-00' && data.tmt_cpns !== null) ? tgl_indo(data.tmt_cpns) : '';
                        var tmt_pns = (data.tmt_pns != '0000-00-00' && data.tmt_pns !== null) ? tgl_indo(data.tmt_pns) : '';

                        var jk;
                        if(data.jk == 1)
                        {
                            jk = 'Laki-Laki';
                        }else if(data.jk == 2)
                        {
                            jk= 'Perempuan';
                        }else
                        {
                            jk = '';
                        }

                        var agama;
                        if(data.agama == '1')
                        { 
                            agama = 'Islam'; 
                        }else if(data.agama == '2')
                        { 
                            agama = 'Kristen Katolik'; 
                        }else if(data.agama == '3')
                        { 
                            agama = 'Kristen Protestan'; 
                        }else if(data.agama == '4')
                        { 
                            agama = 'Hindu'; 
                        }else if(data.agama == '5')
                        { 
                            agama = 'Budha'; 
                        }else if(data.agama == '6')
                        { 
                            agama = 'Konghuchu'; 
                        }else
                        {
                            agama = '';
                        }

                        $("#load").html('');
                        $("#nama").html(': ' + data.nama);
                        $("#nip").html(': ' + nip);
                        $("#duk").html(': ' + duk);
                        $("#niplama").html(': ' + niplama);
                        $("#nuptk").html(': ' + nuptk);
                        $("#nokarpeg").html(': ' + nokarpeg);
                        $("#tmp_lahir").html(': ' + data.tmp_lahir);
                        $("#tgl_lahir").html(': ' + tgl_lahir);
                        $("#statuspeg").html(': ' + data.statuspeg);
                        $("#tugas").html(': ' + tugas);
                        $("#golruang").html(': ' + golruang);
                        $("#tmt_cpns").html(': ' + tmt_cpns);
                        $("#tmt_pns").html(': ' + tmt_pns);
                        $("#jk").html(': ' + jk);
                        $("#agama").html(': ' + agama);
                        $("#alamat").html(': ' + alamat);
                        $("#tingkat_pt").html(': ' + tingkat_pt);
                        $("#prodi").html(': ' + prodi);
                        $("#th_lulus").html(': ' + th_lulus);
                        $("#status").html(': ' + data.status);
                        $("#email").html(': ' + email);
                        $('#modal_form').modal('show'); 
                    },
                    error: function (request)
                    {
                        alert('An error occurred during your request: '+  request.status + ' ' + request.statusText + 'Please Try Again!!');
                    }
                });
            });
        }

        function tgl_indo(tgl)
        {
            var tanggal = tgl.substr(8,2);
            var bulan = get_bulan(tgl.substr(5,2));
            var tahun = tgl.substr(0,4);
            return tanggal+' '+bulan+' '+tahun;
        }

        function get_bulan(bln)
        {
            var bulan;
            switch(bln)
            {
                case '01':
                    bulan = 'Januari';
                    break;
                case '02':
                    bulan = 'Februari';
                    break;
                case '03':
                    bulan = 'Maret';
                    break;
                case '04':
                    bulan = 'April';
                    break;
                case '05':
                    bulan = 'Mei';
                    break;
                case '06':
                    bulan = 'Juni';
                    break;
                case '07':
                    bulan = 'Juli';
                    break;
                case '08':
                    bulan = 'Agustus';
                    break;
                case '09':
                    bulan = 'September';
                    break;
                case '10':
                    bulan = 'Oktober';
                    break;
                case '11':
                    bulan = 'November';
                    break;
                case '12':
                    bulan = 'Desember';
                    break;
            } 
            return bulan;
        }

        function check_file_exists(url, callback)
        {
            var xhr = new XMLHttpRequest();
            xhr.open('HEAD', url, true);
            xhr.onreadystatechange = function()
            {
                if(xhr.readyState === 4)
                {
                    if(xhr.status === 200)
                    {
                        callback(true);
                    }else
                    {
                        callback(false);
                    }
                }
            };
            xhr.send();
        }
    </script>
@endsection