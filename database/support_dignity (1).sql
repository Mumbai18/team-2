-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 12:26 AM
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
-- Table structure for table `support dignity`
--

CREATE TABLE `support dignity` (
  `Prosthesis` varchar(40) NOT NULL,
  `Wigs` varchar(40) NOT NULL,
  `Pressure Bandages` varchar(40) NOT NULL,
  `Antim Sanskar Seva` varchar(40) NOT NULL,
  `Umbrella` varchar(40) NOT NULL,
  `Confidence Bags` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support dignity`
--

INSERT INTO `support dignity` (`Prosthesis`, `Wigs`, `Pressure Bandages`, `Antim Sanskar Seva`, `Umbrella`, `Confidence Bags`) VALUES
('masectomy', 'wigs of real or synthetic errors', 'lymphedema kits', 'to complete the last rides of the patien', 'during monsoons, free umbrellas are give', 'post surgery people have to carry draina');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
