-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.36 - MySQL Community Server (GPL)
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


-- Dumping database structure for php8_crud_db
DROP DATABASE IF EXISTS `php8_crud_db`;
CREATE DATABASE IF NOT EXISTS `php8_crud_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `php8_crud_db`;

-- Dumping structure for table php8_crud_db.employees
DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php8_crud_db.employees: 4 rows
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `name`, `address`, `salary`, `photo`) VALUES
	(1, 'Seng Sourng', 'Siem Reap', 500, '2.png'),
	(2, 'Keo Thida', 'Phnom Penh', 450, '1_gAqA0XSEHmaz6OOgNFV4qg.png'),
	(3, 'Keo Sompos', 'Battambang', 350, 'book-in.png'),
	(4, 'áž˜áž¶ážŸ áž’áž¸ážáž¶', 'ážŸáŸ€áž˜ážšáž¶áž”', 560, 'asupport_new.png');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table php8_crud_db.info
DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php8_crud_db.info: 3 rows
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`id`, `name`, `address`) VALUES
	(1, 'Jaden Frye', 'Et autem excepteur s'),
	(2, 'Byron Randall', 'Esse ea tempore ut '),
	(3, 'Amela Rasmussen', 'Adipisicing facere i');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Dumping structure for table php8_crud_db.register
DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` int(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php8_crud_db.register: ~0 rows (approximately)

-- Dumping structure for table php8_crud_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php8_crud_db.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
	(1, 'sourng', '$2y$10$tcRNcK4xyvtgkWUpKWmV3OHDe/TIjMQHKdSlzxhBjS2gGryUn57PO', '2023-01-30 17:30:46'),
	(2, 'kanika', '$2y$10$tcRNcK4xyvtgkWUpKWmV3OHDe/TIjMQHKdSlzxhBjS2gGryUn57PO', '2023-01-30 17:31:18'),
	(3, 'dara', '$2y$10$tcRNcK4xyvtgkWUpKWmV3OHDe/TIjMQHKdSlzxhBjS2gGryUn57PO', '2023-02-06 08:24:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
