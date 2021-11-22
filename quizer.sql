-- MySQL dump 10.13  Distrib 5.1.30, for Win32 (ia32)
--
-- Host: localhost    Database: quizer
-- ------------------------------------------------------
-- Server version	5.1.30-community

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `answers` (
  `user` varchar(20) DEFAULT NULL,
  `answer` varchar(2) DEFAULT NULL,
  `qno` int(11) DEFAULT NULL,
  `tablename` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES ('sanal',NULL,NULL,NULL),('jose',NULL,NULL,NULL),('jose','D',1,'145'),('jose','B',2,'145'),('jose','B',3,'145'),('sanal','D',1,'146'),('sanal','B',2,'146'),('jose','A',1,'147'),('sanal',NULL,NULL,NULL),('sneha',NULL,NULL,NULL),('sanal','B',1,'148'),('sanal','C',2,'148'),('sneha','A',1,'149'),('sneha','D',2,'149'),('jose','C',1,'149'),('jose','B',2,'149'),('sanal',NULL,NULL,NULL),('sneha','D',1,'147'),('sneha','C',1,'145'),('sneha','C',1,'145'),('sneha','C',1,'145'),('sneha','B',2,'145'),('sneha','B',3,'145'),('sanal',NULL,NULL,NULL),('britto',NULL,NULL,NULL),('grigar',NULL,NULL,NULL),('sneha','B',1,'150'),('sneha','D',2,'150'),('sneha','A',1,'151'),('sneha','D',2,'151'),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('sdfsf',NULL,NULL,NULL),('sdfsf',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('someone',NULL,NULL,NULL),('Test',NULL,NULL,NULL),('Test',NULL,NULL,NULL),('sanal thomas',NULL,NULL,NULL),('sanal','A',1,'153'),('sanal','D',2,'153'),('sanal','A',3,'153'),('sneha','B',1,'153'),('sneha','B',2,'153'),('sneha','A',3,'153'),('jose','A',1,'153'),('jose','B',2,'153'),('jose','D',3,'153'),('jose','A',1,'151'),('jose','A',2,'151'),('jose','C',1,'150'),('jose','B',2,'150');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `exam` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `tablename` varchar(30) DEFAULT NULL,
  `status` varchar(3) DEFAULT NULL,
  `noq` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `thumb` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (145,'sanal','Semester Exam','dis',3,NULL,NULL),(146,'jose','Internal exam','dis',2,NULL,NULL),(147,'sanal','Internal Exam','dis',1,NULL,NULL),(148,'sneha','FInal exam','dis',2,NULL,NULL),(149,'sanal','Class test','dis',2,'2021-06-16 21:27:46',NULL),(150,'sanal','Sem exam','dis',2,NULL,NULL),(151,'sanal','Mid term exam 2021','dis',2,NULL,'art bird.jpg'),(152,'sneha','Some exam','dis',1,NULL,'art unicorn.jpg'),(153,'sanal thomas','Semester Exam','dis',3,NULL,'');
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitation`
--

DROP TABLE IF EXISTS `invitation`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `invitation` (
  `frm` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `invitation`
--

LOCK TABLES `invitation` WRITE;
/*!40000 ALTER TABLE `invitation` DISABLE KEYS */;
INSERT INTO `invitation` VALUES ('sanal','jose','145',135),('jose','sanal','146',136),('sanal','jose','147',137),('sneha','sanal','148',138),('sanal','sneha','149',139),('sanal','jose','149',140),('sanal','sneha','147',141),('sanal','sneha','145',142),('sanal','britto','149',143),('sanal','grigar','150',144),('sanal','sneha','150',145),('sanal','thomas','150',146),('sanal','jose','150',147),('sanal','britto','150',148),('sanal','sneha','151',149),('sanal','sneha','151',150),('sanal','thomas','151',151),('sanal','jose','151',152),('sanal','britto','151',153),('sanal','grigar','151',154),('sneha','grigar','148',155),('sneha','sanal','152',156),('sanal thomas','sanal','153',157),('sanal thomas','sneha','153',158),('sanal thomas','thomas','153',159),('sanal thomas','thomas','153',160),('sanal thomas','someone','153',161),('sanal thomas','send','153',162),('sanal thomas','sending','153',163),('sanal thomas','asdfasf','153',164),('sanal thomas','jose','153',165),('sanal thomas','sf','153',166);
/*!40000 ALTER TABLE `invitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaderboard`
--

DROP TABLE IF EXISTS `leaderboard`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `leaderboard` (
  `username` varchar(30) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `leaderboard`
--

LOCK TABLES `leaderboard` WRITE;
/*!40000 ALTER TABLE `leaderboard` DISABLE KEYS */;
INSERT INTO `leaderboard` VALUES ('jose',1,'145'),('sanal',1,'146'),('jose',0,'147'),('sanal',1,'148'),('sneha',0,'149'),('jose',2,'149'),('sneha',0,'147'),('sneha',1,'145'),('sneha',1,'150'),('sneha',1,'151'),('',0,''),('sanal',2,'153'),('sneha',2,'153'),('jose',0,'153'),('jose',0,'151'),('jose',1,'150');
/*!40000 ALTER TABLE `leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `marks`
--

LOCK TABLES `marks` WRITE;
/*!40000 ALTER TABLE `marks` DISABLE KEYS */;
/*!40000 ALTER TABLE `marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `messages` (
  `dto` varchar(20) DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL,
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `dt` datetime DEFAULT NULL,
  `dfrom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES ('sanal','jose has made an attempt of cheating in your quiz Internal Exam at question 1',72,'2021-11-21 11:34:14',NULL),('sanal','jose has made an attempt of cheating in your quiz Class test at question 1',73,'2021-11-21 11:34:14',NULL),('sanal','jose has made an attempt of cheating in your quiz Class test at question 2',74,'2021-11-21 11:34:14',NULL),('sanal','sneha has made an attempt of cheating in your quiz Sem exam at question 1',75,'2021-11-21 11:34:14',NULL),('sanal','sneha has made an attempt of cheating in your quiz Mid term exam 2021 at question 1',76,'2021-11-21 11:34:14',NULL),('sanal thomas','sanal has made an attempt of cheating in your quiz Semester Exam at question 1',77,'2021-11-21 11:34:14','sanal'),('sanal thomas','jose has made an attempt of cheating in your quiz Semester Exam at question 2',78,'2021-11-21 11:34:14','jose'),('sanal','has made an attempt of cheating in your quiz Sem exam at question 1',79,'2021-11-22 11:42:32','jose');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new`
--

DROP TABLE IF EXISTS `new`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `new` (
  `qno` int(11) NOT NULL,
  `question` varchar(30) DEFAULT NULL,
  `opt1` varchar(2) DEFAULT NULL,
  `opt2` varchar(2) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `new`
--

LOCK TABLES `new` WRITE;
/*!40000 ALTER TABLE `new` DISABLE KEYS */;
/*!40000 ALTER TABLE `new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newth`
--

DROP TABLE IF EXISTS `newth`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `newth` (
  `qno` int(11) NOT NULL,
  `question` varchar(30) DEFAULT NULL,
  `opt1` varchar(2) DEFAULT NULL,
  `opt2` varchar(2) DEFAULT NULL,
  `opt3` varchar(2) DEFAULT NULL,
  `opt4` varchar(2) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `newth`
--

LOCK TABLES `newth` WRITE;
/*!40000 ALTER TABLE `newth` DISABLE KEYS */;
/*!40000 ALTER TABLE `newth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `questions` (
  `qno` int(11) NOT NULL DEFAULT '0',
  `question` varchar(100) DEFAULT NULL,
  `opt1` varchar(50) DEFAULT NULL,
  `opt2` varchar(50) DEFAULT NULL,
  `opt3` varchar(50) DEFAULT NULL,
  `opt4` varchar(50) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `tablename` varchar(30) NOT NULL DEFAULT '',
  `ans` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`tablename`,`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Who discovered Java?','Dennis Ritchie','James Gosling','Bjarne Stroustroup','Rasmus Ledorf',15,'145','B'),(2,'Which command Linux is used to select only a paricular bytes of a file?  ','Find','Cut ','Comm','Select',15,'145','B'),(3,'Which directory in Linux stores the password of users?','/dev','/temp','/bin','/etc',15,'145','D'),(1,'Which is the browser in which Javascript was first used?','Netscape ','Internet Explorer','Mozilla Firefox','Safari',15,'146','A'),(2,'Who is the founder of Free and Open Source Foundation?','Dennis Ritchie','Richard Stallman','Bjarne Stroustroup','Linus Torvarlds',15,'146','B'),(1,'Who discovered Javascript?','Richard Stallman','Rasmus Ledorf','Brendon Eich','Bjarne Stroustroup',15,'147','C'),(1,'Who is the president of India?','Ramnath Kovind','Narendra Modi','Pinarayi Vijayan','Ramesh Chennithala',15,'148','A'),(2,'Who is the CM of kerala?','V D Satheesan','K Murali','Pinary Vijayan','K K Shailaja',15,'148','C'),(1,'How many pins are there in Intel 8085 processor?','24','32','40','16',15,'149','C'),(2,'Who is known as the father of internet?','Tim Berners Lee ','Vinton Grey Cerf','John MacCathy','Alan Turing',15,'149','B'),(1,'Who is the president of India','abdul kalam','narendra modi','Ramnath Kovind','rajiv gandhi',15,'150','C'),(2,'Who is the cm of kerala','abdul kalam','Donald Trump','Vinton cerf','pinarayi vijayan',15,'150','D'),(1,'Who discovered PHP?','abdul kalam','narendra modi','Rasmus Ledorf','Bjarne Stroustroup',15,'151','C'),(2,'Who is the president of india','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',15,'151','D'),(1,'Which is the fastest supercomputer?','PARAM 8000','PARAM 4000','Fugaku','None',15,'152','D'),(1,'Which command in Linux is used to add a new user?','adduser ','useradd','createuser','usermod',15,'153','B'),(2,'What is the time complexity of Linear search?','O(n)','O(nlogn)','O(log n)','O(n^2)',15,'153','D'),(3,'Who is the discoverer of Quick Sort?','Tony Hoare','Brendon Eich','Al Khawarismi','John Von Neuman',15,'153','A');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanalexam`
--

DROP TABLE IF EXISTS `sanalexam`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `sanalexam` (
  `qno` int(11) NOT NULL,
  `question` varchar(30) DEFAULT NULL,
  `opt1` varchar(2) DEFAULT NULL,
  `opt2` varchar(2) DEFAULT NULL,
  `opt3` varchar(2) DEFAULT NULL,
  `opt4` varchar(2) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `sanalexam`
--

LOCK TABLES `sanalexam` WRITE;
/*!40000 ALTER TABLE `sanalexam` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanalexam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=1052 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1044,'sanal','sanal','profile.jpg'),(1045,'jose','jose',NULL),(1047,'sneha','sneha','taj.jpg'),(1049,'britto','britto',NULL),(1050,'grigar','grigar',NULL),(1051,'sanal thomas','sanal','profile 4.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-22  6:51:00
