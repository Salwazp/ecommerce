-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2024 at 05:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_code`, `name`, `created_at`, `updated_at`) VALUES
('bj', 'baju', NULL, NULL),
('ks', 'kaos kaki', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `Fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `Fname`, `Lname`, `gender`, `date_of_birth`, `email`, `phone`, `profile_icon`, `created_at`, `updated_at`) VALUES
(7, 9, NULL, NULL, NULL, NULL, 'salwa28ap@gmail.com', NULL, NULL, '2024-08-25 18:04:06', '2024-08-25 18:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(33, '0001_01_01_000000_create_users_table', 1),
(34, '0001_01_01_000001_create_cache_table', 1),
(35, '0001_01_01_000002_create_jobs_table', 1),
(36, '2024_07_31_060143_create_otps_table', 1),
(37, '2024_07_31_062452_create_customers_table', 1),
(38, '2024_07_31_062605_create_sellers_table', 1),
(39, '2024_08_13_013231_create_carts_table', 1),
(40, '2024_08_13_013312_create_shops_table', 1),
(41, '2024_08_13_013419_create_categories_table', 1),
(42, '2024_08_13_014836_create_products_table', 2),
(43, '2024_08_13_014837_create_product_pictures_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `user_id`, `otp`, `expires_at`, `created_at`, `updated_at`) VALUES
(5, 9, '410288', '2024-08-25 18:14:07', '2024-08-25 18:04:07', '2024-08-25 18:04:07'),
(6, 9, '252664', '2024-08-25 18:16:03', '2024-08-25 18:06:03', '2024-08-25 18:06:03'),
(7, 9, '282353', '2024-08-25 18:33:28', '2024-08-25 18:23:28', '2024-08-25 18:23:28'),
(8, 9, '597128', '2024-08-25 18:33:36', '2024-08-25 18:23:36', '2024-08-25 18:23:36'),
(9, 9, '518608', '2024-08-25 18:36:18', '2024-08-25 18:26:18', '2024-08-25 18:26:18'),
(10, 9, '770599', '2024-08-25 19:06:31', '2024-08-25 18:56:31', '2024-08-25 18:56:31'),
(11, 9, '298188', '2024-08-25 19:13:04', '2024-08-25 19:03:05', '2024-08-25 19:03:05'),
(12, 9, '716929', '2024-08-25 19:24:58', '2024-08-25 19:14:58', '2024-08-25 19:14:58'),
(13, 9, '416908', '2024-08-25 19:27:33', '2024-08-25 19:17:33', '2024-08-25 19:17:33'),
(14, 9, '837877', '2024-08-26 18:20:14', '2024-08-26 18:10:14', '2024-08-26 18:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint UNSIGNED NOT NULL,
  `shop_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int NOT NULL,
  `price` int NOT NULL,
  `stock` int NOT NULL,
  `status` enum('draft','public','deleted') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `shop_id`, `name`, `category_code`, `desc`, `weight`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'baju', 'bj', 'hehe', 12, 1000, 45, 'draft', '2024-09-03 00:58:03', '2024-09-03 00:58:03'),
(2, 1, 'PJ', 'bj', 'MWEWE', 12, 1000, 14, 'draft', '2024-09-03 00:58:50', '2024-09-03 00:58:50'),
(3, 2, 'cincin', 'ks', 'nyaman loh', 12, 300, 5, 'draft', NULL, NULL),
(4, 1, 'bajuuu', 'bj', 'hehe', 11, 13000, 12, 'deleted', '2024-09-10 01:44:31', '2024-09-12 08:29:40'),
(7, 1, 'kucing', 'bj', 'kucinggg', 12, 16, 14, 'draft', '2024-09-12 08:42:54', '2024-09-12 08:42:54'),
(8, 1, 'kelinci', 'bj', 'kelincii', 13, 50000, 10, 'draft', '2024-09-12 08:44:10', '2024-09-12 08:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_pictures`
--

CREATE TABLE `product_pictures` (
  `product_picture_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_pictures`
--

INSERT INTO `product_pictures` (`product_picture_id`, `product_id`, `directory`, `created_at`, `updated_at`) VALUES
(1, 1, 'WaShop/products/images/kG790zrWhTpaMOFseu9RFNJVPWWfEhBl4oHbjGwP.jpg', '2024-09-03 00:58:06', '2024-09-03 00:58:06'),
(2, 2, 'WaShop/products/images/PVlg9de43KvRReRsddhf5HLTncyVHK4M7b2yTXm4.jpg', '2024-09-03 00:58:50', '2024-09-03 00:58:50'),
(3, 4, 'WaShop/products/images/mT8L9Y2hw8u80aVlfTCeycOa8SQQhCZNJDY3xBs8.jpg', '2024-09-10 01:44:33', '2024-09-10 01:44:33'),
(4, 7, 'WaShop/products/images/KGhlFNZprbmfHN5QsK26kfJoZAnCivyuTDc5vzuf.jpg', '2024-09-12 08:42:55', '2024-09-12 08:42:55'),
(5, 8, 'WaShop/products/images/PouEhcXaOjM581wBOiUMUsgeZOLcnWg7XVn6Mcru.jpg', '2024-09-12 08:44:10', '2024-09-12 08:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `ktp_nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `status_seller` enum('Verified','Pending','Declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `ktp_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_birth` date NOT NULL,
  `ktp_jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_gol_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_kel_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_agama` enum('Islam','Protestan','Katolik','Buddha','Hindu','Khonghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_status_perkawinan` enum('Belum','Kawin','Cerai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`ktp_nik`, `customer_id`, `status_seller`, `ktp_nama`, `ktp_tempat_lahir`, `ktp_birth`, `ktp_jk`, `ktp_gol_darah`, `ktp_alamat`, `ktp_rt`, `ktp_rw`, `ktp_kel_desa`, `ktp_kecamatan`, `ktp_agama`, `ktp_status_perkawinan`, `ktp_pekerjaan`, `ktp_kewarganegaraan`, `ktp_picture`, `created_at`, `updated_at`) VALUES
('327723057238', 7, 'Pending', 'salwa', 'bandung', '2015-09-15', 'Perempuan', 'O', 'bandung', '04', '31', 'melong', 'cimahi selatan', 'Islam', 'Belum', 'programmer', 'WNI', 'djdas.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1uBtsQwYuiacv7uw0uDVnOewZeNGfAZS36TCDEZ6', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid2xLZWxqNjRLVzBTMnFmdk0xTDhVQ3RFT2xlMmFJbkFQc09CbjhXeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWxsZXIua2Vsb2xhUHJvZHVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTt9', 1726161672),
('AdsflHM8yscFZJaosldjaFZybx3BFz1fgwDGQ4en', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGhFSGhlVzNrUmNvdmRlWkd5SGZtR1JSWTJMTDF3SWpxd1dhV3hGVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWxsZXIua2Vsb2xhUHJvZHVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1726161956),
('Ubt8ScYNR8uoM2KDDtiESquCHgRh2d8zL52qooob', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2xaM0F3MnpSUTV2UUdSRzhXR1gwWDd4Y2psNnQxdEFNTTZ4OGhheiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWxsZXIua2Vsb2xhUHJvZHVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTt9', 1726024714),
('YZbWTPXMKAwOGZ5Js5XyIaa9MzvaVGYlH78soith', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3J2YUpvVU5zaWdwRXd4UVh6dFBxc1JzamhqWUt3UFhLanN3MGpTMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWxsZXIua2Vsb2xhUHJvZHVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTt9', 1726042906);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` bigint UNSIGNED NOT NULL,
  `seller_ktp_nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `seller_ktp_nik`, `name`, `url_domain`, `description`, `shop_icon`, `kota`, `created_at`, `updated_at`) VALUES
(1, '327723057238', 'WaShop', 'WaShop', 'terpecaya', 'akjsfh', 'bandung', NULL, NULL),
(2, '327723057238', 'apa', 'apa', 'apapapa', 'apa/shopIcon/wVL82USkHkAbCkJ6EZKHBprvSuJTNFyYtPzVNyTw.jpg', 'bandung', '2024-09-03 18:19:01', '2024-09-03 18:19:01'),
(4, '327723057238', 'smwa', 'smwa', 'yu beli yu disini murah meriah', 'smwa/shopIcon/ZT9iUJumeoLMdmEUSsi1p8NjUAjH7Fm2ZhrccCJc.jpg', 'bandung', '2024-09-03 18:29:50', '2024-09-03 18:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `userType` enum('C','S','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'C',
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

INSERT INTO `users` (`id`, `userType`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'S', 'salwa28ap@gmail.com', '2024-08-26 02:17:01', '$2y$12$83/Dhxo/Ae5O.UM.EszVke1fK9PMhuTW.T0VLf2F/UsMjsb9xY4CK', NULL, '2024-08-25 18:04:06', '2024-08-25 18:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `otp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `code` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `expired_time` datetime DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id`, `user_id`, `email`, `otp`, `code`, `status`, `expired_time`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '025414', 2, 0, '2024-07-27 14:49:03', '2024-07-27 14:48:03', '2024-07-27 14:48:03'),
(2, 4, 'karambool@gmail.com', '202726', 2, 0, '2024-07-27 14:51:56', '2024-07-27 14:50:56', '2024-07-27 14:50:56'),
(3, 4, 'karambool@gmail.com', '926775', 2, 0, '2024-07-27 14:53:00', '2024-07-27 14:52:00', '2024-07-27 14:52:00'),
(4, 4, 'karambool@gmail.com', '019520', 2, 0, '2024-07-27 14:55:53', '2024-07-27 14:54:53', '2024-07-27 14:54:53'),
(5, 4, 'karambool@gmail.com', '463986', 2, 0, '2024-07-27 14:57:12', '2024-07-27 14:56:12', '2024-07-27 14:56:12'),
(6, 4, 'karambool@gmail.com', '162335', 2, 0, '2024-07-27 14:58:33', '2024-07-27 14:57:33', '2024-07-27 14:57:33'),
(7, 4, 'karambool@gmail.com', '000570', 2, 0, '2024-07-27 15:00:30', '2024-07-27 14:59:30', '2024-07-27 14:59:30'),
(8, 4, 'karambool@gmail.com', '951508', 2, 0, '2024-07-27 15:01:23', '2024-07-27 15:00:23', '2024-07-27 15:00:23'),
(9, 4, 'karambool@gmail.com', '247376', 2, 0, '2024-07-27 15:02:55', '2024-07-27 15:01:55', '2024-07-27 15:01:55'),
(10, 4, 'karambool@gmail.com', '692915', 2, 0, '2024-07-27 15:05:38', '2024-07-27 15:04:38', '2024-07-27 15:04:38'),
(11, 4, 'karambool@gmail.com', '631732', 2, 0, '2024-07-27 15:42:06', '2024-07-27 15:41:06', '2024-07-27 15:41:06'),
(12, 4, 'karambool@gmail.com', '362011', 2, 0, '2024-07-27 15:42:07', '2024-07-27 15:41:07', '2024-07-27 15:41:07'),
(13, 4, 'karambool@gmail.com', '717428', 2, 0, '2024-07-27 15:42:07', '2024-07-27 15:41:07', '2024-07-27 15:41:07'),
(14, 4, 'karambool@gmail.com', '648075', 2, 0, '2024-07-27 15:42:07', '2024-07-27 15:41:07', '2024-07-27 15:41:07'),
(15, 4, 'karambool@gmail.com', '965032', 2, 0, '2024-07-27 15:42:08', '2024-07-27 15:41:08', '2024-07-27 15:41:08'),
(16, 4, 'karambool@gmail.com', '372058', 2, 0, '2024-07-27 15:42:08', '2024-07-27 15:41:08', '2024-07-27 15:41:08'),
(17, 4, 'karambool@gmail.com', '427351', 2, 0, '2024-07-27 15:42:09', '2024-07-27 15:41:09', '2024-07-27 15:41:09'),
(18, 4, 'karambool@gmail.com', '923765', 2, 0, '2024-07-27 15:42:09', '2024-07-27 15:41:09', '2024-07-27 15:41:09'),
(19, 4, 'karambool@gmail.com', '783680', 2, 0, '2024-07-27 15:42:10', '2024-07-27 15:41:10', '2024-07-27 15:41:10'),
(20, 4, 'karambool@gmail.com', '995014', 2, 0, '2024-07-27 15:42:10', '2024-07-27 15:41:10', '2024-07-27 15:41:10'),
(21, 4, 'karambool@gmail.com', '890981', 2, 0, '2024-07-27 15:42:11', '2024-07-27 15:41:11', '2024-07-27 15:41:11'),
(22, 4, 'karambool@gmail.com', '219204', 2, 0, '2024-07-27 15:42:11', '2024-07-27 15:41:11', '2024-07-27 15:41:11'),
(23, 4, 'karambool@gmail.com', '424315', 2, 0, '2024-07-27 15:42:11', '2024-07-27 15:41:11', '2024-07-27 15:41:11'),
(24, 4, 'karambool@gmail.com', '586363', 2, 0, '2024-07-27 15:42:12', '2024-07-27 15:41:12', '2024-07-27 15:41:12'),
(25, 4, 'karambool@gmail.com', '061388', 2, 0, '2024-07-27 15:42:12', '2024-07-27 15:41:12', '2024-07-27 15:41:12'),
(26, 4, 'karambool@gmail.com', '519274', 2, 0, '2024-07-27 15:42:13', '2024-07-27 15:41:13', '2024-07-27 15:41:13'),
(27, 4, 'karambool@gmail.com', '203116', 2, 0, '2024-07-27 15:42:13', '2024-07-27 15:41:13', '2024-07-27 15:41:13'),
(28, 4, 'karambool@gmail.com', '497139', 2, 0, '2024-07-27 15:42:13', '2024-07-27 15:41:13', '2024-07-27 15:41:13'),
(29, 4, 'karambool@gmail.com', '537484', 2, 0, '2024-07-27 15:42:14', '2024-07-27 15:41:14', '2024-07-27 15:41:14'),
(30, 4, 'karambool@gmail.com', '927490', 2, 0, '2024-07-27 15:42:16', '2024-07-27 15:41:16', '2024-07-27 15:41:16'),
(31, 4, 'karambool@gmail.com', '276699', 2, 0, '2024-07-27 15:42:16', '2024-07-27 15:41:16', '2024-07-27 15:41:16'),
(32, 4, 'karambool@gmail.com', '432303', 2, 0, '2024-07-27 15:42:16', '2024-07-27 15:41:16', '2024-07-27 15:41:16'),
(33, 4, 'karambool@gmail.com', '559779', 2, 0, '2024-07-27 15:42:17', '2024-07-27 15:41:17', '2024-07-27 15:41:17'),
(34, 4, 'karambool@gmail.com', '251950', 2, 0, '2024-07-27 15:42:18', '2024-07-27 15:41:18', '2024-07-27 15:41:18'),
(35, 4, 'karambool@gmail.com', '214979', 2, 0, '2024-07-27 15:42:18', '2024-07-27 15:41:18', '2024-07-27 15:41:18'),
(36, 4, 'karambool@gmail.com', '572352', 2, 0, '2024-07-27 15:42:19', '2024-07-27 15:41:19', '2024-07-27 15:41:19'),
(37, 4, 'karambool@gmail.com', '809902', 2, 0, '2024-07-27 15:42:19', '2024-07-27 15:41:19', '2024-07-27 15:41:19'),
(38, 4, 'karambool@gmail.com', '657602', 2, 0, '2024-07-27 15:42:19', '2024-07-27 15:41:19', '2024-07-27 15:41:19'),
(39, 4, 'karambool@gmail.com', '809129', 2, 0, '2024-07-27 15:42:20', '2024-07-27 15:41:20', '2024-07-27 15:41:20'),
(40, 4, 'karambool@gmail.com', '997352', 2, 0, '2024-07-27 15:42:20', '2024-07-27 15:41:20', '2024-07-27 15:41:20'),
(41, 4, 'karambool@gmail.com', '904304', 2, 0, '2024-07-27 15:42:21', '2024-07-27 15:41:21', '2024-07-27 15:41:21'),
(42, 4, 'karambool@gmail.com', '938213', 2, 0, '2024-07-27 15:42:21', '2024-07-27 15:41:21', '2024-07-27 15:41:21'),
(43, 4, 'karambool@gmail.com', '263511', 2, 0, '2024-07-27 15:42:22', '2024-07-27 15:41:22', '2024-07-27 15:41:22'),
(44, 4, 'karambool@gmail.com', '678545', 2, 0, '2024-07-27 15:42:22', '2024-07-27 15:41:22', '2024-07-27 15:41:22'),
(45, 4, 'karambool@gmail.com', '599009', 2, 0, '2024-07-27 15:42:22', '2024-07-27 15:41:22', '2024-07-27 15:41:22'),
(46, 4, 'karambool@gmail.com', '858431', 2, 0, '2024-07-27 15:42:23', '2024-07-27 15:41:23', '2024-07-27 15:41:23'),
(47, 4, 'karambool@gmail.com', '939309', 2, 0, '2024-07-27 15:42:23', '2024-07-27 15:41:23', '2024-07-27 15:41:23'),
(48, 4, 'karambool@gmail.com', '529735', 2, 0, '2024-07-27 15:42:24', '2024-07-27 15:41:24', '2024-07-27 15:41:24'),
(49, 4, 'karambool@gmail.com', '906475', 2, 0, '2024-07-27 15:42:24', '2024-07-27 15:41:24', '2024-07-27 15:41:24'),
(50, 4, 'karambool@gmail.com', '494752', 2, 0, '2024-07-27 15:42:24', '2024-07-27 15:41:24', '2024-07-27 15:41:24'),
(51, 4, 'karambool@gmail.com', '995870', 2, 0, '2024-07-27 15:42:25', '2024-07-27 15:41:25', '2024-07-27 15:41:25'),
(52, 4, 'karambool@gmail.com', '775671', 2, 0, '2024-07-27 15:42:25', '2024-07-27 15:41:25', '2024-07-27 15:41:25'),
(53, 4, 'karambool@gmail.com', '069597', 2, 0, '2024-07-27 15:42:26', '2024-07-27 15:41:26', '2024-07-27 15:41:26'),
(54, 4, 'karambool@gmail.com', '412626', 2, 0, '2024-07-27 15:42:26', '2024-07-27 15:41:26', '2024-07-27 15:41:26'),
(55, 4, 'karambool@gmail.com', '331904', 2, 0, '2024-07-27 15:42:27', '2024-07-27 15:41:27', '2024-07-27 15:41:27'),
(56, 4, 'karambool@gmail.com', '154160', 2, 0, '2024-07-27 15:42:27', '2024-07-27 15:41:27', '2024-07-27 15:41:27'),
(57, 4, 'karambool@gmail.com', '505849', 2, 0, '2024-07-27 15:42:33', '2024-07-27 15:41:33', '2024-07-27 15:41:33'),
(58, 4, 'karambool@gmail.com', '741302', 2, 0, '2024-07-27 15:42:34', '2024-07-27 15:41:34', '2024-07-27 15:41:34'),
(59, 4, 'karambool@gmail.com', '575020', 2, 0, '2024-07-27 15:42:35', '2024-07-27 15:41:35', '2024-07-27 15:41:35'),
(60, 4, 'karambool@gmail.com', '577425', 2, 0, '2024-07-27 15:42:37', '2024-07-27 15:41:37', '2024-07-27 15:41:37'),
(61, 4, 'karambool@gmail.com', '612311', 2, 0, '2024-07-27 15:42:38', '2024-07-27 15:41:38', '2024-07-27 15:41:38'),
(62, 4, 'karambool@gmail.com', '544564', 2, 0, '2024-07-27 15:42:38', '2024-07-27 15:41:38', '2024-07-27 15:41:38'),
(63, 4, 'karambool@gmail.com', '607598', 2, 0, '2024-07-27 15:42:39', '2024-07-27 15:41:39', '2024-07-27 15:41:39'),
(64, 4, 'karambool@gmail.com', '100400', 2, 0, '2024-07-27 15:42:39', '2024-07-27 15:41:39', '2024-07-27 15:41:39'),
(65, 4, 'karambool@gmail.com', '446735', 2, 0, '2024-07-27 15:42:40', '2024-07-27 15:41:40', '2024-07-27 15:41:40'),
(66, 4, 'karambool@gmail.com', '201714', 2, 0, '2024-07-27 15:42:40', '2024-07-27 15:41:40', '2024-07-27 15:41:40'),
(67, 4, 'karambool@gmail.com', '177902', 2, 0, '2024-07-27 15:42:41', '2024-07-27 15:41:41', '2024-07-27 15:41:41'),
(68, 4, 'karambool@gmail.com', '623567', 2, 0, '2024-07-27 15:42:41', '2024-07-27 15:41:41', '2024-07-27 15:41:41'),
(69, 4, 'karambool@gmail.com', '394217', 2, 0, '2024-07-27 15:42:42', '2024-07-27 15:41:42', '2024-07-27 15:41:42'),
(70, 4, 'karambool@gmail.com', '490022', 2, 0, '2024-07-27 15:42:43', '2024-07-27 15:41:43', '2024-07-27 15:41:43'),
(71, 4, 'karambool@gmail.com', '397527', 2, 0, '2024-07-27 15:42:44', '2024-07-27 15:41:44', '2024-07-27 15:41:44'),
(72, 4, 'karambool@gmail.com', '194148', 2, 0, '2024-07-27 15:42:45', '2024-07-27 15:41:45', '2024-07-27 15:41:45'),
(73, 4, 'karambool@gmail.com', '569297', 2, 0, '2024-07-27 15:42:47', '2024-07-27 15:41:47', '2024-07-27 15:41:47'),
(74, 4, 'karambool@gmail.com', '724532', 2, 0, '2024-07-27 15:42:47', '2024-07-27 15:41:47', '2024-07-27 15:41:47'),
(75, 4, 'karambool@gmail.com', '903776', 2, 0, '2024-07-27 15:42:48', '2024-07-27 15:41:48', '2024-07-27 15:41:48'),
(76, 4, 'karambool@gmail.com', '505630', 2, 0, '2024-07-27 15:42:48', '2024-07-27 15:41:48', '2024-07-27 15:41:48'),
(77, 4, 'karambool@gmail.com', '457925', 2, 0, '2024-07-27 15:43:20', '2024-07-27 15:42:20', '2024-07-27 15:42:20'),
(78, 4, 'karambool@gmail.com', '727884', 2, 0, '2024-07-27 15:44:24', '2024-07-27 15:43:24', '2024-07-27 15:43:24'),
(79, 4, 'karambool@gmail.com', '784055', 2, 0, '2024-07-27 15:46:34', '2024-07-27 15:45:34', '2024-07-27 15:45:34'),
(80, 4, 'karambool@gmail.com', '428923', 2, 0, '2024-07-27 15:46:50', '2024-07-27 15:45:50', '2024-07-27 15:45:50'),
(81, 4, 'karambool@gmail.com', '503672', 2, 0, '2024-07-27 15:47:58', '2024-07-27 15:46:58', '2024-07-27 15:46:58'),
(82, 4, 'karambool@gmail.com', '073266', 2, 0, '2024-07-27 15:51:49', '2024-07-27 15:50:49', '2024-07-27 15:50:49'),
(83, 4, 'karambool@gmail.com', '847494', 2, 0, '2024-07-27 15:53:55', '2024-07-27 15:52:55', '2024-07-27 15:52:55'),
(84, 4, 'karambool@gmail.com', '704031', 2, 0, '2024-07-27 15:54:41', '2024-07-27 15:53:41', '2024-07-27 15:53:41'),
(85, 4, 'karambool@gmail.com', '932711', 2, 0, '2024-07-27 15:55:56', '2024-07-27 15:54:56', '2024-07-27 15:54:56'),
(86, 4, 'karambool@gmail.com', '242484', 2, 0, '2024-07-27 16:23:50', '2024-07-27 16:22:50', '2024-07-27 16:22:50'),
(87, 4, 'karambool@gmail.com', '591529', 2, 0, '2024-07-27 16:24:35', '2024-07-27 16:23:35', '2024-07-27 16:23:35'),
(88, 4, 'karambool@gmail.com', '851765', 2, 0, '2024-07-27 16:25:00', '2024-07-27 16:24:00', '2024-07-27 16:24:00'),
(89, 4, 'karambool@gmail.com', '126140', 2, 0, '2024-07-27 16:25:12', '2024-07-27 16:24:12', '2024-07-27 16:24:12'),
(90, 4, 'karambool@gmail.com', '612818', 2, 0, '2024-07-27 17:09:04', '2024-07-27 17:08:04', '2024-07-27 17:08:04'),
(91, 4, 'karambool@gmail.com', '370548', 2, 0, '2024-07-28 01:35:54', '2024-07-28 01:34:54', '2024-07-28 01:34:54'),
(92, 4, 'karambool@gmail.com', '392618', 2, 0, '2024-07-28 01:41:13', '2024-07-28 01:40:13', '2024-07-28 01:40:13'),
(93, 4, 'karambool@gmail.com', '643262', 2, 0, '2024-07-28 01:42:32', '2024-07-28 01:41:32', '2024-07-28 01:41:32'),
(94, 4, 'karambool@gmail.com', '051433', 2, 0, '2024-07-28 01:43:43', '2024-07-28 01:42:43', '2024-07-28 01:42:43'),
(95, 4, 'karambool@gmail.com', '728086', 2, 0, '2024-07-28 01:47:31', '2024-07-28 01:46:31', '2024-07-28 01:46:31'),
(96, 4, 'karambool@gmail.com', '528118', 2, 0, '2024-07-28 01:48:41', '2024-07-28 01:47:41', '2024-07-28 01:47:41'),
(97, 4, 'karambool@gmail.com', '255719', 2, 0, '2024-07-28 01:48:51', '2024-07-28 01:47:51', '2024-07-28 01:47:51'),
(98, 4, 'karambool@gmail.com', '041529', 2, 0, '2024-07-28 01:54:35', '2024-07-28 01:53:35', '2024-07-28 01:53:35'),
(99, 4, 'karambool@gmail.com', '851083', 2, 0, '2024-07-28 02:04:43', '2024-07-28 02:03:43', '2024-07-28 02:03:43'),
(100, 4, 'karambool@gmail.com', '238447', 2, 0, '2024-07-28 02:10:32', '2024-07-28 02:09:32', '2024-07-28 02:09:32'),
(101, 4, 'karambool@gmail.com', '373222', 2, 0, '2024-07-28 02:18:17', '2024-07-28 02:17:17', '2024-07-28 02:17:17'),
(102, 4, 'karambool@gmail.com', '204227', 2, 0, '2024-07-28 02:22:46', '2024-07-28 02:21:46', '2024-07-28 02:21:46'),
(103, 4, 'karambool@gmail.com', '205562', 2, 0, '2024-07-28 02:28:07', '2024-07-28 02:27:07', '2024-07-28 02:27:07'),
(104, 4, 'karambool@gmail.com', '282170', 2, 0, '2024-07-28 02:33:34', '2024-07-28 02:32:34', '2024-07-28 02:32:34'),
(105, 4, 'karambool@gmail.com', '422305', 2, 0, '2024-07-28 02:45:37', '2024-07-28 02:44:37', '2024-07-28 02:44:37'),
(106, 4, 'karambool@gmail.com', '609084', 2, 0, '2024-07-28 02:46:56', '2024-07-28 02:45:56', '2024-07-28 02:45:56'),
(107, 4, 'karambool@gmail.com', '184087', 2, 0, '2024-07-28 02:48:25', '2024-07-28 02:47:25', '2024-07-28 02:47:25'),
(108, 3, 'customer@gmail.com', '696455', 2, 0, '2024-07-28 06:48:38', '2024-07-28 06:47:38', '2024-07-28 06:47:38'),
(109, 4, 'karambool@gmail.com', '049667', 2, 0, '2024-07-28 11:18:42', '2024-07-28 11:17:42', '2024-07-28 11:17:42'),
(110, 4, 'karambool@gmail.com', '931878', 2, 0, '2024-07-28 11:24:16', '2024-07-28 11:23:16', '2024-07-28 11:23:16'),
(111, 4, 'karambool@gmail.com', '331203', 2, 0, '2024-07-28 11:36:20', '2024-07-28 11:35:20', '2024-07-28 11:35:20'),
(112, 4, 'karambool@gmail.com', '879923', 2, 0, '2024-07-28 11:42:04', '2024-07-28 11:41:04', '2024-07-28 11:41:04'),
(113, 4, 'karambool@gmail.com', '624105', 2, 0, '2024-07-28 11:43:31', '2024-07-28 11:42:31', '2024-07-28 11:42:31'),
(114, 4, 'karambool@gmail.com', '104079', 2, 0, '2024-07-28 14:18:55', '2024-07-28 14:17:55', '2024-07-28 14:17:55'),
(115, 4, 'karambool@gmail.com', '077880', 2, 0, '2024-07-28 14:19:55', '2024-07-28 14:18:55', '2024-07-28 14:18:55'),
(116, 4, 'karambool@gmail.com', '044085', 2, 0, '2024-07-28 14:21:54', '2024-07-28 14:20:54', '2024-07-28 14:20:54'),
(117, 4, 'karambool@gmail.com', '804951', 2, 0, '2024-07-28 14:27:36', '2024-07-28 14:26:36', '2024-07-28 14:26:36'),
(118, 4, 'karambool@gmail.com', '519824', 2, 0, '2024-07-28 14:30:32', '2024-07-28 14:29:33', '2024-07-28 14:29:33'),
(119, 4, 'karambool@gmail.com', '490887', 2, 0, '2024-07-28 14:31:28', '2024-07-28 14:30:28', '2024-07-28 14:30:28'),
(120, 4, 'karambool@gmail.com', '303703', 2, 0, '2024-07-28 14:34:23', '2024-07-28 14:33:23', '2024-07-28 14:33:23'),
(121, 4, 'karambool@gmail.com', '217803', 2, 0, '2024-07-28 15:06:41', '2024-07-28 15:05:41', '2024-07-28 15:05:41'),
(122, 4, 'karambool@gmail.com', '487942', 2, 0, '2024-07-28 15:08:01', '2024-07-28 15:07:01', '2024-07-28 15:07:01'),
(123, 4, 'karambool@gmail.com', '772543', 2, 0, '2024-07-28 15:31:39', '2024-07-28 15:30:39', '2024-07-28 15:30:39'),
(124, 4, 'karambool@gmail.com', '461502', 2, 0, '2024-07-28 15:32:44', '2024-07-28 15:31:44', '2024-07-28 15:31:44'),
(125, 4, 'karambool@gmail.com', '179972', 2, 0, '2024-07-28 15:37:13', '2024-07-28 15:36:13', '2024-07-28 15:36:13'),
(126, 4, 'karambool@gmail.com', '576292', 2, 0, '2024-07-28 16:26:39', '2024-07-28 16:25:39', '2024-07-28 16:25:39'),
(127, 4, 'karambool@gmail.com', '211485', 2, 0, '2024-07-28 16:32:51', '2024-07-28 16:31:51', '2024-07-28 16:31:51'),
(128, 5, 'khansanabilah56@gmail.com', '278568', 2, 0, '2024-07-29 01:22:31', '2024-07-29 01:21:31', '2024-07-29 01:21:31'),
(129, 5, 'khansanabilah56@gmail.com', '537917', 2, 0, '2024-07-29 01:42:30', '2024-07-29 01:41:30', '2024-07-29 01:41:30'),
(130, 5, 'khansanabilah56@gmail.com', '253506', 2, 0, '2024-07-29 01:58:52', '2024-07-29 01:57:52', '2024-07-29 01:57:52'),
(131, 5, 'khansanabilah56@gmail.com', '230148', 2, 0, '2024-07-29 02:15:59', '2024-07-29 02:14:59', '2024-07-29 02:14:59'),
(132, 6, 'wulandarinurw@gmail.com', '467058', 2, 0, '2024-07-29 02:38:51', '2024-07-29 02:37:51', '2024-07-29 02:37:51'),
(133, 4, 'karambool@gmail.com', '345763', 2, 0, '2024-07-29 19:33:04', '2024-07-29 19:32:04', '2024-07-29 19:32:04'),
(134, 6, 'wulandarinurw@gmail.com', '671028', 2, 0, '2024-07-30 07:33:51', '2024-07-30 07:32:51', '2024-07-30 07:32:51'),
(135, 6, 'wulandarinurw@gmail.com', '779607', 2, 0, '2024-07-30 07:36:46', '2024-07-30 07:35:46', '2024-07-30 07:35:46'),
(136, 5, 'khansanabilah56@gmail.com', '974439', 2, 0, '2024-07-30 07:59:52', '2024-07-30 07:58:52', '2024-07-30 07:58:52'),
(137, NULL, 'wuladarinw12@gmail.com', '220398', 1, 0, '2024-07-30 14:04:39', '2024-07-30 14:03:39', '2024-07-30 14:03:39'),
(138, NULL, 'wuladarinw12@gmail.com', '684151', 1, 0, '2024-07-30 14:14:51', '2024-07-30 14:13:51', '2024-07-30 14:13:51'),
(139, NULL, 'wuladarinw12@gmail.com', '547868', 1, 0, '2024-07-30 14:31:08', '2024-07-30 14:30:08', '2024-07-30 14:30:08'),
(140, NULL, 'wuladarinw12@gmail.com', '884764', 1, 0, '2024-07-30 14:31:23', '2024-07-30 14:30:23', '2024-07-30 14:30:23'),
(141, NULL, 'wuladarinw12@gmail.com', '830271', 1, 0, '2024-07-30 14:33:42', '2024-07-30 14:32:42', '2024-07-30 14:32:42'),
(142, NULL, 'wuladarinw12@gmail.com', '184418', 1, 0, '2024-07-30 14:36:22', '2024-07-30 14:35:22', '2024-07-30 14:35:22'),
(143, NULL, 'wuladarinw12@gmail.com', '973210', 1, 0, '2024-07-30 14:38:19', '2024-07-30 14:37:19', '2024-07-30 14:37:19'),
(144, NULL, 'wuladarinw12@gmail.com', '813206', 1, 0, '2024-07-30 14:40:11', '2024-07-30 14:39:11', '2024-07-30 14:39:11'),
(145, NULL, 'wuladarinw12@gmail.com', '355480', 1, 0, '2024-07-30 14:41:30', '2024-07-30 14:40:31', '2024-07-30 14:40:31'),
(146, NULL, 'wuladarinw12@gmail.com', '251247', 1, 0, '2024-07-30 14:42:10', '2024-07-30 14:41:10', '2024-07-30 14:41:10'),
(147, NULL, 'wuladarinw12@gmail.com', '326458', 1, 0, '2024-07-30 14:57:14', '2024-07-30 14:56:14', '2024-07-30 14:56:14'),
(148, NULL, 'wuladarinw12@gmail.com', '881657', 1, 0, '2024-07-30 15:01:16', '2024-07-30 15:00:16', '2024-07-30 15:00:16'),
(149, NULL, 'wuladarinw12@gmail.com', '109818', 1, 0, '2024-07-30 15:11:35', '2024-07-30 15:10:35', '2024-07-30 15:10:35'),
(150, NULL, 'wuladarinw12@gmail.com', '189742', 1, 0, '2024-07-30 15:17:51', '2024-07-30 15:16:51', '2024-07-30 15:16:51'),
(151, NULL, 'wuladarinw12@gmail.com', '213354', 1, 0, '2024-07-30 15:20:00', '2024-07-30 15:19:00', '2024-07-30 15:19:00'),
(152, NULL, 'wuladarinw12@gmail.com', '499085', 1, 0, '2024-07-30 15:29:04', '2024-07-30 15:28:04', '2024-07-30 15:28:04'),
(153, NULL, 'wuladarinw12@gmail.com', '316298', 1, 0, '2024-07-30 15:36:10', '2024-07-30 15:35:10', '2024-07-30 15:35:10'),
(154, NULL, 'wuladarinw12@gmail.com', '662377', 1, 0, '2024-07-30 15:45:39', '2024-07-30 15:44:39', '2024-07-30 15:44:39'),
(155, NULL, 'wuladarinw12@gmail.com', '140511', 1, 0, '2024-07-31 07:41:04', '2024-07-31 07:40:04', '2024-07-31 07:40:04'),
(156, NULL, 'wuladarinw12@gmail.com', '418722', 1, 0, '2024-07-31 08:04:20', '2024-07-31 08:03:20', '2024-07-31 08:03:20'),
(157, NULL, 'wuladarinw12@gmail.com', '858009', 1, 0, '2024-07-31 08:06:39', '2024-07-31 08:05:39', '2024-07-31 08:05:39'),
(158, 5, 'khansanabilah56@gmail.com', '278068', 2, 0, '2024-07-31 08:11:18', '2024-07-31 08:10:18', '2024-07-31 08:10:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otps_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_code_foreign` (`category_code`),
  ADD KEY `products_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `product_pictures`
--
ALTER TABLE `product_pictures`
  ADD PRIMARY KEY (`product_picture_id`),
  ADD KEY `product_pictures_product_id_foreign` (`product_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`ktp_nik`),
  ADD KEY `sellers_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shops_name_unique` (`name`),
  ADD UNIQUE KEY `shops_url_domain_unique` (`url_domain`),
  ADD KEY `shops_seller_ktp_nik_foreign` (`seller_ktp_nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_pictures`
--
ALTER TABLE `product_pictures`
  MODIFY `product_picture_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `otps`
--
ALTER TABLE `otps`
  ADD CONSTRAINT `otps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_code_foreign` FOREIGN KEY (`category_code`) REFERENCES `categories` (`category_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`);

--
-- Constraints for table `product_pictures`
--
ALTER TABLE `product_pictures`
  ADD CONSTRAINT `product_pictures_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_seller_ktp_nik_foreign` FOREIGN KEY (`seller_ktp_nik`) REFERENCES `sellers` (`ktp_nik`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
