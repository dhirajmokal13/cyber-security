-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2021 at 10:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17310037_cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `name`) VALUES
(1, 'admin', '8668893166', 'Dhiraj Mokal'),
(5, 'N@chiket1', 'nachiket123', 'Nachiket Rajendra lokhande');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` text NOT NULL,
  `comment` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `phone`, `comment`, `dt`) VALUES
(6, 'Dhiraj Mokal', 'dhirajmokal13@gmail.com', '8668893166', ' Hosted', '2021-07-26 05:57:49'),
(7, 'Dhiraj Sudhakar Mokal', 'dhirajmokal13@gmail.com', '08668893166', ' hi website is hosted successfully', '2021-07-27 02:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `d_id` int(3) NOT NULL,
  `message` text NOT NULL,
  `sno` int(3) NOT NULL,
  `fid` int(3) NOT NULL,
  `d_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`d_id`, `message`, `sno`, `fid`, `d_date`) VALUES
(16, 'yes we will try this forum make better will respective content', 2, 3, '2021-06-30 12:32:39'),
(19, 'Hi', 1, 3, '2021-07-26 08:51:34'),
(21, 'hhh', 5, 8, '2021-07-28 09:57:11'),
(22, 'hello', 5, 8, '2021-07-28 09:57:20'),
(23, 'welcome', 1, 8, '2021-07-29 08:15:46'),
(24, 'hi&nbsp;use&nbsp;this&nbsp;site', 1, 8, '2021-07-29 08:16:07'),
(25, 'Ok&nbsp;atul&nbsp;we&nbsp;will&nbsp;help&nbsp;you&nbsp;', 1, 20, '2021-08-01 04:35:12'),
(26, 'ok', 21, 20, '2021-08-01 04:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `fid` int(3) NOT NULL,
  `point` text NOT NULL,
  `postcomment` text NOT NULL,
  `sno` int(3) NOT NULL,
  `likes` int(10) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`fid`, `point`, `postcomment`, `sno`, `likes`, `date`) VALUES
(3, 'this is about this forum', 'hey guys welcome to my forum here we and our tech community will try to solve your problem as soon as possible. i hope this forum will be helpful for you', 1, 3, '2021-06-30 12:19:09'),
(8, 'thank for forum', 'thank for making this great and useful forum', 2, 3, '2021-06-30 12:45:23'),
(18, 'Report&nbsp;issues', 'please&nbsp;fill&nbsp;to&nbsp;free&nbsp;report&nbsp;issues&nbsp;if&nbsp;you&nbsp;found&nbsp;any&nbsp;issues&nbsp;in&nbsp;our&nbsp;site&nbsp;thank&nbsp;you', 1, 2, '2021-07-28 10:33:57'),
(20, 'project', 'plz&nbsp;help&nbsp;me&nbsp;build&nbsp;my&nbsp;project', 21, 2, '2021-08-01 04:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `lno` int(10) NOT NULL,
  `sno` int(10) NOT NULL,
  `fid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`lno`, `sno`, `fid`) VALUES
(10, 1, 3),
(19, 1, 8),
(25, 1, 18),
(7, 2, 18),
(8, 2, 8),
(9, 2, 3),
(15, 21, 20),
(16, 21, 8),
(17, 21, 3),
(24, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lno` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `ip` text NOT NULL,
  `ldate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lno`, `uname`, `status`, `ip`, `ldate`) VALUES
(1, 'admin', 'Admin Access', '2409:4042:28a:be22::228c:38ac', '2021-07-31 09:37:35'),
(2, 'dhiraj123', 'User Access', '157.33.49.24', '2021-07-31 10:22:34'),
(3, 'nachiket123', 'User Access', '157.33.49.24', '2021-07-31 10:26:54'),
(4, 'dhiraj123', 'User Access', '2409:4042:28a:be22::228c:38ac', '2021-07-31 13:25:29'),
(5, 'dhiraj123', 'User Access', '2409:4042:28a:be22::228c:38ac', '2021-08-01 03:31:27'),
(6, 'Atulhon111', 'Access Denied', '157.33.44.141', '2021-08-01 04:24:53'),
(7, 'Atulhon111', 'User Access', '2405:204:91a6:24d8:596b:b612:1d6f:8d96', '2021-08-01 04:30:04'),
(8, 'dhiraj123', 'User Access', '2409:4042:28a:be22::228c:38ac', '2021-08-01 04:34:45'),
(9, 'admin', 'Admin Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-01 11:01:57'),
(10, 'admin', 'Admin Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-01 11:08:46'),
(11, 'dhiraj123', 'User Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-01 11:09:08'),
(12, 'admin', 'Admin Access', '2405:204:9422:7c2f:7894:962f:f2b7:ead5', '2021-08-01 16:46:33'),
(13, 'admin', 'Admin Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-02 03:58:22'),
(14, 'admin', 'Admin Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-02 05:39:17'),
(15, 'dhiraj123', 'User Access', '2409:4042:d92:73fe::4b4a:f109', '2021-08-02 05:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pno` int(3) NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `prno` int(3) NOT NULL,
  `idate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sno` int(4) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` text NOT NULL,
  `username1` varchar(20) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `score` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sno`, `name`, `mobile`, `email`, `address`, `gender`, `dob`, `username1`, `password1`, `dt`, `score`, `ip`) VALUES
(1, 'Dhiraj Sudhakar Mokal', '8668893166', 'dhirajmokal13@gmail.com', 'Madhi phata,Madhi bk', 'male', '1999-11-19', 'dhiraj123', '8668893166', '2021-05-24 10:20:59', '10', 'unavailable'),
(2, 'Nachiket Rajendra Lokhande', '9284688567', 'nachiketl1234@gmail.com', 'cabinet secretery bunglow,sawansar tal:kopergoan dist: anagar', 'male', '1999-03-09', 'nachiket123', '123', '2021-05-24 10:27:09', '10', 'unavailable'),
(3, 'aniket kolhe', '123', 'anik123@gmail.com', 'madhi kh', 'male', '2021-05-20', 'anik1234', '123', '2021-05-24 11:00:42', '10', 'unavailable'),
(11, 'Jay rajde', '1234', 'jay@gamil.com', 'savlivihir road', 'male', '18 nov 1897', 'jay', '1234', '2021-07-03 16:56:13', '', 'unavailable'),
(20, 'Nachiket', '9284688567', 'nachiketl1234@gmail.com', 'Sanvatsar', 'male', '2021-07-30', 'Kgf', 'kgf', '2021-07-31 09:28:10', '0', '2409:4042:2d26:6800:81f9:c6ec:35d9:efe6'),
(21, 'Hon Atul', '876697405', 'atulhon111@gmail.com', 'derde chandwad tal.kopargaon', 'male', '2001-01-03', 'Atulhon111', '876697', '2021-08-01 04:29:44', '10', '2405:204:91a6:24d8:596b:b612:1d6f:8d96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `sno` (`sno`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username1` (`username1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `d_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `fid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `lno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `registration` (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
