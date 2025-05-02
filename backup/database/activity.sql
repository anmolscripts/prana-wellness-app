-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prana_wellness`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('time','boolean') NOT NULL,
  `state` enum('active','inactive') NOT NULL DEFAULT 'active',
  `min_duration` int(11) DEFAULT NULL,
  `max_duration` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `type`, `state`, `min_duration`, `max_duration`, `created_at`) VALUES
(002, 'Duration of nature soaking and barefoot  grounding on grass (tune into the infra-red hour)', 'time', 'active', 20, 30, '2025-05-01 13:48:37'),
(004, 'Maximize Vitamin-D intake', 'time', 'active', 20, 30, '2025-05-01 14:34:59'),
(006, 'Maximze UV-B Intake', 'time', 'active', 20, 40, '2025-05-01 14:35:57'),
(007, 'Active Pranayma', 'time', 'active', 20, 40, '2025-05-02 07:59:52'),
(008, 'Practicing Yoga Postures', 'time', 'active', 20, 40, '2025-05-02 08:03:39'),
(009, 'Eating cruelty-free pranic food', 'boolean', 'inactive', 0, 0, '2025-05-02 08:04:14'),
(010, 'Listening to meditative music', 'time', 'active', 30, 60, '2025-05-02 08:04:55'),
(011, 'Time Spent on yourself (Introspection and Contemplation)', 'time', 'active', 60, 80, '2025-05-02 08:05:25'),
(012, 'Tuning in Compassion and Empathy (Hurting none', 'boolean', 'active', 0, 0, '2025-05-02 08:05:41'),
(013, 'Journaling your day (Log positive experiences of the day)', 'boolean', 'active', 0, 0, '2025-05-02 08:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
