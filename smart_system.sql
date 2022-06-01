-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 11:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `gr_id` int(200) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` varchar(200) NOT NULL,
  `gr_quant` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `us_id` int(60) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `ven_id` int(100) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `dl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`gr_id`, `gr_name`, `gr_price`, `gr_quant`, `quantity`, `us_id`, `us_name`, `ven_id`, `ven_name`, `dl_id`) VALUES
(15, 'Milk', '35', '1 Packet', '2 Packet', 2, 'Krutika', 2, 'Rajeshvari', 34),
(15, 'Milk', '35', '1 Packet', '2 Packet', 1, 'Monika', 2, 'Rajeshvari', 43),
(19, 'Curd', '20', '1 Packate', '3 Packet', 1, 'Monika', 1, 'Avi', 45);

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `gr_id` int(100) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` int(255) NOT NULL,
  `gr_quant` varchar(100) NOT NULL,
  `ven_id` int(60) NOT NULL,
  `ven_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`gr_id`, `gr_name`, `gr_price`, `gr_quant`, `ven_id`, `ven_name`) VALUES
(15, 'Milk', 35, '1 Packet', 2, 'Rajeshvari'),
(16, 'Egg', 20, '2 Egg', 2, 'Rajeshvari'),
(18, 'butter', 40, '50g', 1, 'Avi'),
(19, 'Curd', 20, '1 Packet', 1, 'Avi'),
(21, 'Tomato', 20, '500 gm', 1, 'Avi'),
(22, 'Rice', 385, '5 kg', 1, 'Avi'),
(23, 'Poha', 49, '1 kg', 1, 'Avi'),
(24, 'Egg', 50, '5 Egg', 1, 'Avi'),
(25, 'sugar', 209, '5 kg', 1, 'Avi');

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `gr_id` int(100) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` varchar(255) NOT NULL,
  `gr_quant` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `us_id` int(100) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `ven_id` int(100) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mn_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`gr_id`, `gr_name`, `gr_price`, `gr_quant`, `quantity`, `us_id`, `us_name`, `ven_id`, `ven_name`, `date`, `mn_id`) VALUES
(21, 'Tomato', '20', '500 gm', '1 kg', 1, 'Monika', 1, 'Avi', '06/04/19', 5),
(23, 'Poha', '49', '1 kg', '500 gm', 1, 'Monika', 1, 'Avi', '06/04/19', 6);

-- --------------------------------------------------------

--
-- Table structure for table `placed_order`
--

CREATE TABLE `placed_order` (
  `ID` int(200) NOT NULL,
  `gr_id` int(100) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` varchar(200) NOT NULL,
  `gr_quant` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `us_id` int(200) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `ven_id` int(200) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `wmy_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placed_order`
--

INSERT INTO `placed_order` (`ID`, `gr_id`, `gr_name`, `gr_price`, `gr_quant`, `quantity`, `us_id`, `us_name`, `ven_id`, `ven_name`, `wmy_id`) VALUES
(52439, 15, 'Milk', '35', '1 Packet', '2 Packet', 2, 'Krutika', 2, 'Rajeshvari', 34),
(52440, 15, 'Milk', '35', '1 Packet', '2 Packet', 1, 'Monika', 2, 'Rajeshvari', 43),
(52441, 19, 'Curd', '20', '1 Packate', '3 Packet', 1, 'Monika', 1, 'Avi', 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(200) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `us_addr` varchar(255) NOT NULL,
  `us_mono` varchar(15) NOT NULL,
  `us_mail` varchar(200) NOT NULL,
  `us_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `us_name`, `us_addr`, `us_mono`, `us_mail`, `us_pass`) VALUES
(1, 'Monika', '2 Padmavati Society,Mahadev nagar', '9141913777', 'mona@gmail.com', 'mo'),
(2, 'Krutika', '26,Somnath Society', '9865230125', 'krt@gmail.com', 'kr'),
(3, 'Darshini', '20,Vihan Park,Ahmedabad', '9988556622', 'darshini@gmail.com', 'da'),
(4, 'Zeel Patel', '3,maruti Society', '9963250214', 'zeel@gmail.com', 'ze');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ven_id` int(200) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `ven_addr` varchar(255) NOT NULL,
  `ven_mono` varchar(20) NOT NULL,
  `ven_mail` varchar(100) NOT NULL,
  `ven_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ven_id`, `ven_name`, `ven_addr`, `ven_mono`, `ven_mail`, `ven_pass`) VALUES
