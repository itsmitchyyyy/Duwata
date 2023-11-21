-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 11:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duwata`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountype`
--

CREATE TABLE `accountype` (
  `accounttypeID` int(11) NOT NULL,
  `accounttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `playerID` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`playerID`, `userid`, `adminID`, `admin_user`, `admin_pass`) VALUES
(0, 0, 1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_ID` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_ID`, `booking_date`, `booking_time`, `status`) VALUES
(1, '2023-11-11', '14:00:00', 'Accepted'),
(2, '2023-11-10', '10:00:00', 'Accepted'),
(3, '2023-11-03', '11:00:00', 'Accepted'),
(4, '2023-11-10', '12:00:00', 'Accepted'),
(5, '2023-11-09', '10:00:00', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `booking_schedule`
--

CREATE TABLE `booking_schedule` (
  `id` int(11) NOT NULL,
  `schedule_time_id` int(11) NOT NULL,
  `playerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_schedule`
--

INSERT INTO `booking_schedule` (`id`, `schedule_time_id`, `playerId`) VALUES
(18, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gym_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `gym_name` varchar(50) NOT NULL,
  `gym_location` varchar(50) NOT NULL,
  `gym_contactperson` varchar(50) NOT NULL,
  `gym_contactnumber` int(11) NOT NULL,
  `gym_email` varchar(50) NOT NULL,
  `gym_sports` varchar(50) NOT NULL,
  `gym_price` int(11) NOT NULL,
  `gym_rules` varchar(150) NOT NULL,
  `gym_picture` varchar(50) NOT NULL,
  `map_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gym_id`, `userid`, `gym_name`, `gym_location`, `gym_contactperson`, `gym_contactnumber`, `gym_email`, `gym_sports`, `gym_price`, `gym_rules`, `gym_picture`, `map_picture`) VALUES
(25, 3, 'Allen\'s Gym', 'Day-As', 'Maid AC', 94545465, 'yawax@gmail.com', 'Volleyball', 350, 'asdasdasd', 'IMG-654e38f8af9dc5.41121384.png', 'IMG-654e38f8b04666.66430694.png'),
(26, 10, 'Gym ONe', 'Location', 'Contact Person', 12345, 'asd@gmail.com', 'Basketball', 123, '123213', 'IMG-6551d48085f440.25362064.png', 'IMG-6551d480860317.19617454.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `playerId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `playerId`, `message`, `createdAt`) VALUES
(7, 1, 'jhayson auxtero navaja has added a booking', '2023-11-21 04:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerID` int(11) NOT NULL,
  `player_firstname` varchar(50) NOT NULL,
  `player_middlename` varchar(50) NOT NULL,
  `player_lastname` varchar(50) NOT NULL,
  `player_email` varchar(50) NOT NULL,
  `player_gender` varchar(10) NOT NULL,
  `player_phonenumber` int(11) NOT NULL,
  `player_birthdate` date NOT NULL,
  `player_password` varchar(50) NOT NULL,
  `player_address` varchar(50) NOT NULL,
  `player_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `player_firstname`, `player_middlename`, `player_lastname`, `player_email`, `player_gender`, `player_phonenumber`, `player_birthdate`, `player_password`, `player_address`, `player_picture`) VALUES
(1, 'jhayson', 'auxtero', 'navaja', 'maxxzion@gmail.com', 'MALE', 12312312, '2023-11-17', 'akos', 'kalunasan', 'IMG-6545c4405e61f2.81772029.png');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('booked','done','open','') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `status`) VALUES
(1, '2023-11-18', 'open'),
(2, '2023-11-20', 'open'),
(3, '2023-11-21', 'open'),
(4, '2023-11-22', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_time`
--

CREATE TABLE `schedule_time` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `status` enum('booked','open') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_time`
--

INSERT INTO `schedule_time` (`id`, `schedule_id`, `time_start`, `time_end`, `status`) VALUES
(1, 2, '06:00:00', '10:00:00', 'booked'),
(2, 2, '11:00:00', '14:00:00', 'open'),
(3, 2, '15:00:00', '18:00:00', 'open'),
(4, 2, '18:00:00', '20:00:00', 'open'),
(5, 2, '20:00:00', '21:00:00', 'open'),
(12, 3, '06:00:00', '08:00:00', 'booked'),
(13, 3, '09:00:00', '12:00:00', 'open'),
(14, 4, '07:00:00', '11:00:00', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sportID` int(11) NOT NULL,
  `sport_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sportID`, `sport_name`) VALUES
(1, 'Basketball'),
(2, 'Volleyball'),
(3, 'Badminton'),
(4, 'Tennis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_middlename` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_phonenumber` int(11) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_address` varchar(80) NOT NULL,
  `user_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `user_firstname`, `user_middlename`, `user_lastname`, `user_email`, `user_gender`, `user_phonenumber`, `user_birthdate`, `user_password`, `user_address`, `user_picture`) VALUES
(1, 'neco', 'john', 'abang', 'neco@gmail.com', '4', 123123, '2023-09-13', 'a', 'mabolo', ''),
(2, 'b', '', 'b', 'b', '4', 111111, '2023-09-19', 'b', '', ''),
(3, 'rey allen', 'check', 'dumalagan', 'cc@gmail.com', '3', 3333333, '2023-09-19', 'cc', 'talisay cities', 'IMG-654e28f70a6aa0.15131817.jpg'),
(6, 'm', '', 'm', 'm@gmail.com', 'm', 1111, '2023-09-05', 'm', '', ''),
(8, 'jhayson', 'auxtero', 'navaja', 'navaja@gmail.com', 'male', 923232, '2001-09-15', 'jhayson', 'lower kalunasan', ''),
(9, 'allen', 'migoy', 'bossing', 'allen@gmail.com', '', 1111111, '2023-10-13', 'bogo', 'day as check', ''),
(10, 'popo', 'papa', 'pepe', 'pupu@gmail.com', 'FEMALE', 88888888, '2023-10-27', 'pawpaw', 'bisag asa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountype`
--
ALTER TABLE `accountype`
  ADD PRIMARY KEY (`accounttypeID`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_ID`);

--
-- Indexes for table `booking_schedule`
--
ALTER TABLE `booking_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gym_id`),
  ADD KEY `gym_ibfk_1` (`userid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_time`
--
ALTER TABLE `schedule_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sportID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountype`
--
ALTER TABLE `accountype`
  MODIFY `accounttypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking_schedule`
--
ALTER TABLE `booking_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `gym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule_time`
--
ALTER TABLE `schedule_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gym`
--
ALTER TABLE `gym`
  ADD CONSTRAINT `gym_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
