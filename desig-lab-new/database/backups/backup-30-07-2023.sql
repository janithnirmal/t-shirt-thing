-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: t_shirt_design_app_db
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `saved_designs`
--

DROP TABLE IF EXISTS `saved_designs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saved_designs` (
  `id` varchar(16) NOT NULL,
  `saved_datetime` datetime NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `design_data` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_saved_designs_user_idx` (`user_email`),
  CONSTRAINT `fk_saved_designs_user` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_designs`
--

LOCK TABLES `saved_designs` WRITE;
/*!40000 ALTER TABLE `saved_designs` DISABLE KEYS */;
INSERT INTO `saved_designs` VALUES ('64c678a8d3d8b','2023-07-30 16:50:16','rmjanithnirmal@gmail.com','{\"test\":{\"startX\":100,\"startY\":100,\"endX\":200,\"endY\":200,\"thickness\":3,\"color\":\"white\"},\"sizeQuntity\":{\"gender\":null,\"matirial\":null,\"xs\":null,\"s\":null,\"m\":null,\"l\":null,\"xl\":null,\"xxl\":null,\"doublexxl\":null,\"thribblexxl\":null},\"gender\":\"male\",\"clothType\":\"polo-t-shirt\",\"printType\":\"ScreenPrint\",\"mainColorHueValue\":0,\"mainColorSaturateValue\":0,\"mainColorLevelValue\":1.5,\"clothOption\":{\"sleves\":\"long\",\"neck\":\"v\"},\"views\":{\"active\":\"right\",\"strips\":{\"neck\":[{\"color\":\"#000000\",\"thickness\":\"\"},{\"color\":\"#ff0f0f\",\"thickness\":\"3\"},{\"color\":\"#000000\",\"thickness\":\"\"},{\"color\":\"#ff0f0f\",\"thickness\":\"3\"}],\"arm\":[{\"thickness\":2,\"color\":\"white\"},{\"thickness\":2,\"color\":\"orange\"},{\"thickness\":3,\"color\":\"pink\"}],\"sides\":[{\"thickness\":3,\"color\":\"white\"}]},\"frontSideObject\":{\"imageSections\":{\"topLeft\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}},\"topRight\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}},\"center\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}}}},\"backSideObject\":{},\"leftSideObject\":{},\"rightSideObject\":{}}}'),('64c67923bf63a','2023-07-30 16:52:19','rmjanithnirmal@gmail.com','{\"test\":{\"startX\":100,\"startY\":100,\"endX\":200,\"endY\":200,\"thickness\":3,\"color\":\"white\"},\"sizeQuntity\":{\"gender\":null,\"matirial\":null,\"xs\":null,\"s\":null,\"m\":null,\"l\":null,\"xl\":null,\"xxl\":null,\"doublexxl\":null,\"thribblexxl\":null},\"gender\":\"male\",\"clothType\":\"polo-t-shirt\",\"printType\":\"ScreenPrint\",\"mainColorHueValue\":230,\"mainColorSaturateValue\":1,\"mainColorLevelValue\":1,\"clothOption\":{\"sleves\":\"long\",\"neck\":\"v\"},\"views\":{\"active\":\"right\",\"strips\":{\"neck\":[{\"color\":\"#000000\",\"thickness\":\"\"},{\"color\":\"#ff0f0f\",\"thickness\":\"3\"},{\"color\":\"#000000\",\"thickness\":\"\"},{\"color\":\"#ff0f0f\",\"thickness\":\"3\"}],\"arm\":[{\"thickness\":2,\"color\":\"white\"},{\"thickness\":2,\"color\":\"orange\"},{\"thickness\":3,\"color\":\"pink\"}],\"sides\":[{\"thickness\":3,\"color\":\"white\"}]},\"frontSideObject\":{\"imageSections\":{\"topLeft\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}},\"topRight\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}},\"center\":{\"imgUri\":null,\"position\":{},\"size\":{\"width\":50,\"height\":50}}}},\"backSideObject\":{},\"leftSideObject\":{},\"rightSideObject\":{}}}');
/*!40000 ALTER TABLE `saved_designs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `password_salt` varchar(64) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address1` varchar(250) DEFAULT NULL,
  `address2` varchar(250) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `image_url` text,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('email@gmail.com','d64962c300b60088e0423deb682642c58eb25c82625cf7eab95530fbb7d612ce','34d4b24ff8ea0c46ed65544251c62ba3','janith','nirmal','address1 ','address 2','0710902997',NULL),('rmjanithnirmal@gmail.com','d64962c300b60088e0423deb682642c58eb25c82625cf7eab95530fbb7d612ce','34d4b24ff8ea0c46ed65544251c62ba3',NULL,NULL,NULL,NULL,NULL,'https://images.unsplash.com/photo-1511367461989-f85a21fda167?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-30 20:31:32
