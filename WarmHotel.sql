-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2024 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursain`
--

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
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2024_05_09_165457_create_orders_table', 1),
(13, '2024_05_09_165712_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_from` timestamp NULL DEFAULT NULL,
  `date_to` timestamp NULL DEFAULT NULL,
  `adults_count` int(10) UNSIGNED NOT NULL,
  `children_count` int(10) UNSIGNED NOT NULL,
  `room` text NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date_from`, `date_to`, `adults_count`, `children_count`, `room`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-02-04 20:00:00', '2024-04-04 20:00:00', 2, 1, 'Deluxe Room', NULL, '2024-05-10 15:12:49', '2024-05-10 15:12:49'),
(2, '2024-05-04 20:00:00', '2024-08-04 20:00:00', 1, 0, 'Open this select menu', NULL, '2024-05-10 15:43:57', '2024-05-10 15:43:57'),
(3, '2024-05-21 07:23:05', '2024-05-22 07:23:05', 1, 0, 'Deluxe Room', NULL, '2024-05-12 07:23:05', '2024-05-12 07:23:05'),
(4, '2024-05-23 07:33:48', '2024-05-25 07:33:48', 2, 1, 'Deluxe Room', NULL, '2024-05-12 07:33:48', '2024-05-12 07:33:48'),
(5, '2024-05-29 07:37:21', '2024-05-30 07:37:21', 1, 0, 'Deluxe Twin Room', NULL, '2024-05-12 07:37:21', '2024-05-12 07:37:21'),
(6, '2024-05-28 07:39:23', '2024-05-29 07:39:23', 1, 0, 'Deluxe Room', NULL, '2024-05-12 07:39:23', '2024-05-12 07:39:23'),
(7, '2024-05-27 07:48:56', '2024-05-28 07:48:56', 1, 0, 'Deluxe Room', NULL, '2024-05-12 07:48:56', '2024-05-12 07:48:56'),
(8, '2024-05-27 07:49:19', '2024-05-28 07:49:19', 1, 0, 'Deluxe Room', NULL, '2024-05-12 07:49:19', '2024-05-12 07:49:19'),
(9, '2024-05-28 07:50:38', '2024-05-29 07:50:38', 1, 0, 'Deluxe Room', 1, '2024-05-12 07:50:38', '2024-05-12 07:53:00'),
(10, '2024-05-05 08:04:38', '2024-05-10 08:04:38', 1, 0, 'Deluxe Twin Room', 2, '2024-05-12 08:04:38', '2024-05-12 08:04:48'),
(11, '2024-05-01 08:06:15', '2024-05-07 08:06:15', 1, 0, 'Deluxe Room', 3, '2024-05-12 08:06:15', '2024-05-12 08:06:24');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'vah', 'aaa', 'vahe@helix.am', '93902488', '2024-05-12 07:53:00', '2024-05-12 07:53:00'),
(2, 'Vahe', 'AGhayan', 'vahe@helix.am', '93902488', '2024-05-12 08:04:48', '2024-05-12 08:04:48'),
(3, 'qqq', 'aaa', 'vahe@helix.am', '93902488', '2024-05-12 08:06:24', '2024-05-12 08:06:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
