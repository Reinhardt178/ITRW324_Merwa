-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2018 at 02:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merwavok_Merwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleint`
--

CREATE TABLE `cleint` (
  `ID_Cleint` int(11) NOT NULL,
  `C_Name` varchar(45) NOT NULL,
  `C_Password` varchar(60) NOT NULL,
  `C_Email` varchar(45) NOT NULL,
  `C_Contact_Nr` varchar(10) NOT NULL,
  `C_Address` varchar(120) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleint`
--

INSERT INTO `cleint` (`ID_Cleint`, `C_Name`, `C_Password`, `C_Email`, `C_Contact_Nr`, `C_Address`, `latitude`, `longitude`) VALUES
(1, 'GreenWay Farms ', 'Gr33n@GF', 'sales@greenway.co.za', '0125861475', 'Plot 69, Tarlton, Gauteng', '', ''),
(2, 'Arrie Berry', '@B3rr&', 'berry.arrie@me.com', '0112365489', 'Plot 121B, Skeerpoort, North-West', '', ''),
(3, 'Clover farms', 'C!0ver', 'clfarms.95@yahoo.co.za', '0152364411', 'Farm Clover, Bultfontein, Free-State', '', ''),
(4, 'Mountain Views', 'Vi3w5@mountain', 'mountain.views@cloud.com', '0132541100', 'Mountain View, Atlanta, Limpopo', '', ''),
(5, 'Wild life Park', 'Park123*Wild', 'sales@wildlifep.co.za', '0112236210', 'Wild Life Park, Pilanesburg, North-West', '', ''),
(6, 'CX construction', 'BBulding5*', 'construction.cx@yahoo.co.za', '0284452369', 'Building 28, Wierdapark, Gauteng', '', ''),
(7, 'admin', 'admin', 'admin', 'admin', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nodemcu`
--

CREATE TABLE `nodemcu` (
  `nodemcu_ID` int(6) NOT NULL,
  `myData` varchar(45) NOT NULL,
  `timeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nodemcu`
--

INSERT INTO `nodemcu` (`nodemcu_ID`, `myData`, `timeStamp`) VALUES
(1, '25000', '0000-00-00 00:00:00.000000'),
(2, '32000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID_Order_Detail` int(11) NOT NULL,
  `OD_Date` date NOT NULL,
  `OD_Qty_Ordered` int(10) NOT NULL,
  `Client_ID` int(10) NOT NULL,
  `Product_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID_Order_Detail`, `OD_Date`, `OD_Qty_Ordered`, `Client_ID`, `Product_ID`) VALUES
(6, '2018-10-24', 7000, 0, 4),
(5, '2018-10-24', 5000, 0, 1),
(4, '2018-10-24', 10000, 0, 1),
(7, '2018-10-24', 7000, 0, 3),
(8, '2018-10-24', 7000, 0, 4),
(9, '2018-10-24', 8000, 0, 4),
(10, '2018-10-24', 8000, 7, 4),
(11, '2018-10-25', 5000, 7, 1),
(12, '2018-10-25', 6000, 7, 2),
(13, '2018-10-25', 8000, 7, 1),
(14, '2018-10-25', 10000, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_Product` int(5) NOT NULL,
  `Prod_Type` varchar(45) NOT NULL,
  `Prod_Avail` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Product`, `Prod_Type`, `Prod_Avail`) VALUES
(1, 'ULP 93', '1000000'),
(2, 'ULP 95', '1000000'),
(3, '500 PPM', '1000000'),
(4, '50 PPM', '1000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleint`
--
ALTER TABLE `cleint`
  ADD PRIMARY KEY (`ID_Cleint`);

--
-- Indexes for table `nodemcu`
--
ALTER TABLE `nodemcu`
  ADD PRIMARY KEY (`nodemcu_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID_Order_Detail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleint`
--
ALTER TABLE `cleint`
  MODIFY `ID_Cleint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nodemcu`
--
ALTER TABLE `nodemcu`
  MODIFY `nodemcu_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID_Order_Detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
