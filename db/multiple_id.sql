-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2019 at 02:12 PM
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
-- Database: `multiple_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiple_id`
--

DROP TABLE IF EXISTS `multiple_id`;
CREATE TABLE IF NOT EXISTS `multiple_id` (
  `image` varchar(222) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple_id`
--

INSERT INTO `multiple_id` (`image`, `image_id`) VALUES
('123.jpg', 42),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 42),
('01.jpg', 42),
('1.jpg', 42),
('123.jpg', 41),
('1.jpg', 41),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 41),
('01.jpg', 41),
('1016245.jpg', 40),
('1016245.jpg', 39),
('1016245.jpg', 38),
('Chocolate-Mousse-600x900.jpg', 37),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 34),
('1016245.jpg', 36),
('01.jpg', 35),
('01.jpg', 43),
('1.jpg', 43),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 43),
('123.jpg', 43),
('01.jpg', 44),
('1.jpg', 44),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 44),
('123.jpg', 44),
('01.jpg', 45),
('1.jpg', 45),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 45),
('123.jpg', 45),
('1016245.jpg', 45),
('', 46),
('', 47),
('', 48),
('', 49),
('', 50),
('', 51),
('', 52),
('', 53),
('01.jpg', 54),
('1.jpg', 54),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 54),
('123.jpg', 54),
('Maid with the Flaxen Hair.mp3', 55),
('1-2-years-17a4hv45z0fpi901-united-colors-of-benetton-original-imaexkh8zuz9dzvu.jpeg', 56),
('1.jpg', 58),
('1.jpg', 58),
('1.jpg', 58),
('1.jpg', 58),
('123.jpg', 59),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 60),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 61),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 62),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 63),
('chocolate-buttercream-recipe-2.jpg', 64),
('chocolate-buttercream-recipe-2.jpg', 65),
('056ab2990dbe96b1d070dae4ad11ebaf.jpg', 66),
('123.jpg', 67),
('1016245.jpg', 67),
('', 68),
('', 68),
('1.jpg', 0),
('123.png', 0),
('', 70),
('', 70),
('', 70),
('', 70),
('CYIRXJ-UsAAURvW.jpg', 71),
('Chrysanthemum.jpg', 71),
('', 57),
('3-Colors-High-Quality-Trending-Statement-Jewelry-Three-Tassel-Drops-Earring-Crystal-Dangle-Earring-For-Women.jpg_640x640.jpg', 83),
('14-1.jpg', 76),
('', 0),
('35-1.jpg', 76),
('14-1.jpg', 77),
('35-1.jpg', 77),
('14-1.jpg', 78),
('35-1.jpg', 78),
('bangles.jpg', 71),
('bb-gypsy-long-boho-skirt-bollywood-printed-clothing-long-circle-indian-skirt-belly-dance-skirt-flowy-jupe-gift-for-her-women-5b1985ce1.jpg', 71),
('131197663ZPFK6615281291512018340.jpg', 71),
('12345.png', 0),
('55.png', 0),
('bb-gypsy-long-boho-skirt-bollywood-printed-clothing-long-circle-indian-skirt-belly-dance-skirt-flowy-jupe-gift-for-her-women-5b1985ce1.jpg', 84),
('41NRl0Eb-tL.jpg', 84),
('', 82),
('bb-gypsy-long-boho-skirt-bollywood-printed-clothing-long-circle-indian-skirt-belly-dance-skirt-flowy-jupe-gift-for-her-women-5b1985ce1.jpg', 85),
('', 79),
('', 81),
('', 86);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
