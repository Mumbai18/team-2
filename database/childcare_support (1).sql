-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 12:19 AM
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
-- Table structure for table `childcare support`
--

CREATE TABLE `childcare support` (
  `Retinoblastoma` varchar(40) NOT NULL,
  `Infection Control Kit` varchar(40) NOT NULL,
  `Ice Box` varchar(40) NOT NULL,
  `Discharge` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childcare support`
--

INSERT INTO `childcare support` (`Retinoblastoma`, `Infection Control Kit`, `Ice Box`, `Discharge`) VALUES
('when cancer strikes the eye of young pat', 'An infection control kit is given to eve', 'These are given to 150 pediatric patient', 'Each child who is discharged from the ho');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
