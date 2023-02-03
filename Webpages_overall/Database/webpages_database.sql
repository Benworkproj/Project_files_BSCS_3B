-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 01:01 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpages_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_payroll`
--

CREATE TABLE `employee_payroll` (
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `civil_status` varchar(200) DEFAULT NULL,
  `qual_dept_status` varchar(200) DEFAULT NULL,
  `paydate` varchar(200) DEFAULT NULL,
  `employee_status` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `ratehour1` varchar(200) NOT NULL,
  `ratehour2` varchar(200) NOT NULL,
  `ratehour3` varchar(200) NOT NULL,
  `cutoff1` varchar(200) NOT NULL,
  `cutoff2` varchar(200) NOT NULL,
  `cutoff3` varchar(200) NOT NULL,
  `income` varchar(200) NOT NULL,
  `honorarium` varchar(200) NOT NULL,
  `otherincome` varchar(200) NOT NULL,
  `gross_income` varchar(200) NOT NULL,
  `net_income` varchar(200) NOT NULL,
  `sss_contribution` varchar(200) NOT NULL,
  `sss_loan` varchar(200) NOT NULL,
  `pagibig_contribution` varchar(200) NOT NULL,
  `pagibig_loan` varchar(200) NOT NULL,
  `philhealth_contribution` varchar(200) NOT NULL,
  `faculty_deposit` varchar(200) NOT NULL,
  `faculty_loan` varchar(200) NOT NULL,
  `salary_loan` varchar(200) NOT NULL,
  `others` varchar(200) NOT NULL,
  `total_deduction` varchar(200) NOT NULL,
  `tax` varchar(200) NOT NULL,
  `date_recorded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_payroll`
--

INSERT INTO `employee_payroll` (`employee_id`, `employee_number`, `department`, `first_name`, `middle_name`, `surname`, `civil_status`, `qual_dept_status`, `paydate`, `employee_status`, `designation`, `ratehour1`, `ratehour2`, `ratehour3`, `cutoff1`, `cutoff2`, `cutoff3`, `income`, `honorarium`, `otherincome`, `gross_income`, `net_income`, `sss_contribution`, `sss_loan`, `pagibig_contribution`, `pagibig_loan`, `philhealth_contribution`, `faculty_deposit`, `faculty_loan`, `salary_loan`, `others`, `total_deduction`, `tax`, `date_recorded`) VALUES
(1, '0000346', 'UNKNOWN', 'JUAN', 'C', 'DELA CRUZ', 'SINGLE', 'Z OR SINGLE', '03-29-2023', 'UNKNOWN', 'UNKNOWN', 'ratehour1', 'ratehour2', 'ratehour3', 'cutoff1', 'cutoff2', 'cutoff3', 'income', 'honorarium', 'otherincome', 'gross_income', 'net_income', 'sss_contribution', 'sss_loan', 'pagibig_contribution', 'pagibig_loan', 'philhealth_contribution', 'faculty_deposit', 'faculty_loan', 'salary_loan', 'others', 'total_deduction', 'tax', '2023-01-28 04:04:56'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1000', '$1000', '1000', '50', '20', '10', '50000', '20000', '10000', '80', '4920', '500', '500', '500', '500', '500', '500', '500', '500', '500', '5000', '500', '2023-01-30 02:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin@cs.com', 'admin@123', 'admin'),
(2, 'hr@cs.com', 'hr@123', 'hr'),
(3, 'cashier1@cs.com', 'cashier1@123', 'cashier1'),
(4, 'cashier2@cs.com', 'cashier2@123', 'cashier2');

-- --------------------------------------------------------

--
-- Table structure for table `newemployee_register`
--

CREATE TABLE `newemployee_register` (
  `register_id` int(11) NOT NULL,
  `employee_number` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `suffix` varchar(200) NOT NULL,
  `date_birth` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `civil_status` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `qual_dept_status` varchar(200) NOT NULL,
  `employee_status` varchar(200) NOT NULL,
  `paydate` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `social_acc` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city_muni` varchar(200) NOT NULL,
  `state_pro` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newemployee_register`
--

INSERT INTO `newemployee_register` (`register_id`, `employee_number`, `first_name`, `middle_name`, `surname`, `suffix`, `date_birth`, `gender`, `nationality`, `civil_status`, `department`, `designation`, `qual_dept_status`, `employee_status`, `paydate`, `contact_number`, `email`, `other`, `social_acc`, `address1`, `address2`, `city_muni`, `state_pro`, `country`, `zip_code`, `date_registered`) VALUES
(28, '000056', 'RENZ', 'F', 'ABUT', 'None', '1962-01-29', 'Male', 'Filipino', 'Single', 'UNKNOWN', 'UNKNOWN', 'Z or Single', 'UNKNOWN', '2023-01-29', '09573756565', 'abut@sample.com', 'Facebook', 'RENZ ABUT', 'IMUS', 'IMUS', 'IMUS CIT', 'CAVITE', 'PH', '4312', '2023-01-29 12:56:22'),
(26, '000038', 'JOHN MICHAEL', 'G', 'NEBRES', 'None', '1900-01-29', 'Male', 'Filipino', 'Single', 'UNKNOWN', 'UNKNOWN', 'Z or Single', 'UNKNOWN', '2023-01-29', '095183651513', 'nebres@sample>com', 'Facebook', 'JOHN MICHEAL NEBRES', 'IMUS ', 'IMUS', 'IMUS CITY', 'CAVITE', 'PH', '6384', '2023-01-29 04:09:43'),
(27, '000036', 'MUGIWARA', 'S', 'ESPINEDA', 'None', '1999-01-29', 'Male', 'Filipino', 'Single', 'UNKNOWN', 'UNKNOWN', 'Z or Single', 'UNKNOWN', '2023-01-29', '0958636513', 'espineda@sample.com', 'Facebook', 'MUGIWARA ESPINEDA', 'IMUS', 'IMUS', 'IMUS CITY', 'CAVITE', 'PH', '2354', '2023-01-29 04:12:00'),
(24, '000046', 'ALISSA', 'A', 'SANSANO', 'None', '1980-01-29', 'Female', 'Filipino', 'Single', 'UNKNOWN', 'UNKNOWN', 'Z or Single', 'UNKNOWN', '2023-01-29', '093581658166', 'alissa@sample>com', 'Facebook', 'ALISSA SANSANO', 'DASMA', 'DASMA', 'DASMA CITY', 'CAVITE', 'PH', '4512', '2023-01-29 04:04:16'),
(23, '000045', 'JOSHUA MICCO', 'C', 'SUNDIANG', 'None', '1998-05-25', 'Male', 'Filipino', 'Single', 'UNKNOWN', 'UNKNOWN', 'Z or Single', 'UNKNOWN', '2023-01-29', '0927484718', 'joshua@sample.com', 'Facebook', 'JOSHUA MICCO SUNDIANG', 'BRGY. REAL 1', 'REAL 1', 'BACOOR CTY', 'CAVITE', 'PH', '4102', '2023-01-29 04:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `pointofsale_A`
--

CREATE TABLE `pointofsale_A` (
  `item_number` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `discount_amount` varchar(50) NOT NULL,
  `discounted_amount` varchar(50) NOT NULL,
  `cash_given` varchar(50) NOT NULL,
  `cash_change` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pointofsale_A`
