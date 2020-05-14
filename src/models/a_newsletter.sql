-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2020 at 08:22 PM
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
-- Table structure for table `a_newsletter`
--

DROP TABLE IF EXISTS `a_newsletter`;
CREATE TABLE IF NOT EXISTS `a_newsletter` (
`fullname` char (255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subscribed` boolean default true
);

--
-- Dumping data for table `a_users`
--

INSERT INTO `a_newsletter` (`fullname`, `email`, `subscribed`) VALUES
('Tom Ashby', 'Tomashby211@gmail.com', TRUE);


--
-- Indexes for table `a_users`
--
ALTER TABLE `a_newsletter`
 ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `email` (`email`);

