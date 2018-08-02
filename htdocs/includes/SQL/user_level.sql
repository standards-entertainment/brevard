-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2016 at 10:12 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bme1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
`UNIQUE_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`, `UNIQUE_ID`) VALUES
(1, 'Driver', 1),
(2, 'Editor', 2),
(3, 'Moderator', 3),
(4, 'Administrator', 4),
(5, 'Super User', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
 ADD PRIMARY KEY (`UNIQUE_ID`), ADD UNIQUE KEY `UNIQUE_ID` (`UNIQUE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
MODIFY `UNIQUE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
