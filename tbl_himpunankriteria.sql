-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 03:45 PM
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
-- Database: `spksaw`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_himpunankriteria`
--
ALTER TABLE `tbl_himpunankriteria`
  ADD PRIMARY KEY (`id_hk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_himpunankriteria`
--
ALTER TABLE `tbl_himpunankriteria`
  MODIFY `id_hk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
