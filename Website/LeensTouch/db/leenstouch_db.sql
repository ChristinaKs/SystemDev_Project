-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 08:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `total_price` double NOT NULL,
  `custom_id` int(8) DEFAULT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `upc`, `total_price`, `custom_id`, `quantity`) VALUES
(1, 1234, 120, NULL, 0),
(2, 1234, 120, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customization`
--

CREATE TABLE `customization` (
  `custom_id` int(8) NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`custom_id`, `text`, `image`) VALUES
(1, 'This is my order text', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(7) NOT NULL,
  `user_id` int(4) NOT NULL,
  `cart_id` int(6) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `upc` int(13) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `colour` varchar(15) NOT NULL,
  `quantity` int(2) NOT NULL,
  `fulfill_time` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`upc`, `product_name`, `product_type`, `description`, `price`, `image`, `colour`, `quantity`, `fulfill_time`) VALUES
(1234, 'Blue Bag', 'Bag', 'This is a satchel', 120, '245222320_543794790063973_4504688221895774228_n.jpg', 'Beige,Black', 3, 7),
(1235, 'Black Bag', 'Bag', 'This is a bag', 70, '269900631_5151348744931452_7872243565783486310_n.jpg', 'Blue', 0, 99);

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
(1, 'leen.touch1@gmail.com', '$2y$10$g7epNda/PGnowcRAEIh.qOlya1dA07rIAEPiyk19bLuA.K883gT0.', 'Leen', 'Antoun', NULL, 1, NULL);

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
  ADD KEY `FK_CUSTOM_ID` (`custom_id`);

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
  ADD KEY `FK_USER_ID` (`user_id`),
  ADD KEY `FK_CART_ID` (`cart_id`);

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
  MODIFY `cart_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
  MODIFY `custom_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `upc` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1238;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CUSTOM_ID` FOREIGN KEY (`custom_id`) REFERENCES `customization` (`custom_id`),
  ADD CONSTRAINT `FK_UPC` FOREIGN KEY (`upc`) REFERENCES `products` (`upc`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CART_ID` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `FK_USER_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_ADDRESS_ID` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
