-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2014 at 09:30 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beyondbtc`
--
CREATE DATABASE IF NOT EXISTS `beyondbtc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `beyondbtc`;

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE IF NOT EXISTS `promocodes` (
  `code` varchar(64) NOT NULL,
  `price` double NOT NULL,
  `amount_total` int(11) NOT NULL,
  `amount_redeemed` int(11) NOT NULL DEFAULT '0',
  `amount_invalidated` int(11) NOT NULL DEFAULT '0' COMMENT 'Codes that were originally redeemed, but invoice never paid.',
  `start` bigint(20) NOT NULL DEFAULT '0',
  `end` bigint(20) NOT NULL DEFAULT '999999999999999',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE IF NOT EXISTS `signups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(32) NOT NULL,
  `creationtime` bigint(20) NOT NULL,
  `expirationtime` bigint(20) DEFAULT NULL,
  `invoiceid` varchar(255) DEFAULT NULL,
  `promocode` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
