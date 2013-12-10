-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2013 at 04:38 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_posted` date NOT NULL,
  `is_approved` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `email`, `date_posted`, `is_approved`) VALUES
(1, 'John', 'Hello there, how are you?', 'john@yahoo.com', '2013-09-03', 'N'),
(2, 'Anna', 'Have a nice day!', 'anna@yahoo.com', '2013-07-01', 'N'),
(3, 'Mark', 'Pay your bill now!', 'mark@yahoo.com', '2013-06-08', 'N'),
(5, 'Darene', 'Hello World :)', 'dhamergenio@gmail.com', '0000-00-00', 'N'),
(6, 'Dayene', 'HI :)', 'darenemergenio@gmail.com', '2013-11-23', 'N'),
(8, 'Nathaniel', 'Hello World.', 'nathaniel.070201@gmail.com', '2013-11-24', 'N'),
(11, 'Dayene', 'Peace :)', 'dayene@yahoo.com', '2013-11-24', 'N'),
(13, 'Darene', 'Good Morning ^-^', 'dhamergenio@gmail.com', '2013-11-25', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
