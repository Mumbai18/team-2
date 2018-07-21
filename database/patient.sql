-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 07:50 PM
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
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_num` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(20) NOT NULL,
  `area` varchar(255) NOT NULL,
  `type_of_cancer` varchar(255) NOT NULL,
  `type_of_support` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `file_num`, `gender`, `age`, `area`, `type_of_cancer`, `type_of_support`, `remark`) VALUES
(1, 'John Diego', 'F1', 'Male', 29, 'New York', 'Prostatic', 'financial', 'good'),
(2, 'Anna Joseph', 'F2', 'Female', 23, 'London', 'Cervical', 'Emotional counselling', 'good'),
(3, 'Jessi Johnson', 'F3', 'Female', 32, 'Park Avenue', 'Tumuor', 'Emotional counselling', 'good'),
(4, 'Mark Malcolm', 'F4', 'Male', 23, 'Africa', 'Lung cancer', 'financial support', 'good'),
(5, 'Elissa Garett', 'F5', 'Female', 27, 'London', 'prostate', 'financial', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
