-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2015 at 07:23 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_disease`
--

CREATE TABLE IF NOT EXISTS `family_disease` (
  `family_disease_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_disease_name` varchar(45) NOT NULL,
  `family_disease_description` varchar(45) NOT NULL,
  PRIMARY KEY (`family_disease_id`),
  UNIQUE KEY `family_disease_name_UNIQUE` (`family_disease_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `family_disease`
--

INSERT INTO `family_disease` (`family_disease_id`, `family_disease_name`, `family_disease_description`) VALUES
(1, 'Blindness', 'Blindness'),
(2, 'Cataracts', 'Cataracts'),
(3, 'Crossed eyes', 'Crossed eyes'),
(4, 'Glaucoma', 'Glaucoma'),
(5, 'Macular Degeneration', 'Macular Degeneration'),
(6, 'Retinal Detachment Disease', 'Retinal Detachment Disease'),
(7, 'Arthritis', 'Arthritis'),
(8, 'Cancer', 'Cancer'),
(9, 'Diabetes', 'Diabetes'),
(10, 'Heart Disease', 'Heart Disease'),
(11, 'High Blood Pressure', 'High Blood Pressure'),
(12, 'Kidney Disease', 'Kidney Disease'),
(13, 'Lupus', 'Lupus'),
(14, 'Thyroid Disease', 'Thyroid Disease'),
(15, 'Other', 'Other');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
