-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 12:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(20) NOT NULL,
  `bookid` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `availableqty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `bookid`, `title`, `edition`, `authorname`, `price`, `quantity`, `availableqty`) VALUES
(1, 'A1010', 'title', 'edition', 'authourname', '250', '10', '10'),
(2, 'A1011', 'new', 'ed1', 'atrname', '200', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(10) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `htnumber` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `authorname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `currentdate` varchar(100) NOT NULL,
  `returndate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `bookid`, `htnumber`, `title`, `edition`, `authorname`, `price`, `currentdate`, `returndate`, `status`) VALUES
(1, 'A1010', '15XU5A0501', 'title', 'edition', 'authourname', '250', '2018-07-10', '2018-07-16', 'Returned'),
(2, 'A1010', '15XU5A0501', 'title', 'edition', 'authourname', '250', '2018-07-16', '', 'Issued');

-- --------------------------------------------------------

--
-- Table structure for table `stdregister`
--

CREATE TABLE `stdregister` (
  `id` int(20) NOT NULL,
  `studentname` varchar(30) NOT NULL,
  `hallticketno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdregister`
--

INSERT INTO `stdregister` (`id`, `studentname`, `hallticketno`, `branch`, `email`, `mobile`, `password`) VALUES
(1, 'student', '15XU5A0501', 'cse', 'student@gmail.com', '9966339966', 'Vijay@12');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdregister`
--
ALTER TABLE `stdregister`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hallticketno` (`hallticketno`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stdregister`
--
ALTER TABLE `stdregister`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
