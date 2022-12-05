-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 07:32 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rform1`
--

-- --------------------------------------------------------

--
-- Table structure for table `regform1`
--

DROP TABLE IF EXISTS `regform1`;
CREATE TABLE IF NOT EXISTS `regform1` (
  `name1` varchar(40) DEFAULT NULL,
  `e_mail1` varchar(40) DEFAULT NULL,
  `add1` varchar(60) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `phone1` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform1`
--

INSERT INTO `regform1` (`name1`, `e_mail1`, `add1`, `pincode`, `phone1`) VALUES
('Harshit Jain', 'jhgv@hfh', 'B-34/2845', '141001', '08054068360'),
('Harshit Jain', 'jhgv@hfh', 'B-34/2845', '141001', '08054068360'),
('Harshit', 'harshit@gmail.com', 'Haibowal', '141001', '8054068360'),
('muskaan', 'm@gmail.com', 'jagraon', '141001', '1234567891'),
('muskaan', 'm@gmail.com', 'jagraon', '141001', '1234567891'),
('Neha', 'neha@gmail', 'ludhiana', '141001', '9855608554'),
('Harshit', 'harshit@gmail.com', 'ludhiana', '141001', '6464'),
('Harshit Jain', 'jhgv@hfh', 'B-34/2845', '141001', '08054068360'),
('Harshit Jain', 'jhgv@hfh', 'B-34/2845', '141001', '08054068360'),
('Harshit', 'harshit@gmail.com', 'Haibowal', '141001', '8054068360'),
('muskaan', 'm@gmail.com', 'jagraon', '141001', '1234567891'),
('muskaan', 'm@gmail.com', 'jagraon', '141001', '1234567891'),
('Neha', 'neha@gmail', 'ludhiana', '141001', '9855608554'),
('Harshit', 'harshit@gmail.com', 'ludhiana', '141001', '6464');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
