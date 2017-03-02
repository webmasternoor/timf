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


-- Dumping structure for table timf.accountstables
DROP TABLE IF EXISTS `accountstables`;
CREATE TABLE IF NOT EXISTS `accountstables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` varchar(500) DEFAULT NULL,
  `accountsname` varchar(500) DEFAULT NULL,
  `productid` int(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.accountstables: ~0 rows (approximately)
DELETE FROM `accountstables`;
/*!40000 ALTER TABLE `accountstables` DISABLE KEYS */;
INSERT INTO `accountstables` (`id`, `memberid`, `accountsname`, `productid`, `created_at`, `updated_at`) VALUES
	(1, '1', '12', 1, '2017-03-02 06:54:47', '2017-03-02 06:54:47'),
	(2, '1', '', 1, '2017-03-02 06:55:20', '2017-03-02 06:55:20'),
	(3, '1', '4545', 2, '2017-03-02 06:56:11', '2017-03-02 06:56:11'),
	(4, '1', '4545', 2, '2017-03-02 06:57:24', '2017-03-02 06:57:24'),
	(5, '1', '121212', 1, '2017-03-02 06:57:34', '2017-03-02 06:57:34'),
	(6, '2006', '3434', 2, '2017-03-02 06:58:56', '2017-03-02 06:58:56'),
	(7, '1', '78', 1, '2017-03-02 07:00:08', '2017-03-02 07:00:08');
/*!40000 ALTER TABLE `accountstables` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
