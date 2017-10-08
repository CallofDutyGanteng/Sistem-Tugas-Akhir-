-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2017 at 10:15 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

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
('123', 'fauzi', 'ilmu'),
('21312312', 'abdi', 'kkkk');

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
(141524003, 'sadada', 'adada'),
(141524004, 'Eva Danti Rahmanita', 'Sekretaris Umum I'),
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
(1, '11451105806', 'fitriani', 'c4ca4238a0b923820dcc509a6f75849b', '1442659371859.jpg', 'administrator'),
(2, '11451201840', 'ahmad fauzi rahman', 'c4ca4238a0b923820dcc509a6f75849b', '1442659371859.jpg', 'dosen'),
(3, '11', 'Si Fulan', 'c4ca4238a0b923820dcc509a6f75849b', '1442659371859.jpg', 'mahasiswa'),
(4, '2', 'si fulan', 'c81e728d9d4c2f636f067f89cc14862c', '1442659371859.jpg', 'kordinatorTA');

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
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
