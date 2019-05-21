-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sablon`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `produkbj` (IN `idpdk` INT)  NO SQL
BEGIN
select * from produk
WHERE idproduk=idpdk;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `bajusmpk50k` () RETURNS INT(11) NO SQL
return (select count(*) from produk where harga <50000)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `iddesign` int(5) NOT NULL,
  `gambardesign` varchar(200) NOT NULL,
  `hargadesign` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailpesan`
--

CREATE TABLE `detailpesan` (
  `iddetailpesan` int(5) NOT NULL,
  `iduser` int(5) NOT NULL,
  `idpesan` int(5) NOT NULL,
  `idproduk` int(5) NOT NULL,
  `iddesign` int(5) NOT NULL,
  `kuantiti` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfmasi`
--

CREATE TABLE `konfmasi` (
  `idkonfirmasi` int(5) NOT NULL,
  `idpesan` int(5) NOT NULL,
  `namabank` varchar(15) NOT NULL,
  `norekening` int(20) NOT NULL,
  `namarekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemesan`
-- (See below for the actual view)
--
CREATE TABLE `pemesan` (
`nama` varchar(200)
,`telp` varchar(12)
,`iddetailpesan` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(5) NOT NULL,
  `tglpesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(5) NOT NULL,
  `namaproduk` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `warna`, `gambar`, `harga`) VALUES
(1, 'kaos', 'merah', '', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `pemesan`
--
DROP TABLE IF EXISTS `pemesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemesan`  AS  select `user`.`nama` AS `nama`,`user`.`telp` AS `telp`,`detailpesan`.`iddetailpesan` AS `iddetailpesan` from (`user` join `detailpesan` on((`user`.`iduser` = `detailpesan`.`iduser`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`iddesign`);

--
-- Indexes for table `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD PRIMARY KEY (`iddetailpesan`);

--
-- Indexes for table `konfmasi`
--
ALTER TABLE `konfmasi`
  ADD PRIMARY KEY (`idkonfirmasi`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `iduser` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `iddesign` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfmasi`
--
ALTER TABLE `konfmasi`
  MODIFY `idkonfirmasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
