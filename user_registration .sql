-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2023 at 11:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `commerce` varchar(255) DEFAULT NULL,
  `accounting` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `nameCandidate` varchar(255) DEFAULT NULL,
  `addressCandidate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `phone`, `name`, `commerce`, `accounting`, `business`, `nameCandidate`, `addressCandidate`) VALUES
(1, 'admin', 'mohid10587@gmail.com', '$2y$10$rD8DE.c.nJSMa5uI.0jctOroPaTDvxd09HcHT3XdKDY0eHdMm9.6a', 'Jeson Road ,kashempur', '01704710585', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'mohid', 'mohid10587@gmail.com', '$2y$10$51e/Bfal3jlvYsvl3/MCI.Q4IEgY8j3Qkg99KKY1wrtMTLM3a.Ige', 'Jeson Road ,kashempur', '01704710585', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Md Mohidul Islam', 'mohid10587@gmail.com', '$2y$10$OFKONN.7r1hma/Ntzkp1sOJ8qakjCiyyhlAfQErpJwiTYIobGURRe', 'Jeson Road ,kashempur', '01704710585', 'Md. Mohidul Islam', NULL, NULL, NULL, NULL, NULL),
(4, 'mohid111', 'mohid10587@gmail.com', '$2y$10$8tNL5GI/T.HzwwdTRgUxgeDzPh0k3ZnU7pEAoih4g/jkqeXEkDZBu', 'Jeson Road ,kashempur', '01704710585', 'Md. Mohidul Islam', NULL, NULL, NULL, NULL, NULL),
(5, 'mohid10587', 'mohid10587@gmail.com', '$2y$10$32hn3IEcQYMp4QTFUPjsW.FE4oYstW7Pm7R.KT.0p9t7ZcwP3D2Wa', 'Jeson Road ,kashempur', '01704710585', 'Md. Mohidul Islam', '878', '7878', 'hg55', 'yuyugh', 'trtrtrt(90)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
