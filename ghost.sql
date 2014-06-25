-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2014 at 12:19 AM
-- Server version: 5.6.12
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ghost`
--
CREATE DATABASE IF NOT EXISTS `ghost` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ghost`;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `name` text NOT NULL,
  `author` text NOT NULL,
  `website` text NOT NULL,
  `date` text NOT NULL,
  `version` text NOT NULL,
  `files` text NOT NULL,
  `license` text NOT NULL,
  `summary` text NOT NULL,
  `tags` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=303 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`name`, `author`, `website`, `date`, `version`, `files`, `license`, `summary`, `tags`, `id`) VALUES
('Test Package', 'Hunter275', 'www.adventuresintechland.com', '2014-06-19', '0.1', 'code.js, code.css', 'GPL V3', 'This package allows you to use syntax hilighting based on Python', 'javascript, ghost, blog', 1),
('re', 'Hunter275', 'uas.com', '9599-05-05', '4', '', '', 'This is me', 'this, is me', 30),
('sdfj', '', 'nvn', '', '4', 'Servo_1.py', '', 'nvnvnv', 'nasdfas', 302);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
