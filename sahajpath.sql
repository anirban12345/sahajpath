-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 04:31 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahajpath`
--

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `caste_id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caste_date` date NOT NULL,
  `caste_time` time NOT NULL,
  `caste_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`caste_id`, `cname`, `caste_date`, `caste_time`, `caste_flag`, `user_id`) VALUES
(1, 'SC', '2019-01-08', '14:02:34', 0, 6),
(2, 'ST', '2019-01-08', '15:23:23', 1, 6),
(3, 'OBC - A', '2019-01-08', '15:21:45', 0, 6),
(4, 'General', '2019-01-08', '15:30:38', 1, 6),
(5, 'OBC - B', '2019-01-09', '09:12:08', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_date` date NOT NULL,
  `class_time` time NOT NULL,
  `class_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `class_date`, `class_time`, `class_flag`, `user_id`) VALUES
(1, 'Class I', '2019-01-08', '08:55:32', 1, 6),
(2, 'Class II', '2019-01-08', '11:22:23', 1, 6),
(3, 'Class III', '2019-01-09', '09:10:04', 1, 6),
(4, 'Class IV', '2019-01-09', '09:09:45', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `class_fees`
--

CREATE TABLE `class_fees` (
  `cf_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fees_id` int(11) NOT NULL,
  `cf_date` date NOT NULL,
  `cf_time` time NOT NULL,
  `cf_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_fees`
--

INSERT INTO `class_fees` (`cf_id`, `class_id`, `fees_id`, `cf_date`, `cf_time`, `cf_flag`, `user_id`) VALUES
(1, 1, 1, '2019-01-12', '21:30:47', 1, 6),
(2, 1, 2, '2019-01-12', '21:30:47', 1, 6),
(3, 1, 3, '2019-01-12', '21:30:47', 1, 6),
(4, 2, 1, '2019-01-12', '22:10:41', 1, 6),
(5, 2, 2, '2019-01-12', '22:10:41', 1, 6),
(6, 2, 3, '2019-01-12', '22:10:41', 1, 6),
(7, 2, 4, '2019-01-12', '22:10:41', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `f_id` int(11) NOT NULL,
  `f_head` varchar(255) NOT NULL,
  `f_rs` varchar(255) NOT NULL,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  `f_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`f_id`, `f_head`, `f_rs`, `f_date`, `f_time`, `f_flag`, `user_id`) VALUES
(1, 'Tution Fees', '500', '2019-01-12', '20:40:17', 1, 6),
(2, 'Examination Fees', '150', '2019-01-12', '20:44:17', 1, 6),
(3, 'Development Fees', '50', '2019-01-12', '20:44:47', 1, 6),
(4, 'Library', '25', '2019-01-12', '20:44:56', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religion_id` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `religion_date` date NOT NULL,
  `religion_time` time NOT NULL,
  `religion_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_id`, `rname`, `religion_date`, `religion_time`, `religion_flag`, `user_id`) VALUES
(1, 'Hindu', '2019-01-09', '09:11:52', 1, 6),
(2, 'Islam', '2019-01-08', '13:56:33', 1, 6),
(3, 'Jainism', '2019-01-09', '09:10:58', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `section_date` date NOT NULL,
  `section_time` time NOT NULL,
  `section_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `class_id`, `sname`, `section_date`, `section_time`, `section_flag`, `user_id`) VALUES
(1, 1, 'Sec A', '2019-01-08', '16:49:00', 0, 6),
(2, 2, 'Sec A', '2019-01-09', '09:10:27', 1, 6),
(3, 1, 'Sec B', '2019-01-09', '09:10:39', 1, 6),
(4, 2, 'Sec B', '2019-01-09', '16:42:58', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `setup`
--

CREATE TABLE `setup` (
  `setup_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `setup_date` date NOT NULL,
  `setup_time` time NOT NULL,
  `setup_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup`
--

INSERT INTO `setup` (`setup_id`, `name`, `address`, `emailid`, `phoneno`, `setup_date`, `setup_time`, `setup_flag`, `user_id`) VALUES
(1, 'Name', 'Address', 'name@gmail.com', '9999999999', '2019-01-09', '11:16:27', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `fathersname` varchar(255) NOT NULL,
  `mothersname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion_id` int(11) NOT NULL,
  `caste_id` int(11) NOT NULL,
  `physicallychalleged` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `scm_id` int(11) NOT NULL,
  `stu_date` date NOT NULL,
  `stu_time` time NOT NULL,
  `stu_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `reg_no`, `stuname`, `fathersname`, `mothersname`, `address`, `state`, `district`, `pincode`, `dob`, `gender`, `nationality`, `religion_id`, `caste_id`, `physicallychalleged`, `phoneno`, `image`, `scm_id`, `stu_date`, `stu_time`, `stu_flag`, `user_id`) VALUES
(1, '190108174315', 'a', 'd', 'e', 'f', 'West Bengal', 'Bardhaman', 'i', '2019-01-08', 'Male', 'Indian', 2, 3, 'Yes', '99', '190108174315.jpg', 0, '2019-01-08', '10:00:00', 1, 6),
(2, '190108173615', 'Anirban Seth', 'demo4', 'demo5', 'demo6', 'West Bengal', 'Kolkata', '99999999', '2019-01-08', 'Male', 'Indian', 1, 1, 'No', '7755339955', '190108173615.jpg', 5, '2019-01-08', '17:23:34', 1, 6),
(3, '190108171535', 'qq', 'Fathers Name', 'tt', 'yy', 'West Bengal', 'Bardhaman', '99', '2005-01-15', 'Female', 'Indian', 1, 1, 'Yes', '996633', '190108171535.jpg', 3, '2019-01-08', '17:36:42', 1, 6),
(4, '190108220637', 'Somrat', 'Ashok Mondal', 'Mira Mondal', 'Belghoria', 'West Bengal', 'Kolkata', '715402', '1999-02-16', 'Male', 'Indian', 1, 1, 'No', '9517538525', '190108220637.jpg', 4, '2019-01-08', '22:06:37', 1, 6),
(6, '190110093007', 'Sutopa', 'Manish Roy', 'Tapasi Roy', 'Malda', 'West Bengal', 'Malda', '774455', '2014-06-10', 'Female', 'Indian', 1, 4, 'No', '9988776655', 'user.jpg', 0, '2019-01-10', '09:30:07', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student_class_map`
--

CREATE TABLE `student_class_map` (
  `scm_id` int(11) NOT NULL,
  `scm_session` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `scm_date` date NOT NULL,
  `scm_time` time NOT NULL,
  `scm_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class_map`
--

INSERT INTO `student_class_map` (`scm_id`, `scm_session`, `reg_no`, `class_id`, `section_id`, `scm_date`, `scm_time`, `scm_flag`, `user_id`) VALUES
(1, '2018-2019', '190108220637', 1, 1, '2019-01-09', '15:58:53', 1, 6),
(3, '2019-2020', '190108171535', 1, 1, '2019-01-09', '16:43:36', 1, 6),
(4, '2019-2020', '190108220637', 1, 1, '2019-01-09', '21:38:20', 1, 6),
(5, '2019-2020', '190108173615', 2, 2, '2019-01-10', '10:09:59', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student_docs`
--

CREATE TABLE `student_docs` (
  `sd_id` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `sd_date` date NOT NULL,
  `sd_time` time NOT NULL,
  `sd_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_docs`
--

INSERT INTO `student_docs` (`sd_id`, `reg_no`, `description`, `filename`, `sd_date`, `sd_time`, `sd_flag`, `user_id`) VALUES
(1, '190108220637', 'Addhar Card', '1546974553.jpg', '2019-01-09', '00:39:25', 1, 6),
(2, '190108220637', 'Birth Certiificate', '1546974578.jpg', '2019-01-09', '00:39:53', 1, 6),
(3, '190108171535', 'Voter card', '1547034337.jpg', '2019-01-09', '17:15:46', 1, 6),
(4, '190108171535', 'Aadhar Card', '1547034392.jpg', '2019-01-09', '17:16:42', 1, 6),
(5, '190108220637', 'Ration Card', '1547035037.jpg', '2019-01-09', '17:27:27', 1, 6),
(6, '190108220637', 'Aadhar', '1547036936.jpg', '2019-01-09', '17:59:03', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `sub_date` date NOT NULL,
  `sub_time` time NOT NULL,
  `sub_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `class_id`, `subname`, `sub_date`, `sub_time`, `sub_flag`, `user_id`) VALUES
(1, 1, 'Enlgish', '2019-01-11', '15:54:05', 1, 6),
(2, 1, 'Mathematics', '2019-01-11', '16:00:30', 1, 6),
(3, 1, 'General Knowledge', '2019-01-11', '16:00:39', 1, 6),
(7, 2, 'Mathematics', '2019-01-11', '16:01:17', 1, 6),
(8, 2, 'English', '2019-01-11', '16:05:31', 1, 6),
(9, 1, 'Memory Games', '2019-01-11', '17:10:50', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phoneno` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Levelid` int(11) NOT NULL,
  `Udate` date NOT NULL DEFAULT '0000-00-00',
  `Utime` time NOT NULL DEFAULT '00:00:00',
  `Uflag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Address`, `Phoneno`, `Username`, `Password`, `Image`, `Levelid`, `Udate`, `Utime`, `Uflag`, `user_id`) VALUES
(1, 'user1', 'user1', 'dd', '9963688525', 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 2, '2019-01-06', '17:07:40', 1, 0),
(2, 'Admin', 'Admin', 'dd', '9963688525', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 1, '2018-08-07', '11:05:31', 1, 0),
(3, 'user2', 'user2', 'swdd', '9963688526', 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 2, '2018-08-07', '13:44:15', 0, 0),
(4, 'Sajal', 'Das', 'Patuli', '9963688526', 'sajal', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 3, '2019-01-05', '13:44:15', 1, 6),
(5, 'non-teaching', 'non-teaching', 'swdd', '9963688526', 'nonteaching', 'e10adc3949ba59abbe56e057f20f883e', '1533629805.jpg', 4, '2019-01-05', '13:44:15', 1, 0),
(6, 'Anirban', 'Seth', 'Kolkata 700007', '9996663335', 'anirban', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 1, '2019-01-06', '15:55:03', 1, 0),
(7, 'Rahul', 'Ghosh', 'West Bengal', '8885552225', 'rahul', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 2, '2019-01-06', '23:18:26', 0, 0),
(8, 'Tapan', 'Halder', 'Bagnan', '9966335522', 'tapan', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 3, '2019-01-11', '14:21:18', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Log_Date` date NOT NULL DEFAULT '0000-00-00',
  `Log_Time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `User_Id`, `Log_Date`, `Log_Time`) VALUES
(1, 4, '2019-01-05', '18:50:41'),
(2, 1, '2019-01-05', '18:50:59'),
(3, 1, '2019-01-05', '20:57:05'),
(4, 4, '2019-01-05', '20:57:23'),
(5, 1, '2019-01-05', '20:57:50'),
(6, 4, '2019-01-05', '20:59:47'),
(7, 5, '2019-01-05', '21:20:48'),
(8, 1, '2019-01-05', '21:41:04'),
(9, 1, '2019-01-05', '21:43:38'),
(10, 1, '2019-01-05', '21:50:31'),
(11, 1, '2019-01-05', '22:09:14'),
(12, 1, '2019-01-05', '22:12:09'),
(13, 1, '2019-01-05', '22:17:08'),
(14, 1, '2019-01-06', '00:27:24'),
(15, 1, '2019-01-06', '09:28:32'),
(16, 1, '2019-01-06', '11:54:05'),
(17, 1, '2019-01-06', '12:02:15'),
(18, 1, '2019-01-06', '12:16:59'),
(19, 1, '2019-01-06', '12:17:49'),
(20, 1, '2019-01-06', '12:18:39'),
(21, 1, '2019-01-06', '12:19:00'),
(22, 1, '2019-01-06', '12:20:31'),
(23, 1, '2019-01-06', '12:21:00'),
(24, 1, '2019-01-06', '12:30:04'),
(25, 1, '2019-01-06', '12:32:59'),
(26, 1, '2019-01-06', '15:12:00'),
(27, 1, '2019-01-06', '15:13:19'),
(28, 2, '2019-01-06', '23:15:22'),
(29, 4, '2019-01-06', '23:32:59'),
(30, 1, '2019-01-06', '23:34:43'),
(31, 1, '2019-01-07', '00:22:07'),
(32, 6, '2019-01-07', '00:25:45'),
(33, 6, '2019-01-07', '00:30:55'),
(34, 6, '2019-01-07', '00:32:22'),
(35, 7, '2019-01-07', '00:32:39'),
(36, 6, '2019-01-07', '00:32:59'),
(37, 6, '2019-01-07', '00:36:05'),
(38, 1, '2019-01-07', '09:13:14'),
(39, 6, '2019-01-07', '09:13:25'),
(40, 6, '2019-01-07', '09:18:51'),
(41, 7, '2019-01-07', '09:20:16'),
(42, 6, '2019-01-07', '09:20:26'),
(43, 6, '2019-01-07', '09:20:53'),
(44, 6, '2019-01-07', '09:31:58'),
(45, 6, '2019-01-07', '22:55:55'),
(46, 6, '2019-01-07', '23:11:03'),
(47, 1, '2019-01-07', '23:51:47'),
(48, 6, '2019-01-07', '23:51:57'),
(49, 2, '2019-01-08', '00:18:49'),
(50, 6, '2019-01-08', '00:19:50'),
(51, 6, '2019-01-08', '08:37:01'),
(52, 6, '2019-01-08', '11:14:33'),
(53, 6, '2019-01-08', '14:04:28'),
(54, 6, '2019-01-08', '15:21:33'),
(55, 6, '2019-01-08', '16:23:59'),
(56, 6, '2019-01-08', '17:57:29'),
(57, 6, '2019-01-08', '21:12:07'),
(58, 6, '2019-01-09', '08:47:00'),
(59, 6, '2019-01-09', '08:50:36'),
(60, 6, '2019-01-09', '09:08:51'),
(61, 6, '2019-01-09', '09:09:29'),
(62, 6, '2019-01-09', '09:19:51'),
(63, 6, '2019-01-09', '11:16:20'),
(64, 6, '2019-01-09', '14:59:14'),
(65, 6, '2019-01-09', '17:34:27'),
(66, 6, '2019-01-09', '18:23:48'),
(67, 6, '2019-01-09', '18:43:50'),
(68, 6, '2019-01-09', '20:48:49'),
(69, 6, '2019-01-09', '21:25:56'),
(70, 6, '2019-01-10', '08:38:02'),
(71, 6, '2019-01-10', '21:01:23'),
(72, 6, '2019-01-11', '07:53:07'),
(73, 6, '2019-01-11', '09:40:56'),
(74, 6, '2019-01-11', '10:43:51'),
(75, 6, '2019-01-11', '11:30:32'),
(76, 6, '2019-01-11', '15:32:42'),
(77, 6, '2019-01-11', '16:10:37'),
(78, 6, '2019-01-11', '17:55:59'),
(79, 6, '2019-01-11', '23:14:11'),
(80, 6, '2019-01-12', '12:16:16'),
(81, 6, '2019-01-12', '08:52:55'),
(82, 6, '2019-01-12', '20:08:17'),
(83, 6, '2019-01-13', '18:30:13'),
(84, 6, '2019-01-14', '08:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `a_id` int(11) NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `entrydate` date NOT NULL,
  `entrytime` time NOT NULL,
  `exittime` time NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time NOT NULL,
  `a_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `Id` int(11) NOT NULL,
  `Title` varchar(55) NOT NULL,
  `ut_date` date NOT NULL,
  `ut_time` time NOT NULL,
  `ut_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`Id`, `Title`, `ut_date`, `ut_time`, `ut_flag`, `user_id`) VALUES
(1, 'Admin', '0000-00-00', '00:00:00', 0, 6),
(2, 'User', '0000-00-00', '00:00:00', 0, 6),
(3, 'Teaching Staff', '0000-00-00', '00:00:00', 1, 6),
(4, 'Non Teaching Staff', '2019-01-11', '10:12:15', 1, 6),
(5, 'Group D', '2019-01-11', '16:44:38', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`caste_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_fees`
--
ALTER TABLE `class_fees`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`setup_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_class_map`
--
ALTER TABLE `student_class_map`
  ADD PRIMARY KEY (`scm_id`);

--
-- Indexes for table `student_docs`
--
ALTER TABLE `student_docs`
  ADD PRIMARY KEY (`sd_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attendance`
--
ALTER TABLE `user_attendance`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `caste_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_fees`
--
ALTER TABLE `class_fees`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setup`
--
ALTER TABLE `setup`
  MODIFY `setup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_class_map`
--
ALTER TABLE `student_class_map`
  MODIFY `scm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_docs`
--
ALTER TABLE `student_docs`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
