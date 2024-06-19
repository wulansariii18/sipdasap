-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2024 pada 09.06
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
-- Struktur dari tabel `area`
--

CREATE TABLE `area` (
  `id_area` int(10) NOT NULL,
  `nama_area` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_mulai_kontrak` date NOT NULL,
  `tgl_akhir_kontrak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `area`
--

INSERT INTO `area` (`id_area`, `nama_area`, `alamat`, `no_telp`, `tgl_mulai_kontrak`, `tgl_akhir_kontrak`) VALUES
(2, 'RS Pamanukan Medical Center', 'Pamanukan Subang', '087771231111', '2023-09-01', '2024-10-01'),
(3, 'RSU AMIRA ', 'Munjul Purwakarta', '089558099089', '2024-01-05', '2025-02-05'),
(4, 'RS Siloam', 'Campaka Purwakarta', '0838080978010', '2024-02-02', '2025-01-02');

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
  `nik` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `satpam`
--

INSERT INTO `satpam` (`id_satpam`, `nama`, `tgl_lahir`, `alamat`, `no_telp`, `tgl_perekrutan`, `nik`, `pendidikan_terakhir`, `jabatan`, `area`) VALUES
(4, 'Faiz Aldiansyah', '1998-05-04', 'Jl. Industri No 5', '087771231111', '2023-02-02', '3214124406100003', 'SMA', 'Anggota', 'RS Siloam'),
(9, 'Jefry Nichol', '2000-01-01', 'Jl. Anggrek 3 Purwakarta', '087775776778', '2024-02-01', '3214124406100003', 'SMA', 'Anggota', 'RS Pamanukan Medical Center'),
(10, 'Algivariiii', '2000-01-01', 'Jl. Anggrek 2 Purwakarta', '0838080978010', '2024-01-01', '3214124406100006', 'D3 Manajemen Informatika', 'Danru', 'RS Pamanukan Medical Center'),
(11, 'Ali Akbar', '1999-03-01', 'Jl. Anggrek 3 Purwakarta', '087735487888', '2024-03-01', '3214124406100006', 'D3 Manajemen Informatika', 'Danru', 'RS Siloam'),
(12, 'M. Rizky', '1999-05-04', 'Jl. Anggrek 2 Purwakarta', '089558099990', '2024-05-01', '3214124406100006', 'SMA', 'Anggota', 'RS Pamanukan Medical Center');

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
-- Indeks untuk tabel `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

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
-- AUTO_INCREMENT untuk tabel `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `satpam`
--
ALTER TABLE `satpam`
  MODIFY `id_satpam` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
