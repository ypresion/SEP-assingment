-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2020 at 08:23 PM
-- Server version: 5.5.58-0+deb7u1-log
-- PHP Version: 5.6.31-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unn_w18011022`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_stock`
--

DROP TABLE IF EXISTS `a_stock`;
CREATE TABLE IF NOT EXISTS `a_stock` (
  `sID` varchar(5) NOT NULL DEFAULT '',
  `sNum` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_stock`
--

INSERT INTO `a_stock` (`sID`, `sNum`) VALUES
('s1', 10),
('s2', 4),
('s3', 15),
('s4', 1),
('s5', 6),
('s6', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_stock`
--
ALTER TABLE `a_stock`
 ADD PRIMARY KEY (`sID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
