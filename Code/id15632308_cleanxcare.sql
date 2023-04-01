-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2020 at 12:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15632308_cleanxcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `FullName` varchar(30) NOT NULL,
  `BDate` date NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `AdminID` int(10) NOT NULL,
  `PhoneNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`FullName`, `BDate`, `Password`, `Email`, `AdminID`, `PhoneNum`) VALUES
('Renad Alhaqbani', '1999-04-28', 'Renad1999', 'Admin@CleanXCare', 1, 531234343);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommID` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `Comment` text NOT NULL,
  `Status` varchar(20) NOT NULL,
  `ResID` int(10) NOT NULL,
  `hkID` int(10) NOT NULL,
  `indID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommID`, `name`, `Comment`, `Status`, `ResID`, `hkID`, `indID`) VALUES
(19, 'Atheer', 'Good Service!', 'New', 63, 7, 9);

-- --------------------------------------------------------

--
-- Table structure for table `favlist`
--

CREATE TABLE `favlist` (
  `IndID` int(10) NOT NULL,
  `HkId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favlist`
--

INSERT INTO `favlist` (`IndID`, `HkId`) VALUES
(5, 8),
(5, 7),
(5, 6),
(3, 6),
(2, 7),
(4, 6),
(9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `hkaccount`
--

CREATE TABLE `hkaccount` (
  `FullName` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `AccountID` int(10) NOT NULL,
  `Years` int(10) NOT NULL,
  `HourPrice` int(10) NOT NULL,
  `TypeOfExp` varchar(30) NOT NULL,
  `Bio` text NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hkaccount`
--

INSERT INTO `hkaccount` (`FullName`, `Age`, `Password`, `Email`, `location`, `AccountID`, `Years`, `HourPrice`, `TypeOfExp`, `Bio`, `Status`) VALUES
('Alexis', 25, 'Aq1234', 'HK1@Gmail.com', 'R.S', 58, 10, 55, 'Cooking', 'Hey I love Cooking', 'New'),
('Mary', 25, 'Aq1234', 'HK@Gmail.com', 'R.S', 59, 10, 43, 'Dusting', 'Hey I love house keeping', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `hkcomp`
--

CREATE TABLE `hkcomp` (
  `HKCID` int(10) NOT NULL,
  `hkID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comp` text NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hkcomp`
--

INSERT INTO `hkcomp` (`HKCID`, `hkID`, `Email`, `Comp`, `Status`) VALUES
(10, 8, 'Alexis@gmail.com', 'Dears, I had an issue with the service', 'New'),
(11, 7, 'Cameka@gmail.com', 'Dears, the customer was rude! and insulted me!', 'New'),
(12, 6, 'Tonya@gmail.com', 'Dears, the customer didn  respond when i arrived at the location!', 'New'),
(16, 8, 'Alexis@gmail.com', '!!!!!!!!', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `hksch`
--

CREATE TABLE `hksch` (
  `SchID` int(10) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `HkId` int(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hksch`
--

INSERT INTO `hksch` (`SchID`, `Day`, `Date`, `Time`, `HkId`, `Status`) VALUES
(2, 'Thursday', '2020-12-31', '08:00:00', 6, 'Unavailable'),
(3, 'Friday', '2020-12-04', '16:00:00', 7, 'Unavailable'),
(4, 'Friday', '2020-12-18', '08:00:00', 8, 'Available'),
(76, 'Sunday', '2020-12-13', '08:00:00', 8, 'Unavailable'),
(77, 'Monday', '2020-12-14', '08:00:00', 8, 'Available'),
(78, 'Tuesday', '2020-12-15', '08:00:00', 8, 'Available'),
(79, 'Wednesday', '2020-12-16', '08:00:00', 8, 'Available'),
(80, 'Thursday', '2020-12-17', '08:00:00', 8, 'Available'),
(82, 'Sunday', '2020-12-20', '16:00:00', 9, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `housekeeper`
--

CREATE TABLE `housekeeper` (
  `FullName` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `HkID` int(10) NOT NULL,
  `Years` int(10) NOT NULL,
  `HourPrice` int(10) NOT NULL,
  `TypeOfExp` varchar(30) NOT NULL,
  `Bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `housekeeper`
--

INSERT INTO `housekeeper` (`FullName`, `Age`, `Password`, `Email`, `location`, `HkID`, `Years`, `HourPrice`, `TypeOfExp`, `Bio`) VALUES
('Tonya S', 45, 'Tonya1', 'Tonya@gmail.com', 'Almalaz', 6, 22, 97, 'Washing', 'I am seeking Housekeeping job opportunity. I can be available as needed.'),
('Cameka P', 25, 'Cameka', 'Cameka@gmail.com', 'Alnarjis', 7, 5, 70, 'Baby-Setting', ' I have experience in house keeping and child care'),
(' Alexis L', 35, 'Alexis1', 'Alexis@gmail.com', 'Alolaya 234 Street', 8, 9, 92, 'Dusting', ' I enjoy kitchen cleaning and have many years of experience.'),
('Rawan Alabdulrahman', 30, '1234Rawan', 'ralabdulrahman@ksu.edu.sa', 'riyadh', 9, 2, 70, 'baby-setting', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `indcomp`
--

CREATE TABLE `indcomp` (
  `IndCID` int(10) NOT NULL,
  `indID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comp` text NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indcomp`
--

INSERT INTO `indcomp` (`IndCID`, `indID`, `Email`, `Comp`, `Status`) VALUES
(4, 3, 'Lena@gmail.com', 'Dears, the house keeper was talking low to me', 'New'),
(6, 5, 'Maha@gmail.com', 'Dears, The house-keeper was so slow!', 'New'),
(7, 4, 'Renad@gmail.com', 'Why all the work is messed up?', 'New'),
(9, 7, 'asma@gmail.com', 'bad service!', 'New'),
(17, 9, 'Athrrs2@gmail.com', 'BAD!!!!!!!', 'New'),
(18, 9, 'Athrrs2@gmail.com', '!!!!!!!!!!', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE `individual` (
  `FullName` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `IndID` int(10) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individual`
--

INSERT INTO `individual` (`FullName`, `Age`, `Password`, `Email`, `IndID`, `location`) VALUES
('Reema', 33, 'Reema1', 'Reema@gmail.com', 2, 'Alrawabi'),
('Lena', 40, 'Leena1', 'Lena@gmail.com', 3, 'Alwadi'),
('Renad', 21, 'Renad1', 'Renad@gmail.com', 4, 'Alnafal'),
('Maha', 49, 'Maha1', 'Maha@gmail.com', 5, 'Alnakheel'),
('maha', 22, 'maghhB778', 'mm@hotmail.com', 6, 'riyadh'),
('asma', 32, 'Asmma34Xff', 'asma@gmail.com', 7, 'riyadh'),
('Atheer', 22, 'Atheer1', 'Athrrs2@gmail.com', 9, 'Almanar');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RateID` int(10) NOT NULL,
  `ResID` int(10) NOT NULL,
  `indID` int(10) NOT NULL,
  `hkID` int(10) NOT NULL,
  `Rate` double NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`RateID`, `ResID`, `indID`, `hkID`, `Rate`, `Name`) VALUES
(25, 30, 2, 6, 3, 'Reema'),
(31, 63, 9, 7, 4.5, 'Atheer');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ResID` int(10) NOT NULL,
  `indID` int(10) NOT NULL,
  `hkID` int(10) NOT NULL,
  `SchID` int(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ResID`, `indID`, `hkID`, `SchID`, `Status`) VALUES
(30, 2, 6, 2, 'Confirmed'),
(63, 9, 7, 3, 'Completed'),
(72, 9, 8, 76, 'Confirmed'),
(73, 9, 9, 82, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommID`),
  ADD KEY `ResID` (`ResID`),
  ADD KEY `hkID` (`hkID`),
  ADD KEY `indID` (`indID`);

--
-- Indexes for table `favlist`
--
ALTER TABLE `favlist`
  ADD KEY `IndID` (`IndID`),
  ADD KEY `HkId` (`HkId`);

--
-- Indexes for table `hkaccount`
--
ALTER TABLE `hkaccount`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `hkcomp`
--
ALTER TABLE `hkcomp`
  ADD PRIMARY KEY (`HKCID`),
  ADD KEY `hkID` (`hkID`);

--
-- Indexes for table `hksch`
--
ALTER TABLE `hksch`
  ADD PRIMARY KEY (`SchID`),
  ADD KEY `HkId` (`HkId`);

--
-- Indexes for table `housekeeper`
--
ALTER TABLE `housekeeper`
  ADD PRIMARY KEY (`HkID`);

--
-- Indexes for table `indcomp`
--
ALTER TABLE `indcomp`
  ADD PRIMARY KEY (`IndCID`),
  ADD KEY `indID` (`indID`);

--
-- Indexes for table `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`IndID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`RateID`),
  ADD KEY `ResID` (`ResID`),
  ADD KEY `indID` (`indID`),
  ADD KEY `hkID` (`hkID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ResID`),
  ADD KEY `indID` (`indID`),
  ADD KEY `hkID` (`hkID`),
  ADD KEY `SchID` (`SchID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hkaccount`
--
ALTER TABLE `hkaccount`
  MODIFY `AccountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `hkcomp`
--
ALTER TABLE `hkcomp`
  MODIFY `HKCID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hksch`
--
ALTER TABLE `hksch`
  MODIFY `SchID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `housekeeper`
--
ALTER TABLE `housekeeper`
  MODIFY `HkID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `indcomp`
--
ALTER TABLE `indcomp`
  MODIFY `IndCID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `individual`
--
ALTER TABLE `individual`
  MODIFY `IndID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `RateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ResID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `reservations` (`ResID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`hkID`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`indID`) REFERENCES `individual` (`IndID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favlist`
--
ALTER TABLE `favlist`
  ADD CONSTRAINT `favlist_ibfk_1` FOREIGN KEY (`IndID`) REFERENCES `individual` (`IndID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favlist_ibfk_2` FOREIGN KEY (`HkId`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hkcomp`
--
ALTER TABLE `hkcomp`
  ADD CONSTRAINT `hkcomp_ibfk_1` FOREIGN KEY (`hkID`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hksch`
--
ALTER TABLE `hksch`
  ADD CONSTRAINT `hksch_ibfk_1` FOREIGN KEY (`HkId`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `indcomp`
--
ALTER TABLE `indcomp`
  ADD CONSTRAINT `indcomp_ibfk_1` FOREIGN KEY (`indID`) REFERENCES `individual` (`IndID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`indID`) REFERENCES `individual` (`IndID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`hkID`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_3` FOREIGN KEY (`ResID`) REFERENCES `reservations` (`ResID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`hkID`) REFERENCES `housekeeper` (`HkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`indID`) REFERENCES `individual` (`IndID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`SchID`) REFERENCES `hksch` (`SchID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
