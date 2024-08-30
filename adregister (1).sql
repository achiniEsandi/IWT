-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adregister`
--

CREATE TABLE `adregister` (
  `Id` int(50) NOT NULL,
  `FristName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PhoneNumber` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adregister`
--

INSERT INTO `adregister` (`Id`, `FristName`, `LastName`, `PhoneNumber`, `Email`, `Password`) VALUES
(3, 'Dinuka Chamod', 'Dinuka', 781385408, 'dinukalearning12345@gmail.com', '$2y$10$n0VZtsGmGNPmRmOW6NkbiO9OogFhUiY34uPaq5JMzrENH3l0OcIoO'),
(4, 'Dinuka Chamod', 'Dinuka', 781385408, 'dinukalearning12345@gmail.com', '$2y$10$n0VZtsGmGNPmRmOW6NkbiO9OogFhUiY34uPaq5JMzrENH3l0OcIoO'),
(5, 'Dinuka Chamod', 'Dinuka12', 781385408, 'dinukalearning12345@gmail', '$2y$10$ZExsIz0FDllzI3Vqt9nUiekl.bFXdKbzClPs6LgFZ0FbH5D.RkT16'),
(6, 'Dinuka Chamod', 'Dinuka12', 781385408, 'dinukalearning12345@gmail', '$2y$10$ZExsIz0FDllzI3Vqt9nUiekl.bFXdKbzClPs6LgFZ0FbH5D.RkT16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adregister`
--
ALTER TABLE `adregister`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adregister`
--
ALTER TABLE `adregister`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
