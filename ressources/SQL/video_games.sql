-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2019 at 10:02 PM
-- Server version: 10.3.13-MariaDB-2
-- PHP Version: 7.2.17-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `Connexion`
--

CREATE TABLE `Connexion` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Deletes`
--

CREATE TABLE `Deletes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Updates`
--

CREATE TABLE `Updates` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vg_general`
--

CREATE TABLE `vg_general` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prix` float NOT NULL,
  `date_de_sortie` varchar(20) CHARACTER SET utf8 NOT NULL,
  `genre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `origine` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `connexion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `plateforme` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Deletes`
--
ALTER TABLE `Deletes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Updates`
--
ALTER TABLE `Updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vg_general`
--
ALTER TABLE `vg_general`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Deletes`
--
ALTER TABLE `Deletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Updates`
--
ALTER TABLE `Updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vg_general`
--
ALTER TABLE `vg_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
