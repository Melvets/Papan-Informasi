-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 12:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_papaninformasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwalmu`
--

CREATE TABLE `tbl_jadwalmu` (
  `id` int(11) NOT NULL,
  `tempat` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `peruntukan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `pic` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jadwalmu`
--

INSERT INTO `tbl_jadwalmu` (`id`, `tempat`, `peruntukan`, `tgl_kegiatan`, `jam_mulai`, `jam_selesai`, `pic`) VALUES
(1, '', '', '2023-06-10', '00:00:00', '00:00:00', ''),
(2, '', '', '2023-06-07', '00:00:00', '00:00:00', ''),
(3, '', '', '2023-06-19', '00:00:00', '00:00:00', ''),
(4, '', '', '1900-01-16', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tempat_kegiatan` varchar(200) NOT NULL,
  `personil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id`, `kegiatan`, `tgl_mulai`, `tgl_selesai`, `tempat_kegiatan`, `personil`) VALUES
(1, '', '0000-00-00', '1900-01-19', '', ''),
(2, '', '2023-02-09', '2023-06-09', '', ''),
(3, '', '2023-02-11', '2023-06-15', '', ''),
(4, '', '2023-02-07', '2023-06-24', '', ''),
(5, '', '0000-00-00', '2023-06-30', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `pengumuan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `pengumuan`, `tanggal`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', '2023-06-11'),
(2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero sequi deserunt nam temporibus optio blanditiis?', '2023-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stokdarah`
--

CREATE TABLE `tbl_stokdarah` (
  `id` int(11) NOT NULL,
  `golda_a` varchar(50) NOT NULL,
  `golda_b` varchar(50) NOT NULL,
  `golda_ab` varchar(50) NOT NULL,
  `golda_o` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_stokdarah`
--

INSERT INTO `tbl_stokdarah` (`id`, `golda_a`, `golda_b`, `golda_ab`, `golda_o`, `tanggal_input`) VALUES
(1, '100', '200', '100', '200', '2023-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwalmu`
--
ALTER TABLE `tbl_jadwalmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stokdarah`
--
ALTER TABLE `tbl_stokdarah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwalmu`
--
ALTER TABLE `tbl_jadwalmu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stokdarah`
--
ALTER TABLE `tbl_stokdarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
