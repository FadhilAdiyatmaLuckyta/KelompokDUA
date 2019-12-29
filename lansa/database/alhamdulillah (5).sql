-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 10:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`kode`, `pengirim`, `email`, `no_telp`, `komentar`, `tgl_contact`) VALUES
(1, 'lola', 'lola@gmail.com', '09288998928', 'ya', '2019-12-24'),
(2, 'gaga', 'gaga@gmail.com', '098765434567', 'sip', '2019-12-26'),
(3, '', '', '', '', '2019-12-26'),
(4, '', '', '', '', '2019-12-26'),
(5, '', '', '', '', '2019-12-28'),
(6, '', '', '', '', '2019-12-28'),
(7, '', '', '', '', '2019-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(50) NOT NULL,
  `tempat_lahirdriver` varchar(20) NOT NULL,
  `tanggal_lahirdriver` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_sim` varchar(17) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat_driver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id_driver`, `nama_driver`, `tempat_lahirdriver`, `tanggal_lahirdriver`, `jenis_kelamin`, `no_sim`, `telp`, `alamat_driver`) VALUES
(1, 'Kholik', 'Jember', '1965-06-14', 'Laki-laki', '777887663457', '008755674298', 'Jl. Mastrip'),
(2, 'Furqon', 'Jember', '2019-12-06', 'Laki-laki', '829837782', '082718827388', 'Jl. Asri, Jember'),
(3, 'Agus Raharjo', 'Jember', '1987-12-12', 'Laki-laki', '999189898829', '081236378299', 'Jl. Kawi No. 19, Jember'),
(4, 'Firman Ardianto', 'Jember', '1979-07-17', 'Laki-laki', '88766789098', '081245674434', 'Jl. Jawa 6'),
(5, 'Salim Nugroho', 'Bondowoso', '1966-01-30', 'Laki-laki', '7889009888', '085766755323', 'Jl. Karimata, Jember'),
(6, 'Purnomo Hadi Rahman', 'Jember', '1990-09-08', 'Laki-laki', '99291093990', '083290929109', 'Jl. Masrip, Jember');

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
  `kursi` varchar(2) NOT NULL,
  `jam_beranngkat` time NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `id_driver`, `mobil`, `plat_nomor`, `kursi`, `jam_beranngkat`, `harga`, `gambar`) VALUES
(1, 'Jember - Surabaya', 1, 'Avanza', 'P 9090 GI', '7', '09:00:00', 120000, '5ddfb76b82e8d.png'),
(2, 'Jember - Malang', 2, 'Mobilio', 'P 7536 GG', '4', '06:00:00', 120000, '5de704b204dd4.jpeg'),
(3, 'Jember - Denpasar', 3, 'Avanza Putih', 'P 2026 PO', '7', '19:00:00', 200000, '5e04a49add2ce.jpeg'),
(4, 'Surabaya - Jember', 4, 'Mazda', 'P 1691 QJ', '7', '17:00:00', 120000, '5e05fef902da7.jpeg'),
(5, 'Malang - Jember', 5, 'Luxio', 'L 1710 JD', '7', '15:30:00', 120000, '5e05ff5e28f04.jpeg'),
(6, 'Denpasar - Jember', 6, 'Wulling', 'P 1462 GL', '7', '11:20:00', 200000, '5e0601ac60049.jpeg');

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
  `id_user` int(11) NOT NULL,
  `tgl_payment` date NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `kode_payment`, `id_pesanan`, `id_user`, `tgl_payment`, `status_bayar`, `bukti`) VALUES
