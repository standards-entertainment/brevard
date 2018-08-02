-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 18, 2015 at 04:28 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BWA1`
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
  `eq76` varchar(255) NOT NULL,
  `eq77` varchar(255) NOT NULL,
  `eq78` varchar(255) NOT NULL,
  `eq79` varchar(255) NOT NULL,
  `eq80` varchar(255) NOT NULL,
  `eq81` varchar(255) NOT NULL,
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
  `CompleteTime` varchar(255) NOT NULL,
  `bhosp` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `DeliverySlip`
--

INSERT INTO `DeliverySlip` (`ID`, `PatientNum`, `Referral`, `PreparedBy`, `Date1`, `Time`, `DateofDelivery`, `CustName`, `Height`, `Weight`, `Address`, `City`, `Zip`, `Phone`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`, `eq76`, `eq77`, `eq78`, `eq79`, `eq80`, `eq81`, `CSig1`, `Date2`, `DriverOffice`, `LNUSPO2Del`, `LNECPU`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `Completer`, `Verifier`, `Accomplished`, `Accomplisher`, `specialinstructions`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`, `bhosp`) VALUES
(31, '', '', '', '2014/12/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(32, '', '', '', '2014/12/04', '11:12:56pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jake1', '', '', 'Admin', 'Test11/0', 1, 0, 0, 'Admin', '', '', 0, 'Admin', 'none', 'Admin', '11:04:41am 2014/12/10', '03:49:04pm 2014/12/12', '03:48:54pm 2014/12/12', '', '', ''),
(33, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(34, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(35, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(36, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(37, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(38, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(39, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(40, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(41, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(42, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(43, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(44, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(45, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(46, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(47, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(48, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(49, '', '', '', '2015/01/04', '10:04:30pm', '', 'Jakester', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(50, '', '', '', '2015/01/04', '10:04:30pm', '', 'Spacious', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(51, '', '', '', '2015/01/04', '10:04:30pm', '', 'Van Wilder', '', '', '', '', '', '4052552424', '', '', '', '', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress Plexus Style ', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Jakey', '', '', 'Admin', 'Admin/0', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special whhhaaat?!?!', 'Admin', '05:13:27pm 2015/06/14', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', '', ''),
(52, '', '', '', '2015/02/07', '06:12:54pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', 'Jacob', '', '', 'Admin', 'Test123/0', 1, 0, 0, 'Admin', '', '', 0, '', '', '', '', '05:17:04pm 2015/06/14', '', '', '', ''),
(53, 'SDfhgg', 'VITAS', '', '2015/05/07', '07:10:37pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', '', '', 'M-6 Tank 165 Liter Refill', '1', '', '', '', '', '', '', '', '', 'X Wide #', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Shower Chair', '', '', '', '', 'Wheelchair', '16in Standard #', '', '18in Standard #', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Other', '', '08:21:43am', '1', 'Jakey', 'hgdd', 'Test, demo, yep. Thu 7:10 PM', 'Admin', 'Test123/0', 1, 0, 0, 'Admin', '', '', 1, 'Admin', '', 'Admin', '11:46:45pm 2015/05/12', '02:53:32pm 2015/05/09', '2015/05/13', '', '', ''),
(54, '', '', '', '2015/05/12', '11:54:49pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Jakester', '', '', 'Admin', '', 0, 0, 0, '', '', '', 1, 'Admin', '', 'Admin', '05:12:31pm 2015/07/05', '', '2015/05/13', '', '', '0'),
(55, '', '', '', '2015/07/05', '05:17:42pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Jakester', '', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '2015/07/05', '05:21:36pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Jakester', '', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', ''),
(57, '', '', '', '2015/07/05', '05:29:15pm', '', '', '', '', '', 'Test City', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Jakeon', '', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', 'Admin', '02:26:20am 2015/11/18', '', '', '', '', '1');

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
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;