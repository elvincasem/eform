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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`projectid`,`projectname`,`projectnumber`,`projecttype`,`formdate`,`originator`) values (18,'mememem','398438','Counter Smart','2016-11-27','jjjj'),(19,'Name','374628','Counter Smart','2016-11-23','Elvin'),(20,'project sample','','0','0000-00-00','');

/*Table structure for table `project_assembly` */

DROP TABLE IF EXISTS `project_assembly`;

CREATE TABLE `project_assembly` (
  `assmblyid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `faintegration` varchar(500) DEFAULT 'NONE',
  `assemblynotes` text,
  `q101` varchar(100) DEFAULT 'NA',
  `q102` varchar(100) DEFAULT 'NA',
  `q103` varchar(100) DEFAULT 'NA',
  `q104` varchar(100) DEFAULT 'NA',
  `q105` varchar(100) DEFAULT 'NA',
  `q106` varchar(100) DEFAULT 'NA',
  `q107` varchar(100) DEFAULT 'NA',
  `q108` varchar(100) DEFAULT 'NA',
  `q109` varchar(100) DEFAULT 'NA',
  `q110` varchar(100) DEFAULT 'NA',
  `q112` varchar(100) DEFAULT 'NA',
  `q113` varchar(100) DEFAULT 'NA',
  UNIQUE KEY `assmblyid` (`assmblyid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `project_assembly` */

insert  into `project_assembly`(`assmblyid`,`projectid`,`faintegration`,`assemblynotes`,`q101`,`q102`,`q103`,`q104`,`q105`,`q106`,`q107`,`q108`,`q109`,`q110`,`q112`,`q113`) values (3,18,'NONE',NULL,'NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA'),(4,19,'NONE',NULL,'NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA'),(5,20,'NONE',NULL,'NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA');

/*Table structure for table `project_incompletes` */

DROP TABLE IF EXISTS `project_incompletes`;

CREATE TABLE `project_incompletes` (
  `pdetailsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `partnumber` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`pdetailsid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `project_incompletes` */

insert  into `project_incompletes`(`pdetailsid`,`projectid`,`partnumber`,`description`,`notes`) values (18,18,'adsf','Require Design','dff'),(19,19,'345345','In Process',''),(21,20,'w4323','','');

/*Table structure for table `project_incompletes_q` */

DROP TABLE IF EXISTS `project_incompletes_q`;

CREATE TABLE `project_incompletes_q` (
  `pdetailsqid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `authshipment` varchar(100) DEFAULT 'NO',
  `authsolution` varchar(300) DEFAULT 'NONE',
  `authdate` date NOT NULL,
  `hardwarebox` varchar(100) DEFAULT 'NO',
  `authpackaged` varchar(100) DEFAULT 'NO',
  `pmsee` varchar(100) DEFAULT 'NO',
  `pmsolution` varchar(300) DEFAULT 'NONE',
  `pmdate` date NOT NULL,
  `pmexception` varchar(100) DEFAULT 'NO',
  `pmexsolution` varchar(300) DEFAULT 'NONE',
  `pmexdate` date NOT NULL,
  PRIMARY KEY (`pdetailsqid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `project_incompletes_q` */

insert  into `project_incompletes_q`(`pdetailsqid`,`projectid`,`authshipment`,`authsolution`,`authdate`,`hardwarebox`,`authpackaged`,`pmsee`,`pmsolution`,`pmdate`,`pmexception`,`pmexsolution`,`pmexdate`) values (5,18,'NO','NONE','0000-00-00','NO','NO','NO','NONE','0000-00-00','NO','NONE','0000-00-00'),(6,19,'YES','NONE','0000-00-00','YES','YES','NO','NONE','0000-00-00','YES','NONE','0000-00-00'),(7,20,'NO','NONE','0000-00-00','NO','NO','NO','NONE','0000-00-00','NO','NONE','0000-00-00');

/*Table structure for table `project_services` */

DROP TABLE IF EXISTS `project_services`;

CREATE TABLE `project_services` (
  `servicesid` bigint(20) NOT NULL AUTO_INCREMENT,
  `projectid` bigint(20) DEFAULT NULL,
  `servicesname` varchar(500) DEFAULT 'NONE',
  `servicesnotes` text,
  `q21` varchar(100) DEFAULT 'NA',
  `q22` varchar(100) DEFAULT 'NA',
  `q23` varchar(100) DEFAULT 'NA',
  `q24` varchar(100) DEFAULT 'NA',
  `q25` varchar(100) DEFAULT 'NA',
  `q26` varchar(100) DEFAULT 'NA',
  `q27` varchar(100) DEFAULT 'NA',
  UNIQUE KEY `assmblyid` (`servicesid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `project_services` */

insert  into `project_services`(`servicesid`,`projectid`,`servicesname`,`servicesnotes`,`q21`,`q22`,`q23`,`q24`,`q25`,`q26`,`q27`) values (3,18,'sad','asdasd','NA','NA','NA','NA','NA','NA','YES'),(4,19,'NONE',NULL,'NA','NA','NA','NA','NA','NA','NA'),(5,20,'NONE',NULL,'NA','NA','NA','NA','NA','NA','NA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
