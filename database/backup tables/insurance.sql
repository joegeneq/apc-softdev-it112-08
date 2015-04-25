-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 07:48 AM
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
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insurance_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_name` varchar(45) NOT NULL,
  `insurance_description` varchar(45) DEFAULT NULL,
  `insurance_percentage` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`insurance_id`),
  UNIQUE KEY `insurance_name_UNIQUE` (`insurance_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insurance_id`, `insurance_name`, `insurance_description`, `insurance_percentage`) VALUES
(1, 'Maxicare', NULL, NULL),
(2, 'Cocolife', NULL, NULL),
(3, 'ValuCare', NULL, NULL),
(4, 'Prudentialife', NULL, NULL),
(5, 'AsianLife', NULL, NULL),
(6, 'Medserve', NULL, NULL),
(7, 'St. Patrick', NULL, NULL),
(8, 'Philcare', NULL, NULL),
(9, 'AA International', NULL, NULL),
(10, 'Living Well', NULL, NULL),
(11, 'SM Global Pinoy', NULL, NULL),
(12, 'Walk-in', NULL, NULL),
(13, 'Established Patient', NULL, NULL),
(14, 'Others', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
