-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2023 pada 03.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_data_pemesanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_tiket`
--

CREATE TABLE `pemesanan_tiket` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(200) NOT NULL,
  `nomor` int(12) NOT NULL,
  `nama_kereta` varchar(200) NOT NULL,
  `jadwal_berangkat` varchar(100) NOT NULL,
  `penumpang` varchar(100) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan_tiket`
--

INSERT INTO `pemesanan_tiket` (`id`, `nama_pemesan`, `nomor`, `nama_kereta`, `jadwal_berangkat`, `penumpang`, `tujuan`, `kelas`, `harga`) VALUES
(1, 'Nissa', 67810, 'Argo Parahyangan', '2023-03-30 20:30', 'Dewasa(1) Anak(1)', 'Gambir, Jakarta Pusat → Bandung, Bandung', 'Bisnis', 90000),
(2, 'Faisal', 78453, 'Argo Lawu', '2023-04-06 02:30', 'Dewasa(1) Anak(1)', 'Gambir, Jakarta Pusat → Solo, Jawa Tengah', 'Eksekutif', 110000),
(3, 'Ahmad', 43098, 'Taksaka', '2023-04-15 07:45', 'Dewasa(1) Anak(2)', 'Gambir, Jakarta Pusat → Yogyakarta, Yogyakarta', 'Bisnis', 150000),
(4, 'Samsul', 51067, 'Purwojaya', '2023-04-26 20:45', 'Dewasa(2) Anak(1)', 'Gambir, Jakarta Pusat → Cilacap, Jawa Tengah', 'Bisnis', 195000),
(5, 'Randra', 10972, 'Tegal Bahari', '2023-04-30', 'Dewasa(1) Anak(3)', 'Gambir, Jakarta Pusat → Tegal, Jawa Tengah', 'Eksekutif', 210000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan_tiket`
--
ALTER TABLE `pemesanan_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan_tiket`
--
ALTER TABLE `pemesanan_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
