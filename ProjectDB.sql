-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 09:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspage`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `content` varchar(700) NOT NULL,
  `journalists` varchar(300) NOT NULL,
  `dateAdded` date NOT NULL,
  `timesRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `headline`, `content`, `journalists`, `dateAdded`, `timesRead`) VALUES
(4, 'Rruga e dëmtuar për në Rugovë, lë pa turistë këtë zonë turistike', 'Mirëpo, rruga nga qyteti i Pejës që dërgon deri atje vazhdon të mbetet e dëmtuar duke shkaktuar vështirësi në qarkullim.\r\n\r\nBanorët dhe përfaqësuesit e bizneseve thonë se kanë bërë kërkesa të vazhdueshme tek institucionet për intervenim në këtë rrugë, por nuk kanë marrë përgjigje.\r\n\r\nAta që duan t’i shijojnë bukuritë e Grykës së Rugovës, së pari detyrohen t’i tejkalojnë vështirësitë e rrugës.\r\n\r\nPjesa dërmuese e 30 kilometrave të kësaj rruge është me gropa, shembje të asfaltit te pjesët anësore dhe shembje dheu.\r\n\r\nPërfaqësuesit e kësaj zone thonë se rruga ka filluar të dëmtohet që nga reshjet e nëntorit të vitit të kaluar, por askush nga institucionet nuk ka intervenuar.\r\n\r\nReklama\r\nBanor i', 'Eriola Salihu', '2023-01-29', 200),
(5, 'Rruga e dëmtuar për në Rugovë, lë pa turistë këtë zonë turistike', 'Mirëpo, rruga nga qyteti i Pejës që dërgon deri atje vazhdon të mbetet e dëmtuar duke shkaktuar vështirësi në qarkullim.\r\n\r\nBanorët dhe përfaqësuesit e bizneseve thonë se kanë bërë kërkesa të vazhdueshme tek institucionet për intervenim në këtë rrugë, por nuk kanë marrë përgjigje.\r\n\r\nAta që duan t’i shijojnë bukuritë e Grykës së Rugovës, së pari detyrohen t’i tejkalojnë vështirësitë e rrugës.\r\n\r\nPjesa dërmuese e 30 kilometrave të kësaj rruge është me gropa, shembje të asfaltit te pjesët anësore dhe shembje dheu.\r\n\r\nPërfaqësuesit e kësaj zone thonë se rruga ka filluar të dëmtohet që nga reshjet e nëntorit të vitit të kaluar, por askush nga institucionet nuk ka intervenuar.\r\n\r\nReklama\r\nBanor i', 'Eriola Salihu', '2023-01-29', 200);

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneNr` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `pass` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userclass`
--

CREATE TABLE `userclass` (
  `userId` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userclass`
--

INSERT INTO `userclass` (`userId`, `username`, `password`, `email`, `role`) VALUES
(10, 'BletaThumbuese', '$2y$10$YvgiTUMHaZaJIeXyj.yUIuYhPH82S.5u88U/7P6bUqgizusZ2e4bO', 'yllielshani6@gmail.com', 1),
(11, 'test', '$2y$10$00otJLya1yBCUOVfEzXmT.UDBAv/iE5v8kJCyyCsKCAyKgACDihvy', 'test@gmail.com', 0),
(12, 'eriola<333', '$2y$10$ej2dgONk3Xi7xYj8Pq/w2O.cBxb/zuUSSfw2aX.Ti9R..ziuGGagm', 'eriola@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userclass`
--
ALTER TABLE `userclass`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userclass`
--
ALTER TABLE `userclass`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
