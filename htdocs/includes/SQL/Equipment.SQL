-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2014 at 10:35 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BME1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Equipment`
--

CREATE TABLE `Equipment` (
`ID` int(255) NOT NULL,
  `TableID` int(255) NOT NULL,
  `TableGet` int(1) NOT NULL,
  `eq1` varchar(255) NOT NULL,
  `eq2` varchar(255) NOT NULL,
  `eq3` varchar(255) NOT NULL,
  `eq4` varchar(255) NOT NULL,
  `eq5` varchar(255) NOT NULL,
  `eq6` varchar(255) NOT NULL,
  `eq7` varchar(255) NOT NULL,
  `eq8` varchar(255) NOT NULL,
  `eq9` varchar(255) NOT NULL,
  `eq10` varchar(255) NOT NULL,
  `eq11` varchar(255) NOT NULL,
  `eq12` varchar(255) NOT NULL,
  `eq13` varchar(255) NOT NULL,
  `eq14` varchar(255) NOT NULL,
  `eq15` varchar(255) NOT NULL,
  `eq16` varchar(255) NOT NULL,
  `eq17` varchar(255) NOT NULL,
  `eq18` varchar(255) NOT NULL,
  `eq19` varchar(255) NOT NULL,
  `eq20` varchar(255) NOT NULL,
  `eq21` varchar(255) NOT NULL,
  `eq22` varchar(255) NOT NULL,
  `eq23` varchar(255) NOT NULL,
  `eq24` varchar(255) NOT NULL,
  `eq25` varchar(255) NOT NULL,
  `eq26` varchar(255) NOT NULL,
  `eq27` varchar(255) NOT NULL,
  `eq28` varchar(255) NOT NULL,
  `eq29` varchar(255) NOT NULL,
  `eq30` varchar(255) NOT NULL,
  `eq31` varchar(255) NOT NULL,
  `eq32` varchar(255) NOT NULL,
  `eq33` varchar(255) NOT NULL,
  `eq34` varchar(255) NOT NULL,
  `eq35` varchar(255) NOT NULL,
  `eq36` varchar(255) NOT NULL,
  `eq37` varchar(255) NOT NULL,
  `eq38` varchar(255) NOT NULL,
  `eq39` varchar(255) NOT NULL,
  `eq40` varchar(255) NOT NULL,
  `eq41` varchar(255) NOT NULL,
  `eq42` varchar(255) NOT NULL,
  `eq43` varchar(255) NOT NULL,
  `eq44` varchar(255) NOT NULL,
  `eq45` varchar(255) NOT NULL,
  `eq46` varchar(255) NOT NULL,
  `eq47` varchar(255) NOT NULL,
  `eq48` varchar(255) NOT NULL,
  `eq49` varchar(255) NOT NULL,
  `eq50` varchar(255) NOT NULL,
  `eq51` varchar(255) NOT NULL,
  `eq52` varchar(255) NOT NULL,
  `eq53` varchar(255) NOT NULL,
  `eq54` varchar(255) NOT NULL,
  `eq55` varchar(255) NOT NULL,
  `eq56` varchar(255) NOT NULL,
  `eq57` varchar(255) NOT NULL,
  `eq58` varchar(255) NOT NULL,
  `eq59` varchar(255) NOT NULL,
  `eq60` varchar(255) NOT NULL,
  `eq61` varchar(255) NOT NULL,
  `eq62` varchar(255) NOT NULL,
  `eq63` varchar(255) NOT NULL,
  `eq64` varchar(255) NOT NULL,
  `eq65` varchar(255) NOT NULL,
  `eq66` varchar(255) NOT NULL,
  `eq67` varchar(255) NOT NULL,
  `eq68` varchar(255) NOT NULL,
  `eq69` varchar(255) NOT NULL,
  `eq70` varchar(255) NOT NULL,
  `eq71` varchar(255) NOT NULL,
  `eq72` varchar(255) NOT NULL,
  `eq73` varchar(255) NOT NULL,
  `eq74` varchar(255) NOT NULL,
  `eq75` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Equipment`
--
ALTER TABLE `Equipment`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Equipment`
--
ALTER TABLE `Equipment`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;