-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 03:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `sno` int(255) NOT NULL,
  `depkey` varchar(10) NOT NULL,
  `name` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`sno`, `depkey`, `name`) VALUES
(1, 'computer', 'COMPUTER SCIENCE'),
(2, 'mechanical', 'MECHANICAL ENGINEERING'),
(3, 'electronic', 'ELECTRONICS AND COMMUNICATION ENGINEERING'),
(4, 'production', 'PRODUCTION ENGINEERING'),
(5, 'civil', 'CIVIL ENGINEERING');

-- --------------------------------------------------------

--
-- Table structure for table `onair`
--

CREATE TABLE `onair` (
  `sno` int(255) NOT NULL,
  `paper_id` varchar(9999) NOT NULL,
  `start` varchar(999) NOT NULL,
  `end` varchar(999) NOT NULL,
  `date` varchar(97) NOT NULL,
  `url` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onair`
--

INSERT INTO `onair` (`sno`, `paper_id`, `start`, `end`, `date`, `url`) VALUES
(6, '5564', '08:00:AM', '10:00:AM', '2019-10-10', 'UYQb5hIvPd');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `sno` int(255) NOT NULL,
  `subcode` varchar(9999) NOT NULL,
  `paper_id` text NOT NULL,
  `maxm` int(10) NOT NULL,
  `sem` int(110) NOT NULL,
  `year` int(4) NOT NULL,
  `islive` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`sno`, `subcode`, `paper_id`, `maxm`, `sem`, `year`, `islive`) VALUES
(1, '1000', '5564', 72, 3, 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `sno` int(255) NOT NULL,
  `paper_id` int(200) NOT NULL,
  `question` longtext NOT NULL,
  `part` varchar(10) NOT NULL,
  `marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`sno`, `paper_id`, `question`, `part`, `marks`) VALUES
(1, 5564, 'What are Values?', 'B', 55),
(2, 5564, 'Difference between Morals and Values?', 'B', 55),
(3, 5564, 'What is Self-Learning?', 'A', 55),
(4, 5564, 'What are Professional Ethics?', 'A', 55),
(5, 5564, 'What is Work-Culture?', 'C', 55),
(6, 5564, 'Explain Johari Window Modal?', 'C', 55);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sno` int(255) NOT NULL,
  `name` varchar(9999) NOT NULL,
  `code` varchar(9999) NOT NULL,
  `sem` int(1) NOT NULL,
  `department` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sno`, `name`, `code`, `sem`, `department`) VALUES
(1, 'HVPE', '1000', 3, 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(255) NOT NULL,
  `uname` varchar(9999) NOT NULL,
  `password` varchar(9999) NOT NULL,
  `type` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `uname`, `password`, `type`) VALUES
(1, 'adminuser', 'dgarg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `onair`
--
ALTER TABLE `onair`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `onair`
--
ALTER TABLE `onair`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
