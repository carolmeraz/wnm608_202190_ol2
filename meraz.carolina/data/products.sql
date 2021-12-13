-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2021 at 08:12 PM
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
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Vases', 15.00, 'decoration', '2021-11-06 12:47:23', '2021-11-06 12:47:23', 'Vases for every flower in your home', 'img/vases1.jpg', 'img/vases1.jpg,img/cups2.jpg,img/bowl_set5.jpg', 100),
(2, 'Cups', 10.00, 'kitchen', '2021-11-06 12:48:19', '2021-11-06 12:48:19', 'Cups for every morning', 'img/cups2.jpg', 'img/cups2.jpg, img/vases1.jpg,img/bowl_set5.jpg', 100),
(3, 'Soup Plate', 12.00, 'kitchen', '2021-11-06 12:49:31', '2021-11-06 12:49:31', 'Soup plates for every dinner', 'img/soup_plate3.jpg', 'img/soup_plate3.jpg, img/cups2.jpg,img/bowl_set5.jpg', 100),
(4, 'Flower Vases', 45.00, 'decoration', '2021-11-06 12:50:49', '2021-11-06 12:50:49', 'Flower vases for your home', 'img/flower_vases4.jpg', 'img/flower_vases4.jpg, img/vases1.jpg,img/bowl_set5.jpg', 100),
(5, 'Bowl Set', 60.00, 'kitchen', '2021-11-06 12:51:59', '2021-11-06 12:51:59', 'Bowl set to enhance your kitchen', 'img/bowl_set5.jpg', 'img/bowl_set5.jpg, img/cups2.jpg,img/vases1.jpg', 100),
(6, 'Water Bowl', 15.00, 'kitchen', '2021-11-06 12:52:57', '2021-11-06 12:52:57', 'Sustainable water bowl', 'img/water_bowl6.jpg', 'img/water_bowl6.jpg, img/cups2.jpg,img/bowl_set5.jpg', 100),
(7, 'Dessert Plate', 13.00, 'kitchen', '2021-11-06 12:54:29', '2021-11-06 12:54:29', 'Dessert plate, ideal for cheesecakes ', 'img/dessert_plate7.jpg', 'img/dessert_plate7.jpg, img/vases1.jpg,img/bowl_set5.jpg', 100),
(8, 'Container', 15.00, 'kitchen', '2021-11-06 12:55:32', '2021-11-06 12:55:32', 'Container for sugar or candies, can also be use as decoration', 'img/container8.jpg', 'img/container8.jpg, img/cups2.jpg,img/bowl_set5.jpg', 100),
(9, 'Glasses', 12.00, 'kitchen', '2021-11-06 12:56:27', '2021-11-06 12:56:27', 'Sustainable glasses', 'img/glasses9.jpg', 'img/glasses9.jpg, img/cups2.jpg,img/bowl_set5.jpg', 100),
(10, 'Plant Vases', 50.11, 'decoration', '2021-11-06 12:57:28', '2021-12-08 11:53:50', 'Elegant plant vases to decorate any room of your house', 'img/plant_vases10.jpg', 'img/plant_vases1-.jpg, img/cups2.jpg,img/bowl_set5.jpg', 99),
(11, 'Open Flower Vases', 25.00, 'decoration', '2021-11-06 12:59:21', '2021-11-06 12:59:21', 'Flower vases with an open at the top, ideal for small flower bouquet or just for decoration', 'img/open_flower_vases11.jpg', 'img/open_flower_vases11.jpg, img/cups2.jpg,img/bowl_set5.jpg', 100),
(15, 'Milk & Cups Set', 60.00, 'kitchen', '2021-12-06 18:05:20', '2021-12-06 18:05:42', 'Milk jar and cups for every morning breakfast', 'img/milk_cups_set12.jpg', 'img/milk_cups_set12.jpg, img/plant_vases10.jpg, img/glasses9.jpg', 15);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
