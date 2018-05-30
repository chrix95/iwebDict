-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 02:08 AM
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
  `sentence` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`ID`, `word`, `english`, `meaning`, `sentence`, `category`) VALUES
(1, 'abasi', 'God', 'The name of the Christian religion.', 'Thanks be to God Almighty.', 'Religion'),
(2, 'ekom', 'Praise', 'Praise to the Almighty God', 'Give praises to God Almighty.', 'Religion'),
(3, 'akam', 'Prayer', 'Prayer offered to God', 'Let''s pray to God Almighty.', 'Religion'),
(4, 'unam', 'Meat', 'The flesh of an animal', 'I have bought meat.', 'Market'),
(5, 'adiaha', 'Daughter', 'The most senior female in the family.', 'Where is your senior daughter?', 'Family'),
(6, 'akpan', 'Son', 'The most senior female in the family.', 'Where is your senior son?', 'Family'),
(7, 'ebut', 'Goat', 'An animal with with horns and compact stomach', 'I will eat goat meat.', 'Animal'),
(8, 'ekpang', 'Spoon', 'A kitchen utensil for eating', 'Give me spoon to eat food.', 'Kitchen'),
(9, 'esio', 'Pot', 'A kitchen utensil used for cooking dishes', 'Open the pot.', 'Kitchen'),
(10, 'ima', 'Love', 'Having an affection for someone specially.', 'I have love for you.', 'Relationship'),
(11, 'ndito', 'Children', 'Group of siblings living under the the protectiion of parents', 'Take the children out.', 'Family'),
(12, 'nkong', 'Vegetable', 'Pumpkin leave used for cooking dishes', 'Let''s add some vegetables.', 'Market'),
(13, 'urua', 'Market', 'A place where buying and selling takes place.', 'I am going to the market.', 'Market');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
