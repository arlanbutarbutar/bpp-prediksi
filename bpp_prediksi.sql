-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 20.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpp_prediksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `kode_jenis` varchar(16) NOT NULL,
  `nama_jenis` varchar(255) DEFAULT NULL,
  `hasil` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`kode_jenis`, `nama_jenis`, `hasil`) VALUES
('J01', 'Padi Sawah', 1699142.8571429),
('J02', 'Padi Ladang', NULL),
('J03', 'Jagung', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periode`
--

CREATE TABLE `tb_periode` (
  `kode_periode` varchar(16) NOT NULL,
  `nama_periode` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_periode`
--

INSERT INTO `tb_periode` (`kode_periode`, `nama_periode`) VALUES
('P09', 2020),
('P08', 2019),
('P07', 2018),
('P06', 2017),
('P02', 2013),
('P01', 2012),
('P03', 2014),
('P04', 2015),
('P05', 2016),
('P10', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prediksi`
--

CREATE TABLE `tb_prediksi` (
  `ID` int(11) NOT NULL,
  `kode_periode` varchar(16) DEFAULT NULL,
  `kode_jenis` varchar(16) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prediksi`
--

INSERT INTO `tb_prediksi` (`ID`, `kode_periode`, `kode_jenis`, `nilai`) VALUES
(124, 'P07', 'J03', 1177),
(123, 'P07', 'J02', 576),
(122, 'P07', 'J01', 36135),
(121, 'P06', 'J03', 1763),
(117, 'P05', 'J02', 576),
(119, 'P06', 'J01', 35478),
(120, 'P06', 'J02', 576),
(118, 'P05', 'J03', 1840),
(108, 'P02', 'J02', 564),
(109, 'P02', 'J03', 1900),
(110, 'P03', 'J01', 32850),
(111, 'P03', 'J02', 564),
(112, 'P03', 'J03', 1079),
(113, 'P04', 'J01', 33800),
(114, 'P04', 'J02', 576),
(115, 'P04', 'J03', 1720),
(116, 'P05', 'J01', 35478),
(107, 'P02', 'J01', 24730),
(104, 'P01', 'J01', 23740),
(105, 'P01', 'J02', 520),
(106, 'P01', 'J03', 1802),
(125, 'P08', 'J01', 36792),
(126, 'P08', 'J02', 576),
(127, 'P08', 'J03', 1197),
(128, 'P09', 'J01', 39420),
(129, 'P09', 'J02', 576),
(130, 'P09', 'J03', 1516),
(131, 'P10', 'J01', 36135),
(132, 'P10', 'J02', 576),
(133, 'P10', 'J03', 1519);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user` varchar(16) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user`, `pass`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`kode_periode`);

--
-- Indeks untuk tabel `tb_prediksi`
--
ALTER TABLE `tb_prediksi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_prediksi`
--
ALTER TABLE `tb_prediksi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
