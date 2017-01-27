-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: jc442707
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.8-MariaDB

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_idx` (`user_email`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Do Nots','Spurred on by my observations at work, I have come up with a list of things to avoid as a doctor in a hospital setting (especially for interns and medical students):<br><br>1. Don\'t wear jeans under your white coat. Its unprofessional, even though it may be more comfortable and convenient.<br><br>2. Don\'t roll up the sleeves of your white coat. You\'re not a butcher.<br><br>3. Don\'t wear a customised operating theatre cap. You only earn that once you\'re the boss.<br><br>4. Don\'t drape a stethoscope over your shoulders as a medical student when its clear that you have no idea what to do with it.<br><br>5. For the ladies - don\'t put on lots of makeup and perfume. Especially medical students. I don\'t worry about the interns, because after a few on-calls they spontaneously eliminate that aspect of their morning routine.<br><br>6. Interns - don\'t spend all day long socialising over cups of coffee. Yes, your existence here is trivial and your job mostly mindless and routine, but that doesn\'t mean you should be flaunting the fact that you have no work to do. That will just get you into trouble.<br><br>7. Do not write short, incomprehensible patient notes. You haven\'t earned that right just yet. Only the boss can write something he or she only understands and not be criticised for it. Because its HIS/HER patient, not yours you little scoundrel.<br><br>8. Don\'t show up later than your seniors. That may sound like common sense but surprisingly still occurs, requiring a prompt kick up the arse on morning rounds.<br><br>9. Do not forget to show the proper respect to anyone who is more senior than you, be it Doctor, Nurse or even orderly. They have been around for much longer than you have, and have seen many junior doctors come and go. You\'re nothing special.<br><br>10. Don\'t give up on medicine. Even though you may take a lot of abuse, the money and hours are not that great, and the perceived public worth of the physician is ever-diminishing; it can still be a very rewarding pr','work, not, job','abc@gmail.com','do-not.png'),(2,'How to be a good blogger?',' <p> OVERVIEW: STARTING A BLOG<br><br>Follow the step-by-step instructions to learn how you can begin starting a blog in less than an hour. We used this process to create our successful blog, which now has more than 4 million readers and has been featured in the New York Times, TIME magazine, and on the TODAY show.<br>STARTING A BLOG IN FIVE STEPS:<br>Choose a blogging platform, domain name, and hosting option.<br>Design your blog using a simple theme.<br>Modify your blog to get your desired look and feel.<br>Select the best plugins for your blog.<br>Write compelling content that adds value to readers.<br>NOTE: The Minimalists‘ blog is hosted by Bluehost. For only $2.95 a month, Bluehost can help you set up and host your blog. Because The Minimalists is a Bluehost affiliate partner, our readers can use this link to receive a 50% discount off the monthly price and a free domain.<br>','blog, tricks, knowledge','abc@gmail.com','blogger.png'),(6,'Auto suggest','qeqfqwdqwd','wefwef','abc@gmail.com','web-development-300x300.png');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('ABC','abc@gmail.com','Abc123!@#'),('ABCD','abcd@gmail.com','Abc123!@#');
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

-- Dump completed on 2017-01-23  0:00:36
