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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ProductCode` varchar(500) DEFAULT NULL,
  `ProductName` varchar(500) DEFAULT NULL,
  `ProductNameEng` varchar(500) DEFAULT NULL,
  `ProductNameBanglaShort` varchar(500) DEFAULT NULL,
  `ProductNameBanglaFull` varchar(500) DEFAULT NULL,
  `ProductType` varchar(500) DEFAULT NULL,
  `ServiceChargeRate` varchar(500) DEFAULT NULL,
  `Duration` varchar(500) DEFAULT NULL,
  `MainProductName` varchar(500) DEFAULT NULL,
  `MainItemName` varchar(500) DEFAULT NULL,
  `LoanInstallation` varchar(500) DEFAULT NULL,
  `InstallationServiceCharge` varchar(500) DEFAULT NULL,
  `SavingInstallment` varchar(500) DEFAULT NULL,
  `MinimumLimit` varchar(500) DEFAULT NULL,
  `MaximumLimit` varchar(500) DEFAULT NULL,
  `ServiceChargeCalculationMethod` varchar(500) DEFAULT NULL,
  `PaymentFrequency` varchar(500) DEFAULT NULL,
  `InsuranceItemCode` varchar(500) DEFAULT NULL,
  `InsuranceItemRate` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ProductCode`, `ProductName`, `ProductNameEng`, `ProductNameBanglaShort`, `ProductNameBanglaFull`, `ProductType`, `ServiceChargeRate`, `Duration`, `MainProductName`, `MainItemName`, `LoanInstallation`, `InstallationServiceCharge`, `SavingInstallment`, `MinimumLimit`, `MaximumLimit`, `ServiceChargeCalculationMethod`, `PaymentFrequency`, `InsuranceItemCode`, `InsuranceItemRate`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fghf', 'sadfgdg', 'sdfgsg', 'sdgfdg', 'asfdg', 'sdfg', 'sdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'xcvbcn', 'xcbcv', 'b n', 'xcbcv', 'xcbncv', 'xcbxcvn', '456', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-01-11 10:08:49', '2017-01-11 10:08:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `idx_name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
