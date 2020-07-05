-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 03:58 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classified_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_requests`
--

CREATE TABLE `buyer_requests` (
  `id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_name` varchar(50) NOT NULL,
  `buyer_contact` varchar(20) NOT NULL,
  `publisher_email` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `buyer_message` varchar(100) NOT NULL,
  `add_type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_requests`
--

INSERT INTO `buyer_requests` (`id`, `add_id`, `buyer_email`, `buyer_name`, `buyer_contact`, `publisher_email`, `date`, `buyer_message`, `add_type`, `status`) VALUES
(46, 1, 'user2@gmail.com', 'user2', '0714265255', 'user1@gmail.com', ' 2020-07-14', ' message', 'rent', 'approved'),
(47, 1, 'user2@gmail.com', 'user1', '0718524565', 'user1@gmail.com', ' 2020-07-06', ' description', 'rent', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_Brand` varchar(30) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_phone_number` varchar(20) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driver_phone_number` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `publisher`, `vehicle_Brand`, `vehicle_model`, `vehicle_number`, `price`, `owner_name`, `owner_phone_number`, `owner_email`, `driver_name`, `driver_phone_number`, `description`, `img_path`, `status`, `area`, `add_type`) VALUES
(1, 'user1@gmail.com', 'BMW', '520D', 'SP CAU - 1024', '3500', ' passindu', ' 0718524565', 'pasindu@gmail.com', 'sahan', '0711236548', 'description', './vehicle_images/47694272bmw_m8_competition_coupe_2020_5k_3-1920x1080.jpg', 'approved', 'akuressa', 'hire');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_Brand` varchar(50) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_phone_number` varchar(20) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `publisher`, `vehicle_Brand`, `vehicle_model`, `vehicle_number`, `owner_name`, `owner_phone_number`, `owner_email`, `price`, `description`, `img_path`, `status`, `area`, `add_type`) VALUES
(1, 'user1@gmail.com', 'SUZUKI', 'alto', 'SP CAU - 1023', 'kamal', ' 0716548525', ' kamal@gmail.com', '2200', 'description', './vehicle_images/39685607unnamed.jpg', 'approved', 'colombo', 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sell_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `vehicle_brand` varchar(30) NOT NULL,
  `engine_capacity` varchar(30) NOT NULL,
  `model_year` varchar(10) NOT NULL,
  `mileage` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`sell_id`, `publisher`, `vehicle_model`, `vehicle_number`, `seller_name`, `phone_number`, `email`, `price`, `description`, `img_path`, `status`, `vehicle_brand`, `engine_capacity`, `model_year`, `mileage`, `area`, `add_type`) VALUES
(1, 'user1@gmail.com', '3 series', 'SP CAU - 3747', 'kasun', '071 4268524', ' kasun@gmail.com', '15 550 000', 'Description', 'vehicle_images/370812141.jpg', 'approved', 'BMW', '1995 cc', '2018', 71, 'Matara', 'sell'),
(2, 'user1@gmail.com', 'Z4 Msport', 'WP ', 'pasan', '0718524562', ' pasan@gmail.com', '20 000 000', 'description', 'vehicle_images/16577909maxresdefault.jpg', 'approved', 'BMW', 'CAH-9999', '2015', 17, 'Matara', 'sell');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(15, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(16, 'user1', ' user1', 'user1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user'),
(17, 'user2', ' user2', 'user2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user'),
(18, 'user3', ' user3', 'user3@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `sell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
