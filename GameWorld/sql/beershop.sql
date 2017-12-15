-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2017 at 01:45 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `beercategory`
--

CREATE TABLE `beercategory` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beercategory`
--

INSERT INTO `beercategory` (`id`, `name`, `description`, `price`, `image`, `brand_id`) VALUES
(1, 'Bottle', 'A bottle of Jupiler beer', '1.35', 'img/jupilerbottle.jpg', 1),
(2, 'Crate', 'A crate of 24 Jupiler bottles', '11.45', 'img/jupilerkrat.jpg', 1),
(3, '6-Pack', 'A six-pack of 0.5 CL Jupiler cans', '7.25', 'img/jupilerblikjes.jpg', 1),
(4, '6-Pack 0.0', 'A six-pack of 0.0 bottled Jupiler beer', '4.45', 'img/0.0jupiler.jpg', 1),
(5, '6-Pack Blue Beer', 'A six-pack of bottled Jupiler Blue beer', '3.75', 'img/JupilerBlueBeer.jpg', 1),
(6, 'Bottle', 'A bottle of bavaria beer', '1.45', 'img/bavariabottle.jpg', 2),
(7, 'Crate', 'A crate of 24 Bavaria bottles', '10.50', 'img/bavariakrat.jpg', 2),
(8, '6-Pack', 'A six-pack of 0.5 CL Bavaria cans', '7.75', 'img/bavariablik.jpg', 2),
(9, '6-Pack 0.0', 'A six-pack of 0.0 bottled bavaria beer', '5.25', 'img/0.0bavaria.jpg', 2),
(10, '6-Pack Bock', 'A six-pack of bottled Bavaria Bock beer', '4.50', 'img/bockbavaria.jpg', 2),
(11, 'Bottle', 'A bottle of Hertog jan beer', '0.71', 'img/hertogjanfles.jpg', 3),
(12, 'Crate', 'A crate of 24 Hertog Jan bottles', '15.99', 'img/hertogjankrat.jpg', 3),
(13, '6-Pack', 'A six pack of 0.33 CL Hertog Jan cans', '4.69', 'img/hertogjanblik.jpg', 3),
(14, '6-Pack Bock', 'A six-pack of bottled Hertog Jan Bock beer', '5.34', 'img/hjbock.jpg', 3),
(15, 'Grand Prestige', 'A bottle of Hertog Jan Grand Prestige', '1.95', 'img/hertogjanprestige.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `ID` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`ID`, `brand`) VALUES
(1, 'jupiler'),
(2, 'bavaria'),
(3, 'hertogjan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `subject`) VALUES
('', '', '', ''),
('', '', '', ''),
('Wessel', 'Engels', 'wesselengels@hotmail.com', 'fwedf'),
('sdf', 'asdf', 'asdf', 'asdf'),
('sdf', 'asdf', 'asdf', 'asdf'),
('asdf', 'asdf', 'asdf', 'asdf'),
('gg', 'gg', 'gg', 'gg'),
('', '', '', ''),
('Wessel', 'Engels', 'wesselengels@hotmail.com', 'Hallo'),
('Wessel', 'Engels', 'wesselengels@hotmail.com', 'Hallo'),
('Wessel', 'Engels', 'wesselengels@hotmail.com', 'Hallo'),
('', '', '', ''),
('fa', 'as', 'as', 'as'),
('fa', 'as', 'as', 'as'),
('', '', '', ''),
('', '', '', ''),
('fasd', 'asd', 'asd', 'asd'),
('', '', '', ''),
('', '', '', ''),
('asdf', 'asdf', 'asdf@has', 'asdf'),
('fasdf', 'asdf', 'asdf@asdf', 'adsf'),
('asdf', 'asdf', 'adsfas@das', 'fdsadf'),
('asdf', 'asdfasdf', 'asdf@asdf', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beercategory`
--
ALTER TABLE `beercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beercategory`
--
ALTER TABLE `beercategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
