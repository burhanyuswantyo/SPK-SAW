-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2020 pada 17.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(11) NOT NULL,
  `pelamar_id` int(11) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `pelamar_id`, `hasil`) VALUES
(1, 1, 21.4806),
(2, 2, 21.7583),
(3, 3, 22.9667),
(4, 4, 16.6944),
(5, 5, 12.2694),
(6, 6, 17.9),
(7, 7, 18.3556),
(8, 8, 19.4056);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `bobot` int(2) NOT NULL,
  `sifat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kriteria`, `bobot`, `sifat`) VALUES
(1, 'Kedisiplinan', 5, 1),
(2, 'Masa pengalaman', 3, 1),
(3, 'Ketaatan', 4, 1),
(4, 'Kecakapan', 2, 1),
(5, 'Kepemimpinan', 2, 1),
(6, 'Keterampilan', 2, 1),
(7, 'Moral dan perilaku', 5, 1),
(8, 'Kreativitas dan inovasi', 1, 1),
(9, 'Kerjasama', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_pelamar`
--

CREATE TABLE `tb_nilai_pelamar` (
  `id` int(11) NOT NULL,
  `pelamar_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai_pelamar`
--

INSERT INTO `tb_nilai_pelamar` (`id`, `pelamar_id`, `kriteria_id`, `nilai`) VALUES
(1, 1, 1, 8),
(2, 1, 2, 2),
(3, 1, 3, 8),
(4, 1, 4, 6),
(5, 1, 5, 4),
(6, 1, 6, 4),
(7, 1, 7, 7),
(8, 1, 8, 3),
(9, 1, 9, 8),
(10, 2, 1, 10),
(11, 2, 2, 1.5),
(12, 2, 3, 6),
(13, 2, 4, 9),
(14, 2, 5, 4),
(15, 2, 6, 4),
(16, 2, 7, 7),
(17, 2, 8, 3),
(18, 2, 9, 8),
(19, 3, 1, 7),
(20, 3, 2, 3),
(21, 3, 3, 9),
(22, 3, 4, 3),
(23, 3, 5, 9),
(24, 3, 6, 3),
(25, 3, 7, 8),
(26, 3, 8, 2),
(27, 3, 9, 9),
(28, 4, 1, 8),
(29, 4, 2, 1),
(30, 4, 3, 5),
(31, 4, 4, 1),
(32, 4, 5, 10),
(33, 4, 6, 1),
(34, 4, 7, 6),
(35, 4, 8, 4),
(36, 4, 9, 6),
(37, 5, 1, 9),
(38, 5, 2, 0.6),
(39, 5, 3, 4),
(40, 5, 4, 6),
(41, 5, 5, 3),
(42, 5, 6, 2),
(43, 5, 7, 3),
(44, 5, 8, 1),
(45, 5, 9, 1),
(46, 6, 1, 6),
(47, 6, 2, 1.2),
(48, 6, 3, 8),
(49, 6, 4, 8),
(50, 6, 5, 6),
(51, 6, 6, 2),
(52, 6, 7, 6),
(53, 6, 8, 3),
(54, 6, 9, 5),
(55, 7, 1, 4),
(56, 7, 2, 2),
(57, 7, 3, 6),
(58, 7, 4, 4),
(59, 7, 5, 4),
(60, 7, 6, 4),
(61, 7, 7, 8),
(62, 7, 8, 4),
(63, 7, 9, 6),
(64, 8, 1, 8),
(65, 8, 2, 2.5),
(66, 8, 3, 5),
(67, 8, 4, 3),
(68, 8, 5, 8),
(69, 8, 6, 3),
(70, 8, 7, 6),
(71, 8, 8, 2),
(72, 8, 9, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id`, `nik`, `nama`, `periode`, `is_active`) VALUES
(1, '0341713270155727', 'Adi Pratama', 1, 0),
(2, '2975852963633140', 'Budi Pekerti', 1, 0),
(3, '2193943270565930', 'Cita Citata', 1, 0),
(4, '7608971373236610', 'Dodi Cahyadi', 1, 0),
(5, '0256248274448954', 'Evan Gunadi', 1, 0),
(6, '7775405761569990', 'Fajar Dihajar', 1, 0),
(7, '1501942395572550', 'Gunawan Menawan', 1, 0),
(8, '4091814025749710', 'Haris Berbaris', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_temp`
--

CREATE TABLE `tb_temp` (
  `id` int(11) NOT NULL,
  `pelamar_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `norm` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai_pelamar`
--
ALTER TABLE `tb_nilai_pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_pelamar`
--
ALTER TABLE `tb_nilai_pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
