-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 14, 2020 at 01:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Indo_Auz`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `username`, `email`, `subject`, `message`) VALUES
(1, 'atul', 'atul.beis.14@acharya.ac.in', 'Great', 'Hi'),
(2, 'ATULRAJ', 'thaolinh.doan@griffithuni.edu.au', 'Great', 'seeya'),
(3, 'atul', 'atul.beis.14@acharya.ac.in', 'Great', 'dchdscat'),
(4, 'Nikunj Bhatt', 'nikunj@gmail.com', 'hello', 'I wanna catch up'),
(5, 'jc706251', 'atul.beis.14@acharya.ac.in', 'cbdscbdscjsbdcjscsbcsjdc', 'bascjsbcjkdsbcdscjdsbcds'),
(6, 'atulllllllll', 'atul.beis.14@acharya.ac.in', 'namaste', 'come home'),
(7, 'jc706251', 'thaolinh.doan@griffithuni.edu.au', 'hello', 'cdshvsm');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password-repeat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Id`, `email`, `password`, `password-repeat`) VALUES
(1, 'thaolinh.doan@griffithuni.edu.au', '1234', '1234'),
(2, 'thaolinh.doan@griffithuni.edu.com\r\n', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'atul.beis.14@acharya.ac.in', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'thaolinh.doan@griffithuni.edu.au', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'atul.beis.14@acharya.ac.in', 'e0702c633509018484f85cf721ae36a7', 'e0702c633509018484f85cf721ae36a7'),
(6, 'nikunj@gmail.com', 'f8a58d5e7fe2202b4095a94bdc5575aa', 'f8a58d5e7fe2202b4095a94bdc5575aa'),
(7, 'atul.beis.14@acharya.ac.in', '36999f853eabf39fc161dbd52de73734', '36999f853eabf39fc161dbd52de73734'),
(8, 'atul.beis.14@acharya.ac.in', 'b8f8d1bb71b026e69121cda836ff0456', 'b8f8d1bb71b026e69121cda836ff0456');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bookingdate` varchar(255) DEFAULT NULL,
  `exacttime` varchar(255) DEFAULT NULL,
  `people` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `username`, `email`, `bookingdate`, `exacttime`, `people`) VALUES
(3, 'Atul Raj Tewary', 'atul.beis.14@acharya.ac.in', '2020-12-18', '13:59', '3'),
(4, 'Atul Raj Tewary', 'atul.beis.14@acharya.ac.in', '2020-12-10', '13:59', '5+'),
(5, 'Thao Linh Doan', 'thaolinh.doan@griffithuni.edu.au', '2020-12-25', '01:00', '4'),
(6, 'Nikunj Bhatt', 'nk@gmail.com', '2020-12-17', '00:59', '5+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
