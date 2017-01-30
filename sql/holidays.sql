-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 11:59 AM
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
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `OfficeId` int(11) NOT NULL DEFAULT '0',
  `SamityID_CenterID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(500) DEFAULT NULL,
  `HolidayyName` varchar(500) DEFAULT NULL,
  `HolidayType` varchar(500) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `OrgID` int(11) DEFAULT NULL,
  `IsActive` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `OfficeId`, `SamityID_CenterID`, `name`, `HolidayyName`, `HolidayType`, `Description`, `OrgID`, `IsActive`, `created_at`, `updated_at`) VALUES
(1, 123, 8, NULL, 'fgdsdfgh', '7', 'jkl;', 678, 0, '2017-01-22 04:05:06', '2017-01-22 10:22:48'),
(2, 12, 45, NULL, 'dsgfhg', 'ers', 'safdsf', 458, 1, '2017-01-22 10:22:14', '2017-01-22 10:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
