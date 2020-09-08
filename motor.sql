/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - motor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`motor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `motor`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`nama`,`email`,`password`,`created_at`,`updated_at`) values 
(1,'abiyoga','abiyogakhusus@gmail.com','$2y$10$SsispuCSgr07yxklPwABzuiHoutg39ZdZR3K7r3TKS8Y11GzFEkLO','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(3,'hendra','abiyoga@email','1234',NULL,NULL);

/*Table structure for table `beranda_image` */

DROP TABLE IF EXISTS `beranda_image`;

CREATE TABLE `beranda_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beranda_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `beranda_image` */

insert  into `beranda_image`(`id`,`beranda_image`,`created_at`,`updated_at`) values 
(1,'motor1.jpg',NULL,NULL),
(2,'motor2.jpg',NULL,NULL),
(3,'motor3.jpg',NULL,NULL);

/*Table structure for table `imagemtr` */

DROP TABLE IF EXISTS `imagemtr`;

CREATE TABLE `imagemtr` (
  `id_ImgMtr` int(11) NOT NULL AUTO_INCREMENT,
  `id_motor` int(11) DEFAULT NULL,
  `image_tambahan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ImgMtr`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `imagemtr` */

insert  into `imagemtr`(`id_ImgMtr`,`id_motor`,`image_tambahan`,`created_at`,`update_at`) values 
(1,1,'ultra1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(2,1,'ultra2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(3,1,'ultra3.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),
(4,1,'ultra4.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `jenis_motor` */

DROP TABLE IF EXISTS `jenis_motor`;

CREATE TABLE `jenis_motor` (
  `idmotor` int(11) NOT NULL AUTO_INCREMENT,
  `namaMtr` varchar(255) NOT NULL,
  `jenisMtr` varchar(255) DEFAULT NULL,
  `hargaMtr` decimal(10,0) NOT NULL,
  `platMtr` varchar(255) DEFAULT NULL,
  `keteranganMtr` varchar(255) DEFAULT NULL,
  `imgmtr` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idmotor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_motor` */

insert  into `jenis_motor`(`idmotor`,`namaMtr`,`jenisMtr`,`hargaMtr`,`platMtr`,`keteranganMtr`,`imgmtr`,`updated_at`,`created_at`) values 
(1,'CB 125','Honda',35000000,'AB','mulus','Motor3.jpg','2020-01-03 23:52:20','2020-01-03 23:52:26'),
(2,'Honda','MTV',60000000,'AA','Mulus, tidak ada kerusakan berat','motor2.jpg','2020-01-03 23:51:14','2020-01-03 23:51:22'),
(3,'CB Twist 250 CC','Honda',30000000,'B','Mulus','motor1.jpg','2020-01-03 11:48:25','2020-01-03 11:48:25'),
(4,'Hurley','Custom',90000000,'D','Mulus, tapi nggak jalan','motor4.jpg','2020-01-04 00:05:06','2020-01-04 00:05:10'),
(5,'davidson','Custom',60000000,'BD','Dalam keadaan Mati','motor5.jpg','2020-01-04 00:07:14','2020-01-04 00:07:18'),
(6,'davidson','Custom',80000000,'AB','Bisa buat turing ke mekah','motor6.jpg','2020-01-04 00:10:16','2020-01-04 00:10:19'),
(7,'3CBD','Custom',100000000,'AB','Khusus Kontes','motor7.jpg','2020-01-04 00:13:05','2020-01-04 00:13:09'),
(8,'hond','honda',100000000,'AB','hhghghghgh','be9db456-89f8-48dc-b43e-a92b73071377.jfif','2020-01-11 07:32:17','2020-01-11 07:32:17');

/*Table structure for table `onderdil` */

DROP TABLE IF EXISTS `onderdil`;

CREATE TABLE `onderdil` (
  `idOnderdil` int(11) NOT NULL AUTO_INCREMENT,
  `hargaOnderdil` decimal(10,0) NOT NULL,
  `namaOnderdil` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `imgOnderdil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idOnderdil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `onderdil` */

insert  into `onderdil`(`idOnderdil`,`hargaOnderdil`,`namaOnderdil`,`created_at`,`updated_at`,`imgOnderdil`) values 
(2,90000,'blok','2020-01-08 15:34:37','2020-01-08 15:34:37','pesanan16.jpg'),
(3,70000,'kamprat','2020-01-08 15:35:34','2020-01-08 17:09:12','pesanan12.jpg');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=ucs2;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`nama`,`email`,`password`,`status`,`updated_at`,`created_at`) values 
(1,'abiyoga','abiyogakhusus@gmail.com','$2y$10$SsispuCSgr07yxklPwABzuiHoutg39ZdZR3K7r3TKS8Y11GzFEkLO',NULL,'2019-12-30 04:30:29','2019-12-30 04:30:29'),
(2,'hendra','hendra@gmail.com','$2y$10$r8yOoeSL015PgWVpgzsMpuXIQ.CiC5tanxZIn71eMtsGCFAfXrX8y',NULL,'2020-01-03 17:57:06','2020-01-03 17:57:06'),
(3,'mack','hendrakhusus@gmail.com','$2y$10$WETMcqaWy2ac4OtTTf9r5OOi.9fBprlsjiwoTv69M46IKgfy8sLbG',NULL,'2020-01-03 17:57:25','2020-01-03 17:57:25'),
(5,'Artipa','artipa@gmail.com','$2y$10$0pLDYR4NXe9SZ7bUgFDLkel0mSkGTsMVTVyhjehwQl20MKxzS34BC',NULL,'2020-01-08 18:54:58','2020-01-08 18:54:58');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesan` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id_pemesanan`,`id_pemesan`,`id_motor`,`total`,`created_at`,`updated_at`) values 
(5,1,7,100000000,'2020-01-05 08:17:14','2020-01-05 08:17:14'),
(6,1,4,90000000,'2020-01-05 08:58:40','2020-01-05 08:58:40'),
(8,2,4,90000000,'2020-01-08 18:00:50','2020-01-08 18:00:50'),
(9,2,3,30000000,'2020-01-08 18:29:07','2020-01-08 18:29:07'),
(11,1,5,60000000,'2020-01-11 07:29:38','2020-01-11 07:29:38');

/*Table structure for table `promo` */

DROP TABLE IF EXISTS `promo`;

CREATE TABLE `promo` (
  `idPromo` int(11) NOT NULL AUTO_INCREMENT,
  `idmotor` int(11) NOT NULL,
  `hargaPromo` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idPromo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `promo` */

insert  into `promo`(`idPromo`,`idmotor`,`hargaPromo`,`created_at`,`updated_at`) values 
(1,1,20000000,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(4,4,50000000,'2020-01-04 00:05:43','2020-01-04 00:05:46'),
(6,6,70000000,'2020-01-04 00:08:55','2020-01-04 00:08:57'),
(8,6,55000000,'2020-01-03 20:07:02','2020-01-03 20:07:02'),
(10,2,20000000,'2020-01-03 20:08:35','2020-01-03 20:08:35');

/*Table structure for table `registrasi_image` */

DROP TABLE IF EXISTS `registrasi_image`;

CREATE TABLE `registrasi_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `registrasi_image` */

insert  into `registrasi_image`(`id`,`nama`,`created_at`,`updated_at`) values 
(1,'registrasi1.jpg',NULL,NULL),
(2,'registrasi2.jpg',NULL,NULL),
(3,'registrasi3.jpg',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
