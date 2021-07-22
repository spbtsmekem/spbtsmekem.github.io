-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 05:24 PM
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
-- Database: `spbtsmekem`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

DROP TABLE IF EXISTS `pelajar`;
CREATE TABLE `pelajar` (
  `NO_ID` int(12) NOT NULL,
  `Nama_pelajar` varchar(30) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `BM` varchar(1) NOT NULL,
  `GEO` varchar(10) NOT NULL,
  `SEJ` varchar(10) NOT NULL,
  `MAT` varchar(10) NOT NULL,
  `SNS` varchar(10) NOT NULL,
  `PJPK` varchar(10) NOT NULL,
  `PI` varchar(10) NOT NULL,
  `PM` varchar(10) NOT NULL,
  `BA` varchar(10) NOT NULL,
  `RBT` varchar(10) NOT NULL,
  `PSV` varchar(10) NOT NULL,
  `PULSE` varchar(10) NOT NULL,
  `ASK` varchar(10) NOT NULL,
  `PMZ` varchar(10) NOT NULL,
  `SEJAMBAK` varchar(10) NOT NULL,
  `KUINGIN` varchar(10) NOT NULL,
  `darahtitik` varchar(10) NOT NULL,
  `baikbudi` varchar(10) NOT NULL,
  `closeup` varchar(10) NOT NULL,
  `hempasan` varchar(10) NOT NULL,
  `bintanghati` varchar(10) NOT NULL,
  `fullblast` varchar(20) NOT NULL,
  `fizik` varchar(20) NOT NULL,
  `bio` varchar(20) NOT NULL,
  `kimia` varchar(20) NOT NULL,
  `addmath` varchar(20) NOT NULL,
  `rc` varchar(20) NOT NULL,
  `pertanian` varchar(20) NOT NULL,
  `ekonomi` varchar(11) NOT NULL,
  `tasawwur` varchar(11) NOT NULL,
  `sainssukan` varchar(11) NOT NULL,
  `disebalik` varchar(11) NOT NULL,
  `jaketkulit` varchar(11) NOT NULL,
  `download` varchar(11) NOT NULL,
  `silirdaksina` varchar(11) NOT NULL,
  `sejadahrindu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`NO_ID`, `Nama_pelajar`, `Kelas`, `BM`, `GEO`, `SEJ`, `MAT`, `SNS`, `PJPK`, `PI`, `PM`, `BA`, `RBT`, `PSV`, `PULSE`, `ASK`, `PMZ`, `SEJAMBAK`, `KUINGIN`, `darahtitik`, `baikbudi`, `closeup`, `hempasan`, `bintanghati`, `fullblast`, `fizik`, `bio`, `kimia`, `addmath`, `rc`, `pertanian`, `ekonomi`, `tasawwur`, `sainssukan`, `disebalik`, `jaketkulit`, `download`, `silirdaksina`, `sejadahrindu`) VALUES
(29, 'Marsha binti Suhaimi', '4B', '/', '/', '/', '/', '', '/', '/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '/', '/', '/', '/', '/', '', '', '', '', '', '/', '/', '', '', ''),
(33, 'Nurul Ain', '1A', '/', '/', '/', '/', '/', '/', '/', '', '/', '/', '/', '/', '', '', '/', '/', '', '', '/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'Mohamad Anas', '1B', '/', '/', '/', '/', '/', '/', '/', '', '', '', '', '/', '/', '/', '/', '/', '', '', '/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`NO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `NO_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
