-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 09:11 PM
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
-- Database: `flyflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Fname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Pnumber` int(10) NOT NULL,
  `CountryResidence` varchar(50) NOT NULL,
  `Departure` varchar(50) NOT NULL,
  `Arrival` varchar(50) NOT NULL,
  `DDate` date NOT NULL,
  `ADate` date NOT NULL,
  `Ptype` varchar(10) NOT NULL,
  `FoodPrefernce` varchar(10) NOT NULL,
  `Needs` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Fname`, `Address`, `Pnumber`, `CountryResidence`, `Departure`, `Arrival`, `DDate`, `ADate`, `Ptype`, `FoodPrefernce`, `Needs`) VALUES
('rumeth', '', 0, '', 'Country', 'Country', '0000-00-00', '0000-00-00', '', '', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'Country', 'Country', '2024-05-07', '2024-05-16', 'nothing', 'Western', ''),
('rumeth', 'Country', 112846288, 'Country', 'USA', 'USA', '2024-05-06', '2024-05-09', 'nothing', 'Western', 'on,'),
('', 'Country', 112846288, 'Country', 'USA', 'USA', '2024-05-06', '2024-05-17', 'nothing', 'Western', 'on,'),
('rumeth', 'Norway', 112846288, 'Japan', 'USA', 'India', '2024-05-06', '2024-05-17', 'nothing', 'Western', 'on,'),
('rumeth', 'UK', 112846288, 'UK', 'UK', 'UK', '2024-05-14', '2024-05-22', 'nothing', 'Indian', 'Yes'),
('rumeth', 'Country', 112846288, 'UK', 'USA', 'Japan', '2024-05-07', '2024-05-15', 'nothing', 'Indian', 'Yes'),
('', '', 0, '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('', '', 0, '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('Esandi', 'USA', 0, 'USA', 'USA', 'Japan', '2024-06-06', '2024-06-09', 'Nothing', 'Sri Lankan', 'No'),
('Esandi', 'USA', 0, 'USA', 'USA', 'Japan', '2024-06-06', '2024-06-09', 'Nothing', 'Sri Lankan', 'No'),
('Esandi', 'USA', 125468646, 'USA', 'UK', 'USA', '2024-05-20', '2024-06-08', 'Nothing', 'Sri Lankan', 'No'),
('Chathumi', 'USA', 56484964, 'Japan', 'USA', 'India', '2024-05-13', '2024-05-26', 'Nothing', 'Indian', 'No'),
('Chathumi', 'USA', 123564, 'Japan', 'Japan', 'Norway', '2024-05-20', '2024-06-09', 'Delhi', 'Sri Lankan', 'No'),
('Esandi', 'UK', 54645615, 'USA', 'USA', 'USA', '2024-05-28', '2024-06-28', 'Male', 'Sri Lankan', 'No'),
('Rumeth', 'Norway', 745812, 'Norway', 'Norway', 'USA', '2024-05-20', '2024-07-07', 'Male', 'Indian', 'No'),
('Januda', 'USA', 4652132, 'USA', 'USA', 'Japan', '2024-05-13', '2024-06-09', 'Nothing', 'Western', 'No'),
('Esandi', 'USA', 896464, 'USA', 'USA', 'USA', '2024-05-31', '2024-05-28', 'Delhi', 'Sri Lankan', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(10) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `Full name` varchar(20) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email address` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Postal code` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Enter Password` varchar(20) NOT NULL,
  `Re-enter Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `Title`, `Full name`, `Date of Birth`, `Gender`, `Email address`, `Country`, `Adress`, `Postal code`, `Username`, `Enter Password`, `Re-enter Password`) VALUES
(4, 'Mrs.', 'Rumeth Amarasiri', '2024-05-10', 'Male', 'rumethamara@gmail.com', 'Sri Lanka', 'Hsbzbnsnssnjsbebshs', 10640, 'IT23151888', 'rumeth2003', 'rumeth2003'),
(21, 'Mr.', 'Rumeth Amarasiri', '2024-05-25', 'Female', 'rumethamara@gmail.com', 'Sri Lanka', 'Hsbzbnsnssnjsbebshs', 10640, 'rumeth._', '12345', '12345'),
(22, 'Mr.', 'Rumeth Amarasiri', '2024-05-25', 'Female', 'rumethamara@gmail.com', 'Sri Lanka', 'Hsbzbnsnssnjsbebshs', 10640, 'rumeth._', '12345', '12345'),
(23, 'Mr.', 'Rumeth Amarasiri', '2024-05-25', 'Female', 'rumethamara@gmail.com', 'Sri Lanka', 'Hsbzbnsnssnjsbebshs', 10640, 'rumeth._', '12345', '12345'),
(24, 'Mr.', 'menaka dilhani', '2024-05-31', 'Male', 'rumethamara@gmail.com', 'australia', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '123', '123'),
(25, 'Mr.', 'menaka dilhani', '2024-05-31', 'Male', 'rumethamara@gmail.com', 'australia', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '123', '123'),
(26, 'Mr.', 'menaka dilhani', '2024-05-31', 'Male', 'rumethamara@gmail.com', 'australia', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '123', '123'),
(27, 'Mr.', 'menaka dilhani', '2024-05-31', 'Male', 'rumethamara@gmail.com', 'australia', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '123', '123'),
(28, 'Mr.', 'menaka dilhani', '2024-05-24', 'Male', 'rumethamara@gmail.com', 'Sri Lanka', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '1234', '1234'),
(29, 'Mr.', 'menaka dilhani', '2024-05-24', 'Male', 'rumethamara@gmail.com', 'Sri Lanka', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '1234', '1234'),
(30, 'Mr.', 'Rumeth Amarasiri', '2024-05-10', 'Male', 'rumethamara@gmail.com', 'Sri Lanka', 'Hsbzbnsnssnjsbebshs', 10640, 'rumeth._', '33333', '33333'),
(31, 'Mr.', 'menaka dilhani', '2024-05-31', 'Female', 'rumethamara@gmail.com', 'Sri Lanka', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '3333', '3333'),
(32, 'Mr.', 'menaka dilhani', '2024-05-31', 'Female', 'rumethamara@gmail.com', 'Sri Lanka', '473/6, weliwita road, kaduwela', 10640, 'rumeth._', '3333', '3333'),
(34, '', '', '0000-00-00', '', '', '', '', 0, '', '', ''),
(35, 'Mr.', 'Rumeth', '2024-05-09', 'Male', 'rumeth@gmail.com', 'Sri Lanka', 'Malabe', 45616, 'it455822', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `FeedbackTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Rate` int(11) NOT NULL,
  `FeedbackDescription` varchar(255) NOT NULL,
  `FeedbackStatus` varchar(255) NOT NULL,
  `RespondedTime` datetime NOT NULL,
  `Response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `Type`, `FeedbackTime`, `Rate`, `FeedbackDescription`, `FeedbackStatus`, `RespondedTime`, `Response`) VALUES
