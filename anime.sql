-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 09:45 AM
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
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `anime_name` varchar(199) NOT NULL,
  `genres` varchar(199) NOT NULL,
  `anime_image` varchar(199) NOT NULL,
  `anime_description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `anime_name`, `genres`, `anime_image`, `anime_description`) VALUES
(2, 'Your Name', 'Romance', 'Kimi-no-Na-wa.jpg', 'Mitsuha Miyamizu is a high school girl living in the rural town of Itomori near Hida. Bored of the town, she wishes to be a Tokyo boy in her next life. She inexplicably begins to switch bodies intermittently with Taki Tachibana, a high school boy in Tokyo'),
(3, 'Dr . Stone', 'Action', 'drstonenew.jpg', '3700 tahun setelah kilatan cahaya misterius mengubah umat manusia menjadi batu, seorang remaja jenius bernama Senku Ishigami bangkit dan menemukan dirinya di dunia tempat di mana semua jejak peradaban manusia telah terkikis oleh waktu. Senku yang menyadari bahwa dirinya dibangkitkan dengan asam nitrat, menghidupkan kembali temannya yang bernama Taiju Oki dan teman sekelas mereka Yuzuriha Ogawa untuk membangun kembali peradaban mereka. Namun, Senku juga menghidupkan kembali seniman bela diri Tsukasa Shishio, yang menentang niat Senku dan memutuskan untuk menciptakan dunia baru yang bebas dari korupsi ala generasi lama. Kejadian tersebut meningkat menjadi Perang Batu antara Kerajaan Ilmu Pengetahuan pimpinan Senku, yang mendapatkan sekutu yaitu suku manusia yang rupanya adalah keturunan ayahnya dan lima astronaut yang kembali ke Bumi setelah proses pembatuan, dan Kekaisaran Kekuatan yang didirikan Tsukasa dengan cara menghidupkan kembali orang-orang kuat yang menjadi batu. Setelah Kerajaan Ilmu Pengetahuan Senku menang, mereka akhirnya menghadapi musuh baru, sebuah suku yang dikenal sebagai Kerajaan Pembatuan, yang memiliki perangkat yang digunakan untuk mengubah dunia menjadi batu 3700 tahun yang lalu.'),
(4, 'Kuroko no Basuke', 'Sport', 'kurokooo.jpg', '                                                An up-and-coming power player, Taiga Kagami, is just back from America. When he comes to Seirin High School, he meets the super-ordinary boy, Tetsuya Kuroko.                            ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
