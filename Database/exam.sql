-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2020 at 04:56 AM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `username` varchar(527) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` bigint(20) NOT NULL,
  `question` mediumtext NOT NULL,
  `option_1` mediumtext NOT NULL,
  `option_2` mediumtext NOT NULL,
  `option_3` mediumtext NOT NULL,
  `option_4` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`) VALUES
(1, 'PHP Stands for?', 'PHP Hypertex Processor', 'PHP Hyper Markup Processor', 'PHP Hyper Markup Preprocessor', 'PHP Hypertext Preprocessor', 'Option4'),
(2, 'PHP is an example of ___________ scripting language.', 'Server-side', 'Client-side', 'Browser-side', 'In-side', 'Option1'),
(3, 'Who is known as the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 'Option1'),
(4, 'Which of the following is not true?', 'PHP can be used to develop web applications.', 'PHP makes a website dynamic', 'PHP applications can not be compile', 'PHP can not be embedded into html.', 'Option4'),
(5, 'Which of the following variables is not a predefined variable?', '$get', '$ask', '$request', '$post', 'Option2'),
(6, 'Which of the following function you apply in PHP?', 'chr( );', 'asc( );', 'ord( );', 'val( );', 'Option3'),
(7, 'Which of the following method sends input to a script via a URL?', 'Get', 'Post', 'Both', 'None', 'Option1'),
(8, 'Which of the following function returns a text in title case from a variable?', 'ucwords($var)', 'upper($var)', 'toupper($var)', 'ucword($var)', 'Option1'),
(9, 'Which of the following function returns the number of characters in a string variable?', 'count($variable)', 'len($variable)', 'strcount($variable)', 'strlen($variable)', 'Option4');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` bigint(20) NOT NULL,
  `name` varchar(627) NOT NULL,
  `total_ques` bigint(20) NOT NULL,
  `total_att` bigint(20) NOT NULL,
  `total_right` bigint(20) NOT NULL,
  `total_wrong` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `total_ques`, `total_att`, `total_right`, `total_wrong`) VALUES
(1, 'Sushanta', 10, 1, 0, 1),
(2, 'Sushanta', 10, 1, 0, 1),
(3, 'Sushanta', 10, 0, 0, 0),
(4, 'Sushanta', 10, 1, 1, 0),
(5, 'Sushanta', 10, 9, 8, 1),
(6, 'Sushanta', 10, 0, 0, 0),
(7, 'Sushanta', 10, 5, 5, 0),
(8, 'Sushanta', 10, 5, 2, 3),
(9, 'Sushanta', 10, 5, 5, 0),
(10, 'Sushanta', 10, 5, 3, 2),
(11, 'Sushanta', 10, 5, 3, 2),
(12, 'Sushanta', 5, 2, 1, 1),
(13, 'Sushanta', 5, 2, 1, 1),
(14, '', 5, 1, 1, 0),
(15, 'Sushanta', 5, 1, 1, 0),
(16, 'Sushanta', 5, 1, 1, 0),
(17, 'Sushanta', 5, 3, 2, 1),
(18, 'Sushanta', 5, 5, 3, 2),
(19, 'Sushanta', 5, 5, 2, 3),
(20, 'Sushanta', 5, 5, 4, 1),
(21, 'Sushanta', 5, 5, 4, 1),
(22, 'Sushanta', 5, 5, 4, 1),
(23, 'Sushanta', 5, 5, 4, 1),
(24, 'Sushanta', 5, 5, 4, 1),
(25, 'Sushanta', 5, 5, 4, 1),
(26, 'Sushanta', 5, 5, 4, 1),
(27, 'Sushanta', 5, 5, 4, 1),
(28, '', 5, 5, 4, 1),
(29, 'Sushanta', 5, 5, 1, 4),
(30, 'Sushanta', 5, 5, 1, 4),
(31, '', 5, 5, 1, 4),
(32, 'Sushanta', 5, 5, 4, 1),
(33, 'Sushanta', 5, 5, 3, 2),
(34, 'Sushanta', 5, 5, 4, 1),
(35, 'Sushanta', 5, 5, 4, 1),
(36, 'Sushanta', 5, 5, 4, 1),
(37, 'Sushanta', 5, 5, 4, 1),
(38, 'Sushanta', 5, 5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` mediumtext NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Sushanta', 'sushantakarmakar2001@gmail.com', 'e466e3494f1d4ce6fb8bd678d45cd801ac10b9ba', 9134019958, 'APPROVED'),
(2, 'Bitan', 'bitan@gmail.com', '273683f9cc416bdbb72e79946a5f14f236c14b63', 8436187029, 'NOT APPROVED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
