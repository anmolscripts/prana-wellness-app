-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 08:50 AM
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
  `description` text DEFAULT NULL,
  `type` enum('time','boolean') NOT NULL,
  `state` enum('active','inactive') NOT NULL DEFAULT 'active',
  `min_duration` int(11) DEFAULT NULL,
  `max_duration` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `description`, `type`, `state`, `min_duration`, `max_duration`, `created_at`, `modified_datetime`) VALUES
(002, 'Duration of nature soaking and barefoot  grounding on grass (tune into the infra-red hour)', '<h2>✅<span class=\"ql-font-monospace\"> Summary</span></h2><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><span class=\"ql-font-monospace\">Generate token using </span><code class=\"ql-font-monospace\">JWT::encode()</code></li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><span class=\"ql-font-monospace\">Send token in </span><code class=\"ql-font-monospace\">Authorization</code><span class=\"ql-font-monospace\"> header</span></li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><span class=\"ql-font-monospace\">Validate token using </span><code class=\"ql-font-monospace\">JWT::decode()</code><span class=\"ql-font-monospace\"> in your API</span></li></ol><p><span class=\"ql-font-monospace\">Would you like me to integrate this into your existing add/update API, or help with login + token generation?</span></p>', 'time', 'active', 20, 30, '2025-05-01 13:48:37', '2025-05-14 11:00:21'),
(004, 'Maximize Vitamin-D intake', NULL, 'time', 'active', 20, 30, '2025-05-01 14:34:59', NULL),
(006, 'Maximze UV-B Intake', NULL, 'time', 'active', 20, 40, '2025-05-01 14:35:57', NULL),
(007, 'Active Pranayma', NULL, 'time', 'active', 20, 40, '2025-05-02 07:59:52', NULL),
(008, 'Practicing Yoga Postures', NULL, 'time', 'active', 20, 40, '2025-05-02 08:03:39', NULL),
(009, 'Eating cruelty-free pranic food', NULL, 'boolean', 'inactive', 0, 0, '2025-05-02 08:04:14', NULL),
(010, 'Listening to meditative music', '<p>ufyuyfguyk</p><p>kgbhjk</p><p>kjbhjk</p><p>gbhj</p><p>hbj</p>', 'time', 'active', 30, 60, '2025-05-02 08:04:55', '2025-05-14 10:58:33'),
(011, 'Time Spent on yourself (Introspection and Contemplation)', NULL, 'time', 'active', 60, 80, '2025-05-02 08:05:25', NULL),
(012, 'Tuning in Compassion and Empathy (Hurting none', NULL, 'boolean', 'active', 0, 0, '2025-05-02 08:05:41', NULL),
(013, 'Journaling your day (Log positive experiences of the day)', NULL, 'boolean', 'active', 0, 0, '2025-05-02 08:05:55', NULL),
(023, 'Test activity table', '<p><br></p>', 'boolean', 'active', 0, 0, '2025-05-13 13:17:46', '2025-05-14 08:45:26'),
(024, 'Test 2', '<p><br></p>', 'time', 'inactive', 10, 45, '2025-05-13 13:51:20', '2025-05-14 08:44:56'),
(025, 'Test for refress', '<p><br></p>', 'boolean', 'active', 0, 0, '2025-05-14 07:26:21', '2025-05-14 08:43:46'),
(028, 'tyfuyguhi', '<p><strong>pranathon</strong></p><p>dfsdf</p><p>df</p><p>SF</p><p>Sfd</p><p>sd</p><p>f</p><p>sdf</p>', 'boolean', 'active', 0, 0, '2025-05-17 05:18:43', '2025-05-19 08:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `goal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `goal_date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `user_id`, `activity_id`, `goal_date`, `created_at`) VALUES
(81, 1, 002, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(82, 1, 004, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(83, 1, 006, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(84, 1, 007, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(85, 1, 008, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(86, 1, 009, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(87, 1, 010, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(88, 1, 011, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(89, 1, 012, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(90, 1, 013, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(91, 1, 023, '2025-05-14 14:27:21', '2025-05-14 14:27:21'),
(92, 8, 002, '2025-05-16 11:34:50', '2025-05-16 11:34:50'),
(93, 8, 004, '2025-05-16 11:34:50', '2025-05-16 11:34:50'),
(94, 8, 006, '2025-05-16 11:34:50', '2025-05-16 11:34:50'),
(95, 8, 007, '2025-05-16 11:34:50', '2025-05-16 11:34:50'),
(96, 8, 008, '2025-05-16 11:34:50', '2025-05-16 11:34:50'),
(101, 1, 002, '2025-05-17 08:50:32', '2025-05-17 08:50:32'),
(102, 1, 004, '2025-05-17 08:50:32', '2025-05-17 08:50:32'),
(103, 1, 002, '2025-05-19 12:24:52', '2025-05-19 12:24:52'),
(104, 1, 004, '2025-05-19 12:24:52', '2025-05-19 12:24:52'),
(105, 1, 006, '2025-05-19 12:24:52', '2025-05-19 12:24:52'),
(106, 1, 002, '2025-05-23 10:14:46', '2025-05-23 10:14:46'),
(107, 1, 004, '2025-05-23 10:14:46', '2025-05-23 10:14:46'),
(108, 1, 006, '2025-05-23 10:14:46', '2025-05-23 10:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `layout_settings`
--

CREATE TABLE `layout_settings` (
  `id` int(11) NOT NULL,
  `layout_key` varchar(100) NOT NULL,
  `component_type` varchar(50) NOT NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`settings`)),
  `is_active` tinyint(1) DEFAULT 1,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layout_settings`
--

INSERT INTO `layout_settings` (`id`, `layout_key`, `component_type`, `settings`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'homepage_carousel', 'carousel', '{\"intervel_time\":\"15000\",\"delay_time\":\"10\",\"images\":[\"1747725753_682c2db92b5c9_organic-flat-people-meditating-illustration.png\",\"1747725753_682c2db92c0ad_pawel-czerwinski-VlAUm62T-VQ-unsplash.jpg\",\"1747725753_682c2db92d461_person-practicing-yoga-meditation-nature-sunset-sunrise (1).jpg\",\"1747725753_682c2db92df2b_person-practicing-yoga-meditation-nature-sunset-sunrise.jpg\"]}', 1, 0, '2025-05-20 06:37:29', '2025-05-22 07:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `notificationName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `email` tinyint(1) DEFAULT 1,
  `account` tinyint(1) DEFAULT 1,
  `push` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `notificationTimings` varchar(255) DEFAULT NULL,
  `notificationId` varchar(100) DEFAULT NULL,
  `modify_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `userId`, `notificationName`, `userEmail`, `email`, `account`, `push`, `created_at`, `notificationTimings`, `notificationId`, `modify_date`) VALUES
(5, 8, 'miss_daily_goals', 'varun@gmail.com', 1, 0, 0, '2025-05-16 06:22:00', 'online', '0001', '2025-05-16 11:52:00'),
(6, 8, 'reminder_daily_goals', 'varun@gmail.com', 1, 0, 0, '2025-05-16 06:22:00', 'online', '0002', '2025-05-16 11:52:00'),
(7, 8, 'new_activity', 'varun@gmail.com', 1, 0, 0, '2025-05-16 06:22:00', 'online', '0003', '2025-05-16 11:52:00'),
(8, 8, 'newsletter', 'varun@gmail.com', 1, 0, 0, '2025-05-16 06:22:00', 'online', '0004', '2025-05-16 11:52:00'),
(9, 1, 'miss_daily_goals', 'admin@gmail.com', 1, 1, 1, '2025-05-17 03:08:31', 'online', '0001', '2025-05-17 08:38:31'),
(10, 1, 'reminder_daily_goals', 'admin@gmail.com', 1, 1, 1, '2025-05-17 03:08:31', 'online', '0002', '2025-05-17 08:38:31'),
(11, 1, 'new_activity', 'admin@gmail.com', 1, 1, 1, '2025-05-17 03:08:31', 'online', '0003', '2025-05-17 08:38:31'),
(12, 1, 'newsletter', 'admin@gmail.com', 1, 1, 1, '2025-05-17 03:08:31', 'online', '0004', '2025-05-17 08:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` enum('user','admin') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `otp` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `otpExpire` datetime DEFAULT NULL,
  `imgPath` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `modifyDate` datetime DEFAULT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `status`, `otp`, `created_at`, `phoneNo`, `otpExpire`, `imgPath`, `country`, `modifyDate`, `activate`) VALUES
(1, 'admin', 'admin@gmail.com', '', 'admin', 'active', 261656, '2025-04-29 11:29:27', '', NULL, '1747221749_organic-flat-people-meditating-illustration.png', 'AF', '2025-05-14 13:22:29', 1),
(6, 'Anmol', 'anmol@gmail.com', '', 'admin', 'active', 173699, '2025-04-29 12:50:35', NULL, NULL, NULL, NULL, NULL, 1),
(8, 'Varun', 'varun@gmail.com', '', 'user', 'active', 903241, '2025-04-29 12:56:17', '9958216718', NULL, '1747373807_organic-flat-people-meditating-illustration.png', 'AF', '2025-05-16 07:36:47', 1),
(9, 'Anmol', 'anmol@anmol.com', '', 'user', 'active', 919577, '2025-04-30 06:38:13', NULL, NULL, NULL, NULL, NULL, 1),
(10, 'Anmol', 'anmol@test.com', '', 'user', 'active', 501219, '2025-04-30 08:46:52', NULL, NULL, NULL, NULL, NULL, 0),
(11, 'Varun', 'varun@test.com', '', 'user', 'active', 929304, '2025-05-01 09:44:26', NULL, NULL, NULL, NULL, NULL, 1),
(15, 'Anmol', 'anmolhive@gmail.com', '', 'user', 'inactive', 269666, '2025-05-15 10:56:43', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `record_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `logged_duration` int(11) DEFAULT NULL,
  `logged_value` tinyint(1) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `userActivityDate` datetime DEFAULT NULL,
  `activity_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`record_id`, `user_id`, `activity_id`, `logged_duration`, `logged_value`, `score`, `userActivityDate`, `activity_date`) VALUES
(1, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(2, 1, 004, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(3, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(4, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(5, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(6, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(7, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(8, 1, 006, 40, 0, 6, NULL, '2025-05-02 00:00:00'),
(9, 1, 002, 50, 0, 6, NULL, '2025-05-02 00:00:00'),
(10, 1, 002, 50, 0, 6, NULL, '2025-05-02 00:00:00'),
(11, 1, 013, 0, 1, 4, NULL, '2025-05-02 00:00:00'),
(12, 1, 010, 50, 0, 6, NULL, '2025-05-02 00:00:00'),
(13, 1, 004, 0, 0, 6, NULL, '2025-05-08 00:00:00'),
(14, 1, 004, 20, 0, 6, NULL, '2025-05-09 00:00:00'),
(15, 1, 008, 20, 0, 6, NULL, '2025-05-09 00:00:00'),
(16, 1, 013, 0, 1, 4, NULL, '2025-05-09 00:00:00'),
(17, 10, 002, 25, 0, 6, NULL, '2025-05-14 13:02:33'),
(18, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:03:56'),
(19, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:02'),
(20, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:04'),
(21, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:04'),
(22, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:04'),
(23, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:04'),
(24, 10, 009, 0, 1, 4, NULL, '2025-05-14 13:04:05'),
(25, 1, 007, 40, 0, 6, NULL, '2025-05-14 13:06:43'),
(26, 1, 007, 40, 0, 6, NULL, '2025-05-14 13:06:52'),
(27, 8, 004, 12, 0, 6, NULL, '2025-05-16 08:05:14'),
(28, 8, 004, 12, 0, 6, NULL, '2025-05-16 08:05:17'),
(29, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:05:57'),
(30, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:05:59'),
(31, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:06:01'),
(32, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:06:07'),
(33, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:06:08'),
(34, 8, 024, 2, 0, 6, NULL, '2025-05-16 08:06:09'),
(35, 1, 028, 0, 1, 4, NULL, '2025-05-17 05:19:10'),
(36, 1, 007, 20, 0, 6, NULL, '2025-05-19 13:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goal_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `layout_settings`
--
ALTER TABLE `layout_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `layout_key` (`layout_key`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `layout_settings`
--
ALTER TABLE `layout_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `goals_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD CONSTRAINT `user_activities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_activities_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
