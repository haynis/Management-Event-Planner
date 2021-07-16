-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 14.23
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
-- Struktur dari tabel `list_divisi`
--

CREATE TABLE `list_divisi` (
  `id_divisi` int(10) NOT NULL,
  `nama_divisi` varchar(20) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `nama_acara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_divisi`
--

INSERT INTO `list_divisi` (`id_divisi`, `nama_divisi`, `pic`, `nama_acara`) VALUES
(101, 'Finance', 'Raihanah', 'Dies Natalis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_divisi`
--
ALTER TABLE `list_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_divisi`
--
ALTER TABLE `list_divisi`
  MODIFY `id_divisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
