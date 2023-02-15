-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 03:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echok`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`) VALUES
(1, 'food', '2023-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `buy_price` decimal(25,0) NOT NULL,
  `sale_price` decimal(25,0) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `quantity`, `buy_price`, `sale_price`, `date`) VALUES
(1, 'food', 'pizza', '100', '150', '300', '2023-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `price` varchar(111) NOT NULL,
  `discount_amount` varchar(111) NOT NULL,
  `discounted_amount` varchar(111) NOT NULL,
  `total_quantity` varchar(111) NOT NULL,
  `total_discount_given` varchar(111) NOT NULL,
  `total_discounted_amount` varchar(111) NOT NULL,
  `cash_given` varchar(111) NOT NULL,
  `change_total` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `quantity`, `price`, `discount_amount`, `discounted_amount`, `total_quantity`, `total_discount_given`, `total_discounted_amount`, `cash_given`, `change_total`) VALUES
(7, 'air fryer burger', '1', '100', '', '', '', '', '', '120', ''),
(8, 'air fryer burger', '1', '100', '', '', '', '', '', '120', ''),
(9, 'air fryer burger', '1', '100', '', '', '', '', '', '120', ''),
(10, 'air fryer burger', '100', '20', '', '', '', '', '', '10000', ''),
(17, 'air fryer burger', '1', '111', '', '', '', '', '', '1000', ''),
(18, 'air fryer burger', '100', '20', '', '', '', '', '', '1', ''),
(24, 'chicken burger', '11', '124', '5', '100', '11', '5', '100', '10000', '123'),
(48, 'chicken burger', '1', '1', '', '', '', '', '', '1', ''),
(49, 'air fryer burger', '1', '20', '', '', '', '', '', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `level`) VALUES
(1, 'echok', 'tanga', 'admin', 'admin', 1),
(2, 'user', 'qwe', 'user', 'user', 3),
(3, 'hr', 'owner', 'hr', 'hr', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
