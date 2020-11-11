-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: agriculture
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `applying_year` varchar(250) NOT NULL,
  `applied_for_degree` varchar(250) NOT NULL,
  `examinaton_passed` varchar(250) DEFAULT NULL,
  `last_academic_percent` varchar(250) DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicants`
--

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
INSERT INTO `applicants` VALUES (1,'Sonu  Sah','1997-11-04','2016','Bsc Information Technology','Higher Secondary','95',NULL),(2,'Sam Smith','2020-03-01','2020','Zoology','Higher Secondary','86',NULL),(3,'Sonu Sah','2020-08-13','2016','Biotechnology','AHSEC','86',NULL);
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(250) NOT NULL,
  `book_type` varchar(250) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `procurement_year` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Signal And System','TeleCommunication',100,'2020-08-17 07:23:24','2020-08-01');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dignitaries`
--

DROP TABLE IF EXISTS `dignitaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dignitaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dignitaries`
--

LOCK TABLES `dignitaries` WRITE;
/*!40000 ALTER TABLE `dignitaries` DISABLE KEYS */;
INSERT INTO `dignitaries` VALUES (1,'Zengo Mango','Bla bla','2020-08-11 07:45:15'),(3,'Saras','Tinsukia ','2020-08-23 12:07:26'),(4,'Majuli','Rupahi Ali','2020-08-27 08:07:35');
/*!40000 ALTER TABLE `dignitaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `organized_by` varchar(250) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `sponsored_by` varchar(250) NOT NULL,
  `venue` varchar(250) NOT NULL,
  `level` varchar(250) DEFAULT NULL,
  `event_type` varchar(250) DEFAULT NULL,
  `event_year` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Abeyantrix','JISTSU','2020-08-06','2020-08-10','Gradlic','Jail Road','12','Music festival','2020');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(250) NOT NULL,
  `faculty_address` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `specialization` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Jameson Mushahary','Kokrajhar','1985-06-10','Jhoola Chaap','Blunder in everything'),(2,'Sonu Sah','Rajabari Road','2020-07-28','B Tech','Blunder in everything');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty_award`
--

DROP TABLE IF EXISTS `faculty_award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty_award` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(250) NOT NULL,
  `detail` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty_award`
--

LOCK TABLES `faculty_award` WRITE;
/*!40000 ALTER TABLE `faculty_award` DISABLE KEYS */;
INSERT INTO `faculty_award` VALUES (2,'Karan Arjun','Gold medal');
/*!40000 ALTER TABLE `faculty_award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infrastructure`
--

DROP TABLE IF EXISTS `infrastructure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infrastructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grant_officer_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infrastructure`
--

LOCK TABLES `infrastructure` WRITE;
/*!40000 ALTER TABLE `infrastructure` DISABLE KEYS */;
INSERT INTO `infrastructure` VALUES (1,'ER Mr. Sonu Sah','Kailash is the best location in the world. Habitat of Lord Shiva (Universe)','2020-08-11 18:13:52');
/*!40000 ALTER TABLE `infrastructure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intern_name` varchar(250) NOT NULL,
  `intern_type` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `remark` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internship`
--

LOCK TABLES `internship` WRITE;
/*!40000 ALTER TABLE `internship` DISABLE KEYS */;
INSERT INTO `internship` VALUES (1,'Rupak Dehingia','Python Web Development','2 months','Good');
/*!40000 ALTER TABLE `internship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `placement`
--

DROP TABLE IF EXISTS `placement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `placement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(250) NOT NULL,
  `placement_year` varchar(250) NOT NULL,
  `package` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `industry_type` varchar(250) DEFAULT NULL,
  `time_period` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `placement`
--

LOCK TABLES `placement` WRITE;
/*!40000 ALTER TABLE `placement` DISABLE KEYS */;
INSERT INTO `placement` VALUES (1,'Sammuel Badri','2018','5000000','TCS','IT','3 YEAR');
/*!40000 ALTER TABLE `placement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popular_publication`
--

DROP TABLE IF EXISTS `popular_publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `popular_publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `publication_year` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popular_publication`
--

LOCK TABLES `popular_publication` WRITE;
/*!40000 ALTER TABLE `popular_publication` DISABLE KEYS */;
INSERT INTO `popular_publication` VALUES (3,'Inner Engineering','Sadguru','2020-08-24 12:11:54','2020');
/*!40000 ALTER TABLE `popular_publication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publication`
--

DROP TABLE IF EXISTS `publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publication_number` int(11) DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `publication_year` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `journal_name` varchar(250) DEFAULT NULL,
  `journal_volume` varchar(250) DEFAULT NULL,
  `journal_pages` int(10) unsigned DEFAULT NULL,
  `doi_number` int(11) DEFAULT NULL,
  `naac_score` varchar(250) DEFAULT NULL,
  `impact_factor` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `kvk` varchar(250) DEFAULT NULL,
  `research_station` varchar(250) DEFAULT NULL,
  `isbn` varchar(250) DEFAULT NULL,
  `editors` varchar(250) DEFAULT NULL,
  `published_type` varchar(250) DEFAULT NULL,
  `publisher_name` varchar(250) DEFAULT NULL,
  `publication_type` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publication`
--

LOCK TABLES `publication` WRITE;
/*!40000 ALTER TABLE `publication` DISABLE KEYS */;
INSERT INTO `publication` VALUES (1,100,'Elon','2020-10-10','Something','Kuch kuch','12',1000,202,'98','No impact','Astro Physics','90JHJ0','Jorhat East','9975011','My Team','Ramdom','Admin','Usual');
/*!40000 ALTER TABLE `publication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `research`
--

DROP TABLE IF EXISTS `research`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `objective` varchar(250) NOT NULL,
  `pi` varchar(250) DEFAULT NULL,
  `co_pi` varchar(250) DEFAULT NULL,
  `project_detail` varchar(250) DEFAULT NULL,
  `funding_agency` varchar(250) DEFAULT NULL,
  `project_amount` varchar(250) DEFAULT NULL,
  `project_period` varchar(250) DEFAULT NULL,
  `starting_year` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `research`
--

LOCK TABLES `research` WRITE;
/*!40000 ALTER TABLE `research` DISABLE KEYS */;
INSERT INTO `research` VALUES (2,'Corona Vaccine','cure covid','bat','Chinese','Curing as quickly as possible','WHO','800000000','2 year','2020-08-01','2020-08-24','2020-08-22 09:20:23',1);
/*!40000 ALTER TABLE `research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salient_activity`
--

DROP TABLE IF EXISTS `salient_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salient_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(250) NOT NULL,
  `activity_year` varchar(250) DEFAULT NULL,
  `pages` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salient_activity`
--

LOCK TABLES `salient_activity` WRITE;
/*!40000 ALTER TABLE `salient_activity` DISABLE KEYS */;
INSERT INTO `salient_activity` VALUES (2,'Hello','2021',100);
/*!40000 ALTER TABLE `salient_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salient_research`
--

DROP TABLE IF EXISTS `salient_research`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salient_research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(250) DEFAULT NULL,
  `activity_year` varchar(250) NOT NULL,
  `pages` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salient_research`
--

LOCK TABLES `salient_research` WRITE;
/*!40000 ALTER TABLE `salient_research` DISABLE KEYS */;
INSERT INTO `salient_research` VALUES (2,'hello hello 123 hello','2020',7);
/*!40000 ALTER TABLE `salient_research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_award`
--

DROP TABLE IF EXISTS `student_award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_award` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(250) NOT NULL,
  `detail` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_award`
--

LOCK TABLES `student_award` WRITE;
/*!40000 ALTER TABLE `student_award` DISABLE KEYS */;
INSERT INTO `student_award` VALUES (1,'Sonu Sah','Padma Bhusan award');
/*!40000 ALTER TABLE `student_award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `category` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `registration_no` varchar(250) DEFAULT NULL,
  `addmission_year` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (2,'Ajay Kumar','2020-08-13',1,'Eight','Research','AT Road','12323','2018','B.Sc');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sonu','Sah',0,'sonu@gradlic.com','password','1997-11-04','2020-08-29 08:27:27','2020-08-30 15:41:51'),(2,'Faculty','Sonu',1,'faculty@gradlic.com','password','1997-11-04','2020-08-29 08:28:26','2020-08-29 08:28:26'),(3,'Student','Sonu',2,'student@gradlic.com','password','1997-11-04','2020-08-29 08:29:00','2020-08-29 08:29:00'),(4,'Custom','User',1,'custom@gradlic.com','password','1000-01-01','2020-08-30 15:46:49','2020-08-30 15:46:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `welfare_activity`
--

DROP TABLE IF EXISTS `welfare_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `welfare_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(250) NOT NULL,
  `activity_year` date NOT NULL,
  `details` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `welfare_activity`
--

LOCK TABLES `welfare_activity` WRITE;
/*!40000 ALTER TABLE `welfare_activity` DISABLE KEYS */;
INSERT INTO `welfare_activity` VALUES (1,'Tree Plantationn','2020-07-01','One thounsand trees had been planted for natural welfare');
/*!40000 ALTER TABLE `welfare_activity` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-02 12:33:52
