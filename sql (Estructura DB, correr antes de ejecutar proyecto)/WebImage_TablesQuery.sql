-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4800
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for WebImage_DB
CREATE DATABASE IF NOT EXISTS `WebImage_DB` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `WebImage_DB`;


-- Dumping structure for table WebImage_DB.tblimages
CREATE TABLE IF NOT EXISTS `tblimages` (
  `ImageId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ImageTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `ImageUrl` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ImageData` mediumblob NOT NULL,
  `UserId` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`ImageId`),
  KEY `FK_tblimages_tblusers` (`UserId`),
  CONSTRAINT `FK_tblimages_tblusers` FOREIGN KEY (`UserId`) REFERENCES `tblusers` (`UserId`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table WebImage_DB.tblimages: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblimages` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblimages` ENABLE KEYS */;


-- Dumping structure for table WebImage_DB.tblusers
CREATE TABLE IF NOT EXISTS `tblusers` (
  `UserId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `isConfirmed` bit(1) DEFAULT b'0',
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `UserId` (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table WebImage_DB.tblusers: ~9 rows (approximately)
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
INSERT INTO `tblusers` (`UserId`, `UserName`, `Password`, `Email`, `isConfirmed`) VALUES
	(1, 'mglnglmejia', '$2y$10$Pv1CDCbyL4l2Tw5ppxCfkupELKfofEiblHY1v4Y0U3D', NULL, b'0'),
	(2, 'miguelangelm406', '$2y$10$ahQdva8E9KJUEAEpnMZxSuFZApFr2RoaCCeHXiE7irp', NULL, b'0'),
	(3, 'megamix32', '$2y$10$LBRScJK63KTaklTQC9rzgeU7AP/kv3k2Xhk8NwbDvsI', NULL, b'0'),
	(4, 'miguelangel40692', '$2y$10$25Z1mMEl//mN0YRtIOJe3OUK7nWd2CRVGDRy0BXDD0d', NULL, b'0'),
	(5, 'shirley.manson', '$2y$10$EeQHzBtCxMAxbZaT3L4NrOLQtU/s/dNi2Nwb3KheMVT', NULL, b'0'),
	(6, 'garbage.lover', '$2y$10$0mdOCfh2DMLMn2TIhtD4wu45La.5CdozqlZ3Kr/PYh/', NULL, b'0'),
	(7, 'VelvetRed', '$2y$10$qudB0XWnAHQ8EN8k.miExuBtSAt2E/aLfdA.acnZxKA', NULL, b'0'),
	(8, 'Korra', '$2y$10$PsvZ8ChDBqTlnbOXkO77deXYB.NCS7AEwoIecwSBMOf', NULL, b'0'),
	(9, 'Tenzin', '$2y$10$ceku06B2iKlrKJigBMs1Z.OCSC8Yh77WLjs3aC3tIHj', NULL, b'0'),
	(10, 'Goddamn.Cake', '$2y$10$pWqoe0DpMUikcgxtZtU2teH.akiVko8Nu/JnI3hKotY', NULL, b'0');
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
