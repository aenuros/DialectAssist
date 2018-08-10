-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 06:03 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pset7`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(15) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `race` int(1) NOT NULL,
  `ccmerge` tinyint(1) NOT NULL,
  `ppmerge` tinyint(1) NOT NULL,
  `m3merge` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `state`, `gender`, `race`, `ccmerge`, `ppmerge`, `m3merge`) VALUES
(19, 'Pennsylvania', 0, 2, 1, 0, 1),
(20, 'Georgia', 0, 2, 1, 1, 0),
(21, 'New York', 0, 4, 0, 0, 0),
(22, 'Texas', 1, 3, 0, 0, 0),
(23, 'New Jersey', 0, 2, 0, 0, 0),
(24, 'Florida', 1, 1, 1, 1, 1),
(25, 'Florida', 1, 2, 1, 0, 1),
(29, 'Florida', 1, 2, 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
