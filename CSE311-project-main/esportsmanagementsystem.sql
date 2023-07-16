-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esportsmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `coachdata`
--

CREATE TABLE `coachdata` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coachdata`
--

INSERT INTO `coachdata` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'vk venom', 'vkvenom@gmail.com', '123', 'international coach'),
(2, 'shazamdk', 'shazamdk@gamil.com', '123', 'local coach');

-- --------------------------------------------------------

--
-- Table structure for table `gamedata`
--

CREATE TABLE `gamedata` (
  `id` int(100) NOT NULL,
  `gamepic` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamename` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamedetail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamedeveloper` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gamedata`
--

INSERT INTO `gamedata` (`id`, `gamepic`, `gamename`, `gamedetail`, `gamedeveloper`) VALUES
(0, 'valorant.jpg', 'valorant', 'First person shooting game', 'Riot'),
(0, 'csgo.jpeg', 'csgo', 'First person shooting game', 'steam'),
(0, 'pubg.png', 'pubg', 'battle royal game', 'PUBG corporation'),
(0, 'superpeople.jpg', 'Super People ', 'battle royal game', 'wonder games ');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'Mehdi Hassan', 'mehdi@gmail.com', '123', 'Manager'),
(2, 'Meherin', 'meherin@gmail.com', '123', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `ownerdata`
--

CREATE TABLE `ownerdata` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ownerdata`
--

INSERT INTO `ownerdata` (`id`, `name`, `email`, `pass`) VALUES
(1, 'meherin', 'meherin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `playerdata`
--

CREATE TABLE `playerdata` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playerdata`
--

INSERT INTO `playerdata` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'karim', 'karim@gamil.com', '123', 'international player'),
(2, 'rahim', 'rahim@gmail.com', '123', 'local player'),
(3, 'Tenz', 'tenz@gmail.com', '123', 'international player'),
(4, 'Shazam', 'shazam@gmail.com', '123', 'international player'),
(5, 'Dead', 'dead@gmail.com', '123', 'international player'),
(6, 'SSSami', 'sssami@gmail.com', '123', 'international player'),
(7, 'Zolo', 'zolo@gmail.com', '123', 'international player'),
(8, 'yellow', 'yellow@gmail.com', '123', 'international player');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(100) NOT NULL,
  `playername` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamename` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `playertype` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_date` date NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `playername`, `gamename`, `playertype`, `tournament_date`, `salary`) VALUES
(0, 'Shazam', 'valorant', 'international player', '2022-01-03', 5000),
(0, 'karim', 'pubg', 'international player', '2022-01-20', 3000),
(0, 'rahim', 'pubg', 'local player', '2022-01-12', 3000),
(0, 'Tenz', 'valorant', 'international player', '2022-01-03', 5000),
(0, 'Dead', 'Super People ', 'international player', '2022-01-07', 8000),
(0, 'Zolo', 'valorant', 'international player', '2022-01-05', 2000),
(0, 'SSSami', 'valorant', 'international player', '0000-00-00', 3000),
(0, 'yellow', 'pubg', 'international player', '2022-01-13', 6000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
