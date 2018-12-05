-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 04:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temanles`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(4) NOT NULL,
  `id_pembuatIklan` int(4) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `statusPencarian` varchar(15) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_pembuatIklan`, `judul`, `slug`, `statusPencarian`, `jenjang`, `deskripsi`) VALUES
(17, 9, 'Cari guru programing', 'cari-guru-programing', 'Guru', 'Mahasiswa', 'Buth guru pemrograman Dasar'),
(18, 10, 'Cari Murid Matematika', 'cari-murid-matematika', 'Murid', 'SMP', 'Saya bisa mengajarkan matematika untuk jenjang SMP');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_pengirim` int(4) NOT NULL,
  `id_pembuatIklan` int(4) NOT NULL,
  `id_iklan` int(4) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_pengirim`, `id_pembuatIklan`, `id_iklan`, `komentar`, `waktu`) VALUES
(10, 9, 17, 'Semester berapa?', '2017-11-30 09:44:04'),
(14, 9, 17, 'Saya bisa java dan php', '2017-11-30 19:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `password`, `alamat`, `noTelp`, `deskripsi`, `foto`) VALUES
(9, 'alimah', 'alimah@yahoo.com', '92d927c1949fc05f4ea35f1cac533ccc', 'JL gamprit no2', '08579191919', 'Kuliah UB Filkom Informatika Semester 5', 'foto/1478386182730.jpg'),
(10, 'chan', 'chan@yahoo.com', '26c322652770620e64ac90682eb6504c', 'Jl kerto aji', '085710509584', 'Mahasiswa UB Filkom', 'foto/20151219_155846.jpg'),
(14, 'heryan', 'muhammadheryan@ymail.com', 'ad29c3e86b860e66c982e374698699fa', 'Jl Kerto Aji No 3 Malang', '085604065366', 'Mahasiswa Teknik Informatika semester 5', 'foto/IMG_20161105_115151_BURST3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pengirim` int(4) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'unread',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pengirim`, `id_penerima`, `pesan`, `status`, `waktu`) VALUES
(10, 9, 'hai alimah', 'read', '2017-11-29 04:10:54'),
(9, 10, 'Hai juga', 'read', '2017-11-29 04:24:35'),
(14, 10, 'Bro, Apa Kabar?', 'read', '2017-11-29 04:25:27'),
(10, 9, 'saya bisa jadi guru programing', 'read', '2017-11-29 04:56:10'),
(10, 9, 'Kamu emang mau belajar bahasa apa?', 'read', '2017-11-29 05:25:52'),
(14, 9, 'saya bisa', 'read', '2017-11-29 06:03:21'),
(10, 9, 'Halooo', 'read', '2017-11-29 07:32:10'),
(9, 10, 'iyaaa ia nanti di hubungi lagi', 'read', '2017-11-29 07:37:03'),
(9, 10, 'saya mau belajar CI?', 'read', '2017-11-30 03:54:44'),
(9, 10, 'bisa kah?', 'read', '2017-11-30 03:54:52'),
(10, 9, 'Ooh bisa bisa kok', 'read', '2017-11-30 04:03:57'),
(9, 10, 'oke saya posisi di malang', 'read', '2017-11-30 04:17:59'),
(9, 14, 'beneran bisa?', 'read', '2017-11-30 04:44:38'),
(14, 9, 'iyaak bisa PHP dan java', 'read', '2017-11-30 04:45:10'),
(10, 9, 'saya juga di malang', 'read', '2017-11-30 05:05:24'),
(10, 9, 'di kerto aji', 'read', '2017-11-30 05:05:31'),
(9, 14, 'posisi dimana?', 'read', '2017-11-30 05:06:14'),
(14, 10, 'kok di read doang', 'read', '2017-11-30 08:19:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`),
  ADD KEY `id_pembuatIklan` (`id_pembuatIklan`),
  ADD KEY `id_pembuatIklan_2` (`id_pembuatIklan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD KEY `id_iklan` (`id_iklan`),
  ADD KEY `id_pembuatIklan` (`id_pembuatIklan`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD KEY `id_pengirim` (`id_pengirim`),
  ADD KEY `id_penerima` (`id_penerima`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `iklan_ibfk_1` FOREIGN KEY (`id_pembuatIklan`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_iklan`) REFERENCES `iklan` (`id_iklan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`id_pembuatIklan`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
