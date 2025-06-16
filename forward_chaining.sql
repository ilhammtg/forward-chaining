-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2025 at 08:59 AM
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
-- Database: `forward_chaining`
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
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `kode`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G1', 'Tidak bisa membuka website', NULL, NULL),
(2, 'G2', 'Lampu indikator LAN tidak menyala', NULL, NULL),
(3, 'G3', 'Bisa ping gateway', NULL, NULL),
(4, 'G4', 'Tidak bisa ping 8.8.8.8', NULL, NULL),
(5, 'G5', 'Tidak bisa ping domain google.com', NULL, NULL),
(6, 'G6', 'Mendapat IP address 169.254.x.x', NULL, NULL),
(7, 'G7', 'Perangkat tersambung ke WiFi tapi tidak ada internet', NULL, NULL),
(8, 'G8', 'Perangkat tidak mendapat IP address', NULL, NULL),
(9, 'G9', 'Tidak bisa ping ke gateway', NULL, NULL),
(10, 'G10', 'Hanya beberapa situs tidak bisa dibuka', NULL, NULL),
(11, 'G11', 'Koneksi sering terputus', NULL, NULL),
(12, 'G12', 'WiFi tidak terdeteksi', NULL, NULL),
(13, 'G13', 'Koneksi lambat di semua perangkat', NULL, NULL),
(14, 'G14', 'Firewall memblokir akses internet', NULL, NULL),
(15, 'G15', 'DNS Server tidak merespons', NULL, NULL),
(16, 'G16', 'Koneksi internet terputus total', NULL, NULL),
(17, 'G17', 'Perangkat bisa ping localhost', NULL, NULL),
(18, 'G18', 'Perangkat bisa ping perangkat lain di jaringan lokal', NULL, NULL);

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
-- Table structure for table `masalahs`
--

