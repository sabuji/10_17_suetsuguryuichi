-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 3 月 07 日 14:00
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f17_db99`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `anketo`
--

CREATE TABLE `anketo` (
  `code` int(11) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `goiken` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `anketo`
--

INSERT INTO `anketo` (`code`, `nickname`, `email`, `goiken`) VALUES
(1, 'おいちくん', 'oichikun@gmailco.jp', 'おいしかったです'),
(2, 'oichikun2018', 'sabuji@me.com', 'aaaaaaa'),
(3, 'oichikun2018', 'sabuji@me.com', 'aaaaaaa'),
(4, 'だいこん', 'sabuji@me.com', 'だいこんおろし'),
(5, 'だいこん', 'sabuji@me.com', 'だいこんおろし'),
(6, 'だいこん', 'sabuji@me.com', 'だいこんおろし'),
(7, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(8, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(9, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(10, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(11, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(12, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(13, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(14, 'にんじん', 'ninjin.com', 'にんじんにんじん'),
(15, 'とまと', 'tomato.cpm', 'とまと'),
(16, 'oichikun2018', 'sabuji@me.com', '&lt;font size=7&gt;楽しかったです&lt;/font&gt;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketo`
--
ALTER TABLE `anketo`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketo`
--
ALTER TABLE `anketo`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
