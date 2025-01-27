-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koleksihilmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblkoleksihilmy`
--

CREATE TABLE `tblkoleksihilmy` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `genre_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahunterbit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblkoleksihilmy`
--

INSERT INTO `tblkoleksihilmy` (`id_buku`, `nama_buku`, `genre_buku`, `pengarang`, `tahunterbit`) VALUES
(1, 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Self-Help Book', 'Mark Mason', 2016),
(2, 'The Advanture of Sherlock Holmes', 'Mystery, Advanture', 'Sir Arthur Conan Doyle', 1892),
(3, 'Atomic Habits', 'Self-Help Book', 'James Clear', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblkoleksihilmy`
--
ALTER TABLE `tblkoleksihilmy`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
