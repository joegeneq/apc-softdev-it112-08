-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 08:23 AM
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
-- Table structure for table `wear_mode`
--

CREATE TABLE IF NOT EXISTS `wear_mode` (
  `wear_mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `wear_mode_name` varchar(45) NOT NULL,
  `wear_mode_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wear_mode_id`),
  UNIQUE KEY `wear_mode_name_UNIQUE` (`wear_mode_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wear_mode`
--

INSERT INTO `wear_mode` (`wear_mode_id`, `wear_mode_name`, `wear_mode_description`) VALUES
(1, 'daily', NULL),
(2, 'weekly', NULL),
(3, 'monthly', NULL),
(4, 'extended', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
