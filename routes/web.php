<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ADMIN */
Route::get('auth/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('auth/login'); // start auth
Route::post('auth/proses-login', [App\Http\Controllers\Admin\AuthController::class, 'proses_login'])->name('auth/proses-login');
Route::get('auth/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('auth/logout'); 
Route::get('auth/cek-session', [App\Http\Controllers\Admin\AuthController::class, 'cek_session'])->name('auth/cek-session'); // end auth
Route::middleware(['admin','sanitize.input'])->group(function ()
{
    Route::get('backend', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('backend');
    Route::get('backend/link', [App\Http\Controllers\Admin\LinkController::class, 'index'])->name('backend/link'); // start link
    Route::get('backend/tambah-link', [App\Http\Controllers\Admin\LinkController::class, 'tambah_link'])->name('backend/tambah-link');
    Route::post('backend/simpan-link', [App\Http\Controllers\Admin\LinkController::class, 'simpan_link'])->name('backend/simpan-link');
    Route::get('backend/edit-link/{id}', [App\Http\Controllers\Admin\LinkController::class, 'edit_link'])->name('backend/edit-link');
    Route::put('backend/update-link/{id}', [App\Http\Controllers\Admin\LinkController::class, 'update_link'])->name('backend/update-link');
    Route::get('backend/hapus-link/{id}', [App\Http\Controllers\Admin\LinkController::class, 'hapus_link'])->name('backend/hapus-link'); // end link 
    Route::get('backend/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('backend/agenda'); // start agenda
    Route::get('backend/tambah-agenda', [App\Http\Controllers\Admin\AgendaController::class, 'tambah_agenda'])->name('backend/tambah-agenda');
    Route::post('backend/simpan-agenda', [App\Http\Controllers\Admin\AgendaController::class, 'simpan_agenda'])->name('backend/simpan-agenda');
    Route::get('backend/edit-agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'edit_agenda'])->name('backend/edit-agenda');
    Route::put('backend/update-agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'update_agenda'])->name('backend/update-agenda');
    Route::get('backend/hapus-agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'hapus_agenda'])->name('backend/hapus-agenda'); // end agenda 
    Route::get('backend/pengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'index'])->name('backend/pengumuman'); // start pengumuman
    Route::get('backend/tambah-pengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'tambah_pengumuman'])->name('backend/tambah-pengumuman');
    Route::post('backend/simpan-pengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'simpan_pengumuman'])->name('backend/simpan-pengumuman');
    Route::get('backend/edit-pengumuman/{id}', [App\Http\Controllers\Admin\PengumumanController::class, 'edit_pengumuman'])->name('backend/edit-pengumuman');
    Route::put('backend/update-pengumuman/{id}', [App\Http\Controllers\Admin\PengumumanController::class, 'update_pengumuman'])->name('backend/update-pengumuman');
    Route::get('backend/hapus-pengumuman/{id}', [App\Http\Controllers\Admin\PengumumanController::class, 'hapus_pengumuman'])->name('backend/hapus-pengumuman'); // end pengumuman 
    Route::get('backend/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('backend/berita'); // start berita
    Route::get('backend/tambah-berita', [App\Http\Controllers\Admin\BeritaController::class, 'tambah_berita'])->name('backend/tambah-berita');
    Route::post('backend/simpan-berita', [App\Http\Controllers\Admin\BeritaController::class, 'simpan_berita'])->name('backend/simpan-berita');
    Route::get('backend/edit-berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit_berita'])->name('backend/edit-berita');
    Route::put('backend/update-berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update_berita'])->name('backend/update-berita');
    Route::get('backend/hapus-berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'hapus_berita'])->name('backend/hapus-berita'); // end berita 
    Route::get('backend/download', [App\Http\Controllers\Admin\DownloadController::class, 'index'])->name('backend/download'); // start download
    Route::get('backend/tambah-download', [App\Http\Controllers\Admin\DownloadController::class, 'tambah_download'])->name('backend/tambah-download');
    Route::post('backend/simpan-download', [App\Http\Controllers\Admin\DownloadController::class, 'simpan_download'])->name('backend/simpan-download');
    Route::get('backend/edit-download/{id}', [App\Http\Controllers\Admin\DownloadController::class, 'edit_download'])->name('backend/edit-download');
    Route::put('backend/update-download/{id}', [App\Http\Controllers\Admin\DownloadController::class, 'update_download'])->name('backend/update-download');
    Route::get('backend/hapus-download/{id}', [App\Http\Controllers\Admin\DownloadController::class, 'hapus_download'])->name('backend/hapus-download'); // end download 
    Route::get('backend/siswa', [App\Http\Controllers\Admin\SiswaController::class, 'index'])->name('backend/siswa'); // start siswa
    Route::get('backend/tambah-siswa', [App\Http\Controllers\Admin\SiswaController::class, 'tambah_siswa'])->name('backend/tambah-siswa');
    Route::post('backend/simpan-siswa', [App\Http\Controllers\Admin\SiswaController::class, 'simpan_siswa'])->name('backend/simpan-siswa');
    Route::get('backend/edit-siswa/{id}', [App\Http\Controllers\Admin\SiswaController::class, 'edit_siswa'])->name('backend/edit-siswa');
    Route::put('backend/update-siswa/{id}', [App\Http\Controllers\Admin\SiswaController::class, 'update_siswa'])->name('backend/update-siswa');
    Route::get('backend/hapus-siswa/{id}', [App\Http\Controllers\Admin\SiswaController::class, 'hapus_siswa'])->name('backend/hapus-siswa'); // end siswa 
    Route::get('backend/prestasi-siswa', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'index'])->name('backend/prestasi-siswa'); // start prestasi siswa
    Route::get('backend/tambah-prestasi-siswa', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'tambah_prestasi_siswa'])->name('backend/tambah-prestasi-siswa');
    Route::post('backend/simpan-prestasi-siswa', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'simpan_prestasi_siswa'])->name('backend/simpan-prestasi-siswa');
    Route::get('backend/edit-prestasi-siswa/{id}', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'edit_prestasi_siswa'])->name('backend/edit-prestasi-siswa');
    Route::put('backend/update-prestasi-siswa/{id}', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'update_prestasi_siswa'])->name('backend/update-prestasi-siswa');
    Route::get('backend/hapus-prestasi-siswa/{id}', [App\Http\Controllers\Admin\PrestasiSiswaController::class, 'hapus_prestasi_siswa'])->name('backend/hapus-prestasi-siswa'); // end prestasi siswa
    Route::get('backend/prestasi-guru', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'index'])->name('backend/prestasi-guru'); // start prestasi guru
    Route::get('backend/tambah-prestasi-guru', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'tambah_prestasi_guru'])->name('backend/tambah-prestasi-guru');
    Route::post('backend/simpan-prestasi-guru', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'simpan_prestasi_guru'])->name('backend/simpan-prestasi-guru');
    Route::get('backend/edit-prestasi-guru/{id}', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'edit_prestasi_guru'])->name('backend/edit-prestasi-guru');
    Route::put('backend/update-prestasi-guru/{id}', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'update_prestasi_guru'])->name('backend/update-prestasi-guru');
    Route::get('backend/hapus-prestasi-guru/{id}', [App\Http\Controllers\Admin\PrestasiGuruController::class, 'hapus_prestasi_guru'])->name('backend/hapus-prestasi-guru'); // end prestasi guru
    Route::get('backend/prestasi-sekolah', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'index'])->name('backend/prestasi-sekolah'); // start prestasi sekolah
    Route::get('backend/tambah-prestasi-sekolah', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'tambah_prestasi_sekolah'])->name('backend/tambah-prestasi-sekolah');
    Route::post('backend/simpan-prestasi-sekolah', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'simpan_prestasi_sekolah'])->name('backend/simpan-prestasi-sekolah');
    Route::get('backend/edit-prestasi-sekolah/{id}', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'edit_prestasi_sekolah'])->name('backend/edit-prestasi-sekolah');
    Route::put('backend/update-prestasi-sekolah/{id}', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'update_prestasi_sekolah'])->name('backend/update-prestasi-sekolah');
    Route::get('backend/hapus-prestasi-sekolah/{id}', [App\Http\Controllers\Admin\PrestasiSekolahController::class, 'hapus_prestasi_sekolah'])->name('backend/hapus-prestasi-sekolah'); // end prestasi sekolah
    Route::get('backend/profil-web', [App\Http\Controllers\Admin\ProfilController::class, 'index'])->name('backend/profil-web'); // start profil
    Route::get('backend/edit-profil-web', [App\Http\Controllers\Admin\ProfilController::class, 'edit_profil_web'])->name('backend/edit-profil-web');
    Route::put('backend/update-profil-web', [App\Http\Controllers\Admin\ProfilController::class, 'update_profil_web'])->name('backend/update-profil-web');
    Route::get('backend/logo-web', [App\Http\Controllers\Admin\ProfilController::class, 'logo_web'])->name('backend/logo-web');
    Route::put('backend/update-logo-web', [App\Http\Controllers\Admin\ProfilController::class, 'update_logo_web'])->name('backend/update-logo-web');
    Route::get('backend/favicon', [App\Http\Controllers\Admin\ProfilController::class, 'favicon'])->name('backend/favicon');
    Route::put('backend/update-favicon', [App\Http\Controllers\Admin\ProfilController::class, 'update_favicon'])->name('backend/update-favicon');
    Route::get('backend/logo-admin', [App\Http\Controllers\Admin\ProfilController::class, 'logo_admin'])->name('backend/logo-admin');
    Route::put('backend/update-logo-admin', [App\Http\Controllers\Admin\ProfilController::class, 'update_logo_admin'])->name('backend/update-logo-admin');
    Route::get('backend/gambar-profil', [App\Http\Controllers\Admin\ProfilController::class, 'gambar_profil'])->name('backend/gambar-profil'); 
    Route::put('backend/update-gambar-profil', [App\Http\Controllers\Admin\ProfilController::class, 'update_gambar_profil'])->name('backend/update-gambar-profil');
    Route::get('backend/file', [App\Http\Controllers\Admin\ProfilController::class, 'file'])->name('backend/file'); 
    Route::put('backend/update-file', [App\Http\Controllers\Admin\ProfilController::class, 'update_file'])->name('backend/update-file'); // end profil
    Route::get('backend/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('backend/banner'); // start banner
    Route::get('backend/tambah-banner', [App\Http\Controllers\Admin\BannerController::class, 'tambah_banner'])->name('backend/tambah-banner');
    Route::post('backend/simpan-banner', [App\Http\Controllers\Admin\BannerController::class, 'simpan_banner'])->name('backend/simpan-banner');
    Route::get('backend/edit-banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'edit_banner'])->name('backend/edit-banner');
    Route::put('backend/update-banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'update_banner'])->name('backend/update-banner');
    Route::get('backend/hapus-banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'hapus_banner'])->name('backend/hapus-banner'); // end banner 
    Route::get('backend/sejarah', [App\Http\Controllers\Admin\SejarahController::class, 'index'])->name('backend/sejarah'); // start sejarah
    Route::get('backend/edit-sejarah', [App\Http\Controllers\Admin\SejarahController::class, 'edit_sejarah'])->name('backend/edit-sejarah'); 
    Route::put('backend/update-sejarah', [App\Http\Controllers\Admin\SejarahController::class, 'update_sejarah'])->name('backend/update-sejarah'); // end sejarah 
    Route::get('backend/visi-misi', [App\Http\Controllers\Admin\VisiMisiController::class, 'index'])->name('backend/visi-misi'); // start visi-misi
    Route::get('backend/edit-visi-misi', [App\Http\Controllers\Admin\VisiMisiController::class, 'edit_visi_misi'])->name('backend/edit-visi-misi'); 
    Route::put('backend/update-visi-misi', [App\Http\Controllers\Admin\VisiMisiController::class, 'update_visi_misi'])->name('backend/update-visi-misi'); //end visi-misi 
    Route::get('backend/struktur-organisasi', [App\Http\Controllers\Admin\StrukturOrganisasiController::class, 'index'])->name('backend/struktur-organisasi'); // start struktur-organisasi
    Route::get('backend/edit-struktur-organisasi', [App\Http\Controllers\Admin\StrukturOrganisasiController::class, 'edit_struktur_organisasi'])->name('backend/edit-struktur-organisasi');
    Route::put('backend/update-struktur-organisasi', [App\Http\Controllers\Admin\StrukturOrganisasiController::class, 'update_struktur_organisasi'])->name('backend/update-struktur-organisasi'); // end struktur-organisasi
    Route::get('backend/ekstrakurikuler', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'index'])->name('backend/ekstrakurikuler'); // start ekstrakurikuler
    Route::get('backend/tambah-ekstrakurikuler', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'tambah_ekstrakurikuler'])->name('backend/tambah-ekstrakurikuler');
    Route::post('backend/simpan-ekstrakurikuler', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'simpan_ekstrakurikuler'])->name('backend/simpan-ekstrakurikuler');
    Route::get('backend/edit-ekstrakurikuler/{id}', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'edit_ekstrakurikuler'])->name('backend/edit-ekstrakurikuler');
    Route::put('backend/update-ekstrakurikuler/{id}', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'update_ekstrakurikuler'])->name('backend/update-ekstrakurikuler');
    Route::get('backend/hapus-ekstrakurikuler/{id}', [App\Http\Controllers\Admin\EkstrakurikulerController::class, 'hapus_ekstrakurikuler'])->name('backend/hapus-ekstrakurikuler'); // end ekstrakurikuler 
    Route::get('backend/sarpras', [App\Http\Controllers\Admin\SarprasController::class, 'index'])->name('backend/sarpras'); // start sarpras
    Route::get('backend/edit-sarpras', [App\Http\Controllers\Admin\SarprasController::class, 'edit_sarpras'])->name('backend/edit-sarpras'); 
    Route::put('backend/update-sarpras', [App\Http\Controllers\Admin\SarprasController::class, 'update_sarpras'])->name('backend/update-sarpras'); // end sarpras 
    Route::get('backend/guru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('backend/guru'); // start guru
    Route::get('backend/tambah-guru', [App\Http\Controllers\Admin\GuruController::class, 'tambah_guru'])->name('backend/tambah-guru');
    Route::post('backend/simpan-guru', [App\Http\Controllers\Admin\GuruController::class, 'simpan_guru'])->name('backend/simpan-guru');
    Route::get('backend/edit-guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'edit_guru'])->name('backend/edit-guru');
    Route::put('backend/update-guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'update_guru'])->name('backend/update-guru');
    Route::get('backend/hapus-guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'hapus_guru'])->name('backend/hapus-guru'); 
    Route::get('backend/lihat-guru/{id}', [App\Http\Controllers\Admin\GuruController::class, 'lihat_guru'])->name('backend/lihat-guru');// end guru 
    Route::get('backend/karyawan', [App\Http\Controllers\Admin\KaryawanController::class, 'index'])->name('backend/karyawan'); // start karyawan
    Route::get('backend/tambah-karyawan', [App\Http\Controllers\Admin\KaryawanController::class, 'tambah_karyawan'])->name('backend/tambah-karyawan');
    Route::post('backend/simpan-karyawan', [App\Http\Controllers\Admin\KaryawanController::class, 'simpan_karyawan'])->name('backend/simpan-karyawan');
    Route::get('backend/edit-karyawan/{id}', [App\Http\Controllers\Admin\KaryawanController::class, 'edit_karyawan'])->name('backend/edit-karyawan');
    Route::put('backend/update-karyawan/{id}', [App\Http\Controllers\Admin\KaryawanController::class, 'update_karyawan'])->name('backend/update-karyawan');
    Route::get('backend/hapus-karyawan/{id}', [App\Http\Controllers\Admin\KaryawanController::class, 'hapus_karyawan'])->name('backend/hapus-karyawan'); 
    Route::get('backend/lihat-karyawan/{id}', [App\Http\Controllers\Admin\KaryawanController::class, 'lihat_karyawan'])->name('backend/lihat-karyawan'); // end karyawan 
    Route::get('backend/tahun', [App\Http\Controllers\Admin\TahunController::class, 'index'])->name('backend/tahun'); // start tahun
    Route::get('backend/tambah-tahun', [App\Http\Controllers\Admin\TahunController::class, 'tambah_tahun'])->name('backend/tambah-tahun');
    Route::post('backend/simpan-tahun', [App\Http\Controllers\Admin\TahunController::class, 'simpan_tahun'])->name('backend/simpan-tahun');
    Route::get('backend/edit-tahun/{id}', [App\Http\Controllers\Admin\TahunController::class, 'edit_tahun'])->name('backend/edit-tahun');
    Route::put('backend/update-tahun/{id}', [App\Http\Controllers\Admin\TahunController::class, 'update_tahun'])->name('backend/update-tahun');
    Route::get('backend/hapus-tahun/{id}', [App\Http\Controllers\Admin\TahunController::class, 'hapus_tahun'])->name('backend/hapus-tahun'); // end tahun 
    Route::get('backend/kurikulum', [App\Http\Controllers\Admin\KurikulumController::class, 'index'])->name('backend/kurikulum'); // start kurikulum
    Route::get('backend/tambah-kurikulum', [App\Http\Controllers\Admin\KurikulumController::class, 'tambah_kurikulum'])->name('backend/tambah-kurikulum');
    Route::post('backend/simpan-kurikulum', [App\Http\Controllers\Admin\KurikulumController::class, 'simpan_kurikulum'])->name('backend/simpan-kurikulum');
    Route::get('backend/edit-kurikulum/{id}', [App\Http\Controllers\Admin\KurikulumController::class, 'edit_kurikulum'])->name('backend/edit-kurikulum');
    Route::put('backend/update-kurikulum/{id}', [App\Http\Controllers\Admin\KurikulumController::class, 'update_kurikulum'])->name('backend/update-kurikulum');
    Route::get('backend/hapus-kurikulum/{id}', [App\Http\Controllers\Admin\KurikulumController::class, 'hapus_kurikulum'])->name('backend/hapus-kurikulum'); // end kurikulum 
    Route::get('backend/kalender', [App\Http\Controllers\Admin\KalenderController::class, 'index'])->name('backend/kalender'); // start kalender
    Route::put('backend/update-kalender', [App\Http\Controllers\Admin\KalenderController::class, 'update_kalender'])->name('backend/update-kalender'); // end kalender
    Route::get('backend/rekap-un', [App\Http\Controllers\Admin\RekapUNController::class, 'index'])->name('backend/rekap-un'); // start rekap un
    Route::get('backend/tambah-rekap-un', [App\Http\Controllers\Admin\RekapUNController::class, 'tambah_rekap_un'])->name('backend/tambah-rekap-un');
    Route::post('backend/simpan-rekap-un', [App\Http\Controllers\Admin\RekapUNController::class, 'simpan_rekap_un'])->name('backend/simpan-rekap-un');
    Route::get('backend/edit-rekap-un/{id}', [App\Http\Controllers\Admin\RekapUNController::class, 'edit_rekap_un'])->name('backend/edit-rekap-un');
    Route::put('backend/update-rekap-un/{id}', [App\Http\Controllers\Admin\RekapUNController::class, 'update_rekap_un'])->name('backend/update-rekap-un');
    Route::get('backend/hapus-rekap-un/{id}', [App\Http\Controllers\Admin\RekapUNController::class, 'hapus_rekap_un'])->name('backend/hapus-rekap-un'); // end rekap un
    Route::get('backend/rekap-us', [App\Http\Controllers\Admin\RekapUSController::class, 'index'])->name('backend/rekap-us'); // start rekap us
    Route::get('backend/tambah-rekap-us', [App\Http\Controllers\Admin\RekapUSController::class, 'tambah_rekap_us'])->name('backend/tambah-rekap-us');
    Route::post('backend/simpan-rekap-us', [App\Http\Controllers\Admin\RekapUSController::class, 'simpan_rekap_us'])->name('backend/simpan-rekap-us');
    Route::get('backend/edit-rekap-us/{id}', [App\Http\Controllers\Admin\RekapUSController::class, 'edit_rekap_us'])->name('backend/edit-rekap-us');
    Route::put('backend/update-rekap-us/{id}', [App\Http\Controllers\Admin\RekapUSController::class, 'update_rekap_us'])->name('backend/update-rekap-us');
    Route::get('backend/hapus-rekap-us/{id}', [App\Http\Controllers\Admin\RekapUSController::class, 'hapus_rekap_us'])->name('backend/hapus-rekap-us'); // end rekap us
    Route::get('backend/alumni', [App\Http\Controllers\Admin\AlumniController::class, 'index'])->name('backend/alumni'); // start alumni
    Route::get('backend/tambah-alumni', [App\Http\Controllers\Admin\AlumniController::class, 'tambah_alumni'])->name('backend/tambah-alumni');
    Route::post('backend/simpan-alumni', [App\Http\Controllers\Admin\AlumniController::class, 'simpan_alumni'])->name('backend/simpan-alumni');
    Route::get('backend/edit-alumni/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'edit_alumni'])->name('backend/edit-alumni');
    Route::put('backend/update-alumni/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'update_alumni'])->name('backend/update-alumni');
    Route::get('backend/hapus-alumni/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'hapus_alumni'])->name('backend/hapus-alumni'); 
    Route::get('backend/penelusuran-alumni', [App\Http\Controllers\Admin\AlumniController::class, 'penelusuran_alumni'])->name('backend/penelusuran-alumni'); 
    Route::get('backend/hapus-penelusuran-alumni/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'hapus_penelusuran_alumni'])->name('backend/hapus-penelusuran-alumni'); 
    Route::get('backend/lihat-alumni/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'lihat_alumni'])->name('backend/lihat-alumni'); 
    Route::get('backend/status/{id}', [App\Http\Controllers\Admin\AlumniController::class, 'status'])->name('backend/status'); 
    Route::post('backend/save-status', [App\Http\Controllers\Admin\AlumniController::class, 'save_status'])->name('backend/save-status'); // end alumni 
    Route::get('backend/album', [App\Http\Controllers\Admin\AlbumController::class, 'index'])->name('backend/album'); // start album
    Route::get('backend/tambah-album', [App\Http\Controllers\Admin\AlbumController::class, 'tambah_album'])->name('backend/tambah-album');
    Route::post('backend/simpan-album', [App\Http\Controllers\Admin\AlbumController::class, 'simpan_album'])->name('backend/simpan-album');
    Route::get('backend/edit-album/{id}', [App\Http\Controllers\Admin\AlbumController::class, 'edit_album'])->name('backend/edit-album');
    Route::put('backend/update-album/{id}', [App\Http\Controllers\Admin\AlbumController::class, 'update_album'])->name('backend/update-album');
    Route::get('backend/hapus-album/{id}', [App\Http\Controllers\Admin\AlbumController::class, 'hapus_album'])->name('backend/hapus-album'); // end album 
    Route::get('backend/foto', [App\Http\Controllers\Admin\FotoController::class, 'index'])->name('backend/foto'); // start foto
    Route::post('backend/simpan-foto', [App\Http\Controllers\Admin\FotoController::class, 'simpan_foto'])->name('backend/simpan-foto'); 
    Route::get('backend/hapus-foto/{id}', [App\Http\Controllers\Admin\FotoController::class, 'hapus_foto'])->name('backend/hapus-foto'); // end foto
    Route::get('backend/video', [App\Http\Controllers\Admin\VideoController::class, 'index'])->name('backend/video'); // start video
    Route::get('backend/tambah-video', [App\Http\Controllers\Admin\VideoController::class, 'tambah_video'])->name('backend/tambah-video');
    Route::post('backend/simpan-video', [App\Http\Controllers\Admin\VideoController::class, 'simpan_video'])->name('backend/simpan-video');
    Route::get('backend/edit-video/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit_video'])->name('backend/edit-video');
    Route::put('backend/update-video/{id}', [App\Http\Controllers\Admin\VideoController::class, 'update_video'])->name('backend/update-video');
    Route::get('backend/hapus-video/{id}', [App\Http\Controllers\Admin\VideoController::class, 'hapus_video'])->name('backend/hapus-video'); // end video 
    Route::get('backend/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('backend/users')->middleware('superadmin'); // start user
    Route::get('backend/tambah-user', [App\Http\Controllers\Admin\UserController::class, 'tambah_user'])->name('backend/tambah-user')->middleware('superadmin');
    Route::post('backend/simpan-user', [App\Http\Controllers\Admin\UserController::class, 'simpan_user'])->name('backend/simpan-user')->middleware('superadmin');
    Route::get('backend/edit-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit_user'])->name('backend/edit-user')->middleware('superadmin');
    Route::put('backend/update-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update_user'])->name('backend/update-user')->middleware('superadmin');
    Route::get('backend/hapus-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'hapus_user'])->name('backend/hapus-user')->middleware('superadmin'); 
    Route::get('backend/edit-profil', [App\Http\Controllers\Admin\UserController::class, 'edit_profil'])->name('backend/edit-profil');
    Route::put('backend/update-profil', [App\Http\Controllers\Admin\UserController::class, 'update_profil'])->name('backend/update-profil');
    Route::get('backend/ganti-password', [App\Http\Controllers\Admin\UserController::class, 'ganti_password'])->name('backend/ganti-password');
    Route::put('backend/update-password', [App\Http\Controllers\Admin\UserController::class, 'update_password'])->name('backend/update-password'); // end user 
    Route::get('backend/pengaduan', [App\Http\Controllers\Admin\PengaduanController::class, 'index'])->name('backend/pengaduan'); // start pengaduan
    Route::get('backend/lihat-pengaduan/{id}', [App\Http\Controllers\Admin\PengaduanController::class, 'lihat_pengaduan'])->name('backend/lihat-pengaduan'); 
    Route::get('backend/hapus-pengaduan/{id}', [App\Http\Controllers\Admin\PengaduanController::class, 'hapus_pengaduan'])->name('backend/hapus-pengaduan'); // end pengaduan
});

/* WEBSITE */
Route::middleware(['sanitize.input'])->group(function ()
{
    Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('/'); 
    Route::get('agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda'); // start agenda
    Route::get('agenda/detail/{id}', [App\Http\Controllers\AgendaController::class, 'detail'])->name('agenda/detail'); // end agenda
    Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita'); // start berita
    Route::get('berita/detail/{id}', [App\Http\Controllers\BeritaController::class, 'detail'])->name('berita/detail'); // end berita
    Route::get('pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('pengumuman'); // start pengumuman
    Route::get('pengumuman/detail/{id}', [App\Http\Controllers\PengumumanController::class, 'detail'])->name('pengumuman/detail'); // end pengumuman
    Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil'); // start profil
    Route::get('profil/sejarah', [App\Http\Controllers\ProfilController::class, 'sejarah'])->name('profil/sejarah');
    Route::get('profil/visi-misi', [App\Http\Controllers\ProfilController::class, 'visi_misi'])->name('profil/visi-misi');
    Route::get('profil/struktur-organisasi', [App\Http\Controllers\ProfilController::class, 'struktur_organisasi'])->name('profil/struktur-organisasi');
    Route::get('profil/sarpras', [App\Http\Controllers\ProfilController::class, 'sarpras'])->name('profil/sarpras'); // end profil
    Route::get('guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru'); // start guru
    Route::get('guru/detail/{id}', [App\Http\Controllers\GuruController::class, 'detail'])->name('guru/detail'); // end guru
    Route::get('karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan'); // start karyawan
    Route::get('karyawan/detail/{id}', [App\Http\Controllers\KaryawanController::class, 'detail'])->name('karyawan/detail'); // end karyawan
    Route::get('pendidikan/kurikulum', [App\Http\Controllers\PendidikanController::class, 'kurikulum'])->name('pendidikan/kurikulum'); // start pendidikan
    Route::get('pendidikan/kalender', [App\Http\Controllers\PendidikanController::class, 'kalender'])->name('pendidikan/kalender');
    Route::get('pendidikan/rekap-us', [App\Http\Controllers\PendidikanController::class, 'rekap_us'])->name('pendidikan/rekap-us');
    Route::post('pendidikan/rekap-us', [App\Http\Controllers\PendidikanController::class, 'rekap_us'])->name('pendidikan/rekap-us'); // end pendidikan
    Route::get('ekstrakurikuler', [App\Http\Controllers\ProfilController::class, 'ekstrakurikuler'])->name('ekstrakurikuler'); // start ekstrakurikuler
    Route::get('ekstrakurikuler/detail/{id}', [App\Http\Controllers\ProfilController::class, 'detail_ekstrakurikuler'])->name('ekstrakurikuler/detail'); // end ekstrakurikuler
    Route::get('peserta-didik', [App\Http\Controllers\SiswaController::class, 'index'])->name('peserta-didik'); // siswa
    Route::get('prestasi/prestasi-sekolah', [App\Http\Controllers\PrestasiController::class, 'prestasi_sekolah'])->name('prestasi/prestasi-sekolah'); // start prestasi
    Route::get('prestasi/prestasi-madrasah', [App\Http\Controllers\PrestasiController::class, 'prestasi_madrasah'])->name('prestasi/prestasi-madrasah');
    Route::get('prestasi/prestasi-siswa', [App\Http\Controllers\PrestasiController::class, 'prestasi_siswa'])->name('prestasi/prestasi-siswa');
    Route::get('prestasi/prestasi-guru', [App\Http\Controllers\PrestasiController::class, 'prestasi_guru'])->name('prestasi/prestasi-guru'); // end prestasi
    Route::get('alumni', [App\Http\Controllers\AlumniController::class, 'index'])->name('alumni');  // start alumni
    Route::get('alumni/penelusuran-alumni', [App\Http\Controllers\AlumniController::class, 'penelusuran_alumni'])->name('alumni/penelusuran-alumni');
    Route::post('alumni/simpan-penelusuran-alumni', [App\Http\Controllers\AlumniController::class, 'simpan_penelusuran_alumni'])->name('alumni/simpan-penelusuran-alumni'); // end alumni
    Route::get('galeri/album/{id}', [App\Http\Controllers\GaleriController::class, 'album'])->name('galeri/album'); // start album
    Route::get('galeri/foto', [App\Http\Controllers\GaleriController::class, 'foto'])->name('galeri/foto');
    Route::get('galeri/video', [App\Http\Controllers\GaleriController::class, 'video'])->name('galeri/video'); // end album
    Route::get('download', [App\Http\Controllers\DownloadController::class, 'index'])->name('download'); // start download
    Route::get('download/hits/{id}', [App\Http\Controllers\DownloadController::class, 'hits'])->name('download/hits'); // end download
    Route::get('pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan'); // start pengaduan
    Route::post('simpan-pengaduan', [App\Http\Controllers\PengaduanController::class, 'simpan_pengaduan'])->name('simpan-pengaduan'); // end pengaduan
});