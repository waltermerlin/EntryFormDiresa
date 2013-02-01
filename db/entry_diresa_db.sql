SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
CREATE SCHEMA IF NOT EXISTS `convocatoria` ;
USE `mydb` ;
USE `convocatoria` ;

-- -----------------------------------------------------
-- Table `convocatoria`.`netwoks`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`netwoks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `convocatoria`.`establishments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`establishments` (
  `id` INT NOT NULL ,
  `name` VARCHAR(100) NULL ,
  `netwok_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_establishments_netwoks1_idx` (`netwok_id` ASC) ,
  CONSTRAINT `fk_establishments_netwoks1`
    FOREIGN KEY (`netwok_id` )
    REFERENCES `convocatoria`.`netwoks` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `convocatoria`.`phases`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`phases` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `year` DATE NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `convocatoria`.`people`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`people` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `Nro_bouch` VARCHAR(20) NOT NULL ,
  `document` VARCHAR(8) NOT NULL ,
  `names` VARCHAR(45) NOT NULL ,
  `lf_name` VARCHAR(45) NOT NULL ,
  `lm_name` VARCHAR(45) NOT NULL ,
  `birthdate` DATE NOT NULL ,
  `address` VARCHAR(80) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `cellphone` VARCHAR(9) NOT NULL ,
  `created` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `convocatoria`.`professions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`professions` (
  `id` INT NOT NULL ,
  `name` VARCHAR(100) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `convocatoria`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `convocatoria`.`vacancies`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`vacancies` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `establishment_id` INT NOT NULL ,
  `profession_id` INT NOT NULL ,
  `amount` INT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_vacancies_establishments1_idx` (`establishment_id` ASC) ,
  INDEX `fk_vacancies_professions1_idx` (`profession_id` ASC) ,
  CONSTRAINT `fk_vacancies_establishments1`
    FOREIGN KEY (`establishment_id` )
    REFERENCES `convocatoria`.`establishments` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vacancies_professions1`
    FOREIGN KEY (`profession_id` )
    REFERENCES `convocatoria`.`professions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `convocatoria`.`inscription`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `convocatoria`.`inscription` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `establishment_id` INT NOT NULL ,
  `profession_id` INT NOT NULL ,
  `person_id` INT(10) NOT NULL ,
  `phase_id` INT(10) UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_inscription_establishments1_idx` (`establishment_id` ASC) ,
  INDEX `fk_inscription_professions1_idx` (`profession_id` ASC) ,
  INDEX `fk_inscription_people1_idx` (`person_id` ASC) ,
  INDEX `fk_inscription_phases1_idx` (`phase_id` ASC) ,
  CONSTRAINT `fk_inscription_establishments1`
    FOREIGN KEY (`establishment_id` )
    REFERENCES `convocatoria`.`establishments` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscription_professions1`
    FOREIGN KEY (`profession_id` )
    REFERENCES `convocatoria`.`professions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscription_people1`
    FOREIGN KEY (`person_id` )
    REFERENCES `convocatoria`.`people` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscription_phases1`
    FOREIGN KEY (`phase_id` )
    REFERENCES `convocatoria`.`phases` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
