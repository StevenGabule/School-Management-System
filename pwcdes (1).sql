-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2014 at 09:31 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pwcdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblacctspayable`
--

CREATE TABLE IF NOT EXISTS `tblacctspayable` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sap_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seriesno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stabno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `regfee` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tuition` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtotal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `datep` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblacctspayable`
--

INSERT INTO `tblacctspayable` (`id`, `sap_id`, `seriesno`, `stabno`, `regfee`, `tuition`, `subtotal`, `remarks`, `datep`) VALUES
(1, '2014-100218', '1001', '100001', '500', '1000', '1500', '', '2014-03-07'),
(2, '2014-100218', '00001', '1', '133', '123', '256', 'June', '2014-03-04'),
(3, '2014-110358', '1010', '123', '131', '1231', '1362', 'March', '2014-03-08'),
(4, '2014-120350', '0001', '1', '1500', '0', '1500', 'Full Paid', '2014-03-10'),
(5, '2014-120350', '0002', '1', '0', '500', '500', '500', '2014-03-10'),
(6, '2014-120350', '0003', '1', '0', '500', '500', '', '2014-03-10'),
(7, '2014-040307', '0001', '1', '1500', '', '1500', 'Full paid', '2014-03-10'),
(8, '2014-040307', '0002', '1', '', '500', '500', '', '2014-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `tblcenter`
--

CREATE TABLE IF NOT EXISTS `tblcenter` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `center` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblcenter`
--

