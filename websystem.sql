-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2014 at 03:36 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin14', '3893c8dea615370ce87d040b95f62f4368c1ff18');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Coursename` varchar(50) NOT NULL,
  `Cert_file` varchar(50) NOT NULL,
  `Course_Date` varchar(50) NOT NULL,
  `UID` varchar(30) NOT NULL,
  `Place_type` varchar(100) NOT NULL,
  `Satisfaction` varchar(10) NOT NULL,
  `Knowledge` varchar(10) NOT NULL,
  `Comments` varchar(150) NOT NULL,
  `Submit_date` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `Coursename` (`Coursename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Coursename`, `Cert_file`, `Course_Date`, `UID`, `Place_type`, `Satisfaction`, `Knowledge`, `Comments`, `Submit_date`, `id`) VALUES
('sads', 'Sazzad_Hossain-1.pdf', '10/10/2010', 'saz', 'Internal', '4', '4', 'adsda', '1414470110', 1),
('sads', 'Sazzad_Hossain-11.pdf', '10/10/2010', 'saz', 'Internal', '4', '4', 'adsda', '1414470299', 2),
('sads', 'Sazzad_Hossain-12.pdf', '10/10/2010', 'saz', 'Internal', '4', '4', 'adsda', '1414470572', 3),
('sads', 'Sazzad_Hossain-13.pdf', '10/10/2010', 'saz', 'Internal', '4', '4', 'adsda', '1414470623', 4),
('sads', 'Sazzad_Hossain-14.pdf', '10/10/2010', 'saz', 'Internal', '4', '4', 'adsda', '1414470650', 5),
('sads', '', '10/10/2010', 'saz', 'Internal', '4', '4', 'eeewew', '1414549529', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(50) NOT NULL,
  `ID` varchar(30) DEFAULT NULL,
  `Grade` varchar(30) DEFAULT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Unit` varchar(30) DEFAULT NULL,
  `UID` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(200) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `Grade`, `Date`, `Unit`, `UID`, `Password`, `Email`) VALUES
('sazzad', '12312asd', 'dsa12', '12/18/2001', 'sadasd', 'saz', '123', 'sazzadknife@gmail.com'),
('sazzad', '12312asd', 'asda', '12/18/2001', 'sadasd', 'sazzad11', 'c1dd73cfe42e27cf8914373a2c01aad5e065ac7f', 'sazzadknife@gmail.com'),
('MOHD SHAFEQ BIN MD HASAN', '871015565025', 'p6HS', '12/10/2014', 'LATIHAN', 'shark', '12345', 'shafeq.hasan@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
