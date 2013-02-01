/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : convocatoria

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-02-01 00:08:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `establishments`
-- ----------------------------
DROP TABLE IF EXISTS `establishments`;
CREATE TABLE `establishments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `netwok_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_establishments_netwoks1_idx` (`netwok_id`),
  CONSTRAINT `fk_establishments_netwoks1` FOREIGN KEY (`netwok_id`) REFERENCES `netwoks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of establishments
-- ----------------------------

-- ----------------------------
-- Table structure for `inscriptions`
-- ----------------------------
DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE `inscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `establishment_id` int(11) NOT NULL,
  `profession_id` int(11) NOT NULL,
  `person_id` int(10) NOT NULL,
  `phase_id` int(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_inscription_establishments1_idx` (`establishment_id`),
  KEY `fk_inscription_professions1_idx` (`profession_id`),
  KEY `fk_inscription_people1_idx` (`person_id`),
  KEY `fk_inscriptions_phases1_idx` (`phase_id`),
  CONSTRAINT `fk_inscription_professions1` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscriptions_phases1` FOREIGN KEY (`phase_id`) REFERENCES `phases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscription_establishments1` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscription_people1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inscriptions
-- ----------------------------

-- ----------------------------
-- Table structure for `netwoks`
-- ----------------------------
DROP TABLE IF EXISTS `netwoks`;
CREATE TABLE `netwoks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of netwoks
-- ----------------------------

-- ----------------------------
-- Table structure for `people`
-- ----------------------------
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nro_bouch` varchar(20) NOT NULL,
  `document` varchar(8) NOT NULL,
  `names` varchar(45) NOT NULL,
  `lf_name` varchar(45) NOT NULL,
  `lm_name` varchar(45) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cellphone` varchar(9) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of people
-- ----------------------------

-- ----------------------------
-- Table structure for `phases`
-- ----------------------------
DROP TABLE IF EXISTS `phases`;
CREATE TABLE `phases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `year` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of phases
-- ----------------------------

-- ----------------------------
-- Table structure for `professions`
-- ----------------------------
DROP TABLE IF EXISTS `professions`;
CREATE TABLE `professions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of professions
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '9b4794d7665205f99b6b74a1603d3801f12f769f', null);

-- ----------------------------
-- Table structure for `vacancies`
-- ----------------------------
DROP TABLE IF EXISTS `vacancies`;
CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `establishment_id` int(11) NOT NULL,
  `profession_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_vacancies_establishments1_idx` (`establishment_id`),
  KEY `fk_vacancies_professions1_idx` (`profession_id`),
  CONSTRAINT `fk_vacancies_establishments1` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_vacancies_professions1` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vacancies
-- ----------------------------
