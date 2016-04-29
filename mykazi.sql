-- MySQL dump 10.13  Distrib 5.6.27, for Linux (x86_64)
--
-- Host: localhost    Database: mykazi
-- ------------------------------------------------------
-- Server version	5.6.27

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
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `businesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text,
  `streetAddress` varchar(300) NOT NULL,
  `postalCode` varchar(200) DEFAULT NULL,
  `noOfEmployees` varchar(45) DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `KRA_PIN` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `businesses`
--

LOCK TABLES `businesses` WRITE;
/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;
INSERT INTO `businesses` VALUES (20,'Gotech Kenya',NULL,'Adams arcade','','1-5',NULL,NULL,'A00001',2),(21,'Andela',NULL,'Adams arcade','','11-15',NULL,NULL,'A00001',2),(22,'Andela2',NULL,'Adams arcade','','11-15',NULL,NULL,'A00001',2),(25,'eqfeqgqeg',NULL,'eqtreyrtuy','whwh3','11-15',NULL,NULL,'wrhw',2),(26,'My Kazi',NULL,'mombasa','mombasa','1-5',NULL,NULL,'TA134444',2);
/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `businessworktypes`
--

DROP TABLE IF EXISTS `businessworktypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `businessworktypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workTypeID` int(11) NOT NULL,
  `businessID` int(11) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_businessWorkTypes_workTypes1_idx` (`workTypeID`),
  KEY `fk_businessWorkTypes_businesses1_idx` (`businessID`),
  CONSTRAINT `fk_businessWorkTypes_businesses1` FOREIGN KEY (`businessID`) REFERENCES `businesses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_businessWorkTypes_workTypes1` FOREIGN KEY (`workTypeID`) REFERENCES `worktypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `businessworktypes`
--

LOCK TABLES `businessworktypes` WRITE;
/*!40000 ALTER TABLE `businessworktypes` DISABLE KEYS */;
INSERT INTO `businessworktypes` VALUES (1,1,20,NULL,NULL),(2,2,20,NULL,NULL),(3,1,21,NULL,NULL),(4,2,22,NULL,NULL),(5,2,25,NULL,NULL),(6,1,26,NULL,NULL),(7,2,26,NULL,NULL),(8,3,26,NULL,NULL);
/*!40000 ALTER TABLE `businessworktypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text,
  `streetAddress` varchar(300) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  `workTypeID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_jobs_workTypes1_idx` (`workTypeID`),
  KEY `fk_jobs_users1_idx` (`userID`),
  CONSTRAINT `fk_jobs_users1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jobs_workTypes1` FOREIGN KEY (`workTypeID`) REFERENCES `worktypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (5,'efgrwgwrh','rrgrwh','grwrgwrgrwgwr',NULL,NULL,1,1,13);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `giveName` varchar(200) NOT NULL,
  `familyName` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `alternativeMobile` varchar(30) DEFAULT NULL,
  `userType` enum('B','F') NOT NULL DEFAULT 'F',
  `businessID` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isStaff` tinyint(1) DEFAULT NULL,
  `isSuperAdmin` tinyint(1) DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `password_reset_token` varchar(200) DEFAULT NULL,
  `password_hash` varchar(200) DEFAULT NULL,
  `auth_key` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_businesses_idx` (`businessID`),
  CONSTRAINT `fk_users_businesses` FOREIGN KEY (`businessID`) REFERENCES `businesses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (13,'Josiah','Njuki','jnjuki103@gmail.com','0727000518',NULL,'F',20,'',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'Joshua','Mwaninki','josh@gmail.com','0727000518',NULL,'F',21,'827ccb0eea8a706c4c34a16891f84e7b',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'egewgwr','Njuki','ken@mimi.com','0727000518',NULL,'F',22,'827ccb0eea8a706c4c34a16891f84e7b',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'sdfefewgw','Njuki','kingamimi','0727000518',NULL,'F',25,'$2y$13$C/TMf8secyq0q4Hjz7jtMOhkhQgwSvOkaXwBHgPN1L8lB.0.0Nhj6',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'Shailen','Shah','shailen@gmail.com','0727000518',NULL,'F',26,'$2y$13$GxtyEDLCjeGU11iJCuILIuF30eoR1UYiTfWx.WDXCofPMImJBZS8W',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'Alex','Chamwada','jnjuki104@gmail.com','0727000518',NULL,'F',NULL,'$2y$13$RXhtJOQJGbJVOE9osaUcX.6TfQ/uZwo8kBvXXuF4xj05jSIbF0iq6',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workcategories`
--

DROP TABLE IF EXISTS `workcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workcategories`
--

LOCK TABLES `workcategories` WRITE;
/*!40000 ALTER TABLE `workcategories` DISABLE KEYS */;
INSERT INTO `workcategories` VALUES (1,'Construction','building and construction',NULL,NULL),(2,'Information Technology','Computer and information Technology',NULL,NULL);
/*!40000 ALTER TABLE `workcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worktypes`
--

DROP TABLE IF EXISTS `worktypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worktypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `workCategoryID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_workTypes_workCategories1_idx` (`workCategoryID`),
  CONSTRAINT `fk_workTypes_workCategories1` FOREIGN KEY (`workCategoryID`) REFERENCES `workcategories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worktypes`
--

LOCK TABLES `worktypes` WRITE;
/*!40000 ALTER TABLE `worktypes` DISABLE KEYS */;
INSERT INTO `worktypes` VALUES (1,'Web Design','',NULL,NULL,2),(2,'Painting','',NULL,NULL,1),(3,'Wood floor sanding','',NULL,NULL,1);
/*!40000 ALTER TABLE `worktypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-29 10:17:23
