-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 05:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricianfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Test', 'admin', 5689784589, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-01-21 11:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `BookingID` int(10) DEFAULT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `EventDate` varchar(200) DEFAULT NULL,
  `EventStartingtime` varchar(200) DEFAULT NULL,
  `EventEndingtime` varchar(200) DEFAULT NULL,
  `VenueAddress` mediumtext DEFAULT NULL,
  `EventType` varchar(200) DEFAULT NULL,
  `AdditionalInformation` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `BookingID`, `ServiceID`, `Name`, `MobileNumber`, `Email`, `EventDate`, `EventStartingtime`, `EventEndingtime`, `VenueAddress`, `EventType`, `AdditionalInformation`, `BookingDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 233064613, 1, 'Ashutosh', 8798787977, 'ashu@gmail.com', '2020-01-31', '2 p.m', '10 p.m', 'ABC park, Jawahar Nahar New Delhi ', 'Engagement', 'jguytugvnvjhgh', '2020-01-24 12:46:29', 'Approved', 'Approved', '2020-01-24 13:50:44'),
(2, 750016128, 1, 'Jone', 4654644648, 'jon@gmail.com', '2020-01-30', '2 p.m', '7 p.m', 'Harikesh Nagar Block C JKL park', 'Social', 'kjhiuyughjvhsdadfs', '2020-01-28 05:44:37', 'Approved', 'Approved', '2020-01-28 11:11:17'),
(3, 215398258, 3, 'Kishore Jha', 7846466478, 'kis@gmail.com', '2020-01-29', '1 p.m', '10 p.m', 'Kamla bhadhur road malvi bhavan  New delhi', 'Government', 'kjiououbouiosydieskjfhbbcxmcbjhfkdsfkjdljkdljfkdn', '2020-01-28 05:47:10', 'Approved', 'Approved', '2020-01-28 11:12:01'),
(4, 206423586, 3, 'Gunjan Singh', 5555643433, 'gun@gmail.com', '2020-02-02', '11 a.m', '3 p.m', 'J-234 J&K block laxmi Nager,New Delhi', 'Sangeet', 'ghjgjhuywergcnxcjyhgfsdnbvxnzcgdsygtewghdfc', '2020-01-29 05:37:40', NULL, NULL, NULL),
(5, 365319422, 5, 'Test', 8097867576, 'test@gmail.com', '2020-02-12', '7 p.m', '10 p.m', 'R-789 KW Raj Nagar Ghaziabad', 'Get Together', 'xskjhj nbzxjhgagwejmb gdjswgdscbxzmnb', '2020-01-29 05:39:29', 'Cancelled', 'Cancelled', '2020-01-29 05:44:23'),
(6, 534626649, 6, 'Raj Kumar', 7674343543, 'raj@gmail.com', '2020-01-31', '9 a.m', '4 p.m', 'T-980 Mahagun Noida Sector 62', 'Concert', 'gjydywetyuavxeweytugauygshghwgfdyasywsgdg', '2020-01-29 05:41:01', NULL, NULL, NULL),
(7, 761769920, 1, 'Anuj kumar', 1234567890, 'phpgurukulofficial@gmail.com', '2020-02-29', '6 p.m', '10 p.m', 'New Delhi India', 'Wedding', 'NA', '2020-02-10 15:32:17', 'Test remark', 'Approved', '2020-02-10 15:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblelectrician`
--

CREATE TABLE `tblelectrician` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `thana` int(11) DEFAULT 0,
  `address` text DEFAULT NULL,
  `specialization_area` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblelectrician`
--

INSERT INTO `tblelectrician` (`id`, `name`, `email`, `phone`, `password`, `thana`, `address`, `specialization_area`) VALUES
(1, 'test electrician', 'test@mail.com', 2147483647, '827ccb0eea8a706c4c34a16891f84e7b', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbleventtype`
--

