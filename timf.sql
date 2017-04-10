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
CREATE DATABASE IF NOT EXISTS `timf` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `timf`;

-- Dumping structure for table timf.accommodations
DROP TABLE IF EXISTS `accommodations`;
CREATE TABLE IF NOT EXISTS `accommodations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.accommodationses
DROP TABLE IF EXISTS `accommodationses`;
CREATE TABLE IF NOT EXISTS `accommodationses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.account_status
DROP TABLE IF EXISTS `account_status`;
CREATE TABLE IF NOT EXISTS `account_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.ages
DROP TABLE IF EXISTS `ages`;
CREATE TABLE IF NOT EXISTS `ages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `age` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.appformandpassbooks
DROP TABLE IF EXISTS `appformandpassbooks`;
CREATE TABLE IF NOT EXISTS `appformandpassbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `app_form` varchar(500) DEFAULT NULL,
  `passbook` varchar(500) DEFAULT NULL,
  `share_number` int(11) DEFAULT NULL,
  `share_amount` int(11) DEFAULT NULL,
  `saving_amount` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `CompanyrajCode` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `idx_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
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
  `ZoneId` int(11) DEFAULT NULL,
  `AreaDistrictId` int(11) DEFAULT NULL,
  `AreaDivisionOfficeId` int(11) DEFAULT NULL,
  `AreaUnionId` int(11) DEFAULT NULL,
  `AreaDivisionId` int(11) DEFAULT NULL,
  `AreaWardId` int(11) DEFAULT NULL,
  `AreaPostOfficeId` int(11) DEFAULT NULL,
  `AreaThanaId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.areas_feb_1
DROP TABLE IF EXISTS `areas_feb_1`;
CREATE TABLE IF NOT EXISTS `areas_feb_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `AreaName` varchar(500) DEFAULT NULL,
  `AreaCode` varchar(500) DEFAULT NULL,
  `AreaAddress` varchar(500) DEFAULT NULL,
  `AreaMobileNo` varchar(500) DEFAULT NULL,
  `AreaEmail` varchar(500) DEFAULT NULL,
  `ZoneId` varchar(500) DEFAULT NULL,
  `AreaDistrictId` int(11) DEFAULT NULL,
  `AreaThanaId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.assets
DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `AssetDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.assets_debt_info
DROP TABLE IF EXISTS `assets_debt_info`;
CREATE TABLE IF NOT EXISTS `assets_debt_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) unsigned DEFAULT NULL,
  `loan_id` int(11) unsigned DEFAULT NULL,
  `type_id` int(11) unsigned DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.blog_post
DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.brns
DROP TABLE IF EXISTS `brns`;
CREATE TABLE IF NOT EXISTS `brns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ZoneId` int(11) DEFAULT NULL,
  `DivisionOfficeId` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.brns_feb_1
DROP TABLE IF EXISTS `brns_feb_1`;
CREATE TABLE IF NOT EXISTS `brns_feb_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `AreaId` int(11) DEFAULT NULL,
  `BranchName` varchar(500) DEFAULT NULL,
  `BranchCode` varchar(500) DEFAULT NULL,
  `BranchAddress` varchar(500) DEFAULT NULL,
  `BranchMobileNo` varchar(500) DEFAULT NULL,
  `BranchEmail` varchar(500) DEFAULT NULL,
  `BranchThanaId` int(11) DEFAULT NULL,
  `BranchDistrictId` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.businessleaders
DROP TABLE IF EXISTS `businessleaders`;
CREATE TABLE IF NOT EXISTS `businessleaders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.businesstypes
DROP TABLE IF EXISTS `businesstypes`;
CREATE TABLE IF NOT EXISTS `businesstypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.business_catagories
DROP TABLE IF EXISTS `business_catagories`;
CREATE TABLE IF NOT EXISTS `business_catagories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.business_place_statuses
DROP TABLE IF EXISTS `business_place_statuses`;
CREATE TABLE IF NOT EXISTS `business_place_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.bussinesscashinflows
DROP TABLE IF EXISTS `bussinesscashinflows`;
CREATE TABLE IF NOT EXISTS `bussinesscashinflows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ProductSaleDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.bussinesscashoutflows
DROP TABLE IF EXISTS `bussinesscashoutflows`;
CREATE TABLE IF NOT EXISTS `bussinesscashoutflows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `RowMaterialPurchageDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.cashinflows
DROP TABLE IF EXISTS `cashinflows`;
CREATE TABLE IF NOT EXISTS `cashinflows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `TotalIncomeDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.cashoutflows
DROP TABLE IF EXISTS `cashoutflows`;
CREATE TABLE IF NOT EXISTS `cashoutflows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `TotalExpenditureDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.cash_inflow
DROP TABLE IF EXISTS `cash_inflow`;
CREATE TABLE IF NOT EXISTS `cash_inflow` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.cash_outflow
DROP TABLE IF EXISTS `cash_outflow`;
CREATE TABLE IF NOT EXISTS `cash_outflow` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.configurationsavs
DROP TABLE IF EXISTS `configurationsavs`;
CREATE TABLE IF NOT EXISTS `configurationsavs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `InterestPercentage` float DEFAULT NULL,
  `EffectiveFrom` varchar(500) DEFAULT NULL,
  `EffectiveTo` varchar(500) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL,
  `MultipleSavings` int(11) DEFAULT NULL,
  `WithdrawlFacility` varchar(500) DEFAULT NULL,
  `MinAmount` float DEFAULT NULL,
  `MaxAmount` float DEFAULT NULL,
  `MinBalance` float DEFAULT NULL,
  `MaxDueCycle` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.countrs
DROP TABLE IF EXISTS `countrs`;
CREATE TABLE IF NOT EXISTS `countrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `CountryName` varchar(500) DEFAULT NULL,
  `CountryCode` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.counts
DROP TABLE IF EXISTS `counts`;
CREATE TABLE IF NOT EXISTS `counts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) DEFAULT NULL,
  `others` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.days
DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Day_Name` varchar(50) DEFAULT NULL,
  `Day_Name_English` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.directions
DROP TABLE IF EXISTS `directions`;
CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.districts
DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DistrictName` varchar(500) DEFAULT NULL,
  `DistrictNameBangla` varchar(500) DEFAULT NULL,
  `DivisionId` int(11) DEFAULT NULL,
  `Latitude` decimal(10,2) DEFAULT '0.00',
  `Longitude` decimal(10,2) DEFAULT '0.00',
  `Website` varchar(50) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.divisions
DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `DivisionName` varchar(500) DEFAULT NULL,
  `DivisionNameBangla` varchar(500) DEFAULT NULL,
  `TestImages` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.dpsapplications
DROP TABLE IF EXISTS `dpsapplications`;
CREATE TABLE IF NOT EXISTS `dpsapplications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `DpsapplicationyName` varchar(500) DEFAULT NULL,
  `DpsProductId` int(11) DEFAULT NULL,
  `DpsAmount` float DEFAULT NULL,
  `DpsDepositDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.education
DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.familytypes
DROP TABLE IF EXISTS `familytypes`;
CREATE TABLE IF NOT EXISTS `familytypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `others` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.frequencies
DROP TABLE IF EXISTS `frequencies`;
CREATE TABLE IF NOT EXISTS `frequencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.genders
DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `GenderName` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.graces
DROP TABLE IF EXISTS `graces`;
CREATE TABLE IF NOT EXISTS `graces` (
  `id` int(11) NOT NULL,
  `GraceId` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `SomitiName` varchar(500) DEFAULT NULL,
  `MemberName` varchar(500) DEFAULT NULL,
  `GraceStartTime` varchar(500) DEFAULT NULL,
  `GraceEndDate` varchar(500) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.grades
DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.holidays
DROP TABLE IF EXISTS `holidays`;
CREATE TABLE IF NOT EXISTS `holidays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `OfficeId` int(11) NOT NULL DEFAULT '0',
  `SamityID_CenterID` int(11) NOT NULL DEFAULT '0',
  `HolidayyName` varchar(500) DEFAULT NULL,
  `HolidayType` varchar(500) DEFAULT NULL,
  `Holiday_Date` date DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `OrgID` int(11) DEFAULT NULL,
  `IsActive` int(5) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.holidaytypes
DROP TABLE IF EXISTS `holidaytypes`;
CREATE TABLE IF NOT EXISTS `holidaytypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `holidaytypes` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.investments
DROP TABLE IF EXISTS `investments`;
CREATE TABLE IF NOT EXISTS `investments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `InvestmentyName` varchar(500) DEFAULT NULL,
  `TransactionEntryDate` datetime DEFAULT NULL,
  `Memberid` int(11) DEFAULT NULL,
  `SavingAmount` float DEFAULT NULL,
  `TransactionDate` datetime DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.investors
DROP TABLE IF EXISTS `investors`;
CREATE TABLE IF NOT EXISTS `investors` (
  `id` int(11) NOT NULL,
  `InvestorCode` varchar(500) DEFAULT NULL,
  `InvestorName` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.invsummary
DROP TABLE IF EXISTS `invsummary`;
CREATE TABLE IF NOT EXISTS `invsummary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Memberid` int(11) DEFAULT NULL,
  `date12` datetime DEFAULT NULL,
  `collection` float DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.jamindars
DROP TABLE IF EXISTS `jamindars`;
CREATE TABLE IF NOT EXISTS `jamindars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Nid` varchar(500) DEFAULT NULL,
  `JamindarNameTitle` varchar(500) DEFAULT NULL,
  `JamindarFirstName` varchar(500) DEFAULT NULL,
  `JamindarLastName` varchar(500) DEFAULT NULL,
  `JamindarFamilyName` varchar(500) DEFAULT NULL,
  `JamindarRelation` varchar(500) DEFAULT NULL,
  `JamindarAge` varchar(500) DEFAULT NULL,
  `JamindarEducation` varchar(500) DEFAULT NULL,
  `JamindarPassingYear` varchar(500) DEFAULT NULL,
  `FatherOrHasbandNAmeTitle` varchar(500) DEFAULT NULL,
  `FatherOrHasbandFirstName` varchar(500) DEFAULT NULL,
  `FatherOrHasbandLastName` varchar(500) DEFAULT NULL,
  `FatherOrHasbandAge` varchar(500) DEFAULT NULL,
  `JamindarCountry` varchar(500) DEFAULT NULL,
  `JamindarDistrict` varchar(500) DEFAULT NULL,
  `JamindarThana` varchar(500) DEFAULT NULL,
  `JamindarPostoffice` varchar(500) DEFAULT NULL,
  `JamindarUnion` varchar(500) DEFAULT NULL,
  `JamindarWord` varchar(500) DEFAULT NULL,
  `JamindarVillage` varchar(500) DEFAULT NULL,
  `JamindarCountry1` varchar(500) DEFAULT NULL,
  `JamindarDistrict1` varchar(500) DEFAULT NULL,
  `JamindarThana1` varchar(500) DEFAULT NULL,
  `JamindarPostoffice1` varchar(500) DEFAULT NULL,
  `JamindarUnion1` varchar(500) DEFAULT NULL,
  `JamindarWord1` varchar(500) DEFAULT NULL,
  `JamindarVillage1` varchar(500) DEFAULT NULL,
  `JamindarMobile1` varchar(500) DEFAULT NULL,
  `JamindarEmail` varchar(500) DEFAULT NULL,
  `JamindarNid` varchar(500) DEFAULT NULL,
  `JamindarBusinessOrJobAddress` varchar(500) DEFAULT NULL,
  `JamindarProfession1` varchar(500) DEFAULT NULL,
  `JamindarMonthlyNetIncome` varchar(500) DEFAULT NULL,
  `JamindarMonthlyNetExpences` varchar(500) DEFAULT NULL,
  `JamindarMonthlyNetSurplus` varchar(500) DEFAULT NULL,
  `JamindarGender` varchar(500) DEFAULT NULL,
  `JamindarTotalNetMoney` varchar(500) DEFAULT NULL,
  `JamindarSocialStatus` varchar(500) DEFAULT NULL,
  `Jamindarphoto` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.liabs
DROP TABLE IF EXISTS `liabs`;
CREATE TABLE IF NOT EXISTS `liabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `LiabilitiesDescription` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.licenceauthorities
DROP TABLE IF EXISTS `licenceauthorities`;
CREATE TABLE IF NOT EXISTS `licenceauthorities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.loans
DROP TABLE IF EXISTS `loans`;
CREATE TABLE IF NOT EXISTS `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `Nid` varchar(100) DEFAULT NULL,
  `JobOrgName` varchar(100) DEFAULT NULL,
  `JobOrgPlace` varchar(100) DEFAULT NULL,
  `JobIdNo` varchar(100) DEFAULT NULL,
  `ShenaNo` varchar(100) DEFAULT NULL,
  `JobDesignation` varchar(100) DEFAULT NULL,
  `JobUniteName` varchar(100) DEFAULT NULL,
  `DivisionName` varchar(100) DEFAULT NULL,
  `JobDuration` varchar(100) DEFAULT NULL,
  `JobSalary` varchar(100) DEFAULT NULL,
  `LoanProviderOrgName` varchar(100) DEFAULT NULL,
  `LoanProviderOrgAddress` varchar(100) DEFAULT NULL,
  `AmountOfReceivedLoan` varchar(100) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `InvestmentTypeNo` varchar(100) DEFAULT NULL,
  `LoanReceiveDuration` varchar(100) DEFAULT NULL,
  `LoanReceivedDate` varchar(100) DEFAULT NULL,
  `AmountOfLoanRepay` varchar(100) DEFAULT NULL,
  `CorrentStatus` varchar(100) DEFAULT NULL,
  `RemainingInstallment` varchar(100) DEFAULT NULL,
  `ApproximateRepaidDate` varchar(100) DEFAULT NULL,
  `LoanProviderOrgName1` varchar(100) DEFAULT NULL,
  `LoanProviderOrgAddress1` varchar(100) DEFAULT NULL,
  `AmountOfReceivedLoan1` varchar(100) DEFAULT NULL,
  `ProductName1` varchar(100) DEFAULT NULL,
  `InvestmentTypeNo1` varchar(100) DEFAULT NULL,
  `LoanReceiveDuration1` varchar(100) DEFAULT NULL,
  `LoanReceivedDate1` varchar(100) DEFAULT NULL,
  `AmountOfLoanRepay1` varchar(100) DEFAULT NULL,
  `CorrentStatus1` varchar(100) DEFAULT NULL,
  `RemainingInstallment1` varchar(100) DEFAULT NULL,
  `ApproximateRepaidDate1` varchar(100) DEFAULT NULL,
  `DonorOrgName` varchar(100) DEFAULT NULL,
  `DonorOrgAddress` varchar(100) DEFAULT NULL,
  `AmountOfBorrowedLoan` varchar(100) DEFAULT NULL,
  `product12Name` varchar(100) DEFAULT NULL,
  `InvestmentStepNo` varchar(100) DEFAULT NULL,
  `InvestmentDuration` varchar(100) DEFAULT NULL,
  `InvestmentBorrowedDate` varchar(100) DEFAULT NULL,
  `AmountOfRepaidMoney` varchar(100) DEFAULT NULL,
  `CurrentBalanceOfBorrow` varchar(100) DEFAULT NULL,
  `RemainingInstalments` varchar(100) DEFAULT NULL,
  `AproximateDateOfPayment` varchar(100) DEFAULT NULL,
  `DonorOrgName1` varchar(100) DEFAULT NULL,
  `DonorOrgAddress1` varchar(100) DEFAULT NULL,
  `AmountOfBorrowedLoan1` varchar(100) DEFAULT NULL,
  `DonarOrgProductName` varchar(100) DEFAULT NULL,
  `InvestmentStepNo1` varchar(100) DEFAULT NULL,
  `InvestmentDuration1` varchar(100) DEFAULT NULL,
  `InvestmentBorrowedDate1` varchar(100) DEFAULT NULL,
  `AmountOfRepaidMoney1` varchar(100) DEFAULT NULL,
  `CurrentBalanceOfBorrow1` varchar(100) DEFAULT NULL,
  `RemainingInstalments1` varchar(100) DEFAULT NULL,
  `AproximateDateOfPayment1` varchar(100) DEFAULT NULL,
  `OthersIncomeSources1` varchar(100) DEFAULT NULL,
  `OthersIncomeSources2` varchar(100) DEFAULT NULL,
  `OthersIncomeSources3` varchar(100) DEFAULT NULL,
  `GPositionPrice` varchar(100) DEFAULT NULL,
  `GPositionDuration` varchar(100) DEFAULT NULL,
  `GValidityYear` varchar(100) DEFAULT NULL,
  `GMouza` varchar(100) DEFAULT NULL,
  `GCSKhotiyanNo` varchar(100) DEFAULT NULL,
  `GHallKhotiyanNo` varchar(100) DEFAULT NULL,
  `GRSDPKhotiyanNo` varchar(100) DEFAULT NULL,
  `GCSDagNo` varchar(100) DEFAULT NULL,
  `GHalDagNo` varchar(100) DEFAULT NULL,
  `GJLNo` varchar(100) DEFAULT NULL,
  `GHoldingNo` varchar(100) DEFAULT NULL,
  `GLandAmount` varchar(100) DEFAULT NULL,
  `GApproximatePrice` varchar(100) DEFAULT NULL,
  `GLandOwerShip` varchar(100) DEFAULT NULL,
  `AdvancedCheckBankName` varchar(100) DEFAULT NULL,
  `GBankBranchName` varchar(100) DEFAULT NULL,
  `GBankAccountNo` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(100) DEFAULT NULL,
  `PreviousInvestmentType` varchar(100) DEFAULT NULL,
  `PreviousReceivedAmount` varchar(100) DEFAULT NULL,
  `AmountReceivedStep` varchar(100) DEFAULT NULL,
  `PreviousInvestmentReceivedDate` varchar(100) DEFAULT NULL,
  `PreviousInvestmentRepaidDate` varchar(100) DEFAULT NULL,
  `Repaymentattitude` varchar(100) DEFAULT NULL,
  `AdvancedPaidInstalation` varchar(100) DEFAULT NULL,
  `PaidMoneyPerInstalment` varchar(100) DEFAULT NULL,
  `GenaralSaving` varchar(100) DEFAULT NULL,
  `SpecialSaving` varchar(100) DEFAULT NULL,
  `TssMoney` varchar(100) DEFAULT NULL,
  `TotalSavingAmount` varchar(100) DEFAULT NULL,
  `ProposedAmountInNumber` varchar(100) DEFAULT NULL,
  `ProposedAmountInWord` varchar(100) DEFAULT NULL,
  `ProposedInvesmentDuration` varchar(100) DEFAULT NULL,
  `ProposedInvestmentStep` varchar(100) DEFAULT NULL,
  `ProposedInvesmentName` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.maritalstatuses
DROP TABLE IF EXISTS `maritalstatuses`;
CREATE TABLE IF NOT EXISTS `maritalstatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grouppresident` int(11) DEFAULT '0',
  `fieldofficer` int(11) DEFAULT '0',
  `supervisor` int(11) DEFAULT '0',
  `manager` int(11) DEFAULT '0',
  `finalapproved` int(11) DEFAULT '0',
  `remarks` varchar(50) DEFAULT NULL,
  `DivisionOfficeId` int(11) DEFAULT NULL,
  `ZoneId` int(11) DEFAULT '0',
  `AreaId` int(11) DEFAULT '0',
  `BranchId` int(11) DEFAULT '0',
  `name` varchar(500) DEFAULT NULL,
  `MemberImage` text,
  `FatherImage` text,
  `MotherImage` text,
  `Nid` varchar(100) NOT NULL,
  `FullNameEnglish` varchar(100) DEFAULT NULL,
  `FullNameBangla` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `DateofBirth` varchar(100) DEFAULT NULL,
  `Education` varchar(100) DEFAULT NULL,
  `SpouseProfession` varchar(100) DEFAULT NULL,
  `SpouseMobileNo` varchar(100) DEFAULT NULL,
  `MaritalStatus` varchar(100) DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PoliticalStatus` varchar(100) DEFAULT NULL,
  `Distance` varchar(100) DEFAULT NULL,
  `WifeFullNameEnglish` varchar(100) DEFAULT NULL,
  `WifeFullNameBangla` varchar(100) DEFAULT NULL,
  `WifeAge` varchar(100) DEFAULT NULL,
  `WifeMobileNo` varchar(100) DEFAULT NULL,
  `NomineeImage` text,
  `WifeProfession` varchar(100) DEFAULT NULL,
  `WifeOtherProfession` varchar(100) DEFAULT NULL,
  `FatherOrHasbandFullNameEnglish` varchar(100) DEFAULT NULL,
  `FatherOrHasbandFullNameBangla` varchar(100) DEFAULT NULL,
  `FatherOrHasbandAge` varchar(100) DEFAULT NULL,
  `FatherProfession` varchar(100) DEFAULT NULL,
  `FatherMobileNo` varchar(100) DEFAULT NULL,
  `MotherFUllNameEnglish` varchar(100) DEFAULT NULL,
  `MotherFUllNameBangla` varchar(100) DEFAULT NULL,
  `MotherAge` varchar(100) DEFAULT NULL,
  `MotherProfession` varchar(100) DEFAULT NULL,
  `MotherMobileNo` varchar(100) DEFAULT NULL,
  `PresentCountry` varchar(100) DEFAULT NULL,
  `PresentDivision` varchar(100) DEFAULT NULL,
  `PresentDistrict` varchar(100) DEFAULT NULL,
  `PresentThana` varchar(100) DEFAULT NULL,
  `PresentUnion` varchar(100) DEFAULT NULL,
  `PresentPostOffice` varchar(100) DEFAULT NULL,
  `PresentWord` varchar(100) DEFAULT NULL,
  `PresentVillage` varchar(100) DEFAULT NULL,
  `PresentRoadNo` varchar(100) DEFAULT NULL,
  `PermanentCountry` varchar(100) DEFAULT NULL,
  `PermanentDivision` varchar(100) DEFAULT NULL,
  `PermanentDistrict` varchar(100) DEFAULT NULL,
  `PermanentThana` varchar(100) DEFAULT NULL,
  `PermanentUnion` varchar(100) DEFAULT NULL,
  `PermanentPostOffice` varchar(100) DEFAULT NULL,
  `PermanentWord` varchar(100) DEFAULT NULL,
  `PermanentVillage` varchar(100) DEFAULT NULL,
  `PermanentRoadNo` varchar(100) DEFAULT NULL,
  `CurrentProfession` varchar(100) DEFAULT NULL,
  `PreviousProfession` varchar(100) DEFAULT NULL,
  `DurationOfPreviousProfession` varchar(100) DEFAULT NULL,
  `EarningAssetsByBusinessOrJob` varchar(100) DEFAULT NULL,
  `EarningSourceWithoutBusiness` varchar(100) DEFAULT NULL,
  `BusinessType1` varchar(100) DEFAULT NULL,
  `BusinessFuturePlan` varchar(100) DEFAULT NULL,
  `FamilyMember` varchar(100) DEFAULT NULL,
  `EarningMale` varchar(100) DEFAULT NULL,
  `EarningFemale` varchar(100) DEFAULT NULL,
  `EarningPerson` varchar(100) DEFAULT NULL,
  `MaleMember` varchar(100) DEFAULT NULL,
  `FemaleMember` varchar(100) DEFAULT NULL,
  `SickDescriptionOfFamilyMember` varchar(100) DEFAULT NULL,
  `CaseDescriptionOfFamilyMember` varchar(100) DEFAULT NULL,
  `IfAnyMemberInAbroad` varchar(100) DEFAULT NULL,
  `FamilyType` varchar(100) DEFAULT NULL,
  `CultiviableLand` float DEFAULT NULL,
  `NonCultivableLand` float DEFAULT NULL,
  `Pond` float DEFAULT NULL,
  `House` float DEFAULT NULL,
  `TotalLand` float DEFAULT NULL,
  `TinMadeHouse` varchar(100) DEFAULT NULL,
  `StrawMadeHouse` varchar(100) DEFAULT NULL,
  `BrickMadeHouse` varchar(100) DEFAULT NULL,
  `AgriculturalEarning` float DEFAULT NULL,
  `NonAgriculturalEarning` float DEFAULT NULL,
  `TotalEarning` float DEFAULT NULL,
  `TotalExpenditure` float DEFAULT NULL,
  `NetBalance` float DEFAULT NULL,
  `ReceivedAmount` float DEFAULT NULL,
  `PaidAmount` float DEFAULT NULL,
  `RemainingAmountToPay` float DEFAULT NULL,
  `FinancierCompany` varchar(100) DEFAULT NULL,
  `LoaningYear` varchar(100) DEFAULT NULL,
  `LastReceivedDate` varchar(100) DEFAULT NULL,
  `RepaymentType` varchar(100) DEFAULT NULL,
  `IsHeSheWillingToTakeLoan` varchar(100) DEFAULT NULL,
  `InvestmentSector` varchar(100) DEFAULT NULL,
  `Amount` varchar(100) DEFAULT NULL,
  `Comment1` varchar(100) DEFAULT NULL,
  `Comment2` varchar(100) DEFAULT NULL,
  `FatherNid` varchar(100) DEFAULT NULL,
  `MotherNid` varchar(100) DEFAULT NULL,
  `AccommodationLength` varchar(100) DEFAULT NULL,
  `BusinessName` varchar(100) DEFAULT NULL,
  `BusinessNature` varchar(100) DEFAULT NULL,
  `BusinessExperience` varchar(100) DEFAULT NULL,
  `BusinessCenterAddress` varchar(100) DEFAULT NULL,
  `BusinessStartDate` varchar(100) DEFAULT NULL,
  `Accommodation` varchar(100) DEFAULT NULL,
  `AccommodationWidth` varchar(100) DEFAULT NULL,
  `BusinessPlaceStatus` varchar(100) DEFAULT NULL,
  `Direction` varchar(100) DEFAULT NULL,
  `TradeLicenceNo` varchar(100) DEFAULT NULL,
  `LicenceIssuingAuthority` varchar(100) DEFAULT NULL,
  `InvestedCapital` varchar(100) DEFAULT NULL,
  `MonthlyAvarageSale` varchar(100) DEFAULT NULL,
  `BankContribution` varchar(100) DEFAULT NULL,
  `NgoContribution` varchar(100) DEFAULT NULL,
  `SelfContribution` varchar(100) DEFAULT NULL,
  `BorrowMoney` varchar(100) DEFAULT NULL,
  `MonthlyEarningFromBusiness` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromBusiness` varchar(100) DEFAULT NULL,
  `SurplusMoney` varchar(100) DEFAULT NULL,
  `IncomeFromOthersSources` varchar(100) DEFAULT NULL,
  `OtherSources` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromOtherSources` varchar(100) DEFAULT NULL,
  `MonthlySurplus` varchar(100) DEFAULT NULL,
  `MonthlyTotalSurplus` varchar(100) DEFAULT NULL,
  `BusinessType` varchar(100) DEFAULT NULL,
  `OwnershipType` varchar(100) DEFAULT NULL,
  `FirstHalfStart` varchar(100) DEFAULT NULL,
  `FirstHalfEnd` varchar(100) DEFAULT NULL,
  `SecondHalfStart` varchar(100) DEFAULT NULL,
  `SecondHalfEnd` varchar(100) DEFAULT NULL,
  `TotalTime` varchar(100) DEFAULT NULL,
  `OrgOPeningTime` varchar(100) DEFAULT NULL,
  `OrgClosingTime` varchar(100) DEFAULT NULL,
  `ClosingIntervalStart` varchar(100) DEFAULT NULL,
  `ClosingIntervalClose` varchar(100) DEFAULT NULL,
  `WeekEnd` varchar(100) DEFAULT NULL,
  `OrgPermanentEmployee` varchar(100) DEFAULT NULL,
  `LoanAccount` varchar(100) DEFAULT NULL,
  `SavingAccount` varchar(100) DEFAULT NULL,
  `MemberId` varchar(100) DEFAULT NULL,
  `SavingPolicy` varchar(50) DEFAULT NULL,
  `SavingTypes` varchar(100) DEFAULT NULL,
  `MemberType` varchar(100) DEFAULT NULL,
  `SamityName` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.members_feb_12.1
DROP TABLE IF EXISTS `members_feb_12.1`;
CREATE TABLE IF NOT EXISTS `members_feb_12.1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grouppresident` int(11) DEFAULT '0',
  `fieldoffice` int(11) DEFAULT '0',
  `supervisor` int(11) DEFAULT '0',
  `manager` int(11) DEFAULT '0',
  `finalapproved` int(11) DEFAULT '0',
  `remarks` varchar(50) DEFAULT NULL,
  `ZoneId` int(11) DEFAULT '0',
  `AreaId` int(11) DEFAULT '0',
  `BranchId` int(11) DEFAULT '0',
  `name` varchar(500) DEFAULT NULL,
  `MemberImage` varchar(100) DEFAULT NULL,
  `FatherImage` varchar(100) DEFAULT NULL,
  `MotherImage` varchar(100) DEFAULT NULL,
  `Nid` varchar(100) DEFAULT NULL,
  `NameTitle` varchar(100) DEFAULT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `FamilyName` varchar(100) DEFAULT NULL,
  `FullNameBangla` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `Education` varchar(100) DEFAULT NULL,
  `PassingYear` varchar(100) DEFAULT NULL,
  `SpouseProfession` varchar(100) DEFAULT NULL,
  `SpouseOtherProfession` varchar(100) DEFAULT NULL,
  `SpouseMobileNo` varchar(100) DEFAULT NULL,
  `MaritalStatus` varchar(100) DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PoliticalStatus` varchar(100) DEFAULT NULL,
  `Distance` varchar(100) DEFAULT NULL,
  `WifeNameTitle` varchar(100) DEFAULT NULL,
  `WifeFirstName` varchar(100) DEFAULT NULL,
  `WifeLastName` varchar(100) DEFAULT NULL,
  `WifeFamilyName` varchar(100) DEFAULT NULL,
  `WifeAge` varchar(100) DEFAULT NULL,
  `WifeMobileNo` varchar(100) DEFAULT NULL,
  `WifeProfession` varchar(100) DEFAULT NULL,
  `WifeOtherProfession` varchar(100) DEFAULT NULL,
  `FatherOrHasbandNAmeTitle` varchar(100) DEFAULT NULL,
  `FatherOrHasbandFirstName` varchar(100) DEFAULT NULL,
  `FatherOrHasbandLastName` varchar(100) DEFAULT NULL,
  `FatherOrHasbandFamilyName` varchar(100) DEFAULT NULL,
  `FatherOrHasbandAge` varchar(100) DEFAULT NULL,
  `FatherProfession` varchar(100) DEFAULT NULL,
  `FatherMobileNo` varchar(100) DEFAULT NULL,
  `MatherNameTitle` varchar(100) DEFAULT NULL,
  `MotherFirstName` varchar(100) DEFAULT NULL,
  `MotherLastName` varchar(100) DEFAULT NULL,
  `MotherFamilyName` varchar(100) DEFAULT NULL,
  `MotherAge` varchar(100) DEFAULT NULL,
  `MotherProfession` varchar(100) DEFAULT NULL,
  `MotherMobileNo` varchar(100) DEFAULT NULL,
  `PresentCountry` varchar(100) DEFAULT NULL,
  `PresentDivision` varchar(100) DEFAULT NULL,
  `PresentDistrict` varchar(100) DEFAULT NULL,
  `PresentThana` varchar(100) DEFAULT NULL,
  `PresentUnion` varchar(100) DEFAULT NULL,
  `PresentPostOffice` varchar(100) DEFAULT NULL,
  `PresentWord` varchar(100) DEFAULT NULL,
  `PresentVillage` varchar(100) DEFAULT NULL,
  `PresentRoadNo` varchar(100) DEFAULT NULL,
  `PermanentCountry` varchar(100) DEFAULT NULL,
  `PermanentDivision` varchar(100) DEFAULT NULL,
  `PermanentDistrict` varchar(100) DEFAULT NULL,
  `PermanentThana` varchar(100) DEFAULT NULL,
  `PermanentUnion` varchar(100) DEFAULT NULL,
  `PermanentPostOffice` varchar(100) DEFAULT NULL,
  `PermanentWord` varchar(100) DEFAULT NULL,
  `PermanentVillage` varchar(100) DEFAULT NULL,
  `PermanentRoadNo` varchar(100) DEFAULT NULL,
  `CurrentProfession` varchar(100) DEFAULT NULL,
  `PreviousProfession` varchar(100) DEFAULT NULL,
  `DurationOfPreviousProfession` varchar(100) DEFAULT NULL,
  `EarningAssetsByBusinessOrJob` varchar(100) DEFAULT NULL,
  `EarningSourceWithoutBusiness` varchar(100) DEFAULT NULL,
  `BusinessType1` varchar(100) DEFAULT NULL,
  `BusinessFuturePlan` varchar(100) DEFAULT NULL,
  `FamilyMember` varchar(100) DEFAULT NULL,
  `EarningMale` varchar(100) DEFAULT NULL,
  `EarningFemale` varchar(100) DEFAULT NULL,
  `EarningPerson` varchar(100) DEFAULT NULL,
  `MaleMember` varchar(100) DEFAULT NULL,
  `FemaleMember` varchar(100) DEFAULT NULL,
  `SickDescriptionOfFamilyMember` varchar(100) DEFAULT NULL,
  `CaseDescriptionOfFamilyMember` varchar(100) DEFAULT NULL,
  `IfAnyMemberInAbroad` varchar(100) DEFAULT NULL,
  `FatherNid` varchar(100) DEFAULT NULL,
  `MotherNid` varchar(100) DEFAULT NULL,
  `AccommodationLength` varchar(100) DEFAULT NULL,
  `BusinessName` varchar(100) DEFAULT NULL,
  `BusinessNature` varchar(100) DEFAULT NULL,
  `BusinessExperience` varchar(100) DEFAULT NULL,
  `BusinessCenterAddress` varchar(100) DEFAULT NULL,
  `BusinessStartDate` varchar(100) DEFAULT NULL,
  `Accommodation` varchar(100) DEFAULT NULL,
  `AccommodationWidth` varchar(100) DEFAULT NULL,
  `BusinessPlaceStatus` varchar(100) DEFAULT NULL,
  `Direction` varchar(100) DEFAULT NULL,
  `TradeLicenceNo` varchar(100) DEFAULT NULL,
  `LicenceIssuingAuthority` varchar(100) DEFAULT NULL,
  `InvestedCapital` varchar(100) DEFAULT NULL,
  `MonthlyAvarageSale` varchar(100) DEFAULT NULL,
  `BankContribution` varchar(100) DEFAULT NULL,
  `NgoContribution` varchar(100) DEFAULT NULL,
  `SelfContribution` varchar(100) DEFAULT NULL,
  `BorrowMoney` varchar(100) DEFAULT NULL,
  `MonthlyEarningFromBusiness` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromBusiness` varchar(100) DEFAULT NULL,
  `SurplusMoney` varchar(100) DEFAULT NULL,
  `IncomeFromOthersSources` varchar(100) DEFAULT NULL,
  `OtherSources` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromOtherSources` varchar(100) DEFAULT NULL,
  `MonthlySurplus` varchar(100) DEFAULT NULL,
  `MonthlyTotalSurplus` varchar(100) DEFAULT NULL,
  `BusinessType` varchar(100) DEFAULT NULL,
  `OwnershipType` varchar(100) DEFAULT NULL,
  `FirstHalfStart` varchar(100) DEFAULT NULL,
  `FirstHalfEnd` varchar(100) DEFAULT NULL,
  `SecondHalfStart` varchar(100) DEFAULT NULL,
  `SecondHalfEnd` varchar(100) DEFAULT NULL,
  `TotalTime` varchar(100) DEFAULT NULL,
  `OrgOPeningTime` varchar(100) DEFAULT NULL,
  `OrgClosingTime` varchar(100) DEFAULT NULL,
  `ClosingIntervalStart` varchar(100) DEFAULT NULL,
  `ClosingIntervalClose` varchar(100) DEFAULT NULL,
  `WeekEnd` varchar(100) DEFAULT NULL,
  `OrgPermanentEmployee` varchar(100) DEFAULT NULL,
  `LoanAccount` varchar(100) DEFAULT NULL,
  `SavingAccount` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.members_latest
DROP TABLE IF EXISTS `members_latest`;
CREATE TABLE IF NOT EXISTS `members_latest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `MemberImage` varchar(100) DEFAULT NULL,
  `ZoneId` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AreaId` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BranchId` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameTitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FamilyName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullNameBangla` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Education` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PassingYear` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeNameTitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeFirstName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeLastName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeFamilyName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeAge` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeOtherProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeMobileNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandNAmeTitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandFirstName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandLastName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandAge` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOtherProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandFamilyName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherMobileNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatherNameTitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherFirstName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherLastName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherFamilyName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherAge` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherOtherProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherMobileNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SpouseProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaritalStatus` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PoliticalStatus` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentCountry` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentDivision` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentDistrict` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentThana` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentUnion` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentPostOffice` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentWord` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentVillage` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentRoadNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentCountry` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentDistrict` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentDivision` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentThana` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentUnion` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentPostOffice` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentWord` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentVillage` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentRoadNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SpouseMobileNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Distance` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CurrentProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PreviousProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DurationOfPreviousProfession` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningAssetsByBusinessOrJob` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningSourceWithoutBusiness` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BusinessFuturePlan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FamilyMember` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningMale` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningFemale` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningPerson` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaleMember` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FemaleMember` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FamilyType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SickDescriptionOfFamilyMember` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CaseDescriptionOfFamilyMember` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `IfAnyMemberInAbroad` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CultiviableLand` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NonCultivableLand` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `House` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TotalLand` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AgriculturalEarning` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NonAgriculturalEarning` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TotalEarning` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TotalExpenditure` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NetBalance` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TinMadeHouse` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `StrawMadeHouse` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BrickMadeHouse` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ReceivedAmount` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PaidAmount` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `RemainingAmountToPay` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `RepaymentType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FinancierCompany` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LoaningYear` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastReceivedDate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastReceivedDate1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `IsHeSheWillingToTakeLoan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `InvestmentSector` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Amount` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comment1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comment2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherImage` varchar(100) DEFAULT NULL,
  `MotherImage` varchar(100) DEFAULT NULL,
  `Nid` varchar(100) DEFAULT NULL,
  `FatherNid` varchar(100) DEFAULT NULL,
  `MotherNid` varchar(100) DEFAULT NULL,
  `AccommodationLength` varchar(100) DEFAULT NULL,
  `BusinessName` varchar(100) DEFAULT NULL,
  `BusinessNature` varchar(100) DEFAULT NULL,
  `BusinessExperience` varchar(100) DEFAULT NULL,
  `BusinessCenterAddress` varchar(100) DEFAULT NULL,
  `BusinessStartDate` varchar(100) DEFAULT NULL,
  `Accommodation` varchar(100) DEFAULT NULL,
  `AccommodationWidth` varchar(100) DEFAULT NULL,
  `BusinessPlaceStatus` varchar(100) DEFAULT NULL,
  `Direction` varchar(100) DEFAULT NULL,
  `TradeLicenceNo` varchar(100) DEFAULT NULL,
  `LicenceIssuingAuthority` varchar(100) DEFAULT NULL,
  `InvestedCapital` varchar(100) DEFAULT NULL,
  `MonthlyAvarageSale` varchar(100) DEFAULT NULL,
  `BankContribution` varchar(100) DEFAULT NULL,
  `NgoContribution` varchar(100) DEFAULT NULL,
  `SelfContribution` varchar(100) DEFAULT NULL,
  `BorrowMoney` varchar(100) DEFAULT NULL,
  `MonthlyEarningFromBusiness` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromBusiness` varchar(100) DEFAULT NULL,
  `SurplusMoney` varchar(100) DEFAULT NULL,
  `IncomeFromOthersSources` varchar(100) DEFAULT NULL,
  `OtherSources` varchar(100) DEFAULT NULL,
  `MonthlyExpenditureFromOtherSources` varchar(100) DEFAULT NULL,
  `MonthlySurplus` varchar(100) DEFAULT NULL,
  `MonthlyTotalSurplus` varchar(100) DEFAULT NULL,
  `BusinessType` varchar(100) DEFAULT NULL,
  `OwnershipType` varchar(100) DEFAULT NULL,
  `FirstHalfStart` varchar(100) DEFAULT NULL,
  `FirstHalfEnd` varchar(100) DEFAULT NULL,
  `SecondHalfStart` varchar(100) DEFAULT NULL,
  `SecondHalfEnd` varchar(100) DEFAULT NULL,
  `TotalTime` varchar(100) DEFAULT NULL,
  `OrgOPeningTime` varchar(100) DEFAULT NULL,
  `OrgClosingTime` varchar(100) DEFAULT NULL,
  `ClosingIntervalStart` varchar(100) DEFAULT NULL,
  `ClosingIntervalClose` varchar(100) DEFAULT NULL,
  `WeekEnd` varchar(100) DEFAULT NULL,
  `OrgPermanentEmployee` varchar(100) DEFAULT NULL,
  `LoanAccount` varchar(100) DEFAULT NULL,
  `SavingAccount` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.membertypes
DROP TABLE IF EXISTS `membertypes`;
CREATE TABLE IF NOT EXISTS `membertypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.mikrofdivisions
DROP TABLE IF EXISTS `mikrofdivisions`;
CREATE TABLE IF NOT EXISTS `mikrofdivisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DivisionOfficeName` varchar(500) DEFAULT NULL,
  `DivisionOfficeNameBangla` varchar(500) DEFAULT NULL,
  `DivisionOfficeCode` varchar(500) DEFAULT NULL,
  `DivisionOfficeAddress` varchar(500) DEFAULT NULL,
  `DivisionOfficeMobileNo` varchar(500) DEFAULT NULL,
  `DivisionOfficeEmail` varchar(500) DEFAULT NULL,
  `DivisionOfficeDivisionId` varchar(500) DEFAULT NULL,
  `DivisionOfficeDistrictId` varchar(500) DEFAULT NULL,
  `DivisionOfficeThanaId` varchar(500) DEFAULT NULL,
  `DivisionOfficeUnionId` varchar(500) DEFAULT NULL,
  `DivisionOfficeWardId` varchar(500) DEFAULT NULL,
  `DivisionOfficeRoadNo` varchar(500) DEFAULT NULL,
  `DivisionOfficePostOfficeId` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.nametitles
DROP TABLE IF EXISTS `nametitles`;
CREATE TABLE IF NOT EXISTS `nametitles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.organizations
DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL,
  `OrganizationCode` varchar(500) DEFAULT NULL,
  `OrganizationName` varchar(500) DEFAULT NULL,
  `OrganizationAddress` varchar(500) DEFAULT NULL,
  `YearEndingDate` varchar(500) DEFAULT NULL,
  `CashBook` varchar(500) DEFAULT NULL,
  `ScheduleOnHoliday` int(11) DEFAULT NULL,
  `PLAccount` varchar(500) DEFAULT NULL,
  `BankAccount` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(500) DEFAULT NULL,
  `MobileNumber` varchar(500) DEFAULT NULL,
  `EmailId` varchar(500) DEFAULT NULL,
  `StartWorkingDay` varchar(500) DEFAULT NULL,
  `WorkType` varchar(500) DEFAULT NULL,
  `LicenceNo` varchar(500) DEFAULT NULL,
  `LicenceStartDate` varchar(500) DEFAULT NULL,
  `LicenceValidityEndingDate` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.othersources
DROP TABLE IF EXISTS `othersources`;
CREATE TABLE IF NOT EXISTS `othersources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.ownershiptypes
DROP TABLE IF EXISTS `ownershiptypes`;
CREATE TABLE IF NOT EXISTS `ownershiptypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.permanentemployees
DROP TABLE IF EXISTS `permanentemployees`;
CREATE TABLE IF NOT EXISTS `permanentemployees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.politicalstatuses
DROP TABLE IF EXISTS `politicalstatuses`;
CREATE TABLE IF NOT EXISTS `politicalstatuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.postoffices
DROP TABLE IF EXISTS `postoffices`;
CREATE TABLE IF NOT EXISTS `postoffices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PostofficeName` varchar(500) DEFAULT NULL,
  `ThanaId` varchar(500) DEFAULT NULL,
  `DivisionId` varchar(500) DEFAULT NULL,
  `DistrictId` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3001 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.processtbl
DROP TABLE IF EXISTS `processtbl`;
CREATE TABLE IF NOT EXISTS `processtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Memberid` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `trnxdate` datetime DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.prodscheinvest
DROP TABLE IF EXISTS `prodscheinvest`;
CREATE TABLE IF NOT EXISTS `prodscheinvest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `policyname` varchar(500) DEFAULT NULL,
  `minamount` float DEFAULT NULL,
  `maxamount` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.prodschesav
DROP TABLE IF EXISTS `prodschesav`;
CREATE TABLE IF NOT EXISTS `prodschesav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `policyname` varchar(500) DEFAULT NULL,
  `minamount` float DEFAULT NULL,
  `maxamount` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.product1s
DROP TABLE IF EXISTS `product1s`;
CREATE TABLE IF NOT EXISTS `product1s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(500) DEFAULT NULL,
  `ProductName` varchar(500) DEFAULT NULL,
  `ProductNameEng` varchar(500) DEFAULT NULL,
  `ProductNameBanglaShort` varchar(500) DEFAULT NULL,
  `ProductNameBanglaFull` varchar(500) DEFAULT NULL,
  `ProductType` varchar(500) DEFAULT NULL,
  `ServiceChargeRate` varchar(500) DEFAULT NULL,
  `Duration` varchar(500) DEFAULT NULL,
  `MainProductName` varchar(500) DEFAULT NULL,
  `MainItemName` varchar(500) DEFAULT NULL,
  `LoanInstallation` varchar(500) DEFAULT NULL,
  `InstallationServiceCharge` varchar(500) DEFAULT NULL,
  `SavingInstallment` varchar(500) DEFAULT NULL,
  `MinimumLimit` varchar(500) DEFAULT NULL,
  `MaximumLimit` varchar(500) DEFAULT NULL,
  `ServiceChargeCalculationMethod` varchar(500) DEFAULT NULL,
  `PaymentFrequency` varchar(500) DEFAULT NULL,
  `InsuranceItemCode` varchar(500) DEFAULT NULL,
  `InsuranceItemRate` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.producttypes
DROP TABLE IF EXISTS `producttypes`;
CREATE TABLE IF NOT EXISTS `producttypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ProducttypeyName` varchar(500) DEFAULT NULL,
  `ProducttypeyCode` varchar(500) DEFAULT NULL,
  `ProductInstallments` int(11) NOT NULL DEFAULT '0',
  `ProductRate` float NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.professions
DROP TABLE IF EXISTS `professions`;
CREATE TABLE IF NOT EXISTS `professions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.purposes
DROP TABLE IF EXISTS `purposes`;
CREATE TABLE IF NOT EXISTS `purposes` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `PurposeCode` varchar(500) DEFAULT NULL,
  `PurposeName` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.repaymenttypes
DROP TABLE IF EXISTS `repaymenttypes`;
CREATE TABLE IF NOT EXISTS `repaymenttypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.rollcatagories
DROP TABLE IF EXISTS `rollcatagories`;
CREATE TABLE IF NOT EXISTS `rollcatagories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.saving1s
DROP TABLE IF EXISTS `saving1s`;
CREATE TABLE IF NOT EXISTS `saving1s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MemberId` varchar(50) DEFAULT NULL,
  `ProductId` varchar(50) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `AccountNo` varchar(50) DEFAULT NULL,
  `Balance` float DEFAULT NULL,
  `Flag` varchar(20) DEFAULT NULL,
  `SavingAmount` float DEFAULT NULL,
  `WithdrawAmount` float DEFAULT NULL,
  `TransactionDate` datetime DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.saving1s_mar_2
DROP TABLE IF EXISTS `saving1s_mar_2`;
CREATE TABLE IF NOT EXISTS `saving1s_mar_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Saving1yName` varchar(500) DEFAULT NULL,
  `MemberId` varchar(500) DEFAULT NULL,
  `Column 5` varchar(500) DEFAULT NULL,
  `Column 6` varchar(500) DEFAULT NULL,
  `CollectionAmount` float DEFAULT NULL,
  `SavingAmount` float DEFAULT NULL,
  `WithdrawAmount` float DEFAULT NULL,
  `SavingDate` datetime DEFAULT NULL,
  `TransactionDate` datetime DEFAULT NULL,
  `EntryDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingpolicies
DROP TABLE IF EXISTS `savingpolicies`;
CREATE TABLE IF NOT EXISTS `savingpolicies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.savings
DROP TABLE IF EXISTS `savings`;
CREATE TABLE IF NOT EXISTS `savings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` int(11) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `month_name` varchar(500) DEFAULT NULL,
  `saving_amount` decimal(15,2) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingsledger
DROP TABLE IF EXISTS `savingsledger`;
CREATE TABLE IF NOT EXISTS `savingsledger` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MemberId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SavingType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MemberType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SavingPolicy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SamityName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Rate` float NOT NULL,
  `Amount` float NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingsprofitpenaltyrules
DROP TABLE IF EXISTS `savingsprofitpenaltyrules`;
CREATE TABLE IF NOT EXISTS `savingsprofitpenaltyrules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) DEFAULT NULL,
  `ServiceChargeCalculationMethod` varchar(50) DEFAULT NULL,
  `ServiceChargeCalculationDuration` varchar(50) DEFAULT NULL,
  `LoanExpirayMemberEligibleforSavingsProfit` varchar(50) DEFAULT NULL,
  `FiscalPeriodStartsMonth` varchar(50) DEFAULT NULL,
  `FiscalPeriodEndsMonth` varchar(50) DEFAULT NULL,
  `RulesEffectiveFrom` varchar(50) DEFAULT NULL,
  `RulesEffectiveTo` varchar(50) DEFAULT NULL,
  `EffectiveFormula` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingswithdrawconfig
