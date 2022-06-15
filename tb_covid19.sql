-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 06.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_covid19`
--

CREATE TABLE `tb_covid19` (
  `id_covid` int(11) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `newcase` varchar(30) NOT NULL,
  `totaldeath` varchar(30) NOT NULL,
  `newdeath` varchar(30) NOT NULL,
  `totalrecover` varchar(30) NOT NULL,
  `newrecover` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_covid19`
--

INSERT INTO `tb_covid19` (`id_covid`, `negara`, `newcase`, `totaldeath`, `newdeath`, `totalrecover`, `newrecover`) VALUES
(1, 'India', '3714', '524708', '7', '42633365', '2513'),
(2, 'Korea Selatan', '5022', '24279', '21', '17865591', '28085'),
(3, 'Turkey', '0', '98965', '0', '14971256', '0'),
(4, 'Vietnam', '806', '43081', '1', '9513981', '9026'),
(5, 'Japan', '16130', '30752', '17', '8711289', '24361'),
(6, 'Iran', '59', '141332', '1', '7056206', '713'),
(7, 'Indonesia', '342', '156622', '7', '5897022', '270'),
(8, 'Malaysia', '1330', '35690', '2', '4458999', '1881'),
(9, 'Thailand', '2162', '30201', '27', '4409248', '4879'),
(10, 'Israel', '2580', '10864', '0', '4124933', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_covid19`
--
ALTER TABLE `tb_covid19`
  ADD PRIMARY KEY (`id_covid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_covid19`
--
ALTER TABLE `tb_covid19`
  MODIFY `id_covid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
