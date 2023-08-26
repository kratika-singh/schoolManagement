-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 06:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `pass`) VALUES
(1, 'kratika', 'kratika', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `toWho` varchar(110) NOT NULL,
  `byWho` varchar(110) NOT NULL,
  `description` text NOT NULL,
  `des` varchar(100) NOT NULL,
  `whenDid` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `toWho`, `byWho`, `description`, `des`, `whenDid`) VALUES
(1, 'ewe', 'we', 'ew', '', '2023-04-23'),
(2, 'ds', 'get', 'dasfde', 'das', '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `sub` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  `due` datetime NOT NULL DEFAULT current_timestamp(),
  `remark` varchar(500) NOT NULL,
  `pathS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `class`, `description`, `sub`, `path`, `due`, `remark`, `pathS`) VALUES
(1, 'sd', 'wqdw', 'dw', 'd', '2023-04-23 20:29:22', '', '../images/1681678780494.jpg'),
(2, '2', 'er', 'sdf', '', '2023-04-23 20:29:22', '', ''),
(3, '2', 'er', 'sdf', '../images/', '2023-04-23 20:29:22', '', ''),
(4, '2', 'd', 'df', '../images/', '2023-04-23 20:29:22', '', ''),
(5, '2', 'd', 'df', '../images/', '2023-04-23 20:29:22', '', ''),
(6, '2', 'er', 'sdf', '../images/', '2023-04-23 20:29:22', '', ''),
(7, '2', 'er', 'sdf', '../images/', '2023-04-23 20:29:22', '', ''),
(8, '2', 'gf', 'gf', '../images/1681678780494.jpg', '2023-04-23 20:29:22', '', ''),
(9, '2', 'sd', 'qa', '../images/1681678780494.jpg', '2023-04-23 20:29:22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `description`, `path`) VALUES
(1, '2023-04-20 14:06:40', 'fe', 'images/1681678780494.jpg'),
(2, '2023-04-20 14:09:21', 'fe', 'images/1681678780494.jpg'),
(3, '2023-04-20 14:09:34', 'fe', 'images/1681678780494.jpg'),
(4, '2023-04-23 09:11:31', 'weffew', 'images/1681678780494.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` int(2) NOT NULL,
  `roll` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` text NOT NULL,
  `date` datetime NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sid`, `name`, `class`, `roll`, `email`, `phone`, `address`, `date`, `reason`) VALUES
(1, 'fe', 1, 2, 'de', 79030426, 'dw', '2023-04-23 05:53:12', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mo1` int(11) NOT NULL,
  `mo2` int(11) NOT NULL,
  `mo3` int(11) NOT NULL,
  `mo4` int(11) NOT NULL,
  `mo5` int(11) NOT NULL,
  `mo6` int(11) NOT NULL,
  `fm1` int(11) NOT NULL,
  `fm2` int(11) NOT NULL,
  `fm3` int(11) NOT NULL,
  `fm4` int(11) NOT NULL,
  `fm5` int(11) NOT NULL,
  `fm6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`id`, `sid`, `name`, `mo1`, `mo2`, `mo3`, `mo4`, `mo5`, `mo6`, `fm1`, `fm2`, `fm3`, `fm4`, `fm5`, `fm6`) VALUES
(1, 1, 'er', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` int(2) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `admno` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `pass` varchar(260) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `class`, `ph`, `admno`, `gender`, `fname`, `mname`, `email`, `address`, `username`, `lastname`, `dob`, `pass`, `path`) VALUES
(9, 'er', 1, '2', 1234, 'male', 'ge', 'gr', 'gds@ah', 'fr', 'r', 'ge', '1212-12-12', '1234', '../images/simg/'),
(10, 'Shibli', 0, '12', 0, 'option2', 'Ahmad', 'ewf', 'abc@xyzabc.com', 'we', 'w', 'Shibli', '1212-12-12', '1234', ''),
(15, 'ds', 1, '12', 123, 'option1', 'ds', 'ds', 'arshibli19@gmail.com', 'dass', 'dsa', 'ds', '1111-11-11', '12345', '../images/simg/1681678780494.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `sid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ph` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pass` varchar(260) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sid`, `username`, `ph`, `name`, `gender`, `fname`, `mname`, `dob`, `email`, `qual`, `lastname`, `address`, `pass`, `path`) VALUES
(3, 'shibli', 12, 'dsf', 'option1', 'fsda', 'df', '2023-04-17', 'df@m.com', '1', 'df', 'd', '123', '../images/simg/1681678780494.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `admno` (`admno`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
