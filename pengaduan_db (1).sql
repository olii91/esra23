-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 01:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakats`
--

CREATE TABLE `masyarakats` (
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masyarakats`
--

INSERT INTO `masyarakats` (`nik`, `nama`, `username`, `telp`, `password`, `created_at`, `updated_at`) VALUES
('243453', 'Ocang', 'cang', '234678', '$2y$10$iSa.i3Kqj5L0RvoBqhqdfer6.UyXxvhGuGjE7QJhD1dOw5Oo3Urd.', '2023-03-08 16:58:50', '2023-03-08 16:58:50'),
('56878799237424', 'Nazriel', 'alir', '121212', '$2y$10$CGOiBzUk1wxVZFyaAQHTb.fx9h1pFamn.MRcN0UDxJ0gRNorEhnvq', '2023-03-07 19:11:58', '2023-03-07 19:11:58'),
('64587548745999', 'Olii', 'olii', '3746824', '$2y$10$/pxa1ag8zCFQ5Ya9e8Emo.TOMcG2Vz.ZgTfcGQ2pZTHMhShICwlcO', '2023-03-09 00:18:13', '2023-03-09 00:21:22'),
('6474031703050001', 'Esra Siregar', 'esra', '6282149897656', '$2y$10$0Akj6NP9OtYIf10t1DCw1efhclZIkLhybvfN6MW5/dSYDaYpAqyK.', '2023-03-07 18:22:08', '2023-03-07 18:22:08'),
('6636', 'Bing Chilling', 'bing', '98789', '$2y$10$sOLnnfek4vDW8OqheefQyOJeco5pR48wBf3mY25qKoD94yxPE1ywq', '2023-03-08 23:15:13', '2023-03-08 23:15:13'),
('8765678', 'asdfasfasf', 'asfasf', '32424234', '$2y$10$jqArmqrY657hgv5Lt.Vt9unzWHYqsSI4/i/B.j19OXAm3T5p0gq8u', '2023-03-08 19:46:28', '2023-03-08 19:46:28'),
('986544567', 'Adrian', 'adri', '73553', '$2y$10$FfhCJkMTIlLDSFjTtHP1p.b4sz9DYXf08bTrMZh2gk03q4W.AauWa', '2023-03-08 17:53:25', '2023-03-08 17:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_03_08_010709_create_masyarakats_table', 1),
(24, '2023_03_08_021732_create_pengaduans_table', 1),
(25, '2023_03_08_070315_create_tanggapans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_masyarakat` bigint(20) UNSIGNED NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `judul_pengaduan` varchar(255) NOT NULL,
  `isi_pengaduan` varchar(255) NOT NULL,
  `foto_pengaduan` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduans`
--

INSERT INTO `pengaduans` (`id`, `nik_masyarakat`, `tgl_pengaduan`, `judul_pengaduan`, `isi_pengaduan`, `foto_pengaduan`, `status`, `created_at`, `updated_at`) VALUES
(7, 6474031703050001, '2023-03-09', 'Ronaldo Siuuu', 'SIUUUUUUUUUUUUUUUU', 'cc0acdf7dc2968346cc8d86dc76b6763cbb8b8dd.jpg', 'selesai', '2023-03-08 22:46:19', '2023-03-08 22:46:59'),
(8, 243453, '2023-03-09', 'kamar yang bagus', 'kamar isi lengkap komplit bagus ;kad aksfod aokf oaskd as okfas kfo', 'download.jpg', 'proses', '2023-03-08 23:14:10', '2023-03-09 00:20:23'),
(9, 243453, '2023-03-09', 'EMPAT 4!!!!!!!!!!!!!', 'Empat Empat Empat Empat Empat Empat Empat Empat Empat Empat Empat Empat Empat Empat', '4.jfif', 'selesai', '2023-03-08 23:14:39', '2023-03-08 23:46:28'),
(10, 6636, '2023-03-09', 'Good Avocado Bing', 'Yes', 'alpukat.jpg', '0', '2023-03-08 23:15:43', '2023-03-08 23:15:43'),
(11, 6474031703050001, '2023-03-09', 'Local Comunity', 'saran logo', 'bruhlogo.jpg', 'selesai', '2023-03-08 23:16:29', '2023-03-09 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanggapans`
--

CREATE TABLE `tanggapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengaduan` bigint(20) UNSIGNED NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `isi_tanggapan` varchar(255) NOT NULL,
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanggapans`
--

INSERT INTO `tanggapans` (`id`, `id_pengaduan`, `tgl_tanggapan`, `isi_tanggapan`, `id_petugas`, `created_at`, `updated_at`) VALUES
(7, 7, '2023-03-09', 'SIUUUUUUUUUUUUUU juga', 1, '2023-03-08 22:46:55', '2023-03-08 22:46:55'),
(8, 9, '2023-03-09', '4 E M P A T', 2, '2023-03-08 23:46:25', '2023-03-08 23:46:25'),
(9, 12, '2023-03-09', 'sljahlshdfadfs', 1, '2023-03-09 00:19:46', '2023-03-09 00:19:46'),
(10, 11, '2023-03-09', 'bruh', 1, '2023-03-09 00:32:28', '2023-03-09 00:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `telp`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '9879438', 'admin', '$2y$10$a5/p53m8uuBt3frZOeavje6YBkZp/ZR0FUR6p.5TmO/DFvHCCvHTm', NULL, '2023-03-07 18:22:43', '2023-03-07 18:22:43'),
(4, 'Staff', 'staff', '32123', 'petugas', '$2y$10$OnkG70hKZYk0GP8MGGygOeQUCtZK5IX8cNjIqh4pYF3xQEsbGw0F.', NULL, '2023-03-08 17:22:22', '2023-03-08 17:22:22'),
(7, 'Petugas', 'petugas', '8976677', 'petugas', '$2y$10$ksbNjK1gU8ZCkNR2fFqTsOhElrkY6atWnjsMrA9uJy4fvCyhP8VuK', NULL, '2023-03-09 00:04:24', '2023-03-09 00:04:24'),
(8, 'Olii', 'olii', '56565', 'petugas', '$2y$10$APPwiTCsbnJf7h5B7F5/A.a4IeU.Jvm/mBINDc.EYiAqyPJV1k9Cu', NULL, '2023-03-09 00:22:23', '2023-03-09 00:22:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masyarakats`
--
ALTER TABLE `masyarakats`
  ADD PRIMARY KEY (`nik`);

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
-- Indexes for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanggapans`
--
ALTER TABLE `tanggapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
