-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 09:21 PM
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
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Kecil'),
(2, 'Menengah'),
(3, 'Besar');

-- --------------------------------------------------------

--
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) DEFAULT NULL,
  `telp` bigint(20) NOT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `address` text,
  `photo` varchar(250) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`ID`, `name`, `telp`, `latitude`, `longitude`, `address`, `photo`, `description`) VALUES
(1, 'Toko Mebel H. Muslim Jaya', 1200000, '-6.944447', '109.136154', 'Jl. Raya Banjaran No. 4 Tembok Luwung Adiwerna Kabupaten Tegal Jawa Tengah 52194 Indonesia', '', 'Industri Kecil'),
(2, 'Toko Mebel Baru Buka', 8564322323, '-6.976991031634734', '109.1221749788208', 'JL MT Haryono No.123', '', 'Menjual Mebel Rotan'),
(3, 'Toko Mebel Masih Baru', 8454546878, '-6.931153821933284', '109.12500739154052', 'Samping Gule Kepala ikan mas agus', 'undraw_working_remotely_jh40.png', 'mebel karet bekas ban');

-- --------------------------------------------------------

--
-- Table structure for table `industricategories`
--

CREATE TABLE `industricategories` (
  `industricategories_id` int(11) NOT NULL,
  `industri_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industricategories`
--

INSERT INTO `industricategories` (`industricategories_id`, `industri_id`, `category_id`) VALUES
(14, 1, 1),
(16, 2, 3),
(17, 3, 2),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Muhammad Vicky Saputra', 'admin', 'mail@vicky.work', '$2y$10$o88Y8KTfkAHgTX5HRstdReV1nBnrBENmxp5FUV6oyAL3tmdSsqviK'),
(2, 'Kimball Cho', 'kimballcho', 'kimball@cho.id', '$2y$10$gbkLm8MdsHRzue/kIceCIeJHSTFM3ElVmg/GG68yTDJTinEgYHUQa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `industricategories`
--
ALTER TABLE `industricategories`
  ADD PRIMARY KEY (`industricategories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industricategories`
--
ALTER TABLE `industricategories`
  MODIFY `industricategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
