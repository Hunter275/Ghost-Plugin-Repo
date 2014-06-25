# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.1.94 (MySQL 5.5.37-0ubuntu0.14.04.1)
# Database: ghost
# Generation Time: 2014-06-21 03:40:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table packages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `packages`;

CREATE TABLE `packages` (
  `name` text NOT NULL,
  `author` text NOT NULL,
  `website` text NOT NULL,
  `date` text NOT NULL,
  `version` text NOT NULL,
  `files` text NOT NULL,
  `license` text NOT NULL,
  `summary` text NOT NULL,
  `tags` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;

INSERT INTO `packages` (`name`, `author`, `website`, `date`, `version`, `files`, `license`, `summary`, `tags`, `id`)
VALUES
	('Test Package','Hunter275','www.adventuresintechland.com','2014-06-19','0.1','code.js, code.css','GPL V3','Test Package, allows you to be awesome','javascript, ghost, blog',1),
	('Disqus','Hunter275','www.discus.com','9599-05-05','4','test.py','GPL V1','Commenting on post, powered by DISQUS','this, is me',2),
	('PRISM','Hunter275','http://prismjs.com/','2014-06-20','4','Servo_1.py','GPL V2','PRISMJS code highlighting with various languages\n','nasdfas',3);

/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
