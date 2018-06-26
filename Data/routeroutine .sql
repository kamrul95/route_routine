-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 02, 2017 at 01:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routeroutine`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmaccount`
--

CREATE TABLE `confirmaccount` (
  `confId` varchar(350) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ts_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE `courseinfo` (
  `studentid` varchar(100) NOT NULL,
  `credit` int(11) NOT NULL,
  `completedcourses` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`studentid`, `credit`, `completedcourses`) VALUES
('1', 8, 'ac,dc'),
('14', 0, 'PHY 1101 CSC 1102 CSC 1101 ENG 1101 on'),
('14-26696-2', 128, 'BAE 2101,BBA 1102,BBA 1204,CSC 1101,CSC 1102,CSC 1203,CSC 1204,CSC 2105,CSC 2106,CSC 2107,CSC 2208,CSC 2209,CSC 2210,CSC 2211,CSC 3113,CSC 3114,CSC 3115,CSC 3116,CSC 3220,CSC 3222,CSC 3223,CSC 3224,CSC 4121,CSC 4195,EEE 1201,EEE 1202,EEE 2101,EEE 2102,EEE 2103,EEE 2104,EEE 2205,EEE 2206,EEE 3101,EEE 3102,ENG 1101,ENG 1202,ENG 2101,MAT 1101,MAT 1205,MAT 2101,MAT 2202,MAT 3101,MAT 3103,MGT 3202,PHY 1101,PHY 1102,PHY 1203,PHY 1204,'),
('14266', 13, 'devices,dec,ac,autocad'),
('Kamrul', 12, 'CSC 1101,CSC 1102,ENG 1101,MAT 1102,'),
('Zayed', 16, 'CSC 1101,CSC 1102,ENG 1101,MAT 1101,PHY 1101,PHY 1102,');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `code` varchar(250) NOT NULL,
  `coursename` varchar(250) NOT NULL,
  `prerequisite` varchar(250) DEFAULT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`code`, `coursename`, `prerequisite`, `credit`) VALUES
