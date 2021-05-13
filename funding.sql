-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 11:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funding`
--

-- --------------------------------------------------------

--
-- Table structure for table `agriculture`
--

CREATE TABLE `agriculture` (
  `agric_id` int(11) NOT NULL,
  `firm_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agriculture`
--

INSERT INTO `agriculture` (`agric_id`, `firm_name`, `date`, `status`, `net_balance`) VALUES
(1, 'African farmers M.', '2021-01-14', 'Profit', 300),
(2, 'Knockknock market', '2021-02-15', 'Profit', 1000),
(3, 'Kinafarm', '2021-01-20', 'Loss', -100),
(4, 'Pokuculture', '2021-03-20', 'Profit', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `ecommerce_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fundee`
--

CREATE TABLE `fundee` (
  `fundee_id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `Fname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `password` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fundee`
--

INSERT INTO `fundee` (`fundee_id`, `email`, `Fname`, `lname`, `password`) VALUES
(1, 'abenaOky06@gmail.com', 'Abena', 'Okyere', '$2y$10$G4yit9YxFk6z4Ss91Ls7COHNho0CwGf0q9GeeadINmDs/8Vcr718W');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE `healthcare` (
  `health_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `industry_id` int(11) NOT NULL,
  `industry_type` varchar(250) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`industry_id`, `industry_type`, `date`, `status`, `net_balance`) VALUES
(1, 'Agriculture', '2021-01-14', 'Profit', 300),
(2, 'Ecommerce', '2021-02-15', 'Profit', 1000),
(3, 'I.o.T', '2021-01-20', 'Loss', -500),
(4, 'Healthcare', '2021-03-20', 'Profit', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `investor_id` int(11) NOT NULL,
  `investor_email` varchar(250) DEFAULT NULL,
  `Fname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `password` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `iot_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(250) DEFAULT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `p_description` tinytext DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(250) DEFAULT NULL,
  `capital` int(40) DEFAULT NULL,
  `payback_p` varchar(25) DEFAULT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_tracker`
--

CREATE TABLE `project_tracker` (
  `project_id` int(11) NOT NULL,
  `fundee_id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `project_name` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) DEFAULT NULL,
  `Net_balance` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `fundee`
--
ALTER TABLE `fundee`
  ADD PRIMARY KEY (`fundee_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`investor_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_tracker`
--
ALTER TABLE `project_tracker`
  ADD KEY `project_id` (`project_id`),
  ADD KEY `fundee_id` (`fundee_id`),
  ADD KEY `investor_id` (`investor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundee`
--
ALTER TABLE `fundee`
  MODIFY `fundee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `industry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `investor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_tracker`
--
ALTER TABLE `project_tracker`
  ADD CONSTRAINT `project_tracker_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `project_tracker_ibfk_2` FOREIGN KEY (`fundee_id`) REFERENCES `fundee` (`fundee_id`),
  ADD CONSTRAINT `project_tracker_ibfk_3` FOREIGN KEY (`investor_id`) REFERENCES `investor` (`investor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
