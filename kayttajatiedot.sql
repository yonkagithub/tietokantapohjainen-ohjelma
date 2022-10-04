-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: eu-cdbr-west-03.cleardb.net
-- Generation Time: Oct 04, 2022 at 10:29 PM
-- Server version: 5.6.50-log
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_2c2f227919345f2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kayttajatiedot`
--

CREATE TABLE `kayttajatiedot` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kayttajatiedot`
--

INSERT INTO `kayttajatiedot` (`id`, `Name`, `Description`) VALUES
(111, 'Yoonis', 'Opiskelija'),
(151, 'Jaska Jokunen', 'Sarjakuvahahmo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kayttajatiedot`
--
ALTER TABLE `kayttajatiedot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kayttajatiedot`
--
ALTER TABLE `kayttajatiedot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
