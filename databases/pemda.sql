-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jan 2021 pada 14.08
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nip`, `password`, `level`) VALUES
(12, '1001', 'b8c37e33defde51cf91e1e03e51657da', 'user'),
(14, '666', 'fae0b27c451c728867a567e8c1bb4e53', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `date` varchar(10) NOT NULL,
  `status_pengajuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nip`, `file`, `date`, `status_pengajuan`) VALUES
(7, '666', '', '2021-01-01', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(10) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(2, 'Umum & Kepegawaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(10) NOT NULL,
  `nama_jab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nama_jab`) VALUES
(5, 'Kepala Bidang'),
(6, 'Kepala Dinas'),
(7, 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `alamat_saat_ini` text NOT NULL,
  `alamat_permanen` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `mulai_bekerja` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat`, `ttl`, `alamat_saat_ini`, `alamat_permanen`, `no_telp`, `agama`, `no_ktp`, `hobi`, `email`, `jabatan`, `bidang`, `status_pegawai`, `mulai_bekerja`, `foto`) VALUES
(10, '1001', 'eddy adha saputra', 'eddy', 'Laki-Laki', 'banjarbaru', '1997-04-17', 'Tapin', 'Tapin', '085248665646', 'Islam', 1001, 'membaca', 'eddyyucca@gmail.com', '5', '2', 'Aktif', '2004-02-03', ''),
(12, '666', 'indra', 'indra', 'Laki-Laki', 'tapin', '1997-12-04', 'tapin', 'tapin', '081250653005', 'Islam', 666, 'Jalan-Jalan', 'indra@gmail.com', '6', '2', 'Aktif', '2021-01-01', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
