-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullName`, `password`, `email`, `phone`, `dob`, `msg`) VALUES
(55, 'sonu kumar', '12345678', 'sonu@gmail.com', 9888848230, '2000-09-13', '                nice work            '),
(56, 'Sonu Kumar', '12345678', 'vicky@gmail.com', 9877127172, '1988-02-21', '                my name is sonu.            '),
(57, 'ravi Kumar', '12345678', 'ravi@gmail.com', 9888848230, '2003-02-21', 'my name is ravi.'),
(58, 'Parkash Kumar', '12345678', 'parkash@gmail.com', 8556068802, '2006-02-21', 'my name is Parkash.'),
(59, 'Bhishan Kumar', '12345678', 'bhishan@gmail.com', 8556068802, '2006-06-01', 'my name is bhishan.'),
(61, 'Parkash kumar', 'c', 'ggg@gmail.com', 8556068802, '2024-08-06', 'helo who'),
(62, 'kumar Kumar', '22222222', 'bhishankumar820@gmail.com', 8565256585, '2001-02-02', 'nashishb\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
