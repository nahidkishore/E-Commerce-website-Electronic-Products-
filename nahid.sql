-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 06:43 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nahid`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'DELL'),
(3, 'SONY'),
(4, 'ASUS'),
(5, 'HUAWEI'),
(6, 'SAMSUNG');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Computes'),
(3, 'Mobiles'),
(4, 'Hardwares'),
(5, 'Cameras');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(200) NOT NULL,
  `product_cat` int(200) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(13, 1, 2, 'DELL laptop', 0, '<p>love this</p>', 'dell-laptops-500x500.jpg', 'DELl new'),
(16, 2, 2, 'DELL ', 400, '<p>fffff</p>', 'dell-laptops-500x500.jpg', 'dell'),
(17, 2, 2, 'DELL ', 666, '<p>eeee</p>', 'dell-laptops-500x500.jpg', 'DELl new'),
(18, 2, 1, 'DELL ', 500, '<p>ttttt</p>', 'download (1).jpg', 'dell'),
(19, 2, 2, 'DELL ', 555, '<p>gtggg</p>', 'download.jpg', 'dell'),
(20, 1, 1, 'HP Pavilion 14', 50000, '<ul class=\"to-print\" style=\"margin: 0px 0px 1em; padding: 0px 0px 0px 1.2em; color: #222222; font-family: Helvetica, Arial, sans-serif; font-size: 13px;\">\r\n<li style=\"margin-bottom: 0.25em;\">Achieve: Fast computing with the latest tech</li>\r\n<li style=\"margin-bottom: 0.25em;\">Intel&reg; Core&trade; i7-8550U Processor</li>\r\n<li style=\"margin-bottom: 0.25em;\">RAM: 8 GB / Storage: 256 GB SSD</li>\r\n<li style=\"margin-bottom: 0.25em;\">Graphics: NVIDIA GeForce MX130 2 GB</li>\r\n<li style=\"margin-bottom: 0.25em;\">Full HD display</li>\r\n</ul>', 'u_10180942.jpg', 'HP new'),
(21, 3, 3, 'sony', 40000, '<p>sony mobile</p>', '81OfVyc4zXL._SX569_.jpg', 'mobile'),
(22, 3, 5, 'Huawei p20', 400, '<p>new mobile</p>', 'Huawei-P20-Pro-Pink.jpg', 'new mobile'),
(23, 5, 3, 'sony camera', 560, '<p>sony new camera</p>', 'sony_ilce_6400m_b_alpha_a6400_mirrorless_digital_1453771.jpg', 'new camera'),
(24, 3, 5, 'Huawei nova 2i', 400, '<p>nova new mobile</p>', 'Huawei-Nova-2i-RNEL22-Stock-firmware.jpg', 'new mobile'),
(25, 1, 1, 'HP laptop', 600, '<p>hp laptop...</p>', 'c05962448.png', 'hp'),
(26, 3, 6, 'Samsung Galaxy S8 ', 400, '<p>samsung galaxy S8</p>', 'giant_56001.jpg', 'samsung, s8'),
(27, 1, 4, 'Asus laptop', 550, '<p>asus new laptop...</p>', 'x407ua-500x500.jpg', 'Asus, asus, laptop'),
(28, 1, 1, 'HP Pavilion 15', 800, '<p>HP Pavilion 15</p>', 'adba4659a30aba645dea80a0a1f6d63b.jpg', 'hp,HP, laptop,pavilion');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mobile` varchar(50) NOT NULL,
  `user_addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `first_name`, `last_name`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_addr`) VALUES
(1, 'nahid', 'islam', 'nahid islam', 'nahid@gmail.com', 'Nahid123', '01776180002', 'Rampura'),
(2, 'nahid', 'kishore', 'nahid kishore', 'nahidkishore99@gmail.com', 'Nahid123', '01776180002', 'Rampura'),
(3, 'nahid', 'niloy', 'nahid niloy', 'nahidkishore0002@gmail.com', 'Niloy123', '01688815749', 'katiadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`,`ip_add`,`qty`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
