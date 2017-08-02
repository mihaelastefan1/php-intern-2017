-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 09:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `favorite_product` text COLLATE utf8_unicode_ci NOT NULL,
  `user_job` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `favorite_product`, `user_job`, `image`) VALUES
(238, 'Geanta', 'Neagra', 100, 'favorite', 'else', 'geanta.jpg'),
(239, 'Laptop', 'Acer', 1200, 'favorite', 'gadget', 'laptop.jpg'),
(240, 'Masina', 'Cielo', 1290, 'favorite', 'funny', 'masina.jpg'),
(241, 'Mouse', 'Wireless', 120, 'favorite', 'gadget', 'mouse.jpg'),
(242, 'Pix', 'Rosu', 10, 'favorite', 'else', 'pix.jpg'),
(243, 'Tastatura', 'wireless', 300, 'favorite', 'gadget', 'tastatura.jpg'),
(246, 'Phone', 'Nokia', 457, 'no', 'gadget', 'nokia.jpg'),
(247, 'Caiet', 'A4', 20, 'yes', 'funny', 'caiete.jpg'),
(248, 'Drona', 'CAMERA VIDEO, 2.4 GHz', 1000, 'yes', 'gadget', 'drona.jpg'),
(249, 'Robot', 'Ceva', 1200, 'yes', 'somthing', 'images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
