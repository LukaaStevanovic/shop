-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shop
DROP DATABASE IF EXISTS `shop`;
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `shop`;

-- Dumping structure for table shop.gitara
DROP TABLE IF EXISTS `gitara`;
CREATE TABLE IF NOT EXISTS `gitara` (
  `gitara_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategorija_id` int(10) unsigned NOT NULL,
  `cena` int(10) unsigned NOT NULL,
  `ime` varchar(255) NOT NULL,
  PRIMARY KEY (`gitara_id`),
  KEY `fk_gitara_kategorija_id` (`kategorija_id`),
  CONSTRAINT `fk_gitara_kategorija_id` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`kategorija_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table shop.gitara: ~0 rows (approximately)

-- Dumping structure for table shop.kategorija
DROP TABLE IF EXISTS `kategorija`;
CREATE TABLE IF NOT EXISTS `kategorija` (
  `kategorija_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime_kategorije` varchar(255) NOT NULL,
  PRIMARY KEY (`kategorija_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table shop.kategorija: ~3 rows (approximately)
INSERT INTO `kategorija` (`kategorija_id`, `ime_kategorije`) VALUES
	(1, 'Klasicna'),
	(2, 'Akusticna'),
	(3, 'Elektricna');

-- Dumping structure for table shop.korpa
DROP TABLE IF EXISTS `korpa`;
CREATE TABLE IF NOT EXISTS `korpa` (
  `korpa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `gitara_id` int(10) unsigned NOT NULL,
  `kolicina` int(10) unsigned NOT NULL,
  PRIMARY KEY (`korpa_id`),
  KEY `fk_korpa_user_id` (`user_id`),
  KEY `fk_korpa_gitara_id` (`gitara_id`),
  CONSTRAINT `fk_korpa_gitara_id` FOREIGN KEY (`gitara_id`) REFERENCES `gitara` (`gitara_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_korpa_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table shop.korpa: ~0 rows (approximately)

-- Dumping structure for table shop.uloga
DROP TABLE IF EXISTS `uloga`;
CREATE TABLE IF NOT EXISTS `uloga` (
  `uloga_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uloga` varchar(255) NOT NULL,
  PRIMARY KEY (`uloga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table shop.uloga: ~2 rows (approximately)
INSERT INTO `uloga` (`uloga_id`, `uloga`) VALUES
	(1, 'Administrator'),
	(2, 'Korisnik');

-- Dumping structure for table shop.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uloga_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `is_active` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_uloga_id` (`uloga_id`),
  CONSTRAINT `fk_user_uloga_id` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`uloga_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table shop.user: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
