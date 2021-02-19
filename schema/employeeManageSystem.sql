-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 08:53 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeemanagesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentinfo`
--

CREATE TABLE `commentinfo` (
  `id` int(11) NOT NULL,
  `emp_comment` text NOT NULL,
  `emp_id` int(11) NOT NULL,
  `status` enum('High','Low','Middle') NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentinfo`
--

INSERT INTO `commentinfo` (`id`, `emp_comment`, `emp_id`, `status`, `user_id`) VALUES
(1, 'Hi ', 5, 'Middle', 1),
(2, 'Salam ', 6, 'High', 2),
(3, 'ای یک کامنت است', 6, '', 0),
(4, 'lksdjflkj', 7, '', 0),
(5, 'برای امتحان اتس', 8, '', 1),
(6, 'SKJDFLKSJDFK', 9, '', 0),
(7, 'این یک متن ساده است', 10, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dname` varchar(95) NOT NULL,
  `Dstart_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`, `Dstart_up`, `user_id`) VALUES
(1, 'دیتابس', '2020-09-26 13:45:34', 1),
(2, 'نتورک', '2020-09-26 13:45:48', 1),
(3, 'بازاریابی', '2020-09-26 13:46:16', 1),
(5, 'آشپزی', '2020-09-26 13:46:32', 1),
(9, 'software', '2020-09-27 04:42:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_hired_date` date DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `dp_id` int(11) DEFAULT NULL,
  `emp_status` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `cv_file_url` varchar(350) COLLATE utf8_persian_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `photo`, `email`, `phone`, `emp_hired_date`, `DOB`, `Address`, `dp_id`, `emp_status`, `cv_file_url`, `user_id`) VALUES
(7, 'slkdjf', 'lksjdlkfj', '../upload/users/5/5_file.png', 'lksdjflk@gmail.com', '30300303', NULL, '2021-01-01', 'lksdjflk', NULL, 'pending', '../upload/cv/5/5_file.png', NULL),
(3, 'فهیمه', 'فرزادی', '۰۳۰۳۰۰۳', 'test@gmail.com', '۰۳۰۳۰۰۳', NULL, '2020-01-01', 'کابل', 1, 'Approved', '0', NULL),
(4, 'خالد', 'نصرت', '../upload/users/6/6_file.png', 'test@gmail.com', '۰۷۹۹۸۸۷۷۶۶', NULL, '2021-01-02', 'برای امتان است', 1, 'Approved', '../upload/cv/6/6_file.png', NULL),
(5, 'احمد ', 'کرییمی', '../upload/users/5/5_file.png', 'karim@gmail.omc', '0303030', NULL, '2020-01-01', 'skdjflksdjflk', 2, 'rejected', '../upload/cv/5/5_file.png', NULL),
(6, 'فرهاد', 'شاه زی', '../upload/users/4/4_file.png', 'test@gmial.com', '003993939', NULL, '2020-01-01', 'هرات', NULL, 'pending', '../upload/cv/4/4_file.png', NULL),
(8, 'فروه', 'فیضی', '../upload/users/6/6_file.png', 'TEST@GMAIL.COM', '07998877', NULL, '2020-01-01', 'به هرات زنگی میکند', NULL, 'pending', '../upload/cv/6/6_file.pdf', NULL),
(9, 'مرتضی', 'محمدی', '../upload/users/7/7_file.png', 'LSKDJF@GMAIL.COM', '9943859', NULL, '2021-01-01', 'هرات', NULL, 'pending', '../upload/cv/7/7_file.png', NULL),
(10, 'سارا', 'احمدی', '../upload/users/8/8_file.png', 'sara@gmail.com', '0778002608', NULL, '2020-09-09', 'هرات', NULL, 'pending', '../upload/cv/default.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp_qualification`
--

CREATE TABLE `emp_qualification` (
  `id` int(11) NOT NULL,
  `date_acheived` varchar(30) NOT NULL,
  `date_expired` varchar(30) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `qual_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_qualification`
--

INSERT INTO `emp_qualification` (`id`, `date_acheived`, `date_expired`, `emp_id`, `qual_id`, `user_id`) VALUES
(1, '2020-09-25', '2020-09-08', 3, 2, 1),
(2, '2020-01-01', '2020-01-01', 4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `qual_amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `name`, `description`, `qual_amount`, `user_id`) VALUES
(2, 'احمد', 'برای امتحان است', 13, 1),
(3, 'ریاست', 'برای امتحان است', 13, 1),
(4, 'ریاست اول ادیت', 'برای  ادیت ادیت', 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL DEFAULT 'admin',
  `type` enum('Admin','SuperAdmin') NOT NULL,
  `select` int(1) NOT NULL DEFAULT '0',
  `insert` int(1) NOT NULL DEFAULT '0',
  `delete` int(1) NOT NULL DEFAULT '0',
  `updata` int(1) NOT NULL DEFAULT '0',
  `photo` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `email`, `phone`, `username`, `password`, `type`, `select`, `insert`, `delete`, `updata`, `photo`) VALUES
(1, 'Riyhana', 'Admin', 'Riyhana@gmail.com', '07998877', 'Admin', '12345', 'SuperAdmin', 1, 1, 1, 1, '../upload/admin/1/1.png'),
(2, 'نسرین', 'حیدری', 'Nasrin@gmail.com', '0799887766', 'Haidari', 'admin', 'Admin', 1, 1, 0, 1, '../upload/admin/2/admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentinfo`
--
ALTER TABLE `commentinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_qualification`
--
ALTER TABLE `emp_qualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `qual_id` (`qual_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentinfo`
--
ALTER TABLE `commentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `emp_qualification`
--
ALTER TABLE `emp_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_qualification`
--
ALTER TABLE `emp_qualification`
  ADD CONSTRAINT `emp_qualification_ibfk_2` FOREIGN KEY (`qual_id`) REFERENCES `qualification` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_qualification_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
