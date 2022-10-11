-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 10.07
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `keuangan_inspektorat` int(11) DEFAULT NULL,
  `keuangan_bpk` int(11) DEFAULT NULL,
  `administrasi_inspektorat` int(11) DEFAULT NULL,
  `administrasi_bpk` int(11) DEFAULT NULL,
  `dokumen_lpj` int(11) DEFAULT NULL,
  `revisi_pengawas` int(11) DEFAULT NULL,
  `hukuman_disiplin` int(11) DEFAULT NULL,
  `ruangan_dir` int(11) DEFAULT NULL,
  `bmn_kib` int(11) DEFAULT NULL,
  `catatan_bmn` int(11) DEFAULT NULL,
  `catatan_atk` int(11) DEFAULT NULL,
  `stok_opname` int(11) DEFAULT NULL,
  `na` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id`, `fakultas`, `keuangan_inspektorat`, `keuangan_bpk`, `administrasi_inspektorat`, `administrasi_bpk`, `dokumen_lpj`, `revisi_pengawas`, `hukuman_disiplin`, `ruangan_dir`, `bmn_kib`, `catatan_bmn`, `catatan_atk`, `stok_opname`, `na`) VALUES
(18, 'FAKULTAS ILMU TARBIYAH DAN KEGURUAN', 23, 34, 45, 56, 67, 78, 89, 90, 98, 87, 76, 65, 67),
(19, 'FAKULTAS ADAB DAN ILMU BUDAYA', 90, 90, 98, 88, 77, 88, 99, 87, 87, 78, 98, 89, 89),
(20, 'FAKULTAS EKONOMI DAN BISNIS ISLAM', 99, 99, 90, 89, 88, 77, 77, 66, 78, 87, 98, 78, 86),
(21, 'FAKULTAS SYARIAH DAN HUKUM', 98, 99, 90, 100, 99, 99, 98, 99, 98, 90, 98, 99, 97);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
