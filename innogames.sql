-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 06:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innogames`
--
CREATE DATABASE IF NOT EXISTS `innogames` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `innogames`;

-- --------------------------------------------------------

--
-- Table structure for table `horse`
--

DROP TABLE IF EXISTS `horse`;
CREATE TABLE `horse` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speed` double(8,2) NOT NULL,
  `strength` double(8,2) NOT NULL,
  `endurance` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horse`
--

INSERT INTO `horse` (`id`, `name`, `speed`, `strength`, `endurance`, `created_at`, `updated_at`) VALUES
(1, 'Napoleon', 7.50, 0.10, 7.10, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(2, 'Ahmed', 6.30, 3.90, 0.20, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(3, 'Webster', 3.20, 0.20, 4.50, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(4, 'Lilliana', 9.30, 4.60, 4.10, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(5, 'Maymie', 4.10, 3.30, 5.10, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(6, 'Khalid', 0.40, 9.90, 8.90, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(7, 'Tyrel', 1.60, 1.20, 6.80, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(8, 'Dwight', 3.80, 3.40, 9.70, '2019-03-31 12:32:14', '2019-03-31 12:32:14'),
(9, 'Fiona', 5.10, 9.10, 4.20, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(10, 'Oral', 1.10, 3.00, 2.00, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(11, 'Gardner', 9.50, 5.70, 7.00, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(12, 'Maybelle', 9.50, 6.40, 4.00, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(13, 'Darian', 1.60, 1.40, 10.00, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(14, 'Raul', 7.90, 5.40, 4.70, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(15, 'Priscilla', 9.00, 0.40, 7.90, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(16, 'Jessy', 6.60, 8.20, 1.50, '2019-03-31 12:32:17', '2019-03-31 12:32:17'),
(17, 'Ofelia', 7.60, 5.70, 1.50, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(18, 'Noemi', 4.90, 3.60, 5.50, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(19, 'Rocky', 0.70, 7.10, 10.00, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(20, 'Danyka', 1.90, 7.20, 7.60, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(21, 'Stacy', 7.60, 2.40, 6.90, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(22, 'Jerod', 9.50, 7.50, 1.80, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(23, 'Consuelo', 2.00, 5.50, 3.90, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(24, 'Stanley', 4.30, 8.90, 4.80, '2019-03-31 12:32:18', '2019-03-31 12:32:18'),
(25, 'Maymie', 7.70, 5.80, 4.40, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(26, 'Audra', 0.40, 4.20, 4.60, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(27, 'Joannie', 9.80, 5.60, 6.00, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(28, 'Vickie', 5.30, 0.70, 6.40, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(29, 'Finn', 9.50, 4.60, 0.70, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(30, 'Tyson', 4.70, 0.70, 5.20, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(31, 'Urban', 0.80, 5.20, 1.10, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(32, 'Holden', 9.30, 0.30, 2.50, '2019-03-31 12:33:27', '2019-03-31 12:33:27'),
(33, 'Olin', 3.80, 8.80, 9.00, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(34, 'Reba', 7.60, 7.90, 1.50, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(35, 'Nyasia', 9.90, 2.30, 9.20, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(36, 'Sabryna', 7.00, 7.70, 0.00, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(37, 'Jakob', 4.60, 4.20, 10.00, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(38, 'Yasmeen', 8.10, 8.00, 8.40, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(39, 'Bria', 1.80, 8.10, 8.80, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(40, 'Noah', 5.30, 5.70, 4.60, '2019-03-31 12:33:29', '2019-03-31 12:33:29'),
(41, 'Tianna', 3.70, 2.90, 9.90, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(42, 'Tyshawn', 0.30, 6.80, 1.50, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(43, 'Lowell', 1.40, 4.00, 7.30, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(44, 'Amya', 3.20, 7.90, 3.90, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(45, 'Connor', 5.10, 1.20, 4.10, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(46, 'Trisha', 4.40, 3.80, 0.90, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(47, 'Armand', 8.10, 10.00, 7.50, '2019-03-31 12:33:30', '2019-03-31 12:33:30'),
(48, 'Dolores', 6.70, 2.60, 8.60, '2019-03-31 12:33:30', '2019-03-31 12:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2019_03_28_144933_create_horse_table', 1),
(26, '2019_03_28_144946_create_race_table', 1),
(27, '2019_03_28_144956_create_race_horses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
CREATE TABLE `race` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` enum('started','finished') COLLATE utf8_unicode_ci NOT NULL,
  `length` bigint(20) NOT NULL,
  `time` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`id`, `status`, `length`, `time`, `created_at`, `updated_at`) VALUES
