-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 02:56 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

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
(1, 'Kopi Tubruk', 15000, 'Kopi tubruk terenak sedunia', 'Minuman', 'kopi.jpg', '2019-04-23 07:00:00', 3),
(11, 'Bumbu Rujak', 8900, 'Rujak mantap', 'Makanan & Minuman', 'Avengers_Infinity_War_Logo3.png', '2019-04-23 08:40:50', 3),
(18, 'Sambal Sasa 1 pack', 1000, 'sambal enak', 'Fashion Pria', '531579_147665635401318_480601185_n.jpg', '2019-04-24 09:34:49', 2);

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
(4, 'Ivan Naufal Islami Al-Faridzqi', 'sukacolay@a.com', 'c4ca4238a0b923820dcc509a6f75849b', 'antapani', '081238923888');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