CREATE TABLE `tbleventtype` (
  `ID` int(10) NOT NULL,
  `EventType` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbleventtype`
--

INSERT INTO `tbleventtype` (`ID`, `EventType`, `CreationDate`) VALUES
(1, 'Anniversary', '2020-01-22 07:01:39'),
(2, 'Birthday Party', '2020-01-22 07:02:34'),
(3, 'Charity', '2020-01-22 07:02:43'),
(4, 'Cocktail', '2020-01-22 07:03:00'),
(5, 'College', '2020-01-22 07:03:11'),
(6, 'Community', '2020-01-22 07:03:24'),
(7, 'Concert', '2020-01-22 07:03:35'),
(8, 'Engagement', '2020-01-22 07:03:51'),
(9, 'Get Together', '2020-01-22 07:04:04'),
(10, 'Government', '2020-01-22 07:04:15'),
(11, 'Night Club', '2020-01-22 07:04:26'),
(13, 'Post Wedding', '2020-01-22 07:05:01'),
(14, 'Pre Engagement', '2020-01-22 07:05:18'),
(15, 'Religious', '2020-01-22 07:05:27'),
(16, 'Sangeet', '2020-01-22 07:05:43'),
(17, 'Social', '2020-01-22 07:05:58'),
(18, 'Wedding', '2020-01-22 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(100) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<b>Online DJ Management System</b><div><b>ODMS&nbsp;is one of the Internet\'s largest and trusted Online DJ Booking Service. ODMS has done several placements locally &amp; globally for top artists.</b></div><div><b><br></b></div><div><b>&nbsp;Test data for testing.</b></div>', NULL, NULL, '2020-02-10 15:36:25'),
(2, 'contactus', 'Contact Us', 'D-204, Hole Town South West,Delhi-110096,India', 'info@gmail.com', 1234567890, '2020-02-10 15:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `SerDes` varchar(250) NOT NULL,
  `ServicePrice` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`ID`, `ServiceName`, `SerDes`, `ServicePrice`, `CreationDate`) VALUES
(1, 'Wedding DJ', '(we install the DJ equipment before your ceremony or after your wedding breakfast)', '800', '2020-01-24 07:17:43'),
(2, 'Party DJ', '(we install the DJ equipment 1 hour before your selected event start time)', '700', '2020-01-24 07:18:32'),
(3, 'Ceremony Music', 'Our ceremony music service is a popular add on to our wedding DJ stay all day hire.', '650', '2020-01-24 07:19:14'),
(4, 'Photo Booth Hire', '(early equipment setup included)', '500', '2020-01-24 07:19:51'),
(5, 'Karaoke Add-on', 'Karaoke is a great alternative to a disco. It’s perfect for staff parties and children’s parties.', '450', '2020-01-24 07:20:36'),
(6, 'Uplighters', 'Uplighters are bright lighting fixtures which are installed on the floor and shine a vibrant wash of colour over the walls of your venue', '200', '2020-01-24 07:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `MsgDate` timestamp NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Name`, `MobileNumber`, `Email`, `Message`, `MsgDate`, `IsRead`) VALUES
(1, 'Test', 7887878787, 'test@gmail.com', 'Hello', '2020-01-24 07:00:34', 1),
(2, 'Poonam', 5545445444, 'poonam@yahoo.com', 'Hello Iwan to know you are take booking for Haryana', '2020-01-24 07:02:57', 1),
(3, 'Test', 7654659878, 'test@gmail.com', 'Sample test.', '2020-01-29 06:05:08', NULL),
(4, 'Anuj', 9999857867, 'phpgurukulofficial@gmail.com', 'NA', '2020-02-10 15:37:38', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `EventType` (`EventType`);

--
-- Indexes for table `tblelectrician`
--
ALTER TABLE `tblelectrician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbleventtype`
--
ALTER TABLE `tbleventtype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EventType` (`EventType`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
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
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblelectrician`
--
ALTER TABLE `tblelectrician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbleventtype`
--
ALTER TABLE `tbleventtype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
