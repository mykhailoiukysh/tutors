-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 03:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutors`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_18_042739_create_general_settings_table', 1),
(5, '2020_04_19_050847_create_pages_table', 1),
(6, '2020_08_01_060633_create_subjects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languageMedium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `type`, `subjectTitle`, `languageMedium`, `subjectCode`, `url`, `created_at`, `updated_at`) VALUES
(1, 'O-Level', 'English Language', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/1128_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(2, 'O-Level', 'History', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/2174_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(3, 'O-Level', 'Geography', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/2236_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(4, 'O-Level', 'Hindi', 'Hindi', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3194_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(5, 'O-Level', 'Urdu', 'Urdu', '3196', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3196_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(6, 'O-Level', 'Gujarati', 'Gujarati', '3199', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3199_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(7, 'O-Level', 'Panjabi', 'Panjabi', '3203', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3203_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(8, 'O-Level', 'Bengali', 'Bengali', '3215', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3215_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(9, 'O-Level', 'Additional Mathematics', 'English', '4047', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/4047_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(10, 'O-Level', 'Mathematics', 'English', '4048', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/4048_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(11, 'O-Level', 'Science (Physics, Chemistry)', 'English', '5076', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5076_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(12, 'O-Level', 'Science (Physics, Biology)', 'English', '5077', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5077_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(13, 'O-Level', 'Science (Chemistry, Biology)', 'English', '5078', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5078_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(14, 'O-Level', 'Physics', 'English', '6091', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6091_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(15, 'O-Level', 'Chemistry', 'English', '6092', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6092_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(16, 'O-Level', 'Biology', 'English', '6093', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6093_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(17, 'O-Level', 'Computing', 'English', '7155', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/7155_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(18, 'O-Level', 'Principles of Accounts', 'English', '7175', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/7175_y20_sy.pdf\r\n', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(19, 'A-Level', 'General Paper', 'English', '8807', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8807_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(20, 'A-Level', 'Geography', 'English', '8813', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8813_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(21, 'A-Level', 'History', 'English', '8821', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8821_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(22, 'A-Level', 'Economics', 'English', '8823', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8823_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(23, 'A-Level', 'Bengali', 'Bengali', '8827', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8827_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(24, 'A-Level', 'Gujarati', 'Gujarati', '8828', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8828_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(25, 'A-Level', 'Hindi', 'Hindi', '8829', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8829_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(26, 'A-Level', 'Panjabi', 'Panjabi', '8836', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8836_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(27, 'A-Level', 'Urdu', 'Urdu', '8837', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8837_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(28, 'A-Level', 'Mathematics', 'English', '8865', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8865_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(29, 'A-Level', 'Physics', 'English', '8867', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8867_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(30, 'A-Level', 'Chemistry', 'English', '8873', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8873_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(31, 'A-Level', 'Biology', 'English', '8876', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8876_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00'),
(32, 'A-Level', 'Computing [Revised]', 'English', '9569', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/9569_y20_sy.pdf', '2020-07-31 17:00:00', '2020-07-31 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
