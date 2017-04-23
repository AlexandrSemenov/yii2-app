-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: yii_db
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `class_room`
--

DROP TABLE IF EXISTS `class_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `credits` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_room`
--

LOCK TABLES `class_room` WRITE;
/*!40000 ALTER TABLE `class_room` DISABLE KEYS */;
INSERT INTO `class_room` VALUES (2,'Класс Химии','Кабинет для уроков по Химии'),(3,'Класс Физики','Кабинет для уроков по Физике'),(4,'Класс Математики','Кабинет для уроков по Математике'),(7,'Класс Биологии','Кабинет для уроков по Биологии');
/*!40000 ALTER TABLE `class_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_room_teacher`
--

DROP TABLE IF EXISTS `class_room_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_room_teacher` (
  `class_room_id` int(11) NOT NULL DEFAULT '0',
  `teacher_id` int(11) NOT NULL DEFAULT '0',
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `idx-class_room_teacher-class_room_id` (`class_room_id`),
  KEY `idx-class_room_teacher-teacher_id` (`teacher_id`),
  CONSTRAINT `fk-class_room_teacher-class_room_id` FOREIGN KEY (`class_room_id`) REFERENCES `class_room` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-class_room_teacher-teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_room_teacher`
--

LOCK TABLES `class_room_teacher` WRITE;
/*!40000 ALTER TABLE `class_room_teacher` DISABLE KEYS */;
INSERT INTO `class_room_teacher` VALUES (2,1,'01:30:00','2017-04-21',1),(2,1,'01:45:00','2017-04-22',2),(2,2,'02:00:00','2017-04-21',3),(4,3,'05:00:00','2017-04-21',4),(7,4,'11:00:00','2017-04-21',5),(7,4,'12:00:00','2017-04-26',6),(2,4,'04:45:00','2017-04-25',7),(4,4,'02:30:00','2017-04-27',8),(4,5,'02:15:00','2017-04-28',9),(7,6,'03:00:00','2017-04-24',10),(4,7,'04:30:00','2017-04-24',11),(3,6,'04:45:00','2017-04-28',12);
/*!40000 ALTER TABLE `class_room_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES ('AU','Australia',24016400),('BR','Brazil',205722000),('BY','Belarus',9685000),('CA','Canada',35985751),('CN','China',1375210000),('CO','Colombia',47790000),('DE','Germany',81459000),('FI','Finland',5488543),('FR','France',64513242),('GB','United Kingdom',65097000),('IN','India',1285400000),('KZ','Kazahstan',2536589),('MD','Moldova',3550900),('RU','Russia',146519759),('UA','Ukraine',45256274),('US','United States',322976000);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1491667757),('m130524_201442_init',1492598932),('m170409_134103_create_post_table',1492598932),('m170419_104247_create_class_room_table',1492598932),('m170419_104359_create_student_table',1492598932),('m170419_104525_create_teacher_table',1492598932),('m170419_104638_create_junction_table_for_class_room_and_teacher_tables',1492598932),('m170420_091806_add_time_column_to_class_room_teacher_table',1492679920),('m170420_101336_drop_date_column_from_class_room_teacher_table',1492683239),('m170420_101427_add_date_column_to_class_room_teacher_table',1492683284),('m170420_104710_drop_primery_key_from_class_room_teacher_table',1492685399),('m170420_105038_add_id_column_to_class_room_teacher_table',1492685462);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Test article #1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.'),(2,'Test article #2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.'),(3,'Test article #3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.'),(4,'Test article #4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.'),(5,'Test article #5','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.'),(6,'Test article #6','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mauris est. Sed at dignissim dui. Phasellus arcu massa, facilisis a fringilla sit amet, rhoncus ut enim.');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'Eric','Price','EricJPrice@jourrapide.com'),(2,'Margaret','Hanna','MargaretMHanna@armyspy.com'),(3,'Andrew','Johnson','AndrewSJohnson@jourrapide.com'),(4,'Denise','Schmidt','DeniseDSchmidt@dayrep.com'),(5,'James J. ','Rubinstein','JamesJRubinstein@armyspy.com'),(6,'Penny R.','Duncan','PennyRDuncan@jourrapide.com'),(7,'Ruby G.','Montano','RubyGMontano@armyspy.com');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-23 17:29:15
