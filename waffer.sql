-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 03:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waffer`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'كونسروا', '2024-06-09 10:45:29', '2024-06-12 09:38:50'),
(2, 1, 'مكسرات', '2024-06-10 08:32:54', '2024-06-12 09:39:00'),
(3, 1, 'حلويات', '2024-06-10 08:52:04', '2024-06-12 09:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sfefe', '5345433', 'issa@gmail.com', 'dsfwe', 'svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd svcd ', '2024-06-12 06:04:56', '2024-06-12 06:05:21'),
(3, 'test', '7132649894', 'issa@gmail.com', 'fewfewf', 'يصض', '2024-06-12 08:09:47', '2024-06-12 08:09:47'),
(4, 'test', '7132649894', 'issa@gmail.com', 'fewfewf', 'يصض', '2024-06-12 08:10:48', '2024-06-12 08:10:48'),
(5, 'test', '7132649894', 'issa@gmail.com', 'fewfewf', 'يصض', '2024-06-12 08:11:14', '2024-06-12 08:11:14'),
(6, 'test', '7132649894', 'issa@gmail.com', 'fewfew', 'يصضضصي', '2024-06-12 08:11:35', '2024-06-12 08:11:35'),
(7, 'test', '946649534', 'issatest@gmail.com', 'hty', 'ؤسش', '2024-06-12 08:12:40', '2024-06-12 08:12:40'),
(8, 'test', '7132649894', 'issa@gmail.com', 'fewfew', 'efw', '2024-06-12 08:30:00', '2024-06-12 08:30:00'),
(9, 'test', '7132649894', 'issa@gmail.com', 'fewfew', 'dwq', '2024-06-12 08:30:41', '2024-06-12 08:30:41'),
(10, 'test', '7132649894', 'issa@gmail.com', 'efw', 'csa', '2024-06-12 08:32:15', '2024-06-12 08:32:15'),
(11, 'test', '946649531', 'issa1@gmail.com', 'dwq', 'dqw', '2024-06-12 08:42:48', '2024-06-12 08:42:48'),
(12, 'دراق', '946649532', 'issatest@gmail.com', 'dqwdqw', 'dqwqdw', '2024-06-12 08:43:26', '2024-06-12 08:43:26'),
(13, 'دراق', '946649534', 'issa1@gmail.com', 'hty', 'csasac', '2024-06-12 08:48:50', '2024-06-12 08:48:50'),
(14, 'دxsa', '946649531', 'admin@peaklink.com', 'fewfewf', 'يضصضصي', '2024-06-12 08:50:26', '2024-06-12 08:50:26'),
(15, 'issa', '946649532', 'issatest@gmail.com', 'erggre', 'csasac', '2024-06-12 08:51:25', '2024-06-12 08:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `name`, `image`, `year`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'اسم المعرض', 'images/exhibition/01J00W6T51Z002RX67Y08HHARQ.png', '2023', '[\"images\\/exhibition\\/01J00W6T54NJWM2Q24WJCXH883.jpg\",\"images\\/exhibition\\/01J00W6T55J02QX7YHRSZS0VEX.jpg\",\"images\\/exhibition\\/01J00W6T56DX3VDGP5TBF9AEF5.jpg\"]', 1, '2024-06-10 07:48:22', '2024-06-10 10:48:16'),
(2, 'اسم المعرض 2', 'images/exhibition/01J016N34MF0GHM4VDW1EEECN9.png', '2023', '[\"images\\/exhibition\\/01J016N34QAE68AE9TSCG2N4TE.jpg\",\"images\\/exhibition\\/01J016N34RJBPCJXEFR2ANB5B8.jpg\"]', 1, '2024-06-10 10:50:55', '2024-06-10 10:50:55'),
(3, 'اسم المعرض 3', 'images/exhibition/01J017EJYJWAX18Y8RHZ9MP658.png', '2024', '[\"images\\/exhibition\\/01J017EJYM8SAVTYSMKJDDN3QF.jpg\",\"images\\/exhibition\\/01J017EJYPTN9KRCE49CJBK0G9.jpg\"]', 1, '2024-06-10 11:04:51', '2024-06-10 11:04:51');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_02_132604_create_permission_tables', 1),
(6, '2024_06_09_131104_create_categories_table', 1),
(10, '2024_06_10_080658_create_recipes_table', 3),
(11, '2024_06_09_135130_create_exhibitions_table', 4),
(13, '2024_06_09_131747_create_products_table', 5),
(14, '2024_06_12_085722_create_contact_us_table', 6),
(15, '2024_06_12_114134_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(2, 'view_any_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(3, 'create_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(4, 'update_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(5, 'restore_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(6, 'restore_any_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(7, 'replicate_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(8, 'reorder_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(9, 'delete_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(10, 'delete_any_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(11, 'force_delete_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(12, 'force_delete_any_category', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(13, 'view_contact::us', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(14, 'view_any_contact::us', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(15, 'create_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(16, 'update_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(17, 'restore_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(18, 'restore_any_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(19, 'replicate_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(20, 'reorder_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(21, 'delete_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(22, 'delete_any_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(23, 'force_delete_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(24, 'force_delete_any_contact::us', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(25, 'view_exhibition', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(26, 'view_any_exhibition', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(27, 'create_exhibition', 'web', '2024-06-12 09:25:01', '2024-06-12 09:25:01'),
(28, 'update_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(29, 'restore_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(30, 'restore_any_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(31, 'replicate_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(32, 'reorder_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(33, 'delete_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(34, 'delete_any_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(35, 'force_delete_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(36, 'force_delete_any_exhibition', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(37, 'view_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(38, 'view_any_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(39, 'create_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(40, 'update_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(41, 'restore_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(42, 'restore_any_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(43, 'replicate_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(44, 'reorder_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(45, 'delete_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(46, 'delete_any_product', 'web', '2024-06-12 09:25:02', '2024-06-12 09:25:02'),
(47, 'force_delete_product', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(48, 'force_delete_any_product', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(49, 'view_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(50, 'view_any_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(51, 'create_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(52, 'update_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(53, 'restore_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(54, 'restore_any_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(55, 'replicate_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(56, 'reorder_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(57, 'delete_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(58, 'delete_any_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(59, 'force_delete_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(60, 'force_delete_any_recipe', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(61, 'view_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(62, 'view_any_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(63, 'create_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(64, 'update_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(65, 'delete_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(66, 'delete_any_role', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(67, 'view_user', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(68, 'view_any_user', 'web', '2024-06-12 09:25:03', '2024-06-12 09:25:03'),
(69, 'create_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(70, 'update_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(71, 'restore_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(72, 'restore_any_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(73, 'replicate_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(74, 'reorder_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(75, 'delete_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(76, 'delete_any_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(77, 'force_delete_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(78, 'force_delete_any_user', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(79, 'widget_Filters', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(80, 'widget_StateWidget', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(81, 'widget_UsersChart', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04'),
(82, 'widget_ProductsChart', 'web', '2024-06-12 09:25:04', '2024-06-12 09:25:04');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'اسم المنتج', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010TE34M1B53QB134Z13PHH.png', 1, '2024-06-10 09:08:59', '2024-06-10 09:08:59'),
(2, 1, 'اسم المنتج 2', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010V7TA96ZZ2Y0XWRV5MSN2.png', 1, '2024-06-10 09:09:25', '2024-06-10 09:09:25'),
(3, 2, 'اسم المنتج 1', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010VYDT4VDMS6G8EC07RRN1.png', 1, '2024-06-10 09:09:48', '2024-06-10 09:09:48'),
(4, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:13:40', '2024-06-13 07:13:40'),
(5, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:25:24', '2024-06-13 07:25:24'),
(6, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:25:28', '2024-06-13 07:25:28'),
(7, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:25:32', '2024-06-13 07:25:32'),
(8, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:25:36', '2024-06-13 07:25:36'),
(9, 1, 'اسم المنتج', 'اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار ', 'images/products/01J08HDEWNS05BN1JA84H0A0DD.png', 1, '2024-06-13 07:25:40', '2024-06-13 07:25:40'),
(10, 1, 'اسم المنتج', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010TE34M1B53QB134Z13PHH.png', 1, '2024-06-13 07:25:51', '2024-06-13 07:25:51'),
(11, 1, 'اسم المنتج 2', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010V7TA96ZZ2Y0XWRV5MSN2.png', 1, '2024-06-13 07:25:57', '2024-06-13 07:25:57'),
(12, 1, 'اسم المنتج', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010TE34M1B53QB134Z13PHH.png', 1, '2024-06-13 07:26:04', '2024-06-13 07:26:04'),
(13, 1, 'اسم المنتج 2', 'وصف المنتج وصف المنتج وصف المنتج ', 'images/products/01J010V7TA96ZZ2Y0XWRV5MSN2.png', 1, '2024-06-13 07:26:08', '2024-06-13 07:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `preparation` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`, `video`, `preparation`, `status`, `created_at`, `updated_at`) VALUES
(1, 'اسم الوصفة', 'وصف الوصفة', 'images/recipe/01J08KWBP29NAS966H1C2VPMA1.jpg', 'video/recipe/01J00T3A8YZYAE14PJSQHGDZ1M.mp4', 'طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير ', 1, '2024-06-10 07:11:30', '2024-06-13 07:56:46'),
(2, 'اسم الوصفة 2', 'وصف الوصفة 2', 'images/recipe/01J06969V8AA31376PEEBEE3YM.jpg', 'video/recipe/01J06969VPZXDA7D3T7D5EFQQS.mp4', 'طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير طريقة التحضير ', 1, '2024-06-12 10:11:28', '2024-06-12 10:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2024-06-12 09:25:00', '2024-06-12 09:25:00'),
(2, 'معرض', 'web', '2024-06-12 09:26:49', '2024-06-12 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'issa', 'issa@gmail.com', '$2y$10$l8Z/uxrTMtPSZe6dmVewaeJPM2MVuBxS7ohMXOJEieJIFcTRqpOHW', 'arnY2lc0DSy5FlUrpsosbVFD9ykRBuJwSNBU0BT4HuYSUYXLXu1SVp02LlO9', '2024-06-09 10:32:48', '2024-06-12 09:31:21'),
(2, 'mousa', 'mousa@gmail.com', '$2y$10$p2GjpXdZt9fSu.eCCEeGBe1BWlYbrcEyiEd5mZ/ESerxvkIgy84Ju', NULL, '2024-06-12 09:25:34', '2024-06-12 09:25:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
