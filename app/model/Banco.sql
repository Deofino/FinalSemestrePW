-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 04:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--
CREATE DATABASE IF NOT EXISTS `shoes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shoes`;

-- --------------------------------------------------------

--
-- Table structure for table `tbbrand`
--
-- Creation: Jun 09, 2021 at 02:28 PM
--

CREATE TABLE `tbbrand` (
  `_id` int(11) NOT NULL,
  `nameBrand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbbrand`:
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory`
--
-- Creation: Jun 09, 2021 at 02:27 PM
--

CREATE TABLE `tbcategory` (
  `_id` int(11) NOT NULL,
  `nameCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbcategory`:
--

-- --------------------------------------------------------

--
-- Table structure for table `tbshoe`
--
-- Creation: Jun 09, 2021 at 02:48 PM
--

CREATE TABLE `tbshoe` (
  `_id` int(11) NOT NULL,
  `nameShoe` varchar(100) NOT NULL,
  `descriptionShoe` varchar(300) NOT NULL,
  `genderShoe` varchar(50) NOT NULL,
  `priceShoe` double(6,2) NOT NULL,
  `colorsShoe` varchar(50) NOT NULL,
  `dirImageShoe` varchar(100) NOT NULL,
  `nameImageShoe` varchar(100) NOT NULL,
  `idCategory` int(11) DEFAULT NULL,
  `idBrand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tbshoe`:
--   `idCategory`
--       `tbcategory` -> `_id`
--   `idBrand`
--       `tbbrand` -> `_id`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbrand`
--
ALTER TABLE `tbbrand`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbshoe`
--
ALTER TABLE `tbshoe`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idBrand` (`idBrand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbrand`
--
ALTER TABLE `tbbrand`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbshoe`
--
ALTER TABLE `tbshoe`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbshoe`
--
ALTER TABLE `tbshoe`
  ADD CONSTRAINT `tbshoe_ibfk_3` FOREIGN KEY (`idCategory`) REFERENCES `tbcategory` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbshoe_ibfk_4` FOREIGN KEY (`idBrand`) REFERENCES `tbbrand` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
