-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 04:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruangcupang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cupang`
--

CREATE TABLE `cupang` (
  `id_cupang` int(11) NOT NULL,
  `nama_cupang` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupang`
--

INSERT INTO `cupang` (`id_cupang`, `nama_cupang`, `id_jenis`, `gambar`) VALUES
(14, 'Nemo Gold', 18, '20210216143811.jpeg'),
(15, 'Nemo Copper', 18, '20210216143823.jpeg'),
(16, 'Avatar', 18, '20210216143847.jpeg'),
(17, 'Bluerim', 18, '20210216144047.jpeg'),
(18, 'Copper Black Besgel', 15, '20210216153550.jpeg'),
(19, 'Orange', 15, '20210216153629.jpeg'),
(20, 'Rosetail Triple Color', 15, '20210216153652.jpeg'),
(21, 'Black White Rim', 15, '20210216153710.jpeg'),
(22, 'Copper Solid', 15, '20210216153731.jpeg'),
(23, 'White', 1, '20210216153750.jpeg'),
(24, 'Gold', 1, '20210216153800.jpeg'),
(25, 'Super Black', 1, '20210216153810.jpeg'),
(26, 'Yellow', 1, '20210216153845.jpeg'),
(27, 'Multi Color', 1, '20210216153909.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `total`) VALUES
(1, 'Giant', 0),
(15, 'Halfmoon', 0),
(18, 'Plakat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('superadmin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(4, 'Super Admin', 'su', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'superadmin'),
(13, 'Admin', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cupang`
--
ALTER TABLE `cupang`
  ADD PRIMARY KEY (`id_cupang`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cupang`
--
ALTER TABLE `cupang`
  MODIFY `id_cupang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cupang`
--
ALTER TABLE `cupang`
  ADD CONSTRAINT `cupang_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
