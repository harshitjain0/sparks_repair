-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 07:33 AM
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
-- Database: `rform2`
--

-- --------------------------------------------------------

--
-- Table structure for table `regform2`
--

DROP TABLE IF EXISTS `regform2`;
CREATE TABLE IF NOT EXISTS `regform2` (
  `name1` varchar(40) DEFAULT NULL,
  `e_mail1` varchar(40) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform2`
--

INSERT INTO `regform2` (`name1`, `e_mail1`, `comments`) VALUES
('rtyi', 'yyjjj@hm', 'yyuu'),
('Harshit', 'harshitjain@gmail.com', 'hello'),
('Harsh', '123@gmail.com', 'hey!!'),
('Harsh', '123@gmail.com', 'human'),
('Neha Sharma', 'nehasharma@gmail.com', 'you got full marks');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
