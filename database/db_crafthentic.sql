-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 08:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crafthentic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_brg` varchar(40) NOT NULL,
  `foto_brg` text NOT NULL,
  `tgl_post` datetime NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `harga_brg`, `deskripsi`, `kategori_brg`, `foto_brg`, `tgl_post`, `id_pengguna`) VALUES
(20, 'Kemeja Batik Istimewa', 500000, 'Kemeja Batik Aroma merupakan kemeja dengan motif batik ukir produksi CV. Batik Aroma Sejahtera. Batik diperuntukkan hanya untuk kaum pria. Dijamin Gurih.', 'Fashion Pria', 'batik1.jpg', '2019-04-27 06:08:29', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama`, `email`, `pass`, `alamat`, `notelp`) VALUES
(2, 'asd', 'asd@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'Jalan Jakarta', ''),
(3, 'qwe', 'qwe@gmail.com', '200820e3227815ed1756a6b531e7e0d2', 'qwesjdj', '081238923888'),
(4, 'Ivan Naufal Islami Al-Faridzqi', 'sukacolay@a.com', 'c4ca4238a0b923820dcc509a6f75849b', 'antapani', '081238923888'),
(6, 'Joshua Galilea', 'joga2322.jg@gmail.com', 'ddcd62e16a428c8e45a71760410e1730', 'Jl. Citeureup No. 500 Cimahi Utara, Cimahi, Jawa Barat', '081313084427');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umkm`
--

CREATE TABLE `tb_umkm` (
  `id_umkm` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `nama_umkm` varchar(255) NOT NULL,
  `alamat_umkm` varchar(255) NOT NULL,
  `deskripsi_umkm` varchar(255) NOT NULL,
  `foto_umkm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_umkm`
--

INSERT INTO `tb_umkm` (`id_umkm`, `nama_pemilik`, `nama_umkm`, `alamat_umkm`, `deskripsi_umkm`, `foto_umkm`) VALUES
(1, 'Ahmad Damang', 'CV. Karya Ukir Maju', 'Jalan Kayu Manis RT 10 RW 08', 'Kami menjual berbagai ukiran kayu yang unik dengan harga yang sesuai dompet Anda', 'umkm1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
