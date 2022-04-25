-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 12:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `member_id` int(5) NOT NULL,
  `activity_name` text NOT NULL,
  `activity_startdate` date NOT NULL,
  `activity_enddate` date NOT NULL,
  `activity_id` int(100) NOT NULL,
  `activity_subscribe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`member_id`, `activity_name`, `activity_startdate`, `activity_enddate`, `activity_id`, `activity_subscribe`) VALUES
(0, 'doing homeworks', '2017-06-08', '2017-06-09', 9, 'stupid'),
(0, 'test1', '0000-00-00', '0000-00-00', 13, '3'),
(0, 'test2', '0000-00-00', '0000-00-00', 14, '3'),
(0, 'rq', '0000-00-00', '0000-00-00', 15, 'fqwf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_activity` text NOT NULL,
  `feedback_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_activity`, `feedback_content`) VALUES
('123', 'hello world'),
('xxx', 'yyy'),
('aaa', 'bbb'),
('homework', 'i hate it'),
('', 'u need to improve'),
('', 'not bad');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `member_id` int(11) NOT NULL,
  `member_account` text CHARACTER SET utf8 NOT NULL,
  `member_password` text CHARACTER SET utf8 NOT NULL,
  `member_name` text CHARACTER SET utf8 NOT NULL,
  `member_birthday` date NOT NULL,
  `member_studentid` varchar(11) NOT NULL,
  `member_gender` tinyint(1) NOT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`member_id`, `member_account`, `member_password`, `member_name`, `member_birthday`, `member_studentid`, `member_gender`, `permission`) VALUES
(1, 'abc', 'abc123', 'yanyu', '0000-00-00', '0', 0, 1),
(10, 'hello', '101010', 'jane', '0000-00-00', 'nu123', 1, 0),
(11, 'member', '1998', 'lala', '1998-12-14', 'bna', 0, 0),
(12, 'eason', '1997', 'eason ng', '1997-07-29', 'b10407131', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id`, `username`, `activity_id`) VALUES
(58, 'abc', 9),
(59, 'abc', 14),
(60, 'abc', 13),
(61, 'hello', 9),
(62, 'hello', 13),
(63, 'hello', 14),
(64, 'hello', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
