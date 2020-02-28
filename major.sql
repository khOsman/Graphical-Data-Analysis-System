-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 06:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataanalysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `mid` int(11) NOT NULL,
  `mname` varchar(32) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`mid`, `mname`, `did`) VALUES
(1, 'BBA - Accounting', 1),
(2, 'BBA - Finance', 2),
(3, 'BBA - General Management', 3),
(4, 'BBA - Human Resources Management', 4),
(5, 'BBA - International Business', 5),
(6, 'BBA - Investment Management', 6),
(7, 'BBA - Management Information Sys', 7),
(8, 'BBA - Marketing', 8),
(9, 'BSc - Computer Engineering', 9),
(10, 'BSc - Computer Science', 10),
(11, 'BSc - Computer Science and Engin', 11),
(12, 'BSc - Electrical and Electronic ', 12),
(13, 'BSc - Electronic and Telecommuni', 13),
(14, 'BSc - Environmental Management', 14),
(15, 'BSc - Environmental Science', 15),
(16, 'LLB - Laws (Hons)', 16),
(17, 'BA - English Language Teaching', 17),
(18, 'BA - English Literature', 18),
(19, 'BSS - Anthropology', 19),
(20, 'BSS - Global Studies and Governa', 20),
(21, 'BSS - Media and Communication', 21),
(22, 'BSS - Sociology', 22),
(23, 'BSc - Physics (Hons)', 23),
(24, 'BSc - Microbiology', 24),
(25, 'BSc - Biochemistry and Biotechno', 25),
(26, 'B.Pharm - Pharmacy', 26),
(27, 'BSc - Population Environment', 27),
(28, 'BSc - Mathematics (Hons)', 28),
(29, 'BSc - Biochemistry', 29),
(30, 'BSc - Economics', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
