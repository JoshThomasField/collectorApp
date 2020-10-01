# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: books
# Generation Time: 2020-09-30 12:34:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table booksCollected
# ------------------------------------------------------------

DROP TABLE IF EXISTS `booksCollected`;

CREATE TABLE `booksCollected` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(255) NOT NULL DEFAULT '',
  `released` year(4) NOT NULL,
  `imgUrl` text,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bookNameUnique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `booksCollected` WRITE;
/*!40000 ALTER TABLE `booksCollected` DISABLE KEYS */;

INSERT INTO `booksCollected` (`id`, `name`, `author`, `category`, `released`, `imgUrl`, `deleted`)
VALUES
	(1,'Dune','Frank Herbert','Science Fiction','1965',NULL,0),
	(2,'Harry Potter and The Chamber of Secrets','J. K. Rowling','Fantasy','1998',NULL,0),
	(3,'Harry Potter and The Prisoner Of Azkhaban','J. K. Rowling','Fantasy','1999',NULL,0),
	(4,'Harry Potter and the Goblet Of Fire','J. K. Rowling','Fantasy','2000',NULL,0),
	(64,'Left Over Pie','Anna Pitt','Non-Fiction','2014',NULL,0),
	(65,'I Am Number Four','Pittacus Lore','Young Adult','2011',NULL,1),
	(67,'Clean Code','Harry Potter','Non-Fiction','1997',NULL,1),
	(69,'Hello','William','Non-Fiction','1997',NULL,1),
	(70,'Yes','Yes','Yes','1996',NULL,0);

/*!40000 ALTER TABLE `booksCollected` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
