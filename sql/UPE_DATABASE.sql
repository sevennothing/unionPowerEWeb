-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2013 at 04:46 PM
-- Server version: 5.1.70
-- PHP Version: 5.3.2-1ubuntu4.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `UPE_DATABASE`
--

-- --------------------------------------------------------

--
-- Table structure for table `UPE_INVEST`
--

CREATE TABLE IF NOT EXISTS `UPE_INVEST` (
  `USER_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `SCORE1` int(10) unsigned NOT NULL DEFAULT '0',
  `SCORE2` int(10) unsigned NOT NULL DEFAULT '0',
  `SCORE3` int(10) unsigned NOT NULL DEFAULT '0',
  `SCORE4` int(10) unsigned NOT NULL DEFAULT '0',
  `CASH1` int(10) unsigned NOT NULL DEFAULT '0',
  `CASH2` int(10) unsigned NOT NULL DEFAULT '0',
  `CASH3` int(10) unsigned NOT NULL DEFAULT '0',
  `CASH4` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `UPE_INVEST`
--

INSERT INTO `UPE_INVEST` (`USER_ID`, `SCORE1`, `SCORE2`, `SCORE3`, `SCORE4`, `CASH1`, `CASH2`, `CASH3`, `CASH4`) VALUES
(1, 77, 0, 0, 0, 320, 0, 0, 0),
(2, 14, 0, 0, 0, 1000, 0, 0, 0),
(3, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `UPE_PENDING`
--

CREATE TABLE IF NOT EXISTS `UPE_PENDING` (
  `USER_ID` int(10) unsigned NOT NULL,
  `TOKEN` char(10) COLLATE latin1_general_cs NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `UPE_PENDING`
--


-- --------------------------------------------------------

--
-- Table structure for table `UPE_TASK`
--

CREATE TABLE IF NOT EXISTS `UPE_TASK` (
  `TASK_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TASK_TYPE` char(10) NOT NULL,
  `TASK_INFO` char(100) NOT NULL,
  `TASK_SCORE` int(10) unsigned NOT NULL,
  `TASK_PRIV` int(10) unsigned NOT NULL,
  `TASK_STAT` char(1) NOT NULL,
  `TASK_START` date NOT NULL,
  `TASK_STOP` date NOT NULL DEFAULT '0000-00-00',
  `TASK_MANAGER` char(20) NOT NULL,
  `TASK_MEMBER` char(50) NOT NULL,
  `TASK_NOTE` char(100) NOT NULL,
  PRIMARY KEY (`TASK_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `UPE_TASK`
--

INSERT INTO `UPE_TASK` (`TASK_ID`, `TASK_TYPE`, `TASK_INFO`, `TASK_SCORE`, `TASK_PRIV`, `TASK_STAT`, `TASK_START`, `TASK_STOP`, `TASK_MANAGER`, `TASK_MEMBER`, `TASK_NOTE`) VALUES
(1, 'hardware', 'motherBoard layout', 15, 1, 's', '2013-09-29', '2013-10-15', 'linzhian', 'licaijun,zengjianhua', ''),
(2, 'software', 'power manger software', 5, 2, 'p', '2013-09-26', '2013-10-21', 'licaijun', 'linzhian,zengjianhua', 'complite;wait for test.'),
(3, 'software', 'sensor module code', 5, 1, 'p', '2013-09-26', '2013-10-09', 'linzhian', 'licaijun', ''),
(4, 'software', 'zigbee stack:zstack', 15, 2, 'p', '2013-09-29', '2013-10-15', 'linzhian', 'licaijun,zengjianhua', ''),
(5, 'software', 'our zigbee stack code', 30, 5, 'p', '2013-09-29', '2014-03-01', 'licaijun', 'linzhian', 'pause!'),
(6, 'hardware', 'DC-DC layout', 5, 1, 'p', '2013-09-29', '2013-10-02', 'zengjianhua', 'linzhian,licaijun', 'licaijun design'),
(7, 'hardware', 'CPU layout', 10, 2, 'k', '2013-09-29', '2013-10-07', 'licaijun', '', 'pause..'),
(8, 'word', 'CPU BOARD  Bill of Material', 1, 1, 's', '2013-09-30', '2013-10-01', 'licaijun', '', ''),
(9, 'word', 'DC-DC  Bill of Material', 1, 1, 's', '2013-09-30', '2013-10-01', 'zengjianhua', '', ''),
(10, 'word', 'Mother BOARD  Bill of Material', 1, 1, 's', '2013-09-30', '2013-10-01', 'linzhian', '', ''),
(11, 'solution', 'Mother BOARD  solution', 1, 1, 's', '2013-09-30', '2013-10-01', 'licaijun', 'linzhian,zengjianhua', ''),
(12, 'hardware', 'power manager board layout', 5, 5, 'c', '2013-09-20', '2013-09-22', 'licaijun', '', 'compliate,wait for debug'),
(13, 'software', 'CPU linux system', 20, 5, 'p', '2013-09-30', '2013-11-02', 'licaijun', '', ''),
(14, 'software', 'CPU linux aplication', 20, 5, 'p', '2013-09-30', '2013-11-30', 'licaijun', '', ''),
(15, 'software', 'CPU web design', 10, 5, 'p', '2013-09-30', '2013-12-08', 'licaijun', '', ''),
(16, 'solution', 'alarm solution', 5, 2, 'p', '2013-09-30', '2013-10-16', 'linzhian', 'licaijun', ''),
(17, 'read', 'infrared  and report', 1, 3, 'p', '2013-09-30', '2013-10-07', 'zengjianhua', '', ''),
(18, 'report', 'Z-stack report', 1, 3, 'p', '2013-09-30', '2013-10-20', 'linzhian', '', ''),
(19, 'report', 'LOGO design and report', 1, 5, 'p', '2013-09-30', '2013-10-31', 'licaijun', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `UPE_USER`
--

CREATE TABLE IF NOT EXISTS `UPE_USER` (
  `USER_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `PASSWORD` char(40) COLLATE latin1_general_cs NOT NULL,
  `EMAIL_ADDR` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `IS_ACTIVE` tinyint(1) DEFAULT '0',
  `USER_PRIV` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=4 ;

--
-- Dumping data for table `UPE_USER`
--

INSERT INTO `UPE_USER` (`USER_ID`, `USERNAME`, `PASSWORD`, `EMAIL_ADDR`, `IS_ACTIVE`, `USER_PRIV`) VALUES
(1, 'licaijun', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'sevennothing@gmail.com', 1, 1),
(2, 'linzhian', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '634278374@qq.com', 1, 0),
(3, 'zengjianhua', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '315699244@qq.com', 1, 0);
