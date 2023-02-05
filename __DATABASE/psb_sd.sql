/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : psb_sd

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 05/02/2023 10:41:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alamat_siswa
-- ----------------------------
DROP TABLE IF EXISTS `alamat_siswa`;
CREATE TABLE `alamat_siswa`  (
  `id_alamat_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_tempat_tinggal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `dusun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prov` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` int(255) NOT NULL,
  PRIMARY KEY (`id_alamat_siswa`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `alamat_siswa_ibfk_1` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alamat_siswa
-- ----------------------------

-- ----------------------------
-- Table structure for data_ayah
-- ----------------------------
DROP TABLE IF EXISTS `data_ayah`;
CREATE TABLE `data_ayah`  (
  `id_data_ayah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `id_pendidikan_ayah` int(2) NOT NULL,
  `pekerjaan_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp_ayah` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_kerja_ayah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penghasilan_ayah` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_data_ayah`) USING BTREE,
  INDEX `id_pendidikan_ayah`(`id_pendidikan_ayah`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `data_ayah_ibfk_1` FOREIGN KEY (`id_pendidikan_ayah`) REFERENCES `ref_pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `data_ayah_ibfk_2` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_ayah
-- ----------------------------

-- ----------------------------
-- Table structure for data_ibu
-- ----------------------------
DROP TABLE IF EXISTS `data_ibu`;
CREATE TABLE `data_ibu`  (
  `id_data_ibu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `id_pendidikan_ibu` int(2) NOT NULL,
  `pekerjaan_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlp_ibu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_kerja_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_kerja_ibu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penghasilan_ibu` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_data_ibu`) USING BTREE,
  INDEX `id_pendidikan_ibu`(`id_pendidikan_ibu`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `data_ibu_ibfk_1` FOREIGN KEY (`id_pendidikan_ibu`) REFERENCES `ref_pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `data_ibu_ibfk_2` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_ibu
-- ----------------------------

-- ----------------------------
-- Table structure for datasiswa
-- ----------------------------
DROP TABLE IF EXISTS `datasiswa`;
CREATE TABLE `datasiswa`  (
  `id_data_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(111) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk` int(2) NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anak_ke` int(255) NOT NULL,
  `bahasa_sehari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `diterima_di` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_siswa`) USING BTREE,
  INDEX `nik`(`nik`) USING BTREE,
  INDEX `jk`(`jk`) USING BTREE,
  CONSTRAINT `datasiswa_ibfk_1` FOREIGN KEY (`jk`) REFERENCES `ref_jenis_kelamin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of datasiswa
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for ifrmdidikbaru
-- ----------------------------
DROP TABLE IF EXISTS `ifrmdidikbaru`;
CREATE TABLE `ifrmdidikbaru`  (
  `id_ifrm_didik` int(11) NOT NULL AUTO_INCREMENT,
  `ket_tinggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `jml_saudara` int(3) NOT NULL,
  `brp_saudara` int(3) NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_ifrm_didik`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `ifrmdidikbaru_ibfk_1` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ifrmdidikbaru
-- ----------------------------

-- ----------------------------
-- Table structure for jasmani_saba
-- ----------------------------
DROP TABLE IF EXISTS `jasmani_saba`;
CREATE TABLE `jasmani_saba`  (
  `id_jasmani` int(11) NOT NULL AUTO_INCREMENT,
  `id_goldar` int(2) NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `riwayat_penyakit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelainan_jasmani` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alergi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_jasmani`) USING BTREE,
  INDEX `id_goldar`(`id_goldar`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `jasmani_saba_ibfk_1` FOREIGN KEY (`id_goldar`) REFERENCES `ref_gol_darah` (`id_goldar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jasmani_saba_ibfk_2` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jasmani_saba
-- ----------------------------

-- ----------------------------
-- Table structure for kontak_orang_tua_wali
-- ----------------------------
DROP TABLE IF EXISTS `kontak_orang_tua_wali`;
CREATE TABLE `kontak_orang_tua_wali`  (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `no_wa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_ortu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jarak` int(255) NOT NULL,
  `id_jenis_transport` int(11) NOT NULL,
  `hobi_anak` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kontak`) USING BTREE,
  INDEX `id_jenis_transport`(`id_jenis_transport`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `kontak_orang_tua_wali_ibfk_1` FOREIGN KEY (`id_jenis_transport`) REFERENCES `ref_jenis_transportasi` (`id_jenis_transportasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kontak_orang_tua_wali_ibfk_2` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontak_orang_tua_wali
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (9, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (10, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for ref_gol_darah
-- ----------------------------
DROP TABLE IF EXISTS `ref_gol_darah`;
CREATE TABLE `ref_gol_darah`  (
  `id_goldar` int(11) NOT NULL AUTO_INCREMENT,
  `goldar` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_goldar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_gol_darah
-- ----------------------------
INSERT INTO `ref_gol_darah` VALUES (1, 'A');
INSERT INTO `ref_gol_darah` VALUES (2, 'B');
INSERT INTO `ref_gol_darah` VALUES (3, 'AB');
INSERT INTO `ref_gol_darah` VALUES (4, 'O');

-- ----------------------------
-- Table structure for ref_jenis_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `ref_jenis_kelamin`;
CREATE TABLE `ref_jenis_kelamin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_jenis_kelamin
-- ----------------------------

-- ----------------------------
-- Table structure for ref_jenis_transportasi
-- ----------------------------
DROP TABLE IF EXISTS `ref_jenis_transportasi`;
CREATE TABLE `ref_jenis_transportasi`  (
  `id_jenis_transportasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_transportasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_jenis_transportasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_jenis_transportasi
-- ----------------------------
INSERT INTO `ref_jenis_transportasi` VALUES (7, 'Jalan Kaki');
INSERT INTO `ref_jenis_transportasi` VALUES (8, 'Sepeda');
INSERT INTO `ref_jenis_transportasi` VALUES (9, 'Sepeda Motor');
INSERT INTO `ref_jenis_transportasi` VALUES (10, 'Mobil');
INSERT INTO `ref_jenis_transportasi` VALUES (11, 'Transportasi Umum');
INSERT INTO `ref_jenis_transportasi` VALUES (12, 'Lainnya');

-- ----------------------------
-- Table structure for ref_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `ref_pendidikan`;
CREATE TABLE `ref_pendidikan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_pendidikan
-- ----------------------------
INSERT INTO `ref_pendidikan` VALUES (1, 'Tidak Sekolah');
INSERT INTO `ref_pendidikan` VALUES (2, 'Tidak Tamat SD');
INSERT INTO `ref_pendidikan` VALUES (3, 'Sekolah Dasar');
INSERT INTO `ref_pendidikan` VALUES (4, 'Sekolah Menengah Pertama (SMP)');
INSERT INTO `ref_pendidikan` VALUES (5, 'Sekolah Menengah Atas (SMA)');
INSERT INTO `ref_pendidikan` VALUES (6, 'Diploma I/II/III');
INSERT INTO `ref_pendidikan` VALUES (7, 'Strata 1');
INSERT INTO `ref_pendidikan` VALUES (8, 'Strata 2');
INSERT INTO `ref_pendidikan` VALUES (9, 'Selebihnya');

-- ----------------------------
-- Table structure for tbl_daftar_aktivasi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_daftar_aktivasi`;
CREATE TABLE `tbl_daftar_aktivasi`  (
  `id_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ket` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` int(3) NULL DEFAULT NULL,
  `tampil` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_daftar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_daftar_aktivasi
-- ----------------------------
INSERT INTO `tbl_daftar_aktivasi` VALUES (1, 'Informasi Pendaftaran SDIT An-Nahar', 'Pendaftaran Belum Dibuka!', 0, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (4, 'Admin User', 'admin@admin.com', NULL, '$2y$2y$2y$10$9u5kq1GLIz05vernUjmTq./QbxIOouegKgN3Rqh.GlVG354NxGtmu', 1, NULL, '2022-08-24 05:18:25', '2022-08-24 05:18:25', 'admin');
INSERT INTO `users` VALUES (8, 'Nandhika', 'sarinandhika@gmail.com', NULL, '$2y$10$.D/FKaY0fQ07ZFrq.029W.JxJntKSPhn0irQXD5OlfKki568QAfIS', 1, NULL, NULL, NULL, 'nan');

-- ----------------------------
-- Table structure for wali_murid
-- ----------------------------
DROP TABLE IF EXISTS `wali_murid`;
CREATE TABLE `wali_murid`  (
  `id_wali_murid` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wali_murid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir_wali` date NOT NULL,
  `id_pendidikan_wali` int(11) NOT NULL,
  `pekerjaan_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlp_wali` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_kerja_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_kerja_wali` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penghasilan_wali` int(255) NOT NULL,
  `nik_calon_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_wali_murid`) USING BTREE,
  INDEX `id_pendidikan_wali`(`id_pendidikan_wali`) USING BTREE,
  INDEX `nik_calon_siswa`(`nik_calon_siswa`) USING BTREE,
  CONSTRAINT `wali_murid_ibfk_1` FOREIGN KEY (`id_pendidikan_wali`) REFERENCES `ref_pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wali_murid_ibfk_2` FOREIGN KEY (`nik_calon_siswa`) REFERENCES `datasiswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wali_murid
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
