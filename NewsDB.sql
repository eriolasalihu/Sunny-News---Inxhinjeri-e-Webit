-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 10:29 PM
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
  `timesRead` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `headline`, `content`, `journalists`, `dateAdded`, `timesRead`, `category`) VALUES
(1, 'Albina Kelmendi me këngën “Duje”, përfaqëson Shqipërinë në Eurovision', 'Albina Kelmendi dhe familja e saj do ta përfaqësojnë Shqipërinë në Eurovision.\n\nKjo pasi me këngën “Duje”, Albina me familje e rrëmbeu fitoren e këtij festivali, transmeton Klan Kosova.\n\nFestivali i këngës në RTSH përgjatë këtyre tre netëve erdhi me përolotë surpriza dhe këngë e interpretime mjaft të bukura.\n\nFalë votave të publikut, këngëtarja nga Kosova, Albina dhe Familja Kelmendi kanë arritur të fitojnë Festivalin e Këngës së Radio Televizionit Shqiptar, duke u bërë kështu zyrtarisht artistët prezantues të Shqipërisë në edicionin e radhës të “Eurosong Contest 2022”.\n\nPër dallim nga publiku, juria e edicionit të 61-të të këtij kompeticioni i ka dhuruar çmimin e parë këngëtares Elsa Lila, ', 'Eriola Salihu', '2023-02-07', 500, 'politics');

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
(11, 'admin', '$2y$10$00otJLya1yBCUOVfEzXmT.UDBAv/iE5v8kJCyyCsKCAyKgACDihvy', 'admin@gmail.com', 1),
(14, 'normalAcc', '$2y$10$MPHZ4NMhaWkdjUe07nA0R.aU6QO0IOtSWmBaF418pE4dmsiU8ESVS', 'normalAcc@gmail.com', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userclass`
--
ALTER TABLE `userclass`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
