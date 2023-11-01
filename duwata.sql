-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 03:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_user`, `admin_pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gym_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gym_name` varchar(50) NOT NULL,
  `gym_location` varchar(50) NOT NULL,
  `gym_contactperson` varchar(50) NOT NULL,
  `gym_contactnumber` int(11) NOT NULL,
  `gym_email` varchar(50) NOT NULL,
  `gym_sports` varchar(50) NOT NULL,
  `gym_price` int(11) NOT NULL,
  `gym_rules` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gym_id`, `user_id`, `gym_name`, `gym_location`, `gym_contactperson`, `gym_contactnumber`, `gym_email`, `gym_sports`, `gym_price`, `gym_rules`) VALUES
(6, 3, 'yawax', 'bisag asa', 'personnel', 1111, 'yawax@gmail.com', 'kiriti', 500, 'dfytdfdyf'),
(8, 3, 'YMCA', 'labangon', 'jhayson', 2222, 'jhayson@gmail.com', 'siming', 350, 'asdasdas');

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
  `user_address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `user_firstname`, `user_middlename`, `user_lastname`, `user_email`, `user_gender`, `user_phonenumber`, `user_birthdate`, `user_password`, `user_address`) VALUES
(1, 'neco', 'john', 'abang', 'neco@gmail.com', '4', 123123, '2023-09-13', 'a', 'mabolo'),
(2, 'b', '', 'b', 'b', '4', 111111, '2023-09-19', 'b', ''),
(3, 'c', '', 'c', 'c@gmail.com', '3', 3333333, '2023-09-19', 'c', 'talisay city'),
(6, 'm', '', 'm', 'm@gmail.com', 'm', 1111, '2023-09-05', 'm', ''),
(8, 'jhayson', 'auxtero', 'navaja', 'navaja@gmail.com', 'male', 923232, '2001-09-15', 'jhayson', 'lower kalunasan'),
(9, 'allen', 'migoy', 'bossing', 'allen@gmail.com', '', 1111111, '2023-10-13', 'bogo', 'day as check'),
(10, 'popo', 'papa', 'pepe', 'pupu@gmail.com', 'FEMALE', 88888888, '2023-10-27', 'pawpaw', 'bisag asa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gym_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `gym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `gym_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
