-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
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
  `AccountNo` varchar(500) DEFAULT NULL,
  `Balance` float DEFAULT NULL,
  `Flag` varchar(50) DEFAULT NULL,
  `SavingAmount` float DEFAULT NULL,
  `WithdrawAmount` float DEFAULT NULL,
  `TransactionDate` datetime DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.saving1s: ~16 rows (approximately)
DELETE FROM `saving1s`;
/*!40000 ALTER TABLE `saving1s` DISABLE KEYS */;
INSERT INTO `saving1s` (`id`, `MemberId`, `ProductId`, `Remarks`, `AccountNo`, `Balance`, `Flag`, `SavingAmount`, `WithdrawAmount`, `TransactionDate`, `EntryDate`, `created_at`, `updated_at`) VALUES
	(1, '1002', '1', NULL, 'null', 500, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(2, '11', '1', NULL, '23423534', 500, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(3, '11', '2', NULL, '234235435', 500, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(4, '11', '1', NULL, '23523', 500, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(5, '11', '2', NULL, '235325', 50, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(6, '11', '2', NULL, '235235', 10, NULL, 50, NULL, NULL, NULL, '2017-03-18 07:17:37', '2017-03-18 07:17:37'),
	(7, '1001', '1', NULL, 'null', 50, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:02:30', '2017-03-18 10:02:30'),
	(8, '1002', '1', NULL, 'null', 50, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:02:30', '2017-03-18 10:02:30'),
	(9, '1001', '1', NULL, 'null', 100, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:06:16', '2017-03-18 10:06:16'),
	(10, '1002', '1', NULL, 'null', 100, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:06:16', '2017-03-18 10:06:16'),
	(11, '1001', '1', NULL, 'null', 150, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:06:21', '2017-03-18 10:06:21'),
	(12, '1002', '1', NULL, 'null', 150, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:06:21', '2017-03-18 10:06:21'),
	(13, '1001', '1', NULL, 'null', 160, NULL, 10, NULL, NULL, NULL, '2017-03-18 10:06:53', '2017-03-18 10:06:53'),
	(14, '1002', '1', NULL, 'null', 200, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:06:53', '2017-03-18 10:06:53'),
	(15, '1001', '1', NULL, 'null', 210, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:15:14', '2017-03-18 10:15:14'),
	(16, '1002', '1', NULL, 'null', 250, NULL, 50, NULL, NULL, NULL, '2017-03-18 10:15:14', '2017-03-18 10:15:14');
/*!40000 ALTER TABLE `saving1s` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
