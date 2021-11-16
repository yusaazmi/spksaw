-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 01:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ucok', '202cb962ac59075b964b07152d234b70'),
(3, 'ucok123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jumlah_siswa` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `jumlah_siswa`) VALUES
(1, '6A', 1),
(2, '6B', 1),
(3, '6C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `kode_siswa` varchar(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kode_siswa`, `nis`, `nama_lengkap`, `id_kelas`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `foto`) VALUES
('SIS002', 6634, 'asdasd', 1, 'dasdasd', 'asdasd', '2021-06-15', 'L', '22062021122726IMG-20210102-WA0014-min.png'),
('SIS003', 22213, 'adsasdasd', 2, 'dsadasd', 'sadasdsa', '2021-06-08', 'P', '22062021134618main-qimg-0bd493f0f82c7cd2ce83d7fe1275c782.jfif'),
('SIS004', 2132, 'asdasddas', 3, 'adsasd', 'asdsad', '2021-06-09', 'L', '22062021143356main-qimg-0bd493f0f82c7cd2ce83d7fe1275c782.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_himpunankriteria`
--

CREATE TABLE `tbl_himpunankriteria` (
  `id_hk` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_himpunankriteria`
--

INSERT INTO `tbl_himpunankriteria` (`id_hk`, `id_kriteria`, `nama`, `keterangan`, `nilai`) VALUES
(1, 3, '1', 'Sangat Baik', 3),
(2, 3, '2', 'Baik', 2),
(3, 3, '3', 'Cukup Baik', 1),
(7, 4, '86-100', 'Sangat Baik', 5),
(8, 4, '76-85', 'Baik', 4),
(9, 4, '66-75', 'Cukup', 3),
(10, 4, '51-65', 'Kurang', 2),
(11, 4, '0-50', 'Sangat Kurang', 1),
(12, 5, '86-100', 'Sangat Baik', 5),
(13, 5, '76-85', 'Baik', 4),
(14, 5, '66-75', 'Cukup Baik', 3),
(15, 5, '51-65', 'Kurang', 2),
(16, 5, '0-50', 'Sangat Kurang', 1),
(17, 6, '86-100', 'Sangat Baik', 5),
(18, 6, '76-85', 'Baik', 4),
(19, 6, '66-75', 'Cukup', 3),
(20, 10, '86-100', 'Sangat Baik', 5),
(21, 10, '76-85', 'Baik', 4),
(22, 10, '66-75', 'Cukup', 3),
(23, 10, '51-65', 'Kurang', 2),
(24, 10, '0-50', 'Sangat Kurang', 1),
(25, 12, '86-100', 'Sangat Baik', 5),
(26, 12, '76-85', 'Baik', 4),
(27, 12, '66-75', 'Cukup', 3),
(28, 12, '51-65', 'Kurang', 2),
(29, 12, '0-50', 'Sangat Kurang', 1),
(30, 6, '51-65', 'Kurang', 2),
(31, 6, '0-50', 'Sangat Kurang', 1),
(32, 11, '86-100', 'Sangat Baik', 5),
(33, 11, '76-85', 'Baik', 4),
(34, 11, '66-75', 'Cukup', 3),
(35, 11, '51-65', 'Kurang', 2),
(36, 11, '0-50', 'Sangat Kurang', 1),
(37, 14, '86-100', 'Sangat Baik', 5),
(38, 14, '76-85', 'Baik', 4),
(39, 14, '60-75', 'Cukup', 3),
(40, 14, '55-60', 'Kurang', 2),
(41, 14, '0-54', 'Sangat Kurang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klasifikasi`
--

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `kode_siswa` varchar(10) NOT NULL,
  `id_hk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_klasifikasi`
--

INSERT INTO `tbl_klasifikasi` (`id_klasifikasi`, `kode_siswa`, `id_hk`) VALUES
(17, 'SIS002', 32),
(18, 'SIS002', 1),
(20, 'SIS002', 12),
(22, 'SIS002', 20),
(23, 'SIS002', 25),
(24, 'SIS002', 37),
(25, 'SIS003', 34),
(26, 'SIS003', 2),
(27, 'SIS003', 10),
(28, 'SIS003', 14),
(29, 'SIS003', 19),
(30, 'SIS003', 20),
(31, 'SIS003', 25),
(32, 'SIS003', 37),
(35, 'SIS002', 7),
(37, 'SIS002', 17),
(41, 'SIS004', 32),
(42, 'SIS004', 3),
(43, 'SIS004', 7),
(44, 'SIS004', 12),
(45, 'SIS004', 18),
(46, 'SIS004', 20),
(47, 'SIS004', 25),
(48, 'SIS004', 37);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kriteria`, `bobot`) VALUES
(11, 'Kesenian', 0.1),
(3, 'Rangking', 0.2),
(4, 'Agama', 0.2),
(5, 'Matematika', 0.1),
(6, 'Bahasa Indonesia', 0.1),
(10, 'Bahasa Inggris', 0.1),
(12, 'Ilmu Pengetahuan Alam', 0.1),
(14, 'Ilmu Pengetahuan Sosial', 0.1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_analisa`
-- (See below for the actual view)
--
CREATE TABLE `v_analisa` (
`id_klasifikasi` int(11)
,`kode_siswa` varchar(10)
,`nama_lengkap` varchar(100)
,`id_hk` int(11)
,`id_kriteria` int(11)
,`kriteria` varchar(50)
,`nama` varchar(60)
,`keterangan` varchar(15)
,`nilai` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_analisa`
--
DROP TABLE IF EXISTS `v_analisa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_analisa`  AS SELECT `tbl_klasifikasi`.`id_klasifikasi` AS `id_klasifikasi`, `siswa`.`kode_siswa` AS `kode_siswa`, `siswa`.`nama_lengkap` AS `nama_lengkap`, `tbl_himpunankriteria`.`id_hk` AS `id_hk`, `tbl_kriteria`.`id_kriteria` AS `id_kriteria`, `tbl_kriteria`.`kriteria` AS `kriteria`, `tbl_himpunankriteria`.`nama` AS `nama`, `tbl_himpunankriteria`.`keterangan` AS `keterangan`, `tbl_himpunankriteria`.`nilai` AS `nilai` FROM (((`tbl_kriteria` join `tbl_klasifikasi`) join `tbl_himpunankriteria`) join `siswa`) WHERE ((`tbl_kriteria`.`id_kriteria` = `tbl_himpunankriteria`.`id_kriteria`) AND (`tbl_klasifikasi`.`kode_siswa` = `siswa`.`kode_siswa`) AND (`tbl_klasifikasi`.`id_hk` = `tbl_himpunankriteria`.`id_hk`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kode_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_himpunankriteria`
--
ALTER TABLE `tbl_himpunankriteria`
  ADD PRIMARY KEY (`id_hk`);

--
-- Indexes for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_himpunankriteria`
--
ALTER TABLE `tbl_himpunankriteria`
  MODIFY `id_hk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
