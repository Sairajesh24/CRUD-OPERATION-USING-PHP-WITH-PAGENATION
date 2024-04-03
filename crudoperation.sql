-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 02:29 PM
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
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'John Doe', 'john.doe@example.com', '1234567890', 'password123'),
(2, 'Jane Smith', 'jane.smith@example.com', '9876543210', 'securepass'),
(3, 'Michael Johnson', 'michael.johnson@example.com', '5551234567', 'mypass123'),
(4, 'Emily Williams', 'emily.williams@example.com', '9871234567', 'pass123'),
(6, 'Sarah Miller', 'sarah.miller@example.com', '3216549870', 'securepass1'),
(7, 'James Wilson', 'james.wilson@example.com', '4569873210', 'mypassword'),
(8, 'Jessica Taylor', 'jessica.taylor@example.com', '7896541230', 'pass456'),
(9, 'Robert Anderson', 'robert.anderson@example.com', '6547893210', 'password2'),
(10, 'Amanda Martinez', 'amanda.martinez@example.com', '1237896540', 'securepass2'),
(11, 'William Jackson', 'william.jackson@example.com', '7896541230', 'mypassword1'),
(12, 'Jennifer Harris', 'jennifer.harris@example.com', '3216549870', 'pass789'),
(13, 'Daniel Brown', 'daniel.brown@example.com', '9876543210', 'password3'),
(14, 'Elizabeth Garcia', 'elizabeth.garcia@example.com', '6541239870', 'securepass3'),
(15, 'Christopher Wilson', 'christopher.wilson@example.com', '1236549870', 'mypassword2'),
(16, 'Maria Martinez', 'maria.martinez@example.com', '9876543210', 'pass1234'),
(17, 'Matthew Johnson', 'matthew.johnson@example.com', '6549873210', 'password4'),
(18, 'Ashley Miller', 'ashley.miller@example.com', '3216549870', 'securepass4'),
(19, 'Joshua Thompson', 'joshua.thompson@example.com', '1239876540', 'mypassword3'),
(22, 'G Sai Rajesh Kumar Patro', 'saideep304@gmail.com', '08658374497', '123456'),
(23, 'G Sai Patro', 'saideep304@gmail.com', '0865837449', ''),
(24, 'Dipti', 'sfd@gmail.com', '8658376691', 'saideep5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
