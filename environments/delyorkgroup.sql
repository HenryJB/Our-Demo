-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 06:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delyorkgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Air conditions', 'This is Gree Air conditions'),
(2, 'Cars', 'GAC Cars'),
(3, 'Mobiles', '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1522060305),
('m130524_201442_init', 1522060311);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_code` varchar(30) CHARACTER SET latin1 NOT NULL,
  `order_content` longtext CHARACTER SET latin1 NOT NULL,
  `order_total` longtext CHARACTER SET latin1 NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT '0',
  `payment_method` varchar(8) CHARACTER SET latin1 NOT NULL,
  `payment_status` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'unpaid',
  `delivery_address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `delivery_instruction` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `delivery_time` time DEFAULT NULL,
  `recipient_lastname` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `recipient_firstname` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `recipient_phoneno` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `recipient_email` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `discount_code` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `notified` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `deactivate` tinyint(1) NOT NULL DEFAULT '0',
  `cancel_reason_id` int(11) NOT NULL,
  `payment_reference` varchar(25) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `category_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `modelNo` varchar(50) DEFAULT NULL,
  `manufactureDate` date DEFAULT NULL,
  `cost` double NOT NULL,
  `warranty` int(11) DEFAULT NULL,
  `isFeatured` tinyint(1) NOT NULL,
  `isNew` tinyint(1) NOT NULL,
  `imageUrl` varchar(200) NOT NULL,
  `imageUrl2` varchar(200) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `type`, `modelNo`, `manufactureDate`, `cost`, `warranty`, `isFeatured`, `isNew`, `imageUrl`, `imageUrl2`, `date`) VALUES
(1, 'Mobile Phone1', '', 3, 'asicshih', '83038', '2018-03-10', 8790, 6, 1, 1, '3.jpg', '4.jpg', '2018-03-27'),
(2, 'GREE 2.0 TON CABINET AIR CONDITIONER ', 'Vertical cross fan flow, sensitive touch buttons, G10 tchnology.', 1, 'Vertical', 'GF24CD', '2006-03-27', 45000, 3, 1, 1, 'images.jpeg', 'inverter-air-conditioner.png', '2018-03-27'),
(3, 'Mobile Phone2', 'This is mobile Phone 2', 3, 'Samsung', '', '2006-03-07', 13000, 2, 1, 0, '3.jpg', '5.jpg', '2018-03-27'),
(4, 'Gree Floor Standing Air Conditioner 4.0 Ton', 'Gree Floor Standing Air Conditioner 4.0', 1, 'Floor Standing', '', '2018-03-09', 49000, 3, 0, 0, 'Gree-1.5-ton-Split.jpg', 'Gree-1.5-ton-Split2.jpeg', '2018-03-28'),
(5, 'Gree Neo ', '', 1, 'AC', 'GREE09', '2016-07-05', 45000, 3, 1, 1, 'gree_neo24hp230v1a_article_1418943494728_en_normal.jpeg', 'gree-ductless-mini-splits-multi18hp200-64_1000.jpg', '2018-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'henry', 't--SgwghcPN4ke7OPHMuR4M0p6YnzL6Y', '$2y$13$RQ3j8ULQHx.kTa3BblJxqO817O/IASe.79AGPdGT1pk7flaxGHySW', NULL, 'henry@delyorkgroup.com', 10, 1522060384, 1522060384);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
