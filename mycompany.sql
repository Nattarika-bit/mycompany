-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_no` varchar(20) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_street` varchar(200) NOT NULL,
  `cust_city` varchar(200) NOT NULL,
  `cust_state` varchar(200) NOT NULL,
  `cust_zip` varchar(4) NOT NULL,
  `ship_to_name` varchar(200) NOT NULL,
  `ship_to_street` varchar(200) NOT NULL,
  `ship_to_city` varchar(200) NOT NULL,
  `ship_to_state` varchar(200) NOT NULL,
  `ship_to_zip` varchar(4) NOT NULL,
  `credit_limit` float NOT NULL,
  `last_revised` date NOT NULL,
  `credit_terms` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_no`, `cust_name`, `cust_street`, `cust_city`, `cust_state`, `cust_zip`, `ship_to_name`, `ship_to_street`, `ship_to_city`, `ship_to_state`, `ship_to_zip`, `credit_limit`, `last_revised`, `credit_terms`) VALUES
('C001', 'John Smith', '123 Maple St', 'Dallas', 'TX', '7520', 'John Smith', '123 Maple St', 'Dallas', 'TX', '7520', 10, '2025-07-01', 'Net 30'),
('C002', 'Emily Brown', '321 Cedar Lane', 'Chicago', 'IL', '6060', 'Emily Brown', '321 Cedar Lane', 'Chicago', 'IL', '6060', 8, '2025-07-10', 'Net 45'),
('C003', 'Michael Wong', '888 Sunset Blvd', 'Los Angeles', 'CA', '9000', 'M. Wong', '222 Market St', 'San Diego', 'CA', '9210', 20, '2025-07-18', 'Net 60');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item_no` varchar(10) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `location` varchar(100) NOT NULL,
  `qty_on_hand` int(11) NOT NULL,
  `reorder_pt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_no`, `item_name`, `price`, `location`, `qty_on_hand`, `reorder_pt`) VALUES
('A001', 'Apple', 45, 'Zone A', 156, 30),
('A002', 'Cherry', 25, 'Zone A', 200, 42),
('A003', 'Kiwi', 30, 'Zone B', 250, 33),
('A004', 'Grapes', 50, 'Zone C', 200, 20),
('A005', 'Mango ', 30, 'Zone C', 300, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_no`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
