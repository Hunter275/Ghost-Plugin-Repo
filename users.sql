-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2014 at 07:38 AM
-- Server version: 5.6.12
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sellpurdue`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'Hunter275', 'ba4206d08d381814988e4c54c17dd4f3f36381102c0cc73d296685ada38ba454', '65b85cb446c29dd1', 'hunter@hunterthornsberry.com'),
(3, 'apenzato', '9ecb78778fcb7da0edc1435c78c26dfe619239e87f0c960b4eaeddc0c1358004', '24e6e8186b224334', 'apenzato@purdue.edu'),
(5, 'Test', '89a9a90a9e8fba03fce0bf7c24d744df261a90c3c2b657f47d35d558d3fe7a46', '3562646f6e398c68', 'hunterthor275@gmail.com'),
(22, 'OedipusRex', 'e504f185718303b68c47abfe06bcda680b4cf8eda3289a518aec96b89f0b60ef', '835c7f411f72c32', 'hunterthor275@haoaj.com'),
(23, 'Hunter', '451824d204ccd887f3b4d7d73211544b36cc67b04852a3e27991f9cf7561941f', '77194a3155ab86ad', 'hunterthor275@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