DROP TABLE IF EXISTS `savingswithdrawconfig`;
CREATE TABLE IF NOT EXISTS `savingswithdrawconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) NOT NULL DEFAULT '0',
  `MinAmount` int(11) NOT NULL DEFAULT '0',
  `MaxAmount` int(11) NOT NULL DEFAULT '0',
  `TransactionType` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingtransactionsetups
DROP TABLE IF EXISTS `savingtransactionsetups`;
CREATE TABLE IF NOT EXISTS `savingtransactionsetups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MemberId` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountNo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SavingType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MemberType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SavingPolicy` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SamityName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rate` float DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.savingtypes
DROP TABLE IF EXISTS `savingtypes`;
CREATE TABLE IF NOT EXISTS `savingtypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.savsummary
DROP TABLE IF EXISTS `savsummary`;
CREATE TABLE IF NOT EXISTS `savsummary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Memberid` int(11) DEFAULT NULL,
  `date12` datetime DEFAULT NULL,
  `collection` float DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.servicechargcalculationmethods
DROP TABLE IF EXISTS `servicechargcalculationmethods`;
CREATE TABLE IF NOT EXISTS `servicechargcalculationmethods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Methods` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.shares
DROP TABLE IF EXISTS `shares`;
CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `serial_no` varchar(500) DEFAULT NULL,
  `member_name` varchar(500) DEFAULT NULL,
  `member_id` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `date12` varchar(500) DEFAULT NULL,
  `share_number` varchar(500) DEFAULT NULL,
  `share_amount` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.statuses
DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Status` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.statusesers
DROP TABLE IF EXISTS `statusesers`;
CREATE TABLE IF NOT EXISTS `statusesers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.surveys
DROP TABLE IF EXISTS `surveys`;
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SurveyCode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZoneId` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DivisionOfficeId` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AreaId` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BranchId` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullNameEnglish` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullNameBangla` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateofBirth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Education` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeFullNameEnglish` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeFullNameBangla` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeAge` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeOtherProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeMobileNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WifeProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandFullNameEnglish` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandFullNameBangla` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOrHasbandAge` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherOtherProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FatherMobileNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherFUllNameEnglish` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherFUllNameBangla` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherAge` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherOtherProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MotherMobileNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SpouseProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaritalStatus` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PoliticalStatus` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentCountry` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentDivision` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentDistrict` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentThana` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentUnion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentPostOffice` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentWord` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentVillage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PresentRoadNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentCountry` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentDistrict` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentDivision` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentThana` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentUnion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentPostOffice` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentWord` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentVillage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PermanentRoadNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SpouseMobileNo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Distance` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CurrentProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PreviousProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DurationOfPreviousProfession` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningAssetsByBusinessOrJob` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningSourceWithoutBusiness` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BusinessType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BusinessFuturePlan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FamilyMember` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningMale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningFemale` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EarningPerson` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaleMember` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FemaleMember` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FamilyType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SickDescriptionOfFamilyMember` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CaseDescriptionOfFamilyMember` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IfAnyMemberInAbroad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CultiviableLand` float DEFAULT NULL,
  `NonCultivableLand` float DEFAULT NULL,
  `Pond` float DEFAULT NULL,
  `House` float DEFAULT NULL,
  `TotalLand` float DEFAULT NULL,
  `AgriculturalEarning` float DEFAULT NULL,
  `NonAgriculturalEarning` float DEFAULT NULL,
  `TotalEarning` float DEFAULT NULL,
  `TotalExpenditure` float DEFAULT NULL,
  `NetBalance` float DEFAULT NULL,
  `TinMadeHouse` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `StrawMadeHouse` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BrickMadeHouse` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ReceivedAmount` float DEFAULT NULL,
  `PaidAmount` float DEFAULT NULL,
  `RemainingAmountToPay` float DEFAULT NULL,
  `RepaymentType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FinancierCompany` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LoaningYear` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastReceivedDate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastReceivedDate1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IsHeSheWillingToTakeLoan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `InvestmentSector` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `Comment1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comment2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unitprice` decimal(10,0) DEFAULT NULL,
  `JoinDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.taggables
