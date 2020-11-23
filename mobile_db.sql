-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2008 at 10:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `CART_ID` bigint(20) NOT NULL,
  `MOB_ID` int(11) NOT NULL,
  `CART_EMAIL` varchar(100) NOT NULL,
  `CART_PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`CART_ID`, `MOB_ID`, `CART_EMAIL`, `CART_PASSWORD`) VALUES
(1, 11, 'ganesh@gmail.com', 'ganesh'),
(2, 12, 'ganesh@gmail.com', 'ganesh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `COM_ID` int(11) NOT NULL,
  `COM_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`COM_ID`, `COM_NAME`) VALUES
(1, 'company 1'),
(2, 'company 2'),
(3, 'company 3'),
(4, 'company 4');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUS_ID` bigint(20) NOT NULL,
  `CUS_NAME` varchar(100) NOT NULL,
  `CUS_ADHAR` varchar(100) NOT NULL,
  `CUS_ADDRESS` varchar(100) NOT NULL,
  `CUS_MOBILE` bigint(20) NOT NULL,
  `CUS_EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_ID`, `CUS_NAME`, `CUS_ADHAR`, `CUS_ADDRESS`, `CUS_MOBILE`, `CUS_EMAIL`) VALUES
(1, 'abc', '345455435555545', 'ffffffff', 434555533545, '111@4'),
(2, 'Rajesh Sharma', '23342423544', '3444444', 45656754354456, '34@111'),
(3, 'Ramesh Sing', '54464534233444', 'ddfffffff', 456567544565, 'xyz@gmail.com'),
(4, 'Rohit Pathk', '1233444444133', 'thane', 5644444464634, '1223@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `MOB_ID` bigint(20) NOT NULL,
  `COM_ID` int(11) NOT NULL,
  `MOB_NAME` varchar(100) NOT NULL,
  `MOB_DISCRIPTION` varchar(110) NOT NULL,
  `MOB_RAM` varchar(110) NOT NULL,
  `MOB_SIZE` varchar(110) NOT NULL,
  `MOB_RANGE` varchar(100) NOT NULL,
  `MOB_SIM` varchar(100) NOT NULL,
  `PUR_PRIZE` int(10) NOT NULL,
  `SALE_PRIZE` int(10) NOT NULL,
  `MOB_COLOR` varchar(20) NOT NULL,
  `MOB_IMG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`MOB_ID`, `COM_ID`, `MOB_NAME`, `MOB_DISCRIPTION`, `MOB_RAM`, `MOB_SIZE`, `MOB_RANGE`, `MOB_SIM`, `PUR_PRIZE`, `SALE_PRIZE`, `MOB_COLOR`, `MOB_IMG`) VALUES
(2, 1, 'Abc', 'fddddd', '', '22(1)', 'aa', 'Dedicated', 60, 3000, 'white', 'uploads/2_mob.png'),
(3, 2, 'Samsung', 'gfttggfdertf', '', '22(2)', 'battery 1', 'Hybrid', 150, 200, 'grey', 'uploads/3_mob.png'),
(4, 2, 'Nokia', 'dddddesrr', '', '22(1)', 'ab', 'Dedicated', 1000, 40000, 'black', 'uploads/4_mob.png'),
(5, 2, 'Redmi 5', 'yhhghfgr', '', '22(1)', 'battery 1', 'Dedicated', 10000, 15000, 'orange', 'uploads/5_mob.png'),
(6, 1, 'Nokia', 'reeettetet', '', '22(3)', 'battery', 'Dedicated', 500, 600, 'red', 'uploads/6_mob.png'),
(7, 1, 'Intex', 'errrttrweret', '', '22(1)', 'battery', 'Hybrid', 600, 800, 'black', 'uploads/7_mob.png'),
(8, 4, 'LAVA', 'erfgfgdfgd', '', '22(2)', 'aa', 'Dedicated', 750, 1000, 'white', 'uploads/8_mob.png'),
(9, 3, 'LIVO', 'ertgfrfgdff', '', '22(1)', 'aa', 'Dedicated', 5000, 12000, 'blue', 'uploads/9_mob.png'),
(10, 2, 'REDMI 6', 'ythtghedtee', '', '22(3)', 'ab', 'Dedicated', 1500, 20000, 'black', 'uploads/10_mob.png'),
(11, 3, 'REDMI 4', 'erfgtrgfddfdfs', '', '22(2)', 'battery', 'Dedicated', 1000, 15000, 'red', 'uploads/11_mob.png'),
(12, 1, 'Samsung', 'errrrretdfdgggdg', '', '22(2)', 'battery 1', 'Dedicated', 9000, 11000, 'k', 'uploads/12_mob.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `ID` int(11) NOT NULL,
  `MOB_ID` int(11) NOT NULL,
  `MAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `PUR_ID` int(11) NOT NULL,
  `MOB_ID` int(11) NOT NULL,
  `VENDER_ID` int(11) NOT NULL,
  `PURCHASE_PRIZE` bigint(20) NOT NULL,
  `PUR_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PUR_ID`, `MOB_ID`, `VENDER_ID`, `PURCHASE_PRIZE`, `PUR_DATE`) VALUES
(1, 4, 2, 10000, '2008-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `REG_ID` int(11) NOT NULL,
  `REG_NAME` varchar(100) NOT NULL,
  `REG_MOBILE` bigint(20) NOT NULL,
  `REG_EMAIL` varchar(100) NOT NULL,
  `REG_ADDRESS` varchar(200) NOT NULL,
  `REG_PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`REG_ID`, `REG_NAME`, `REG_MOBILE`, `REG_EMAIL`, `REG_ADDRESS`, `REG_PASSWORD`) VALUES
(1, 'rohit sharma', 7345433432, 'rohit@gmil.com', 'delhi', 'rohit'),
(2, 'ganesh rajput', 7744231221, 'ganesh@gmail.com', 'pune', 'ganesh');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SALE_ID` int(11) NOT NULL,
  `MOB_ID` bigint(20) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `SALE_PRIZE` int(11) NOT NULL,
  `SALE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `VENDER_ID` bigint(20) NOT NULL,
  `VENDER__NAME` varchar(100) NOT NULL,
  `VENDER_ADHAR` varchar(100) NOT NULL,
  `VENDER_ADDRESS` varchar(100) NOT NULL,
  `VENDER_MOBILE` bigint(20) NOT NULL,
  `VENDER_EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vender`
--

INSERT INTO `vender` (`VENDER_ID`, `VENDER__NAME`, `VENDER_ADHAR`, `VENDER_ADDRESS`, `VENDER_MOBILE`, `VENDER_EMAIL`) VALUES
(1, 'vender1', '963562396926', 'latur', 3233333434, 'abc@gmail.com'),
(2, 'vender2', '415328566444', 'kallam', 7322254443, 'xyz@gmail.com'),
(3, 'vender3', '97656754479655', 'pune', 9635408065, 'aa@gmail.com'),
(4, 'vender4', '5590590682035-9', 'Mumbai', 34344433443, 'aba@135'),
(5, 'vender5', '65000000000234', 'nashik', 4345435344, 'ab@123321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`CART_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`COM_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_ID`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`MOB_ID`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`PUR_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`REG_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SALE_ID`);

--
-- Indexes for table `vender`
--
ALTER TABLE `vender`
  ADD PRIMARY KEY (`VENDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `CART_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUS_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `MOB_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `PUR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SALE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vender`
--
ALTER TABLE `vender`
  MODIFY `VENDER_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
