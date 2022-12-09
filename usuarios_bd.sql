-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: usuarios_bd
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

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
-- Table structure for table `datos_tb`
--

DROP TABLE IF EXISTS `datos_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subtitulo` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `img_peque` varchar(45) DEFAULT NULL,
  `img_large` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_tb`
--

LOCK TABLES `datos_tb` WRITE;
/*!40000 ALTER TABLE `datos_tb` DISABLE KEYS */;
INSERT INTO `datos_tb` VALUES (1,'Goku','Es un sayayin que salva el mundo','gokus/goku.jpeg','gokus/goku.jpeg','Goku es un graqn super heroe'),(2,'Krillin','Pelón de la bajura','pelones/krillin.png','pelones/krillin.png','Es un guerrero fuerte y pelón');
/*!40000 ALTER TABLE `datos_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_tb`
--

DROP TABLE IF EXISTS `usuario_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_tb` (
  `id` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `passw` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_tb`
--

LOCK TABLES `usuario_tb` WRITE;
/*!40000 ALTER TABLE `usuario_tb` DISABLE KEYS */;
INSERT INTO `usuario_tb` VALUES (123,'123','TIZvHy0Z9z9u/CdDAbaDKA==','2022-11-23','Administrador'),(112886754,'Aaron','nHxxafcKLhgN6N2jg7rlQg==','2022-11-24','Soporte'),(2147483647,'Jonas','V2N9aW/E/bblTWbtEkM0ew==','2022-11-16','Consulta');
/*!40000 ALTER TABLE `usuario_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-25  8:40:36
