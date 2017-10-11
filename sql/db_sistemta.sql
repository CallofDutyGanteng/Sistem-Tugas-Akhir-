-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 11:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `bidang`) VALUES
('1111111111111', 'frankerrererer', 'kesehatanaaa'),
('12121', 'gege', 'ff'),
('1230120380', 'febi', 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `department` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`, `department`) VALUES
(141524005, 'Fadhlan Ridwanallah', 'PSDM'),
(141524006, 'Fahmi Ramadhan', 'Olahraga'),
(141524007, 'Fariz Aotearoa Rasyid', 'Olahraga'),
(141524008, 'Hendro Saputro', 'Kebudayaan'),
(141524009, 'Hilda Annisa Nur M', 'Luhim'),
(141524010, 'Ibnu Ali Mukhtarom', 'Kominfo'),
(141524011, 'Ifan Dhani P', 'Rohis'),
(141524012, 'M. Imam Fauzan', 'Pendidikan'),
(141524013, 'Maulana Kahfi', 'Kominfo'),
(141524014, 'Moch. Arief Febriansyah', 'Wirus'),
(141524015, 'M. Rakasiwi Makkah', 'Wirus'),
(141524016, 'M. Ganjar Imanudin', 'MPA'),
(141524017, 'M. Husain Fadhlullah', 'Pendidikan'),
(141524018, 'Muhammad Ihyaul Khair', 'Olahraga'),
(141524019, 'Muhammad Rubiyanto P', 'Kominfo'),
(141524020, 'Muhammad Saiful Islam', 'Pendidikan'),
(141524021, 'Muhammad Taufiq P', 'Wirus'),
(141524022, 'Mutiara Citra Wordstary', 'MPA'),
(141524023, 'Niko S Sibarani', 'Olahraga'),
(141524024, 'Prasetyo Trimukti S', 'Rohis'),
(141524025, 'Rahman Faruq R', 'Rohis'),
(141524028, 'Rizal Abdurrahman Firdaus', 'Pendidikan'),
(141524029, 'Tria Yuda Purnama', 'Luhim'),
(141524030, 'Waffi Faturrahman', 'MPA'),
(213123123, 'fauzi', 'asdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_pengajuan` varchar(50) DEFAULT NULL,
  `nim` bigint(12) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `doc_proposal` varchar(255) NOT NULL,
  `calon_pembimbing_1` varchar(30) NOT NULL,
  `calon_pembimbing_2` text NOT NULL,
  `syarat_review` text NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `tanggal_upload_update` datetime NOT NULL,
  `reviewer_1` varchar(30) NOT NULL,
  `komentar_1` text NOT NULL,
  `nilai_1` int(11) NOT NULL,
  `tanggal_menilai_1` datetime NOT NULL,
  `tanggal_update_menilai_1` datetime NOT NULL,
  `reviewer_2` varchar(30) NOT NULL,
  `komentar_2` text NOT NULL,
  `nilai_2` int(100) NOT NULL,
  `tanggal_menilai_2` datetime NOT NULL,
  `tanggal_update_menilai_2` datetime NOT NULL,
  `hasil` enum('lulus','tidak_lulus') NOT NULL,
  `tanggal_m_hasil` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `kode_pengajuan`, `nim`, `judul`, `metode`, `doc_proposal`, `calon_pembimbing_1`, `calon_pembimbing_2`, `syarat_review`, `tanggal_upload`, `tanggal_upload_update`, `reviewer_1`, `komentar_1`, `nilai_1`, `tanggal_menilai_1`, `tanggal_update_menilai_1`, `reviewer_2`, `komentar_2`, `nilai_2`, `tanggal_menilai_2`, `tanggal_update_menilai_2`, `hasil`, `tanggal_m_hasil`) VALUES
(40, 'kd-pengajuan-0', 11451105873, 'sistem pendeteksi penyakit mata dengan metode bpnn', 'bpnn', '05b659ddaf74b7bee9a72064eae5fb041.jpg', '1111111111111', '1230120380', '[\"ccf2853d2620784120e7b5a151a5c1471.jpg\",\"c97899dd0ee469c4bcd323164814bdcd1.jpg\",\"1da0d1b95732f51bc61fb6bcf25fab2a1.jpg\"]', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(41, 'kd-pengajuan-1', 11451105873, 'ads', 'bpnn', 'd5e37f4c490d3254a68d1029d9ee1d95abdi.jpg', '1111111111111', '1111111111111', '[\"bfb5e2345ef084dcbcf49b30f254cbc61.jpg\",\"21070dfd8683d86a4461d23e0ee0dd68abdi_ekualisasi.jpg\",\"3b565cacb3b2810f25d741ab98548a8aabdi_hapusaraskeabuan.jpg\"]', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` bigint(20) NOT NULL,
  `nip_nim` varchar(15) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `hak_akses` enum('mahasiswa','dosen','administrator','kordinatorTA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nip_nim`, `nama`, `password`, `foto`, `hak_akses`) VALUES
(1, '1', 'ahmad fauzi rahmaneeeeeeeeeeee', 'c4ca4238a0b923820dcc509a6f75849b', '1442659371859.jpg', 'administrator'),
(2, '2', 'ahmad fauzi rahmaneee', 'c81e728d9d4c2f636f067f89cc14862c', '1442659371859.jpg', 'dosen'),
(3, '11451105873', 'Si Fulan', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1442659371859.jpg', 'mahasiswa'),
(4, '4', 'si fulan', 'a87ff679a2f3e71d9181a67b7542122c', '1442659371859.jpg', 'kordinatorTA');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id` int(11) NOT NULL,
  `nama_syarat` varchar(100) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id`, `nama_syarat`, `syarat`) VALUES
(1, 'proposal', '[\'Bukti Lulus KKN\',\'Bukti Lulus KP\',\'Bukti Lulus Mentoring\']');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `nip_nim` (`nip_nim`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
