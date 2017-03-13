-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2013 at 09:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Dob` varchar(15) NOT NULL,
  `Land` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Address`, `Dob`, `Land`, `Mobile`, `Mail`, `Password`, `Picture`) VALUES
('admin', 'qwerty', '13/10/1992', '22222222222', '1234567890', 'admin@g.com', 'admin', 'Administrator.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `Model` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Model`, `Price`, `Date`, `Mail`) VALUES
('', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Company` varchar(20) NOT NULL,
  `Logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company`, `Logo`) VALUES
('maruti', 'maruti_logo'),
('honda', 'honda_logo'),
('Benz', 'BenzDesert.jpg'),
('Benz', 'BenzDesert.jpg'),
('Benz', 'BenzDesert.jpg'),
('Benz', 'BenzDesert.jpg'),
('Benz', 'BenzDesert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sbi`
--

CREATE TABLE IF NOT EXISTS `sbi` (
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbi`
--

INSERT INTO `sbi` (`Name`, `Username`, `Password`, `Balance`) VALUES
('alwin', 'alwin', 'alwin123', 493000),
('amal', 'amal', 'amal123', 150000),
('tibin', 'tibin', 'tibin123', 8500000),
('amrita', 'amrita', 'amrita123', 300000),
('carworld', 'carworld', 'carworld123', 2700000);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `Company` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `About` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Company`, `Model`, `Picture`, `About`) VALUES
('Maruti', '800', '1.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('Honda', 'City', '2.jpg', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
('BMW', 'Q3', '3.jpg', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc'),
('Audi', 'X3', '4.jpg', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
('Mersedenze', 'C', '5.jpg', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
('Cheverlet', 'Beat', '6.jpg', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
('Volks Wagon', 'Polo', '7.jpg', 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `Company` varchar(20) NOT NULL,
  `Logo` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Picture` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `About` varchar(500) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Length` varchar(20) NOT NULL,
  `Width` varchar(20) NOT NULL,
  `Height` varchar(20) NOT NULL,
  `Seatingcap` varchar(20) NOT NULL,
  `Displacement` varchar(20) NOT NULL,
  `Fuel` varchar(20) NOT NULL,
  `Power` varchar(20) NOT NULL,
  `PowerRPM` varchar(20) NOT NULL,
  `Torque` varchar(20) NOT NULL,
  `TorqueRPM` varchar(20) NOT NULL,
  `Mileage` varchar(20) NOT NULL,
  `Transmission` varchar(20) NOT NULL,
  `Gears` varchar(20) NOT NULL,
  `Ac` varchar(20) NOT NULL,
  `Steering` varchar(20) NOT NULL,
  `Window` varchar(20) NOT NULL,
  `Brake` varchar(20) NOT NULL,
  `Airbag` varchar(20) NOT NULL,
  `Alloy` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  PRIMARY KEY (`Model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`Company`, `Logo`, `Model`, `Picture`, `Price`, `About`, `Type`, `Length`, `Width`, `Height`, `Seatingcap`, `Displacement`, `Fuel`, `Power`, `PowerRPM`, `Torque`, `TorqueRPM`, `Mileage`, `Transmission`, `Gears`, `Ac`, `Steering`, `Window`, `Brake`, `Airbag`, `Alloy`, `p1`, `p2`, `p3`) VALUES
('maruti', 'maruti_logo', '800', '800_1', 200000, 'It used to be the best selling car in India until 2004; upon its launch the Maruti Alto[5] took that title. It is also exported to a number of countries in South Asia including Nepal, Bangladesh and Sri Lanka, and to some South American markets (as Chile, sold as Suzuki Maruti), and was available in selected European markets between 1988 and 1992', 'hatchback', '3000', '2800', '1500', '4', '800', 'petrol', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('honda', 'honda_logo', 'city', 'city_1', 750000, 'Leading premium car manufacturer in India offering all new Honda City.The first generation Honda City was a subcompact car manufactured by the Japanese manufacturer Honda from 1981. Originally made for the Japanese', 'sedan', '4123', '1456', '1663', '6', '1600', 'petrol', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('maruti', '', 'fffff', 'fffffHydrangeas.jpg', 4552222, ',mm,n,mn', 'image/jpeg', 'jlb', 'jbjlbjb', 'nm,nm', 'nmnm', 'nmnm', 'bmbm,', ',mb,m', 'mm,', 'm,nm,', 'mn,m', 'mnm,', 'mnm,', 'm,nm,', 'm,nm,n', 'mn,mnm', 'mnm,', 'mnm,n,m', 'mnm,n', 'm,n,m', '', '', ''),
('maruti', '', 'hscvasv', 'hscvasvPenguins.jpg', 100, '', 'image/jpeg', 'bdjvbdb', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('audi', 'audi_logo', 'q7', 'q7_1', 4400000, 'The Audi Q7 is a full-size luxury crossover SUV unveiled in September 2005 at the Frankfurt Motor Show. Production of the Q7 began in autumn of 2005', 'hatchback', '5000', '1500', '1700', '6', '2500', 'diesel', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('maruti', 'maruti_logo', 'swift', 'swift_1.jpg', 500000, 'Maruti Swift emerged as the top selling car in Indian automobile market in April, 2012. The sales of this premier hatchback outpaced highest selling model Maruti Alto in April, thanks to the diesel variants of Swift. 19,484 units of Maruti Swift were sold in April as compared to 17,842 units of Alto. ', 'hatchback', '3999', '2000', '1650', '5', '1200', 'petrol', '80', '5000', '100', '7000', '19.5', 'manual', '4', 'yes', 'power steering', 'power window', 'abs', 'airbag', '3 spoke', 'swift_2', 'swift_3', 'swift_4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Dob` varchar(15) NOT NULL,
  `Land` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Address`, `Dob`, `Land`, `Mobile`, `Mail`, `Password`) VALUES
('alwin', 'aninilkum thadathil', '13/10/1992', '11111111111', '2222222222', 'alwin@google.com', 'alwin'),
('amal', 'thadathil', '4/3/1992', '55555555555', '5555555555', 'amal@google.com', 'amal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
