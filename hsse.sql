-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 08:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsse`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `kronologi` text DEFAULT NULL,
  `korban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_acara`
--

INSERT INTO `berita_acara` (`id`, `id_user`, `jenis`, `waktu`, `tempat`, `bukti`, `kronologi`, `korban`) VALUES
(2, 5, 'ringan', '2021-06-24', 'Doloremque ipsum nis', '1623830061_Screenshot_(444).png', 'Laborum Ullamco vel', 6),
(3, 5, 'sedang', '2021-07-09', 'Ex eos ipsam delenit', '1623830200_Screenshot_(501).png', 'Vel omnis rerum enim', 65);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pelanggaran`
--

CREATE TABLE `laporan_pelanggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `kepada` varchar(30) DEFAULT NULL,
  `bagian` varchar(25) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `pelanggaran` varchar(30) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_pelanggaran`
--

INSERT INTO `laporan_pelanggaran` (`id`, `id_user`, `kepada`, `bagian`, `tgl`, `pelanggaran`, `deskripsi`) VALUES
(3, 5, 'mat', 'admin', '2021-07-01', 'Kurang memperhatikan kondisi d', 'Nihil rerum atque do');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_harian`
--

CREATE TABLE `monitoring_harian` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `id_soal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `soal`) VALUES
(1, 'Saat ini saya merasakan demam > 37°C'),
(2, 'Saat ini saya merasakan batuk'),
(3, 'Saat ini saya merasakan pilek'),
(4, 'Saat ini saya mengalami sakit tenggorokan (rasa tidak nyaman di tenggorokan bisa seperti panas, gatal, sulit menelan)'),
(5, 'Saat ini saya merasa kesulitan bernafas / sesak nafas'),
(6, 'aat ini saya merasa menggigil (tubuh gemetaran karena merasakan kedinginan)'),
(7, 'Saat ini saya merasa sakit kepala (rasa sakit, berat atau seperti berputar)'),
(8, 'Saat ini saya merasa lemas ( rasa tidak nyaman di tubuh seperti mudah lelah dan tidak bertenaga)'),
(9, 'Saat ini saya merasa nyeri otot'),
(10, 'Saat ini saya merasa mual atau muntah');

-- --------------------------------------------------------

--
-- Table structure for table `sks`
--

CREATE TABLE `sks` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `email_verified_at`, `password`, `level`, `nama`, `divisi`, `alamat`, `tlp`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin@pdam.com', 'Admin', NULL, '$2y$10$0Wx8.S68IsCddzjkYFYr.O.q7KuPr6hRgD4J6zXINisqp0cxwHM36', 'admin', 'Admin', 'Admin', 'Jl Xyz', '08767676', NULL, '2021-02-12 23:38:20', '2021-02-12 23:38:20'),
(5, 'user@pdam.com', 'Usser', NULL, '$2y$10$0Wx8.S68IsCddzjkYFYr.O.q7KuPr6hRgD4J6zXINisqp0cxwHM36', 'ketua divisi', 'User', 'User', 'Jl xyz', '0867564', NULL, '2021-02-12 23:38:20', '2021-02-12 23:38:20'),
(12, 'pybecyja@mailinator.com', 'pozodyq', NULL, '$2y$10$Hg1QARXIw7gzYGu695TJGeiOgYzZrSVQ/beg98y0Ki1h9iTDJ6OGK', 'admin', 'andre', 'Pegawai', 'Dolor nostrum quidem', '3423536', NULL, '2021-06-15 12:14:36', '2021-06-15 12:14:36'),
(13, 'tibix@pdam.com', 'jedof', NULL, '$2y$10$CaOreIdUZgIJQzLrJsBLWelJmKpIMEjBZImliMe/RPYM77sItXXeS', 'staff', 'yoki', 'Pegawai', 'Fugit id assumenda', '58467', NULL, '2021-06-15 12:15:13', '2021-06-15 12:15:13'),
(14, 'wybafaqoti@pdam.com', 'tahufiwu', NULL, '$2y$10$9GyNxIQ.p7/1kJJv7SxxCufdXpM0Dqy.FtZGxB5zvsIZ5sKGhR/5m', 'staff', 'yusuf', 'Pegawai', 'At ipsum excepturi n', '324234', NULL, '2021-06-15 12:17:48', '2021-06-15 12:17:48'),
(15, 'hiwoxev@mailinator.com', 'femyz', NULL, '$2y$10$XUiH8kMiVzg5zQmfxEuf2u2yi7hKmd/eZ4flXnPpGPOuRpdhHZd0C', 'admin', 'mat', 'Pegawai', 'Dolores id sed quo n', '23446457', NULL, '2021-06-15 12:26:15', '2021-06-15 12:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laporan_pelanggaran`
--
ALTER TABLE `laporan_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_harian`
--
ALTER TABLE `monitoring_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sks`
--
ALTER TABLE `sks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_pelanggaran`
--
ALTER TABLE `laporan_pelanggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
