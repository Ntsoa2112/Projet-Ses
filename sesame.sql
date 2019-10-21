-- MySQL dump 10.17  Distrib 10.3.17-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sesame
-- ------------------------------------------------------
-- Server version	10.3.17-MariaDB-0ubuntu0.19.04.1

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
-- Table structure for table `EMPRUNT`
--

DROP TABLE IF EXISTS `EMPRUNT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMPRUNT` (
  `id_emprunt` int(11) NOT NULL AUTO_INCREMENT,
  `id_etudiant` int(4) NOT NULL,
  `id_materiel` int(4) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `correspondance` varchar(50) DEFAULT NULL,
  `date_emprunt` datetime NOT NULL DEFAULT current_timestamp(),
  `date_de_retour` datetime DEFAULT NULL,
  PRIMARY KEY (`id_emprunt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMPRUNT`
--

LOCK TABLES `EMPRUNT` WRITE;
/*!40000 ALTER TABLE `EMPRUNT` DISABLE KEYS */;
/*!40000 ALTER TABLE `EMPRUNT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ETUDIANT`
--

DROP TABLE IF EXISTS `ETUDIANT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ETUDIANT` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mention` varchar(10) NOT NULL,
  `dortoir` int(3) NOT NULL,
  `mdp` varchar(254) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ETUDIANT`
--

LOCK TABLES `ETUDIANT` WRITE;
/*!40000 ALTER TABLE `ETUDIANT` DISABLE KEYS */;
INSERT INTO `ETUDIANT` VALUES (7,'MM','Ntsoa','ntsoap20.aps1a@gmail.com','APS',1,'10e6ba80aabe4e156815e758967b04b3fbd8208c449543b98fe2fd80ef704b079047b628f3b48466f6cda8facb36c2816d5b906825c9b8181669d74b05c61daa'),(8,'RIVO','Lalaina','lalainap20.aps1a@gmail.com','APS',1,'03fc1ca9529c2b7f71a1f003953eac944d82849ffc1ca82386c165a83ec428024050866d371944bd7597195c758dbb6f3e8cbb83551eee6a6cf583e20fb5334f'),(9,'Offman','Offman','offmanp20.aps1a@gmail.com','APS',1,'4a92a1bab9dfefb3045cb49055d7159e5e6ba88755ef62d61c7fe7c4b9a8d9d0c7223b6eac3e7d0cb42f4bf54b847a9475ae330dc4123225fae2de910a733903');
/*!40000 ALTER TABLE `ETUDIANT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MATERIEL`
--

DROP TABLE IF EXISTS `MATERIEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MATERIEL` (
  `id_mat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `correspondance` varchar(50) DEFAULT NULL,
  `dispo` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_mat`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MATERIEL`
--

LOCK TABLES `MATERIEL` WRITE;
/*!40000 ALTER TABLE `MATERIEL` DISABLE KEYS */;
INSERT INTO `MATERIEL` VALUES (5,'clé','Salle C1',0),(6,'clé','Salle C2',0),(7,'clé','Salle C3',0),(8,'clé','Salle C4',1),(9,'clé','Salle E1',1),(10,'clé','Salle E2',1),(11,'clé','Salle E3',1),(12,'clé','Salle E4',1),(13,'clé','Club Journalisme',1),(14,'clé','Club Informatique',0),(15,'clé','Club Cuisine',1),(16,'clé','Club Sport',1),(17,'clé','Club Théatre',1),(18,'clé','Club Musique',1),(19,'clé','Laboratoire',1),(20,'clé','Intendance',1);
/*!40000 ALTER TABLE `MATERIEL` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-21 12:50:18
