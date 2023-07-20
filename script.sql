CREATE DATABASE  IF NOT EXISTS `ecf-garageauto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecf-garageauto`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: ecf-garageauto
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auto`
--

DROP TABLE IF EXISTS `auto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prix` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `annee` int NOT NULL,
  `kilometre` varchar(50) DEFAULT NULL,
  `model` varchar(500) DEFAULT NULL,
  `boite` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auto`
--

LOCK TABLES `auto` WRITE;
/*!40000 ALTER TABLE `auto` DISABLE KEYS */;
INSERT INTO `auto` VALUES (40,'252743€','/src/CRUD-Admin/img/1094236.jpg',2454,'56842 km','efesf','drtfjjt',NULL),(41,'435€','/src/CRUD-Admin/img/1094236.jpg',4836486,'433 km','sefse','qfzf',NULL),(43,'75275€','/src/CRUD-Admin/img/1094236.jpg',2452,'7272 km','seges','egsg',NULL),(44,'833€','/src/CRUD-Admin/img/1094236.jpg',453453,'45345 km','whrrfh','wsggseg',NULL),(45,'48343€','/src/CRUD-Admin/img/1094236.jpg',4533,'4343 km','wrshwrh','xdxdrh',NULL),(46,'23454€','/src/CRUD-Admin/img/1094236.jpg',5345,'4533 km','sfgegsr','sthdhdh',NULL),(47,'15000€','/src/CRUD-Admin/img/1094236.jpg',2023,'150000 km','Audi','Automatique','aEFFEQSEFGQSEGRSGQRQSGQCVQSFDGQSCXVQSFGCXVQXFHDXCVQSFGFDCXBGQSHRGQDFBQSFGQFSGHQSHQHQCQSFGQSFGQSG'),(48,'8000€','/src/CRUD-Admin/img/1094236.jpg',2016,'5000 km','BMW','Manuel','segrdhstdhsdgsdhsvbgsdfhsdhtsdghfsdsfdhsdgfhgvdhsdghsgbsghsghsvdhgvsnbgdhgdvfbqdfhsdthsfdgbfsdfdgbfxgbfgbfdgsdsdhsdhfvhsdfhsdfhsfghsdfhsdthdqhsdthfdghqdsfhsdrfhsffhfgh'),(49,'15000€','/src/CRUD-Admin/img/1094236.jpg',2026,'150000 km','Audi','Manuel','sqrgdbqdsvqsgqrcvqdfbfqdqsrgqsrgfqvfvfsdgfggrgfqfgqf');
/*!40000 ALTER TABLE `auto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avisclient`
--

DROP TABLE IF EXISTS `avisclient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avisclient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prénom` varchar(50) DEFAULT NULL,
  `prestations` varchar(50) DEFAULT NULL,
  `note` tinyint DEFAULT NULL,
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avisclient`
--

LOCK TABLES `avisclient` WRITE;
/*!40000 ALTER TABLE `avisclient` DISABLE KEYS */;
INSERT INTO `avisclient` VALUES (5,'Djenane','Yassine','vente',2,'fsegfsgssgd'),(6,'momo','momo','mecanique',4,'efefssfzefsefef');
/*!40000 ALTER TABLE `avisclient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avisvalide`
--

DROP TABLE IF EXISTS `avisvalide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avisvalide` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prénom` varchar(50) DEFAULT NULL,
  `prestations` varchar(50) DEFAULT NULL,
  `note` tinyint DEFAULT NULL,
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avisvalide`
--

LOCK TABLES `avisvalide` WRITE;
/*!40000 ALTER TABLE `avisvalide` DISABLE KEYS */;
INSERT INTO `avisvalide` VALUES (1,'Djenane','Yassine','vente',2,'fsegfsgssgd'),(2,'Djenane','Yassine','vente',2,'fsegfsgssgd'),(3,'momo','momo','mecanique',4,'efefssfzefsefef');
/*!40000 ALTER TABLE `avisvalide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse_mail` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_nom` varchar(100) NOT NULL,
  `service_description` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (19,'Réparation mécanique',''),(20,'Entretien périodique',''),(21,'Révision des freins',''),(22,'Diagnostic électronique',''),(23,'Changement de pneus',''),(24,'Climatisation et refroidissement',''),(25,'Freins et systèmes de suspension',''),(26,'Révision de la transmission',''),(27,'Réparation carrosserie et peinture',''),(28,'Contrôle technique et certifications',''),(29,'Contrôle technique et certifications',''),(30,'Réparation système',''),(31,'Géométrie et alignement des roues',''),(32,'Réparation de la climatisation',''),(33,'Achat/vente véhicules',''),(34,'Batteries et système de charge',''),(35,'Systèmes de verrouillage centralisé',''),(36,'Nettoyage et polissage automobile',''),(37,'Dépannage',''),(38,'Remplacement courroies de distribution',''),(39,'Remplacement courroies de distribution',''),(40,'Installation systèmes de sécurité',''),(41,'Conseils entretien et prévention',''),(50,'momo','');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `connect` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,1);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `userrole` char(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (93,'Vincent Parrot','39dfa55283318d31afe5a3ff4a0e3253e2045e43','admin'),(103,'bot1','e95de03fd1a56829ac7c39e6cce7a9bd3b5c064d','employé'),(104,'momo','77add44f8f13cf5b3298a7833613aca42430386d','employé');
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

-- Dump completed on 2023-07-20 15:09:01
