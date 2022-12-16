-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 12:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `customer_ID` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CustAddress` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `ccname` varchar(50) NOT NULL,
  `ccnum` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `product` varchar(800) NOT NULL,
  `total` varchar(50) NOT NULL,
  `payment` varchar(20) DEFAULT NULL,
  `phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`customer_ID`, `fname`, `email`, `CustAddress`, `zip`, `ccname`, `ccnum`, `cvv`, `product`, `total`, `payment`, `phone_no`) VALUES
(1, 'emirfahimi', 'emirfahimi0@gmail.com', 'NO, 28 SUBANG JAYA', '47600', 'emirfahimi', '242 424 4', '131', 'Converse X Ambush,Nike RYZ ,Jordan Zoom TRUNNER', 'MYR 1667.70', 'mastercard', '010 650 7476'),
(2, 'zaimfridays', 'zaimfirdaus92@gmail.com', 'NO, 28 SUBANG JAYA', '47600', 'emirfahimi', '242 424 24', '355', 'Converse X Ambush', 'MYR 749.00', 'paypal', '010 650 7476');

-- --------------------------------------------------------

--
-- Table structure for table `productitem`
--

CREATE TABLE `productitem` (
  `product_ID` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `inCart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productitem`
--

INSERT INTO `productitem` (`product_ID`, `customer_id`, `ProductName`, `Price`, `inCart`) VALUES
(1, 1, 'Converse X Ambush', '749', '1'),
(2, 1, 'Nike RYZ ', '229.7', '1'),
(3, 1, 'Jordan Zoom TRUNNER', '689', '1'),
(4, 2, 'Converse X Ambush', '749', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `user_pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `username`, `user_pass`) VALUES
('emirfahimi0@gmail.com', '2018220738', 'adidas'),
('zaimfirdaus92@gmail.com', 'emirfahimi', 'adidas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`customer_ID`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `productitem`
--
ALTER TABLE `productitem`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `test` (`customer_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productitem`
--
ALTER TABLE `productitem`
  MODIFY `product_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD CONSTRAINT `customerinfo_ibfk_1` FOREIGN KEY (`email`) REFERENCES `register` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productitem`
--
ALTER TABLE `productitem`
  ADD CONSTRAINT `test` FOREIGN KEY (`customer_id`) REFERENCES `customerinfo` (`customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
