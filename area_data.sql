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

-- Dumping structure for table timf.areas
DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `AreaName` varchar(500) DEFAULT NULL,
  `AreaCode` varchar(500) DEFAULT NULL,
  `AreaAddress` varchar(500) DEFAULT NULL,
  `AreaMobileNo` varchar(500) DEFAULT NULL,
  `AreaEmail` varchar(500) DEFAULT NULL,
  `ZoneId` varchar(500) DEFAULT NULL,
  `AreaDistrictId` int(11) DEFAULT NULL,
  `AreaUnionId` int(11) DEFAULT NULL,
  `AreaDivisionId` int(11) DEFAULT NULL,
  `AreaWardId` int(11) DEFAULT NULL,
  `AreaPostOfficeId` int(11) DEFAULT NULL,
  `AreaThanaId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.areas: ~8 rows (approximately)
DELETE FROM `areas`;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id`, `name`, `AreaName`, `AreaCode`, `AreaAddress`, `AreaMobileNo`, `AreaEmail`, `ZoneId`, `AreaDistrictId`, `AreaUnionId`, `AreaDivisionId`, `AreaWardId`, `AreaPostOfficeId`, `AreaThanaId`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Hemayetpur', '2001', 'aa', '3', 'hsd@gmail.com', '1', 1, 3, 1, 1, 5, 1, '2017-02-02 04:08:07', '2017-02-02 04:08:07'),
	(2, NULL, 'Savar', '2002', '45', NULL, 'hsd@gmail.com', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 'Bagmara', '2003', 'fgf', NULL, 'hsd@gmail.com', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, NULL, 'Thengamara', '2004', 'dfgdg', '453', 'hsd@gmail.com', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, NULL, 'sujanogor', '2005', 'dfgfd', '4546', 'hsd@gmail.com', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, NULL, 'rongpur', '2006', 'sedr', '5465', 'hsd@gmail.com', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, NULL, 'Bagha', '2007', 'dfgdfgf', '4564646', 'hsd@gmail.com', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, NULL, 'Vangura', '2008', 'dfdfg', '4546546', 'hsd@gmail.com', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
