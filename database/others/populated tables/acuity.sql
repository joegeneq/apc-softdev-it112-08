-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 06:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

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
-- Table structure for table `acuity`
--

CREATE TABLE IF NOT EXISTS `acuity` (
  `acuity_id` int(11) NOT NULL AUTO_INCREMENT,
  `acuity_name` varchar(45) NOT NULL,
  PRIMARY KEY (`acuity_id`),
  UNIQUE KEY `acuity_name_UNIQUE` (`acuity_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `acuity`
--

INSERT INTO `acuity` (`acuity_id`, `acuity_name`) VALUES
(14, '20/10'),
(7, '20/100'),
(13, '20/15'),
(12, '20/20'),
(6, '20/200'),
(11, '20/30'),
(10, '20/40'),
(5, '20/400'),
(9, '20/60'),
(8, '20/80'),
(4, '20/800'),
(3, 'HM'),
(2, 'LP'),
(1, 'NLP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
