-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 02:01 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iwebdict`
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
  `domain` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`ID`, `word`, `english`, `meaning`, `domain`) VALUES
(1, 'abasi', 'God', 'The name of the Christian God.', 'Religion'),
(2, 'ekom', 'Praise', 'Praise to the Almighty God', 'Religion'),
(3, 'akam', 'Prayer', 'Prayer offered to God', 'Religion'),
(4, 'unam', 'Meat', 'The flesh of an animal', 'Market'),
(5, 'adiaha', 'Daughter', 'The most senior female in the family.', 'Family'),
(6, 'Akpan', 'Son', 'The most senior female in the family.', 'Family'),
(7, 'ebut', 'Goat', 'An animal with with horns and compact stomach', 'Animal'),
(8, 'ekpang', 'Spoon', 'A kitchen utensil for eating', 'Kitchen'),
(9, 'esio', 'Pot', 'A kitchen utensil used for cooking dishes', 'Kitchen'),
(10, 'ima', 'Love', 'Having an affection for someone specially.', 'Relationship'),
(11, 'ndito', 'Children', 'Group of siblings living under the the protectiion of parents', 'Family'),
(12, 'nkong', 'Vegetable', 'Pumpkin leave used for cooking dishes', 'Market'),
(13, 'urua', 'Market', 'A place where buying and selling takes place.', 'Market');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
