-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2024 pada 09.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satpam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_penugasan`
--

CREATE TABLE `jadwal_penugasan` (
  `id_jadwal` int(8) NOT NULL,
  `id_satpam` int(8) NOT NULL,
  `id_klien` int(8) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_mulai_kontrak` date NOT NULL,
  `tgl_akhir_kontrak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kejadian`
--

CREATE TABLE `laporan_kejadian` (
  `id_laporan` int(8) NOT NULL,
  `id_satpam` int(8) NOT NULL,
  `id_klien` int(8) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satpam`
--

CREATE TABLE `satpam` (
  `id_satpam` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_perekrutan` date NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `satpam`
--

INSERT INTO `satpam` (`id_satpam`, `nama`, `tgl_lahir`, `alamat`, `no_telp`, `tgl_perekrutan`, `nik`) VALUES
(1, 'Algivari', '1998-01-12', 'Jl. Anggrek 2 Purwakarta', '087735487888', '2023-02-02', 'Algivari'),
(3, 'Faiz Aldian', '1999-01-18', 'Jl. Mawar 2 Purwakarta', '089558099089', '2023-02-02', '3214124406100002'),
(4, 'Faiz Aldiansyah', '1998-05-04', 'Jl. Industri No 5', '087771231111', '2023-02-02', '3214124406100003'),
(5, 'Muhammad Bima', '1998-09-09', 'Jl. Industri No 5', '089558099990', '2023-02-02', 'Muhammad Bima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(10002, 'wulan', 'wulan'),
(123456, 'wulansari', 'wulan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `id_satpam` (`id_satpam`),
  ADD UNIQUE KEY `id_klien` (`id_klien`);

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indeks untuk tabel `laporan_kejadian`
--
ALTER TABLE `laporan_kejadian`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `id_satpam` (`id_satpam`),
  ADD UNIQUE KEY `id_klien` (`id_klien`);

--
-- Indeks untuk tabel `satpam`
--
ALTER TABLE `satpam`
  ADD PRIMARY KEY (`id_satpam`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `satpam`
--
ALTER TABLE `satpam`
  MODIFY `id_satpam` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
