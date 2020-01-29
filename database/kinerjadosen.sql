-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 02:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerjadosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblakses`
--

CREATE TABLE `tblakses` (
  `id_akses` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblakses`
--

INSERT INTO `tblakses` (`id_akses`, `nama`) VALUES
(1, 'Admin'),
(2, 'Dosen'),
(3, 'Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `tblkegiatan`
--

CREATE TABLE `tblkegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `id_subunsur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkegiatan`
--

INSERT INTO `tblkegiatan` (`id_kegiatan`, `nama_kegiatan`, `id_subunsur`) VALUES
(1, 'Doktor (S3)', 1),
(2, 'Megister (S2)\r\n', 1),
(3, 'Diklat PraJabatan golongan III', 2),
(4, 'Melaksanakan perkulihan/ tutorial dan membimbing, menguji serta menyelenggarakan pendidikan di labor', 3),
(5, 'Membimbing mahasiswa seminar', 4),
(6, 'Membimbing mahasiswa kuliah kerja nyata, pratek kerja nyata, praktek kerja lapangan', 5),
(7, 'Pembimbing utama	', 6),
(8, 'Pembimbing pendamping/pembantu', 6),
(9, 'Ketua penguji', 7),
(10, 'Anggota penguji	', 7),
(11, 'Melakukan pembinaan kegiatan mahasiswa di bidang Akademik dan kemahasiswaan', 8),
(12, 'Melakukan kegiatan pengembangan program kuliah', 9),
(13, 'Buku ajar		\r\n', 10),
(14, 'Diktat, modul, petunjuk praktikum, model, alat bantu, audio visual, naskah tutorial', 10),
(15, 'Pembimbing pencangkokan', 12),
(16, 'Reguler', 12),
(17, 'Detasering\r\n', 13),
(18, 'Pencangkokan', 13),
(19, 'Lamanya lebih dari 960 jam', 14),
(20, 'Lamanya 641-960 jam', 14),
(21, 'Lamanya 481-640 jam', 14),
(22, 'Lamanya 161-480 jam', 14),
(23, 'Lamanya 81-160 jam', 14),
(24, 'Lamanya 31-80 jam', 14),
(25, 'Lamanya 10-30 jam', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tblreportkegiatan`
--

CREATE TABLE `tblreportkegiatan` (
  `id_reportkegiatan` int(11) NOT NULL,
  `id_unsur` int(11) NOT NULL,
  `id_subunsur` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubkegiatan`
--

CREATE TABLE `tblsubkegiatan` (
  `id_subkegiatan` int(11) NOT NULL,
  `nama_subkegiatan` varchar(100) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubkegiatan`
--

INSERT INTO `tblsubkegiatan` (`id_subkegiatan`, `nama_subkegiatan`, `id_kegiatan`) VALUES
(1, 'Disertasi', 7),
(2, 'Tesis', 7),
(3, 'Skripsi\r\n', 7),
(4, 'Laporan akhir Studi', 7),
(5, 'Disertasi', 8),
(6, 'Tesis\r\n', 8),
(7, 'Skripsi\r\n', 8),
(8, 'Laporan akhir Studi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubunsur`
--

CREATE TABLE `tblsubunsur` (
  `id_subunsur` int(11) NOT NULL,
  `nama_subunsur` varchar(100) NOT NULL,
  `id_unsur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubunsur`
--

INSERT INTO `tblsubunsur` (`id_subunsur`, `nama_subunsur`, `id_unsur`) VALUES
(1, 'Pendidikan Formal', 1),
(2, 'Diklat Pra Jabatan', 1),
(3, 'Melaksanakan perkuliahan/tutorial dan membimbing,menguji serta menyelenggarakan pendidikan dilabrato', 2),
(4, 'Membimbing seminar\r\n', 2),
(5, 'Membing kuliah kerja nyata,pratek kerja nyata, praktek kerja  lapangan', 2),
(6, 'Membimbing dan ikut\r\nmembimbing dalam menghasilkan disertasi, tesis,skripsi dan laporan akhir studi', 2),
(7, 'Bertugas sebagai penguji pada ujian akhir', 2),
(8, 'Membina kegiatan mahasiswa', 2),
(9, 'Mengembangkan program kuliah', 2),
(10, 'Mengembangkan bahan kuliah', 2),
(11, 'Mengembangkan bahan kuliah', 2),
(12, 'Membimbing Akademik Dosen yang lebih rendah jabatannya', 2),
(13, 'Melaksanakan kegiatan Detasering dan pencangkokan Akademik Dosen', 2),
(14, 'Melakukan kegiatan\r\npengembangan diri untuk meningkatan kompetensi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblunsur`
--

CREATE TABLE `tblunsur` (
  `id_unsur` int(11) NOT NULL,
  `nama_unsur` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblunsur`
--

INSERT INTO `tblunsur` (`id_unsur`, `nama_unsur`) VALUES
(1, 'PENDIDIKAN'),
(2, 'PELAKSANAAN PENDIDIKAN');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `Nip` int(11) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `nama`, `Nip`, `jabatan`, `tgl_lahir`, `jurusan`, `prodi`, `email`, `password`, `id_akses`) VALUES
(1, 'mutiara', 1234, '', '2019-10-10 00:00:00', '', 'ti', 'mutiara@yahoo', '123', 1),
(2, 'tu', 234, '', '2019-10-09 00:00:00', '', 'If', 'Tu@yahoo', '123', 2),
(3, 'tiara', 123, 'dosen', '2020-01-08 00:00:00', '', 'if', 'tiara@yahoo', '123', 1),
(4, 'tukiem', 134, 'dosen', '1997-03-12 00:00:00', '', 'if', 'tukiem@gmail.com', '123', 1),
(5, 'tiara', 234, 'Tata Usaha', '2020-01-15 00:00:00', 'Teknik informatika', 'IF', 'tiara@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdetails`
--

CREATE TABLE `tbluserdetails` (
  `id_akses` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jeniskelamin` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `nip` int(11) NOT NULL,
  `kegiatan` varchar(25) NOT NULL,
  `subkegiatan` varchar(25) NOT NULL,
  `tgl_mulaikegiatan` date NOT NULL,
  `tgl_akhirkegiatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblakses`
--
ALTER TABLE `tblakses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tblkegiatan`
--
ALTER TABLE `tblkegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tblreportkegiatan`
--
ALTER TABLE `tblreportkegiatan`
  ADD PRIMARY KEY (`id_reportkegiatan`);

--
-- Indexes for table `tblsubkegiatan`
--
ALTER TABLE `tblsubkegiatan`
  ADD PRIMARY KEY (`id_subkegiatan`);

--
-- Indexes for table `tblsubunsur`
--
ALTER TABLE `tblsubunsur`
  ADD PRIMARY KEY (`id_subunsur`);

--
-- Indexes for table `tblunsur`
--
ALTER TABLE `tblunsur`
  ADD PRIMARY KEY (`id_unsur`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbluserdetails`
--
ALTER TABLE `tbluserdetails`
  ADD PRIMARY KEY (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblakses`
--
ALTER TABLE `tblakses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblkegiatan`
--
ALTER TABLE `tblkegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblreportkegiatan`
--
ALTER TABLE `tblreportkegiatan`
  MODIFY `id_reportkegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsubkegiatan`
--
ALTER TABLE `tblsubkegiatan`
  MODIFY `id_subkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblsubunsur`
--
ALTER TABLE `tblsubunsur`
  MODIFY `id_subunsur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblunsur`
--
ALTER TABLE `tblunsur`
  MODIFY `id_unsur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluserdetails`
--
ALTER TABLE `tbluserdetails`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
