-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 02:58 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(8) NOT NULL,
  `alternatif` varchar(20) NOT NULL,
  `k1` varchar(20) DEFAULT NULL,
  `k2` varchar(20) DEFAULT NULL,
  `k3` varchar(20) DEFAULT NULL,
  `k4` varchar(20) DEFAULT NULL,
  `k5` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`) VALUES
(1, 'A1 - Dini', '5', '3', '5', '2', '4'),
(2, 'A2 - Yulia', '5', '4', '4', '3', '3'),
(3, 'A3 - Nuriya', '5', '1', '3', '4', '5'),
(4, 'A4 - Nara', '5', '4', '1', '3', '2'),
(5, 'A5 - Geovano', '2', '5', '1', '4', '3'),
(6, 'A6 - Anggara', '4', '2', '4', '3', '5'),
(7, 'A7 - Anggraini', '4', '4', '2', '4', '1'),
(8, 'A8 - Nursyifa', '3', '2', '5', '5', '4'),
(9, 'A9 - Laksamana', '5', '1', '5', '3', '2'),
(10, 'A10 - Cynthia', '4', '5', '2', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(20) NOT NULL,
  `kriteria` varchar(25) DEFAULT NULL,
  `kepentingan` varchar(20) NOT NULL,
  `cost_benefit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kepentingan`, `cost_benefit`) VALUES
('1', 'C1 Nilai Rata-Rata', '5', 'benefit'),
('2', 'C2 Kehadiran', '4', 'benefit'),
('3', 'C3 Sikap & Perilaku', '3', 'benefit'),
('4', 'C4 Ekstrakulikuler', '1', 'benefit'),
('5', 'C5 Kemampuan B. Inggris', '2', 'benefit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
