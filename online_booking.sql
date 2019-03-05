-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 04:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `ship_no` int(11) NOT NULL,
  `sender_title` varchar(5) NOT NULL,
  `sender_fname` varchar(20) NOT NULL,
  `sender_lname` varchar(20) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_phone` varchar(15) NOT NULL,
  `sender_address1` varchar(100) NOT NULL,
  `sender_address2` varchar(100) DEFAULT NULL,
  `sender_address3` varchar(100) DEFAULT NULL,
  `sender_postcode` varchar(10) NOT NULL,
  `sender_city` varchar(20) NOT NULL,
  `sender_country` varchar(30) NOT NULL,
  `sender_password` varchar(50) NOT NULL,
  `shipping_title` varchar(5) NOT NULL,
  `shipping_fname` varchar(20) NOT NULL,
  `shipping_lname` varchar(20) NOT NULL,
  `shipping_email` varchar(50) NOT NULL,
  `shipping_phone` varchar(15) NOT NULL,
  `shipping_address1` varchar(100) NOT NULL,
  `shipping_address2` varchar(100) DEFAULT NULL,
  `shipping_address3` varchar(100) DEFAULT NULL,
  `shipping_postcode` varchar(10) NOT NULL,
  `shipping_city` varchar(20) NOT NULL,
  `shipping_country` varchar(30) NOT NULL,
  `receiver_title` varchar(5) NOT NULL,
  `receiver_fname` varchar(20) NOT NULL,
  `receiver_lname` varchar(20) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `receiver_phone` varchar(15) NOT NULL,
  `receiver_address1` varchar(100) NOT NULL,
  `receiver_address2` varchar(100) DEFAULT NULL,
  `receiver_address3` varchar(100) DEFAULT NULL,
  `receiver_postcode` varchar(10) NOT NULL,
  `receiver_city` varchar(20) NOT NULL,
  `receiver_country` varchar(30) NOT NULL,
  `total_weight` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `charges` varchar(50) NOT NULL,
  `total_amt` varchar(50) NOT NULL,
  `booking_date` varchar(30) NOT NULL,
  `schedule_date` varchar(30) NOT NULL,
  `awb_no` varchar(50) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `ship_no`, `sender_title`, `sender_fname`, `sender_lname`, `sender_email`, `sender_phone`, `sender_address1`, `sender_address2`, `sender_address3`, `sender_postcode`, `sender_city`, `sender_country`, `sender_password`, `shipping_title`, `shipping_fname`, `shipping_lname`, `shipping_email`, `shipping_phone`, `shipping_address1`, `shipping_address2`, `shipping_address3`, `shipping_postcode`, `shipping_city`, `shipping_country`, `receiver_title`, `receiver_fname`, `receiver_lname`, `receiver_email`, `receiver_phone`, `receiver_address1`, `receiver_address2`, `receiver_address3`, `receiver_postcode`, `receiver_city`, `receiver_country`, `total_weight`, `price`, `charges`, `total_amt`, `booking_date`, `schedule_date`, `awb_no`, `browser`, `ip_address`, `confirm`) VALUES
(1, 48049587, 'Mr.', 'Nadim ', 'Patel', 'nadimpatel9595@gmail.com', '7048126978', 'C-303', 'Afrin Apartment', 'Manubar Road', '392001', 'Bharuch', 'India', 'Nadim 234Patel', 'Mr.', 'Nadim ', 'Patel', 'nadimpatel9595@gmail.com', '7048126978', 'C-303', 'Afrin Apartment', 'Manubar Road', '392001', 'Bharuch', 'India', 'Mr.', 'Raoaf', 'Patel', 'raoaf123@gmail.com', '9824160422', 'D-29', 'Pastry Road', 'Blackburn', 'BB1 1AQ', 'Blackburn', 'United-Kingdom', '26', '1600', '500', '42100', '2019-03-01 04:16:39 PM', '2019-03-01', '117951807247729', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_details`
--

CREATE TABLE `tbl_package_details` (
  `pac_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package_details`
--

INSERT INTO `tbl_package_details` (`pac_id`, `order_id`, `weight`, `width`, `length`, `height`) VALUES
(17, 1, 1, 10, 10, 10),
(18, 1, 2, 10, 10, 10),
(19, 1, 3, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_details`
--

CREATE TABLE `tbl_product_details` (
  `pro_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `boxno` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `vogoods` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_details`
--

INSERT INTO `tbl_product_details` (`pro_id`, `order_id`, `boxno`, `description`, `quantity`, `vogoods`) VALUES
(16, 1, 1, 'Pea Nuts,khajur', '5', '1500'),
(17, 1, 2, 'Pea Nuts,khajur,dry-fruit', '5', '1500'),
(18, 1, 3, 'Dryfruits', '2', '1600');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `s_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `date_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`s_id`, `order_id`, `status`, `remark`, `date_time`) VALUES
(1, 1, 'Pending', 'Order Placed', '2019-03-01 04:16:39 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_package_details`
--
ALTER TABLE `tbl_package_details`
  ADD PRIMARY KEY (`pac_id`);

--
-- Indexes for table `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_package_details`
--
ALTER TABLE `tbl_package_details`
  MODIFY `pac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
