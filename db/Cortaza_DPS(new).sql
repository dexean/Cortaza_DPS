-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 03:09 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DPS`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `over_time_worked` time NOT NULL,
  `date_checked` date NOT NULL,
  `remarks` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`time_in`, `time_out`, `over_time_worked`, `date_checked`, `remarks`) VALUES
(1, '00:00:00', '09:29:36', '00:00:00', '2013-04-17', 'qwewqrrwqerw'),
(2, '00:00:00', '11:24:36', '00:00:11', '0000-00-00', 'sadasd'),
(3, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'sadasd'),
(4, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'asfsdgdfgdfh'),
(5, '00:00:00', '09:35:24', '00:01:27', '0000-00-00', 'asfsdgdfgdfh'),
(7, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'fdsgdghhfghf'),
(8, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'fdgdfgdfgfdg'),
(9, '00:00:00', '11:33:47', '00:00:11', '0000-00-00', 'fgegdfgdf'),
(10, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'fgegdfgdf'),
(11, '00:00:00', '11:41:46', '00:00:11', '2013-05-01', 'rdfgfdhkllhg'),
(12, '00:00:00', '10:02:11', '00:00:00', '2013-05-08', 'adfsfgdghfjj'),
(32, '02:52:04', '00:00:00', '-00:00:02', '2005-07-13', 'Approve'),
(33, '15:03:22', '15:03:22', '00:00:00', '2013-05-07', 'abort'),
(34, '15:05:45', '15:05:45', '00:00:00', '2013-05-07', 'abort'),
(35, '15:06:07', '15:06:07', '00:00:00', '2013-05-07', 'Abort'),
(36, '15:12:18', '00:00:00', '-00:00:15', '2013-05-07', 'Approve'),
(37, '15:13:40', '00:00:00', '-00:00:15', '2013-05-07', 'Abort'),
(38, '15:53:37', '00:00:00', '-00:00:15', '2013-05-07', 'Approve'),
(39, '16:04:09', '00:00:00', '-00:00:16', '2013-05-07', 'Abort'),
(40, '07:55:42', '00:00:00', '-00:00:07', '2013-05-08', 'Approve'),
(41, '08:08:20', '00:00:00', '-00:00:08', '2013-05-08', 'Approve'),
(42, '08:18:30', '00:00:00', '-00:00:08', '2013-05-08', 'Approve'),
(43, '08:31:01', '00:00:00', '-00:00:08', '2013-05-08', 'Approve'),
(44, '09:11:10', '00:00:00', '-00:00:09', '2013-05-08', 'Approve'),
(45, '09:13:25', '00:00:00', '-00:00:09', '2013-05-08', 'Approve'),
(46, '09:50:49', '00:00:00', '-00:00:09', '2013-05-08', 'Approve'),
(47, '11:13:08', '00:00:00', '-00:00:11', '2013-05-08', 'Abort'),
(48, '11:35:15', '00:00:00', '-00:00:11', '2013-05-08', '05-08-13'),
(49, '11:35:28', '00:00:00', '-00:00:11', '2013-05-08', '05-08-13'),
(50, '11:36:01', '00:00:00', '-00:00:11', '2013-05-08', 'Approve'),
(51, '11:47:09', '00:00:00', '-00:00:11', '2013-05-08', 'Approve'),
(52, '14:40:23', '00:00:00', '-00:00:14', '2013-05-08', 'Approve'),
(53, '14:54:26', '00:00:00', '-00:00:14', '2013-05-08', 'Approve'),
(54, '15:54:03', '00:00:00', '-00:00:15', '2013-05-08', 'Approve'),
(55, '08:09:53', '00:00:00', '-00:00:08', '2013-05-14', 'Approve'),
(56, '00:00:00', '00:00:00', '00:00:00', '0000-00-00', 'abort'),
(57, '09:06:59', '00:00:00', '00:00:00', '2013-05-14', 'Approve'),
(58, '09:16:45', '00:00:00', '00:00:00', '2013-05-14', 'Approve'),
(59, '11:20:55', '00:00:00', '00:00:00', '2013-05-14', 'Approve'),
(60, '11:21:20', '00:00:00', '00:00:00', '2013-05-14', 'Abort'),
(61, '13:14:22', '00:00:00', '00:00:00', '2013-05-14', 'Abort'),
(62, '09:21:18', '00:00:00', '00:00:00', '2013-05-15', 'Approve'),
(63, '09:21:44', '00:00:00', '00:00:00', '2013-05-15', 'Abort'),
(64, '10:15:29', '00:00:00', '00:00:00', '2013-05-15', 'Approve'),
(65, '09:05:25', '00:00:00', '00:00:00', '2013-05-20', 'Approve'),
(66, '10:44:50', '00:00:00', '00:00:00', '2013-05-20', ''),
(67, '10:45:02', '00:00:00', '00:00:00', '2013-05-20', ''),
(68, '10:46:20', '00:00:00', '00:00:00', '2013-05-20', ''),
(69, '11:10:29', '00:00:00', '00:00:00', '2013-05-20', ''),
(70, '11:20:59', '09:25:02', '00:00:00', '2013-05-20', ''),
(71, '08:29:18', '14:51:19', '00:00:00', '2013-05-21', ''),
(72, '16:23:09', '16:24:30', '00:00:00', '2013-05-21', ''),
(73, '16:27:11', '16:27:19', '00:00:00', '2013-05-21', ''),
(74, '16:28:01', '16:28:08', '00:00:07', '2013-05-21', ''),
(75, '16:37:28', '16:39:03', '00:00:00', '2013-05-21', ''),
(76, '16:39:33', '16:40:03', '00:00:00', '2013-05-21', ''),
(77, '16:44:18', '16:44:38', '00:00:20', '2013-05-21', ''),
(78, '16:47:24', '16:51:13', '00:00:00', '2013-05-21', 'Approve Attendance'),
(79, '16:52:01', '16:52:31', '00:00:30', '2013-05-21', 'Approve Attendance'),
(80, '17:03:43', '17:03:55', '00:00:12', '2013-05-21', 'Approve Attendance'),
(81, '07:11:50', '07:12:03', '00:00:53', '2013-05-22', 'Abort Attendance'),
(82, '07:33:51', '07:34:03', '00:00:52', '2013-05-22', 'Approve Attendance'),
(83, '08:12:34', '08:12:54', '00:00:20', '2013-05-22', 'Approve Attendance'),
(84, '08:14:12', '08:14:20', '00:00:08', '2013-05-22', 'attendance approve'),
(85, '09:42:49', '09:42:55', '00:00:06', '2013-05-22', 'attendance approve'),
(86, '09:53:13', '09:53:35', '00:00:22', '2013-05-22', 'attendance approve'),
(87, '11:08:33', '11:12:56', '00:04:23', '2013-05-22', 'attendance approve'),
(88, '13:48:22', '14:37:09', '00:00:00', '2013-05-22', 'attendance approve'),
(89, '16:07:28', '00:00:00', '00:00:00', '2013-05-22', ''),
(90, '16:07:40', '00:00:00', '00:00:00', '2013-05-22', ''),
(91, '16:51:27', '16:51:33', '00:00:06', '2013-05-22', 'attendance approve');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode_of_employment` varchar(100) NOT NULL,
  `classification_of_employee` varchar(100) NOT NULL,
  `picture` varchar(1212) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `mode_of_employment`, `classification_of_employee`, `picture`, `fullname`, `mobile`, `username`, `password`) VALUES
