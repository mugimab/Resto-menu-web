-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 05:03 AM
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
-- Database: `dinamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cns`
--

CREATE TABLE `cns` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cns`
--

INSERT INTO `cns` (`id`, `nama`, `email`, `komentar`, `created_at`) VALUES
(1, 'David', 'david@email.com', 'Good', '2025-01-08 04:36:51'),
(2, 'Rena', 'rena@email.com', 'Recomended', '2025-01-08 05:39:02'),
(3, 'Devan', 'devan@email.com', 'Good taste and services', '2025-01-08 05:40:16'),
(4, 'Mugi', 'mugi@email.com', 'Very good!!!', '2025-01-08 16:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`) VALUES
(1, 'rena', '$2y$10$EIaJKMcpZMUKwftEgEnczuEdTjXZ5O/jmTK.0n3fgjI1UTFZF67ZK'),
(3, 'admin', '$2y$10$EpZYXNpUwQ2kYjq6Crk57.OxviQELgbm816XDrRKWHLmnKzHFnJVa'),
(4, 'user', '$2y$10$G5.IzWQd5MN9KNxa43EjgeUlsNoF8GKQW2m8YlXhhmbDzuVYoymza'),
(5, 'admin123', '$2y$10$YU42LN35Ik7ShcjXzypaTOcXIcLtHAADFOOGt/tmHr4ZOEYasfxyG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cns`
--
ALTER TABLE `cns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cns`
--
ALTER TABLE `cns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
