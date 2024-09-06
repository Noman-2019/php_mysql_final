-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 09:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_users` (IN `em` VARCHAR(50), IN `pass` CHAR(32), IN `full` VARCHAR(100))   INSERT INTO users(id,email,password,fullname) VALUES (NULL,em,pass,full)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_users1` (IN `em` VARCHAR(50), IN `pass` CHAR(32), IN `full` VARCHAR(100))   INSERT INTO users(id,email,password,fullname) VALUES (NULL,em,pass,full)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory` (OUT `inv` INT)   SELECT 45 INTO inv$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` smallint(6) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_name`) VALUES
(1, 'winter Clothes'),
(2, 'summer clothes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` varchar(400) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_quantity` smallint(6) NOT NULL,
  `product_category` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_details`, `product_price`, `product_quantity`, `product_category`) VALUES
(1, 'dfdfdas', 'asdsadsa', '100', 10, 2),
(2, 'Nom', 'dfgfdsgg', '0', 0, 2),
(5, 'rtyyr', 'retretr', '20', 10, 2),
(6, 'bncvbv', 'dfgghh', '300', 40, 1),
(9, 'nm', 'jk', '20', 20, 1),
(13, 'sdfdsfs', 'dfsdfs', '100', 10, 1),
(15, 'Abdullah', 'Al noman', '100', 100, 1),
(22, 'hello', 'asdasd', '20', 22222, 1),
(23, 'hello', 'asdasd', '20', 22222, 1),
(24, 'hello', 'asdasd', '20', 22222, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`) VALUES
(1, 'saif@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'saif jahan Dewana'),
(2, 'rakib@gmail.com', 'abc123', 'mahmudul haque'),
(3, 'noman@gmail.com', 'abc123', 'abdullah al noman'),
(4, 'arif@gmail.com', 'abc123', 'arif ahmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cat_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
