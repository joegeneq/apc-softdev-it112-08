-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 08:12 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_lens`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `design`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `record_id` int(11) NOT NULL,
  `v_d_od_sc` int(11) NOT NULL,
  `v_d_od_cc` int(11) NOT NULL,
  `v_d_od_ph` int(11) NOT NULL,
  `v_n_od_sc` int(11) NOT NULL,
  `v_n_od_cc` int(11) NOT NULL,
  `v_d_os_sc` int(11) NOT NULL,
  `v_d_os_cc` int(11) NOT NULL,
  `v_d_os_ph` int(11) NOT NULL,
  `v_n_os_sc` int(11) NOT NULL,
  `v_n_os_cc` int(11) NOT NULL,
  `v_d_ou_sc` int(11) NOT NULL,
  `v_d_ou_cc` int(11) NOT NULL,
  `v_d_ou_ph` int(11) NOT NULL,
  `v_n_ou_sc` int(11) NOT NULL,
  `v_n_ou_cc` int(11) NOT NULL,
  `r_a_od` decimal(5,2) NOT NULL,
  `r_a_os` decimal(5,2) NOT NULL,
  `r_m_od` decimal(5,2) NOT NULL,
  `r_m_os` decimal(5,2) NOT NULL,
  `r_c_od` decimal(5,2) NOT NULL,
  `r_c_os` decimal(5,2) NOT NULL,
  `r_o_od` decimal(5,2) NOT NULL,
  `r_o_os` decimal(5,2) NOT NULL,
  `r_w_od` decimal(5,2) NOT NULL,
  `r_w_os` decimal(5,2) NOT NULL,
  `k_h_od` int(11) NOT NULL,
  `k_h_os` int(11) NOT NULL,
  `k_v_od` int(11) NOT NULL,
  `k_v_os` int(11) NOT NULL,
  `k_c_od` int(11) NOT NULL,
  `k_c_os` int(11) NOT NULL,
  `k_a_od` int(11) NOT NULL,
  `k_a_os` int(11) NOT NULL,
  `t_od` int(11) NOT NULL,
  `t_os` int(11) NOT NULL,
  `bp_s` int(11) NOT NULL,
  `bp_d` int(11) NOT NULL,
  `p_d_l` int(11) NOT NULL,
  `p_d_v` int(11) NOT NULL,
  `p_n_l` int(11) NOT NULL,
  `p_n_v` int(11) NOT NULL,
  `p_d_bi` int(11) NOT NULL,
  `p_d_lbu` int(11) NOT NULL,
  `p_n_bi` int(11) NOT NULL,
  `p_n_lbu` int(11) NOT NULL,
  `p_d_bo` int(11) NOT NULL,
  `p_d_lbo` int(11) NOT NULL,
  `p_n_bo` int(11) NOT NULL,
  `p_n_lbo` int(11) NOT NULL,
  `pupil_p_od` varchar(1) NOT NULL,
  `pupil_p_os` varchar(1) NOT NULL,
  `pupil_s_od` varchar(1) NOT NULL,
  `pupil_s_os` varchar(1) NOT NULL,
  `pupil_rapd` varchar(1) NOT NULL,
  `eoms_id` int(11) NOT NULL,
  `m_eoms_id` int(11) NOT NULL,
  `m_dominant` varchar(45) NOT NULL,
  `m_other` varchar(45) NOT NULL,
  `m_p_accom` int(11) NOT NULL,
  `m_a_accom` int(11) NOT NULL,
  `m_p_conver_num` int(11) NOT NULL,
  `m_p_conver_den` int(11) NOT NULL,
  `color_test` varchar(45) NOT NULL,
  `stereo_w4d` varchar(45) NOT NULL,
  `confrontation_avf` varchar(45) NOT NULL,
  `gross_exam` longtext NOT NULL,
  `ee_lids_od` varchar(45) NOT NULL,
  `ee_lids_os` varchar(45) NOT NULL,
  `ee_c_od` varchar(45) NOT NULL,
  `ee_c_os` varchar(45) NOT NULL,
  `ee_d_od` varchar(45) NOT NULL,
  `ee_d_os` varchar(45) NOT NULL,
  `ee_l_od` varchar(45) NOT NULL,
  `ee_l_os` varchar(45) NOT NULL,
  `ee_t_od` varchar(45) NOT NULL,
  `ee_t_os` varchar(45) NOT NULL,
  `ee_s_od` varchar(45) NOT NULL,
  `ee_s_os` varchar(45) NOT NULL,
  `ee_od` longblob NOT NULL,
  `ee_os` longblob NOT NULL,
  `se_c_od` varchar(45) NOT NULL,
  `se_c_os` varchar(45) NOT NULL,
  `se_a_od` varchar(45) NOT NULL,
  `se_a_os` varchar(45) NOT NULL,
  `se_i_od` varchar(45) NOT NULL,
  `se_i_os` varchar(45) NOT NULL,
  `se_l_od` varchar(45) NOT NULL,
  `se_l_os` varchar(45) NOT NULL,
  `se_v_od` varchar(45) NOT NULL,
  `se_v_os` varchar(45) NOT NULL,
  `se_od` longblob NOT NULL,
  `se_os` longblob NOT NULL,
  `f_me_od` int(11) NOT NULL,
  `f_me_os` int(11) NOT NULL,
  `f_d_od` int(11) NOT NULL,
  `f_d_os` int(11) NOT NULL,
  `f_c_od` int(11) NOT NULL,
  `f_c_os` int(11) NOT NULL,
  `f_v_od` varchar(45) NOT NULL,
  `f_v_os` varchar(45) NOT NULL,
  `f_p_od` varchar(45) NOT NULL,
  `f_p_os` varchar(45) NOT NULL,
  `f_ma_od` varchar(45) NOT NULL,
  `f_m_os` varchar(45) NOT NULL,
  PRIMARY KEY (`record_id`),
  KEY `fk_evaluation_eoms1_idx` (`m_eoms_id`),
  KEY `fk_evaluation_record1_idx` (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE IF NOT EXISTS `instruction` (
  `instruction_id` int(11) NOT NULL AUTO_INCREMENT,
  `instruction_name` varchar(45) NOT NULL,
  `instruction_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`instruction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `instruction`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `record_id` int(11) NOT NULL,
  `d_od_sph` int(11) NOT NULL,
  `d_od_cyl` int(11) NOT NULL,
  `d_od_axis` int(11) NOT NULL,
  `d_od_prism` int(11) NOT NULL,
  `d_od_add` int(11) NOT NULL,
  `d_os_sph` int(11) NOT NULL,
  `d_os_cyl` int(11) NOT NULL,
  `d_os_axis` int(11) NOT NULL,
  `d_os_prism` int(11) NOT NULL,
  `d_os_add` int(11) NOT NULL,
  `n_od_sph` int(11) NOT NULL,
  `n_od_cyl_cyl` int(11) NOT NULL,
  `n_od_axis` int(11) NOT NULL,
  `n_od_prism` int(11) NOT NULL,
  `n_od_add` int(11) NOT NULL,
  `n_os_sph` int(11) NOT NULL,
  `n_os_cyl` int(11) NOT NULL,
  `n_os_axis` int(11) NOT NULL,
  `n_os_prism` int(11) NOT NULL,
  `n_os_add` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `instruction_id` int(11) NOT NULL,
  `od_bc` int(11) NOT NULL,
  `od_diam` int(11) NOT NULL,
  `od_power` int(11) NOT NULL,
  `od_color` varchar(45) NOT NULL,
  `os_bc` int(11) NOT NULL,
  `os_diam` int(11) NOT NULL,
  `os_power` int(11) NOT NULL,
  `os_color` varchar(45) NOT NULL,
  `wear_mode_id` int(11) DEFAULT NULL,
  `solutions_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`record_id`),
  KEY `fk_prescription_design1_idx` (`design_id`),
  KEY `fk_prescription_instruction1_idx` (`instruction_id`),
  KEY `fk_prescription_wear_mode1_idx` (`wear_mode_id`),
  KEY `fk_prescription_solutions1_idx` (`solutions_id`),
  KEY `fk_prescription_record1_idx` (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_signature` longblob NOT NULL,
  `agreed_date` datetime NOT NULL,
  `employee_signature` longblob NOT NULL,
  `complaints` longtext,
  `professional_fee` decimal(5,2) DEFAULT NULL,
  `frames_price` decimal(5,2) DEFAULT NULL,
  `lenses_price` decimal(5,2) DEFAULT NULL,
  `contacts_price` decimal(5,2) DEFAULT NULL,
  `solutions_price` decimal(5,2) DEFAULT NULL,
  `ancilliary_procedures` decimal(5,2) DEFAULT NULL,
  `others` decimal(5,2) DEFAULT NULL,
  `insurance_id` int(11) DEFAULT NULL,
  `senior_citizen` decimal(5,2) DEFAULT NULL,
  `person_w_disability` decimal(5,2) DEFAULT NULL,
  `deposit` decimal(5,2) DEFAULT NULL,
  `balance` decimal(5,2) DEFAULT NULL,
  `diagnostic_result` longtext NOT NULL,
  `management` longtext NOT NULL,
  `plan_TCB` longtext NOT NULL,
  `plan_next_visit` date NOT NULL,
  PRIMARY KEY (`record_id`),
  KEY `fk_record_insurance1_idx` (`insurance_id`),
  KEY `fk_record_user2_idx` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `city_city_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`, `firstname`, `lastname`, `middlename`, `birthday`, `gender`, `city_city_id`, `home_address`, `company_address`, `company_name`, `cel`, `tel`, `fb`, `allergies`, `medications`, `treatments`, `eyeglasses`, `eyeglasses_age`, `contact_lens`, `contact_lens_age`, `contact_lens_id`, `blindness_grand`, `blindness_parents`, `blindness_siblings`, `blindness_children`, `cataracts_grand`, `cataracts_parents`, `cataracts_siblings`, `cataracts_children`, `crossed_eyes_grand`, `crossed_eyes_parents`, `crossed_eyes_siblings`, `crossed_eyes_children`, `glaucoma_grand`, `glaucoma_parents`, `glaucoma_siblings`, `glaucoma_children`, `macular_degeneration_grand`, `macular_degeneration_parents`, `macular_degeneration_siblings`, `macular_degeneration_children`, `retinal_detachment_grand`, `retinal_detachment_parents`, `retinal_detachment_siblings`, `retinal_detachment_children`, `arthritis_grand`, `arthritis_parents`, `arthritis_siblings`, `arthritis_children`, `cancer_grand`, `cancer_parents`, `cancer_siblings`, `cancer_children`, `diabetes_grand`, `diabetes_parents`, `diabetes_siblings`, `diabetes_children`, `heart_disease_grand`, `heart_disease_parents`, `heart_disease_siblings`, `heart_disease_children`, `high_blood_pressure_grand`, `high_blood_pressure_parents`, `high_blood_pressure_siblings`, `high_blood_pressure_children`, `kidney_disease_grand`, `kidney_disease_parents`, `kidney_disease_siblings`, `kidney_disease_children`, `lupus_grand`, `lupus_parents`, `lupus_siblings`, `lupus_children`, `thyroid_disease_grand`, `thyroid_disease_parents`, `thyroid_disease_siblings`, `thyroid_disease_children`, `others`, `headaches`, `migrains`, `seizures`, `loss_of_vision`, `blurred_vision`, `distorted_vision`, `loss_of_side_vision`, `double_vision`, `dryness_vision`, `mucous_discharge`, `redness`, `sandy_gritty_feeling`, `itching`, `burning`, `foreign_body_sensation`, `excess_tearing_watering`, `glare_light_sensitivity`, `eye_pain_soreness`, `chronic_infection_of_eye_or_lid`, `sties_chalazion`, `flashes_floaters_of_vision`, `tired_eyes`, `sports`) VALUES
(2, 'admin', 'On135VxltIPpZ2jDkgMICxuGjckwDI4C', '$2y$13$d7n/3e8wZGszEI./ebDgT.wN/0/lG.viDF26ZYIyZeSglKIry0AgW', NULL, 'admin@gmail.com', 10, 10, 0, 0, 'admin', 'admin', 'admin', '0000-00-00', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `fk_evaluation_eoms1` FOREIGN KEY (`m_eoms_id`) REFERENCES `eoms` (`eoms_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluation_record1` FOREIGN KEY (`record_id`) REFERENCES `record` (`record_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `fk_prescription_design1` FOREIGN KEY (`design_id`) REFERENCES `design` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prescription_instruction1` FOREIGN KEY (`instruction_id`) REFERENCES `instruction` (`instruction_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prescription_record1` FOREIGN KEY (`record_id`) REFERENCES `record` (`record_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prescription_solutions1` FOREIGN KEY (`solutions_id`) REFERENCES `solutions` (`solutions_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prescription_wear_mode1` FOREIGN KEY (`wear_mode_id`) REFERENCES `wear_mode` (`wear_mode_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `fk_record_insurance1` FOREIGN KEY (`insurance_id`) REFERENCES `insurance` (`insurance_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_record_user2` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_city1` FOREIGN KEY (`city_city_id`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_contact_lens1` FOREIGN KEY (`contact_lens_id`) REFERENCES `contact_lens` (`contact_lens_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
