-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 02:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accon` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accon`, `username`, `phone`, `email`, `amount`, `date`) VALUES
(1, 'jaya', 7904881938, 'rjjai1235@gmail.com', 60000, 2147483647),
(2, 'kalaimani', 7904881938, 'kalaimani@gmail.com', 60500, 2147483647),
(3, 'hemanth', 1234569870, 'hemanth123@gmail.com', 85000, 2147483647),
(4, 'ranganathan', 7894560321, 'rangahot@gmail.com', 95000, 2147483647),
(5, 'ezhil', 4561237890, 'rangahot1@gmail.com', 1000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transa`
--

CREATE TABLE `transa` (
  `transid` int(100) NOT NULL,
  `s_id` int(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `location_` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transa`
--

INSERT INTO `transa` (`transid`, `s_id`, `sname`, `semail`, `rid`, `rname`, `remail`, `amount`, `location_`, `date`) VALUES
(1, 1, 'jaya', 'rjjai1235@gmail.com', 2, 'kalaimani', 'kalaimani@gmail.com', 10000, 'ponneri', '2021-07-21 00:02:46'),
(2, 1, 'jaya', 'rjjai1235@gmail.com', 3, 'hemanth', 'hemanth123@gmail.com', 30000, 'chennai', '2021-07-21 00:29:39'),
(3, 4, 'ranganathan', 'rangahot@gmail.com', 4, 'ranganathan', 'rangahot@gmail.com', 500, 'chennai', '2021-07-21 00:33:49'),
(5, 4, 'ranganathan', 'rangahot@gmail.com', 5, 'ezhil', 'rangahot1@gmail.com', 500, 'tada', '2021-07-21 11:52:18'),
(6, 4, 'ranganathan', 'rangahot@gmail.com', 3, 'hemanth', 'hemanth123@gmail.com', 5000, 'tada', '2021-07-21 12:22:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accon`);

--
-- Indexes for table `transa`
--
ALTER TABLE `transa`
  ADD PRIMARY KEY (`transid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transa`
--
ALTER TABLE `transa`
  MODIFY `transid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
