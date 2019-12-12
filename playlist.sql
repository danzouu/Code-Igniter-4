-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: playlist
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `djent`
--

DROP TABLE IF EXISTS `djent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `djent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `track_title` varchar(50) DEFAULT NULL,
  `artist` varchar(50) DEFAULT NULL,
  `album` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `djent`
--

LOCK TABLES `djent` WRITE;
INSERT INTO `djent` VALUES (0,'Reptile','Periphery','P5: Hail Stan',2019),(1,'Flatline','Periphery','P3: Select Difficulty',2016),(2,'Abandoned','Unprocessed','Artificial Void',2019),(3,'Mikasa','Veil of Maya','Matriarch',2015),(4,'Ragarok','Periphery','P2: This Time It\'s Personal',2012),(5,'Icarus Lives','Periphery','Periphery',2010),(6,'Haven','Unprocessed','Covenant',2018),(7,'Pagan PT2','Vitalism','SY',2017),(8,'Hos Down','Jason Richardson','I',2016),(9,'Fragments','Jason Richardson','Jason Richardson',2016),(10,'Make Total Destroy','Periphery','P2: This Time It\'s Personal',2012),(11,'Physical Education','Animals as Leaders','The Joy of Motion',2014),(12,'Wave of Babies','Animals as Leaders','Animals as Leaders',2009),(13,'The Bad Thing','Periphery','Juggernaut: Omega',2015),(14,'Letter Experiment','Periphery','Periphery',2010),(15,'Blood Eagle','Periphery','P5: Hail Stan',2019),(16,'Masamune','Periphery','P2: This Time It\'s Personal',2012),(17,'Mile Zero','Periphery','P2: This Time It\'s Personal',2012),(18,'Members Only','Veil of Maya','Members Only',2019),(19,'Fragments','Jason Richardson','I',2016),(20,'Have A Blast','Periphery','P2: This Time It\'s Personal',2012),(21,'I, The Creator','Monuments','The Amanuensis',2014);
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-04 17:50:12
