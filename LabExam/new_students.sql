-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `mobile` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `hsc_result` text NOT NULL,
  `ssc_result` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `semester` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`fname`, `lname`, `email`, `gender`, `mobile`, `date_of_birth`, `hsc_result`, `ssc_result`, `course`, `year`, `semester`) VALUES
('asdfjgkkm', 'avc', 'a@gmail.com', 'Female', '01245368902', '1993-11-11', '5.00', '5.00', 'CSE', '2021', 'Summer'),
('asdfjgkkm', 'abcfd', 'b@gmail.com', 'Female', '01245368902', '1994-06-07', '5.00', '5.00', 'CSE', '2021', 'Summer'),
('aghsjillw', 'sgh', 'c@gmail.com', 'Female', '01248345290', '1994-06-06', '5.00', '5.00', 'BBA', '2021', 'Spring'),
('hsgfaryi', 'haj', 'd@gmail.com', 'Female', '0135628902', '1999-06-04', '5.00', '5.00', 'EEE', '2021', 'Spring'),
('hagtrukla', 'hsg', 'e@gmail.com', 'Male', '0124673893', '1996-06-20', '5.00', '5.00', 'EEE', '2021', 'Fall');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
