-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 03:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_siswa`
--

CREATE TABLE `alamat_siswa` (
  `id_alamat_siswa` int(11) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL,
  `alamat_tempat_tinggal` text NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `prov` varchar(255) NOT NULL,
  `kode_pos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat_siswa`
--

INSERT INTO `alamat_siswa` (`id_alamat_siswa`, `nik_calon_siswa`, `alamat_tempat_tinggal`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kab`, `prov`, `kode_pos`) VALUES
(21, '3521057003000002', 'Geneng, Ngawi', 1, 1, 'Dempel 1', 'Dempel', 'Geneng', 'Ngawi', 'Jawa Timur', 63270),
(22, '123456', 'Coba yuk', 1, 1, 'Coba yuk', 'Coba yuk', 'Coba yuk', 'Coba yuk', 'Coba yuk', 1234),
(23, '1234567891234567', 'Geneng, Ngawi', 1, 1, 'Dempel 1', 'Sukoharjo', 'Margorejo', 'Pati', 'Jawa Tengah', 63270);

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id_data_siswa` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_lengkap` varchar(111) NOT NULL,
  `jk` int(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `anak_ke` int(255) NOT NULL,
  `bahasa_sehari` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `diterima_di` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id_data_siswa`, `nik`, `nama_lengkap`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `bahasa_sehari`, `foto`, `status`, `diterima_di`) VALUES
(22, '3521057003000002', 'Nandhika Kurniasari', 2, 'Ngawi', '2007-11-07', 'Islam', 'WNI', 1, 'Indonesia', '1662521331_199257666_2906822772909726_5298981551370563885_n.jpg', 1, 'A'),
(23, '123456', 'Coba yuk edit', 1, 'Coba yukedit', '2022-09-07', 'Coba yuk', 'WNI', 1, 'Indonesia', '1662522906_avatar1.png', 1, 'A'),
(24, '1234567891234567', 'Ayy', 1, 'Pati', '2022-09-07', 'Islam', 'WNI', 2, 'Inggris', '1662557095_avatar1.png', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_ayah`
--

CREATE TABLE `data_ayah` (
  `id_data_ayah` int(11) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `id_pendidikan_ayah` int(2) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `no_telp_ayah` varchar(20) NOT NULL,
  `instansi_ayah` varchar(255) NOT NULL,
  `alamat_kerja_ayah` text NOT NULL,
  `penghasilan_ayah` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ayah`
--

INSERT INTO `data_ayah` (`id_data_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `pekerjaan_ayah`, `no_telp_ayah`, `instansi_ayah`, `alamat_kerja_ayah`, `penghasilan_ayah`, `nik_calon_siswa`) VALUES
(20, 'Nyoto', 'Ngawi', '2022-09-07', 1, 'TNI', '1541930995', 'Ada', 'Dempel 1, RT/RW. 001', 1000000, '3521057003000002'),
(21, 'Coba yuk', 'Coba yuk', '2022-09-07', 2, 'Tani', '0808080808', 'Ada', 'Klaten Edited', 11111111, '123456'),
(22, 'Coba yuk', 'Coba', '2022-09-07', 7, 'Coba', '0808080808', 'Ada', 'Klaten', 1000000, '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `id_data_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(255) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `id_pendidikan_ibu` int(2) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `no_tlp_ibu` varchar(20) NOT NULL,
  `instansi_kerja_ibu` varchar(255) NOT NULL,
  `alamat_kerja_ibu` text NOT NULL,
  `penghasilan_ibu` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ibu`
--

INSERT INTO `data_ibu` (`id_data_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `pekerjaan_ibu`, `no_tlp_ibu`, `instansi_kerja_ibu`, `alamat_kerja_ibu`, `penghasilan_ibu`, `nik_calon_siswa`) VALUES
(19, 'SURYANI', 'Ngawi', '2022-09-07', 1, 'Tani', '1541930995', 'Coba', 'Geneng, Ngawi', 123, '3521057003000002'),
(20, 'Coba yuk', 'Ngawi', '2022-09-07', 2, 'Tani', '089524099104', 'Coba yuk', 'Geneng, Ngawi', 123, '123456'),
(21, 'Coba yuk', 'Coba', '2022-09-07', 7, 'Coba', '0808080808', 'Coba', 'Klaten', 1111111, '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ifrmdidikbaru`
--

CREATE TABLE `ifrmdidikbaru` (
  `id_ifrm_didik` int(11) NOT NULL,
  `ket_tinggal` varchar(255) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `jml_saudara` int(3) NOT NULL,
  `brp_saudara` int(3) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ifrmdidikbaru`
--

INSERT INTO `ifrmdidikbaru` (`id_ifrm_didik`, `ket_tinggal`, `anak_ke`, `jml_saudara`, `brp_saudara`, `nik_calon_siswa`) VALUES
(12, 'Orang Tua', 1, 2, 2, '3521057003000002'),
(13, 'Coba yuk', 1, 1, 2, '123456'),
(14, 'Coba', 2, 1, 1, '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `jasmani_saba`
--

CREATE TABLE `jasmani_saba` (
  `id_jasmani` int(11) NOT NULL,
  `id_goldar` int(2) NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `kelainan_jasmani` varchar(255) NOT NULL,
  `alergi` varchar(255) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasmani_saba`
--

INSERT INTO `jasmani_saba` (`id_jasmani`, `id_goldar`, `bb`, `tb`, `riwayat_penyakit`, `kelainan_jasmani`, `alergi`, `nik_calon_siswa`) VALUES
(12, 2, 123, 123, 'Tidak Ada', 'Tidak ada', 'Tidak Ada', '3521057003000002'),
(13, 2, 123, 123, 'Tidak Ada', 'Tidak ada', 'Tidak Ada', '123456'),
(14, 4, 170, 170, 'Tidak Ada', 'Tidak ada', 'Tidak Ada', '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_orang_tua_wali`
--

CREATE TABLE `kontak_orang_tua_wali` (
  `id_kontak` int(11) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `email_ortu` varchar(255) NOT NULL,
  `jarak` int(255) NOT NULL,
  `id_jenis_transport` int(2) NOT NULL,
  `hobi_anak` text NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak_orang_tua_wali`
--

INSERT INTO `kontak_orang_tua_wali` (`id_kontak`, `no_wa`, `email_ortu`, `jarak`, `id_jenis_transport`, `hobi_anak`, `nik_calon_siswa`) VALUES
(11, '089524099104', 'nandhika.sari_123@student.uns.ac.id', 10, 7, 'Bismillah', '3521057003000002'),
(12, '1234', 'sarinandhika@gmail.com', 1, 8, 'Coba yuk', '123456'),
(13, '089524099104', 'sarinandhika@gmail.com', 1, 7, 'Turu', '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_gol_darah`
--

CREATE TABLE `ref_gol_darah` (
  `id_goldar` int(11) NOT NULL,
  `goldar` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_gol_darah`
--

INSERT INTO `ref_gol_darah` (`id_goldar`, `goldar`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_kelamin`
--

CREATE TABLE `ref_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_jenis_kelamin`
--

INSERT INTO `ref_jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_transportasi`
--

CREATE TABLE `ref_jenis_transportasi` (
  `id_jenis_transportasi` int(11) NOT NULL,
  `nama_transportasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_jenis_transportasi`
--

INSERT INTO `ref_jenis_transportasi` (`id_jenis_transportasi`, `nama_transportasi`) VALUES
(7, 'Jalan Kaki'),
(8, 'Sepeda'),
(9, 'Sepeda Motor'),
(10, 'Mobil'),
(11, 'Transportasi Umum'),
(12, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `ref_pendidikan`
--

CREATE TABLE `ref_pendidikan` (
  `id` int(11) NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_pendidikan`
--

INSERT INTO `ref_pendidikan` (`id`, `nama_pendidikan`) VALUES
(1, 'Tidak Sekolah'),
(2, 'Tidak Tamat SD'),
(3, 'Sekolah Dasar'),
(4, 'Sekolah Menengah Pertama (SMP)'),
(5, 'Sekolah Menengah Atas (SMA)'),
(6, 'Diploma I/II/III'),
(7, 'Strata 1'),
(8, 'Strata 2'),
(9, 'Selebihnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_aktivasi`
--

CREATE TABLE `tbl_daftar_aktivasi` (
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `active` int(3) DEFAULT NULL,
  `tampil` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daftar_aktivasi`
--

INSERT INTO `tbl_daftar_aktivasi` (`id_daftar`, `nama`, `ket`, `active`, `tampil`) VALUES
(1, 'Informasi Pendaftaran SDIT An-Nahar', 'Pendaftaran Belum Dibuka!', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin User', 'admin@admin.com', NULL, '$2y$10$G3c5mpYib3NlGLClHJeLjuSIvCV.OmhYHyrXsWtswpJYWaog9DCVu', 1, NULL, '2022-08-23 22:18:25', '2022-08-23 22:18:25'),
(8, 'Nandhika', 'sarinandhika@gmail.com', NULL, '$2y$10$.D/FKaY0fQ07ZFrq.029W.JxJntKSPhn0irQXD5OlfKki568QAfIS', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `id_wali_murid` int(11) NOT NULL,
  `nama_wali_murid` varchar(255) NOT NULL,
  `tempat_lahir_wali` varchar(255) NOT NULL,
  `tgl_lahir_wali` date NOT NULL,
  `id_pendidikan_wali` varchar(255) NOT NULL,
  `pekerjaan_wali` varchar(255) NOT NULL,
  `no_tlp_wali` varchar(20) NOT NULL,
  `instansi_kerja_wali` varchar(255) NOT NULL,
  `alamat_kerja_wali` text NOT NULL,
  `penghasilan_wali` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`id_wali_murid`, `nama_wali_murid`, `tempat_lahir_wali`, `tgl_lahir_wali`, `id_pendidikan_wali`, `pekerjaan_wali`, `no_tlp_wali`, `instansi_kerja_wali`, `alamat_kerja_wali`, `penghasilan_wali`, `nik_calon_siswa`) VALUES
(5, 'Coba yuk Edited 2', 'Coba yuk', '2022-09-07', '8', 'Coba yuk 2', '1541930995', 'Coba yuk', 'Coba yuk', 12345, '123456'),
(6, 'Wali', 'Wali', '2022-09-07', '7', 'Wali', '089524099104', 'Coba yuk', 'Geneng, Ngawi', 12345, '3521057003000002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_siswa`
--
ALTER TABLE `alamat_siswa`
  ADD PRIMARY KEY (`id_alamat_siswa`);

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id_data_siswa`);

--
-- Indexes for table `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD PRIMARY KEY (`id_data_ayah`);

--
-- Indexes for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`id_data_ibu`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ifrmdidikbaru`
--
ALTER TABLE `ifrmdidikbaru`
  ADD PRIMARY KEY (`id_ifrm_didik`);

--
-- Indexes for table `jasmani_saba`
--
ALTER TABLE `jasmani_saba`
  ADD PRIMARY KEY (`id_jasmani`);

--
-- Indexes for table `kontak_orang_tua_wali`
--
ALTER TABLE `kontak_orang_tua_wali`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ref_gol_darah`
--
ALTER TABLE `ref_gol_darah`
  ADD PRIMARY KEY (`id_goldar`);

--
-- Indexes for table `ref_jenis_kelamin`
--
ALTER TABLE `ref_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jenis_transportasi`
--
ALTER TABLE `ref_jenis_transportasi`
  ADD PRIMARY KEY (`id_jenis_transportasi`);

--
-- Indexes for table `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_daftar_aktivasi`
--
ALTER TABLE `tbl_daftar_aktivasi`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`id_wali_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_siswa`
--
ALTER TABLE `alamat_siswa`
  MODIFY `id_alamat_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id_data_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id_data_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id_data_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ifrmdidikbaru`
--
ALTER TABLE `ifrmdidikbaru`
  MODIFY `id_ifrm_didik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jasmani_saba`
--
ALTER TABLE `jasmani_saba`
  MODIFY `id_jasmani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kontak_orang_tua_wali`
--
ALTER TABLE `kontak_orang_tua_wali`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_gol_darah`
--
ALTER TABLE `ref_gol_darah`
  MODIFY `id_goldar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_jenis_kelamin`
--
ALTER TABLE `ref_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_jenis_transportasi`
--
ALTER TABLE `ref_jenis_transportasi`
  MODIFY `id_jenis_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_daftar_aktivasi`
--
ALTER TABLE `tbl_daftar_aktivasi`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wali_murid`
--
ALTER TABLE `wali_murid`
  MODIFY `id_wali_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
