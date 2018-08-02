-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2015 at 05:52 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BWA1`
--

-- --------------------------------------------------------

--
-- Table structure for table `CruiseSlip`
--

CREATE TABLE `CruiseSlip` (
`ID` int(255) NOT NULL,
  `Agency` varchar(255) NOT NULL,
  `Agent` varchar(255) NOT NULL,
  `PreparedBy` varchar(255) NOT NULL,
  `Phone1` varchar(255) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `HomeAddress` varchar(255) NOT NULL,
  `HomePhone` varchar(255) NOT NULL,
  `CellPhone` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `CruiseShip` varchar(255) NOT NULL,
  `Cabin` varchar(255) NOT NULL,
  `DateDeparting` varchar(255) NOT NULL,
  `DateReturning` varchar(255) NOT NULL,
  `EQ1` varchar(255) NOT NULL,
  `EQ2` varchar(255) NOT NULL,
  `EQ3` varchar(255) NOT NULL,
  `EQ4` varchar(255) NOT NULL,
  `EQ5` varchar(255) NOT NULL,
  `EQ6` varchar(255) NOT NULL,
  `EQ7` varchar(255) NOT NULL,
  `EQ8` varchar(255) NOT NULL,
  `EQ9` varchar(255) NOT NULL,
  `EQ10` varchar(255) NOT NULL,
  `EQ11` varchar(255) NOT NULL,
  `EQ12` varchar(255) NOT NULL,
  `EQ13` varchar(255) NOT NULL,
  `EQ14` varchar(255) NOT NULL,
  `EQ15` varchar(255) NOT NULL,
  `EQ16` varchar(255) NOT NULL,
  `DateofPickup` varchar(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `NameofShip` varchar(255) NOT NULL,
  `CabinNum` varchar(255) NOT NULL,
  `PU1` varchar(255) NOT NULL,
  `PU2` varchar(255) NOT NULL,
  `PU3` varchar(255) NOT NULL,
  `PU4` varchar(255) NOT NULL,
  `PU5` varchar(255) NOT NULL,
  `PU6` varchar(255) NOT NULL,
  `Driver` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Editor` varchar(255) NOT NULL,
  `EditTime` varchar(255) NOT NULL,
  `specialinstructions` varchar(255) NOT NULL,
  `ES4` varchar(255) NOT NULL,
  `ES5` varchar(255) NOT NULL,
  `ES6` varchar(255) NOT NULL,
  `ES7` varchar(255) NOT NULL,
  `ES8` varchar(255) NOT NULL,
  `ES9` varchar(255) NOT NULL,
  `ES10` varchar(255) NOT NULL,
  `ES11` varchar(255) NOT NULL,
  `ES12` varchar(255) NOT NULL,
  `ES13` varchar(255) NOT NULL,
  `ES14` varchar(255) NOT NULL,
  `ES15` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `CruiseSlip`
--

INSERT INTO `CruiseSlip` (`ID`, `Agency`, `Agent`, `PreparedBy`, `Phone1`, `FNAME`, `LName`, `HomeAddress`, `HomePhone`, `CellPhone`, `Height`, `Weight`, `CruiseShip`, `Cabin`, `DateDeparting`, `DateReturning`, `EQ1`, `EQ2`, `EQ3`, `EQ4`, `EQ5`, `EQ6`, `EQ7`, `EQ8`, `EQ9`, `EQ10`, `EQ11`, `EQ12`, `EQ13`, `EQ14`, `EQ15`, `EQ16`, `DateofPickup`, `CustomerName`, `NameofShip`, `CabinNum`, `PU1`, `PU2`, `PU3`, `PU4`, `PU5`, `PU6`, `Driver`, `Date`, `Poster`, `Editor`, `EditTime`, `specialinstructions`, `ES4`, `ES5`, `ES6`, `ES7`, `ES8`, `ES9`, `ES10`, `ES11`, `ES12`, `ES13`, `ES14`, `ES15`) VALUES
(1, 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', '', '', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', '', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'J', 'j', 'j', 'j', 'j', '9', '8', '7', '6', '5', '4', 'asgag', '2015/06/04', '', 'Admin', '2015/06/14', 'Sopeoeeialkjaf', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CruiseSlip`
--
ALTER TABLE `CruiseSlip`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CruiseSlip`
--
ALTER TABLE `CruiseSlip`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;