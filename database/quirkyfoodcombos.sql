-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 04:44 PM
-- Server version: 10.6.20-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gvelkjyo_quirkyfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `quirkyfoodcombos`
--

CREATE TABLE `quirkyfoodcombos` (
  `id` int(11) NOT NULL,
  `food_combo` varchar(500) NOT NULL,
  `flavor` varchar(500) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quirkyfoodcombos`
--

INSERT INTO `quirkyfoodcombos` (`id`, `food_combo`, `flavor`, `time`, `date`) VALUES
(1, 'Ice Cream and Fries', 'Sweet and Savory', 'Snack', ''),
(2, 'Ice Cream and Fries', 'Sweet and Savory', 'Breakfast', '02-07-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quirkyfoodcombos`
--
ALTER TABLE `quirkyfoodcombos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quirkyfoodcombos`
--
ALTER TABLE `quirkyfoodcombos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
