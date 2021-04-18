/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - get_plasma_donate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`get_plasma_donate` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `get_plasma_donate`;

/*Table structure for table `donor_information` */

DROP TABLE IF EXISTS `donor_information`;

CREATE TABLE `donor_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checkCovid` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `contactNumber` int(11) DEFAULT NULL,
  `bloodGroup` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `createdDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `donor_information` */

insert  into `donor_information`(`id`,`checkCovid`,`fname`,`emailAddress`,`contactNumber`,`bloodGroup`,`gender`,`state`,`district`,`createdDate`) values 
(1,'yes','Sarthak Garg','sarthakgarg234@gmail.com',12345678,'A+','Male','Assam','',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
