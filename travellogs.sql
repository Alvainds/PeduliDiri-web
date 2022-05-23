-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 02:34 PM
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
-- Database: `db_pedulidiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `travellogs`
--

CREATE TABLE `travellogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `checkin` time NOT NULL,
  `checkout` datetime DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travellogs`
--

INSERT INTO `travellogs` (`id`, `user_id`, `date`, `checkin`, `checkout`, `location`, `image`, `keterangan`, `temperature`, `created_at`, `updated_at`) VALUES
(34, 1, '0000-00-00', '02:10:46', NULL, 'Bantul', '', 'asddasd', '54', '2022-02-23 19:10:46', '2022-02-23 20:43:32'),
(38, 1, '0000-00-00', '03:53:58', '2022-03-22 03:57:41', 'Yogyakarta', '', 'Percobaan', '34', '2022-03-21 20:53:58', '2022-03-21 20:57:41'),
(39, 1, '0000-00-00', '04:05:14', '2022-03-24 00:59:21', 'Malaysia', '', 'Perjalanan Bisnis Keluarga Bersama teman-teman', '45', '2022-03-21 21:05:14', '2022-03-23 17:59:21'),
(40, 1, '0000-00-00', '04:16:18', NULL, 'New York', '', 'Melihat Pameran Besar', '37', '2022-03-21 21:16:18', '2022-03-21 21:16:18'),
(49, 2, '0000-00-00', '08:24:27', '2022-04-22 08:35:37', 'Bantul', '', 'testing', '34', '2022-04-22 01:24:27', '2022-04-22 01:35:37'),
(51, 2, '0000-00-00', '08:36:09', '2022-05-12 07:30:18', 'Yogyakarta', '', 'testing checkout', '37', '2022-04-22 01:36:09', '2022-05-12 00:30:18'),
(52, 2, '0000-00-00', '09:10:27', '2022-05-12 07:53:35', 'Tokyo', '', 'hmmm', '45', '2022-04-22 02:10:27', '2022-05-12 00:53:35'),
(53, 2, '0000-00-00', '09:17:08', '2022-05-12 07:53:47', 'Hiroshima', '', 'boom', '35', '2022-04-22 02:17:08', '2022-05-12 00:53:47'),
(54, 2, '0000-00-00', '07:32:20', '2022-05-12 07:33:02', 'New York', '', 'well', '45', '2022-05-12 00:32:20', '2022-05-12 00:33:02'),
(55, 2, '0000-00-00', '07:41:48', '2022-05-12 07:53:56', 'Majapahit', '', 'hmm', '34', '2022-05-12 00:41:48', '2022-05-12 00:53:56'),
(57, 2, '0000-00-00', '08:56:24', '2022-05-12 11:16:20', 'hiroshima', '', 'hmmmmm', '34', '2022-05-12 01:56:24', '2022-05-12 04:16:20'),
(58, 5, '0000-00-00', '13:52:00', '2022-05-12 13:52:11', 'borobudur', '', 'berkunjung ke wisata yogyakarta', '34', '2022-05-12 06:52:00', '2022-05-12 06:52:11'),
(60, 6, '0000-00-00', '14:51:33', '2022-05-12 14:52:22', 'new york', '', 'mudik bareng 2022', '34', '2022-05-12 07:51:33', '2022-05-12 07:52:22'),
(64, 3, '2022-05-14', '18:49:00', '2022-05-15 16:28:00', 'TEUPAH TENGAH', '', 'asdasd', '43', '2022-05-15 08:50:10', '2022-05-15 09:28:00'),
(65, 3, '2022-05-21', '17:25:00', '2022-05-15 17:23:11', 'SAMA DUA', '', 'sdasdda', '23', '2022-05-15 10:23:00', '2022-05-15 10:23:11'),
(66, 3, '2022-05-20', '17:31:00', '2022-05-15 05:35:43', 'LHOKSUKON', '', 'asdasdasdas', '23', '2022-05-15 10:28:40', '2022-05-15 10:31:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travellogs`
--
ALTER TABLE `travellogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travellogs`
--
ALTER TABLE `travellogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