(1, 'hotel', '2024-05-08 20:25:23', 2, 'Good', '', '2024-05-09 01:55:15', 'Inform admin'),
(2, 'hotel', '0000-00-00 00:00:00', 2, 'Good', '', '0000-00-00 00:00:00', ''),
(3, 'hotel', '0000-00-00 00:00:00', 1, 'Best', '', '0000-00-00 00:00:00', ''),
(4, 'customer support', '0000-00-00 00:00:00', 2, 'Improve', '', '0000-00-00 00:00:00', ''),
(5, 'payments', '0000-00-00 00:00:00', 1, 'Payment portal is not secured', '', '0000-00-00 00:00:00', ''),
(6, 'customer support', '2024-05-09 02:28:04', 3, 'Friendly and resolved my problem as soon as possible', '', '0000-00-00 00:00:00', ''),
(7, 'hotel', '0000-00-00 00:00:00', 2, 'Could improve', '', '0000-00-00 00:00:00', ''),
(8, 'reservation', '2024-05-09 02:34:28', 2, 'Not bad', '', '2024-05-09 08:05:00', 'Improve reservation system'),
(9, 'customer support', '2024-05-05 12:16:58', 1, 'Worst', '', '0000-00-00 00:00:00', ''),
(10, 'hotel', '2024-05-09 02:28:59', 2, 'Worst', '', '2024-05-09 07:58:00', 'Inform hotel agent'),
(11, 'customer support', '2024-05-07 02:38:21', 5, 'The BEST!', '', '0000-00-00 00:00:00', ''),
(12, 'hotel', '2024-05-08 07:00:04', 2, 'nice', '', '0000-00-00 00:00:00', ''),
(13, 'reservation', '2024-05-08 16:00:06', 5, 'Good experience', '', '0000-00-00 00:00:00', ''),
(50, 'customer support', '2024-05-08 12:30:48', 1, 'Bad experience', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FeedbackID` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `FeedbackTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Rate` int(11) NOT NULL,
  `FeedbackDescription` varchar(255) NOT NULL,
  `FeedbackStatus` varchar(255) NOT NULL,
  `RespondedTime` datetime NOT NULL,
  `Response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FeedbackID`, `Type`, `FeedbackTime`, `Rate`, `FeedbackDescription`, `FeedbackStatus`, `RespondedTime`, `Response`) VALUES
(1, 'reservation', '2024-05-09 02:52:48', 5, 'The Best!', '', '0000-00-00 00:00:00', ''),
(2, 'hotel', '2024-05-09 02:52:36', 1, 'Bad room service experience', 'Negative', '2024-05-09 08:21:00', 'Inform hotel '),
(3, 'customer support', '2024-05-09 13:35:06', 3, 'Good', 'Positive', '2024-05-09 19:04:00', 'Good'),
(4, 'customer support', '2024-05-09 16:29:58', 4, 'Best!', '', '0000-00-00 00:00:00', ''),
(5, 'reservation', '2024-05-09 15:22:07', 2, 'Could improve', '', '0000-00-00 00:00:00', ''),
(6, 'reservation', '2024-05-09 15:28:21', 3, 'Good', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_type`
--

CREATE TABLE `feedback_type` (
  `id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_type`
--

INSERT INTO `feedback_type` (`id`, `feedback`) VALUES
(1, 'Hotels'),
(2, 'Reservations'),
(3, 'Customer support'),
(4, 'Payments');

-- --------------------------------------------------------

--
-- Table structure for table `flightsearch`
--

CREATE TABLE `flightsearch` (
  `SearchID` int(11) NOT NULL,
  `Start` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Passengers` int(7) NOT NULL,
  `Departure Date` date NOT NULL,
  `Arrival Date` date NOT NULL,
  `TripType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flightsearch`
--

INSERT INTO `flightsearch` (`SearchID`, `Start`, `Destination`, `Class`, `Passengers`, `Departure Date`, `Arrival Date`, `TripType`) VALUES
(1, '', 'BIA', 'First', 2, '2024-05-15', '0000-00-00', 'on'),
(2, 'ATL', 'BIA', 'Economy', 2, '2024-05-06', '2024-05-29', 'on'),
(3, 'LAX', 'LAX', 'First', 2, '2024-05-05', '2024-05-31', 'on'),
(4, 'BIA', 'LHR', 'First', 1, '2024-05-14', '2024-06-14', 'on'),
(5, 'BIA', 'LHR', 'First', 1, '2024-05-14', '2024-06-14', 'on'),
(6, 'ATL', 'ATL', 'First', 1, '2024-05-06', '2024-05-26', ''),
(7, 'BIA', 'DXB', 'First', 2, '2024-05-06', '2024-06-01', 'Array'),
(8, 'BIA', 'LAX', 'First', 2, '2024-05-06', '2024-06-01', 'on'),
(9, 'ATL', 'BIA', 'First', 3, '2024-05-13', '2024-05-27', 'on'),
(10, '', '', '', 0, '0000-00-00', '0000-00-00', ''),
(11, 'BIA', 'LHR', 'First', 2, '2024-05-06', '2024-05-20', 'return'),
(12, 'BIA', 'LHR', 'First', 2, '2024-05-06', '2024-05-13', 'multi'),
(13, 'BIA', 'LHR', 'First', 2, '2024-05-06', '2024-05-13', 'multi'),
(14, 'BIA', 'LHR', 'Economy', 2, '2024-05-14', '2024-06-07', 'return'),
(15, 'BIA', 'DXB', 'First', 2, '2024-05-27', '2024-05-29', 'return'),
(16, '', '', '', 0, '0000-00-00', '0000-00-00', ''),
(17, 'ATL', 'LAX', 'First', 2, '2024-05-07', '2024-05-14', 'oneway'),
(18, 'ATL', 'BIA', 'First', 2, '2024-06-09', '2024-06-19', 'oneway'),
(19, 'BIA', 'LHR', 'Business', 3, '2024-05-14', '2024-05-28', 'return'),
(20, 'BIA', 'DXB', 'First', 3, '2024-05-22', '2024-06-09', 'multi'),
(21, 'LAX', 'BIA', 'Business', 3, '2024-05-09', '2024-05-30', 'oneway'),
(22, 'LAX', 'BIA', 'First', 2, '2024-05-29', '2024-06-09', 'oneway'),
(23, 'LAX', 'DXB', 'First', 3, '2024-05-14', '2024-05-27', 'oneway'),
(24, 'LAX', 'BIA', 'Business', 4, '2024-05-10', '2024-05-08', 'oneway'),
(25, 'LAX', 'LHR', 'Economy', 2, '2024-05-13', '2024-06-09', 'oneway'),
(26, 'LAX', 'BIA', 'Economy', 2, '2024-05-23', '2024-06-08', 'oneway'),
(27, 'LAX', 'DXB', 'Economy', 3, '2024-05-27', '2024-06-09', 'oneway'),
(28, 'LAX', 'LHR', 'Economy', 4, '2024-05-13', '2024-06-09', 'oneway');

-- --------------------------------------------------------

--
-- Table structure for table `flight_type`
--

CREATE TABLE `flight_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_type`
--

INSERT INTO `flight_type` (`id`, `type`) VALUES
(1, 'one_way'),
(2, 'return_trip'),
(3, 'multi_city');

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
(7, 'visa', '1357-2468-3024-9165', '2024-05-18', '654 Birch St, City, Country'),
(8, 'master', '3210-9876-5432-1098', '2023-11-01', '234 Oak St, City, Country'),
(9, 'visa', '5678-9012-3456-7890', '2025-04-01', '345 Cedar St, City, Country'),
(11, 'master', '1111-2222-3333-4444', '2024-05-14', 'Hii'),
(12, 'master', '1111-2222-3333-4444', '2024-05-14', 'Hii'),
(13, 'master', '1111-2222-3333-4444', '2024-05-14', 'Hii'),
(14, 'master', '1111-2222-3333-4444', '2024-05-14', 'Hii'),
(15, 'master', '4444-4444-4444-4444', '2024-05-24', 'hi'),
(17, 'master', '3656-4878-5454-8789', '2024-02-08', 'Hello!'),
(18, 'visa', '4444-4444-4445-6565', '2025-10-23', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `splogindatabase`
--

CREATE TABLE `splogindatabase` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('23168954', '2003'),
('it23182332', '20031213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `feedback_type`
--
ALTER TABLE `feedback_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightsearch`
--
ALTER TABLE `flightsearch`
  ADD PRIMARY KEY (`SearchID`);

--
-- Indexes for table `flight_type`
--
ALTER TABLE `flight_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `splogindatabase`
--
ALTER TABLE `splogindatabase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback_type`
--
ALTER TABLE `feedback_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flightsearch`
--
ALTER TABLE `flightsearch`
  MODIFY `SearchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `flight_type`
--
ALTER TABLE `flight_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
