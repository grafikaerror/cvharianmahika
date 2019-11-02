-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 04:12 AM
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
-- Database: `db_harian_mahika`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(255) NOT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `image_admin` varchar(255) DEFAULT NULL,
  `password_admin` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `is_active` int(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email_admin`, `image_admin`, `password_admin`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Testing', 'test@gmail.com', 'default.jpg', '$2y$10$Od13RAm34obUZMPQpUc5VuXFr2VOOykmWs9UkRkqXGOXRq7AMcMPC', 3, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `id_admin` int(255) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `desc_produk` text NOT NULL,
  `harga_produk` int(255) NOT NULL,
  `img_produk` varchar(255) NOT NULL,
  `api_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `id_admin`, `nama_produk`, `desc_produk`, `harga_produk`, `img_produk`, `api_produk`) VALUES
(1, 1, 1, 'Batu', 'Batu Keren', 100000, 'default.jpg', 'null'),
(2, 1, 1, 'ADWwa', 'Dwdawdadawf', 121412, 'default.jpg', 'null'),
(3, 1, 1, 'wdadawd', 'asdawda', 123123, 'default.jpg', 'null'),
(4, 1, 1, 'wadawd', 'wdawfawfaw', 1112312, '02-11-2019-040759wadawd.png', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tampilan`
--

CREATE TABLE `tb_tampilan` (
  `id_tampilan` int(255) NOT NULL,
  `seksi_tampilan` varchar(255) DEFAULT NULL,
  `nama_tampilan` varchar(255) DEFAULT NULL,
  `isi_tampilan` varchar(255) DEFAULT NULL,
  `id_admin` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tampilan`
--

INSERT INTO `tb_tampilan` (`id_tampilan`, `seksi_tampilan`, `nama_tampilan`, `isi_tampilan`, `id_admin`) VALUES
(1, 'home', 'Judul Home', 'CV Harian Mahika', 1),
(2, 'home', 'Deskripsi Home', 'Menjual Banyak Kebutuhan Bahan Bangunan', 1),
(3, 'about', 'Isi About', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quisquam ullam hic dignissimos aliquam? Perferendis, excepturi ex autem minus non aspernatur, illo ad laudantium pariatur consequatur sint, magnam eaque ducimus!', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_tampilan`
--
ALTER TABLE `tb_tampilan`
  ADD PRIMARY KEY (`id_tampilan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tampilan`
--
ALTER TABLE `tb_tampilan`
  MODIFY `id_tampilan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
