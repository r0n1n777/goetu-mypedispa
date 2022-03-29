-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2022 at 03:13 PM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westmin4_mypedispadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` varchar(12) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'test', 'admin', '7898799798', 'tester1@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` varchar(12) DEFAULT NULL,
  `EmployeeName` varchar(200) NOT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `Notes` text NOT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `EmployeeName`, `AptDate`, `AptTime`, `Services`, `Notes`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(1, '302263903', 'Anne Sherina Alcova', 'lewklwre@gmail.com', '+10950020783', 'Anyone', '7/30/2020', '10:30 AM', 'Regular Manicure', '', '2020-07-22 14:13:07', '', '', '0000-00-00 00:00:00'),
(2, '144499415', 'Anne Sherina Alcova', 'asajskajd@gmail.com', '+10950020783', 'Anyone', '7/31/2020', '10:30 AM', 'Polish Change Nails w/ Gel', '', '2020-07-22 14:13:51', '', '', '0000-00-00 00:00:00'),
(3, '575800680', 'Anne Sherina Alcova', 'aksjaksj@gmail.com', '+10950020783', 'Anyone', '7/29/2020', '09:30 AM', 'French', 'hello', '2020-07-22 17:33:13', '', '', '0000-00-00 00:00:00'),
(4, '839131241', 'sdfdsfsdf', 'rdfrds@gmail.com', '+15345345345', '', '', '', '', 'test', '2020-07-22 21:40:49', '', '', '0000-00-00 00:00:00'),
(5, '359613649', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', '', '', '', '', 'tesyt', '2020-07-23 14:52:34', '', '', '0000-00-00 00:00:00'),
(6, '955031607', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '7/29/2020', '09:00 AM', 'Dip Ombre', 'serv', '2020-07-23 17:35:52', '', '', '0000-00-00 00:00:00'),
(7, '510151661', 'Test', 'test@email.com', '+14039409242', 'Anyone', '7/24/2020', '04:00 PM', 'Dip Pink & White', 'Test notes', '2020-07-23 21:55:55', '', '', '0000-00-00 00:00:00'),
(8, '318708119', 'Test', '345534@email.com', '+13453543534', 'Anyone', '8/1/2020', '09:00 AM', 'Nails Repair', 'test', '2020-07-24 17:46:58', '', '', '0000-00-00 00:00:00'),
(9, '442866650', 'test2', 'test2@gmail.com', '+13423423423', 'Anyone', '8/1/2020', '09:30 AM', 'Full Set', '', '2020-07-24 17:52:00', '', '', '0000-00-00 00:00:00'),
(10, '933808980', 'test3', 'test3@gmail.com', '+10950020783', 'Anyone', '8/1/2020', '10:00 AM', 'Eyebrows', 'test3', '2020-07-24 17:53:01', '', '', '0000-00-00 00:00:00'),
(11, '294381531', 'test4', 'test4@gmail.com', '+13443534534', 'Anyone', '8/1/2020', '10:30 AM', 'Gel Manicure', '', '2020-07-24 17:53:36', '', '', '0000-00-00 00:00:00'),
(12, '643721731', 'test5', 'test4@gmail.com', '+15454545654', 'Anyone', '8/1/2020', '11:00 AM', 'Polish Change Finger Nails', '', '2020-07-24 17:54:02', '', '', '0000-00-00 00:00:00'),
(13, '314703958', 'test6', 'test6@gmail.com', '+14534534534', 'Anyone', '8/1/2020', '11:30 AM', 'Dip Full Set', '', '2020-07-24 17:54:28', '', '', '0000-00-00 00:00:00'),
(14, '375096309', 'tersd', 'gttd@gmail.com', '+15345345345', 'Anyone', '8/1/2020', '12:00 PM', 'Dip Full Set', 'testettsnfkjd', '2020-07-24 21:13:44', '', '', '0000-00-00 00:00:00'),
(15, '727627039', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/5/2020', '12:00 PM', 'Polish Change (hands French)', 'roccccccccccck', '2020-07-30 14:29:42', '', '', '0000-00-00 00:00:00'),
(16, '764398178', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/3/2020', '12:00 PM', 'Polish Change (hands)', 'we built this city', '2020-07-30 14:30:46', '', '', '0000-00-00 00:00:00'),
(17, '495791940', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/3/2020', '12:30 PM', 'Nail Repair only', 'gaaaaaaaaaaaaa', '2020-07-30 14:32:23', '', '', '0000-00-00 00:00:00'),
(18, '898585226', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/7/2020', '04:00 PM', 'Nail Designs', 'jefg', '2020-07-30 14:36:24', '', '', '0000-00-00 00:00:00'),
(19, '533910418', 'Anne Sherina Alcova', 'annesherina.a@gmail.com', '+10950020783', 'Anyone', '8/5/2020', '04:30 PM', 'Half Leg', 'jeflam', '2020-07-30 14:37:25', '', '', '0000-00-00 00:00:00'),
(20, '610146438', 'Anne Sherina Lim Alcova', 'dfdsfdsf@gmail.com', '+10950020783', 'Anyone', '8/27/2020', '09:00 AM', 'Lip', 'dfdsg', '2020-08-05 22:01:30', '', '', '0000-00-00 00:00:00'),
(21, '663961684', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/25/2020', '09:00 AM', 'Chin', 'chin', '2020-08-05 22:08:50', '', '', '0000-00-00 00:00:00'),
(22, '459500501', 'Anne Sherina Alcova', 'theannexious@gmail.com', '+10950020783', 'Anyone', '8/27/2020', '10:00 AM', 'Cheeks', 'vhr', '2020-08-05 22:09:36', '', '', '0000-00-00 00:00:00'),
(23, '859896896', 'Dee', 'dennel.avellana@gmail.com', '+12018735363', 'Anyone', '08/17/2020', '11:00 AM', 'Express Pedicure', '', '2020-08-17 05:21:58', '', '', '0000-00-00 00:00:00'),
(24, '744769862', 'Cassie C', 'cassandra.chesler@gmail.com', '+17024195366', 'Anyone', '8/20/2020', '02:30 PM', 'Regular', '', '2020-08-20 16:28:24', '', '', '0000-00-00 00:00:00'),
(25, '781475392', 'Jiun Moreno', 'kim.jiun88@gmail.com', '+17023533828', 'Anyone', '8/22/2020', '03:00 PM', 'Gel Polish + Mani', '', '2020-08-21 22:39:36', '', '', '0000-00-00 00:00:00'),
(26, '931965789', 'Jiun Moreno', 'kim.jiun88@gmail.com', '+17023533828', 'Anyone', '8/22/2020', '03:30 PM', 'Gel Polish + Mani', '', '2020-08-22 01:59:25', '', '', '0000-00-00 00:00:00'),
(27, '168816805', 'Jiun Moreno', 'kim.jiun88@gmail.com', '+17023533828', 'Anyone', '8/22/2020', '03:30 PM', 'Gel Polish + Mani', '', '2020-08-22 01:59:35', '', '', '0000-00-00 00:00:00'),
(28, '197582836', 'Mimi ', 'jrcohen8383@gmail.com', '+17027733699', 'Anyone', '8/31/2020', '02:30 PM', 'My Pedi Pedicure', '', '2020-08-31 01:10:13', '', '', '0000-00-00 00:00:00'),
(29, '570704975', 'Jessica', 'jrcohen8383@gmail.com', '+17027733699', 'Anyone', '8/31/2020', '02:00 PM', 'My Pedi Pedicure', 'Gel', '2020-08-31 01:11:13', '', '', '0000-00-00 00:00:00'),
(30, '475110259', 'Angelica Navarro', 'MrsNavarro14@icloud.com', '+17025424674', 'Anyone', '9/10/2020', '01:30 PM', 'Gel Polish + Mani', 'Itâ€™s my self mani gel/reg pedi my teen daughter mani gel/reg pedi and my 3 year old mani/pedi for her bday', '2020-09-08 03:36:08', '', '', '0000-00-00 00:00:00'),
(31, '708424037', 'Angelica Navarro', 'MrsNavarro14@icloud.com', '+17025424674', 'Anyone', '9/10/2020', '01:30 PM', 'Gel Polish + Mani', 'Itâ€™s my self mani gel/reg pedi my teen daughter mani gel/reg pedi and my 3 year old mani/pedi for her bday', '2020-09-08 03:36:18', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `TimeStart` varchar(20) NOT NULL,
  `TimeEnd` varchar(20) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`ID`, `Name`, `TimeStart`, `TimeEnd`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Anyone', '9:00am', '5:00pm', '2020-07-09 15:45:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblicon`
--

CREATE TABLE `tblicon` (
  `ID` int(11) NOT NULL,
  `IconName` tinytext NOT NULL,
  `IconLink` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblicon`
--

INSERT INTO `tblicon` (`ID`, `IconName`, `IconLink`) VALUES
(1, 'yelp', 'https://www.yelp.com/biz/my-pedi-nails-and-spa-las-vegas-2'),
(2, 'google', ''),
(3, 'fb', 'https://web.facebook.com/mypedispalv/'),
(4, 'twitter', 'https://twitter.com/mypedispalv');

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE `tblimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`id`, `title`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, '5', '1596663540.jpg', 'front', '2020-08-05 21:39:00', '2020-08-06 21:28:41'),
(2, 'salon 1', '1596663560.png', 'front', '2020-08-05 21:39:20', '2020-08-06 21:28:44'),
(3, '12', '1596663572.jpg', 'front', '2020-08-05 21:39:32', '2020-08-06 21:28:45'),
(4, '1278', '1596663599.jpg', 'front', '2020-08-05 21:39:59', '2020-08-06 21:28:46'),
(5, '11', '1596663612.jpg', 'front', '2020-08-05 21:40:12', '2020-08-06 21:28:48'),
(6, '9029', '1596663668.png', 'front', '2020-08-05 21:41:08', '2020-08-06 21:28:50'),
(7, '1285', '1596663700.jpg', 'front', '2020-08-05 21:41:40', '2020-08-06 21:28:51'),
(8, '4181', '1596663754.png', 'front', '2020-08-05 21:42:34', '2020-08-06 21:28:53'),
(9, 'salon 8', '1596663789.jpg', 'front', '2020-08-05 21:43:09', '2020-08-06 21:28:54'),
(10, '20', '1596663803.jpg', 'front', '2020-08-05 21:43:23', '2020-08-06 21:28:56'),
(11, '9407', '1596663847.png', 'front', '2020-08-05 21:44:07', '2020-08-06 21:28:58'),
(12, '1279', '1596663870.jpg', 'front', '2020-08-05 21:44:30', '2020-08-06 21:28:59'),
(13, '4', '1596749187.jpg', 'main', '2020-08-06 21:26:27', '0000-00-00 00:00:00'),
(14, '5', '1596749220.jpg', 'main', '2020-08-06 21:27:00', '0000-00-00 00:00:00'),
(15, '11', '1596749364.jpg', 'main', '2020-08-06 21:29:24', '0000-00-00 00:00:00'),
(16, '12', '1596749379.jpg', 'main', '2020-08-06 21:29:39', '0000-00-00 00:00:00'),
(17, '15', '1596749392.jpg', 'main', '2020-08-06 21:29:52', '0000-00-00 00:00:00'),
(18, '17', '1596749407.jpg', 'main', '2020-08-06 21:30:07', '0000-00-00 00:00:00'),
(19, '20', '1596749427.jpg', 'main', '2020-08-06 21:30:27', '0000-00-00 00:00:00'),
(20, '30', '1596749442.jpg', 'main', '2020-08-06 21:30:42', '0000-00-00 00:00:00'),
(21, '121', '1596749457.jpg', 'main', '2020-08-06 21:30:57', '0000-00-00 00:00:00'),
(22, '27067032', '1596749475.jpg', 'main', '2020-08-06 21:31:15', '0000-00-00 00:00:00'),
(23, '1203', '1596749489.jpg', 'main', '2020-08-06 21:31:29', '0000-00-00 00:00:00'),
(24, '1209', '1596749501.jpg', 'main', '2020-08-06 21:31:41', '0000-00-00 00:00:00'),
(25, 'IMG_1282-e1524676649460', '1596749523.jpg', 'main', '2020-08-06 21:32:03', '0000-00-00 00:00:00'),
(26, 'IMG_1285-e1524676667789', '1596749541.jpg', 'main', '2020-08-06 21:32:21', '0000-00-00 00:00:00'),
(27, 'salon-1', '1596749555.png', 'main', '2020-08-06 21:32:35', '0000-00-00 00:00:00'),
(28, 'salon-2', '1596749574.png', 'main', '2020-08-06 21:32:54', '0000-00-00 00:00:00'),
(30, 'salon-3', '1596750006.jpg', 'main', '2020-08-06 21:40:06', '0000-00-00 00:00:00'),
(31, 'salon-4', '1596750017.png', 'main', '2020-08-06 21:40:17', '0000-00-00 00:00:00'),
(32, 'salon-5', '1596750076.jpg', 'main', '2020-08-06 21:41:16', '0000-00-00 00:00:00'),
(33, 'salon-6', '1596750109.png', 'main', '2020-08-06 21:41:49', '0000-00-00 00:00:00'),
(34, 'salon-7', '1596750152.jpg', 'main', '2020-08-06 21:42:32', '0000-00-00 00:00:00'),
(35, 'salon-8', '1596750166.jpg', 'main', '2020-08-06 21:42:46', '0000-00-00 00:00:00'),
(36, 'shutterstock_188704022', '1596750187.png', 'main', '2020-08-06 21:43:07', '0000-00-00 00:00:00'),
(37, 'shutterstock_230437132', '1596750201.png', 'main', '2020-08-06 21:43:21', '0000-00-00 00:00:00'),
(38, 'IMG_2580', '1596750215.png', 'main', '2020-08-06 21:43:35', '0000-00-00 00:00:00'),
(39, 'IMG_4179', '1596750228.png', 'main', '2020-08-06 21:43:48', '0000-00-00 00:00:00'),
(40, 'IMG_4181', '1596750244.png', 'main', '2020-08-06 21:44:04', '0000-00-00 00:00:00'),
(41, 'IMG_4182', '1596750258.png', 'main', '2020-08-06 21:44:18', '0000-00-00 00:00:00'),
(42, 'IMG_4740', '1596750269.png', 'main', '2020-08-06 21:44:29', '0000-00-00 00:00:00'),
(43, 'IMG_4742', '1596750281.png', 'main', '2020-08-06 21:44:41', '0000-00-00 00:00:00'),
(44, 'IMG_9284', '1596750302.png', 'main', '2020-08-06 21:45:02', '0000-00-00 00:00:00'),
(45, 'IMG_9286', '1596750314.png', 'main', '2020-08-06 21:45:14', '0000-00-00 00:00:00'),
(46, 'IMG_9288', '1596750329.png', 'main', '2020-08-06 21:45:29', '0000-00-00 00:00:00'),
(47, 'IMG_9285', '1596750341.png', 'main', '2020-08-06 21:45:41', '0000-00-00 00:00:00'),
(48, 'shutterstock_1161636202', '1596750353.png', 'main', '2020-08-06 21:45:53', '0000-00-00 00:00:00'),
(49, 'shutterstock_1291818742', '1596750364.jpg', 'main', '2020-08-06 21:46:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` varchar(25) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Our business specializes in making our clients feel special, relax and safe. We provide a range of products and services, and go above and beyond your expectations to make it happen with a smile. We can also make sure the safety, cleanliness and peace of minds when clients leave our salon.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '5060 S Fort Apache Rd #160<br>Las Vegas, NV 89148.', 'mypedispa1@gmail.com', '702-740-2100', NULL, 'Mon - Sat 10:00am - 7:00pm | Sundays 10:00am - 6:00pm<br><strong>Appt. After Hours Available</strong>'),
(3, 'slide', 'Welcome to Lina II Nails & Spa', '                                Professional Nail Care Services. We will always bring you happiness and satisfaction with our services.&nbsp;', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServiceCategory` varchar(400) NOT NULL,
  `SubCategory` text NOT NULL,
  `ServiceDesc` longtext NOT NULL,
  `Cost` varchar(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceCategory`, `SubCategory`, `ServiceDesc`, `Cost`, `CreationDate`) VALUES
(1, 'Manicure', 'NATURAL NAILS', '', '', '20', '2020-07-27 21:09:48'),
(5, 'Gel Polish + Mani', 'NATURAL NAILS', '', '', '35 & up', '2020-07-27 21:14:29'),
(6, 'Gel Polish + Mani + French', 'NATURAL NAILS', '', '', '40 & up', '2020-07-27 21:14:29'),
(7, 'Gel Polish Change', 'NATURAL NAILS', '', '', '25 & up', '2020-07-27 21:14:29'),
(9, 'Express Pedicure', 'LUXURY SPA PEDICURE', '', '   <ul class=\"menu\"> <li>Dead Sea Salt</li> <li>Cut & Shape Nails</li> <li>Sugar Scrub Exfoliation</li> <li>6 min. massage</li> <li>Polish</li> </ul> ', '35', '2020-07-27 21:32:57'),
(10, 'My Pedi Pedicure', 'LUXURY SPA PEDICURE', '', '   <ul class=\"menu\"> <li>Dead Sea Salt</li> <li>Cut & Shape & Cuticle Nails</li> <li>Sugar Scrub Exfoliation</li> <li>8 min. massage</li> <li>2 Hot Stones</li> <li>Polish</li> </ul> ', '45', '2020-07-27 21:33:05'),
(11, 'Callus', 'LUXURY SPA PEDICURE', 'Additional', '', '5', '2020-07-27 21:33:05'),
(12, 'Paraffin Wax ', 'LUXURY SPA PEDICURE', 'Additional', '', '10', '2020-07-27 21:36:39'),
(13, 'Gel', 'LUXURY SPA PEDICURE', 'Additional', '', '15', '2020-07-27 21:38:08'),
(14, 'Rockstar Gel', 'LUXURY SPA PEDICURE', 'Additional', '', '20', '2020-07-27 21:38:08'),
(15, 'Deluxe Pedicure', 'LUXURY SPA PEDICURE', '', '   <ul class=\"menu\"> <li>Dead Sea Salt</li> <li>Cut, Shape, & Cuticle Works</li> <li>Callus Remove</li> <li>Sugar Scrub Exfoliation</li> <li>Hydrating Goot Mask</li> <li>10 min. Massage</li> <li>4 Hot Stones</li> <li>Polish</li> </ul> <ul  class=\"menu\"> <li><strong>Add Paraffin Wax $10</strong></li> </ul> ', '55', '2020-07-27 21:38:17'),
(16, 'Organic Pedicure', 'LUXURY SPA PEDICURE', '', '<ul class=\"menu\"> <li>Lime Zest</li> <li>Colada Sparkle</li> <li>Mandarin Honey</li> <li>Vanilla Wild Plum</li> <li>Grapefruit Suprice</li> <li>Paraffin Wax Included</li> </ul>', '60', '2020-07-27 21:40:51'),
(17, 'Heavenly Pedicure', 'LUXURY SPA PEDICURE', '', '   <ul class=\"menu\"> <li>Pearl</li> <li>Chamomile</li> <li>Paraffin Wax Included</li> <li>Green Tea</li> </ul> ', '65', '2020-07-27 21:40:51'),
(18, 'Gel', 'LUXURY SPA PEDICURE', 'Addition', '', '15', '2020-07-27 21:43:13'),
(19, 'Rock star Gel', 'LUXURY SPA PEDICURE', 'Addition', '', '20', '2020-07-27 21:43:13'),
(20, 'Jelly Pedicure', 'LUXURY SPA PEDICURE', 'PARAFFIN WAX', '   <ul class=\"menu\"> <li>Aloe</li> <li>Lavender</li> <li>Peppermint</li> </ul> ', '70', '2020-07-27 21:43:13'),
(21, 'Herbal Pedicure', 'LUXURY SPA PEDICURE', 'PARAFFIN WAX', '   <ul class=\"menu\"> <li>Tea Tree</li> <li>Lavender</li> <li>Rosemary</li> <li>Eucalyptus</li> <li>Lemongrass</li> </ul> ', '70', '2020-07-27 21:43:13'),
(22, 'Detox Pedicure (Black Charcoal)', 'LUXURY SPA PEDICURE', 'PARAFFIN WAX', '<ul class=\"menu\"> <li>Orange</li> <li>Romance</li> <li>Honey Pearl</li> <li>Tropical Citrus</li> </ul>', '65', '2020-07-27 21:43:13'),
(23, 'Regular', 'FULL SET (SOLAR ACRYLIC)', '', '        ', '35 & up', '2020-07-27 21:43:29'),
(24, 'Crystal Clear Tip', 'FULL SET (SOLAR ACRYLIC)', '', '        ', '40 & up', '2020-07-27 21:43:29'),
(25, 'Stiletto', 'FULL SET (SOLAR ACRYLIC)', '', '        ', '45 & up', '2020-07-27 21:43:43'),
(26, '* White Tips', 'FULL SET (SOLAR ACRYLIC)', '', '        ', '45 & up', '2020-07-27 21:49:56'),
(27, '* Color Tips ', 'FULL SET (SOLAR ACRYLIC)', '', '', '5', '2020-07-27 21:49:56'),
(28, '* Pink & White', 'FULL SET (SOLAR ACRYLIC)', '', '    ', '60 & up', '2020-07-27 21:49:56'),
(29, '* Glitter Powder', 'FULL SET (SOLAR ACRYLIC)', '', '    ', '60 & up', '2020-07-27 21:49:56'),
(30, 'Hard Gel IBD', 'FULL SET (SOLAR ACRYLIC)', '', '    ', '60', '2020-07-27 21:49:56'),
(31, 'Hard Gel IBD Pink & White (* with gel top coat)\r\n', 'FULL SET (SOLAR ACRYLIC)', '', '', '60', '2020-07-27 21:49:56'),
(32, 'Regular', 'FILL SET', '', '    ', '30 & up', '2020-07-27 21:49:56'),
(33, 'Crystal Clear Tip', 'FILL SET', '', '        ', '35 & up', '2020-07-27 21:49:56'),
(34, '* Glitter Powder', 'FILL SET', '', '    ', '35& up', '2020-07-27 21:49:56'),
(35, '* Pink Powder', 'FILL SET', '', '    ', '35 & up', '2020-07-27 21:49:56'),
(36, '* Pink & White (Back Fill)', 'FILL SET', '', '        ', '55  & up', '2020-08-03 21:40:27'),
(37, 'Hard Gel IBD', 'FILL SET', '', '        ', '45 & up', '2020-08-03 21:40:27'),
(38, 'IBD Pink & White (* with Gel Top Coat)', 'FILL SET', '', '        ', '60 & up', '2020-08-03 21:40:27'),
(39, 'Manicure', 'CHILDREN SERVICES', '', '    ', '15', '2020-08-03 21:40:27'),
(40, 'Pedicure', 'CHILDREN SERVICES', '', '    ', '20', '2020-08-03 21:40:27'),
(41, 'Polish Change (Hands)', 'CHILDREN SERVICES', '', '', '10', '2020-08-03 21:40:27'),
(42, 'Polish Change (Toes)', 'CHILDREN SERVICES', '', '', '13', '2020-08-03 21:40:27'),
(43, 'Mani + Pedi', 'CHILDREN SERVICES', '', '', '35', '2020-08-03 21:40:27'),
(44, 'Polish Change (Hands)', 'ADDITIONAL SERVICES', '', '    ', '15', '2020-08-03 21:40:27'),
(45, 'Polish Change (Toes)', 'ADDITIONAL SERVICES', '', '    ', '15', '2020-08-03 21:40:27'),
(46, 'French', 'ADDITIONAL SERVICES', '', '', '5', '2020-08-03 21:50:26'),
(47, 'Nail Repair', 'ADDITIONAL SERVICES', '', '', '5 & up', '2020-08-03 21:50:26'),
(48, 'Nail Design', 'ADDITIONAL SERVICES', '', '', '5 & up', '2020-08-03 21:50:26'),
(49, 'Extra Length', 'ADDITIONAL SERVICES', '', '', '5 & up', '2020-08-03 21:50:26'),
(50, 'Gel Coating', 'ADDITIONAL SERVICES', '', '', '5', '2020-08-03 21:50:26'),
(51, 'Callus Treatment', 'ADDITIONAL SERVICES', '', '', '5', '2020-08-03 21:50:26'),
(52, 'Paraffin Wax', 'ADDITIONAL SERVICES', '', '', '10', '2020-08-03 21:50:26'),
(53, 'Take Off w/ Service', 'ADDITIONAL SERVICES', '', '    ', '10', '2020-08-03 21:50:26'),
(54, 'Take Off w/o Service', 'ADDITIONAL SERVICES', '', '    ', '15', '2020-08-03 21:50:26'),
(55, 'Service (Cat Eyes, Chrome, Unicorn)', 'ADDITIONAL SERVICES', '', '', '10', '2020-08-03 21:50:26'),
(56, 'Add Gel Polish w/service', 'ADDITIONAL SERVICES', '', '', '15', '2020-08-03 21:50:26'),
(57, 'Add Rockstar Gel w/service', 'ADDITIONAL SERVICES', '', '', '20', '2020-08-03 21:50:26'),
(58, 'Full Set Overlay', 'DIPPING POWDER', '', '', '45', '2020-08-03 21:50:26'),
(59, 'Full Set with tips', 'DIPPING POWDER', '', '', '50', '2020-08-03 21:50:26'),
(60, 'New Lash', 'LASHES', '', '', '85', '2020-08-03 21:50:26'),
(61, '2-3 Weeks Fill', 'LASHES', '', '', '50', '2020-08-03 21:50:26'),
(64, 'Lip', 'WAXING', '', '', '10', '2020-08-03 21:50:26'),
(65, 'Chin', 'WAXING', '', '', '12', '2020-08-03 21:57:19'),
(66, 'Eyebrows', 'WAXING', '', '', '15', '2020-08-03 21:57:19'),
(67, 'Underarms', 'WAXING', '', '', '25', '2020-08-03 21:57:19'),
(68, 'Brows/Lips/Chin', 'WAXING', '', '', '30', '2020-08-03 21:57:19'),
(69, 'Face', 'WAXING', '', '', '40', '2020-08-03 21:57:19'),
(70, 'Half legs', 'WAXING', '', '', '40 & up', '2020-08-03 21:57:19'),
(71, 'Bikini', 'WAXING', '', '', '40 & up', '2020-08-03 21:57:19'),
(72, 'Full Legs', 'WAXING', '', '', '60 & up', '2020-08-03 21:57:19'),
(73, 'Brazilian', 'WAXING', '', '', '55 & up', '2020-08-03 21:57:19'),
(87, 'Champagne', 'COMPLIMENTARY BEVERAGES', 'Wine', '', NULL, '2020-08-03 21:57:19'),
(88, 'Chardonnay', 'COMPLIMENTARY BEVERAGES', 'Wine', '', NULL, '2020-08-03 21:57:19'),
(89, 'Red Wine', 'COMPLIMENTARY BEVERAGES', 'Wine', '', NULL, '2020-08-03 21:57:19'),
(90, 'Margarita', 'COMPLIMENTARY BEVERAGES', 'Wine', '', NULL, '2020-08-03 21:57:19'),
(91, 'Mimosas', 'COMPLIMENTARY BEVERAGES', 'Wine', '', NULL, '0000-00-00 00:00:00'),
(92, 'Coke', 'COMPLIMENTARY BEVERAGES', 'Soft Drinks', '', NULL, '2020-08-03 21:59:42'),
(93, 'Diet Coke', 'COMPLIMENTARY BEVERAGES', 'Soft Drinks', '', NULL, '2020-08-03 21:59:42'),
(94, 'Sprite', 'COMPLIMENTARY BEVERAGES', 'Soft Drinks', '', NULL, '2020-08-03 21:59:42'),
(95, 'Root Beer', 'COMPLIMENTARY BEVERAGES', 'Soft Drinks', '', NULL, '2020-08-03 21:59:42'),
(96, 'Orange Soda', 'COMPLIMENTARY BEVERAGES', 'Soft Drinks', '', NULL, '2020-08-03 21:59:42'),
(97, 'Tea', 'COMPLIMENTARY BEVERAGES', 'Other Beverages', '', NULL, '2020-08-03 21:59:42'),
(98, 'Water', 'COMPLIMENTARY BEVERAGES', 'Other Beverages', '', NULL, '2020-08-03 21:59:42'),
(99, 'Coffee', 'COMPLIMENTARY BEVERAGES', 'Other Beverages', '', NULL, '2020-08-03 21:59:42'),
(100, 'CBD', 'Luxury spa pedicure ', 'Pedicure ', '    ', '70', '2021-09-17 20:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblsms`
--

CREATE TABLE `tblsms` (
  `ID` int(11) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsms`
--

INSERT INTO `tblsms` (`ID`, `PhoneNumber`) VALUES
(1, '+17027402100');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribe`
--

CREATE TABLE `tblsubscribe` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL,
  `Note` longtext NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribe`
--

INSERT INTO `tblsubscribe` (`ID`, `Name`, `PhoneNumber`, `Note`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Raquel Towers', '7022922449', '7022922449', '2021-11-19 05:54:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblicon`
--
ALTER TABLE `tblicon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblimage`
--
ALTER TABLE `tblimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsms`
--
ALTER TABLE `tblsms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscribe`
--
ALTER TABLE `tblsubscribe`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblicon`
--
ALTER TABLE `tblicon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblimage`
--
ALTER TABLE `tblimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tblsms`
--
ALTER TABLE `tblsms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsubscribe`
--
ALTER TABLE `tblsubscribe`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
