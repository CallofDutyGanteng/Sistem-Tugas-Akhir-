-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2017 pada 13.16
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

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
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `bidang`) VALUES
('10', 'aufa', 'kerohanian'),
('11', 'findo', 'ketaqwaan'),
('12121', 'Iis Afrianty', 'Ilmu Komputer'),
('1230120380', 'Pizaini', 'Ilmu Komputer'),
('2', 'abdi', 'kagamaan'),
('5', 'si fulana', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `kd_pengajuan` int(11) NOT NULL,
  `content` text NOT NULL,
  `create_time` datetime NOT NULL,
  `author` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `kd_pengajuan`, `content`, `create_time`, `author`) VALUES
(4, 60, 'asdsadasdas', '2017-10-13 18:48:41', 'ahmad fauzi rahmaneee'),
(5, 61, 'asdsadsaasda', '2017-10-13 18:50:27', 'ahmad fauzi rahmaneee'),
(6, 61, 'asdasdas', '2017-10-13 19:46:06', 'ahmad fauzi rahmaneee'),
(7, 60, 'sempak lu bauk\r\n\r\n', '2017-10-13 22:33:20', 'ahmad fauzi rahmaneee'),
(8, 60, 'asdadas', '2017-10-13 22:33:56', 'ahmad fauzi rahmaneee'),
(9, 61, 'asdadsa', '2017-10-14 11:00:58', 'ahmad fauzi rahmaneee'),
(10, 61, 'oke', '2017-10-14 11:03:02', 'ahmad fauzi rahmaneee'),
(11, 60, 'asa', '2017-10-14 11:03:13', 'ahmad fauzi rahmaneee'),
(12, 60, 'asdadasdsa', '2017-10-14 11:15:22', 'si fulana'),
(13, 61, 'ini proposal sampah\r\n', '2017-10-14 11:25:20', 'si fulan'),
(14, 60, 'sampah', '2017-10-14 11:25:36', 'si fulan'),
(15, 60, 'sadasdasdas', '2017-10-14 14:23:52', 'si fulan'),
(16, 62, 'gege ang ma', '2017-10-15 06:08:30', 'si fulan'),
(17, 50, 'gege maaa', '2017-10-15 06:48:51', 'si fulan'),
(18, 51, 'gege', '2017-10-15 18:50:25', 'ahmad fauzi rahmaneee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(12) NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`) VALUES
(11451105806, 'Muhammad Gufindo'),
(11451201840, 'Fitriani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nama_nilai` enum('review','proposal','hasil','sidang') NOT NULL,
  `kriteria` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nama_nilai`, `kriteria`, `tanggal`) VALUES
(1, 'review', '[\r\n["Judul","5",\r\n"1.Judul Tidak Jelas Dan Tidak Mencerminkan apa yang akan dikerjakan",\r\n"2.Judul Cukup Jelas",\r\n"3.Judul Jelas tapi Masih Terlalu Panjang",\r\n"4. Judul Singkat dan Jelas tapi Belum Spesifik",\r\n"5. Judul Singkat,Jelas dan Spesifik (Studi Kasus dituliaskan (kalau ada))"],\r\n\r\n["Permasalahan Yang Akan Diteliti","25",\r\n"1. Tidak Mengandung Masalah",\r\n"2. Ada Masalah, tapi tidak layak diteliti",\r\n"3.Ada masalah , tidak jelas rumusannya",\r\n"4. Ada masalah dan baik untuk di tindak lanjuti",\r\n"5. Masalah yang diambil sangat penting ditindaklanjuti"],\r\n\r\n["Rumusan Masalah","5",\r\n"1. RM tidak mencerminkan permasalahan penelitian",\r\n"2. Tujuan penelitian tidak sinkron dengan permasalahan",\r\n"3. Tujuan penelitian cukup sinkron dengan permasalahan",\r\n"4. Tujuan penelitian sinkron dengan permasalahan tapi tidak terpapar dengan baik",\r\n"5. Tujuan penelitian sinkron dengan permasalahan, bisa dipahami dan terpapar dengan baik"],\r\n["Tujuan Penelitian","5" ,\r\n"1. Tujuan penelitian tidak jelas",\r\n"2. Tujuan penelitian tidak sinkron dengan permasalahan",\r\n"3. Tujuan penelitian cukup sinkron dengan permasalahan",\r\n"4. Tujuan penelitian sinkron dengan permasalahan tapi tidak terpapar dengan baik",\r\n"5. Tujuan penelitian sinkron dengan permasalahan, bisa dipahami dan terpapar dengan baik"],\r\n["Relevansi Teori Dengan Masalah","10",\r\n"1. Tidak ada relevansi antara teori dengan masalah",\r\n"2. Sedikit ada relevansi antara teori dengan masalah",\r\n"3. Ada relevansi tapi tidak terpapar dengan baik",\r\n"4. Relevansi teori dengan masalah terpapar dengan baik",\r\n"5. Relevansi teori dengan masalah terpapar dengan sangat baik"],\r\n["Kajian Pustaka/Riset Sebelumnya Yang Berkaitan","20",\r\n"1. Tidak ada kajian pustaka/riset sebelumnya dgn tema yang berkaitan",\r\n"2. Ada kajian pustaka, tapi tidak berkaitan dengan tema",\r\n"3. Ada kajian pustaka/riset sebelumnya dengan jumlah 1­2 riset",\r\n"4. Ada kajian pustaka/riset sebelumnya, berkaitan dengan tema, tapi kurang terelaborasi",\r\n"5. Ada kajian pustaka/riset sebelumnya, berkaitan dengan tema riset dan terelaborasi baik"],\r\n["Metodologi","20",\r\n"1. Metode yang dipergunakan tidak tepat",\r\n"2. Metode yang dipergunakan ada, tapi kurang tepat",\r\n"3. Metode yang dipergunakan tepat tapi kurangterjabarkan dengan baik",\r\n"4. Terurai dengan baik, sistematis dan jelas",\r\n"5. Terjabarkan dengan sistematis, elaboratif dan jelas"],\r\n["Penggunaan Referensi ","5",\r\n"1. Referensi ada tapi tidak berkaitan dengan tema penelitian",\r\n"2. Referensi yang berkaitan di bawah 5 judul",\r\n"3. Referensi UTAMA berjumlah 5 – 10 judul",\r\n"4. Referensi UTAMA lebih dari 11 judul",\r\n"5. Proposal sudah merujuk min. 5 referensi utama"],\r\n["Kerapian Dokumen","5",\r\n"1. Dokumen tidak ditulis dengan baik, tidak jelas dan tidak mengikuti format serta banyak kesalahan penulisan (typo)",\r\n"2. Dokumen ditulis dengan cukup  baik dan jelas tapi tidak mengikuti format serta banyak kesalahan penulisan (typo)","3. Dokumen ditulis dengan baik dan rapi, masih ada kesalahan format dan kesalahan penulisan (typo)","4. Dokumen  ditulis dengan baik dan rapi, sesuai format tapi masih ada beberapa kesalahan penulisan (typo)","5. Dokumen  ditulis dengan baik dan rapi, sesuai format dan tidak ada kesalahan penulisan (typo)"]]', '2017-10-13 13:54:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
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
  `tanggal_upload` datetime DEFAULT NULL,
  `tanggal_upload_update` datetime DEFAULT NULL,
  `reviewer_1` varchar(30) NOT NULL,
  `komentar_1` text,
  `nilai_1` int(11) DEFAULT NULL,
  `tanggal_menilai_1` datetime DEFAULT NULL,
  `tanggal_update_menilai_1` datetime DEFAULT NULL,
  `reviewer_2` varchar(30) NOT NULL,
  `komentar_2` text,
  `nilai_2` int(100) DEFAULT NULL,
  `tanggal_menilai_2` datetime DEFAULT NULL,
  `tanggal_update_menilai_2` datetime DEFAULT NULL,
  `hasil` enum('lulus','tidak_lulus') DEFAULT NULL,
  `tanggal_m_hasil` datetime DEFAULT NULL,
  `status` enum('tunggu_review','proses_review','selesai_review') DEFAULT 'tunggu_review'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `kode_pengajuan`, `nim`, `judul`, `metode`, `doc_proposal`, `calon_pembimbing_1`, `calon_pembimbing_2`, `syarat_review`, `tanggal_upload`, `tanggal_upload_update`, `reviewer_1`, `komentar_1`, `nilai_1`, `tanggal_menilai_1`, `tanggal_update_menilai_1`, `reviewer_2`, `komentar_2`, `nilai_2`, `tanggal_menilai_2`, `tanggal_update_menilai_2`, `hasil`, `tanggal_m_hasil`, `status`) VALUES
(51, 'kd-pengajuan-0', 11451105873, 'sistem pakar kambing guling kapok dek taek bana', 'bpnn', '6832489d4d93fde2a9636f10c877a5325.jpg', '1230120380', '12121', '["c75ba1fb05fa940aa2898c435dc2a49a5.jpg","3a8219386431fe9a9b7d34a311a6d0a420150722lnp5-nistsgn.jpg","8ed27214565875474a33f08e840e62b11.jpg"]', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '10', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '11', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'proses_review'),
(52, 'kd-pengajuan-1', 3, 'sistem pendeteksi penyakit jantung', 'backpropagation', 'd9720e6c722cf2244b113f7b87890d0dbackgoround.jpg', '12121', '2', '["1fa4cc26076fa4088596ad70d623f2a5backgoround.jpg","147ba5f1abce4bb5dd6e96736e3f0894backgoround.jpg","7f2122673cacb32e2097b8c05962cb61backgoround.jpg"]', '2017-10-15 00:00:00', '2017-10-15 00:00:00', '11', '0', 0, '2017-10-15 00:00:00', '0000-00-00 00:00:00', '1230120380', '0', 240, '2017-10-15 00:00:00', '2017-10-15 00:00:00', '', '2017-10-15 00:00:00', 'proses_review');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nip_nim`, `nama`, `password`, `foto`, `hak_akses`) VALUES
(1, '1', 'ahmad fauzi rahmaneeeeeeeeeeee', 'c4ca4238a0b923820dcc509a6f75849b', '1442659371859.jpg', 'administrator'),
(2, '2', 'abdi', 'c81e728d9d4c2f636f067f89cc14862c', '1442659371859.jpg', 'dosen'),
(3, '3', 'Si Fulan', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1442659371859.jpg', 'mahasiswa'),
(4, '4', 'si fulan', 'a87ff679a2f3e71d9181a67b7542122c', '1442659371859.jpg', 'kordinatorTA'),
(5, '11451201840', 'Fitriani', 'c4ca4238a0b923820dcc509a6f75849b', '1f393.png', 'mahasiswa'),
(6, '5', 'si fulana', 'e4da3b7fbbce2345d7772b0674a318d5', '1442659371859.jpg', 'dosen'),
(7, '11451105873', 'Si Fulan', '8f14e45fceea167a5a36dedd4bea2543', '1442659371859.jpg', 'mahasiswa'),
(8, '12121', 'Iis Afrianty', '7ae90cefa4e1246fb93491b91f636b1c', '1442659371859.jpg', 'dosen'),
(9, '1230120380', 'Pizaini', '155df74d083492fd7b0da6e09a9bb356', '1442659371859.jpg', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat`
--

CREATE TABLE `syarat` (
  `id` int(11) NOT NULL,
  `nama_syarat` varchar(100) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `syarat`
--

INSERT INTO `syarat` (`id`, `nama_syarat`, `syarat`) VALUES
(1, 'proposal', '[''Bukti Lulus KKN'',''Bukti Lulus KP'',''Bukti Lulus Mentoring'']');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

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
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
