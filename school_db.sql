-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 11:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('bhavanavg@gmail.com', 'bhavana123'),
('thiyagarajancoll@gmail.com', 'thiyagu123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `staffid` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `education` text NOT NULL,
  `experience` text NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `martial_status` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `residential_address` text NOT NULL,
  `permanent_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `dob`, `staffid`, `email`, `education`, `experience`, `mobile_no`, `martial_status`, `blood_group`, `gender`, `residential_address`, `permanent_address`) VALUES
('SACHIN J', '1965-09-06', '111', 'rty@gmail.com', 'POST GRADUATE', 'NONE', 9987987456, 'married', 'O+', 'male', 'RANCHI', 'RANCHI'),
('THANAPAL', '1976-12-09', '121', 'hjk@gmail.com', 'POST GRADUATION', 'NONE', 9984765667, 'married', 'B+', 'male', 'VISHAKHAPATNAM', 'VISHAKHAPATNAM'),
('SAUNDARYA', '1989-09-08', '123', 'qwe@gmail.com', 'B TECH', 'NONE', 9987654327, 'unmarried', 'O+', 'female', 'KOLKATA', 'ASANSOL'),
('SHRUTHI S', '1990-08-06', '125', 'asd@gmail.com', 'PHD', 'NONE', 9977889087, 'unmarried', 'O+', 'female', 'DELHI', 'KOLKATA');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(2) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `mobile_no` bigint(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `secondlanguage` varchar(15) NOT NULL,
  `thirdlanguage` varchar(15) NOT NULL,
  `class` varchar(5) NOT NULL,
  `residential_address` text NOT NULL,
  `permanent_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `rollno`, `dob`, `blood_group`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `mobile_no`, `gender`, `secondlanguage`, `thirdlanguage`, `class`, `residential_address`, `permanent_address`) VALUES
('VG BHAVANA', '1', '1997-04-05', 'O+', 'V RAMAN', 'KOKILA V', 'CA', 'HOMEMAKER', 8764882938, 'female', 'Hindi', 'Tamil', '12', 'BANGLORE', 'BANGLORE'),
('SHRUTI SINGH', '2', '1987-08-06', 'B+', 'H SINGH', 'M SINGH', 'BUSINESS', 'HOMEMAKER', 8794657843, 'female', 'Hindi', 'Tamil', '12', 'JAMSHEDPUR', 'JAMSHEDPUR'),
('THIYAGRAJAN P', '3', '1995-08-09', 'AB', 'RAMAN P', 'MANJULA P', 'SERVICE', 'TEACHER', 9898765987, 'Male', 'Tamil', 'Hindi', '11', 'VELLORE', 'VELLORE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
