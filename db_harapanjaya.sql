-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2018 at 07:10 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_harapanjaya`
--
CREATE DATABASE IF NOT EXISTS `db_harapanjaya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_harapanjaya`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uom` varchar(10) NOT NULL,
  `capital` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `uom`, `capital`, `price`, `created_at`, `modified_at`, `is_active`) VALUES
(15, 'B1011', 'Alminiums', 'lembar', 12000, 20000, '2018-08-15 01:18:48', '2018-08-17 01:18:48', 1),
(17, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:19:20', '0000-00-00 00:00:00', 1),
(18, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:19:39', '0000-00-00 00:00:00', 1),
(19, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:19:56', '0000-00-00 00:00:00', 1),
(20, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:20:01', '0000-00-00 00:00:00', 1),
(21, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:20:10', '0000-00-00 00:00:00', 1),
(22, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:20:32', '0000-00-00 00:00:00', 1),
(23, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:20:51', '0000-00-00 00:00:00', 1),
(24, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:22:07', '0000-00-00 00:00:00', 1),
(25, 'B101', 'Almini', 'lembar', 0, 2000, '2018-08-15 01:22:12', '0000-00-00 00:00:00', 1),
(26, 'B102', 'Kaca Lain', 'lembar', 0, 20011, '2018-08-15 01:24:51', '0000-00-00 00:00:00', 1),
(27, 'B103', 'Baut Mur', 'biji', 0, 150, '2018-08-15 01:25:28', '0000-00-00 00:00:00', 1),
(28, 'C001', 'Coba Barang', 'karung', 0, 159292, '2018-08-16 23:28:03', '0000-00-00 00:00:00', 1),
(29, 'C002', 'Coba lagi', 'karung', 0, 1239, '2018-08-16 23:28:38', '0000-00-00 00:00:00', 1),
(30, 'W003', 'wkw', '123', 0, 254825, '2018-08-16 23:33:17', '0000-00-00 00:00:00', 1),
(31, 'S001', 'Lemari', 'biji', 0, 12000, '2018-08-16 23:36:50', '0000-00-00 00:00:00', 1),
(32, 'K001', 'Alus', '91', 0, 292, '2018-08-17 00:25:22', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_store_supply`
--

CREATE TABLE `item_store_supply` (
  `store_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `supply` int(11) NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `phone`, `address`, `city`, `created_at`, `modified_at`, `is_active`) VALUES
(1, 'Rumah', '0812319372', 'Jl Sukolegok', 'Kota Surabaya', '2018-08-17 02:03:07', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone`, `city`, `created_at`, `modified_at`, `is_active`) VALUES
(2, 'Toko Aseanss', 'aaaaasjaskldf', '182392aa', 'Kota Padang', '2018-08-18 19:50:47', '2018-08-18 19:51:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `identity_number` varchar(16) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `birthdate`, `phone`, `identity_number`, `address`, `city`, `gender`, `role`, `created_at`, `modified_at`, `is_active`) VALUES
(1, 'Effendy Hadi Sutanto', 'admin', '$2y$10$zULZmzEuVFi4m0qfrT5xAuG.L1HQf6.V3RWzx3E7nybQzivI.vcPq', '2018-08-14', '081239812937', '12379817893', 'jl surabyaa', 'Kota Langsa', 'M', 'superadmin', '2018-08-14 22:23:37', '2018-08-18 18:11:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_store_supply`
--
ALTER TABLE `item_store_supply`
  ADD PRIMARY KEY (`store_id`,`item_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
