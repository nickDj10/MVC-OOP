-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(1024) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url_address`, `image`, `date`, `description`, `title`) VALUES
(18, 'UO35kL8U0h5yKyr9EgdZxhbhF', 'uploads/image-1.jpg', '2022-11-18 12:59:16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(19, 'CaGFqhP', 'uploads/image-2.jpg', '2022-11-18 12:59:26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(20, 'v6jmwlbxmh2IhZdn6DDSuqCykZ8tYKhF4fghIq8', 'uploads/image-3.jpg', '2022-11-18 12:59:38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(21, 'UQ0I68HsuaJpFe7ppIz3Yt1cfIGMVUM', 'uploads/image-4.jpg', '2022-11-18 12:59:48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(22, 'TmAI9up', 'uploads/image-5.jpg', '2022-11-18 12:59:57', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(23, 'uWaUGzoO64eL5bdXbW90MLC0', 'uploads/image-6.jpg', '2022-11-18 13:00:08', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(24, 'mJ61hcN5T3WUfc', 'uploads/image-7.jpg', '2022-11-18 13:00:18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum'),
(25, 'liKY25Qo9FjPckIzEEzi4PMBWOWcqlPS0496e9NJfWNp5MeW45Wq7UN', 'uploads/image-8.jpg', '2022-11-18 13:00:28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie ultrices fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur quis.', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `username`, `password`, `email`, `date`) VALUES
(22, 'ascYlY0FCmLcWkv6ofS5NlQ7MfmfT6vaSikQYTHcKciY9w8eN4Z', 'demo', 'demo', 'demo@example', '2022-11-17 23:31:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_address` (`url_address`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