(1, '', '', 'images.jpeg', 'Cortaza', '09876543211', 'admin', 'admin'),
(11, 'self-employed', 'regular', 'default.jpg', 'Dexter Santiso Cortaza', '09876543212', 'asd', 'asd'),
(22, 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
(24, '', '', '', '', '', 'me', 'me'),
(25, 'ak', 'ak', 'ak', 'ak', 'ak', 'greg', 'greg'),
(26, 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(27, 'k', 'k', 'k', 'k', 'k', 'k', 'k'),
(28, 'l', 'l', 'l', 'l', 'l', 'l', 'l'),
(29, 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(30, 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(31, 'q', 'w', 'qw', 'w', 'w', 'w', 'w'),
(32, 's', 's', '', 's', 's', 's', 's'),
(34, 'self employed', 'proggrammer', '', 'Cherry May Abala', '09109254542', 'siege', 'admin'),
(41, 'Self Employed', 'PA', '', 'Anne', '546', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_constraint`
--

CREATE TABLE IF NOT EXISTS `employee_constraint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attendance_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employment_id` int(11) DEFAULT NULL,
  `payout_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attendance_id` (`attendance_id`),
  KEY `employee_id` (`employee_id`),
  KEY `employment_id` (`employment_id`),
  KEY `payout_id` (`payout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `employee_constraint`
--

INSERT INTO `employee_constraint` (`id`, `attendance_id`, `employee_id`, `employment_id`, `payout_id`) VALUES
(1, 1, 1, 1, 1),
(69, 72, 22, NULL, NULL),
(70, 73, 22, NULL, NULL),
(71, 74, 22, NULL, NULL),
(72, 75, 22, NULL, NULL),
(73, 76, 22, NULL, NULL),
(74, 77, 22, NULL, NULL),
(75, 78, 22, NULL, NULL),
(76, 79, 22, NULL, NULL),
(78, 80, 1, NULL, NULL),
(79, 81, 22, NULL, NULL),
(80, 82, 22, NULL, NULL),
(83, 83, 22, NULL, NULL),
(84, 84, 22, NULL, NULL),
(85, 85, 11, NULL, NULL),
(86, 86, 11, NULL, NULL),
(89, 87, 11, NULL, NULL),
(90, 88, 11, NULL, NULL),
(94, 89, 1, NULL, NULL),
(95, 90, 1, NULL, NULL),
(96, 91, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment_history`
--

CREATE TABLE IF NOT EXISTS `employment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_employment` date NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_phone` varchar(15) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `employment_history`
--

INSERT INTO `employment_history` (`id`, `date_of_employment`, `company_name`, `company_address`, `company_phone`, `company_email`, `position`, `salary`) VALUES
(1, '2013-04-14', 'ALPHA', 'Tacloban,Leyte', '123-123-123', 'alpha.com', 'floor manager', 12),
(2, '2013-05-22', 'Marketing', 'real bldg.', '123-234-444', 'aeres.com', 'P.A', 1),
(8, '0000-00-00', '', '', '', '', '', 0),
(9, '0000-00-00', '', '', '', '', '', 0),
(10, '2013-05-14', '', '', '', '', '', 0),
(11, '2013-05-14', 'sdsadwasdasdsdsd', 'asdasdsadsadadasd', 'asdasdasdasdd', 'asdasdasdasd', 'asdasdadsaasdas', 1000),
(12, '2013-05-21', 'ghujtjuty', 'tyutyu', 'tyutyu', 'tyutyut', 'tyutyuty', 23434234);

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE IF NOT EXISTS `payout` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `salary` double NOT NULL,
  `overtime_pay` double NOT NULL,
  `date_released` datetime DEFAULT NULL,
  `remarks` varchar(20) DEFAULT NULL,
  KEY `payout_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`id`, `salary`, `overtime_pay`, `date_released`, `remarks`) VALUES
(1, 0, 0, '2013-04-18 00:00:00', 'yes'),
(2, 3400, 340, '0000-00-00 00:00:00', 'yes'),
(2, 3400, 340, '0000-00-00 00:00:00', 'yes'),
(5, 5600.5, 340, '2013-05-01 15:46:15', 'yes');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_constraint`
--
ALTER TABLE `employee_constraint`
  ADD CONSTRAINT `employee_constraint_ibfk_1` FOREIGN KEY (`attendance_id`) REFERENCES `attendance` (`id`),
  ADD CONSTRAINT `employee_constraint_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `employee_constraint_ibfk_3` FOREIGN KEY (`employment_id`) REFERENCES `employment_history` (`id`),
  ADD CONSTRAINT `employee_constraint_ibfk_4` FOREIGN KEY (`payout_id`) REFERENCES `payout` (`id`);
