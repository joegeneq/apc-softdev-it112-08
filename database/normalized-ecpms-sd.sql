-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2015 at 07:25 PM
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
CREATE DATABASE IF NOT EXISTS `ecpms-sd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecpms-sd`;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
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
-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) NOT NULL,
  `city_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  UNIQUE KEY `city_name_UNIQUE` (`city_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `city` (`city_id`, `city_name`, `city_code`) VALUES
(1, 'Makati', 1200),
(2, 'Pasay', 1300);
-- --------------------------------------------------------

--
-- Table structure for table `contact_lens`
--

CREATE TABLE IF NOT EXISTS `contact_lens` (
  `contact_lens_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_lens_name` varchar(45) NOT NULL,
  `contact_lens_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contact_lens_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `contact_lens` (`contact_lens_id`, `contact_lens_name`, `contact_lens_description`) VALUES
(1, 'Rigid', NULL),
(2, 'Soft', NULL),
(3, 'Other', NULL);
-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE IF NOT EXISTS `design` (
  `design_id` int(11) NOT NULL AUTO_INCREMENT,
  `design_name` varchar(45) NOT NULL,
  `design_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`design_id`),
  UNIQUE KEY `design_name_UNIQUE` (`design_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `design` (`design_id`, `design_name`, `design_description`) VALUES
(1, 'CR39', NULL),
(2, 'Hi-index', NULL),
(3, 'Polycarb', NULL),
(4, 'Anti-UV', NULL),
(7, 'MC', NULL),
(8, 'Progressive', NULL),
(9, 'DV', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eoms`
--

CREATE TABLE IF NOT EXISTS `eoms` (
  `eoms_id` int(11) NOT NULL AUTO_INCREMENT,
  `eoms_name` varchar(45) NOT NULL,
  `eoms_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`eoms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
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
-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE IF NOT EXISTS `instruction` (
  `instruction_id` int(11) NOT NULL AUTO_INCREMENT,
  `instruction_name` varchar(45) NOT NULL,
  `instruction_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`instruction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `instruction` (`instruction_id`, `instruction_name`, `instruction_description`) VALUES
(1, 'constant wear', NULL),
(2, 'far only', NULL),
(3, 'near only', NULL),
(4, 'intermediate', NULL);
-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insurance_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_name` varchar(45) NOT NULL,
  `insurance_description` varchar(45) DEFAULT NULL,
  `insurance_percentage` decimal(5,2) NOT NULL,
  PRIMARY KEY (`insurance_id`),
  UNIQUE KEY `insurance_name_UNIQUE` (`insurance_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
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

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
  `solutions_id` int(11) NOT NULL AUTO_INCREMENT,
  `solutions_name` varchar(45) NOT NULL,
  `solutions_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`solutions_id`),
  UNIQUE KEY `solutions_name_UNIQUE` (`solutions_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `city_city_id` int(11) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `cel` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `fb` varchar(75) DEFAULT NULL,
  `allergies` longtext,
  `medications` longtext,
  `treatments` longtext,
  `eyeglasses` varchar(1) NOT NULL,
  `eyeglasses_age` varchar(45) DEFAULT NULL,
  `contact_lens` varchar(1) NOT NULL,
  `contact_lens_age` varchar(45) DEFAULT NULL,
  `contact_lens_id` int(11) DEFAULT NULL,
  `blindness_grand` tinyint(1) NOT NULL,
  `blindness_parents` tinyint(1) NOT NULL,
  `blindness_siblings` tinyint(1) NOT NULL,
  `blindness_children` tinyint(1) NOT NULL,
  `cataracts_grand` tinyint(1) NOT NULL,
  `cataracts_parents` tinyint(1) NOT NULL,
  `cataracts_siblings` tinyint(1) NOT NULL,
  `cataracts_children` tinyint(1) NOT NULL,
  `crossed_eyes_grand` tinyint(1) NOT NULL,
  `crossed_eyes_parents` tinyint(1) NOT NULL,
  `crossed_eyes_siblings` tinyint(1) NOT NULL,
  `crossed_eyes_children` tinyint(1) NOT NULL,
  `glaucoma_grand` tinyint(1) NOT NULL,
  `glaucoma_parents` tinyint(1) NOT NULL,
  `glaucoma_siblings` tinyint(1) NOT NULL,
  `glaucoma_children` tinyint(1) NOT NULL,
  `macular_degeneration_grand` tinyint(1) NOT NULL,
  `macular_degeneration_parents` tinyint(1) NOT NULL,
  `macular_degeneration_siblings` tinyint(1) NOT NULL,
  `macular_degeneration_children` tinyint(1) NOT NULL,
  `retinal_detachment_grand` tinyint(1) NOT NULL,
  `retinal_detachment_parents` tinyint(1) NOT NULL,
  `retinal_detachment_siblings` tinyint(1) NOT NULL,
  `retinal_detachment_children` tinyint(1) NOT NULL,
  `arthritis_grand` tinyint(1) NOT NULL,
  `arthritis_parents` tinyint(1) NOT NULL,
  `arthritis_siblings` tinyint(1) NOT NULL,
  `arthritis_children` tinyint(1) NOT NULL,
  `cancer_grand` tinyint(1) NOT NULL,
  `cancer_parents` tinyint(1) NOT NULL,
  `cancer_siblings` tinyint(1) NOT NULL,
  `cancer_children` tinyint(1) NOT NULL,
  `diabetes_grand` tinyint(1) NOT NULL,
  `diabetes_parents` tinyint(1) NOT NULL,
  `diabetes_siblings` tinyint(1) NOT NULL,
  `diabetes_children` tinyint(1) NOT NULL,
  `heart_disease_grand` tinyint(1) NOT NULL,
  `heart_disease_parents` tinyint(1) NOT NULL,
  `heart_disease_siblings` tinyint(1) NOT NULL,
  `heart_disease_children` tinyint(1) NOT NULL,
  `high_blood_pressure_grand` tinyint(1) NOT NULL,
  `high_blood_pressure_parents` tinyint(1) NOT NULL,
  `high_blood_pressure_siblings` tinyint(1) NOT NULL,
  `high_blood_pressure_children` tinyint(1) NOT NULL,
  `kidney_disease_grand` tinyint(1) NOT NULL,
  `kidney_disease_parents` tinyint(1) NOT NULL,
  `kidney_disease_siblings` tinyint(1) NOT NULL,
  `kidney_disease_children` tinyint(1) NOT NULL,
  `lupus_grand` tinyint(1) NOT NULL,
  `lupus_parents` tinyint(1) NOT NULL,
  `lupus_siblings` tinyint(1) NOT NULL,
  `lupus_children` tinyint(1) NOT NULL,
  `thyroid_disease_grand` tinyint(1) NOT NULL,
  `thyroid_disease_parents` tinyint(1) NOT NULL,
  `thyroid_disease_siblings` tinyint(1) NOT NULL,
  `thyroid_disease_children` tinyint(1) NOT NULL,
  `others` longtext,
  `headaches` tinyint(1) NOT NULL,
  `migrains` tinyint(1) NOT NULL,
  `seizures` tinyint(1) NOT NULL,
  `loss_of_vision` tinyint(1) NOT NULL,
  `blurred_vision` tinyint(1) NOT NULL,
  `distorted_vision` tinyint(1) NOT NULL,
  `loss_of_side_vision` tinyint(1) NOT NULL,
  `double_vision` tinyint(1) NOT NULL,
  `dryness_vision` tinyint(1) NOT NULL,
  `mucous_discharge` tinyint(1) NOT NULL,
  `redness` tinyint(1) NOT NULL,
  `sandy_gritty_feeling` tinyint(1) NOT NULL,
  `itching` tinyint(1) NOT NULL,
  `burning` tinyint(1) NOT NULL,
  `foreign_body_sensation` tinyint(1) NOT NULL,
  `excess_tearing_watering` tinyint(1) NOT NULL,
  `glare_light_sensitivity` tinyint(1) NOT NULL,
  `eye_pain_soreness` tinyint(1) NOT NULL,
  `chronic_infection_of_eye_or_lid` tinyint(1) NOT NULL,
  `sties_chalazion` tinyint(1) NOT NULL,
  `flashes_floaters_of_vision` tinyint(1) NOT NULL,
  `tired_eyes` tinyint(1) NOT NULL,
  `sports` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_user_city1_idx` (`city_city_id`),
  KEY `fk_user_contact_lens1_idx` (`contact_lens_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `wear_mode` (`wear_mode_id`, `wear_mode_name`, `wear_mode_description`) VALUES
(1, 'daily', NULL),
(2, 'weekly', NULL),
(3, 'monthly', NULL),
(4, 'extended', NULL);
--
-- Constraints for dumped tables
--

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `fk_record_insurance1` FOREIGN KEY (`insurance_id`) REFERENCES `insurance` (`insurance_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_user2` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_wear_mode1` FOREIGN KEY (`wear_mode_id`) REFERENCES `wear_mode` (`wear_mode_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_solutions1` FOREIGN KEY (`solutions_id`) REFERENCES `solutions` (`solutions_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_design1` FOREIGN KEY (`design_id`) REFERENCES `design` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_instruction1` FOREIGN KEY (`instruction_id`) REFERENCES `instruction` (`instruction_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_eoms1` FOREIGN KEY (`eoms_id`) REFERENCES `eoms` (`eoms_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_user1` FOREIGN KEY (`employee_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_city1` FOREIGN KEY (`city_city_id`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_contact_lens1` FOREIGN KEY (`contact_lens_id`) REFERENCES `contact_lens` (`contact_lens_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
