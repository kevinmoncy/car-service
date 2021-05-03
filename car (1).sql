-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 08:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adv`
--

CREATE TABLE `tbl_adv` (
  `adv_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adv`
--

INSERT INTO `tbl_adv` (`adv_id`, `login_id`, `name`, `address`, `phone`, `email`) VALUES
(1, 107, 'Vineeth', 'kannur', 0, '9874563211'),
(3, 110, 'jitin', 'dafddgdg', 0, '9547454215'),
(4, 113, 'advisor', 'wdghejfegfjegfjkgefk', 0, '8546237480'),
(5, 116, 'blaa', 'dfsf', 0, '723651565'),
(6, 118, 'hari', 'kochi', 0, '25874123655');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `comment`) VALUES
(4, 'dsf', 'kmoncy11@g', 'sdf'),
(5, 'Vineeth', 'kmoncy11@g', 'gh'),
(6, 'looooo', 'lo@gmail.c', 'ngghchychyc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `login_id` int(5) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`login_id`, `usertype`, `username`, `password`, `status`) VALUES
(2, 'user', 'kevin', 'Kevin@123', 1),
(100, 'admin', 'admin', 'admin', 1),
(103, 'user', 'sandes', 'Sandes', 1),
(104, 'user', 'akhil', 'Akhil@123', 1),
(105, 'user', 'nimal', 'Nimal@123', 1),
(106, 'adv', '', '', 1),
(107, 'adv', 'vinni', '12345678', 1),
(108, 'adv', '', '12345678', 1),
(109, 'adv', 'ad', '12345678', 1),
(110, 'adv', 'jitin', '12345678', 1),
(111, 'user', 'kevin', 'Kevin@123', 1),
(112, 'user', 'akshey', 'Akshey@123', 1),
(113, 'adv', 'add', '12345678', 1),
(114, 'user', 'AKH', 'Akhil@123', 1),
(115, 'user', 'ahil', 'Ahil@123', 1),
(116, 'adv', 'log1', '12345678', 1),
(117, 'user', 'vineeth', 'Vineeth@123', 1),
(118, 'adv', 'hari', '12345678', 1),
(119, 'user', 'ab', 'Ab@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg_id`, `login_id`, `name`, `address`, `email`, `phone`) VALUES
(5, 103, 'sandes', 'kottayam', 'sandes@gmai.com', 7012324153),
(10, 114, 'akhil', 'kgf', 'sfdsfsf@gmail.com', 9585215147),
(11, 115, 'ahil', 'kottayam', 'ahil@gmail.com', 9547869523),
(12, 117, 'vineeth', 'kanjirapalli', 'vineeth@gmail.com', 7896548957),
(13, 119, 'kfksb', 'vbsdvsb', 'afbsj@gmail.com', 6547458695);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `slotid` int(20) NOT NULL,
  `reg_id` int(5) NOT NULL,
  `vregno` varchar(20) NOT NULL,
  `vmodel` varchar(20) NOT NULL,
  `mileage` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`slotid`, `reg_id`, `vregno`, `vmodel`, `mileage`, `date`, `time`, `status`) VALUES
(22, 5, 'KL-05-AT7972', 'ROYAL ENFIELD 2019', 23000, '2021-04-22', '16:57:00', 1),
(23, 5, 'hhh', 'hjh', 655, '2021-04-08', '23:02:00', 1),
(24, 12, 'kl-08-bv-7174', 'yamaha', 240000, '2021-04-24', '15:39:00', 1),
(25, 5, 'kl-05-ah-8520', 'tata', 25000, '2021-04-29', '17:59:00', 1),
(26, 5, 'kl-08-1234567', 'abcd', 0, '2021-04-01', '01:00:00', 1),
(27, 13, '1425', 'ruru', 11, '2021-05-27', '16:57:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adv`
--
ALTER TABLE `tbl_adv`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`slotid`),
  ADD KEY `reg_id` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adv`
--
ALTER TABLE `tbl_adv`
  MODIFY `adv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `slotid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD CONSTRAINT `tbl_slot_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `tbl_reg` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
