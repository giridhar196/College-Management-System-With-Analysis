-- MySQL dump 10.13  Distrib 5.6.39, for Linux (x86_64)
--
-- Host: localhost    Database: abcdproject
-- ------------------------------------------------------
-- Server version	5.6.39-cll-lve

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
-- Table structure for table `admission_fee_details`
--

DROP TABLE IF EXISTS `admission_fee_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admission_fee_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(225) NOT NULL,
  `admission_fee` varchar(255) NOT NULL,
  `building_fund` varchar(128) NOT NULL,
  `university_fee` varchar(128) NOT NULL,
  `tution_fee` varchar(128) NOT NULL,
  `bus_fee` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission_fee_details`
--

LOCK TABLES `admission_fee_details` WRITE;
/*!40000 ALTER TABLE `admission_fee_details` DISABLE KEYS */;
INSERT INTO `admission_fee_details` (`id`, `type_name`, `admission_fee`, `building_fund`, `university_fee`, `tution_fee`, `bus_fee`) VALUES (1,'management','50500','250','4000','1500','9000'),(2,'conviner','45000','2500','0','1500','8000'),(3,'spot','0','250','0','0','9000');
/*!40000 ALTER TABLE `admission_fee_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regid` varchar(128) NOT NULL,
  `auth` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `visible` varchar(128) NOT NULL,
  `short_desciption` varchar(128) NOT NULL,
  `header_link` varchar(228) NOT NULL,
  `dateofpost` varchar(128) NOT NULL,
  `p_by` varchar(128) NOT NULL,
  `p_email` varchar(128) NOT NULL,
  `permission` varchar(128) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `tags` varchar(225) NOT NULL,
  `branch` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `regid`, `auth`, `title`, `category`, `description`, `visible`, `short_desciption`, `header_link`, `dateofpost`, `p_by`, `p_email`, `permission`, `created`, `tags`, `branch`) VALUES (1,'148x1a0501','102451300637690452408','Dark Souls III','all','<p>Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game&#39;s gameplay design followed &quot;closely from Dark Souls II&quot;. Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies&#39; attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware&#39;s previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon&#39;s Souls, now known as &quot;focus points&quot; (FP). When performing spells, the players&#39; focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players&#39; particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players&#39; movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.</p>\r\n','4all','Dark Souls III is an action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for Pl','http://talkerscode.com/webtricks/images/check_uncheck.jpg','2018-02-01','Giridhar','giridhar196@gmail.com','1','2018-02-01 13:02:37','','cse'),(2,'148x1a0501','102451300637690452408','Leap Motion review: A glimpse into the future of computing','cse','<h1>Leap Motion review: A glimpse into the future of computing</h1>\r\n\r\n<p>Touch is transforming how we interact with computers, and motion control can do the same</p>\r\n\r\n<p><span style=\"font-size:11px\"><img alt=\"Leap motion in action\" src=\"https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2013/7/23/1374615591030/a1371e91-5e1f-4cd8-9265-a9c57b7d39ae-620x372.jpeg?w=300&amp;q=55&amp;auto=format&amp;usm=12&amp;fit=max&amp;s=ad89863f38004bb9c50f3f6a0e9bcf1e\" style=\"float:right\" /></span></p>\r\n\r\n<p>Gesture interaction with computers had long been the stuff of sci-fi, until the recent socially-awkward flamboyant games such as Xbox Kinect began to enter the mainstream.</p>\r\n\r\n<p><img alt=\"Leap Motion in use\" src=\"https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2013/7/26/1374845964697/dbf79d6e-681e-42d1-82e2-d5ddc6ad9c9e-620x547.jpeg?w=300&amp;q=55&amp;auto=format&amp;usm=12&amp;fit=max&amp;s=5a18ab717c1e4eb1b961056bffb0e5c7\" /></p>\r\n\r\n<p>&nbsp;The Leap&rsquo;s introduction orientation demo in action. Photograph: Leap Motion</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>The first question everybody asks is, &lsquo;So what can it do?&rsquo;</p>\r\n</blockquote>\r\n\r\n<p>Now that touchscreens have moved the human-computer interaction beyond the monopoly of the mouse-keyboard union for the first time in 30 years, are we now at a point where we can put some distance between us and our computers? Can we instruct them without direct contact but now move to the new union of voice-gesture?</p>\r\n\r\n<p><a href=\"https://www.leapmotion.com/\">Leap Motion</a>&nbsp;is the first serious mainstream contender for a high fidelity gesture peripheral. It tracks the movement of hands in two square feet of space above it with unbelievable speed and accuracy.</p>\r\n\r\n<p>The first question everybody asks is, &lsquo;So what can it do?&rsquo;. The short answer is, today, very little. Tomorrow? Well, I for one am a believer. What we have here is a limitation of imagination, not of technology. That is usually a catalyst for innovation.</p>\r\n\r\n<h2>Device itself</h2>\r\n\r\n<p>Receiving my Developer Kit a few weeks ago was a cause for a large crowd to gather in the development team at the Guardian. Only a handful of new gadgets really generate this level of excitement and people wanted to see for themselves whether it lived up to the hype.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.theguardian.com/technology/2013/jul/23/leap-motion-review-i-want-my-hoverboard#img-1\"><img alt=\"Guardian Developers gather round\" src=\"https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2013/7/23/1374613124413/1e318a8f-d0c8-4b7e-864b-ac009a80b0b3-2060x1236.jpeg?w=300&amp;q=55&amp;auto=format&amp;usm=12&amp;fit=max&amp;s=dd1777effade59c3fb6b05a486691eb4\" /></a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/dialog/share?app_id=180444840287&amp;href=https%3A%2F%2Fwww.theguardian.com%2Ftechnology%2F2013%2Fjul%2F23%2Fleap-motion-review-i-want-my-hoverboard%3FCMP%3Dshare_btn_fb%26page%3Dwith%3Aimg-1%23img-1&amp;picture=https%3A%2F%2Fstatic.guim.co.uk%2Fsys-images%2FGuardian%2FPix%2Fpictures%2F2013%2F7%2F23%2F1374613124413%2F1e318a8f-d0c8-4b7e-864b-ac009a80b0b3-2060x1236.jpeg\" target=\"_blank\">Facebook</a><a href=\"https://twitter.com/intent/tweet?text=Leap%20Motion%20review%3A%20A%20glimpse%20into%20the%20future%20of%20computing&amp;url=https%3A%2F%2Fwww.theguardian.com%2Ftechnology%2F2013%2Fjul%2F23%2Fleap-motion-review-i-want-my-hoverboard%3FCMP%3Dshare_btn_tw%26page%3Dwith%3Aimg-1%23img-1\" target=\"_blank\">Twitter</a><a href=\"http://www.pinterest.com/pin/create/button/?description=Leap%20Motion%20review%3A%20A%20glimpse%20into%20the%20future%20of%20computing&amp;url=https%3A%2F%2Fwww.theguardian.com%2Ftechnology%2F2013%2Fjul%2F23%2Fleap-motion-review-i-want-my-hoverboard%3Fpage%3Dwith%3Aimg-1%23img-1&amp;media=https%3A%2F%2Fstatic.guim.co.uk%2Fsys-images%2FGuardian%2FPix%2Fpictures%2F2013%2F7%2F23%2F1374613124413%2F1e318a8f-d0c8-4b7e-864b-ac009a80b0b3-2060x1236.jpeg\" target=\"_blank\">Pinterest</a></p>\r\n\r\n<p>&nbsp;Guardian developers: moths to the flame of new technology. Apologies for the blurriness. Photograph: Jonathan Hyde/The Guardian</p>\r\n\r\n<p>At the point of receiving the developer kits, the demos available were basic but captivating. The ability to interact with a school of digital fish or navigate through central London like a helicopter was briefly entertaining.</p>\r\n\r\n<p>Guardian editor-in-chief Alan Rusbridger had a play, too:</p>\r\n','all','Gesture interaction with computers had long been the stuff of sci-fi, until the recent socially-awkward flamboyant games such as','https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2013/7/23/1374615591030/a1371e91-5e1f-4cd8-9265-a9c57b7d39ae-620x372.jpeg?w=620&q=20&auto=format&usm=12&fit=max&dpr=2&s=1e9631c314a341876d8686bdef16d300','2018-02-01','Giridhar','giridhar196@gmail.com','1','2018-02-01 18:42:34','cse,ece','cse'),(3,'148x1a0501','102451300637690452408','welcome title','technology','<p>Hi Every one This is a test blog You should Follow This Rules before writing the blog because we need to find every thing in astructural manner</p>\r\n\r\n<p>I hope you support me</p>\r\n\r\n<h1><span style=\"font-size:14px\"><strong>Thank You</strong></span></h1>\r\n','all','I hope you support me','https://images.yourstory.com/2016/12/startup-blog-medium.jpg','2018-02-03','Giridhar','giridhar196@gmail.com','1','2018-02-03 21:43:17','','cse'),(5,'158X1A0544','114530205653343133244','Street fighters 9','technology','<h2>It is same like as all 3d games and&nbsp; based on the unity in this the title is based on the game there is a 9 street fighters&nbsp; for each level there is a quest to enter into next level&nbsp; there is map to find the fighters locations.</h2>\r\n','all','3d game ','https://www.google.co.in/search?q=dragon+ball+super+final+episode+release+date&safe=active&client=ms-android-xiaomi&biw=360&bih=564&tbm=isch&prmd=nvi&source=lnms&sa=X&ved=0ahUKEwjpnO-GsoXaAhUMkpQKHWcjBSIQ_AUIESgD#imgrc=qmmU0nN4J','2018-03-20','Navi','knreddy544@gmail.com','0','2018-03-20 07:23:45','','cse');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conversation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_one` varchar(225) NOT NULL,
  `user_two` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversation`
--

LOCK TABLES `conversation` WRITE;
/*!40000 ALTER TABLE `conversation` DISABLE KEYS */;
INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES (1,'148x1a0501','148X1A05A3'),(2,'148x1a0501','158x1a0588'),(3,'148x1a0501','1237'),(4,'148x1a0512','148x1a0501'),(5,'148x1a0512','148x1a0547'),(6,'148x1a0512','158x1a0588'),(7,'148x1a0506','148x1a0501'),(8,'148x1a0532','148x1a0501'),(9,'148x1a0532','148x1a0550'),(10,'148x1a0550','148x1a0501'),(11,'148x1a0501','158x1a0575'),(12,'148x1a0501','148x1a0560'),(13,'148x1a0501','158X1A0536'),(14,'148x1a0547','148x1a0501'),(15,'148x1a0554','148x1a0501'),(16,'148x1a0550','148x1a0547'),(17,'148x1a0547','148x1a0506'),(18,'148x1a0503','148x1a0501'),(19,'148x1a0503','148x1a0554'),(20,'148x1a0512','148x1a0550'),(21,'148x1a0501','148x1a0553'),(24,'148x1a0568','148x1a0501'),(25,'148x1a0568','148x1a0560'),(26,'148x1a0560','148x1a0532'),(27,'148x1a0560','148x1a0555'),(28,'148x1a0550','158x1a0588'),(29,'148x1a0516','148x1a0501'),(30,'148x1a0516','148x1a0512'),(31,'148x1a0516','148x1a0548'),(32,'','148x1a0560'),(33,'','148x1a0548'),(34,'1016','148x1a0501'),(35,'148x1a0501','148x1a0502'),(36,'148x1a0501','148x1a0529'),(37,'148x1a0501','148x1a0548'),(38,'148x1a0501','158X1A0544'),(39,'148x1a0501','148X1A05B4'),(40,'148x1a0501','148X1A0513'),(41,'148X1A0561','148x1a0501'),(42,'148X1A0561','148X1A0590'),(43,'148x1a0503','148x1a0553'),(44,'148X1A05A0','148x1a0501'),(45,'148X1A05A0','148x1a0557'),(46,'148x1a0557','148x1a0501'),(47,'148X1A0587','148x1a0501'),(48,'148X1A0581','148x1a0501'),(49,'148X1A0581','148X1A05A0'),(50,'148x1a0501','148x1a0569'),(51,'148x1a0501','148X1A0509');
/*!40000 ALTER TABLE `conversation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inter`
--

DROP TABLE IF EXISTS `inter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inter` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `val_name` varchar(128) NOT NULL,
  `val_mname` varchar(128) NOT NULL,
  `val_lname` varchar(128) NOT NULL,
  `val_bra` varchar(128) NOT NULL,
  `val_db` varchar(128) NOT NULL,
  `val_sex` varchar(128) NOT NULL,
  `val_regno` varchar(128) NOT NULL,
  `val_faname` varchar(128) NOT NULL,
  `val_faoccup` varchar(128) NOT NULL,
  `val_10thcgpa` varchar(128) NOT NULL,
  `val_10thcgpastate` varchar(128) NOT NULL,
  `val_10thcgpacountry` varchar(128) NOT NULL,
  `val_10thcgpaboard` varchar(128) NOT NULL,
  `val_10thcgpaschool` varchar(128) NOT NULL,
  `val_10thcgpapassing` varchar(128) NOT NULL,
  `val_12th` varchar(128) NOT NULL,
  `val_12thstate` varchar(128) NOT NULL,
  `val_12thcountry` varchar(128) NOT NULL,
  `val_12thboard` varchar(128) NOT NULL,
  `val_12thcollege` varchar(128) NOT NULL,
  `val_12thpassing` varchar(128) NOT NULL,
  `val_btech` varchar(128) NOT NULL,
  `val_btechstate` varchar(128) NOT NULL,
  `val_btechcountry` varchar(128) NOT NULL,
  `val_btechboard` varchar(128) NOT NULL,
  `val_btechschool` varchar(128) NOT NULL,
  `val_btechpassing` varchar(128) NOT NULL,
  `val_country` varchar(128) NOT NULL,
  `val_state` varchar(128) NOT NULL,
  `val_city` varchar(128) NOT NULL,
  `val_adofcom` varchar(328) NOT NULL,
  `val_pnc` varchar(128) NOT NULL,
  `val_phoneus2` varchar(128) NOT NULL,
  `val_email2` varchar(128) NOT NULL,
  `datee` varchar(225) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inter`
--

LOCK TABLES `inter` WRITE;
/*!40000 ALTER TABLE `inter` DISABLE KEYS */;
INSERT INTO `inter` (`sno`, `val_name`, `val_mname`, `val_lname`, `val_bra`, `val_db`, `val_sex`, `val_regno`, `val_faname`, `val_faoccup`, `val_10thcgpa`, `val_10thcgpastate`, `val_10thcgpacountry`, `val_10thcgpaboard`, `val_10thcgpaschool`, `val_10thcgpapassing`, `val_12th`, `val_12thstate`, `val_12thcountry`, `val_12thboard`, `val_12thcollege`, `val_12thpassing`, `val_btech`, `val_btechstate`, `val_btechcountry`, `val_btechboard`, `val_btechschool`, `val_btechpassing`, `val_country`, `val_state`, `val_city`, `val_adofcom`, `val_pnc`, `val_phoneus2`, `val_email2`, `datee`) VALUES (8,'Manisha','Reddy','Madana','cse','11/06/1997','female','148X1A0553','Srinivasa Reddy Madana','Business','9.5','Andhra pradesh','India','State','Oxford Public School','2012','88.3','Andhra pradesh','India','Inrermediate','Sri Chaitanya Junior College','2014','80.6','Andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Flat no-501,harika homes,nalanda nagar 2nd lane,opp suryadevara kalyanamamdapam,ring Road,Guntur','522006','9703350136','manishamadana@gmail.com','2018-01-17 13:19:06'),(9,'Vigna','','Manchikanti','cse','16/08/1997','female','148X1A0556','Manchikanti.Venkateswarlu','Business','77','Andhra Pradesh','India','State','Sri Satya sai Vidhya niketan','2012','84','Andharapradesh','India','Intermediate','Sri Chaitanya jr college','2014','76','Andharapradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andharapradesh','Guntur','Srinagar 4 th line,SWATHI HOMES flatno:502,Dno:7-17-84/10, Guntur','522002','7330585018','manchikantivigna356@gmail.com','2018-01-17 13:19:16'),(10,'Konduru','Sai','Vyshnavi','cse','14/01/1998','female','148X1A0549','Konduru P B V Gantaiah Gupta','Bussiness','8.2','Andhra pradesh','India','State','Bhashyam public school','2012','78.8','Andhra pradesh','India','12th board of Intermediate','Narayana junior college','2014','79.6','Andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Samba siva pet,4th lane,Door no :10-4-2,Guntur','522001','7659892184','vyshnavi.konduru@gmail.com','2018-01-17 13:20:42'),(11,'NAVEEN','REDDY','POLIMERA','cse','12/08/97','male','148X1A0574','POLIMERA KRISHNA REDDY','DRIVER','9.3','ANDHRA PRADESH','INDIA','STATE','SRI POOJITHA PUBLIC SCHOOL','2012','94.7','ANDHRA PRADESH','INDIA','STATE','SRI GAYATRI JR COLLEGE','2014','78.16','ANDHRA PRADESH','India','JNTUK-KAKINADA','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','D.NO : 13-2-69,\r\nKRISHNA NAGAR 1ST LINE,\r\nRAMANUJAKUTAM, GUNTUR','522006','9704086263','polimera.naveenreddy@gmail.com','2018-01-17 13:21:30'),(12,'Sravani','','Maran','cse','21/08/96','female','148X1A0558 ','M.BrahmaReddy','Farmer','9.3','Andhra Pradesh ','India','State','G.K.Public School','2012','91.7','Andhra Pradesh ','India','Intermediate ','Narayana Junior College','2014','79','Andhra Pradesh ','India','University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh ','Guntur','D-No:3-113 Akurajupalli(village), Machavaram(mndl), Guntur (dst) ','522413','9704398852','Sravanimaram11@gmail.com ','2018-01-17 13:24:31'),(13,'Sobha','','Joshi','cse','29/08/1996','male','148X1A0593','Prameela joshi (mother) ','Teacher','9.0','Andra pradesh','India','Central','Dr. K.L.P public school ','2012','82.1','Andra pradesh','India','Intermediate ','Narayana junior college ','2014','74(until 4-1)','Andra pradesh','India','JNTU, kakinada','Kallam Haranadhareddy Institute of Technology','2018','India','Andra pradesh','Guntur','Jkc college main road\r\nOpposite sai mitra homes\r\nD. No 4-19-37/A','522006','8008588809','sobhajoshi96@gmail.com ','2018-01-17 13:25:59'),(14,'Chitluri','Sai','Viswanath','cse','17/09/96','male','148X1A0518','Ch.Durga prasad','Private employee','8.2','Andhra pradesh','India','State','Bhashyam public school','2012','78.1','Andhra pradesh','India','Intermediate','Narayana','2014','72.6','Andhrapradesh','India','Board','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','Goutami nagar 3rd lane Koritipadu Guntur\r\nD.no 4-22-60/2','522002','8801280001','chsvsai555@gmail.com','2018-01-17 13:31:17'),(15,'G','Soujanya','Gavarraju','cse','15/04/18','female','148X1A0528','Ashok kumar','Farmer','8.7','Andhra pradesh','India','State','Veenus high school','2012','86.1','Andhra pradesh','India','Intermediate ','Gowtham junior college','2014','76','Andhra pradesh','India','University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Guntur','522016','9493064831','soujanyagavarraju@gmail.com ','2018-01-17 13:39:03'),(16,'Duddukuru','Gayathri','Gayathri','cse','24/02/97','female','148X1A0523','Duddukuru Sree Rama Krishna','Sr.technical Assitiant(Electronics USICdepmt)','7.7CGPA','AndhraPradesh','India','State','Vignan High School','2012','80%','AndhraPradash','India','State','Sri Chaitanya Junior College','2014','72%','AndhraPradash','India','University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradash','Guntur','Gujjunagullda 1st lane near vani public school\r\n pattabhipuram post D No: 1-34-204/9b\r\nGuntur','522006','9441140382','dgayathri523@gmail.com','2018-01-17 13:41:55'),(17,'Pravalika','Siva','Yemineni','cse','09/04/97','female','148X1A05B9','Siva prasad','Farmer ','8.0','Andra Pradesh','India','State',' P S N C C high school ','2012','82.4','Andra Pradesh','India','Intermediate ','Sri chaitanya junior college','2014','67.8','Andra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andra Pradesh','Ongole','Muppavaram','523273','9553092035','pravalikayeminedi716@gmail.com','2018-01-17 13:44:54'),(18,'Kaivalya','','Kolisetty','cse','07/09/96','female','148X1A0544','K.v.ch.kasiviswanadham','Business','77','Andhra pradesh','India','State','Bhashyam public school','2012','78','Andhrapradesh','India','Intermediate','Sri Chaitanya junior college','2014','72','Andhrapradesh','India','Jntuk University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','Sangadigunta near dasanjaneya Swami temple Guntur d.no 20-7-13','522002','8187032874','Kaivalya.kolisetty123@gmail.com','2018-01-17 13:45:32'),(19,'Kaivalya','','Kolisetty','cse','07/09/96','female','148X1A0544','K.v.ch.kasiviswanadham','Business','77','Andhra pradesh','India','State','Bhashyam public school','2012','78','Andhrapradesh','India','Intermediate','Sri Chaitanya junior college','2014','72','Andhrapradesh','India','Jntuk University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','Sangadigunta near dasanjaneya Swami temple Guntur d.no 20-7-13','522002','8187032874','Kaivalya.kolisetty123@gmail.com','2018-01-17 13:45:33'),(20,'Naga ','Lakshmi','Tamma','cse','17/11/96','female','148X1A05A0','Siva reddy','Farmer','9.0','Andhra pradesh','India','State','B.V.R Public school Nambur','2012','81','Andhra pradesh','India','Intermediate','Sri Chaitanya Educational Institution','2014','77','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Last bus stand ,Nambur','522508','7095966528','nagalakshmitamma3@gmail.com','2018-01-17 13:45:40'),(21,'Vurranki ','','Nagasri ','cse','12/07/97','female','148x1a05b3','Vurranki srinivasarao','Farmmer','8.2','Andhra pradesh ','India ','State ','Sri chaitanya high school ','2012','89','Andhra pradesh ','India ','Intermediate ','Sri chaitanya ','2014','74','Andhra pradesh ','India','Jntuk ','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh ','Guntur ','Bhatluru, sattenapalli (m. D), Guntur (dist)            ','522003','8374692563','Vurrankinagasri12@gmail.com ','2018-01-17 13:52:07'),(22,'Gowthami','','Vanukuri','cse','06/08/97','female','148X1A05B0','Vanukuri gowthami','Farmer','8.2','ANDHRAPRADESH','India','State','S.k.l.n.r&s.high school','2012','87','ANDHRAPRADESH','India','Intermideat','Sri chaitanya junior college','2014','72','ANDHRAPRADESHj','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRAPRADESH','Guntur','Nuthala padu,parchur,prakasam','523169','8978241280','gowthamivanukuri@gmail.com','2018-01-17 13:53:58'),(23,'kakumanu','','Deepya','ece','04/02/97','female','148X1A0452','k.Subbarao','I am father orphan','9.3','Andhra pradesh','India','State','Sri Kakatiya high school','2012','92.5%','Andhra Pradesh','India','Board of Intermediate','Sri kakatiya junior college','2014','78.5%','Andhra pradesh','India','Jawaharlal nehru technological university kakinada','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Pedakurapadu(post,mandal)\r\nGuntur(dt)','522402','8121425661','k.deepya1996@gmail.Con','2018-01-17 14:03:08'),(24,'Triveni','','Ramisetty','cse','03/09/97','female','148X1A0581','R. Srinivasarao','Worker','7.5','Andhrapradesh','India','State','At. Ignatius girls high school ','2012','718','Andhrapradesh','India','Intermediate ','Narayana junior college','2014','67.5','Andhrapradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','andhrapradesh','Guntur','Srinagarcolony 7/4;\r\nGuntur','522002','9705471349','triveniramisetty1234@gmail.com','2018-01-17 14:06:57'),(25,'Tadavarthy','Lakshmi ','Pranathi','cse','28/07/98','female','148X1A0599','Tadavarthysrimannarayana murthy','Business','9.5','Andhrapradesh','India','State','Bhashyam public school ','2012','87','Andhrapradesh','India','Intermediate','Narayana junior college','2014','72( 4-1)','Andhrapradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','4-5-26/26\r\nVidyanagar 4/2\r\nGuntur','522007','9059850800','tadavarthypranathi434@gmail.com ','2018-01-17 14:08:39'),(26,'Ravali','','Tiriveedhi','cse','23/08/97','female','158X5A0503','Anjaiah','Farmer','8.2','Andhra pradesh','India','State','Nandana Grameena High School','2012','79.80','Andhra pradesh','India','SBTET(Diploma)','Chundi Ranganayakulu Polytechnic College','2015','69.86','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Sri Venkateswara bala kuteer,chowdavaram,guntur','522006','7702589157','ravalitiriveedhi1@gmail.com','2018-01-17 14:20:52'),(27,'Nandini','','Gutta','cse','08/06/96','female','148X1A0533','Rajsekhar','Driver','9.0','Andhra pradesh','India','State','Hindu College High School','2012','88','Andhra Pradesh','India','Intermediate','K.V.S.R.T Jr College','2014','73','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Balaji Nagar 1st Line \r\nOld Guntur\r\nGuntur','522001','8019297389','gnandini0533@gmail.com','2018-01-17 14:21:01'),(28,'Nandini','','Gutta','cse','08/06/96','female','148X1A0533','Rajsekhar','Driver','9.0','Andhra pradesh','India','State','Hindu College High School','2012','88','Andhra Pradesh','India','Intermediate','K.V.S.R.T Jr College','2014','73','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Balaji Nagar 1st Line \r\nOld Guntur\r\nGuntur','522001','8019297389','gnandini0533@gmail.com','2018-01-17 14:21:10'),(29,'Devisetty','','L. N. V. Sai Sri ','cse','06/05/97','female','148X1A0520','Murali Krishna roa','Business ','7.3','Andhra pradesh','India','State','Bhashyam public school ','2012','67%','Andhra Pradesh ','India','Intermediate ','Naranaya junior college ','2014','67%','Andhra Pradesh ','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh ','Guntur','Srinivasurao pet 3rd line , sai Chaitanya homes, flat no. G1 , guntur','522004','7093680089','luckydevisetty@gmail.com','2018-01-17 14:21:23'),(30,'Deva Nageswari ','','Krishnamsetty ','cse','15/01/97','female','148X1A0551','K. Chandra sSekhar ','Assistant Accountant','9.5','Andhra Pradesh ','India ','State','Sarada public school ','2012','88.5','Andhra Pradesh ','India ','Intermediate ','Sri Gayatri Junior College ','2014','77.5','Andhra Pradesh ','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh ','Guntur','Dno:4-51Yerramsettystreet, Gorantla, Guntur ','522034','9849186657','nageswarik7@gmail.com','2018-01-17 14:23:34'),(31,'Harika','','Eadamakanti','cse','29/08/97','female','148X1A0524','E.Ramakrishnareddy','Compunder','8.7','Ap','India','Ssc','Vidyardhi model high school','2012','88','Ap','India','Intermediate','Narayana junior college','2014','77','Ap','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Ap','Guntur','Syamala nagar 8 the line,guntur,522006','522006','9550108394','harikabests4444@gmail.com','2018-01-17 14:25:01'),(32,'Ruthu','Madhavi','Kola','cse','26/08/96','female','148X1A0543','Izrail','Business','8.2','Andhara pradesh','India','State','SBNR high school','2012','80','Andhara pradesh','India','Intermediate','Sri chaitanya junior college','2014','65','Andhara pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhara pradesh','Guntur','Kakani road R T C colony guntur','522001','73374819485','ruthu543@gmail.com','2018-01-17 14:39:15'),(33,'Velugoti','','Tejaswi','cse','01/03/97','female','148X1A05B2','Velugoti venkata Rama chandra Reddy','Business','8.5','Andhra Pradesh','India','State','St.lukes public school','2012','84.9','Andhra Pradesh','India','Intermediate','Narayan junior college','2014','75.33','Andhra Pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Door no: 8-11-28\r\nNehru Nagar 7th lane\r\nGuntur','522001','8639970387','velugotitejaswi@gmail.com','2018-01-17 14:44:44'),(34,'Tanuja','','Vutukuri','cse','20/02/96','female','148X1A05B4','V.AnilKumar','Business','7.8','AndhraPradesh','India','State','Saint Lukes','2012','74.5','AndhraPradesh','India','Intermediate','NRI','2014','70','AndhraPradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','AndhraPradesh','Guntur','Door no:8-9-124,Nehru Nagar,2nd Lane ,Guntur','522001','7799005057','tanujav20@gmail.com','2018-01-17 14:53:08'),(35,'Ganala','Pavan ','Manikanta','cse','11/10/96','male','148X1A0527','G.ANJENAYA SASTRI','Auto driver','7.2','Andhra pradesh','India','State','Jain public school','2012','68%','Andhra pradesh','India','Intermediate','Sri chaithanya jr college','2014','65','Andhra pradesh','India','Jntuk university','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Flat no:-ff8. Block no:-41 ,ysr colony ,Vijayawada','520001','9493963659','Maniganala527@gmail.com','2018-01-17 14:54:27'),(36,'Vijayalakshmi','','Ummadoju','cse','15/03/97','female','148x1a05a6','Nageswara Chari','Carpenter','8.7','Andhra Pradesh','India','state','Vignananda Bala Kutteer','2012','72.3','Andhra Pradesh','India','intermediate','Narayana junior college','2014','62.8','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','plat no--407,srinivasa towers,opposite itc,guntur','522004','9492097659','vijayalakshmi0091@gmail.com','2018-01-17 14:55:00'),(37,'Vijayalakshmi','','Ummadoju','cse','15/03/97','female','148x1a05a6','Nageswara Chari','Carpenter','8.7','Andhra Pradesh','India','state','Vignananda Bala Kutteer','2012','72.3','Andhra Pradesh','India','intermediate','Narayana junior college','2014','62.8','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','plat no--407,srinivasa towers,opposite itc,guntur','522004','9492097659','vijayalakshmi0091@gmail.com','2018-01-17 14:55:25'),(38,'Ganala','Pavan ','Manikanta','cse','11/10/96','male','148X1A0527','G.ANJENAYA SASTRI','Auto driver','7.2','Andhra pradesh','India','State','Jain public school','2012','68%','Andhra pradesh','India','Intermediate','Sri chaithanya jr college','2014','65','Andhra pradesh','India','Jntuk university','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Flat no:-ff8. Block no:-41 ,ysr colony ,Vijayawada','520001','9493963659','Maniganala527@gmail.com','2018-01-17 14:55:28'),(39,'Bindu','','Vanga','cse','05/12/','female','148X1A05A9','Venkatareddy','Farmer','8.2','Andhrapradesh','India','State','Oxford iit concept school','2012','77.7','Andhra Pradesh','India','Intermediate','Sri Gayatri junior college','2014','68','Andhra Pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Jonnalagadda (lam)near by pulagam vari bavi d.no:3-31','522024','7702438546','bindunanna@gmail.com','2018-01-17 14:58:48'),(40,'Sravani','','Maram','cse','21/08/96','female','148X1A0558 ','BrahmaReddy','Farmer ','9.3','Andhra Pradesh ','India','State','G. K. public ','2012','91.7','Andhra Pradesh ','India','Intermediate ','Narayana Junior College ','2014','79','Andhra Pradesh ','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh ','Guntur','Akurajupalli (village), Machavaram (mndl), Guntur ','522413','9704398852','Sravanimaram11@gmail.com ','2018-01-17 15:12:03'),(41,'Venu Gopal','','pallapothu','cse','07/09/96','male','148X1A0569','p.srinivasa rao','business','8.2','Andhra pradesh','india','secondary board ','bhashyam public school','2012','8.25','andhra pradesh','india','intermediate board of education','sri chaitanya college','2014','74','Andhra pradesh','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','guntur','manuvari street,main road ,old guntur','522001','7386780016','harshavenu4u@gmail.com','2018-01-17 15:27:47'),(42,'NAGARJUNA ','CHOWDARY','NAGAMOTHU ','cse','04/01/97','male','148X1A0565','BABU','Farmer','8.3','Andhra pradesh ','India','State','Success high school','2012','86%','Andhra pradesh ','India','INTER BOARD ','NRI','2014','76','Andhra pradesh ','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh ','Guntur ','4-23-36/2c,mutyala reddy Nagar, 3rd Lane, amarvathi road, guntur ','522034','9505468770','Nagamothunagarjuna@gmail.com ','2018-01-17 15:31:30'),(43,'lohith anjaneya ','reddy','vuyyuru','cse','07/05/97','male','148X1A05B5','koti reddy vuyyuru','farmer','6.6','Andhra pradesh','india','central','kendriya vidyalaya','2012','77','Andhra pradesh','india','intermediate','narayana junior college','2014','69','andhra pradesh','India','jawaharlal nehru technological university,kakinada','Kallam Haranadhareddy Institute of Technology','2018','India','andhra pradesh','guntur','4/1 lane,koritepadu,guntur','522007','9676694976','lohivuyyuru.7@gmail.com','2018-01-17 15:37:47'),(44,'Mahimaluri','Naga','Priyanka','cse','24/10/97','female','148X1A0554','Mahimaluri vasu','Carpenter','5.7','Andhra pradesh','India','State','St.lukes public school','2012','57%','Andhra pradesh','India','Intermediate','Abhyudaya Manila kalasala','2014','65%','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Arundathi nagar 3/3 lane,Guntur','522002','9440849364','Priyankamahimaluri@gmail.com','2018-01-17 15:50:22'),(45,'Sai kavya','Latha','Sesetti','cse','25/09/97','female','148X1A0587','Venu Gopala Rao','Business','7.8','Andhra Pradesh','India','State','Bhashyam public school','2012','72','Andhra pradesh','India','Board of intermediate','Narayana junior collage','2014','65','Andhra pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','Ankamma nagar 1st lane Dno:26-36-202','522004','9032751867','Saikavya.25@gmail.com','2018-01-17 15:52:04'),(46,'Cherukuri','','Jayasree','cse','29/04/97','female','148x1a0515','Ch.srihari','-','9.0','Andhrapradesh','India','State','Vignan high school','2012','83.7','Andhrapradesh','India','Intermediate','Sri chaithanaya','2014','74.6','Andhrapradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','104,vnr apartment rajendra nagar ,guntur','522007','7075731667','Chjayasri29@gmail.com','2018-01-17 16:29:07'),(47,'Satya','Koushik varma','Gunturu','cse','25/10/96','male','148X1A0531','Venkata Soma Naga Raju','Business ','7.7','Andhra Pradesh ','India','State','Bhashyam public school','2012','67%','Andhra Pradesh ','India','Intermediate ','Nri junior college','2014','60%','Andhra Pradesh ','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh ','Guntur','Guntur','522006','9849958999','koushikvarma699@gmail.com','2018-01-17 17:07:17'),(48,'Regula ','','Sireesha','cse','10/05/96','female','148x1a0583','Regula nagaiah','Farmmer ','8.0','Andhra pradesh ','India ','State ','Kgbb  Vidyalayam','2012','82','Andhra pradesh ','India ','Intermediate ','Sri  prathibha Junior clz ','2014','72','Andhra pradesh ','India','Jntuk ','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh ','Guntur ','Gude vari palm, Pc palli(m. D), prakasam(dist) ','523117','9966466770','Sirishachowdary. Regula@gmail.com','2018-01-18 02:05:28'),(49,'Regula ','','Sireesha','cse','10/05/96','female','148x1a0583','Regula nagaiah','Farmmer ','8.0','Andhra pradesh ','India ','State ','Kgbb  Vidyalayam','2012','82','Andhra pradesh ','India ','Intermediate ','Sri  prathibha Junior clz ','2014','72','Andhra pradesh ','India','Jntuk ','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh ','Guntur ','Gude vari palm, Pc palli(m. D), prakasam(dist) ','523117','9966466770','Sirishachowdary. Regula@gmail.com','2018-01-18 02:05:29'),(50,'makam','','sravani','cse','06/07/96','female','148X1A0555','makam Reddy nagaraju','Durga ghee assistant manager','9.2','Andhra Pradesh','India','state','Sri pavani public school','2012','91','Andhra Pradesh','India','intermediate','Sri Chaitanya junior college','2014','73','Andhra Pradesh','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUntur','Nehru Nagar 7/4,lane..DNo:8-12-75','522001','9866995159','makamsravani96@gmail.com','2018-01-18 03:58:40'),(51,'Akhil','','Chandra','cse','26/11/97','male','148X1A0512','Chandra PremKumar','Business','9.3','ANDHRA PRADESH','India','State','Bhashyam Public School','2012','80.4','ANDHRA PRADESH','India','Intermediate','Narayana Junior college','2014','64','ANDHRA PRADESH','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','Flat no-205,harika homes,nalanda nagar 2nd lane,ringroad,Guntur','522006','8464999987','akhilchandra16@gmail.com','2018-01-18 04:53:52'),(52,'yaswanthReddy','','jonnala','cse','04/06/96','male','148X1A0536','SRINIVASREDDY JONNALA','FORMAR','6.3','ANDHRA PRADESH','INDIA','SSC','BHASHYAM PUBLIC SCHOOL','2012','6.5','ANDHRA PRADESH','INDIA','INTERMEDIATE','SRICHAITANYA','2014','60','andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','NAMBURU (VILLAGE)/PADAKANI (MANDAL)/GUNTUR(DT)','522508','9963521222','JONNALA48@GMAIL.COM','2018-01-18 04:55:52'),(53,'hari','priya','galla','cse','26/09/97','female','148X1A0526','Srinivasarao','business','9.2','andhrapradesh','India','s.s.c','Y.Z.P.H school','2012','81','andhrapradesh','India','intermediate board','future focus junior college','2014','74','andhrapradesh','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','andhrapradesh','gunutr','Ananthavarappadu,Guntur','522017','8179602612','haripriyagalla88@gmail.com','2018-01-18 04:56:49'),(54,'yasoda','krishna','chirasani','cse','01/12/97','female','148x1a0517','siva govinda reddy chirasani','farmer','8.3','andhra pradesh','india','state','GKR public school','2012','80','andhra pradesh','india','intermediate','narayana junior collage','2014','76','andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','andhra pradesh','guntur','at agraharam rami reddy nagar guntur','522004','9493651266','chirasanikrishna@gmail.com','2018-01-18 04:57:26'),(55,'Ram','Gopal Reddy','Allu','cse','28/09/96','male','148X1A0504','Nagi Reddy Allu','Business','8.3 CGPA','Andhra Pradesh','India','State','The Central Public School','2012','81.5 ','Andhra Pradesh','India','Intermediate','Sri Chaitanya Jr Kalasala','2014','64','Andhra Pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','AndhraPradesh','Guntur','D.No:26-38-45,16th lane A.T.Agraharam,Guntur','522004','9963757699','allu.ramgopal@gmail.com','2018-01-18 04:57:27'),(56,'kondabathini','prasanna','kumar','cse','14/01/96','male','148X1A0547','K.Narayana','worker','7.5','Guntur','India','state','Naveen Vidya Nikethan High School','2012','66.5','Andhra Pradesh','India','intermediate','Naraya junior College','2014','65','Andhra Pradesh','India','University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','ankamma nagar 2nd lane','522004','9502109958','prasannakondabathini@gmail.com','2018-01-18 04:58:42'),(57,'NAGA','CHANDRA SAI','ALLAM','cse','14/05/96','male','148X1A0503','VENKATA RAMANA','COOLI','6.8','6.8','India','ANDHRA PRADESH','ADITYA PUBLIC SCHOOL','2012','6.7','ANDHRA PRADESH','India','6.7','SRI CHAITANYA','2014','60','andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','BALAJI NAGAR7TH LINEOLDGUNTUR,GUNTUR','522001','8096960410','CHANDRASAI071@gmail.com','2018-01-18 05:02:13'),(58,'mohan','krishna','doppalapudi','cse','12/06/97','male','148X1A0522','subbarao','agriculture','7.5','ANDHRA PRADESH','India','state','Universal Techno School','2012','82.6','ANDHRA PRADESH','India','Intermediate','Sri Chaitanya ','2014','62','ANDHRA PRADESH','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','D.no:1-100,Bodawada(p.o),Prakash(d.t),andhrapradesh(s.t)','523167','9948235813','mohandoppalapudi15@gmail.com','2018-01-18 05:05:17'),(59,'Kanta','Aruna ','Sudha','cse','22/02/96','female','148X1A0539','kanta suri babu','real estates','8.5','ANDHRA PRADESH','India','ssc','success high school','2012','76','ANDHRA PRADESH','India','intermediate','sri chaithanya junior college','2014','70%','ANDHRA PRADESH','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR.','gunturuvarithota 5th lane \r\nD:No-13-6-83\r\nguntur','522007','7097763338','arunasudha359@gmail.com','2018-01-18 05:06:26'),(60,'SIVASAI','REDDY','MAVURI','cse','04/09/96','male','148X1A0559','KRISHNA REDDY MAVURI','Farmer','8.7','Andhra Pradesh','India','State','Z P High School,Nambur','2012','89.8%','Andhra Pradesh','Imdia','Intermediate','Narayana Jr Collelge,Prodduturu.','2014','79','Andhra Pradesh','India','University','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','D No: 17-1137,\r\nNambur(v),\r\nPedakakani(m),\r\nGuntur(Dt).','522508','9032119088','sivasai.mavuri@gmail.com','2018-01-18 05:07:36'),(61,'Alla','Venkata','Prasanth','cse','29/05/96','male','148X1A0502','Alla Prakasarao','Bussiness','6.3','AndhraPradesh','India','State','Vignananda BalaKuteer Public School','2012','70','AndhraPradesh','India','Intermediate','Sri Chaitanya','2014','65','Andhra Pradesh','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','4-22-27/6c,Chaitanyapuri,2nd lane,Koritipadu,Guntur.','522007','8985807991','allaprasanth222@gmail.com','2018-01-18 05:08:27'),(62,'venu','','Gadde','cse','09/06/97','male','148X1A0525','Venkateswarlu','business','7.8','ANDHRA PRADESH','India','state','bhashyam','2012','84,.2','ANDHRA PRADESH','India','intermediate','Narayana junior college','2014','65','ANDHRA PRADESH','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','D.NO:74-3-251,D S NAGAR,10th lane,Etukuru road,guntur','522003','7330761407','venuchoudary.111@gmail.com','2018-01-18 05:14:41'),(63,'CHANDANA','','GOLLAPUDI','cse','16/01/97','female','148X1A0529','SRINIVASA RAO GOLLAPUDI','PROFESSOR','8.7','ANDHRAPRADESH','INDIA','STATE','THE CENTRAL PUBLIC SCHOOL','2012','82.7','ANDHRAPRADESH','INDIA','INTERMEDIATE','NARAYANA JUNIOR COLLEGE','2014','81.53','ANDHRAPRADESH','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRAPRADESH','GUNTUR','D.NO:5-87-123\r\nLAKSHMIPURAM 3RD LANE\r\nGUNTUR ','522007','7095901595','chandanagollapudi7@gmail.com','2018-01-18 05:18:40'),(64,'MANIKYAM','','KOCHERLA','cse','22/06/97','female','148X1A0542','KOCHERLA  LAKSHMAN','FARMER','6.5','ANDHRA PRADESH','INDIA','STATE','SRI MAJETI  GURAVAIAH HIGH SCHOOL','2012','72.5','ANDHRA PRADESH','INDIA','INTERMEDIATE','SRI CHAITHANYA','2014','70','ANDHRA PRADESH','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','GUNTUR','BONGARALABEEDU ,2ND LANE.','522001','9550349276','kocherlamani450@gmail.com','2018-01-18 05:22:15'),(65,'kondabathini','prasanna','kumar','cse','14/01/1996','male','148X1A0547','K.Narayana','Worker','7.5','Andhra Pradesh','India','state','Naveena Vidya Nikethan High Scool','2012','66.5','Andhra Pradesh','India','Intermediate','Narayana Junior College ','2014','65','Andhra Pradesh','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','Mother Terisa colony 1st lane \r\nAmaravathiRoad\r\nnagaralu\r\nGuntur','522001','9502109958','prasannakondabathini@gmail.com','2018-01-18 05:23:13'),(66,'DEEPTHI','HEMALATHA','BURAGADDA','cse','17/08/1997','female','148X1A0510','BURAGADDA VENKATESWARARAO','BUSIENESS','5.7','ANDRA PRADESH','INDIA','STATE','ST.IGNATIUS GIRLS HIGH SCHOOL','2012','70.0','ANDRA PRADESH','INDIA','INTERMEDIATE','SRI CHAITANYA','2014','65','ANDRA PRADESH','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','ANDRA PRADESH','GUNTUR','KAKUMANUVARI THOTA','522001','9014303336','buragaddadepthi@gmail.com','2018-01-18 05:24:34'),(67,'Deepthi','Madhu','Kiran','cse','07/05/96','female','148X1A0519','Satyanarayana Reddy(late)','........','77','Andhra Pradesh','India','state','Lotus Public School','2012','84','Andhra Pradesh','India','intermediate','sri gayatri junior college','2014','70','Andhra Pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','ankireddy palem  Dno:2-37','522005','9100639724','madhudevagiri519@gmail.com','2018-01-18 05:54:25'),(68,'Bavin','Sai Teja','Chebrolu','cse','17/01/97','male','148X1A0513','Raghava Rao Ch','Contractor','8.8','ANDHRAPRADESH','India','State','Sri venkateswara Balakuteer','2012','88','ANDHRAPRADESH','India','Intermediate board','Sri chaitanya junior college','2014','71','ANDHRAPRADESH','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRAPRADESH','GUNTUR','Ankamma nagar 2nd lane ,d.no:26-36-146/a','522004','9100347416','bavinchebrolu97@gmail.com','2018-01-18 05:55:33'),(69,'veneela','A siva naga malleswari','chinthalacheruvu','cse','28/10/96','female','148x1a0516','Ch.Nagireddy','private  Employee','9.5','ANDHRA PRADESH','India','state','G.K.R PUBLIC SCHOOL','2012','80.1','ANDHRA PRADESH','india','intermediate','narayana junior college','2014','76','ANDHRA PRADESH','India','jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','ANDHRA PRADESH','guntur','mallavaram,pedapalakaluru post,guntur rural','522005','9100638966','veneela.rch@gmail.com','2018-01-18 05:56:13'),(70,'Revanth','Siva sri sai','Ponnuru','cse','31/10/1997','male','148X1A0577','Ponnuru.Venkata Subbarao','Business','8.8','Andhrapradesh','India','State','Oxford IIt concept school','2012','85.7','Andhrapradesh','India','Intermediate','Narayana junior college','2014','72.5','Andhrapradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','Flat no:101,srisaisobha homes,Gorantla, guntur','522034','9032033505','rewanth.narayana@gmail.com','2018-01-18 06:12:54'),(71,'Singamaneni','Rupa','Sree','cse','27/03/97','female','148x1a0592','S.Venkata prabakara rao','Ex-army','7.0','Andhrapradesh','India','Ssc','Basara concept school','2012','66','Andhrapradesh','India','Intermediate','Sri chaitanya junior college','2014','62','Andhrapradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhrapradesh','Guntur','Palakaluru road,rathnagirinagar,harihara kshetram,balaji nivas pltno:402','522006','7093493687','rupasingamaneni97@gmail.com','2018-01-18 07:01:53'),(72,'Jasmitha','','Namburu','cse','27/05/1997','female','148X1A0566','Lakshman.N','Business','7.5','Andhra Pradesh','India','State','Success international school','2012','83.5','Andhra Pradesh','India','Intermediate','Narayana junior college','2014','70','Andhra Pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Vidya Nagar 3rd lane\r\n2-5-39/101\r\nGuntur','522007','9515736837','namburujasmitha566@gmail.com','2018-01-18 07:06:21'),(73,'Sanikommu','Durga','Malleswaro','cse','10/11/96','female','148X1A0585','S.Brahma Reddy','Cooly','8.5','Andhra Pradesh','India','SSC','Modern Public School','2012','89.1','Andhra Pradesh','India','Intermediaye','Sri Chaitanya Junior college','2014','79','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','Guntur','Guntur vari Thota 5th Lane,guntur.d.no:13-6-75','522001','9848432290','sanikommumalleswari3@gmail.com','2018-01-18 07:06:45'),(74,'Anudeep Raju','','Basavaraju','cse','28/07/97','male','148X1A0508','Amareswara raju','govt. employee','9.2','Andhra pradesh','india','State','Bhashyam public school','2012','92.4','Andhra pradesh','india','BIEAP','Narayana jr college','2014','72','Andhra pradesh','India','JNTUK','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra pradesh','Guntur','D.no: 26-31-9,  5th line,\r\nAT Agrahaaram, guntur- 522004','522004','9494261791','basavarajuanudeep@gmail.com','2018-01-18 08:12:54'),(75,'Shaik','','Ishratunnisa','cse','01/04/1996','female','148X1A0590','Shaik.Juber','Welding worker','7.3','Andhra Pradesh','India','State','Anjuman-E-Islamia high school','2012','85.6','Andhra Pradesh','India','Intermediate','Sri krishna junior college','2014','74','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','Syed khan street,ponnur road guntur','522001','7330529455','skishratunnisa123@gmail.com','2018-01-19 05:12:48'),(76,'shaik','','Asma','cse','27/02/97','female','148x1a0589','Sattar','Business','7.0','Andhra Pradesh','India','state','Anjuman-E-islamiya high school','2012','6.5','Andhra Pradesh','India','Intermediate','Yadava junior college','2014','70','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','Anandpet 6th line','522001','8885810801','asmask589@gmail.com','2018-01-19 05:29:07'),(77,'shaik','','Nageena Farheen','cse','08/08/97','female','148x1a0591','Noor Ahmed','SuperVisor','8.7','Andhra Pradesh','India','State','Jawahar English Medium School','2012','81.6','Andhra Pradesh','India','State','Sri Krishna Junior College','2014','70','Andhra Pradesh','India','State','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','Bara Imam Punja,Ponnur Road Guntur','522003','7569720402','nageenask734@gmail.com','2018-01-19 05:40:39'),(78,'Md','','Mohammad Niloufar','cse','06/04/97','female','148X1A0561','Md.Ahadbasha','Business','6.2','Andhra Pradesh','India','State','Anjuman-E-islamiya High School','2012','82','Andhra Pradesh','India','State','Sri Krishna Junoir College','2014','72','Andhra Pradesh','India','Jntuk','Kallam Haranadhareddy Institute of Technology','2018','India','Andhra Pradesh','GUNTUR','Anandapet 2nd line ','522002','9966514118','mdniloufar561@gmail.com','2018-01-19 06:16:29');
/*!40000 ALTER TABLE `inter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journels_gifted_reference`
--

DROP TABLE IF EXISTS `journels_gifted_reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journels_gifted_reference` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `BookName` varchar(255) DEFAULT NULL,
  `category_name` varchar(225) DEFAULT NULL,
  `author_name` varchar(225) DEFAULT NULL,
  `isbn_number` varchar(225) DEFAULT NULL,
  `book_price` varchar(225) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `copynumber` varchar(225) NOT NULL,
  `book_type` varchar(225) NOT NULL,
  `book_status` varchar(225) NOT NULL DEFAULT '1',
  `created_date` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journels_gifted_reference`
--

LOCK TABLES `journels_gifted_reference` WRITE;
/*!40000 ALTER TABLE `journels_gifted_reference` DISABLE KEYS */;
INSERT INTO `journels_gifted_reference` (`id`, `BookName`, `category_name`, `author_name`, `isbn_number`, `book_price`, `RegDate`, `copynumber`, `book_type`, `book_status`, `created_date`) VALUES (2,'nggjh','hvhjh','vhjh','68678','768','2018-03-13 12:46:26','76887','gifted','1','13-03-2018'),(3,'bnghg','gjhgj','hgjhjj','7687','687','2018-03-13 20:21:23','u6879898','gifted','1','13-03-2018');
/*!40000 ALTER TABLE `journels_gifted_reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library_user`
--

DROP TABLE IF EXISTS `library_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(128) NOT NULL,
  `regdno` varchar(128) NOT NULL,
  `nameofstudent` varchar(128) NOT NULL,
  `dob` varchar(128) NOT NULL,
  `sex` varchar(128) NOT NULL,
  `address` varchar(600) NOT NULL,
  `pincode` varchar(128) NOT NULL,
  `cellno` varchar(128) NOT NULL,
  `aadharno` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `bloodgroup` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `position` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library_user`
--

LOCK TABLES `library_user` WRITE;
/*!40000 ALTER TABLE `library_user` DISABLE KEYS */;
INSERT INTO `library_user` (`id`, `branch`, `regdno`, `nameofstudent`, `dob`, `sex`, `address`, `pincode`, `cellno`, `aadharno`, `email`, `bloodgroup`, `created`, `position`) VALUES (34,'library','148x1a0501','giridhar addagalla','07-03-1997','Male','kothapet','522001','9100938562','3654263543254325','giridhar196@gmail.com','A+','0000-00-00 00:00:00','test admin'),(35,'Library','1016','BONAGIRI ANILKUMR','30-06-1981','MALE','PHIRANGIPURAM','522529','9985890540','5665464564','bonagirianilkumar83@gmail.com','o+','0000-00-00 00:00:00','ass'),(36,'Library','148x1a0529','Chandana Gollapudi','07-03-1997','Female','Guntur','522001','9100938562','564654454565','chandanagollapudi97@gmail.com','a+','0000-00-00 00:00:00','Admin'),(37,'library','148x1a0553','mainsh','','female','','','','','manishamadana11@gmail.com','','0000-00-00 00:00:00','librarien');
/*!40000 ALTER TABLE `library_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_users`
--

DROP TABLE IF EXISTS `location_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location_users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `lat` varchar(225) NOT NULL,
  `longi` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(225) NOT NULL,
  `reg_id` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_users`
--

LOCK TABLES `location_users` WRITE;
/*!40000 ALTER TABLE `location_users` DISABLE KEYS */;
INSERT INTO `location_users` (`id`, `username`, `lat`, `longi`, `date`, `RegDate`, `type`, `reg_id`) VALUES (29,'Giridhar','17.3753','78.4744','14-03-2018','2018-03-14 08:30:38','library','148x1a0501'),(30,'','','','','2018-03-14 10:51:32','',''),(31,'Giridhar','39.0438','-77.4874','14-03-2018','2018-03-14 10:51:45','library','148x1a0501'),(32,'Giridhar','16.3','80.45','14-03-2018','2018-03-14 15:16:11','library','148x1a0501'),(33,'Giridhar','17.3753','78.4744','15-03-2018','2018-03-15 04:17:59','library','148x1a0501'),(34,'Giridhar','16.3','80.45','15-03-2018','2018-03-15 13:08:48','library','148x1a0501'),(35,'Giridhar','16.3','80.45','17-03-2018','2018-03-17 07:23:48','library','148x1a0501'),(36,'Giridhar','17.3753','78.4744','19-03-2018','2018-03-19 04:48:34','library','148x1a0501'),(37,'','16.3','80.45','19-03-2018','2018-03-19 07:09:37','','148x1a0553'),(38,'Giridhar','16.3','80.45','19-03-2018','2018-03-19 17:40:47','cse','148x1a0501'),(39,'Giridhar','16.3','80.45','20-03-2018','2018-03-19 18:41:11','cse','148x1a0501'),(40,'Giridhar','39.0438','-77.4874','20-03-2018','2018-03-20 01:04:35','cse','148x1a0501'),(41,'Navi','17.3753','78.4744','20-03-2018','2018-03-20 01:08:03','cse','158X1A0544'),(42,'Tanuja','25.2138','75.8648','20-03-2018','2018-03-20 01:58:22','cse','148X1A05B4'),(43,'Giridhar','17.3753','78.4744','20-03-2018','2018-03-20 01:58:39','cse','148x1a0501'),(44,'bavin sai teja','16.3','80.45','20-03-2018','2018-03-20 03:12:24','','148X1A0513'),(45,'md','16.3','80.45','20-03-2018','2018-03-20 07:38:15','','148X1A0561'),(46,'ishratunnisa','16.3','80.45','20-03-2018','2018-03-20 07:39:23','','148X1A0590'),(47,'chandra','16.3','80.45','20-03-2018','2018-03-20 07:45:40','cse','148x1a0503'),(48,'naga','16.3','80.45','20-03-2018','2018-03-20 07:49:11','','148X1A05A0'),(49,'Bindu','16.3','80.45','20-03-2018','2018-03-20 07:50:35','','148X1A05A9'),(50,'Ashok Reddy','16.3','80.45','20-03-2018','2018-03-20 07:50:38','','148x1a0557'),(51,'sai kavya','16.3','80.45','20-03-2018','2018-03-20 07:52:17','','148X1A0587'),(52,'triveni','16.3','80.45','20-03-2018','2018-03-20 07:59:00','','148X1A0581'),(53,'chandra','17.3753','78.4744','20-03-2018','2018-03-20 08:04:28','cse','148x1a0503'),(54,'ravali','16.3','80.45','20-03-2018','2018-03-20 08:07:20','','158X5A0503'),(55,'Giridhar','16.3','80.45','21-03-2018','2018-03-20 21:00:52','cse','148x1a0501'),(56,'Giridhar','39.0438','-77.4874','21-03-2018','2018-03-20 21:36:33','cse','148x1a0501'),(57,'Navi','17.3753','78.4744','21-03-2018','2018-03-21 01:28:03','cse','158X1A0544'),(58,'chandra','39.0438','-77.4874','22-03-2018','2018-03-22 07:51:28','cse','148x1a0503'),(59,'Giridhar','17.3753','78.4744','23-03-2018','2018-03-23 04:24:36','cse','148x1a0501'),(60,'john','39.0438','-77.4874','23-03-2018','2018-03-23 05:01:05','cse','148x1a0550'),(61,'Navi','12.9716','77.5946','24-03-2018','2018-03-24 16:37:06','cse','158X1A0544'),(62,'Navi','17.45','78.5','24-03-2018','2018-03-24 16:37:35','cse','158X1A0544'),(63,'Giridhar','16.3','80.45','27-03-2018','2018-03-26 18:46:03','cse','148x1a0501'),(64,'Giridhar','17.3753','78.4744','29-03-2018','2018-03-29 05:17:26','cse','148x1a0501'),(65,'Giridhar','39.0438','-77.4874','30-03-2018','2018-03-30 03:09:10','cse','148x1a0501'),(66,'Sai','17.7','83.3','30-03-2018','2018-03-30 03:13:03','cse','148X1A05A3'),(67,'Giridhar','16.3','80.45','30-03-2018','2018-03-30 04:49:31','cse','148x1a0501'),(68,'john','39.0438','-77.4874','30-03-2018','2018-03-30 06:12:16','cse','148x1a0550'),(69,'Giridhar','16.3','80.45','07-04-2018','2018-04-06 19:20:01','cse','148x1a0501'),(70,'Giridhar','17.3753','78.4744','07-04-2018','2018-04-07 03:17:20','cse','148x1a0501'),(71,'john','39.0438','-77.4874','07-04-2018','2018-04-07 03:30:03','cse','148x1a0550'),(72,'Navi','16.7','81.1','07-04-2018','2018-04-07 07:05:56','cse','158X1A0544'),(73,'Giridhar','39.0438','-77.4874','09-04-2018','2018-04-09 05:32:31','cse','148x1a0501'),(74,'B','17.3753','78.4744','09-04-2018','2018-04-09 06:54:07','','148X1A0509'),(75,'Giridhar','39.0438','-77.4874','17-04-2018','2018-04-17 04:27:13','cse','148x1a0501');
/*!40000 ALTER TABLE `location_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversation_id` int(11) NOT NULL,
  `user_from` varchar(225) NOT NULL,
  `user_to` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `time_date` varchar(225) NOT NULL,
  `date_p` varchar(225) NOT NULL,
  `status_self` varchar(225) NOT NULL,
  `status_other` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `conversation_id`, `user_from`, `user_to`, `message`, `time_date`, `date_p`, `status_self`, `status_other`) VALUES (17,3,'148x1a0501','1237','hi prasanna','','','',''),(18,4,'148x1a0501','148x1a0512','Hi ra','','','','0'),(19,4,'148x1a0501','148x1a0512','Hello','','','','0'),(20,4,'148x1a0501','148x1a0512','Hi','','','','0'),(21,4,'148x1a0512','148x1a0501','jai balayya','','','1','0'),(22,4,'148x1a0501','148x1a0512','Jai jai balaya','','','','0'),(23,4,'148x1a0512','148x1a0501','cm balayya','','','','0'),(24,4,'148x1a0512','148x1a0501','hyderabad secundrabad balayya babu jindabad','','','','0'),(25,4,'148x1a0501','148x1a0512','Jai jai balaya babu ki jai','','','','0'),(26,4,'148x1a0512','148x1a0501','east or west balayya is best','','','','0'),(27,7,'148x1a0506','148x1a0501','hiiiiii','','','',''),(28,4,'148x1a0501','148x1a0512','jai jai jai balya bak=bu ki jai','','','','0'),(29,9,'148x1a0532','148x1a0550','hiiiiiii','','','',''),(30,9,'148x1a0550','148x1a0532','BHAI','','','',''),(31,9,'148x1a0532','148x1a0550','djfgsiofjglshgioha','','','',''),(32,4,'148x1a0501','148x1a0512','hi hello namastha vanakam','','','','0'),(33,4,'148x1a0501','148x1a0512','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh','','','','0'),(34,4,'148x1a0501','148x1a0512','hi','15-02-2018 19:28:54','','','0'),(35,4,'148x1a0501','148x1a0512','hello','15-02-2018','19:39','','0'),(36,4,'148x1a0501','148x1a0512','hi','','19:51','','0'),(37,4,'148x1a0501','148x1a0512','hello','','19:52','','0'),(38,4,'148x1a0501','148x1a0512','vachasindhi','Thursday 15th of February 2018 07:55:28 PM','19:55','','0'),(39,4,'148x1a0501','148x1a0512','jai','Thursday 15th of February 2018 07:57:17 PM','19:57','','0'),(40,12,'148x1a0501','148x1a0560','Hi','Thursday 15th of February 2018 11:29:37 PM','23:29','','0'),(41,4,'148x1a0501','148x1a0512','Hi pencil animation','Thursday 15th of February 2018 11:45:43 PM','23:45','','0'),(42,13,'148x1a0501','158X1A0536','Hi nikki','Thursday 15th of February 2018 11:46:33 PM','23:46','',''),(43,9,'148x1a0532','148x1a0550','rey','Friday 16th of February 2018 08:28:54 AM','08:28','',''),(44,14,'148x1a0501','148x1a0547','hi','Friday 16th of February 2018 12:53:08 PM','12:53','',''),(45,14,'148x1a0547','148x1a0501','Hi John','Friday 16th of February 2018 12:53:21 PM','12:53','','0'),(46,14,'148x1a0547','148x1a0501','Hi giridhar','Friday 16th of February 2018 12:53:51 PM','12:53','','0'),(47,14,'148x1a0501','148x1a0547','hello','Friday 16th of February 2018 12:59:02 PM','12:59','',''),(48,15,'148x1a0554','148x1a0501','ha','Friday 16th of February 2018 01:02:47 PM','13:02','',''),(49,2,'148x1a0501','158x1a0588','hi','Friday 16th of February 2018 01:03:35 PM','13:03','',''),(50,15,'148x1a0501','148x1a0554','hi','Friday 16th of February 2018 01:03:53 PM','13:03','',''),(51,15,'148x1a0554','148x1a0501','ok','Friday 16th of February 2018 01:05:01 PM','13:05','',''),(52,15,'148x1a0501','148x1a0554','poka','Friday 16th of February 2018 01:08:53 PM','13:08','',''),(53,14,'148x1a0547','148x1a0501','What Are You Doing','Friday 16th of February 2018 01:25:50 PM','13:25','','0'),(54,14,'148x1a0547','148x1a0501','I Am Fine','Friday 16th of February 2018 01:26:13 PM','13:26','','0'),(55,14,'148x1a0501','148x1a0547','work ra work','Friday 16th of February 2018 01:27:26 PM','13:27','',''),(56,14,'148x1a0547','148x1a0501','Hi Vasu','Friday 16th of February 2018 01:31:12 PM','13:31','','0'),(57,18,'148x1a0503','148x1a0501','Hi','Friday 16th of February 2018 01:36:09 PM','13:36','','0'),(58,18,'148x1a0501','148x1a0503','hello','Friday 16th of February 2018 01:36:26 PM','13:36','','0'),(59,19,'148x1a0503','148x1a0554','Hii','Friday 16th of February 2018 01:37:07 PM','13:37','',''),(60,4,'148x1a0512','148x1a0501','GDHSACHCVJHVDJLFDIIFD','Friday 16th of February 2018 01:40:54 PM','13:40','','0'),(61,4,'148x1a0512','148x1a0501','gottal man','Friday 16th of February 2018 01:41:44 PM','13:41','','0'),(62,4,'148x1a0501','148x1a0512','hahah','Friday 16th of February 2018 01:42:10 PM','13:42','','0'),(63,20,'148x1a0512','148x1a0550','john john john','Friday 16th of February 2018 01:42:28 PM','13:42','',''),(64,14,'148x1a0501','148x1a0547','nee idi nadhi raa','Friday 16th of February 2018 02:48:53 PM','14:48','',''),(65,2,'148x1a0501','158x1a0588','hi','Friday 16th of February 2018 05:31:59 PM','17:31','',''),(66,12,'148x1a0501','148x1a0560','Hi','Saturday 17th of February 2018 12:15:49 AM','00:15','','0'),(67,12,'148x1a0560','148x1a0501','Hello','Saturday 17th of February 2018 12:25:09 AM','00:25','','0'),(68,12,'148x1a0501','148x1a0560','hi','Saturday 17th of February 2018 02:41:14 PM','14:41','0','0'),(69,12,'148x1a0501','148x1a0560','hi','Saturday 17th of February 2018 02:41:15 PM','14:41','0','0'),(70,4,'148x1a0501','148x1a0512','message vachindi roi','Saturday 17th of February 2018 02:41:57 PM','14:41','0','0'),(71,4,'148x1a0501','148x1a0512','message vachindi roi','Saturday 17th of February 2018 02:41:57 PM','14:41','0','0'),(72,12,'148x1a0501','148x1a0560','hi','Sunday 18th of February 2018 08:26:15 AM','08:26','0','0'),(73,12,'148x1a0501','148x1a0560','hi','Sunday 18th of February 2018 08:29:20 AM','08:29','0','0'),(74,12,'148x1a0501','148x1a0560','hello','Sunday 18th of February 2018 08:31:01 AM','08:31','0','0'),(75,12,'148x1a0501','148x1a0560','hi','Sunday 18th of February 2018 08:46:22 AM','08:46','0','0'),(76,12,'148x1a0501','148x1a0560','hello','Sunday 18th of February 2018 08:51:41 AM','08:51','0','0'),(77,12,'148x1a0560','148x1a0501','Hello','Sunday 18th of February 2018 08:52:26 AM','08:52','0','0'),(78,12,'148x1a0560','148x1a0501','Hi','Sunday 18th of February 2018 08:53:23 AM','08:53','0','0'),(79,12,'148x1a0501','148x1a0560','hi','Sunday 18th of February 2018 09:04:37 AM','09:04','0','0'),(80,12,'148x1a0560','148x1a0501','Hi','Sunday 18th of February 2018 09:16:17 AM','09:16','0','0'),(81,12,'148x1a0560','148x1a0501','Hello','Sunday 18th of February 2018 09:18:50 AM','09:18','0','0'),(82,12,'148x1a0501','148x1a0560','hi','Sunday 18th of February 2018 09:22:45 AM','09:22','0','0'),(83,12,'148x1a0560','148x1a0501','Hi','Sunday 18th of February 2018 09:24:19 AM','09:24','0','0'),(84,12,'148x1a0501','148x1a0560','hello','Sunday 18th of February 2018 09:30:43 AM','09:30','0','0'),(85,12,'148x1a0501','148x1a0560','hello','Sunday 18th of February 2018 09:48:06 AM','09:48','0','0'),(86,12,'148x1a0560','148x1a0501','Hi','Sunday 18th of February 2018 09:48:29 AM','09:48','0','0'),(87,12,'148x1a0501','148x1a0560','https://stackoverflow.com/questions/155188/trigger-a-button-click-with-javascript-on-the-enter-key-in-a-text-box','Sunday 18th of February 2018 10:49:32 AM','10:49','0','0'),(88,25,'148x1a0560','148x1a0568','Hello','Monday 19th of February 2018 12:14:10 AM','00:14','0','1'),(89,25,'148x1a0568','148x1a0560','hi','Monday 19th of February 2018 12:14:22 AM','00:14','0','1'),(90,18,'148x1a0503','148x1a0501','Hii','Monday 19th of February 2018 10:51:13 AM','10:51','0','0'),(91,12,'148x1a0501','148x1a0560','adhgashdas','Monday 19th of February 2018 12:51:42 PM','12:51','0','0'),(92,4,'148x1a0512','148x1a0501','waste felow yellow colour pettu ra','Tuesday 20th of February 2018 12:41:36 PM','12:41','0','0'),(93,10,'148x1a0550','148x1a0501','budel ga','Tuesday 20th of February 2018 02:21:40 PM','14:21','0','0'),(94,10,'148x1a0550','148x1a0501','sollu aapi projct pani chudu','Tuesday 20th of February 2018 02:22:02 PM','14:22','0','0'),(95,31,'148x1a0516','148x1a0548','haiiiiii','Tuesday 20th of February 2018 02:37:52 PM','14:37','0','1'),(96,10,'148x1a0501','148x1a0550','hmm','Monday 19th of March 2018 03:27:23 PM','15:27','0','0'),(97,10,'148x1a0501','148x1a0550','inka','Monday 19th of March 2018 03:27:32 PM','15:27','0','0'),(98,10,'148x1a0501','148x1a0550','inka','Monday 19th of March 2018 03:33:15 PM','15:33','0','0'),(99,10,'148x1a0501','148x1a0550','size challu anukunta','Monday 19th of March 2018 03:33:26 PM','15:33','0','0'),(100,10,'148x1a0501','148x1a0550','message posted','Monday 19th of March 2018 03:40:07 PM','15:40','0','0'),(101,10,'148x1a0501','148x1a0550','inka','Monday 19th of March 2018 03:40:14 PM','15:40','0','0'),(102,10,'148x1a0501','148x1a0550','anntha','Monday 19th of March 2018 03:40:21 PM','15:40','0','0'),(103,37,'148x1a0501','148x1a0548','inka','Monday 19th of March 2018 03:46:47 PM','15:46','0','1'),(104,10,'148x1a0501','148x1a0550','Inkamtii','Monday 19th of March 2018 04:08:36 PM','16:08','0','0'),(105,10,'148x1a0501','148x1a0550','Inkamtii','Monday 19th of March 2018 04:08:36 PM','16:08','0','0'),(106,10,'148x1a0501','148x1a0550','Inkamtii','Monday 19th of March 2018 04:08:37 PM','16:08','0','0'),(107,10,'148x1a0501','148x1a0550','orii','Monday 19th of March 2018 04:08:42 PM','16:08','0','0'),(108,10,'148x1a0501','148x1a0550','hi','Tuesday 20th of March 2018 01:36:05 AM','01:36','0','0'),(109,38,'148x1a0501','158X1A0544','Hii','Tuesday 20th of March 2018 06:34:54 AM','06:34','0','0'),(110,38,'148x1a0501','158X1A0544','Message vachindhi haa','Tuesday 20th of March 2018 06:35:03 AM','06:35','0','0'),(111,38,'158X1A0544','148x1a0501','Ok','Tuesday 20th of March 2018 06:42:40 AM','06:42','0','0'),(112,38,'148x1a0501','158X1A0544','Hmn','Tuesday 20th of March 2018 06:42:51 AM','06:42','0','0'),(113,38,'148x1a0501','158X1A0544','Adoo','Tuesday 20th of March 2018 06:44:10 AM','06:44','0','0'),(114,38,'148x1a0501','158X1A0544','Try chasa','Tuesday 20th of March 2018 06:44:16 AM','06:44','0','0'),(115,38,'148x1a0501','158X1A0544','Adoo try chasa','Tuesday 20th of March 2018 06:44:24 AM','06:44','0','0'),(116,38,'148x1a0501','158X1A0544','Changes chappu','Tuesday 20th of March 2018 06:44:25 AM','06:44','0','0'),(117,39,'148x1a0501','148X1A05B4','Hi','Tuesday 20th of March 2018 07:24:02 AM','07:24','0','0'),(118,39,'148X1A05B4','148x1a0501','Hlo','Tuesday 20th of March 2018 07:29:55 AM','07:29','0','0'),(119,39,'148x1a0501','148X1A05B4','hi','Tuesday 20th of March 2018 07:52:57 AM','07:52','0','1'),(120,40,'148x1a0501','148X1A0513','hi ra bacha','Tuesday 20th of March 2018 09:22:58 AM','09:22','0','1'),(121,40,'148x1a0501','148X1A0513','hiii','Tuesday 20th of March 2018 09:34:14 AM','09:34','0','1'),(122,40,'148x1a0501','148X1A0513','rai bacha','Tuesday 20th of March 2018 04:11:00 AM','','0','1'),(123,42,'148X1A0561','148X1A0590','hiii','Tuesday 20th of March 2018 07:39:33 AM','','0','0'),(124,42,'148X1A0590','148X1A0561','hii','Tuesday 20th of March 2018 07:40:57 AM','','0','0'),(125,18,'148x1a0503','148x1a0501','hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii','Tuesday 20th of March 2018 07:47:43 AM','','0','0'),(126,45,'148X1A05A0','148x1a0557','HI','Tuesday 20th of March 2018 07:51:53 AM','','0','0'),(127,45,'148x1a0557','148X1A05A0','hiiiiiiii banda','Tuesday 20th of March 2018 07:52:17 AM','','0','0'),(128,45,'148X1A05A0','148x1a0557','ARAYY BANDODA','Tuesday 20th of March 2018 07:52:26 AM','','0','0'),(129,49,'148X1A0581','148X1A05A0','HI','Tuesday 20th of March 2018 07:59:38 AM','','0','0'),(130,49,'148X1A05A0','148X1A0581','HEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE','Tuesday 20th of March 2018 08:00:13 AM','','0','0'),(131,12,'148x1a0501','148x1a0560','hiii','Tuesday 20th of March 2018 12:43:29 PM','','0','0'),(132,38,'148x1a0501','158X1A0544','kothii','Tuesday 20th of March 2018 09:26:03 PM','','0','0'),(133,38,'148x1a0501','158X1A0544','update chass chusko','Tuesday 20th of March 2018 09:26:09 PM','','0','0'),(134,38,'148x1a0501','158X1A0544','hi','Saturday 7th of April 2018 03:17:35 AM','','0','0'),(135,50,'148x1a0501','148x1a0569','sadgashdga','Saturday 7th of April 2018 03:17:49 AM','','0','1'),(136,51,'148x1a0501','148X1A0509','Hi','Tuesday 17th of April 2018 04:28:13 AM','','0','1');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice_board`
--

DROP TABLE IF EXISTS `notice_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notice_board` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regdno` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `branch` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `posted_id` varchar(128) NOT NULL,
  `posted_name` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `created` varchar(128) NOT NULL,
  `edited` varchar(128) NOT NULL,
  `posted_position` varchar(128) NOT NULL,
  `moderate` varchar(128) NOT NULL,
  `priority` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice_board`
--

LOCK TABLES `notice_board` WRITE;
/*!40000 ALTER TABLE `notice_board` DISABLE KEYS */;
INSERT INTO `notice_board` (`id`, `regdno`, `name`, `branch`, `semister`, `posted_id`, `posted_name`, `subject`, `message`, `created`, `edited`, `posted_position`, `moderate`, `priority`) VALUES (1,'','','cse','all','148x1a0501','giridhar','Hoi','Please Come to Office','2017-12-26 07:42:13','','office','mainoffice','high'),(2,'148x1a0501','','cse','4-2','148x1a0501','Giridhar','asdas','<p>sadasdas</p>\r\n','2018-03-09 10:02:52','','','',''),(3,'','','ece','all','148x1a0501','Giridhar','asdasd','<p>asdasdasd</p>\r\n','2018-03-09 10:03:10','','','',''),(4,'','','cse','all','148x1a0501','Giridhar','asfsgfsdfgdsfg','<p>sdfasfds</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>sf</td>\r\n			<td>sg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>gb</td>\r\n			<td>gh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ghgg</td>\r\n			<td>jgjhhggj</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','2018-03-09 10:03:34','','','','');
/*!40000 ALTER TABLE `notice_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `over_all_attandance`
--

DROP TABLE IF EXISTS `over_all_attandance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `over_all_attandance` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `semister` varchar(128) NOT NULL,
  `section` varchar(128) NOT NULL,
  `branch` varchar(128) NOT NULL,
  `no_of_classes` varchar(128) NOT NULL,
  `from_date` varchar(128) NOT NULL,
  `no_of_classes_present` varchar(128) NOT NULL,
  `to_date` varchar(128) NOT NULL,
  `regdno` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=345 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `over_all_attandance`
--

LOCK TABLES `over_all_attandance` WRITE;
/*!40000 ALTER TABLE `over_all_attandance` DISABLE KEYS */;
INSERT INTO `over_all_attandance` (`id`, `semister`, `section`, `branch`, `no_of_classes`, `from_date`, `no_of_classes_present`, `to_date`, `regdno`) VALUES (288,'1-1','a','cse','21','04/05/2018','12','04/12/2018','148x1a0501'),(289,'1-1','a','cse','21','04/05/2018','13','04/12/2018','148x1a0502'),(290,'1-1','a','cse','21','04/05/2018','14','04/12/2018','148x1a0503'),(291,'1-1','a','cse','21','04/05/2018','15','04/12/2018','148x1a0504'),(292,'1-1','a','cse','21','04/05/2018','155','04/12/2018','148x1a0505'),(293,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0506'),(294,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0507'),(295,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0508'),(296,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0509'),(297,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0510'),(298,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0511'),(299,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0512'),(300,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0513'),(301,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0514'),(302,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0515'),(303,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0516'),(304,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0517'),(305,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0518'),(306,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0519'),(307,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0520'),(308,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0521'),(309,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0522'),(310,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0523'),(311,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0524'),(312,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0525'),(313,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0526'),(314,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0527'),(315,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0528'),(316,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0529'),(317,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0530'),(318,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0531'),(319,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0532'),(320,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0533'),(321,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0534'),(322,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0535'),(323,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0536'),(324,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0537'),(325,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0538'),(326,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0539'),(327,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0540'),(328,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0541'),(329,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0542'),(330,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0543'),(331,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0544'),(332,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0545'),(333,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0546'),(334,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0547'),(335,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0548'),(336,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0549'),(337,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0550'),(338,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0551'),(339,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0552'),(340,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0553'),(341,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0554'),(342,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0555'),(343,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0556'),(344,'1-1','a','cse','21','04/05/2018','','04/12/2018','148x1a0557');
/*!40000 ALTER TABLE `over_all_attandance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `radius`
--

DROP TABLE IF EXISTS `radius`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radius` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_id` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `attandance` varchar(225) NOT NULL DEFAULT '0',
  `edit` varchar(225) NOT NULL DEFAULT '0',
  `store` varchar(225) NOT NULL DEFAULT '0',
  `fee` varchar(225) NOT NULL DEFAULT '0',
  `blog` varchar(225) NOT NULL DEFAULT '0',
  `radius_access` varchar(225) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `radius`
--

LOCK TABLES `radius` WRITE;
/*!40000 ALTER TABLE `radius` DISABLE KEYS */;
INSERT INTO `radius` (`id`, `auth_id`, `username`, `attandance`, `edit`, `store`, `fee`, `blog`, `radius_access`) VALUES (1,'102451300637690452408','Giridhar','1','1','1','0','1','1'),(2,'109580369692437649501','Grishma','1','1','1','0','1','1'),(3,'109314509632941697966','Sai','1','1','1','1','1','1'),(4,'101735743140214894693','Manisha','1','1','1','0','1','1'),(5,'115879777802361738717','Ramesh','1','1','1','0','1','1'),(6,'112746062996962235196','Nagesh','1','1','1','0','1','1'),(7,'117033009062434565334','Harsha vardhan','1','1','1','0','1','1'),(8,'114530205653343133244','Navi','0','0','0','0','0','0'),(9,'118025206461900792107','Tanuja','0','0','0','0','0','0'),(10,'113376798352679538062','bavin sai teja','0','0','0','0','0','0'),(11,'113863205929390490854','md','0','0','0','0','0','0'),(12,'115644551587819821396','ishratunnisa','0','0','0','0','0','0'),(13,'106163097824422849458','naga','0','0','0','0','0','0'),(14,'101497167030698225949','Ashok Reddy','0','0','0','0','0','0'),(15,'102136407435598691891','Bindu','0','0','0','0','0','0'),(16,'105434340249219266067','sai kavya','0','0','0','0','0','0'),(17,'100038519236200181560','triveni','0','0','0','0','0','0'),(18,'108040453563421124266','ravali','0','0','0','0','0','0'),(19,'100010919508515169591','B','0','0','0','0','0','0');
/*!40000 ALTER TABLE `radius` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_book`
--

DROP TABLE IF EXISTS `review_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_book` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `isbn_number` varchar(255) NOT NULL,
  `student_id` varchar(225) NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_book`
--

LOCK TABLES `review_book` WRITE;
/*!40000 ALTER TABLE `review_book` DISABLE KEYS */;
INSERT INTO `review_book` (`id`, `isbn_number`, `student_id`, `review`) VALUES (2,'5678','148x1a0501',''),(3,'11113','148x1a0501','book is wonder'),(4,'6576','148x1a0501',''),(5,'1234','148x1a0501','Book is Nice'),(6,'1234','148x1a0502','Book is Nice and wonderful');
/*!40000 ALTER TABLE `review_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_teacher`
--

DROP TABLE IF EXISTS `review_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_teacher` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(128) NOT NULL,
  `review` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_teacher`
--

LOCK TABLES `review_teacher` WRITE;
/*!40000 ALTER TABLE `review_teacher` DISABLE KEYS */;
INSERT INTO `review_teacher` (`id`, `teacher_id`, `review`, `created`) VALUES (1,'1256','asdghajhdsjahajd','0000-00-00 00:00:00'),(4,'VJ556','The faculty members are well-educated, and they teach and build your skills. There are many researcher centres, where you can work on your skills. There are two huge libraries, where you can find all the books related to your course. The teachers are always ready to help you.','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `review_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_db`
--

DROP TABLE IF EXISTS `st_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_db` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(128) NOT NULL,
  `admnno` varchar(128) NOT NULL,
  `regdno` varchar(128) NOT NULL,
  `admncat` varchar(128) NOT NULL,
  `eamcetht` varchar(128) NOT NULL,
  `eamcetrank` varchar(128) NOT NULL,
  `nameofstudent` varchar(128) NOT NULL,
  `dob` varchar(128) NOT NULL,
  `sex` varchar(128) NOT NULL,
  `faname` varchar(128) NOT NULL,
  `faoccu` varchar(128) NOT NULL,
  `maname` varchar(128) NOT NULL,
  `maoccu` varchar(128) NOT NULL,
  `address` varchar(600) NOT NULL,
  `pincode` varchar(128) NOT NULL,
  `cellno` varchar(128) NOT NULL,
  `annualincome` varchar(128) NOT NULL,
  `nationality` varchar(128) NOT NULL,
  `aadharno` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `bloodgroup` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `sub_cast` varchar(128) NOT NULL,
  `dateofjoining` varchar(128) NOT NULL,
  `regulation` varchar(128) NOT NULL,
  `universityfee` varchar(128) NOT NULL,
  `buildingfund` varchar(128) NOT NULL,
  `tutionfee` varchar(128) NOT NULL,
  `busfee` varchar(128) NOT NULL,
  `admission` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `position` varchar(225) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_db`
--

LOCK TABLES `st_db` WRITE;
/*!40000 ALTER TABLE `st_db` DISABLE KEYS */;
INSERT INTO `st_db` (`sno`, `branch`, `admnno`, `regdno`, `admncat`, `eamcetht`, `eamcetrank`, `nameofstudent`, `dob`, `sex`, `faname`, `faoccu`, `maname`, `maoccu`, `address`, `pincode`, `cellno`, `annualincome`, `nationality`, `aadharno`, `email`, `bloodgroup`, `category`, `sub_cast`, `dateofjoining`, `regulation`, `universityfee`, `buildingfund`, `tutionfee`, `busfee`, `admission`, `semister`, `created`, `position`) VALUES (1,'cse','1234','148x1a0501','management','123456','123456789','giridhar','12/12/17','male','nageshbabu','business','santha kumari','yugjh','kothapet','522001','9100938562','7656776','hindu','765467865467865467888887','giridhar196@gmail.com','a+','OC','obc','07/03/1997','R-13','4000','250','1500','','5500','4-2','2017-12-12 19:22:17','student'),(2,'cse','14514','148x1a05honey','Convener','14844','1234','Honey Stark','12/12/17','female','cherukuri i dont know','Employee','mrs cherukuri','teacher','brundavan gardence near venkateswara swami temple guntur','522009','9393446491','1234','hindu','146899543321','chanusha@gmail.com','o+','OC','OBC','06/12/17','R-14','4000','250','750','','5500','4-2','2017-12-19 07:27:58','student'),(3,'cse','0532','148x1a0532','management','1352665653','1000000','G GOPI YASWANTH','02/08/97','male','G SAMBASIVA RAO','BUSINESS','G VIJAYALAKSHMI','HOUSE WIFE','DR:22-16-1/6A\r\nDAVULURI VARI STREET \r\nKOTHAPETA\r\nTENALI','522201','9247820467','1000000','HINDU','123456789123','GURRAMGOPIYESWANTH24@GMAIL.COM','O++','OC','VISHYA','15/09/2014','R-13','4000','250','1500','','50500','4-2','2017-12-21 08:51:20','student'),(7,'cse','148X1A05A3','148X1A05A3','management','223232121','1160019','nAGA SAI LAKSHMI','19/06/97','female','NAGESWARARAO','INFORMER','KAMALA KUMARI','HOUSE WIFE','TADIKONDA,D.NO-7-11,THURUPU VEEDI','522236','9505342725','200000','INDIAN','311378835173','sailakshmit20@gmail.com','o+','OC','telaga','05/10/','','4000','250','1500','','50500','4-2','2018-01-08 08:26:07','student'),(10,'cse','148X1A05B4','148X1A05B4','spot','','','Tanuja','20/02/1996','female','V.anil','Business','','','Nehru nagar 2 nd lane guntur door no 8-9-124','522001','(779) 900-5057','','','','tanuja12372@gmail.com','B+','OC','Oc','','R-13','2500','1000','0','','900','4-2','2018-03-20 07:28:21','student'),(11,'cse','148X1A05B1','148x1a05b1','conviner','','','Jeevan Sandeep','03/07/96','male','Jeevan Sandeep','Buss ','','','Gint ','522034','8686505424','','','','jeevan.sandeep1996@gmail.com','','BC-A','Mangali','14/06/14','','0','2500','1500','','45000','1-1','2018-01-14 04:03:48','student'),(13,'cse','1498','158x1a0588','conviner','','','T.Sri lakshmi priyanka','14/03/98','female','T.siva koti reddy','Business','','','D.no:4-5-49/33a,near narne towers,sai baba road,guntur,andhra pradesh,india','522001','9396608999','','','','priyanka.reddy2345678@gmail.com','','OC','Reddy','06/06/15','','0','2500','1500','','45000','1-1','2018-01-14 07:40:19','student'),(14,'cse','sdjhfjdsgj','jhgcfjsgjads','management','','','kjsshfs','14/01/18','male','kjhjhjkhk','hvjhjbjh','','','jbjbhjnjvbvj','67565','6555876787','','','','nagesh.addagalla@gmail.com','','OC','ebc','14/01/18','','4000','250','1500','','50500','1-1','2018-01-14 12:15:18','student'),(15,'cse','8066','158X1A0536','spot','','','Grandhi v j s nikhila','29/08/1998','female','Grandhi venkata sriNIvas','Bussiness','','','Flat no 201,bhavya residency,Krishna nagar 2nd lane,GUNTUR','52201','9966695088','','','','grandhinikhila@gmail.com','','OC','Vysyas','07/06/15','','0','250','0','','0','1-1','2018-01-15 18:06:36','student'),(18,'cse','','148X1A0550','spot','','','john','22/07/1997','','','','','','Velangini Nagar 6th Lane,Amaravathi Road,Guntur','','(995) 968-9769','','','','princejohnny777@gmail.com','O+','','','','R-13','2500','1000','0','','900','4-2','2018-02-14 13:30:06','student'),(19,'cse','','148x1a0547','spot','','','prasanna','14/01/1996','','','','','','Mother Therisa Colony ,Reddypalem 1st lane,Nagaralu,Guntur','','(950) 210-9958','','','','prasannakondabathini@gmail.com','B+','','','','R-13','2500','1000','0','','900','4-2','2018-02-14 13:37:53','student'),(22,'cse','','148X1A0512','spot','','','akhil','27/11/1996','','','','','','flat no-205,harika homes,nalanda nagar 2nd lane,ringroad,guntur.','','(996) 332-6082','','','','akhilchandra16@gmail.com','','','','','R-13','2500','1000','0','','900','4-2','2018-02-14 14:16:08','student'),(24,'cse','','','spot','','','Vasu','22/02/1997','','','','','','DINDI       NAGAYALANKA MANDAL  KRISHNA DIST     ','','(966) 692-3151','','','','atirumalavasu9669@gmail.com','','','','','R-13','2500','1000','0','','900','1-1','2018-02-15 12:57:06','student'),(27,'cse','','148X1A0554','spot','','','priyanka','24/10/1997','','','','','','arundathi nagar 3/3 lane,Guntur.','','(944) 084-9364','','','','priyankamahimaluri@gmail.com','O-ve','','','','R-13','2500','1000','0','','900','4-2','2018-02-16 13:02:13','student'),(29,'cse','','148x1a0503','spot','','','chandra','14/05/1996','','','','','','guntur\r\noldguntur','','(080) 969-6041','','','','chandrasai071@gmail.com','a+','','','','R-13','2500','1000','0','','900','4-2','2018-02-16 13:35:53','student'),(30,'cse','','148x1a0561','spot','','','Nagesh','07/09/1978','','','','','','Kothapet ','','(924) 747-9265','','','','nageshaddagalla@gmail.com','A+','','','','R-13','2500','1000','0','','900','4-2','2018-02-17 00:22:50','student'),(31,'cse','','148x1a0568','spot','','','giridhar','09/03/1997','','','','','','jhghjhghgjghgjghjg','','(910) 093-8562','','','','giridharaddagalla@gmail.com','a+','','','','R-13','2500','1000','0','','900','4-2','2018-02-19 00:04:54','student'),(32,'cse','','148X1A0516','spot','','','vineela','29/10/1996','','','','','','syamala nagar 10 th line diamond towers','','(910) 063-8966','','','','vineela.rch@gmail.com','','','','','R-13','2500','1000','0','','900','1-1','2018-02-20 14:35:27','student'),(33,'cse','','148x1a0535','','','','','','','','','','','','','','','','','jayasreejonnekuty@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(34,'cse','','511','','','','Sri lakshmi','','','','','','','','','','','','','webkhit@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00','teacher'),(35,'','','158X1A0539','','','','','','','','','','','','','','','','','ramyagummadi276@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(36,'cse','','158X1A0544','spot','','','Navi','07/03/1998','','','','','','Reddy girls hostel,Shyamalanagar 8th line ,guntur','','(912) 199-1304','','','','knreddy544@gmail.com','B+','','','','R-13','2500','1000','0','','900','3-2','2018-03-20 06:38:01','student'),(37,'','','148X1A0523','','','','','','','','','','','','','','','','','dgayathri523@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(38,'','','148X1A0528','','','','','','','','','','','','','','','','','soujanyagavarraju@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(39,'','','158X1A0599','','','','','','','','','','','','','','','','','sowjanyaupputuri1997@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(40,'cse','','148X1A0513','spot','','','bavin sai teja','01/17/1997','','','','','','D.no:26-36-146/A,Ankammanagar 2nd lane ,opp KMR residency,Guntur-522004','','(910) 034-7416','','','','bavinchebrolu97@gmail.com','','','','','R-13','2500','1000','0','','900','4-2','2018-03-20 08:42:24','student'),(41,'cse','','','spot','','','md','06/04/1997','','','','','','Guntur','','(990) 873-8807','','','','mdniloufar561@gmail.com','b+','','','','R-13','2500','1000','0','','900','1-1','2018-03-20 13:08:15','student'),(42,'cse','','','spot','','','ishratunnisa','01/04/1996','','','','','','Guntur','','(733) 052-9455','','','','skishratunnisa123@gmail.com','','','','','R-13','2500','1000','0','','900','1-1','2018-03-20 13:09:23','student'),(43,'cse','','148X1A05A0','spot','','','naga','17/11/1996','','','','','','last busstand,new water tank,nambur','','(709) 596-6528','','','','nagalakshmitamma3@gmail.com','O+','','','','R-13','2500','1000','0','','900','4-2','2018-03-20 13:19:10','student'),(44,'cse','','148X1A05A9','spot','','','Bindu','05/10/1997','','','','','','GUNTUR door no 3-31,pincode 522001','','(789) 456-1230','','','','bindunanna@gmail.com','B+','','','','R-13','2500','1000','0','','900','1-1','2018-03-20 13:20:34','student'),(45,'cse','','148x1a0557','spot','','','Ashok Reddy','06/07/1996','','','','','','govindapuram(vl),chilakaluripet(mdl),guntur(dt)','','(949) 319-1255','','','','ashokreddymandagiri8142@gmail.com','o-ve','','','','R-13','2500','1000','0','','900','1-1','2018-03-20 13:20:38','student'),(46,'cse','','148X1A0587','spot','','','sai kavya','25/09/1997','','','','','','ankamma nagar 1st lane','','(903) 275-1867','','','','saikavya.25@gmail.com','B+','','','','R-13','2500','1000','0','','900','4-2','2018-03-20 13:22:17','student'),(47,'cse','','148X1A0581','spot','','','triveni','03/08/1997','','','','','','srinagar 7/4','','(970) 547-1349','','','','triveniramisetty1234@gmail.com','O-VE','','','','R-13','2500','1000','0','','900','4-2','2018-03-20 13:28:59','student'),(48,'cse','','','spot','','','ravali','23/08/1997','','','','','','guntur','','(770) 258-9157','','','','ravalitiriveedhi1@gmail.com','','','','','R-13','2500','1000','0','','900','4-2','2018-03-20 13:37:19','student'),(49,'','','158X1A0575','','','','','','','','','','','','','','','','','rameshpilakatapu732@gmail.com','','','','','','','','','','','','0000-00-00 00:00:00',''),(50,'cse','','148x','spot','','','B','30/06/1997','','','','','','Nothing','','(824) 725-1124','','','','b.rajeswari1997@gmail.com','','','','','R-13','2500','1000','0','','900','1-1','2018-04-09 12:24:06','student');
/*!40000 ALTER TABLE `st_db` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `branch` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `section` varchar(225) NOT NULL,
  `regulation` varchar(225) NOT NULL,
  `registration_number` varchar(225) NOT NULL,
  `semister` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`id`, `branch`, `year`, `section`, `regulation`, `registration_number`, `semister`) VALUES (1,'cse','4','a','r-13','148x1a0501','4'),(2,'cse','4','a','r-13','148x1a0502','4'),(3,'cse','4','a','r-13','148x1a0503','4'),(4,'cse','4','a','r-13','148x1a0504','4'),(5,'cse','4','a','r-13','148x1a0505','4'),(6,'cse','4','a','r-13','148x1a0506','4'),(7,'cse','4','a','r-13','148x1a0507','4'),(8,'cse','4','a','r-13','148x1a0508','4'),(9,'cse','4','a','r-13','148x1a0509','4'),(10,'cse','4','a','r-13','148x1a0510','4'),(11,'cse','4','a','r-13','148x1a0511','4'),(12,'cse','4','a','r-13','148x1a0512','4'),(13,'cse','4','a','r-13','148x1a0513','4'),(14,'cse','4','a','r-13','148x1a0514','4'),(15,'cse','4','a','r-13','148x1a0515','4'),(16,'cse','4','a','r-13','148x1a0516','4'),(17,'cse','4','a','r-13','148x1a0517','4'),(18,'cse','4','a','r-13','148x1a0518','4'),(19,'cse','4','a','r-13','148x1a0519','4'),(20,'cse','4','a','r-13','148x1a0520','4'),(21,'cse','4','a','r-13','148x1a0521','4'),(22,'cse','4','a','r-13','148x1a0522','4'),(23,'cse','4','a','r-13','148x1a0523','4'),(24,'cse','4','a','r-13','148x1a0524','4'),(25,'cse','4','a','r-13','148x1a0525','4'),(26,'cse','4','a','r-13','148x1a0526','4'),(27,'cse','4','a','r-13','148x1a0527','4'),(28,'cse','4','a','r-13','148x1a0528','4'),(29,'cse','4','a','r-13','148x1a0529','4'),(30,'cse','4','a','r-13','148x1a0530','4'),(31,'cse','4','a','r-13','148x1a0531','4'),(32,'cse','4','a','r-13','148x1a0532','4'),(33,'cse','4','a','r-13','148x1a0533','4'),(34,'cse','4','a','r-13','148x1a0534','4'),(35,'cse','4','a','r-13','148x1a0535','4'),(36,'cse','4','a','r-13','148x1a0536','4'),(37,'cse','4','a','r-13','148x1a0537','4'),(38,'cse','4','a','r-13','148x1a0538','4'),(39,'cse','4','a','r-13','148x1a0539','4'),(40,'cse','4','a','r-13','148x1a0540','4'),(41,'cse','4','a','r-13','148x1a0541','4'),(42,'cse','4','a','r-13','148x1a0542','4'),(43,'cse','4','a','r-13','148x1a0543','4'),(44,'cse','4','a','r-13','148x1a0544','4'),(45,'cse','4','a','r-13','148x1a0545','4'),(46,'cse','4','a','r-13','148x1a0546','4'),(47,'cse','4','a','r-13','148x1a0547','4'),(48,'cse','4','a','r-13','148x1a0548','4'),(49,'cse','4','a','r-13','148x1a0549','4'),(50,'cse','4','a','r-13','148x1a0550','4'),(51,'cse','4','a','r-13','148x1a0551','4'),(52,'cse','4','a','r-13','148x1a0552','4'),(53,'cse','4','a','r-13','148x1a0553','4'),(54,'cse','4','a','r-13','148x1a0554','4'),(55,'cse','4','a','r-13','148x1a0555','4'),(56,'cse','4','a','r-13','148x1a0556','4'),(57,'cse','4','a','r-13','148x1a0557','4'),(58,'cse','4','a','r-13','148x1a0558','4');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_attandance`
--

DROP TABLE IF EXISTS `sub_attandance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_attandance` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regno` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `section` varchar(128) NOT NULL,
  `branch` varchar(128) NOT NULL,
  `type_of_class` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `teacher` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `time_created` varchar(128) NOT NULL,
  `auth_name` varchar(128) NOT NULL,
  `updated_time` varchar(128) NOT NULL,
  `teacher_auth_id` varchar(128) NOT NULL,
  `status_p` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=793 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_attandance`
--

LOCK TABLES `sub_attandance` WRITE;
/*!40000 ALTER TABLE `sub_attandance` DISABLE KEYS */;
INSERT INTO `sub_attandance` (`id`, `regno`, `semister`, `section`, `branch`, `type_of_class`, `subject`, `teacher`, `date_created`, `time_created`, `auth_name`, `updated_time`, `teacher_auth_id`, `status_p`) VALUES (785,'148x1a0501','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:00','Giridhar','','102451300637690452408','p'),(786,'148x1a0504','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:00','Giridhar','','102451300637690452408','p'),(787,'148x1a0507','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:00','Giridhar','','102451300637690452408','p'),(788,'148x1a0509','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:00','Giridhar','','102451300637690452408','p'),(789,'148x1a0517','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:00','Giridhar','','102451300637690452408','p'),(790,'148x1a0502','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:47','Giridhar','','102451300637690452408','p'),(791,'148x1a0545','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:10:47','Giridhar','','102451300637690452408','p'),(792,'148x1a0502','1-1','a','cse','class','sub1 edit','teacher1','2018-02-01','11:21:47','Giridhar','','102451300637690452408','p');
/*!40000 ALTER TABLE `sub_attandance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_name`
--

DROP TABLE IF EXISTS `subject_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_name` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `subject_id` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_name`
--

LOCK TABLES `subject_name` WRITE;
/*!40000 ALTER TABLE `subject_name` DISABLE KEYS */;
INSERT INTO `subject_name` (`id`, `subject_name`, `subject_id`) VALUES (3,'maths','125h7'),(4,'C Programming','Is290'),(5,'CNS','1hy66'),(6,'HCI','556HG'),(7,'IPR','IPR556'),(8,'SNSW','SNSW556');
/*!40000 ALTER TABLE `subject_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_s_sem_b_section`
--

DROP TABLE IF EXISTS `t_s_sem_b_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_s_sem_b_section` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(225) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `branch` varchar(128) NOT NULL,
  `section` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `year` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_s_sem_b_section`
--

LOCK TABLES `t_s_sem_b_section` WRITE;
/*!40000 ALTER TABLE `t_s_sem_b_section` DISABLE KEYS */;
INSERT INTO `t_s_sem_b_section` (`id`, `teacher_name`, `teacher_id`, `branch`, `section`, `semister`, `year`, `subject`) VALUES (4,'krishna reddy','1256','cse','a','1-1','2018','3'),(8,'Vijaya Kumar','VJ556','cse','a','1-1','2018','IPR'),(9,'P LAKSHMI KANTH','GH667','cse','a','1-1','2018','C Programming'),(10,'Rama Krishna','HHRK567','cse','a','1-1','2018','HCI');
/*!40000 ALTER TABLE `t_s_sem_b_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblauthors`
--

DROP TABLE IF EXISTS `tblauthors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblauthors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `AuthorName` varchar(159) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblauthors`
--

LOCK TABLES `tblauthors` WRITE;
/*!40000 ALTER TABLE `tblauthors` DISABLE KEYS */;
INSERT INTO `tblauthors` (`id`, `AuthorName`, `creationDate`, `UpdationDate`) VALUES (1,'Anuj kumar','2017-07-08 12:49:09','2017-07-08 15:16:59'),(2,'sdfsdfsdf','2017-07-08 14:30:23','2018-03-01 16:00:32'),(3,'Anita Desa','2017-07-08 14:35:08','2018-03-01 16:00:48'),(4,'HC Verma','2017-07-08 14:35:21',NULL),(5,'R.D. Sharma ','2017-07-08 14:35:36',NULL),(9,'giridhar','2017-07-08 15:22:03','2018-03-02 03:43:26'),(10,'giridhar','2018-02-21 08:55:21',NULL),(11,'rajesh','2018-03-01 15:50:45',NULL);
/*!40000 ALTER TABLE `tblauthors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `AuthorId` int(11) DEFAULT NULL,
  `ISBNNumber` int(11) DEFAULT NULL,
  `BookPrice` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `copynumber` varchar(225) NOT NULL,
  `book_issue_status` varchar(225) NOT NULL DEFAULT '1',
  `book_status` varchar(225) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblbooks`
--

LOCK TABLES `tblbooks` WRITE;
/*!40000 ALTER TABLE `tblbooks` DISABLE KEYS */;
INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `AuthorId`, `ISBNNumber`, `BookPrice`, `RegDate`, `UpdationDate`, `copynumber`, `book_issue_status`, `book_status`) VALUES (1,'PHP And MySql programming',5,1,1234,20,'2017-07-08 20:04:55','2018-03-18 14:42:43','56665','0','0'),(3,'physicss',5,3,11113,1335,'2017-07-08 20:17:31','2018-03-18 14:42:33','1234','0','0'),(4,'book1',4,1,5678,200,'2018-03-03 03:39:38','2018-03-18 14:30:39','5298','1','missing'),(5,'Bio',4,1,67890,456,'2018-03-12 04:56:25',NULL,'562','1','0'),(6,'physics',4,1,6576,7657,'2018-03-12 05:09:47','2018-03-18 14:31:56','6564565','1','0'),(7,'nbvbnv',4,1,65766,45354,'2018-03-12 05:48:03','2018-03-18 07:22:24','4564564','1','0');
/*!40000 ALTER TABLE `tblbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcategory`
--

LOCK TABLES `tblcategory` WRITE;
/*!40000 ALTER TABLE `tblcategory` DISABLE KEYS */;
INSERT INTO `tblcategory` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES (4,'Roman',1,'2017-07-04 18:35:25','2018-03-01 15:32:33'),(5,'Technologys',1,'2017-07-04 18:35:39','2018-03-07 06:41:47'),(6,'Science',1,'2017-07-04 18:35:55','0000-00-00 00:00:00'),(7,'Management',0,'2017-07-04 18:36:16','0000-00-00 00:00:00'),(8,'hi',1,'2018-03-01 07:57:41','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tblcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblissuedbookdetails`
--

DROP TABLE IF EXISTS `tblissuedbookdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookId` int(11) DEFAULT NULL,
  `isbn_number` varchar(225) NOT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `RetrunStatus` int(1) NOT NULL,
  `fine` int(11) DEFAULT NULL,
  `issued_date` varchar(225) NOT NULL,
  `expected_return` varchar(225) NOT NULL,
  `return_date` varchar(225) NOT NULL,
  `fine_status` varchar(225) NOT NULL DEFAULT 'NOT PAID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblissuedbookdetails`
--

LOCK TABLES `tblissuedbookdetails` WRITE;
/*!40000 ALTER TABLE `tblissuedbookdetails` DISABLE KEYS */;
INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `isbn_number`, `StudentID`, `RetrunStatus`, `fine`, `issued_date`, `expected_return`, `return_date`, `fine_status`) VALUES (37,3,'11113','148x1a0501',1,NULL,'18-03-2018','02-04-2018','','NOT PAID'),(38,1,'1234','148x1a0501',1,NULL,'18-03-2018','02-04-2018','','NOT PAID');
/*!40000 ALTER TABLE `tblissuedbookdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(128) NOT NULL,
  `regdno` varchar(128) NOT NULL,
  `nameofteacher` varchar(128) NOT NULL,
  `dob` varchar(128) NOT NULL,
  `sex` varchar(128) NOT NULL,
  `faname` varchar(128) NOT NULL,
  `faoccu` varchar(128) NOT NULL,
  `address` varchar(600) NOT NULL,
  `pincode` varchar(128) NOT NULL,
  `cellno` varchar(128) NOT NULL,
  `aadharno` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `bloodgroup` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` (`id`, `branch`, `regdno`, `nameofteacher`, `dob`, `sex`, `faname`, `faoccu`, `address`, `pincode`, `cellno`, `aadharno`, `email`, `bloodgroup`, `created`) VALUES (1,'cse','1256','krishna reddy','17/07/1978','','','','asbdajdsajdajsdsahjdasj','','9100938562','','kreshnareddy@gmail.com','','0000-00-00 00:00:00'),(3,'cse','GH667','P LAKSHMI KANTH','07/03/1967','','','','asgdjagsjdhasdas\r\n','','1234567890','','plakshmikanthpalati@gmail.com','','0000-00-00 00:00:00'),(4,'cse','HHRK567','Rama Krishna','07/09/1990','','','','ahgjhgdajsdjhsjdas','','86768768767786','','rk@khitguntur.ac.in','','0000-00-00 00:00:00'),(5,'cse','VJ556','Vijaya Kumar','7/7/1978','','','','asnmdbnasmbdmasbmdnas','','656576787878','','vj@khitguntur.ac.in','','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time_table` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `branch` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `section` varchar(128) NOT NULL,
  `updatedby` varchar(128) NOT NULL,
  `updatedtime` varchar(128) NOT NULL,
  `year` varchar(128) NOT NULL,
  `row_1` varchar(128) NOT NULL,
  `row_2` varchar(128) NOT NULL,
  `row_3` varchar(128) NOT NULL,
  `row_4` varchar(128) NOT NULL,
  `row_5` varchar(128) NOT NULL,
  `row_6` varchar(128) NOT NULL,
  `row_7` varchar(128) NOT NULL,
  `row_8` varchar(128) NOT NULL,
  `row_9` varchar(128) NOT NULL,
  `row_10` varchar(128) NOT NULL,
  `updateddate` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_table`
--

LOCK TABLES `time_table` WRITE;
/*!40000 ALTER TABLE `time_table` DISABLE KEYS */;
INSERT INTO `time_table` (`id`, `branch`, `semister`, `section`, `updatedby`, `updatedtime`, `year`, `row_1`, `row_2`, `row_3`, `row_4`, `row_5`, `row_6`, `row_7`, `row_8`, `row_9`, `row_10`, `updateddate`) VALUES (1,'cse','1-1','a','Giridhar','16:46:35','1','time','10.45','11.45','12.30','1.30','2.30','3.30','4.37','','','13-01-18 '),(3,'cse','1-1','a','Giridhar','16:46:35','1','monday','m1','phy','Lunch','chem','m1','c language','libraby','','','13-01-18 '),(5,'cse','1-1','a','Giridhar','16:46:35','1','tuersday','sub1','sub2','Lunch','che','m1','clanguage','library','','','13-01-18 '),(6,'cse','1-1','a','Giridhar','16:46:35','1','wednesday','sub1','sub2','Lunch','sub3','m1','clanguage','sub6','','','13-01-18 '),(7,'cse','1-1','a','Giridhar','16:46:35','1','thursday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','','13-01-18 '),(8,'cse','1-1','a','Giridhar','16:46:35','1','friday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','','13-01-18 '),(9,'cse','1-1','a','Giridhar','16:46:35','1','saturday','sub1','sub2','Lunch','sub3','sub4','sub7','sub6','','','13-01-18 '),(10,'cse','2-1','a','giridhar','','2','time','10.45','11.45','12.30','1.30','2.30','3.30','4.30','','',''),(11,'cse','2-1','a','giridhar','','2','monday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(12,'cse','2-1','a','giridhar','','2','tuersday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(13,'cse','2-1','a','giridhar','','2','wednesday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(14,'cse','2-1','a','giridhar','','2','thursday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(15,'cse','2-1','a','giridhar','','2','friday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(16,'cse','2-1','a','giridhar','','2','saturday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(17,'cse','2-2','a','giridhar','','2','time','10.45','11.45','12.30','1.30','2.30','3.30','4.30','','',''),(18,'cse','2-2','a','giridhar','','2','monday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(19,'cse','2-2','a','giridhar','','2','tuersday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(20,'cse','2-2','a','giridhar','','2','wednesday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(21,'cse','2-2','a','giridhar','','2','thursday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(22,'cse','2-2','a','giridhar','','2','friday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(23,'cse','2-2','a','giridhar','','2','saturday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(24,'cse','1-2','a','giridhar','','1','time','10.45','11.45','12.30','1.30','2.30','3.30','4.30','','',''),(25,'cse','1-2','a','giridhar','','1','monday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(26,'cse','1-2','a','giridhar','','1','tuersday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(27,'cse','1-2','a','giridhar','','1','wednesday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(28,'cse','1-2','a','giridhar','','1','thursday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(29,'cse','1-2','a','giridhar','','1','friday','sub1','sub2','Lunch','sub3','sub4','sub5','sub6','','',''),(30,'cse','1-2','a','giridhar','','1','saturday','sub1','sub2','Lunch','sub3','sub4','sub7','sub6','','','');
/*!40000 ALTER TABLE `time_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(225) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `regdno` varchar(128) NOT NULL,
  `created` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `categoryfor` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` (`id`, `order_id`, `branch`, `regdno`, `created`, `semister`, `amount`, `categoryfor`, `price`) VALUES (33,'13','cse','148x1a0532','2017-11-22 ','1-1','5000','admissionfee','5000'),(34,'13','cse','148x1a0532','2017-12-22 ','1-1','500','universityfee','500'),(35,'13','cse','148x1a0532','2017-12-15 ','1-1','200','buildingfund','200'),(36,'14','cse','148x1a0532','2017-12-22 ','1-1','500','admissionfee','500'),(37,'15','cse','148x1a0501','2017-12-26 ','1-1','500','tutionfee','500'),(38,'16','cse','148x1a0532','2018-01-03 ','1-2','50000','admissionfee','50000');
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactionid`
--

DROP TABLE IF EXISTS `transactionid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactionid` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regdno` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionid`
--

LOCK TABLES `transactionid` WRITE;
/*!40000 ALTER TABLE `transactionid` DISABLE KEYS */;
INSERT INTO `transactionid` (`id`, `regdno`, `name`) VALUES (5,'148x1a0501','giridhar'),(6,'148x1a0501','giridha'),(7,'148x1a0502','A Prasanth'),(8,'148x1a0502','A Prasanth'),(9,'148x1a0501','giridhar'),(10,'148x1a0514','anusha'),(11,'148x1a0514','anusha'),(12,'148x1a0532','G Gopi Yeswanth'),(13,'148x1a0532','ggopi'),(14,'148x1a0532','gopi'),(15,'148x1a0501','giridhar'),(16,'148x1a0532','gopi');
/*!40000 ALTER TABLE `transactionid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `used_store`
--

DROP TABLE IF EXISTS `used_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `used_store` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nameofstudent` varchar(128) NOT NULL,
  `regid` varchar(128) NOT NULL,
  `auth` varchar(128) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `description` varchar(728) NOT NULL,
  `regulation` varchar(128) NOT NULL,
  `short_desciption` varchar(128) NOT NULL,
  `branch` varchar(128) NOT NULL,
  `semister` varchar(128) NOT NULL,
  `type_condition` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `quantity` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `dateofpost` varchar(128) NOT NULL,
  `p_by` varchar(128) NOT NULL,
  `p_auth` varchar(128) NOT NULL,
  `p_email` varchar(128) NOT NULL,
  `p_date` varchar(128) NOT NULL,
  `p_phone` varchar(128) NOT NULL,
  `p_regid` varchar(128) NOT NULL,
  `permission` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `icon` varchar(225) NOT NULL,
  `sold` varchar(225) NOT NULL DEFAULT '0',
  `delivery_report` varchar(225) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `used_store`
--

LOCK TABLES `used_store` WRITE;
/*!40000 ALTER TABLE `used_store` DISABLE KEYS */;
INSERT INTO `used_store` (`id`, `nameofstudent`, `regid`, `auth`, `product_name`, `category`, `description`, `regulation`, `short_desciption`, `branch`, `semister`, `type_condition`, `price`, `quantity`, `email`, `dateofpost`, `p_by`, `p_auth`, `p_email`, `p_date`, `p_phone`, `p_regid`, `permission`, `created`, `icon`, `sold`, `delivery_report`) VALUES (17,'Giridhar','148x1a0501','102451300637690452408','Product 1','\r\n                                                Text_Book_Material','<p>Bok adadjchjkksdjfksddfk</p>\r\n','R-13','                                            jksfjsfsjhfkdj                                                                      ','cse','\r\n                                                1-1','used','20','0','giridhar196@gmail.com','2018-03-30','Giridhar','102451300637690452408','giridhar196@gmail.com','2018-03-19','','148x1a0501','1','2018-03-30 10:16:32','si si-book-open','0','0'),(18,'Giridhar','148x1a0501','102451300637690452408','Gghf','Normal_Material','<p>Use</p>\r\n','R-13','      Can                                                                              ','cse','3-2','used','50','1','giridhar196@gmail.com','2018-03-30','','','','','','','1','2018-03-30 08:44:06','si si-book-open','0','0');
/*!40000 ALTER TABLE `used_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regdno` varchar(128) NOT NULL,
  `emailid` varchar(128) NOT NULL,
  `moderate` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `user_type` varchar(128) NOT NULL,
  `update_date` varchar(128) NOT NULL,
  `ip_address` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `hobiees` varchar(228) NOT NULL,
  `aim` varchar(228) NOT NULL,
  `achivements` text NOT NULL,
  `goal` varchar(228) NOT NULL,
  `google_id` varchar(128) NOT NULL,
  `vision` varchar(128) NOT NULL,
  `location` varchar(225) NOT NULL,
  `skills` text NOT NULL,
  `nickname` varchar(225) NOT NULL,
  `rolemodal` varchar(225) NOT NULL,
  `strength` varchar(225) NOT NULL,
  `phonenumber` varchar(225) NOT NULL,
  `branch` varchar(225) NOT NULL,
  `lat` varchar(225) NOT NULL,
  `longi` varchar(225) NOT NULL,
  `last_message` varchar(225) NOT NULL DEFAULT '148x1a0501',
  PRIMARY KEY (`id`,`regdno`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` (`id`, `regdno`, `emailid`, `moderate`, `name`, `status`, `user_type`, `update_date`, `ip_address`, `password`, `hobiees`, `aim`, `achivements`, `goal`, `google_id`, `vision`, `location`, `skills`, `nickname`, `rolemodal`, `strength`, `phonenumber`, `branch`, `lat`, `longi`, `last_message`) VALUES (1,'148x1a0501','giridhar196@gmail.com','','Giridhar','1','','17-04-2018 09:58:18','64.233.173.27','234234','playing','win the nation','','hip hip','102451300637690452408','gj','guntur','4','pandu','zxc','cz','','cse','39.0438','-77.4874','148X1A0509'),(4,'158x1a0588','priyanka.reddy2345678@gmail.com','','Priyanka','1','','2018-01-14 13:12:31','64.233.173.128','','','','','','103033307484520900938','','','','','','','','','','','148x1a0501'),(5,'158X1A0536','grandhinikhila@gmail.com','','Nikhila','1','','2018-01-15 23:46:34','64.233.173.130','','','','','','116973421851540894239','','','','','','','','','','','148x1a0501'),(6,'148x1a0547','prasannakondabathini@gmail.com','','prasanna','1','','16-02-2018 13:44:56','103.42.251.38','','HelpingNature','win the nation','','Gov.Job','114721151586038885705','Gov.Job','Guntur','','pesu','No','Positive Thinking','','','','','148x1a0501'),(7,'148X1A05A3','sailakshmit20@gmail.com','','Sai','1','','30-03-2018 08:47:20','160.238.72.99','','','','','','103377380932750198259','','','','','','','','cse','17.7','83.3','148x1a0501'),(8,'148x1a0550','princejohnny777@gmail.com','','john','1','','2018-04-07 09:14:23','64.233.173.23','','','win the nation','','','115352708954686457903','','','','John Sandeep','','','','','39.0438','-77.4874','148x1a0501'),(9,'148x1a0512','akhilchandra16@gmail.com','','akhil','1','','20-02-2018 12:49:03','103.42.251.38','','','','','','110548335710650756876','','','','','','','','','','','148x1a0501'),(10,'1237','prasannakondabathini@gmail.com','','prasanna','1','','14-02-2018 14:25:50','103.42.251.38','','','','','','114721151586038885705','','','','','','','','','','','148x1a0501'),(11,'148x1a0506','atirumalavasu9669@gmail.com','','Vasu','1','','16-02-2018 13:59:32','103.42.251.38','','','','','','101247167301501695199','','','','','','','','','','','148x1a0501'),(12,'148x1a0532','gurramgopiyeswanth24@gmail.com','','gurramGopi','1','','16-02-2018 08:29:00','157.48.62.203','','','','','','102595132256905930954','','','','','','','','','','','148x1a0501'),(13,'148x1a0554','priyankamahimaluri@gmail.com','','priyanka','1','','16-02-2018 13:10:05','103.42.251.38','','','','','','115948029099414758313','','','','','','','','','','','148x1a0501'),(14,'148x1a0503','chandrasai071@gmail.com','','chandra','1','','22-03-2018 13:24:09','64.233.173.146','','','','','','115477941866495197748','','','','','','','','cse','39.0438','-77.4874','148x1a0501'),(15,'148x1a0560','nageshaddagalla@gmail.com','','Nagesh','1','','19-02-2018 00:53:52','49.206.81.38','','','','','','112746062996962235196','','','','','','','','','','','148x1a0501'),(16,'148x1a0568','giridharaddagalla@gmail.com','','giridhar','1','','19-02-2018 00:38:01','49.206.81.38','','','','','','117600577926578628823','','','','','','','','cse','','','148x1a0501'),(17,'148x1a0516','vineela.rch@gmail.com','','vineela','1','','20-02-2018 14:43:42','103.42.251.38','','','','','','114563270814157246882','','','','','','','','','','','148x1a0501'),(18,'1016','bonagirianilkumar83@gmail.com','','bonagiri','1','','09-03-2018 14:03:19','103.42.251.38','','','','','','108020568979359722280','','','','','','','','','','','148x1a0501'),(19,'511','webkhit@gmail.com','','KHIT','1','','2018-03-10 21:23:18','49.205.19.181','','','','','','101224636787825582743','','','','','','','','','','','148x1a0501'),(20,'148x1a0529','chandanagollapudi97@gmail.com','','Chandana','1','','12-03-2018 21:52:22','103.209.89.71','','','','','','114601246130918910547','','','','','','','','','','','148x1a0501'),(21,'148x1a0553','manishamadana11@gmail.com','','Manisha','1','','19-03-2018 12:40:40','103.42.251.38','','','','','','101735743140214894693','','','','','','','','library','16.3','80.45','148x1a0501'),(22,'158X1A0544','knreddy544@gmail.com','','Navi','1','','07-04-2018 12:35:56','27.63.89.8','Naviidadmombrosmille','Singing,sleeping,watching technical vedios','win the nation','','To earn money&luxury life','114530205653343133244','','Guntur','','Navii','BTS(bangtan boys)','Happiness','','cse','16.7','81.1','148x1a0501'),(23,'148X1A05B4','tanuja12372@gmail.com','','Tanuja','1','','20-03-2018 07:31:17','49.44.82.231','','','','','','118025206461900792107','','','','','','','','cse','25.2138','75.8648','148x1a0501'),(24,'148X1A0513','bavinchebrolu97@gmail.com','','bavin sai teja','1','','20-03-2018 08:42:24','103.209.88.45','','','','','','113376798352679538062','','','','','','','','cse','16.3','80.45','148x1a0501'),(25,'148X1A0561','mdniloufar561@gmail.com','','md','1','','20-03-2018 13:17:45','103.42.251.38','','','','','','113863205929390490854','','','','','','','','cse','16.3','80.45','148X1A0590'),(26,'148X1A0590','skishratunnisa123@gmail.com','','ishratunnisa','1','','20-03-2018 13:17:53','103.42.251.38','','','','','','115644551587819821396','','','','','','','','cse','16.3','80.45','148X1A0561'),(27,'148X1A05A0','nagalakshmitamma3@gmail.com','','naga','1','','20-03-2018 13:30:18','103.42.251.38','','','','','','106163097824422849458','','','','','','','','cse','16.3','80.45','148X1A0581'),(28,'148x1a0557','ashokreddymandagiri8142@gmail.com','','Ashok Reddy','1','','20-03-2018 13:22:52','103.42.251.38','','','','','','101497167030698225949','','','','','','','','cse','16.3','80.45','148X1A05A0'),(29,'148X1A05A9','bindunanna@gmail.com','','Bindu','1','','20-03-2018 13:20:35','103.42.251.38','','','','','','102136407435598691891','','','','','','','','cse','16.3','80.45','148x1a0501'),(30,'148X1A0587','saikavya.25@gmail.com','','sai kavya','1','','20-03-2018 13:24:26','103.42.251.38','','','','','','105434340249219266067','','','','','','','','cse','16.3','80.45','148x1a0501'),(31,'148X1A0581','triveniramisetty1234@gmail.com','','triveni','1','','20-03-2018 13:29:45','103.42.251.38','','','','','','100038519236200181560','','','','','','','','cse','16.3','80.45','148X1A05A0'),(32,'158X5A0503','ravalitiriveedhi1@gmail.com','','ravali','1','','20-03-2018 13:37:47','103.42.251.38','','','','','','108040453563421124266','','','','','','','','cse','16.3','80.45','148x1a0501'),(33,'148X1A0509','b.rajeswari1997@gmail.com','','B','1','','09-04-2018 12:26:04','157.48.193.175','','','','','','100010919508515169591','','','','','','','','cse','17.3753','78.4744','148x1a0501');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `regno` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `timelinepic` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `terms` varchar(225) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `regno`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`, `timelinepic`, `terms`) VALUES (3,'google','109314509632941697966','Sai','Vyshnavi','148x1a0548','vyshnavi.konduru@gmail.com','','en','https://lh5.googleusercontent.com/-AmX8FlaKTJA/AAAAAAAAAAI/AAAAAAAAAEU/mRcxRrrsmJs/photo.jpg','https://plus.google.com/109314509632941697966','2018-01-06 07:46:11','2018-01-06 07:48:28','56845-received_1806844012952726.jpeg','1'),(4,'google','101735743140214894693','Manisha','Reddy','148x1a0553','manishamadana11@gmail.com','','en','https://lh6.googleusercontent.com/-DU7VkkBocEw/AAAAAAAAAAI/AAAAAAAAAAU/ZyyEX8HCE7M/photo.jpg','','2018-01-06 07:49:30','2018-03-19 07:10:40','56845-received_1806844012952726.jpeg','1'),(5,'google','115879777802361738717','Ramesh','Pilakatapu','158x1a0575','rameshpilakatapu732@gmail.com','male','en','https://lh6.googleusercontent.com/--HjyGNcFHRY/AAAAAAAAAAI/AAAAAAAACb0/mFIneXkQ1jc/photo.jpg','https://plus.google.com/115879777802361738717','2018-01-06 08:25:07','2018-01-06 08:26:59','56845-received_1806844012952726.jpeg','1'),(6,'google','112746062996962235196','Nagesh','Babu','148x1a0560','nageshaddagalla@gmail.com','male','en','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','https://plus.google.com/112746062996962235196','2018-01-07 17:33:32','2018-02-18 19:23:52','56845-received_1806844012952726.jpeg','1'),(7,'google','117033009062434565334','Harsha vardhan','pallapothu','148x1a0569','harshavenu4u@gmail.com','','en','https://lh6.googleusercontent.com/-tiOvQ2_rk1E/AAAAAAAAAAI/AAAAAAAAEW4/ppZIgX4f-bs/photo.jpg','https://plus.google.com/117033009062434565334','2018-01-08 02:04:51','2018-01-08 02:08:37','56845-received_1806844012952726.jpeg','1'),(8,'google','117112680980883386509','sravani','makam','148x1a0555','sravani6926@gmail.com','','en','https://lh5.googleusercontent.com/-3eL5DDRt9ws/AAAAAAAAAAI/AAAAAAAAABI/PD1vEWrXsS0/photo.jpg','https://plus.google.com/117112680980883386509','2018-01-08 02:53:24','2018-01-08 02:53:24','56845-received_1806844012952726.jpeg','1'),(9,'google','114721151586038885705','prasanna','kumar','148x1a0547','prasannakondabathini@gmail.com','','en','https://lh3.googleusercontent.com/-c9ztzmKLzQI/AAAAAAAAAAI/AAAAAAAAAEU/6kysjJ4XEDk/photo.jpg','https://plus.google.com/114721151586038885705','2018-01-08 07:55:32','2018-02-16 08:14:56','56845-received_1806844012952726.jpeg','1'),(10,'google','103377380932750198259','Sai','Lakshmi','148X1A05A3','sailakshmit20@gmail.com','','en','https://lh3.googleusercontent.com/-EbBcINUJSrY/AAAAAAAAAAI/AAAAAAAABMQ/6So-cj33tSA/photo.jpg','https://plus.google.com/103377380932750198259','2018-01-08 08:11:57','2018-03-30 03:17:20','56845-received_1806844012952726.jpeg','1'),(14,'google','102451300637690452408','Giridhar','Addagalla','148x1a0501','giridhar196@gmail.com','male','en','https://lh3.googleusercontent.com/-NKolpdlxLSM/AAAAAAAAAAI/AAAAAAAAACQ/qtr5AUeW8qA/photo.jpg','https://plus.google.com/102451300637690452408','2018-01-13 20:44:47','2018-04-17 04:28:18','56845-received_1806844012952726.jpeg','1'),(16,'google','109832466331054746681','jeevan','sandeep','148x1a05b1','jeevan.sandeep1996@gmail.com','','en','https://lh5.googleusercontent.com/-ONt-w1gtR9Y/AAAAAAAAAAI/AAAAAAAAAlE/tFvgDUlmRc4/photo.jpg','https://plus.google.com/109832466331054746681','2018-01-14 04:38:30','2018-01-14 04:38:30','56845-received_1806844012952726.jpeg','1'),(17,'google','103033307484520900938','Priyanka','Reddy','158x1a0588','priyanka.reddy2345678@gmail.com','','en-GB','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','','2018-01-14 07:42:30','2018-01-14 07:42:31','56845-received_1806844012952726.jpeg','1'),(18,'google','116973421851540894239','Nikhila','Grandhi','158X1A0536','grandhinikhila@gmail.com','','en','https://lh3.googleusercontent.com/-BpAUNQdpXrU/AAAAAAAAAAI/AAAAAAAACPA/jRcIuQHdD6c/photo.jpg','https://plus.google.com/116973421851540894239','2018-01-15 18:16:34','2018-01-15 18:16:34','56845-received_1806844012952726.jpeg','1'),(21,'google','115352708954686457903','John','Sandeep','148x1a0550','princejohnny777@gmail.com','','en','https://lh6.googleusercontent.com/-FoSGEeeM0Oo/AAAAAAAAAAI/AAAAAAAAABU/CwQdNCq0GyA/photo.jpg','https://plus.google.com/115352708954686457903','2018-02-14 07:50:01','2018-04-07 03:44:23','56845-received_1806844012952726.jpeg','1'),(22,'google','110548335710650756876','akhil','chandra','148x1a0512','akhilchandra16@gmail.com','','en','https://lh3.googleusercontent.com/-uqGTFlMPeEg/AAAAAAAAAAI/AAAAAAAAYAQ/zvaZPqbG8DU/photo.jpg','https://plus.google.com/110548335710650756876','2018-02-14 08:43:31','2018-02-20 07:19:03','56845-received_1806844012952726.jpeg','1'),(23,'google','101247167301501695199','Vasu','Tirumala','148x1a0506','atirumalavasu9669@gmail.com','','en','https://lh5.googleusercontent.com/-IK5OWfIUKD8/AAAAAAAAAAI/AAAAAAAAD-o/zhn30qmpUp8/photo.jpg','','2018-02-15 07:22:07','2018-02-16 08:29:32','56845-received_1806844012952726.jpeg','1'),(24,'google','102595132256905930954','gurramGopi','Yeswanth','148x1a0532','gurramgopiyeswanth24@gmail.com','male','en-GB','https://lh3.googleusercontent.com/-W1qdtD_nRM4/AAAAAAAAAAI/AAAAAAAAAtg/u_GuSUOyBTs/photo.jpg','https://plus.google.com/102595132256905930954','2018-02-15 07:34:13','2018-02-16 02:59:00','56845-received_1806844012952726.jpeg','1'),(25,'google','115948029099414758313','priyanka','mahimaluri','148x1a0554','priyankamahimaluri@gmail.com','','en','https://lh3.googleusercontent.com/-Vss6dZm-Olw/AAAAAAAAAAI/AAAAAAAAAsg/SetrvpQf-MY/photo.jpg','https://plus.google.com/115948029099414758313','2018-02-16 07:28:45','2018-02-16 07:40:05','56845-received_1806844012952726.jpeg','1'),(26,'google','115477941866495197748','chandra','sai','148x1a0503','chandrasai071@gmail.com','','en','https://lh6.googleusercontent.com/-Z1yLCliCQQc/AAAAAAAAAAI/AAAAAAAAXzU/sycHwkXaCMs/photo.jpg','https://plus.google.com/115477941866495197748','2018-02-16 08:04:29','2018-03-22 07:54:09','56845-received_1806844012952726.jpeg','1'),(27,'google','117600577926578628823','giridhar','addagalla','148x1a0568','giridharaddagalla@gmail.com','','en','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','','2018-02-18 18:33:55','2018-02-18 19:08:01','56845-received_1806844012952726.jpeg','1'),(28,'google','116135217186758162623','John','Sandeep','','johnsandeep98@gmail.com','','en','https://lh4.googleusercontent.com/-6KH47UuXf78/AAAAAAAAAAI/AAAAAAAAMAA/dV2IhveQFvQ/photo.jpg','https://plus.google.com/116135217186758162623','2018-02-20 08:52:06','2018-02-20 08:52:06','',''),(29,'google','114563270814157246882','vineela','reddy','148x1a0516','vineela.rch@gmail.com','female','en','https://lh6.googleusercontent.com/-sQgGSkSkfzU/AAAAAAAAAAI/AAAAAAAAABo/XcUiDacZkt8/photo.jpg','https://plus.google.com/114563270814157246882','2018-02-20 09:03:47','2018-02-20 09:13:42','','1'),(30,'google','108020568979359722280','bonagiri','anil kumar','1016','bonagirianilkumar83@gmail.com','male','en','https://lh5.googleusercontent.com/-LsYxNsSSIDM/AAAAAAAAAAI/AAAAAAAAACc/ycMzSqTtufE/photo.jpg','https://plus.google.com/108020568979359722280','2018-03-09 07:20:06','2018-03-09 08:33:19','',''),(31,'google','114668779713879830537','satya','sri','','s.srilakshmiparvathi@gmail.com','','en','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','','2018-03-10 04:54:01','2018-03-10 05:03:10','','1'),(32,'google','101224636787825582743','KHIT','WEB','511','webkhit@gmail.com','','en','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','','2018-03-10 05:02:29','2018-03-10 15:53:18','','1'),(33,'google','114601246130918910547','Chandana','Gollapudi','148x1a0529','chandanagollapudi97@gmail.com','','en','https://lh6.googleusercontent.com/-6Z5jRbnzjb8/AAAAAAAAAAI/AAAAAAAAAEw/LkRmeI132sk/photo.jpg','','2018-03-12 15:29:06','2018-03-12 16:22:22','','1'),(34,'google','114530205653343133244','Navi','Navii','158X1A0544','knreddy544@gmail.com','','en-GB','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','','2018-03-20 00:59:18','2018-04-07 07:05:56','','1'),(35,'google','118025206461900792107','Tanuja','Vutukuri','148X1A05B4','tanuja12372@gmail.com','female','en-GB','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg','https://plus.google.com/118025206461900792107','2018-03-20 01:53:00','2018-03-20 02:01:17','','1'),(36,'google','113376798352679538062','bavin sai teja','chebrolu','148X1A0513','bavinchebrolu97@gmail.com','male','en','https://lh5.googleusercontent.com/-RhFE7bo-_Nw/AAAAAAAAAAI/AAAAAAAAEn0/dFbCQLn2bnU/photo.jpg','https://plus.google.com/113376798352679538062','2018-03-20 03:04:32','2018-03-20 03:12:24','','1'),(37,'google','113863205929390490854','md','niloufar','148X1A0561','mdniloufar561@gmail.com','','en','https://lh4.googleusercontent.com/-T8zewHtQmyc/AAAAAAAAAAI/AAAAAAAAAGs/LIMgas8qQH4/photo.jpg','https://plus.google.com/113863205929390490854','2018-03-20 07:36:55','2018-03-20 07:47:45','','1'),(38,'google','115644551587819821396','ishratunnisa','sk','148X1A0590','skishratunnisa123@gmail.com','female','en','https://lh5.googleusercontent.com/-BL7gYaVotSE/AAAAAAAAAAI/AAAAAAAADKw/pCWxQY0Mm00/photo.jpg','https://plus.google.com/115644551587819821396','2018-03-20 07:37:32','2018-03-20 07:47:53','','1'),(39,'google','106163097824422849458','naga','lakshmi','148X1A05A0','nagalakshmitamma3@gmail.com','','en','https://lh4.googleusercontent.com/-Ol5_klSGKqI/AAAAAAAAAAI/AAAAAAAABfI/6LRWOSkr84k/photo.jpg','https://plus.google.com/106163097824422849458','2018-03-20 07:46:44','2018-03-20 08:00:18','','1'),(40,'google','101497167030698225949','Ashok Reddy','Akhi','148x1a0557','ashokreddymandagiri8142@gmail.com','','en','https://lh3.googleusercontent.com/-9vp1zX9COY8/AAAAAAAAAAI/AAAAAAAASHc/Mcb_9NGs9sI/photo.jpg','https://plus.google.com/101497167030698225949','2018-03-20 07:48:09','2018-03-20 07:52:52','','1'),(41,'google','102136407435598691891','Bindu','Nanna','148X1A05A9','bindunanna@gmail.com','female','en','https://lh5.googleusercontent.com/-s3UO-hdGlLo/AAAAAAAAAAI/AAAAAAAADZ0/ameu_Q_UlbY/photo.jpg','https://plus.google.com/102136407435598691891','2018-03-20 07:48:41','2018-03-20 07:50:35','','1'),(42,'google','105434340249219266067','sai kavya','latha','148X1A0587','saikavya.25@gmail.com','female','en','https://lh3.googleusercontent.com/-Cv9_A_H3OoU/AAAAAAAAAAI/AAAAAAAAAXc/9-87-hAQyxw/photo.jpg','https://plus.google.com/105434340249219266067','2018-03-20 07:50:20','2018-03-20 07:54:26','','1'),(43,'google','100038519236200181560','triveni','ramisetty','148X1A0581','triveniramisetty1234@gmail.com','','en','https://lh5.googleusercontent.com/-exYZzinmk_0/AAAAAAAAAAI/AAAAAAAADnU/ycrsSovkLek/photo.jpg','https://plus.google.com/100038519236200181560','2018-03-20 07:57:14','2018-03-20 07:59:45','','1'),(44,'google','108040453563421124266','ravali','tiriveedhi','158X5A0503','ravalitiriveedhi1@gmail.com','','en','https://lh6.googleusercontent.com/-IDDBXQ-qQVs/AAAAAAAAAAI/AAAAAAAAAeg/8OHuBXqYWm4/photo.jpg','','2018-03-20 08:04:36','2018-03-20 08:07:47','','1'),(45,'google','100010919508515169591','B','Rajeshwari','148X1A0509','b.rajeswari1997@gmail.com','','en','https://lh4.googleusercontent.com/--n_1T2C-tvQ/AAAAAAAAAAI/AAAAAAAAAFE/jQERv2FIEiE/photo.jpg','https://plus.google.com/100010919508515169591','2018-04-09 06:52:41','2018-04-09 06:56:04','','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'abcdproject'
--

--
-- Dumping routines for database 'abcdproject'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-19 21:16:17
