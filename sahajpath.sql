-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 08:10 PM
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
(1, 'General', '2019-02-03', '10:48:11', 1, 1),
(2, 'SC', '2019-02-03', '10:48:15', 1, 1),
(3, 'ST', '2019-02-03', '10:48:18', 1, 1),
(4, 'OBC - A', '2019-02-03', '10:48:26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_date` date NOT NULL,
  `class_time` time NOT NULL,
  `class_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_date`, `class_time`, `class_flag`, `user_id`) VALUES
(1, 'Class I', '2019-02-04', '21:47:36', 1, 1),
(2, 'Class II', '2019-02-04', '21:47:43', 1, 1),
(3, 'Class III', '2019-02-04', '22:36:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_fees`
--

CREATE TABLE `class_fees` (
  `cfees_id` int(11) NOT NULL,
  `cfees_classid` int(11) NOT NULL,
  `cfees_name` varchar(255) NOT NULL,
  `cfees_fees` varchar(255) NOT NULL,
  `cfees_parentid` int(11) NOT NULL,
  `cfees_date` date NOT NULL,
  `cfees_time` time NOT NULL,
  `cfees_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_fees`
--

INSERT INTO `class_fees` (`cfees_id`, `cfees_classid`, `cfees_name`, `cfees_fees`, `cfees_parentid`, `cfees_date`, `cfees_time`, `cfees_flag`, `user_id`) VALUES
(1, 1, 'Tution Fees', '500', 0, '2019-02-04', '00:03:15', 1, 1),
(2, 1, 'Examination Fees', '200', 0, '2019-02-04', '00:11:24', 1, 1),
(3, 2, 'Tution Fees', '600', 0, '2019-02-04', '09:31:36', 1, 1),
(4, 1, 'Library Fees', '200', 0, '2019-02-06', '09:46:59', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_section`
--

CREATE TABLE `class_section` (
  `csec_id` int(11) NOT NULL,
  `csec_classid` int(11) NOT NULL,
  `csec_name` varchar(255) NOT NULL,
  `csec_parentid` int(11) NOT NULL,
  `csec_date` date NOT NULL,
  `csec_time` time NOT NULL,
  `csec_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_section`
--

INSERT INTO `class_section` (`csec_id`, `csec_classid`, `csec_name`, `csec_parentid`, `csec_date`, `csec_time`, `csec_flag`, `user_id`) VALUES
(1, 1, 'Section A', 0, '2019-02-04', '22:07:43', 1, 1),
(2, 2, 'Section A', 0, '2019-02-04', '21:59:45', 1, 1),
(3, 2, 'Section B', 0, '2019-02-04', '22:25:02', 1, 1),
(4, 1, 'Section B', 0, '2019-02-04', '22:19:31', 1, 1),
(5, 2, 'Section C', 0, '2019-02-04', '22:31:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `csub_id` int(11) NOT NULL,
  `csub_classid` int(11) NOT NULL,
  `csub_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `csub_parentid` int(11) NOT NULL,
  `csub_date` date NOT NULL,
  `csub_time` time NOT NULL,
  `csub_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`csub_id`, `csub_classid`, `csub_name`, `csub_parentid`, `csub_date`, `csub_time`, `csub_flag`, `user_id`) VALUES
(1, 1, 'আমার বই', 0, '2019-02-10', '10:45:50', 1, 1),
(2, 1, 'স্বাস্থ্য ও শারীরশিক্ষা', 0, '2019-02-10', '10:47:21', 1, 1),
(3, 1, 'সহজ পাঠ', 0, '2019-02-10', '10:47:52', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_subject_chapter`
--

CREATE TABLE `class_subject_chapter` (
  `chap_id` int(11) NOT NULL,
  `chap_subjectid` int(11) NOT NULL,
  `chap_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chap_filename` varchar(255) NOT NULL,
  `chap_date` date NOT NULL,
  `chap_time` time NOT NULL,
  `chap_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_subject_chapter`
--

INSERT INTO `class_subject_chapter` (`chap_id`, `chap_subjectid`, `chap_name`, `chap_filename`, `chap_date`, `chap_time`, `chap_flag`, `user_id`) VALUES
(1, 1, 'অধ্যায় ১', '1549824190.pdf', '2019-02-11', '00:13:26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_term`
--

CREATE TABLE `class_term` (
  `cterm_id` int(11) NOT NULL,
  `cterm_classid` int(11) NOT NULL,
  `cterm_name` varchar(255) NOT NULL,
  `cterm_totalmarks` varchar(255) NOT NULL,
  `cterm_passmarks` varchar(255) NOT NULL,
  `cterm_parentid` int(11) NOT NULL,
  `cterm_date` date NOT NULL,
  `cterm_time` time NOT NULL,
  `cterm_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_term`
--

INSERT INTO `class_term` (`cterm_id`, `cterm_classid`, `cterm_name`, `cterm_totalmarks`, `cterm_passmarks`, `cterm_parentid`, `cterm_date`, `cterm_time`, `cterm_flag`, `user_id`) VALUES
(1, 1, 'Term 1', '50', '20', 0, '2019-02-05', '00:34:53', 1, 1),
(2, 1, 'Term 2', '50', '20', 0, '2019-02-05', '00:29:02', 1, 1),
(3, 1, 'Annual', '100', '40', 0, '2019-02-05', '00:29:20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `e_id` int(11) NOT NULL,
  `e_session` varchar(255) NOT NULL,
  `e_classid` int(11) NOT NULL,
  `e_sectionid` int(11) NOT NULL,
  `e_subjectid` int(11) NOT NULL,
  `e_termid` int(11) NOT NULL,
  `e_date` date NOT NULL,
  `e_desc` varchar(255) NOT NULL,
  `e_crt_date` date NOT NULL,
  `e_crt_time` time NOT NULL,
  `e_crt_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `e_session`, `e_classid`, `e_sectionid`, `e_subjectid`, `e_termid`, `e_date`, `e_desc`, `e_crt_date`, `e_crt_time`, `e_crt_flag`, `user_id`) VALUES
(1, '2019', 1, 4, 1, 1, '2019-04-17', 'Term ! Exam', '2019-02-03', '13:26:04', 1, 1),
(2, '2019', 1, 5, 1, 1, '2019-05-15', 'Term 1', '2019-02-03', '14:03:40', 1, 1),
(3, '2019', 1, 1, 1, 1, '2019-02-06', 'Term 1', '2019-02-06', '22:17:46', 1, 1);

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
(1, 'Hinduism', '2019-02-03', '10:47:50', 1, 1),
(2, 'Islam', '2019-02-03', '10:47:58', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `r_e_id` int(11) NOT NULL,
  `r_reg_no` varchar(255) NOT NULL,
  `r_marks` varchar(255) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `r_e_id`, `r_reg_no`, `r_marks`, `r_date`, `r_time`, `r_flag`, `user_id`) VALUES
(2, 3, '190203104917', '45', '2019-02-06', '23:54:46', 1, 1),
(3, 1, '190206000621', '40', '2019-02-06', '23:54:34', 1, 1);

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
(1, 'xPlus', '11,ABC Road,Malda,West Bengal,Pincode: 789456', 'abcdef@abcdef.com', '9999999999', '2019-02-09', '18:10:18', 1, 1);

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
(1, '190203104917', 'Arijit  Ghosh', 'Rajib Ghosh', 'Mina Ghosh', 'Bandal, Hooghly', 'West Bengal', 'Hooghly', '744445', '2016-07-20', 'Male', 'Indian', 1, 1, 'No', '9999999999', '190203104917.jpg', 1, '2019-02-03', '10:49:17', 1, 1),
(2, '190206000621', 'Rahul  Mondal', 'Sisir Mondal', 'Tapasi Mondal', 'Noihati,North 24 Pargana', 'West Bengal', 'Uttar 24 Parganas', '744445', '2016-08-17', 'Female', 'Indian', 1, 3, 'No', '9638521595', 'user.jpg', 3, '2019-02-06', '00:06:21', 1, 1),
(3, '190209105021', 'Kaberi  Banerjee', 'Alok Banerjee', 'Supirya Banerjee', '11b,Hariram Goenka Street, Kolkata -700007', 'West Bengal', 'Kolkata', '700007', '2016-06-14', 'Female', 'Indian', 1, 1, 'No', '9966332255', 'user.jpg', 7, '2019-02-09', '10:50:21', 1, 1),
(4, '190209105648', 'Sumon  Halder', 'Rajib Halder', 'Nalini Halder', '2/a,Bidhan Sarani,Kolkata-700006', 'West Bengal', 'Kolkata', '700006', '2016-04-13', 'Male', 'Indian', 1, 1, 'No', '8855224455', 'user.jpg', 8, '2019-02-09', '10:56:48', 1, 1),
(5, '190209105919', 'Amanika  Mahato', 'Kumar Mahato', 'Lali Mahato', '20A,RR Avenue,Kolkata-700010', 'West Bengal', 'Kolkata', '700010', '2016-09-19', 'Female', 'Indian', 1, 2, 'No', '8855447788', 'user.jpg', 9, '2019-02-09', '10:59:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_class_map`
--

CREATE TABLE `student_class_map` (
  `scm_id` int(11) NOT NULL,
  `scm_session` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `scm_classid` int(11) NOT NULL,
  `scm_sectionid` int(11) NOT NULL,
  `scm_rollno` int(11) NOT NULL,
  `scm_date` date NOT NULL,
  `scm_time` time NOT NULL,
  `scm_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class_map`
--

INSERT INTO `student_class_map` (`scm_id`, `scm_session`, `reg_no`, `scm_classid`, `scm_sectionid`, `scm_rollno`, `scm_date`, `scm_time`, `scm_flag`, `user_id`) VALUES
(1, '2019', '190203104917', 1, 1, 1, '2019-02-03', '11:54:41', 1, 1),
(3, '2019', '190206000621', 1, 4, 1, '2019-02-06', '00:10:17', 1, 1),
(4, '2020', '190206000621', 2, 2, 1, '2019-02-06', '09:08:24', 1, 1),
(6, '2020', '190203104917', 2, 2, 2, '2019-02-07', '00:28:51', 1, 1),
(7, '2019', '190209105021', 1, 1, 2, '2019-02-09', '10:51:11', 1, 1),
(8, '2019', '190209105648', 1, 1, 3, '2019-02-09', '10:57:26', 1, 1),
(9, '2019', '190209105919', 1, 1, 4, '2019-02-09', '10:59:56', 1, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `sf_id` int(11) NOT NULL,
  `sf_reg_no` varchar(255) NOT NULL,
  `sf_billno` varchar(255) NOT NULL,
  `sf_classid` int(11) NOT NULL,
  `sf_month` varchar(255) NOT NULL,
  `sf_year` varchar(255) NOT NULL,
  `sf_date` date NOT NULL,
  `sf_time` time NOT NULL,
  `sf_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`sf_id`, `sf_reg_no`, `sf_billno`, `sf_classid`, `sf_month`, `sf_year`, `sf_date`, `sf_time`, `sf_flag`, `user_id`) VALUES
(4, '190203104917', '181905025406', 1, 'March', '2019', '2019-02-05', '18:06:54', 1, 1),
(5, '190203104917', '231905024942', 1, 'January', '2019', '2019-02-05', '23:42:49', 1, 1),
(6, '190206000621', '001906020413', 1, 'January', '2019', '2019-02-06', '00:13:04', 1, 1),
(7, '190209105021', '221909020901', 1, 'February', '2019', '2019-02-09', '22:01:09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_bill`
--

CREATE TABLE `student_fee_bill` (
  `sfb_id` int(11) NOT NULL,
  `sfb_billno` varchar(255) NOT NULL,
  `sfb_feesid` int(11) NOT NULL,
  `sfb_total` int(11) NOT NULL,
  `sfb_total_word` varchar(1000) NOT NULL,
  `sfb_date` date NOT NULL,
  `sfb_time` time NOT NULL,
  `sfb_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee_bill`
--

INSERT INTO `student_fee_bill` (`sfb_id`, `sfb_billno`, `sfb_feesid`, `sfb_total`, `sfb_total_word`, `sfb_date`, `sfb_time`, `sfb_flag`, `user_id`) VALUES
(1, '181905025406', 4, 400, 'Rupees Four Hundred Only', '2019-02-05', '18:06:54', 1, 1),
(2, '181905025406', 2, 400, 'Rupees Four Hundred Only', '2019-02-05', '18:06:54', 1, 1),
(3, '231905024942', 2, 900, 'Rupees Nine Hundred  only', '2019-02-05', '23:42:49', 1, 1),
(4, '231905024942', 1, 900, 'Rupees Nine Hundred  only', '2019-02-05', '23:42:49', 1, 1),
(5, '231905024942', 4, 900, 'Rupees Nine Hundred  only', '2019-02-05', '23:42:50', 1, 1),
(6, '001906020413', 2, 900, 'Rupees Nine Hundred  only', '2019-02-06', '00:13:04', 1, 1),
(7, '001906020413', 1, 900, 'Rupees Nine Hundred  only', '2019-02-06', '00:13:04', 1, 1),
(8, '001906020413', 4, 900, 'Rupees Nine Hundred  only', '2019-02-06', '00:13:04', 1, 1),
(9, '221909020901', 2, 900, 'Rupees Nine Hundred  only', '2019-02-09', '22:01:09', 1, 1),
(10, '221909020901', 1, 900, 'Rupees Nine Hundred  only', '2019-02-09', '22:01:09', 1, 1),
(11, '221909020901', 4, 900, 'Rupees Nine Hundred  only', '2019-02-09', '22:01:09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_map`
--

CREATE TABLE `teacher_class_map` (
  `tcm_id` int(11) NOT NULL,
  `tcm_session` varchar(255) NOT NULL,
  `tcm_classid` int(11) NOT NULL,
  `tcm_sectionid` int(11) NOT NULL,
  `tcm_subid` int(11) NOT NULL,
  `tcm_userid` int(11) NOT NULL,
  `tcm_date` date NOT NULL,
  `tcm_time` time NOT NULL,
  `tcm_flag` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class_map`
--

INSERT INTO `teacher_class_map` (`tcm_id`, `tcm_session`, `tcm_classid`, `tcm_sectionid`, `tcm_subid`, `tcm_userid`, `tcm_date`, `tcm_time`, `tcm_flag`, `user_id`) VALUES
(1, '2019', 1, 1, 1, 3, '2019-02-05', '09:25:32', 1, 1),
(2, '2019', 1, 1, 3, 3, '2019-02-05', '09:25:32', 1, 1),
(3, '2019', 1, 1, 5, 5, '2019-02-05', '09:25:32', 1, 1);

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
(1, 'Anirban', 'Seth', 'Kolkata', '9966332255', 'anirban', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 1, '2018-12-06', '00:00:00', 1, 0),
(2, 'User', 'User', 'User', '9999999999', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 2, '2019-02-07', '01:00:00', 1, 1),
(3, 'Sajal', 'Das', 'Kolkata', '8888885555', 'sajal', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpd', 3, '2019-02-07', '00:00:00', 1, 1),
(4, 'Tapan', 'Pal', 'Kolkata', '7777774444', 'tapan', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 4, '2019-02-08', '00:00:00', 1, 1),
(5, 'Tapas', 'Bhattacharya', 'Kolkata', '9966335588', 'tapas', 'e10adc3949ba59abbe56e057f20f883e', 'abc.jpg', 3, '2019-02-01', '12:13:07', 1, 1);

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
(1, 1, '2019-02-03', '10:14:35'),
(2, 1, '2019-02-04', '09:21:43'),
(3, 1, '2019-02-04', '21:14:27'),
(4, 1, '2019-02-05', '08:28:49'),
(5, 1, '2019-02-05', '11:26:12'),
(6, 1, '2019-02-05', '13:59:07'),
(7, 1, '2019-02-05', '17:46:10'),
(8, 1, '2019-02-05', '20:51:30'),
(9, 1, '2019-02-05', '23:42:24'),
(10, 1, '2019-02-06', '08:26:37'),
(11, 1, '2019-02-06', '11:16:37'),
(12, 1, '2019-02-06', '12:00:12'),
(13, 4, '2019-02-06', '12:01:54'),
(14, 4, '2019-02-06', '12:04:59'),
(15, 1, '2019-02-06', '18:58:10'),
(16, 4, '2019-02-06', '18:59:51'),
(17, 1, '2019-02-06', '21:16:26'),
(18, 1, '2019-02-07', '09:00:50'),
(19, 1, '2019-02-07', '21:10:09'),
(20, 1, '2019-02-08', '10:44:22'),
(21, 1, '2019-02-08', '21:57:54'),
(22, 1, '2019-02-09', '09:59:02'),
(23, 1, '2019-02-09', '18:10:56'),
(24, 1, '2019-02-10', '09:06:00'),
(25, 1, '2019-02-10', '22:25:44');

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
(1, 'Admin', '0000-00-00', '00:00:00', 1, 0),
(2, 'User', '0000-00-00', '00:00:00', 1, 0),
(3, 'Teaching Staff', '0000-00-00', '00:00:00', 1, 0),
(4, 'Non Teaching Staff', '0000-00-00', '00:00:00', 1, 0);

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
  ADD PRIMARY KEY (`cfees_id`);

--
-- Indexes for table `class_section`
--
ALTER TABLE `class_section`
  ADD PRIMARY KEY (`csec_id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`csub_id`);

--
-- Indexes for table `class_subject_chapter`
--
ALTER TABLE `class_subject_chapter`
  ADD PRIMARY KEY (`chap_id`);

--
-- Indexes for table `class_term`
--
ALTER TABLE `class_term`
  ADD PRIMARY KEY (`cterm_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

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
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`sf_id`);

--
-- Indexes for table `student_fee_bill`
--
ALTER TABLE `student_fee_bill`
  ADD PRIMARY KEY (`sfb_id`);

--
-- Indexes for table `teacher_class_map`
--
ALTER TABLE `teacher_class_map`
  ADD PRIMARY KEY (`tcm_id`);

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
  MODIFY `caste_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_fees`
--
ALTER TABLE `class_fees`
  MODIFY `cfees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_section`
--
ALTER TABLE `class_section`
  MODIFY `csec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `csub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_subject_chapter`
--
ALTER TABLE `class_subject_chapter`
  MODIFY `chap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_term`
--
ALTER TABLE `class_term`
  MODIFY `cterm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setup`
--
ALTER TABLE `setup`
  MODIFY `setup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_class_map`
--
ALTER TABLE `student_class_map`
  MODIFY `scm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_docs`
--
ALTER TABLE `student_docs`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_fee_bill`
--
ALTER TABLE `student_fee_bill`
  MODIFY `sfb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher_class_map`
--
ALTER TABLE `teacher_class_map`
  MODIFY `tcm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
