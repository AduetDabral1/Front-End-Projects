-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 03:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Acer Aspire 7', 57000),
(2, 'Acer Nitro 7', 100000),
(3, 'Acer Predator Helios', 130000),
(4, 'Acer Nitro 5', 70000),
(5, 'Lenovo V110', 35000),
(6, 'Lenovo IdeaPad D330-10IGM', 36000),
(7, 'Lenovo Thinkbook 14s', 65000),
(8, 'Lenovo Z510', 50000),
(9, 'HP Spectre x360', 90000),
(10, 'HP Pavilion 13', 45000),
(11, 'HP Pavilion Gaming', 74000),
(12, 'HP 15', 60000),
(13, 'Asus Zephyrus S17', 130000),
(14, 'Asus Tuf Gaming A15', 150000),
(15, 'Asus Zenbook Pro Duo 15', 260000),
(16, 'ASUS VivoBook S14', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Kara Olsen', 'olsen.kara@gmail.com', 'e78672833e2b8c80e79d286cde6a1c4a', '9090909090', 'National City', 'CatCo Media Relations'),
(2, 'Oliver Smoak', 'oli.smoak@hotmail.com', '0fa624e3ad0ec67fc4f9c75f1015b209', '9898989898', 'Star City', 'Smoak Enterprises'),
(3, 'Barry West', 'barrywest@gmail.com', '0aa42d4addee6016a46d0a29518e402a', '9878987898', 'Central City', 'Star Labs'),
(4, 'Sarah Sharpe', 'sharpe_sarah@yahho.com', 'e5666a435tgo0902d303400wd2348','9990012558', 'West Coast City', 'Temporal Zone'),
(5, 'Harrison Wayne', 'reverseflash@gmail.com', '0f00ee4566d5900v1267bb89u001g', '0999114472', 'Gotham City', 'Wayne Industries');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 1, 6, 'Confirmed'),
(3, 1, 3, 'Confirmed'),
(4, 2, 4, 'Added to cart'),
(5, 1, 4, 'Confirmed'),
(6, 1, 6, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;