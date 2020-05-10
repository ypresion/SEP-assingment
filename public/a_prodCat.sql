-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2020 at 08:21 PM
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
-- Table structure for table `a_prodCat`
--

DROP TABLE IF EXISTS `a_prodCat`;
CREATE TABLE IF NOT EXISTS `a_prodCat` (
  `catID` varchar(5) NOT NULL DEFAULT '',
  `catDesc` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_prodCat`
--

INSERT INTO `a_prodCat` (`catID`, `catDesc`) VALUES
('c1', 'Keyboard'),
('c2', 'Mouse'),
('c3', 'Headset'),
('c4', 'Monitor'),
('c5', 'Console'),
('c6', 'Controller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_prodCat`
--
ALTER TABLE `a_prodCat`
 ADD PRIMARY KEY (`catID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
