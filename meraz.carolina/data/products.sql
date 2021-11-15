-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2021 at 11:52 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmeraz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`) VALUES
(1, 'vases', 15.00, 'decoration', '2021-11-06 12:47:23', '2021-11-06 12:47:23', 'Vases for every flower in your home', 'img/vases1.jpg'),
(2, 'cups', 10.00, 'kitchen', '2021-11-06 12:48:19', '2021-11-06 12:48:19', 'Cups for every morning', 'img/cups2.jpg'),
(3, 'soup_plate', 12.00, 'kitchen', '2021-11-06 12:49:31', '2021-11-06 12:49:31', 'Soup plates for every dinner', 'img/soup_plate3.jpg'),
(4, 'flower_vases', 45.00, 'decoration', '2021-11-06 12:50:49', '2021-11-06 12:50:49', 'Flower vases for your home', 'img/flower_vases4.jpg'),
(5, 'bowl_set', 60.00, 'kitchen', '2021-11-06 12:51:59', '2021-11-06 12:51:59', 'Bowl set to enhance your kitchen', 'img/bowl_set5.jpg'),
(6, 'water_bowl', 15.00, 'kitchen', '2021-11-06 12:52:57', '2021-11-06 12:52:57', 'Sustainable water bowl', 'img/water_bowl6.jpg'),
(7, 'dessert_plate', 13.00, 'kitchen', '2021-11-06 12:54:29', '2021-11-06 12:54:29', 'Dessert plate, ideal for cheesecakes ', 'img/dessert_plate7.jpg'),
(8, 'container', 15.00, 'kitchen', '2021-11-06 12:55:32', '2021-11-06 12:55:32', 'Container for sugar or candies, can also be use as decoration', 'img/container8.jpg'),
(9, 'glasses', 12.00, 'kitchen', '2021-11-06 12:56:27', '2021-11-06 12:56:27', 'Sustainable glasses', 'img/glasses9.jpg'),
(10, 'plant_vases', 50.00, 'decoration', '2021-11-06 12:57:28', '2021-11-06 12:57:28', 'Elegant plant vases to decorate any room of your house', 'img/plant_vases10.jpg'),
(11, 'open_flower_vases', 25.00, 'decoration', '2021-11-06 12:59:21', '2021-11-06 12:59:21', 'Flower vases with an open at the top, ideal for small flower bouquet or just for decoration', 'img/open_flower_vases11.jpg'),
(12, 'milk_cups_set', 60.00, 'kitchen', '2021-11-06 13:00:17', '2021-11-06 13:00:17', 'Milk jar and cups for every morning breakfast', 'img/milk_cups_set12.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
