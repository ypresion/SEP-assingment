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
-- Table structure for table `a_users`
--

DROP TABLE IF EXISTS `a_users`;
CREATE TABLE IF NOT EXISTS `a_users` (
`uID` int(11) NOT NULL,
  `fn` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `un` varchar(50) NOT NULL,
  `passwordHash` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_users`
--

INSERT INTO `a_users` (`uID`, `fn`, `sn`, `un`, `passwordHash`) VALUES
(2, 'Tom', 'Ashby', 'tashby', '$2y$10$IQuv.r7SlyAolEDdlicvVux0PlCKvQ1bMOhvbrxEgUBQiDqS35oTq'),
(4, 'Admin', 'Admin', 'Admin123', '$2y$10$E2ykG2tSCEiw9zcu7cMFC.zwAA3mZS0THL7lBc2xTxk2tO3BuQqmC'),
(8, 'admin', 'admin', 'admin', '$2y$10$n8UGYPFpECUqnpK5KaNwAO1cSah8v7wm0zmR7MKp1.XViTEULQuum'),
(9, 'Jack', 'Anthony', 'Snowegg14', '$2y$10$GVc4ZJ6JQVHMlWQtsFA0ieNkDWKzNA2OETWUS/KLP3FdiNNt/Yfve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_users`
--
ALTER TABLE `a_users`
 ADD PRIMARY KEY (`uID`), ADD UNIQUE KEY `un` (`un`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_users`
--
ALTER TABLE `a_users`
MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
