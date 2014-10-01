-- phpMyAdmin SQL Dump
-- version 4.1.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2014 at 04:51 AM
-- Server version: 5.6.19
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erin`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `audio` varchar(55) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `email`, `phone`, `audio`, `bio`) VALUES
(1, 'erin@erinrubin.com', '213.282.8425', 'audio1.mp3', 'Hi there. Glad to see you here in my bio section. While I love talking, I will keep it short and to the point - what I sound like. You know when you hear a voice that sounds like someone you know? Not that you recognize the voice, but it feels familiar, comfortable. You know, the voice of the friendly mom who knows what tshe''s talking about without being condescending. The voice of the girl next door, that''s also kind of sexy. Or the voice of a trusted friend you hang out with - the fresh, sometimes even a little sassy voice that tells it like it is.  That''s me.\r\nI also enjoy baking, spending time with my two hairless dogs, and long walks on the beach. As long as the beach has freshly baked cookies \r\nand welcomes hairless dogs.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
