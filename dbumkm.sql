-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 11:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kab_kota`
--

CREATE TABLE `kab_kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kab_kota`
--

INSERT INTO `kab_kota` (`id`, `nama`) VALUES
(1, 'Depok'),
(2, 'Tanggerang'),
(3, 'Jakarta'),
(4, 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_umkm`
--

CREATE TABLE `kategori_umkm` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_umkm`
--

INSERT INTO `kategori_umkm` (`id`, `nama`) VALUES
(1, 'Jasa'),
(2, 'Pertanian'),
(3, 'Industri'),
(4, 'Kreatif');

-- --------------------------------------------------------

--
-- Table structure for table `pembina`
--

CREATE TABLE `pembina` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `keahlian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id`, `nama`, `gender`, `tgl_lahir`, `tmp_lahir`, `keahlian`) VALUES
(1, 'Siti Aisyah', 'P', '2004-07-03', 'Citayem', 'Memasak'),
(2, 'Rizki', 'L', '2004-09-15', 'Garut', 'Memasak'),
(3, 'Ridwan', 'L', '2008-02-21', 'Jakarta', 'Kemampuan untuk terus Berinovasi'),
(4, 'Raisya', 'P', '2023-12-10', 'Bandung', 'Kemampuan komunikasi dan membangun jaringan bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ibukota` varchar(45) NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`, `ibukota`, `latitude`, `longtitude`) VALUES
(1, 'Jambi', 'Jakarta', -1.596672, 103.615799),
(2, 'Jawa barat', 'Jakarta', -6.943097, 107.633545),
(3, 'Bali', 'Jakarta', -8.409518, 115.188919),
(4, 'Gorontalo', 'Jakarta', 0.556174, 123.058548);

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `modal` double NOT NULL,
  `pemilik` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `website` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `rating` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id`, `nama`, `modal`, `pemilik`, `alamat`, `website`, `email`, `rating`) VALUES
(1, 'Angkringan 69', 20000000, 'Ipan Slaw', 'Bekasi', 'www.Angkringan69.com', 'angkringan69@yahoo.com', 'pilihan cemilannya banyak, enak poll'),
(2, 'Kebab Bat', 22000000, 'Siti', 'Bogor', 'www.KebabBat.com', 'kebabbat@gmail.com', 'daging nya ga pelit, enak pisan'),
(3, 'Takoyaki New', 17000000, 'Ijat', 'Bekasi', 'www.takoyakinew.com', 'takoyakinew@gmail.com', 'enak bet, toping nya banyak'),
(4, 'Sebalak Jokel', 25000000, 'Pudon', 'tapos', 'www.seblakjokel.com', 'seblakjokel@gmail.com', 'enak banget inimah, toping banyak, penyajian ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kab_kota`
--
ALTER TABLE `kab_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_umkm`
--
ALTER TABLE `kategori_umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kab_kota`
--
ALTER TABLE `kab_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_umkm`
--
ALTER TABLE `kategori_umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
