-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 09:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` varchar(2000) NOT NULL,
  `images` varchar(255) NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `konten`, `images`, `tgl_posting`) VALUES
(1, 'League of Legends', 'League of Legends adalah Game Online kompetitif yang menggabungkan kecepatan dan intensitas dari game RTS dengan sedikit unsur RPG di dalamnya. Dua tim, masing - masing terdiri dari beberapa Champion yang unik, bertarung untuk meraih kemenangan di berbagai mode permainan yang tersedia. Dengan jumlah Champion yang terus menerus bertambah, update yang berkesinambungan, dan turnamen - turnamen yang terus berkembang, League of Legends menawarkan permainan yang tidak akan pernah membosankan.', 'lol.jpg', '2018-04-01'),
(2, 'Mobel Lejen', 'Mobile Legends: Bang Bang is a multiplayer online battle arena (MOBA) game designed for mobile phones. The two opposing teams fight to reach and destroy the enemy\'s base while defending their own base for control of a path, the three \"lanes\" known as \"top\", \"middle\" and \"bottom\", which connects the bases.\r\n\r\nIn each team, there are five players who each control an avatar, known as a \"hero\", from their own device. Weaker computer-controlled characters, called \"minions\", spawn at team bases and follow the three lanes to the opposite team\'s base, fighting enemies and turrets.', 'mobalog.jpg', '2018-04-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
