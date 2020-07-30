-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 05:55 PM
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
-- Database: `nfc_sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `halte`
--

CREATE TABLE `halte` (
  `id_halte` varchar(50) NOT NULL,
  `nama_halte` varchar(50) NOT NULL,
  `harga_halte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halte`
--

INSERT INTO `halte` (`id_halte`, `nama_halte`, `harga_halte`) VALUES
('a100000001', 'Narkoba I', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `halte_tujuan`
--

CREATE TABLE `halte_tujuan` (
  `id_halte_tujuan` varchar(50) NOT NULL,
  `nama_halte_tujuan` varchar(50) NOT NULL,
  `harga_halte_tujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` varchar(255) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama_penumpang`, `no_hp`, `saldo`) VALUES
('B24DAEEC', 'Frischa', '0896733673289', 10000),
('cek', 'danu', '878798', 7777),
('cekdanumz', 'danu', '878798', 7777),
('icha', 'icha', '687687', 576),
('ichasss', 'icha', '687687', 576),
('ichasssddd', 'ichayyy', '687687', 576);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(3) NOT NULL,
  `id_penumpang` varchar(255) NOT NULL,
  `id_halte` varchar(50) NOT NULL,
  `id_halte_tujuan` varchar(50) NOT NULL,
  `hitung` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halte`
--
ALTER TABLE `halte`
  ADD PRIMARY KEY (`id_halte`);

--
-- Indexes for table `halte_tujuan`
--
ALTER TABLE `halte_tujuan`
  ADD PRIMARY KEY (`id_halte_tujuan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_halte_tujuan` (`id_halte_tujuan`),
  ADD KEY `id_penumpang` (`id_penumpang`,`id_halte`),
  ADD KEY `id_halte` (`id_halte`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `halte_tujuan`
--
ALTER TABLE `halte_tujuan`
  ADD CONSTRAINT `halte_tujuan_ibfk_1` FOREIGN KEY (`id_halte_tujuan`) REFERENCES `transaksi` (`id_halte_tujuan`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_halte`) REFERENCES `halte` (`id_halte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
