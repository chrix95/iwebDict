-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 09:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdict`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `meaning` text NOT NULL,
  `sound` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`ID`, `word`, `english`, `meaning`, `sound`, `domain`) VALUES
(1, 'abasi', 'God', 'The name of the Christian God.', 'sound/test.mp3', 'Religion'),
(2, 'ekom', 'Praise', 'Praise to the Almighty God', 'sound/test.mp3', 'Religion'),
(3, 'akam', 'Prayer', 'prayer offered to God', 'sound/test1.mp3', 'Religion'),
(4, 'unam', 'Meat', 'the flesh of an animal', 'sound/test4.mp3', 'Market');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
