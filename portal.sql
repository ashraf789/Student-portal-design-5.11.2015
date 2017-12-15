-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2015 at 06:18 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_si_no` int(11) NOT NULL AUTO_INCREMENT,
  `ad_full_name` varchar(50) NOT NULL,
  `ad_name` varchar(30) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_phone_no` int(11) NOT NULL,
  `ad_image` varchar(250) NOT NULL,
  `ad_pwd` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ad_si_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_si_no`, `ad_full_name`, `ad_name`, `ad_email`, `ad_phone_no`, `ad_image`, `ad_pwd`, `reg_date`) VALUES
(1, 'syedashrafullah', 'administrator', 'ashraf15@gmail.com', 1772465164, '', '123456', '2015-05-11 11:06:09'),
(2, 'syedashrafullah', 'ashraf420', 'ashrafswe789@gmail.com', 0, '', '', '2015-05-11 12:10:23'),
(3, 'syedashrafullah', 'ashraf420', 'ashrafswe789@gmail.com', 0, '', '', '2015-05-11 12:13:40'),
(4, 'syedashrafullah', 'ashraf420', 'ashrafswe789@gmail.com', 0, '', '', '2015-05-11 12:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_si_no` int(11) NOT NULL,
  `user_full_name` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone_number` int(11) NOT NULL,
  `user_image` varchar(250) NOT NULL,
  `user_pwd` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_si_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_si_no`, `user_full_name`, `user_name`, `user_email`, `user_phone_number`, `user_image`, `user_pwd`, `registration_date`) VALUES
(0, 'syedashrafullah', 'ashraf', 'ashraf15@gmail.com', 1772465164, '', '123456', '2015-05-11 00:42:23');
