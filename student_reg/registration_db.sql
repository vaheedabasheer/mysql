-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2025 at 08:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `f_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`f_id`, `file`) VALUES
(1, '1901443782.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `user_name`, `password`, `type`, `id`) VALUES
(1, 'fareedaalikk', 'fareedakklbh', 'admin', 1),
(2, 'arun', 'arunmk', 'admin', 2),
(3, 'vaheeda koodathamkandi', 'njhki', 'admin', 3),
(4, 'anu', 'mjklo', 'admin', 4),
(5, 'mayaa', 'njiuy', 'admin', 5),
(6, 'manusha', 'jkilsha', 'admin', 6),
(7, 'anupama', 'anuanupama', 'admin', 7),
(8, 'ananya', 'ananyamk', 'admin', 8),
(9, 'savad', 'savadse', 'admin', 9),
(12, 'fareeda', 'dssssv', 'admin', 3),
(13, 'anas', 'dfsdvf', 'admin', 4),
(15, 'anwar', 'ujiugg', 'admin', 6),
(16, 'anju', 'abnhjh', 'admin', 7),
(17, 'amjad', 'ahghgfg', 'admin', 8),
(18, 'fathima', 'sghgdfg', 'admin', 9),
(19, 'ravi', 'hdghjedg', 'admin', 10),
(26, 'a', 'aaa', 'admin', 1),
(27, 'b', 'jjuh', 'admin', 2),
(28, 'c', 'ddd', 'admin', 3),
(29, 'd', 'ffff', 'admin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `m_id` int(11) NOT NULL,
  `maths` int(100) NOT NULL,
  `physics` int(100) NOT NULL,
  `chemistry` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`m_id`, `maths`, `physics`, `chemistry`, `id`) VALUES
(1, 10, 20, 30, 2),
(8, 98, 87, 89, 4),
(10, 99, 76, 90, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stureg_tb`
--

CREATE TABLE `stureg_tb` (
  `Name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stureg_tb`
--

INSERT INTO `stureg_tb` (`Name`, `id`, `dob`, `gender`, `email`, `phone_no`, `district`) VALUES
('lm', 2, '2025-01-04', 'male', 'b@gmail.com', '4532456787', 'thrissur'),
('a', 3, '2024-11-23', 'female', 'c@gmail.com', '8765432345', 'kozhikode'),
('djm', 4, '2024-10-19', 'male', 'd@gmail.com', '9087678909', 'wayanadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_id` (`user_name`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `stureg_tb`
--
ALTER TABLE `stureg_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stureg_tb`
--
ALTER TABLE `stureg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