(1, 'Avi', '3,Rudra Shopping mall,Near Hiraba school,Ahmedabad', '9965235199', 'avi@gmail.com', 'avi'),
(2, 'Rajeshvari', '31,Karnavati Shopping mall,Near Sharad school,Ahmedabad', '9632587410', 'rajeshvari@gmail.com', 'rajeshvari'),
(4, 'Palak Patel', '30,Classic Shopping mall,Near Hiraba school,Ahmedabad', '9632584230', 'palak@gmail.com', 'palak');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `gr_id` int(110) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` varchar(200) NOT NULL,
  `gr_quant` varchar(200) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `us_id` int(200) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `ven_id` int(200) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `week_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly`
--

INSERT INTO `weekly` (`gr_id`, `gr_name`, `gr_price`, `gr_quant`, `quantity`, `us_id`, `us_name`, `ven_id`, `ven_name`, `date1`, `week_id`) VALUES
(16, 'Egg', '20', '2 Egg', '5 Egg', 1, 'Monika', 2, 'Rajeshvari', 'Monday', 15);

-- --------------------------------------------------------

--
-- Table structure for table `yearly`
--

CREATE TABLE `yearly` (
  `gr_id` int(200) NOT NULL,
  `gr_name` varchar(255) NOT NULL,
  `gr_price` varchar(255) NOT NULL,
  `gr_quant` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `us_id` int(200) NOT NULL,
  `us_name` varchar(255) NOT NULL,
  `ven_id` int(255) NOT NULL,
  `ven_name` varchar(255) NOT NULL,
  `date2` varchar(255) NOT NULL,
  `yr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearly`
--

INSERT INTO `yearly` (`gr_id`, `gr_name`, `gr_price`, `gr_quant`, `quantity`, `us_id`, `us_name`, `ven_id`, `ven_name`, `date2`, `yr_id`) VALUES
(22, 'Rice', '385', '5 kg', '3 kg', 1, 'Monika', 1, 'Avi', '06/05/18', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`dl_id`),
  ADD KEY `gr_id` (`gr_id`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`gr_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indexes for table `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`mn_id`),
  ADD KEY `gr_id` (`gr_id`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indexes for table `placed_order`
--
ALTER TABLE `placed_order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gr_id` (`gr_id`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ven_id`);

--
-- Indexes for table `weekly`
--
ALTER TABLE `weekly`
  ADD PRIMARY KEY (`week_id`,`gr_name`);

--
-- Indexes for table `yearly`
--
ALTER TABLE `yearly`
  ADD PRIMARY KEY (`yr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `dl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `gr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `monthly`
--
ALTER TABLE `monthly`
  MODIFY `mn_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `placed_order`
--
ALTER TABLE `placed_order`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52442;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ven_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `week_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `yearly`
--
ALTER TABLE `yearly`
  MODIFY `yr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily`
--
ALTER TABLE `daily`
  ADD CONSTRAINT `daily_ibfk_1` FOREIGN KEY (`gr_id`) REFERENCES `grocery` (`gr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_ibfk_2` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_ibfk_3` FOREIGN KEY (`ven_id`) REFERENCES `vendor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grocery`
--
ALTER TABLE `grocery`
  ADD CONSTRAINT `grocery_ibfk_1` FOREIGN KEY (`ven_id`) REFERENCES `vendor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `monthly`
--
ALTER TABLE `monthly`
  ADD CONSTRAINT `monthly_ibfk_1` FOREIGN KEY (`gr_id`) REFERENCES `grocery` (`gr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monthly_ibfk_2` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monthly_ibfk_3` FOREIGN KEY (`ven_id`) REFERENCES `vendor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `placed_order`
--
ALTER TABLE `placed_order`
  ADD CONSTRAINT `placed_order_ibfk_1` FOREIGN KEY (`gr_id`) REFERENCES `grocery` (`gr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `placed_order_ibfk_2` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `placed_order_ibfk_3` FOREIGN KEY (`ven_id`) REFERENCES `vendor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
