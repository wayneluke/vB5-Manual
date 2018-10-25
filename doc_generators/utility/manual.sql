-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table vb5_manual.documentation_page
CREATE TABLE IF NOT EXISTS `documentation_page` (
  `guid` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `documentation` text,
  `modules` text,
  `imagepath` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `documentation_setting` (
  `varname` varchar(250) NOT NULL,
  `documentation` text NOT NULL,
  `example` text NOT NULL,
  `imagepath` varchar(250) NOT NULL,
  PRIMARY KEY (`varname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `documentation_settinggroup` (
  `grouptitle` varchar(50) NOT NULL,
  `documentation` text NOT NULL,
  `imagepath` varchar(250) NOT NULL,
  PRIMARY KEY (`grouptitle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `documentation_stylevar` (
  `stylevarid` varchar(250) DEFAULT NULL,
  `documentation` text,
  `examples` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Dumping structure for table vb5_manual.documentation_stylevargroup
CREATE TABLE IF NOT EXISTS `documentation_stylevargroup` (
  `stylevargroup` varchar(250) NOT NULL,
  `documentation` text NOT NULL,
  `imagepath` varchar(250) NOT NULL,
  PRIMARY KEY (`stylevargroup`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Dumping structure for table vb5_manual.documentation_widget
CREATE TABLE IF NOT EXISTS `documentation_widget` (
  `guid` varchar(250) NOT NULL,
  `template` varchar(250) NOT NULL,
  `documentation` text,
  `examples` text,
  `imagepath` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
