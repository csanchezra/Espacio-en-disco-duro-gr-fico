CREATE DATABASE /*!32312 IF NOT EXISTS*/`mibase` /*!40100 DEFAULT CHARACTER SET latin1 */;


USE `mibase`;

/*Table structure for table `raiz` */

DROP TABLE IF EXISTS `raiz`;

CREATE TABLE `raiz` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tipo` tinytext NOT NULL,
  `espacio` int(100) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
