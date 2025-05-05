-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 05:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_reservation`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`Muhammad`@`localhost` PROCEDURE `GetFlightStatistics` (IN `j_date` DATE)   BEGIN
 select flight_no,departure_date,IFNULL(no_of_passengers, 0) as no_of_passengers,total_capacity from (
select f.flight_no,f.departure_date,sum(t.no_of_passengers) as no_of_passengers,j.total_capacity 
from flight_details f left join ticket_details t 
on t.booking_status='CONFIRMED' 
and t.flight_no=f.flight_no 
and f.departure_date=t.journey_date 
inner join jet_details j on j.jet_id=f.jet_id
group by flight_no,journey_date) k where departure_date=j_date;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('admin', 'passpass', 'admin', 'Admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `pwd`, `name`, `email`, `phone_no`, `address`) VALUES
('abdulhannan', 'k213858', 'Hannan', 'k213858@nu.edu.pk', '+2344567890', 'Karachi, Pakistan'),
('alexanderlee', 'alexanderlee789', 'Alexander Lee', 'alexander@example.com', '+1666777888', '234 Cedar St, Suburbia'),
('bobsmith', 'bobsmith456', 'Bob Smith', 'bob@example.com', '+1987654321', '456 Pine St, Villagetown'),
('emilyjones', 'emily456', 'Emily Jones', 'emily@example.com', '+1987654321', '456 Elm St, Another Town'),
('emilywilliams', 'emilywilliams456', 'Emily Williams', 'emilyw@example.com', '+1222333444', '567 Birch St, Countryside'),
('janedoe', 'janedoe123', 'Jane Doe', 'jane@example.com', '+1122334455', '789 Maple St, Townsville'),
('johnsmith', 'john123', 'John Smith', 'john@example.com', '+1234567890', '123 Main St, Anytown'),
('michaelscott', 'scott789', 'Michael Scott', 'michael@example.com', '+1122334455', '789 Oak St, Yet Another Town'),
('mikejohnson', 'mikejohnson123', 'Mike Johnson', 'mike@example.com', '+1444555666', '890 Elm St, Cityville'),
('muhammad', 'k213899', 'Muhammad', 'itsmuhammad111@gmail.com', '+2334567890', 'N.N, Karachi, Pakistan'),
('rafay', 'k213894', 'Rafay', 'k213894@nu.edu.pk', '+2336667890', 'Karachi, Pakistan'),
('sarahbrown', 'sarahbrown789', 'Sarah Brown', 'sarah@example.com', '+1555666777', '123 Oak St, Hamlet'),
('testUser', 'testing', 'test', 'test@example.com', '1234567891', 'gvfdgfdgfgfhbfdghgfh');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) VALUES
('AA105', 'mumbai', 'delhi', '2022-05-01', '2022-05-01', '08:00:00', '10:00:00', 200, 100, 4000, 6000, '10001'),
('AA107', 'kolkata', 'bangkok', '2022-05-03', '2022-05-03', '15:00:00', '18:00:00', 180, 90, 6000, 9000, '10003'),
('AA108', 'bangkok', 'singapore', '2022-05-04', '2022-05-04', '20:00:00', '22:00:00', 220, 110, 4500, 7000, '10004'),
('AA109', 'singapore', 'tokyo', '2022-05-05', '2022-05-05', '10:00:00', '15:00:00', 250, 125, 7000, 10000, '10005'),
('AA111', 'sydney', 'auckland', '2022-05-07', '2022-05-07', '10:00:00', '12:00:00', 200, 100, 6500, 9500, '10007'),
('AA113', 'los angeles', 'new york', '2022-05-09', '2022-05-09', '08:00:00', '12:00:00', 250, 125, 6000, 9000, '10007'),
('AA115', 'london', 'paris', '2022-05-11', '2022-05-11', '10:00:00', '12:00:00', 180, 90, 4000, 6000, '10005'),
('AA116', 'paris', 'rome', '2022-05-12', '2022-05-12', '14:00:00', '16:00:00', 150, 75, 4500, 7000, '10002'),
('AA118', 'berlin', 'amsterdam', '2022-05-14', '2022-05-14', '08:00:00', '10:00:00', 220, 110, 5500, 8000, '10004'),
('AA119', 'amsterdam', 'madrid', '2022-05-15', '2022-05-15', '16:00:00', '20:00:00', 250, 125, 6000, 9000, '1002'),
('AIR607NXPX', 'rome', 'berlin', '2022-05-13', '2022-05-13', '12:00:00', '15:00:00', 200, 100, 5000, 7500, 'AIRBUS707M'),
('AIR707MXTS', 'tokyo', 'sydney', '2022-05-06', '2022-05-06', '08:00:00', '14:00:00', 180, 90, 8000, 12000, 'AIR707MAX'),
('AIRBUS707P', 'new york', 'london', '2022-05-10', '2022-05-10', '16:00:00', '20:00:00', 200, 100, 7000, 10000, 'AIRBUS707'),
('AIRBUS70BA', 'auckland', 'los angeles', '2022-05-08', '2022-05-08', '14:00:00', '22:00:00', 300, 150, 9000, 13000, 'AIRBUS70'),
('AIRBUS70DK', 'delhi', 'kolkata', '2022-05-02', '2022-05-02', '12:00:00', '14:00:00', 150, 75, 3500, 5500, 'AIRBUS70'),
('BOING707KP', 'kolkatta', 'patna', '2019-08-25', '2019-08-25', '10:00:00', '13:00:00', 400, 21, 4500, 7000, 'BOING707'),
('PK301', 'karachi', 'lahore', '2022-05-16', '2022-05-16', '08:00:00', '10:00:00', 200, 100, 3000, 5000, '10016'),
('PK302', 'lahore', 'islamabad', '2022-05-17', '2022-05-17', '12:00:00', '14:00:00', 150, 75, 2500, 4500, '10017'),
('PK303', 'islamabad', 'peshawar', '2022-05-18', '2022-05-18', '15:00:00', '18:00:00', 180, 90, 2000, 4000, '10018'),
('PK304', 'peshawar', 'quetta', '2022-05-19', '2022-05-19', '20:00:00', '22:00:00', 220, 110, 3500, 5500, '10019'),
('PK305', 'quetta', 'karachi', '2022-05-20', '2022-05-20', '10:00:00', '15:00:00', 250, 125, 4000, 6000, '10020');

-- --------------------------------------------------------

--
-- Table structure for table `frequent_flier_details`
--

CREATE TABLE `frequent_flier_details` (
  `frequent_flier_no` varchar(20) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `frequent_flier_details`
--

INSERT INTO `frequent_flier_details` (`frequent_flier_no`, `customer_id`, `mileage`) VALUES
('10001010', 'muhammad', 1100),
('10011001', 'johnsmith', 500),
('10011011', 'abdulhannan', 1200),
('10021002', 'emilyjones', 200),
('10021012', 'rafay', 1300),
('10031003', 'michaelscott', 300),
('10041004', 'janedoe', 400),
('10051005', 'bobsmith', 600),
('10061006', 'sarahbrown', 700),
('10071007', 'mikejohnson', 800),
('10081008', 'emilywilliams', 900),
('10091009', 'alexanderlee', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `jet_details`
--

CREATE TABLE `jet_details` (
  `jet_id` varchar(10) NOT NULL,
  `jet_type` varchar(20) DEFAULT NULL,
  `total_capacity` int(5) DEFAULT NULL,
  `active` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jet_details`
