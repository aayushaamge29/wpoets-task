-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2025 at 09:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpoets`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider_points`
--

CREATE TABLE `slider_points` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_points`
--

INSERT INTO `slider_points` (`id`, `title`, `icon`, `description`, `image`) VALUES
(1, 'Learning', 'fas fa-book', 'Learning is a lifelong process that fuels personal and professional growth.', 'images/DL-Learning-1.jpg'),
(2, 'Technology', 'fas fa-cogs', 'Technology drives innovation, connects the world, and shapes a smarter future.', 'images/DL-Technology.jpg'),
(3, 'Communication', 'fas fa-comments', 'Effective communication is the key to building strong relationships and successful teams.', 'images/DL-Communication.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider_points`
--
ALTER TABLE `slider_points`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider_points`
--
ALTER TABLE `slider_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
