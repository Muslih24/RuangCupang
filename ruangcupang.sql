-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2021 pada 10.40
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('Super Admin','Admin','User') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Perempuan','Laki-laki') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `no_hp`, `email`, `alamat`, `tgl_lahir`, `jk`) VALUES
(1, 'asep junaedi', 'asep1', '2b7753208ed9360d6eece0be91495850e7d3c6dd', 'Super Admin', '1231231132', 'asjdhia@gmail.com', 'asdasdkjbajbsjkqjbakjsd', '2021-01-12', 'Perempuan'),
(4, 'jajang miharja', 'jajang1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Admin', '12323121132', 'sambellterasi@gmail.com', 'jl.terasi2', '1991-09-08', 'Laki-laki'),
(5, 'sutedi', 'tedi', '69c5fcebaa65b560eaf06c3fbeb481ae44b8d618', 'Admin', '123123131', 'sambellteraasi@gmail.com', 'jl.itrs', '2021-01-20', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
