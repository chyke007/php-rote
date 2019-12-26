-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 10:24 PM
-- Server version: 10.1.25-MariaDB
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
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `cand_id` varchar(255) NOT NULL,
  `cand_name` varchar(255) NOT NULL,
  `cen_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `cand_id`, `cand_name`, `cen_id`, `cat_id`) VALUES
(1, '273Gdbcd', 'John Doe', '101010', '2'),
(2, '3238hhf7', 'Amada joe', '101010', '1'),
(3, '37848hdnf', 'Vladmri Putin', '202020', '3'),
(4, '7383bff87', 'Joe Praise', '303030', '1'),
(5, '373gdbfmi', 'Kahui quip', '101010', '1'),
(6, '2gg7dn9', 'lolade kehinde', '202020', '1'),
(7, '2477ndbf9n', 'Uche Prince', '303030', '2'),
(8, '384n484', 'Maryjane onuaho', '303030', '2'),
(9, '374bdm8n', 'Emeka tony', '202020', '2'),
(10, '74837djjf9', 'Emaka Ihedioha', '101010', '3');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `cat_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_id`, `cat_name`) VALUES
(1, '1', 'commercial'),
(2, '2', 'science'),
(3, '3', 'art');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(255) NOT NULL,
  `cen_id` varchar(50) NOT NULL,
  `cen_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `cen_id`, `cen_name`) VALUES
(1, '101010', 'Isolo'),
(2, '202020', 'Lekki'),
(3, '303030', 'Mushin'),
(4, '404040', 'Apapa');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_name`, `cat_id`) VALUES
(1, 'Maths', 2),
(2, 'English', 3),
(3, 'Intro-tech', 1),
(4, 'Fine-Arts', 1),
(5, 'Physics', 1),
(6, 'Chemistry', 2),
(7, 'Home-ecoms', 1),
(8, 'Lit&Deb', 2),
(9, 'Biology', 1),
(10, 'Further Maths', 2),
(11, 'Economics', 3),
(12, 'History', 2),
(13, 'Government', 3),
(14, 'Agric', 1),
(15, 'fishery', 2),
(16, 'Food and nut', 2),
(17, 'Debate', 1),
(18, 'social studies', 2),
(19, 'Management', 3),
(20, 'finance', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
