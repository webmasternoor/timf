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
CREATE DATABASE IF NOT EXISTS `timf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `timf`;

-- Dumping structure for table timf.userstimfs
CREATE TABLE IF NOT EXISTS `userstimfs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `UserstimfyName` varchar(500) DEFAULT NULL,
  `UserstimfyCode` varchar(500) DEFAULT NULL,
  `employee_id` varchar(500) DEFAULT NULL,
  `employee_code` varchar(500) DEFAULT NULL,
  `employee_firstname` varchar(500) DEFAULT NULL,
  `employee_lastname` varchar(500) DEFAULT NULL,
  `ZoneID` int(11) DEFAULT NULL,
  `AreaID` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone1` varchar(500) DEFAULT NULL,
  `phone2` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `altemail` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `birthdate` varchar(500) DEFAULT NULL,
  `joiningdate` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `releasedate` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `password12` varchar(500) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `photo` text,
  `org_id` varchar(500) DEFAULT NULL,
  `IsActiveDate` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.userstimfs: ~3 rows (approximately)
DELETE FROM `userstimfs`;
/*!40000 ALTER TABLE `userstimfs` DISABLE KEYS */;
INSERT INTO `userstimfs` (`id`, `name`, `UserstimfyName`, `UserstimfyCode`, `employee_id`, `employee_code`, `employee_firstname`, `employee_lastname`, `ZoneID`, `AreaID`, `office_id`, `designation`, `address`, `phone1`, `phone2`, `email`, `altemail`, `gender`, `birthdate`, `joiningdate`, `status`, `releasedate`, `username`, `password12`, `comment`, `photo`, `org_id`, `IsActiveDate`, `created_at`, `updated_at`) VALUES
	(2, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2017-01-25 06:56:22', '2017-01-25 06:56:22'),
	(3, NULL, NULL, NULL, '1', '1', '1', '1', 1, 11, 1, '3', 'etgjyukul', '23', '23', '2df@dg.com', 'we@ghbfgi.com', '1', 'gdfsg', 'dfgds', 'sfdg', 'sdg', 'dg', '12345', 'sdgfdh', 'fgfgh', '1', '1', '2017-02-02 05:42:47', '2017-02-02 05:42:47'),
	(6, NULL, NULL, NULL, '12', '23', '324', '345', 1, 11, 1, '1', '234', '3', '33', 'webmaster.noor@gmail.com', 'we@ghbfgi.com', '1', '123', '123', '23', '123', '12', '1', '1', 'micro1.jpg', '1', '1', '2017-02-02 06:08:52', '2017-02-02 06:08:52');
/*!40000 ALTER TABLE `userstimfs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
