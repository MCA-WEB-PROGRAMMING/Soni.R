-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 11:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actor` varchar(20) NOT NULL,
  `ayear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actor`, `ayear`) VALUES
('cage', 1964),
('Hanks', 1956),
('Manguire', 1975),
('McDormand', 1957);

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE `acts` (
  `actor` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acts`
--

INSERT INTO `acts` (`actor`, `title`) VALUES
('cage', 'Raising Arizona'),
('Manguire', 'Spiderman'),
('Manguire', 'Wonder Boys'),
('McDormand', 'Fargo'),
('McDormand', 'Raising Arizona'),
('McDormand', 'Wonder Boys');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `director` varchar(20) NOT NULL,
  `dyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`director`, `dyear`) VALUES
('coen', 1954),
('Hanson', 1945),
('Raimi', 1959);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `title` varchar(20) NOT NULL,
  `director` varchar(20) NOT NULL,
  `myear` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`title`, `director`, `myear`, `rating`) VALUES
('Fargo', 'coen', 1996, 8.2),
('Raising Arizona', 'coen', 1987, 7.6),
('Spiderman', 'Raimi', 2002, 7.4),
('Wonder Boys', 'Hanson', 2000, 7.6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
