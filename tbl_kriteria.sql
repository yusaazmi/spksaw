-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 03:39 PM
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
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `kriteria`, `bobot`) VALUES
(11, 'Kesenian', 5),
(3, 'Rangking', 3),
(4, 'Agama', 5),
(5, 'Matematika', 5),
(6, 'Bahasa Indonesia', 5),
(10, 'Bahasa Inggris', 5),
(12, 'Ilmu Pengetahuan Alam', 5),
(14, 'Ilmu Pengetahuan Sosial', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
