-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2018 at 09:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasoft_water_tank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tank_notification`
--

CREATE TABLE `tank_notification` (
  `notification_id` int(32) NOT NULL,
  `device_id` int(3) NOT NULL,
  `notification` text NOT NULL,
  `notification_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `danger` int(1) NOT NULL,
  `seen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank_notification`
--

INSERT INTO `tank_notification` (`notification_id`, `device_id`, `notification`, `notification_time`, `danger`, `seen`) VALUES
(1, 1, 'Tank Id: 1 is Empty.', '2018-06-20 12:04:41', 0, 1),
(2, 2, 'Tank Id: 2 is Empty.', '2018-06-20 12:28:14', 0, 1),
(3, 1, 'Tank Id: 1 is Full.', '2018-06-20 12:04:50', 0, 1),
(4, 2, 'Tank Id: 2 is Full.', '2018-06-20 12:28:22', 0, 1),
(5, 1, 'Tank Id: 1 is Empty.', '2018-06-20 12:34:46', 0, 1),
(6, 2, 'Tank Id: 2 is Empty.', '2018-06-20 13:52:22', 0, 1),
(7, 1, 'Tank Id: 1 is Full.', '2018-06-20 12:34:56', 0, 1),
(8, 2, 'Tank Id: 2 is Full.', '2018-06-20 13:53:30', 0, 1),
(9, 3, 'Tank Id: 3 is Empty.', '2018-06-20 13:54:51', 0, 1),
(10, 5, 'Tank Id: 5 is Empty.', '2018-06-20 13:55:24', 0, 1),
(11, 5, 'Tank Id: 5 is Full.', '2018-06-20 13:55:24', 0, 1),
(12, 5, 'Tank Id: 5 is Empty.', '2018-06-20 14:06:00', 0, 1),
(13, 5, 'Tank Id: 5 is Full.', '2018-06-20 14:06:22', 0, 1),
(14, 5, 'Tank Id: 5 is Full.', '2018-06-20 14:07:08', 0, 1),
(15, 3, 'Tank Id: 3 is Full.', '2018-06-20 14:51:16', 0, 1),
(16, 2, 'Tank Id: 2 is Empty.', '2018-06-20 14:52:11', 1, 1),
(17, 4, 'Tank Id: 4 is Empty.', '2018-06-20 14:52:18', 0, 1),
(18, 4, 'Tank Id: 4 is Full.', '2018-06-20 14:53:35', 0, 1),
(19, 4, 'Tank Id: 4 is Empty.', '2018-06-20 16:16:05', 0, 1),
(20, 4, 'Tank Id: 4 is Full.', '2018-06-20 16:17:11', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tank_status`
--

CREATE TABLE `tank_status` (
  `device_id` int(3) NOT NULL,
  `tank_status` int(1) NOT NULL,
  `owner` varchar(32) NOT NULL,
  `location` text NOT NULL,
  `expected_time_empty` int(3) NOT NULL,
  `Ip_address` varchar(500) NOT NULL,
  `water_lavel` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank_status`
--

INSERT INTO `tank_status` (`device_id`, `tank_status`, `owner`, `location`, `expected_time_empty`, `Ip_address`, `water_lavel`) VALUES
(1, 1, 'Sakibur Rahman', 'Rampura', 5, '192.168.0.1', '34%'),
(2, 0, 'Ariful Haque Real ', 'Mirpur', 0, '192.168.0.2', '64%'),
(3, 1, 'Hasan Mahmud', 'Shamoli', 24, '192.168.0.3', '54%'),
(4, 1, 'Sumaiya Tasmim Nuha', 'Dhaka', 24, '192.168.0.4', '100%'),
(5, 1, 'Apurba Kumar', 'Rampura', 8, '192.168.0.5', '21%');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `com_name` varchar(500) NOT NULL,
  `com_add` varchar(500) NOT NULL,
  `com_ph` varchar(500) NOT NULL,
  `com_email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `user_add` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `des_title` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `unit_price` varchar(500) NOT NULL,
  `quantity` varchar(400) NOT NULL,
  `total` varchar(500) NOT NULL,
  `subtotal` varchar(500) NOT NULL,
  `tax` varchar(500) NOT NULL,
  `grand` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `com_name`, `com_add`, `com_ph`, `com_email`, `username`, `user_add`, `user_email`, `des_title`, `des`, `unit_price`, `quantity`, `total`, `subtotal`, `tax`, `grand`) VALUES
(1, 'Datasoft Manufacturing & Assembly Inc. Ltd.', 'Rupayan Shelford,Shymoli,Dhaka', '01934566789', 'dma-bd@gmail.com', 'real ', 'adabor,Dhaka', 'real.l@gmail.com', 'Water Bill', 'Water Bill-january 2018', '40', '30', '1200', '1200', '300', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `postal` varchar(500) NOT NULL,
  `deviceId` int(11) NOT NULL,
  `phoneNumber` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `firstname`, `lastname`, `address`, `city`, `country`, `postal`, `deviceId`, `phoneNumber`, `password`) VALUES
(1, 'hasan', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka', 1, '8801736000000', '12345'),
(2, 'hasan', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka', 2, '8801736000001', '12345'),
(3, 'sa', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka', 3, '8801736000002', '12345'),
(4, 'su', 'mahmud3000@live.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka', 4, '8801736000003', '12345'),
(5, 'df', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka', 5, '8801736000004', '12345'),
(6, 'rumman', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka', 6, '8801736000005', '12345'),
(7, 'real', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka', 7, '8801736000006', '12345'),
(8, 'Hassan', 'hassan@gmail.com', 'Hassan', 'Hassan', 'Dkaka', 'Dhaka', 'Bangladesh', 'Dhaka', 8, '8801736000000', '12345'),
(9, 'Hassan', 'hassan1@gmail.com', 'Hassan', 'Hassan', 'Dkaka', 'Dhaka', 'Bangladesh', 'Dhaka', 9, '8801736000009', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tank_notification`
--
ALTER TABLE `tank_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tank_notification`
--
ALTER TABLE `tank_notification`
  MODIFY `notification_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
