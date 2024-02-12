-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 02:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developer`
--

-- --------------------------------------------------------

--
-- Table structure for table `back`
--

CREATE TABLE `back` (
  `Id` int(22) NOT NULL,
  `First Name` varchar(33) NOT NULL,
  `Father Name` varchar(22) NOT NULL,
  `Nic` varchar(22) NOT NULL,
  `Email Address` varchar(33) NOT NULL,
  `Contact No` varchar(22) NOT NULL,
  `Designation` varchar(34) NOT NULL,
  `Experience` varchar(33) NOT NULL,
  `Salary` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `back`
--

INSERT INTO `back` (`Id`, `First Name`, `Father Name`, `Nic`, `Email Address`, `Contact No`, `Designation`, `Experience`, `Salary`) VALUES
(2, '  Awais ', 'Fareed', '2147483647', 'awaisshaikh020@gmail.com', '2147483647', ' Back End Developer', '4 years', 34),
(5, '  hussain ', 'Shaikh', '21314', 'front@gmail.com', '123', ' Back End Developer', '2 years', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(22) NOT NULL,
  `First Name` varchar(33) NOT NULL,
  `Father Name` varchar(45) NOT NULL,
  `Email Address` varchar(66) NOT NULL,
  `Nic` varchar(55) NOT NULL,
  `Contact No` varchar(88) NOT NULL,
  `Designation` varchar(44) NOT NULL,
  `Salary` varchar(33) NOT NULL,
  `Experience` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `First Name`, `Father Name`, `Email Address`, `Nic`, `Contact No`, `Designation`, `Salary`, `Experience`) VALUES
(2, ' Awais123', 'ali', 'Awaisshaikh020@gmail.com ', '342234', '2147483647', 'junior developer', '323333333333333', '2 years'),
(3, ' yumna', 'Ali', 'saghsaf@gmail.com ', '2147483647', '2147483647', 'Front End Developer', '34,000', '2 years'),
(4, ' yumna', 'ali', 'Awaisshaikh020@gmail.com ', '333333333', '2147483647', 'junior developer', '4 years', '3 year'),
(6, ' qamar', 'shoqak', 'Awaisshaikh020@gmail.com ', '2147483647', '5655445', 'fgfggh', '1,00000', '2 years'),
(7, ' Hamza', 'shoqak', 'baig123@gmail.com ', '2147483647', '3567889', 'junior developer', '34,0002', '2 years'),
(9, '  abdullah ', 'ali', 'saghsaf@gmail.com', '2147483647', '2147483647', ' junior developer', '34,000 ', '2 years'),
(21, ' khan', 'shezad', 'baig123@gmail.com ', '2147483647', '2147483647', 'Back End Developer', '34,000', '2 years'),
(22, ' khan', 'shoqak', 'baig123@gmail.com ', '2147483647', '2147483647', 'Back End Developer', '4 years', '2 years');

-- --------------------------------------------------------

--
-- Table structure for table `full`
--

CREATE TABLE `full` (
  `Id` int(22) NOT NULL,
  `First Name` varchar(33) NOT NULL,
  `Father Name` varchar(45) NOT NULL,
  `Nic` varchar(34) NOT NULL,
  `Email Address` varchar(66) NOT NULL,
  `Contact No` varchar(33) NOT NULL,
  `Designation` varchar(45) NOT NULL,
  `Experience` varchar(34) NOT NULL,
  `Salary` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `full`
--

INSERT INTO `full` (`Id`, `First Name`, `Father Name`, `Nic`, `Email Address`, `Contact No`, `Designation`, `Experience`, `Salary`) VALUES
(1, '  Awais ', 'ali', '3543534', 'front@gmail.com', '2147483647', ' full stack developer', '3 year', 34),
(4, ' Hamza', 'Fareed', '11111111', 'front@gmail.com ', '2147483647', 'full stack developer', '10 years', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nic` (`Id`,`First Name`,`Father Name`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `full`
--
ALTER TABLE `full`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `back`
--
ALTER TABLE `back`
  MODIFY `Id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `full`
--
ALTER TABLE `full`
  MODIFY `Id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
