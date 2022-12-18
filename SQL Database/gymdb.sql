-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 08:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(60) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(60) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`) VALUES
(1, 'Incline Bench Press Machine', 50000, 'Most popular upper body exercise machine'),
(2, 'Treadmil Fitrun', 45000, 'Take control of your fitness with the newly updated Treadmil Fitrun'),
(3, 'Mass Tech', 10000, 'Mass gainer is a nutritional supplement that contain a healthy blend'),
(4, 'Nitro Tech', 15000, ' Healps grow in muscle mass and muscle maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(60) NOT NULL,
  `name` varchar(150) NOT NULL,
  `weight` decimal(3,2) NOT NULL,
  `height` decimal(3,2) NOT NULL,
  `bmi` decimal(3,2) NOT NULL,
  `age` int(60) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` int(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `user_type` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `weight`, `height`, `bmi`, `age`, `address`, `phone`, `password`, `user_type`) VALUES
(1, 'Mohamed', '9.99', '6.00', '8.00', 23, '222/A Galle Rd, Colombo 04', 761234567, '123', 2),
(2, 'Saman', '9.99', '5.00', '6.00', 25, '398/1 Dutch Rd, Colombo 11', 712345678, '123', 2),
(5, 'test', '5.00', '6.00', '7.00', 23, 'csjkjdck', 123456789, '123', 2),
(6, 'test', '5.00', '6.00', '7.00', 23, 'csjkjdck', 1234567891, '000', 2),
(7, 'Dailiya', '9.99', '5.00', '6.00', 21, '123/A Negombo Rd, Ja Ela', 719876543, '123', 2),
(8, 'Ruwan Perera', '6.00', '6.00', '9.00', 27, '221/B Diulapitiya Rd,Gampaha', 716369690, '123', 2),
(9, '', '0.00', '0.00', '0.00', 0, '', 0, '', 2),
(10, 'Dananjaya', '9.99', '6.00', '6.00', 26, '111/B galle Rd, Colombo 04', 714567890, '333', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
