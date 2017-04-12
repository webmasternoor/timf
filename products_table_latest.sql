-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for timf
DROP DATABASE IF EXISTS `timf`;
CREATE DATABASE IF NOT EXISTS `timf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `timf`;


-- Dumping structure for table timf.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(50) DEFAULT NULL,
  `ProductID` varchar(50) DEFAULT NULL,
  `ProductName` varchar(500) DEFAULT NULL,
  `ProductNameEng` varchar(500) DEFAULT NULL,
  `ProductNameBanglaShort` varchar(500) DEFAULT NULL,
  `ProductNameBanglaFull` varchar(500) DEFAULT NULL,
  `InterestPercentage` varchar(50) DEFAULT NULL,
  `Frequency` varchar(50) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `EffectiveFrom` varchar(50) DEFAULT NULL,
  `EffectiveTo` varchar(50) DEFAULT NULL,
  `IsActive` varchar(50) DEFAULT NULL,
  `MultipleSavings` varchar(50) DEFAULT NULL,
  `WithdrawlFacily` varchar(50) DEFAULT NULL,
  `MinimumAmount` varchar(50) DEFAULT NULL,
  `MaximumAmount` varchar(50) DEFAULT NULL,
  `MinimumBalanceAmount` varchar(50) DEFAULT NULL,
  `MinimumBalanceAmountPercentage` varchar(50) DEFAULT NULL,
  `MaxDueCycle` varchar(50) DEFAULT NULL,
  `PassBookAvailability` varchar(50) DEFAULT NULL,
  `SpecialWithdrawFacility` varchar(50) DEFAULT NULL,
  `InvestmentAgainstSavings` varchar(50) DEFAULT NULL,
  `PercentageofInvestmentAgainstSavings` varchar(50) DEFAULT NULL,
  `AutomaticSchemeRenewal` varchar(50) DEFAULT NULL,
  `DividedbyValue` varchar(50) DEFAULT NULL,
  `MaxWithdrawTimeforAvoidingPenaltyPerMonth` varchar(50) DEFAULT NULL,
  `MaxWithdrawLimitPerMonth` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.products: ~7 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `ProductCode`, `ProductID`, `ProductName`, `ProductNameEng`, `ProductNameBanglaShort`, `ProductNameBanglaFull`, `InterestPercentage`, `Frequency`, `Duration`, `EffectiveFrom`, `EffectiveTo`, `IsActive`, `MultipleSavings`, `WithdrawlFacily`, `MinimumAmount`, `MaximumAmount`, `MinimumBalanceAmount`, `MinimumBalanceAmountPercentage`, `MaxDueCycle`, `PassBookAvailability`, `SpecialWithdrawFacility`, `InvestmentAgainstSavings`, `PercentageofInvestmentAgainstSavings`, `AutomaticSchemeRenewal`, `DividedbyValue`, `MaxWithdrawTimeforAvoidingPenaltyPerMonth`, `MaxWithdrawLimitPerMonth`, `name`, `created_at`, `updated_at`) VALUES
	(1, '001', 'MGSMM', 'Mudaraba Genaral Saving ME Monthly', 'Mudaraba Genaral Saving ME Monthly', 'এম জি এসএমএম', 'মুদারাবা সাধারন সঞ্চয় ME মাসিক', '7', '2', '7', '', '', '1', '1', '1', '500', '50000', '299', '500', '4', '1', '1', '90000', '90', '1', '1000', '1', '50000', NULL, '2017-04-02 07:16:33', '2017-04-11 05:30:05'),
	(2, '002', 'MGSW', 'Mudaraba Genaral Saving Weekly', 'Mudaraba Genaral Saving Weekly', 'এম জি এসডব্লিউ', 'মুদারাবা সাপ্তাহিক সাধারন সঞ্চয়', '', '1', '', '', '', '1', '1', '2', '', '', '', '', '', '1', '', '', '', '', '', '', '', NULL, '2017-04-08 09:26:14', '2017-04-11 05:31:13'),
	(3, '003', 'MGSM', 'Mudaraba Genaral Saving Monthly', 'Mudaraba Genaral Saving Monthly', 'এমজিএসএম', 'Mudaraba Genaral Saving Monthly', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-08 09:32:09', '2017-04-11 05:34:13'),
	(4, '004', 'MSSMM', 'Mudaraba Special Saving ME Monthly', 'Mudaraba Special Saving ME Monthly', 'Mudaraba Special Saving ME Monthly', 'Mudaraba Special Saving ME Monthly', '-4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-08 09:33:10', '2017-04-08 09:33:10'),
	(5, '005', 'MSSW', 'Mudaraba Special Saving Weekly', 'Mudaraba Special Saving Weekly', 'Mudaraba Special Saving Weekly', 'Mudaraba Special Saving Weekly', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-08 09:34:21', '2017-04-08 09:34:21'),
	(6, '006', 'MSSM', 'Mudaraba Special Saving Monthly', 'Mudaraba Special Saving Monthly', 'Mudaraba Special Saving Genaral Member Monthly', 'Mudaraba Special Saving Genaral Member Monthly', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-08 09:35:18', '2017-04-08 09:35:18'),
	(7, '007', 'MTSS', 'Mudaraba TSS', 'Mudaraba TSS', 'Mudaraba TSS', 'Mudaraba TSS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-10 10:02:11', '2017-04-10 10:02:11'),
	(8, '008', 'MFD', 'Mudaraba Fixed Deposit', 'Mudaraba Fixed Deposit', 'Mudaraba Fixed Deposit', 'Mudaraba Fixed Deposit', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2017-04-10 10:02:42', '2017-04-10 10:02:42');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
