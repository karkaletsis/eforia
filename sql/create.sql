-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: eforia
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ΕΞΟΔΑ ΧΩΡΙΣ ΕΚΠΤΩΣΗ`
--

DROP TABLE IF EXISTS `ΕΞΟΔΑ ΧΩΡΙΣ ΕΚΠΤΩΣΗ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ΕΞΟΔΑ ΧΩΡΙΣ ΕΚΠΤΩΣΗ` (
  `ΗΜΕΡΟΜΗΝΙΑ` datetime DEFAULT NULL,
  `ΑΡΙΘΜΟΣ ΤΙΜΟΛΟΓΙΟΥ` varchar(255) DEFAULT NULL,
  `ΚΩΔΙΚΟΣ ΠΡΟΜΗΘΕΥΤΗ` int(11) DEFAULT '0',
  `ΣΥΝΟΛΙΚΟ ΠΟΣΟ` double DEFAULT NULL,
  `ΦΠΑ` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ΙΣΟΤΙΜΙΑ`
--

DROP TABLE IF EXISTS `ΙΣΟΤΙΜΙΑ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ΙΣΟΤΙΜΙΑ` (
  `ΙΣΟΤΙΜΙΑ` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `bankid` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(50) DEFAULT NULL,
  `group` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bankid`),
  KEY `bankid` (`bankid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `companyid` int(11) NOT NULL AUTO_INCREMENT,
  `eponimia` varchar(100) DEFAULT NULL,
  `companytype` int(11) DEFAULT '2',
  `afm` varchar(9) DEFAULT NULL,
  `job` varchar(80) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `number_invoices` int(11) DEFAULT NULL,
  `account` double DEFAULT NULL,
  PRIMARY KEY (`companyid`),
  KEY `ΚΩΔΙΚΟΣ ΠΡΟΜΗΘΕΥΤΗ` (`companyid`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `companytype`
--

DROP TABLE IF EXISTS `companytype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companytype` (
  `companytypename` varchar(20) NOT NULL,
  `companytype` int(11) NOT NULL,
  `percentfpa` int(11) DEFAULT NULL,
  `percentapomeiosi` int(11) NOT NULL,
  `inDimini` tinyint(1) NOT NULL,
  PRIMARY KEY (`companytype`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `contractid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT '0',
  `customerid` int(11) DEFAULT '0',
  `signdate` datetime DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  PRIMARY KEY (`contractid`),
  KEY `contractid` (`contractid`),
  KEY `customerid` (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `afm` varchar(9) DEFAULT NULL,
  `eponimia` varchar(100) DEFAULT NULL,
  `job` varchar(80) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `comments` longtext,
  PRIMARY KEY (`customerid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `demo_user_address`
--

DROP TABLE IF EXISTS `demo_user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demo_user_address` (
  `uadd_id` int(11) NOT NULL AUTO_INCREMENT,
  `uadd_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `uadd_alias` varchar(50) NOT NULL DEFAULT '',
  `uadd_recipient` varchar(100) NOT NULL DEFAULT '',
  `uadd_phone` varchar(25) NOT NULL DEFAULT '',
  `uadd_company` varchar(75) NOT NULL DEFAULT '',
  `uadd_address_01` varchar(100) NOT NULL DEFAULT '',
  `uadd_address_02` varchar(100) NOT NULL DEFAULT '',
  `uadd_city` varchar(50) NOT NULL DEFAULT '',
  `uadd_county` varchar(50) NOT NULL DEFAULT '',
  `uadd_post_code` varchar(25) NOT NULL DEFAULT '',
  `uadd_country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`uadd_id`),
  UNIQUE KEY `uadd_id` (`uadd_id`),
  KEY `uadd_uacc_fk` (`uadd_uacc_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `demo_user_profiles`
--

DROP TABLE IF EXISTS `demo_user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demo_user_profiles` (
  `upro_id` int(11) NOT NULL AUTO_INCREMENT,
  `upro_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upro_company` varchar(50) NOT NULL DEFAULT '',
  `upro_first_name` varchar(50) NOT NULL DEFAULT '',
  `upro_last_name` varchar(50) NOT NULL DEFAULT '',
  `upro_phone` varchar(25) NOT NULL DEFAULT '',
  `upro_newsletter` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`upro_id`),
  UNIQUE KEY `upro_id` (`upro_id`),
  KEY `upro_uacc_fk` (`upro_uacc_fk`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dimina`
--

DROP TABLE IF EXISTS `dimina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dimina` (
  `diminaid` int(11) NOT NULL AUTO_INCREMENT,
  `aa` varchar(5) DEFAULT NULL,
  `dimino` int(11) DEFAULT '0',
  `year` int(11) DEFAULT '0',
  `esoda` double DEFAULT '0',
  `fpa_esoda` double DEFAULT '0',
  `esoda_xoris_fpa` float DEFAULT '0',
  `exoda` double DEFAULT '0',
  `fpa_exoda` double DEFAULT '0',
  `fpa1` double DEFAULT '0',
  `fpa2` double DEFAULT '0',
  PRIMARY KEY (`diminaid`),
  KEY `ID` (`diminaid`)
) ENGINE=InnoDB AUTO_INCREMENT=930 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dimina_till_2001`
--

DROP TABLE IF EXISTS `dimina_till_2001`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dimina_till_2001` (
  `diminaid` int(11) NOT NULL AUTO_INCREMENT,
  `aa` varchar(5) DEFAULT NULL,
  `dimino` int(11) DEFAULT '0',
  `year` int(11) DEFAULT '0',
  `esoda` int(11) DEFAULT '0',
  `fpa_esoda` int(11) DEFAULT '0',
  `esoda_xoris_fpa` int(11) DEFAULT '0',
  `exoda` int(11) DEFAULT '0',
  `fpa_exoda` int(11) DEFAULT '0',
  `fpa1` int(11) DEFAULT '0',
  `fpa2` int(11) DEFAULT '0',
  PRIMARY KEY (`diminaid`),
  KEY `ID` (`diminaid`)
) ENGINE=InnoDB AUTO_INCREMENT=862 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `esoda_black`
--

DROP TABLE IF EXISTS `esoda_black`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esoda_black` (
  `date` datetime DEFAULT NULL,
  `invoice_kind` int(11) DEFAULT NULL,
  `invoice_number` varchar(20) DEFAULT NULL,
  `customerid` int(11) DEFAULT '0',
  `fpa_percent` float DEFAULT NULL,
  `kratisi` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `comments` longtext,
  `transactionid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fpa`
--

DROP TABLE IF EXISTS `fpa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fpa` (
  `fpa` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`fpa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income` (
  `incomeid` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `invoicenumber` varchar(20) DEFAULT NULL,
  `customerid` int(11) DEFAULT '0',
  `fpapercent` float DEFAULT NULL,
  `kratisi` float DEFAULT NULL,
  `total` double DEFAULT NULL,
  `comments` longtext,
  PRIMARY KEY (`incomeid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outcome`
--

DROP TABLE IF EXISTS `outcome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outcome` (
  `outcomeid` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `invoicenumber` varchar(255) DEFAULT NULL,
  `companyid` int(11) DEFAULT '0',
  `amount` float DEFAULT NULL,
  `fpa` double DEFAULT NULL,
  PRIMARY KEY (`outcomeid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-01 21:12:29


INSERT INTO `groups` (`id`, `name`, `description`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1',0x7f000001,'administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);
     