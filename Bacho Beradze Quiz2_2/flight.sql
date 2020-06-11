-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 05:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `flight_time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `flight_time`, `price`, `code`, `company`) VALUES
(15, 'aaaaaaaaaaaaaa', 6, 300, 'CEAIOKJRSTDVQ', 'aaaaaaaaaaaaaa'),
(17, 'ccccccccccccccccccccc', 3, 150, 'HUDVZXPYASFBO', 'ccccccccccccccccccc'),
(18, 'dddddddddddddddddd', 5, 250, 'TCVYMQOPHUSLX', 'ddddddddddddddddd'),
(19, 'eeeeeeeeeeeeeeeee', 8, 400, 'OXQPMHSBCGIEF', 'eeeeeeeeeeeeeeeeee'),
(20, 'ffffffffffffffffffffffff', 6, 300, 'JPDBVTOARQWUI', 'ffffffffffffffffffff'),
(21, 'gggggggggggggggggg', 7, 350, 'NSUTACLIGQFVX', 'gggggggggggggggggg'),
(22, 'hhhhhhhhhhhhhhhhhhh', 3, 150, 'SBCYJRLEOTZFD', 'hhhhhhhhhhhhhhhhhhhhhh'),
(23, 'iiiiiiiiiiiiiiiiiiiiiiiiii', 4, 200, 'NXAVBHPILJOUT', 'iiiiiiiiiiiiiiii'),
(24, 'jjjjjjjjjjjjjjjjjjj2', 1, 50, 'ULSFIKJXNTWQM', 'jjjjjjjjjjjjjjjjj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
