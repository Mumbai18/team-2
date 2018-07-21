-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 08:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Tel_num` int(10) NOT NULL,
  `PAN` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `Name`, `username`, `password`, `email`, `Address`, `Tel_num`, `PAN`) VALUES
(1, 'hagsj cgtrdty', 'john', 'UITYRsdgsf84655874', 'john@gmail.com', 'fdfszws', 2147483647, '1234567890'),
(2, 'Ria Johnson', 'Rhea', '123', 'rhea@gmail.com', 'london', 998845677, '12345'),
(3, 'Billy Garett', 'Billy', '12345', 'billy@gmail.com', 'park avenue', 12345678, 'ABC123'),
(4, 'Chris Malcolm', 'chris', '123', 'chris123@gmail.com', 'washington', 786543281, 'XYZ345'),
(5, 'Harry Wilsons', 'harry', 'harry675', 'harry@gmail.com', 'California', 123456, 'YZQWE'),
(6, 'Garry Louis', 'garry', '345garry', 'garry3', 'LA', 15671239, 'TYHJ123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
