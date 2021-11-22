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
INSERT INTO `answers` VALUES (NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL),('sanal thomas',NULL,NULL,NULL),('sanal thomas',NULL,NULL,NULL),('sanal',NULL,NULL,NULL),('sss',NULL,NULL,NULL),('fffdff',NULL,NULL,NULL),('new mwmber',NULL,NULL,NULL),('df',NULL,NULL,NULL),('sanal thomas',NULL,NULL,NULL),('fsdf',NULL,NULL,NULL),('dsd',NULL,NULL,NULL),('ti',NULL,NULL,NULL),('efutuf',NULL,NULL,NULL),('sasdad',NULL,NULL,NULL),('saasd',NULL,NULL,NULL),('iuliu',NULL,NULL,NULL),('kuyfgffxd',NULL,NULL,NULL),('fgdgdgsaw',NULL,NULL,NULL),('sanal',NULL,NULL,NULL),('sneha',NULL,NULL,NULL),('jose',NULL,NULL,NULL),('jose',NULL,NULL,NULL),('sanal','B',1,'final'),('sanal','B',1,'final'),('sanal','C',2,'final'),('sanal','B',1,'final'),('sanal','A',1,'testsan'),('sanal','D',2,'testsan'),('sneha',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('sanal','C',2,'thomasquestion'),('sanal','A',3,'thomasquestion'),('sam',NULL,NULL,NULL),('myacc',NULL,NULL,NULL),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('thomas',NULL,NULL,NULL),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('sanal','C',1,'examination'),('sanal','B',2,'examination'),('sanal','B',3,'examination'),('sanal','D',4,'examination'),('sanal','A',5,'examination'),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('',NULL,NULL,NULL),('sanal','A',1,'examverynew'),('sanal','A',2,'examverynew'),('user',NULL,NULL,NULL),('user','A',1,'examverynew'),('user','A',2,'examverynew'),('jose','A',1,'examverynew'),('jose','A',2,'examverynew'),('sanal','A',1,'examverynew'),('sanal','A',2,'examverynew'),('Britto',NULL,NULL,NULL),('sanal','C',1,'brittoexam'),('sanal','A',2,'brittoexam'),('sanal','C',1,'brittoexam'),('sanal','A',2,'brittoexam'),('SANAL','C',1,'brittoexam'),('SANAL','A',2,'brittoexam'),('renny',NULL,NULL,NULL),('sanal','B',1,'renny_quiz'),('sanal','B',1,'renny_quiz'),('renny','C',1,'britz'),('renny','B',2,'britz'),('sanal','C',1,'britz'),('sanal','B',2,'britz'),('jose','A',1,'examination'),('jose','B',2,'examination'),('jose','B',3,'examination'),('jose','D',4,'examination'),('jose','A',5,'examination'),('britto','C',1,'examination'),('britto','C',2,'examination'),('britto','D',3,'examination'),('britto','A',4,'examination'),('britto','D',5,'examination'),('user','B',1,'britz'),('user','B',1,'britz'),('user','B',1,'britz'),('user','B',2,'britz'),('testuser',NULL,NULL,NULL),('sanal','D',1,'testuserquiz'),('advaid',NULL,NULL,NULL),('sanal','D',1,'advaidexam'),('advaid','C',1,'examination'),('advaid','C',2,'examination'),('advaid','C',3,'examination'),('advaid','C',4,'examination'),('advaid','B',5,'examination'),('britto','D',1,'advaidexam'),('jose','D',1,'advaidexam'),('testuser','D',1,'advaidexam'),('renny','D',1,'advaidexam'),('myacc','D',1,'advaidexam'),('ashwin',NULL,NULL,NULL),('sanal','D',1,'aswinquiz'),('sanal','D',1,'aswinquiz'),('faris',NULL,NULL,NULL),('sanal','D',1,'124'),('faiz',NULL,NULL,NULL),('sanal','D',1,'faizquiz'),('jose','D',1,'faizquiz'),('ashik',NULL,NULL,NULL),('sanal','D',1,'ashikexam'),('ammayi',NULL,NULL,NULL),('sanal','D',1,'ammayiexam'),('sanal','A',2,'ammayiexam'),('advaid','D',1,'ammayiexam'),('advaid','A',2,'ammayiexam'),('ashik','C',1,'examination'),('ashik','B',2,'examination'),('ashik','B',3,'examination'),('ashik','C',4,'examination'),('ashik','A',5,'examination'),('shalu',NULL,NULL,NULL),('sanal','C',1,'shaluquiz'),('sanal','D',2,'shaluquiz'),('@sanal',NULL,NULL,NULL),('sanal@bsg',NULL,NULL,NULL),('new',NULL,NULL,NULL),('check',NULL,NULL,NULL),('jose','A',1,'130'),('jose','B',2,'130'),('jose','C',1,'examin'),('jose','D',1,'ammayiexam'),('jose','C',2,'ammayiexam'),('jose','B',1,'aswinquiz'),('britto','A',1,'examverynew'),('britto','C',2,'examverynew'),('check','B',1,'examverynew'),('check','A',2,'examverynew'),('check','B',1,'130'),('check','D',2,'130'),('check','A',1,'examination'),('check','B',2,'examination'),('check','D',3,'examination'),('check','B',4,'examination'),('check','C',5,'examination'),('ammayi','B',1,'130'),('ammayi','D',2,'130'),('jose','B',1,'ashikexam'),('sanal','C',1,'142'),('britto','C',1,'142'),('sanal','C',1,'143'),('sanal','C',2,'143'),('jose','B',1,'143'),('jose','B',2,'143');
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
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (1,'sam','samskdnsk','dis',NULL),(43,'thomas','thomasquestion','dis',5),(44,'sanal','examination','dis',5),(116,'jose','examverynew','dis',2),(117,'Britto','brittoexam','dis',2),(118,'renny','rennyquiz','dis',2),(119,'renny','renny_quiz','dis',1),(120,'britto','britz','dis',2),(121,'testuser','testuserquiz','dis',1),(122,'advaid','advaidexam','dis',1),(123,'ashwin','aswinquiz','dis',1),(124,'faris','farisquiz','dis',1),(125,'faiz','faizquiz','dis',1),(126,'ashik','ashikexam','dis',1),(127,'ammayi','ammayiexam','dis',2),(128,'shalu','shaluquiz','dis',2),(129,'sanal','examin','dis',1),(130,'sanal','wehaveexam','dis',2),(142,'jose','christams exam','dis',1),(143,'sanal','First sem Exam','dis',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `invitation`
--

LOCK TABLES `invitation` WRITE;
/*!40000 ALTER TABLE `invitation` DISABLE KEYS */;
INSERT INTO `invitation` VALUES ('sanal','sanal','143',118),('sanal','sneha','143',119),('sanal','thomas','143',120),('sanal','jose','143',121),('sanal','britto','143',122);
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
INSERT INTO `leaderboard` VALUES ('sanal',4,'examination'),('sanal',5,'examination'),('sanal',2,'examverynew'),('user',2,'examverynew'),('jose',2,'examverynew'),('sanal',2,'examverynew'),('sanal',2,'brittoexam'),('sanal',2,'brittoexam'),('SANAL',1,'brittoexam'),('sanal',1,'renny_quiz'),('sanal',1,'renny_quiz'),('renny',2,'britz'),('renny',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'examverynew'),('jose',4,'examination'),('jose',4,'examination'),('sanal',2,'britz'),('britto',1,'examination'),('jose',4,'examination'),('jose',4,'examination'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('jose',2,'examverynew'),('sanal',2,'examverynew'),('user',1,'britz'),('sanal',2,'britz'),('sanal',2,'examverynew'),('sanal',2,'examverynew'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',2,'britz'),('sanal',1,'testuserquiz'),('sanal',1,'advaidexam'),('advaid',1,'examination'),('britto',1,'advaidexam'),('jose',1,'advaidexam'),('testuser',1,'advaidexam'),('renny',1,'advaidexam'),('myacc',1,'advaidexam'),('sanal',1,'aswinquiz'),('sanal',1,'farisquiz'),('sanal',1,'faizquiz'),('jose',1,'faizquiz'),('faiz',0,''),('sanal',1,'ashikexam'),('sanal',2,'ammayiexam'),('advaid',2,'ammayiexam'),('ashik',4,'examination'),('sanal',1,'shaluquiz'),('jose',0,'wehaveexam'),('jose',1,'examin'),('jose',1,'ammayiexam'),('jose',0,'aswinquiz'),('britto',1,'examverynew'),('check',1,'examverynew'),('check',2,'wehaveexam'),('check',1,'examination'),('ammayi',2,'wehaveexam'),('jose',0,'ashikexam'),('jose',0,'130'),('sanal',1,'142'),('britto',1,'142'),('sanal',1,'143'),('jose',1,'143');
/*!40000 ALTER TABLE `leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `messages` (
  `dto` varchar(20) DEFAULT NULL,
  `message` varchar(80) DEFAULT NULL,
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES ('sanal','hello',1),('','sanal has attempted plagarism',2),('sanal','sanal has attempted plagarism',3),('sanal','jose has attempted plagarism',4),('sanal','sanal has attempted plagarism',5),('sanal','sanal has attempted plagarism',6),('sanal','myacc has attempted plagarism',7),('sanal','sanal has attempted plagarism',8),('sanal','sanal has attempted plagarism in your quiz examination',9),('sanal','thomas has attempted plagarism in your quiz sneha',10),('jose','user has attempted plagarism in your quiz examverynew',11),('Britto','sanal has attempted plagarism in your quiz brittoexam',12),('renny','sanal has attempted plagarism in your quiz renny_quiz',13),('sanal','britto has attempted plagarism in your quiz examination',14),('britto','user has attempted plagarism in your quiz britz',15),('britto','user has attempted plagarism in your quiz britz',16),('sanal','jose has attempted plagarism in your quiz testw',17),('testuser','sanal has attempted plagarism in your quiz testuserquiz',18),('sanal','advaid has attempted plagarism in your quiz examination',19),('advaid','testuser has attempted plagarism in your quiz advaidexam',20),('advaid','renny has attempted plagarism in your quiz advaidexam at question ',21),('advaid','myacc has attempted plagarism in your quiz advaidexam at question 1',22),('ashwin','sanal has attempted plagarism in your quiz aswinquiz at question 1',23),('faris','sanal has attempted plagarism in your quiz farisquiz at question 1',24),('faiz','jose has attempted plagarism in your quiz faizquiz at question 1',25),('ashik','sanal has attempted plagarism in your quiz ashikexam at question 1',26),('ammayi','sanal has attempted plagarism in your quiz ammayiexam at question 1',27),('ammayi','sanal has attempted plagarism in your quiz ammayiexam at question 1',28),('ammayi','advaid has attempted plagarism in your quiz ammayiexam at question 2',29),('shalu','sanal has attempted plagarism in your quiz shaluquiz at question 2',30),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',31),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',32),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',33),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',34),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',35),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',36),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',37),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',38),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',39),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',40),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',41),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',42),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',43),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',44),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',45),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',46),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',47),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',48),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',49),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',50),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',51),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',52),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',53),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',54),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',55),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',56),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',57),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',58),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',59),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',60),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',61),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',62),('ammayi','jose has attempted plagarism in your quiz ammayiexam at question 1',63),('sanal','check has attempted plagarism in your quiz examination at question 1',64),('sanal','ammayi has attempted plagarism in your quiz wehaveexam at question 1',65),('faris','jose has made an attempt of cheating in your quiz farisquiz at question 1',66),('jose','britto has made an attempt of cheating in your quiz christams exam at question 1',67),('sanal','jose has made an attempt of cheating in your quiz First sem Exam at question 1',68);
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
  `qno` int(11) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `opt1` varchar(50) DEFAULT NULL,
  `opt2` varchar(50) DEFAULT NULL,
  `opt3` varchar(50) DEFAULT NULL,
  `opt4` varchar(50) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `tablename` varchar(30) DEFAULT NULL,
  `ans` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'father of AI','charles babbage','alan turing','john mccarthy','b eich',20,NULL,NULL),(2,'who discovered computer','herman hollerieth','charles babbage','sanal thomas','britto benny',10,NULL,NULL),(1,NULL,NULL,NULL,NULL,NULL,20,NULL,NULL),(0,'hello1','this','is','test','program',10,'myexam',NULL),(1,'moon','planet','spaceship','rocket','missile',10,'myexam',NULL),(0,'asasas','asa','asas','asa','ggfh',10,'sanalmyexam',NULL),(1,'gjgj','yi','hjg','nmbn','vn',10,'sanalmyexam',NULL),(0,'who are you','sanal','grigar','britto','abhay',20,'midterm',NULL),(1,'who is modi','president','pm','cm','hm',10,'midterm',NULL),(2,'who is dhoni','cricketer','footballer','politician','actor',10,'midterm',NULL),(1,'moon is a','planet','spaceship','rocket','missile',20,'final',NULL),(2,'who is modi','pm','cm','hm','president',10,'final',NULL),(1,'state animal of kerala','elephant','tiger','lion','peacock',10,'sanalstest',NULL),(1,'national flower is','lotus','sunflower','rose','lilly',20,'testsan',NULL),(2,'state animal of kerala','tiger','elephant','lion','rabbit',10,'testsan',NULL),(2,'Who is the CEO of Microsoft?','Sundar Pichai','Sathya Nadella','Bill Gates','Mark Suckerburg',20,'thomasquestion','B'),(3,'Who is the current defence minister?','Nirmala Seetharaman','Harshvardhan Sinha','Narendra Modi','Rajnath Singh',20,'thomasquestion','D'),(5,'Who is the winner of Italian open championship?','Raphel Nadal','Novac Djocovic','Roger Federer','Andy Murray',20,'thomasquestion','B'),(1,'Who is the CEO of Microsoft?','Sundar pichai','Bill Gates','Sathya Nadella','Mark Zuckerburg',20,'examination','C'),(2,'What is the full form of UNO?','Urban Nations Organisation','United Nations Organisation','United Nature Organisation','United Neurology Organisation',20,'examination','B'),(3,'Who is the winner of Italian open 2020?','Raphel Nadal','Novac Djocovic','Roger Federer','Andy Murray',20,'examination','B'),(4,'Which is the most spoken language in the world?','Hindi','Arab','English','Chinese',20,'examination','D'),(5,'What is the full form of .csv extension','Comma separated values','Column selected values','Combined selected Variables','Combined sorted values',20,'examination','A'),(1,'who is sanal','student','employee','female','none of above',20,'examverynew','A'),(2,'Crow is a _____?','a bird','an animal','a food','none of above',20,'examverynew','A'),(1,'Who is the president of America?','abdul kalam','Donald Trump','Narendra modi ','rajiv gandhi',20,'brittoexam','B'),(2,'who is the cm of kerala?','pinarayi','chennithala','manmohan singh','achuthanthan',20,'brittoexam','A'),(1,'Who is the president of America?','Narendra Modi','Donald Trump','Manmohan singh','Rajiv gandhi',20,'renny_quiz','B'),(1,'cs?','comedy science','coloumn science','computer science','camera science',20,'britz','C'),(2,'MCA?','management of connected accounting','master of computer application','minister of care and availability','master of cellphone accomodation',20,'britz','B'),(1,'Who is the president of India','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',20,'testuserquiz','D'),(1,'Who is the president of India','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',20,'advaidexam','D'),(1,'Who is the CEO of IEDC of MES?','abdul kalam','narendra modi','manmohan singh','Aswin Santhakumar',20,'aswinquiz','D'),(1,'Who is the president of India?','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',20,'124','D'),(1,'Who is the president of India?','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',20,'faizquiz','D'),(1,'Who is the CEO of IEDC?','abdul kalam','narendra modi','manmohan singh','Ashwin Santhakumar',20,'ashikexam','D'),(1,'Who is the CEO of IEDC?','Narendra Modi','Donald Trump','manmohan singh','Ashwin Santhakumar',20,'ammayiexam','D'),(2,'Who is the eldest person in innovative?','Ammayi','narendra modi','manmohan singh','Ramnath Kovind',20,'ammayiexam','A'),(1,'Who is the president of India','abdul kalam','narendra modi','manmohan singh','Ramnath Kovind',20,'shaluquiz','D'),(2,'Who is the cm of kerala?','Narendra Modi','Donald Trump','manmohan singh','pinarayi vijayan',20,'shaluquiz','D'),(1,'who is the president of america?','bla ','bla bla','joe biden','bla bla bla',30,'examin','C'),(1,'Who is the father of Computer Science?','Charles Babbage','Alan Turing','Vinton cerf','Tim berners lee',15,'130','B'),(2,'Who is the father of India?','Abdul Kalam','Rajeev Gandhi','Narendra Modi','Mahatma Gandhi',15,'130','D'),(1,'some question here','fdf','ffds','dfsf','dfsf',15,'','B'),(2,'dsfsf','gdsfgdfg','dfgs','dfgsd','sdfg',23,'','B'),(1,'what jsfsl','fsfa','dfs','fsfs','dsf',12,'','C'),(1,'what jsfsl','fsfa','dfs','fsfs','dsf',12,'','C'),(1,'sdfsfa','fdsfs','dfsf','fdsfs','fsfdsf',20,'','C'),(1,'sdfsf','dfsaf','sdfdsf','sdfsf','dfs',12,'test','C'),(1,'dfssfs','sfsdf','dfs','dfs','dsfs',10,'test','B'),(1,'dfssfs','sfsdf','dfs','dfs','dsfs',10,'test','B'),(1,'dfssfs','sfsdf','dfs','dfs','dsfs',10,'','B'),(1,'What is christmas?','somethhing','aavo','jesus birthday','dfjsf',12,'142','C'),(1,'How many bit is a byte?','4','6','8','2',10,'143','C'),(2,'Who discovered the programming language C?','Bjarne stroustroup','Dennis Ritchie','James Gosling','Rasmus Ledorf',10,'143','B');
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
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=1043 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1001,'sanal','sanal'),(1002,'thomas','thomas'),(1003,'thomas','thomas'),(1004,'sneha','sneha'),(1005,'jose',''),(1006,'jose','jose'),(1007,'sneha','sneha'),(1008,'thomas','thomas'),(1009,'sam','sam'),(1010,'myacc','myacc'),(1011,'thomas','thomas'),(1012,'thomas','thomas'),(1013,'thomas','thomas'),(1014,'thomas','thomas'),(1015,'thomas','thomas'),(1016,'thomas','thomas'),(1017,'thomas','thoma'),(1018,'thomas','thomas'),(1019,'',''),(1020,'',''),(1021,'',''),(1022,'',''),(1023,'',''),(1024,'',''),(1025,'',''),(1026,'',''),(1027,'',''),(1028,'user','user'),(1029,'Britto','britto'),(1030,'renny','renny'),(1031,'testuser','testuser'),(1032,'advaid','advaid'),(1033,'ashwin','ashwin'),(1034,'faris','faris'),(1035,'faiz','faiz'),(1036,'ashik','ashik'),(1037,'ammayi','ammayi'),(1038,'shalu','shalu'),(1039,'@sanal','sanal'),(1040,'sanal@bsg','sanal'),(1041,'new','new'),(1042,'check','check');
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

-- Dump completed on 2021-05-25 10:54:12
