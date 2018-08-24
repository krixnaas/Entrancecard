-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2018 at 03:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `entrance_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE IF NOT EXISTS `tblregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `sur_name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `g_firstname` varchar(50) NOT NULL,
  `g_midname` varchar(50) NOT NULL,
  `g_surname` varchar(50) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `optno` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `wardno1` int(10) NOT NULL,
  `city1` varchar(50) NOT NULL,
  `state1` varchar(100) NOT NULL,
  `wardno2` int(10) NOT NULL,
  `city2` varchar(50) NOT NULL,
  `state2` varchar(100) NOT NULL,
  `education` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `program` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`id`, `first_name`, `mid_name`, `sur_name`, `dob`, `gender`, `g_firstname`, `g_midname`, `g_surname`, `nationality`, `contactno`, `optno`, `email`, `wardno1`, `city1`, `state1`, `wardno2`, `city2`, `state2`, `education`, `grade`, `program`, `photo`, `date`) VALUES
(3, 'Krishna', '', 'Shrestha', '1993-06-04', 'Male', 'Dhan', 'Bdr.', 'Shrestha', 'Nepali', '9846362155', '', 'krixnaas@gmail.com', 1, 'Pokhara', 'Kaski', 1, 'Pokhara', 'Kaski', 'Diploma', '1st', 'Computer', 'http://localhost/Entrancecard/image/7c4b838ed5cf7024b10326c20cebbf31.jpg', '08/24/2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
