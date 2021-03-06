-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 04:33 PM
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
-- Table structure for table `a_product`
--

DROP TABLE IF EXISTS `a_product`;
CREATE TABLE IF NOT EXISTS `a_product` (
`prodID` int(5) NOT NULL,
  `ProdStock` int(5) DEFAULT NULL,
  `prodName` varchar(256) NOT NULL,
  `prodDesc` varchar(256) DEFAULT NULL,
  `catID` varchar(6) DEFAULT NULL,
  `prodPrice` decimal(5,2) DEFAULT NULL,
  `prodImage` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_product`
--

INSERT INTO `a_product` (`prodID`, `ProdStock`, `prodName`, `prodDesc`, `catID`, `prodPrice`, `prodImage`) VALUES
(1, 11, 'Razer DeathAdder', 'This is a gaming mouse. Popular with eSport players', 'c2', '30.00', 'RazerDeathAdder.png\r\n'),
(2, 5, 'Logitech G430 7.1 surround sound Headset', 'This is a headset', 'c3', '60.00', 'LG430.png\r\n'),
(3, 3, 'HP Office Keyboard', 'Standard HP keyboard', 'c1', '2.00', 'HPkeyboard.png\r\n'),
(4, 2, 'Acer HD 75Hz Gaming Monitor ', 'Acer gaming monoitor. 75hz refresh rate', 'c4', '90.00', 'AcerMonitor.png\r\n'),
(5, 6, 'Xbox 360 controller', 'Brand new xbox 360 controller. Full packaging', 'c6', '15.00', '360Controller.png\r\n\r\n'),
(6, 7, 'Xbox 360', 'Brand new xbox 360. Full packaging', 'c5', '100.00', 'Xbox360.png\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_product`
--
ALTER TABLE `a_product`
 ADD PRIMARY KEY (`prodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_product`
--
ALTER TABLE `a_product`
MODIFY `prodID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
