-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 03:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lansa_trans`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` char(3) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telp` int(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `telp`, `alamat`, `username`, `password`) VALUES
('A01', 'Ahmad Sukri', 812345432, 'Jember', 'sukrilucu123', 'makancuy123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` char(3) NOT NULL,
  `nama_kendaraan` varchar(20) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `id_tujuan` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id_kendaraan`, `nama_kendaraan`, `no_polisi`, `id_tujuan`) VALUES
('K01', 'Avanza Silver', 'L 1638 MW', 'T01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pesan` char(3) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesan` char(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_tujuan` char(3) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sopir`
--

CREATE TABLE `tb_sopir` (
  `id_sopir` char(3) NOT NULL,
  `nama_sopir` varchar(50) NOT NULL,
  `telp` int(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `id_tujuan` char(3) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`id_tujuan`, `tujuan`, `jam`, `harga`) VALUES
('T01', 'Surabaya', '09:00:00', 120000),
('T02', 'Surabaya', '21:00:00', 120000),
('T03', 'Malang', '06:00:00', 120000),
('T04', 'Denpasar', '19:00:00', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama_user` varchar(50) NOT NULL,
  `telp` int(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama_user`, `telp`, `alamat`, `email`, `password`) VALUES
('Anwar', 934891849, 'Surabaya', 'anwarcantik12@gmail.com', 'anwarmacho124'),
('Fadhil', 567988, 'mimban', 'fadil@gmail.com', 'fadiltamvan'),
('ghh', 5685, 'hhghk', 'ftyfgf', '67888806'),
('Joko', 812348753, 'Jember', 'joko34@gmail.com', 'jokosamudro123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verif`
--

CREATE TABLE `tb_verif` (
  `id_pesan` char(3) NOT NULL,
  `id_admin` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD UNIQUE KEY `id_tujuan` (`id_tujuan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD UNIQUE KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_sopir`
--
ALTER TABLE `tb_sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_verif`
--
ALTER TABLE `tb_verif`
  ADD UNIQUE KEY `id_pesan` (`id_pesan`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD CONSTRAINT `tb_kendaraan_ibfk_1` FOREIGN KEY (`id_tujuan`) REFERENCES `tb_tujuan` (`id_tujuan`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pemesanan` (`id_pesan`);

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tb_user` (`email`);

--
-- Constraints for table `tb_verif`
--
ALTER TABLE `tb_verif`
  ADD CONSTRAINT `tb_verif_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`),
  ADD CONSTRAINT `tb_verif_ibfk_2` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pembayaran` (`id_pesan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
