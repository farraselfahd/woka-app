-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 04:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_woka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'nama', 'text', 'Nama', 1, 1, 1, 1, 1, 1, '{}', 3),
(24, 4, 'kategori', 'text', 'Kategori', 1, 1, 1, 1, 1, 1, '{}', 4),
(25, 4, 'workers_id', 'text', 'Workers Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(26, 4, 'harga_pil_1', 'text', 'Harga Pil 1', 1, 1, 1, 1, 1, 1, '{}', 5),
(27, 4, 'harga_pil_2', 'text', 'Harga Pil 2', 0, 1, 1, 1, 1, 1, '{}', 6),
(28, 4, 'harga_pil_3', 'text', 'Harga Pil 3', 0, 1, 1, 1, 1, 1, '{}', 7),
(29, 4, 'pic_1', 'text', 'Pic 1', 1, 1, 1, 1, 1, 1, '{}', 8),
(30, 4, 'pic_2', 'text', 'Pic 2', 0, 1, 1, 1, 1, 1, '{}', 9),
(31, 4, 'pic_3', 'text', 'Pic 3', 0, 1, 1, 1, 1, 1, '{}', 10),
(32, 4, 'vid_4', 'text', 'Vid 4', 1, 1, 1, 1, 1, 1, '{}', 11),
(33, 4, 'ket_pil1', 'text', 'Ket Pil1', 1, 1, 1, 1, 1, 1, '{}', 12),
(34, 4, 'ket_pil2', 'text', 'Ket Pil2', 0, 1, 1, 1, 1, 1, '{}', 13),
(35, 4, 'ket_pil3', 'text', 'Ket Pil3', 0, 1, 1, 1, 1, 1, '{}', 14),
(36, 4, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 15),
(37, 4, 'requirements', 'text', 'Requirements', 1, 1, 1, 1, 1, 1, '{}', 16),
(38, 4, 'nama_pil1', 'text', 'Nama Pil1', 1, 1, 1, 1, 1, 1, '{}', 17),
(39, 4, 'nama_pil2', 'text', 'Nama Pil2', 0, 1, 1, 1, 1, 1, '{}', 18),
(40, 4, 'nama_pil3', 'text', 'Nama Pil3', 0, 1, 1, 1, 1, 1, '{}', 19),
(41, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 20),
(42, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 21),
(43, 4, 'worker_id', 'text', 'Worker Id', 0, 1, 1, 1, 1, 1, '{}', 22);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-05-24 08:11:30', '2021-05-24 08:11:30'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-05-24 08:11:30', '2021-05-24 08:11:30'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-05-24 08:11:30', '2021-05-24 08:11:30'),
(4, 'services', 'services', 'Service', 'Services', 'voyager-hammer', 'App\\Models\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-05-24 08:26:03', '2021-05-24 09:27:46');

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
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(0, 1, 'irest123', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(0, 'uri:api/service/index:get', 6, 1621733087, 'irest123');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-05-24 08:11:32', '2021-05-24 08:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-05-24 08:11:32', '2021-05-24 08:11:32', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2021-05-24 08:11:32', '2021-05-24 08:28:37', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-05-24 08:11:32', '2021-05-24 08:11:32', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-05-24 08:11:32', '2021-05-24 08:11:32', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 6, '2021-05-24 08:11:32', '2021-05-24 08:28:37', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-05-24 08:11:32', '2021-05-24 08:28:28', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-05-24 08:11:32', '2021-05-24 08:28:28', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-05-24 08:11:33', '2021-05-24 08:28:28', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-05-24 08:11:33', '2021-05-24 08:28:28', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 7, '2021-05-24 08:11:33', '2021-05-24 08:28:37', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-05-24 08:11:36', '2021-05-24 08:28:28', 'voyager.hooks', NULL),
(12, 1, 'List Jasa', '', '_self', 'voyager-hammer', '#000000', NULL, 4, '2021-05-24 08:26:04', '2021-05-24 09:29:04', 'voyager.services.index', 'null');

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2021_04_26_080610_create_workers_table', 1),
(35, '2021_04_26_081432_create_orders_table', 1),
(36, '2021_04_26_081742_create_services_table', 1),
(37, '2021_04_26_081803_create_customers_table', 1),
(38, '2021_04_26_081832_create_admins_table', 1),
(39, '2021_04_26_091928_add_fk_services_id', 2),
(40, '2021_04_29_201624_add_fk_services_to_orders', 3),
(41, '2021_04_29_202117_add_fk_orders_to_customers', 4),
(42, '2021_04_29_202410_add_fk_workers_to_services', 5),
(43, '2021_05_03_062212_add_type_to_users_table', 6),
(44, '2021_05_03_062838_add_worker_id_to_users_table', 7),
(45, '2021_05_03_063715_delete_password_workers_table', 8),
(46, '2021_05_03_063844_drop_customers_table', 9),
(47, '2021_05_03_065008_drop_harga_add_harga123', 10),
(48, '2021_05_03_065346_add_photos_and_requirements', 11),
(49, '2021_05_03_070143_add_security_question', 12),
(50, '2021_05_03_070605_add_users_id', 13),
(51, '2021_05_03_071148_add_workers_description', 14),
(52, '2021_05_04_090033_add_atribut_to_worker', 15),
(53, '2021_05_05_132530_add_atributes_to_workers', 16),
(54, '2021_05_09_080703_add_update_create', 17),
(55, '2021_05_10_090745_add_nama_pilihan', 18),
(56, '2021_05_12_074248_drop_table_orders', 19),
(57, '2021_05_12_074627_create_table_orders_customers', 20),
(58, '2021_05_12_075412_add_foreign', 21),
(59, '2021_05_15_161646_create_billings_table', 22),
(60, '2021_05_16_072751_add_data_service', 23),
(61, '2016_01_01_000000_add_voyager_user_fields', 24),
(62, '2016_01_01_000000_create_data_types_table', 24),
(63, '2016_05_19_173453_create_menu_table', 24),
(64, '2016_10_21_190000_create_roles_table', 24),
(65, '2016_10_21_190000_create_settings_table', 24),
(66, '2016_11_30_135954_create_permission_table', 24),
(67, '2016_11_30_141208_create_permission_role_table', 24),
(68, '2016_12_26_201236_data_types__add__server_side', 24),
(69, '2017_01_13_000000_add_route_to_menu_items_table', 24),
(70, '2017_01_14_005015_create_translations_table', 24),
(71, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 24),
(72, '2017_03_06_000000_add_controller_to_data_types_table', 24),
(73, '2017_04_21_000000_add_order_to_data_rows_table', 24),
(74, '2017_07_05_210000_add_policyname_to_data_types_table', 24),
(75, '2017_08_05_000000_add_group_to_settings_table', 24),
(76, '2017_11_26_013050_add_user_role_relationship', 24),
(77, '2017_11_26_015000_create_user_roles_table', 24),
(78, '2018_03_11_000000_add_user_settings', 24),
(79, '2018_03_14_000000_add_details_to_data_types_table', 24),
(80, '2018_03_16_000000_make_settings_value_nullable', 24);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('proses','selesai','antri','menunggu','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `worker_id`, `service_id`, `order_number`, `updated_at`, `created_at`, `customer_id`) VALUES
(3, 'menunggu', 1, 1, 'ORD-60A063AF07D10', '2021-05-15 17:13:35', '2021-05-15 17:13:35', 1),
(6, 'menunggu', 1, 1, 'ORD-60A7C49F98785', '2021-05-21 07:33:03', '2021-05-21 07:33:03', 4),
(7, 'menunggu', 1, 1, 'ORD-60A7C4BFD4520', '2021-05-21 07:33:35', '2021-05-21 07:33:35', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(2, 'browse_bread', NULL, '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(3, 'browse_database', NULL, '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(4, 'browse_media', NULL, '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(5, 'browse_compass', NULL, '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(6, 'browse_menus', 'menus', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(7, 'read_menus', 'menus', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(8, 'edit_menus', 'menus', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(9, 'add_menus', 'menus', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(10, 'delete_menus', 'menus', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(11, 'browse_roles', 'roles', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(12, 'read_roles', 'roles', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(13, 'edit_roles', 'roles', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(14, 'add_roles', 'roles', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(15, 'delete_roles', 'roles', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(16, 'browse_users', 'users', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(17, 'read_users', 'users', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(18, 'edit_users', 'users', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(19, 'add_users', 'users', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(20, 'delete_users', 'users', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(21, 'browse_settings', 'settings', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(22, 'read_settings', 'settings', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(23, 'edit_settings', 'settings', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(24, 'add_settings', 'settings', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(25, 'delete_settings', 'settings', '2021-05-24 08:11:34', '2021-05-24 08:11:34'),
(26, 'browse_hooks', NULL, '2021-05-24 08:11:36', '2021-05-24 08:11:36'),
(27, 'browse_services', 'services', '2021-05-24 08:26:03', '2021-05-24 08:26:03'),
(28, 'read_services', 'services', '2021-05-24 08:26:03', '2021-05-24 08:26:03'),
(29, 'edit_services', 'services', '2021-05-24 08:26:03', '2021-05-24 08:26:03'),
(30, 'add_services', 'services', '2021-05-24 08:26:03', '2021-05-24 08:26:03'),
(31, 'delete_services', 'services', '2021-05-24 08:26:03', '2021-05-24 08:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-05-24 08:11:33', '2021-05-24 08:11:33'),
(2, 'user', 'Normal User', '2021-05-24 08:11:33', '2021-05-24 08:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workers_id` bigint(20) UNSIGNED DEFAULT NULL,
  `harga_pil_1` bigint(20) NOT NULL,
  `harga_pil_2` bigint(20) DEFAULT NULL,
  `harga_pil_3` bigint(20) DEFAULT NULL,
  `pic_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vid_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_pil1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_pil2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_pil3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pil1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pil2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pil3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `worker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nama`, `kategori`, `workers_id`, `harga_pil_1`, `harga_pil_2`, `harga_pil_3`, `pic_1`, `pic_2`, `pic_3`, `vid_4`, `ket_pil1`, `ket_pil2`, `ket_pil3`, `description`, `requirements`, `nama_pil1`, `nama_pil2`, `nama_pil3`, `updated_at`, `created_at`, `worker_id`) VALUES
(1, 'Tambal ban truk tambang', 'Jasa Montir', 1, 120000, NULL, NULL, '1(1).png', NULL, NULL, '0016105313_10.jpg', 'Pilihan Hanya satu', NULL, NULL, 'Apa aja yang penting halal', 'Uang, Uang dan Uang', 'Pilihan Hanya satu', NULL, NULL, '2021-05-10 22:00:40', '2021-05-10 21:43:29', 1),
(13, 'Pemasangan wallpaper dinding', 'Jasa Renovasi Rumah', NULL, 100000, NULL, NULL, 'walp.jpg', NULL, NULL, 'walp.mp4', '≤ 3m x 2m', NULL, NULL, 'Pemasangan wallpaper dinding ruangan', 'Wallpaper', 'Kecil', NULL, NULL, '2021-05-16 06:23:21', '2021-05-16 06:23:21', 2),
(14, 'Cuci dan kuras toren air', 'Jasa Perawatan Instalasi Air', NULL, 500000, NULL, NULL, 'toren.jpg', NULL, NULL, 'toren.mp4', 'Kuras toren + filter', NULL, NULL, 'Pemasangan wallpaper dinding ruangan', 'Toren air dan filter telah terpasang', 'Cuci & Kuras', NULL, NULL, '2021-05-16 06:23:21', '2021-05-16 06:23:21', 3),
(15, 'Pemasangan filter air', 'Jasa Perawatan Instalasi Air', NULL, 350000, NULL, NULL, 'filter.jpg', NULL, NULL, 'filter.mp4', '-', NULL, NULL, 'Perawatan Instalasi Air & Pemasangan filter air', 'Filter air', 'Perawatan', NULL, NULL, '2021-05-16 06:23:21', '2021-05-16 06:23:21', 4),
(16, 'Pengecetan dinding', 'Jasa Renovasi Rumah', NULL, 75000, NULL, NULL, 'cat.jpg', NULL, NULL, 'cat.mp4', '≤ 3m x 2m', NULL, NULL, 'Cat dinding ruangan', 'Cat tembok ', 'Kecil', NULL, NULL, '2021-05-16 06:23:21', '2021-05-16 06:23:21', 5),
(17, 'Tebang pohon', 'Jasa kebun', NULL, 55000, NULL, NULL, 'tebang.jpg', NULL, NULL, 'tebang.mp4', 'Pohon kecil (≤ 2m)', NULL, NULL, 'Jasa tebang pohon segala ukuran', '-', 'Kecil', NULL, NULL, '2021-05-16 13:24:26', '2021-05-16 13:24:26', 6),
(18, 'Penulisan skripsi/makalah', 'Jasa Ketik', NULL, 100000, NULL, NULL, 'skripsi.jpg', NULL, NULL, 'skripsi.mp4', '≤ 20 halaman', NULL, NULL, 'Jasa penulisan/pengetikan skripsi', 'Ide dan konten sudah fix', '20 Halaman', NULL, NULL, '2021-05-16 13:24:26', '2021-05-16 13:24:26', 7),
(19, 'Cuci AC (air conditioner)', 'Jasa Perawatan Rumah', NULL, 150000, NULL, NULL, 'ac.jpg', NULL, NULL, 'ac.mp4', 'Perawatan & Cuci AC bersih', NULL, NULL, 'Tidak ada', 'Tidak ada', 'Cuci AC Regular', NULL, NULL, '2021-05-16 13:29:43', '2021-05-16 13:29:43', 8),
(20, 'Kuras kolam renan', 'Jasa perawatan rumah', NULL, 400000, NULL, NULL, 'kolam.jpg', NULL, NULL, 'kolam.mp4', '≤ 5m x 5m', NULL, NULL, 'Bersihkan kolam seperti baru', 'Sumber Air Bersih', 'Kolam Kecil', NULL, NULL, '2021-05-16 13:29:43', '2021-05-16 13:29:43', 9),
(21, 'Jasa Koding', 'Jasa Montir', 15, 20000000, 30000000, 40000000, '0016105313_10.jpg', NULL, NULL, '0016105313_10.jpg', 'Ribet', NULL, NULL, 'sadasd', 'adsadasdasdsada', 'Bikin Website Ribet', 'Bikin Website Ribet Banget', 'Bikin Website Ribet Banget Sumpah', '2021-05-21 07:50:53', '2021-05-21 07:42:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Woka', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\May2021\\8ixZbAdl1WW7FhogtEaA.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Woka', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Woka Admin Panel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\May2021\\1quzsclEYlRhYBGwBhaD.png', '', 'image', 4, 'Admin'),
(10, 'site.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('customer','worker') COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profilePicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `type`, `worker_id`, `profilePicture`) VALUES
(1, NULL, 'Backend', 'muhfachri10@gmail.com', 'users/default.png', '$2y$10$48PeU2TiOm2g7ZeF1MU1.OxBjVwDBhh8Ox12ldqRRF1pcBm.J/nGe', NULL, NULL, '2021-05-03 07:27:27', '2021-05-09 22:50:04', 'worker', 1, NULL),
(2, NULL, 'Hanzo Hasashi', 'hanzo@hasashi.co.jp', 'users/default.png', '$2y$10$35O0xAUVPV58IWaeRLB1beEopiZem12iNRS4lKMJZDv96Znt2lz9K', NULL, NULL, '2021-05-07 02:14:06', '2021-05-07 02:14:06', 'worker', NULL, NULL),
(3, NULL, 'Vasily Zaitsev', 'vasily@email.fl', 'users/default.png', '$2y$10$dPKOL.XSfCnMTW.HBo6N5O6xm9agfi/CfCPUTq9NuJ2bTnh7NI8g6', NULL, NULL, '2021-05-09 02:01:54', '2021-05-09 22:59:03', 'customer', 14, NULL),
(4, NULL, 'Adolf Hitler', 'adolf@hitler.com', 'users/default.png', '$2y$10$xZSCv5dqt9fUJRYHKcT6Ke3Hg7mBQi1ipZtwWV8XT0eK4aB401kjW', NULL, NULL, '2021-05-21 07:17:14', '2021-05-21 07:23:54', 'worker', 15, NULL),
(5, 1, 'Sunda Empire', 'admin@admin.com', 'users\\May2021\\Kp1D0ucuZhftXDhRbpZl.png', '$2y$10$Wi2m/Ijo9seK5eLskyUJWOaLq1V/tr8lv.Z5I1uVWIyVGPVHlIxEK', NULL, '{\"locale\":\"en\"}', '2021-05-24 08:20:19', '2021-05-24 08:36:52', 'customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admins_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sec_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_done` int(11) DEFAULT NULL,
  `job_onprocess` int(11) DEFAULT NULL,
  `jenisIdentitas` enum('KTP','SIM','KK') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilePicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `no_identitas`, `jenis_kelamin`, `no_hp`, `alamat`, `services_id`, `admins_id`, `sec_question`, `sec_answer`, `user_id`, `description`, `fname`, `lname`, `keahlian`, `job_done`, `job_onprocess`, `jenisIdentitas`, `profilePicture`, `updated_at`, `created_at`) VALUES
(1, '12421', 'on', '122104024', 'Namgu Yongso-ro', NULL, NULL, 'TEST', 'TEST', 0, 'safasfa', 'Otto', 'Karius', 'TEST', NULL, NULL, 'KTP', '0016105313_10.jpg', '2021-05-09 01:19:51', '2021-05-09 01:19:51'),
(2, '291020232', 'Pria', '3933023492', 'Gwanak-ro Daehak-dong', NULL, NULL, 'TEST', 'TEST', 1, 'Ksodasdsasd', 'Karl', 'Donitz', 'TEST', NULL, NULL, 'SIM', '1 (1).jpg', '2021-05-09 01:57:07', '2021-05-09 01:57:07'),
(3, '29235235', 'Pria', '32526436', 'Jahamun-ro Jongno-gu', NULL, NULL, 'Kenapa', 'Gapapa', 3, 'Ksdosasda', 'Vasily', 'Zaitsev', 'Memahat', NULL, NULL, 'KTP', '117634704_806424976560381_4495151686871663703_n.jpg', '2021-05-09 13:06:16', '2021-05-09 02:08:02'),
(4, '4545', 'Pria', '3252643644', 'Jahamun-ro Jongno-gu', NULL, NULL, 'Kenapa', 'Gapapa', 3, 'safsafa', 'Vasily', 'Zaitsev', 'Memahat', NULL, NULL, 'SIM', '103678219_3074496492640730_2828239408070545053_n.jpg', '2021-05-09 13:06:16', '2021-05-09 02:12:42'),
(5, '3003920', 'Pria', '3930340234', 'Namdong-gu', NULL, NULL, 'Kenapa', 'Gapapa', 3, 'asdkodsaoda', 'Otto', 'Von Bismarck', 'Memahat', NULL, NULL, 'SIM', 'EkX-zExUwAIQ9xv.jpg', '2021-05-09 13:06:16', '2021-05-09 11:39:12'),
(11, '066666', 'Pria', '11111111111', 'Sejongno Jongno-gu', NULL, NULL, 'PENDING', 'PENDING', 1, 'ffasfasfa', 'Boris', 'Yeltsin', 'PENDING', NULL, NULL, 'SIM', '101805771_149900476599550_6122730660093527410_n.jpg', '2021-05-09 22:50:04', '2021-05-09 22:50:04'),
(14, '090912002', 'Pria', '90219921', 'Namdong-gu', NULL, NULL, 'PENDING', 'PENDING', 3, 'efwefwf', 'Simo', 'Hayha', 'PENDING', NULL, NULL, 'KTP', '093019_0814_HammingCode1.png', '2021-05-09 22:59:03', '2021-05-09 22:59:03'),
(15, '049473032020039', 'Pria', '6232043924039', 'Reichtag Berlin', NULL, NULL, 'Apa', 'Gapapa', 4, 'Siegheil mein fuhrer', 'Adolf', 'Hitler', 'Memimpin', NULL, NULL, 'SIM', '0016105313_10.jpg', '2021-05-21 07:24:20', '2021-05-21 07:23:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_user_id_foreign` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_no_identitas_unique` (`no_identitas`),
  ADD UNIQUE KEY `customers_no_hp_unique` (`no_hp`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`),
  ADD KEY `orders_worker_id_foreign` (`worker_id`),
  ADD KEY `orders_service_id_foreign` (`service_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_workers_id_foreign` (`workers_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_worker_id_foreign` (`worker_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workers_no_identitas_unique` (`no_identitas`),
  ADD UNIQUE KEY `workers_no_hp_unique` (`no_hp`),
  ADD KEY `workers_services_id_foreign` (`services_id`),
  ADD KEY `workers_admins_id_foreign` (`admins_id`),
  ADD KEY `workers_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_workers_id_foreign` FOREIGN KEY (`workers_id`) REFERENCES `workers` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
