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

-- Dumping structure for table timf.brns
DROP TABLE IF EXISTS `brns`;
CREATE TABLE IF NOT EXISTS `brns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ZoneId` int(11) DEFAULT NULL,
  `AreaId` int(11) DEFAULT NULL,
  `BranchName` varchar(500) DEFAULT NULL,
  `BranchCode` varchar(500) DEFAULT NULL,
  `BranchAddress` varchar(500) DEFAULT NULL,
  `BranchMobileNo` varchar(500) DEFAULT NULL,
  `BranchEmail` varchar(500) DEFAULT NULL,
  `BranchThanaId` int(11) DEFAULT NULL,
  `BranchDistrictId` int(11) DEFAULT NULL,
  `BranchDivisionId` int(11) DEFAULT NULL,
  `BranchUnionId` int(11) DEFAULT NULL,
  `BranchWardId` int(11) DEFAULT NULL,
  `BranchPostOfficeId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.brns: ~3 rows (approximately)
DELETE FROM `brns`;
/*!40000 ALTER TABLE `brns` DISABLE KEYS */;
INSERT INTO `brns` (`id`, `name`, `ZoneId`, `AreaId`, `BranchName`, `BranchCode`, `BranchAddress`, `BranchMobileNo`, `BranchEmail`, `BranchThanaId`, `BranchDistrictId`, `BranchDivisionId`, `BranchUnionId`, `BranchWardId`, `BranchPostOfficeId`, `created_at`, `updated_at`) VALUES
	(1, NULL, 4, 5, 'Dublia', '3001', 'sa', '1', '1@gmail.com', 1, 1, 1, 3, 1, 5, '2017-02-02 04:16:13', '2017-02-02 04:16:13'),
	(2, NULL, 4, 5, 'Koladi', '3002', 'dfgdg', '123', '1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 4, 5, 'Satbaria', '3002', 'dfdg', '12324', '1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `brns` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
