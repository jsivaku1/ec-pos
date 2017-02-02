-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2014 at 06:52 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `yearid` int(11) NOT NULL,
  `dept` varchar(1000) NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `yearid`, `dept`) VALUES
(1, 1, 'ECE'),
(2, 1, 'CSE'),
(3, 1, 'IT'),
(4, 1, 'MECH'),
(5, 1, 'CIVIL'),
(6, 2, 'ECE'),
(7, 2, 'CSE'),
(8, 2, 'IT'),
(9, 2, 'MECH'),
(10, 2, 'CIVIL'),
(11, 3, 'ECE'),
(12, 3, 'CSE'),
(13, 3, 'IT'),
(14, 3, 'MECH'),
(15, 3, 'CIVIL'),
(16, 4, 'ECE'),
(17, 4, 'CSE'),
(18, 4, 'IT'),
(19, 4, 'MECH'),
(20, 4, 'CIVIL');

-- --------------------------------------------------------

--
-- Table structure for table `examtable`
--

CREATE TABLE IF NOT EXISTS `examtable` (
  `regno` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` int(1) NOT NULL,
  `section` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `mark` int(3) NOT NULL,
  `reexam` int(3) NOT NULL,
  `grade` char(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `attendence` char(1) NOT NULL,
  `reexamattendence` varchar(2) NOT NULL,
  `reexamgrade` text NOT NULL,
  `reexamstatus` varchar(10) NOT NULL,
  KEY `regno` (`regno`),
  KEY `regno_2` (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examtable`
--

INSERT INTO `examtable` (`regno`, `name`, `dept`, `year`, `semester`, `section`, `sub`, `mark`, `reexam`, `grade`, `status`, `attendence`, `reexamattendence`, `reexamgrade`, `reexamstatus`) VALUES
(1004, 'raja', 'ECE', 'I YEAR', 1, 'A', 'hs1202-chemistry', 100, 0, 'S', 'pass', 'P', 'NA', 'NA', 'NA'),
(1005, 'Ramu', 'ECE', 'I YEAR', 1, 'A', 'hs1202-chemistry', 20, 50, 'U', 'fail', 'P', 'P', 'D', 'pass'),
(1006, 'ganesh', 'ECE', 'I YEAR', 1, 'A', 'hs1101-physics', 100, 0, 'S', 'pass', 'P', 'NA', 'NA', 'NA'),
(3, 'Raja', 'ECE', 'I YEAR', 1, 'A', 'hs1101-physics', 95, 0, 'S', 'pass', 'P', 'NA', 'NA', 'NA'),
(4, 'ramya', 'ECE', 'I YEAR', 1, 'A', 'hs1101-physics', 85, 0, 'A', 'pass', 'P', 'NA', 'NA', 'NA'),
(1, 'Ramya', 'ECE', 'I YEAR', 1, 'A', 'hs1101-physics', 45, 100, 'U', 'fail', 'P', 'P', 'S', 'pass'),
(1007, 'DINESH', 'ECE', 'I YEAR', 1, 'a', 'hs1202-chemistry', 20, 50, 'U', 'fail', 'P', 'P', 'D', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `No` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`No`, `Name`) VALUES
(1, 'b'),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `sud_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`sud_code`, `sub`) VALUES
('HS1001', 'English1'),
('HS1002', 'Physics1'),
('HS1003', 'Chemistry1'),
('MA1001', 'Maths1'),
('GE1001', 'Engg Grap'),
('CS1001', 'FOC');

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE IF NOT EXISTS `sem2` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`sub_code`, `sub`) VALUES
('HS1201', 'English2'),
('HS1202', 'Physics2'),
('HS1303', 'Chemistry2'),
('MG1204', 'BCM'),
('EE1205', 'EDC'),
('MA1206', 'Maths2');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE IF NOT EXISTS `sem3` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`sub_code`, `sub`) VALUES
('1', 'Maths3'),
('2', 'Data Structure'),
('3', 'OOPS'),
('4', 'DPST'),
('5', 'ADC'),
('6', 'EVS');

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE IF NOT EXISTS `sem4` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`sub_code`, `sub`) VALUES
('1', 'Maths4'),
('2', 'DAA'),
('3', 'MP'),
('4', 'COA'),
('5', 'OS'),
('6', 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE IF NOT EXISTS `sem5` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`sub_code`, `sub`) VALUES
('1', 'Maths5'),
('2', 'SE'),
('3', 'Networks'),
('4', 'TOC'),
('5', 'SS'),
('6', 'VP');

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE IF NOT EXISTS `sem6` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`sub_code`, `sub`) VALUES
('1', 'Maths6'),
('2', 'AI'),
('3', 'Compiler'),
('4', 'Dis Sys'),
('5', 'GM'),
('6', 'CNS');

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE IF NOT EXISTS `sem7` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem7`
--

INSERT INTO `sem7` (`sub_code`, `sub`) VALUES
('1', 'AJP'),
('2', 'UI'),
('3', 'OOAD'),
('4', 'IC'),
('5', 'MT'),
('6', 'TQM');

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE IF NOT EXISTS `sem8` (
  `sub_code` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`sub_code`, `sub`) VALUES
('1', 'MC'),
('2', 'NP'),
('3', 'ELEC-1'),
('4', 'ELEC-2'),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `semes`
--

CREATE TABLE IF NOT EXISTS `semes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `semes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `semes`
--

INSERT INTO `semes` (`id`, `yearid`, `depid`, `semes`) VALUES
(1, 1, 1, '1'),
(2, 1, 1, '2'),
(3, 2, 6, '3'),
(4, 2, 6, '4'),
(5, 3, 11, '5'),
(6, 3, 11, '6');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearid` int(11) NOT NULL,
  `deptid` int(11) NOT NULL,
  `semid` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `yearid`, `deptid`, `semid`, `subject`) VALUES
(1, 1, 1, 1, 'hs1101-physics'),
(2, 1, 1, 1, 'hs1202-chemistry'),
(3, 1, 1, 1, 'Computer I'),
(4, 1, 1, 1, 'Graphics'),
(5, 1, 1, 2, 'English'),
(6, 1, 1, 2, 'Maths II'),
(7, 1, 1, 2, 'Computer II'),
(8, 1, 1, 2, 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttable`
--

CREATE TABLE IF NOT EXISTS `subjecttable` (
  `year` int(1) NOT NULL,
  `semester` int(1) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjecttable`
--

INSERT INTO `subjecttable` (`year`, `semester`, `dept`, `subject`) VALUES
(1, 1, 'cse', 'hs1101-physics'),
(1, 2, 'ece', 'hs1202-chemistry'),
(2, 3, 'mech', 'cs1201-oops'),
(2, 4, 'eee', 'cs1101-database management'),
(3, 5, 'prod', 'cs101-computer networks'),
(3, 6, 'aero', 'cs701-artificial intelligence'),
(4, 7, 'ei', 'cs701-unix internals'),
(4, 8, 'civil', 'cs100- data mining');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `yearid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(1000) NOT NULL,
  PRIMARY KEY (`yearid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`yearid`, `year`) VALUES
(1, 'I YEAR'),
(2, 'II YEAR'),
(3, 'III YEAR'),
(4, 'IV YEAR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
