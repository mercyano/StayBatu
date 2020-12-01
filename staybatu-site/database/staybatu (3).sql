-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 05:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staybatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pemilik` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pemilik`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'tunggul', 'tunggul@gmail.com', 'default.jpg', '$2y$10$Ml3k7oVuLxpRyIuNc55Dm.DOY.7x/Gxa2EglUHDgmyuQyoQpFFW4a', 2, 1, 1606442500),
(4, 'Tunggul Wido', 'admin@staybatu.id', 'default1.jpg', '$2y$10$xvNZ8iRWG3cLRHSuErDVuO4dAmk/MYUCEnLoM0qJbwVAlGJXK6jvG', 2, 1, 1606406485),
(13, 'admin1', 'new_admin@gmail.com', 'default.jpg', '$2y$10$GGie3maJQAKHK3Cl0E66kuFC1yjHbDvjcZTLVMNVVk5H6B/d/3wAu', 1, 1, 1606407649),
(15, 'Yudi', 'yudi@gmail.com', 'default.jpg', '$2y$10$xQ0Jsf7MjOhzU36chWDEUeaJoGy5iAKuGBDqDuHgPcK0Rzn3r296a', 2, 1, 1606575437);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
