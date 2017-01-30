-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 11:58 AM
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
-- Table structure for table `zone1s`
--

CREATE TABLE `zone1s` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `OfficeId` int(11) DEFAULT NULL,
  `Zone1Name` varchar(500) DEFAULT NULL,
  `SomitiName` varchar(500) DEFAULT NULL,
  `SamitiOpenDate` datetime DEFAULT NULL,
  `SamitiEndDate` datetime DEFAULT NULL,
  `BranchId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone1s`
--

INSERT INTO `zone1s` (`id`, `name`, `OfficeId`, `Zone1Name`, `SomitiName`, `SamitiOpenDate`, `SamitiEndDate`, `BranchId`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, NULL, '12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2017-01-23 08:41:51', '2017-01-23 10:27:05'),
(12, NULL, NULL, NULL, 'ryfttyu', '0000-00-00 00:00:00', NULL, 3, '2017-01-23 09:48:19', '2017-01-23 09:50:10'),
(13, NULL, 232, NULL, '24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '2017-01-23 10:26:01', '2017-01-23 10:26:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zone1s`
--
ALTER TABLE `zone1s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zone1s`
--
ALTER TABLE `zone1s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
