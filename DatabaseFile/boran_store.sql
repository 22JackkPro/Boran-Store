-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boran_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_Name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_Name`, `admin_pass`) VALUES
('adminACC', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `IMAGE` text NOT NULL,
  `WIDTH` double NOT NULL,
  `HEIGHT` double NOT NULL,
  `PRICE` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  `QTY` int(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `DATE`) VALUES
(47, 'hengtong', 'hentong123@gmail.com', '123', '0000-00-00'),
(48, 'me', 'me@me', '123', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_product`
--

CREATE TABLE `furniture_product` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  `WIDTH` double NOT NULL,
  `HEIGHT` double NOT NULL,
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ly_furniture_product`
--

CREATE TABLE `ly_furniture_product` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  `WIDTH` double NOT NULL,
  `HEIGHT` double NOT NULL,
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `IMAGE` text NOT NULL,
  `COLOR` varchar(20) NOT NULL,
  `PRICE` double NOT NULL,
  `QTY` int(11) NOT NULL,
  `TOTAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`ID`, `TITLE`, `IMAGE`, `COLOR`, `PRICE`, `QTY`, `TOTAL`) VALUES
(79, ' Modern Lamps  ', ' ../../product_image_storage/modernLamps.jpg ', '', 150, 1, 150),
(80, ' Modern Lamps  ', ' ../../product_image_storage/modernLamps.jpg ', '', 150, 3, 450),
(81, ' Modern Lamps  ', ' ../../product_image_storage/modernLamps.jpg ', '', 150, 1, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `furniture_product`
--
ALTER TABLE `furniture_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ly_furniture_product`
--
ALTER TABLE `ly_furniture_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `furniture_product`
--
ALTER TABLE `furniture_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `ly_furniture_product`
--
ALTER TABLE `ly_furniture_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
