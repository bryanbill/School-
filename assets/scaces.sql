-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2019 at 06:10 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scaces`
--

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE IF NOT EXISTS `Classes` (
  `class_id` varchar(12) NOT NULL,
  `class_name` text NOT NULL,
  `class_teacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form1Results`
--

CREATE TABLE IF NOT EXISTS `Form1Results` (
  `userid` varchar(12) NOT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Eng` int(11) DEFAULT NULL,
  `Kis` int(11) DEFAULT NULL,
  `termid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form2Results`
--

CREATE TABLE IF NOT EXISTS `Form2Results` (
  `userid` varchar(12) NOT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Eng` int(11) DEFAULT NULL,
  `Kis` int(11) DEFAULT NULL,
  `termid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form3Results`
--

CREATE TABLE IF NOT EXISTS `Form3Results` (
  `userid` varchar(12) NOT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Eng` int(11) DEFAULT NULL,
  `Kis` int(11) DEFAULT NULL,
  `termid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form4Results`
--

CREATE TABLE IF NOT EXISTS `Form4Results` (
  `userid` varchar(12) NOT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Eng` int(11) DEFAULT NULL,
  `Kis` int(11) DEFAULT NULL,
  `termid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Office`
--

CREATE TABLE IF NOT EXISTS `Office` (
  `userid` int(11) NOT NULL,
  `Content` varchar(5000) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `item_number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Office`
--

INSERT INTO `Office` (`userid`, `Content`, `title`, `item_number`) VALUES
(34, 'the rbv', 'trg', 2),
(12, '<table style="width: 100%;"><tbody><tr><td style="width: 50%; background-color: rgb(65, 168, 95);">Number</td><td style="width: 50%; background-color: rgb(61, 142, 185);">Name</td></tr><tr><td style="width: 50.0000%;">1.</td><td style="width: 50.0000%;">John<br></td></tr><tr><td style="width: 50.0000%;">2.</td><td style="width: 50.0000%;">Mike</td></tr><tr><td style="width: 50.0000%;">3.</td><td style="width: 50.0000%;">Johnte</td></tr></tbody></table>', 'Name', 4),
(12, '<p>&cent;</p>', 'v', 6),
(1, '<table style="width: 100%;"><tbody><tr><td style="width: 50%; background-color: rgb(61, 142, 185);">Numbers</td><td style="width: 50%; background-color: rgb(0, 0, 0);"><span style="color: rgb(255, 255, 255);">Names</span></td></tr><tr><td style="width: 50.0000%;">1,</td><td style="width: 50.0000%;">Joy</td></tr><tr><td style="width: 50.0000%;">2.</td><td style="width: 50.0000%;">Bonte</td></tr><tr><td style="width: 50.0000%;">3.</td><td style="width: 50.0000%;">Kwaraj</td></tr><tr><td style="width: 50.0000%;">4.</td><td style="width: 50.0000%;">Musila</td></tr></tbody></table>', 'Bonte', 7),
(12, '<p>The type of the query depends on the need for it or else the whole system crashes down like a nothing else</p><p>can you even imagine that?<span class="fr-img-caption fr-fic fr-dii fr-rounded fr-fir" style="width: 300px;"><span class="fr-img-wrap"><img src="http://127.0.0.1/send/process.php?do=download&id=1" alt="IMAGE"><span class="fr-inner">Producer</span></span></span></p><p>that everything is fucking boring</p><p>when you could be eating the life you have with a big spoon you get to spend your afternoon, locked in a like a bird in a cage.</p><p>with slow wifi, sometimes not even connectable?</p><p>smelling urine from the nearest toilets. who did even consider placing the water tanks upstairs?</p>', 'Producer', 9),
(12, '<p><span class="fr-video fr-dvb fr-draggable" contenteditable="false" draggable="true"><video class="fr-draggable" controls="" src="blob:http://localhost/2bc13aff-efc1-4456-99d8-687e6f8bbff2" style="width: 600px;">Your browser does not support HTML5 video.</video></span></p>', 'Joe Boy', 10),
(12, '<p><span class="fr-img-caption fr-fic fr-fil fr-rounded fr-dii" style="width: 300px;"><span class="fr-img-wrap"><img src="blob:http://localhost/bba63ee5-42f0-406d-9b45-8dc63e05ef13"><span class="fr-inner">Color Splash</span></span></span></p><p><span class="fr-img-caption fr-fic fr-dii fr-rounded fr-fir" style="width: 300px;"><span class="fr-img-wrap"><img src="blob:http://localhost/76e357a9-8b43-4e13-8567-1a58d5849e85"><span class="fr-inner">Graffiti</span></span></span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size: 18px;">&nbsp; <span style="color: rgb(0, 0, 0);"><strong><u>&nbsp; &nbsp;Lorem Ipsum Dola Ret</u></strong></span></span></p><p><span style="font-size: 18px;">Lorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola Ret</span></p><p><span style="font-size: 18px;"><br></span></p><p><span style="font-size: 18px;">Lorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola Ret</span></p><p><span style="font-size: 18px;">Lorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola RetLorem Ipsum Dola Ret</span></p><p><br></p>', 'Test', 11),
(12, '<p>This is a good better test the new clean code without further ado</p>', 'Title', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE IF NOT EXISTS `Profile` (
  `userid` int(11) NOT NULL,
  `username` char(255) DEFAULT NULL,
  `PhoneNo` double DEFAULT NULL,
  `Id` bigint(20) DEFAULT NULL,
  `Email` blob,
  `Image` varchar(255) NOT NULL DEFAULT 'http://localhost/therapy/assets/images/logo1.png',
  `Role` text NOT NULL,
  `Post` text NOT NULL,
  `N_of_kin` text,
  `Address` text NOT NULL,
  `N_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE IF NOT EXISTS `Roles` (
  `roleid` varchar(12) NOT NULL,
  `rolename` enum('Student','Teacher','Pricipal','DoS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`roleid`, `rolename`) VALUES
('1', 'Student'),
('2', 'Teacher'),
('3', 'DoS'),
('4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `userid` int(11) NOT NULL,
  `class_id` varchar(12) DEFAULT NULL,
  `username` text,
  `Role` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectid` varchar(12) NOT NULL,
  `subjectname` text,
  `HoF` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE IF NOT EXISTS `Teachers` (
  `userid` int(11) NOT NULL,
  `username` text,
  `subject1` text,
  `subject2` text,
  `class1` text,
  `class2` text,
  `class3` text,
  `class4` text,
  `Role` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `pass` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `role` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pass`, `Email`, `userid`, `role`) VALUES
('bryanbill', 'jackryan@gmail.com', 1, 'Student'),
('bryanbill', 'bill@yahoo.com', 12, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classes`
--
ALTER TABLE `Classes`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_teacher` (`class_teacher`);

--
-- Indexes for table `Form1Results`
--
ALTER TABLE `Form1Results`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Form2Results`
--
ALTER TABLE `Form2Results`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Form3Results`
--
ALTER TABLE `Form3Results`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Form4Results`
--
ALTER TABLE `Form4Results`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Office`
--
ALTER TABLE `Office`
  ADD UNIQUE KEY `item_number` (`item_number`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Office`
--
ALTER TABLE `Office`
  MODIFY `item_number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
