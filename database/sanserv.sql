-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 07:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `carservice`
--

CREATE TABLE `carservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carservice`
--

INSERT INTO `carservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `comment`) VALUES
(0, 'jayant', 'jayant@gmail.com', '90876879', 'khjjshf', '10:01:00', '0009-08-08', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalservice`
--

CREATE TABLE `hospitalservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalservice`
--

INSERT INTO `hospitalservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `comment`) VALUES
(0, 'Ram ganga', 'ramganga@hospital.com', '098789097', 'mainpuri', '14:05:00', '2020-11-20', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `hotelservice`
--

CREATE TABLE `hotelservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `rooms` int(150) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelservice`
--

INSERT INTO `hotelservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `rooms`, `date`, `comment`) VALUES
(0, 'Jayant', 'jayant@ljfa.com', '0985993', 'jkandfn', '22:12:00', 0, '2020-11-13', 'NA\r\n'),
(0, 'pinache', 'pinache@gmail.com', '79574839', 'mathura', '22:14:00', 0, '2020-11-27', 'NA'),
(0, 'pinache', 'pinache@gmail.com', '79574839', 'mathura', '22:14:00', 12, '2020-11-27', 'NA'),
(0, 'pinache', 'pinache@gmail.com', '9875498390', 'kjksfn', '22:16:00', 23, '2020-11-07', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `houseservice`
--

CREATE TABLE `houseservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houseservice`
--

INSERT INTO `houseservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `comment`) VALUES
(1, 'Jayant', 'jayant@gmail.com', '9786', 'fkjsahf', '09:38:00', '3948-02-09', 'nothing'),
(2, 'JayantDwivedi', 'jayant123@gla.ac.in', '7598403', 'jhbsfdnm', '09:40:00', '2020-11-07', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `officeservice`
--

CREATE TABLE `officeservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `area` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeservice`
--

INSERT INTO `officeservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `area`, `date`, `comment`) VALUES
(0, 'ramkrishna', 'ramkrishna@gmail.com', '94983948', 'mathura', '10:21:00', '45 sq feet', '2020-11-22', 'NA'),
(0, 'kushagra', 'kjsifjio@gja.com', '95u3904u90', 'kljfsnjkan', '23:08:00', '34 ', '2020-11-13', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `schoolservice`
--

CREATE TABLE `schoolservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `rooms` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolservice`
--

INSERT INTO `schoolservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `rooms`, `comment`) VALUES
(0, 'St MArys', 'stmary@gmail.com', '9304904893', 'mainpuri', '23:09:00', '2020-11-20', 34, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `societyservice`
--

CREATE TABLE `societyservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `flats` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `societyservice`
--

INSERT INTO `societyservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `flats`, `comment`) VALUES
(0, 'Radha vallley', 'radha@gmail.com', '3493849348', 'mathura', '23:12:00', '2020-11-15', 34, 'Na');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'baluni123', '$2y$10$9YaIxTlx7UG3gvkgFRszZ.qRAvs5TFGMgiZinR9NNBf/zI3DZc186', '2020-10-27 18:12:33'),
(2, 'testjayant', '$2y$10$vTONusj0lCLI/G76G3LaE.F3HanLIqdHl8mzpfNznyl8RXxnvNX5y', '2020-10-27 18:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `warehouseservice`
--

CREATE TABLE `warehouseservice` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `area` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouseservice`
--

INSERT INTO `warehouseservice` (`id`, `name`, `email`, `mobile`, `address`, `time`, `date`, `area`, `comment`) VALUES
(0, 'Jayant', 'jayant@gmail.com', '903483408', 'jkjfsdknaf', '23:25:00', '2020-11-07', 43, 'NA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houseservice`
--
ALTER TABLE `houseservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houseservice`
--
ALTER TABLE `houseservice`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
