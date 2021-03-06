-- MySQL Script generated by MySQL Workbench
-- 04/25/15 12:45:13
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema compute
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `compute` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `compute` ;

-- -----------------------------------------------------
-- Table `compute`.`record`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`record` (
  `record_id` INT NOT NULL AUTO_INCREMENT,
  `professional_fee` DECIMAL(5,2) NULL,
  `frames_price` DECIMAL(5,2) NULL,
  `lenses_price` DECIMAL(5,2) NULL,
  `contacts_price` DECIMAL(5,2) NULL,
  `solutions_price` DECIMAL(5,2) NULL,
  `ancilliary_procedures` DECIMAL(5,2) NULL,
  `others` DECIMAL(5,2) NULL,
  `senior_citizen` DECIMAL(5,2) NULL,
  `person_w_disability` DECIMAL(5,2) NULL,
  `total` DECIMAL(5,2) NULL,
  `deposit` DECIMAL(5,2) NULL,
  `balance` DECIMAL(5,2) NULL,
  PRIMARY KEY (`record_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`insurance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`insurance` (
  `insurance_id` INT NOT NULL AUTO_INCREMENT,
  `insurance_name` VARCHAR(45) NOT NULL,
  `insurance_description` VARCHAR(45) NULL,
  `insurance_percentage` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`insurance_id`),
  UNIQUE INDEX `insurance_name_UNIQUE` (`insurance_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`contact_lens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`contact_lens` (
  `contact_lens_id` INT NOT NULL AUTO_INCREMENT,
  `contact_lens_name` VARCHAR(45) NOT NULL,
  `contact_lens_description` VARCHAR(45) NULL,
  PRIMARY KEY (`contact_lens_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`city`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`city` (
  `city_id` INT NOT NULL AUTO_INCREMENT,
  `city_name` VARCHAR(45) NOT NULL,
  `city_code` INT NULL,
  PRIMARY KEY (`city_id`),
  UNIQUE INDEX `city_name_UNIQUE` (`city_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`discount`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`discount` (
  `discount_id` INT NOT NULL AUTO_INCREMENT,
  `discount_name` VARCHAR(45) NOT NULL,
  `discount_description` VARCHAR(45) NULL,
  `discount_percentage` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`discount_id`),
  UNIQUE INDEX `discount_name_UNIQUE` (`discount_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`eoms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`eoms` (
  `eoms_id` INT NOT NULL AUTO_INCREMENT,
  `eoms_name` VARCHAR(45) NOT NULL,
  `eoms_description` VARCHAR(45) NULL,
  PRIMARY KEY (`eoms_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `auth_key` VARCHAR(32) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `password_reset_token` VARCHAR(255) NULL,
  `email` VARCHAR(255) NOT NULL,
  `role` SMALLINT(6) NOT NULL DEFAULT 10,
  `status` SMALLINT(6) NOT NULL DEFAULT 10,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `middlename` VARCHAR(255) NULL,
  `birthday` DATE NOT NULL,
  `gender` VARCHAR(1) NOT NULL,
  `city_city_id` INT NOT NULL,
  `home_address` VARCHAR(255) NOT NULL,
  `company_address` VARCHAR(255) NULL,
  `company_name` VARCHAR(45) NULL,
  `cel` VARCHAR(45) NULL,
  `tel` VARCHAR(45) NULL,
  `fb` VARCHAR(75) NULL,
  `allergies` LONGTEXT NULL,
  `medications` LONGTEXT NULL,
  `treatments` LONGTEXT NULL,
  `eyeglasses` VARCHAR(1) NOT NULL,
  `eyeglasses_age` VARCHAR(45) NULL,
  `contact_lens` VARCHAR(1) NOT NULL,
  `contact_lens_age` VARCHAR(45) NULL,
  `contact_lens_id` INT NULL,
  `blindness_grand` TINYINT(1) NOT NULL,
  `blindness_parents` TINYINT(1) NOT NULL,
  `blindness_siblings` TINYINT(1) NOT NULL,
  `blindness_children` TINYINT(1) NOT NULL,
  `cataracts_grand` TINYINT(1) NOT NULL,
  `cataracts_parents` TINYINT(1) NOT NULL,
  `cataracts_siblings` TINYINT(1) NOT NULL,
  `cataracts_children` TINYINT(1) NOT NULL,
  `crossed_eyes_grand` TINYINT(1) NOT NULL,
  `crossed_eyes_parents` TINYINT(1) NOT NULL,
  `crossed_eyes_siblings` TINYINT(1) NOT NULL,
  `crossed_eyes_children` TINYINT(1) NOT NULL,
  `glaucoma_grand` TINYINT(1) NOT NULL,
  `glaucoma_parents` TINYINT(1) NOT NULL,
  `glaucoma_siblings` TINYINT(1) NOT NULL,
  `glaucoma_children` TINYINT(1) NOT NULL,
  `macular_degeneration_grand` TINYINT(1) NOT NULL,
  `macular_degeneration_parents` TINYINT(1) NOT NULL,
  `macular_degeneration_siblings` TINYINT(1) NOT NULL,
  `macular_degeneration_children` TINYINT(1) NOT NULL,
  `retinal_detachment_grand` TINYINT(1) NOT NULL,
  `retinal_detachment_parents` TINYINT(1) NOT NULL,
  `retinal_detachment_siblings` TINYINT(1) NOT NULL,
  `retinal_detachment_children` TINYINT(1) NOT NULL,
  `arthritis_grand` TINYINT(1) NOT NULL,
  `arthritis_parents` TINYINT(1) NOT NULL,
  `arthritis_siblings` TINYINT(1) NOT NULL,
  `arthritis_children` TINYINT(1) NOT NULL,
  `cancer_grand` TINYINT(1) NOT NULL,
  `cancer_parents` TINYINT(1) NOT NULL,
  `cancer_siblings` TINYINT(1) NOT NULL,
  `cancer_children` TINYINT(1) NOT NULL,
  `diabetes_grand` TINYINT(1) NOT NULL,
  `diabetes_parents` TINYINT(1) NOT NULL,
  `diabetes_siblings` TINYINT(1) NOT NULL,
  `diabetes_children` TINYINT(1) NOT NULL,
  `heart_disease_grand` TINYINT(1) NOT NULL,
  `heart_disease_parents` TINYINT(1) NOT NULL,
  `heart_disease_siblings` TINYINT(1) NOT NULL,
  `heart_disease_children` TINYINT(1) NOT NULL,
  `high_blood_pressure_grand` TINYINT(1) NOT NULL,
  `high_blood_pressure_parents` TINYINT(1) NOT NULL,
  `high_blood_pressure_siblings` TINYINT(1) NOT NULL,
  `high_blood_pressure_children` TINYINT(1) NOT NULL,
  `kidney_disease_grand` TINYINT(1) NOT NULL,
  `kidney_disease_parents` TINYINT(1) NOT NULL,
  `kidney_disease_siblings` TINYINT(1) NOT NULL,
  `kidney_disease_children` TINYINT(1) NOT NULL,
  `lupus_grand` TINYINT(1) NOT NULL,
  `lupus_parents` TINYINT(1) NOT NULL,
  `lupus_siblings` TINYINT(1) NOT NULL,
  `lupus_children` TINYINT(1) NOT NULL,
  `thyroid_disease_grand` TINYINT(1) NOT NULL,
  `thyroid_disease_parents` TINYINT(1) NOT NULL,
  `thyroid_disease_siblings` TINYINT(1) NOT NULL,
  `thyroid_disease_children` TINYINT(1) NOT NULL,
  `others` LONGTEXT NULL,
  `headaches` TINYINT(1) NOT NULL,
  `migrains` TINYINT(1) NOT NULL,
  `seizures` TINYINT(1) NOT NULL,
  `loss_of_vision` TINYINT(1) NOT NULL,
  `blurred_vision` TINYINT(1) NOT NULL,
  `distorted_vision` TINYINT(1) NOT NULL,
  `loss_of_side_vision` TINYINT(1) NOT NULL,
  `double_vision` TINYINT(1) NOT NULL,
  `dryness_vision` TINYINT(1) NOT NULL,
  `mucous_discharge` TINYINT(1) NOT NULL,
  `redness` TINYINT(1) NOT NULL,
  `sandy_gritty_feeling` TINYINT(1) NOT NULL,
  `itching` TINYINT(1) NOT NULL,
  `burning` TINYINT(1) NOT NULL,
  `foreign_body_sensation` TINYINT(1) NOT NULL,
  `excess_tearing_watering` TINYINT(1) NOT NULL,
  `glare_light_sensitivity` TINYINT(1) NOT NULL,
  `eye_pain_soreness` TINYINT(1) NOT NULL,
  `chronic_infection_of_eye_or_lid` TINYINT(1) NOT NULL,
  `sties_chalazion` TINYINT(1) NOT NULL,
  `flashes_floaters_of_vision` TINYINT(1) NOT NULL,
  `tired_eyes` TINYINT(1) NOT NULL,
  `sports` LONGTEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  INDEX `fk_user_city1_idx` (`city_city_id` ASC),
  INDEX `fk_user_contact_lens1_idx` (`contact_lens_id` ASC),
  CONSTRAINT `fk_user_city1`
    FOREIGN KEY (`city_city_id`)
    REFERENCES `compute`.`city` (`city_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_contact_lens1`
    FOREIGN KEY (`contact_lens_id`)
    REFERENCES `compute`.`contact_lens` (`contact_lens_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`wear_mode`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`wear_mode` (
  `wear_mode_id` INT NOT NULL AUTO_INCREMENT,
  `wear_mode_name` VARCHAR(45) NOT NULL,
  `wear_mode_description` VARCHAR(45) NULL,
  PRIMARY KEY (`wear_mode_id`),
  UNIQUE INDEX `wear_mode_name_UNIQUE` (`wear_mode_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`solutions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`solutions` (
  `solutions_id` INT NOT NULL AUTO_INCREMENT,
  `solutions_name` VARCHAR(45) NOT NULL,
  `solutions_description` VARCHAR(45) NULL,
  PRIMARY KEY (`solutions_id`),
  UNIQUE INDEX `solutions_name_UNIQUE` (`solutions_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`design`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`design` (
  `design_id` INT NOT NULL AUTO_INCREMENT,
  `design_name` VARCHAR(45) NOT NULL,
  `design_description` VARCHAR(45) NULL,
  UNIQUE INDEX `design_name_UNIQUE` (`design_name` ASC),
  PRIMARY KEY (`design_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`instruction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`instruction` (
  `instruction_id` INT NOT NULL AUTO_INCREMENT,
  `instruction_name` VARCHAR(45) NOT NULL,
  `instruction_description` VARCHAR(45) NULL,
  PRIMARY KEY (`instruction_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compute`.`acuity`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compute`.`acuity` (
  `acuity_id` INT NOT NULL AUTO_INCREMENT,
  `acuity_name` VARCHAR(45) NOT NULL,
  `acuity_description` VARCHAR(45) NULL,
  PRIMARY KEY (`acuity_id`),
  UNIQUE INDEX `acuity_name_UNIQUE` (`acuity_name` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
