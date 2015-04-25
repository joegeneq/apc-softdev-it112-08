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
-- Table structure for table `eoms`
--

CREATE TABLE IF NOT EXISTS `eoms` (
  `eoms_id` int(11) NOT NULL AUTO_INCREMENT,
  `eoms_name` varchar(45) NOT NULL,
  PRIMARY KEY (`eoms_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `eoms`
--

INSERT INTO `eoms` (`eoms_id`, `eoms_name`) VALUES
(1, 'full_safe'),
(2, 'esophoria'),
(3, 'esotropia'),
(4, 'exotropia'),
(5, 'hyperphoria'),
(6, 'hypertropia'),
(7, 'hypophoria'),
(8, 'hypotropia'),
(9, 'cyclophoria'),
(10, 'cyclotropia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
