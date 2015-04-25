-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2015 at 05:47 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecpms-sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `acuity`
--

CREATE TABLE IF NOT EXISTS `acuity` (
  `acuity_id` int(11) NOT NULL AUTO_INCREMENT,
  `acuity_name` varchar(45) NOT NULL,
  `acuity_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`acuity_id`),
  UNIQUE KEY `acuity_name_UNIQUE` (`acuity_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `acuity`
--

INSERT INTO `acuity` (`acuity_id`, `acuity_name`, `acuity_description`) VALUES
(1, 'NLP', NULL),
(2, 'LP', NULL),
(3, 'HM', NULL),
(4, '20/800', NULL),
(5, '20/400', NULL),
(6, '20/200', NULL),
(7, '20/100', NULL),
(8, '20/80', NULL),
(9, '20/60', NULL),
(10, '20/40', NULL),
(11, '20/30', NULL),
(12, '20/20', NULL),
(13, '20/15', NULL),
(14, '20/10', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
