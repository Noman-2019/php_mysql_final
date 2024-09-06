-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 09:08 AM
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
-- Database: `evidance`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_Manufacturer` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `contact` VARCHAR(50))   INSERT INTO manufacturer(id,name,address,contact_no)VALUES(NUll,name,address,contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('Insert','Update','Delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `product_name`, `event`, `event_time`) VALUES
(3, 'walton', 'Insert', '2024-08-24 06:58:19'),
(4, 'sony', 'Insert', '2024-08-24 07:07:38'),
(5, 'rangs', 'Insert', '2024-08-24 07:07:51'),
(6, 'rangs', 'Update', '2024-08-24 07:08:48'),
(7, 'sony', 'Delete', '2024-08-24 07:09:06'),
(8, 'sony asdsad', 'Insert', '2024-08-25 07:01:21'),
(9, 'sony tv 43\"', 'Delete', '2024-08-25 07:03:12'),
(10, 'sony xperia phone', 'Delete', '2024-08-25 07:03:12'),
(11, 'sony asdsad', 'Delete', '2024-08-25 07:03:12'),
(12, 'walton tv 43\"', 'Delete', '2024-08-25 07:41:03'),
(13, 'walton', 'Delete', '2024-08-25 07:41:03'),
(14, 'walton', 'Delete', '2024-08-25 07:41:03'),
(15, 'walton', 'Delete', '2024-08-25 07:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(3, 'samsung', 'narayanganj', '01555555555'),
(5, 'rangs', 'cumilla', '01999999999'),
(7, 'asdsad', 'asdasasfdf', '2343232'),
(8, 'abdullah al noman', 'adsasd', '21343242');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_Delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE product.manufacturer_id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'sony', 'Dhaka', '01777777777'),
(2, 'singer', 'madaripur', '01333333333'),
(3, 'samsung', 'narayanganj', '01555555555'),
(4, 'walton', 'faridpur', '01888888888'),
(5, 'rangs', 'cumilla', '01999999999');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(3, 'samsung 4k TV', 9000, 3),
(5, 'rangs 50 tv\"', 200, 5),
(18, 'rangs', 40, 5);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_Update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO logBook VALUES(NULL,old.name,"Update",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO logBook VALUES(NULL,old.name,'Delete',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO logBook VALUES(NULL,new.name,"Insert",NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_4000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_4000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_5000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'sony tv 43\"', 400, 1),
(2, 'singer TV 40\"', 50000, 2),
(3, 'samsung 4k TV', 9000, 3),
(4, 'walton tv 43\"', 600, 4),
(5, 'rangs 50 tv\"', 200, 5),
(6, 'sony xperia phone', 90000, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`product Name` varchar(50)
,`price` int(5)
,`Manufacturer Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `product_above_4000_price`
--
DROP TABLE IF EXISTS `product_above_4000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_4000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 40004000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_5000_price`
--
DROP TABLE IF EXISTS `product_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `product Name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Manufacturer Name` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id``manufacturer_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
