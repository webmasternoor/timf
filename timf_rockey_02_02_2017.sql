CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `GenderName` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table timf.genders: ~0 rows (approximately)
DELETE FROM `genders`;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` (`id`, `name`, `GenderName`, `created_at`, `updated_at`) VALUES
 (1, NULL, 'Male', NULL, NULL),
 (2, NULL, 'Female', NULL, NULL),
 (3, NULL, 'Others', NULL, NULL);