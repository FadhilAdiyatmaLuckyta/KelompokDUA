-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 07:54 AM
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
-- Database: `bismillahyaallah`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `kursi` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_car`, `merk`, `warna`, `nopol`, `kursi`, `foto`) VALUES
(1, 'Elf', 'Merah', 'P 7052 G', 18, ''),
(2, 'Avanza', 'Silver', 'L 1638 MW', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `kode` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tgl_contact` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(100) NOT NULL,
  `tempat_lahirdriver` varchar(50) NOT NULL,
  `tanggal_lahirdriver` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_sim` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat_driver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id_driver`, `nama_driver`, `tempat_lahirdriver`, `tanggal_lahirdriver`, `jenis_kelamin`, `no_sim`, `telp`, `alamat_driver`) VALUES
(1, 'Bagyo', 'Probolinggo', '1976-09-12', 'Laki-laki', '772345678', '089987768889', 'Jl.Rajawali, Probolinggo');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jam` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `tgl_payment` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `bukti` varchar(200) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `kode_review` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `review` varchar(100) NOT NULL,
  `tgl_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jekel` varchar(50) NOT NULL,
  `tipe_id` varchar(50) NOT NULL,
  `nomer_id` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `tipe_id`, `nomer_id`, `telepon`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'Airlangga', 'Jombang', '1999-10-07', 'Laki-laki', 'KTP', '23456785678678', '081232775738', 'Jl.Kenongo, Sidoarjo', 'anggaaa', '177e61daf05d5b3d4ae9b7c39d5931fd', 'admin'),
(2, 'Agung', 'Situbondo', '1999-08-19', 'Laki-laki', 'SIM', '45656789678', '0856778992898', 'Jl.Mimban, Situbondo', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'pengguna'),
(3, 'Fadil', 'Situbondo', '1999-11-08', 'Laki-laki', 'KTP', '234567865434567', '085678654439', 'Jl.Karimata, Jember', 'fadil', 'd0503276f86a627d6c29bc963106570e', 'pengguna'),
(4, 'Cikita', 'Jember', '1999-07-09', 'Perempuan', 'KTP', '3456789', '08977654456', 'Jember', 'cikita', '385477b22e5aa23ee4cff0f75b453d17', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `id_driver` (`id_driver`),
  ADD UNIQUE KEY `id_car` (`id_car`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_jurusan` (`id_jurusan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD UNIQUE KEY `id_order` (`id_order`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`kode_review`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `kode_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id_car`),
  ADD CONSTRAINT `jurusan_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `drivers` (`id_driver`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
