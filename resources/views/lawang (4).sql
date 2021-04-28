-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Apr 2021 pada 05.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_jobs`
--

CREATE TABLE `add_jobs` (
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `master_id` bigint(20) UNSIGNED NOT NULL,
  `tipekerja_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `gaji_id` bigint(20) UNSIGNED NOT NULL,
  `judul_jobs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_jobs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_jobs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobs_dibuka` date NOT NULL,
  `jobs_ditutup` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `add_jobs`
--

INSERT INTO `add_jobs` (`jobs_id`, `master_id`, `tipekerja_id`, `kategori_id`, `tag_id`, `gaji_id`, `judul_jobs`, `lokasi_jobs`, `deskripsi_jobs`, `jobs_dibuka`, `jobs_ditutup`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 4, 2, 1, 1, 2, 'Software Enginering', 'Yogyakarta', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-18', '2021-04-26', '2021-04-18 20:40:51', '2021-04-18 20:40:51', NULL),
(4, 5, 3, 1, 1, 1, 'Manajement Pemasaran Marketplace and iklan', 'Jakarta Barat ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-25', '2021-04-18 19:55:23', '2021-04-18 20:43:26', NULL),
(5, 5, 4, 1, 1, 3, 'Laravel 8 dan CodeIgniter', 'BALI', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:07:14', '2021-04-18 20:45:59', NULL),
(6, 3, 2, 1, 1, 1, 'Jago komputer', 'Surabaya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:49:09', '2021-04-18 20:49:09', NULL),
(7, 2, 1, 1, 1, 1, 'Pintar Microsoft Word dan Exel', 'Tuban', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-05-04', '2021-04-18 20:50:02', '2021-04-18 20:50:02', NULL),
(8, 4, 3, 1, 1, 1, 'UI dan UX Disgner', 'Amerika Serikat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-22', '2021-04-18 20:53:10', '2021-04-18 20:53:10', NULL),
(9, 5, 2, 1, 1, 1, 'SQL Injection and Hacker', 'Medan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:54:18', '2021-04-18 20:54:18', NULL),
(10, 4, 4, 1, 1, 1, 'Aplikasi Perkantoran', 'Lombok, Nusa Tenggara Barat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-28', '2021-04-18 20:55:23', '2021-04-18 20:55:23', NULL),
(2312, 3, 3, 1, 1, 1, 'WEB Managemen instansi replublik', 'Semarang, Jawa Tengah', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-18', '2021-04-22', '2021-04-18 20:35:02', '2021-04-18 20:35:02', NULL),
(3213, 1, 1, 1, 1, 1, 'Web Teknologi Informasi', 'Jakarta Barat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-27', '2021-04-18 20:35:02', '2021-04-18 20:35:02', NULL),
(3214, 4, 2, 1, 1, 1, 'Software Enginering', 'Yogyakarta', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-18', '2021-04-26', '2021-04-18 20:40:51', '2021-04-18 20:40:51', NULL),
(3215, 5, 3, 12, 1, 2, 'Manajement Pemasaran Marketplace and iklan', 'Jakarta Barat ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-25', '2021-04-18 19:55:23', '2021-04-18 20:43:26', NULL),
(3216, 5, 1, 5, 1, 4, 'Laravel 8 dan CodeIgniter', 'BALI', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:07:14', '2021-04-18 20:45:59', NULL),
(3217, 3, 4, 4, 1, 5, 'Jago komputer', 'Surabaya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:49:09', '2021-04-18 20:49:09', NULL),
(3218, 2, 4, 7, 1, 4, 'Pintar Microsoft Word dan Exel', 'Tuban', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-05-04', '2021-04-18 20:50:02', '2021-04-18 20:50:02', NULL),
(3219, 2, 4, 5, 1, 1, 'UI dan UX Disgner', 'Amerika Serikat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-22', '2021-04-18 20:53:10', '2021-04-18 20:53:10', NULL),
(3220, 5, 1, 8, 1, 3, 'SQL Injection and Hacker', 'Medan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-20', '2021-04-18 20:54:18', '2021-04-18 20:54:18', NULL),
(3221, 3, 3, 4, 1, 3, 'Aplikasi Perkantoran', 'Lombok, Nusa Tenggara Barat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-28', '2021-04-18 20:55:23', '2021-04-18 20:55:23', NULL),
(3222, 2, 3, 5, 1, 3, 'WEB Managemen instansi replublik', 'Semarang, Jawa Tengah', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-18', '2021-04-22', '2021-04-18 20:35:02', '2021-04-18 20:35:02', NULL),
(3223, 5, 1, 10, 1, 2, 'Web Teknologi Informasi', 'Jakarta Barat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-19', '2021-04-27', '2021-04-18 20:35:02', '2021-04-18 20:35:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id_admin`, `nama_admin`, `email_admin`, `no_hp_admin`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'danang', 'danang@gmail.com', '081331414048', NULL, '$2y$10$YhLrjPFuJyq5RiRvBj8FWOgitQ0VP6DQHrJkc/JUm08xeWxJ/FroS', '2021-04-27 06:10:33', '2021-04-27 06:10:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_p`
--

CREATE TABLE `akun_p` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pendaftar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_p`
--

INSERT INTO `akun_p` (`id`, `nama_pendaftar`, `email_perusahaan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@gmail.com', '$2y$10$t9/JHQrMkbCBJzbZUSXDe.zwNIuNQUXRBzk2cKp9tR48Bd2Nhwf32', NULL, '2021-04-27 20:51:59', '2021-04-27 20:51:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_u`
--

CREATE TABLE `akun_u` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_u`
--

INSERT INTO `akun_u` (`id`, `nama_pelamar`, `email_pelamar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Danang Junian Widodo', 'danang@gmail.com', '$2y$10$cWuiKStTkpWU2G/mUuP4RuQH6rZRfWpMDxezRtNODyjj0Io...P9S', NULL, '2021-04-27 20:35:52', '2021-04-27 20:35:52'),
(11, 'Admin', 'admin@gmail.com', '$2y$10$3J1fO7mbtg4JjhROFpedzOO3s8KghfqeHSW4fQjjTGjb.W4FNpdoO', NULL, '2021-04-27 20:51:29', '2021-04-27 20:51:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apply`
--

CREATE TABLE `apply` (
  `id_pelamar` bigint(20) UNSIGNED NOT NULL,
  `id_jobs` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `gaji`) VALUES
(1, '$100'),
(2, '$250'),
(3, '$500'),
(4, '$750'),
(5, '$1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upload_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kerja`
--

CREATE TABLE `kategori_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_kerja`
--

INSERT INTO `kategori_kerja` (`id`, `kategori`) VALUES
(1, 'Programmer'),
(2, 'Pendidikan'),
(3, 'Kesehatan'),
(4, 'Freelance'),
(5, 'Transport'),
(6, 'Telekomunikasi'),
(7, 'Kesehatan'),
(8, 'Fintect'),
(9, 'Akuntansi'),
(10, 'Kontruksi'),
(11, 'Pelayanan'),
(12, 'Design');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualifikasi`
--

CREATE TABLE `kualifikasi` (
  `id_kualifikasi` bigint(20) UNSIGNED NOT NULL,
  `lulusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kualifikasi`
--

INSERT INTO `kualifikasi` (`id_kualifikasi`, `lulusan`) VALUES
(1, 'SMA / SMK'),
(2, 'D1'),
(3, 'D2'),
(4, 'S1'),
(5, 'S2'),
(6, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jobs`
--

CREATE TABLE `master_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendafatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webste_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nib_perusahaan` int(11) NOT NULL,
  `penaggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_jobs`
--

INSERT INTO `master_jobs` (`id`, `nama_perusahaan`, `nama_pendafatar`, `email_perusahaan`, `nomor_hp_perusahaan`, `alamat_perusahaan`, `webste_perusahaan`, `nib_perusahaan`, `penaggung_jawab`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Telkom Indonesia', 'Jodi Stiawan Spd.IT', 'Telkomindonesia@gmail.com', '08144123421', 'Jakarta, jalan semanggi buah, Blok 01 gedung utama', 'telkom.co.id', 4235435, 'Jodi Setiawan spd.IT', '2021-04-18 19:39:00', '2021-04-18 19:39:00', NULL),
(2, 'Djarum Indonesia', 'Epandi harimau ps.lk', 'djarumindoneisa@djarum.co.id', '08241524521', 'Kediri Jatim, jln kemenyan, blok 043 gedung nomor 2 ', 'djarumindonesia.co.id', 43234324, 'Epandi harimau spd', '2021-04-18 19:39:00', '2021-04-18 19:39:00', NULL),
(3, 'Indihome', 'Danang Junian Widodo RI', 'indihome.co.id', '0894389432', 'surabaya, jln.grudo VI blok 94 depan kertajaya', 'indihome.co.id', 34674536, 'Danang Junian Widodo IR', '2021-04-18 19:45:55', '2021-04-18 19:45:55', NULL),
(4, 'Iphone Corp', 'Rozi argumenten', 'apple@icloud.com', '08392893247', 'US, Amerika Serikat jln Grinbow Alabama blok 928', 'apple.com', 324323432, 'Apple indonesia corp', '2021-04-18 19:55:23', '2021-04-18 19:55:23', NULL),
(5, 'shoppe indonesia ', 'toriq alimanjaya tantan', 'shoppe.co.id', '081767786789', 'Jln.indonesia, suderman kota indah blok kamoun pare infler', 'shoppe.co.id', 342423424, 'toriq alimanjaya tantan', '2021-04-18 20:07:14', '2021-04-18 20:07:14', NULL),
(6, 'Indonesia', 'Stiawan arg', 'indo@gmail.com', '081441234343', 'Jakarta, jalan semanggi buah, Blok 01 gedung utama', 'indo.co.id', 4235435, 'Stiawan', '2021-04-18 19:39:00', '2021-04-18 19:39:00', NULL),
(7, 'esia', 'hari ps.lk', 'eisa@djarum.co.id', '08241552145', 'Kediri Jatim, jln kemenyan, blok 043 gedung nomor 2 ', 'esia.co.id', 43234324, 'harimau spd', '2021-04-18 19:39:00', '2021-04-18 19:39:00', NULL),
(8, 'home', 'Widodo RI', 'home.co.id', '089438943254', 'surabaya, jln.grudo VI blok 94 depan kertajaya', 'home.co.id', 34674536, 'Widodo IR', '2021-04-18 19:45:55', '2021-04-18 19:45:55', NULL),
(9, 'Corp', 'argumenten', 'Corp@icloud.com', '08392843932', 'US, Amerika Serikat jln Grinbow Alabama blok 928', 'Corp.com', 324323432, 'Corp', '2021-04-18 19:55:23', '2021-04-18 19:55:23', NULL),
(10, 'Render', 'Render tantan', 'Render.co.id', '03467786789', 'Jln.indonesia, suderman kota indah blok kamoun pare infler', 'Render.co.id', 342423424, 'tantan', '2021-04-18 20:07:14', '2021-04-18 20:07:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_04_09_154129_create_admins_table', 1),
(3, '2021_04_10_110449_create_levels_table', 1),
(4, '2021_04_15_025121_create_master_jobs_table', 1),
(5, '2021_04_16_020511_create_accounts_table', 1),
(6, '2021_04_16_071946_create_kategoris_table', 1),
(7, '2021_04_16_074719_create_tipe_kerjas_table', 1),
(8, '2021_04_19_021516_create_tags_table', 1),
(9, '2021_04_25_110642_create_kaulifikasis_table', 1),
(10, '2021_04_26_025810_create_gambars_table', 1),
(11, '2021_04_26_025901_create_gajis_table', 1),
(12, '2021_04_26_030837_create_pengalaman_kerjas_table', 1),
(13, '2021_04_26_030853_create_pendidikans_table', 1),
(14, '2021_04_26_041114_add_jobs', 1),
(15, '2021_04_26_045627_pelamars', 1),
(16, '2021_04_26_045755_apply', 1),
(17, '2021_04_27_142553_create_akun_ps_table', 2),
(18, '2021_04_27_142610_create_akun_us_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `pelamar_id` bigint(20) UNSIGNED NOT NULL,
  `lamar_id` bigint(20) UNSIGNED NOT NULL,
  `didik_id` bigint(20) UNSIGNED NOT NULL,
  `namadepan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabelakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`pelamar_id`, `lamar_id`, `didik_id`, `namadepan`, `namabelakang`, `email`, `no_hp`, `alamat`) VALUES
(1, 1, 1, 'danang', 'junian', 'danang@gmail.com', '081331414042', 'lamongan'),
(2, 1, 4, 'agus', 'sioamay', 'sioamay@gmail.com', '081331414045', 'sunan ndrajat indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekeolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_sekeolah`, `kualifikasi_id`, `tahun_mulai`, `tahun_lulus`) VALUES
(1, 'MA AL-ISLAH', 1, 2008, 2011),
(2, 'SMK Ponorogo', 1, 2000, 2004),
(3, 'UIN Malang', 6, 2019, 2020),
(4, 'UI ', 4, 2000, 2004);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id`, `nama_perusahaan`, `nama_pekerjaan`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi_pekerjaan`) VALUES
(1, 'indonesia', 'programmer', '2021-04-27', '2021-04-29', 'mencari bug untuk mengatasi masalah pada software ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
(1, 'financial'),
(2, 'analytic'),
(3, 'budgeting'),
(4, 'accounting'),
(5, 'bubut'),
(6, 'injeksi'),
(7, 'last'),
(8, 'pematrian'),
(9, 'pemotongan'),
(10, 'dokter'),
(11, 'pengasuh'),
(12, 'perawat'),
(13, 'bidan'),
(14, 'apoteker'),
(15, 'pesawat '),
(16, 'bangunan'),
(17, 'pelayan'),
(18, 'koki'),
(19, 'master koki'),
(20, 'perlengkapan'),
(21, 'kasir'),
(22, 'barista'),
(23, 'programmer'),
(24, 'php'),
(25, 'sql'),
(26, 'javascript'),
(27, 'html'),
(28, 'html 5'),
(29, 'css'),
(30, 'code'),
(31, 'coding'),
(32, 'Laravel'),
(33, 'CodeIgniter'),
(34, 'Flutter'),
(35, 'Teknisi'),
(36, 'Software'),
(37, 'UI'),
(38, 'UX'),
(39, 'Adobe'),
(40, 'translation'),
(41, 'grammer'),
(42, 'Matematika'),
(43, 'Psikolog'),
(44, 'Guru'),
(45, 'Bahasa'),
(46, 'Ingglis'),
(47, 'Translate'),
(48, 'Tugas'),
(49, 'Skripsi'),
(50, 'Jawa'),
(51, 'Python'),
(52, 'Wordpress'),
(53, 'Jombla'),
(54, 'Content'),
(55, 'Writer'),
(56, 'Penulis'),
(57, 'Creator'),
(58, 'Video'),
(59, 'Animation'),
(60, 'Photoshop'),
(61, 'Android'),
(62, 'IOS'),
(63, 'Mobile'),
(64, 'Website'),
(65, 'SEO'),
(66, 'Art'),
(67, 'Ecommers'),
(68, 'WEb Development'),
(69, 'Web Design'),
(70, 'Java'),
(71, 'Illustrasion'),
(72, 'Mobil'),
(73, 'Carton'),
(74, 'editing'),
(75, 'Display'),
(76, 'Marketin'),
(77, 'Public'),
(78, 'SEO Content'),
(79, 'SEM '),
(80, 'SMM'),
(81, 'Marketing'),
(82, 'Optimize'),
(83, 'Social Media'),
(84, 'blog'),
(85, 'Seo blog'),
(86, 'Website Design'),
(87, 'Laki Laki'),
(88, 'SMA'),
(89, 'Mengaji'),
(90, 'mengajar anak'),
(91, 'guru sd'),
(92, 'power point'),
(93, 'kontraktor'),
(94, 'marketin'),
(95, 'shipping'),
(96, 'pemotongan'),
(97, 'final cut pro'),
(98, 'Adb premier pro'),
(99, 'data'),
(100, 'data sicence');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kerja`
--

CREATE TABLE `tipe_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_kerja`
--

INSERT INTO `tipe_kerja` (`id`, `tipe_pekerjaan`) VALUES
(1, 'Full-Time'),
(2, 'Part-Time'),
(3, 'Intership'),
(4, 'Freelance');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add_jobs`
--
ALTER TABLE `add_jobs`
  ADD PRIMARY KEY (`jobs_id`),
  ADD KEY `add_jobs_master_id_foreign` (`master_id`),
  ADD KEY `add_jobs_tipekerja_id_foreign` (`tipekerja_id`),
  ADD KEY `add_jobs_kategori_id_foreign` (`kategori_id`),
  ADD KEY `add_jobs_tag_id_foreign` (`tag_id`),
  ADD KEY `add_jobs_gaji_id_foreign` (`gaji_id`);

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admins_email_admin_unique` (`email_admin`);

--
-- Indeks untuk tabel `akun_p`
--
ALTER TABLE `akun_p`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_p_email_perusahaan_unique` (`email_perusahaan`);

--
-- Indeks untuk tabel `akun_u`
--
ALTER TABLE `akun_u`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_u_email_pelamar_unique` (`email_pelamar`);

--
-- Indeks untuk tabel `apply`
--
ALTER TABLE `apply`
  ADD KEY `apply_id_pelamar_foreign` (`id_pelamar`),
  ADD KEY `apply_id_jobs_foreign` (`id_jobs`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_kerja`
--
ALTER TABLE `kategori_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kualifikasi`
--
ALTER TABLE `kualifikasi`
  ADD PRIMARY KEY (`id_kualifikasi`);

--
-- Indeks untuk tabel `master_jobs`
--
ALTER TABLE `master_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`pelamar_id`),
  ADD KEY `pelamar_lamar_id_foreign` (`lamar_id`),
  ADD KEY `pelamar_didik_id_foreign` (`didik_id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikan_kualifikasi_id_foreign` (`kualifikasi_id`);

--
-- Indeks untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_kerja`
--
ALTER TABLE `tipe_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_jobs`
--
ALTER TABLE `add_jobs`
  MODIFY `jobs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3224;

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akun_p`
--
ALTER TABLE `akun_p`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `akun_u`
--
ALTER TABLE `akun_u`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_kerja`
--
ALTER TABLE `kategori_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kualifikasi`
--
ALTER TABLE `kualifikasi`
  MODIFY `id_kualifikasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_jobs`
--
ALTER TABLE `master_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `pelamar_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tipe_kerja`
--
ALTER TABLE `tipe_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `add_jobs`
--
ALTER TABLE `add_jobs`
  ADD CONSTRAINT `add_jobs_gaji_id_foreign` FOREIGN KEY (`gaji_id`) REFERENCES `gaji` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_jobs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_kerja` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_jobs_master_id_foreign` FOREIGN KEY (`master_id`) REFERENCES `master_jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_jobs_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_jobs_tipekerja_id_foreign` FOREIGN KEY (`tipekerja_id`) REFERENCES `tipe_kerja` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_id_jobs_foreign` FOREIGN KEY (`id_jobs`) REFERENCES `add_jobs` (`jobs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `apply_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`pelamar_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD CONSTRAINT `pelamar_didik_id_foreign` FOREIGN KEY (`didik_id`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pelamar_lamar_id_foreign` FOREIGN KEY (`lamar_id`) REFERENCES `pengalaman_kerja` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_kualifikasi_id_foreign` FOREIGN KEY (`kualifikasi_id`) REFERENCES `kualifikasi` (`id_kualifikasi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
