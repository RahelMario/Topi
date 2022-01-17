-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 09:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_psn` datetime NOT NULL,
  `batas_byr` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_psn`, `batas_byr`) VALUES
(16, 'Bang Dodo', 'Pedalaman Kampung Lalang', '2021-12-05 21:22:21', '2021-12-06 21:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `des` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `kat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `des`, `harga`, `stok`, `gambar`, `kat`) VALUES
(1, 'Mie Goreng Biasa', 'Yang Masak Bapak-Bapak', 7000, 10, 'mie.jpg', 'Makanan'),
(2, 'Mie Goreng Spesial', 'Sama Aja Kaya Mie Goreng Biasa Cuma Tambah Telor', 10000, 10, 'sp.jpg', 'Makanan'),
(3, 'Mie Goreng Juara', 'Perpaduan Keju Dan Bon Cabe Menciptakan Rasa Yang Tak Bisa Dijelaskan Oleh Kata-Kata', 20000, 4, 'kb.jpg', 'Makanan'),
(4, 'Mie Kuah Daging', 'Dah Pasti Enak Ditambah Yang Masak Cantik ', 15000, 6, 'mk.jpg', 'Makanan'),
(5, 'Kopi Mas-Mas Biasa', 'Es Kopi Susu Gula Aren', 15000, 20, 'kopisusuaren.jpg', 'Minuman'),
(6, 'Kopi Alabasta', '100% Kopi Hitam', 5000, 999, 'kopiitem.jpg', 'Minuman'),
(7, 'Mandi', 'Teh Manis Dingin', 7000, 44, 'mandi.jpg', 'Minuman'),
(8, 'Mangat', 'Teh Hangat', 5000, 48, 'tehangat.jpg', 'Minuman'),
(9, 'Ifo Mie Mertua ', 'Ifo Mie Goreng', 10000, 88, 'ifo_grg.jpg', 'Makanan'),
(10, 'Ifo Mie Menantu', 'Ifo Mie Kuah', 12000, 75, 'ifo_kuah.jpg', 'Makanan'),
(11, 'Telor Ceplok', 'Telor Ayam Digoreng', 3000, 80, 'telor.jpg', 'Topping'),
(12, 'Ayam Goreng', 'Ayam Kampung', 7000, 92, 'ayam.jpeg', 'Topping'),
(13, 'Juz Alpukat', 'Alpukat Enak Gaada Obat', 6000, 46, 'Jus_Alpukat.jpg', 'Minuman'),
(14, 'Spaghetti V1', 'Enak Tapi Gak Mewah', 12000, 33, 'spgv1.jpg', 'Makanan'),
(15, 'Spaghetti V2', 'Penyempurnaan Dari V1', 17000, 976, 'spgv2.jpg', 'Makanan'),
(16, 'Juz Jeruk', 'Jeruk Peras', 7000, 67, 'juzjrk.jpg', 'Minuman'),
(17, 'Perkedel', 'Isi Ayam', 2000, 66, 'perkedal.jpg', 'Topping'),
(18, 'Juz Sehat', 'Juz Wortel', 6000, 23, 'wortel.jpg', 'Minuman'),
(19, 'Risol', 'Isi Ayam Dan Sosis', 3000, 40, 'risol.jpg', 'Topping'),
(20, 'Saus BBQ', 'Membuat Makanan Menjadi Lebih Nikmat', 4000, 67, 'saus_bbq.jpg', 'Topping'),
(21, 'MIlkShake Strawberry', 'Susu Kocok Sroberi', 20000, 60, 'milkshake_strawberry.jpg', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_menu`, `nama_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(22, 16, 1, 'Mie Goreng Biasa', 2, 10000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `image`, `address`) VALUES
(1, 'wewe', 'e@gmail.com', '$2y$10$QQQZIHS.91Bt1/uuyE5oc.mUEgtsLows8wMhHymQvob1Axyr1PXNK', 2, '3.jpg', 'Simpang Pemda No.44'),
(3, 'Bang Dodo', 'dodo@gmail.com', '$2y$10$VB23YrAkPVWEzFVJe4faveFCh2ZgoY7MBMlW.e996nRhxjNDUCLBa', 2, '2.jpg', 'Pedalaman Kampung Lalang'),
(4, 'wafi', 'wa@gmail.com', '$2y$10$ML4YzmZBX4RKxK0/2UmM7.P9YvBzHMzwld38sUodXDtlrgQU6rMuK', 1, 'default.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
