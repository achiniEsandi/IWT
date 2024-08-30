-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_line`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(3) NOT NULL,
  `paymentMethod` varchar(20) DEFAULT NULL,
  `cardNumber` varchar(19) DEFAULT NULL,
  `expireDate` date DEFAULT NULL,
  `billingAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `paymentMethod`, `cardNumber`, `expireDate`, `billingAddress`) VALUES
(3, 'visa', '1234-5678-9012-3456', '2024-12-01', '123 Main St, City, Country'),
(4, 'master', '9876-5432-1098-7654', '2025-06-01', '456 Elm St, City, Country'),
(5, 'visa', '2468-1357-9874-6203', '2023-10-01', '321 Maple St, City, Country'),
(6, 'master', '6543-2109-8765-4321', '2026-02-01', '789 Pine St, City, Country'),
(7, 'visa', '1357-2468-3024-9165', '2024-05-27', '654 Birch St, City, Country'),
(8, 'master', '3210-9876-5432-1098', '2023-11-01', '234 Oak St, City, Country'),
(9, 'visa', '5678-9012-3456-7890', '2025-04-01', '345 Cedar St, City, Country');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
