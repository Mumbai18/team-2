-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 07:03 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` varchar(40) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'hagsj cgtrdty', 'john', 'UITYRsdgsf84655874', 'john@gmail.com', 'fdfszws', 2147483647, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `Low Income Finance` varchar(255) NOT NULL,
  `A 'unique' funding feature of V care` varchar(255) NOT NULL,
  `Special Finance` varchar(255) NOT NULL,
  `Bone Marrow Transplant` varchar(255) NOT NULL,
  `Germ Cell Tumor` varchar(255) NOT NULL,
  `Young Adult Finance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `General Day Care` varchar(255) NOT NULL,
  `Protein Powder at Head & Neck Department` varchar(255) NOT NULL,
  `Food Support` varchar(255) NOT NULL,
  `Food Coupons` varchar(255) NOT NULL,
  `Ek Pyala Chai` varchar(255) NOT NULL,
  `Infusion Bottles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `palliative`
--

CREATE TABLE `palliative` (
  `Home Care` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` int(40) NOT NULL,
  `type_of_u` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `age` int(40) NOT NULL,
  `phn_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
