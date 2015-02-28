-- MySQL Script generated by MySQL Workbench
-- 02/24/15 11:09:05
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema IT112_exercise1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `IT112_exercise1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `IT112_exercise1` ;

-- -----------------------------------------------------
-- Table `IT112_exercise1`.`region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IT112_exercise1`.`region` (
  `region_id` INT NOT NULL AUTO_INCREMENT,
  `region_code` VARCHAR(32) NULL,
  `region_description` VARCHAR(32) NULL,
  PRIMARY KEY (`region_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IT112_exercise1`.`province`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IT112_exercise1`.`province` (
  `province_id` INT NOT NULL AUTO_INCREMENT,
  `province_code` VARCHAR(32) NULL,
  `province_description` VARCHAR(32) NULL,
  `region_id` INT NOT NULL,
  PRIMARY KEY (`province_id`, `region_id`),
  INDEX `fk_city_region_idx` (`region_id` ASC),
  CONSTRAINT `fk_city_region`
    FOREIGN KEY (`region_id`)
    REFERENCES `IT112_exercise1`.`region` (`region_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IT112_exercise1`.`city`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IT112_exercise1`.`city` (
  `city_id` INT NOT NULL AUTO_INCREMENT,
  `city_description` VARCHAR(32) NULL,
  `city_code` VARCHAR(32) NULL,
  `province_id` INT NOT NULL,
  PRIMARY KEY (`city_id`, `province_id`),
  INDEX `fk_city_province1_idx` (`province_id` ASC),
  CONSTRAINT `fk_city_province1`
    FOREIGN KEY (`province_id`)
    REFERENCES `IT112_exercise1`.`province` (`region_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
