-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2021 pada 14.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_goldar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_goldar`
--

CREATE TABLE `tbl_goldar` (
  `id_goldar` int(11) NOT NULL,
  `nama_gol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_goldar`
--

INSERT INTO `tbl_goldar` (`id_goldar`, `nama_gol`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kd_pasien` varchar(7) NOT NULL,
  `nama_pasien` varchar(48) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `id_goldar` int(11) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kd_pasien`, `nama_pasien`, `tgl_lahir`, `jenis_kelamin`, `id_goldar`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
('PSN0001', 'Selmi', '2021-05-02', 'laki-laki', 2, 'jati miur', '0213883884', 'selmi.mi@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('PSN0003', 'Bagas', '1997-09-15', 'Laki-Laki', 4, 'tokyogiri', '08145545578', 'bagasseptiadji@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('PSN0006', 'ajeng', '2021-05-02', 'Perempuan', NULL, 'au', '08235734', 'ajeng@cantik.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tampung`
--

CREATE TABLE `tbl_tampung` (
  `id_tampung` int(11) NOT NULL,
  `nama_goldar` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tampung`
--

INSERT INTO `tbl_tampung` (`id_tampung`, `nama_goldar`) VALUES
(1, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `kd_user` varchar(10) NOT NULL,
  `nama` varchar(48) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`kd_user`, `nama`, `username`, `password`, `hak_akses`, `created_at`, `updated_at`) VALUES
('USR01', 'ADMIN', 'ADMIN', 'b521caa6e1db82e5a01c924a419870cb72b81635', 'ADMIN', '2021-04-30 14:03:00', '2021-04-30 14:03:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_goldar`
--
ALTER TABLE `tbl_goldar`
  ADD PRIMARY KEY (`id_goldar`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indeks untuk tabel `tbl_tampung`
--
ALTER TABLE `tbl_tampung`
  ADD PRIMARY KEY (`id_tampung`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_goldar`
--
ALTER TABLE `tbl_goldar`
  MODIFY `id_goldar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_tampung`
--
ALTER TABLE `tbl_tampung`
  MODIFY `id_tampung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
