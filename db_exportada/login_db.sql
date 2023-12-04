-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 05:20 AM
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
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `usu`
--

CREATE TABLE `usu` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contrasena` varchar(1000) NOT NULL,
  `photo` blob NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usu`
--

INSERT INTO `usu` (`id`, `email`, `contrasena`, `photo`, `name`, `bio`, `phone`) VALUES
(1, 'admin@admin', '$2y$10$Lp1EzEPDFZybCT2ZOJ6dmuS9dgx48CahUmA4UKnFbXaDVo.YqmUki', 0x2e2e2f70686f746f732f70726f66696c652e6a7067, 'admin', 'Este es el admin 1', '+502 45054148'),
(2, 'test@test', '$2y$10$KkDmcRqhMCrhmFPlAw6rzealEKxxW7fpUyf3oQKpWxFWuMzk4wIxK', 0x2e2e2f70686f746f732f70726f66696c652e6a7067, 'Test', 'Esta es mi ultima prueba.', '+502 78621324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usu`
--
ALTER TABLE `usu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usu`
--
ALTER TABLE `usu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
