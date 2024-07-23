-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 10:09 AM
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
-- Database: `zuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `passenger_name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `seat_number` int(40) NOT NULL,
  `price` int(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `passenger_name`, `telephone`, `email`, `route`, `company_name`, `seat_number`, `price`, `payment_method`) VALUES
(40, 'benard', '0620592700', 'john@gmail.com', 'MOROGORO TO IRINGA', 'SIMBA MTOTO', 18, 20000, 'halopesa'),
(41, 'lusangija', '0620592700', 'lusangija@gmail.com', 'SUMBAWANGA TO IRINGA', 'ABOOD', 1, 20000, 'halopesa'),
(42, 'lusangija', '0675018671', 'lusangija@gmail.com', 'SONGEA TO MOSHI', 'MARANGU', 2, 70000, 'tigo pesa');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `reg_no` int(12) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`reg_no`, `company_name`, `region`) VALUES
(1001, 'ABOOD', 'MOROGORO'),
(1002, 'BM', 'MOROGORO'),
(1003, 'SHABIBY', 'DODOMA'),
(1004, 'NYEHUNGE', 'MWANZA'),
(1005, 'DAR LUX', 'DAR ES SALLAM'),
(1006, 'MAJINJA EXPRESS', 'SUMBAWANGA'),
(1007, 'ZUBERI', 'MWANZA'),
(1008, 'TASHRIF', 'TANGA'),
(1009, 'NYEHUNGE', 'MWANZA'),
(1010, 'SIMBA MTOTO', 'MOROGORO'),
(1011, 'NETWORKING', 'MBEYA'),
(1012, 'RUCHORO', 'SUMBAWANGA'),
(1013, 'MARANGU', 'ARUSHA'),
(1014, 'ALLYS STAR', 'MWANZA'),
(1015, 'RATCO', 'TANGA'),
(1016, 'CHAMPION EXPRESS', 'MOSHI'),
(1017, 'HAPPY NATION', 'TABORA'),
(1018, 'DAR LUX', 'DAR ES SALLAM'),
(1019, 'MAJINJA EXPRESS', 'SUMBAWANGA'),
(1020, 'BARAKA', 'KATAVI');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `mail` int(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`id`, `names`, `mail`, `topic`, `subject`) VALUES
(1, 'juma juma', 0, 'shukrani', 'mbarikiwe wapenzi kwa idea nzuri');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `departure_time` time NOT NULL,
  `route` varchar(50) NOT NULL,
  `price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `departure_time`, `route`, `price`) VALUES
(3, '06:00:00', 'DAR TO TANGA', 18000),
(4, '06:00:02', 'DAR TO DODOMA', 30000),
(5, '06:00:04', 'MWANZA TO MBEYA', 30000),
(6, '06:00:00', 'MOROGORO TO IRINGA', 20000),
(7, '05:00:00', 'MOROGORO TO IRINGA', 20000),
(8, '08:00:00', 'MOROGORO TO ARUSHA', 37000),
(9, '08:00:00', 'MBEYA TO KATAVI', 28000),
(10, '09:00:00', 'SUMBAWANGA TO IRINGA', 20000),
(11, '09:00:00', 'MASWA TO MANYARA', 60000),
(12, '09:00:00', 'SONGEA TO MOSHI', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `First_Name`, `Last_Name`, `username`, `email`, `password`) VALUES
(4, 84876036005756, 'Benard', 'John', 'benard', 'john@gmail.com', '$2y$10$KNPmLr9mfkrZNepy7xmN9uGU7.YuGSIbVRXeW2b3hxY8zQ./TofPO'),
(5, 4938236, 'juma', 'Mashimbe', 'mashimbe001', 'mashimbe@gmail.com', '$2y$10$JJEx/4xf/ogPVVntkXMNnOFb.3y2zwTWhr.olm8sKHLnPMGrENvya'),
(6, 53175, 'John', 'Lusangija', 'lusangija', 'lusangija@gmail.com', '$2y$10$D6ZD9JcxZy/O5GNR5aHeAOff81KRiyhpwDD9z.GUnzN9CblFKekT2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
