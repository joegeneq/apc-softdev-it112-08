-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2015 at 01:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abesamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `CITY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CITY_ZIP_CODE` int(11) NOT NULL,
  `CITY_NAME` varchar(52) NOT NULL,
  PRIMARY KEY (`CITY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `CITY_ZIP_CODE`, `CITY_NAME`) VALUES
(1, 1700, 'Parañaque'),
(2, 1700, 'Don Galo'),
(3, 1701, 'Tambo'),
(4, 1702, 'Baclaran'),
(5, 1711, 'Better Living Subdivision'),
(7, 1720, 'BF HOMES 2');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `COUNTRY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COUNTRY_CODE` varchar(2) NOT NULL,
  `COUNTRY_NAME` varchar(52) NOT NULL,
  PRIMARY KEY (`COUNTRY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_CODE`, `COUNTRY_NAME`) VALUES
(1, 'PH', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `EXP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXP_HEADACHES` varchar(1) DEFAULT NULL,
  `EXP_MIGRAINS` varchar(1) DEFAULT NULL,
  `EXP_SEIZURES` varchar(1) DEFAULT NULL,
  `EXP_VISION_LOSS` varchar(1) DEFAULT NULL,
  `EXP_BLURRED_VISION` varchar(1) DEFAULT NULL,
  `EXP_DISTORTED_VISION` varchar(1) DEFAULT NULL,
  `EXP_SIDE_VISION_LOSS` varchar(1) DEFAULT NULL,
  `EXP_DOUBLE_VISION` varchar(1) DEFAULT NULL,
  `EXP_DRYNESS` varchar(1) DEFAULT NULL,
  `EXP_MUCOUS_DISCHARGE` varchar(1) DEFAULT NULL,
  `EXP_REDNESS` varchar(1) DEFAULT NULL,
  `EXP_SANDY` varchar(1) DEFAULT NULL,
  `EXP_ITCHING` varchar(1) DEFAULT NULL,
  `EXP_BURNING` varchar(1) DEFAULT NULL,
  `EXP_FOREIGN_BODY_SENSATION` varchar(1) DEFAULT NULL,
  `EXP_WATERING` varchar(1) DEFAULT NULL,
  `EXP_GLARE_LIGHT_SENSITIVITY` varchar(1) DEFAULT NULL,
  `EXP_EYE_PAIN` varchar(1) DEFAULT NULL,
  `EXP_CHRONIC_INFECTION` varchar(1) DEFAULT NULL,
  `EXP_STIES` varchar(1) DEFAULT NULL,
  `EXP_FLASHES` varchar(1) DEFAULT NULL,
  `EXP_TIRED_EYES` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`EXP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formsample`
--

CREATE TABLE IF NOT EXISTS `formsample` (
  `name` varchar(100) NOT NULL,
  `email` varchar(52) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health_card`
--

CREATE TABLE IF NOT EXISTS `health_card` (
  `CARD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CARD_NAME` varchar(52) NOT NULL,
  PRIMARY KEY (`CARD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `health_card`
--

INSERT INTO `health_card` (`CARD_ID`, `CARD_NAME`) VALUES
(1, 'AA International'),
(2, 'Maxicare'),
(3, 'AsianLife & General Assurance Corporation'),
(4, 'MedAsia Philippines'),
(5, 'CocoLife'),
(6, 'EastWest Healthcare'),
(7, 'MedServ'),
(8, 'PhilCare'),
(9, 'Kaiser International Health Group, Inc.'),
(10, 'ValuCare'),
(11, 'Lacson & Lacson Insurance Brokers Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `history_family`
--

CREATE TABLE IF NOT EXISTS `history_family` (
  `FAMILY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FAMILY_BLINDNESS` varchar(1) DEFAULT NULL,
  `FAMILY_CATARACTS` varchar(1) DEFAULT NULL,
  `FAMILY_CROSSED_EYES` varchar(1) DEFAULT NULL,
  `FAMILY_GLAUCOMA` varchar(1) DEFAULT NULL,
  `FAMILY_MACULAR_DEGENERATION` varchar(1) DEFAULT NULL,
  `FAMILY_RETINAL_DETACHMENT_DISEASE` varchar(1) DEFAULT NULL,
  `FAMILY_ARTHRITIS` varchar(1) DEFAULT NULL,
  `FAMILY_CANCER` varchar(1) DEFAULT NULL,
  `FAMILY_DIABETES` varchar(1) DEFAULT NULL,
  `FAMILY_HEART_DISEASE` varchar(1) DEFAULT NULL,
  `FAMILY_HIGH_BLOOD` varchar(1) DEFAULT NULL,
  `FAMILY_KIDNEY_DISEASE` varchar(1) DEFAULT NULL,
  `FAMILY_LUPUS` varchar(1) DEFAULT NULL,
  `FAMILY_THYROID_DISEASE` varchar(1) DEFAULT NULL,
  `FAMILY_OTHERS` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`FAMILY_ID`),
  KEY `FAMILY_ID` (`FAMILY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history_personal`
--

CREATE TABLE IF NOT EXISTS `history_personal` (
  `PERSONAL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERSONAL_CROSSED_EYE` varchar(1) DEFAULT NULL,
  `PERSONAL_LAZY_EYE` varchar(1) DEFAULT NULL,
  `PERSONAL_DROOPING_EYELID` varchar(1) DEFAULT NULL,
  `PERSONAL_PROMINENT_EYE` varchar(1) DEFAULT NULL,
  `PERSONAL_GLAUCOMA` varchar(1) DEFAULT NULL,
  `PERSONAL_RETINAL_DISEASE` varchar(1) DEFAULT NULL,
  `PERSONAL_CATARACTS` varchar(1) DEFAULT NULL,
  `PERSONAL_EYE_INFECTIONS` varchar(1) DEFAULT NULL,
  `PERSONAL_EYE_INJURY` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`PERSONAL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `PATIENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PATIENT_NAME_LAST` varchar(52) NOT NULL,
  `PATIENT_NAME_FIRST` varchar(102) NOT NULL,
  `PATIENT_NAME_MIDDLE` varchar(52) DEFAULT NULL,
  `PATIENT_BDAY` date NOT NULL,
  `PATIENT_SEX` varchar(1) NOT NULL,
  `PATIENT_HOME` varchar(102) NOT NULL,
  `PATIENT_CITY` int(11) NOT NULL,
  `PATIENT_COUNTRY_ID` int(11) NOT NULL,
  `PATIENT_OCCUPATION` varchar(52) NOT NULL,
  `PATIENT_COMPANY_NAME` varchar(52) NOT NULL,
  `PATIENT_COMPANY_NUMBER` int(11) NOT NULL,
  `PATIENT_SPORTS` int(11) NOT NULL,
  `PATIENT_EMAIL1` varchar(52) NOT NULL,
  `PATIENT_EMAIL2` varchar(52) DEFAULT NULL,
  `PATIENT_FACEBOOK` varchar(52) DEFAULT NULL,
  `PATIENT_LANDLINE` int(11) DEFAULT NULL,
  `PATIENT_CELL` int(11) DEFAULT NULL,
  `PATIENT_ALLERGIES` varchar(300) DEFAULT NULL,
  `PATIENT_MEDICATIONS` varchar(300) DEFAULT NULL,
  `PATIENT_INJURIES_SURGERIES_HOSPITALIZATION` varchar(500) DEFAULT NULL,
  `PATIENT_HISTORY_PERSONAL_ID` int(11) NOT NULL,
  `PATIENT_HISTORY_FAMILY_ID` int(11) NOT NULL,
  `PATIENT_PERSONAL_EXPERIENCE` int(11) NOT NULL,
  `PATIENT_REFERRED_BY` varchar(102) DEFAULT NULL,
  `PATIENT_HEALTH_CARD` int(11) DEFAULT NULL,
  `PATIENT_REGISTRATION` date NOT NULL,
  PRIMARY KEY (`PATIENT_ID`),
  KEY `PATIENT_CITY` (`PATIENT_CITY`),
  KEY `PATIENT_COUNTRY_ID` (`PATIENT_COUNTRY_ID`),
  KEY `PATIENT_SPORTS` (`PATIENT_SPORTS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PATIENT_ID`, `PATIENT_NAME_LAST`, `PATIENT_NAME_FIRST`, `PATIENT_NAME_MIDDLE`, `PATIENT_BDAY`, `PATIENT_SEX`, `PATIENT_HOME`, `PATIENT_CITY`, `PATIENT_COUNTRY_ID`, `PATIENT_OCCUPATION`, `PATIENT_COMPANY_NAME`, `PATIENT_COMPANY_NUMBER`, `PATIENT_SPORTS`, `PATIENT_EMAIL1`, `PATIENT_EMAIL2`, `PATIENT_FACEBOOK`, `PATIENT_LANDLINE`, `PATIENT_CELL`, `PATIENT_ALLERGIES`, `PATIENT_MEDICATIONS`, `PATIENT_INJURIES_SURGERIES_HOSPITALIZATION`, `PATIENT_HISTORY_PERSONAL_ID`, `PATIENT_HISTORY_FAMILY_ID`, `PATIENT_PERSONAL_EXPERIENCE`, `PATIENT_REFERRED_BY`, `PATIENT_HEALTH_CARD`, `PATIENT_REGISTRATION`) VALUES
(2, 'a', 'a', 'a', '0000-00-00', 'a', 'a', 1, 1, 'a', 'a', 1, 1, 'a', 'a', 'a', 1, 1, 'a', 'a', 'a', 1, 1, 1, 'a', 1, '0000-00-00'),
(4, 'j', 'j', 'j', '1999-00-00', 'F', 'rfgsdg', 1, 1, 'oiajf', 'oijo', 869, 1, 'hiuh', '', '', NULL, NULL, '', '', '', 1, 1, 1, '', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(52) NOT NULL,
  `lname` varchar(52) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `SPORTS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Archery` varchar(1) DEFAULT NULL,
  `Badminton` varchar(1) DEFAULT NULL,
  `Basketball` varchar(1) DEFAULT NULL,
  `Volleyball` varchar(1) DEFAULT NULL,
  `Tennis` varchar(1) DEFAULT NULL,
  `Bat-and-Ball` varchar(1) DEFAULT NULL,
  `Skateboarding` varchar(1) DEFAULT NULL,
  `Cycling` varchar(1) DEFAULT NULL,
  `Swimming` varchar(1) DEFAULT NULL,
  `Grappling` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`SPORTS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`SPORTS_ID`, `Archery`, `Badminton`, `Basketball`, `Volleyball`, `Tennis`, `Bat-and-Ball`, `Skateboarding`, `Cycling`, `Swimming`, `Grappling`) VALUES
(1, 'y', 'y', 'y', 'y', 'n', 'n', 'n', 'n', 'n', 'n');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`PATIENT_CITY`) REFERENCES `city` (`CITY_ID`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`PATIENT_COUNTRY_ID`) REFERENCES `country` (`COUNTRY_ID`),
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`PATIENT_SPORTS`) REFERENCES `sports` (`SPORTS_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
