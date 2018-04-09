-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 02:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_blog`
--

CREATE TABLE IF NOT EXISTS `detail_blog` (
  `id_detail` int(10) NOT NULL,
  `ket_detail` text NOT NULL,
  `id_news` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_blog`
--

CREATE TABLE IF NOT EXISTS `news_blog` (
  `id_news` int(10) NOT NULL,
  `name_news` varchar(30) NOT NULL,
  `ket_news` text NOT NULL,
  `image_news` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_blog`
--

INSERT INTO `news_blog` (`id_news`, `name_news`, `ket_news`, `image_news`) VALUES
(1, 'PROSES PEMBUATAN UNDERWEAR', 'Beberapa hari lalu aku dapat kesempatan untuk main ke pabrik wacoal, bukan sembarang pabrik aku seneng banget bisa main ke pabrik Wacoal di Kyoto Jepang! Waktu dapat tawaran ini, aku super duper excited! Bahkan kepikiran terus "jadi gak yaaa ke pabrik Wacoal di Jepang?", Banyak yang bilang kalo ke pabrik itu ga seru tapi kalo aku pribadi entah kenapa menurutku main ke pabrik itu tuh hal yang sangat seru (karena gak sembarang orang bisa masuk pabrik dan bisa lihat segala pembuatannya) jadi aku seneng banget bisa dapat banyak pengetahuan dan juga pengalaman. Nah, seumur hidup aku baru main ke 3 pabrik (Pabrik Makeup, Pabrik Softlens dan baru saja check list pabrik Underwear! yeay!). Penasaran aku ngapain aja di pabrik Wacoal Kyoto Jepang? yuk Click Read More!', 'beautynews.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_blog`
--
ALTER TABLE `detail_blog`
 ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `news_blog`
--
ALTER TABLE `news_blog`
 ADD PRIMARY KEY (`id_news`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
