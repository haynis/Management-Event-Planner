-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 14.22
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_mande`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_acara`
--

CREATE TABLE `list_acara` (
  `id_acara` int(10) NOT NULL,
  `nama_acara` varchar(20) NOT NULL,
  `tipe_acara` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_acara`
--

INSERT INTO `list_acara` (`id_acara`, `nama_acara`, `tipe_acara`, `lokasi`, `start_date`, `due_date`) VALUES
(11111, 'Dies Natalis', 'Acara Tahunan Sekola', 'Kampus A', '2020-12-04', '2020-12-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_acara`
--
ALTER TABLE `list_acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_acara`
--
ALTER TABLE `list_acara`
  MODIFY `id_acara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
