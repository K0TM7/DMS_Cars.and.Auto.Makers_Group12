-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2021 at 03:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otuniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `country`, `phone`, `company`, `password`) VALUES
(30, 'Tirth', 'patel', 'tirth0920@gmail.com', '11 elm st', 'toronto', 'canada', '4167815671', '', 'Sars2341s'),
(31, 'saro', 'karimi', 'sarokarimi7@outlook.com', '20 Parina', 'Oshawa', 'canada', '4167819004', 'OTU', 'Vatsal1234'),
(39, 'Vatsal', 'Patel', 'patel.vatsal@gmail.com', '11 elm', 'north york', 'canada', '6134559012', 'GM', 'Tirth1029');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

DROP TABLE IF EXISTS `saved`;
CREATE TABLE IF NOT EXISTS `saved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `profile_id`, `Year`, `Make`, `Model`) VALUES
(56, 31, 2021, 'Toyota', 'RAV4 AWD TRAIL / LIMITED 4DR SUV'),
(57, 31, 2021, 'Toyota', 'RAV4 AWD LE / XLE 4DR SUV'),
(58, 30, 2021, 'Toyota', 'COROLLA 4DR SEDAN HYBRID'),
(59, 30, 2021, 'Toyota', 'COROLLA 4DR SEDAN L/LE'),
(60, 31, 2021, 'Toyota', 'RAV4 AWD LE / XLE 4DR SUV'),
(61, 30, 2021, 'Ford', 'ESCAPE 4DR SUV 2.5L HYBRID FWD');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `saved`
--
ALTER TABLE `saved`
  ADD CONSTRAINT `test` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
