-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: dbpavesur
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `estacionamientos`
--

DROP TABLE IF EXISTS `estacionamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estacionamientos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `horaDesde` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `horaHasta` timestamp NULL DEFAULT NULL,
  `vehiculoId` int(10) unsigned NOT NULL,
  `zonaId` int(10) unsigned NOT NULL,
  `monto` double(6,2) NOT NULL,
  `origenId` int(10) unsigned NOT NULL,
  `estado` enum('Activo','Programado','Finalizado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estacionamientos`
--

LOCK TABLES `estacionamientos` WRITE;
/*!40000 ALTER TABLE `estacionamientos` DISABLE KEYS */;
INSERT INTO `estacionamientos` VALUES (1,'2018-10-04 12:21:34','2018-10-04 17:21:34',1,2,0.00,3,'Activo',NULL,NULL),(2,'2018-10-04 13:21:34','2018-10-04 17:21:34',2,3,0.00,3,'Activo',NULL,NULL),(3,'2018-10-04 10:21:34','2018-10-04 16:21:34',3,2,0.00,4,'Activo',NULL,NULL),(4,'2018-10-04 12:21:34','2018-10-04 17:21:34',4,1,0.00,4,'Activo',NULL,NULL),(5,'2018-10-04 14:21:34','2018-10-04 16:21:34',5,3,0.00,5,'Activo',NULL,NULL),(6,'2018-10-04 12:21:34','2018-10-04 18:21:34',6,3,0.00,3,'Activo',NULL,NULL);
/*!40000 ALTER TABLE `estacionamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspectors`
--

DROP TABLE IF EXISTS `inspectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inspectors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legajo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspectors`
--

LOCK TABLES `inspectors` WRITE;
/*!40000 ALTER TABLE `inspectors` DISABLE KEYS */;
INSERT INTO `inspectors` VALUES (1,'Kerluke','Ona Daugherty',1651,'2018-10-04 15:21:34','2018-10-04 15:21:34'),(2,'Hilpert','Arjun Okuneva',6106,'2018-10-04 15:21:34','2018-10-04 15:21:34'),(3,'Hickle','Courtney Flatley',9136,'2018-10-04 15:21:34','2018-10-04 15:21:34'),(4,'Mueller','Prof. Annabelle Hartmann',3680,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(5,'Beahan','Prof. Virgie Kub I',8682,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(6,'Okuneva','Mrs. Kelli Wehner',858,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(7,'Wolff','Miss Marietta Cormier I',9863,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(8,'Champlin','Garrick Murray III',973,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(9,'Johnson','Erling Medhurst DVM',9415,'2018-10-04 15:21:35','2018-10-04 15:21:35'),(10,'Glover','Lafayette Fritsch',6319,'2018-10-04 15:21:35','2018-10-04 15:21:35');
/*!40000 ALTER TABLE `inspectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=576 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (568,'2014_10_12_000000_create_users_table',1),(569,'2014_10_12_100000_create_password_resets_table',1),(570,'2018_07_01_004750_create_vehiculos_table',1),(571,'2018_07_01_010056_create_zonas_table',1),(572,'2018_07_01_010106_create_tarifas_table',1),(573,'2018_07_05_085354_create_estacionamientos_table',1),(574,'2018_07_05_090500_create_origens_table',1),(575,'2018_09_18_160055_create_inspectors_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origens`
--

DROP TABLE IF EXISTS `origens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origens`
--

LOCK TABLES `origens` WRITE;
/*!40000 ALTER TABLE `origens` DISABLE KEYS */;
INSERT INTO `origens` VALUES (1,'SMS',NULL,NULL),(2,'APP',NULL,NULL),(3,'Web',NULL,NULL),(4,'Puntual',NULL,NULL),(5,'Totem',NULL,NULL);
/*!40000 ALTER TABLE `origens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarifas`
--

DROP TABLE IF EXISTS `tarifas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarifas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_base` int(11) NOT NULL,
  `tasa` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifas`
--

LOCK TABLES `tarifas` WRITE;
/*!40000 ALTER TABLE `tarifas` DISABLE KEYS */;
INSERT INTO `tarifas` VALUES (1,'Simple',15,0,NULL,NULL),(2,'Progresiva 1',15,10,NULL,NULL),(3,'Progresiva 2',15,20,NULL,NULL);
/*!40000 ALTER TABLE `tarifas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double(6,2) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pablo Ancheta',2215429960,'pablo@pavesur.com','$2y$10$SFUHIGLS1veMX4fkNhwRHu9vYkGAGLxS6QTVcjkV4RdXw59cc0.62',72.60,'8vZrzM8la5',NULL,NULL),(2,'Javier Gimenez',2214951946,'javier@pavesur.com','$2y$10$wg.jDfrpvbF93YwY9uM8juWdB8Kpza5TeFuZFtEEkVzMRp8UkQ5Oi',87.10,'scXvMhYVx4',NULL,NULL),(3,'Diego Taboada',1159803008,'diego@pavesur.com','$2y$10$SWaZ6pUs7G7kF3GaVpYbHuy5wLuveC9lzogYyPcrH4v8tw33UjZoG',35.60,'uoChfc2c3m',NULL,NULL),(4,'Marcelo Vanucci',2214593156,'marcelo@pavesur.com','$2y$10$vOI7sbim3tJeORqwnqegH.9HkxCTmQLVJvF4RGjKfeeHbLSH3XsIC',59.20,'PAlHEpFSwF',NULL,NULL),(5,'Vendedor',2219998888,'vendedor@pavesur.com','$2y$10$zaTBsw4xOjaysNKxeFmFsem.ZjmVQrI7BM/QwZw.d6ifc1R/Vj5nG',2000.00,'F5W0r7oAtx',NULL,NULL),(6,'Usuario',2212223344,'usuario@pavesur.com','$2y$10$3KvxiQTJtv6TsfvVNmuZJOhBI7dCtnYk4l6NiST0Xv33w0C9beud2',200.00,'xx1dGaZ5g7',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dominio` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,'3AZYSIE',1,NULL,NULL),(2,'IUVGXSV',2,NULL,NULL),(3,'EGRX5A1',3,NULL,NULL),(4,'FJPTHNE',4,NULL,NULL),(5,'L4BXZBE',5,NULL,NULL),(6,'JMA3W2K',6,NULL,NULL);
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zonas`
--

DROP TABLE IF EXISTS `zonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zonas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarifaId` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas`
--

LOCK TABLES `zonas` WRITE;
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` VALUES (1,'Centro 1','Centro comercial calle 8',1,NULL,NULL),(2,'Centro 2','Centro comercial calle 12',2,NULL,NULL),(3,'Tribunales','Tribunales de La Plata',3,NULL,NULL);
/*!40000 ALTER TABLE `zonas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-04 12:26:56
