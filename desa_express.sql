/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - desa_express
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`desa_express` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `desa_express`;

/*Table structure for table `deliveries` */

DROP TABLE IF EXISTS `deliveries`;

CREATE TABLE `deliveries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deliveryable_id` int(11) DEFAULT NULL,
  `deliveryable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `deliveries` */

insert  into `deliveries`(`id`,`deliveryable_id`,`deliveryable_type`,`consignee`,`delivery_date`,`instructions`,`created_at`,`updated_at`) values 
(1,1,'App\\Models\\DesaDispatch','Et quis eaque blandi','2008-07-28','Odio eu rerum cillum','2021-08-21 20:12:09','2021-08-21 20:12:09');

/*Table structure for table `desa_dispatches` */

DROP TABLE IF EXISTS `desa_dispatches`;

CREATE TABLE `desa_dispatches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `driver_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dispatcher_id` int(11) DEFAULT NULL,
  `truck_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `odometer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lumper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stop_off` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarp_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fsc_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fsc_amount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truck_expense` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_expense` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_expense_type` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_trip_number` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer_fuel_expense` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booked` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `desa_dispatches` */

insert  into `desa_dispatches`(`id`,`driver_username`,`dispatcher_id`,`truck_number`,`trailer`,`odometer`,`customer_name`,`primary_fee`,`primary_fee_type`,`additional`,`detention`,`lumper`,`stop_off`,`tarp_fee`,`fsc_amount`,`fsc_amount_type`,`invoice_advance`,`truck_expense`,`fuel_expense`,`fuel_expense_type`,`custom_trip_number`,`refer_fuel_expense`,`booked`,`status`,`created_at`,`updated_at`) values 
(1,'sudujekicu',2,'893','55','Iste adipisci commod','Boris Farmer','Qui veniam accusamu','Flat Free','Nihil voluptatum lib','Deserunt tenetur ear','Ut et eligendi eos','Qui est beatae odio','Dolore irure et nemo','Incididunt et nostru','Flat Fee','Dolor esse necessita',NULL,'24','Refer Fuel','920',NULL,0,0,'2021-08-21 20:12:09','2021-08-21 23:25:06');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2021_08_18_171403_create_desa_dispatches_table',2),
(6,'2021_08_18_180345_create_routes_table',3),
(7,'2021_08_18_180356_create_pickups_table',3),
(8,'2021_08_18_180417_create_deliveries_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('shafiq1901b@aptechgdn.com','$2y$10$nce06ZEPDdl0MjPpPDFE.uwA.b6L6ZObJ7iUFVCXNTlT/XDaLj0Zu','2021-08-18 16:27:20');

/*Table structure for table `pickups` */

DROP TABLE IF EXISTS `pickups`;

CREATE TABLE `pickups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pickupable_id` int(11) DEFAULT NULL,
  `pickupable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_required_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pickups` */

insert  into `pickups`(`id`,`pickupable_id`,`pickupable_type`,`shipper`,`pickup_date`,`bol`,`instructions`,`customer_required_info`,`weight`,`quantity`,`type`,`notes`,`created_at`,`updated_at`) values 
(1,1,'App\\Models\\DesaDispatch',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-21 20:12:09','2021-08-21 22:30:03');

/*Table structure for table `routes` */

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `routeable_id` int(11) DEFAULT NULL,
  `routeable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_stop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_stop_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `routes` */

insert  into `routes`(`id`,`routeable_id`,`routeable_type`,`route_stop`,`route_stop_date`,`instructions`,`notes`,`created_at`,`updated_at`) values 
(1,1,'App\\Models\\DesaDispatch','Distinctio Minus re','2013-08-13','Nostrud ducimus vol','Ipsam voluptatibus r','2021-08-21 20:12:09','2021-08-21 20:12:09');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`email`,`phone_number`,`email_verified_at`,`password`,`address`,`zip_code`,`city`,`country`,`state`,`role`,`username`,`remember_token`,`created_at`,`updated_at`) values 
(1,'fred','Aston','fredaston49@gmail.com',NULL,NULL,'$2y$10$yKA27ukgb.AtwNAKjnNPe.sRV4XhpggVbDMntFhzQIoOl3Dd9Lk2a',NULL,NULL,NULL,NULL,NULL,'desa driver','fred_1','gEGdvXbWcqsiiUjVhWJgIrNMRcvo06NrM1Skyb2b2zCxKzuUu4MH4H2Az2US','2021-07-23 20:33:29','2021-08-17 21:32:34'),
(2,'Desa','Dispatcher','desadispatcher@gmail.com','1242225698',NULL,'$2y$10$cX6QYlhi7iD8tQw9qpDekeuXrJ4YYrthNJpgVhWEaBqjyJgHMOsAq','Huston','1267','Huston','US','Huston','desa dispatcher',NULL,'9QRjuo5BS0VZU7zHuOiKAMHz48UPpTeEltGutuJ8DW7WEOtzURnJC6j5Fc9W','2021-07-26 17:00:02','2021-08-20 18:36:16'),
(13,'Andre Bulger',NULL,'andrebulger@gmail.com',NULL,NULL,'$2y$10$Eu2VPE/kmJxVXby825x5SOSbE.1wJVJiiiNEStcJVRx0c0M8D514q',NULL,NULL,NULL,NULL,NULL,'desa driver','Andre_13',NULL,'2021-08-18 23:50:25','2021-08-18 23:50:25'),
(15,'Dash',NULL,'dash@gmail.com',NULL,NULL,'$2y$10$1dl0DxBZrjOrEn/HLRAh5uCe6nUkesUPCMheJ3BBGGgXAts33FYv2',NULL,NULL,NULL,NULL,NULL,'desa driver','Dash_15',NULL,'2021-08-18 23:54:37','2021-08-18 23:54:37'),
(16,'Mario Lechuga',NULL,'mariolechuga@gmail.com',NULL,NULL,'$2y$10$T89px9e0zqDPk2ps9cqRDuEQ7AR4R/oNc/zOR03JTd/JN2junwHxC',NULL,NULL,NULL,NULL,NULL,'desa driver','Mario _16',NULL,'2021-08-18 23:58:13','2021-08-18 23:58:13'),
(17,'martinez',NULL,'martinez@gmail.com',NULL,NULL,'$2y$10$JJIERlOwkI9hF2NfpLXc/OqYWZu2.xK14MzO8igykl9FyB.ovd4Fa',NULL,NULL,NULL,NULL,NULL,'desa driver','martinez_17',NULL,'2021-08-18 23:59:54','2021-08-18 23:59:54'),
(18,'Mustafa Shakir',NULL,'MustafaShakir@gmail.com',NULL,NULL,'$2y$10$iASFMBYX.GhbzXhIIIqbTeATYtzkIsXq0kFKBfJFRFmq6tMDBpaOC',NULL,NULL,NULL,NULL,NULL,'desa driver','Mustafa Shakir_18',NULL,'2021-08-19 00:01:06','2021-08-19 00:01:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
