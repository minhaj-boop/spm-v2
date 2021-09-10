-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 10:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_co`
--

CREATE TABLE `tbl_co` (
  `coId` int(7) NOT NULL,
  `coNo` varchar(5) NOT NULL,
  `ploNo` varchar(5) NOT NULL,
  `totalMarks` double NOT NULL,
  `achievedMarks` double NOT NULL,
  `courseTitle` varchar(10) NOT NULL,
  `studentId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_co`
--

INSERT INTO `tbl_co` (`coId`, `coNo`, `ploNo`, `totalMarks`, `achievedMarks`, `courseTitle`, `studentId`) VALUES
(1, 'co1', 'plo2', 100, 33.33, 'CSE303', 1730725),
(2, 'co2', 'plo3', 100, 74.28, 'CSE303', 1730725),
(3, 'co3', 'plo4', 100, 56, 'CSE303', 1730725),
(4, 'co4', 'plo6', 100, 80, 'CSE303', 1730725),
(5, 'co1', 'plo2', 100, 45.23, 'CSE303', 1730400),
(6, 'co2', 'plo3', 100, 32, 'CSE303', 1730400),
(7, 'co3', 'plo4', 100, 64.78, 'CSE303', 1730400),
(8, 'co4', 'plo6', 100, 85, 'CSE303', 1730400),
(9, 'co1', 'plo2', 100, 60, 'CSE303', 1728450),
(10, 'co2', 'plo3', 100, 84.3, 'CSE303', 1728450),
(11, 'co3', 'plo4', 100, 51.98, 'CSE303', 1728450),
(12, 'co4', 'plo6', 100, 44.33, 'CSE303', 1728450),
(13, 'co1', 'plo2', 100, 11.1, 'CSE303', 1727800),
(14, 'co2', 'plo3', 100, 26, 'CSE303', 1727800),
(15, 'co3', 'plo4', 100, 39, 'CSE303', 1727800),
(16, 'co4', 'plo6', 100, 51, 'CSE303', 1727800),
(17, 'co1', 'plo2', 100, 62, 'CSE303', 1811900),
(18, 'co2', 'plo3', 100, 50, 'CSE303', 1811900),
(19, 'co3', 'plo4', 100, 31, 'CSE303', 1811900),
(20, 'co4', 'plo6', 100, 40, 'CSE303', 1811900),
(21, 'co1', 'plo2', 100, 45, 'CSE216', 1921166),
(22, 'co2', 'plo6', 100, 45, 'CSE216', 1921166),
(23, 'co4', 'plo5', 100, 65, 'CSE216', 1921166),
(24, 'co5', 'plo9', 100, 35, 'CSE216', 1921166),
(25, 'co1', 'plo2', 100, 55, 'CSE216', 1820862),
(26, 'co2', 'plo6', 100, 56, 'CSE216', 1820862),
(27, 'co4', 'plo5', 100, 66, 'CSE216', 1820862),
(28, 'co5', 'plo9', 100, 60.3, 'CSE216', 1820862),
(29, 'co1', 'plo2', 100, 61, 'CSE216', 1730673),
(30, 'co2', 'plo6', 100, 68, 'CSE216', 1730673),
(31, 'co4', 'plo5', 100, 70, 'CSE216', 1730673),
(32, 'co5', 'plo9', 100, 73, 'CSE216', 1730673),
(33, 'co1', 'plo2', 100, 53, 'CSE216', 1730725),
(34, 'co2', 'plo6', 100, 73, 'CSE216', 1730725),
(35, 'co4', 'plo5', 100, 81, 'CSE216', 1730725),
(36, 'co5', 'plo9', 100, 61, 'CSE216', 1730725),
(37, 'co1', 'plo2', 100, 100, 'CSE216', 1811900),
(38, 'co2', 'plo6', 100, 85, 'CSE216', 1811900),
(39, 'co4', 'plo5', 100, 94, 'CSE216', 1811900),
(40, 'co5', 'plo9', 100, 96, 'CSE216', 1811900),
(41, 'co1', 'plo1', 100, 35, 'CSC101', 1723575),
(42, 'co2', 'plo3', 100, 38, 'CSC101', 1723575),
(43, 'co3', 'plo7', 100, 51.1, 'CSC101', 1723575),
(44, 'co1', 'plo1', 100, 45, 'CSC101', 1730400),
(45, 'co2', 'plo3', 100, 31, 'CSC101', 1730400),
(46, 'co3', 'plo7', 100, 41, 'CSC101', 1730400),
(47, 'co1', 'plo1', 100, 38, 'CSC101', 1820862),
(48, 'co2', 'plo3', 100, 25, 'CSC101', 1820862),
(49, 'co3', 'plo7', 100, 48, 'CSC101', 1820862),
(50, 'co1', 'plo1', 100, 51, 'CSC101', 1724550),
(51, 'co2', 'plo3', 100, 38, 'CSC101', 1724550),
(52, 'co3', 'plo7', 100, 43, 'CSC101', 1724550),
(53, 'co1', 'plo1', 100, 55, 'CSC101', 1921166),
(54, 'co2', 'plo3', 100, 56, 'CSC101', 1921166),
(55, 'co3', 'plo7', 100, 60, 'CSC101', 1921166),
(56, 'co1', 'plo1', 100, 40, 'CSE307', 1921166),
(57, 'co2', 'plo1', 100, 38, 'CSE307', 1921166),
(58, 'co4', 'plo2', 100, 42, 'CSE307', 1921166),
(59, 'co5', 'plo3', 100, 45, 'CSE307', 1921166),
(60, 'co6', 'plo9', 100, 39, 'CSE307', 1921166),
(61, 'co1', 'plo1', 100, 64, 'CSE307', 1820862),
(62, 'co2', 'plo1', 100, 66, 'CSE307', 1820862),
(63, 'co4', 'plo2', 100, 76, 'CSE307', 1820862),
(64, 'co5', 'plo3', 100, 73, 'CSE307', 1820862),
(65, 'co6', 'plo9', 100, 80, 'CSE307', 1820862),
(66, 'co1', 'plo1', 100, 36, 'CSE307', 1730400),
(67, 'co2', 'plo1', 100, 50, 'CSE307', 1730400),
(68, 'co4', 'plo2', 100, 41, 'CSE307', 1730400),
(69, 'co5', 'plo3', 100, 31, 'CSE307', 1730400),
(70, 'co6', 'plo9', 100, 35, 'CSE307', 1730400),
(71, 'co1', 'plo1', 100, 75, 'CSE307', 1730725),
(72, 'co2', 'plo1', 100, 70, 'CSE307', 1730725),
(73, 'co4', 'plo2', 100, 80, 'CSE307', 1730725),
(74, 'co5', 'plo3', 100, 37, 'CSE307', 1730725),
(75, 'co6', 'plo9', 100, 41, 'CSE307', 1730725),
(76, 'co1', 'plo1', 100, 56, 'CSE307', 1723575),
(77, 'co2', 'plo1', 100, 10, 'CSE307', 1723575),
(78, 'co4', 'plo2', 100, 35, 'CSE307', 1723575),
(79, 'co5', 'plo3', 100, 49, 'CSE307', 1723575),
(80, 'co6', 'plo9', 100, 51, 'CSE307', 1723575),
(81, 'co1', 'plo1', 100, 81, 'CSE309', 1724550),
(82, 'co2', 'plo4', 100, 82, 'CSE309', 1724550),
(83, 'co3', 'plo9', 100, 73, 'CSE309', 1724550),
(84, 'co4', 'plo10', 100, 65, 'CSE309', 1724550),
(85, 'co5', 'plo3', 100, 21, 'CSE309', 1724550),
(86, 'co6', 'plo7', 100, 44, 'CSE309', 1724550),
(87, 'co1', 'plo1', 100, 39, 'CSE309', 1730673),
(88, 'co2', 'plo4', 100, 71, 'CSE309', 1730673),
(89, 'co3', 'plo9', 100, 62, 'CSE309', 1730673),
(90, 'co4', 'plo10', 100, 77, 'CSE309', 1730673),
(91, 'co5', 'plo3', 100, 23, 'CSE309', 1730673),
(92, 'co6', 'plo7', 100, 49, 'CSE309', 1730673),
(93, 'co1', 'plo1', 100, 34, 'CSE309', 1728450),
(94, 'co2', 'plo4', 100, 54, 'CSE309', 1728450),
(95, 'co3', 'plo9', 100, 55, 'CSE309', 1728450),
(96, 'co4', 'plo10', 100, 25, 'CSE309', 1728450),
(97, 'co5', 'plo3', 100, 87, 'CSE309', 1728450),
(98, 'co6', 'plo7', 100, 77, 'CSE309', 1728450),
(99, 'co1', 'plo1', 100, 52, 'CSE309', 1730400),
(100, 'co2', 'plo4', 100, 35, 'CSE309', 1730400),
(101, 'co3', 'plo9', 100, 40, 'CSE309', 1730400),
(102, 'co4', 'plo10', 100, 79, 'CSE309', 1730400),
(103, 'co5', 'plo3', 100, 44, 'CSE309', 1730400),
(104, 'co6', 'plo7', 100, 51, 'CSE309', 1730400),
(105, 'co1', 'plo1', 100, 10, 'CSE309', 1730725),
(106, 'co2', 'plo4', 100, 20, 'CSE309', 1730725),
(107, 'co3', 'plo9', 100, 30, 'CSE309', 1730725),
(108, 'co4', 'plo10', 100, 43, 'CSE309', 1730725),
(109, 'co5', 'plo3', 100, 50, 'CSE309', 1730725),
(110, 'co6', 'plo7', 100, 60, 'CSE309', 1730725);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseId` int(7) NOT NULL,
  `courseTitle` varchar(10) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `departmentId` varchar(5) NOT NULL,
  `semesterId` varchar(10) NOT NULL,
  `facultyId` int(7) NOT NULL,
  `programId` varchar(5) NOT NULL,
  `studentId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseId`, `courseTitle`, `courseName`, `departmentId`, `semesterId`, `facultyId`, `programId`, `studentId`) VALUES
