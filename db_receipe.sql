-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2013 at 06:24 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_receipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipe`
--

CREATE TABLE IF NOT EXISTS `receipe` (
  `receipetitle` varchar(30) NOT NULL,
  `receipename` varchar(30) NOT NULL,
  `receipeingridents` longtext NOT NULL,
  `receipeprocedure` longtext NOT NULL,
  `receipegivenby` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `likereceipe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `receipe`
--

INSERT INTO `receipe` (`receipetitle`, `receipename`, `receipeingridents`, `receipeprocedure`, `receipegivenby`, `id`, `likereceipe`) VALUES
('chineese', 'chilly potato', '                small small potato pieces,onion capsicum,ginger paste and garlic paste ,oil,red chiily nad green chilly', ' Wash potatoes properly, peel and slice them length wise thinly. Mix the sliced potatoes with corn flour nicely. They should get coated nicely with corn flour.\r\n\r\nTo fry corn flour coated potatoes, heat oil in a pan. When oil gets heated up place corn flour coated potatoes in pan and fry till they get golden brown color. Fry all potatoes like wise and place them in as sieve so that excess oil gets strained out.', 'ashiya', 51, 3),
('North Indian', 'chilly paneer', '                Cottage cheese (paneer) ,Oil,Cornflour/ corn starch ,Garlic,crushed ,Green capsicums,cut into thick strips ', '        Cut the cottage cheese into medium sized diamonds. Heat sufficient oil in a wok, roll the cheese diamonds in one tablespoon of cornflour and deep fry on medium heat until the edges start to turn brown. Drain on absorbent paper. Mix the remaining cornflour in half a cup of water. Heat two-tablespoon oil in a wok, add the garlic and stir-fry for half a minute. Add the onion, capsicums and green chillies and continue to stir-fry for a couple of minutes. Add the fried cheese and stir in the vegetable stock. Add the salt, soy sauce and MSG and mix well. Add the cornflour mixture and cook on high heat stirring and tossing until the sauce thickens to coat the cheese and the vegetables. Serve hot immediately', 'Nidhi mittal', 52, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