('BAE 2101', 'Computer Aided Design & Drafting', NULL, 1),
('BBA 1102', 'Principles of Accounting', NULL, 3),
('BBA 1204', 'Principles of Economics', 'MAT 1205, CSC 1204', 3),
('CSC 1101', 'Computer Fundamentals', NULL, 3),
('CSC 1102', 'Programming Language 1', NULL, 3),
('CSC 1203', 'Programming Language 2', 'CSC 1102', 3),
('CSC 1204', 'Discrete Mathematics', 'CSC 1102', 3),
('CSC 2105', 'Data Structure', 'CSC 1203, CSC 1204', 3),
('CSC 2106', 'Computer Organization & Architecture', 'CSC 1203', 3),
('CSC 2107', 'Introduction to Database', 'CSC 1203', 3),
('CSC 2208', 'Operating Systems', 'CSC 2106', 3),
('CSC 2209', 'Object Oriented Programming 1', 'CSC 2105', 3),
('CSC 2210', 'Object Oriented Analysis and Design', 'CSC 2107, CSC 2105', 3),
('CSC 2211', 'Algorithms', 'CSC 2105', 3),
('CSC 2212', 'Advance Database Management System', 'CSC 2107', 3),
('CSC 3113', 'Theory Of Computation', 'CSC 2211', 3),
('CSC 3114', 'Software Engineering', 'CSC 2210', 3),
('CSC 3115', 'Object Oriented Programming 2', 'CSC 2209', 3),
('CSC 3116', 'Computer Networks', 'CSC 2208', 3),
('CSC 3118', 'Computer And Information Ethics', 'MIS 3201', 3),
('CSC 3119', 'Basic Graph Theory', 'CSC 2211', 3),
('CSC 3127', 'Enterprise Resource Planning', 'MIS 3201', 3),
('CSC 3217', 'Computer Science Mathematics', 'CSC 2211, MAT 3101', 3),
('CSC 3220', 'Compiler Design', 'CSC 3113', 3),
('CSC 3222', 'Web Technologies', 'CSC 3115', 3),
('CSC 3223', 'Advanced Computer Networks', 'CSC 3116', 3),
('CSC 3224', 'Computer Graphics', 'CSC2211, MAT2202', 3),
('CSC 3229', 'Embedded Technologies', 'CSC 3115, EEE 2205', 3),
('CSC 3230', 'Formal Methods of Software Engg.', 'CSC 3114', 3),
('CSC 3231', 'Network Security', 'CSC 3223', 3),
('CSC 3232', 'Embedded System Software', 'CSC 3114', 3),
('CSC 3255', 'Software Project I', '90 Credits', 3),
('CSC 4121', 'Artificial Intelligence & Expert Sys.', 'CSC 2211', 3),
('CSC 4125', 'Software Development Project Management', 'CSC 3114', 3),
('CSC 4126', 'Software Requirement Engineering', 'CSC 3114', 3),
('CSC 4133', 'Software Quality and Testing', 'CSC 3114', 3),
('CSC 4134', 'Advanced Operating System', 'CSC 2208', 3),
('CSC 4135', 'E-Governance', 'CSC 3222', 3),
('CSC 4136', 'Multimedia Systems', 'CSC 3222', 3),
('CSC 4137', 'Simulation & Modeling', 'CSC 3223, CSC 2211', 3),
('CSC 4138', 'Computer Vision And Pattern Recognition', 'CSC 3224', 3),
('CSC 4139', 'Data Warehouse and Data Mining', 'CSC 4121, CSC 2107', 3),
('CSC 4140', 'Human Computer Interaction', 'CSC 4121', 3),
('CSC 4141', 'Linear Programming', 'CSC 4121, MAT 3101', 3),
('CSC 4180', 'Advanced Topics in Programming I', 'CSC 3222', 3),
('CSC 4181', 'Advanced Topics in Programming II', 'CSC 3222', 3),
('CSC 4182', 'Advanced Topics in Programming III', 'CSC 3222', 3),
('CSC 4195', 'Research Methodology', '100 Credits', 3),
('CSC 4296', 'Internship', '139 Credits', 3),
('CSC 4298/CSC 4299', 'Software Project II / Thesis', 'CSC 4195', 3),
('CSC 4299', 'Thesis', 'CSC 4195', 3),
('ECE 4207', 'Vhdl Modeling And Logic Synthesis', 'EEE 2205', 3),
('EEE 1201', 'Electrical Circuits -1 (DC)', 'PHY 1101', 3),
('EEE 1202', 'Electrical Circuits -1 Lab (DC)', 'PHY 1101', 1),
('EEE 2101', 'Electrical Circuits 2 (AC)', 'EEE 1201', 3),
('EEE 2102', 'Electrical Circuits-2 (AC) Lab', 'EEE 1202', 1),
('EEE 2103', 'Electronic Devices', 'EEE 1201', 3),
('EEE 2104', 'Electronic Devices Lab', 'EEE 1202', 1),
('EEE 2106', 'Introduction To Electrical Engineering', 'PHY 1203', 1),
('EEE 2107', 'Introduction To Electrical Eng. Lab', 'PHY 1204', 1),
('EEE 2205', 'Digital Logic Design', 'EEE 2103', 3),
('EEE 2206', 'Digital Logic Design Lab', 'EEE 2104', 1),
('EEE 3101', 'Digital Electronics', 'EEE 2101', 3),
('EEE 3102', 'Digital Electronics Lab', 'EEE 2102', 1),
('EEE 3107', 'Engineering Ethics', 'EEE 2205', 1),
('EEE 3207', 'Signals & Linear System', 'MAT 2202', 3),
('EEE 3211', 'Digital Signal Processing', 'EEE 3207', 3),
('EEE 3216', 'Electronics Shop', 'EEE 3102', 1),
('EEE 4203', 'Vlsi Circuit Design', 'EEE 2205', 3),
('EEE 4211', 'Microprocessor & I/O System', 'EEE 2205, CSC 2106', 3),
('EEE 4235', 'Robotics Engineering', 'PHY 1101', 3),
('ENG 1101', 'English Reading Skills and Public Speaking', NULL, 3),
('ENG 1202', 'English Writing Skills and Communication', 'ENG 1101', 3),
('ENG 2101', 'Business Communications', 'ENG 1202', 3),
('MAT 1101', 'Diff Calculus & Co-ordinate Geometry', NULL, 3),
('MAT 1205', 'Integral Calculus & Ord. Diff Equation', 'MAT 1101', 3),
('MAT 2101', 'Complex Variable,Laplace & Z-transformation', 'MAT 1205', 3),
('MAT 2202', 'Matrices, Vectors, Fourier analysis', 'MAT 1205', 3),
('MAT 3101', 'Mathematical Methods Of Engineering', 'MAT 2202', 3),
('MAT 3103', 'Statistics And Probability', 'MAT 1205', 3),
('MGT 3202', 'Engineering Management', 'ENG 2101', 3),
('MIS 4001', 'Computer Utilization In Business', 'MIS 3201', 3),
('MIS 4008', 'Network Resource Management', 'MIS 3201', 3),
('MIS 4017', 'Decision Support System', 'MIS 3201', 3),
('MIS 4018', 'Global Information Technology Management', 'MIS 3201', 3),
('PHY 1101', 'Physics 1', NULL, 3),
('PHY 1102', 'Physics 1 lab', NULL, 1),
('PHY 1203', 'Physics 2', 'PHY 1101', 3),
('PHY 1204', 'Physics 2 lab', 'PHY 1102', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offeredcourses`
--

CREATE TABLE `offeredcourses` (
  `ClassId` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `count` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `classtype` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `day1time` varchar(50) NOT NULL,
  `day2time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offeredcourses`
--

INSERT INTO `offeredcourses` (`ClassId`, `status`, `capacity`, `count`, `title`, `classtype`, `day`, `day1time`, `day2time`) VALUES
('1', 'Open', '40', '40', 'ENGLISH WRITING SKILLS & COMMUNICATIONS [CS/ENGG] ', 'Theory', 'Sunday', '8:00 AM', '9:30 AM'),
('', '', '', '', '', 'Theory', 'Tuesday', '8:00 AM', '9:30 AM'),
('2', 'Open', '40', '40', 'ENGLISH WRITING SKILLS & COMMUNICATIONS [CS/ENGG] ', 'Theory', 'Monday', '9:30 AM', '11:00 AM'),
('', '', '', '', '', 'Theory', 'Wednesday', '9:30 AM', '11:00 AM'),
('3', 'Open', '41', '40', 'ENGLISH WRITING SKILLS & COMMUNICATIONS [CS/ENGG] ', 'Theory', 'Sunday', '11:00 AM', '12:30 PM'),
('', '', '', '', '', 'Theory', 'Tuesday', '11:00 AM', '12:30 PM'),
('4', 'Open', '40', '39', 'ENGLISH WRITING SKILLS & COMMUNICATIONS [CS/ENGG] ', 'Theory', 'Monday', '12:30 PM', '2:00 PM'),
('', '', '', '', '', 'Theory', 'Wednesday', '12:30 PM', '2:00 PM'),
('5', 'Open', '40', '39', 'ENGLISH WRITING SKILLS & COMMUNICATIONS [CS/ENGG] ', 'Theory', 'Tuesday', '2:00 PM', '3:30 PM'),
('', '', '', '', '', 'Theory', 'Sunday', '2:00 PM', '3:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` varchar(250) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `dept`, `email`, `password`) VALUES
('12345', 'cse', 'auiarafat@gmail.com', '123456'),
('14-26656-2', 'cse', 'azgarshuvo@gmail.com', '123456'),
('14-26696-2', 'cse', 'auiarafat@outlook.com', '123456'),
('961529317', 'cse', 'khzayed1@gmail.com', '123456'),
('AUIArafat', 'cse', 'auiarafat@gmail.com', '123456'),
('Kamrul', 'cse', 'tamim522@gmail.com', '123456'),
('skjbf abfjbga', 'cse', 'auiarafat@gmail.com', '123456'),
('Zayed', 'cse', 'auiarafat@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `StudentId` varchar(100) NOT NULL,
  `selectedcourses` varchar(100) NOT NULL,
  `starttime` varchar(100) NOT NULL,
  `breaktime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`StudentId`, `selectedcourses`, `starttime`, `breaktime`) VALUES
('14-26696-2', 'MAT 1102', 'Morning', '30'),
('Zayed', 'EEE 1201,EEE 4235,MAT 1205,PHY 1204', 'Midday', '90'),
('Zayed', 'BAE 2101,CSC 1203,EEE 1201,EEE 4235', 'Morning', '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmaccount`
--
ALTER TABLE `confirmaccount`
  ADD PRIMARY KEY (`confId`);

--
-- Indexes for table `courseinfo`
--
ALTER TABLE `courseinfo`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`),
  ADD UNIQUE KEY `studentid` (`studentid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
