-- MySQL Script generated by MySQL Workbench
-- Mon Jun 28 15:24:22 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`date`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`date` (
  `id_date_de_sortie` INT NOT NULL AUTO_INCREMENT,
  `date` INT NOT NULL,
  PRIMARY KEY (`id_date_de_sortie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`films`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`films` (
  `id_film` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(50) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `date_id_date_de_sortie` INT NOT NULL,
  PRIMARY KEY (`id_film`),
  INDEX `fk_films_date_idx` (`date_id_date_de_sortie` ASC) VISIBLE,
  CONSTRAINT `fk_films_date`
    FOREIGN KEY (`date_id_date_de_sortie`)
    REFERENCES `mydb`.`date` (`id_date_de_sortie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`genres` (
  `id_genres` INT NOT NULL AUTO_INCREMENT,
  `genre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_genres`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`realisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`realisateur` (
  `id_realisateur` INT NOT NULL AUTO_INCREMENT,
  `realisateur` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_realisateur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`films_has_genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`films_has_genres` (
  `films_id_film` INT NOT NULL,
  `genres_id_genres` INT NOT NULL,
  PRIMARY KEY (`films_id_film`, `genres_id_genres`),
  INDEX `fk_films_has_genres_genres1_idx` (`genres_id_genres` ASC) VISIBLE,
  INDEX `fk_films_has_genres_films1_idx` (`films_id_film` ASC) VISIBLE,
  CONSTRAINT `fk_films_has_genres_films1`
    FOREIGN KEY (`films_id_film`)
    REFERENCES `mydb`.`films` (`id_film`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_films_has_genres_genres1`
    FOREIGN KEY (`genres_id_genres`)
    REFERENCES `mydb`.`genres` (`id_genres`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`films_has_realisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`films_has_realisateur` (
  `films_id_film` INT NOT NULL,
  `realisateur_id_realisateur` INT NOT NULL,
  PRIMARY KEY (`films_id_film`, `realisateur_id_realisateur`),
  INDEX `fk_films_has_realisateur_realisateur1_idx` (`realisateur_id_realisateur` ASC) VISIBLE,
  INDEX `fk_films_has_realisateur_films1_idx` (`films_id_film` ASC) VISIBLE,
  CONSTRAINT `fk_films_has_realisateur_films1`
    FOREIGN KEY (`films_id_film`)
    REFERENCES `mydb`.`films` (`id_film`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_films_has_realisateur_realisateur1`
    FOREIGN KEY (`realisateur_id_realisateur`)
    REFERENCES `mydb`.`realisateur` (`id_realisateur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
