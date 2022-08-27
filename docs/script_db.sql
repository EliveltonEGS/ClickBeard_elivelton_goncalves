-- MySQL Script generated by MySQL Workbench
-- Sat Aug 27 10:31:35 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema click_beard
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `click_beard` ;

-- -----------------------------------------------------
-- Schema click_beard
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `click_beard` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `click_beard` ;

-- -----------------------------------------------------
-- Table `agendamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `agendamento` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `agendamento_id` INT NOT NULL AUTO_INCREMENT,
  `hora_inicio` DATETIME NOT NULL,
  `hora_fim` DATETIME NOT NULL,
  `barbeiro_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`agendamento_id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `barbeiros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `barbeiros` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `barbeiros` (
  `barbeiro_id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `data_contratacao` DATETIME NOT NULL,
  PRIMARY KEY (`barbeiro_id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `barbeiros_especialidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `barbeiros_especialidades` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `barbeiros_especialidades` (
  `barbeiros_especialidades_id` INT NOT NULL AUTO_INCREMENT,
  `barbeiro_id` INT NOT NULL,
  `especialidade_id` INT NOT NULL,
  PRIMARY KEY (`barbeiros_especialidades_id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `confirm_senha` VARCHAR(32) NULL,
  `tipo` CHAR(1) NOT NULL DEFAULT 'C' COMMENT 'C = Cliente Normal - A = Administrador',
  PRIMARY KEY (`cliente_id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `especialidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `especialidades` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `especialidade_id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`especialidade_id`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
