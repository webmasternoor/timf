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


-- Dumping structure for table timf.members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `AccommodationLength` varchar(500) DEFAULT NULL,
  `BusinessName` varchar(500) DEFAULT NULL,
  `BusinessNature` varchar(500) DEFAULT NULL,
  `BusinessExperience` varchar(500) DEFAULT NULL,
  `BusinessCenterAddress` varchar(500) DEFAULT NULL,
  `BusinessStartDate` varchar(500) DEFAULT NULL,
  `Accommodation` varchar(500) DEFAULT NULL,
  `AccommodationWidth` varchar(500) DEFAULT NULL,
  `BusinessPlaceStatus` varchar(500) DEFAULT NULL,
  `Direction` varchar(500) DEFAULT NULL,
  `TradeLicenceNo` varchar(500) DEFAULT NULL,
  `LicenceIssuingAuthority` varchar(500) DEFAULT NULL,
  `InvestedCapital` varchar(500) DEFAULT NULL,
  `MonthlyAvarageSale` varchar(500) DEFAULT NULL,
  `BankContribution` varchar(500) DEFAULT NULL,
  `NgoContribution` varchar(500) DEFAULT NULL,
  `SelfContribution` varchar(500) DEFAULT NULL,
  `BorrowMoney` varchar(500) DEFAULT NULL,
  `MonthlyEarningFromBusiness` varchar(500) DEFAULT NULL,
  `MonthlyExpenditureFromBusiness` varchar(500) DEFAULT NULL,
  `SurplusMoney` varchar(500) DEFAULT NULL,
  `IncomeFromOthersSources` varchar(500) DEFAULT NULL,
  `OtherSources` varchar(500) DEFAULT NULL,
  `MonthlyExpenditureFromOtherSources` varchar(500) DEFAULT NULL,
  `MonthlySurplus` varchar(500) DEFAULT NULL,
  `MonthlyTotalSurplus` varchar(500) DEFAULT NULL,
  `BusinessType` varchar(500) DEFAULT NULL,
  `OwnershipType` varchar(500) DEFAULT NULL,
  `FirstHalfStart` varchar(500) DEFAULT NULL,
  `FirstHalfEnd` varchar(500) DEFAULT NULL,
  `SecondHalfStart` varchar(500) DEFAULT NULL,
  `SecondHalfEnd` varchar(500) DEFAULT NULL,
  `TotalTime` varchar(500) DEFAULT NULL,
  `OrgOPeningTime` varchar(500) DEFAULT NULL,
  `OrgClosingTime` varchar(500) DEFAULT NULL,
  `ClosingIntervalStart` varchar(500) DEFAULT NULL,
  `ClosingIntervalClose` varchar(500) DEFAULT NULL,
  `WeekEnd` varchar(500) DEFAULT NULL,
  `OrgPermanentEmployee` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.members: ~8 rows (approximately)
DELETE FROM `members`;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `name`, `AccommodationLength`, `BusinessName`, `BusinessNature`, `BusinessExperience`, `BusinessCenterAddress`, `BusinessStartDate`, `Accommodation`, `AccommodationWidth`, `BusinessPlaceStatus`, `Direction`, `TradeLicenceNo`, `LicenceIssuingAuthority`, `InvestedCapital`, `MonthlyAvarageSale`, `BankContribution`, `NgoContribution`, `SelfContribution`, `BorrowMoney`, `MonthlyEarningFromBusiness`, `MonthlyExpenditureFromBusiness`, `SurplusMoney`, `IncomeFromOthersSources`, `OtherSources`, `MonthlyExpenditureFromOtherSources`, `MonthlySurplus`, `MonthlyTotalSurplus`, `BusinessType`, `OwnershipType`, `FirstHalfStart`, `FirstHalfEnd`, `SecondHalfStart`, `SecondHalfEnd`, `TotalTime`, `OrgOPeningTime`, `OrgClosingTime`, `ClosingIntervalStart`, `ClosingIntervalClose`, `WeekEnd`, `OrgPermanentEmployee`, `created_at`, `updated_at`) VALUES
	(11, NULL, '4', '1', '1', '1', '1', '2017-01-12', '1', '4', '1', '1', '4', '1', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '1', '4', '4', '4', '1', '1', '16:59', '12:59', '12:59', '12:59', '12:59', '12:58', '12:59', '12:59', '12:59', '1', '1212', '2017-01-22 06:50:54', '2017-01-22 06:50:54');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
