-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `email` varchar(55) NOT NULL,
  `sektor` varchar(30) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `nama_pelapor`, `email`, `sektor`, `keluhan`, `tanggal_pelaporan`, `keterangan`) VALUES
(11, 'Muhamad Fikri', 'mfikrikuliah30@gmail.com', 'TRAINING CENTER', 'Wifi tidak ada koneksi data', '2023-10-24', 'Close'),
(12, 'Nafis', 'nafis123@gmail.com', 'MIA4', 'Printer tidak bisa menyala', '2023-10-24', 'Close'),
(13, 'Yuda', 'Yuda123@gmail.com', 'PASAR PANAS', 'tombol keyboard banyak yang tidak berfungsi', '2023-10-24', 'Close'),
(14, 'Alpy', 'Alpy23@gmail.com', 'PPA', 'Akun Email tidak bisa login', '2023-10-24', 'Close'),
(15, 'dedy', 'dedy123@gmail.com', 'BUMA MAIN SHOP', 'Wifi Gangguan', '2023-10-24', 'Close'),
(16, 'Rizki', 'Rizki123@gmail.com', 'TRAINING CENTER', 'Print Rusak', '2023-10-24', 'Close'),
(17, 'Muhamad Fikri', 'tanjungb44@gmail.com', 'PASAR PANAS', 'Wifi tidak bisa conect', '2023-10-24', 'Close'),
(22, 'Pagan', 'Pagan123@gmail.com', 'TRAINING CENTER', 'Modem tidak ada internet', '2023-10-24', 'Close'),
(23, 'Said', 'Said11@gmail.com', 'TRAINING CENTER', 'Monitor bluescreen', '2023-10-24', 'Close'),
(24, 'Ka Clara', 'Clara123@gmail.com', 'TRAINING CENTER', 'Monitor tidak bisa menyala', '2023-10-27', 'Close'),
(26, 'bbngicay', 'mfikrikuliah11@gmail.com', 'RISA', 'Sophos mati total', '2023-10-10', 'Close'),
(29, 'Saskia', 'Saskia@gmail.com', 'PPA', 'Wifi tidak ada koneksi', '2023-11-05', 'Close'),
(32, 'Yuda', 'Yuda@com', 'TRAINING CENTER', 'Internet tidak setabil dan lemot', '2023-11-06', 'Close'),
(39, 'Muhamad Fikri', 'dedy123@gmail.com', 'BUMA MAIN SHOP', '12', '2023-11-17', 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(10, 'UT', 'c4ca4238a0b923820dcc509a6f75849b', 'administrator'),
(16, 'UT1', 'c4ca4238a0b923820dcc509a6f75849b', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
