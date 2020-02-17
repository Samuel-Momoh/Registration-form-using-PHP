-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 01:35 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `filenames` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `urls` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `phone`, `filename`, `filenames`, `url`, `urls`) VALUES
(1, 'sanuel Momoh', '08067103944', '1 (1).jpg', 'VID_20200204_145337.mp4', 'http://localhost/pictures/1 (1).jpg', 'http://localhost/videos/VID_20200204_145337.mp4'),
(2, 'sanuel Momoh', '08067103944', '1 (1).jpg', 'VID_20200204_145337.mp4', 'http://localhost/pictures/1 (1).jpg', 'http://localhost/videos/VID_20200204_145337.mp4'),
(3, 'Samuel Daniel', '07055966304', 'image_2.jpg', 'VID_20200204_145337.mp4', 'http://localhost/pictures/image_2.jpg', 'http://localhost/videos/VID_20200204_145337.mp4'),
(4, 'James Sunday', '0705566723', 'Facebook_33433062.jpg', 'VID_20200204_145337.mp4', 'http://localhost/pictures/Facebook_33433062.jpg', 'http://localhost/videos/VID_20200204_145337.mp4'),
(5, 'samuel Momoh', '08067103944', '1 (1).jpg', '1 (1).jpg', 'http://localhost/pictures/1 (1).jpg', 'http://localhost/videos/1 (1).jpg'),
(6, 'jksjk', '08166723207', 'bg_1.jpg', 'bg_1.jpg', 'http://localhost/pictures/bg_1.jpg', 'http://localhost/videos/bg_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