--

INSERT INTO `jet_details` (`jet_id`, `jet_type`, `total_capacity`, `active`) VALUES
('10001', 'Dreamliner', 300, 'Yes'),
('10002', 'Airbus A380', 275, 'Yes'),
('10003', 'ATR', 50, 'Yes'),
('10004', 'Boeing 737', 225, 'Yes'),
('10005', 'Test_Model', 250, 'Yes'),
('10007', 'Test_Model1', 250, 'Yes'),
('10016', 'PK301', 300, 'Yes'),
('10017', 'PK302', 275, 'Yes'),
('10018', 'PK303', 50, 'Yes'),
('10019', 'PK304', 225, 'Yes'),
('10020', 'PK305', 250, 'Yes'),
('AIR707MAX', 'AIRBUS 707 MX', 400, 'Yes'),
('AIRBUS69', 'AIRBUS69-5526', 780, 'Yes'),
('AIRBUS70', 'AIRBUS69-5527', 654, 'Yes'),
('AIRBUS707', 'AIRBUS69-5527', 655, 'Yes'),
('AIRBUS707M', '707 MAX', 596, 'Yes'),
('BOING707', 'BOING707-5569', 485, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`) VALUES
(1, '1111111', 'John Smith', 35, 'male', 'yes', '10011001'),
(2, '2222222', 'Emily Jones', 28, 'female', 'yes', '10021002'),
(3, '3333333', 'Michael Scott', 45, 'male', 'yes', '10031003'),
(4, '4444444', 'Jane Doe', 30, 'female', 'yes', '10041004'),
(5, '5555555', 'Bob Smith', 40, 'male', 'yes', '10051005'),
(6, '6666666', 'Sarah Brown', 50, 'female', 'yes', '10061006'),
(7, '7777777', 'Mike Johnson', 37, 'male', 'yes', '10071007'),
(8, '8888888', 'Emily Williams', 29, 'female', 'yes', '10081008'),
(9, '9999999', 'Alexander Lee', 55, 'male', 'yes', '10091009'),
(10, '1010101', 'Muhammad', 33, 'male', 'yes', '10001010'),
(11, '1111112', 'Hannan', 40, 'male', 'yes', '10011011'),
(12, '1212121', 'Rafay', 28, 'male', 'yes', '10021012'),
(13, '1313131', 'Rakhi', 25, 'female', 'yes', NULL),
(14, '1414141', 'Kimi', 11, 'male', 'yes', NULL),
(15, '1515151', 'blah', 20, 'male', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) VALUES
('101010101', '1010101', '2022-05-19', 10000, 'debit card'),
('111111111', '1111111', '2022-05-10', 6000, 'credit card'),
('111111222', '1111112', '2022-05-20', 11000, 'debit card'),
('121212121', '1212121', '2022-05-21', 12000, 'credit card'),
('131313131', '1313131', '2022-05-22', 5000, 'credit card'),
('141414141', '1414141', '2022-05-23', 6000, 'debit card'),
('151515151', '1515151', '2022-05-24', 7000, 'credit card'),
('222222222', '2222222', '2022-05-11', 3500, 'credit card'),
('333333333', '3333333', '2022-05-12', 4500, 'debit card'),
('444444444', '4444444', '2022-05-13', 4000, 'credit card'),
('555555555', '5555555', '2022-05-14', 4500, 'credit card'),
('666666666', '6666666', '2022-05-15', 6000, 'credit card'),
('777777777', '7777777', '2022-05-16', 7000, 'debit card'),
('888888888', '8888888', '2022-05-17', 8000, 'credit card'),
('999999999', '9999999', '2022-05-18', 9000, 'credit card');

--
-- Triggers `payment_details`
--
DELIMITER $$
CREATE TRIGGER `update_ticket_after_payment` AFTER INSERT ON `payment_details` FOR EACH ROW UPDATE ticket_details
     SET booking_status='CONFIRMED', payment_id= NEW.payment_id
   WHERE pnr = NEW.pnr
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `pnr` varchar(15) NOT NULL,
  `date_of_reservation` date DEFAULT NULL,
  `flight_no` varchar(10) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `booking_status` varchar(20) DEFAULT NULL,
  `no_of_passengers` int(5) DEFAULT NULL,
  `lounge_access` varchar(5) DEFAULT NULL,
  `priority_checkin` varchar(5) DEFAULT NULL,
  `insurance` varchar(5) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `lounge_access`, `priority_checkin`, `insurance`, `payment_id`, `customer_id`) VALUES
('1669050', '2022-05-10', 'PK301', '2022-05-16', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '111111111', 'johnsmith'),
('2033264', '2022-05-11', 'AIRBUS70PA', '2022-05-19', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '222222222', 'emilyjones'),
('2179656', '2022-05-11', 'AIRBUS70PA', '2022-05-19', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '333333333', 'emilyjones'),
('2369143', '2022-05-12', 'PK302', '2022-05-17', 'business', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '444444444', 'michaelscott'),
('2538635', '2022-05-12', NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL),
('2709472', '2022-05-13', NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL),
('3027167', '2022-05-10', 'PK301', '2022-05-16', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '555555555', 'michaelscott'),
('3773951', '2022-05-10', 'PK301', '2022-05-16', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '666666666', 'michaelscott'),
('3817993', '2022-05-11', 'AIRBUS70PA', '2022-05-19', 'business', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '777777777', 'michaelscott'),
('4797983', '2022-05-10', 'PK301', '2022-05-16', 'economy', 'CONFIRMED', 1, 'yes', 'no', 'yes', '888888888', 'michaelscott'),
('4807312', '2022-05-11', 'AIRBUS70PA', '2022-05-19', 'economy', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '999999999', 'michaelscott'),
('5272308', '2022-05-13', 'PK303', '2022-05-18', 'business', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '101010101', 'michaelscott'),
('5421865', '2022-05-12', 'PK302', '2022-05-17', 'economy', 'CONFIRMED', 1, 'no', 'no', 'no', '111111222', 'michaelscott'),
('6980157', '2022-05-12', 'PK302', '2022-05-17', 'economy', 'PENDING', 1, 'yes', 'yes', 'yes', '121212121', 'michaelscott'),
('8503285', '2022-05-10', 'PK301', '2022-05-16', 'business', 'CONFIRMED', 1, 'yes', 'yes', 'no', '131313131', 'michaelscott'),
('9288360', '2022-05-11', 'AIRBUS707P', '2022-05-20', 'business', 'CONFIRMED', 1, 'yes', 'yes', 'yes', '141414141', 'michaelscott'),
('9572357', '2022-05-11', 'AIRBUS707P', '2022-05-20', 'business', 'PENDING', 1, 'yes', 'yes', 'yes', NULL, 'michaelscott');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`flight_no`,`departure_date`),
  ADD KEY `jet_id` (`jet_id`);

--
-- Indexes for table `frequent_flier_details`
--
ALTER TABLE `frequent_flier_details`
  ADD PRIMARY KEY (`frequent_flier_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `jet_details`
--
ALTER TABLE `jet_details`
  ADD PRIMARY KEY (`jet_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`,`pnr`),
  ADD KEY `pnr` (`pnr`),
  ADD KEY `frequent_flier_no` (`frequent_flier_no`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `pnr` (`pnr`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `journey_date` (`journey_date`),
  ADD KEY `flight_no` (`flight_no`),
  ADD KEY `flight_no_2` (`flight_no`,`journey_date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
