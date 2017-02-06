-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 06:05 AM
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
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `DistrictName` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `unitprice` varchar(500) DEFAULT NULL,
  `DivisionId` varchar(500) DEFAULT NULL,
  `DistrictNameBangla` varchar(500) DEFAULT NULL,
  `Latitude` decimal(10,2) DEFAULT '0.00',
  `Longitude` decimal(10,2) DEFAULT '0.00',
  `Website` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `DistrictName`, `name`, `unitprice`, `DivisionId`, `DistrictNameBangla`, `Latitude`, `Longitude`, `Website`, `created_at`, `updated_at`) VALUES
(2, 'Nilfamari', NULL, NULL, '2', 'নীলফামারি', '0.00', '0.00', '0.00', '2017-01-10 11:01:43', '2017-01-10 11:01:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `districts` ADD FULLTEXT KEY `idx_name` (`DistrictName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
