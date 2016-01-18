-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2016 at 09:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sockmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `socks_2`
--

CREATE TABLE `socks_2` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `style` text NOT NULL,
  `color` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(19,4) NOT NULL,
  `updated` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socks_2`
--

INSERT INTO `socks_2` (`id`, `name`, `style`, `color`, `quantity`, `price`, `updated`) VALUES
(1, 'Susy', 'knee-high', 'red', 12, '4.9900', '01-13-2016'),
(2, 'Marianne', 'pink', 'ankle', 30, '3.5000', '01-13-2016'),
(3, 'Jenny', 'mini', 'blue', 10, '3.4500', '01-13-2016'),
(4, 'O''Shannon', 'mini', 'green', 24, '2.9900', '01-13-2016'),
(5, 'Divine', 'knee-high', 'pink', 6, '7.2500', '01-13-2016'),
(6, 'Divine', 'mini', 'pink', 6, '7.9900', '01-13-2016'),
(7, 'Luanne', 'ankle', '', 0, '0.0000', '01-13-2016'),
(8, 'Nancie', 'mini', 'purple', 10, '4.2500', '01-13-2016'),
(9, 'Faye', 'mini', 'white', 18, '3.7500', '01-13-2016'),
(10, 'Olivia', 'ankle', 'gray', 12, '2.9500', '01-13-2016'),
(11, 'Queen Anne', 'knee-high', 'yellow', 12, '4.9900', '01-13-2016'),
(12, 'Rhiann', 'mini', 'pink', 36, '3.9900', '01-13-2016'),
(13, 'Bonnie', 'mini', 'black', 12, '2.9500', '01-13-2016'),
(14, 'Maria', '&quot;other&quot;', '&amp;copy;orange', 24, '5.5000', '01-13-2016'),
(15, 'D''Shawn', 'mini', 'blue''', 12, '2.9900', '01-13-2016'),
(16, '', 'ankle', 'blue', 12, '1.9900', '01-13-2016'),
(17, 'Y''; UPDATE table SET', 'Y''; UPDATE table SET', 'Y''; UPDATE table SET', 12, '1.9900', '01-13-2016'),
(18, 'Greta', 'ankle', 'blue', 12, '6.2500', '01-14-2016'),
(19, 'Hermione', 'knee-high', 'argyle/multi', 12, '6.9900', '01-14-2016'),
(20, 'Isabel', 'mini', 'white', 30, '1.9900', '01-14-2016'),
(21, 'Kylie', 'ankle', 'green', 24, '2.2500', '01-14-2016'),
(22, 'Lulu', 'ankle', 'polka-dot/multi', 12, '2.9900', '01-14-2016'),
(23, 'Michelle', 'ankle', 'pink', 12, '1.9900', '01-14-2016'),
(24, 'Susy', 'mini', 'black stripe', 12, '3.5000', '01-14-2016'),
(25, 'Tanya', 'mini\\''mini', 'red', 12, '4.0000', '01-14-2016'),
(26, 'Ursula', 'knee-high', 'purple', 6, '3.9900', '01-14-2016'),
(27, 'Theresa', 'other', 'red', 12, '1.9900', '01-14-2016'),
(28, 'Vivien', 'knee-high', 'red', 12, '3.0000', '01-14-2016'),
(29, 'Lucia', 'knee-high', 'yellow', 18, '1.2500', '01-14-2016'),
(30, 'Princess Anne', 'knee-high', 'pink', 12, '4.2500', '01-14-2016'),
(31, 'Fatima', 'knee-high', 'black', 12, '1.5000', '01-14-2016'),
(32, 'Fatima', 'knee-high', 'black stripe', 12, '3.9900', '01-14-2016'),
(33, 'Fatima', 'knee-high', 'black stripe', 12, '4.9900', '01-14-2016'),
(34, 'Fatima', 'mini', 'black', 12, '3.9900', '01-14-2016'),
(35, 'Fay', 'ankle', 'pink', 12, '3.0000', '01-14-2016'),
(36, 'Fay', 'mini', 'pink', 12, '8.0000', '01-14-2016'),
(37, 'Fay', 'knee-high', 'red', 12, '9.0000', '01-14-2016'),
(38, 'Ann', 'mini', 'pink', 10, '4.0000', '01-14-2016'),
(39, 'Foobar', 'knee-high', 'dark purple', 12, '4.0000', '01-14-2016'),
(40, 'Lizzy', 'mini', 'red', 12, '2.7500', '01-15-2016'),
(41, 'Denise', 'knee-high', 'red', 36, '2.2500', '01-15-2016'),
(42, 'Luanne', 'knee-high', 'red', 12, '3.9900', '01-15-2016'),
(43, 'Alex', 'knee-high', 'blue', 12, '3.9900', '01-16-2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `socks_2`
--
ALTER TABLE `socks_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `socks_2`
--
ALTER TABLE `socks_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
