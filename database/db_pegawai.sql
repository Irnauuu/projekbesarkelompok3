-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 07.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` int(10) NOT NULL,
  `nama_pegawai` varchar(250) NOT NULL,
  `mata_pelajaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama_pegawai`, `mata_pelajaran`) VALUES
(2, 'nayla', 'sains'),
(6, 'key', 'sains'),
(10, 'kautsar', 'matematika'),
(11, 'kautsar', 'ipa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `photo`) VALUES
(2, 'Rikaa', 'rri@gmail.com', '$2y$10$SNGc7cnc2WHJHt/0TDQ0peVUfYZUnm0ZfU.E1E.a0P9m11vjLrUTa', 'user', ''),
(3, 'naylasalshabila', 'nayla.s22@gmail.com', '$2y$10$B0MKn.iW2T4o5ECp/QleGeQWL9CfvXebeSXhppSKlah0rkIGigrrS', 'user', ''),
(4, 'keyshaallya', 'rri@gmail.com', '$2y$10$iwhBDYepgmZGi5KzOLkeO.GBTcxfeDwQNbsCRYE/L/pwAp/7QwsUq', 'user', ''),
(5, 'kautsar', 'kauts.@gmail.com', '$2y$10$AwDV5dKphhZcXQcHgLNHZe1GI5J3ivnxSoh8GlPlSWDEbUiJoYYEy', 'user', ''),
(6, 'irna', 'parkjisung@gmail.com', '$2y$10$fcnR2t99ujo8PsN4bQgvAOtz8.f3SEqJL01q.je9AfkuVToNurAD2', 'user', ''),
(7, 'zaaa', 'nay@gmail.com', '12345', 'user', ''),
(8, 'irnaa', 'irna1@gmail.com', '$2y$10$7G4oxImWEKm0fUyESEG4POf2fTDKRA.7pfISKGyLd7MqJEjwQtq.C', 'user', ''),
(9, 'irna', 'irna1@gmail.com', '$2y$10$Q971.WTzMREqND/0/N2LL.2ezH65RryPJQod9UeQorKvMqAARgJAy', 'user', ''),
(10, 'salsa', 'salsa22@gmail.com', '$2y$10$GL9Hs.LzpGNNDkuSUvpn.exVIcwG7epweX2QD5Mohdz4QYcfMdGEG', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `nip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
