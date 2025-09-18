-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 12:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `questiontypeId` int(11) NOT NULL,
  `questionNameTh` text NOT NULL,
  `questionNameEn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionId`, `questiontypeId`, `questionNameTh`, `questionNameEn`) VALUES
(1, 1, 'สิ่งอำนวยความสะดวกภายในห้องพัก', 'The completeness and quality of in-room facilities.'),
(2, 1, 'บรรยากาศและสภาพแวดล้อมของห้องพัก', 'Your impression of the room’s atmosphere and surroundings.'),
(5, 2, 'รสชาติของอาหารและเครื่องดื่ม', 'Your satisfaction with the taste of food and beverages.'),
(6, 2, 'ความหลากหลายของเมนูอาหาร', 'The variety and adequacy of the food selection.'),
(7, 3, 'ความสุภาพและมารยาทของพนักงาน', 'Politeness and courtesy of our staff.'),
(8, 3, 'ความกระตือรือร้นของพนักงานในการบริการ', 'Enthusiasm and attentiveness of staff in service.');

-- --------------------------------------------------------

--
-- Table structure for table `questiontype`
--

CREATE TABLE `questiontype` (
  `questionTypeId` int(11) NOT NULL,
  `typeNameTh` text NOT NULL,
  `typeNameEn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `questiontype`
--

INSERT INTO `questiontype` (`questionTypeId`, `typeNameTh`, `typeNameEn`) VALUES
(1, 'สถานที่และสิ่งอำนวยความสะดวก', 'Location & Facilities'),
(2, 'อาหารและเครื่องดื่ม', 'Room Accommodation'),
(3, 'การบริการ', 'Service Staff');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingId` int(11) NOT NULL,
  `surveytsrformId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `scoreValueId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `scoreValueId` int(11) NOT NULL,
  `scoreName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scoreValueId`, `scoreName`) VALUES
(1, 'ไม่พอใจอย่างมาก(Poor)'),
(2, 'ไม่พอใจ(Below Average)'),
(3, 'เฉยๆ(Average)'),
(4, 'พอใจ(Above Average)'),
(5, 'พอใจอย่างมาก(Excellent)');

-- --------------------------------------------------------

--
-- Table structure for table `surveytsrform`
--

CREATE TABLE `surveytsrform` (
  `surveyId` int(11) NOT NULL,
  `submissionDate` datetime NOT NULL DEFAULT current_timestamp(),
  `language` varchar(20) NOT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `questiontypeId` (`questiontypeId`);

--
-- Indexes for table `questiontype`
--
ALTER TABLE `questiontype`
  ADD PRIMARY KEY (`questionTypeId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingId`),
  ADD KEY `surveytsrformId` (`surveytsrformId`,`questionId`),
  ADD KEY `questionId` (`questionId`),
  ADD KEY `scoreValueId` (`scoreValueId`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`scoreValueId`);

--
-- Indexes for table `surveytsrform`
--
ALTER TABLE `surveytsrform`
  ADD PRIMARY KEY (`surveyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questiontype`
--
ALTER TABLE `questiontype`
  MODIFY `questionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveytsrform`
--
ALTER TABLE `surveytsrform`
  MODIFY `surveyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`questiontypeId`) REFERENCES `questiontype` (`questionTypeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`questionId`) REFERENCES `question` (`questionId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`surveytsrformId`) REFERENCES `surveytsrform` (`surveyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`scoreValueId`) REFERENCES `score` (`scoreValueId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
