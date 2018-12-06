-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2018 pada 04.09
-- Versi Server: 10.1.22-MariaDB
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
-- Database: `temanles`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
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
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_pembuatIklan`, `judul`, `slug`, `statusPencarian`, `jenjang`, `deskripsi`) VALUES
(20, 16, 'Matematika Biologi', 'matematika-biologi', 'Guru', 'SD', 'Minimal memiliki kemampuan bahasa \r\nJAVA\r\nPHP'),
(22, 18, 'Jasa Les Private Tematik', 'jasa-les-private-tematik', 'Murid', 'SD', 'Les Private tematik kelas 3 - 5 Sekolah Dasar (SD) '),
(23, 18, 'Jasa Les Private Matematika ', 'jasa-les-private-matematika', 'Murid', 'SMA', 'Les Kelas \"PINTAR\" membuka les matematika Sekolah Menengah Atas\r\nKursi 20 siswa\r\nTersedia 5 kursi \r\nHappy join ! :)\r\n'),
(24, 19, 'Tematik', 'tematik', 'Guru', 'SD', 'Guru SD tematik\r\n'),
(25, 19, 'Bhs.Inggris', 'bhsinggris', 'Guru', 'SD', 'Ingris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_pengirim` int(4) NOT NULL,
  `id_pembuatIklan` int(4) NOT NULL,
  `id_iklan` int(4) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_pengirim`, `id_pembuatIklan`, `id_iklan`, `komentar`, `waktu`) VALUES
(19, 18, 23, 'Saya ingin mendaftar ', '2018-12-04 20:51:02'),
(20, 18, 23, 'Wahh asik ', '2018-12-04 20:52:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
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
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `password`, `alamat`, `noTelp`, `deskripsi`, `foto`) VALUES
(16, 'Dhany', 'dhany@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Merjosari Malang', '0815544332211', 'Mahasiswa \r\nSaya ingin belajar Programming', 'foto/Image_0157f082.jpg'),
(18, 'Danu', 'danu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Tulungagung', '081223322333', 'Dosen Komputer\r\nUniversitas Brawijaya', 'foto/danu1.PNG'),
(19, 'Sabrina', 'sabrina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Wagir', '085681872737', 'Pelajar SMA N 3 Malang\r\n', 'foto/sabrina.PNG'),
(20, 'Alvin', 'alvin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mertojoyo Malang', '089652442412', 'Pelajar SMP N 1 Jakarta', 'foto/alvin.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pengirim` int(4) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'unread',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pengirim`, `id_penerima`, `pesan`, `status`, `waktu`) VALUES
(18, 16, 'Saya bersedia menjadi guru private programming saudara\r\nSilahkan hubungi nomor saya.\r\nTerimakasih :)\r\n', 'read', '2018-12-04 20:42:23'),
(16, 18, 'Baik terimakasih', 'read', '2018-12-04 20:45:00'),
(18, 19, 'Saya berminat mendaftar', 'unread', '2018-12-05 10:07:00');

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
  MODIFY `id_iklan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `iklan_ibfk_1` FOREIGN KEY (`id_pembuatIklan`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_iklan`) REFERENCES `iklan` (`id_iklan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`id_pembuatIklan`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
