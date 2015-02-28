-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2015 at 09:54 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softdev_cacao_jocelyn_ourspace`
--
CREATE DATABASE IF NOT EXISTS `softdev_cacao_jocelyn_ourspace` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `softdev_cacao_jocelyn_ourspace`;

-- --------------------------------------------------------

--
-- Table structure for table `myaddress`
--

CREATE TABLE IF NOT EXISTS `myaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `home_address` varchar(50) DEFAULT NULL,
  `landline` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `myaddress`
--

INSERT INTO `myaddress` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `created_at`, `home_address`, `landline`, `cellphone`) VALUES
(1, 'Jocelyn', 'Alfaro', 'Cacao', 'F', '2015-02-28 00:54:04', 'Brgy. Marcelo, Paranaque City', '821-1588', '09258003066'),
(2, 'Frances Aeya Marie', 'Tomboc', 'Ramil', 'F', '2015-02-28 05:46:12', 'Sunrise', '', ''),
(3, 'Alyssa Mae', 'Culla', 'Acle', 'F', '2015-02-28 06:26:02', 'Makati', '', ''),
(4, 'Francis Cornelius', 'Diosanta', 'Horca', 'M', '2015-02-28 08:29:30', 'Pasay', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mycomment`
--

CREATE TABLE IF NOT EXISTS `mycomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `myaddress_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mycomment_ibfk_1` (`myaddress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mycomment`
--

INSERT INTO `mycomment` (`id`, `myaddress_id`, `author`, `body`, `created_at`) VALUES
(1, 1, 'Jocelyn Cacao', 'Is this for a book? Though the topic is common, the author managed to make twists with the plot and characters. I would totally recommend this.', '2015-02-28 00:56:07'),
(2, 2, 'Marie', 'Bestseller, ready for movie adaptation!', '2015-02-28 05:58:08'),
(3, 3, 'Aly', 'Varying gender, culture and age can relate to this story.', '2015-02-28 08:34:09'),
(4, 2, 'Aeya', 'Best romantic comedy of all times!', '2015-02-28 08:35:18'),
(5, 4, 'Cornelius', 'While not the director''s canniest piece of filmmaking, it''s unquestionably his angriest, politically motivated achievement.', '2015-02-28 08:48:20'),
(6, 4, 'Francis', 'While not the director''s canniest piece of filmmaking, it''s unquestionably his angriest, politically motivated achievement.', '2015-02-28 08:49:34');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mycomment`
--
ALTER TABLE `mycomment`
  ADD CONSTRAINT `mycomment_ibfk_1` FOREIGN KEY (`myaddress_id`) REFERENCES `myaddress` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
