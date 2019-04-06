-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2019 at 02:11 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image_upload1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(122) NOT NULL AUTO_INCREMENT,
  `name` varchar(122) NOT NULL,
  `age` int(122) NOT NULL,
  `city` varchar(122) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `city`, `image`) VALUES
(1, 'dhivya', 23, 'city', '3165SL01_2.jpg'),
(2, 'lakshmi', 12, 'london', '4-2.jpg'),
(3, 'rajesh124', 22, 'city', '12345.png'),
(22, 'dhivya', 33, 'puducherry', 'banner5.jpg'),
(5, 'Rani', 45, 'pondy', 'm3.jpg'),
(12, 'Vasu', 22, 'city', 'banner.jpg'),
(13, 'mohana', 13, 'ggggg', '1479389928_1_0df8f23fbc0c2b7b46bbc1a945c82278_39.jpg'),
(20, 'priya', 34, 'Madurai', 'ethical-hacking-powerpoint-7-638.jpg'),
(21, 'selvi', 55, 'karaikudi', '35-1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