INSERT INTO `tblcenter` (`c_id`, `center`) VALUES
(1, 'Maramag'),
(2, 'Valencia'),
(3, 'Wao'),
(4, 'Manolo Fortich'),
(5, 'Lurogan'),
(6, 'Kitaotao');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE IF NOT EXISTS `tblsection` (
  `sec_id` int(10) NOT NULL AUTO_INCREMENT,
  `secdes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `secyear` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`sec_id`, `secdes`, `secyear`) VALUES
(1, 'Narra', '1'),
(2, 'Rose', '2'),
(3, 'Guava', '3'),
(4, 'Molave', '1'),
(5, 'Aguinaldo', '4'),
(6, 'Rizal', '4'),
(7, 'Mango', '3'),
(8, 'Smart', '1'),
(9, 'Sampaguita', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tblstdsub`
--

CREATE TABLE IF NOT EXISTS `tblstdsub` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ssub_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thirdg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fourthg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `finalg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblstdsubinfo`
--

CREATE TABLE IF NOT EXISTS `tblstdsubinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sec_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_id` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblstdsubinfo`
--

INSERT INTO `tblstdsubinfo` (`id`, `std_id`, `sec_id`, `c_id`) VALUES
(1, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE IF NOT EXISTS `tblstudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fatherName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motherName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactno` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `center_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bdate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sec_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `fname`, `lname`, `mname`, `s_id`, `email`, `address`, `fatherName`, `motherName`, `contactno`, `gender`, `center_id`, `bdate`, `sec_id`) VALUES
(8, 'Roldan Ulysses', 'Elento', 'G.', '2014-070350', 'Edz@yahoo.com', 'Valencia', 'papa ', 'mama', '093-383838-3i', 'Male', '1', '2013-11-03', 1),
(9, 'Reyail', 'Sagarino', 'G.', '2014-040307', 'reyailsagarino@yahoo.com', 'Maramag, Bukidnon', 'Reynaldo Sagarino', 'Nelia Sagarino', '09359706053', 'Female', '1', '1993-04-17', 1),
(10, 'Nino', 'Lerona', 'G.', '2014-080354', 'dakfka@yahoo.com', 'Valencia City', 'Papa', 'Mamam', '091234567890', 'Male', '2', '2014-03-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE IF NOT EXISTS `tblsubject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subdes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id`, `subdes`) VALUES
(1, 'Math'),
(2, 'English'),
(3, 'MAPEH'),
(4, 'TVE'),
(5, 'Science'),
(6, 'AP'),
(7, 'Filipino'),
(8, 'Values');

-- --------------------------------------------------------

--
-- Table structure for table `tblsy`
--

CREATE TABLE IF NOT EXISTS `tblsy` (
  `syid` int(35) NOT NULL DEFAULT '0',
  `sydes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`syid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblsy`
--

INSERT INTO `tblsy` (`syid`, `sydes`) VALUES
(1, '2014-2015'),
(2, '2015-2016'),
(3, '2016-2017'),
(4, '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE IF NOT EXISTS `tblteacher` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnum` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`t_id`, `fname`, `address`, `cnum`, `mname`, `lname`) VALUES
(10, 'bayot', 'tga her lang', '563636', 'c', 'jessi'),
(11, 'Chemar', 'tga valencia lang ko', '09333284859', 'P.', 'Pamisa'),
(12, 'Rhona', 'Maramag, Bukidnon', '092672167188', 'A.', 'Tormis'),
(13, 'Miraflor', 'Valencia City, Bukidnon\r\n', '09123456789', 'M.', 'Montecillo');

-- --------------------------------------------------------

--
-- Table structure for table `tblteachsub`
--

CREATE TABLE IF NOT EXISTS `tblteachsub` (
  `ts_id` int(10) NOT NULL AUTO_INCREMENT,
  `subj_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tblteachsub`
--

INSERT INTO `tblteachsub` (`ts_id`, `subj_id`, `sec_id`, `t_id`) VALUES
(6, '6', '9', '11'),
(7, '6', '1', '11'),
(8, '7', '9', '11'),
(9, '6', '1', '12'),
(10, '1', '6', '10'),
(11, '2', '4', '12'),
(12, '2', '1', '10'),
(13, '2', '1', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(5) DEFAULT NULL,
  `e_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `salt`, `email`, `admin`, `e_id`) VALUES
(1, 'a', '9d0d37871905310c48542404afe7e5056792b64908e23f4f1d8aa61501bd4af8', '96534c75e57960', 'aceshot9@yahoo.com', 0, NULL),
(2, '2014-100218', 'feb2b02f96dd14cdc9960b8770eb44b53b8eb177ad1c8e029f1b7b201e6267ad', '2a990fb677f067af', 'bayotko@pramis.com', 2, NULL),
(4, 'bayot', '14c746772435740b8af8a4304e6dcf3be35d54eb6a140d2e6584cf917e4cf074', 'bc6e088495969a1', 'bayotko@ka.com', 1, '11'),
(5, 'rhonatormis', 'ecb5f705b9e316cfdf9a0eb75daba90b14d998a9e0452845e93ce35dfc2a99e7', '5dac99d71eaa09c', 'rhonatormis@yahoo.com', 1, '12'),
(7, 'r_elento@!yahoo.com', '7cc3fc1b158f2d891ef7f7b700e8a4de9f12c18d02d388416d0f2f7beccb72ff', '156fcbb4e6759a0', 'r_elento@yahoo.com', 1, '12'),
(8, '2014-040307', '9ca056b1d790dd4a61bd4e6f042724540b40d564ae39ec239eacd1df69c09a56', '1f03328f9fa4272', 'reyailsagarino@yahoo.com', 2, '2014-040307'),
(9, 'ulysses', '6e47af290e5235e3ac70f1637ea09960eab0d0961559a9ef246376eb4de43a27', '58cea9fb2481e009', 'ulysseselento@yahoo.com', 1, '12'),
(12, 'miraflor', 'f9a12022b19ea644d942f1615f86f7611cfdb7f03006ffd2d0d83dd5fe3049c1', '351a46b9254b5a9e', 'miraflormontecillo@yahoo.com', 1, '13'),
(13, '2014-070350', '03376655d841f51e25d2de3b372c801967afe914df0ba238db610abc7453b4f3', '701da4104208f5fb', 'cjakj@yahoo.com', 2, '2014-070350'),
(14, '2014-080354', '71352a20964b9bbefa094bd0568e84625301ca0d28c8cf9cea29b5d1982cea70', '4a9b85bf757109bf', 'fakf@yahoo.com', 2, '2014-080354');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
