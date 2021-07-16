-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 06:24 PM
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
-- Database: `event_mande`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_anggota`
--

CREATE TABLE `list_anggota` (
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `profilepicture` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_anggota`
--

INSERT INTO `list_anggota` (`id_anggota`, `nama`, `jurusan`, `email`, `profilepicture`) VALUES
(1810120000, 'Rintaro', 'Ilmu Pasti', 'rintarou@gmail.com', ''),
(1810120011, 'Andre', 'PKn', 'zaki@gmail.com', ''),
(1810120022, 'Budi', 'Sastra Komputer', 'budi@gmail.com', ''),
(1810120033, 'Andre', 'Sastra Vanuatu', 'andre@gmail.com', ''),
(1810120044, 'Kono Dio Da', 'Atlet Jojo\'s', 'konodioda@gmail.com', ''),
(1810120055, 'Dio', 'Atlet Anime', 'dio@gmail.com', ''),
(1810120066, 'Jojo', 'Musuhnya Dio', 'jojo@gmail.com', ''),
(1810120077, 'Nisa', 'Manajemen Event', 'nisa@gmail.com', ''),
(1810120088, 'Barwis', 'Sistem Perkapalan', 'barwis@gmail.com', ''),
(1810120099, 'Han Sulu', 'Teknik Informatika', 'hansulu@gmail.com', ''),
(1810120100, 'Elaine', 'Majo no Tabitai', 'elaine@gmail.com', ''),
(1810120111, 'Sarwa', 'SI', 'sarwa@gmail.com', 0x6173736574732f696d616765732f32303138303730385f313031323537202832292e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_anggota`
--
ALTER TABLE `list_anggota`
  ADD PRIMARY KEY (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
