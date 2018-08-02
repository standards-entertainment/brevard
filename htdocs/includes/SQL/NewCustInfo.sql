-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 11, 2015 at 08:17 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BWA1`
--

-- --------------------------------------------------------

--
-- Table structure for table `NewCustInfo`
--

CREATE TABLE `NewCustInfo` (
`ID` int(255) NOT NULL,
  `Referral` varchar(255) NOT NULL,
  `PreparedBy` varchar(255) NOT NULL,
  `Date1` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `CustName` varchar(255) NOT NULL,
  `DateofService` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `DateofBirth` varchar(255) NOT NULL,
  `AltContact` varchar(255) NOT NULL,
  `Phone2` varchar(255) NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `Diagnosis` varchar(255) NOT NULL,
  `Pcp1` varchar(255) NOT NULL,
  `Pcp1Phone` varchar(255) NOT NULL,
  `Ins1` varchar(255) NOT NULL,
  `Ins1Number` varchar(255) NOT NULL,
  `Ins2` varchar(255) NOT NULL,
  `Ins2Number` varchar(255) NOT NULL,
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
  `eq76` varchar(25) NOT NULL,
  `eq77` varchar(25) NOT NULL,
  `eq78` varchar(25) NOT NULL,
  `eq79` varchar(25) NOT NULL,
  `eq80` varchar(25) NOT NULL,
  `eq81` varchar(25) NOT NULL,
  `LotNumbers` varchar(255) NOT NULL,
  `CSig1` varchar(255) NOT NULL,
  `Date2` varchar(255) NOT NULL,
  `DriverOffice` varchar(255) NOT NULL,
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
  `Editor` varchar(255) NOT NULL,
  `EditTime` varchar(255) NOT NULL,
  `SendTime` varchar(255) NOT NULL,
  `AccomplishTime` varchar(255) NOT NULL,
  `VerifyTime` varchar(255) NOT NULL,
  `CompleteTime` varchar(255) NOT NULL,
  `specialinstructions` varchar(255) NOT NULL,
  `bhosp` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `NewCustInfo`
--

INSERT INTO `NewCustInfo` (`ID`, `Referral`, `PreparedBy`, `Date1`, `Time`, `CustName`, `DateofService`, `Height`, `Weight`, `Address`, `City`, `State`, `Zip`, `Phone`, `Sex`, `DateofBirth`, `AltContact`, `Phone2`, `Relationship`, `Diagnosis`, `Pcp1`, `Pcp1Phone`, `Ins1`, `Ins1Number`, `Ins2`, `Ins2Number`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`, `eq76`, `eq77`, `eq78`, `eq79`, `eq80`, `eq81`, `LotNumbers`, `CSig1`, `Date2`, `DriverOffice`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `Completer`, `Verifier`, `Accomplished`, `Accomplisher`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`, `specialinstructions`, `bhosp`) VALUES
(28, '', '', '2014/12/10', '11:05:43am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', '', '2014/12/10', 'Jake1', 'Admin', 'Admin', 1, 0, 0, 'Admin', 'Admin', 'Admin', 0, 'Admin', 'Admin', '11:06:25am 2014/12/10', '11:11:53am 2014/12/10', '11:09:01am 2014/12/10', '11:09:07am 2014/12/10', '11:09:11am 2014/12/10', '', ''),
(29, '', '', '2014/12/12', '01:47:06am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', '', '', 'Lowbed', '', '', '', '', '', '', '', '', '', 'O2 Concentrator #', '', '', '', 'Portable E-Tank System', '', '', '', '', '', 'D Tank 415 Liter Refill U', '', '', '', '', '', '', '', '', '', 'Walker', '', '', '', '', '', '', 'Nebulizer Tubing', '', '', '', '', '', '', 'Shower Chair', '', '', '', '', 'Wheelchair', '', '', '', '', '20in Wide #', '', '', '', '', '', '', '', 'Transport/Travel Chair #', '', '', '', '', '', '', '', '', 'Regal #', '', '', '', 'Other', '', '', '', '1', 'Jakester', 'Admin', '', 0, 0, 0, '', '', '', 0, '', 'Admin', '12:06:09am 2015/05/13', '', '', '', '', '', ''),
(30, '', '', '2015/05/13', '12:16:59am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'jakester', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', ''),
(31, '', '', '2015/05/13', '12:17:25am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'ajjaa', 'Admin', 'Admin', 1, 0, 1, 'Admin', '', 'Admin', 0, '', '', '', '12:37:15am 2015/05/13', '', '12:37:20am 2015/05/13', '', '', ''),
(32, '', '', '2015/05/13', '12:41:57am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Jakey', 'Admin', 'Test123', 1, 0, 0, 'Admin', '', '', 0, '', '', '', '05:43:40pm 2015/06/14', '', '', '', '', ''),
(33, 'Ref', 'Prep', '2015/07/13', '11:49:09am', 'CName', 'DOS', 'h', 'h', 'etc.', 'etc.', 'aga', 'h', 'h', '', 'h', 'h', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'Hospital Bed, Electric #', 'j', '', '', '', '', 'Bed Attached #', 'j', 'Free Standing #', 'j', 'APPP Overlay #', 'j', 'AP Mattress (Plexus Style', 'j', 'O2 Concentrator #', 'j', '', '', '', '', '', 'j', '', 'j', '', '', '', '', '', '', '', 'j', '', 'jjj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '11:57:44am', '0', 'Jakesteror', 'Admin', '', 0, 0, 0, '', '', '', 1, 'Admin', '', '', '', '2015/07/13', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `NewCustInfo`
--
ALTER TABLE `NewCustInfo`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `NewCustInfo`
--
ALTER TABLE `NewCustInfo`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;