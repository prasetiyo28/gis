-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2019 at 12:32 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

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
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `ID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Dinas Kabupaten Tegal', 'dinas@gis.com', '25d55ad283aa400af464c76d713c07ad');

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
  `address` text DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `karyawan` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`ID`, `name`, `telp`, `latitude`, `longitude`, `address`, `photo`, `description`, `email`, `password`, `karyawan`) VALUES
(1, 'Toko Mebel H. Muslim Jaya2', 1200000, '-6.944447', '109.136154', 'Jl. Raya Banjaran No. 4 Tembok Luwung Adiwerna Kabupaten Tegal Jawa Tengah 52194 Indonesia', '', 'Industri Kecil', 'muslim@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12),
(2, 'Toko Mebel Baru Buka', 8564322323, '-6.976991031634734', '109.1221749788208', 'JL MT Haryono No.123', '', 'Menjual Mebel Rotan', '', '', 0),
(3, 'Toko Mebel Masih Baru', 8454546878, '-6.931153821933284', '109.12500739154052', 'Samping Gule Kepala ikan mas agus', 'undraw_working_remotely_jh40.png', 'mebel karet bekas ban', '', '', 0),
(4, 'Toko Mebel A', 8797971212, '-6.933198699741242', '109.13105845507812', 'Jalan Tol no 128', 'google-logo-png-open-20001.png', 'Mebel Baru', 'mebela@gmail.com', '%?Z??@\n?d?mq<?', 90);

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
(16, 2, 3),
(17, 3, 2),
(18, 1, 1),
(19, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_industri` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `froms` int(12) NOT NULL,
  `untils` int(12) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_industri`, `name`, `froms`, `untils`, `photo`, `description`, `deleted`) VALUES
(1, 1, 'Kursi Rotan', 250000, 300000, 'kursi1.jpg', '', 0),
(2, 3, 'Kursi Rotan', 250000, 300000, 'kursi1.jpg', ' kursi rotan sintesis berkualitas terbaik no. 1 se-Indonesia sejak 2011. Kursi rotan sintesis bisa di-custom sehingga unik, sesuai kebutuhan & suasana bangunan. Garansi Warna 5 Tahun. Pengalaman bertahun-tahun. ', 0),
(3, 3, 'Kursi Rotan 1', 150000, 250000, 'kursi1.jpg', ' kursi rotan sintesis berkualitas terbaik no. 1 se-Indonesia sejak 2011. Kursi rotan sintesis bisa di-custom sehingga unik, sesuai kebutuhan & suasana bangunan. Garansi Warna 5 Tahun. Pengalaman bertahun-tahun. ', 0),
(4, 3, 'Kursi Rotan 2', 500000, 800000, 'kursi1.jpg', ' kursi rotan sintesis berkualitas terbaik no. 1 se-Indonesia sejak 2011. Kursi rotan sintesis bisa di-custom sehingga unik, sesuai kebutuhan & suasana bangunan. Garansi Warna 5 Tahun. Pengalaman bertahun-tahun. ', 0),
(5, 2, 'Kursi Rotan', 250000, 300000, 'kursi1.jpg', ' kursi rotan sintesis berkualitas terbaik no. 1 se-Indonesia sejak 2011. Kursi rotan sintesis bisa di-custom sehingga unik, sesuai kebutuhan & suasana bangunan. Garansi Warna 5 Tahun. Pengalaman bertahun-tahun. ', 0),
(6, 1, 'Kursi Rotans', 90000, 120000, 'presentation.png', 'Kursi Kuat Kokoh Ringan dan Awet', 0),
(7, 1, 'Kursi Goyang', 150000, 200000, 'teh.jpg', 'Tahan banting', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullname`, `username`, `email`, `password`) VALUES
(2, 'Kimball Cho', 'kimballcho', 'kimball@cho.id', '$2y$10$gbkLm8MdsHRzue/kIceCIeJHSTFM3ElVmg/GG68yTDJTinEgYHUQa'),
(3, 'afidah', 'afidah', 'afidah@gmail.com', '$2y$10$gbkLm8MdsHRzue/kIceCIeJHSTFM3ElVmg/GG68yTDJTinEgYHUQa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

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
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industricategories`
--
ALTER TABLE `industricategories`
  MODIFY `industricategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
