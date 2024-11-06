-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 01:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobleague`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_login`) VALUES
('admin', 'admin', '2018-04-07 10:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contactID` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `fullname`, `email`, `feedback`, `date`) VALUES
(1, 'Shahril', 'Shahril3001.SR@gmail.com', 'Hello World', '2018-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customerID` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `cimage` varchar(5000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ranking` varchar(500) NOT NULL,
  `cvfile` varchar(5000) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `fullname`, `cimage`, `email`, `password`, `phone`, `status`, `ranking`, `cvfile`, `last_login`) VALUES
(1, 'Shahril', 'account/59bff9ee79de5.jpg', 'Shahril3001.SR@gmail.com', '1234', 1234567, 'Unemployeed', 'Rank 10', 'cvfile/Shahril_Radziman_Silau_Documentation.pdf', '2018-04-07 08:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `hirer`
--

CREATE TABLE IF NOT EXISTS `hirer` (
`hirerID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `hemail` varchar(1000) NOT NULL,
  `hcontact` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectdemo`
--

CREATE TABLE IF NOT EXISTS `projectdemo` (
`projectID` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdetail` varchar(5000) NOT NULL,
  `pbudget` varchar(100) NOT NULL,
  `hirername` varchar(100) NOT NULL,
  `pemail` varchar(500) NOT NULL,
  `pcontact` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectdemo`
--

INSERT INTO `projectdemo` (`projectID`, `pname`, `pdetail`, `pbudget`, `hirername`, `pemail`, `pcontact`, `date`) VALUES
(1, 'Interactive Graphic Display with Processing ([url removed, login to view])', 'we need a logo for a company and graphic design for the website see the word file attached for more details, we need a logo for a company and graphic design for the website see the word file attached for more details :-), police car interactive graphic designer, interactive graphic icon, graphic display calculator online, lcd graphic display pic 128x64 ks0108 assembler, pic graphic display, graphic display lcd pic, graphic display output php, graphic display pic, pic serial graphic display project, java mortgage calculator graphic display, php metar graphic display, pic ks0108 graphic display, graphic display lcd pic 16f', '20.00 - 60.00', 'Shahril', 'Shahril3001.SR@gmail.com', 1234567, '2018-04-06'),
(2, 'PHP MySQL Database Wordpress EXPERT!', '(1) Need to extract member data from a .SQL file (multiple 10+ tables) and export my needed data into an Excel spreadhseet (50,000+ members).\r\n\r\n(2) Take the Excel spreadsheet and migrate 50,000 members data into an already established Large Database\r\n\r\nSkills: Database Administration, Database Programming, MySQL, PHP, WordPress\r\n\r\nSee more: Need a php and wordpress expert for 2 small modification in existing website, wordpress expert need for fixing some issues, triggers php mysql wordpress, php mysql database expert, php mysql girl expert, php MySQL wordpress, php mysql wordpress entwickler freelancer, php mysql optimization expert seo, php mysql ajax expert, html ajax php mysql css expert, free invoicing system php mysql wordpress, extract sql file microsoft, exec php mysql wordpress, php mysql script expert, tabless css php mysql wordpress', '10.00 - 30.00', 'Guru2705', 'Guru2705@gmail.com', 1234567, '2018-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE IF NOT EXISTS `showcase` (
`showcaseID` int(100) NOT NULL,
  `showname` varchar(100) NOT NULL,
  `showprice` decimal(15,2) NOT NULL,
  `showimage` varchar(5000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showcase`
--

INSERT INTO `showcase` (`showcaseID`, `showname`, `showprice`, `showimage`, `email`, `date`) VALUES
(1, 'Business Card Design', '1000.00', 'item/6345b1.jpg', 'Shahril3001.SR@gmail.com', '2018-04-05'),
(2, 'Mobile App Landing Page', '150.00', 'item/2bae37.jpg', 'Shahril3001.SR@gmail.com', '2018-04-05'),
(3, 'UI/UX Designer Needed', '75.00', 'item/fa5a96.jpg', 'Shahril3001.SR@gmail.com', '2018-04-05'),
(4, 'corporate card new', '45.00', 'item/5a2a4eeeae112.jpg', 'Shahril3001.SR@gmail.com', '2018-04-05'),
(5, 'Rainbow Unicorn Hair Chalk Package Design', '75.00', 'item/8b748e.jpg', 'Shahril3001.SR@gmail.com', '2018-04-05'),
(6, ' Design a Logo & Develop a Corporate Identity Arabic/English Contest', '150.00', 'item/7dccc0.jpg', 'Shahril3001.SR@gmail.com', '2018-04-07'),
(7, 'Architectural Design and 3D Visualization', '100.00', 'item/VISUAL CASA.jpg', 'Shahril3001.SR@gmail.com', '2018-04-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `hirer`
--
ALTER TABLE `hirer`
 ADD PRIMARY KEY (`hirerID`);

--
-- Indexes for table `projectdemo`
--
ALTER TABLE `projectdemo`
 ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `showcase`
--
ALTER TABLE `showcase`
 ADD PRIMARY KEY (`showcaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contactID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hirer`
--
ALTER TABLE `hirer`
MODIFY `hirerID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projectdemo`
--
ALTER TABLE `projectdemo`
MODIFY `projectID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `showcase`
--
ALTER TABLE `showcase`
MODIFY `showcaseID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
