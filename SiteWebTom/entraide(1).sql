-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2018 at 09:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entraide`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `categorie` text NOT NULL,
  `corpsTexte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `login`, `categorie`, `corpsTexte`) VALUES
(23, 'tom', 'M3', '3ESS'),
(26, 'ro', 'P4', 'azfzd'),
(6, 'tom', 'P4', 'petit article'),
(25, 'tom', 'M3', 'aedfazdazd'),
(20, 'tom', 'M3', 'maths 3 tom'),
(19, 'tom', 'M3', 'maths 3 tom'),
(14, 'tom', 'P3', 'ph3');

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `email` text NOT NULL,
  `catSoPro` int(11) NOT NULL,
  `Privilege` int(11) NOT NULL DEFAULT '1',
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`, `email`, `catSoPro`, `Privilege`, `DateCreation`) VALUES
(1, 'tom', 'test', 'tom.rollet@epfedu.fr', 1, 3, '2018-02-24 09:10:26'),
(2, 'aze', 'test', 'aze', 5, 1, '2018-02-27 17:19:24'),
(3, 'ro', 'ro', 'ro', 2, 1, '2018-03-01 23:05:13'),
(4, 'ra', '$2y$10$e2GgVxyhwMexUnOBG570RekCnbsXHxKpYho38JAlgwrjqyImlq40O', 'ra', 2, 1, '2018-03-01 23:28:53'),
(5, 'qef', '$2y$10$.wjRwNdVbbT9Qo4VjGbkOOOdMQxxGLFrhDV4OTwxE.yI16ET0PlGq', 'ra', 3, 1, '2018-03-01 23:42:29'),
(6, 'to', '$2y$10$0bvKbQ3DHjPzKLfXXos8Qeip9C8DdVImsA1IfwAoXa7dXyEIdXi5.', 'to', 2, 1, '2018-03-01 23:56:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
