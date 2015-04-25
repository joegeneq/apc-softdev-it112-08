-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 07:47 AM
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
-- Table structure for table `contact_lens`
--

CREATE TABLE IF NOT EXISTS `contact_lens` (
  `contact_lens_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_lens_name` varchar(45) NOT NULL,
  `contact_lens_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contact_lens_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_lens`
--

INSERT INTO `contact_lens` (`contact_lens_id`, `contact_lens_name`, `contact_lens_description`) VALUES
(1, 'Rigid', NULL),
(2, 'Soft', NULL),
(3, 'Other', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
