-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 08:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(60) DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL,
  `a_type` varchar(60) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`a_id`, `a_name`, `balance`, `a_type`, `open_date`, `close_date`) VALUES
(1011, 'IUB', '19600.00', 'Saving Account', '2012-02-01', '0000-00-00');

--
-- Triggers `account`
--
DELIMITER $$
CREATE TRIGGER `before_account_delete` BEFORE DELETE ON `account` FOR EACH ROW BEGIN
        INSERT INTO account_archives(a_id,a_name,open_date,close_date)
        VALUES(OLD.a_id,OLD.a_name,OLD.open_date,old.close_date);
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account_archieve`
--

CREATE TABLE `account_archieve` (
  `id` int(11) NOT NULL,
  `a_id` int(11) DEFAULT NULL,
  `a_name` varchar(60) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `account_branch`
--

CREATE TABLE `account_branch` (
  `a_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_branch`
--

INSERT INTO `account_branch` (`a_id`, `b_id`) VALUES
(1011, 1);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `City` varchar(60) DEFAULT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`City`, `b_id`) VALUES
('Sonargaon', 1),
('Noakhali', 2),
('Bashundhara', 3),
('Chittagong', 4);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `B_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `B_name`) VALUES
(1, 'Sonargaon'),
(2, 'Noakhali'),
(3, 'Bashundhara'),
(4, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NID` int(11) NOT NULL,
  `Fname` varchar(60) NOT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `nationality` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `occupation` varchar(60) DEFAULT NULL,
  `nominee` varchar(60) DEFAULT NULL,
  `Gender` varchar(60) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NID`, `Fname`, `lname`, `b_id`, `DOB`, `nationality`, `email`, `occupation`, `nominee`, `Gender`, `a_id`, `balance`) VALUES
(1, 'Israk', 'Farhan', 1, '2022-04-03', 'Canadian', 'israk@gmail.com', 'Student', 'Jason', 'Male', 1011, '19600.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `NID` int(11) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`NID`, `permanent_address`, `present_address`) VALUES
(1, 'sector:13,Road:12,House:11,Uttara,Dhaka-1230', 'sector:14,Road:18,House:13,Uttara,Dhaka-1230');

-- --------------------------------------------------------

--
-- Table structure for table `customer_phone`
--

CREATE TABLE `customer_phone` (
  `NID` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_phone`
--

INSERT INTO `customer_phone` (`NID`, `phone_number`) VALUES
(1, 1235654667);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(60) DEFAULT NULL,
  `emp_pass` varchar(60) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_pass`, `b_id`) VALUES
(123, 'Sova', '123', 1),
(124, 'Sayel', '124', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tansaction_history`
--

CREATE TABLE `tansaction_history` (
  `id` int(11) NOT NULL,
  `t_id` int(11) DEFAULT NULL,
  `withdraw` decimal(10,2) DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transac_ion`
--

CREATE TABLE `transac_ion` (
  `t_id` int(11) NOT NULL,
  `withdraw` decimal(10,2) DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`a_id`,`balance`);

--
-- Indexes for table `account_archieve`
--
ALTER TABLE `account_archieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_branch`
--
ALTER TABLE `account_branch`
  ADD PRIMARY KEY (`a_id`,`b_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `a_id` (`a_id`,`balance`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `customer_phone`
--
ALTER TABLE `customer_phone`
  ADD PRIMARY KEY (`NID`,`phone_number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `tansaction_history`
--
ALTER TABLE `tansaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transac_ion`
--
ALTER TABLE `transac_ion`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `a_id` (`a_id`,`balance`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_archieve`
--
ALTER TABLE `account_archieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tansaction_history`
--
ALTER TABLE `tansaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_branch`
--
ALTER TABLE `account_branch`
  ADD CONSTRAINT `account_branch_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `account` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_branch_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`a_id`,`balance`) REFERENCES `account` (`a_id`, `balance`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `customer` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_phone`
--
ALTER TABLE `customer_phone`
  ADD CONSTRAINT `customer_phone_ibfk_1` FOREIGN KEY (`NID`) REFERENCES `customer` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transac_ion`
--
ALTER TABLE `transac_ion`
  ADD CONSTRAINT `transac_ion_ibfk_1` FOREIGN KEY (`a_id`,`balance`) REFERENCES `account` (`a_id`, `balance`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
