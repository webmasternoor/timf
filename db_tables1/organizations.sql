-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 11:51 AM
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
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `OrganizationCode` varchar(500) DEFAULT NULL,
  `OrganizationName` varchar(500) DEFAULT NULL,
  `OrganizationAddress` varchar(500) DEFAULT NULL,
  `YearEndingDate` varchar(500) DEFAULT NULL,
  `CashBook` varchar(500) DEFAULT NULL,
  `PLAccount` varchar(500) DEFAULT NULL,
  `BankAccount` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(500) DEFAULT NULL,
  `MobileNumber` varchar(500) DEFAULT NULL,
  `EmailId` varchar(500) DEFAULT NULL,
  `StartWorkingDay` varchar(500) DEFAULT NULL,
  `WorkType` varchar(500) DEFAULT NULL,
  `LicenceNo` varchar(500) DEFAULT NULL,
  `LicenceStartDate` varchar(500) DEFAULT NULL,
  `LicenceValidityEndingDate` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `OrganizationCode`, `OrganizationName`, `OrganizationAddress`, `YearEndingDate`, `CashBook`, `PLAccount`, `BankAccount`, `PhoneNumber`, `MobileNumber`, `EmailId`, `StartWorkingDay`, `WorkType`, `LicenceNo`, `LicenceStartDate`, `LicenceValidityEndingDate`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'dskjfbhs', 'ZDSgvdfh', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '2017-01-11 09:55:57', '2017-01-11 09:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `organizations` ADD FULLTEXT KEY `idx_name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
