<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ title() }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('img/logo/'.favicon()) }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style_admin.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-3.0.2/plugins/summernote/summernote-bs4.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed" onkeydown="return (event.keyCode != 116)">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>            
            <ul class="navbar-nav ml-auto" style="border-left: 1px solid #ccc">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <span class="hidden-xs"><b>{{ nama_user(session('id_user')) }}</b></span>
                        <i class="right fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="https://wa.me/6283865282929" target="_blank" class="dropdown-item"><i class="fas fa-bug"></i> REPORT BUGS / ERROR</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('backend/edit-profil') }}" class="dropdown-item"><i class="fas fa-user"></i> EDIT PROFIL</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('backend/ganti-password') }}" class="dropdown-item"><i class="fas fa-key"></i> GANTI PASSWORD</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('auth/logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> LOG OUT</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="javascript:void(0)" class="brand-link">
                <span class="brand-text font-weight-light d-flex justify-content-center">{{ title() }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                    <div class="info">
                        <a href="javascript:void(0)" class="d-block">{{ nama_user(session('id_user')) }}</a>
                        <span class="badge badge-danger">
                            {{ strtoupper(level_user(session('id_user'))) }}
                        </span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('backend') }}" class="@php if(request()->segment(1) == 'backend' AND request()->segment(2) == ''){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <small>DASHBOARD</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/pengaduan') }}" class="@php if(request()->segment(2) == 'pengaduan'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-comment"></i>
                                <small>PENGADUAN</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/link') }}" class="@php if(request()->segment(2) == 'link' OR request()->segment(2) == 'tambah-link' OR request()->segment(2) == 'edit-link'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-link"></i>
                                <small>LINK TERKAIT</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/agenda') }}" class="@php if(request()->segment(2) == 'agenda' OR request()->segment(2) == 'tambah-agenda' OR request()->segment(2) == 'edit-agenda'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-calendar"></i>
                                <small>AGENDA</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/pengumuman') }}" class="@php if(request()->segment(2) == 'pengumuman' OR request()->segment(2) == 'tambah-pengumuman' OR request()->segment(2) == 'edit-pengumuman'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-bullhorn"></i>
                                <small>PENGUMUMAN</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/berita') }}" class="@php if(request()->segment(2) == 'berita' OR request()->segment(2) == 'tambah-berita' OR request()->segment(2) == 'edit-berita'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <small>BERITA</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/download') }}" class="@php if(request()->segment(2) == 'download' OR request()->segment(2) == 'tambah-download' OR request()->segment(2) == 'edit-download'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-download"></i>
                                <small>DOWNLOAD</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/siswa') }}" class="@php if(request()->segment(2) == 'siswa' OR request()->segment(2) == 'tambah-siswa' OR request()->segment(2) == 'edit-siswa'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-users"></i>
                                <small>PESERTA DIDIK</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/prestasi-siswa') }}" class="@php if(request()->segment(2) == 'prestasi-siswa' OR request()->segment(2) == 'tambah-prestasi-siswa' OR request()->segment(2) == 'edit-prestasi-siswa'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-trophy"></i>
                                <small>PRESTASI SISWA</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/prestasi-guru') }}" class="@php if(request()->segment(2) == 'prestasi-guru' OR request()->segment(2) == 'tambah-prestasi-guru' OR request()->segment(2) == 'edit-prestasi-guru'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-trophy"></i>
                                <small>PRESTASI GURU</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend/prestasi-sekolah') }}" class="@php if(request()->segment(2) == 'prestasi-sekolah' OR request()->segment(2) == 'tambah-prestasi-sekolah' OR request()->segment(2) == 'edit-prestasi-sekolah'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                <i class="nav-icon fas fa-trophy"></i>
                                <small>PRESTASI SEKOLAH</small>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-list"></i>
                                <small>PROFIL
                                    <i class="right fas fa-angle-left float-right"></i>
                                </small>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('backend/profil-web') }}" class="@php if(request()->segment(2) == 'profil-web' OR request()->segment(2) == 'edit-profil-web' OR request()->segment(2) == 'logo-web' OR request()->segment(2) == 'favicon' OR request()->segment(2) == 'logo-admin' OR request()->segment(2) == 'gambar-profil' OR request()->segment(2) == 'file'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>PROFIL WEBSITE</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/banner') }}" class="@php if(request()->segment(2) == 'banner' OR request()->segment(2) == 'tambah-banner' OR request()->segment(2) == 'edit-banner'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>BANNER WEB</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/sejarah') }}" class="@php if(request()->segment(2) == 'sejarah' OR request()->segment(2) == 'edit-sejarah'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>SEJARAH</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/visi-misi') }}" class="@php if(request()->segment(2) == 'visi-misi' OR request()->segment(2) == 'edit-visi-misi'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>VISI & MISI</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/struktur-organisasi') }}" class="@php if(request()->segment(2) == 'struktur-organisasi' OR request()->segment(2) == 'edit-struktur-organisasi'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>STRUKTUR ORGANISASI</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/ekstrakurikuler') }}" class="@php if(request()->segment(2) == 'ekstrakurikuler' OR request()->segment(2) == 'tambah-ekstrakurikuler' OR request()->segment(2) == 'edit-ekstrakurikuler'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>EKSTRAKURIKULER</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/sarpras') }}" class="@php if(request()->segment(2) == 'sarpras' OR request()->segment(2) == 'tambah-sarpras' OR request()->segment(2) == 'edit-sarpras'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>SARANA & PRASARANA</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/guru') }}" class="@php if(request()->segment(2) == 'guru' OR request()->segment(2) == 'tambah-guru' OR request()->segment(2) == 'edit-guru'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>GURU</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/karyawan') }}" class="@php if(request()->segment(2) == 'karyawan' OR request()->segment(2) == 'tambah-karyawan' OR request()->segment(2) == 'edit-karyawan'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>KARYAWAN</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <small>PENDIDIKAN
                                    <i class="right fas fa-angle-left float-right"></i>
                                </small>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('backend/tahun') }}" class="@php if(request()->segment(2) == 'tahun' OR request()->segment(2) == 'tambah-tahun' OR request()->segment(2) == 'edit-tahun'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>TAHUN AKADEMIK</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/kurikulum') }}" class="@php if(request()->segment(2) == 'kurikulum' OR request()->segment(2) == 'tambah-kurikulum' OR request()->segment(2) == 'edit-kurikulum'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>STRUKTUR KURIKULUM</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/kalender') }}" class="@php if(request()->segment(2) == 'kalender'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>KALENDER AKADEMIK</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/rekap-un') }}" class="@php if(request()->segment(2) == 'rekap-un' OR request()->segment(2) == 'tambah-rekap-un' OR request()->segment(2) == 'edit-rekap-un'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>REKAP UN</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/rekap-us') }}" class="@php if(request()->segment(2) == 'rekap-us' OR request()->segment(2) == 'tambah-rekap-us' OR request()->segment(2) == 'edit-rekap-us'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>REKAP US</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <small>ALUMNI
                                    <i class="right fas fa-angle-left float-right"></i>
                                </small>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('backend/alumni') }}" class="@php if(request()->segment(2) == 'alumni' OR request()->segment(2) == 'tambah-alumni' OR request()->segment(2) == 'edit-alumni'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>ALUMNI</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/penelusuran-alumni') }}" class="@php if(request()->segment(2) == 'penelusuran-alumni'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>PENELUSURAN ALUMNI</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <small>GALLERI
                                    <i class="right fas fa-angle-left float-right"></i>
                                </small>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('backend/album') }}" class="@php if(request()->segment(2) == 'album' OR request()->segment(2) == 'tambah-album' OR request()->segment(2) == 'edit-album'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>ALBUM</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/foto') }}" class="@php if(request()->segment(2) == 'foto'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>FOTO</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/video') }}" class="@php if(request()->segment(2) == 'video' OR request()->segment(2) == 'tambah-video' OR request()->segment(2) == 'edit-video'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>VIDEO YOUTUBE</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-users"></i>
                                <small>MANAJEMEN USERS
                                    <i class="right fas fa-angle-left float-right"></i>
                                </small>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(session('level') == 'superadmin')
                                    <li class="nav-item">
                                        <a href="{{ route('backend/users') }}" class="@php if(request()->segment(2) == 'users' OR request()->segment(2) == 'tambah-user' OR request()->segment(2) == 'edit-user'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                            <i class="far fa-circle nav-icon"></i>
                                            <small>USERS</small>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ route('backend/edit-profil') }}" class="@php if(request()->segment(2) == 'edit-profil'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>EDIT PROFIL</small>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('backend/ganti-password') }}" class="@php if(request()->segment(2) == 'ganti-password'){ echo'nav-link active'; }else{ echo'nav-link'; } @endphp">
                                        <i class="far fa-circle nav-icon"></i>
                                        <small>GANTI PASSWORD</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>                    
                </nav>
            </div>
        </aside>
        <!-- Main Content -->
        @yield('content')
        <footer class="main-footer">
            <strong> 
                @php
                    $tahun_dibuat = '2021';
                    $tahun_sekarang = date('Y');
                    if($tahun_dibuat < $tahun_sekarang)
                    {
                        echo'&copy '.$tahun_dibuat.' - '.$tahun_sekarang.' ';  
                    }else
                    {
                        echo'&copy '.$tahun_sekarang.' ';
                    }
                @endphp
                <a href="javascript:void(0)">{{ title() }}</a>
            </strong>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>  
    <script src="{{ asset('assets/AdminLTE-3.0.2/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE-3.0.2/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE-3.0.2/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE-3.0.2/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE-3.0.2/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE-3.0.2/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>var base_url = '{{ route('/') }}';</script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    @yield('js')
</body>
</html>