(1, 'CSC101', 'Introduction to computer programming', 'CSE', 'summer2017', 1111, 'CSC', 1730725),
(2, 'CSC101', 'Introduction to computer programming', 'CSE', 'summer2017', 2222, 'CSC', 1730400),
(3, 'CSE201', 'Introduction to algorithm', 'CSE', 'summer2017', 3333, 'CSC', 1730075),
(4, 'CSE104', 'circuit analysis', 'CSE', 'autumn2017', 4444, 'EEE', 1729750),
(5, 'CSE303', 'database management', 'CSE', 'autumn2019', 5555, 'CSE', 1729425),
(6, 'CSE315', 'operating system', 'CSE', 'autumn2019', 6666, 'CSC', 1729100),
(7, 'CSE214', 'computer arganization and architecture', 'CSE', 'autumn2020', 7777, 'CSE', 1728775),
(8, 'CSE214', 'computer arganization and architecture', 'CSE', 'summer2019', 8888, 'CSE', 1728450),
(9, 'CSE214', 'computer arganization and architecture', 'CSE', 'autumn2020', 9999, 'CSE', 1728125),
(10, 'CSE406', 'crytograpgy', 'CSE', 'spring2020', 1112, 'CSE', 1727800),
(11, 'CSE203', 'data structure', 'CSE', 'summer2019', 1113, 'CSE', 1727475),
(12, 'CSE203', 'data structure', 'CSE', 'summer2021', 1114, 'CSE', 1727150),
(13, 'CSE203', 'data structure', 'CSE', 'spring2020', 1115, 'CSE', 1726825),
(14, 'CSE316', 'data communication', 'CSE', 'spring2020', 1116, 'CEN', 1726500),
(15, 'CSE316', 'data communication', 'CSE', 'summer2021', 1117, 'CEN', 1726175),
(16, 'CSE313', 'compiler construction', 'CSE', 'spring2018', 1118, 'CEN', 1725850),
(17, 'CSE210', 'electronics 1', 'EEE', 'spring2019', 1119, 'EEE', 1725525),
(18, 'CSE230', 'electronics 2', 'EEE', 'summer2021', 1121, 'EEE', 1725200),
(19, 'CSE211', 'algorithms', 'EEE', 'summer2018', 1122, 'EEE', 1724875),
(20, 'CSE216', 'microprocessor', 'EEE', 'summer2020', 1123, 'EEE', 1724550),
(21, 'CSE216', 'microprocessor', 'CSE', 'summer2019', 1124, 'CSE', 1724225),
(22, 'CSE201', 'discrete mathematics', 'CSE', 'summer2018', 1125, 'CSE', 1723900),
(23, 'CSE201', 'discrete mathematics', 'CSE', 'spring2017', 1126, 'CSC', 1723575),
(24, 'CSE201', 'discrete mathematics', 'CSE', 'autumn2018', 1127, 'CSE', 1863876),
(25, 'CSE201', 'discrete mathematics', 'CSE', 'autumn2019', 1128, 'CEN', 1920300),
(26, 'CSE307', 'system analysis', 'CSE', 'autumn2018', 1129, 'CSE', 1811900),
(27, 'CSE309', 'web applications', 'CSE', 'summer2020', 1129, 'CSE', 1730400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `departmentId` varchar(5) NOT NULL,
  `departmentName` varchar(255) NOT NULL,
  `schoolId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`departmentId`, `departmentName`, `schoolId`) VALUES
('ACN', 'Accounting', 'SBE'),
('CMN', 'Media and Communication', 'SLASS'),
('CSE', 'Computer science & engineering', 'SETS'),
('DLS', 'Department of Life Science', 'SELS'),
('ECN', 'Economics', 'SBE'),
('EEE', 'Electrical & Electronic Engineering', 'SETS'),
('ELT', 'English ', 'SLASS'),
('ENV', 'Environmental Science & management', 'SELS'),
('FIN', 'Finance', 'SBE'),
('GSG', 'Global Studies & Governance', 'SLASS'),
('HRM', 'Human Resource Management', 'SBE'),
('INB', 'International Business ', 'SBE'),
('LAW', 'Law', 'SLASS'),
('MGT', 'General Management', 'SBE'),
('MIS', 'Management Informtion System', 'SBE'),
('MKT', 'Marketing', 'SBE'),
('PH', 'Public Health', 'SPPH'),
('PHARM', 'Pharmacy', 'SPPH'),
('PS', 'Physical science', 'SETS'),
('SSH', 'Social Science & Humanities', 'SLASS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `facultyId` int(7) NOT NULL,
  `facultyName` varchar(255) NOT NULL,
  `facultyEmail` varchar(255) NOT NULL,
  `departmentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`facultyId`, `facultyName`, `facultyEmail`, `departmentId`) VALUES
