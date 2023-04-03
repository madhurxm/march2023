-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 01:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(3) NOT NULL,
  `user_ID` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `address` varchar(150) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `user_ID`, `Name`, `email`, `phone`, `password`, `address`, `qualification`, `gender`, `hobbies`, `dob`, `image`) VALUES
(30, 17, 'Piyush', 'piyush@gmail.com', '7777777777', '123456Ac', 'A', 'Post Graduate', 'Male', 'music', '2023-03-02', '17_0.jpg'),
(31, 12, 'Piyush', 'piyush@gmail.com', '7777777777', '123456Aa', 'asd', 'BCA', 'Male', 'cycling', '2023-03-01', '12_0.jpg,12_1.jpg'),
(32, 11, 'Piyush', 'piyush@gmail.com', '7777777777', '123456Aa', 'asd', 'BCA', 'Male', 'cycling, music', '2023-03-01', '11_0.jpg,11_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `user_ID` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
