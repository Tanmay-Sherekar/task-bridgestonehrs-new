-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 10:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridgestonehrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(50) NOT NULL,
  `provider` varchar(300) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `claim_number` varchar(100) NOT NULL,
  `patient_account` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `code` varchar(30) NOT NULL,
  `billed_amount` decimal(10,2) NOT NULL,
  `deductible` decimal(10,2) NOT NULL,
  `copay` decimal(10,2) NOT NULL,
  `coinsurance` decimal(10,2) NOT NULL,
  `ppo_discount` decimal(10,2) NOT NULL,
  `other_adjustment` decimal(10,2) NOT NULL,
  `ref_codes` varchar(30) NOT NULL,
  `net_payment_amount` decimal(10,2) NOT NULL,
  `patient_responsibility` decimal(10,2) NOT NULL,
  `total` int(50) NOT NULL,
  `payment_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `provider`, `patient_name`, `claim_number`, `patient_account`, `service_date`, `code`, `billed_amount`, `deductible`, `copay`, `coinsurance`, `ppo_discount`, `other_adjustment`, `ref_codes`, `net_payment_amount`, `patient_responsibility`, `total`, `payment_date`) VALUES
(1, 'Dove MCCLOSKEY', 'JOHN DOE', '2025213151', '178414-cba-ddOC', '2025-09-18', '11213', '130.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'co45', '0.00', '0.00', 71, '01-03-2025'),
(2, 'Sharma Nociaren', 'TARY DOE', '20259998001426', '177933A-AOEC-10781', '2025-07-04', '99213', '159.00', '0.00', '0.00', '0.00', '109.21', '0.00', 'CO45', '49.79', '0.00', 159, '20-03-25'),
(3, 'ROOTH MCCLOSEKEY', 'TAYLOR SWIFT', '20297418001844', '176478A-CTWC-10059', '0000-00-00', 'G0467 ', '130.00', '0.00', '0.00', '59.93', '0.00', '0.00', 'CO45', '70.07', '0.00', 70, '02-08-2024'),
(4, 'SHARGEE MACCLAREN ', 'LANE  WAUGN', '20259978001560', '179785A-CTWC-10966', '2004-09-25', '99213', '136.00', '0.00', '0.00', '0.00', '86.21', '0.00', 'CO45', '49.79', '0.00', 136, '04-01-2019'),
(5, 'SUSAN MCCLOSET ', 'SOPHIA SPIKE', '20250419721546', '177850A-CTWC-64750', '0000-00-00', ' 90792  ', '296.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'CO45', '296.00', '0.00', 296, '30-05-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
