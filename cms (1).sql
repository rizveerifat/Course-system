-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_addcourse`
--

CREATE TABLE `admin_addcourse` (
  `course_code` varchar(100) NOT NULL,
  `name` char(250) NOT NULL,
  `credit` int(100) NOT NULL,
  `faculty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_addcourse`
--

INSERT INTO `admin_addcourse` (`course_code`, `name`, `credit`, `faculty`) VALUES
('cse447', 'Rizvee', 3, 'TBA'),
('cse447', 'Rizvee', 3, 'ibn'),
('cse777', 'crypto', 4, 'eer'),
('cse000', 'Rizvee', 3, 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(100) NOT NULL,
  `name` char(250) NOT NULL,
  `credit` int(10) NOT NULL,
  `faculty` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `name`, `credit`, `faculty`) VALUES
('cse110', 'Programming Language', 3, 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `name` varchar(100) NOT NULL,
  `faculty_id` int(100) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`name`, `faculty_id`, `email`) VALUES
('', 0, ''),
('Mashrafee Mortaza', 2, 'mashrafee.mortaza@gmail.com'),
('Mushfiqur Rahim', 15, 'mushfiqur@gmail.com'),
('Shakib Al Hasan', 75, 'shakib.hasan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `s_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `faculty_id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`s_no`, `name`, `faculty_id`, `email`) VALUES
(1, 'zacob', 1234, 'zacob@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course`
--

CREATE TABLE `faculty_course` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course_one` varchar(100) NOT NULL,
  `course_two` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_course`
--

INSERT INTO `faculty_course` (`id`, `name`, `course_one`, `course_two`) VALUES
(1234, 'zacob', 'cse110', 'cse111');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `email`, `mobile`) VALUES
(1234, 'zacob', 'zacob@gmail.com', 1622041424),
(1234, 'ttt', 't@gmail.com', 166),
(1235, 'task', 'task@gmail.com', 1556),
(3, 'crypto', '3', 16220414),
(2, 'nine', 'nine@gmail.com', 1552546272),
(0, 'crypto', '4', 5),
(3333, 'stop', 'ttt@gmail.com', 55555),
(778, 'kobir', 'hanif@gmail.com', 15566828),
(12345, 'Yousouf hasan', 'yousuf@gmail.com', 1552536272);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `s_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`s_no`, `email`, `password`) VALUES
(1, 'faculty@gmail.com', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin1@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` char(100) NOT NULL,
  `id` char(100) NOT NULL,
  `amount` char(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `id`, `amount`, `status`) VALUES
('Akib', '19301067', '5500', 'UNPAID'),
('Sumit', '19301070', '2499', 'UNPAID');

-- --------------------------------------------------------

--
-- Table structure for table `paymentone`
--

CREATE TABLE `paymentone` (
  `StudentName` varchar(60) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StudentDepartment` varchar(50) NOT NULL,
  `Totalfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentone`
--

INSERT INTO `paymentone` (`StudentName`, `StudentID`, `StudentDepartment`, `Totalfee`) VALUES
('rizvee', 19101502, 'cse', 72000);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttwo`
--

CREATE TABLE `paymenttwo` (
  `StudentName` varchar(60) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StudentDepartment` varchar(50) NOT NULL,
  `Totalfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymenttwo`
--

INSERT INTO `paymenttwo` (`StudentName`, `StudentID`, `StudentDepartment`, `Totalfee`) VALUES
('rizvee', 19101502, 'cse', 72000),
('rizvee', 19101502, 'cse', 72000),
('rifat', 19101555, 'eee', 22222);

-- --------------------------------------------------------

--
-- Table structure for table `pay_status`
--

CREATE TABLE `pay_status` (
  `id` int(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `last_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay_status`
--

INSERT INTO `pay_status` (`id`, `payment_status`, `year`, `semester`, `last_date`) VALUES
(19101502, 'paid', 2023, 'spring', '29.4.2023'),
(19101500, 'unpaid', 2023, 'fall', 'not paid'),
(19101500, 'unpaid', 2023, 'fall', 'paid'),
(19101500, 'unpaid', 2023, 'fall', 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(100) NOT NULL,
  `Total_credits` int(100) NOT NULL,
  `retake` int(100) NOT NULL,
  `grade` decimal(60,0) NOT NULL,
  `passed` int(100) NOT NULL,
  `course_left` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`id`, `Total_credits`, `retake`, `grade`, `passed`, `course_left`) VALUES
(19101500, 111, 3, '3', 37, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `course` varchar(200) NOT NULL,
  `rating` int(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `name`, `department`, `course`, `rating`, `comments`, `student_id`) VALUES
(1234, 'gra', 'cse', 'cse220', 5, 'amazing', 0),
(19101509, 'kkr', 'cse', 'cse444', 5, 'amazing', 0),
(1235, 'andrew', 'cse', 'cse220', 5, 'amazing', 19101503),
(55556, 'crypto', 'cse', 'cse43', 5, 'hhh', 19101508),
(4567, 'zacob', 'eee', 'cse989', 4, 'good', 19101000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_no` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'rizvee', 'rizvee1@gmail.com', 'rizvee');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(250) NOT NULL,
  `id` char(250) NOT NULL,
  `dept` char(25) NOT NULL,
  `enrolled_course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `house` int(100) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `father`, `mother`, `house`, `mobile`) VALUES
(19101502, 'Rizvee Rifat Chowdhury', 'Amir Hossain', 'Nurun Nahar', 841, 1622041424);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentone`
--
ALTER TABLE `paymentone`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
