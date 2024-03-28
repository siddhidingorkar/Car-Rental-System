-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 06:17 PM
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
-- Database: `car_rental_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_status` (IN `bookingid` INT)   UPDATE booking set status="Car Returned" where book_id=bookingid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `carname` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `carcategory` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT 'On rent'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `username`, `datefrom`, `dateto`, `carname`, `regno`, `carcategory`, `status`) VALUES
(2331, 'chaitya', '2023-05-08', '2023-05-11', 'Fronx', 'MH48R3676', 'Suv', 'Car Returned'),
(3018, 'chaitya', '2023-05-03', '2023-05-06', 'Fortuner', 'MH46R3638', 'Suv', 'Car Returned'),
(3430, 'chaitya', '2023-05-09', '2023-05-11', 'Fortuner', 'MH46R3638', 'Suv', 'On rent'),
(3601, 'chaitya', '2023-05-08', '2023-05-21', 'Slavia', 'MH35R3636', 'Sedan', 'Car Returned'),
(5023, 'chaitya', '2023-05-08', '2023-05-11', 'Honda City', 'MH38R3636', 'Sedan', 'Car Returned'),
(5930, 'chaitya', '2023-05-14', '2023-05-14', 'Brezza', 'MH46R3636', 'Suv', 'Car Returned'),
(6211, 'chaitya', '2023-05-09', '2023-05-10', 'Virtus', 'MH40R3636', 'Sedan', 'On rent'),
(6503, 'chaitya', '2023-05-09', '2023-05-11', 'Slavia', 'MH35R3636', 'Sedan', 'Car Returned');

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `bookcar` AFTER INSERT ON `booking` FOR EACH ROW update car_info set Available_status=0 where reg_no=new.regno
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bookcar11` AFTER INSERT ON `booking` FOR EACH ROW update car_info set Available_status="Unavailaible" where reg_no=new.regno
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `category` varchar(50) NOT NULL,
  `luggage(kgs)` int(10) NOT NULL,
  `no_of_persons` int(10) NOT NULL,
  `cost_per_day` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`category`, `luggage(kgs)`, `no_of_persons`, `cost_per_day`) VALUES
('Hatchback', 10, 5, 600),
('Sedan', 7, 5, 750),
('Suv', 15, 7, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `reg_no` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `mileage` int(11) NOT NULL,
  `car_category` varchar(50) NOT NULL,
  `Available_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`reg_no`, `model_name`, `mileage`, `car_category`, `Available_status`) VALUES
('MH35R3636', 'Slavia', 14, 'Sedan', 1),
('MH38R3636', 'Honda City', 14, 'Sedan', 1),
('MH39R3636', 'Verna', 17, 'Sedan', 1),
('MH40R3636', 'Virtus', 14, 'Sedan', 0),
('MH41P3636', 'Nexon', 14, 'Suv', 0),
('MH43A0983', 'Alto', 12, 'Hatchback', 1),
('MH43A2983', 'Baleno', 12, 'Hatchback', 1),
('MH43A9983', 'Wagonr', 12, 'Hatchback', 1),
('MH46R3636', 'Brezza', 14, 'Suv', 1),
('MH46R3638', 'Fortuner', 14, 'Suv', 0),
('MH48R3676', 'Fronx', 11, 'Suv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `type`) VALUES
(1, 'chaitya', 'chaitya102', 'user'),
(2, 'Chaitya747', 'chaitya103', 'admin'),
(20014, 'chaitya', 'chaitya777', 'user'),
(20015, 'Chaitya737', 'abc', 'user'),
(20016, 'chaitya777', 'abc777', 'user'),
(20017, 'chaitya', 'abc', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`,`username`,`regno`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`reg_no`),
  ADD KEY `car_category` (`car_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20018;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `car_info_ibfk_1` FOREIGN KEY (`car_category`) REFERENCES `cars` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
