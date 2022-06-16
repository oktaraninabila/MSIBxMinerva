-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minerva`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'General Event', '2022-05-09 01:34:41', '2022-05-23 06:00:15'),
(2, 'Mini Course', '2022-05-09 02:05:22', '2022-05-09 02:20:19'),
(3, 'Corporate Innovation', '2022-05-09 02:20:54', '2022-05-09 02:20:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_06_061120_create_pesertas_table', 1),
(8, '2022_05_09_064613_create_category_table', 2),
(9, '2022_05_09_073405_create_categories_table', 3),
(10, '2022_05_09_073624_create_posts_table', 3);

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
-- Table structure for table `pesertas`
--

CREATE TABLE `pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` bigint(20) NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domisili` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesertas`
--

INSERT INTO `pesertas` (`id`, `post_id`, `nama`, `email`, `notelp`, `instansi`, `domisili`, `created_at`, `updated_at`) VALUES
(1, 11, 'Agus Bayu Pamungkas', 'abay@students.unnes.ac.id', 85159000805, 'Universitas Negeri Semarang', 'Purbalingga', NULL, NULL),
(2, 11, 'Bambang', 'bpamungkas@gmail.com', 85159000815, 'Persija', 'Jakarta', '2022-05-06 02:07:21', '2022-05-06 02:07:21'),
(3, 11, 'Alex Gunawan', 'alexander@gmail.com', 85159000815, 'DPR RI', 'Purwokerto', '2022-05-06 02:10:11', '2022-05-06 02:10:11'),
(6, 11, 'budiman', 'babab@gmail.com', 85159000811, 'BI', 'Semarang', '2022-05-07 09:02:34', '2022-05-07 09:02:34'),
(7, 11, 'alex', 'abay@students.unnes.ac.id', 85159000815, 'UI', 'Purwokerto', '2022-05-23 05:49:09', '2022-05-23 05:49:09'),
(8, 11, 'alex', 'stiampemati@gmail.com', 85159000805, 'UI', 'Semarang', '2022-05-24 22:04:23', '2022-05-24 22:04:23'),
(9, 11, 'budiman', 'adsdasd@gmail.com', 85159000805, 'sadasd', 'Purwokerto', '2022-05-24 22:25:42', '2022-05-24 22:25:42'),
(10, 7, 'alex', 'bayu13.how@gmail.com', 85159000805, 'unnes', 'Purwokerto', '2022-05-24 22:26:17', '2022-05-24 22:26:17'),
(11, 7, 'Aprilia Shalystia Putri Pradana', 'apriliashalystia22@gmail.com', 8517893793736, 'UNDIP', 'Bandung', '2022-06-13 17:48:17', '2022-06-13 17:48:17'),
(12, 7, 'Aprilia Shalystia Putri Pradana', 'abay@students.unnes.ac.id', 8517893793736, 'UNDIP', 'Bandung', '2022-06-13 17:50:20', '2022-06-13 17:50:20'),
(13, 7, 'Aprilia Shalystia Putri Pradana', 'bayu@gmail.com', 8517893793736, 'UNDIP', 'Bandung', '2022-06-13 17:51:44', '2022-06-13 17:51:44'),
(14, 11, 'Aprilia Shalystia Putri Pradana', 'abay@students.unnes.ac.id', 8517893793736, 'UNDIP', 'Bandung', '2022-06-13 17:55:43', '2022-06-13 17:55:43'),
(15, 7, 'Aprilia Shalystia Putri Pradana', 'bayu@gmail.com', 8517893793736, 'UNDIP', 'Bandung', '2022-06-14 03:21:18', '2022-06-14 03:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `price`, `content`, `date`, `month`, `time`, `category_id`, `featured`, `created_at`, `updated_at`) VALUES
(7, 'International Webinar Center of Data Science 2022', '10.000', 'Center of Data Science (CDS) UII mengadakan agenda webinar bertaraf internasional pada 10-11 Desember 2021 lalu dengan tema “Data Science for Human Life”. Kegiatan ini dilaksanakan secara virtual melalui Zoom. Acara webinar internasional ini diisi oleh 4 orang pembicara, 2 dari internal Jurusan Informatika UII dan 2 pembicara eksternal.\r\n\r\nPembicara pertama disampaikan oleh Dr. Ahmad Luthfi dari Universitas Islam Indonesia. Beliau adalah salah satu dosen Jurusan Informatika UII yang baru saja meraih gelar doktor di Delft University of Technology, Belanda. Beliau menyampaikan materi dengan topik “Data Science for Opening Government Data Decision Making”. Pada sesi pembicara kedua, materi disampaikan oleh Dr. Atika Qazi dari Universiti Brunei Darussalam dengan topik “Covid-19 and Applications of Data Analytics”.', '13', 'Juni', '10:00', 1, 'upload/post/1652156929about-1.jpg', '2022-05-09 21:28:49', '2022-05-09 21:28:49'),
(11, 'Event Selanjutnya Masih Coming Soon pada Bulan Juni', '20.000', 'sdadas', '17', 'Juni', '13:00', 3, 'upload/post/16524098231652407324about-2.jpg', '2022-05-12 19:43:43', '2022-05-12 19:43:43');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agus Bayu Pamungkas', 'abay@students.unnes.ac.id', NULL, '$2y$10$Xww.brAIYVHmaLHCkon/6OC98.pn9yxPAQrmYgDki72dL2KRQuIKa', NULL, '2022-05-06 11:10:38', '2022-05-06 11:10:38'),
(2, 'Pamungkas', 'bayu13.how@gmail.com', NULL, '$2y$10$JvfNGWf.uszGCWRLcLIspO4xAXLfKRYE..ouRBDWFT4f3P4hGKUmG', NULL, '2022-05-07 08:57:28', '2022-05-07 08:57:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
