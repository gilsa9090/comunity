-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komunitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `status`) VALUES
(1, 'Umum', 'aktif'),
(2, 'Eksekutif', 'aktif'),
(3, 'Keuangan', 'aktif'),
(4, 'Keanggotaan', 'aktif'),
(5, 'Humas', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `divisi_member`
--

CREATE TABLE `divisi_member` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `divisi_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi_member`
--

INSERT INTO `divisi_member` (`id`, `user_id`, `divisi_id`, `status`, `deskripsi`) VALUES
(1, 1, 3, 'aktif', 'Bertanggung jawab atas semua anggota'),
(2, 2, 2, 'aktif', 'Bertanggung Jawab atas Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Mela Alfia Rahma', 'mela123', 'default.jpg', '$2y$10$Jc973aujgfRWh4QaV8BuMO1pVR222KEF3mEEkQ45uoscrvylsEiPS', 1, 1, 1675779990),
(2, 'Bakar Riyamuza', 'bakar', 'default.jpg', '$2y$10$O8EJ.EXqYYIlJqSeDC7G0OdHDug6rpGiF0e/GniZHB2KEHXdcjw5a', 2, 1, 1675782659);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi_member`
--
ALTER TABLE `divisi_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `divisi_id` (`divisi_id`);

--
-- Indexes for table `role_id`
--
ALTER TABLE `role_id`
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
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `divisi_member`
--
ALTER TABLE `divisi_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
