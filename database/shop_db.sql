-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 11:11 AM
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
(54, '', 'Sweatshirt', '40.00', 'Man-Wear-Featured-Items-04.jpg', '1'),
(55, '', 'Oversized Tie-Dye T-Shirt', '18.00', 'Men-Wear-NewArrival-03.jpg', '1'),
(58, '', 'Dress', '25.00', 'DressP.png', '1'),
(59, 'Tali123', 'White Sweatshirt', '20.00', 'WhiteS.png', '1'),
(61, 'Tali123', 'Skater Skirt', '30.00', 'SkaterSkirt.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `indexfeaturecategories`
--

CREATE TABLE `indexfeaturecategories` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indexfeaturecategories`
--

INSERT INTO `indexfeaturecategories` (`id`, `img`, `name`) VALUES
(1, 'Men-Wear-NewArrival-01.jpg', 'Men'),
(2, 'WhiteS.png', 'Women'),
(3, 'ecohoodie.png', 'Children'),
(4, 'Man-Wear-Sale-03.jpg', 'Trousers'),
(5, 'FeatureSkirts.png', 'Skirts');

-- --------------------------------------------------------

--
-- Table structure for table `indexfeatureitems`
--

CREATE TABLE `indexfeatureitems` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'indexfeatureitems',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indexfeatureitems`
--

INSERT INTO `indexfeatureitems` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'indexfeatureitems', 'Men-Wear-NewArrival-05.jpg', 'Hoodie', '40.00'),
(2, 'indexfeatureitems', 'DressH.png', 'Dress', '29.00');

-- --------------------------------------------------------

--
-- Table structure for table `indexnewarriwal`
--

CREATE TABLE `indexnewarriwal` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'indexnewarriwal',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indexnewarriwal`
--

INSERT INTO `indexnewarriwal` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'indexnewarriwal', 'Man-Wear-Sale-02.jpg', 'Man Pants', '35.00'),
(3, 'indexnewarriwal', 'Man-Wear-Featured-Items-04.jpg', 'Sweatshirt', '40.00'),
(4, 'indexnewarriwal', 'DressP.png', 'Dress', '25.00'),
(5, 'indexnewarriwal', 'FeatureSkirts.png', 'Skirt', '20.00'),
(8, 'indexnewarriwal', 'KidCoverT.png', 'T-shirt', '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `kidsfeatureitems`
--

CREATE TABLE `kidsfeatureitems` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'kidsfeatureitems',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kidsfeatureitems`
--

INSERT INTO `kidsfeatureitems` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'kidsfeatureitems', 'ecohoodie.png', 'Eco hoodie', '20.00'),
(2, 'kidsfeatureitems', 'denimJ.png', 'Denim Jacket', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `kidsnewarrival`
--

CREATE TABLE `kidsnewarrival` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'kidsnewarrival',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kidsnewarrival`
--

INSERT INTO `kidsnewarrival` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'kidsnewarrival', 'KidCoverH.png', 'Hoodie', '20.00'),
(2, 'kidsnewarrival', 'kidsH2.png', 'Black Hoodie', '20.00'),
(4, 'kidsnewarrival', 'jacketK.png', 'Jacket', '25.00'),
(5, 'kidsnewarrival', 'KidsTshirt.png', 'Neck T-shirt', '25.00'),
(6, 'kidsnewarrival', 'KidsTshirt2.png', 'Neck T-shirt', '25.00'),
(7, 'kidsnewarrival', 'bbkids.png', 'Baby Short Sleeve One Piece', '10.00'),
(8, 'kidsnewarrival', 'babybib.png', 'Baby bib', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `menfeatureitems`
--

CREATE TABLE `menfeatureitems` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'menfeatureitems',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menfeatureitems`
--

INSERT INTO `menfeatureitems` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'menfeatureitems', 'Man-Wear-Featured-Items-01.jpg', 'Classic Polo Shirt', '15.00'),
(2, 'menfeatureitems', 'Man-Wear-Featured-Items-02.jpg', 'Sleeve Raglan Shirt', '19.00'),
(3, 'menfeatureitems', 'Man-Wear-Featured-Items-03.jpg', 'Athletic Long Shorts', '27.00'),
(4, 'menfeatureitems', 'Man-Wear-Featured-Items-04.jpg', 'Champion Sweatshirt', '39.00');

