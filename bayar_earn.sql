-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2019 pada 10.06
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayar_earn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_event`
--

CREATE TABLE `detail_event` (
  `id_detail` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_event` int(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(10) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `nominal_event` int(255) NOT NULL,
  `tgl_event` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_kode_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(10) NOT NULL,
  `nominal_kas` int(255) NOT NULL,
  `tgl_kas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_kelas`
--

CREATE TABLE `kode_kelas` (
  `id_kode_kelas` int(10) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_kelas`
--

INSERT INTO `kode_kelas` (`id_kode_kelas`, `kode_kelas`) VALUES
(1, 'TELKOMXR1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaraan` int(10) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `nominal_pengeluaran` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` char(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_level` int(10) NOT NULL,
  `id_kode_kelas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `username`, `password`, `id_level`, `id_kode_kelas`) VALUES
(1, 'faisal', 'faisallionel@gmail.com', 'faisal', 'faisal', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_kode_kelas` (`id_kode_kelas`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `kode_kelas`
--
ALTER TABLE `kode_kelas`
  ADD PRIMARY KEY (`id_kode_kelas`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaraan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kode_kelas` (`id_kode_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_event`
--
ALTER TABLE `detail_event`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kode_kelas`
--
ALTER TABLE `kode_kelas`
  MODIFY `id_kode_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaraan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_event`
--
ALTER TABLE `detail_event`
  ADD CONSTRAINT `detail_event_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `detail_event_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