CREATE TABLE `masalahs` (
  `id` bigint UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masalahs`
--

INSERT INTO `masalahs` (`id`, `kode`, `nama_masalah`, `created_at`, `updated_at`) VALUES
(1, 'M1', 'Masalah pada koneksi ISP', NULL, NULL),
(2, 'M2', 'Masalah pada DNS', NULL, NULL),
(3, 'M3', 'Masalah pada koneksi LAN', NULL, NULL),
(4, 'M4', 'Masalah konfigurasi DHCP', NULL, NULL),
(5, 'M5', 'IP address konflik', NULL, NULL),
(6, 'M6', 'Masalah browser atau cache', NULL, NULL),
(7, 'M7', 'Masalah WiFi (sinyal/lemah/terputus)', NULL, NULL),
(8, 'M8', 'Firewall memblokir koneksi', NULL, NULL),
(9, 'M9', 'DNS server down atau salah konfigurasi', NULL, NULL),
(10, 'M10', 'Masalah kabel jaringan', NULL, NULL),
(11, 'M11', 'Masalah adapter jaringan', NULL, NULL);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_31_151720_create_gejalas_table', 1),
(5, '2025_05_31_151829_create_masalahs_table', 1),
(6, '2025_05_31_153442_create_solusis_table', 1),
(7, '2025_05_31_153451_create_rules_table', 1),
(8, '2025_05_31_153501_create_rule_gejala_table', 1);

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
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` bigint UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masalah_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `kode`, `masalah_id`, `created_at`, `updated_at`) VALUES
(1, 'R1', 1, NULL, NULL),
(2, 'R2', 1, NULL, NULL),
(3, 'R3', 1, NULL, NULL),
(4, 'R4', 1, NULL, NULL),
(5, 'R5', 1, NULL, NULL),
(6, 'R6', 1, NULL, NULL),
(7, 'R7', 1, NULL, NULL),
(8, 'R8', 1, NULL, NULL),
(9, 'R9', 1, NULL, NULL),
(10, 'R10', 2, NULL, NULL),
(11, 'R11', 2, NULL, NULL),
(12, 'R12', 2, NULL, NULL),
(13, 'R13', 2, NULL, NULL),
(14, 'R14', 2, NULL, NULL),
(15, 'R15', 2, NULL, NULL),
(16, 'R16', 2, NULL, NULL),
(17, 'R17', 2, NULL, NULL),
(18, 'R18', 2, NULL, NULL),
(19, 'R19', 3, NULL, NULL),
(20, 'R20', 3, NULL, NULL),
(21, 'R21', 3, NULL, NULL),
(22, 'R22', 3, NULL, NULL),
(23, 'R23', 3, NULL, NULL),
(24, 'R24', 3, NULL, NULL),
(25, 'R25', 3, NULL, NULL),
(26, 'R26', 4, NULL, NULL),
(27, 'R27', 4, NULL, NULL),
(28, 'R28', 4, NULL, NULL),
(29, 'R29', 4, NULL, NULL),
(30, 'R30', 4, NULL, NULL),
(31, 'R31', 4, NULL, NULL),
(32, 'R32', 5, NULL, NULL),
(33, 'R33', 5, NULL, NULL),
(34, 'R34', 5, NULL, NULL),
(35, 'R35', 5, NULL, NULL),
(36, 'R36', 5, NULL, NULL),
(37, 'R37', 6, NULL, NULL),
(38, 'R38', 6, NULL, NULL),
(39, 'R39', 6, NULL, NULL),
(40, 'R40', 6, NULL, NULL),
(41, 'R41', 6, NULL, NULL),
(42, 'R42', 7, NULL, NULL),
(43, 'R43', 7, NULL, NULL),
(44, 'R44', 7, NULL, NULL),
(45, 'R45', 7, NULL, NULL),
(46, 'R46', 7, NULL, NULL),
(47, 'R47', 7, NULL, NULL),
(48, 'R48', 7, NULL, NULL),
(49, 'R49', 8, NULL, NULL),
(50, 'R50', 8, NULL, NULL),
(51, 'R51', 8, NULL, NULL),
(52, 'R52', 8, NULL, NULL),
(53, 'R53', 8, NULL, NULL),
(54, 'R54', 9, NULL, NULL),
(55, 'R55', 9, NULL, NULL),
(56, 'R56', 9, NULL, NULL),
(57, 'R57', 9, NULL, NULL),
(58, 'R58', 9, NULL, NULL),
(59, 'R59', 10, NULL, NULL),
(60, 'R60', 10, NULL, NULL),
(61, 'R61', 10, NULL, NULL),
(62, 'R62', 10, NULL, NULL),
(63, 'R63', 11, NULL, NULL),
(64, 'R64', 11, NULL, NULL),
(65, 'R65', 11, NULL, NULL),
(66, 'R66', 11, NULL, NULL),
(67, 'R67', 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rule_gejala`
--

CREATE TABLE `rule_gejala` (
  `id` bigint UNSIGNED NOT NULL,
  `rule_id` bigint UNSIGNED NOT NULL,
  `gejala_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rule_gejala`
--

INSERT INTO `rule_gejala` (`id`, `rule_id`, `gejala_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 3, 16, NULL, NULL),
(5, 4, 3, NULL, NULL),
(6, 4, 4, NULL, NULL),
(7, 5, 1, NULL, NULL),
(8, 5, 3, NULL, NULL),
(9, 5, 4, NULL, NULL),
(10, 6, 4, NULL, NULL),
(11, 6, 5, NULL, NULL),
(12, 7, 13, NULL, NULL),
(13, 8, 1, NULL, NULL),
(14, 8, 13, NULL, NULL),
(15, 9, 4, NULL, NULL),
(16, 9, 13, NULL, NULL),
(17, 10, 1, NULL, NULL),
(18, 10, 5, NULL, NULL),
(19, 11, 5, NULL, NULL),
(20, 12, 15, NULL, NULL),
(21, 13, 1, NULL, NULL),
(22, 13, 15, NULL, NULL),
(23, 14, 5, NULL, NULL),
(24, 14, 15, NULL, NULL),
(25, 15, 10, NULL, NULL),
(26, 16, 1, NULL, NULL),
(27, 16, 10, NULL, NULL),
(28, 17, 3, NULL, NULL),
(29, 17, 5, NULL, NULL),
(30, 18, 1, NULL, NULL),
(31, 18, 3, NULL, NULL),
(32, 18, 5, NULL, NULL),
(33, 19, 2, NULL, NULL),
(34, 20, 9, NULL, NULL),
(35, 21, 2, NULL, NULL),
(36, 21, 9, NULL, NULL),
(37, 22, 17, NULL, NULL),
(38, 22, 18, NULL, NULL),
(39, 23, 2, NULL, NULL),
(40, 23, 17, NULL, NULL),
(41, 24, 9, NULL, NULL),
(42, 24, 17, NULL, NULL),
(43, 25, 2, NULL, NULL),
(44, 25, 9, NULL, NULL),
(45, 25, 17, NULL, NULL),
(46, 26, 6, NULL, NULL),
(47, 27, 8, NULL, NULL),
(48, 28, 6, NULL, NULL),
(49, 28, 8, NULL, NULL),
(50, 29, 6, NULL, NULL),
(51, 29, 9, NULL, NULL),
(52, 30, 8, NULL, NULL),
(53, 30, 9, NULL, NULL),
(54, 31, 6, NULL, NULL),
(55, 31, 8, NULL, NULL),
(56, 31, 9, NULL, NULL),
(57, 32, 6, NULL, NULL),
(58, 32, 3, NULL, NULL),
(59, 32, 9, NULL, NULL),
(60, 33, 6, NULL, NULL),
(61, 33, 9, NULL, NULL),
(62, 34, 6, NULL, NULL),
(63, 34, 11, NULL, NULL),
(64, 35, 11, NULL, NULL),
(65, 36, 6, NULL, NULL),
(66, 36, 3, NULL, NULL),
(67, 36, 11, NULL, NULL),
(68, 37, 1, NULL, NULL),
(69, 37, 10, NULL, NULL),
(70, 38, 10, NULL, NULL),
(71, 39, 1, NULL, NULL),
(72, 39, 3, NULL, NULL),
(73, 39, 10, NULL, NULL),
(74, 40, 1, NULL, NULL),
(75, 40, 17, NULL, NULL),
(76, 40, 10, NULL, NULL),
(77, 41, 3, NULL, NULL),
(78, 41, 10, NULL, NULL),
(79, 42, 7, NULL, NULL),
(80, 43, 11, NULL, NULL),
(81, 44, 12, NULL, NULL),
(82, 45, 7, NULL, NULL),
(83, 45, 11, NULL, NULL),
(84, 46, 11, NULL, NULL),
(85, 46, 12, NULL, NULL),
(86, 47, 7, NULL, NULL),
(87, 47, 12, NULL, NULL),
(88, 48, 7, NULL, NULL),
(89, 48, 11, NULL, NULL),
(90, 48, 12, NULL, NULL),
(91, 49, 1, NULL, NULL),
(92, 49, 14, NULL, NULL),
(93, 50, 14, NULL, NULL),
(94, 51, 3, NULL, NULL),
(95, 51, 14, NULL, NULL),
(96, 52, 1, NULL, NULL),
(97, 52, 3, NULL, NULL),
(98, 52, 14, NULL, NULL),
(99, 53, 5, NULL, NULL),
(100, 53, 14, NULL, NULL),
(101, 54, 5, NULL, NULL),
(102, 54, 15, NULL, NULL),
(103, 55, 15, NULL, NULL),
(104, 56, 1, NULL, NULL),
(105, 56, 5, NULL, NULL),
(106, 56, 15, NULL, NULL),
(107, 57, 3, NULL, NULL),
(108, 57, 5, NULL, NULL),
(109, 57, 15, NULL, NULL),
(110, 58, 10, NULL, NULL),
(111, 58, 15, NULL, NULL),
(112, 59, 2, NULL, NULL),
(113, 60, 2, NULL, NULL),
(114, 60, 9, NULL, NULL),
(115, 61, 2, NULL, NULL),
(116, 61, 17, NULL, NULL),
(117, 62, 2, NULL, NULL),
(118, 62, 18, NULL, NULL),
(119, 63, 6, NULL, NULL),
(120, 63, 9, NULL, NULL),
(121, 64, 9, NULL, NULL),
(122, 65, 6, NULL, NULL),
(123, 65, 17, NULL, NULL),
(124, 66, 9, NULL, NULL),
(125, 66, 17, NULL, NULL),
(126, 67, 6, NULL, NULL),
(127, 67, 9, NULL, NULL),
(128, 67, 17, NULL, NULL);

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
('aZcAAm9nuv6eFaJDsKyvoX82DcBcYSkpSku0s4Eo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXN6cnpkVnZPdWd0S1I0aTlJTXZQU0hiQTZVSVFSRlo2UzVCd3gxbCI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1749964665),
('B4bKUqgTlDqKbP76Gz9wOebJDjNUVUmfyJ3O1ZkW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHR0cTh5bDhQckl2Skl6bjE0bjZyMW9aakpjYVV3b2tTbFZzWFpScyI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750058180),
('koERFBL5EX3gADepx9h176JT3jguVV0lkx7D722Y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3ZoMWRuUmN2Rk1PY0I3cEtnUGhCVEJiNHdqMm9jOWJycjVmOVNwSyI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749912662),
('qMavjaeeDrGBd4Tx2iMqVdapmXAcGvXWIS4M4vv1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjljTG81NmZaTHBURFVwb0Y5RlBWeFhHSlBNZm1aSFdQeHdIVjlCRyI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749707760),
('R4fX43nEUcpq08QX5tImsX7hlyci1effnVW7sjpk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRE5xWnNsY2JDNHRQbVhhRU1hWXBiU3ZJeFZUN0N6N3pPa1FpQnNCbSI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749919400),
('RF3sHUOysp9CRIrOhlMBopyHF9pOfVmTU4hnc7Bb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUVI1ckNxdE5OSklYTVpBNE1XRGtGckhzaXRsQTYxOVRzazVzdXYwTiI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749741421),
('WSTBnW0g7aD4ln7LhQ6FBSSH0XgkYUxnFS0yFjEi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS2ZsSTgwTm1HY2VFRlViSURqSWZWNml0SWZxeXp3UVdKMWU3a3R1YSI7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749911894);

-- --------------------------------------------------------

--
-- Table structure for table `solusis`
--

CREATE TABLE `solusis` (
  `id` bigint UNSIGNED NOT NULL,
  `masalah_id` bigint UNSIGNED NOT NULL,
  `isi_solusi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solusis`
--

INSERT INTO `solusis` (`id`, `masalah_id`, `isi_solusi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Periksa kabel/modem, restart router, hubungi ISP jika masalah berlanjut.', NULL, NULL),
(2, 2, 'Ganti DNS ke 8.8.8.8 atau 1.1.1.1 dan periksa pengaturan DNS.', NULL, NULL),
(3, 3, 'Periksa koneksi kabel LAN atau pengaturan adapter jaringan.', NULL, NULL),
(4, 4, 'Periksa server DHCP, atau set IP secara manual jika perlu.', NULL, NULL),
(5, 5, 'Pastikan tidak ada dua perangkat dengan IP yang sama di jaringan.', NULL, NULL),
(6, 6, 'Coba bersihkan cache browser atau gunakan browser lain.', NULL, NULL),
(7, 7, 'Pindahkan perangkat lebih dekat ke router atau periksa gangguan sinyal.', NULL, NULL),
(8, 8, 'Nonaktifkan firewall sementara dan periksa pengaturan filtering.', NULL, NULL),
(9, 9, 'Ganti DNS server dan pastikan server DNS aktif dan dapat diakses.', NULL, NULL),
(10, 10, 'Periksa kabel jaringan, pastikan tidak ada yang rusak atau longgar.', NULL, NULL),
(11, 11, 'Periksa adapter jaringan, update driver, atau coba adapter lain.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejalas_kode_unique` (`kode`);

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
-- Indexes for table `masalahs`
--
ALTER TABLE `masalahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masalahs_kode_unique` (`kode`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rules_kode_unique` (`kode`),
  ADD KEY `rules_masalah_id_foreign` (`masalah_id`);

--
-- Indexes for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_gejala_rule_id_foreign` (`rule_id`),
  ADD KEY `rule_gejala_gejala_id_foreign` (`gejala_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `solusis`
--
ALTER TABLE `solusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solusis_masalah_id_foreign` (`masalah_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masalahs`
--
ALTER TABLE `masalahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `solusis`
--
ALTER TABLE `solusis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_masalah_id_foreign` FOREIGN KEY (`masalah_id`) REFERENCES `masalahs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  ADD CONSTRAINT `rule_gejala_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rule_gejala_rule_id_foreign` FOREIGN KEY (`rule_id`) REFERENCES `rules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solusis`
--
ALTER TABLE `solusis`
  ADD CONSTRAINT `solusis_masalah_id_foreign` FOREIGN KEY (`masalah_id`) REFERENCES `masalahs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