-- --------------------------------------------------------

--
-- Table structure for table `mennewarrival`
--

CREATE TABLE `mennewarrival` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'mennewarrival',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mennewarrival`
--

INSERT INTO `mennewarrival` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'mennewarrival', 'Men-Wear-NewArrival-01.jpg', 'Crew Neck T-Shirt', '15.00'),
(2, 'mennewarrival', 'Men-Wear-NewArrival-02.jpg', 'Heavyweight Tee', '12.00'),
(3, 'mennewarrival', 'Men-Wear-NewArrival-03.jpg', 'Oversized Tie-Dye T-Shirt', '18.00'),
(4, 'mennewarrival', 'Men-Wear-NewArrival-04.jpg', 'Tri-Blend T-Shirt', '16.00'),
(5, 'mennewarrival', 'Men-Wear-NewArrival-05.jpg', 'Champion Tie-Dye Hoodie', '52.00'),
(6, 'mennewarrival', 'Men-Wear-NewArrival-06.jpg', 'Essential Eco Hoodie', '39.00'),
(8, 'mennewarrival', 'Men-Wear-NewArrival-08.jpg', 'Lightweight Hoodie | District', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'Tali123', 'keyazdestroyer@gmail.com', 'caea2cb5019473ae10042518c7f5fc23', 'admin'),
(3, 'Tali12345', 'asdasd@asdasd.com', 'caea2cb5019473ae10042518c7f5fc23', 'user'),
(5, 'Taulant123123', 'asd@as.com', 'caea2cb5019473ae10042518c7f5fc23', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `womenfeatureitems`
--

CREATE TABLE `womenfeatureitems` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'womenfeatureitems',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `womenfeatureitems`
--

INSERT INTO `womenfeatureitems` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'womenfeatureitems', 'dressP2.png', 'Dress', '50.00'),
(2, 'womenfeatureitems', 'Thoodie.png', 'Drawstring T-shirt', '48.00'),
(3, 'womenfeatureitems', 'neckT.png', 'Nect T-shirt', '30.00'),
(4, 'womenfeatureitems', 'pullover.png', 'Pullover', '44.99');

-- --------------------------------------------------------

--
-- Table structure for table `womennewarrival`
--

CREATE TABLE `womennewarrival` (
  `id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL DEFAULT 'womennewarrival',
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `womennewarrival`
--

INSERT INTO `womennewarrival` (`id`, `table`, `img`, `name`, `price`) VALUES
(1, 'womennewarrival', 'FeatureHoodies.png', 'Eco Hoodie', '25.00'),
(2, 'womennewarrival', 'Hoodie2.png', 'Eco Hoodie', '25.00'),
(3, 'womennewarrival', 'WhiteS.png', 'White Sweatshirt', '20.00'),
(4, 'womennewarrival', 'BlackS.png', 'Black Sweatshirt', '20.00'),
(5, 'womennewarrival', 'SkaterSkirt.png', 'Skater Skirt', '30.00'),
(6, 'womennewarrival', 'DressH.png', 'Dress Hoodie', '40.00'),
(7, 'womennewarrival', 'DressP.png', 'Print Dress', '35.00'),
(8, 'womennewarrival', 'denimT.png', 'Denim T-Shirt', '12.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexfeaturecategories`
--
ALTER TABLE `indexfeaturecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexfeatureitems`
--
ALTER TABLE `indexfeatureitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexnewarriwal`
--
ALTER TABLE `indexnewarriwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidsfeatureitems`
--
ALTER TABLE `kidsfeatureitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidsnewarrival`
--
ALTER TABLE `kidsnewarrival`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womenfeatureitems`
--
ALTER TABLE `womenfeatureitems`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `indexfeaturecategories`
--
ALTER TABLE `indexfeaturecategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `indexfeatureitems`
--
ALTER TABLE `indexfeatureitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `indexnewarriwal`
--
ALTER TABLE `indexnewarriwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kidsfeatureitems`
--
ALTER TABLE `kidsfeatureitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kidsnewarrival`
--
ALTER TABLE `kidsnewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menfeatureitems`
--
ALTER TABLE `menfeatureitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mennewarrival`
--
ALTER TABLE `mennewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `womenfeatureitems`
--
ALTER TABLE `womenfeatureitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `womennewarrival`
--
ALTER TABLE `womennewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
