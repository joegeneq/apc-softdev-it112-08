-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2015 at 04:30 AM
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
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insurance_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_name` varchar(45) NOT NULL,
  `insurance_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`insurance_id`),
  UNIQUE KEY `insurance_name_UNIQUE` (`insurance_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insurance_id`, `insurance_name`, `insurance_description`) VALUES
(1, 'Maxicare', NULL),
(2, 'Cocolife', NULL),
(3, 'ValuCare', NULL),
(4, 'Prudentialife', NULL),
(5, 'AsianLife', NULL),
(6, 'Medserve', NULL),
(7, 'St. Patrick', NULL),
(8, 'Philcare', NULL),
(9, 'AA International', NULL),
(10, 'Living Well', NULL),
(11, 'SM Global Pinoy', NULL),
(12, 'Walk-in', NULL),
(13, 'Established Patient', NULL),
(14, 'Others', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
