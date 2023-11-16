-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 01:39 AM
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
-- Database: `shopbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment_text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime(),
  `user_id` int(11) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment_text`, `created_at`, `user_id`, `image`) VALUES
(2, 'Pham Nhat Truong', 'hihi', '2023-11-14 23:55:13', 2, 'user_img_2.jpg'),
(3, 'Tong Huu Thang', 'hehe', '2023-11-14 23:55:13', 3, 'user_img_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qlydonhang`
--

CREATE TABLE `qlydonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `tong_gia_tri` int(11) NOT NULL,
  `ngay_lap` datetime NOT NULL DEFAULT curtime(),
  `trang_thai` varchar(20) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `qlydonhang`
--

INSERT INTO `qlydonhang` (`ma_dh`, `ma_kh`, `tong_gia_tri`, `ngay_lap`, `trang_thai`) VALUES
(1, 1, 100000, '2023-11-07 23:48:16', 'Đã hủy'),
(2, 2, 200000, '2023-11-07 23:48:16', 'Đã giao'),
(3, 3, 300000, '2023-11-07 23:48:16', 'Đã hoàn tiền'),
(4, 4, 500000, '2023-11-14 21:51:39', 'Đang vận chuyển'),
(5, 5, 400000, '2023-11-14 21:51:39', 'Đang lấy hàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qlydonhang`
--
ALTER TABLE `qlydonhang`
  ADD PRIMARY KEY (`ma_dh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qlydonhang`
--
ALTER TABLE `qlydonhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
