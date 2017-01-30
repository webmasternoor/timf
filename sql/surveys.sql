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


-- Dumping structure for table timf.surveys
DROP TABLE IF EXISTS `surveys`;
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SurveyCode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ZoneId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AreaId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BranchId` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NameTitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FamilyName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullNameBangla` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Age` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PassingYear` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FatherOrHasbandNAmeTitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FatherOrHasbandFirstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FatherOrHasbandLastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FatherOrHasbandAge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatherNameTitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MotherFirstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MotherLastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MotherAge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SpouseProfession` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaritalStatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PoliticalStatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Nid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentCountry` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentDistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentThana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentUnion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentPostOffice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentWord` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentVillage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PresentRoadNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentCountry` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentDistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentThana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentUnion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentPostOffice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentWord` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentVillage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PermanentRoadNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SpouseMobileNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Distance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CurrentProfession` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PreviousProfessiion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DorationOfPreviousProfession` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EarningAssetsByBusinessOrJob` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EarningSourceWithoutBusiness` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BusinessType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BusinessFrturePlan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FamilyMebmer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EarningMale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EarningFemale` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EarningPerson` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaleMember` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FemaleMenber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FamilyType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SickDescripotionOfFamilyMember` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CaseDescriptionOfFamilyMember` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IfAnyMemberInAbroad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CultiviableLand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NonCultivableLand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Pond` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `House` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TotalLand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AgriculturalEarning` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NonAgriculturalEarning` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TotalEarning` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TotalExpenditure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NetBalance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TinMadeHouse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `StrawMadeHouse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BrickMadeHouse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ReceivedAmount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PaidAmount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RemainingAmountToPay` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RepaymentType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FinancierCompany` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaningYear` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LastReceivedDate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IsHeSheWillingToTakeLoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `InvestmentSector` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Comment1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Comment2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unitprice` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table timf.surveys: ~7 rows (approximately)
DELETE FROM `surveys`;
/*!40000 ALTER TABLE `surveys` DISABLE KEYS */;
INSERT INTO `surveys` (`id`, `name`, `SurveyCode`, `ZoneId`, `AreaId`, `BranchId`, `NameTitle`, `FirstName`, `LastName`, `FamilyName`, `FullNameBangla`, `Gender`, `Age`, `Education`, `PassingYear`, `FatherOrHasbandNAmeTitle`, `FatherOrHasbandFirstName`, `FatherOrHasbandLastName`, `FatherOrHasbandAge`, `MatherNameTitle`, `MotherFirstName`, `MotherLastName`, `MotherAge`, `SpouseProfession`, `MaritalStatus`, `PoliticalStatus`, `Nid`, `PresentCountry`, `PresentDistrict`, `PresentThana`, `PresentUnion`, `PresentPostOffice`, `PresentWord`, `PresentVillage`, `PresentRoadNo`, `PermanentCountry`, `PermanentDistrict`, `PermanentThana`, `PermanentUnion`, `PermanentPostOffice`, `PermanentWord`, `PermanentVillage`, `PermanentRoadNo`, `Mobile`, `Email`, `SpouseMobileNo`, `Distance`, `CurrentProfession`, `PreviousProfessiion`, `DorationOfPreviousProfession`, `EarningAssetsByBusinessOrJob`, `EarningSourceWithoutBusiness`, `BusinessType`, `BusinessFrturePlan`, `FamilyMebmer`, `EarningMale`, `EarningFemale`, `EarningPerson`, `MaleMember`, `FemaleMenber`, `FamilyType`, `SickDescripotionOfFamilyMember`, `CaseDescriptionOfFamilyMember`, `IfAnyMemberInAbroad`, `CultiviableLand`, `NonCultivableLand`, `Pond`, `House`, `TotalLand`, `AgriculturalEarning`, `NonAgriculturalEarning`, `TotalEarning`, `TotalExpenditure`, `NetBalance`, `TinMadeHouse`, `StrawMadeHouse`, `BrickMadeHouse`, `ReceivedAmount`, `PaidAmount`, `RemainingAmountToPay`, `RepaymentType`, `FinancierCompany`, `LoaningYear`, `LastReceivedDate`, `IsHeSheWillingToTakeLoan`, `InvestmentSector`, `Amount`, `Comment1`, `Comment2`, `unitprice`, `created_at`, `updated_at`) VALUES
	(11, '', '', '0', '2', '1', 'Mr.', 'Noor', 'Alam', 'Khan', '', '1', '', '1', '0', '1', '', '', '0', '2', '', '', '0', '1', '1', '1', '', '1', '1', '6', '2', '5', '5', '', '', '1', '1', '6', '2', '5', '5', '', '', '', '', '', '', '1', '1', '0', '', '', '1', '', '0', '0', '0', '0', '0', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '1212', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2017-01-22 05:41:07', '2017-01-22 05:41:07');
/*!40000 ALTER TABLE `surveys` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
