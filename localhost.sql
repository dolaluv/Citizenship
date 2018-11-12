-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2018 at 11:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citizen`
--
CREATE DATABASE `citizen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `citizen`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE IF NOT EXISTS `citizen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `citizen_id` varchar(20) NOT NULL,
  `name` char(40) NOT NULL,
  `fname` char(50) NOT NULL,
  `lname` char(50) NOT NULL,
  `state` text NOT NULL,
  `local` text NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(1) NOT NULL,
  `addr` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `sign` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matric_no` (`citizen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`id`, `citizen_id`, `name`, `fname`, `lname`, `state`, `local`, `mobile`, `dob`, `sex`, `addr`, `image`, `sign`, `email`, `status`, `date`) VALUES
(5, '1498309667-LAG-APA', 'ILIASU', 'MURITALA', 'DOLAPO', 'LAGOS', 'APAPA', 8139371479, '1990-03-20', 'M', 'hjliln;lkj;lmp', 'Penguins.jpg', 'sign.jpg', 'wedor4real2009@yahoo.com', 1, '0000-00-00'),
(6, '1498322319-LAG-APA', 'Dolapo', 'Yusuf', 'Name', 'LAGOS', 'APAPA', 8033335125, '1990-03-20', 'F', '', 'FB_IMG_15123888960423636.jpg', 'GANIYU.jpg', 'dolapo4atolagbe@yahoo.com', 1, '2017-12-24'),
(7, '1498682907-LAG-AGE', 'biodun', 'adepoju', 'adeleke', 'LAGOS', 'AGEGE', 7033630202, '1990-03-27', 'M', '', '', '', 'gbenekep@gmail.com', 1, '0000-00-00'),
(8, '1515016824-LAG-ALI', 'ILIASU', 'MURITALA', 'Dolapo', 'LAGOS', 'ALIMOSHO', 8139371479, '2018-01-04', 'M', 'orile', 'FB_IMG_15123888960423636.jpg', 'sign.jpg', 'dolapo4atolagbe@gmail.com', 1, '2018-01-03'),
(9, '1541891324-KAD-Sel', 'ADELABU', 'Hghjjj', 'Hghjjj', 'KADUNA', 'Select Local Govt', 0, '2018-11-07', 'M', '', '', '', 'doapo4real@gmail.com', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_login`
--

CREATE TABLE IF NOT EXISTS `citizen_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `matric_no` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `citizen_login`
--

INSERT INTO `citizen_login` (`ID`, `email`, `pass`) VALUES
(2, 'wedor4real2009@yahoo.com', 'muri'),
(3, 'dolapo4atolagbe@yahoo.com', 'muri'),
(4, 'gbenekep@gmail.com', 'many'),
(5, 'dolapo4atolagbe@gmail.com', '12345678'),
(6, 'doapo4real@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `citizen_id` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `local` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complain`
--


-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`product_id`, `product_name`, `cat_id`) VALUES
(2, 'Apapa', 1),
(3, 'Alimosho', 1),
(5, 'Moro', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `grp` int(240) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `subject`, `Description`, `grp`, `Date`) VALUES
(1, 'Nigeria', 'Welcome to our Platform', 1, '2017-12-23 18:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `notice2`
--

CREATE TABLE IF NOT EXISTS `notice2` (
  `1d` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`1d`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notice2`
--


-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

CREATE TABLE IF NOT EXISTS `solved` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `citizen_id` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `local` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `s_date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `solved`
--


-- --------------------------------------------------------

--
-- Table structure for table `solved2`
--

CREATE TABLE IF NOT EXISTS `solved2` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `hostel` text NOT NULL,
  `block` char(1) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `d_date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `solved2`
--

INSERT INTO `solved2` (`notice_id`, `user`, `hostel`, `block`, `subject`, `Description`, `Date`, `d_date`) VALUES
(1, '', '', '', 'hvk', 'mbkj', '0000-00-00 00:00:00', '2017-06-26 14:51:18'),
(2, '', '', '', 'Card', 'I have not receive my card', '0000-00-00 00:00:00', '2017-06-26 14:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`cat_id`, `cat_name`) VALUES
(2, 'KADUNA'),
(3, 'KWARA'),
(1, 'LAGOS'),
(4, 'OYO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `regid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

