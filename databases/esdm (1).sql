-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 00.39
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esdm`
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
(10, '2020', '4297f44b13955235245b2497399d7a93', 'user'),
(11, '123', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

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
(3, '199741777', 'transkip_nilai-dikompresi.pdf', '06-12-2020', 'Diperiksa'),
(4, '199741777', 'transkip_nilai-dikompresi1.pdf', '2019-12-03', 'Diterima'),
(5, '2020', 'Surat_Lamaran.pdf', '2018-12-03', 'Diterima'),
(6, '123', 'SERTIFIKAT_LAMPIRAN.pdf', '2018-12-03', 'Diterima');

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
(2, 'okokok'),
(4, 'Keagamaan 2');

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
(2, 'tes 123'),
(3, 'sajjas'),
(4, 'sasa'),
(5, 'Kepala Administrasi');

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
  `mulai_bekerja` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat`, `ttl`, `alamat_saat_ini`, `alamat_permanen`, `no_telp`, `agama`, `no_ktp`, `hobi`, `email`, `mulai_bekerja`, `jabatan`, `bidang`, `status_pegawai`, `foto`) VALUES
(8, '2020', 'hendra wahyudi', 'julak', 'Laki-Laki', 'kandangan', '2020-11-30', 'kdg', 'kdg', '081250653005', 'Islam', 22, 'Jalan-Jalan', 'eddyyucca@gmail.com', '1997-11-30', '5', '4', 'Aktif', 'ok.jpg'),
(9, '123', 'eddy adha saputra', 'eddy', 'Perempuan', 'tapin', '2020-12-10', 'sasa', 'sasa', '081250653005', 'Islam', 22, 'Jalan-Jalan', 'eddyyucca@gmail.com', '1997-11-30', '5', '4', 'Aktif', 'foto.jpg'),
(10, 'admin', 'j', 'j', 'Laki-Laki', 'j', '2021-01-01', 'z', 's', '081250653005', 'Islam', 88, 'Jalan-Jalan', 'eddyyucca@gmail.com', '2020-12-18', '5', '4', 'Aktif', '');

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
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
