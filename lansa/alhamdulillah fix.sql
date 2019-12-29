-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 08:52 AM
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
-- Database: `alhamdulillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `kode` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `komentar` varchar(200) NOT NULL,
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
(1, 'Kholik', 'Jember', '1965-06-14', 'Laki-laki', '777887663457', '008755674298', 'Jl. Mastrip'),
(2, 'Furqon', 'Jember', '2019-12-06', 'Laki-laki', '829837782', '082718827388', 'Jl. Asri, Jember');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `kursi` varchar(11) NOT NULL,
  `jam_beranngkat` time NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `id_driver`, `mobil`, `plat_nomor`, `kursi`, `jam_beranngkat`, `harga`, `gambar`) VALUES
(1, 'Jember-Surabaya', 1, 'Avanza', 'P 9090 GI', '7', '09:00:00', 120000, '5ddfb76b82e8d.png'),
(2, 'Jember - Malang', 2, 'Mobilio', 'P 7536 GG', '4', '06:00:00', 120000, '5de704b204dd4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `no_kursi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `no_kursi`) VALUES
(1, 'A1'),
(2, 'B1'),
(3, 'B2'),
(4, 'B3'),
(5, 'C1'),
(6, 'C2'),
(7, 'C3');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `kode_payment` varchar(5) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `tgl_payment` date NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `kode_payment`, `id_pesanan`, `tgl_payment`, `status_bayar`, `bukti`) VALUES
(6, 'L001', 51, '2019-12-15', 'Lunas', '5df5d41b1d844.png'),
(7, 'L002', 54, '2019-12-16', 'Belum Lunas', '5df6ec7fe404f.png'),
(8, 'L003', 55, '2019-12-16', 'Lunas', '5df7422869d2c.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_booking` varchar(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jemput` varchar(50) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_kursi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `kode_booking`, `id_jurusan`, `id_user`, `tgl_berangkat`, `jemput`, `tgl_pesan`, `id_kursi`, `harga`, `status`) VALUES
(51, 'C001', 1, 2, '2019-12-16', 'dfghj', '2019-12-15', 6, 100000, ''),
(52, 'C002', 2, 2, '2019-12-17', 'l', '2019-12-15', 7, 120000, ''),
(53, 'C003', 1, 2, '2019-12-16', 'rt', '2019-12-15', 2, 100000, ''),
(54, 'C004', 2, 2, '2019-12-25', '123456', '2019-12-16', 2, 120000, ''),
(55, 'C005', 1, 2, '2019-12-24', 'yghjaskl;ld', '2019-12-16', 3, 100000, ''),
(56, 'C006', 1, 2, '2019-12-18', 'ertyui', '2019-12-17', 4, 120000, ''),
(57, 'C007', 1, 2, '2019-12-19', 'gasdhjk', '2019-12-17', 3, 120000, 'berhasil'),
(58, 'C008', 2, 2, '2019-12-19', 'fghjkl', '2019-12-17', 2, 120000, 'berhasil');

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
  `nomer_id` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `nomer_id`, `telepon`, `alamat`, `email`, `username`, `password`, `level`) VALUES
(1, 'Angga', 'Sidoarjo', '2000-08-17', 'Laki-laki', '1234567890123456', '098765765234', 'Jl. Pahlawan Sidoarjo', 'angga@gmail.com', 'angga', 'ac43724f16e9241d990427ab7c8f4228', 'admin'),
(2, 'Agung', 'Jember', '1993-06-08', 'Laki-laki', '8889876543444321', '009987654321', 'Jl. Mastrip Jember', 'agung@gmail.com', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'pengguna'),
(3, 'Fadil', 'msad', '2019-11-06', 'Perempuan', '5677656', '0392488417', 'akdandlf', 'hasdbk@gamd.com', 'fadil', 'e460c54cabdebbf20ef1b96ba6879038', 'pengguna'),
(4, 'nanan', 'kslado', '2019-12-25', 'Perempuan', '45667788990', '987676534565', 'haksjld', 'ghasjdh@gdhjf.dhaj', 'yap', '7b10a59d11c752fa1f4f58572c8e9705', 'pengguna');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