(20, 'L001', 62, 5, '2019-12-26', 'Sudah', '5e047817c0c01.jpg'),
(21, 'L001', 63, 5, '2019-12-26', 'Sudah', '5e047817c0c01.jpg'),
(25, 'L002', 64, 5, '2019-12-26', 'Sudah', '5e0489f402de4.jpg'),
(26, 'L002', 65, 5, '2019-12-26', 'Sudah', '5e0489f402de4.jpg'),
(27, 'L002', 66, 5, '2019-12-26', 'Sudah', '5e0489f402de4.jpg'),
(28, 'L003', 67, 2, '2019-12-26', 'Sudah', '5e049e31ab12c.jpg'),
(29, 'L004', 70, 2, '2019-12-26', 'Sudah', '5e04a88c7622f.jpeg'),
(30, 'L005', 71, 10, '2019-12-26', 'Sudah', '5e04cbaed1e7c.jpg'),
(31, 'L006', 72, 2, '2019-12-28', 'Belum', '5e070a66bd3f4.jpeg'),
(32, 'L007', 73, 2, '2019-12-28', 'Belum', '5e0723e2eee36.jpeg'),
(33, 'L007', 74, 2, '2019-12-28', 'Sudah', '5e0723e2eee36.jpeg');

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
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `kode_booking`, `id_jurusan`, `id_user`, `tgl_berangkat`, `jemput`, `tgl_pesan`, `id_kursi`, `harga`, `bayar`) VALUES
(62, 'C001', 1, 5, '2019-12-27', 'surabaya', '2019-12-26', 3, 120000, 1),
(63, 'C002', 2, 5, '2019-12-31', 'surabaya', '2019-12-26', 5, 120000, 1),
(64, 'C003', 2, 5, '2019-12-27', 'medalem', '2019-12-26', 4, 120000, 1),
(65, 'C004', 1, 5, '2020-01-02', 'dfghj', '2019-12-26', 4, 120000, 1),
(66, 'C005', 2, 5, '2020-01-03', 'asd', '2019-12-26', 6, 120000, 1),
(67, 'C006', 1, 2, '2019-12-31', 'wertyuiooiuyt', '2019-12-26', 2, 120000, 1),
(68, '', 0, 0, '0000-00-00', '', '2019-12-26', 0, 0, 0),
(69, '', 0, 0, '0000-00-00', '', '2019-12-26', 0, 0, 0),
(70, 'C007', 3, 2, '2020-01-04', 'bnm', '2019-12-26', 4, 200000, 1),
(71, 'C008', 2, 10, '2019-12-28', 'm', '2019-12-26', 4, 120000, 1),
(72, 'C009', 2, 2, '2020-01-02', 'dfghjkl;', '2019-12-28', 2, 120000, 1),
(73, 'C010', 4, 2, '2019-12-29', 'citraland', '2019-12-28', 4, 120000, 1),
(74, 'C011', 3, 2, '2019-12-31', 'lp', '2019-12-28', 7, 200000, 1);

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
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jekel` varchar(255) NOT NULL,
  `nomer_id` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `nomer_id`, `telepon`, `alamat`, `email`, `username`, `password`, `level`) VALUES
(1, 'Angga', 'Sidoarjo', '2000-08-17', 'Laki-laki', '1234567890123456', '098765765234', 'Jl. Pahlawan Sidoarjo', 'angga@gmail.com', 'angga', 'ac43724f16e9241d990427ab7c8f4228', 'admin'),
(2, 'Agung', 'Jember', '1993-06-08', 'Laki-laki', '8889876543444321', '009987654321', 'Jl. Mastrip Jember', 'agung@gmail.com', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'pengguna'),
(3, 'Fadil', 'msad', '2019-11-06', 'Perempuan', '5677656', '0392488417', 'akdandlf', 'hasdbk@gamd.com', 'fadil', 'e460c54cabdebbf20ef1', 'pengguna'),
(4, 'nanan', 'kslado', '2019-12-25', 'Perempuan', '45667788990', '987676534565', 'Medalem', 'ghasjdh@gdhjf.dhaj', 'yap', '7b10a59d11c752fa1f4f', 'pengguna'),
(5, 'ya', 'hajsdnw', '2001-12-12', 'Laki-laki', '3456789', '672173983717', 'kdoajw', 'jdkajk@fnm.com', 'ya', 'd74600e380dbf727f67113fd71669d88', 'pengguna'),
(6, 'adsa', 'adc', '1999-12-12', 'Perempuan', '1321', '12312314', '14e1', 'hakjflk@jfk.com', 'lp', '351325a660b25474456a', 'pengguna'),
(7, 'xcvbnm,.', 'rtyu', '1987-12-12', 'Perempuan', '35467890', '9876545678', 'fhgjjn', 'gfhj@dgfhgj.vom', 'popo', '3b2285b348e95774cb55', 'pengguna'),
(9, 'Sayang', 'ya', '2878-08-09', 'Perempuan', '892686387', '0897282872', 'iyo', 'syg@syg.com', 'syg', '849ade26e1b6da2ed96d00db639a0985', 'pengguna'),
(10, 'bebeb', 'jajajaj', '1000-01-12', 'Perempuan', '65788987', '98765345678', 'vbnm,', 'bhbh@gmlm.com', 'bebeb', '19e2adc1d3d62258a2e756cc95311b79', 'pengguna');

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
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
