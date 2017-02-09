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

-- Dumping structure for table timf.zones
DROP TABLE IF EXISTS `zones`;
CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ZoneName` varchar(500) DEFAULT NULL,
  `ZoneEmail` varchar(500) DEFAULT NULL,
  `ZoneCode` varchar(500) DEFAULT NULL,
  `ZoneAddress` varchar(500) DEFAULT NULL,
  `ZoneMobileNo` varchar(500) DEFAULT NULL,
  `ZoneThanaId` int(11) DEFAULT NULL,
  `ZoneDistrictId` int(11) DEFAULT NULL,
  `ZoneUnionId` int(11) DEFAULT NULL,
  `ZonePostOfficeId` int(11) DEFAULT NULL,
  `ZoneWardId` int(11) DEFAULT NULL,
  `ZoneDivisionId` int(11) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.zones: ~5 rows (approximately)
DELETE FROM `zones`;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
INSERT INTO `zones` (`id`, `name`, `ZoneName`, `ZoneEmail`, `ZoneCode`, `ZoneAddress`, `ZoneMobileNo`, `ZoneThanaId`, `ZoneDistrictId`, `ZoneUnionId`, `ZonePostOfficeId`, `ZoneWardId`, `ZoneDivisionId`, `unitprice`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Dhaka', 'dhaka@gmail.com', '1001', 'gmnhjkmh', 'we454657', 1, 17, 3, 0, NULL, 1, 0.00, '2017-01-24 06:22:47', '2017-02-01 09:59:15'),
	(2, NULL, 'Rajshahi', 'rajshahi@fdgdfgj.cfg', '1002', 'gfhgf', '23546', 16, 1, 15, 5, NULL, 1, 0.00, '2017-02-01 09:58:50', '2017-02-01 09:58:50'),
	(3, NULL, 'Bogra', 'bogra@gmail.com', '1003', '3', '4', 1, 1, 3, 5, NULL, 1, 0.00, '2017-02-02 03:43:44', '2017-02-02 03:43:44'),
	(4, NULL, 'Pabna', 'pabna@gmail.com', '1004', '3', '4', 1, 1, 3, 5, NULL, 1, 0.00, '2017-02-02 03:47:45', '2017-02-02 03:47:45'),
	(5, NULL, 'Rongpur', 'rongpur@gmail.com', '1005', '3', '4', 1, 1, 3, 5, 1, 1, 0.00, '2017-02-02 03:50:48', '2017-02-02 03:50:48');
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
