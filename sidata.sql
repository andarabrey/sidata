-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 12:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_ayah` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakelas`
--

CREATE TABLE `tb_datakelas` (
  `id` int(6) NOT NULL,
  `id_kelas` int(6) NOT NULL,
  `id_siswa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(6) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(2, '4Ca'),
(3, '8A-1'),
(4, 'z3c'),
(5, 'a8y'),
(6, 'VIIA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nem` float NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `tinggal` varchar(30) NOT NULL,
  `jarak` int(2) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `stkelas` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp`
--

CREATE TABLE `tb_tmp` (
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nem` float NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `tinggal` varchar(30) NOT NULL,
  `jarak` int(2) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `stkelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_ayah`
--

CREATE TABLE `tb_tmp_ayah` (
  `id_ayah` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_ibu`
--

CREATE TABLE `tb_tmp_ibu` (
  `id_ibu` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_wali`
--

CREATE TABLE `tb_tmp_wali` (
  `id_wali` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_wali` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'adminaa', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_ayah`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tmp`
--
ALTER TABLE `tb_tmp`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tmp_ayah`
--
ALTER TABLE `tb_tmp_ayah`
  ADD PRIMARY KEY (`id_ayah`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_tmp_ibu`
--
ALTER TABLE `tb_tmp_ibu`
  ADD PRIMARY KEY (`id_ibu`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_tmp_wali`
--
ALTER TABLE `tb_tmp_wali`
  ADD PRIMARY KEY (`id_wali`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_wali`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  MODIFY `id_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tmp_ayah`
--
ALTER TABLE `tb_tmp_ayah`
  MODIFY `id_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tmp_ibu`
--
ALTER TABLE `tb_tmp_ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tmp_wali`
--
ALTER TABLE `tb_tmp_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD CONSTRAINT `tb_ayah_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datakelas`
--
ALTER TABLE `tb_datakelas`
  ADD CONSTRAINT `tb_datakelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datakelas_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD CONSTRAINT `tb_ibu_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tmp_ayah`
--
ALTER TABLE `tb_tmp_ayah`
  ADD CONSTRAINT `tb_tmp_ayah_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_tmp` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tmp_ibu`
--
ALTER TABLE `tb_tmp_ibu`
  ADD CONSTRAINT `tb_tmp_ibu_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_tmp` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tmp_wali`
--
ALTER TABLE `tb_tmp_wali`
  ADD CONSTRAINT `tb_tmp_wali_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_tmp` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD CONSTRAINT `tb_wali_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
