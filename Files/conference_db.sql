-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2021 at 10:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference_db`
--

CREATE TABLE `conference_db` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `consent` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conference_db`
--

INSERT INTO `conference_db` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `username`, `password`, `consent`) VALUES
('Thomas', 'testtest', '2022-01-06', 'Mrs', 'Armenia', 'anna@mail.com', '2105555555', 'nickcave', 'nickcave', ''),
('Nick', 'Add', '1994-01-28', 'Mrs', 'Colombia', 'nich@mail.com', '2105555888', 'johnsnow', 'johnsnow', 'yes'),
('Nick', 'Cave', '1980-01-28', 'Mrs', 'Canada', 'nick@mail.com', '2105555888', 'nickcave', 'nickcave', 'yes'),
('John', 'Snow', '1992-01-28', 'Mr', 'Estonia', 'snow@mail.com', '2105566555', 'johnsnow', 'johnsnow', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference_db`
--
ALTER TABLE `conference_db`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
