-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 11:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moo_advice_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(191) DEFAULT NULL,
  `lastname` varchar(191) DEFAULT NULL,
  `home_address` varchar(191) DEFAULT NULL,
  `marrital_status` varchar(191) DEFAULT NULL,
  `education` varchar(191) DEFAULT NULL,
  `subjects` varchar(191) DEFAULT NULL,
  `religion` varchar(191) DEFAULT NULL,
  `state_of_origin` varchar(191) DEFAULT NULL,
  `dob` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `access_code` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `home_address`, `marrital_status`, `education`, `subjects`, `religion`, `state_of_origin`, `dob`, `image`, `access_code`) VALUES
(14, 'Frederick', 'Adebayo', '22, BODORIN STREET IKOYI LAGOS', 'single', 'B.Tech', 'Mathematics', 'christainity', '...', '2020-07-29', '94fa506fe3f15f0bbfcb6ad4445063f3.jpg', 1595001695),
(15, 'Thomas', 'Simpson', '22, isi road iju', 'single', 'B.Tech', 'English', 'christainity', '...', '2020-07-31', '157908639042file.jpg', 1595001862),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1595009632),
(26, 'Jesse', 'Banks', '2800 QUEBEC STREET NW  WASHINGTON, DC 20008', 'single', 'B.Tech', 'Mathematics,English', 'christainity', '...', '2020-07-30', '94fa506fe3f15f0bbfcb6ad4445063f3.jpg', 1595011611),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1595016639);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