--

INSERT INTO `pointofsale_A` (`item_number`, `item_name`, `price`, `quantity`, `discount_amount`, `discounted_amount`, `cash_given`, `cash_change`, `date_created`) VALUES
(1, 'Meal1', '289', '2', '200', '100', '1000', '679', '2023-01-22 00:52:40'),
(6, 'Jsjajaajjssn', '200', '2', '100', '300', '400', '100', '2023-01-29 03:38:46'),
(7, '2. T-Shirt(Purple)', '199', '2', '99.5', '298.5', '400', '101.5', '2023-01-29 03:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `pointofsale_B`
--

CREATE TABLE `pointofsale_B` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `discount_amount` varchar(50) NOT NULL,
  `discounted_amount` varchar(50) NOT NULL,
  `total_quantity` varchar(50) NOT NULL,
  `total_disc_given` varchar(100) NOT NULL,
  `total_disc_amount` varchar(100) NOT NULL,
  `cash_given` varchar(200) NOT NULL,
  `cash_change` varchar(20) NOT NULL,
  `date_bought` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pointofsale_B`
--

INSERT INTO `pointofsale_B` (`product_id`, `product_name`, `price`, `quantity`, `discount_amount`, `discounted_amount`, `total_quantity`, `total_disc_given`, `total_disc_amount`, `cash_given`, `cash_change`, `date_bought`) VALUES
(3, 'item2', '245', '3', '183.75', '551.25', '3', '183.75', '551.25', '500', '-51.25', '2023-01-24 05:35:10'),
(21, 'P1-Veggie Pizza', '46', '2', '23', '69', '2', '23', '69', '100', '31', '2023-02-01 01:17:38'),
(20, 'P2-Meaty Pizza', '199', '5', '248.75', '746.25', '5', '248.75', '746.25', '1500', '753.75', '2023-01-30 15:22:05'),
(18, 'P2-Meaty Pizza', '200', '2', '100', '300', '2', '100', '300', '4', '-296', '2023-01-29 03:15:37'),
(19, 'P2-Meaty Pizza', '400', '3', '300', '900', '3', '300', '900', '1500', '600', '2023-01-29 21:27:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newemployee_register`
--
ALTER TABLE `newemployee_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `pointofsale_A`
--
ALTER TABLE `pointofsale_A`
  ADD PRIMARY KEY (`item_number`);

--
-- Indexes for table `pointofsale_B`
--
ALTER TABLE `pointofsale_B`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newemployee_register`
--
ALTER TABLE `newemployee_register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pointofsale_A`
--
ALTER TABLE `pointofsale_A`
  MODIFY `item_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pointofsale_B`
--
ALTER TABLE `pointofsale_B`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