(1, 'finished', 1500, 500, '2019-03-31 12:32:13', '2019-03-31 12:33:11'),
(2, 'finished', 1500, 600, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(3, 'finished', 1500, 320, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(4, 'started', 1500, 90, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(5, 'started', 1500, 90, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(6, 'started', 1500, 90, '2019-03-31 12:33:30', '2019-03-31 12:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `race_horses`
--

DROP TABLE IF EXISTS `race_horses`;
CREATE TABLE `race_horses` (
  `id` int(10) UNSIGNED NOT NULL,
  `race_id` int(10) UNSIGNED NOT NULL,
  `horse_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `covered_distance` int(11) DEFAULT NULL,
  `finish_time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `race_horses`
--

INSERT INTO `race_horses` (`id`, `race_id`, `horse_id`, `position`, `covered_distance`, `finish_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1500, 162, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(2, 1, 2, NULL, 1500, 190, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(3, 1, 3, NULL, 1500, 375, '2019-03-31 12:32:14', '2019-03-31 12:33:00'),
(4, 1, 4, NULL, 1500, 127, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(5, 1, 5, NULL, 1500, 239, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(6, 1, 6, NULL, 1500, 305, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(7, 1, 7, NULL, 1500, 497, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(8, 1, 8, NULL, 1500, 213, '2019-03-31 12:32:14', '2019-03-31 12:33:11'),
(9, 2, 9, NULL, 1500, 165, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(10, 2, 10, NULL, 1500, 598, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(11, 2, 11, NULL, 1500, 116, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(12, 2, 12, NULL, 1500, 119, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(13, 2, 13, NULL, 1500, 383, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(14, 2, 14, NULL, 1500, 139, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(15, 2, 15, NULL, 1500, 134, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(16, 2, 16, NULL, 1500, 150, '2019-03-31 12:32:17', '2019-03-31 12:33:19'),
(17, 3, 17, NULL, 1500, 149, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(18, 3, 18, NULL, 1500, 205, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(19, 3, 19, NULL, 1500, 317, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(20, 3, 20, NULL, 1500, 265, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(21, 3, 21, NULL, 1500, 149, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(22, 3, 22, NULL, 1500, 118, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(23, 3, 23, NULL, 1500, 320, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(24, 3, 24, NULL, 1500, 181, '2019-03-31 12:32:18', '2019-03-31 12:32:55'),
(25, 4, 25, NULL, 994, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(26, 4, 26, NULL, 470, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(27, 4, 27, NULL, 1194, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(28, 4, 28, NULL, 796, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(29, 4, 29, NULL, 1033, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(30, 4, 30, NULL, 702, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(31, 4, 31, NULL, 316, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(32, 4, 32, NULL, 932, NULL, '2019-03-31 12:33:27', '2019-03-31 12:33:41'),
(33, 5, 33, NULL, 792, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(34, 5, 34, NULL, 993, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(35, 5, 35, NULL, 1225, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(36, 5, 36, NULL, 909, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(37, 5, 37, NULL, 864, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(38, 5, 38, NULL, 1132, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(39, 5, 39, NULL, 612, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(40, 5, 40, NULL, 804, NULL, '2019-03-31 12:33:29', '2019-03-31 12:33:41'),
(41, 6, 41, NULL, 783, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(42, 6, 42, NULL, 335, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(43, 6, 43, NULL, 576, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(44, 6, 44, NULL, 662, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(45, 6, 45, NULL, 686, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(46, 6, 46, NULL, 565, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(47, 6, 47, NULL, 1146, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41'),
(48, 6, 48, NULL, 987, NULL, '2019-03-31 12:33:30', '2019-03-31 12:33:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horse`
--
ALTER TABLE `horse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `race_horses`
--
ALTER TABLE `race_horses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `race_horses_race_id_foreign` (`race_id`),
  ADD KEY `race_horses_horse_id_foreign` (`horse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horse`
--
ALTER TABLE `horse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `race_horses`
--
ALTER TABLE `race_horses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `race_horses`
--
ALTER TABLE `race_horses`
  ADD CONSTRAINT `race_horses_horse_id_foreign` FOREIGN KEY (`horse_id`) REFERENCES `horse` (`id`),
  ADD CONSTRAINT `race_horses_race_id_foreign` FOREIGN KEY (`race_id`) REFERENCES `race` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
