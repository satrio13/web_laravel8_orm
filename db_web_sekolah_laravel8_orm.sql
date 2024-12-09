-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2024 at 02:33 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_sekolah_laravel8_orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_02_01_105850_create_table_user', 1),
(2, '2024_02_02_055559_create_table_tahun', 1),
(3, '2024_02_03_021541_create_table_kurikulum', 1),
(4, '2024_02_04_030119_create_table_album', 1),
(5, '2024_02_05_032403_create_table_berita', 1),
(6, '2024_02_06_041246_create_table_download', 1),
(7, '2024_02_07_100813_create_table_siswa', 1),
(8, '2024_02_08_102846_create_table_profil', 1),
(9, '2024_02_09_023758_create_table_link', 1),
(10, '2024_02_09_033705_create_table_prestasi_siswa', 1),
(11, '2024_02_09_093625_create_table_prestasi_guru', 1),
(12, '2024_02_09_093850_create_table_prestasi_sekolah', 1),
(13, '2024_02_11_063930_create_table_banner', 1),
(14, '2024_02_11_071912_create_table_sejarah', 1),
(15, '2024_02_11_071922_create_table_visimisi', 1),
(16, '2024_02_11_085809_create_table_struktur_organisasi', 1),
(17, '2024_02_11_095255_create_table_ekstrakurikuler', 1),
(18, '2024_02_11_125040_create_table_sarpras', 1),
(19, '2024_02_11_131214_create_table_guru', 1),
(20, '2024_02_12_063835_create_table_karyawan', 1),
(21, '2024_02_12_072816_create_table_agenda', 1),
(22, '2024_02_12_085507_create_table_kalender', 1),
(23, '2024_02_12_092612_create_table_rekap_un', 1),
(24, '2024_02_12_092638_create_table_rekap_us', 1),
(25, '2024_02_12_143756_create_table_alumni', 1),
(26, '2024_02_13_030808_create_table_isialumni', 1),
(27, '2024_02_13_040904_create_table_pengumuman', 1),
(28, '2024_02_13_053103_create_table_foto', 1),
(29, '2024_02_13_125745_create_table_video', 1),
(30, '2024_02_16_040504_create_table_pengaduan', 1),
(31, '2024_02_18_104529_create_table_statistik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id` int UNSIGNED NOT NULL,
  `nama_agenda` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berapa_hari` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `jam_mulai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_selesai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id`, `nama_agenda`, `berapa_hari`, `tgl`, `tgl_mulai`, `tgl_selesai`, `jam_mulai`, `jam_selesai`, `keterangan`, `tempat`, `gambar`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pengambilan Buku Panduan Belajar Semester Genap Tahun Pelajaran 2020/2021', '2', NULL, '2021-01-29', '2021-02-15', '07:30', '13:30', '&lt;p&gt;Assalamu&#039;alaikum Wr.Wb.&lt;/p&gt;&lt;p&gt;Diberitahukan kepada peserta didik \nkelas VII,VIII, dan IX MTsN 1 Kebumen, bahwa pengambilan Buku Panduan \nBelajar bisa dimulai hari Jum&#039;at, 29 Januari 2021 sesuai dengan jadwal \nyang telah di share oleh Wali Kelas.&lt;/p&gt;&lt;p&gt;Adapun ketentuan pengambilan&amp;nbsp;&lt;span&gt;Buku Panduan Belajar adalah :&lt;/span&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;span&gt;Diambil oleh Orang tua / Wali Siswa&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span&gt;Patuhi protokol kesehatan dengan jaga jarak dan memakai masker.&lt;/span&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;span&gt;Wassalamu&#039;alaikum Wr.Wb&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', 'Perpustakaan MTsN 1 Kebumen', '1708148012_IdMhrxvEaFGpsO41eGeeQHfIlwuhmhR1VsNSbKxG.jpg', 'pengambilan-buku-panduan-belajar-semester-genap-tahun-pelajaran-2020-2021', '2024-02-16 22:33:32', '2024-02-16 22:33:32'),
(2, 'Revisi Jadwal Pengambilan Buku (Kelas 8D, 8E, dan 9E)', '2', NULL, '2021-02-16', '2021-02-17', '08:00', '13:00', '&lt;p&gt;Assalamu&#039;alaikum Wr.Wb.&lt;/p&gt;&lt;p&gt;Diberitahukan kepada Bp/Ibu Wali Siswa berhubung dengan adanya &lt;b&gt;Program Jateng 2 Hari di Rumah Saja&lt;/b&gt; dan&lt;b&gt; libur tahun baru Imlek&lt;/b&gt;, maka jadwal pengambilan di Perpustakaan diubah sebagai berikut :&lt;/p&gt;&lt;p&gt;VIII D : Selasa, 16 Februari 2021 ( Jam 07.30-10.30 WIB)&lt;/p&gt;&lt;p&gt;VIII E : Selasa, 16 Februari 2021 (Jam 10.30-11.30 WIB)&lt;/p&gt;&lt;p&gt;IX E : Rabu, Februari 2021 (Jam 07.30 - 10.30 WIB)&lt;/p&gt;&lt;p&gt;Demikian pemberitahuan ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', 'Perpustakaan MTsN 1 Kebumen', '1708148149_XRAh3dPRkSM35Xg3isOMD1NMlz6fI7R3BKpRWXkH.jpg', 'revisi-jadwal-pengambilan-buku-kelas-8d-8e-dan-9e', '2024-02-16 22:35:49', '2024-02-16 22:35:49'),
(3, 'PTS/PAT Kelas VII, VIII, dan IX Semester Genap Tahun Pelajaran 2020/2021', '2', NULL, '2021-03-04', '2021-03-13', '19:30', '15:00', '&lt;ul&gt;&lt;li&gt;Metode Daring&lt;/li&gt;&lt;li&gt;Media E-Learning Madrasah dan Zoom untuk absensi dan pengawasan&lt;/li&gt;&lt;li&gt;Jenis Test Tertulis dan Penugasan untuk mapel Tahfidz, SBK, Prakarya/Informatika, dan KIR&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;', 'Rumah peserta didik (Test Secara Online)', '1706934006_8cffbd84196e226d2506.jpg', 'pts-pat-kelas-vii-viii-dan-ix-semester-genap-tahun-pelajaran-2020-2021', '2024-02-18 21:16:17', '2024-02-18 21:16:17'),
(4, 'Peringatan Isra Mi&#039;raj dan Serah Terima Jabatan Ketua OSIS yang Baru', '1', '2021-03-12', NULL, NULL, '07:30', '10:00', '&lt;ul&gt;&lt;li&gt;Kegiatan dilaksanakan secara Virtual&lt;/li&gt;&lt;li&gt;Di-ikuti oleh siswa-siswi kelas VII, VIII, IX (secara virtual)&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;', 'Aula MTsN 1 Kebumen', '1706934264_d5d7ae3aefd58a5b676d.jpg', 'peringatan-isra-mi-039-raj-dan-serah-terima-jabatan-ketua-osis-yang-baru', '2024-02-18 21:24:03', '2024-02-18 21:24:03'),
(5, 'Pengambilan Raport PTS/PAS Semester Genap Tahun Pelajaran 2020/2021', '2', NULL, '2021-03-15', '2021-03-20', '08:00', '13:00', '&lt;p&gt;Assalamu&#039;alaikum Wr.Wb&lt;/p&gt;&lt;p&gt;Diberitahukan kepada Bapak/Ibu Wali \r\nSiswa Kelas VII,VIII, dan IX MTsN 1 Kebumen berkaitan dengan selesainya \r\nkegiatan PTS untuk kelas VII,VIII&amp;nbsp; dan PAT untuk kelas IX Semester Genap\r\n Tahun Pelajaran 2020/2021, maka pengambilan hasil PTS dan PAT \r\ndilaksanakan dengan ketentuan berikut :&lt;br&gt;a. Jadwal Kegiatan&amp;nbsp;&lt;br&gt;&amp;nbsp; &amp;nbsp;&lt;a href=&quot;https://mtsn1kebumen.sch.id/assets/file/Undangan_7.jpeg&quot; target=&quot;_blank&quot;&gt; Jadwal pengambilan PTS Kelas VII&lt;/a&gt;&lt;br&gt;&amp;nbsp; &amp;nbsp; Jadwal Pengambilan PTS Kelas VIII (Menyusul)&lt;br&gt;&amp;nbsp; &amp;nbsp; &lt;a href=&quot;https://mtsn1kebumen.sch.id/assets/file/Undangan_9.jpeg&quot; target=&quot;_blank&quot;&gt;Jadwal Pengambilan&amp;nbsp; PAT Kelas IX&lt;/a&gt;&lt;br&gt;&lt;span&gt;b. Peserta yang hadir adalah orang tua/wali peserta didik dan peserta didik&lt;br&gt;&lt;/span&gt;&lt;img alt=&quot;&quot;&gt;&lt;span&gt;c. Menerapkan Protokol Kesehatan guna mencegah Penyebaran Covid-19&lt;br&gt;&lt;/span&gt;d. Membawa alat tulis sendiri&lt;br&gt;&lt;span&gt;e.&amp;nbsp;&lt;/span&gt;&lt;span&gt;Membawa Foto kopi Ijazah, Kartu Keluarga (KK), Akte Kelahiran, KIP, PKH, KPS,KKS (bagi yang punya) dimasukkan ke dalam stopmap&lt;br&gt;f.&amp;nbsp;&lt;/span&gt;&lt;span&gt;Mohon hadir tepat waktu&lt;/span&gt;&lt;/p&gt;&lt;span&gt;Demikian undangan disampaikan, atas perhatiannya kami ucapkan terima kasih&lt;/span&gt;&lt;p&gt;&lt;/p&gt;', 'Aula MTsN 1 Kebumen', '1706934525_71330accd3b9872b144d.jpg', 'pengambilan-raport-pts-pas-semester-genap-tahun-pelajaran-2020-2021', '2024-02-18 22:25:13', '2024-02-18 22:25:13'),
(6, 'Ujian Madrasah Kelas IX Tahun Pelajaran 2020/2021', '2', NULL, '2021-03-22', '2021-04-05', '08:00', '10:00', '&lt;p&gt;Assalamu&#039;alaikum Wr.Wb.&lt;br&gt;Di-informasikan kepada peserta didik kelas\r\n IX bahwa pelaksanaan Ujian Madrasah (UM) akan dilaksanakan pada tanggal\r\n 22 Maret 2021 s.d 5 April 2021 dengan metode daring. Bagi siswa yang \r\nterkendala dengan jaringan atau sinyal, pengerjaan Ujian Madrasah bisa \r\ndilaksanakan di Lab.Komputer MTsN 1 Kebumen.&lt;/p&gt;&lt;p&gt;Terima kasih.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', 'Rumah peserta didik (Test Secara Online)', '1706934673_a8a2c49a816a4849c3a6.jpg', 'ujian-madrasah-kelas-ix-tahun-pelajaran-2020-2021', '2024-02-18 22:27:57', '2024-02-18 22:27:57'),
(7, 'Test Seleksi PPDB Program IBS Tahun Pelajaran 2021/2022', '2', NULL, '2021-04-19', '2021-04-20', '07:30', '15:40', NULL, 'MTsN 1 Kebumen', '1706934907_833658cc3fd0ef539a92.jpg', 'test-seleksi-ppdb-program-ibs-tahun-pelajaran-2021-2022', '2024-02-18 22:27:57', '2024-02-20 06:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int UNSIGNED NOT NULL,
  `album` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `album`, `is_active`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'OUTBOUND FOR FULL DAY SCHOOL PROGRAM', '1', 'outbound-for-full-day-school-program', '2024-02-18 23:04:33', '2024-02-18 23:04:33'),
(2, 'PERLOMBAAN DALAM RANGKA PERINGATAN HUT RI KE-77', '1', 'perlombaan-dalam-rangka-peringatan-hut-ri-ke-77', '2024-02-18 23:04:40', '2024-02-18 23:04:40'),
(3, 'UPACARA PERINGATAN HUT RI KE-77', '1', 'upacara-peringatan-hut-ri-ke-77', '2024-02-18 23:04:45', '2024-02-18 23:04:45'),
(4, 'SEMINAR MOTIVASI SANTRI IBS MATANSA', '1', 'seminar-motivasi-santri-ibs-matansa', '2024-02-18 23:04:52', '2024-12-08 08:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id` int UNSIGNED NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `jml_l` int NOT NULL,
  `jml_p` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id`, `id_tahun`, `jml_l`, `jml_p`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 1, '2024-10-20 07:07:40', '2024-10-20 07:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `gambar`, `judul`, `keterangan`, `link`, `button`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1708070887_wwuwotFXQ4kFy5Yh9ncrQwNCihdYv0cSEeez9fhG.jpg', 'MTs NEGERI 1 KEBUMEN', 'Jl. Tentara Pelajar No 29 Kebumen 54312', 'https://mtsn1kebumen.sch.id/profil', 'PROFIL SEKOLAH', '1', '2024-02-16 01:08:07', '2024-02-16 01:08:07'),
(2, '1708072402_q4w15Jtm6GQpjuHsL4JN8EbP0vYwqolPNSRNUmoy.jpg', 'MTs NEGERI 1 KEBUMEN', 'Jl. Tentara Pelajar No 29 Kebumen 54312', 'https://mtsn1kebumen.sch.id/profil', 'PROFIL SEKOLAH', '1', '2024-02-16 01:33:22', '2024-02-16 01:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dibaca` int NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `nama`, `isi`, `gambar`, `dibaca`, `id_user`, `is_active`, `hari`, `tgl`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Siswa Matansa Raih Juara I di Kejuaraan Nasional Olahraga DBON Tahun 2022', '<p class=\"MsoNormal\">Kebumen_Atlet olah raga MTs\nNegeri 1 Kebumen turut berpartisipasi menyukseskan program pemerintah tentang\nDesain Besar Olahraga Nasional (DBON) dan perkembangan industri olahraga di\nIndonesia. </p><p class=\"MsoNormal\">Melalui ajang kejuaraan yang\ndiselenggarakan oleh Perkumpulan Mahasiswa Olahraga Prestasi (PMOP) bekerjasama\ndengan Fakultas Keolahragaan Universitas Sebelas Maret Surakarta (FKOR UNS) mengadakan\nkegiatan Kejuaraan Nasional Olahraga DBON antar SMP/MTs/Sederajat,\nSMA/MA/Sederajat dan Kelas Khusus Olahraga (KKO). &nbsp;</p><p class=\"MsoNormal\">Even\n yang &nbsp;dilaksanakan pada Rabu s.d Jumat (14 – 16/12/\n2022) tersebut bertempat di kompleks Universitas Sebelas Maret (UNS) \n&nbsp;Surakarta. Pada kejuaran &nbsp;tersebut duta MTs Negeri 1 Kebumen berhasi\nmeraih juara I &nbsp;cabang bulutangkis\ntunggal putra atas nama Alga Fauzi Harfani dan juara 3 lomba lompat jauh\n putri\natas nama Alya Ainul Azzura.</p><p>\n\n\n\n\n\n</p><p class=\"MsoNormal\">Selamat dan sukses untuk &nbsp;para juara, semoga makin berprestasi lagi di\nmasa selanjutnya.</p><p></p>', '1708101446_eEMsw771DRb10ztSZnUObhDKdoUG8EWU1px8RjBH.jpg', 0, 1, '1', 'Jum\'at', '2024-02-16', 'siswa-matansa-raih-juara-i-di-kejuaraan-nasional-olahraga-dbon-tahun-2022', '2024-02-16 09:37:26', '2024-02-16 09:37:26'),
(2, 'Rakor Persiapan dan Pemantapan KBM Semester Genap Madrasah', '<p><span>Kebumen_Mengawali tahun baru 2023, Kanwil Kementerian Agama\r\nProvinsi Jawa Tengah menggelar kegiatan rapat koordinasi terkait kegiatan\r\nbelajar mengajar semester genap tahun pelajaran 2022/2023. Kegiatan ini\r\ndilaksanakan hari Kamis (12/1/23) dimulai pukul 08.00 WIB. Acara ini\r\nberlangsung secara virtual/online via zoom dari Kantor Kanwil Propinsi Jawa Tengah.</span></p><p><span>Kegiatan ini diikuti oleh seluruh madrasahyang ada di Jawa Tengah,\r\nmulai Madrasah Ibtidaiyah, Madrasah Tsanawiyah maupun Madrasah Aliyah dan\r\ninstansi pemangku kebijakan pendidikan madrasah di Jawa Tengah termasuk\r\nMadrasah Tsanawiyah Negeri 1 Kebumen juga turut menjadi peserta. Kegiatan di\r\nMTsN 1 Kebumen dipusatkan di Aula Madrasah diikuti oleh Kepala mdrasah, para\r\nWaka dan beberapa guru yang ditunjuk. &nbsp;</span></p><p><span>Dalam kesempatan tersebut, Kakanwil Jateng, Mustangin Ahmad,\r\nmenyambut baik keberhasilan yang telah diraih oleh madrasah selama ini, meski\r\nmasih dalam kondisi bernuansa pandemi, di mana segalanya masih dibatasi\r\nprotokol kesehatan tertentu. Menurutntnya, Program Indonesia Pintar yang\r\ndananya berjumlah 9 milyar sangat membantu keberlangsungan dalam pendidikan,\r\nkhususnya madrasah.</span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p><span>Sementara itu, Menteri Agama RI, Yaqut Cholil, dalam sambutannya menyampaikan&nbsp; bahwa keberhasilan madrasah bisa diraih\r\ndengan program yang tepat dan terevaluasi. Di samping MAN IC dn MAN PK, kini\r\nMadrasah Aliyah Negeri Unggulan di seluruh Indonesia telah dibuka sebagai\r\nmadrasah lanjutan untuk mengembangkan potensi dan skill yang dimiliki oleh\r\nanak-anak bangsa. (Is/Sl)</span></p><p></p>', '1706936271_3c5fe0d5a053b45c72ab.jpg', 0, 1, '1', 'Sabtu', '2024-02-03', 'rakor-persiapan-dan-pemantapan-kbm-semester-genap-madrasah', '2024-02-16 20:04:55', '2024-02-16 20:04:55'),
(3, 'Sosialisasi dan Koordinasi Pendidikan Lanjutan ke Madrasah Unggulan Nasional', '<p><span>Kebumen_Dalam rangka menyukseskan program wajib belajar 12 tahun,\r\nMadrasah Tsanawiyah Negeri 1 Kebumen pada awal semester genap 2023\r\nmengadakan&nbsp;rapat koordinasi dengan orang tua peserta didik. Acara ini\r\ndilaksanakan pada hari Jumat (13/01/23) bertempat di Aula Madrasah.</span></p><p><span>Rapat koordinasi ini dalam rangka persiapan seleksi peserta didik\r\nMatansa untuk PPDB di madrasah unggulan nasional, khusunya MAN IC dan MAN PK.\r\nKegiatan ini diikuti oleh orang tua&nbsp;wali peserta didik sebanyak 68 orang, yang\r\nterdiri dari 45 calon siswa mendaftar ke MAN IC dan 23 siswa ke MAN PK. Hadir\r\npula para guru pendamping dari guru BK.</span></p><p><span>Seperti tahun-tahun sebelumnya, khusus bagi peserta didik kelas\r\nIX yang memenuhi syarat, pada kegiataan ini mengikuti kegiatan persiapan\r\nseleksi lanjutan ke sekolah atau madrasah unggulan. Kegiatan diawali </span><span>pemaparan dari Waka Kurikulum,\r\nSuyitman menyampaikan tahapan-tahapan proses seleksi dari awal hingga akhir, pengumuman\r\npenerimaan seleksi tahun ini di jadwalkan tanggal 16 Maret 2023.</span></p><p><span>Data peserta didik Matansa yang diterima tahun lalu di MAN IC dan\r\nMAN PK cukup menggembirakan. Tahun 2020 ada 11 peserta didik yang diterima di\r\nMAN IC, tahun 2021 ada 8 peserta didik dan 2022 ada 9 peserta didik. Untuk MAN\r\nPK yang diterima tahun 2020 sebanyak 2 peserta didik, tahun 2021 sebanyak 3\r\npeserta. Selain itu ada juga siswa yang diterima di Sekolah Unggulan CT Arsya Fondatioan,\r\ntahun lalu sebanyak 7 peserta didik.</span></p><p class=\"MsoNormal\"><span>Dalam\r\nkegiatan tersebut juga diberikan &nbsp;pembekalan, motivasi dan pengarahan yang\r\ndisampaikan oleh&nbsp; Kepala MTsN1 Kebumen, Fitriana Aenun. Dalam\r\npengarahannya Kepala Madrasah berharap agar peserta didik segera bersiap dan semangat\r\nuntuk meniti jenjang pendidikan berikutnya, bersaing dalam skala nasional\r\ndengan harapan &nbsp;menjadi insan cendekia\r\nyang unggul dan berkarakter kuat sebagai generasi muslim penerus bangsa.</span></p><p><span>Motivasi, koordinasi, dan pembekalan juga dilakukan dengan orang\r\ntua/ wali calon peserta didik. </span><span>Fitriana Aenun menyampaikan terimakasih kepada wali peserta didik\r\nyang telah &nbsp;andil memotivasi dan mendukung putra-putrinya dalam rangka\r\nmeniti jenjang pendidikan berikutnya. pada tahun ini diharapkan jumlah yang\r\nakan diterima lebih banyak dari tahun sebelumnya.&nbsp;</span></p><p><span>“</span><span>Pihak\r\nmadrasah menyadari bahwa peran orang tua sangat menentukan untuk mendukung dan\r\nmendampingi putra-putri mereka dalam proses tahapan seleksi masuk\r\nmadrasah-madrasah unggulan tersebut,” tegas Aenun.</span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p><span>Selanjutnya, Fitriana Aenun juga menyampaikan bahwa untuk tahun\r\nini, ada lima calon peserta didik dari Matansa\r\nyang mendaftar di sekolah Unggulan SMA Taruna Nusantara di Magelang. (Is/Sl)</span></p><p></p>', '1706936302_4c5d64497d66aba9c2ba.jpeg', 1, 1, '1', 'Sabtu', '2024-02-03', 'sosialisasi-dan-koordinasi-pendidikan-lanjutan-ke-madrasah-unggulan-nasional', '2024-02-18 22:31:05', '2024-02-18 22:31:05'),
(4, 'Outing Class,  Kelas Bilingual Matansa Ngobrol dengan Turis Bule', '<p class=\"MsoNormal\">Kebumen_Program Khusus (PK) Kelas\nBilingual MTsN 1 Kebumen mengadakan Kegiatan di Luar Kelas (<i>Outing Class</i>). Kegiatan ini dilaksanakan\npada Sabtu (14/1/2023). Kegiatan yang diikuti oleh seluruh peserta didik PK\nBilingual, sebanyak 93 siswa dari kelas VII, VIII, dan IX ini didampingi oleh\nguru-guru bahasa pada kelas tersebut. </p><p class=\"MsoNormal\">Rombongan berangkat dari madrasah\nmenggunakan tiga bus pada pukul 07.00 dan kembali sekitar pukul&nbsp; 17.00 WIB. Lokasi yang dipilih adalah Kota Yogyakarta,\ntepatnya di Candi Prambanan dan Malioboro. Sesuai dengan tujuan kegiatan yaitu\nuntuk melatih dan membiasakan peserta didik agar mampu dan terbiasa berkomunikasi\nmenggunakan bahasa Inggris dengan penutur aslinya. Kedua tempat itu dipilih\nkarena dipastikan banyak turis asing (mancanegara) yang bisa diajak berbincang\ndan berkomunikasi dalam bahasa Inggris. </p><p class=\"MsoNormal\">Model kegiatan ini dibuat dalam kelompok-kelompok\nkecil, baik dalam praktik berkomunikasi di lapangan maupun dalam pembuatan\nlaporan. Suasana kegiatan dibuat secara santai untuk mempraktikkan materi yang\nsudah dipelajari di kelas.</p><p class=\"MsoNormal\">Dalam arahannya, Kepala MTsN 1\nKebumen, Fitriana Aenun menekankan pentingnya kemampuan lisan terutama dalam\nberbahasa asing, untuk menghadapi persaingan hidup global seperti era sekarang\ndan di masa mendatang. </p><p class=\"MsoNormal\">“Dengan kegiatan <i>Outing Class</i> &nbsp;ini kita berharap semoga dapat menjadi sarana dan\npengalaman nyata yang menambah keberanian dan keterampilan peserta didik dalam\nberbahasa Inggris sebagai bekal konkret ke masa depan,” tambahnya.</p><p>\n\n\n\n\n\n\n\n\n\n</p><p class=\"MsoNormal\">Sementara itu, Ari Endah Miyosi,\nS.Pd selaku ketua panitia berharap agar peserta didik bisa memanfaatkan kesempatan\ntersebut secara maksimal, mempraktikkan kemampuan bahasa Inggris yang sudah\ndipelajari di kelas sambil menikmati suasana rileks dan mendapat ilmu di\nlingkungan yang nyata suasana keramaian di luar kelas. (Is/Sl)</p><p></p>', '1708320853_khsRftDg6ChZ8gl4JqsItBhbOykajT5zgPrH8PDQ.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'outing-class-kelas-bilingual-matansa-ngobrol-dengan-turis-bule', '2024-02-18 22:34:13', '2024-02-18 22:34:13'),
(5, 'Selamat atas Prestasi yang Diraih Peserta Didik Matansa', '<p class=\"MsoNormal\">Kebumen_Berbagai prestasi kembali ditorehkan oleh peserta\ndidik Matansa dalam berbagai lomba yang diikuti beberapa waktu lalu. </p><p class=\"MsoNormal\">Salah satunya adalah oleh Agida Nabila Farkhah Ramadhani.\nDia berhaasil meraih juara pertama Lomba Baca Puisi SMP/MTs Tingkat Nasional\nyang diselenggarakan oleh Pondok Pesantren Al-Aqobah Jombang, Jawa Timur yang\ndiselenggarakan pada 29 Desember 2022.</p><p class=\"MsoNormal\">Selanjutnya dalam ajang Kejuaraan Renang Antar Perkumpulan\nDaerah (KRAPDA) Bupati Cup 3 tahun 2023 tingkat Kabupaten Kebumen, 18 Desember 2022, dua peserta\ndidik berhasil memborong beberapa medali. Salah satunya aadalah Danar Syarif\nHidayatullah yang berhasil meraih 5 buah medali, yaitu juara 2 cabang 50 m gaya\ndada, 50 m gaya kupu-kupu, 100 m gaya kupu-kupu, dan juara tiga di cabang 50 m\ngaya bebasa dan 200 m gaya ganti perorangan.</p><p class=\"MsoNormal\">Satu lagi prestasi diraih oleh Sekar Widyaningsih daan ajang\nkejuaraan yang sama yakni Kejuaraan Renangb Antar Perkumpulan Daerah (KRAP)\nBupati Cup Tahun 2023. Sekar berhasil meraih tiga medali, masing-masing adalah:\njuara 2 cabang 200 m gaya bebas putri, juara 2 cabang 200 gaya dada, dan juara\n3 cabang 50 m gaya kupu-kupu.</p><p class=\"MsoNormal\">Selamat untuk para juara, semoga terus berprestasi di masa\ndan tingkat kejuaran berikutnya.</p><p>\n\n\n\n\n\n\n\n\n\n</p><p class=\"MsoNormal\">&nbsp;</p><p></p>', '1708320914_m32IQyBv7gFEm3tYh6bSm9meT4ZXo8nMuy8TFnmb.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'selamat-atas-prestasi-yang-diraih-peserta-didik-matansa', '2024-02-18 22:35:14', '2024-02-18 22:35:14'),
(6, 'Harlah Matansa Ke-54,  Merawat Tradisi, Menebar Kreasi, dan Mencintai Negeri', '<p class=\"MsoNormal\">Kebumen_Milad Madrasah Tsanawiyah\nNegeri 1 Kebumen yang ke-54 diperingati secara meriah oleh seluruh warga\nmadarsah. Matansa mengadakan acara menyambut hari lahir pada bulan Januari,\ndari Selasa sampai dengan Jumat (24-27/01/2023). Pusat kegiatan berada di\npanggung halaman utama. </p><p class=\"MsoNormal\">Berbagai kegiatan dilakukan\nsecara maraton. Diawali dengan kegiatan jalan sehat warga Matansa mengambil\nrute jalan di Kota Kebumen pada Selasa pagi. Hari berikutnya dilanjutkan dengan\nlomba&nbsp; <i>solo song</i>, drama, melukis, <i>got\ntalent</i>, <i>best student</i> dan lomba literasi,\nyakni menulis resensi dan opini. Lomba diikuti oleh peserta didik mewakili\nkelas masing-masing. Untuk memeriahkan suasana digelar pula pameran karya\npeserta didik, dan bazar kuliner dari peserta didik kelas IX.&nbsp; </p><p class=\"MsoNormal\">Ketua Panitia, Muktamat, M.Si,\nmenyampaikan bahwa tema Harlah kali ini adalah <i>Merawat Tradisi, Menebar Kreasi dan Mencintai Negeri</i>. Peserta didik\ndiberi kebebasan untuk mengepresikan dan mengeksplorasi bakat melalui lagu,\ntari, budaya daerah, serta mementaskan cerita-cerita rakyat lokal Kebumen.</p><p class=\"MsoNormal\">“Kegiatan ini bertujuan untuk\nmenggali kreatifitas peserta didik, baik secara individu maupun kelompok.\nDisatukan dengan kegiatan pembelajaran Kurikulum Merdeka pada implementasi\nProyek Pelajar Pancasila bagi peserta didik kelas VII,” tambahnya.</p><p class=\"MsoNormal\">Sebagai hiburan disediakan undian\nberhadiah berbagai doorprize, sumbangan dari beberapa sponsor dan guru serta\nkaryawan Matansa. Undian dikhususkan hanya untuk peserta didik dengan hadiah\nutamanya adalah tabungan BRI senilai 1 juta, 2 juta, dan sebuah sepeda .</p><p>\n\n\n\n\n\n\n\n\n\n</p><p class=\"MsoNormal\">Puncak acara dilaksanakan Jumat (27/1/2023),\ndiawali dengan doa mujahadah bersama yang dipimpin oleh Ketua MUI Kebumen, KH.\nNursodiq, setelah malamnya diisi dengan lantunan sholawat, dilanjutkan pemotongan\ntumpeng dan diakhiri pengumuman serta pembagian hadiah bagi para juara.</p><p></p>', '1708320952_IKibsinkjiWToJwZNgHKZqa6IoEYGarTt2ewW7NJ.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'harlah-matansa-ke-54-merawat-tradisi-menebar-kreasi-dan-mencintai-negeri', '2024-02-18 22:35:52', '2024-02-18 22:35:52'),
(7, 'Nasi Proposal Meriahkan Bazar Kuliner Milad Matansa', '<p class=\"MsoNormal\"><span>Kebumen_Peringatan\nMilad Matansa yang ke-54, Madrasah Tsanawiyah Negeri 1 Kebumen, salah satunya dimeriahkan\ndengan adanya bazar kuliner yang diikuti oleh peserta didik kelas 9. Bazar\nkuliner berlangsung dua hari Rabu dan Kamis (25 – 26/1/2023).</span></p><p class=\"MsoNormal\"><span>Salah\nsatu stan bazar kuliner yang cukup meriah adalah dari kelas 9B. Sekretaris Bazar\n9B, Asyam Putra Rayzan menyampaikan bahwa acara bazar kuliner ini sangat\ndisukai oleh para peserta didik. Menurut Asyam dengan adanya bazar kuliner ini mereka\nbisa berlatih usaha wiraswasta. Terlihat mana yang bakat dan bisa berjualan\ndengan baik dan mana yang tidak tertarik untuk berjualan. Mereka akan\nkelihatan, mana yang bisa dan biasa memasak dan mana yang cocok dalam hal\npemasaran. </span></p><p class=\"MsoNormal\"><span>Peserta\ndidik juaga belajar menjadi pengusaha kecil-kecilan. Usaha yang dilakukan para\npeserta didik kelas 9B untuk membuat kegiatan bazar kuliner ini sukses adalah\ndengan mencari cara untuk membuat tampilan dagangan yang terbaik, rasa, dan wadah\nyang menarik. Tidak ketinggalan yang peanting juga adalah promosi.</span></p><p class=\"MsoNormal\"><span>\"Kita\njuga membuat dekorasi yang tidak terlalu rumit, tapi cukup menarik. Kami\nberbagi tugas, ada yang bagian masak, ada yang teriak-teriak memasarkan,\nmengantarkan, dan ada juga yang bagian menerima pesanan&nbsp; dan menerim pembayaran,\" tambah Asyam.</span></p><p class=\"MsoNormal\"><span>Proses\ndan kerja keras yang dilakukan oleh 9B selama bazar kuliner dimulai pada Selasa\nsore dengan merapihkan meja dan kursi untuk stan dan Rabu pagi mulai mendekor\nstand mereka yang dimulai pukul setengah 7 sampai pukul 8 pagi. Dilanjut masak\ndan melayani pembeli. </span></p><p class=\"MsoNormal\"><span>Ada\nyang unik dari kelaas 9B, makanan ada yang dimasak di kelas, menu &nbsp;<i>Nasi Proposal</i>.\nSementara menu lainnya &nbsp;cukup dimasak langsung\ndi stan. Kasirnya menggunakan laptop supaya lebih cepat dan mudah, ada petugas\nyang khusus memasukkan data dan ada yang khusus bagian uang kembalian.</span></p><p class=\"MsoNormal\"><span>Bazar\nkuliner yang hanya dua hari ini ternyata membawa keuntungan lumayan. &nbsp;Keuntungan yang didapat oleh kelas 9B sekitar\nRp600 ribu dari pendapatan total sebanyak Rp2,6 juta dengan modal sebesar 2 juta\nberasal dari kas dan iuran siswa. <i>Nasi\nProposal</i> merupakan menu favorit dari sekian menu yang ada. &nbsp;Hanya dua hari, itu pun sekitar pukul 12.00\npasti sudah sold out, <i>Nasi Proposal</i>\nterjual hinga sebanyak 200 porsi.</span></p><p>\n\n\n\n\n\n\n\n\n\n\n\n\n\n</p><p class=\"MsoNormal\"><i><span>Tim peliput: Kelas 8F</span></i></p><p></p>', '1708320990_s96U6SMKaat34kx7WZfzelUjEq37IoIE3H58cZKD.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'nasi-proposal-meriahkan-bazar-kuliner-milad-matansa', '2024-02-18 22:36:30', '2024-02-18 22:36:30'),
(8, 'Jalan Sehat Meriahkan Milad Matansa Ke-54', '<p class=\"MsoNormal\"><span lang=\"IN\">Kebumen_ Pada peringatan Milad Matansa\r\nyang ke-54, MTsN 1 Kebumen menggelar acara jalan sehat yang dilaksanakan pada\r\nSelasa (24</span><span>/1/</span><span lang=\"IN\"> 2023</span><span>) mulai pukul 07.30 hingga pukul 09.45</span><span lang=\"IN\">. </span></p><p class=\"MsoNormal\"><span lang=\"IN\">Sebelum acara jalan sehat dimulai</span><span lang=\"IN\"> </span><span>sempat </span><span lang=\"IN\">diberikan pertanyaan oleh Kepala MTsN 1 Kebumen mengenai kapan\r\nhari lahir MTsN 1 Kebumen. </span><span>Namun, siswa yang menjawab &nbsp;semuanya\r\nsalah, rata-rata menjawab pada bulan&nbsp;\r\nJanuari dan Februari, ternyata yang betul adalah 1 Mei 1969.</span></p><p class=\"MsoNormal\"><span>Seluruh warga madrasah mengikuti\r\nacara jalan sehat ini, baik guru, siswa, maupun karyawan MTsN 1 Kebumen dengan\r\nsangat antusias.&nbsp; Tak lupa OSIS MTsN 1\r\nKebumen juga ikut membantu dalam acara jalan sehat berlangsung. Pada saat jalan\r\nsehat semua warga Matansa mengenakan pakaian&nbsp;\r\nbaju olahraga sekolah. Acara ini dilakukan dengan tujuan meramaikan dan\r\nmemeriahkan Milad Matansa yang ke-54 </span></p><p class=\"MsoNormal\"><span>Rute pada acara jalan sehat ini\r\nadalah dari MTsN 1 Kebumen ke arah utara,&nbsp;\r\nsepanjang Jl. Tentara Pelajar pada pertigaan PDAM belok ke-kiri ke Jl.\r\nArumbinang (stadion) lalu pada pertigaan pasar koplak belok ke-kiri ke Jl.\r\nKusuma dan di Tugu Lawet belok ke-kiri ke&nbsp;\r\nJl. Ahmad Yani sampai dengan pertigaan Taman Kota kebumen berbelok\r\nke-kiri ke sepanjang&nbsp; Jl. Indrakila dan\r\nperempatan Polres Kebumen belok ke kanan lalu lurus terus sampai dengan kembali\r\nke MTsN 1 Kebumen. Saat tiba di madrasah semua siswa diberi sebuah roti dan air\r\nminum dan juga sebuah kupon undian. Kupon undian diundi langsung pada Selasa (24/1)\r\nhingga Kamis, 26 Januari 2023. </span></p><p class=\"MsoNormal\"><span>Acara Jalan sehat ini dilakukan\r\ndengan tujuan meramaikan dan memeriahkan milad Matansa yang ke-54 yang setelah\r\nkurang lebih 2 tahun lamanya tidak ada acara jalan sehat ini dikarenakan\r\nCovid-19. </span></p><p class=\"MsoNormal\"><span>Menurut salah satu siswa Matansa, Agha\r\nSatya, merasa sangat senang atas diadakannya kembali jalan sehat ini dalam\r\nrangka Milad MTsN 1 Kebumen yang ke-54 karena tahun lalu pada milad yang ke-53\r\njalan sehat tidak jadi diadakan karena naiknya jumlah kasus Covid-19. &nbsp;</span></p><p class=\"MsoNormal\"><span>“Seru, ramai dan mengasyikkan bisa\r\nmelihat pemandangan Kota Kebumen daerah Tugu Lawet,” tambah Agha. </span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><i><span>Peliput: Tim Jurnalistik Kelas VIII-E</span></i></p><p></p>', '1708321085_jnAgd0kjaoG62ijVBKKGjgWiSIrzSSZaZDTFIISJ.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'jalan-sehat-meriahkan-milad-matansa-ke-54', '2024-02-18 22:38:05', '2024-11-02 04:09:33'),
(9, 'MTsN 1 Kebumen Kembali Juara Umum OMADA VIII Se-Jawa', '<p class=\"MsoNormal\"><span>Kebumen_Delegasi\r\nMadrasah Tsanawiyah Negeri 1 Kebumen berjumlah 23 siswa berlaga pada ajang\r\nOMADA (Olimpiade Malhikdua) VIII tingkat SMP/MTs se-Jawa. Pelaksanaan bertempat\r\ndi Pondok Pesantren Al Hikmah 2 Sirampog, Bumiayu, Jawa Tengah pada Sabtu, 28\r\nJanuari 2023. Secara keseluruhan jumlah peserta yang masuk babak semi final\r\nsebanyak 296 anak.</span></p><p><span>Dari 23 peserta\r\ndidik delegasi Matansa, akhirnya 13 siswa lolos ke babak final. Sedangkan yang berhasil\r\n&nbsp;sebagai juara sebanyak 6 siswa. Perolehan\r\nkejuaraan tersebut sekaligus menjadikan Matansa kembalai ditetapkan sebagai\r\njuara umum dan mendapat piala bergilir, setelah dua tahun sebelumnya, secara berturut-turut\r\njuga keluar sebagai juara umum.</span></p><p><span>Perolehan kejuaraan\r\nyang diraih delegasi MTsN 1 Kebumen adalah sebagai berikut: cabang mapel IPA\r\nmerebut juara 1 atas nama M. Wildan Al Farokhi bin Mashud, dan juara juara 2\r\natas nama Fara Nuri Hamidah binti Cahyadi Waskito.</span></p><p><span>Mapel Matematika mendapat juara 2 atas nama Azmi Zulfa\r\nHakim bin Bachtiar Achmad, Bahasa Inggris meraih &nbsp;juara 3 atas nama Rizky Alifian Ramadhan bin\r\nSunarto, dan mapel IPS mendapat juara 3 atas nama Khaira Malayka Lohjenawi\r\nbinti Ahmad Nurkholis dan Nadia Fadhilah Nova binti Cahyo Riyadi. </span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p><span>“<em><span>Usaha, ikhtiyar dan berdoa merupakan </span></em><em>three in one</em><em><span> yang sangat penting dalam berlomba, saat berhasil tetap bersyukur dan\r\ntawadu, manakala belum berhasil tetap semangat. Esok masih ada harapan,”</span></em>\r\ndemikian ungkap Kepala MTsN 1 Kebumen, Fitriana Aenun saat menemui anak didik\r\ndan para pendamping lomba, Irham Basyir, Rini Aryanti, dan Siti Mastiah. <br></span></p><p></p>', '1708321123_be6Ulgd63q066uQug7Ig0LQriihF4j7cAJ3kC5XW.jpg', 12, 1, '1', 'Sabtu', '2024-02-24', 'mtsn-1-kebumen-kembali-juara-umum-omada-viii-se-jawa', '2024-02-18 22:38:43', '2024-11-02 06:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_download`
--

CREATE TABLE `tb_download` (
  `id` int UNSIGNED NOT NULL,
  `nama_file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_download`
--

INSERT INTO `tb_download` (`id`, `nama_file`, `file`, `hits`, `id_user`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Contoh Formulir PPDB Program FDS Tahun Pelajaran 2020-2021', '1708322996_1706939880_2727d50d24b4fbd13832.docx', 3, 1, '1', '2024-02-18 23:09:56', '2024-10-09 16:21:26'),
(2, 'Contoh Surat Pernyataan Tidak Pernah Tinggal Kelas', '1708323008_1706939959_5606572e44ad7b90ccd0.docx', 5, 1, '1', '2024-02-18 23:10:08', '2024-10-09 16:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekstrakurikuler`
--

CREATE TABLE `tb_ekstrakurikuler` (
  `id` int UNSIGNED NOT NULL,
  `nama_ekstrakurikuler` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_foto` int UNSIGNED NOT NULL,
  `id_album` int UNSIGNED NOT NULL,
  `foto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `id_album`, `foto`, `created_at`, `updated_at`) VALUES
(1, 3, '1708674913_YcOR2T8VO8VfgtR1FhSFDl3IwbgEEUqoa9EBlW2n.jpg', '2024-02-23 07:55:13', '2024-02-23 07:55:13'),
(2, 3, '1708674913_cUI4S0CZPIfDAO5l8TqC3Rj8OrzpJ6UGOzA9U1nL.jpg', '2024-02-23 07:55:13', '2024-02-23 07:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int UNSIGNED NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niplama` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nuptk` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokarpeg` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golruang` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuspeg` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `jk` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_pt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_lulus` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusguru` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `duk`, `niplama`, `nuptk`, `nokarpeg`, `golruang`, `statuspeg`, `nama`, `tmp_lahir`, `tgl_lahir`, `tmt_cpns`, `tmt_pns`, `jk`, `agama`, `alamat`, `pt`, `tingkat_pt`, `prodi`, `th_lulus`, `jabatan`, `gambar`, `status`, `email`, `statusguru`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '-', 'GTT', 'Wahyu', 'Jepara', '1990-10-10', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', 'Aktif', NULL, 'Mapel', '2024-02-17 01:28:14', '2024-02-17 01:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_isialumni`
--

CREATE TABLE `tb_isialumni` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_lulus` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sma` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatins` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kesan` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_isialumni`
--

INSERT INTO `tb_isialumni` (`id`, `nama`, `th_lulus`, `sma`, `pt`, `instansi`, `alamatins`, `hp`, `email`, `alamat`, `kesan`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hayabusa', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kesan', '1708764542_bngwozejheHODCj06WayE4e4D36c85x6Qp4Jk6MZ.png', '1', '2024-02-24 08:49:02', '2024-02-24 08:49:57'),
(2, 'Hanzo', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1708774769_pchbGlFeVn69L9dNFtrpTzMHztka3XiqO8lhBkTq.png', '0', '2024-02-24 11:39:29', '2024-12-08 07:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kalender`
--

CREATE TABLE `tb_kalender` (
  `id` int UNSIGNED NOT NULL,
  `kalender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kalender`
--

INSERT INTO `tb_kalender` (`id`, `kalender`, `created_at`, `updated_at`) VALUES
(1, '1733646407_1708856216_1708322148_01_Kaldik_dan_Minggu_Efektif_-_Copy.pdf', '2024-02-23 07:18:51', '2024-12-08 08:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int UNSIGNED NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niplama` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nuptk` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokarpeg` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golruang` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuspeg` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `jk` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_pt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_lulus` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tugas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nip`, `duk`, `niplama`, `nuptk`, `nokarpeg`, `golruang`, `statuspeg`, `nama`, `tmp_lahir`, `tgl_lahir`, `tmt_cpns`, `tmt_pns`, `jk`, `agama`, `alamat`, `pt`, `tingkat_pt`, `prodi`, `th_lulus`, `gambar`, `status`, `email`, `tugas`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '-', 'GTT', 'Dani', 'Jakarta', '1990-10-10', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, '', 'Aktif', NULL, NULL, '2024-02-17 01:41:35', '2024-02-17 01:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int UNSIGNED NOT NULL,
  `mapel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alokasi` int NOT NULL,
  `kelompok` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_urut` int NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `mapel`, `alokasi`, `kelompok`, `no_urut`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Al-qur\'an Hadist', 4, 'A', 1, '1', '2024-02-18 22:52:28', '2024-02-18 22:52:56'),
(2, 'Akidah Akhlak', 4, 'A', 2, '1', '2024-02-18 22:53:51', '2024-02-18 22:53:51'),
(3, 'Fiqih', 2, 'A', 3, '1', '2024-02-18 22:54:14', '2024-02-18 22:54:14'),
(4, 'Sejarah Kebudayaan Islam', 4, 'A', 2, '1', '2024-02-18 22:54:32', '2024-02-18 22:54:32'),
(5, 'Pendidikan Pancasila dan Kewarganegaraan', 5, 'A', 2, '1', '2024-02-18 22:54:45', '2024-02-18 22:54:45'),
(6, 'Bahasa Indonesia', 6, 'A', 4, '1', '2024-02-18 22:55:01', '2024-02-18 22:55:01'),
(7, 'Bahasa Arab', 7, 'A', 4, '1', '2024-02-18 22:55:14', '2024-12-08 08:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`id`, `nama`, `link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'HALAMAN PPDB', 'https://ppdb.mtsn1kebumen.sch.id/home', '1', '2024-02-18 21:14:12', '2024-02-18 21:14:12'),
(2, 'E-Learning MTs N 1 Kebumen', 'http://elearning.mtsn1kebumen.sch.id/', '1', '2024-02-18 21:14:12', '2024-02-18 21:14:12'),
(3, 'Buku Digital Madrasah', 'https://madrasah2.kemenag.go.id/buku/', '1', '2024-02-18 21:15:12', '2024-12-08 07:09:36'),
(4, 'Perpustakaan Digital MTs N 1 Kebumen', 'http://pustaka.mtsn1kebumen.sch.id/', '1', '2024-02-20 01:10:11', '2024-12-08 07:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `nama`, `status`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'Sarwan', '3', 'tes pengaduan', '2024-02-24 09:09:15', '2024-02-24 09:09:15'),
(7, 'tes', '2', 's', '2024-10-24 07:29:16', '2024-10-24 07:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dibaca` int NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `nama`, `isi`, `gambar`, `dibaca`, `id_user`, `is_active`, `hari`, `tgl`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'INFO LOWONGAN KERJA PUSTAKAWAN DAN SATPAM (SECURITY)', '&lt;p&gt;Assalamu&#039;alaikum Wr. Wb.&lt;/p&gt;&lt;p&gt;Dibuka lowongan pekerjaan di Madrasah Tsanawiyah Negeri 1 Kebumen sebagai tenaga :&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Satpam sebanyak 2 (dua) orang&lt;/li&gt;&lt;li&gt;Pustakawan sebanyak 2 (dua) orang&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;A. PERSYARATAN UMUM&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Beragama Islam&lt;/li&gt;&lt;li&gt;Warga Negara Indonesia&lt;/li&gt;&lt;li&gt;Tanggungjawab dan Berkelakuan Baik&lt;/li&gt;&lt;li&gt;Sehat Jasmani dan Rohani&lt;/li&gt;&lt;li&gt;Bisa Baca Al Qur&#039;an dengan baik&lt;/li&gt;&lt;li&gt;Menyertakan Daftar Riwayat Hidup&lt;/li&gt;&lt;li&gt;Menyertakan Lamaran Pekerjaan&lt;/li&gt;&lt;li&gt;Menyertakan Pengalaman Kerja&lt;/li&gt;&lt;li&gt;Menyertakan Pas Photo berwarna ukuran 3x4 atau 4x6 sebanyak 2 (dua) lembar&lt;/li&gt;&lt;li&gt;menyertakan KTP yang masih berlaku&lt;/li&gt;&lt;li&gt;Usia Maksimal 28 tahun pada 31 Desember 2021&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;B. PERSYARATAN KHUSUS&lt;/p&gt;&lt;p&gt;&lt;span&gt;1. SATPAM&lt;/span&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Jujur&lt;/li&gt;&lt;li&gt;Disiplin&lt;/li&gt;&lt;li&gt;Terampil&lt;/li&gt;&lt;li&gt;memiliki ijazah minimal SLTA&lt;/li&gt;&lt;li&gt;Dapat mengatur lalu lintas&lt;/li&gt;&lt;li&gt;Memiliki sertifikat pelatihan satpam&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;2. TENAGA PUSTAKAWAN&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Jujur&lt;/li&gt;&lt;li&gt;Disiplin&lt;/li&gt;&lt;li&gt;Terampil&lt;/li&gt;&lt;li&gt;Ijazah minimal S1 sesuai bidangnya&lt;/li&gt;&lt;li&gt;Kompeten&lt;/li&gt;&lt;li&gt;Profesional&lt;/li&gt;&lt;li&gt;Menguasai IT&lt;/li&gt;&lt;li&gt;menguasai di bidang OPAC&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;C.\n Berkas Lamaran dikirim via POS ke MTsN 1 Kebumen yang beralamat di Jl. \nTentara Pelajar No. 29 Kebumen 54312 paling lambat Rabu, 22 Desember \n2021 stempel POS&lt;/p&gt;&lt;p&gt;D. Bagi yang lolos berkas, wajib mengikuti tes tertulis dan wawancara&lt;/p&gt;&lt;p&gt;E. Tes Seleksi Tertulis dan wawancara pada hari Selasa 28 Desember 2021&lt;/p&gt;&lt;p&gt;F. Pengumuman hasil seleksi pada hari Rabu 29 Desember 2021&lt;/p&gt;&lt;p&gt;G. Keputusan akhir tidak bisa dipengaruhi pihak manapun&lt;/p&gt;&lt;p&gt;Wassalamu&#039;alaikum Wr. Wb. &lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '', 0, 1, '1', 'Sabtu', '2024-02-17', 'info-lowongan-kerja-pustakawan-dan-satpam-security', '2024-02-16 22:52:53', '2024-02-16 22:52:53'),
(2, 'PENGUMUMAN HASIL TES ONLINE PPDB PROGRAM IBS TAHUN PELAJARAN 2022/2023', '&lt;p&gt;Berikut kami sampaikan Pengumuman Hasil Tes Online PPDB Program \nIslamic Boarding School (IBS) Tahun Pelajaran 2022/2023, bisa diunduh \nmelalui link berikut ini :&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://mtsn1kebumen.sch.id/download/hits/SK_Hasil_Tes_Online_IBS_20221.pdf&quot; target=&quot;_blank&quot;&gt;Klik di sini&lt;/a&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '', 0, 1, '1', 'Senin', '2024-02-19', 'pengumuman-hasil-tes-online-ppdb-program-ibs-tahun-pelajaran-2022-2023', '2024-02-18 22:43:56', '2024-02-18 22:43:56'),
(3, 'PENGUMUMAN HASIL SELEKSI ADMINISTRASI PPDB PROGRAM FDS MTSN 1 KEBUMEN TP. 2022/2023', '&lt;p&gt;Berikut kami sampaikan Pengumuman Hasil Seleksi Administrasi PPDB \nProgram Full Day School (FDS) Tahun pelajaran 2022/2023, bisa diunduh \nmelalui link berikut ini : silahkan klik&amp;nbsp;&lt;a href=&quot;https://mtsn1kebumen.sch.id/download/hits/PENGUMUMAN_LOLOS_ADMINISTRASI_FDS1.PDF&quot; target=&quot;_blank&quot;&gt;di sini&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '', 0, 1, '1', 'Senin', '2024-02-19', 'pengumuman-hasil-seleksi-administrasi-ppdb-program-fds-mtsn-1-kebumen-tp-2022-2023', '2024-02-18 22:44:27', '2024-02-18 22:44:27'),
(4, 'INFO LOWONGAN PEKERJAAN TENAGA PENDIDIK MAPEL INFORMATIKA', '&lt;p&gt;Assalamu&#039;alaikum Wr. Wb.&lt;br&gt;&lt;/p&gt;&lt;p&gt;Dibutuhkan 1 (satu) Sarjana \nPendidikan Komputer untuk menjadi Tenaga Pendidik pada mata pelajaran \nInformatika di Madrasah Tsanawiyah Negeri 1 Kebumen dengan ketentuan \nsebagai berikut :&lt;/p&gt;&lt;p&gt;Persyaratan Umum :&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Beragama Islam&lt;/li&gt;&lt;li&gt;Berdedikasi Tinggi&lt;/li&gt;&lt;li&gt;Disiplin&lt;/li&gt;&lt;li&gt;Jujur&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;Persyaratan Khusus :&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Mengajukan surat lamaran pekerjaan bermaterai&lt;/li&gt;&lt;li&gt;Melampirkan Ijazah S1 Sarjana Pendidikan Komputer&lt;/li&gt;&lt;li&gt;Melampirkan Transkip Nilai&lt;/li&gt;&lt;li&gt;Melampirkan Akta IV (bagi yang memiliki)&lt;/li&gt;&lt;li&gt;Melampirkan Pas Foto berwarna ukuran 3x4 sebanyak 2 buah&lt;/li&gt;&lt;li&gt;Melampirkan fotokopi KTP&lt;/li&gt;&lt;li&gt;Melampirkan fotokopi KK&lt;/li&gt;&lt;li&gt;Melampirkan Surat Keterangan/Kartu telah vaksin covid-19&lt;/li&gt;&lt;li&gt;Melampirkan Surat Pengalaman Kerja (bagi yang memiliki)&lt;/li&gt;&lt;li&gt;Melampirkan Sertifikat Pelatihan (bagi yang memiliki)&lt;/li&gt;&lt;li&gt;Menguasai Microsoft Office serta memiliki kemampuan pada aplikasi olah gambar dan video&lt;/li&gt;&lt;li&gt;Memiliki pengetahuan pengembangan website&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;Berkas\n lamaran dapat diantar langsung ke MTsN 1 Kebumen yang beralamat di \nJalan Tentara Pelajar Nomor 29 Kebumen paling lambat hari Kamis, 23 Juni\n 2022 pukul 14.30 WIB atau via pos paling lambat tanggal 23 Juni 2022 \nCap Pos.&lt;/p&gt;&lt;p&gt;Pengumuman seleksi berkas pada hari Jum&#039;at, 24 Juni 2022 yang dapat dilihat di &lt;a href=&quot;https://mtsn1kebumen.sch.id/&quot; target=&quot;_blank&quot;&gt;https://mtsn1kebumen.sch.id/&lt;/a&gt;.&lt;a href=&quot;https://mtsn1kebumen.sch.id/&quot; target=&quot;_blank&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Tes\n seleksi berupa Tes Tertulis, Wawancara, Micro Teaching, dan Praktek \nKomputer yang akan dilaksanakan di MTsN 1 Kebumen pada hari Sabtu, 25 \nJuni 2022.&lt;/p&gt;&lt;p&gt;Pengumuman Hasil Seleksi pada hari Selasa, 28 Juni 2022.&lt;/p&gt;&lt;p&gt;Demikian Pengumuman ini disampaikan.&lt;/p&gt;&lt;p&gt;Wassalamu&#039;alaikum Wr. Wb.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '', 1, 1, '1', 'Senin', '2024-02-19', 'info-lowongan-pekerjaan-tenaga-pendidik-mapel-informatika', '2024-02-18 22:45:00', '2024-10-29 08:03:54'),
(5, 'PENGUMUMAN LELANG', '&lt;p&gt;Berikut&amp;nbsp; kami sampaikan Pengumuman Lelang :&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&lt;b&gt;PENGUMUMAN LELANG&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Nomor : 2753/Mts.11.&lt;/span&gt;&lt;span&gt;05&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;.01/K&lt;/span&gt;&lt;span&gt;S&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;.01&lt;/span&gt;&lt;span&gt;.4&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;/10&lt;/span&gt;&lt;span&gt;/&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;20&lt;/span&gt;&lt;span&gt;22&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Panitia lelang Madrasah Tsanawiyah Negeri 1 &lt;/span&gt;&lt;span&gt;Kebumen &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;melalui Kantor Pelayanan Kekayaan Negara dan Lelang (KPKNL) &lt;/span&gt;&lt;span&gt;Purwokerto&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; akan melelang Barang Milik Negara (BMN) &lt;/span&gt;&lt;span&gt;Non TBK, &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;berdasarkan Surat &lt;/span&gt;&lt;span&gt;Kantor\nWilayah Kementerian Agama Prov. Jawa Tengah Tentang Persetujuan &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Penghapusan &lt;/span&gt;&lt;span&gt;BMN\nSelain Tanah, Bangunan dan Kendaraan Dengan Tindak Lanjut Penjualan Secara\nLelang pada &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Madrasah Tsanawiyah Negeri 1 Kebumen&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Nomor : &lt;/span&gt;&lt;span&gt;0&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;8&lt;/span&gt;&lt;span&gt;.0&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;01&lt;/span&gt;&lt;span&gt;/Kw.11.1/2/K&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;S.&lt;/span&gt;&lt;span&gt;0&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;1.6&lt;/span&gt;&lt;span&gt;/&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;08&lt;/span&gt;&lt;span&gt;/2002\ntanggal 0&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;8&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Agustus&lt;/span&gt;&lt;span&gt; 2022&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;, berupa:&lt;/span&gt;&lt;/p&gt;&lt;table class=&quot;MsoTableGrid&quot; border=&quot;1&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; width=&quot;625&quot;&gt;\n &lt;tbody&gt;&lt;tr&gt;\n  &lt;td width=&quot;31&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;No&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;347&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Nama Barang&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;108&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Harga Limit&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;96&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Jaminan&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;42&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Ket.&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n &lt;/tr&gt;\n &lt;tr&gt;\n  &lt;td width=&quot;31&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;1&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;347&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;1\n  (satu) paket barang inventaris yang berada di &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Madrasah Tsanawiyah Negeri 1 Kebumen&lt;/span&gt;&lt;span&gt; d.a Jalan &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Tentara Pelajar&lt;/span&gt;&lt;span&gt;\n  Nomor &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;29&lt;/span&gt;&lt;span&gt; Kebumen Jawa Tengah.&lt;/span&gt;&lt;span&gt; &lt;span lang=&quot;IN&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;108&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Rp. &lt;/span&gt;&lt;span&gt;1.&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;578&lt;/span&gt;&lt;span&gt;.&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;75&lt;/span&gt;&lt;span&gt;0&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;,-&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;96&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Rp. 7&lt;/span&gt;&lt;span&gt;00.000&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;,-&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;42&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n &lt;/tr&gt;\n&lt;/tbody&gt;&lt;/table&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;b&gt;&lt;span lang=&quot;IN&quot;&gt;Pelaksanaan Lelang&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Waktu Pelaksanaan&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Hari/tanggal&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :\nRabu, &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;26&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Oktober&lt;/span&gt;&lt;span&gt; 2022&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Batas Akhir Penawaran&amp;nbsp; :\nPukul 1&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;3&lt;/span&gt;&lt;span&gt;.&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;3&lt;/span&gt;&lt;span&gt;0 waktu server lelang melalui internet\n(sesuai WIB)&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Alamat\nDomain&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : https://&lt;/span&gt;&lt;a href=&quot;http://www.lelang.go.id/&quot;&gt;&lt;span&gt;www.lelang.go.id&lt;/span&gt;&lt;/a&gt;&lt;span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Tempat\nLelang&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : &lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;KPKNL Purwokerto, Jalan Pahlawan No. 876 Purwokerto&lt;/span&gt;&lt;span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span lang=&quot;FI&quot;&gt;Penetapan\nPemenang&amp;nbsp;&amp;nbsp;&amp;nbsp; : setelah batas akhir\npenawaran.&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span&gt;Peserta\nlelang diharap menyesuaikan diri dengan penggunaan waktu &lt;/span&gt;&lt;i&gt;server&lt;/i&gt;&lt;span&gt; yang tertera pada alamat domain di atas.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormalCxSpMiddle&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;b&gt;&lt;span lang=&quot;IN&quot;&gt;Persyaratan Lelang:&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;1.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span&gt;Calon peserta lelang dapat melihat\nobyek lelang di lokasi sejak diumumkan.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;i&gt;&lt;span&gt;2.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;/i&gt;&lt;span&gt;Lelang\ndilaksanakan dengan penawaran melalui aplikasi lelang internet yang di akses\npada alamat domain : https://&lt;i&gt;www.lelang.go.id.&lt;u&gt;&lt;span&gt;&lt;/span&gt;&lt;/u&gt;&lt;/i&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;3.&lt;span&gt;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;span&gt;Calon peserta lelang mendaftarkan diri&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; pada &lt;/span&gt;&lt;span&gt;Aplikasi Lelang Internet alamat domain angka 2 &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;di atas, kemudian&lt;/span&gt;&lt;span&gt; mengaktifkan akun &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;dan &lt;/span&gt;&lt;span&gt;merekam (scan)\nKTP, NPWP (ekstensi file *.jpg,*.png), dan nomor rekening atas nama sendiri.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;Peserta\nyang bertindak sebagai kuasa badan usaha diwajibkan mengunggah surat kuasa\nnotariil, akta pendirian perusahaan dan perubahannya, NPWP perusahaan dalam\nsatu file.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;4.&lt;span&gt;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;span&gt;Jaminan\nPenawaran Lelang :&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;a.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span&gt;Peserta Lelang diwajibkan menyetor uang\njaminan sesuai dengan pengumuman lelang disetor sekaligus (bukan dicicil) dan\nharus sudah efektif paling lambat 1 ( satu) hari sebelum pelaksanaan lelang;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;b.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span&gt;Uang&lt;span&gt; jaminan lelang disetorkan ke\nnomor Virtual Account (VA) peserta lelang, yang akan dikirimkan secara otomatis\ndari alamat domain di atas kepada akun peserta lelang.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;5.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;Penawaran&lt;/span&gt;&lt;span&gt;\nlelang dimulai dari nilai limit dan dapat diajukan berkali-kali sampai batas\nwaktu sebagaimana tersebut diatas.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;6.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;Peserta lelang\nyang ditunjuk sebagai pemenang wajib melunasi pembayaran harga pokok lelang\nditambah bea lelang pembeli sebesar 2% paling lambat 5 (lima) hari kerja\nsetelah lelang, jika tidak maka pada hari kerja berikutnya pemenang dinyatakan\nwanprestasi, uang jaminan akan disetorkan seluruhnya ke Kas Negara&lt;/span&gt;&lt;span&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;7.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span&gt;Objek dilelang dalam kondisi apa adanya\ndengan segala konsekuensi biaya tertunggak atas objek lelang. Peserta lelang\ndianggap telah mengetahui kondisi objek lelang. Peserta &lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;lelang&lt;/span&gt;&lt;span&gt; tidak dapat menuntut ganti rugi\napabila lelang dibatalkan karena sesuatu hal sesuai peraturan perundangan yang berlaku.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;8.&lt;span&gt;&amp;nbsp;&amp;nbsp;\n&lt;/span&gt;&lt;/span&gt;&lt;span&gt;Informasi lebih lanjut tentang &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;tata cara menawar/&lt;/span&gt;&lt;span&gt;persyaratan lelang, dapat\nmenghubungi &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Madrasah\nTsanawiyah Negeri 1 &lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;Kebumen &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;(0287)381229 &lt;/span&gt;&lt;span&gt;atau KPKNL&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; Purwokert&lt;/span&gt;&lt;span&gt;o &lt;/span&gt;&lt;span lang=&quot;FI&quot;&gt;Jln&lt;/span&gt;&lt;span&gt; Pahlawan Nomor 876 Purwokerto,\nTelepon (0281) 630454.&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;table class=&quot;MsoTableGrid&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; align=&quot;left&quot;&gt;\n &lt;tbody&gt;&lt;tr&gt;\n  &lt;td width=&quot;284&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;328&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span&gt;Kebumen,\n  &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;19&lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt; &lt;/span&gt;&lt;span lang=&quot;IN&quot;&gt;Oktober&lt;/span&gt;&lt;span&gt; 2022&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n &lt;/tr&gt;\n &lt;tr&gt;\n  &lt;td width=&quot;284&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Mengetahui,&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;Kepala MTsN 1\n  Kebumen&lt;/span&gt;&lt;span&gt;&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;ttd dan stempel&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span&gt;Fitriana Aenun&lt;/span&gt;&lt;/p&gt;\n  &lt;/td&gt;\n  &lt;td width=&quot;328&quot; valign=&quot;top&quot;&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Panitia Lelang&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Ketua,&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span lang=&quot;IN&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; ttd&lt;/span&gt;&lt;/p&gt;\n  &lt;p class=&quot;MsoNormal&quot; align=&quot;center&quot;&gt;&lt;span&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Sigit Achmadi&lt;/span&gt;&lt;br&gt;&lt;/p&gt;\n  &lt;/td&gt;\n &lt;/tr&gt;\n&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span&gt;&lt;br clear=&quot;all&quot;&gt;\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img data-filename=&quot;Lelang.jpg&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '', 1, 1, '1', 'Senin', '2024-02-19', 'pengumuman-lelang', '2024-02-18 22:48:35', '2024-11-02 06:16:14'),
(6, 'Pengumuman Cap Tiga Jari Ijazah', '&lt;p&gt;Undangan untuk melakukan cap tiga jari di ijazah bagi almuni&amp;nbsp; Matansa TP 2021/2022&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '1708321745_uQLAHxR2zrpIPKd27EqMe0Rl0tbO7PCB18bielQh.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'pengumuman-cap-tiga-jari-ijazah', '2024-02-18 22:49:05', '2024-02-18 22:49:05'),
(7, 'Prestasi Kementerian Agama Tahun 2022', '&lt;p&gt;Prestasi Kementerian Agama Tahun 2022&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '1708321797_80KsjOt40sWuQCRXSnVXjVadWip90QG6lTtkUYhP.jpg', 0, 1, '1', 'Senin', '2024-02-19', 'prestasi-kementerian-agama-tahun-2022', '2024-02-18 22:49:57', '2024-02-18 22:49:57'),
(8, 'Kementerian Agama Republik Indonesia', '&lt;p&gt;Kementerian Agama Republik Indonesia&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '1708321821_pElPtCHdLzD4jZArOl4rHy7f9rL8jh4HbZSjzwM8.jpg', 15, 1, '1', 'Senin', '2024-02-19', 'kementerian-agama-republik-indonesia', '2024-02-18 22:50:21', '2024-11-02 06:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi_guru`
--

CREATE TABLE `tb_prestasi_guru` (
  `id` int UNSIGNED NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_prestasi_guru`
--

INSERT INTO `tb_prestasi_guru` (`id`, `id_tahun`, `nama`, `prestasi`, `nama_guru`, `tingkat`, `jenis`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Nama Lomba', '1', 'Nama Guru', '2', '1', NULL, '1728834357_9huE5oTZWAwZ5jE89DNee47EEiKuDBh8dpY8r4YB.jpg', '2024-10-13 15:45:57', '2024-12-08 07:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi_sekolah`
--

CREATE TABLE `tb_prestasi_sekolah` (
  `id` int UNSIGNED NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_prestasi_sekolah`
--

INSERT INTO `tb_prestasi_sekolah` (`id`, `id_tahun`, `nama`, `prestasi`, `tingkat`, `jenis`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Nama Lomba', '1', '3', '1', NULL, '1728834372_8KXsOQDPb3POvA6ptyKM7PRngSeLz5kroOuPuAx0.jpg', '2024-10-13 15:46:12', '2024-12-08 07:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi_siswa`
--

CREATE TABLE `tb_prestasi_siswa` (
  `id` int UNSIGNED NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_prestasi_siswa`
--

INSERT INTO `tb_prestasi_siswa` (`id`, `id_tahun`, `nama`, `prestasi`, `nama_siswa`, `kelas`, `tingkat`, `jenis`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Nama Lomba', '1', 'Nama Siswa', NULL, '1', '1', NULL, '1728834335_AjLXR2o2e04EWEmDRq0T0gtzUc03oy9F9nbM82eH.jpg', '2024-10-13 15:45:35', '2024-12-08 07:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int UNSIGNED NOT NULL,
  `nama_web` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_web` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_admin` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil` text COLLATE utf8mb4_unicode_ci,
  `alamat` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akreditasi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurikulum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kepsek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_operator` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `nama_web`, `jenjang`, `logo_web`, `logo_admin`, `favicon`, `meta_description`, `meta_keyword`, `profil`, `alamat`, `email`, `telp`, `fax`, `whatsapp`, `akreditasi`, `kurikulum`, `file`, `nama_kepsek`, `nama_operator`, `instagram`, `facebook`, `twitter`, `youtube`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'MTs NEGERI 1 KEBUMEN', '3', '1733708314_1729396390_mxjDm6Jy8ztcNgRgWz0sWHFroCOLEY9YK1iIDfKG.jpg', '1733644003_HbxJv0U82ezjQwWVR4MC8By0XSOHjBv9OxeNXKT4.png', '1733708324_Nn7AOQ0HoaBsZpVy6DphZlVX2CkxrAbzhaWiPv50.ico', 'Selamat datang di website MTs NEGERI 1 KEBUMEN', 'MTs NEGERI 1 KEBUMEN', NULL, 'Jl. Tentara Pelajar No 29 Kebumen 54312', 'mtsnkebumen1@kemenag.go.id', '(0287) 3812291', '-', NULL, 'A', 'Kurikulum 2013', '', '-', '-', 'https://www.instagram.com/mtsn1kebumen', 'https://web.facebook.com/profile.php?id=100067035564396', 'https://mobile.twitter.com/kebumen_1', 'https://www.youtube.com/channel/UCp_1yWIfzQ1i-tEW06BHhrA', '', '2024-02-23 07:19:07', '2024-12-09 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap_un`
--

CREATE TABLE `tb_rekap_un` (
  `id_un` int UNSIGNED NOT NULL,
  `id_kurikulum` int UNSIGNED NOT NULL,
  `tertinggi` int NOT NULL,
  `terendah` int NOT NULL,
  `rata` int NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rekap_un`
--

INSERT INTO `tb_rekap_un` (`id_un`, `id_kurikulum`, `tertinggi`, `terendah`, `rata`, `id_tahun`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 2, '2024-02-22 00:59:38', '2024-12-08 08:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap_us`
--

CREATE TABLE `tb_rekap_us` (
  `id_us` int UNSIGNED NOT NULL,
  `id_kurikulum` int UNSIGNED NOT NULL,
  `tertinggi` int NOT NULL,
  `terendah` int NOT NULL,
  `rata` int NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_rekap_us`
--

INSERT INTO `tb_rekap_us` (`id_us`, `id_kurikulum`, `tertinggi`, `terendah`, `rata`, `id_tahun`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 2, '2024-10-13 02:56:45', '2024-12-08 08:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarpras`
--

CREATE TABLE `tb_sarpras` (
  `id` int UNSIGNED NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sarpras`
--

INSERT INTO `tb_sarpras` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<br>', '2024-02-23 07:19:14', '2024-02-25 07:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id` int UNSIGNED NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<p class=\"MsoNormal\"><span>Pada tahun 1964  beberapa tokoh masyarakat Kebumen pada waktu itu bersepakat untuk  mendirikan sekolah lanjutan tingkat pertama (SLTP) yang bercirikan khas  Agama Islam, maka jadilah musyawarah mufakat untuk mendirikan sekolah  lanjutan tingkat pertama (SLTP) yang diberi nama Pendidikan Guru Agama  Pertama (PGAP) 4 tahun setingkat SLTP, yang terletak di Jalan Pahlawan  21 Kebumen/sebelah selatan Alun-alun Kebumen.Adapun tokoh pendiri pada  waktu itu adalah sebagai berikut :</span></p><ol start=\"1\" type=\"1\"><li class=\"MsoNormal\"><span>Bapak KH. Sururuddin (almarhum)</span></li><li class=\"MsoNormal\"><span>Bapak H. Abu Nawas (almarhum)</span></li><li class=\"MsoNormal\"><span>Bapak Mohammad Irfa’ie</span></li><li class=\"MsoNormal\"><span>Bapak H. Tholib, B.A.</span></li><li class=\"MsoNormal\"><span>Bapak H. Fadlun Haryanto, B.A.</span></li></ol><p class=\"MsoNormal\"><span>Kemudian  kelima tokoh tersebut bersepakat untuk memilih bapak H. Tholib, B.A.  sebagai kepala PGAP 4 tahun. Pada saat itu siswa yang pertama sejumlah  40 orang siswa, yakni 1 (satu) kelas. Kemudian pada tahun 1969 PGAP 4  tahun berubah menjadi Madrasah Tsanawiyah Agama Islam Negeri (MTsAIN)  Kebumen, namun PGAP 4 tahun juga masih ada, jadi SLTP berciri khas Islam  ada 2 yakni PGAIP 4 tahun dan MTsAIN Kebumen. Adapun  sebagai&nbsp;Direktur&nbsp;MTsAIN adalah Bapak Mohammad Irfa’ie. Kedua-duanya  berjalan lancar walaupun satu berstatus negeri dan yang satunya swasta.</span></p><p class=\"MsoNormal\"><span>Kemudian  pada tahun 1970 PGAIP 4 tahun berubah status menjadi PGAN 4 tahun. Jadi  kedua-duanya berstatus negeri dengan SK Menteri Agama Nomor: 148 tahun  1970 tanggal 22 Juli 1970. Kemudian pada tahun 1978 MTsAIN menjadi MTsN  Kebumen 1 dan PGAN 4 tahun berubah menjadi MTsN Kebumen 2.</span></p><p class=\"MsoNormal\"><span>Sampai sekarang ini, MTsN 1 Kebumen &nbsp;telah mengalami sepuluh kali pergantian kepala dengan urutan sebagai berikut :</span></p><ol start=\"1\" type=\"1\"><li class=\"MsoNormal\"><span>Tahun 1964-1969 Bapak H. Abunawas (almarhum)</span></li><li class=\"MsoNormal\"><span>Tahun 1969-1981 Bapak Mohammad Irfa’ie (almarhum).</span></li><li class=\"MsoNormal\"><span>Tahun 1981-1988 Bapak H. Tholib, B.A</span></li><li class=\"MsoNormal\"><span>Tahun 1988-1992 Bapak Chalimi, B.A.&nbsp;(almarhum).</span></li><li class=\"MsoNormal\"><span>Tahun 1992-1998 Bapak Drs. Mudasir Mas’ud.</span></li><li class=\"MsoNormal\"><span>Tahun 1998-2004 Ibu Dra. Hj. Juwairiyah.</span></li><li class=\"MsoNormal\"><span>Tahun 2004-2010 Bapak Drs. H. Moh. Dawamudin, M.Ag.</span></li><li class=\"MsoNormal\"><span>Tahun 2010 Bapak H. Djabir, M.Ag. (almarhum).</span></li><li class=\"MsoNormal\"><span>Tahun 2011-2013 Bapak Drs.H. Khoironi Hadi, M.Ed.</span></li><li class=\"MsoNormal\"><span>Tahun 2013 - 2018 Bapak Drs. H. Moh. Iskandar</span></li><li class=\"MsoNormal\"><span>Tahun 2018&nbsp; - 2021 (19 Januari 2021 ) Bapak Muhamad Siswanto, M.Pd.I</span></li><li class=\"MsoNormal\"><span>Tahun 2021 ( 19 Januari 2021) sampai dengan sekarang Bapak Sugeng Warjoko, M.Ed</span></li></ol><p class=\"MsoNormal\"><span>Berdasarkan  surat keputusan Direktorat Jenderal Pembinaan Kelembagaan Agama Islam  Departemen Agama Nomor: E/242.A/99 tertanggal 2 Agustus 1999 Madrasah  Tsanawiyah Negeri (MTsN) Kebumen 1 telah diputuskan sebagai Madrasah  Tsanawiyah Negeri (MTsN) Model Kebumen 1.Nomenklatur MTsN Kebumen 1  kembali berubah sesuai Keputusan Menteri Agama no 810 tahun 2017  tertanggal 3 Oktober 2017 menjadi MTs Negeri 1 Kebumen.</span></p><p class=\"MsoNormal\"><span>Dalam  perjalanannya, MTs Negeri1 Kebumen &nbsp;tumbuh dan berkembang pesat.  Faktanya dari tahun ke tahun MTs Negeri Kebumen 1 selalu menolak calon  peserta didik baru yang tidak sedikit jumlahnya karena keterbatasan  fasilitas atau prasarana yang ada. Dari dokumentasi madrasah disebutkan  bahwa pada tahun pelajaran 2015/2016 calon peserta didik baru yang  ditolak mencapai lebih dari 50% lebih dari jumlah pendaftar peserta  didik baru yang diterima. Hal ini menggambarkan betapa tingginya animo  masyarakat terhadap MTs Negeri 1 Kebumen .</span></p><p class=\"MsoNormal\"><span>Animo  masyarakat yang semakin tinggi terhadap MTsN1 Kebumen &nbsp;direspon dengan  menambah daya tampung peserta didik.&nbsp;&nbsp;Jika &nbsp;sejak tahun pelajaran  2007/2008 hingga 2016/2017 peserta didik yang ditampung &nbsp;24 kelas  (masing-masing tingkatan 8 kelas), maka pada tahun 2017/2018 bertambah  menjadi 25 kelas. Pertumbuhan dan perkembangan MTs Negeri Kebumen&nbsp; 1 ini  seiring dengan semakin meningkatnya sarana dan prasarana yang dimiliki.  Tahun 2018/2019 MTsN1 Kebumen&nbsp;&nbsp; menambah 1 kelas&nbsp; menjadi 26 kelas, dan  tahun 2019/2020 berjumlah 27 kelas ( masing masing 9 kelas ).</span></p><p class=\"MsoNormal\"><span>Animo  masyarakat yang semakin tinggi tidak hanya sekedar kuantitas, namun  kualitas peserta didik yang masuk juga menunjukkan peningkatan. Data  menunjukkan pada tahun 2015/2016 rata-rata UN yang masuk rata rata  149,3. Pada tahun2016/2017 rata-rata UN peserta didik baru 259.&nbsp;Pada  tahun 2017/2018 rata –&nbsp;rata UN peserta didik baru yang diterima 244 dan  rata –&nbsp;rata UN peserta didik baru pada tahun 2018/2019 sebesar 213,9.  Sedangkan pada tahun 2019/202020&nbsp;rata –&nbsp;rata UN peserta didik baru yang  diterima&nbsp;199,7</span></p><p class=\"MsoNormal\"><span>Di  sisi lain, prestasi akademik peserta didik dari tahun ke tahun selalu  meningkat. Faktanya. &nbsp;pada tahun 2014/2015 rata-rata nilai UN 8,57,  tahun 2015/2016 rata rata nilai UN 86,08, dan tahun 2016/2017 nilai  rata-rata UN 84,08 semuanya MTsN 1 Kebumen masuk pada peringkat 2  SMP/MTs se Kabupaten Kebumen. Prestasi yang membanggakan MTsN 1 Kebumen  adalah meraih nilai rata-rata tertinggi SMP/MTs se Kabupaten Kebumen  pada Tahun 2018, dengan jumlah rata rata 329,51 dan nilai rata-rata&nbsp;  82,38, mengalahkan SMPN favorit di Kabupaten Kebumen. Dan lebih  membanggakan lagi di Tahun 2019 meraih Jumlah &nbsp;nilai rata-rata UN  tertinggi MTs Negeri se Indonesia, dan satu satunya MTs Negeri yang  masuk &nbsp;di&nbsp; 100 besar SMP/MTs peraih nilai rata-rata tertinggi di  Indonesia.</span></p><p class=\"MsoNormal\"><span>Dari  beberapa prestasi lain yang pernah diraih oleh MTs1 Negeri Kebumen  &nbsp;meliputi kejuaraan bidang akademik dan non akademik. Data prestasi  terakhir bidang akademik menunjukkan prestasi yang maksimal pada  Kompetisi Sains Madrasah tingkat Nasional bidang&nbsp;&nbsp;Fisika dan Biologi  meraih medali emas pada tahun 2011/2012. Dan MTs N 1 Kebumen telah  meraih juara kedua&nbsp;&nbsp;tingkat provinsi Jawa Tengah pada Kompetisi Sains  Madrasah&nbsp;&nbsp;bidang matematika tahun 2011/2012 . Sedangkan tahun 2012/2013  MTs Negeri Kebumen 1 akan maju pada Kompetisi Sains Madrasah Bidang  Fisika pada tingkat Nasional.</span></p><p class=\"MsoNormal\"><span>Sampai  dengan tahun pelajaran 2020/2021 ini MTs Negeri 1 Kebumen&nbsp; memiliki 55  tenaga pendidik dan 15 tenaga kependidikan. Dari seluruh tenaga pendidik  tersebut yang sudah berkualifikasi S2 sebanyak&nbsp;5&nbsp;orang,&nbsp;&nbsp;berkualifikasi  S1 sebanyak&nbsp;37&nbsp;orang, tenaga kependidikan S1 sebanyak 3 orang,  berkualifikasi D3 2, lainya SLTA&nbsp;&nbsp;. Sementara ini tenaga pendidik yang  sudah tersertifikasi sebagai pendidik profesional hampir 90%.</span></p><p></p>', '2024-02-23 07:19:20', '2024-02-25 06:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int UNSIGNED NOT NULL,
  `id_tahun` int UNSIGNED NOT NULL,
  `jml1pa` int NOT NULL,
  `jml1pi` int NOT NULL,
  `jml2pa` int NOT NULL,
  `jml2pi` int NOT NULL,
  `jml3pa` int NOT NULL,
  `jml3pi` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `id_tahun`, `jml1pa`, `jml1pi`, `jml2pa`, `jml2pi`, `jml3pa`, `jml3pi`, `created_at`, `updated_at`) VALUES
(5, 2, 173, 173, 170, 170, 180, 180, '2024-02-18 22:58:25', '2024-02-18 22:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `id` int UNSIGNED NOT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int NOT NULL,
  `online` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_statistik`
--

INSERT INTO `tb_statistik` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '127.0.0.1', '2024-02-23', 74, '1708695022'),
(2, '127.0.0.1', '2024-02-24', 50, '1708776925'),
(3, '127.0.0.1', '2024-02-25', 11, '1708856688'),
(4, '127.0.0.1', '2024-09-29', 6, '1727624376'),
(5, '127.0.0.1', '2024-10-03', 1, '1727959874'),
(6, '127.0.0.1', '2024-10-04', 11, '1728020490'),
(7, '127.0.0.1', '2024-10-07', 4, '1728316264'),
(8, '127.0.0.1', '2024-10-09', 81, '1728490932'),
(9, '127.0.0.1', '2024-10-13', 125, '1728834417'),
(10, '127.0.0.1', '2024-10-16', 4, '1729013306'),
(11, '127.0.0.1', '2024-10-23', 2, '1729700176'),
(12, '127.0.0.1', '2024-10-24', 12, '1729757279'),
(13, '127.0.0.1', '2024-10-29', 19, '1730189072'),
(14, '127.0.0.1', '2024-11-02', 82, '1730528704'),
(15, '127.0.0.1', '2024-12-08', 6, '1733647204');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur_organisasi`
--

CREATE TABLE `tb_struktur_organisasi` (
  `id` int UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_struktur_organisasi`
--

INSERT INTO `tb_struktur_organisasi` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(1, '1733644559_1708855717_AvATPHbdFlfeBKkgqeJLsSuoFyXAV96wKC4KvtNI.png', '2024-02-23 07:19:30', '2024-12-08 07:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` int UNSIGNED NOT NULL,
  `tahun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '2019/2020', '2024-02-23 07:33:25', '2024-02-23 07:33:25'),
(2, '2020/2021', '2024-02-23 07:33:25', '2024-12-08 08:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `email`, `level`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$9a9IRj4s5HTy1Z30z8xIFOlC5tLF2.lXews4lhTXuOkBR7G/csmVa', 'admin@gmail.com', 'superadmin', '1', '2024-02-23 07:19:36', '2024-12-08 08:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `judul`, `keterangan`, `link`, `created_at`, `updated_at`) VALUES
(1, 'PROFIL MADRASAH ADIWIYATA', NULL, '88etG3cM3PQ', '2024-02-18 23:08:02', '2024-02-18 23:08:02'),
(2, 'PROFIL PERPUSTAKAAN BAIT AL-ILMI MATANSA', NULL, 'ELRUH7Qi82w', '2024-02-18 23:08:13', '2024-12-08 08:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id` int UNSIGNED NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id`, `isi`, `created_at`, `updated_at`) VALUES
(1, '<p><b><span>A.&nbsp;&nbsp;&nbsp;&nbsp;</span><span>Visi MTsN 1 Kebumen</span></b></p><p>&nbsp; &nbsp;<span>&nbsp;<span>Terwujudnya insan yang&nbsp;</span></span><span><b>Religius, Cerdas, Terampil, Unggul, dan Berwawasan Lingkungan (RESTU WALI)</b></span></p><p><span>&nbsp; &nbsp; Lingkungan belajar yang</span><span>&nbsp;<b>Asri, Indah, Kondusif, Bersih, Ramah, Sehat, dan Nyaman (ASIK BERSAMA)</b></span><br></p><p><b><span>B.&nbsp;&nbsp;&nbsp;&nbsp;</span><span>Misi MTsN 1 Kebumen</span></b></p><p>&nbsp;&nbsp;&nbsp;<span>&nbsp;<span>Misi MTsN 1 Kebumen adalah sebagai berikut :</span></span></p><ol><li><span>Menyiapkan  generasi berakhlakul karimah, dan menguasai ilmu pengetahuan,  teknologi, dan riset yang mampu mengaktualisasikan diri dalam  bermasyarakat.</span></li><li><span>Membekali pengetahuan  nilai-nilai ajaran islam sebagai pondasi untuk mengembangkan minat,  bakat, dan potensi peserta didik agar menjadi pribadi yang tangguh dan  mampu berkompetisi di tingkat lokal, nasional, maupun internasional.</span></li><li><span>Meningkatkan kompetensi dan profesionalitas pendidik dan tenaga kependidikan sesuai dengan tuntutan zaman.</span></li><li><span>Meningkatkan kualitas MTs Negeri 1 Kebumen sebagai madrasah unggulan dan agen perubahan (</span><i>agent of changes</i><span>)  dalam pengembangan pembelajaran riset, sains, dan teknologi yang  terintegrasi dengan nilai-nilai keislaman, serta berwawasan lingkungan.</span></li><li><span>Menjalin kemitraan yang harmonis dengan pemangku kepentingan (</span><i>stake holder</i><span>) untuk meningkatkan mutu madrasah.</span></li></ol><p></p>', '2024-02-23 07:19:41', '2024-02-25 06:59:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_alumni_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_berita_id_user_foreign` (`id_user`);

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_download_id_user_foreign` (`id_user`);

--
-- Indexes for table `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `tb_foto_id_album_foreign` (`id_album`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_isialumni`
--
ALTER TABLE `tb_isialumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kalender`
--
ALTER TABLE `tb_kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_pengumuman_id_user_foreign` (`id_user`);

--
-- Indexes for table `tb_prestasi_guru`
--
ALTER TABLE `tb_prestasi_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_prestasi_guru_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_prestasi_sekolah`
--
ALTER TABLE `tb_prestasi_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_prestasi_sekolah_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_prestasi_siswa`
--
ALTER TABLE `tb_prestasi_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_prestasi_siswa_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rekap_un`
--
ALTER TABLE `tb_rekap_un`
  ADD PRIMARY KEY (`id_un`),
  ADD KEY `tb_rekap_un_id_kurikulum_foreign` (`id_kurikulum`),
  ADD KEY `tb_rekap_un_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_rekap_us`
--
ALTER TABLE `tb_rekap_us`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `tb_rekap_us_id_kurikulum_foreign` (`id_kurikulum`),
  ADD KEY `tb_rekap_us_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_siswa_id_tahun_foreign` (`id_tahun`);

--
-- Indexes for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_struktur_organisasi`
--
ALTER TABLE `tb_struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id_album` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ekstrakurikuler`
--
ALTER TABLE `tb_ekstrakurikuler`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_isialumni`
--
ALTER TABLE `tb_isialumni`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kalender`
--
ALTER TABLE `tb_kalender`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_prestasi_guru`
--
ALTER TABLE `tb_prestasi_guru`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prestasi_sekolah`
--
ALTER TABLE `tb_prestasi_sekolah`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prestasi_siswa`
--
ALTER TABLE `tb_prestasi_siswa`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_rekap_un`
--
ALTER TABLE `tb_rekap_un`
  MODIFY `id_un` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_rekap_us`
--
ALTER TABLE `tb_rekap_us`
  MODIFY `id_us` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_struktur_organisasi`
--
ALTER TABLE `tb_struktur_organisasi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD CONSTRAINT `tb_alumni_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD CONSTRAINT `tb_download_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD CONSTRAINT `tb_foto_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `tb_album` (`id_album`);

--
-- Constraints for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD CONSTRAINT `tb_pengumuman_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_prestasi_guru`
--
ALTER TABLE `tb_prestasi_guru`
  ADD CONSTRAINT `tb_prestasi_guru_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_prestasi_sekolah`
--
ALTER TABLE `tb_prestasi_sekolah`
  ADD CONSTRAINT `tb_prestasi_sekolah_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_prestasi_siswa`
--
ALTER TABLE `tb_prestasi_siswa`
  ADD CONSTRAINT `tb_prestasi_siswa_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_rekap_un`
--
ALTER TABLE `tb_rekap_un`
  ADD CONSTRAINT `tb_rekap_un_id_kurikulum_foreign` FOREIGN KEY (`id_kurikulum`) REFERENCES `tb_kurikulum` (`id_kurikulum`),
  ADD CONSTRAINT `tb_rekap_un_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_rekap_us`
--
ALTER TABLE `tb_rekap_us`
  ADD CONSTRAINT `tb_rekap_us_id_kurikulum_foreign` FOREIGN KEY (`id_kurikulum`) REFERENCES `tb_kurikulum` (`id_kurikulum`),
  ADD CONSTRAINT `tb_rekap_us_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_id_tahun_foreign` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
