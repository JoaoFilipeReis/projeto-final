-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: codemaster
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text DEFAULT NULL,
  `texto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (1,'https://masterprohosting.com/sebastiao_alves//public/uploads/autor/fotoautor.jpg','O autor de \"Senhora do Amor e da Guerra\"  nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido e é professor no Instituto Superior Técnico. \r\n\r\nAté aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia e decidiu mais uma vez tentar escrever ficção, com um afinco que nunca pusera em anteriores tentativas. E descobriu que era capaz de escrever diálogos e congeminar enredos.\r\n\r\nPublicou então sucessivamente um livro de contos, “O caracol estrábico” (2011), e os romances “O colecionador de amnésias” (2014), “O velho que pensava que fugia” (2017), o romance histórico “Senhora do amor e da guerra” (2020) e o romance \"O homem certo é difícil de encontrar\" (2021).','2022-12-10 20:19:04','2022-12-10 20:19:04'),(6,'https://sebastiaoalves.com/public/uploads/imprensa/lancamentoamnesias.jpg','No próximo dia 21 de Outubro será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que cedeu os direitos de autor à Alzheimer Portugal?Data 15-10-2014 \r\n\r\n\r\n?No próximo dia 21 de Outubro, pelas 18:00 hrs, no Instituto Superior Técnico em Lisboa, será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que muito generosamente cedeu à Alzheimer Portugal os direitos de autor. A obra representa bem a realidade de todo o percurso de um Doente de Alzheimer. O interesse do leitor é desde logo conseguido não só pela forma como o autor vai apresentando o Engenheiro Zeferino, uma vez que parte sempre da perspectiva da personagem, mas também por não faltarem os momentos de ternura, os momentos de humor e os momentos de tristeza e solidão.??Não deixe de nos acompanhar neste momento! A Alzheimer Portugal agradece. Clique aqui para ler um excerto do livro «O Coleccionador de Amnésias»','2022-12-11 17:17:46','2022-12-11 17:17:46');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-11 17:54:24
