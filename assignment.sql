-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 11:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_days` smallint NOT NULL,
  `total_present` smallint NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `teacher_id`, `student_id`, `month`, `year`, `month_year`, `total_days`, `total_present`, `comments`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '05', '2023', '2023-05', 24, 12, 'Bad conduct', '2023-06-09 10:26:43', '2023-06-09 10:26:43'),
(3, 1, 4, '05', '2023', '2023-05', 24, 15, 'Average conduct', '2023-06-09 10:28:27', '2023-06-09 10:28:27'),
(4, 1, 5, '05', '2023', '2023-05', 24, 12, NULL, '2023-06-09 10:28:42', '2023-06-09 10:28:42'),
(5, 1, 2, '05', '2023', '2023-05', 24, 16, NULL, '2023-06-09 10:37:04', '2023-06-09 10:51:01'),
(6, 1, 2, '04', '2023', '2023-04', 22, 15, NULL, '2023-06-09 10:51:47', '2023-06-09 10:51:47'),
(7, 1, 3, '04', '2023', '2023-04', 22, 12, NULL, '2023-06-09 10:52:00', '2023-06-09 10:52:00');

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
-- Table structure for table `map_classes`
--

CREATE TABLE `map_classes` (
  `id` bigint UNSIGNED NOT NULL,
  `class_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_classes`
--

INSERT INTO `map_classes` (`id`, `class_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-06-08 07:36:35', '2023-06-08 07:36:35'),
(2, 11, 3, '2023-06-08 09:05:48', '2023-06-08 09:05:48'),
(3, 2, 4, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(4, 4, 5, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(5, 4, 6, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(6, 8, 7, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(7, 4, 8, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(8, 6, 9, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(9, 6, 10, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(10, 10, 11, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(11, 6, 12, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(12, 7, 13, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(13, 3, 14, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(14, 12, 15, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(15, 1, 16, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(16, 7, 17, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(17, 8, 18, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(18, 7, 19, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(19, 1, 20, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(20, 10, 21, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(21, 1, 22, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(22, 9, 23, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(23, 12, 24, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(24, 1, 25, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(25, 7, 26, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(26, 14, 27, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(27, 15, 28, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(28, 11, 29, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(29, 13, 30, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(30, 4, 31, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(31, 9, 32, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(32, 3, 33, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(33, 1, 34, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(34, 13, 35, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(35, 2, 36, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(36, 7, 37, '2023-06-08 09:06:57', '2023-06-08 09:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `map_schools`
--

CREATE TABLE `map_schools` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_schools`
--

INSERT INTO `map_schools` (`id`, `school_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-06-08 07:35:48', '2023-06-08 07:35:48'),
(2, 1, 2, '2023-06-08 07:36:35', '2023-06-08 07:36:35'),
(3, 1, 3, '2023-06-08 09:05:48', '2023-06-08 09:05:48'),
(4, 1, 4, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(5, 1, 5, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(6, 1, 6, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(7, 1, 7, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(8, 1, 8, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(9, 1, 9, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(10, 1, 10, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(11, 1, 11, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(12, 1, 12, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(13, 1, 13, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(14, 1, 14, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(15, 1, 15, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(16, 1, 16, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(17, 1, 17, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(18, 1, 18, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(19, 1, 19, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(20, 1, 20, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(21, 1, 21, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(22, 1, 22, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(23, 1, 23, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(24, 1, 24, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(25, 1, 25, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(26, 1, 26, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(27, 1, 27, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(28, 1, 28, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(29, 1, 29, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(30, 1, 30, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(31, 1, 31, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(32, 1, 32, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(33, 1, 33, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(34, 1, 34, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(35, 1, 35, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(36, 1, 36, '2023-06-08 09:06:57', '2023-06-08 09:06:57'),
(37, 1, 37, '2023-06-08 09:06:57', '2023-06-08 09:06:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2023_06_07_202525_create_sessions_table', 1),
(10, '2023_06_07_203439_create_permission_tables', 1),
(11, '2023_06_07_203623_add_phone_to_users', 1),
(12, '2023_06_08_073112_create_type_masters_table', 1),
(13, '2023_06_08_074112_add_gender_to_users', 1),
(14, '2023_06_08_100435_create_schools_table', 1),
(15, '2023_06_08_100748_create_map_schools_table', 1),
(16, '2023_06_08_103915_create_school_classes_table', 1),
(17, '2023_06_08_122512_create_map_classes_table', 1),
(18, '2023_06_08_145115_create_remarks_table', 2),
(23, '2023_06_09_132732_create_student_results_table', 3),
(24, '2023_06_09_154848_create_attendances_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 28),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 33),
(2, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 35),
(2, 'App\\Models\\User', 36),
(2, 'App\\Models\\User', 37);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Teacher dashboard', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(2, 'All student attendance', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(3, 'All student remarks', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(4, 'Student dashboard', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(5, 'Student attendance', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(6, 'Student remarks', 'web', '2023-06-08 07:22:25', '2023-06-08 07:22:25'),
(7, 'All student result', 'web', '2023-06-08 20:18:14', '2023-06-08 20:18:14'),
(8, 'Student result', 'web', '2023-06-08 20:18:14', '2023-06-08 20:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `student_feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `student_id`, `teacher_id`, `student_feedback`, `teacher_remarks`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'This is a test feedback', NULL, '2023-06-08 13:43:28', '2023-06-08 20:49:52'),
(3, 2, 1, 'Quidem rerum veniam facere suscipit recusandae velit.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(4, 2, 1, 'Inventore enim perferendis voluptatibus vero.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(5, 2, 1, 'Repellat repellat itaque ut qui neque.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(6, 2, 1, 'Omnis voluptatem quis nam repellendus exercitationem quia.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(7, 2, 1, 'Voluptatem earum omnis ullam ullam.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(8, 2, 1, 'Nam ut et temporibus molestiae et enim.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(9, 2, 1, 'Ut est maxime voluptas perferendis fugiat ea tempore dicta.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(10, 2, 1, 'Est tenetur eveniet consequatur.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(11, 2, 1, 'Voluptas alias placeat saepe quas distinctio dolorum.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(12, 2, 1, 'Vel iure maxime vel a et a.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(13, 2, 1, 'Nesciunt sapiente nisi laudantium quidem culpa dolores aut.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(14, 2, 1, 'Est laudantium possimus et impedit.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(15, 2, 1, 'Harum corporis doloribus velit commodi ut dolorem.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(16, 2, 1, 'Soluta quos corporis ut amet dolores esse ipsa atque.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06'),
(17, 2, 1, 'Dolore nisi tenetur soluta non.', NULL, '2023-06-08 19:44:06', '2023-06-08 19:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'teacher', 'web', '2023-06-08 07:20:38', '2023-06-08 07:20:38'),
(2, 'student', 'web', '2023-06-08 07:20:38', '2023-06-08 07:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(7, 1),
(4, 2),
(5, 2),
(6, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Eryn Daniel School', '644 Kreiger Branch\nSchinnerview, VT 43198', '585.910.5514', 'susie53@example.net', '2023-06-08 07:21:02', '2023-06-08 07:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

CREATE TABLE `school_classes` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED NOT NULL,
  `school_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_classes`
--

INSERT INTO `school_classes` (`id`, `school_id`, `school_class`, `class_section`, `class_floor`, `created_at`, `updated_at`) VALUES
(1, 1, 'Class - I', 'A', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(2, 1, 'Class - I', 'B', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(3, 1, 'Class - I', 'C', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(4, 1, 'Class - II', 'A', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(5, 1, 'Class - II', 'B', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(6, 1, 'Class - II', 'C', '1st Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(7, 1, 'Class - III', 'A', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(8, 1, 'Class - III', 'B', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(9, 1, 'Class - III', 'C', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(10, 1, 'Class - IV', 'A', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(11, 1, 'Class - IV', 'B', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(12, 1, 'Class - IV', 'C', '2nd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(13, 1, 'Class - V', 'A', '3rd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(14, 1, 'Class - V', 'B', '3rd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34'),
(15, 1, 'Class - V', 'C', '3rd Floor', '2023-06-08 07:23:34', '2023-06-08 07:23:34');

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
('giFcwdrLOnCxO80sRAjrl8lepkFl7GFci0mWCEvj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNUNMZUZweGp6d2JaV0NRSktnblIwcmlLemphcGNGQnZYOTFqdnNseCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR0c0p6cWRkZzNudkMxOWdPT2tZa211VXBRNk8xSE4yRDRHRDVmcS5FM0RBYVZ2VE84clpOcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZWFjaGVyL2Rhc2hib2FyZD9yZW1hcmtzPTEiO319', 1686309688),
('SqlcZJwpMQ9eRMnfZkLsnwUegpiAfnXnM0hWB2zh', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMkZpeXRPeUphTGoxZ3cyQWtObDJvaVkyRE9yNm5yZ3AxU3BlRnR2USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkS2JpM0lvTFI2LlFJZ25SWFF4VklITy9Vc2gvbk01Qm16U3dDWlRnUjBDR0VNaGhZOUwvalMiO30=', 1686309894);

-- --------------------------------------------------------

--
-- Table structure for table `student_results`
--

CREATE TABLE `student_results` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `maths` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `science` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sst` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test\'s Team', 1, '2023-06-08 07:35:48', '2023-06-08 07:35:48'),
(2, 2, 'Test\'s Team', 1, '2023-06-08 07:36:35', '2023-06-08 07:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_masters`
--

CREATE TABLE `type_masters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_masters`
--

INSERT INTO `type_masters` (`id`, `name`, `parent_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Gender', NULL, 1, '2023-06-08 07:22:54', '2023-06-08 07:22:54'),
(2, 'Male', 1, 1, '2023-06-08 07:22:54', '2023-06-08 07:22:54'),
(3, 'Female', 1, 1, '2023-06-08 07:22:54', '2023-06-08 07:22:54'),
(4, 'Not defined', 1, 1, '2023-06-08 07:22:54', '2023-06-08 07:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `phone_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `gender`) VALUES
(1, 'Test Teacher', 'teacher@test.com', NULL, '9830098301', NULL, '$2y$10$tsJzqddg3nvC19gOOkYkmuUpQ6O1HN2D4GD5fq.E3DAaVvTO8rZNq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 07:35:48', '2023-06-08 07:35:48', 2),
(2, 'Test Student', 'student@test.com', NULL, '9830098302', NULL, '$2y$10$Kbi3IoLR6.QIgnRXQxVIHO/Ush/nM5BmzSwCZTgR0CGEMhhY9L/jS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 07:36:35', '2023-06-08 07:36:35', 2),
(3, 'Nedra Wehner', 'rita.balistreri@example.com', '2023-06-08 08:52:49', '9261837827', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'OMicIRqwN3', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(4, 'Ms. Herminia Ernser I', 'sydni92@example.org', '2023-06-08 08:52:49', '9592959559', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'xbAn7QxosV', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(5, 'Skye Wehner', 'casimir10@example.com', '2023-06-08 08:52:49', '9074561687', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '59scG0mLc4', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(6, 'Austin Zieme', 'alva.little@example.net', '2023-06-08 08:52:49', '9802667176', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'iNfF47VVyE', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(7, 'Dusty Willms', 'oschmitt@example.com', '2023-06-08 08:52:49', '9333292104', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'EnVBUFcGn3', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(8, 'Milan Nienow', 'kshlerin.lera@example.com', '2023-06-08 08:52:49', '9791593643', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'wif5xFcSec', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 2),
(9, 'Shanelle Armstrong', 'rdoyle@example.net', '2023-06-08 08:52:49', '9310078147', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'zTsmWcjnE7', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(10, 'Prof. John Balistreri MD', 'ian.wunsch@example.org', '2023-06-08 08:52:49', '9932366025', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '4r3pPcX0WP', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(11, 'Zack Bruen Sr.', 'hammes.ambrose@example.net', '2023-06-08 08:52:49', '9865083415', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'DiLwm2GZuY', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 4),
(12, 'Prof. Glen Leffler', 'phand@example.org', '2023-06-08 08:52:49', '9397052299', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'mx8iECZM6N', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(13, 'Thaddeus Hahn V', 'iva.borer@example.org', '2023-06-08 08:52:49', '9008381284', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'WIUoSCTZ9Q', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(14, 'Odessa Kuvalis', 'reyes.beier@example.net', '2023-06-08 08:52:49', '9729783586', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'RBpCV5f0Op', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(15, 'Miss Whitney Cummerata Jr.', 'nlynch@example.com', '2023-06-08 08:52:49', '9677321022', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'YnNFVm2FUR', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(16, 'Sasha Spencer DVM', 'chadd.reinger@example.com', '2023-06-08 08:52:49', '9171394673', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'gCks2PI3cH', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 2),
(17, 'Anais Donnelly', 'toney01@example.org', '2023-06-08 08:52:49', '9493225915', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'SfAITZk1v5', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 4),
(18, 'Miss Britney Murphy', 'abbey36@example.net', '2023-06-08 08:52:49', '9622894252', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ACvHS5bEPn', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 4),
(19, 'Haleigh Stehr', 'geoffrey.lemke@example.com', '2023-06-08 08:52:49', '9919981428', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '7RMsryep9n', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 3),
(20, 'Dr. Mateo Jast Jr.', 'ebert.mollie@example.net', '2023-06-08 08:52:49', '9739064833', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'kC65qoXkYO', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(21, 'Armand Erdman', 'aileen.christiansen@example.org', '2023-06-08 08:52:49', '9090702404', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '4DoNQp16uq', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(22, 'Conner Goyette', 'evangeline.aufderhar@example.net', '2023-06-08 08:52:49', '9326169142', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'va8RosP8PIjqUBkyG99ORlVvBlgRWwkQeeC4tL2HgXUUzOVJdUvsmmO2tm4z', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(23, 'Joana Sanford', 'darion10@example.com', '2023-06-08 08:52:49', '9678135014', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'U9B7ETIRiF', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 4),
(24, 'Willie Monahan', 'priscilla82@example.net', '2023-06-08 08:52:49', '9145119678', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'rN65br8872', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(25, 'Prof. Kellen Leannon', 'spinka.luisa@example.org', '2023-06-08 08:52:49', '9307196284', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'eDMqVVJfEx', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(26, 'Pattie Wiegand', 'shanna14@example.org', '2023-06-08 08:52:49', '9371699284', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'KaV0owLIg1', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(27, 'Andre Schumm', 'hand.drake@example.net', '2023-06-08 08:52:49', '9868806494', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ejinW9w0Ko', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(28, 'Leann Champlin', 'sheila.heaney@example.com', '2023-06-08 08:52:49', '9781642214', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '2nGLJ1ZBLY', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(29, 'Dewitt Little', 'proberts@example.net', '2023-06-08 08:52:49', '9593381058', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'a0nUU5YkJU', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 2),
(30, 'Una Terry', 'royal64@example.net', '2023-06-08 08:52:49', '9485416583', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'PdUEp8CYai', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(31, 'Anissa Larkin', 'diamond.lynch@example.net', '2023-06-08 08:52:49', '9679192354', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '3m5qpRl88J', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 08:57:25', 4),
(32, 'Prof. Domenic Keebler IV', 'rohara@example.com', '2023-06-08 08:52:49', '9526251989', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'wJsLaJbAwL', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 4),
(33, 'Giovanni Corwin', 'zlakin@example.com', '2023-06-08 08:52:49', '9182035998', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'Hxebj7SejF', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(34, 'Mr. Jerad Bergnaum MD', 'kyleigh06@example.net', '2023-06-08 08:52:49', '9105379635', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '1B8uh7uhO8', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 3),
(35, 'Ken O\'Kon', 'judson64@example.com', '2023-06-08 08:52:49', '9194915225', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0i3WTPhqsm', NULL, NULL, '2023-06-08 08:52:49', '2023-06-08 09:06:57', 2),
(36, 'Jayda Pagac III', 'leonard92@example.org', '2023-06-08 08:52:49', '9379305751', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '9hrFs0oC6g', NULL, NULL, '2023-06-08 08:52:50', '2023-06-08 09:06:57', 2),
(37, 'Eliane Ziemann', 'bbartoletti@example.com', '2023-06-08 08:52:49', '9689871450', '2023-06-08 08:52:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'Ogh8WvsiKI', NULL, NULL, '2023-06-08 08:52:50', '2023-06-08 09:06:57', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_teacher_id_foreign` (`teacher_id`),
  ADD KEY `attendances_student_id_foreign` (`student_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `map_classes`
--
ALTER TABLE `map_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_classes_class_id_foreign` (`class_id`),
  ADD KEY `map_classes_user_id_foreign` (`user_id`);

--
-- Indexes for table `map_schools`
--
ALTER TABLE `map_schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_schools_school_id_foreign` (`school_id`),
  ADD KEY `map_schools_user_id_foreign` (`user_id`);

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
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `remarks_student_id_foreign` (`student_id`),
  ADD KEY `remarks_teacher_id_foreign` (`teacher_id`);

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
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_classes_school_id_foreign` (`school_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_results`
--
ALTER TABLE `student_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_results_student_id_foreign` (`student_id`),
  ADD KEY `student_results_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `type_masters`
--
ALTER TABLE `type_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_masters_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_gender_foreign` (`gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_classes`
--
ALTER TABLE `map_classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `map_schools`
--
ALTER TABLE `map_schools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_results`
--
ALTER TABLE `student_results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_masters`
--
ALTER TABLE `type_masters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendances_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `map_classes`
--
ALTER TABLE `map_classes`
  ADD CONSTRAINT `map_classes_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `school_classes` (`id`),
  ADD CONSTRAINT `map_classes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `map_schools`
--
ALTER TABLE `map_schools`
  ADD CONSTRAINT `map_schools_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `map_schools_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remarks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `remarks_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD CONSTRAINT `school_classes_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `student_results`
--
ALTER TABLE `student_results`
  ADD CONSTRAINT `student_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `student_results_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `type_masters`
--
ALTER TABLE `type_masters`
  ADD CONSTRAINT `type_masters_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `type_masters` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_gender_foreign` FOREIGN KEY (`gender`) REFERENCES `type_masters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
