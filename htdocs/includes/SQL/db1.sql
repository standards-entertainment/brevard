-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2015 at 05:50 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BWA1`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuditTrail`
--

CREATE TABLE `AuditTrail` (
`ID` int(11) NOT NULL,
  `TableName` varchar(255) NOT NULL,
  `AuditID` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `AuditTrail`
--

INSERT INTO `AuditTrail` (`ID`, `TableName`, `AuditID`, `Username`, `Action`, `Time`) VALUES
(1, 'DeliverySlip', '32', 'Admin', 'Edit', '11:04:41am 2014/12/10'),
(2, 'NewCustInfo', '28', 'Admin', 'Edit', '11:06:25am 2014/12/10'),
(3, 'NewCustInfo', '28', 'Admin', 'Accomplish', ''),
(4, 'NewCustInfo', '28', 'Admin', 'Verify', ''),
(5, 'NewCustInfo', '28', 'Admin', 'Complete', ''),
(6, 'NewCustInfo', '28', 'Admin', 'Incomplete', ''),
(7, 'NewCustInfo', '28', 'Admin', 'Unverify', ''),
(8, 'NewCustInfo', '28', 'Admin', 'Unaccomplish', ''),
(9, 'NewCustInfo', '28', 'Admin', '', ''),
(10, 'NewCustInfo', '28', 'Admin', 'Retract', ''),
(11, 'NewCustInfo', '28', 'Admin', 'Send', ''),
(12, 'DeliverySlip', '31', 'Admin', 'Edit', '10:45:28pm 2014/12/10'),
(13, 'DeliverySlip', '31', 'Admin', 'Send', '12:07:18am 2014/12/11'),
(14, 'Invoice', '13', 'Admin', 'Edit', '01:46:04am 2014/12/12'),
(15, 'NewCustInfo', '29', 'Admin', 'Edit', '01:47:22am 2014/12/12'),
(16, 'PickupSlip', '25', 'Admin', 'Edit', '01:48:29am 2014/12/12'),
(17, 'PickupSlip', '25', 'Admin', 'Edit', '01:48:46am 2014/12/12'),
(18, 'DeliverySlip', '32', 'Admin', 'Unaccomplish', '03:48:54pm 2014/12/12'),
(19, 'DeliverySlip', '32', 'Admin', 'Retract', '03:48:56pm 2014/12/12'),
(20, 'DeliverySlip', '32', 'Admin', 'Send', '03:49:04pm 2014/12/12'),
(21, 'NewCustInfo', '29', 'Admin', 'Edit', '04:52:12pm 2014/12/16'),
(22, 'NewCustInfo', '29', 'Admin', 'Edit', '04:56:13pm 2014/12/16'),
(23, 'NewCustInfo', '29', 'Admin', 'Edit', '04:59:48pm 2014/12/16'),
(24, 'PickupSlip', '25', 'Admin', 'Edit', '05:01:23pm 2014/12/16'),
(25, 'Invoice', '13', 'Admin', 'Edit', '05:15:03pm 2014/12/16'),
(26, 'Invoice', '13', 'Admin', 'Edit', '05:19:40pm 2014/12/16'),
(27, 'Invoice', '13', 'Admin', 'Edit', '05:19:52pm 2014/12/16'),
(28, 'Invoice', '13', 'Admin', 'Edit', '05:27:30pm 2014/12/16'),
(29, 'Invoice', '13', 'Admin', 'Edit', '05:28:05pm 2014/12/16'),
(30, 'Invoice', '13', 'Admin', 'Edit', '10:20:35am 2015/01/08'),
(31, 'Invoice', '13', 'Admin', 'Edit', '10:30:37am 2015/01/08'),
(32, 'Invoice', '13', 'Admin', 'Edit', '10:36:14am 2015/01/08'),
(33, 'Invoice', '13', 'Admin', 'Edit', '10:38:02am 2015/01/08'),
(34, 'Invoice', '13', 'Admin', 'Edit', '10:39:52am 2015/01/08'),
(35, 'Invoice', '13', 'Admin', 'Edit', '10:40:08am 2015/01/08'),
(36, 'Invoice', '13', 'Admin', 'Edit', '11:16:53am 2015/01/08'),
(37, 'Invoice', '13', 'Admin', 'Edit', '11:17:25am 2015/01/08'),
(38, 'Invoice', '13', 'Admin', 'Edit', '11:28:33am 2015/01/08'),
(39, 'Invoice', '13', 'Admin', 'Edit', '11:32:51am 2015/01/08'),
(40, 'Invoice', '13', 'Admin', 'Edit', '11:36:29am 2015/01/08'),
(41, 'Invoice', '13', 'Admin', 'Edit', '12:34:46pm 2015/01/08'),
(42, 'PickupSlip', '31', 'Admin', 'Edit', '05:48:44pm 2015/02/07'),
(43, 'PickupSlip', '31', 'Admin', 'Edit', '05:54:33pm 2015/02/07'),
(44, 'NewCustInfo', '29', 'Admin', 'Edit', '06:08:56pm 2015/02/07'),
(45, 'Inventory1', '', 'Admin', 'Edit', '02:38:48pm 2015/03/11'),
(46, 'Inventory1', '3', 'Admin', 'Edit', '02:40:04pm 2015/03/11'),
(47, 'Inventory1', '3', 'Admin', 'Edit', '02:40:53pm 2015/03/11'),
(48, 'Inventory1', '3', 'Admin', 'Edit', '02:42:48pm 2015/03/11'),
(49, 'Inventory1', '3', 'Admin', 'Edit', '02:42:58pm 2015/03/11'),
(50, 'Inventory1', '1', 'Admin', 'Edit', '02:43:12pm 2015/03/11'),
(51, 'Inventory1', '1', 'Admin', 'Edit', '12:50:25pm 2015/03/13'),
(52, 'Inventory1', '1', 'Admin', 'Edit', '12:52:07pm 2015/03/13'),
(53, 'Inventory1', '1', 'Admin', 'Edit', '12:52:19pm 2015/03/13'),
(54, 'Inventory1', '3', 'Admin', 'Edit', '12:52:32pm 2015/03/13'),
(55, 'Inventory1', '41', 'Admin', 'Edit', '01:36:48pm 2015/03/13'),
(56, 'Inventory1', '69', 'Admin', 'Edit', '01:47:35pm 2015/03/13'),
(57, 'DeliverySlip', '51', 'Admin', 'Edit', '10:30:57pm 2015/03/16'),
(58, 'DeliverySlip', '53', 'Admin', 'Send', '02:53:32pm 2015/05/09'),
(59, 'DeliverySlip', '53', 'Admin', 'Edit', '06:33:41pm 2015/05/12'),
(60, 'DeliverySlip', '53', 'Admin', 'Edit', '11:32:15pm 2015/05/12'),
(61, 'DeliverySlip', '53', 'Admin', 'Edit', '11:32:21pm 2015/05/12'),
(62, 'DeliverySlip', '53', 'Admin', 'Edit', '11:32:31pm 2015/05/12'),
(63, 'DeliverySlip', '53', 'Admin', 'Edit', '11:32:34pm 2015/05/12'),
(64, 'DeliverySlip', '53', 'Admin', 'Edit', '11:32:45pm 2015/05/12'),
(65, 'DeliverySlip', '53', 'Admin', 'Edit', '11:33:38pm 2015/05/12'),
(66, 'DeliverySlip', '53', 'Admin', 'Edit', '11:34:24pm 2015/05/12'),
(67, 'DeliverySlip', '53', 'Admin', 'Edit', '11:35:11pm 2015/05/12'),
(68, 'DeliverySlip', '53', 'Admin', 'Edit', '11:35:14pm 2015/05/12'),
(69, 'DeliverySlip', '53', 'Admin', 'Edit', '11:36:43pm 2015/05/12'),
(70, 'DeliverySlip', '53', 'Admin', 'Edit', '11:36:45pm 2015/05/12'),
(71, 'DeliverySlip', '53', 'Admin', 'Edit', '11:39:21pm 2015/05/12'),
(72, 'DeliverySlip', '53', 'Admin', 'Edit', '11:39:27pm 2015/05/12'),
(73, 'DeliverySlip', '53', 'Admin', 'Edit', '11:39:30pm 2015/05/12'),
(74, 'DeliverySlip', '53', 'Admin', 'Edit', '11:39:49pm 2015/05/12'),
(75, 'DeliverySlip', '53', 'Admin', 'Edit', '11:39:57pm 2015/05/12'),
(76, 'DeliverySlip', '53', 'Admin', 'Edit', '11:40:06pm 2015/05/12'),
(77, 'DeliverySlip', '53', 'Admin', 'Edit', '11:42:28pm 2015/05/12'),
(78, 'DeliverySlip', '53', 'Admin', 'Edit', '11:42:35pm 2015/05/12'),
(79, 'DeliverySlip', '53', 'Admin', 'Edit', '11:42:39pm 2015/05/12'),
(80, 'DeliverySlip', '53', 'Admin', 'Edit', '11:43:54pm 2015/05/12'),
(81, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:10pm 2015/05/12'),
(82, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:15pm 2015/05/12'),
(83, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:19pm 2015/05/12'),
(84, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:39pm 2015/05/12'),
(85, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:44pm 2015/05/12'),
(86, 'DeliverySlip', '53', 'Admin', 'Edit', '11:44:47pm 2015/05/12'),
(87, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:22pm 2015/05/12'),
(88, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:24pm 2015/05/12'),
(89, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:31pm 2015/05/12'),
(90, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:34pm 2015/05/12'),
(91, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:41pm 2015/05/12'),
(92, 'DeliverySlip', '53', 'Admin', 'Edit', '11:46:45pm 2015/05/12'),
(93, 'PickupSlip', '31', 'Admin', 'Edit', '11:48:55pm 2015/05/12'),
(94, 'PickupSlip', '31', 'Admin', 'Edit', '11:48:57pm 2015/05/12'),
(95, 'PickupSlip', '31', 'Admin', 'Edit', '11:49:14pm 2015/05/12'),
(96, 'PickupSlip', '31', 'Admin', 'Edit', '11:49:19pm 2015/05/12'),
(97, 'PickupSlip', '31', 'Admin', 'Edit', '11:49:22pm 2015/05/12'),
(98, 'PickupSlip', '31', 'Admin', 'Edit', '11:49:59pm 2015/05/12'),
(99, 'PickupSlip', '31', 'Admin', 'Edit', '11:50:02pm 2015/05/12'),
(100, 'PickupSlip', '31', 'Admin', 'Edit', '11:50:08pm 2015/05/12'),
(101, 'PickupSlip', '31', 'Admin', 'Edit', '11:50:11pm 2015/05/12'),
(102, 'NewCustInfo', '29', 'Admin', 'Edit', '11:50:46pm 2015/05/12'),
(103, 'NewCustInfo', '29', 'Admin', 'Edit', '11:50:49pm 2015/05/12'),
(104, 'NewCustInfo', '29', 'Admin', 'Edit', '11:50:56pm 2015/05/12'),
(105, 'NewCustInfo', '29', 'Admin', 'Edit', '11:50:59pm 2015/05/12'),
(106, 'NewCustInfo', '29', 'Admin', 'Edit', '12:06:03am 2015/05/13'),
(107, 'NewCustInfo', '29', 'Admin', 'Edit', '12:06:09am 2015/05/13'),
(108, 'DeliverySlip', '54', 'Admin', 'Accomplish', '12:36:53am 2015/05/13'),
(109, 'NewCustInfo', '31', 'Admin', 'Send', '12:37:15am 2015/05/13'),
(110, 'NewCustInfo', '31', 'Admin', 'Verify', '12:37:20am 2015/05/13'),
(111, 'DeliverySlip', '54', 'Admin', 'Unaccomplish', '08:13:29am 2015/05/13'),
(112, 'DeliverySlip', '54', 'Admin', 'Unaccomplish', '08:13:33am 2015/05/13'),
(113, 'DeliverySlip', '54', 'Admin', 'Unaccomplish', '08:14:47am 2015/05/13'),
(114, 'DeliverySlip', '54', 'Admin', 'Accomplish', '08:14:50am 2015/05/13'),
(115, 'DeliverySlip', '54', 'Admin', 'Accomplish', '08:14:53am 2015/05/13'),
(116, 'DeliverySlip', '53', 'Admin', 'Accomplish', '08:21:43am 2015/05/13'),
(117, 'DeliverySlip', '54', 'Admin', 'Edit', '08:28:04am 2015/05/13'),
(118, 'DeliverySlip', '54', 'Admin', 'Edit', '08:28:13am 2015/05/13'),
(119, 'DeliverySlip', '54', 'Admin', 'Edit', '08:28:19am 2015/05/13'),
(120, 'DeliverySlip', '54', 'Admin', 'Edit', '08:28:23am 2015/05/13'),
(121, 'DeliverySlip', '54', 'Admin', 'Edit', '08:28:26am 2015/05/13'),
(122, 'DeliverySlip', '51', 'Admin', 'Edit', '12:15:00pm 2015/06/12'),
(123, '', '1', 'Admin', '', '2015/06/14'),
(124, '', '1', 'Admin', '', '2015/06/14'),
(125, '', '1', 'Admin', '', '2015/06/14'),
(126, '', '1', 'Admin', '', '2015/06/14'),
(127, '', '1', 'Admin', '', '2015/06/14'),
(128, '', '1', 'Admin', '', '2015/06/14'),
(129, 'DeliverySlip', '51', 'Admin', 'Edit', '05:13:27pm 2015/06/14'),
(130, 'DeliverySlip', '52', 'Admin', 'Send', '05:17:04pm 2015/06/14'),
(131, 'PickupSlip', '32', 'Admin', 'Send', '05:43:22pm 2015/06/14'),
(132, 'NewCustInfo', '32', 'Admin', 'Send', '05:43:40pm 2015/06/14');

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
  `CompleteTime` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `DeliverySlip`
--

INSERT INTO `DeliverySlip` (`ID`, `PatientNum`, `Referral`, `PreparedBy`, `Date1`, `Time`, `DateofDelivery`, `CustName`, `Height`, `Weight`, `Address`, `City`, `Zip`, `Phone`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`, `eq76`, `eq77`, `eq78`, `eq79`, `eq80`, `eq81`, `CSig1`, `Date2`, `DriverOffice`, `LNUSPO2Del`, `LNECPU`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `Completer`, `Verifier`, `Accomplished`, `Accomplisher`, `specialinstructions`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`) VALUES
(31, '', '', '', '2014/12/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(32, '', '', '', '2014/12/04', '11:12:56pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jake1', '', '', 'Admin', 'Test11', 1, 0, 0, 'Admin', '', '', 0, 'Admin', 'none', 'Admin', '11:04:41am 2014/12/10', '03:49:04pm 2014/12/12', '03:48:54pm 2014/12/12', '', ''),
(33, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(34, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(35, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(36, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(37, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(38, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(39, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(40, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(41, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(42, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(43, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(44, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(45, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(46, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(47, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(48, '', '', '', '2015/01/04', '10:04:30pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(49, '', '', '', '2015/01/04', '10:04:30pm', '', 'Jakester', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(50, '', '', '', '2015/01/04', '10:04:30pm', '', 'Spacious', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', 'Full Rails', 'Half Rails', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress (Plexus Style', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014/12/10', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special Instructions', 'Admin', '10:45:28pm 2014/12/10', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(51, '', '', '', '2015/01/04', '10:04:30pm', '', 'Van Wilder', '', '', '', '', '', '4052552424', '', '', '', '', 'Lowbed', 'Trapeze', 'Bed Attached #', '', 'Free Standing #', '', 'APPP Overlay #', '', 'AP Mattress Plexus Style ', '', 'O2 Concentrator #', 'o2conc', '1 - 4 LPM', '10 LPM', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', 'E-Tank 682 Liter Refill U', 'etnk', 'M-6 Tank 165 Liter Refill', 'm6tnk', 'D Tank 415 Liter Refill U', 'dtnk', 'Liter Refill USP Medical ', '1ltr', '1ltr2', 'Bedside Commode', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Jakey', '', '', 'Admin', 'Admin', 1, 0, 0, 'Admin', '', 'Admin', 0, '', 'Special whhhaaat?!?!', 'Admin', '05:13:27pm 2015/06/14', '12:07:18am 2014/12/11', '', '11:02:25pm 2014/12/04', ''),
(52, '', '', '', '2015/02/07', '06:12:54pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', 'Jacob', '', '', 'Admin', 'Test123', 1, 0, 0, 'Admin', '', '', 0, '', '', '', '', '05:17:04pm 2015/06/14', '', '', ''),
(53, 'SDfhgg', 'VITAS', '', '2015/05/07', '07:10:37pm', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Portable E-Tank System', 'Portable M-6 Tank w/ Cons', '', '', 'M-6 Tank 165 Liter Refill', '1', '', '', '', '', '', '', '', '', 'X Wide #', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Shower Chair', '', '', '', '', 'Wheelchair', '16in Standard #', '', '18in Standard #', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Other', '', '08:21:43am', '1', 'Jakey', 'hgdd', 'Test, demo, yep. Thu 7:10 PM', 'Admin', 'Test123', 1, 0, 0, 'Admin', '', '', 1, 'Admin', '', 'Admin', '11:46:45pm 2015/05/12', '02:53:32pm 2015/05/09', '2015/05/13', '', ''),
(54, '', '', '', '2015/05/12', '11:54:49pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Jakester', '', '', 'Admin', '', 0, 0, 0, '', '', '', 1, 'Admin', '', 'Admin', '08:28:26am 2015/05/13', '', '2015/05/13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Info`
--

CREATE TABLE `Info` (
  `Zone` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Van` varchar(50) NOT NULL,
  `Beg 02 Count` varchar(50) NOT NULL,
  `Time Out` varchar(50) NOT NULL,
  `Tech` varchar(50) NOT NULL,
  `Cell` varchar(50) NOT NULL,
  `Time In` varchar(50) NOT NULL,
  `End 02 Count` varchar(50) NOT NULL,
  `Referral` varchar(50) NOT NULL,
  `Time Called In` varchar(50) NOT NULL,
  `Delivery Time` varchar(50) NOT NULL,
  `CustomerNumber` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Streetnumber` varchar(50) NOT NULL,
  `Streetname` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Del_PU` varchar(50) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `Poster` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
`id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

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
(70, '', 'Broda Pedal Chair', '', '', 0, 0, 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `Invoice`
--

CREATE TABLE `Invoice` (
`ID` int(255) NOT NULL,
  `Date1` varchar(255) NOT NULL,
  `InvTo` varchar(255) NOT NULL,
  `BillTo` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `q12` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `p7` varchar(255) NOT NULL,
  `p8` varchar(255) NOT NULL,
  `up1` varchar(255) NOT NULL,
  `up2` varchar(255) NOT NULL,
  `up3` varchar(255) NOT NULL,
  `up4` varchar(255) NOT NULL,
  `up5` varchar(255) NOT NULL,
  `up6` varchar(255) NOT NULL,
  `up7` varchar(255) NOT NULL,
  `up8` varchar(255) NOT NULL,
  `up9` varchar(255) NOT NULL,
  `up10` varchar(255) NOT NULL,
  `up11` varchar(255) NOT NULL,
  `up12` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a5` varchar(255) NOT NULL,
  `a6` varchar(255) NOT NULL,
  `a7` varchar(255) NOT NULL,
  `a8` varchar(255) NOT NULL,
  `a9` varchar(255) NOT NULL,
  `a10` varchar(255) NOT NULL,
  `a11` varchar(255) NOT NULL,
  `a12` varchar(255) NOT NULL,
  `a13` varchar(255) NOT NULL,
  `a14` varchar(255) NOT NULL,
  `a15` varchar(255) NOT NULL,
  `a16` varchar(255) NOT NULL,
  `mop1` varchar(255) NOT NULL,
  `mop2` varchar(255) NOT NULL,
  `mop3` varchar(255) NOT NULL,
  `mop4` varchar(255) NOT NULL,
  `mop5` varchar(255) NOT NULL,
  `mop6` varchar(255) NOT NULL,
  `mop7` varchar(255) NOT NULL,
  `box1` varchar(255) NOT NULL,
  `box2` varchar(255) NOT NULL,
  `box3` varchar(255) NOT NULL,
  `box4` varchar(255) NOT NULL,
  `dwc1` varchar(255) NOT NULL,
  `CSig1` varchar(255) NOT NULL,
  `Date2` varchar(255) NOT NULL,
  `CSig2` varchar(255) NOT NULL,
  `Date3` varchar(255) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Driver` varchar(255) NOT NULL,
  `Sent` int(1) NOT NULL,
  `Complete` int(1) NOT NULL,
  `Verified` int(1) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `estimate` varchar(255) NOT NULL,
  `Editor` varchar(255) NOT NULL,
  `EditTime` varchar(255) NOT NULL,
  `SendTime` varchar(255) NOT NULL,
  `AccomplishTime` varchar(255) NOT NULL,
  `VerifyTime` varchar(255) NOT NULL,
  `CompleteTime` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Invoice`
--

INSERT INTO `Invoice` (`ID`, `Date1`, `InvTo`, `BillTo`, `Phone`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `up1`, `up2`, `up3`, `up4`, `up5`, `up6`, `up7`, `up8`, `up9`, `up10`, `up11`, `up12`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `mop1`, `mop2`, `mop3`, `mop4`, `mop5`, `mop6`, `mop7`, `box1`, `box2`, `box3`, `box4`, `dwc1`, `CSig1`, `Date2`, `CSig2`, `Date3`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Time`, `estimate`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`) VALUES
(13, '2014/12/12', 'Customer Name', 'Bill To\r\nThis Person\r\nOn This Date', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000', '', '', '', '', '1251255a', 'CHECK #', '', 'Prob', 'Serial', 'Model Make', 'Date of Purchase', 'Today', '', '2015/01/08', '', '', 'Admin', '', 0, 0, 0, '01:45:19am', '', 'Admin', '12:34:46pm 2015/01/08', '', '', '', ''),
(14, '2015/01/08', 'You', 'Me', 'Phone', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'CHECK #', '12512512j', '', '', '', '', '', 'Today', '', '2015/01/08', '', '2015/01/08', 'Admin', '', 0, 0, 0, '10:41:48am', 'THIS IS AN ESTIMATE', '', '', '', '', '', '');

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
  `specialinstructions` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `NewCustInfo`
--

INSERT INTO `NewCustInfo` (`ID`, `Referral`, `PreparedBy`, `Date1`, `Time`, `CustName`, `DateofService`, `Height`, `Weight`, `Address`, `City`, `State`, `Zip`, `Phone`, `Sex`, `DateofBirth`, `AltContact`, `Phone2`, `Relationship`, `Diagnosis`, `Pcp1`, `Pcp1Phone`, `Ins1`, `Ins1Number`, `Ins2`, `Ins2Number`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`, `eq76`, `eq77`, `eq78`, `eq79`, `eq80`, `eq81`, `LotNumbers`, `CSig1`, `Date2`, `DriverOffice`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `Completer`, `Verifier`, `Accomplished`, `Accomplisher`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`, `specialinstructions`) VALUES
(28, '', '', '2014/12/10', '11:05:43am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', '', '2014/12/10', 'Jake1', 'Admin', 'Admin', 1, 0, 0, 'Admin', 'Admin', 'Admin', 0, 'Admin', 'Admin', '11:06:25am 2014/12/10', '11:11:53am 2014/12/10', '11:09:01am 2014/12/10', '11:09:07am 2014/12/10', '11:09:11am 2014/12/10', ''),
(29, '', '', '2014/12/12', '01:47:06am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', '', '', 'Lowbed', '', '', '', '', '', '', '', '', '', 'O2 Concentrator #', '', '', '', 'Portable E-Tank System', '', '', '', '', '', 'D Tank 415 Liter Refill U', '', '', '', '', '', '', '', '', '', 'Walker', '', '', '', '', '', '', 'Nebulizer Tubing', '', '', '', '', '', '', 'Shower Chair', '', '', '', '', 'Wheelchair', '', '', '', '', '20in Wide #', '', '', '', '', '', '', '', 'Transport/Travel Chair #', '', '', '', '', '', '', '', '', 'Regal #', '', '', '', 'Other', '', '', '', '1', 'Jakester', 'Admin', '', 0, 0, 0, '', '', '', 0, '', 'Admin', '12:06:09am 2015/05/13', '', '', '', '', ''),
(30, '', '', '2015/05/13', '12:16:59am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'jakester', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(31, '', '', '2015/05/13', '12:17:25am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'ajjaa', 'Admin', 'Admin', 1, 0, 1, 'Admin', '', 'Admin', 0, '', '', '', '12:37:15am 2015/05/13', '', '12:37:20am 2015/05/13', '', ''),
(32, '', '', '2015/05/13', '12:41:57am', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Jakey', 'Admin', 'Test123', 1, 0, 0, 'Admin', '', '', 0, '', '', '', '05:43:40pm 2015/06/14', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `PickupSlip`
--

CREATE TABLE `PickupSlip` (
`ID` int(255) NOT NULL,
  `PatientNum` varchar(255) NOT NULL,
  `Referral` varchar(255) NOT NULL,
  `PreparedBy` varchar(255) NOT NULL,
  `Date1` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `dateofpickup` varchar(255) NOT NULL,
  `CustName` varchar(255) NOT NULL,
  `specialinstructions` varchar(255) NOT NULL,
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
  `eq76` varchar(25) NOT NULL,
  `eq77` varchar(25) NOT NULL,
  `eq78` varchar(25) NOT NULL,
  `eq79` varchar(25) NOT NULL,
  `eq80` varchar(25) NOT NULL,
  `eq81` varchar(25) NOT NULL,
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
  `lotnumbers` varchar(255) NOT NULL,
  `Editor` varchar(255) NOT NULL,
  `EditTime` varchar(255) NOT NULL,
  `SendTime` varchar(255) NOT NULL,
  `AccomplishTime` varchar(255) NOT NULL,
  `VerifyTime` varchar(255) NOT NULL,
  `CompleteTime` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `PickupSlip`
--

INSERT INTO `PickupSlip` (`ID`, `PatientNum`, `Referral`, `PreparedBy`, `Date1`, `Time`, `dateofpickup`, `CustName`, `specialinstructions`, `Address`, `City`, `Zip`, `Phone`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`, `eq76`, `eq77`, `eq78`, `eq79`, `eq80`, `eq81`, `CSig1`, `Date2`, `DriverOffice`, `Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `Completer`, `Verifier`, `Accomplished`, `Accomplisher`, `lotnumbers`, `Editor`, `EditTime`, `SendTime`, `AccomplishTime`, `VerifyTime`, `CompleteTime`) VALUES
(25, '', '', '', '2014/12/12', '01:48:13am', '', '', '', '', '', '', '', 'Hospital Bed, Electric # ', '', '', '', 'Lowbed', '', '', '', 'Free Standing #', '', '', '', '', '', 'O2 Concentrator #', '', '', '', '', '', 'E-Tank 682 Liter Refill U', '', '', '', '', '', '', '', '', 'Bedside Commode', '', '', 'X Wide #', '', '', '', '', '', '', 'Nebulizer #', '', '', '', '', '', '', '', '', 'Shower Chair', '', '', '', '', 'Wheelchair', '', '', '', '', '', '', '', '', '24in XX Wide #', '', '', '', '', '', 'Reclining Geri-Chair #', '', '', '', '', 'Maxi #', '', '', '', '', '', 'Other', '', '', '2014/12/16', 'jakemeister', 'Admin', '', 0, 0, 0, '', '', '', 0, '', 'lotnum', 'Admin', '05:01:23pm 2014/12/16', '', '', '', ''),
(26, '', '', '', '2015/02/07', '01:48:16pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(27, '', '', '', '2015/02/07', '02:14:09pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(28, '', '', '', '2015/02/07', '02:16:20pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(29, '', '', '', '2015/02/07', '02:17:23pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', '', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(30, '', '', '', '2015/02/07', '02:42:49pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015/02/07', 'Jakemeister', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(31, '', '', '', '2015/02/07', '05:39:52pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'APPP Overlay #', 'Test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'X Wide #', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'Jakester', 'Admin', '', 0, 0, 0, '', '', '', 0, '', '', 'Admin', '11:50:11pm 2015/05/12', '', '', '', ''),
(32, '', '', '', '2015/05/12', '11:55:57pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'JAkey', 'Admin', 'Test123', 1, 0, 0, 'Admin', '', '', 0, '', '', '', '', '05:43:22pm 2015/06/14', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `cell` bigint(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_level`, `type`, `cell`) VALUES
(3, 'Admin', 'cec88941957296cab3a11f4586b950a7', 4, 'a', 3214431645),
(12, 'Test11', 'e10adc3949ba59abbe56e057f20f883e', 3, 'a', 3214431645),
(14, 'Test12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'a', 3214431645),
(15, 'Test123', 'e10adc3949ba59abbe56e057f20f883e', 1, 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
`UNIQUE_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`, `UNIQUE_ID`) VALUES
(1, 'Driver', 1),
(2, 'Editor', 2),
(3, 'Admin', 3),
(4, 'Super', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AuditTrail`
--
ALTER TABLE `AuditTrail`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `CruiseSlip`
--
ALTER TABLE `CruiseSlip`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `DeliverySlip`
--
ALTER TABLE `DeliverySlip`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Info`
--
ALTER TABLE `Info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Unique` (`id`);

--
-- Indexes for table `inventory1`
--
ALTER TABLE `inventory1`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Invoice`
--
ALTER TABLE `Invoice`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `NewCustInfo`
--
ALTER TABLE `NewCustInfo`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `PickupSlip`
--
ALTER TABLE `PickupSlip`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Unique` (`id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
 ADD PRIMARY KEY (`UNIQUE_ID`), ADD UNIQUE KEY `UNIQUE_ID` (`UNIQUE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AuditTrail`
--
ALTER TABLE `AuditTrail`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `CruiseSlip`
--
ALTER TABLE `CruiseSlip`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `DeliverySlip`
--
ALTER TABLE `DeliverySlip`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `Info`
--
ALTER TABLE `Info`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory1`
--
ALTER TABLE `inventory1`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `Invoice`
--
ALTER TABLE `Invoice`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `NewCustInfo`
--
ALTER TABLE `NewCustInfo`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `PickupSlip`
--
ALTER TABLE `PickupSlip`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
MODIFY `UNIQUE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;