# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 10.0.1.8 (MySQL 5.6.21)
# Database: ci_cart
# Generation Time: 2016-06-07 07:02:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table elemento
# ------------------------------------------------------------

DROP TABLE IF EXISTS `elemento`;

CREATE TABLE `elemento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;

INSERT INTO `elemento` (`id`, `valor`)
VALUES
	(1,'Valor agregado'),
	(2,'Diferenciación'),
	(3,'Ingresos');

/*!40000 ALTER TABLE `elemento` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table modelo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modelo`;

CREATE TABLE `modelo` (
  `organizacion` int(11) NOT NULL,
  `elemento` int(11) NOT NULL,
  `valor` varchar(50) NOT NULL,
  PRIMARY KEY (`organizacion`,`elemento`),
  KEY `FK_elemento` (`elemento`),
  CONSTRAINT `FK_elemento` FOREIGN KEY (`elemento`) REFERENCES `elemento` (`id`),
  CONSTRAINT `FK_organizacion` FOREIGN KEY (`organizacion`) REFERENCES `organizacion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table organizacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `organizacion`;

CREATE TABLE `organizacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cantidad_empleados` int(11) NOT NULL,
  `indice_tecnologico` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
