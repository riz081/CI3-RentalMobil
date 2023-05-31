-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2023 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'tes', 'tes', 'tes@mail.com', 'tes', 1),
(9, 'paijo', 'paijo', 'paijo@gmail.com', '44529fdc8afb86d58c6c02cd00c02e43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telp`, `no_ktp`, `password`, `role_id`) VALUES
(6, 'Budi', 'budi', 'Surabaya', 'Laki - laki', '1231481418', '2942482842', '3074d9b7ba24b27d9ae573e9c021a487', 2),
(15, 'admin', 'admin', 'Surabaya', 'Laki - laki', '1231481418', '1841841841841', '21232f297a57a5a743894a0e4a801fc3', 2),
(16, 'babi', 'babi', 'baib', 'Laki - laki', '1439141941', '19419419', '5b307381861d9a4c51b0e881eef973d3', 2),
(17, 'asep', 'asep', 'surabaya', 'Laki-laki', '91419419119', '025925252592', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `kode_driver` varchar(120) NOT NULL,
  `nickname` varchar(120) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `status_driver` varchar(50) NOT NULL,
  `harga_driver` int(11) NOT NULL,
  `denda_driver` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `kode_driver`, `nickname`, `nama`, `alamat`, `no_hp`, `status_driver`, `harga_driver`, `denda_driver`, `foto`) VALUES
(8, 'W091', 'Yuji', 'Wahyu Aji', 'Balongpanggang', 19139191, '0', 110000, 10000, 'yuji.jpg'),
(11, 'R123', 'Rian', 'Amirul Rian', 'Balongpanggang', 9181181, '0', 200000, 30000, 'tes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `sopir` int(11) NOT NULL,
  `safety` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `ac`, `sopir`, `safety`, `gambar`) VALUES
(18, 'SDN', 'Honda Civic RS Turbo', 'AE 6364 WAK', 'Putih', '2021', '1', 400000, 200000, 1, 0, 1, 'civic4.png'),
(19, 'MPV', 'Toyota Avanza', 'L 1532 ASW', 'SIlver', '2022', '0', 250000, 50000, 1, 0, 0, 'avanza1.jpg'),
(20, 'SUV', 'Land Rover Defender', 'S 5232 LS', 'Putih', '2021', '0', 5000000, 500000, 1, 1, 1, 'rover.jpg'),
(21, 'SUV', 'Mercedez Benz GLS ', 'N 9853 KSA', 'Putih', '2018', '0', 3000000, 500000, 1, 0, 1, 'gls.jpg'),
(23, 'SUV', 'Toyota Fortuner', 'B 0242 SAP', 'Hitam', '2015', '0', 600000, 200000, 1, 0, 1, 'fortuner.jpeg'),
(24, 'HB', 'Honda Jazz', 'L 1532 ASE', 'Hitam', '2018', '0', 300000, 150000, 1, 0, 1, 'jazz.jpg'),
(25, 'SDN', 'Honda CRV', 'AB 1414 CKJ', 'Hitam', '2022', '1', 750000, 200000, 1, 0, 1, 'crv.jpg'),
(27, 'MPV', 'Toyota Avanza Veloz', 'L 1532 ASW', 'SIlver', '2022', '1', 350000, 10000, 1, 1, 1, 'avanza2.png');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `nama_type` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_type`, `kode_type`, `nama_type`) VALUES
(6, 'CP', 'Coupe'),
(7, 'SDN', 'Sedan'),
(8, 'HB', 'Hatchback'),
(9, 'MPV', 'Multi Purphose Vehicle'),
(10, 'SUV', 'Sport Utility Vehicle'),
(11, 'DC', 'Double Cabin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `denda`, `total_denda`, `harga`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(32, 6, 19, '2022-05-23', '2022-05-24', '50000', '300000', '250000', '2022-05-30', 'Sudah Dikembalikan', 'Selesai', '6101-20738-1-PB.pdf', 1),
(36, 6, 23, '2022-06-13', '2022-06-14', '200000', '0', '600000', '0000-00-00', 'Belum Dikembalikan', 'Belum Selesai', 'aplikasi pembukuan.zip', 1),
(37, 6, 20, '2022-06-13', '2022-06-20', '500000', '0', '5000000', '0000-00-00', 'Belum Dikembalikan', 'Belum Selesai', 'Home Assignment- System Analyst.docx', 1),
(39, 6, 21, '2022-06-20', '2022-06-21', '500000', '0', '3000000', '0000-00-00', 'Belum Dikembalikan', 'Belum Selesai', 'robustness diagram-RD UPDATE DATA.drawio.png', 0),
(45, 16, 24, '2022-07-09', '2022-07-15', '150000', '0', '300000', '0000-00-00', 'Belum Dikembalikan', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_driver`
--

CREATE TABLE `transaksi_driver` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda_driver` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `harga_driver` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_driver`
--

INSERT INTO `transaksi_driver` (`id_rental`, `id_customer`, `id_driver`, `tanggal_rental`, `tanggal_kembali`, `denda_driver`, `total_denda`, `harga_driver`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(4, 6, 11, '2022-05-23', '2022-05-25', '30000', '150000', '200000', '2022-05-30', 'Sudah Dikembalikan', 'Selesai', '6101-20738-1-PB.pdf', 0),
(5, 6, 8, '2022-05-23', '2022-05-30', '10000', '0', '110000', '0000-00-00', 'Belum Dikembalikan', 'Belum Selesai', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `fk1` (`id_customer`),
  ADD KEY `fk2` (`id_mobil`);

--
-- Indexes for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  ADD PRIMARY KEY (`id_rental`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
