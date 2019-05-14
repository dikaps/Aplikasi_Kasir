/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.31-MariaDB : Database - db_andika
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_andika` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_andika`;

/*Table structure for table `detail_order` */

DROP TABLE IF EXISTS `detail_order`;

CREATE TABLE `detail_order` (
  `id_detail_order` char(20) NOT NULL,
  `id_order` char(20) DEFAULT NULL,
  `id_masakan` char(20) DEFAULT NULL,
  `id_minuman` char(20) DEFAULT NULL,
  `keterangan` enum('Pending','OK') DEFAULT 'Pending',
  `status_detail_order` enum('Sudah Diantar','Belum Diantar') DEFAULT 'Belum Diantar',
  PRIMARY KEY (`id_detail_order`),
  KEY `id_masakan` (`id_masakan`),
  KEY `id_order` (`id_order`),
  KEY `id_minuman` (`id_minuman`),
  CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_masakan`) REFERENCES `masakan` (`id_masakan`),
  CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orderan` (`id_order`),
  CONSTRAINT `detail_order_ibfk_3` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id_minuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_order` */

insert  into `detail_order`(`id_detail_order`,`id_order`,`id_masakan`,`id_minuman`,`keterangan`,`status_detail_order`) values ('Dto0001','Odr0001','MSK0004','Mnm0001','OK','Sudah Diantar'),('Dto0002','Odr0001','MSK0001','Mnm0002','OK','Sudah Diantar');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` char(20) NOT NULL,
  `nama_level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id_level`,`nama_level`) values ('1','Admin'),('2','Pemilik'),('3','Kasir'),('4','Pelayan'),('5','Pelanggan');

/*Table structure for table `masakan` */

DROP TABLE IF EXISTS `masakan`;

CREATE TABLE `masakan` (
  `id_masakan` char(20) NOT NULL,
  `nama_masakan` varchar(255) DEFAULT NULL,
  `harga` char(20) DEFAULT NULL,
  `status_masakan` enum('Tersedia','Habis') DEFAULT 'Tersedia',
  PRIMARY KEY (`id_masakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masakan` */

insert  into `masakan`(`id_masakan`,`nama_masakan`,`harga`,`status_masakan`) values ('MSK0001','Goreng Jengkol','5000','Tersedia'),('MSK0002','Tempe','1000','Tersedia'),('MSK0003','Tahu','1000','Tersedia'),('MSK0004','Tumis Kangkung','5000','Tersedia'),('MSK0005','Karedok','9000','Tersedia'),('MSK0006','Oreg Tempe','5000','Tersedia');

/*Table structure for table `minuman` */

DROP TABLE IF EXISTS `minuman`;

CREATE TABLE `minuman` (
  `id_minuman` char(20) NOT NULL,
  `nama_minuman` char(20) DEFAULT NULL,
  `harga` char(255) DEFAULT NULL,
  `status_minuman` enum('Tersedia','Habis') DEFAULT 'Tersedia',
  PRIMARY KEY (`id_minuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `minuman` */

insert  into `minuman`(`id_minuman`,`nama_minuman`,`harga`,`status_minuman`) values ('Mnm0001','Es Teh Manis','3000','Tersedia'),('Mnm0002','Kopi Susu','4000','Tersedia'),('Mnm0003','Kopi Hitam','3000','Tersedia'),('Mnm0004','Jus Jeruk','4000','Tersedia'),('Mnm0005','Es Kelapa Muda','8000','Tersedia');

/*Table structure for table `orderan` */

DROP TABLE IF EXISTS `orderan`;

CREATE TABLE `orderan` (
  `id_order` char(20) NOT NULL,
  `no_meja` char(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_user` char(20) DEFAULT NULL,
  `keterangan` enum('Belum Dipesan','Sudah Dipesan') DEFAULT 'Belum Dipesan',
  `status_order` enum('Sudah diproses','Belum diproses') DEFAULT 'Belum diproses',
  PRIMARY KEY (`id_order`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `orderan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `orderan` */

insert  into `orderan`(`id_order`,`no_meja`,`tanggal`,`id_user`,`keterangan`,`status_order`) values ('Odr0001','MJ0001','0000-00-00','Id0006','Belum Dipesan','Belum diproses'),('Odr0002','MJ0002',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0003','MJ0003','2019-05-04','Id0005','Belum Dipesan','Belum diproses'),('Odr0004','MJ0004',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0005','MJ0005',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0006','MJ0006',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0007','MJ0007',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0008','MJ0008',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0009','MJ0009',NULL,NULL,'Belum Dipesan','Belum diproses'),('Odr0010','MJ0010',NULL,NULL,'Belum Dipesan','Belum diproses');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` char(20) NOT NULL,
  `id_user` char(20) DEFAULT NULL,
  `id_order` char(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_bayar` char(20) DEFAULT NULL,
  `status_pembayaran` enum('Sudah Dibayar','Belum Dibayar') DEFAULT 'Belum Dibayar',
  PRIMARY KEY (`id_transaksi`),
  KEY `id_user` (`id_user`),
  KEY `id_order` (`id_order`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orderan` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_user`,`id_order`,`tanggal`,`total_bayar`,`status_pembayaran`) values ('T0001','Id0005','Odr0001','2019-05-03','8000','Sudah Dibayar'),('T0002','Id0006','Odr0001','2019-05-04','9000','Sudah Dibayar');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` char(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `id_level` char(20) DEFAULT '5',
  PRIMARY KEY (`id_user`),
  KEY `id_level` (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama_user`,`id_level`) values ('Id0001','Andika','21232f297a57a5a743894a0e4a801fc3','Andika Permana Sidiq','1'),('Id0002','Inkaps','58399557dae3c60e23c78606771dfa3d','Inka Puspitasari','2'),('Id0003','IzKun','c7911af3adbd12a035b289556d96470a','Rizky Aulia Pradipta','3'),('Id0004','Ramdan','511cc40443f2a1ab03ab373b77d28091','Ramdan Riyadi','4'),('Id0005','inkaps@gmail.com','cbb82155b48a41415a15a6572e4720c9','Inka Puspitasari','5'),('Id0006','andika@gmail.com','e9ce15bcebcedde2cb3cf9fe8f84fc0c','Andika Permana Sidiq','5');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
