-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 05:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accinfo`
--

CREATE TABLE `accinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `pwd` varchar(10) NOT NULL,
  `vehicle_cap` int(7) DEFAULT NULL,
  `start_loc` varchar(30) DEFAULT NULL,
  `dest_loc` varchar(30) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `return_time` time DEFAULT NULL,
  `fee` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accinfo`
--

INSERT INTO `accinfo` (`id`, `fname`, `lname`, `email_id`, `contact_no`, `pwd`, `vehicle_cap`, `start_loc`, `dest_loc`, `start_time`, `return_time`, `fee`) VALUES
(1, 'Rushabh', 'Mishra', 'rushabh.mishra@gmail.com', '9821198978', '123', 0, 'panvel', 'wadala', NULL, NULL, NULL),
(2, 'Abhishek ', 'Singh', 'singh.abhishek71@yahoo.com', '8286666607', 'abhi', 5, 'Matunga', 'Panvel', '10:00:00', '17:00:00', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accinfo`
--
ALTER TABLE `accinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accinfo`
--
ALTER TABLE `accinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
