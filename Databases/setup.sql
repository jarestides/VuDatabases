SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema vutabase
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vutabase
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vutabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `vutabase` ;

-- -----------------------------------------------------
-- Table `vutabase`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(25) NOT NULL,
  `lname` VARCHAR(25) NOT NULL,
  `password` VARCHAR(25) NOT NULL,
  `email` VARCHAR(25) NOT NULL,
  `user_type` INT NOT NULL,
  `univprofile_univ_id` INT NOT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `fk_users_univprofile_idx` (`univprofile_univ_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_univprofile`
    FOREIGN KEY (`univprofile_univ_id`)
    REFERENCES `vutabase`.`univprofile` (`univ_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1112
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `vutabase`.`univprofile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`univprofile` (
  `univ_id` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(30) NOT NULL,
  `numberOfStudents` INT NULL,
  `users_user_id` INT NULL,
  PRIMARY KEY (`univ_id`),
  INDEX `fk_univprofile_users1_idx` (`users_user_id` ASC) VISIBLE,
  CONSTRAINT `fk_univprofile_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `vutabase`.`rso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`rso` (
  `RSO_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `Description` TEXT NOT NULL,
  `approved` INT NULL,
  `users_user_id` INT NULL,
  `univprofile_univ_id` INT NOT NULL,
  PRIMARY KEY (`RSO_id`),
  INDEX `fk_rso_users1_idx` (`users_user_id` ASC) VISIBLE,
  INDEX `fk_rso_univprofile1_idx` (`univprofile_univ_id` ASC) VISIBLE,
  CONSTRAINT `fk_rso_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rso_univprofile1`
    FOREIGN KEY (`univprofile_univ_id`)
    REFERENCES `vutabase`.`univprofile` (`univ_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `vutabase`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`events` (
  `Event_id` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `time` VARCHAR(45) NOT NULL,
  `date` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  `rating` VARCHAR(45) NOT NULL,
  `univprofile_univ_id` INT NOT NULL,
  `rso_RSO_id` INT NULL,
  `users_user_id` INT NOT NULL,
  PRIMARY KEY (`Event_id`),
  INDEX `fk_events_univprofile1_idx` (`univprofile_univ_id` ASC) VISIBLE,
  INDEX `fk_events_rso1_idx` (`rso_RSO_id` ASC) VISIBLE,
  INDEX `fk_events_users1_idx` (`users_user_id` ASC) VISIBLE,
  CONSTRAINT `fk_events_univprofile1`
    FOREIGN KEY (`univprofile_univ_id`)
    REFERENCES `vutabase`.`univprofile` (`univ_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_rso1`
    FOREIGN KEY (`rso_RSO_id`)
    REFERENCES `vutabase`.`rso` (`RSO_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `vutabase`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`comments` (
  `comments_id` INT NOT NULL,
  `messages` VARCHAR(45) NOT NULL,
  `users_user_id` INT NOT NULL,
  `events_Event_id` INT NOT NULL,
  PRIMARY KEY (`comments_id`),
  INDEX `fk_comments_users1_idx` (`users_user_id` ASC) VISIBLE,
  INDEX `fk_comments_events1_idx` (`events_Event_id` ASC) VISIBLE,
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_events1`
    FOREIGN KEY (`events_Event_id`)
    REFERENCES `vutabase`.`events` (`Event_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vutabase`.`ratings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`ratings` (
  `ratings_id` INT NOT NULL,
  `users_user_id` INT NOT NULL,
  `events_Event_id` INT NOT NULL,
  PRIMARY KEY (`ratings_id`),
  INDEX `fk_ratings_users1_idx` (`users_user_id` ASC) VISIBLE,
  INDEX `fk_ratings_events1_idx` (`events_Event_id` ASC) VISIBLE,
  CONSTRAINT `fk_ratings_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ratings_events1`
    FOREIGN KEY (`events_Event_id`)
    REFERENCES `vutabase`.`events` (`Event_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vutabase`.`RSO_members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vutabase`.`RSO_members` (
  `members_id` INT NOT NULL,
  `users_user_id` INT NOT NULL,
  `rso_RSO_id` INT NOT NULL,
  PRIMARY KEY (`members_id`),
  INDEX `fk_RSO_members_users1_idx` (`users_user_id` ASC) VISIBLE,
  INDEX `fk_RSO_members_rso1_idx` (`rso_RSO_id` ASC) VISIBLE,
  CONSTRAINT `fk_RSO_members_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `vutabase`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_RSO_members_rso1`
    FOREIGN KEY (`rso_RSO_id`)
    REFERENCES `vutabase`.`rso` (`RSO_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
