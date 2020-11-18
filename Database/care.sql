-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 10:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_account`
--

CREATE TABLE IF NOT EXISTS `doctor_account` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL,
  `RE_PASSWORD` varchar(6) NOT NULL,
  `DEG` varchar(500) NOT NULL,
  `SPECIALIST` varchar(500) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_account`
--

INSERT INTO `doctor_account` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `RE_PASSWORD`, `DEG`, `SPECIALIST`, `ADDRESS`) VALUES
(24, 'Dr. Nill ', 'no@gmail.om', '1234', '1234', 'MBBS', 'Medicien', 'Rajshahi'),
(25, 'Dr. pop', 'pop@gmail.com', '1234', '1234', 'MBBS,FCPS', 'Sergery', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_comment`
--

CREATE TABLE IF NOT EXISTS `doctor_comment` (
  `D_ID` int(100) NOT NULL,
  `D_EMAIL` varchar(100) NOT NULL,
  `P_EMAIL` varchar(100) NOT NULL,
  `D_COMMENT` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_comment`
--

INSERT INTO `doctor_comment` (`D_ID`, `D_EMAIL`, `P_EMAIL`, `D_COMMENT`) VALUES
(1, 'no@gmail.com', 'jon@gmail.com', '  fgfdg gdf gdfg '),
(2, 'no@gmail.com', 'jon@gmail.com', '  fgfdg gdf gdfg ');

-- --------------------------------------------------------

--
-- Table structure for table `patient_account`
--

CREATE TABLE IF NOT EXISTS `patient_account` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL,
  `RE_PASSWORD` varchar(6) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_account`
--

INSERT INTO `patient_account` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `RE_PASSWORD`, `ADDRESS`) VALUES
(16, 'Mr. Jonh Dos', 'jon@gmail.com', '1234', '1234', 'Dhaka'),
(17, 'Mr. Tom ', 'tom@gmail.com', '12345', '12345', 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `patient_comment`
--

CREATE TABLE IF NOT EXISTS `patient_comment` (
  `P_ID` int(100) NOT NULL,
  `P_EMAIL` varchar(100) NOT NULL,
  `D_EMAIL` varchar(100) NOT NULL,
  `P_COMMENT` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_comment`
--

INSERT INTO `patient_comment` (`P_ID`, `P_EMAIL`, `D_EMAIL`, `P_COMMENT`) VALUES
(9, 'jon@gmail.com', 'no@gmail.com', ' fxgfdvxvxc fvgfg'),
(10, 'jon@gmail.com', 'no@gmail.com', ' dfgsd dtgdfg dsgsdg ');

-- --------------------------------------------------------

--
-- Table structure for table `patient_problem`
--

CREATE TABLE IF NOT EXISTS `patient_problem` (
  `PRO_ID` int(100) NOT NULL,
  `P_EMAIL` varchar(100) NOT NULL,
  `PROBLEM` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_problem`
--

INSERT INTO `patient_problem` (`PRO_ID`, `P_EMAIL`, `PROBLEM`) VALUES
(14, 'jon@gmail.com', ' i am so sick. last day i feel fever.'),
(15, 'tom@gmail.com', 'Neurological problem ,head pain'),
(16, 'jon@gmail.com', ' ta hjash amsnajs'),
(17, 'jon@gmail.com', ' df dfd dfd dfdf dfdf dfdd'),
(18, 'jon@gmail.com', ' jo ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_account`
--
ALTER TABLE `doctor_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor_comment`
--
ALTER TABLE `doctor_comment`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `patient_account`
--
ALTER TABLE `patient_account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `patient_comment`
--
ALTER TABLE `patient_comment`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `patient_problem`
--
ALTER TABLE `patient_problem`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_account`
--
ALTER TABLE `doctor_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `doctor_comment`
--
ALTER TABLE `doctor_comment`
  MODIFY `D_ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_account`
--
ALTER TABLE `patient_account`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `patient_comment`
--
ALTER TABLE `patient_comment`
  MODIFY `P_ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient_problem`
--
ALTER TABLE `patient_problem`
  MODIFY `PRO_ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
