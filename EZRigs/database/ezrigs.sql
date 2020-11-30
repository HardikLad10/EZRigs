-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezrigs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_type` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_type`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Gigabyte', 'Gigabyte GTX 1660Ti', 279.99, './assets/products/GIGABYTEAORUSX57011.jpg', NOW()), -- NOW()
(2, 'Corsair', 'Corsair Vengeance 32 GB', 135.99, './assets/products/Corsair Vengeance32gb12.jpg', NOW()),
(3, 'Intel', 'Intel i9-10900K', 509.99, './assets/products/Inteli910900K11.jpg', NOW()),
(4, 'Gigabyte', 'Gigabyte Aorus X570', 194.99, './assets/products/GIGABYTEAORUSX57011.jpg', NOW()),
(5, 'AMD', 'AMD Ryzen 9 3950X', 709.99, './assets/products/Ryzen-9-3950X11.jpg', NOW()),
(6, 'G.Skill', 'G.Skill TridentZ 16GB', 83.99, './assets/products/TridentGskill16gb11.jpg', NOW()),
(7, 'MSI', 'MSI RTX 2060 Super', 389.99, './assets/products/MSIRTX2060Super11.jpg', NOW()),
(8, 'Gigabyte', 'Gigabyte Z490 Xtreme', 981.44, './assets/products/GIGABYTEZ490Xtreme11.jpg', NOW()),
(9, 'Gigabyte', 'Gigabyte B450M', 71.99, './assets/products/Gigabyteb450M12.jpg', NOW()),
(10, 'AMD', 'AMD Ryzen 5 3600X', 239.99, './assets/products/Ryzen5360011.jpg', NOW()),
(11, 'Intel', 'Intel i7-9700K', 289.99, './assets/products/Inteli79700K11.jpg', NOW()),
(12, 'AMD', 'AMD Ryzen 5 3600XT', 233.33, './assets/products/Ryzen53600xt11.jpg', NOW()),
(13, 'Gigabyte', 'Gigabyte Aorus RTX 2080Ti', 1343.99, './assets/products/aorus-2080ti11.jpg', NOW()),
(14, 'AMD', 'AMD Ryzen 7 3700X', 304.99, './assets/products/Ryzen53600xt11.jpg', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Admin', 'Admin', '2020-03-28 13:07:17'),
(2, 'Jairaj', 'Saraf', '2020-03-28 13:07:17'),
(3, 'Hardik', 'Lad', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
