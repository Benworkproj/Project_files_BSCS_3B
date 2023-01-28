-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Jan 28, 2023 at 12:41 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33462742_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_number` int(11) NOT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `employee_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_number`, `employee_name`, `gender`, `date_of_birth`, `nationality`, `civil_status`, `department`, `designation`, `employee_status`) VALUES
(20, 'Gemma Sangalang', 'Female', '2002-07-08', 'Filipino', 'Single', 'Imus', 'Cavite', 'Self-employed'),
(21, 'Justice Razon', 'Male', '2000-10-31', 'Filipino', 'Single', 'Bacoor', 'Cavite', 'Employee'),
(22, 'Irish Mutya', 'Female', '2001-05-17', 'Filipino', 'Single', 'Bacoor', 'Cavite', 'Unemployed');

-- --------------------------------------------------------

--
-- Table structure for table `employee_payroll`
--

CREATE TABLE `employee_payroll` (
  `payroll_id` int(10) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_payroll`
--

INSERT INTO `employee_payroll` (`payroll_id`, `employee_number`, `employee_name`, `salary`) VALUES
(1, 20, 'Gemma Sangalang', 10000),
(2, 21, 'Justice Razon', 8500),
(3, 22, 'Irish Mutya', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `pos1_tbl`
--

CREATE TABLE `pos1_tbl` (
  `pos1_id` int(10) NOT NULL,
  `order_summary` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `discount_amount` int(10) NOT NULL,
  `discounted_amount` int(10) NOT NULL,
  `cash_given` int(10) NOT NULL,
  `customer_change` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos1_tbl`
--

INSERT INTO `pos1_tbl` (`pos1_id`, `order_summary`, `price`, `quantity`, `discount_amount`, `discounted_amount`, `cash_given`, `customer_change`) VALUES
(1, 'Cookies', 56, 3, 10, 46, 500, 362),
(2, 'Tarts', 23, 1, 0, 23, 50, 27),
(3, 'Americano', 40, 5, 3, 37, 200, 15),
(4, 'Brownies', 50, 1, 0, 50, 100, 50),
(5, 'Espresso', 74, 3, 4, 70, 500, 290);

-- --------------------------------------------------------

--
-- Table structure for table `pos2_tbl`
--

CREATE TABLE `pos2_tbl` (
  `pos1_id` int(10) NOT NULL,
  `order_summary` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `discount_amount` int(10) NOT NULL,
  `discounted_amount` int(10) NOT NULL,
  `total_quantity` int(10) NOT NULL,
  `total_dicount_given` int(10) NOT NULL,
  `total_discounted_amount` int(10) NOT NULL,
  `cash_given` int(10) NOT NULL,
  `customer_change` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos2_tbl`
--

INSERT INTO `pos2_tbl` (`pos1_id`, `order_summary`, `price`, `quantity`, `discount_amount`, `discounted_amount`, `total_quantity`, `total_dicount_given`, `total_discounted_amount`, `cash_given`, `customer_change`) VALUES
(1, 'Caramel Latte', 42, 3, 2, 40, 3, 6, 120, 1000, 880),
(2, 'Cappuccino', 299, 2, 5, 294, 2, 10, 588, 700, 112);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(10, 'hr'),
(20, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'password', 1),
(2, 'hr', 'password', 10),
(3, 'employee', 'password', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_number`);

--
-- Indexes for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `employee_number` (`employee_number`);

--
-- Indexes for table `pos1_tbl`
--
ALTER TABLE `pos1_tbl`
  ADD PRIMARY KEY (`pos1_id`);

--
-- Indexes for table `pos2_tbl`
--
ALTER TABLE `pos2_tbl`
  ADD PRIMARY KEY (`pos1_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  ADD CONSTRAINT `employee_payroll_ibfk_1` FOREIGN KEY (`employee_number`) REFERENCES `employee` (`employee_number`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
