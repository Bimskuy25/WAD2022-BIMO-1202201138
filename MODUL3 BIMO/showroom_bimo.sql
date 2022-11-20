-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 20, 2022 at 02:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_bimo`
--

CREATE TABLE `showroom_bimo` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_bimo`
--

INSERT INTO `showroom_bimo` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(7, 'Nissan GTR R35', 'Bimo_1202201138', 'Nissan', '2022-11-20', 'Mobil Yang sangat kece dan keren lah pokoknya mantap abiezzzz', 'Nissan GTRR35.jpg', 'Lunas'),
(9, 'BMW M4', 'Bimo_1202201138', 'BMW', '2022-11-20', 'Mobil Yang sangat mantap ketika dipakai, memberikan kesan yang elegan sehingga terlihat tampan dan pemberani', 'bmw_m4.jpg', 'Lunas'),
(11, 'Toyota Supra', 'Bimo_1202201138', 'Toyota', '2022-11-24', 'Mobil Yang sangat modil dan berkesan menarik', 'Toyota Supra.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_bimo`
--
ALTER TABLE `showroom_bimo`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_bimo`
--
ALTER TABLE `showroom_bimo`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
