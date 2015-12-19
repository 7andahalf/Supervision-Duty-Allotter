-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2015 at 07:03 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sup`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(250) NOT NULL,
  `name` text NOT NULL,
  `rel` text NOT NULL,
  `sup` text NOT NULL,
  `pri` text NOT NULL,
  `not` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `rel`, `sup`, `pri`, `not`) VALUES
(1, 'aa', '4', '10', '1', '36'),
(2, 'bb', '2', '5', '1', ''),
(3, 'cc', '0', '8', '1', ''),
(4, 'dd', '2', '4', '1', ''),
(5, 'ee', '2', '10', '1', ''),
(6, 'ff', '4', '4', '1', ''),
(7, 'gg', '1', '10', '1', ''),
(8, 'hh', '0', '8', '1', ''),
(9, 'ii', '4', '4', '1', ''),
(10, 'a', '8', '10', '1', ''),
(11, 'b', '5', '10', '1', ''),
(12, 'c', '5', '10', '1', ''),
(13, 'd', '5', '10', '1', ''),
(14, 'e', '5', '10', '1', ''),
(15, 'f', '5', '10', '1', ''),
(16, 'g', '5', '10', '1', ''),
(17, 'g', '5', '10', '1', ''),
(18, 'h', '5', '10', '1', ''),
(19, 'i', '5', '10', '1', ''),
(20, 'j', '5', '10', '1', ''),
(21, 'k', '5', '10', '1', ''),
(22, 'l', '5', '10', '1', ''),
(23, 'm', '5', '10', '1', ''),
(24, 'n', '5', '10', '1', ''),
(25, 'o', '5', '10', '1', ''),
(26, 'p', '5', '10', '1', ''),
(27, 'q', '5', '10', '1', ''),
(28, 'r', '5', '10', '1', ''),
(29, 's', '5', '10', '1', ''),
(30, 't', '5', '10', '1', ''),
(31, 'u', '5', '10', '1', ''),
(32, 'v', '5', '10', '1', ''),
(33, 'w', '5', '10', '1', ''),
(34, 'x', '5', '10', '1', ''),
(35, 'y', '5', '10', '1', ''),
(36, 'z', '5', '10', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT '',
  `password_hint` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `address1` varchar(100) NOT NULL DEFAULT '',
  `address2` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(80) NOT NULL DEFAULT '',
  `state` varchar(20) NOT NULL DEFAULT '',
  `zip` varchar(20) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(125) NOT NULL DEFAULT '',
  `permissions` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_hint`, `lastname`, `firstname`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `url`, `permissions`) VALUES
(1, 'admin', '2e33a9b0b06aa0a01ede70995674ee23', 'no', 'ln', 'admin', 'admin@domain.com', '1234567890', '', '', '', '', '', '', '', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
