-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2026 pada 02.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `stok`) VALUES
(1, 'BK001', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', 10),
(2, 'BK002', 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', '2014', 8),
(3, 'BK003', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', '2009', 6),
(4, 'BK004', 'Atomic Habits', 'James Clear', 'Penguin Random House', '2018', 12),
(5, 'BK005', 'Filosofi Teras', 'Henry Manampiring', 'Kompas', '2018', 15),
(6, 'BK006', 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Warner Books', '1997', 9),
(7, 'BK007', 'Deep Work', 'Cal Newport', 'Grand Central Publishing', '2016', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
