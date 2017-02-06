-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 11:52 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timf`
--

-- --------------------------------------------------------

--
-- Table structure for table `graces`
--

CREATE TABLE `graces` (
  `id` int(11) NOT NULL,
  `GraceId` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `SomitiName` varchar(500) DEFAULT NULL,
  `MemberName` varchar(500) DEFAULT NULL,
  `GraceStartTime` varchar(500) DEFAULT NULL,
  `GraceEndDate` varchar(500) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graces`
--

INSERT INTO `graces` (`id`, `GraceId`, `name`, `SomitiName`, `MemberName`, `GraceStartTime`, `GraceEndDate`, `Description`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'চামেলি', 'জিয়া', '4', '5', '6', NULL, '2017-01-11 10:31:23'),
(2, '7', NULL, '6', 'নুর ই আলম খান', '২৩৪', '4', '3', '2017-01-08 10:38:07', '2017-01-11 10:31:45'),
(3, '9', NULL, '8', 'রকি আহমেদ', '6', '5', '4', '2017-01-08 10:38:34', '2017-01-11 10:32:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graces`
--
ALTER TABLE `graces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graces`
--
ALTER TABLE `graces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
