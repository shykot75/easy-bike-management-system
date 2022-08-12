-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 05:54 PM
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
-- Database: `laravel_easy_bike`
--

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_06_141552_create_sessions_table', 1),
(7, '2022_06_09_051911_create_new_licenses_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `new_licenses`
--

CREATE TABLE `new_licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `licence_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` bigint(20) NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_approve_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_fiscal_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_renew_fee` int(11) DEFAULT NULL,
  `license_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_fee_discount` int(11) DEFAULT NULL,
  `recommendation_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `license_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_licenses`
--

INSERT INTO `new_licenses` (`id`, `licence_owner_name`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `thana`, `nid`, `mobile_number`, `licence_number`, `plate_number`, `image`, `license_approve_date`, `paid_fiscal_year`, `licence_renew_fee`, `license_type`, `license_fee_discount`, `recommendation_reason`, `status`, `license_mode`, `created_at`, `updated_at`) VALUES
(1, 'মোঃ জয়নাল আবেদিন', 'ছায়দেল হক মিয়া', 'বিলকিছ বেগম', 'মজিদের বাপের বাড়ী, টুমচর, দহশলা-টুমচর, জে এম হাট-লক্ষ্মীপুর সদর।', 'মজিদের বাপের বাড়ী, টুমচর, দহশলা-টুমচর, জে এম হাট-লক্ষ্মীপুর সদর।', 'সদর', 3714400656, '01993824484', '0001', '0001', 'new-licenses/owners/Untitled-1-293x300.png', '2022-06-09', '2022-2023', 5000, '1', NULL, NULL, 1, 'new', '2022-06-09 05:57:08', '2022-07-03 04:27:32'),
(2, 'আবু সুফিয়ান', 'মন্তাজুর রহমান', 'ছালেহা খাতুন', 'সমসেরাবাদ, ওয়ার্ড নং-০৮, পোঃ লক্ষ্মীপুর (৩৭০০), জেলাঃ লক্ষ্মীপুর', 'সমসেরাবাদ, ওয়ার্ড নং-০৮, পোঃ লক্ষ্মীপুর (৩৭০০), জেলাঃ লক্ষ্মীপুর', 'সদর', 1243658245, '01708081942', '0002', '0002', 'new-licenses/owners/licensee_1654497294.jpg', '2022-06-01', '2021-2022', 1000, '2', 500, 'new-licenses/recommendation-reasons/pdf.pdf', 1, 'new', '2022-06-09 06:01:13', '2022-06-09 06:01:13'),
(3, 'আলমাছ', 'মোরশেদ আলম', 'আমেনা বেগম', 'বেড়ির ডাক, চররুহিতা, রসুলগঞ্জ, ওয়ার্ড নং-০৭, সদর-লক্ষ্মীপুর।', 'বেড়ির ডাক, চররুহিতা, রসুলগঞ্জ, ওয়ার্ড নং-০৭, সদর-লক্ষ্মীপুর।', 'সদর', 6897563206, '01777091303', '0003', '0003', 'new-licenses/owners/licensee_1654575683.jpg', '2022-06-01', '2021-2022', 1000, '2', NULL, NULL, 1, 'new', '2022-06-09 06:04:53', '2022-06-09 06:04:53'),
(4, 'কুদ্দুস মোল্লা', 'ছায়দেল হক মিয়া', 'বিলকিছ বেগম', 'মজিদের বাপের বাড়ী, টুমচর, দহশলা-টুমচর, জে এম হাট-লক্ষ্মীপুর সদর।', 'মজিদের বাপের বাড়ী, টুমচর, দহশলা-টুমচর, জে এম হাট-লক্ষ্মীপুর সদর।', 'সদর', 3714400656, '01993824484', '0004', '0004', 'new-licenses/owners/licensee_1654491792.jpg', '2022-06-01', '2021-2022', 2000, '1', 500, NULL, 1, 'new', '2022-06-09 06:15:37', '2022-06-09 06:15:37'),
(9, 'sdfsd', 'sfdf', 'df', 'dsf', 'sfsd', 'ssdf', 7898, '0231154', '0005', '0005', 'new-licenses/owners/Screenshot_112.png', '2022-05-29', '2021-2022', 7000, '2', NULL, NULL, 1, 'new', '2022-06-19 08:01:17', '2022-06-19 08:01:17'),
(10, 'uiyui', 'ghfghj', 'ghjghj', NULL, 'gghj', 'ghj', 65756, '567457', '567', '567', NULL, NULL, '2021-2022', NULL, '1', NULL, NULL, 1, 'new', '2022-06-25 05:11:18', '2022-06-25 05:11:18'),
(11, 'nm,m,', 'hjkhgjk', 'jhkh', NULL, NULL, 'dfx', 231, '123123', '3242', '2344', NULL, NULL, '2021-2022', NULL, '2', NULL, NULL, 1, 'new', '2022-06-25 05:12:59', '2022-06-25 05:12:59'),
(12, 'fgfghdfh', 'gfhdfg', 'dfhgdf', NULL, NULL, 'gfh', 345, '5344', '879', '789', NULL, NULL, '2021-2022', NULL, '1', NULL, NULL, 1, 'new', '2022-06-25 05:13:56', '2022-06-25 05:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shykot1198@gmail.com', '$2y$10$twYqUiEeIC8GbjU3drXDxuGQFaplAUqR3E53Vjf1fNA767/28lHwi', '2022-07-03 01:51:45');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('A4L4VD5rQh0USbyT7pDRMg1g2riv9H8fFW0V6pM9', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVFhaaWVIU1ZtRllidFRvRzhPZGpmY3hSWFczRHRoaTBvcDNxb1F5eSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbC9teS1wcm9qZWN0cy9lYXN5X2Jpa2UvcHVibGljL2FkZC1uZXctbGljZW5zZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkUW5ZOFVpM0FoOWZ6R2N4bDBvT0RYT0dCcUlhM3JEMXlvdW5hSlYvT0QzVm16Y21yenBaVWkiO30=', 1656844658);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'easy bike admin', 'admin@easybike.com', '2022-06-14 06:22:28', '$2y$10$QnY8Ui3Ah9fzGcxl0oODXOGBqIa3rD1younaJV/OD3VmzcmrzpZUi', NULL, NULL, NULL, 'xR0KR6qYTVE89rZd9uc4uJFFm35Pv9XH5gprkcsqCrpL6z1eyeiIk3b1H2vg', NULL, NULL, '2022-06-06 08:31:23', '2022-06-06 08:31:23'),
(2, 'Shykot', 'shykot1198@gmail.com', '2022-06-25 00:21:39', '$2y$10$GB5zNY3g9QZ8Int0yc.bh.xJOYIwkAnXxzI2H5rKqNnYHVaRqGoOK', NULL, NULL, NULL, 'CZXxI8lNuOYAjxwMKFQntX08s0P16sQAW8WEmbnwGFQRmdb7XSJgNIpf3wka', NULL, NULL, '2022-06-25 00:20:58', '2022-06-25 00:24:50'),
(3, 'EasyBike Admin', 'easybike@cusangstha.com', '2022-07-03 01:40:16', '$2y$10$M/czXV5/TTzrk9Osiglb.es019LcCnf9kBKOk5pmLJEh1uUG7pi4W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 01:39:43', '2022-07-03 01:40:16');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_licenses`
--
ALTER TABLE `new_licenses`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `new_licenses`
--
ALTER TABLE `new_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
