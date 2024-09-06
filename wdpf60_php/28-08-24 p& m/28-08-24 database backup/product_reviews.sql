-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 09:00 AM
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
-- Database: `product_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_reviewss`
--

CREATE TABLE `product_reviewss` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_reviewss`
--

INSERT INTO `product_reviewss` (`id`, `comment_id`, `email`, `comment`) VALUES
(46, 43, '\'jason@example.com\'', '\'I love the new Website!\'\r'),
(47, 44, '\'areader@example.com\'', '\'Why don\'t you sell shoes?\'\r'),
(48, 45, '\'anotherreader@example.com\'', '\'The search engine works great!\'');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_reviewss`
--
ALTER TABLE `product_reviewss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_reviewss`
--
ALTER TABLE `product_reviewss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
