-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 11:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbi_banking_system`
--
CREATE DATABASE IF NOT EXISTS `sbi_banking_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sbi_banking_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_accepted_customer`
--

CREATE TABLE `admin_accepted_customer` (
  `Id` int(50) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerAccountNo` bigint(50) NOT NULL,
  `CustomerAddress` varchar(200) NOT NULL,
  `CustomerBalance` bigint(50) NOT NULL,
  `CustomerContact` bigint(12) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `balance_info`
--

CREATE TABLE `balance_info` (
  `Customer_Id` int(10) NOT NULL,
  `Balance` bigint(20) NOT NULL,
  `AccountNo` bigint(20) NOT NULL,
  `WD` varchar(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_infor`
--

CREATE TABLE `contact_infor` (
  `Id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_copy`
--

CREATE TABLE `customer_copy` (
  `Customer_Id` int(20) NOT NULL,
  `PersonalNo` bigint(12) NOT NULL,
  `Photo_Id` varchar(200) NOT NULL,
  `Account_No` bigint(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `Customer_Id` int(20) NOT NULL,
  `Customer_Name` varchar(200) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(100) DEFAULT NULL,
  `City` varchar(10) NOT NULL,
  `State_` varchar(10) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `PersonalNo` bigint(12) NOT NULL,
  `OfficeNo` bigint(12) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `AAdhar` bigint(20) NOT NULL,
  `Pan` varchar(20) NOT NULL,
  `Photo_Id` varchar(200) NOT NULL,
  `Account_No` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Customer_Id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Account_No` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accepted_customer`
--
ALTER TABLE `admin_accepted_customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `balance_info`
--
ALTER TABLE `balance_info`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `contact_infor`
--
ALTER TABLE `contact_infor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_copy`
--
ALTER TABLE `customer_copy`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accepted_customer`
--
ALTER TABLE `admin_accepted_customer`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `balance_info`
--
ALTER TABLE `balance_info`
  MODIFY `Customer_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_infor`
--
ALTER TABLE `contact_infor`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_copy`
--
ALTER TABLE `customer_copy`
  MODIFY `Customer_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `Customer_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `Customer_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
