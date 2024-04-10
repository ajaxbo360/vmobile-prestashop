
-- -----------------------------------------------------
-- Table `ps_vala_compatibility`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_compatibility` (
  `id_product` INT(11) NOT NULL,
  `id_vala_mobile` INT(11) NOT NULL,
  `year` VARCHAR(250) NOT NULL,
  `indexed` TINYINT(1) NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY USING BTREE (`id_product`, `id_vala_mobile`, `year`),
  INDEX `id_product` (`id_product` ASC) ,
  INDEX `id_vala_mobile` (`id_vala_mobile` ASC) ,
  INDEX `year` (`year` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `ps_vala_mobile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_mobile` (
  `id_vala_mobile` INT(11) NOT NULL,
  `id_vala_manufacturer` INT(11) NOT NULL,
  `id_vala_mobile_type` INT(11) NOT NULL,
  `model` VARCHAR(250) NOT NULL,
  `year_start` INT(11) NOT NULL,
  `year_end` INT(11) NOT NULL,
  `image` VARCHAR(250) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `index` TINYINT(1) NOT NULL,
  `id_parent` INT(11) NULL DEFAULT NULL,
  `date_upd` DATETIME NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`id_vala_mobile`),
  INDEX `id_vala_manufacturer` (`id_vala_manufacturer` ASC) ,
  INDEX `id_vala_mobile_type` (`id_vala_mobile_type` ASC) ,
  INDEX `active` (`active` ASC) ,
  INDEX `index` (`index` ASC) ,
  INDEX `id_parent` (`id_parent` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `ps_vala_mobile_lang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_mobile_lang` (
  `id_vala_mobile` INT(11) NOT NULL,
  `id_lang` INT(11) NOT NULL,
  `description` TEXT NOT NULL,
  `url_rewrite` VARCHAR(250) NOT NULL,
  `meta_title` VARCHAR(250) NOT NULL,
  `meta_desc` TEXT NOT NULL,
  PRIMARY KEY USING BTREE (`id_lang`, `id_vala_mobile`),
  INDEX `id_lang` USING BTREE (`id_lang`) ,
  INDEX `id_vala_mobile` (`id_vala_mobile` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `ps_vala_mobile_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_mobile_type` (
  `id_vala_mobile_type` INT(11) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `position` TINYINT(2) NOT NULL,
  `date_upd` DATETIME NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`id_vala_mobile_type`),
  INDEX `active` (`active` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `ps_vala_mobile_type_lang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_mobile_type_lang` (
  `id_vala_mobile_type` INT(11) NOT NULL,
  `id_lang` INT(11) NOT NULL,
  `name` VARCHAR(250) NOT NULL,
  `url_rewrite` VARCHAR(250) NOT NULL,
  PRIMARY KEY USING BTREE (`id_vala_mobile_type`, `id_lang`),
  INDEX `id_vala_mobile_type` USING BTREE (`id_vala_mobile_type`) ,
  INDEX `id_lang` USING BTREE (`id_lang`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `ps_vala_manufacturer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ps_vala_manufacturer` (
  `id_vala_manufacturer` INT(11) NOT NULL,
  `name` VARCHAR(250) NOT NULL,
  `image` VARCHAR(250) NOT NULL,
  `website` VARCHAR(250) NOT NULL,
  `highlight` TINYINT(1) NOT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  `date_upd` DATETIME NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`id_vala_manufacturer`),
  INDEX `highlight` (`highlight` ASC) ,
  INDEX `active` (`active` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


SET SQL_MODE='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
SET FOREIGN_KEY_CHECKS=1;
SET UNIQUE_CHECKS=1;
