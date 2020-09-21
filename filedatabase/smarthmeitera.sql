-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2020 at 09:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthmeitera`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrollampu`
--

CREATE TABLE `kontrollampu` (
  `id` int(11) NOT NULL,
  `namaprojek` varchar(150) NOT NULL,
  `token` varchar(250) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `jumlahlampu` int(6) NOT NULL DEFAULT 1,
  `gambar` varchar(150) NOT NULL DEFAULT 'default.jpg 	',
  `created_by` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `lampu_1` int(1) NOT NULL DEFAULT 0,
  `lampu_2` int(1) NOT NULL DEFAULT 0,
  `lampu_3` int(1) NOT NULL DEFAULT 0,
  `lampu_4` int(1) NOT NULL DEFAULT 0,
  `lampu_5` int(1) NOT NULL DEFAULT 0,
  `lampu_6` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` varchar(150) NOT NULL DEFAULT 'default.jpg',
  `role` int(1) NOT NULL DEFAULT 1,
  `aktif` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `salt`, `avatar`, `role`, `aktif`, `created_date`, `updated_date`) VALUES
(5, 'fandilladp', 'fandilladp@gmail.com', 'dd608e495d210b0e1e41b8b7e5391cfe', '5f61bc58d044c5.92226995', 'default.jpg', 1, 1, '2020-09-16 02:18:48', '0000-00-00 00:00:00'),
(6, 'testingakunsalah', 'hahahaha@gmail.com', '00bccb61a3b1a9d4fa5e65e065cd727d', '5f61bc86a65f20.20924158', 'default.jpg', 1, 0, '2020-09-16 02:19:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertoken`
--

CREATE TABLE `usertoken` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertoken`
--

INSERT INTO `usertoken` (`id`, `email`, `token`, `created_date`) VALUES
(7, 'hahahaha@gmail.com', '5iX8gNwycprPdSqSmLHnqgS/ugu28sW2oGEN5jYGY7s=', '1600240774');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontrollampu`
--
ALTER TABLE `kontrollampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertoken`
--
ALTER TABLE `usertoken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrollampu`
--
ALTER TABLE `kontrollampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertoken`
--
ALTER TABLE `usertoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
