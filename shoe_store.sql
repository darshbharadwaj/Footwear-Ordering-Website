-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 06:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `A_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`A_id`, `username`, `address`) VALUES
(1, 'admin', 'sfdghkj'),
(2, 'jashrajkp', 'gvowuvqwiqwq');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
(' ', '', '', ''),
('harsh maru', 'harsh00005@gmail.com', 'test mail 1!!', 'test 123!!'),
('Jashraj Patel', 'jashrajkp@gamil.com', 'vohv', 'pnv2vn[2'),
('hhohlo g0g0g0', 'jashrajkp@gmail.com', 'shoe store', 'hwh'),
('ABCD OHE', 'pranavjore@gmail.com', 'send using mail function', 'send successfully!!!');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `oid` int(10) NOT NULL,
  `pid` int(11) NOT NULL,
  `pamount` int(10) NOT NULL,
  `ototal` int(10) NOT NULL,
  `odate` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pimg` varchar(100) DEFAULT NULL,
  `pamount` int(10) NOT NULL DEFAULT '0',
  `brand` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `category` varchar(60) NOT NULL,
  `subcategory` varchar(60) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `trending` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pimg`, `pamount`, `brand`, `colour`, `size`, `category`, `subcategory`, `gender`, `trending`) VALUES
(1, 'Fila disrupter', 'S1.JPEG ,S1.2.JPEG,S1.3.JPEG ,S1.4.JPEG,S1.5.JPEG ', 6995, 'Fila', 'Red', '7,8,9,10,11,12,13,14', 'Casual', 'Sneakers', 'UNISEX', 'Y'),
(2, 'NIKE  AIR FORCE 1 ''07 LV8 1 ''MYSTIC RED/WHITE-BLAC', 's2.5.jpeg,S2.1.jpeg,s2.3.jpeg,s2.4.jpeg', 7995, 'Nike', 'Red,White,black', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'Men''s', 'N'),
(3, 'EPIC REACT FLYKNIT ''COPPER FLASH/BLACK-FLASH CRIMS', 's3.jpeg,s3.1.jpeg,s3.2.jpeg,s3.4.jpeg', 15995, 'Nike', 'COPPER FLASH/BLACK-FLASH CRIMSON', '7,8,9,10,11,12,13', 'Casual', 'Sports', 'UNISEX', 'N'),
(4, 'ZX 4000 4D CORE BLACK/ONIX/WHITE', 's4.jpeg,s4.1.jpeg,s4.2.jpeg,s4.3.jpeg', 29999, 'Adidas Originals', 'Core Black/Onix/White', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'UNISEX', 'N'),
(5, 'PUMA X SOPHIA WEBSTER WOMEN''S SUEDE ', 's5.jpeg,s5.1.jpeg,s5.2.jpeg,s5.3.jpeg', 5949, 'Puma', 'ILLUSION BLUE/FLUO YELLOW', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'Women''s', 'N'),
(6, 'CL LEATHER SHIMMER', 's6.jpeg,s6.1.jpeg,s6.2.jpeg,s6.3.jpeg', 6999, 'Reebok', 'CHALK BLACK', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'UNISEX', 'Y'),
(7, 'Asics Tiger', 's7.jpeg,s7.1.jpeg,s7.2.jpeg,s7.3.jpeg', 7999, 'Asics', 'BLACK/WHITE', '7,8,9,10,11,12,13', 'Casual', 'Sports', 'Men''s', 'Y'),
(8, 'GEL-LYTE III ', 's8.jpeg,s8.1.jpeg,s8.2.jpeg,s8.3.jpeg', 6999, 'Asics', 'BLACK/GREY', '7,8,9,10,11,12,13', 'Casual', 'Sports', 'Men''s', 'Y'),
(9, 'ULTRABOOST X GAME OF THRONES W ''HOUSE LANNISTER''', 's9.jpeg,s9.1.jpeg,s9.2.jpeg,s9.3.jpeg', 16999, 'Adidas ', 'Red,White', '7,8,9,10,11,12,13', 'Casual', 'Sports', 'UNISEX', 'Y'),
(10, 'SILVA TRAINER ', 's10.jpeg,s10.1.jpeg,s10.2.jpeg,s10.3.jpeg', 9999, 'Fila', 'WHITE/FILA NAVY', '7,8,9,10,11,12,13', 'Shoes', 'Training', 'Men''s', 'N'),
(11, 'ZOKU RUNNER ', 's11.jpeg,s11.1.jpeg,s11.2.jpeg,s11.3.jpeg', 10999, 'Reebok classics', 'HUNTER GREEN', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'UNISEX', 'Y'),
(12, 'PUMA X SOPHIA WEBSTER WOMEN''S SUEDE', 's12.jpeg,s12.1.jpeg,s12.2.jpeg,s12.3.jpeg', 5949, 'Puma', 'SPECTRUM BLUE/KNOCK-OUT PINK', '7,8,9,10,11,12,13', 'Casual', 'Sneakers', 'Women''s', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('admin', 'admin@123', 'Admin'),
('jashrajkp', 'jpatel', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `email`, `mobile`, `username`, `password`) VALUES
('Jashraj Patel', 'jashrajkp@gamil.com', 7021152874, 'jashrajkp', 'jpatel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
