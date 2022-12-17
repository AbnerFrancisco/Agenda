CREATE DATABASE  IF NOT EXISTS `dbagenda4infob` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dbagenda4infob`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: dbagenda4infob
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `tbcontatos`
--

DROP TABLE IF EXISTS `tbcontatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcontatos` (
  `codigoContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(200) NOT NULL,
  `emailContato` varchar(100) DEFAULT NULL,
  `telefoneContato` varchar(45) DEFAULT NULL,
  `dataNascContato` date DEFAULT NULL,
  `nomeFotoContato` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigoContato`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcontatos`
--

LOCK TABLES `tbcontatos` WRITE;
/*!40000 ALTER TABLE `tbcontatos` DISABLE KEYS */;
INSERT INTO `tbcontatos` VALUES (1,'Marcos de Melo','marcdmelo@yahoo.com','(99) 9999-4444','1976-10-26','marcos.jpg'),(3,'Nicoly Melo ap','nic@gmail.com','(99) 85858-6598','1976-10-25','nicoly.jpg'),(5,'Lara Marri','marcdmelo@gmail.com','20220410','2022-04-19','lara.jpg'),(10,'Fulano de tal','fulano@detal.com','54545544','2022-04-07','');
/*!40000 ALTER TABLE `tbcontatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtarefas`
--

DROP TABLE IF EXISTS `tbtarefas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtarefas` (
  `codigoTarefa` int(11) NOT NULL AUTO_INCREMENT,
  `tituloTarefa` varchar(100) NOT NULL,
  `descricaoTarefa` text DEFAULT NULL,
  `dataInicioTarefa` date DEFAULT NULL,
  `dataConclusaoTarefa` date DEFAULT NULL,
  `statusTafera` char(1) DEFAULT 'N',
  PRIMARY KEY (`codigoTarefa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtarefas`
--

LOCK TABLES `tbtarefas` WRITE;
/*!40000 ALTER TABLE `tbtarefas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbtarefas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-02 19:20:33
