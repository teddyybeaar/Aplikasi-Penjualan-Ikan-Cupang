-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 02:43 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
(1, 'aaq', 'admin', '123', 1),
(2, 'qwqw', 'sadmin', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_produk`, `qty`, `harga`, `total`) VALUES
(1, 21070001, 1, 1, 1, 1),
(2, 21070002, 1, 1, 1, 1),
(3, 21070003, 1, 1, 1, 1),
(4, 21070004, 1, 1, 1, 1),
(5, 21070005, 1, 1, 1, 1),
(6, 21070006, 1, 1, 1, 1),
(7, 21070007, 1, 1, 1, 1),
(8, 21070008, 1, 1, 1, 1),
(9, 21070009, 1, 1, 1, 1),
(10, 21070010, 1, 1, 1, 1),
(11, 21070011, 1, 1, 1, 1),
(12, 21070012, 1, 1, 1, 1),
(13, 21070013, 2, 7, 1, 7),
(14, 21070014, 2, 1, 1, 1),
(15, 21070015, 1, 2, 30000, 60000),
(16, 21070016, 2, 1, 30000, 30000),
(17, 21070017, 2, 1, 30000, 30000),
(18, 21070017, 3, 1, 30000, 30000),
(19, 21070018, 2, 1, 30000, 30000),
(20, 21070019, 1, 1, 30000, 30000),
(21, 21070020, 1, 1, 30000, 30000),
(22, 21070021, 1, 1, 30000, 30000),
(23, 21070022, 1, 1, 30000, 30000),
(24, 21070022, 2, 1, 30000, 30000),
(25, 21070022, 1, 1, 30000, 30000),
(26, 21070023, 1, 1, 30000, 30000),
(27, 21070024, 2, 1, 30000, 30000),
(28, 21070025, 3, 1, 30000, 30000),
(29, 21080026, 2, 4, 30000, 120000),
(30, 21080027, 3, 2, 30000, 60000),
(31, 21080028, 3, 2, 30000, 60000),
(32, 21080029, 3, 1, 30000, 30000),
(33, 21080030, 3, 2, 30000, 60000),
(34, 21080031, 1, 1, 30000, 30000),
(35, 21080032, 1, 1, 30000, 30000),
(36, 21080033, 2, 1, 30000, 30000),
(37, 21090034, 1, 1, 30000, 30000),
(38, 21090035, 2, 1, 30000, 30000),
(39, 21090036, 1, 1, 30000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`, `created`) VALUES
(1, 'qwqw', 'qqwqw@aa.com', 'qwqw', '0000-00-00 00:00:00'),
(2, 'qwqw', 'qqwqw@aa.com', 'qwqw', '2021-07-21 18:28:34'),
(3, 'qwqw', 'qqwqw@aa.com', 'qwqw', '2021-07-21 18:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `vid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `harga`, `stok`, `foto`, `vid`) VALUES
(1, 'Blue Rim', 'Ikan cupang cantik dengan warna dasar putih solid dikelilingi warna biru pada bagian pinggirnya ', '30000', 17, 'c1.jpeg', 'https://www.youtube.com/embed/Igld5P4tVO0'),
(2, 'Galaxy Koi Multicolor', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 18, 'c2.jpg', 'https://www.youtube.com/embed/VW0YaWqsLIs'),
(3, 'Fancy Marble', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c3.jpg', 'https://www.youtube.com/embed/QbV97rt_8Xs'),
(4, 'Nemo', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c4.jpg', 'https://www.youtube.com/embed/LGpNjzdZcbA'),
(5, 'Red Koi Galaxy', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c10.jpg', 'https://www.youtube.com/embed/NlqlhWyZ4Zk'),
(6, 'Yellow Fancy', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c5.jpg', 'https://www.youtube.com/embed/Mkk_zYr4anA'),
(7, 'Yellow Galaxy', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c8.jpg', 'https://www.youtube.com/embed/-kIwpPkvtd8'),
(8, 'Nemo Candy', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c7.jpg', 'https://www.youtube.com/embed/Vr3Nb-mC-n8'),
(9, 'Nemo Marble', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c6.jpg', 'https://www.youtube.com/embed/d_0nkUCTjtk'),
(10, 'Copper Gold', 'Ikan cupang cantik dengan gemerlap warna-warni yang indah', '30000', 20, 'c9.jpg', 'https://www.youtube.com/embed/rMiFCIIdJRs');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `review` varchar(250) NOT NULL,
  `rating` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `id_produk`, `review`, `rating`, `tanggal`) VALUES
(1, 19, 3, 'Baguss', '5', '2021-07-27'),
(2, 19, 3, 'Oke', '5', '2021-07-27'),
(3, 22, 3, 'kualitas baik', '5', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `resi` varchar(250) NOT NULL,
  `alasan` varchar(250) NOT NULL,
  `fotop` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_produk`, `tanggal_pesan`, `status`, `subtotal`, `bukti`, `resi`, `alasan`, `fotop`) VALUES
(21070001, 2, 0, '2021-07-20', 'belum bayar', 1, '', '0', '', ''),
(21070002, 2, 0, '2021-07-20', 'belum bayar', 1, '', '0', '', ''),
(21070012, 1, 1, '2021-07-21', 'verifikasi', 1, '26.png', '0', '', ''),
(21070013, 1, 2, '2021-07-22', 'verifikasi', 7, '27.png', '0', '', ''),
(21070014, 1, 2, '2021-07-22', 'dikirim', 1, '28.png', '0', '', ''),
(21070015, 19, 1, '2021-07-24', 'selesai', 60000, '526-5268984_safe-icon-png-transparent-png.png', '0', '', ''),
(21070016, 19, 2, '2021-07-24', 'selesai', 30000, 'free-8-99377.png', '0', '', ''),
(21070017, 19, 3, '2021-07-24', 'selesai', 30000, 'free-8-993771.png', '0', '', ''),
(21070018, 19, 2, '2021-07-24', 'selesai', 30000, 'free-8-993772.png', '0', 'qq', 'free-8-99377.png'),
(21070019, 19, 1, '2021-07-24', 'selesai', 30000, 'free-8-993773.png', '0', '', ''),
(21070020, 19, 1, '2021-07-24', 'dikirim', 30000, 'c1.jpeg', '0', '', ''),
(21070021, 19, 1, '2021-07-24', 'selesai', 30000, 'c2.jpg', '0', 'warna tidak sesuai', '23.png'),
(21070022, 19, 1, '2021-07-25', 'selesai', 30000, 'WhatsApp_Image_2021-06-10_at_11_13_39_AM_(1).jpeg', '0', '', ''),
(21070024, 19, 2, '2021-07-28', 'selesai', 30000, 'WhatsApp_Image_2021-02-21_at_3_21_27_PM.jpeg', '0', '', ''),
(21070025, 19, 3, '2021-07-28', 'selesai', 30000, 'WhatsApp_Image_2021-02-21_at_3_21_27_PM1.jpeg', '0', '', ''),
(21080026, 19, 2, '2021-08-06', 'selesai', 120000, '4sA6PkxA.jpeg', '0', '', ''),
(21080027, 19, 3, '2021-08-07', 'selesai', 60000, '29.png', '0', '', ''),
(21080028, 19, 3, '2021-08-07', 'selesai', 60000, '210.png', '0', '', ''),
(21080029, 19, 3, '2021-08-07', 'selesai', 30000, '29.png', '0', '', ''),
(21080030, 19, 3, '2021-08-07', 'selesai', 60000, '210.png', '0', 'warna tidak sesuai', '24.png'),
(21080031, 19, 1, '2021-08-26', 'selesai', 30000, '211.png', '0', '', ''),
(21080032, 19, 1, '2021-08-27', 'dikirim', 30000, '212.png', '123', '', ''),
(21080033, 19, 2, '2021-08-27', 'verifikasi', 30000, '231.png', '', '', ''),
(21090034, 22, 1, '2021-09-09', 'dikirim', 30000, 'c4.jpg', '', 'warna tidak sesuai', '25.png'),
(21090035, 25, 2, '2021-09-10', 'selesai', 30000, '213.png', '', 'warna tidak sesuai', '26.png'),
(21090036, 25, 1, '2021-09-10', 'dikirim', 30000, '214.png', '321', 'warna tidak sesuai', '27.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `alamat`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `status`) VALUES
(3, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '0000-00-00', '0'),
(4, 'aaa', 'user', 'aasas', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-02', '0'),
(5, 'aaa', 'user', 'qqqqq', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-02', '0'),
(6, 'aaaa', 'teddy', 'qqqq', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-16', '0'),
(7, 'aaa', 'user', 'qqqq', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-24', '0'),
(8, 'aaa', 'user', '1212', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(9, 'aaa', 'user', '1212', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(10, 'aaa', 'user', 'jhj', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(11, 'aaa', 'user', 'qqq', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(12, 'aaa', 'user', 'hll', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(13, 'aaa', 'user', 'asas', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(14, 'aaa', 'user', 'kjhkj', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(15, 'aaaqqq', 'user', 'qwqwq', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(16, 'aaooo', 'user', 'kjbkj', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '0'),
(17, 'aaoooq', 'user', 'aaaa', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', 'nonaktif'),
(18, 'aaoooqq', 'user', 'aasas', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', 'nonaktif'),
(19, 'user', 'user', '123', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-03', '1'),
(20, 'aaoooqq', 'user', 'q121', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-09', 'aktif'),
(21, 'aaaq', 'user', '', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-15', '-- Pilih St'),
(22, 'aaa', 'user', 'user', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-07-25', '1'),
(23, 'user', 'users', 'users', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-09-10', 'nonaktif'),
(24, 'user', 'users', '123', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-09-10', 'aktif'),
(25, 'asdasd', 'asdasd', '123', 'ziusesan@gmail.com', 'aasas', '11221', 'aaaa', '2021-09-10', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21090037;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
