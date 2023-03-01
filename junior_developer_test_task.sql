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
  `attributes` enum('Size','Weight','Dimension') NOT NULL,
  `height` smallint(4) unsigned DEFAULT NULL,
  `width` smallint(4) unsigned DEFAULT NULL,
  `length` smallint(4) unsigned DEFAULT NULL,
  `mb` mediumint(5) unsigned DEFAULT NULL,
  `kg` smallint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table junior_developer_task_test.product: ~18 rows (approximately)
INSERT INTO `product` (`id`, `name`, `price`, `attributes`, `height`, `width`, `length`, `mb`, `kg`) VALUES
	('123123123', '21asdasdasd', 1221.00, 'Size', 0, 0, 0, 0, 100),
	('B-AND-KOSL', 'United Macedonia', 100.00, 'Weight', NULL, NULL, NULL, NULL, 13),
	('B-DAR-SOKO', 'Belomorska Macedonia', 79.00, 'Weight', NULL, NULL, NULL, NULL, 12),
	('B-DAR-ZOLT', 'Macedonia', 99.00, 'Weight', NULL, NULL, NULL, NULL, 11),
	('B-ZOR-RUME', 'One name Macedonia', 18.00, 'Weight', NULL, NULL, NULL, NULL, 10),
	('dasdasdasd', 'dasdasd', 123123.00, 'Dimension', 10, 10, 10, 0, 0),
	('G-ANT-KRST', 'Kick Box 2023', 29.00, 'Size', NULL, NULL, NULL, 33, NULL),
	('G-DAR-KRST', 'newGame2022', 40.00, 'Size', NULL, NULL, NULL, 333, NULL),
	('G-ELE-MARK', 'Free Football 2022', 51.00, 'Size', NULL, NULL, NULL, 3, NULL),
	('G-VLA-KRST', 'Open World 2025', 33.00, 'Size', NULL, NULL, NULL, 123, NULL),
	('nenenennene', 'hahahahahah', 5.00, 'Size', 10, 10, 10, 123, NULL),
	('proba', 'hahahahahah', 5.50, 'Dimension', 12, 12, 12, 0, NULL),
	('proba1', 'hhhhhhhhhhh', 5.50, 'Size', NULL, NULL, NULL, NULL, NULL),
	('proba2', 'proba2', 5.50, 'Size', NULL, NULL, NULL, NULL, NULL),
	('proba3', 'proba3', 1.30, 'Size', NULL, NULL, NULL, NULL, NULL),
	('proba4', 'proba4', 1.23, 'Size', NULL, NULL, NULL, NULL, NULL),
	('SADASDA', 'QWQWQQ', 1112.00, 'Size', NULL, NULL, NULL, NULL, NULL),
	('sasadsadas', 'dasdasd', 212121.00, 'Size', NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table junior_developer_task_test.size
CREATE TABLE IF NOT EXISTS `size` (
  `size_id` int(11) DEFAULT NULL,
  `size` set('Size') NOT NULL DEFAULT 'Size',
  `mb` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table junior_developer_task_test.size: ~0 rows (approximately)
INSERT INTO `size` (`size_id`, `size`, `mb`) VALUES
	(1, 'Size', 200);

-- Dumping structure for procedure junior_developer_task_test._delete_product
DELIMITER //
CREATE PROCEDURE `_delete_product`(
	IN `id_param` VARCHAR(50)
)
BEGIN
DELETE FROM product
WHERE id=id_param;
END//
DELIMITER ;

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

-- Dumping structure for procedure junior_developer_task_test._select_product
DELIMITER //
CREATE PROCEDURE `_select_product`()
BEGIN
SELECT id,`name`,price,attributes,CONCAT(height,"x",width,"x",`length`) AS `dimension`,CONCAT(kg," ","KG") as weight,CONCAT (mb," ","MB") AS size FROM product;
END//
DELIMITER ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
