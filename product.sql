-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for junior_developer_task_test
CREATE DATABASE IF NOT EXISTS `junior_developer_task_test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `junior_developer_task_test`;

-- Dumping structure for table junior_developer_task_test.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(20,2) unsigned NOT NULL,
  `attributes` enum('MB','Kg','HxWxL') NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table junior_developer_task_test.product: ~12 rows (approximately)
INSERT INTO `product` (`id`, `name`, `price`, `attributes`, `value`) VALUES
	('B-AND-KOSL', 'United Macedonia', 99.99, 'Kg', '2'),
	('B-DAR-SOKO', 'Belomorska Macedonia', 78.59, 'Kg', '1.7'),
	('B-DAR-ZOLT', 'Macedonia', 98.79, 'Kg', '1.2'),
	('B-ZOR-RUME', 'One name Macedonia', 17.56, 'Kg', '1.15'),
	('D-BLA-POPO', 'Frog Green', 239.88, 'HxWxL', '40x45x40'),
	('D-DEJ-RIST', 'Modern Gray Desk', 980.00, 'HxWxL', '25x35x35'),
	('D-ELE-KRST', 'for her', 409.33, 'HxWxL', '24x30x30'),
	('D-STE-TIGA', 'Black Desk', 400.00, 'HxWxL', '20x30x30'),
	('G-ANT-KRST', 'Kick Box 2023', 28.71, 'MB', '349'),
	('G-DAR-KRST', 'newGame2022', 40.01, 'MB', '40'),
	('G-ELE-MARK', 'Free Football 2022', 51.01, 'MB', '188'),
	('G-VLA-KRST', 'Open World 2025', 33.45, 'MB', '299');

-- Dumping structure for procedure junior_developer_task_test._insert_product
DELIMITER //
CREATE PROCEDURE `_insert_product`(
	IN `id_param` VARCHAR(50),
	IN `name_param` VARCHAR(50),
	IN `price_param` DECIMAL(20,2),
	IN `attributes_param` ENUM('MB','Kg','HxWxL'),
	IN `value_param` VARCHAR(50)
)
BEGIN
INSERT INTO product(id,`name`,price,attributes,`value`)
VALUES(id_param,name_param,price_param,attributes_param,value_param);
END//
DELIMITER ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
