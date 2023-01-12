-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) UNSIGNED NOT NULL,
  `class` varchar(50) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `admission_fee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `class`, `shift`, `section`, `admission_fee`) VALUES
(1, 'One', 'Morning', 'A', 500),
(2, 'One', 'Day', 'B', 700),
(3, 'Two', 'Morning', 'A', 800),
(4, 'Two', 'Day', 'B', 1000),
(5, 'Three', 'Morning', 'A', 1200),
(6, 'Three', 'Day', 'B', 1500),
(7, 'Four', 'Morning', 'A', 1800),
(8, 'Five', 'Morning', 'A', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-12-30-055422', 'App\\Database\\Migrations\\StudentManagement', 'default', 'App', 1672406312, 1),
(2, '2022-12-31-182128', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672511978, 2),
(3, '2023-01-02-170137', 'App\\Database\\Migrations\\Teacher', 'default', 'App', 1672679169, 3),
(4, '2023-01-03-042333', 'App\\Database\\Migrations\\Courses', 'default', 'App', 1672720087, 4),
(5, '2023-01-03-051537', 'App\\Database\\Migrations\\Staff', 'default', 'App', 1672723119, 5),
(6, '2023-01-08-040857', 'App\\Database\\Migrations\\StudentSubject', 'default', 'App', 1673159315, 6);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) UNSIGNED NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_salary` int(11) NOT NULL,
  `staff_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_name`, `staff_address`, `staff_salary`, `staff_phone`) VALUES
(1, 'Morzina', 'Mirpur', 1500, '012342554'),
(2, 'Rahima', 'Dhanmondhi', 2200, '01566777'),
(3, 'Kulsom', 'Jatrabari', 1700, '013676777'),
(4, 'Ameena', 'Badda', 1800, '01676676777');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `st_img` varchar(100) DEFAULT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_email` varchar(20) NOT NULL,
  `st_phone` int(11) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_gender` text DEFAULT NULL,
  `st_class` tinyint(2) NOT NULL,
  `st_birth` timestamp NULL DEFAULT NULL,
  `st_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `st_img`, `st_name`, `st_email`, `st_phone`, `st_address`, `st_gender`, `st_class`, `st_birth`, `st_password`) VALUES
(33, 'assests/uploads/Nurun Nahar - Talesales Executive, Express Solution LTD -.png', 'jannatul ferdaush', 'jannatul@gmail.com', 1300869499, '                                            South Kajla,Dhaka                                       ', NULL, 0, NULL, ''),
(43, 'assests/uploads/2_9.jpg', 'jannatul', 'jannasddsdt@gmail.co', 4545, '        et                                     ', 'male', 4, '2023-01-09 18:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `id` int(11) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `bangla` varchar(30) NOT NULL,
  `english` varchar(30) NOT NULL,
  `math` varchar(30) NOT NULL,
  `science` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `social_studies` varchar(30) NOT NULL,
  `computer` varchar(30) NOT NULL,
  `art` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`id`, `course_id`, `class`, `shift`, `section`, `bangla`, `english`, `math`, `science`, `religion`, `social_studies`, `computer`, `art`, `student_id`) VALUES
(1, 1, 'one', 'Morning', 'A', 'Bangla', 'english', 'math', 'science', 'religion', 'social_studies', 'computer', 'art', 0),
(2, 3, 'Two', 'Morning', 'A', 'Bangla', 'english', 'math', 'science', 'religion', '', 'computer', '', 0),
(3, 2, 'one', 'Day', 'B', 'Bangla', 'english', 'math', 'science', 'religion', 'social_studies', 'computer', '', 0),
(5, 0, '', '', '', '', 'english', 'math', '', '', '', '', '', 0),
(6, 0, '', '', '', '', 'english', 'math', '', '', '', '', '', 0),
(7, 0, '', '', '', 'Bangla', 'English', 'math', '', 'Religion', '', 'Computer', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) UNSIGNED NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_details` varchar(100) NOT NULL,
  `teacher_salary` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher_img` varchar(200) DEFAULT NULL,
  `teacher_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `teacher_details`, `teacher_salary`, `subject`, `teacher_img`, `teacher_email`) VALUES
(1, 'Jannat', 'MSS,BSS in Economics', 25000, 'Economics', NULL, ''),
(2, 'Rahima', 'MSS,BSS in History', 22000, 'History', NULL, ''),
(3, 'Nahar', 'BSS in Accounting', 15000, 'Accounting', NULL, ''),
(4, 'Aklima', 'BBA in Accounting', 20000, 'Accounting', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `user_img` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `user_img`, `created_at`) VALUES
(5, 'akter', 'farzana@gmail.com', '0123435655', '$2y$10$UY77lTs6LEPNKwseGjzIj.fkJapEyOnIil2RCW.zjbL3KgqIPpICy', '0', '2023-01-01 05:02:09'),
(6, 'jannatul ferdaush', 'admddfdin@gmail.com', '0145335655', '$2y$10$B6GxzD2m0Xn7B9/sva8aeO2PVEdBNsRYsbeba6.eFlws4Ftrwb/5K', '0', '2023-01-01 05:22:45'),
(7, 'jannatul ferdaush', 'admin@gmail.com', '0164435655', '$2y$10$a70aakZ641V9ah1gVGFoZucaG0cBB3g.Nwq7xnh7M.O56oPuwpvsi', '0', '2023-01-01 05:44:49'),
(8, 'farzana akter', 'jannatflowers3@gmail.com', '016564356', '$2y$10$RvOgBEQwEGmlhZOh8ye.zuV4DcfeXtRs0lKcZLCpWdNC5XmADDKi2', '0', '2023-01-02 02:59:06'),
(9, 'Yasir Arafat', 'yasir@gmail.com', '0123435655', '$2y$10$BPKyAXjjqeqvZXN1NTRX3OZ3FCzjZTWcVwMp1i4hPWVoTtM5fVtKG', '0', '2023-01-03 04:19:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
