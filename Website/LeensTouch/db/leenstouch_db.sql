-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 06:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leenstouch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(1) NOT NULL,
  `first_paragraph` varchar(750) NOT NULL,
  `second_paragraph` varchar(750) NOT NULL,
  `third_paragraph` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(5) NOT NULL,
  `house_number` int(6) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `province` varchar(30) NOT NULL,
  `appartment` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(6) NOT NULL,
  `upc` int(13) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `custom_id` int(8) DEFAULT NULL,
  `quantity` int(2) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customization`
--

CREATE TABLE `customization` (
  `custom_id` int(8) NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(7) NOT NULL,
  `user_id` int(4) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `total_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `status`, `total_price`) VALUES
(1, 4, '', 36.00),
(2, 4, 'Shipped', 58.50);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(7) NOT NULL,
  `upc` int(13) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(2) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `custom_text` varchar(500) NOT NULL,
  `custom_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `upc`, `product_name`, `quantity`, `unit_price`, `custom_text`, `custom_image`) VALUES
(2, 1, 1240, 'Beaded Bracelet', 1, 4.00, 'No Customization wanted, just like the picture', NULL),
(3, 1, 1239, 'Name Clutch ', 1, 32.00, 'Name. \"KMS\"', NULL),
(5, 2, 1240, 'Beaded Bracelet', 2, 4.00, 'bla bla bla auybvyiurlqvlyasdbvylsabvr', NULL),
(6, 2, 1241, 'Beach Hat', 2, 23.00, 'THe name is \"Karen\" in blue \"Karen bond 007\"', NULL),
(7, 2, 1238, 'Stacked Necklaces', 2, 27.50, 'N/A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `upc` int(13) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `colour` varchar(15) NOT NULL,
  `quantity` int(2) NOT NULL,
  `fulfill_time` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`upc`, `product_name`, `product_type`, `description`, `price`, `image`, `colour`, `quantity`, `fulfill_time`) VALUES
(1238, 'Stacked Necklaces', '', 'Three stackable necklaces: A small beaded necklace, a chain and an evil eye chain', 27.50, '6273e67a534b0.jpg', 'Golden', 3, 0),
(1239, 'Name Clutch', '', 'Weaved clutch with dual coloured stripe down the middle. Customizable with any word', 32.00, '6273e6fb15e06.jpg', 'Blue and white', 9, 0),
(1240, 'Beaded Bracelet', '', 'Faceted beaded bracelet', 4.00, '6273e75843777.jpg', 'red', 13, 0),
(1241, 'Beach Hat', '', 'Beach hat, customizable with any name', 23.00, '6273e792e76d8.jpg', 'black', 0, 0),
(1242, 'Bracelet stack', '', 'Three bracelets, first with flat beads and a letter, second with round beads and both an evil eye and a letter, last one with flat beads and a name', 15.00, '6273e7cda82fa.jpg', 'blue and white', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address_id` int(5) DEFAULT NULL,
  `promotions` tinyint(1) NOT NULL,
  `cart_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `fname`, `lname`, `address_id`, `promotions`, `cart_id`) VALUES
(1, 'leen.touch1@gmail.com', '$2y$10$g7epNda/PGnowcRAEIh.qOlya1dA07rIAEPiyk19bLuA.K883gT0.', 'Leen', 'Antoun', NULL, 1, NULL),
(4, 'kerian@loerick.com', '$2y$10$fWbual2Kgqtv.nI9IPmZAeGDNPR9nhm/3TYZn00U60AX1uC4nqEeO', 'Kerian', 'L', NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `FK_UPC` (`upc`),
  ADD KEY `FK_CUSTOM_ID` (`custom_id`),
  ADD KEY `userfk` (`user_id`);

--
-- Indexes for table `customization`
--
ALTER TABLE `customization`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_USER_ID` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `orderid_fk` (`order_id`),
  ADD KEY `upc_fk` (`upc`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`upc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_ADDRESS_ID` (`address_id`),
  ADD KEY `FK_CART_ID` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
  MODIFY `custom_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `upc` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1243;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CUSTOM_ID` FOREIGN KEY (`custom_id`) REFERENCES `customization` (`custom_id`),
  ADD CONSTRAINT `FK_UPC` FOREIGN KEY (`upc`) REFERENCES `products` (`upc`),
  ADD CONSTRAINT `userfk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_USER_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `orderid_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `upc_fk` FOREIGN KEY (`upc`) REFERENCES `products` (`upc`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_ADDRESS_ID` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_CART_ID` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
