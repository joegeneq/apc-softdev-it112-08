-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 08:09 AM
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
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `patient_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_signature` longblob,
  `agreed_date` datetime DEFAULT NULL,
  `employee_signature` longblob,
  `complaints` longtext,
  `diagnostic_result` longtext,
  `management` longtext,
  `plan_TCB` longtext,
  `plan_next_visit` date DEFAULT NULL,
  `professional_fee` decimal(7,2) DEFAULT NULL,
  `frames_price` decimal(7,2) DEFAULT NULL,
  `lenses_price` decimal(7,2) DEFAULT NULL,
  `contacts_price` decimal(7,2) DEFAULT NULL,
  `solutions_price` decimal(7,2) DEFAULT NULL,
  `ancilliary_procedures` decimal(7,2) DEFAULT NULL,
  `others` decimal(7,2) DEFAULT NULL,
  `insurance_id` int(11) DEFAULT NULL,
  `senior_citizen` decimal(7,2) DEFAULT NULL,
  `person_w_disability` decimal(7,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `d_od_sph` int(11) DEFAULT NULL,
  `d_od_cyl` int(11) DEFAULT NULL,
  `d_od_axis` int(11) DEFAULT NULL,
  `d_od_prism` int(11) DEFAULT NULL,
  `d_od_add` int(11) DEFAULT NULL,
  `d_os_sph` int(11) DEFAULT NULL,
  `d_os_cyl` int(11) DEFAULT NULL,
  `d_os_axis` int(11) DEFAULT NULL,
  `d_os_prism` int(11) DEFAULT NULL,
  `d_os_add` int(11) DEFAULT NULL,
  `n_od_sph` int(11) DEFAULT NULL,
  `n_od_cyl_cyl` int(11) DEFAULT NULL,
  `n_od_axis` int(11) DEFAULT NULL,
  `n_od_prism` int(11) DEFAULT NULL,
  `n_od_add` int(11) DEFAULT NULL,
  `n_os_sph` int(11) DEFAULT NULL,
  `n_os_cyl` int(11) DEFAULT NULL,
  `n_os_axis` int(11) DEFAULT NULL,
  `n_os_prism` int(11) DEFAULT NULL,
  `n_os_add` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `instruction_id` int(11) DEFAULT NULL,
  `od_bc` int(11) DEFAULT NULL,
  `od_diam` int(11) DEFAULT NULL,
  `od_power` int(11) DEFAULT NULL,
  `od_color` varchar(45) DEFAULT NULL,
  `os_bc` int(11) DEFAULT NULL,
  `os_diam` int(11) DEFAULT NULL,
  `os_power` int(11) DEFAULT NULL,
  `os_color` varchar(45) DEFAULT NULL,
  `wear_mode_id` int(11) DEFAULT NULL,
  `solutions_id` int(11) DEFAULT NULL,
  `v_d_od_sc` int(11) DEFAULT NULL,
  `v_d_od_cc` int(11) DEFAULT NULL,
  `v_d_od_ph` int(11) DEFAULT NULL,
  `v_n_od_sc` int(11) DEFAULT NULL,
  `v_n_od_cc` int(11) DEFAULT NULL,
  `v_d_os_sc` int(11) DEFAULT NULL,
  `v_d_os_cc` int(11) DEFAULT NULL,
  `v_d_os_ph` int(11) DEFAULT NULL,
  `v_n_os_sc` int(11) DEFAULT NULL,
  `v_n_os_cc` int(11) DEFAULT NULL,
  `v_d_ou_sc` int(11) DEFAULT NULL,
  `v_d_ou_cc` int(11) DEFAULT NULL,
  `v_d_ou_ph` int(11) DEFAULT NULL,
  `v_n_ou_sc` int(11) DEFAULT NULL,
  `v_n_ou_cc` int(11) DEFAULT NULL,
  `r_a_od` decimal(5,2) DEFAULT NULL,
  `r_a_os` decimal(5,2) DEFAULT NULL,
  `r_m_od` decimal(5,2) DEFAULT NULL,
  `r_m_os` decimal(5,2) DEFAULT NULL,
  `r_c_od` decimal(5,2) DEFAULT NULL,
  `r_c_os` decimal(5,2) DEFAULT NULL,
  `r_o_od` decimal(5,2) DEFAULT NULL,
  `r_o_os` decimal(5,2) DEFAULT NULL,
  `r_w_od` decimal(5,2) DEFAULT NULL,
  `r_w_os` decimal(5,2) DEFAULT NULL,
  `k_h_od` int(11) DEFAULT NULL,
  `k_h_os` int(11) DEFAULT NULL,
  `k_v_od` int(11) DEFAULT NULL,
  `k_v_os` int(11) DEFAULT NULL,
  `k_c_od` int(11) DEFAULT NULL,
  `k_c_os` int(11) DEFAULT NULL,
  `k_a_od` int(11) DEFAULT NULL,
  `k_a_os` int(11) DEFAULT NULL,
  `t_od` int(11) DEFAULT NULL,
  `t_os` int(11) DEFAULT NULL,
  `bp_s` int(11) DEFAULT NULL,
  `bp_d` int(11) DEFAULT NULL,
  `p_d_l` int(11) DEFAULT NULL,
  `p_d_v` int(11) DEFAULT NULL,
  `p_n_l` int(11) DEFAULT NULL,
  `p_n_v` int(11) DEFAULT NULL,
  `p_d_bi` int(11) DEFAULT NULL,
  `p_d_lbu` int(11) DEFAULT NULL,
  `p_n_bi` int(11) DEFAULT NULL,
  `p_n_lbu` int(11) DEFAULT NULL,
  `p_d_bo` int(11) DEFAULT NULL,
  `p_d_lbo` int(11) DEFAULT NULL,
  `p_n_bo` int(11) DEFAULT NULL,
  `p_n_lbo` int(11) DEFAULT NULL,
  `pupil_p_od` varchar(1) DEFAULT NULL,
  `pupil_p_os` varchar(1) DEFAULT NULL,
  `pupil_s_od` varchar(1) DEFAULT NULL,
  `pupil_s_os` varchar(1) DEFAULT NULL,
  `pupil_rapd` varchar(1) DEFAULT NULL,
  `eoms_id` int(11) DEFAULT NULL,
  `m_dominant` varchar(45) DEFAULT NULL,
  `m_other` varchar(45) DEFAULT NULL,
  `m_p_accom` int(11) DEFAULT NULL,
  `m_a_accom` int(11) DEFAULT NULL,
  `m_p_conver_num` int(11) DEFAULT NULL,
  `m_p_conver_den` int(11) DEFAULT NULL,
  `color_test` varchar(45) DEFAULT NULL,
  `stereo_w4d` varchar(45) DEFAULT NULL,
  `confrontation_avf` varchar(45) DEFAULT NULL,
  `gross_exam` longtext,
  `ee_lids_od` varchar(45) DEFAULT NULL,
  `ee_lids_os` varchar(45) DEFAULT NULL,
  `ee_c_od` varchar(45) DEFAULT NULL,
  `ee_c_os` varchar(45) DEFAULT NULL,
  `ee_d_od` varchar(45) DEFAULT NULL,
  `ee_d_os` varchar(45) DEFAULT NULL,
  `ee_l_od` varchar(45) DEFAULT NULL,
  `ee_l_os` varchar(45) DEFAULT NULL,
  `ee_t_od` varchar(45) DEFAULT NULL,
  `ee_t_os` varchar(45) DEFAULT NULL,
  `ee_s_od` varchar(45) DEFAULT NULL,
  `ee_s_os` varchar(45) DEFAULT NULL,
  `ee_od` longblob,
  `ee_os` longblob,
  `se_c_od` varchar(45) DEFAULT NULL,
  `se_c_os` varchar(45) DEFAULT NULL,
  `se_a_od` varchar(45) DEFAULT NULL,
  `se_a_os` varchar(45) DEFAULT NULL,
  `se_i_od` varchar(45) DEFAULT NULL,
  `se_i_os` varchar(45) DEFAULT NULL,
  `se_l_od` varchar(45) DEFAULT NULL,
  `se_l_os` varchar(45) DEFAULT NULL,
  `se_v_od` varchar(45) DEFAULT NULL,
  `se_v_os` varchar(45) DEFAULT NULL,
  `se_od` longblob,
  `se_os` longblob,
  `f_me_od` int(11) DEFAULT NULL,
  `f_me_os` int(11) DEFAULT NULL,
  `f_d_od` int(11) DEFAULT NULL,
  `f_d_os` int(11) DEFAULT NULL,
  `f_c_od` int(11) DEFAULT NULL,
  `f_c_os` int(11) DEFAULT NULL,
  `f_v_od` varchar(45) DEFAULT NULL,
  `f_v_os` varchar(45) DEFAULT NULL,
  `f_p_od` varchar(45) DEFAULT NULL,
  `f_p_os` varchar(45) DEFAULT NULL,
  `f_ma_od` varchar(45) DEFAULT NULL,
  `f_m_os` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`record_id`),
  KEY `fk_record_insurance1_idx` (`insurance_id`),
  KEY `fk_record_user2_idx` (`patient_id`),
  KEY `fk_record_wear_mode1_idx` (`wear_mode_id`),
  KEY `fk_record_solutions1_idx` (`solutions_id`),
  KEY `fk_record_design1_idx` (`design_id`),
  KEY `fk_record_instruction1_idx` (`instruction_id`),
  KEY `fk_record_eoms1_idx` (`eoms_id`),
  KEY `fk_record_user1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `record`
--
DROP TRIGGER IF EXISTS `compute_retotal_balance`;
DELIMITER //
CREATE TRIGGER `compute_retotal_balance` BEFORE UPDATE ON `record`
 FOR EACH ROW SET NEW.total = NEW.professional_fee + NEW.frames_price + NEW.lenses_price + NEW.contacts_price + NEW.solutions_price + NEW.ancilliary_procedures + NEW.others - NEW.senior_citizen - NEW.person_w_disability,
	NEW.balance = NEW.total - NEW.deposit
//
DELIMITER ;
DROP TRIGGER IF EXISTS `compute_total`;
DELIMITER //
CREATE TRIGGER `compute_total` BEFORE INSERT ON `record`
 FOR EACH ROW SET NEW.total = NEW.professional_fee + NEW.frames_price + NEW.lenses_price + NEW.contacts_price + NEW.solutions_price + NEW.ancilliary_procedures + NEW.others - NEW.senior_citizen - NEW.person_w_disability
//
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `fk_record_design1` FOREIGN KEY (`design_id`) REFERENCES `design` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_eoms1` FOREIGN KEY (`eoms_id`) REFERENCES `eoms` (`eoms_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_instruction1` FOREIGN KEY (`instruction_id`) REFERENCES `instruction` (`instruction_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_insurance1` FOREIGN KEY (`insurance_id`) REFERENCES `insurance` (`insurance_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_solutions1` FOREIGN KEY (`solutions_id`) REFERENCES `solutions` (`solutions_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_user1` FOREIGN KEY (`employee_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_user2` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_wear_mode1` FOREIGN KEY (`wear_mode_id`) REFERENCES `wear_mode` (`wear_mode_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
