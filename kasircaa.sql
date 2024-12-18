-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 04:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasircaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detail` int(11) NOT NULL,
  `kode_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_detail`, `kode_penjualan`, `id_produk`, `jumlah`, `sub_total`) VALUES
(2, 2411191, 4, 1, 4000),
(3, 2411192, 6, 15, 225000),
(4, 2411193, 6, 1, 15000),
(5, 2411193, 3, 2, 6000),
(6, 2411194, 2, 1, 2500),
(7, 2411195, 3, 1, 3000),
(8, 2411196, 9, 1, 15000),
(9, 2411196, 10, 2, 60000),
(10, 2411207, 10, 1, 30000),
(11, 2411207, 11, 1, 4000),
(12, 2411217, 12, 1, 50000),
(13, 2411217, 10, 1, 30000),
(14, 2411218, 8, 12, 1200000),
(15, 2411218, 13, 2, 38000),
(16, 2411248, 13, 3, 48000),
(17, 2411269, 13, 1, 16000),
(18, 2411269, 10, 1, 30000),
(19, 2412021, 13, 3, 48000),
(20, 2412021, 14, 5, 150000),
(21, 2412172, 16, 2, 4000),
(22, 2412183, 21, 2, 4000),
(23, 2412184, 21, 5, 10000),
(24, 2412184, 16, 2, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`) VALUES
(1, 'gunadi', 'karangmojo', '0888946456'),
(3, 'acaa1', 'huuuuuuuuu', '123456765438'),
(4, 'veraa', 'karangwuni', '66746858'),
(5, 'feronika', 'tawangmangu', '77859588'),
(6, 'GINAA', 'surakarta', '665723893487');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` decimal(10,0) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `kode_penjualan`, `tanggal`, `total_harga`, `id_pelanggan`) VALUES
(1, '2411191', '2024-11-18', 4000, '3'),
(2, '2411192', '2024-11-19', 225000, '3'),
(3, '2411193', '2024-11-19', 21000, '3'),
(4, '2411194', '2024-11-19', 2500, '1'),
(5, '2411195', '2024-10-01', 3000, '1'),
(6, '2411196', '2024-11-19', 75000, '4'),
(7, '2411207', '2024-11-20', 34000, '3'),
(8, '2411217', '2024-11-21', 80000, '3'),
(9, '2411248', '2024-11-24', 48000, '5'),
(10, '2411269', '2024-11-26', 46000, '5'),
(11, '2412021', '2024-12-02', 198000, '1'),
(12, '2412172', '2024-12-17', 4000, '3'),
(13, '2412183', '2024-12-18', 4000, '3'),
(14, '2412184', '2024-12-18', 14000, '5');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama`, `stok`, `harga`) VALUES
(16, '2231', 'donat coklat', 196, 2000),
(17, '3345', 'martabak asin', 100, 1000),
(18, '5543', 'pastel', 150, 1000),
(19, '6647', 'lemper', 230, 1500),
(20, '2313', 'sosis mayo', 200, 2000),
(21, '1111', 'brownies', 23, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_temp` int(1) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id_temp`, `id_produk`, `jumlah`, `id_pelanggan`, `id_user`) VALUES
(1, 13, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Admin User', 'Admin'),
(3, 'callista', '202cb962ac59075b964b07152d234b70', 'acaaa', 'Admin'),
(4, 'vellisia', '202cb962ac59075b964b07152d234b70', 'vell', 'kasir'),
(6, 'gun', '20d135f0f28185b84a4cf7aa51f29500', 'nadira', 'Admin'),
(7, 'rumah3345', '202cb962ac59075b964b07152d234b70', 'imah', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
