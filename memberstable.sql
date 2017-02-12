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


-- Dumping structure for table timf.members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table timf.members: ~10 rows (approximately)
DELETE FROM `members`;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `ZoneId`, `AreaId`, `BranchId`, `name`, `MemberImage`, `FatherImage`, `MotherImage`, `Nid`, `NameTitle`, `FirstName`, `LastName`, `FamilyName`, `FullNameBangla`, `Gender`, `Age`, `Education`, `PassingYear`, `SpouseProfession`, `SpouseOtherProfession`, `SpouseMobileNo`, `MaritalStatus`, `Mobile`, `Email`, `PoliticalStatus`, `Distance`, `WifeNameTitle`, `WifeFirstName`, `WifeLastName`, `WifeFamilyName`, `WifeAge`, `WifeMobileNo`, `WifeProfession`, `WifeOtherProfession`, `FatherOrHasbandNAmeTitle`, `FatherOrHasbandFirstName`, `FatherOrHasbandLastName`, `FatherOrHasbandFamilyName`, `FatherOrHasbandAge`, `FatherProfession`, `FatherMobileNo`, `MatherNameTitle`, `MotherFirstName`, `MotherLastName`, `MotherFamilyName`, `MotherAge`, `MotherProfession`, `MotherMobileNo`, `PresentCountry`, `PresentDivision`, `PresentDistrict`, `PresentThana`, `PresentUnion`, `PresentPostOffice`, `PresentWord`, `PresentVillage`, `PresentRoadNo`, `PermanentCountry`, `PermanentDivision`, `PermanentDistrict`, `PermanentThana`, `PermanentUnion`, `PermanentPostOffice`, `PermanentWord`, `PermanentVillage`, `PermanentRoadNo`, `CurrentProfession`, `PreviousProfession`, `DurationOfPreviousProfession`, `EarningAssetsByBusinessOrJob`, `EarningSourceWithoutBusiness`, `BusinessType1`, `BusinessFuturePlan`, `FamilyMember`, `EarningMale`, `EarningFemale`, `EarningPerson`, `MaleMember`, `FemaleMember`, `SickDescriptionOfFamilyMember`, `CaseDescriptionOfFamilyMember`, `IfAnyMemberInAbroad`, `FatherNid`, `MotherNid`, `AccommodationLength`, `BusinessName`, `BusinessNature`, `BusinessExperience`, `BusinessCenterAddress`, `BusinessStartDate`, `Accommodation`, `AccommodationWidth`, `BusinessPlaceStatus`, `Direction`, `TradeLicenceNo`, `LicenceIssuingAuthority`, `InvestedCapital`, `MonthlyAvarageSale`, `BankContribution`, `NgoContribution`, `SelfContribution`, `BorrowMoney`, `MonthlyEarningFromBusiness`, `MonthlyExpenditureFromBusiness`, `SurplusMoney`, `IncomeFromOthersSources`, `OtherSources`, `MonthlyExpenditureFromOtherSources`, `MonthlySurplus`, `MonthlyTotalSurplus`, `BusinessType`, `OwnershipType`, `FirstHalfStart`, `FirstHalfEnd`, `SecondHalfStart`, `SecondHalfEnd`, `TotalTime`, `OrgOPeningTime`, `OrgClosingTime`, `ClosingIntervalStart`, `ClosingIntervalClose`, `WeekEnd`, `OrgPermanentEmployee`, `LoanAccount`, `SavingAccount`, `created_at`, `updated_at`) VALUES
	(1, 0, 0, 0, NULL, '123_1231.jpg', '123_1232.jpg', '123_1233.jpg', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '12', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_57275', '123_59531', '2017-02-12 06:13:23', '2017-02-12 06:13:23'),
	(2, 1, 1, 1, NULL, '123_1233.jpg', '123_12313.jpg', '123_12311.jpg', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_56281', '123_57719', '2017-02-12 06:24:45', '2017-02-12 06:24:45'),
	(3, 1, 1, 1, NULL, '123_12311.jpg', '123_12313.jpg', '123_1234.jpg', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '234', '345', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_52239', '123_57671', '2017-02-12 06:36:24', '2017-02-12 06:36:24'),
	(4, 1, 1, 1, NULL, '123_1233.jpg', '123_12313.jpg', '123_12312.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_50206', '123_57883', '2017-02-12 07:00:49', '2017-02-12 07:00:49'),
	(5, 1, 1, 1, NULL, '123_12311.jpg', '123_12313.jpg', '123_1233.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_50670', '123_58691', '2017-02-12 07:04:22', '2017-02-12 07:04:22'),
	(6, 1, 1, 1, NULL, '123_12312.jpg', '123_1234.jpg', '123_12313.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_51406', '123_57049', '2017-02-12 07:11:08', '2017-02-12 07:11:08'),
	(7, 1, 1, 1, NULL, '123_1232.jpg', '123_12313.jpg', '123_12311.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '45678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_59414', '123_57646', '2017-02-12 07:13:48', '2017-02-12 07:13:48'),
	(8, 1, 1, 1, NULL, '123_12313.jpg', '123_12315.jpg', '123_1236.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '1', '1', '1', '1', '1', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '', 'asdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_56732', '123_55700', '2017-02-12 07:20:20', '2017-02-12 07:20:20'),
	(9, 1, 1, 1, NULL, '123_1232.jpg', '123_12312.jpg', '123_12313.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '1', '1', '1', '1', '1', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '', '', '1', 'Agriculture', '', '', '', NULL, 'wert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_57405', '123_55766', '2017-02-12 07:27:32', '2017-02-12 07:27:32'),
	(10, 1, 1, 1, NULL, '123_1232.jpg', '123_1235.jpg', '123_12315.jpg', '123', '1', '1', '2', '3', '4', '1', '1', '1', '1', 'Agriculture', '', '5', NULL, '', '7@gmail.com', '1', '1', '1', '2', '', '', '1', '', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '', '', '', '1', 'Agriculture', '', '1', '1', '1', '1', '1', '1', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '', '', '1', 'Agriculture', '', '', '', NULL, '', '1', '1', '1', '1', '1', '1', '', '', 'ache....', '', '', '', '', '', '', '', '', '1', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '1', '1', '123_58211', '123_51083', '2017-02-12 07:45:39', '2017-02-12 07:45:39');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
