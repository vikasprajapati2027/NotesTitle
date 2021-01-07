-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:20 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notestitle`
--

CREATE TABLE `notestitle` (
  `sno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notestitle`
--

INSERT INTO `notestitle` (`sno`, `title`, `description`, `tstamp`) VALUES
(9, 'atsyd', 'wreatryst', '2021-01-05 09:23:51'),
(10, 'etwarystdhkgjf d', 'wetaryetsjfh ', '2021-01-05 09:23:54'),
(11, 'retarysdjfhg', 'ewatrsdhx ', '2021-01-05 09:23:57'),
(13, 'werzsudtgh ', 'awzst ', '2021-01-05 09:24:04'),
(14, 'weaztrd ', 'rt ya3546rsy3t', '2021-01-05 09:24:07'),
(15, 'awrey e', 'setre sr', '2021-01-05 09:24:11'),
(17, 'awrey e', 'setre sr', '2021-01-05 09:35:22'),
(18, 'wetrshrhg e twrt wfwf', 'we r3g eg3t edga', '2021-01-05 09:36:32'),
(19, 'ert a', 'ery e', '2021-01-05 09:36:36'),
(20, 'er y', 'e rsyh', '2021-01-05 09:36:40'),
(21, 'rey w', 'er yewr', '2021-01-05 09:36:45'),
(22, 'er yrted', 'ea rytr', '2021-01-05 09:36:48'),
(23, ' rtdurgdz', ' ert w54hg b', '2021-01-05 09:36:52'),
(24, ' esrt', 'se gdgq', '2021-01-05 09:36:55'),
(25, 'ery erdg123425364', 'sd ygewger', '2021-01-06 07:48:09'),
(26, '', '', '2021-01-05 09:37:29'),
(27, '', '', '2021-01-05 09:40:58'),
(28, '', '', '2021-01-05 09:46:51'),
(29, '', '', '2021-01-05 09:47:26'),
(30, '', '', '2021-01-05 09:54:41'),
(31, '', '', '2021-01-05 10:02:20'),
(32, '', '', '2021-01-05 10:02:56'),
(33, '', '', '2021-01-05 10:03:55'),
(34, '', '', '2021-01-05 10:06:25'),
(35, '', '', '2021-01-05 10:06:46'),
(36, '', '', '2021-01-05 10:08:19'),
(37, '', '', '2021-01-05 10:09:06'),
(38, '', '', '2021-01-05 10:09:46'),
(39, '', '', '2021-01-05 10:11:49'),
(40, '', '', '2021-01-05 10:21:55'),
(41, '', '', '2021-01-05 10:23:27'),
(42, '', '', '2021-01-05 10:23:39'),
(43, '', '', '2021-01-05 10:28:51'),
(44, '', '', '2021-01-05 10:33:18'),
(45, '', '', '2021-01-05 10:34:22'),
(46, '', '', '2021-01-05 10:35:04'),
(47, '', '', '2021-01-06 05:22:57'),
(48, '', '', '2021-01-06 05:24:26'),
(49, '', '', '2021-01-06 05:31:08'),
(50, '', '', '2021-01-06 05:32:24'),
(51, '', '', '2021-01-06 05:39:28'),
(52, '', '', '2021-01-06 05:39:46'),
(53, '', '', '2021-01-06 05:40:14'),
(54, '', '', '2021-01-06 05:40:50'),
(55, '', '', '2021-01-06 05:41:32'),
(56, '', '', '2021-01-06 05:42:05'),
(57, '', '', '2021-01-06 05:42:58'),
(58, 'sfgw', 'wgw', '2021-01-06 05:43:26'),
(59, 'sfgw', 'wgw', '2021-01-06 05:44:34'),
(60, 'sfgw', 'wgw', '2021-01-06 05:44:52'),
(61, 'sfgw', 'wgw', '2021-01-06 05:45:59'),
(62, 'sfgw', 'wgw', '2021-01-06 05:46:13'),
(63, 'sfgw', 'wgw', '2021-01-06 05:46:49'),
(64, 'sfgw', 'wgw', '2021-01-06 05:48:22'),
(65, 'how to buy book', 'go to market and which book is best for yout study u can buy', '2021-01-06 05:51:18'),
(66, 'dsafdgf', 'adsgwrsgf qqrqr3qerq', '2021-01-06 06:33:19'),
(67, 'dsafdgf', 'adsgwrsgf qqrqr3qerq', '2021-01-06 06:33:19'),
(68, 'dsafdgf', 'adsgwrsgf qqrqr3qerq', '2021-01-06 06:35:37'),
(69, 'sdg dq', 'asge aw', '2021-01-06 12:24:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notestitle`
--
ALTER TABLE `notestitle`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notestitle`
--
ALTER TABLE `notestitle`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
