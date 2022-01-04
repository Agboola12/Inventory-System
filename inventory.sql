-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 10:52 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password_1` varchar(255) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `username`, `phone`, `password_1`, `profile`) VALUES
(16, 'Elijah', 'Agboola', 'tayo@yahoo.com', 'Adekunle', 2147483647, '25d55ad283aa400af464c76d713c07ad', 'bro quadri 20180507_165229.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `fullname`, `address`, `product`, `price`, `email`, `quantity`, `message`) VALUES
(2, 'Akinsola Charles', 'God is Able Vila', 'Bandage', '', 'charles222@gmail.com', '20', 'Head shot');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`product_id`, `product_name`, `price`, `quantity`, `total`) VALUES
(3, 'Bandage', '300', '12', '3600'),
(4, 'Plaster', '200', '1', '200'),
(5, 'Syringe', '100', '3', '300');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `worker_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_1` varchar(255) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`worker_id`, `username`, `first_name`, `last_name`, `mobile`, `email`, `password_1`, `profile`) VALUES
(2, 'adeyi', 'Samson', 'Adeyi', 2147483647, 'adeyi@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'IMG_20190425_134811.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
