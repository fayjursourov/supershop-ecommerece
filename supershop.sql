-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 06:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(100) NOT NULL,
  `customerName` varchar(25) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `shippingAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(15) NOT NULL,
  `description` varchar(30) NOT NULL,
  `quantity` int(65) NOT NULL,
  `price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `description`, `quantity`, `price`) VALUES
(3, 'Food', 'good food', -5, '500'),
(4, 'Cack', 'Good cake', -7, '20'),
(5, 'Juice', 'awifjawoieifjoiwaefj', -6, '15'),
(6, 'pen', 'awiefwef', 1500, '5'),
(7, 'pen', 'awiefwef', 1500, '5'),
(8, 'Cack', 'kuhguig', 70, '600');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(200) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Sourov', 'sourov.gm@gmail.com', '12345'),
(2, 'Fayjur', 'fayjur@gmail.com', '123456'),
(3, 'ppp', 'awef', '23'),
(4, 'ppp', 'awef', '23'),
(5, 'ppp', 'awef', '23'),
(6, 'ppp', 'awef', 'wafe'),
(7, '', '', ''),
(8, '', '', ''),
(9, 'Mahfuz', 'mahfuz@gmail.com', 'afeawe'),
(10, 'qqqq', '', ''),
(11, 'tttt', '', ''),
(12, 'vvv', '', ''),
(13, 'pp', 'awef', '1232421'),
(14, 'sourov', 'sourov.gm@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
