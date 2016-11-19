/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.17 : Database - eform
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `projectid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(300) DEFAULT NULL,
  `projectnumber` varchar(300) DEFAULT NULL,
  `projecttype` varchar(300) DEFAULT NULL,
  `formdate` date DEFAULT NULL,
  `originator` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project` */

/*Table structure for table `project_incompletes` */

DROP TABLE IF EXISTS `project_incompletes`;

CREATE TABLE `project_incompletes` (
  `pdetailsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `partnumber` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`pdetailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project_incompletes` */

/*Table structure for table `project_incompletes_q` */

DROP TABLE IF EXISTS `project_incompletes_q`;

CREATE TABLE `project_incompletes_q` (
  `pdetailsqid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `partnumber` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`pdetailsqid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project_incompletes_q` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
