-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5144
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for timf
DROP DATABASE IF EXISTS `timf`;
CREATE DATABASE IF NOT EXISTS `timf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `timf`;

-- Dumping structure for table timf.saving1s
DROP TABLE IF EXISTS `saving1s`;
CREATE TABLE IF NOT EXISTS `saving1s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MemberId` varchar(500) DEFAULT NULL,
  `ProductId` varchar(500) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `Balance` float DEFAULT NULL,
  `Flag` varchar(50) DEFAULT NULL,
  `SavingAmount` float DEFAULT NULL,
  `WithdrawAmount` float DEFAULT NULL,
  `TransactionDate` datetime DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.saving1s: ~1 rows (approximately)
DELETE FROM `saving1s`;
/*!40000 ALTER TABLE `saving1s` DISABLE KEYS */;
INSERT INTO `saving1s` (`id`, `MemberId`, `ProductId`, `Remarks`, `Balance`, `Flag`, `SavingAmount`, `WithdrawAmount`, `TransactionDate`, `EntryDate`, `created_at`, `updated_at`) VALUES
	(1, '1', NULL, NULL, 1, NULL, 100, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-02-15 11:01:44', '2017-02-15 11:01:44'),
	(2, '3', '2', 'q2e4bwtm rdj', 1, NULL, NULL, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-03-01 10:17:39', '2017-03-01 10:17:39');
/*!40000 ALTER TABLE `saving1s` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
