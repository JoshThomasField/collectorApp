# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: books
# Generation Time: 2020-09-28 11:12:14 +0000
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
  `catergory` varchar(255) NOT NULL DEFAULT '',
  `released` year(4) NOT NULL,
  `imgUrl` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `booksCollected` WRITE;
/*!40000 ALTER TABLE `booksCollected` DISABLE KEYS */;

INSERT INTO `booksCollected` (`id`, `name`, `author`, `catergory`, `released`, `imgUrl`)
VALUES
	(1,'Dune','Frank Herbert','Science Fiction','1965',NULL),
	(2,'Harry Potter and The Chamber of Secrets','J. K. Rowling','Fantasy','1998',NULL),
	(3,'Harry Potter and The Prisoner Of Azkhaban','J. K. Rowling','Fantasy','1999',NULL),
	(4,'Harry Potter and the Goblet Of Fire','J. K. Rowling','Fantasy','2000',NULL),
	(5,'Harry Potter and the Order of the Pheonix','J. K. Rowling','Fantasy','2003',NULL),
	(6,'Harry Potter and the Half Blood Prince','J. K. Rowling','Fantasy','2005',NULL);

/*!40000 ALTER TABLE `booksCollected` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
