-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2014 at 06:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aero`
--

-- --------------------------------------------------------

--
-- Table structure for table `y1`
--

CREATE TABLE IF NOT EXISTS `y1` (
  `Rollno` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y1`
--

INSERT INTO `y1` (`Rollno`, `Name`) VALUES
('1', 'a'),
('2', 'b'),
('3', 'c'),
('4', 'd'),
('5', 'e'),
('6', 'f'),
('7', 'g'),
('8', 'h'),
('9', 'i'),
('10', 'j'),
('11', 'k'),
('12', 'l'),
('13', 'm'),
('14', 'n'),
('15', 'o'),
('16', 'p'),
('17', 'q'),
('18', 'r'),
('19', 's'),
('20', 't'),
('56', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `y2`
--

CREATE TABLE IF NOT EXISTS `y2` (
  `Rollno` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y2`
--

INSERT INTO `y2` (`Rollno`, `Name`) VALUES
('101', 'a'),
('102', 'b'),
('103', 'c'),
('104', 'd'),
('105', 'e'),
('106', 'f'),
('107', 'g'),
('108', 'h'),
('109', 'i'),
('110', 'j'),
('111', 'k'),
('112', 'l'),
('113', 'm'),
('114', 'n'),
('115', 'o'),
('116', 'p'),
('117', 'q'),
('118', 'r'),
('119', 's'),
('120', 't');

-- --------------------------------------------------------

--
-- Table structure for table `y3`
--

CREATE TABLE IF NOT EXISTS `y3` (
  `Rollno` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y3`
--

INSERT INTO `y3` (`Rollno`, `Name`) VALUES
('201', 'a'),
('202', 'b'),
('203', 'c'),
('204', 'd'),
('205', 'e'),
('206', 'f'),
('207', 'g'),
('208', 'h'),
('209', 'i'),
('210', 'j'),
('211', 'k'),
('212', 'l'),
('213', 'm'),
('214', 'n'),
('215', 'o'),
('216', 'p'),
('217', 'q'),
('218', 'r'),
('219', 's'),
('220', 't');

-- --------------------------------------------------------

--
-- Table structure for table `y4`
--

CREATE TABLE IF NOT EXISTS `y4` (
  `Rollno` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y4`
--

INSERT INTO `y4` (`Rollno`, `Name`) VALUES
('301', 'a'),
('302', 'b'),
('303', 'c'),
('304', 'd'),
('305', 'e'),
('306', 'f'),
('307', 'g'),
('308', 'h'),
('309', 'i'),
('310', 'j'),
('311', 'k'),
('312', 'l'),
('313', 'm'),
('314', 'n'),
('315', 'o'),
('316', 'p'),
('317', 'q'),
('318', 'r'),
('319', 's'),
('320', 't');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