(1111, 'Javed Hossain', 'javed@gmail.com', 'CSE'),
(1112, 'Babar Kuddus', 'babar@gmail.com', 'CSE'),
(1113, 'Bonny Buppy', 'bonny@gmail.com', 'CSE'),
(1114, 'Daniel Disuza', 'daniel@gmail.com', 'CSE'),
(1115, 'Shumita Sinha', 'sinha@gmail.com', 'CSE'),
(1116, 'Rabbi Hasan', 'rabbi@gmail.com', 'CSE'),
(1117, 'Amit Mahmood', 'amit@gmail.com', 'CSE'),
(1118, 'Kiran Kani', 'kiran@gmail.com', 'CSE'),
(1119, 'Rohit Rana', 'rana@gmail.com', 'EEE'),
(1121, 'Mahmudul Mormo', 'mormo@gmail.com', 'EEE'),
(1122, 'Raisa Islam', 'raisa@gmail.com', 'EEE'),
(1123, 'Konok Kumar', 'konok@gmail.com', 'EEE'),
(1124, 'Roshni Islam', 'roshni@gmail.com', 'CSE'),
(1125, 'Farhan Mastan', 'farhan@gmail.com', 'CSE'),
(1126, 'Farita Dilan', 'farita@gmail.com', 'CSE'),
(1127, 'Tahmid Tarun', 'tahmid@gmail.com', 'CSE'),
(1128, 'Hamid Dindola', 'hamid@gmail.com', 'CSE'),
(1129, 'Asif islam', 'asif@gmail.com', 'CSE'),
(1130, 'Motiur Rahman', 'motiur@gmail.com', 'CSE'),
(1131, 'Sabrina Islam', 'sabrina@gmail.com', 'EEE'),
(2222, 'Sadita Ahmed', 'sadita@gmail.com', 'CSE'),
(3333, 'Romasa Qasim', 'romasa@gmail.com', 'CSE'),
(4444, 'Kamrul Hasan', 'kamrul@gmail.com', 'EEE'),
(5555, 'Abu Sayeed', 'abusayeed@gmail.com', 'CSE'),
(6666, 'Samita Sen', 'sen@gmail.com', 'CSE'),
(7777, 'Aisha Jahan', 'aisha@gmail.com', 'CSE'),
(8888, 'Arif Butto', 'arif@gmail.com', 'CSE'),
(9999, 'Mohammad Mustofa', 'mustofa@gmail.com', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_head`
--

CREATE TABLE `tbl_head` (
  `headId` int(7) NOT NULL,
  `headName` varchar(255) NOT NULL,
  `headEmail` varchar(255) NOT NULL,
  `departmentId` varchar(5) NOT NULL,
  `schoolId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_head`
--

INSERT INTO `tbl_head` (`headId`, `headName`, `headEmail`, `departmentId`, `schoolId`) VALUES
(1, 'Minu Jahan', 'minu@gmail.com', 'CSE', 'SETS'),
(2, 'Mahadi hussain', 'mahadi@gmail.com', 'EEE', 'SETS'),
(3, 'Kamrun Nahar', 'nahar@gmail.com', 'PS', 'SETS'),
(4, 'Kazi Husam', 'kazi@gmail.com', 'ACN', 'SBE'),
(5, 'Nauroz kumar', 'kumar@gmail.com', 'ECN', 'SBE'),
(6, 'Nuren Kamal', 'kamal@gmail.com', 'FIN', 'SBE'),
(7, 'Farha Hasan', 'farha@gmail.com', 'MGT', 'SBE'),
(8, 'Nuha Namal', 'nuha@gmail.com', 'HRM', 'SBE'),
(9, 'Kuddus Mia', 'mia@gmail.com', 'INB', 'SBE'),
(10, 'Mehman Mudassir', 'mehman@gmail.com', 'MIS', 'SBE'),
(11, 'Jamal Gil', 'jamal@gmail.com', 'MKT', 'SBE'),
(12, 'Kamal Uddin', 'kamal@gmail.com', 'ENV', 'SELS'),
(13, 'Mohammad Rouf', 'rouf@gmail.com', 'DLS', 'SELS'),
(14, 'Kaiser Kaif', 'kaif@gmail.com', 'ELT', 'SLASS'),
(15, 'Husnan Jalal', 'jalal@gmail.com', 'GSG', 'SLASS'),
(16, 'Tahmid Tehrif', 'tehrif@gmail.com', 'LAW', 'SLASS'),
(17, 'Polok Daas', 'polok@gmail.com', 'CMN', 'SLASS'),
(18, 'Rana Rehnin', 'rana@gmail.com', 'SSH', 'SLASS'),
(19, 'Walid wafar', 'walid@gmail.com', 'PHARM', 'SPPH'),
(20, 'Wasifur Neha', 'neha@gmail.com', 'PH', 'SPPH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plo`
--

CREATE TABLE `tbl_plo` (
  `ploId` int(7) NOT NULL,
  `ploNo` varchar(5) NOT NULL,
  `programId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plo`
--

INSERT INTO `tbl_plo` (`ploId`, `ploNo`, `programId`) VALUES
(1, 'plo1', 'CSE'),
(2, 'plo2', 'CSE'),
(3, 'plo3', 'CSE'),
(4, 'plo4', 'CSE'),
(5, 'plo5', 'CSE'),
(6, 'plo6', 'CSE'),
(7, 'plo7', 'CSE'),
(8, 'plo8', 'CSE'),
(9, 'plo9', 'CSE'),
(10, 'plo10', 'CSE'),
(11, 'plo11', 'CSE'),
(12, 'plo12', 'CSE'),
(13, 'plo13', 'CSE'),
(14, 'plo1', 'CSC'),
(15, 'plo2', 'CSC'),
(16, 'plo3', 'CSC'),
(17, 'plo4', 'CSC'),
(18, 'plo5', 'CSC'),
(19, 'plo6', 'CSC'),
(20, 'plo7', 'CSC'),
(21, 'plo8', 'CSC'),
(22, 'plo9', 'CSC'),
(23, 'plo10', 'CSC'),
(24, 'plo11', 'CSC'),
(25, 'plo12', 'CSC'),
(26, 'plo13', 'CSC'),
(27, 'plo1', 'CEN'),
(28, 'plo2', 'CEN'),
(29, 'plo3', 'CEN'),
(30, 'plo4', 'CEN'),
(31, 'plo5', 'CEN'),
(32, 'plo6', 'CEN'),
(33, 'plo7', 'CEN'),
(34, 'plo8', 'CEN'),
(35, 'plo9', 'CEN'),
(36, 'plo10', 'CEN'),
(37, 'plo11', 'CEN'),
(38, 'plo12', 'CEN'),
(39, 'plo13', 'CEN'),
(40, 'plo1', 'EEE'),
(41, 'plo2', 'EEE'),
(42, 'plo3', 'EEE'),
(43, 'plo4', 'EEE'),
(44, 'plo5', 'EEE'),
(45, 'plo6', 'EEE'),
(46, 'plo7', 'EEE'),
(47, 'plo8', 'EEE'),
(48, 'plo9', 'EEE'),
(49, 'plo10', 'EEE'),
(50, 'plo11', 'EEE'),
(51, 'plo12', 'EEE'),
(52, 'plo13', 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE `tbl_program` (
  `programId` varchar(5) NOT NULL,
  `programName` varchar(255) NOT NULL,
  `departmentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_program`
--

INSERT INTO `tbl_program` (`programId`, `programName`, `departmentId`) VALUES
('BBB', 'bachelor of biochemistry and biotechnology', 'DLS'),
('BM', 'bachelor of microbiology', 'DLS'),
('CEN', 'computer engineering', 'CSE'),
('CMN', 'media and communication', 'CMN'),
('CSC', 'computer science', 'CSE'),
('CSE', 'computer science and engineering', 'CSE'),
('EEE', 'electrical & electronic engineering', 'EEE'),
('ELT', 'english literature', 'ELT'),
('EM', 'environmental management ', 'ENV'),
('ETE', 'electronic & telecommunication engineering', 'EEE'),
('HRM', 'BBA in human resourse management', 'HRM'),
('INB', 'BBA in international business', 'INB'),
('LLB', 'bachelor of laws ', 'LAW'),
('LWRM', 'land and water resource management', 'ENV'),
('MAT', 'mathematics', 'PS'),
('MGT', 'BBA in management', 'MGT'),
('MIS', 'BBA in management in information system', 'MIS'),
('MKT', 'BBA in marketing', 'MKT'),
('PHY', 'physics', 'PS'),
('SSH', 'social sciences and humanities', 'SSH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `schoolId` varchar(5) NOT NULL,
  `schoolName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`schoolId`, `schoolName`) VALUES
('SBE', 'school of business & entrepreneurship'),
('SELS', 'school of environment and life sciences'),
('SETS', 'school of engineering technology & sciences'),
('SLASS', 'school of liberal arts and social sciences'),
('SPPH', 'school of pharmacy and public health');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semesterId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semesterId`) VALUES
('autumn2014'),
('autumn2015'),
('autumn2016'),
('autumn2017'),
('autumn2018'),
('autumn2019'),
('autumn2020'),
('autumn2021'),
('autumn2022'),
('spring2015'),
('spring2016'),
('spring2017'),
('spring2018'),
('spring2019'),
('spring2020'),
('spring2021'),
('spring2022'),
('summer2015'),
('summer2016'),
('summer2017'),
('summer2018'),
('summer2019'),
('summer2020'),
('summer2021'),
('summer2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `studentId` int(7) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `schoolId` varchar(5) NOT NULL,
  `departmentId` varchar(5) NOT NULL,
  `programId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`studentId`, `studentName`, `studentEmail`, `schoolId`, `departmentId`, `programId`) VALUES
(1723575, 'Efren', 'effy4567@example.com', 'SETS', 'CSE', 'CSC'),
(1723900, 'Lawton', 'lawton123@example.com', 'SETS', 'CSE', 'CSE'),
(1724225, 'Mira', 'msoldner1r@taobao.com', 'SETS', 'CSE', 'CSE'),
(1724550, 'Cecilius', 'cgirodier1p@hao123.com', 'SETS', 'EEE', 'EEE'),
(1724875, 'Logan', 'lgiriardelli1t@etsy.com', 'SETS', 'EEE', 'EEE'),
(1725200, 'Gerrilee', 'gbolf1o@narod.ru', 'SETS', 'EEE', 'EEE'),
(1725525, 'Latisha', 'lclaessens1n@cbslocal.com', 'SETS', 'EEE', 'ETE'),
(1725850, 'Kelcy', 'kgradly1a@example.com', 'SETS', 'CSE', 'CEN'),
(1726175, 'Myrvyn', 'mkitteridge15@nymag.com	', 'SETS', 'CSE', 'CEN'),
(1726500, 'Neill', 'nbishopp10@example.com', 'SETS', 'CSE', 'CEN'),
(1726825, 'Colman', 'ccrimesz@webeden.co.uk', 'SETS', 'CSE', 'CSE'),
(1727150, 'Huntley', 'hhatchu@newyorker.com', 'SETS', 'CSE', 'CSE'),
(1727475, 'Mortie', 'mroddp@example.com', 'SETS', 'CSE', 'CSE'),
(1727800, 'Ray', 'rklossmanno@stumbleupon.com', 'SETS', 'CSE', 'CSE'),
(1728125, 'Nick', 'nnockk@feedburner.com', 'SETS', 'CSE', 'CSE'),
(1728450, 'Ravid', 'rtripeand@example.com', 'SETS', 'CSE', 'CSE'),
(1728775, 'Paxton', 'pheakinsc@umich.edu', 'SETS', 'CSE', 'CSE'),
(1729100, 'Haskel', 'hwooton8@jigsy.com', 'SETS', 'CSE', 'CSC'),
(1729425, 'Osmond', 'oabelovitz6@msu.edu', 'SETS', 'CSE', 'CSE'),
(1729750, 'Roxanna', 'rplaschke5@tuttocitta.it', 'SETS', 'EEE', 'EEE'),
(1730075, 'Carroll', 'ccains0@tripadvisor.com', 'SETS', 'CSE', 'CSC'),
(1730400, 'Minhajul Islam', 'mina@gmail.com', 'SETS', 'CSE', 'CSC'),
(1730673, 'Ryan Farhan', 'farhan@gmail.com', 'SETS', 'CSE', 'CSE'),
(1730725, 'Mairan Sultana', 'mairan@gmail.com', 'SETS', 'CSE', 'CSE'),
(1811900, 'Jhontu', 'jhontu@gmail.com', 'SETS', 'CSE', 'CSE'),
(1820862, 'Mariam Islam', 'mariam@gmail.com', 'SETS', 'CSE', 'CSE'),
(1863876, 'Joseph', 'jp12344@example.com', 'SETS', 'CSE', 'CSE'),
(1920300, 'Neill', 'neil@gmail.com', 'SETS', 'CSE', 'CEN'),
(1921166, 'Dwean Wakil Ahmed', 'dewan@gmail.com', 'SETS', 'CSE', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_co`
--
ALTER TABLE `tbl_co`
  ADD PRIMARY KEY (`coId`),
  ADD KEY `tbl_co_fk0` (`studentId`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `tbl_course_fk0` (`departmentId`),
  ADD KEY `tbl_course_fk1` (`semesterId`),
  ADD KEY `tbl_course_fk2` (`facultyId`),
  ADD KEY `tbl_course_fk3` (`programId`),
  ADD KEY `tbl_course_fk4` (`studentId`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`departmentId`),
  ADD KEY `tbl_department_fk0` (`schoolId`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`facultyId`),
  ADD KEY `tbl_faculty_fk0` (`departmentId`);

--
-- Indexes for table `tbl_head`
--
ALTER TABLE `tbl_head`
  ADD PRIMARY KEY (`headId`),
  ADD KEY `tbl_head_fk0` (`departmentId`),
  ADD KEY `tbl_head_fk1` (`schoolId`);

--
-- Indexes for table `tbl_plo`
--
ALTER TABLE `tbl_plo`
  ADD PRIMARY KEY (`ploId`),
  ADD KEY `tbl_plo_fk0` (`programId`);

--
-- Indexes for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`programId`),
  ADD KEY `tbl_program_fk0` (`departmentId`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`schoolId`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semesterId`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `tbl_student_fk0` (`schoolId`),
  ADD KEY `tbl_student_fk1` (`departmentId`),
  ADD KEY `tbl_student_fk2` (`programId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_co`
--
ALTER TABLE `tbl_co`
  MODIFY `coId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `courseId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `facultyId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `tbl_head`
--
ALTER TABLE `tbl_head`
  MODIFY `headId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_plo`
--
ALTER TABLE `tbl_plo`
  MODIFY `ploId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `studentId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1921167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_co`
--
ALTER TABLE `tbl_co`
  ADD CONSTRAINT `tbl_co_fk0` FOREIGN KEY (`studentId`) REFERENCES `tbl_student` (`studentId`);

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_fk0` FOREIGN KEY (`departmentId`) REFERENCES `tbl_department` (`departmentId`),
  ADD CONSTRAINT `tbl_course_fk1` FOREIGN KEY (`semesterId`) REFERENCES `tbl_semester` (`semesterId`),
  ADD CONSTRAINT `tbl_course_fk2` FOREIGN KEY (`facultyId`) REFERENCES `tbl_faculty` (`facultyId`),
  ADD CONSTRAINT `tbl_course_fk3` FOREIGN KEY (`programId`) REFERENCES `tbl_program` (`programId`),
  ADD CONSTRAINT `tbl_course_fk4` FOREIGN KEY (`studentId`) REFERENCES `tbl_student` (`studentId`);

--
-- Constraints for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD CONSTRAINT `tbl_department_fk0` FOREIGN KEY (`schoolId`) REFERENCES `tbl_school` (`schoolId`);

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `tbl_faculty_fk0` FOREIGN KEY (`departmentId`) REFERENCES `tbl_department` (`departmentId`);

--
-- Constraints for table `tbl_head`
--
ALTER TABLE `tbl_head`
  ADD CONSTRAINT `tbl_head_fk0` FOREIGN KEY (`departmentId`) REFERENCES `tbl_department` (`departmentId`),
  ADD CONSTRAINT `tbl_head_fk1` FOREIGN KEY (`schoolId`) REFERENCES `tbl_school` (`schoolId`);

--
-- Constraints for table `tbl_plo`
--
ALTER TABLE `tbl_plo`
  ADD CONSTRAINT `tbl_plo_fk0` FOREIGN KEY (`programId`) REFERENCES `tbl_program` (`programId`);

--
-- Constraints for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD CONSTRAINT `tbl_program_fk0` FOREIGN KEY (`departmentId`) REFERENCES `tbl_department` (`departmentId`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_fk0` FOREIGN KEY (`schoolId`) REFERENCES `tbl_school` (`schoolId`),
  ADD CONSTRAINT `tbl_student_fk1` FOREIGN KEY (`departmentId`) REFERENCES `tbl_department` (`departmentId`),
  ADD CONSTRAINT `tbl_student_fk2` FOREIGN KEY (`programId`) REFERENCES `tbl_program` (`programId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
