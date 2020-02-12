/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_kedaiku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kedaiku` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_kedaiku`;

/*Table structure for table `id_role` */

DROP TABLE IF EXISTS `id_role`;

CREATE TABLE `id_role` (
  `id_role` int(10) NOT NULL AUTO_INCREMENT,
  `role` enum('Staff','Manager','Customer') DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `id_role` */

/*Table structure for table `tb_categories` */

DROP TABLE IF EXISTS `tb_categories`;

CREATE TABLE `tb_categories` (
  `id_categories` int(255) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_categories` */

/*Table structure for table `tb_detail_trx` */

DROP TABLE IF EXISTS `tb_detail_trx`;

CREATE TABLE `tb_detail_trx` (
  `id_detail_trx` int(255) NOT NULL AUTO_INCREMENT,
  `id_transaction` int(255) DEFAULT NULL,
  `id_items` int(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(255) DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  PRIMARY KEY (`id_detail_trx`),
  KEY `id_transaction` (`id_transaction`),
  KEY `id_items` (`id_items`),
  CONSTRAINT `tb_detail_trx_ibfk_1` FOREIGN KEY (`id_transaction`) REFERENCES `tb_transaction` (`id_transaction`),
  CONSTRAINT `tb_detail_trx_ibfk_2` FOREIGN KEY (`id_items`) REFERENCES `tb_items` (`id_items`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_trx` */

/*Table structure for table `tb_items` */

DROP TABLE IF EXISTS `tb_items`;

CREATE TABLE `tb_items` (
  `id_items` int(255) NOT NULL AUTO_INCREMENT,
  `id_categories` int(255) DEFAULT NULL,
  `items_name` varchar(255) DEFAULT NULL,
  `stock` int(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `price_buy` double DEFAULT NULL,
  `price_sell` double DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_items`),
  KEY `id_categories` (`id_categories`),
  CONSTRAINT `tb_items_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `tb_categories` (`id_categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_items` */

/*Table structure for table `tb_transaction` */

DROP TABLE IF EXISTS `tb_transaction`;

CREATE TABLE `tb_transaction` (
  `id_transaction` int(255) NOT NULL AUTO_INCREMENT,
  `dos` date DEFAULT NULL,
  `id_customer` int(255) DEFAULT NULL,
  `id_staff` int(255) DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id_transaction`),
  KEY `id_user` (`id_customer`),
  KEY `id_staff` (`id_staff`),
  CONSTRAINT `tb_transaction_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_user` (`id`),
  CONSTRAINT `tb_transaction_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_transaction` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_role` int(255) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `user_pict` blob DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `active` enum('Active','Non-Active') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `id_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
