-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 02:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `fname`, `email`, `password`, `country`) VALUES
(19, 'Muhammad Nouman', 'Muhammad', 'mnouman@gmail.com', 'c37bf859faf392800d739a41fe5af151', 'Pakistan'),
(20, 'Maqbool', 'Hazoor bux', 'muhammadbilal@gmail.com', '4ca82782c5372a547c104929f03fe7a9', 'Pakistan'),
(26, 'Muhammd Bilal', 'Hazoor Bux', 'mbilal@gmail.com', '549e0ce7b784bc744f758c7828150d7e', 'India'),
(27, 'Abdul Moeid', 'Ashfaq Ahmad', 'abdulmoeid@gmail.com', 'beacb7ab4c99c7da47a8d54393b88a73', 'Bangladesh'),
(28, 'Zaheer Ahmad', 'Ashiq Hussain', 'zaheerahmad1063@gmail.com', '46ce43548c02f456f404df05f5267261', 'Pakistan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