DROP TABLE IF EXISTS `taggables`;
CREATE TABLE IF NOT EXISTS `taggables` (
  `tag_id` int(10) unsigned NOT NULL,
  `taggable_id` int(10) unsigned NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `taggables_taggable_id_taggable_type_index` (`taggable_id`,`taggable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.tags
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.test1s
DROP TABLE IF EXISTS `test1s`;
CREATE TABLE IF NOT EXISTS `test1s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Test1Code` varchar(500) DEFAULT NULL,
  `name23` varchar(500) DEFAULT NULL,
  `email23` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.tests
DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `TestCode` varchar(500) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.thanas
DROP TABLE IF EXISTS `thanas`;
CREATE TABLE IF NOT EXISTS `thanas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ThanaNameBangla` varchar(500) DEFAULT NULL,
  `ThanaName` varchar(500) DEFAULT NULL,
  `DistrictId` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=494 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.unions
DROP TABLE IF EXISTS `unions`;
CREATE TABLE IF NOT EXISTS `unions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UnionName` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `ThanaId` int(11) DEFAULT NULL,
  `DivisionId` int(11) DEFAULT NULL,
  `DistrictId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3009 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.userstimfs
DROP TABLE IF EXISTS `userstimfs`;
CREATE TABLE IF NOT EXISTS `userstimfs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `RollType` varchar(100) DEFAULT NULL,
  `UserstimfyName` varchar(500) DEFAULT NULL,
  `UserstimfyCode` varchar(500) DEFAULT NULL,
  `employee_id` varchar(500) DEFAULT NULL,
  `employee_code` varchar(500) DEFAULT NULL,
  `employee_firstname` varchar(500) DEFAULT NULL,
  `employee_lastname` varchar(500) DEFAULT NULL,
  `ZoneID` int(11) DEFAULT NULL,
  `AreaID` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `SamityID` int(11) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone1` varchar(500) DEFAULT NULL,
  `phone2` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `altemail` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `joiningdate` date DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `releasedate` date DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `password12` varchar(500) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `photo` text,
  `org_id` varchar(500) DEFAULT NULL,
  `IsActiveDate` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.userstimfs_feb_2
DROP TABLE IF EXISTS `userstimfs_feb_2`;
CREATE TABLE IF NOT EXISTS `userstimfs_feb_2` (
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
  `photo` varchar(500) DEFAULT NULL,
  `org_id` varchar(500) DEFAULT NULL,
  `IsActiveDate` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.userstimfs_feb_3
DROP TABLE IF EXISTS `userstimfs_feb_3`;
CREATE TABLE IF NOT EXISTS `userstimfs_feb_3` (
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

-- Data exporting was unselected.
-- Dumping structure for table timf.user_post
DROP TABLE IF EXISTS `user_post`;
CREATE TABLE IF NOT EXISTS `user_post` (
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  KEY `user_post_user_id_index` (`user_id`),
  KEY `user_post_post_id_index` (`post_id`),
  CONSTRAINT `user_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `user_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.wards
DROP TABLE IF EXISTS `wards`;
CREATE TABLE IF NOT EXISTS `wards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `WardName` varchar(500) DEFAULT NULL,
  `UnionId` varchar(500) DEFAULT NULL,
  `DivisionId` varchar(500) DEFAULT NULL,
  `DistrictId` varchar(500) DEFAULT NULL,
  `ThanaId` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.weekends
DROP TABLE IF EXISTS `weekends`;
CREATE TABLE IF NOT EXISTS `weekends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table timf.yearcalendars
DROP TABLE IF EXISTS `yearcalendars`;
CREATE TABLE IF NOT EXISTS `yearcalendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Note` varchar(20) NOT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.year_calendars
DROP TABLE IF EXISTS `year_calendars`;
CREATE TABLE IF NOT EXISTS `year_calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Note` varchar(20) NOT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.zone1s
DROP TABLE IF EXISTS `zone1s`;
CREATE TABLE IF NOT EXISTS `zone1s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `Zone1Name` varchar(500) DEFAULT NULL,
  `SomitiName` varchar(500) DEFAULT NULL,
  `SomitiAddress` varchar(500) DEFAULT NULL,
  `SomitiCode` varchar(500) DEFAULT NULL,
  `SamitiOpenDate` datetime DEFAULT NULL,
  `SamitiEndDate` datetime DEFAULT NULL,
  `BranchId` int(11) DEFAULT NULL,
  `BranchDivisionId` int(11) DEFAULT NULL,
  `BranchDistrictId` int(11) DEFAULT NULL,
  `BranchThanaId` int(11) DEFAULT NULL,
  `BranchUnionId` int(11) DEFAULT NULL,
  `BranchPostOfficeId` int(11) DEFAULT NULL,
  `BranchWardId` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table timf.zones
DROP TABLE IF EXISTS `zones`;
CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `ZoneDivisionOfficeId` int(11) DEFAULT NULL,
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

-- Data exporting was unselected.
-- Dumping structure for table timf.zones_feb_1
DROP TABLE IF EXISTS `zones_feb_1`;
CREATE TABLE IF NOT EXISTS `zones_feb_1` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `ZoneName` varchar(500) DEFAULT NULL,
  `ZoneEmail` varchar(500) DEFAULT NULL,
  `ZoneCode` varchar(500) DEFAULT NULL,
  `ZoneAddress` varchar(500) DEFAULT NULL,
  `ZoneMobileNo` varchar(500) DEFAULT NULL,
  `ZoneThanaId` int(11) DEFAULT NULL,
  `ZoneDistrictId` int(11) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
