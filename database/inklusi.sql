-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2023 at 03:21 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inklusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gp`
--

CREATE TABLE `gp` (
  `id_gp` int(11) NOT NULL,
  `nip` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan','','') NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gp`
--

INSERT INTO `gp` (`id_gp`, `nip`, `foto`, `nama`, `jk`, `password`, `alamat`) VALUES
(2, 2147483647, 'sekolah.jpg', 'Agus Santiri', 'perempuan', '123451', 'Jl pondok gede Bekasi2'),
(4, 6789, 'sekolah.jpg', 'Sita Dewi', 'laki-laki', '1234556', 'Pondok rangon'),
(15, 9677, 'fotocewe2.jpg', 'Mugiatun', 'perempuan', '12345', 'jln maju kena'),
(18, 457990, '', 'andi warman, S.kom', 'laki-laki', '567890', 'rambutan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_terapi`
--

CREATE TABLE `jadwal_terapi` (
  `id_jadwal` int(11) NOT NULL,
  `id_terapi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_selesai` varchar(10) NOT NULL,
  `keterapian` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_terapi`
--

INSERT INTO `jadwal_terapi` (`id_jadwal`, `id_terapi`, `id_siswa`, `hari`, `jam_mulai`, `jam_selesai`, `keterapian`, `lokasi`) VALUES
(1, 1, 19, 'sabtu', '13.00', '14.00', 'sensori integrasi', 'ruang SI'),
(2, 2, 20, 'jumat', '10:30', '11.30', 'terapi wicara', 'depan perpustakaan'),
(4, 2, 19, 'rabu', '13.00', '14.00', 'sensori integrasi', 'depan gazebo'),
(5, 11, 19, 'rabu', '13.00', '14.00', 'terapi wicara', 'ruang SI'),
(6, 0, 0, '', '', '', '', ''),
(7, 2, 29, 'Senin', '10:29', '11:30', 'pedagog', 'gedung IAS'),
(8, 0, 0, '$hari', '$jam_mulai', '$jam_seles', '$keterapian', '$lokasi'),
(9, 4, 29, 'Kamis', '12:51', '12:51', 'sensori integrasi', 'gedung IAS'),
(10, 5, 33, 'senin', '13:56', '12:55', 'terapi wicara', 'gajebo'),
(11, 5, 33, 'senin', '13:56', '12:55', 'terapi wicara', 'gajebo'),
(12, 1, 29, 'senin', '16:58', '13:55', 'Pedagog', 'gedung IAS'),
(13, 12, 31, 'minggu', '01:57', '13:58', 'Terapi Wicara', 'depan perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `lapgp`
--

CREATE TABLE `lapgp` (
  `id_laporan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_gp` int(11) NOT NULL,
  `program` varchar(1500) NOT NULL,
  `ketercapaian` varchar(1500) NOT NULL,
  `program_lanjutan` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapgp`
--

INSERT INTO `lapgp` (`id_laporan`, `id_siswa`, `id_gp`, `program`, `ketercapaian`, `program_lanjutan`) VALUES
(21, 29, 0, 'd', 'g', 's'),
(22, 31, 4, 'g', 'h', 'k'),
(23, 19, 4, 'o', 'l', 'j'),
(24, 0, 0, '$program', '$ketercapaian', '$program_lanjutan'),
(25, 0, 0, '$program', '$ketercapaian', '$program_lanjutan'),
(26, 29, 4, 'r', 't', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `lapterapis`
--

CREATE TABLE `lapterapis` (
  `id_laporan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_terapi` int(11) NOT NULL,
  `program` varchar(1500) NOT NULL,
  `ketercapaian` varchar(1500) NOT NULL,
  `program_lanjutan` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapterapis`
--

INSERT INTO `lapterapis` (`id_laporan`, `id_siswa`, `id_terapi`, `program`, `ketercapaian`, `program_lanjutan`) VALUES
(1, 29, 4, 'g', 'd', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(25) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `nama_panggilan`, `kelas`, `periode`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`) VALUES
(29, 17182262, 'Dimaz Bintang Prasetyo', 'Dimaz', '5 venus', 'semester genap', 'Jakarta', '2010-10-08', 'laki-laki', 'Perum Bukit Golf Arcadia Bogor'),
(30, 19202554, 'Raffasha Jabbar', 'Raffasha', '5 jupiter', 'semester ganjil', 'Bandar Lampung', '2011-08-19', 'laki-laki', 'Legenda Wisata Cibubur'),
(31, 18192389, 'Safa Selina Suyono', 'Safa', '6 magelen', 'semester genap', 'Jakarta', '2012-08-29', 'perempuan', 'Perum The Addres Depok'),
(33, 2018002, 'Dariola', 'Olla', '6 bimasakti', 'semester ganjil', 'Jakarta', '2022-08-10', 'perempuan', 'Grand wisata'),
(36, 2018005, 'Virgil', 'virgil', '3 daun', 'semester ganjil', 'Bandung', '2022-08-19', 'laki-laki', 'Jl pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_print`
--

CREATE TABLE `tb_print` (
  `id_print` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_gp` int(11) NOT NULL,
  `liscapai` text NOT NULL,
  `lisproglanjut` text NOT NULL,
  `mathcapai` text NOT NULL,
  `mathproglanjut` text NOT NULL,
  `ipacapai` text NOT NULL,
  `ipalanjut` text NOT NULL,
  `ppkncapai` text NOT NULL,
  `ppknlanjut` text NOT NULL,
  `paicapai` text NOT NULL,
  `pailanjut` text NOT NULL,
  `ipscapai` text NOT NULL,
  `ipslanjut` text NOT NULL,
  `atensi` text NOT NULL,
  `emosi` text NOT NULL,
  `motorik_halus` text NOT NULL,
  `motorik_kasar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_print`
--

INSERT INTO `tb_print` (`id_print`, `id_siswa`, `id_gp`, `liscapai`, `lisproglanjut`, `mathcapai`, `mathproglanjut`, `ipacapai`, `ipalanjut`, `ppkncapai`, `ppknlanjut`, `paicapai`, `pailanjut`, `ipscapai`, `ipslanjut`, `atensi`, `emosi`, `motorik_halus`, `motorik_kasar`) VALUES
(1, 29, 2, 'df', 'g', 'g', 'h', 'f', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 's', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `terapi`
--

CREATE TABLE `terapi` (
  `id_terapi` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_terapi` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terapi`
--

INSERT INTO `terapi` (`id_terapi`, `nip`, `nama_terapi`, `jk`, `notelp`) VALUES
(1, '2022001', 'Eko Suryo, M.Pd', 'laki-laki', '081354735780'),
(2, '2022002', 'Najmatun Fijar, S.Pd', 'perempuan', '08563585534'),
(4, '2022005', 'Maulida R, S.Tr.Kes', 'perempuan', '08563585534'),
(9, '2022003', 'Siyamti, S.pd', 'perempuan', '08135473578'),
(10, '2022004', 'Susilawati A, Amd.Kes', 'perempuan', '08563585534'),
(12, '200450', 'Andi Warman', 'laki-laki', '08569236344');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','orangtua') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(3, 'admin', 'andi warman', 'admin', 'admin'),
(4, 'orangtua', 'ade susanti', 'ortu', 'orangtua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gp`
--
ALTER TABLE `gp`
  ADD PRIMARY KEY (`id_gp`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `jadwal_terapi`
--
ALTER TABLE `jadwal_terapi`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `lapgp`
--
ALTER TABLE `lapgp`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `lapterapis`
--
ALTER TABLE `lapterapis`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tb_print`
--
ALTER TABLE `tb_print`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `terapi`
--
ALTER TABLE `terapi`
  ADD PRIMARY KEY (`id_terapi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gp`
--
ALTER TABLE `gp`
  MODIFY `id_gp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jadwal_terapi`
--
ALTER TABLE `jadwal_terapi`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lapgp`
--
ALTER TABLE `lapgp`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `lapterapis`
--
ALTER TABLE `lapterapis`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_print`
--
ALTER TABLE `tb_print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terapi`
--
ALTER TABLE `terapi`
  MODIFY `id_terapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
