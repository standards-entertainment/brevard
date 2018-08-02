-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2015 at 02:53 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BWA1`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory1`
--

CREATE TABLE `inventory1` (
`ID` int(11) NOT NULL,
  `PID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `StockIn` int(255) NOT NULL,
  `StockOut` int(255) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Editor` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `inventory1`
--

INSERT INTO `inventory1` (`ID`, `PID`, `Name`, `Description`, `Comments`, `StockIn`, `StockOut`, `Poster`, `Editor`) VALUES
(5, '', 'Gel Cushion', '', '', 9, 0, 'Admin', ''),
(6, '', 'Convoluted Cushion', '', '', 5, 0, 'Admin', ''),
(7, '', 'Foam Cushion', '', '', 3, 0, 'Admin', ''),
(8, '', 'Lap Buddies 2in', '', '', 2, 0, 'Admin', ''),
(9, '', 'Lap Buddies 4in', '', '', 5, 0, 'Admin', ''),
(10, '', 'Full Rail Pads', '', '', 1, 0, 'Admin', ''),
(11, '', 'Half Rail Pads', '', '', 2, 0, 'Admin', ''),
(12, '', 'Fall Mat', '', '', 1, 0, 'Admin', ''),
(13, '', 'Full Rails', '', '', 3, 0, 'Admin', ''),
(14, '', '10in Wedge', '', '', 4, 0, 'Admin', ''),
(15, '', '7.5in Wedge', '', '', 3, 0, 'Admin', ''),
(16, '', 'M Sling W/ Hole', '', '', 1, 0, 'Admin', ''),
(17, '', 'L Sling w/ Hole', '', '', 0, 0, 'Admin', ''),
(18, '', 'L Sling w/o Hole', '', '', 0, 0, 'Admin', ''),
(19, '', 'XL Sling w/ Hole', '', '', 0, 0, 'Admin', ''),
(20, '', 'XL Sling w/o Hole', '', '', 0, 0, 'Admin', ''),
(21, '', '10FR Suction Catheter', '', '', 100, 0, 'Admin', ''),
(22, '', '10FR Suction Catheter', '', '', 100, 0, 'Admin', ''),
(23, '', 'Compac Feeding Bags', '', '', 70, 0, 'Admin', ''),
(24, '', 'Feeding Syringes', '', '', 120, 0, 'Admin', ''),
(25, '', '50 PSI Compressor', '', '', 2, 0, 'Admin', ''),
(26, '', 'App', '', '', 3, 0, 'Admin', ''),
(27, '', 'Intermitten Suction', '', '', 0, 0, 'Admin', ''),
(28, '', 'Trach Tray', '', '', 20, 0, 'Admin', ''),
(29, '', 'Nebs', '', '', 2, 0, 'Admin', ''),
(30, '', 'Incentive Spirometer', '', '', 1, 0, 'Admin', ''),
(31, '', 'Tubing bags', '', '', 0, 0, 'Admin', ''),
(32, '', 'Air Mattress', '', '', 0, 0, 'Admin', ''),
(33, '', 'Scoop Air Mattres', '', '', 0, 0, 'Admin', ''),
(34, '', 'Scoop overlay', '', '', 0, 0, 'Admin', ''),
(35, '', 'HB', '', '', 5, 0, 'Admin', ''),
(36, '', 'Bariatric HB', '', '', 0, 0, 'Admin', ''),
(37, '', 'Mattresses', '', '', 5, 0, 'Admin', ''),
(38, '', 'Scoop Mattresses', '', '', 0, 0, 'Admin', ''),
(39, '', 'Bariatric Mattresses', '', '', 0, 0, 'Admin', ''),
(40, '', '5L O2con Everflow Q', '', '', 0, 0, 'Admin', ''),
(41, '', '5L O2Con', '', '', 2, 0, 'Admin', 'Admin'),
(42, '', '10L O2con', '', '', 0, 0, 'Admin', ''),
(43, '', 'E-Tank Cart', '', '', 2, 0, 'Admin', ''),
(44, '', 'Geri Chair', '', '', 2, 0, 'Admin', ''),
(45, '', '15in TC', '', '', 2, 0, 'Admin', ''),
(46, '', '17in TC', '', '', 2, 0, 'Admin', ''),
(47, '', '19in TC', '', '', 3, 0, 'Admin', ''),
(48, '', '16in WC', '', '', 1, 0, 'Admin', ''),
(49, '', '18in WC', '', '', 1, 0, 'Admin', ''),
(50, '', '20in WC', '', '', 0, 0, 'Admin', ''),
(51, '', '22in WC', '', '', 1, 0, 'Admin', ''),
(52, '', '18in Rec W/ELR', '', '', 0, 0, 'Admin', ''),
(53, '', 'OBT', '', '', 0, 0, 'Admin', ''),
(54, '', '3-1 Commode', '', '', 3, 0, 'Admin', ''),
(55, '', '4 WW', '', '', 3, 0, 'Admin', ''),
(56, '', '2 WW', '', '', 2, 0, 'Admin', ''),
(57, '', 'CPM', '', '', 3, 0, 'Admin', ''),
(58, '', 'SC', '', '', 3, 0, 'Admin', ''),
(59, '', 'HD 3-1', '', '', 3, 0, 'Admin', ''),
(60, '', 'Sliding Transfer', '', '', 0, 0, 'Admin', ''),
(61, '', 'Fall Mat', '', '', 1, 0, 'Admin', ''),
(62, '', 'IV Pole', '', '', 2, 0, 'Admin', ''),
(63, '', 'Travel Bed Rail', '', '', 1, 0, 'Admin', ''),
(64, '', 'Trapeze (Bed Attached)', '', '', 2, 0, 'Admin', ''),
(65, '', 'Toilet Extender', '', '', 1, 0, 'Admin', ''),
(66, '', 'Toilet Extender Elongated', '', '', 1, 0, 'Admin', ''),
(67, '', 'Bed Alarm', '', '', 2, 0, 'Admin', ''),
(68, '', 'Chair Alarm', '', '', 0, 0, 'Admin', ''),
(69, '', 'Broda Pedal Chair', '', '', 0, 0, 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory1`
--
ALTER TABLE `inventory1`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory1`
--
ALTER TABLE `inventory1`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;