-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2018 pada 08.23
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportkuh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `addres` varchar(80) NOT NULL,
  `Phone` varchar(18) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(20) NOT NULL,
  `reservation_code` varchar(40) NOT NULL,
  `reservation_at` varchar(30) NOT NULL,
  `reservation_date` varchar(35) NOT NULL,
  `customurid` varchar(60) NOT NULL,
  `seat_code` varchar(12) NOT NULL,
  `ruteid` varchar(20) NOT NULL,
  `deport_at` varchar(80) NOT NULL,
  `price` varchar(50) NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(20) NOT NULL,
  `depart_at` varchar(12) NOT NULL,
  `rute_form` varchar(30) NOT NULL,
  `rute_to` varchar(40) NOT NULL,
  `price` varchar(50) NOT NULL,
  `tranportationid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation type`
--

CREATE TABLE `transportation type` (
  `id` int(20) NOT NULL,
  `description` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transpotation`
--

CREATE TABLE `transpotation` (
  `id` int(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` varchar(130) NOT NULL,
  `seat_qty` int(20) NOT NULL,
  `transportation_type id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(9) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` text NOT NULL,
  `Fullname` varchar(40) NOT NULL,
  `Level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transpotation`
--
ALTER TABLE `transpotation`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
