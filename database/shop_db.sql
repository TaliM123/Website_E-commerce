-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 10:13 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `name`, `price`, `img`, `quantity`) VALUES
(24, 'Tali123', 'Unisex Tri-Blend T-Shirt', '16.00', 'Men-Wear-NewArrival-04.jpg', '7'),
(25, 'Tali123', 'Oversized Tie-Dye T-Shirt', '18.00', 'Men-Wear-NewArrival-03.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menfeatureitems`
--

CREATE TABLE `menfeatureitems` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menfeatureitems`
--

INSERT INTO `menfeatureitems` (`id`, `img`, `name`, `price`) VALUES
(1, 'Man-Wear-Featured-Items-01.jpg', 'Classic Polo Shirt | Gildan 3800', '15.00'),
(2, 'Man-Wear-Featured-Items-02.jpg', 'Sleeve Raglan Shirt | Tultex 245', '19.00'),
(3, 'Man-Wear-Featured-Items-03.jpg', 'Men\'s Athletic Long Shorts', '27.00'),
(4, 'Man-Wear-Featured-Items-04.jpg', 'Men\'s Champion Sweatshirt', '39.00');

-- --------------------------------------------------------

--
-- Table structure for table `mennewarrival`
--

CREATE TABLE `mennewarrival` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mennewarrival`
--

INSERT INTO `mennewarrival` (`id`, `img`, `name`, `price`) VALUES
(1, 'Men-Wear-NewArrival-01.jpg', 'All-Over Print Men\'s Crew Neck T-Shirt', '15.00'),
(2, 'Men-Wear-NewArrival-02.jpg', 'Men\'s Heavyweight Tee', '12.00'),
(3, 'Men-Wear-NewArrival-03.jpg', 'Oversized Tie-Dye T-Shirt', '18.00'),
(4, 'Men-Wear-NewArrival-04.jpg', 'Unisex Tri-Blend T-Shirt', '16.00'),
(5, 'Men-Wear-NewArrival-05.jpg', 'Unisex Champion Tie-Dye Hoodie', '52.00'),
(6, 'Men-Wear-NewArrival-06.jpg', 'Unisex Essential Eco Hoodie', '39.00'),
(7, 'Men-Wear-NewArrival-07.jpg', 'Hoodie | Stanley/Stella STSU824', '36.00'),
(8, 'Men-Wear-NewArrival-08.jpg', 'Unisex Lightweight Hoodie | District DT571', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `womennewarrival`
--

CREATE TABLE `womennewarrival` (
  `id` int(11) NOT NULL,
  `img` int(255) NOT NULL,
  `name` int(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menfeatureitems`
--
ALTER TABLE `menfeatureitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mennewarrival`
--
ALTER TABLE `mennewarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womennewarrival`
--
ALTER TABLE `womennewarrival`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menfeatureitems`
--
ALTER TABLE `menfeatureitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mennewarrival`
--
ALTER TABLE `mennewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `womennewarrival`
--
ALTER TABLE `womennewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
