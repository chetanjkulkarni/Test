-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2015 at 08:41 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movies_Data`
--

CREATE TABLE IF NOT EXISTS `Movies_Data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `plot` varchar(1000) NOT NULL,
  `rated` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `metascore` varchar(50) NOT NULL,
  `imdb_id` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `released` varchar(50) NOT NULL,
  `imdb_rating` float NOT NULL,
  `awards` varchar(150) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `actors` varchar(100) NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `response` varchar(100) NOT NULL,
  `imdb_votes` bigint(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
