-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2021 at 12:46 AM
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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(60) NOT NULL,
  `consent` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping dummy data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `dob`, `gender`, `country`, `email`, `telephone`, `username`, `password`, `consent`) VALUES
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'adad@mail.com', '2105555555', 'angelos', '$2y$10$vyL2Exm88X7kc3llk3FXIO8iD.y1l540NUZmR/ZNuW0V2Q.UpG..u', 'yes'),
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'anna@mail.com', '2105555555', 'angelos', '$2y$10$y.lOcrdQYfWSBt8feZHQEe8BuRuv4hfiVUxUKGyvf4.BIX5aNFFSC', 'yes'),
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'bb@mail.com', '2105555555', 'angelos', '$2y$10$8Cn7gKryq/tdT6kM0h7SluHtxTyrzBUoBRFtc5hWSeuuqAB35tNlK', 'yes'),
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'ddd@mail.com', '2105555555', 'angelos', '$2y$10$A7NkhxwJ7mP0PwNegyGqgunPB0VvZ4rd5NyuM.1//Iaruo4VU.OGm', 'yes'),
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'ssb@mail.com', '2105555555', 'angelos', '$2y$10$Gjahswk2ngHAo1fpnr.9yud02zz61jmoWdr.N396dvLs5bCz5Mb4y', 'yes'),
('Angelos', 'Egg', '2021-02-10', 'Mrs', 'Albania', 'sss@mail.com', '2105555555', 'angelos', '$2y$10$o4syy69nb0ULEhT5Nqu4Xu8mPP5l1T7I7Q0g1BmEo26PZ5wV/lv/K', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
-- Enable quicker queries
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD KEY `index_email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`fname`, `lname`, `email`, `message`) VALUES
('Angelos', 'Dddd', 'newuser@mail.gr', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`email`),
  ADD KEY `index_email_msg` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
