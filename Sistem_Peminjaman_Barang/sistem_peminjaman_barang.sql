-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 06:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkds`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jumlah`) VALUES
(1, 'proyektor', 3),
(4, 'terminal colokan', 8),
(5, 'bola voli', 3),
(7, 'gitar', 2),
(8, 'buku kjd', 30),
(9, 'buku animasi', 50),
(11, 'proyektor', 5),
(12, 'proyektor', 11),
(13, 'sapu ijuk', 15),
(14, 'sapu lidi', 4),
(15, 'remot AC', 2),
(16, 'sapu', 5),
(17, 'buku ppl', 5),
(18, 'buku pwpb', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tanggal_pinjam` varchar(255) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `nama_siswa`, `nama_barang`, `tanggal_pinjam`, `status`) VALUES
(1, 'Azis Maulana', 'proyektor', '2019-08-14T16:53', 'N'),
(2, 'Farhan Yulianto', 'bola basket', '2019-08-14T16:53', 'N'),
(3, 'Azis Maulana', 'proyektor', '2019-08-14T17:45', 'N'),
(4, 'Marissa', 'proyektor', '2019-08-14T17:45', 'N'),
(5, 'Farhan Yulianto', 'proyektor', '2019-08-14T17:53', 'N'),
(6, 'Erliana Diningati', 'gitar', '2019-08-14T17:53', 'N'),
(7, 'Roihan Adam', 'bola basket', '2019-08-14T17:53', 'N'),
(8, 'Marissa', 'bola basket', '2019-08-14T17:56', 'N'),
(9, 'Teddy Syah', 'proyektor', '2019-08-14T17:56', 'N'),
(10, 'Marissa', 'terminal colokan', '2019-08-14T18:23', 'N'),
(11, 'Lomri', 'buku kjd', '2019-08-15T00:04', 'N'),
(12, 'Juneid', 'bola sepak', '2019-08-15T10:05', 'N'),
(13, 'Azis Maulana', 'proyektor', '2019-08-15T07:11', 'N'),
(14, 'Azis Maulana', 'proyektor', '2019-08-26T06:12', 'N'),
(15, 'Azis Maulana', 'buku kjd', '2019-08-26T06:30', 'N'),
(16, 'Azis Maulana', 'proyektor', '2019-08-26T06:30', 'N'),
(17, 'Azis Maulana', 'sapu lidi', '2019-08-26T06:31', 'N'),
(18, 'Azis Maulana', 'proyektor', '2019-08-26T06:32', 'N'),
(19, 'Azis Maulana', 'terminal colokan', '2019-08-26T06:32', 'N'),
(20, 'Azis Maulana', 'gitar', '2019-08-26T06:32', 'N'),
(21, 'Azis Maulana', 'bola sepak', '2019-08-26T06:33', 'N'),
(22, 'Azis Maulana', 'sapu ijuk', '2019-08-26T06:33', 'N'),
(23, 'Erliana Diningati', 'proyektor', '2019-08-26T06:33', 'N'),
(24, 'Roihan Adam', 'proyektor', '2019-08-26T06:33', 'N'),
(25, 'Azis Maulana', 'proyektor', '2019-08-26T06:34', 'N'),
(26, 'Marissa', 'proyektor', '2019-08-26T06:34', 'N'),
(27, 'Marissa', 'bola sepak', '2019-08-26T06:34', 'N'),
(28, 'Teddy Syah', 'remot AC', '2019-08-26T06:37', 'N'),
(29, 'Teddy Syah', 'proyektor', '2019-08-26T06:38', 'N'),
(30, 'Teddy Syah', 'proyektor', '2019-08-26T06:38', 'N'),
(31, 'Teddy Syah', 'sapu', '2019-08-26T06:39', 'N'),
(32, 'Shopia Sholeha', 'proyektor', '2019-08-26T06:59', 'N'),
(33, 'Roihan Adam', 'proyektor', '2019-08-26T07:09', 'Y'),
(34, 'Lomri', 'sapu lidi', '2019-08-26T07:09', 'N'),
(35, 'Azis Maulana', 'proyektor', '2019-08-26T09:23', 'Y'),
(36, 'Marissa', 'proyektor', '2019-08-26T09:23', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `kelas`) VALUES
(2, 'Azis Maulana', 12),
(3, 'Farhan Yulianto', 11),
(5, 'Erliana Diningati', 11),
(6, 'Saepul Bahri', 11),
(8, 'Marissa', 11),
(9, 'Shopia Sholeha', 11),
(10, 'Roihan Adam', 12),
(11, 'Teddy Syah', 11),
(12, 'Lomri', 11),
(13, 'Rahmawanti', 11),
(14, 'Taufik Rohiyat', 11),
(15, 'Juneid', 12),
(16, 'Fikri Fahreza', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('andri', 'ac43724f16e9241d990427ab7c8f4228'),
('anisa', 'dc7b625b7b8ad55a1d9f3f9c53b71d6f'),
('kiki', 'ac43724f16e9241d990427ab7c8f4228'),
('otong', '827ccb0eea8a706c4c34a16891f84e7b'),
('rizky', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
