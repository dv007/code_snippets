-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.36-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4994
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for boctham
CREATE DATABASE IF NOT EXISTS `boctham` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `boctham`;


-- Dumping structure for table boctham.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table boctham.members: 0 rows
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `name`, `status`) VALUES
	(1, 'Nguyễn Duy Tuyên', 0),
	(2, 'Hoàng Trọng Bình', 0),
	(3, 'Nguyễn Hồng Khánh', 0),
	(4, 'Võ Chí Tuấn', 0),
	(5, 'Nguyễn Quang Nghĩa', 0),
	(6, 'Nguyễn Anh Khoa', 0);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
