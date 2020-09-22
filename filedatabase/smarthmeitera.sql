-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2020 at 11:55 AM
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
-- Table structure for table `data_projek`
--

CREATE TABLE `data_projek` (
  `id` int(11) NOT NULL,
  `namaprojek` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `statusfield1` text DEFAULT NULL,
  `statusfield2` text DEFAULT NULL,
  `statusfield3` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `datafield_1` varchar(255) DEFAULT NULL,
  `datafield_2` varchar(255) DEFAULT NULL,
  `datafield_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_projek`
--

INSERT INTO `data_projek` (`id`, `namaprojek`, `token`, `role`, `category`, `deskripsi`, `statusfield1`, `statusfield2`, `statusfield3`, `gambar`, `created_by`, `created_date`, `updated_date`, `datafield_1`, `datafield_2`, `datafield_3`) VALUES
(1, 'manual projek', 'jyhKehXtmvq93UBBbhOLP2YS4alspKE7is36qKcy1K8', 'manual', 'all', 'tester create data di manual projek', 'on', 'on', 'on', '1599752731_1113e1bce7aad7a7cf75.png', 'fandilladp', '2020-09-10 10:45:31', '2020-09-11 18:01:27', '80', '', ''),
(5, 'test gauge', 'JxgM20Zv8re', 'gauge', 'monitoring', 'tester create data di gauge', 'on', 'on', 'on', '1599853896_fe4315ae50ec7b330418.png', 'fandilladp', '2020-09-11 14:51:36', '0000-00-00 00:00:00', '50', '20', '100'),
(6, 'tester grafik', 'ABXXo8cUZSLeeDXqMxX0aoxZtufOJ6sF3dDbunzexN0', 'grafik', 'monitoring', 'tester create data di grafik', NULL, NULL, NULL, '1599863164_4f709d29ea38f0e1265b.png', 'fandilladp', '2020-09-11 17:26:04', '0000-00-00 00:00:00', '80', '30', '90'),
(7, 'tester lampu', 'Dnv6RYS63EU5d1Ox6yqGnr0Wbw7ul3HgJqwtHr97Fs', 'lampu', 'control', 'tester create data di lampu', 'on', 'on', 'on', '1599863708_2745776a91c7b0f1af81.png', 'fandilladp', '2020-09-11 17:35:08', '0000-00-00 00:00:00', 'on', NULL, NULL);

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
-- Indexes for table `data_projek`
--
ALTER TABLE `data_projek`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `data_projek`
--
ALTER TABLE `data_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
