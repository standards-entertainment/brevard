-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2014 at 11:14 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BME1`
--

-- --------------------------------------------------------

--
-- Table structure for table `DeliverySlip`
--

CREATE TABLE `DeliverySlip` (
`ID` int(255) NOT NULL,
  `PatientNum` varchar(255) NOT NULL,
  `Referral` varchar(255) NOT NULL,
  `PreparedBy` varchar(255) NOT NULL,
  `Date1` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `DateofDelivery` varchar(255) NOT NULL,
  `CustName` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `eq1` varchar(25) NOT NULL,
  `eq2` varchar(25) NOT NULL,
  `eq3` varchar(25) NOT NULL,
  `eq4` varchar(25) NOT NULL,
  `eq5` varchar(25) NOT NULL,
  `eq6` varchar(25) NOT NULL,
  `eq7` varchar(25) NOT NULL,
  `eq8` varchar(25) NOT NULL,
  `eq9` varchar(25) NOT NULL,
  `eq10` varchar(25) NOT NULL,
  `eq11` varchar(25) NOT NULL,
  `eq12` varchar(25) NOT NULL,
  `eq13` varchar(25) NOT NULL,
  `eq14` varchar(25) NOT NULL,
  `eq15` varchar(25) NOT NULL,
  `eq16` varchar(25) NOT NULL,
  `eq17` varchar(25) NOT NULL,
  `eq18` varchar(25) NOT NULL,
  `eq19` varchar(25) NOT NULL,
  `eq20` varchar(25) NOT NULL,
  `eq21` varchar(25) NOT NULL,
  `eq22` varchar(25) NOT NULL,
  `eq23` varchar(25) NOT NULL,
  `eq24` varchar(25) NOT NULL,
  `eq25` varchar(25) NOT NULL,
  `eq26` varchar(25) NOT NULL,
  `eq27` varchar(25) NOT NULL,
  `eq28` varchar(25) NOT NULL,
  `eq29` varchar(25) NOT NULL,
  `eq30` varchar(25) NOT NULL,
  `eq31` varchar(25) NOT NULL,
  `eq32` varchar(25) NOT NULL,
  `eq33` varchar(25) NOT NULL,
  `eq34` varchar(25) NOT NULL,
  `eq35` varchar(25) NOT NULL,
  `eq36` varchar(25) NOT NULL,
  `eq37` varchar(25) NOT NULL,
  `eq38` varchar(25) NOT NULL,
  `eq39` varchar(25) NOT NULL,
  `eq40` varchar(25) NOT NULL,
  `eq41` varchar(25) NOT NULL,
  `eq42` varchar(25) NOT NULL,
  `eq43` varchar(25) NOT NULL,
  `eq44` varchar(25) NOT NULL,
  `eq45` varchar(25) NOT NULL,
  `eq46` varchar(25) NOT NULL,
  `eq47` varchar(25) NOT NULL,
  `eq48` varchar(25) NOT NULL,
  `eq49` varchar(25) NOT NULL,
  `eq50` varchar(25) NOT NULL,
  `eq51` varchar(25) NOT NULL,
  `eq52` varchar(25) NOT NULL,
  `eq53` varchar(25) NOT NULL,
  `eq54` varchar(25) NOT NULL,
  `eq55` varchar(25) NOT NULL,
  `eq56` varchar(25) NOT NULL,
  `eq57` varchar(25) NOT NULL,
  `eq58` varchar(25) NOT NULL,
  `eq59` varchar(25) NOT NULL,
  `eq60` varchar(25) NOT NULL,
  `eq61` varchar(25) NOT NULL,
  `eq62` varchar(25) NOT NULL,
  `eq63` varchar(25) NOT NULL,
  `eq64` varchar(25) NOT NULL,
  `eq65` varchar(25) NOT NULL,
  `eq66` varchar(25) NOT NULL,
  `eq67` varchar(25) NOT NULL,
  `eq68` varchar(25) NOT NULL,
  `eq69` varchar(25) NOT NULL,
  `eq70` varchar(25) NOT NULL,
  `eq71` varchar(25) NOT NULL,
  `eq72` varchar(25) NOT NULL,
  `eq73` varchar(25) NOT NULL,
  `eq74` varchar(25) NOT NULL,
  `eq75` varchar(25) NOT NULL,
  `CSig1` varchar(255) NOT NULL,
  `Date2` varchar(25) NOT NULL,
  `DriverOffice` varchar(255) NOT NULL,
  `LNUSPO2Del` varchar(255) NOT NULL,
  `LNECPU` varchar(255) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Driver` varchar(255) NOT NULL,
  `Sent` int(1) NOT NULL,
  `Complete` int(1) NOT NULL,
  `Verified` int(1) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Completer` varchar(255) NOT NULL,
  `Verifier` varchar(255) NOT NULL,
  `Accomplished` int(1) NOT NULL,
  `Accomplisher` varchar(255) NOT NULL,
  `specialinstructions` varchar(255) NOT NULL,
  `Editor` varchar(255) NOT NULL,
  `EditTime` varchar(255) NOT NULL,
  `SendTime` varchar(255) NOT NULL,
  `AccomplishTime` varchar(255) NOT NULL,
  `VerifyTime` varchar(255) NOT NULL,
  `CompleteTime` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DeliverySlip`
--
ALTER TABLE `DeliverySlip`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DeliverySlip`
--
ALTER TABLE `DeliverySlip`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;