CREATE DATABASE  IF NOT EXISTS `hugo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hugo`;
-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: hugo
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `rutaImagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'celi','lala',NULL,NULL,NULL,NULL),(2,'leonel','nardelli','leo@gmail.com','$2y$10$bTZInT2BgOQdMaeDjkMMJu9YDDRUQS703g.Q0dqUwk1TLyBbBfcDS','leonchis','398f5a6c6a64a55d7ef7358aa95f1f281506912559.png'),(3,'leo','leo','leo@gggggg.vc','$2y$10$Fzz5iZfsCA5IqlOGU5fHW.6UVjr7NmXEhwwr337nd.Lurwqfvtq/S','lio','417a9fea5c4689a0f392e29bee5f4c961506944662.png'),(4,'leonel','nardelli','leonel@nardelli.com','$2y$10$B.EBl1pLgDuTd9V6bWJHs.JwzhH9aa98HxUjQSkKUy6/wenAHJAei','leonchiss','1af898f642b796d393bb08cedf5ef9471506955328.png'),(5,'lora','lora','lora@xn--pra-6ma.cpm','$2y$10$8ZGi7Xjq6/yhvfLpc8JYpuxS.ObAfXjd71w4omZG4KX5//k7dxvvm','lora',NULL),(6,'pala','pala','pala@la.com','$2y$10$IqHJuouF32MxmnB518ju3.9lgtmzfrrzadxohbGP0GEwWIdrjCNn2','pala','c5b07e9a60652eba50435d223f4801e31508547843.jpg'),(7,'norma','norma','norma@norma.com','$2y$10$6eflP33vI3NynWX7Uw1jfu2djdfg.WyfBK./5tGv71pjWHZ/ewdue','norma',NULL),(8,'pato','pato','pato@pato.com','$2y$10$lncxdGvSDopn5PuF5DwN9efdypVbVpw0Qb91A77vAeOlOZg1eF2Za','pato',NULL),(9,'pola','pola','pola@pola.com','$2y$10$D2S2CdSaE.bVyqPJ.tGK.uT5Bh0ubPLrbtjLErcZVkhipYzAoxcNO','pola',NULL),(10,'loro','loro','loro@loro.com','$2y$10$fQNfrFlMP7OZuoBPZjc2OO1q0RoJM9hzNQjDdC/QKxYkwPllRmjHm','loro',NULL),(11,'patri','patri','patri@patri.com','$2y$10$pULzJUGpY5asqVEtwsZX1.uTDQ4DN6VEH9FCg2nQyIwaph5rcXtwK','patri','c5b07e9a60652eba50435d223f4801e31508956544.jpg'),(12,'nadina','nadina','nadina@nadina.com','$2y$10$OrcYh6EoWG0JG/iylJng..OiAJt1Et6oJWnz.lTr9vqKG5vjPhyua','nadina',NULL),(13,'joha','joha','jo@hdfg.com','$2y$10$M7flkcB.l4oQkb1tiq/GuuSJsKuA4AqqeNYpvQA.WgFOawCulgN2C','joha','a46881ab97477fd74b38eb30e82f3d9b1509969463.jpg'),(14,'maru','maru','maru@maru.com','$2y$10$090yyo1S3sScBmLCXDrB9uFLwkpHzg2.uf88uPKHpsHP6DfPPgWSq','Maru','79d36c7c294533fa8ef94c6894afc4771509982298.jpg'),(15,'ña','ña','na@na.com','$2y$10$rrG5arSUuKU9kOpSDJYYTertzGOcmMijQrLxgq6E8zwbbY0SSZXFy','ña','79d36c7c294533fa8ef94c6894afc4771509982474.jpg'),(16,'mart','mart','mart@mart.com','$2y$10$AEdZv2qU5DDYAQcP/1Mtieg9xDEDPfY5Mp8.AdX2GMuIFYmzJ6qKe','mart','bd1b229a3f4d86920bbb62591ee6964c1509983060.jpg'),(17,'mart','mart','mar@mart.com','$2y$10$pqW0i0rK2pkf/ZW0aNck8uRvEMAyXqFCnrAk8lSkiZMJ0bHqO1HVm','mart','1bb87d41d15fe27b500a4bfcde01bb0e1510326701.png'),(18,'zas','zas','zas@zas.com','$2y$10$uqrCXi2euL9mlBtbAMR2euqIPWihAg5w34iS1uZJie4GdSTMx9ewG','zas','1bb87d41d15fe27b500a4bfcde01bb0e1510326797.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hugo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-10 12:15:15
