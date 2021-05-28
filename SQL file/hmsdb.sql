-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 02:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `covidpdb`
--

CREATE TABLE `covidpdb` (
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `fathername` varchar(500) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `bdgroup` varchar(150) NOT NULL,
  `contact1` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `docapp1` varchar(150) NOT NULL,
  `dateadd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidpdb`
--

INSERT INTO `covidpdb` (`firstname`, `lastname`, `fathername`, `age`, `gender`, `bdgroup`, `contact1`, `address`, `docapp1`, `dateadd`) VALUES
('Himanshu', 'soni', 'Ghanshyam soni', '20', 'Male', 'A+', '9131438963', ' badan singh mohalla Manendragarh ', 'Dr. Himanshu', '2021-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `docdb`
--

CREATE TABLE `docdb` (
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docdb`
--

INSERT INTO `docdb` (`name`) VALUES
('Dr himansu '),
('Dr. Himanshu'),
('dr. himanshu soni'),
('Dr. pinky'),
('Dr. Rambha'),
('hr');

-- --------------------------------------------------------

--
-- Table structure for table `doctorappdb`
--

CREATE TABLE `doctorappdb` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(40) NOT NULL,
  `payment` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorappdb`
--

INSERT INTO `doctorappdb` (`fname`, `lname`, `email`, `contact`, `docapp`, `payment`, `date`) VALUES
('Himanshu', 'Soni', 'sonik5620@gmail.com', '9131438963', 'Dr. Himanshu ', 'paid', '2020-12-29'),
('krishna ', 'soni', 'krishna2020@gmail.com', '6267286980', 'Dr. Himanshu', 'Pay Later', '2021-01-18'),
('Rambha ', 'sahu', 'rambhasahu551@gmail.com', '6263283360', 'Dr. Pinky', 'Paid', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `password`) VALUES
('admin', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docdb`
--
ALTER TABLE `docdb`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `doctorappdb`
--
ALTER TABLE `doctorappdb`
  ADD PRIMARY KEY (`fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
