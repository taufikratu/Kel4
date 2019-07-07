-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2019 pada 15.52
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

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
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `produkbj` (IN `idpdk` INT)  NO SQL
BEGIN
select * from produk
WHERE idproduk=idpdk;
END$$

--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `bajusmpk50k` () RETURNS INT(11) NO SQL
return (select count(*) from produk where harga <50000)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bajupolos`
--

CREATE TABLE `bajupolos` (
  `idbajupolos` int(5) NOT NULL,
  `namabaju` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `hargas` int(15) DEFAULT NULL,
  `hargam` int(15) DEFAULT NULL,
  `hargal` int(15) DEFAULT NULL,
  `hargaxl` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bajupolos`
--

INSERT INTO `bajupolos` (`idbajupolos`, `namabaju`, `deskripsi`, `tipe`, `gambar`, `hargas`, `hargam`, `hargal`, `hargaxl`) VALUES
(2, '63000 Gildan Softstyle', 'Gildan merupakan salah satu perusahaan clothing internasional yang berkantor di Canada. Kaos yang diproduksi Gildan sudah tidak perlu diragukan lagi kualitasnya. Setiap kaos yang diproduksi oleh Gildan telah melewati tahap-tahap Quality Control yang sangat ketat.', 'Kaos', 'gildan-white.jpg', 30000, 30000, 30000, 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bajuproduk`
--

CREATE TABLE `bajuproduk` (
  `idbajuproduk` int(5) NOT NULL,
  `namabaju` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `hargas` int(15) DEFAULT NULL,
  `hargam` int(15) DEFAULT NULL,
  `hargal` int(15) DEFAULT NULL,
  `hargaxl` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bajuproduk`
--

INSERT INTO `bajuproduk` (`idbajuproduk`, `namabaju`, `deskripsi`, `tipe`, `gambar`, `hargas`, `hargam`, `hargal`, `hargaxl`) VALUES
(3, 'Kaos Indonesian Judo', 'T-Shirt Gildan Soft Style dibuat tanpa jahitan samping (built-up), menggunakan 100?han cotton dengan jahitan yang rapi, standar ketebalan yang diukur tepat serta pewarnaan dengan kualitas yang prima sehingga warna dari waktu ke waktu tetap sama. Setiap produk melewati proses preshrunk sehingga penyusutan setelah pencucian sangat minimal dibandingkan dengan jenis kaos lainnya.', 'Kaos', 'judo.jpg', 97000, 97000, 97000, 103000),
(4, 'Kaos PAC MAN', 'T-Shirt Gildan Soft Style dibuat tanpa jahitan samping (built-up), menggunakan 100?han cotton dengan jahitan yang rapi, standar ketebalan yang diukur tepat serta pewarnaan dengan kualitas yang prima sehingga warna dari waktu ke waktu tetap sama. Setiap produk melewati proses preshrunk sehingga penyusutan setelah pencucian sangat minimal dibandingkan dengan jenis kaos lainnya.\r\n', 'Kaos', 'pacman.jpg', 102000, 102000, 102000, 107000),
(5, 'Kaos Anak Beruang Ngopi', 'T-Shirt Gildan Soft Style dibuat tanpa jahitan samping (built-up), menggunakan 100?han cotton dengan jahitan yang rapi, standar ketebalan yang diukur tepat serta pewarnaan dengan kualitas yang prima sehingga warna dari waktu ke waktu tetap sama. Setiap produk melewati proses preshrunk sehingga penyusutan setelah pencucian sangat minimal dibandingkan dengan jenis kaos lainnya.', 'Kaos', 'ngopi.jpg', 127000, 127000, 127000, 133000),
(6, 'Kaos Fight Gear', 'T-Shirt Gildan Soft Style dibuat tanpa jahitan samping (built-up), menggunakan 100?han cotton dengan jahitan yang rapi, standar ketebalan yang diukur tepat serta pewarnaan dengan kualitas yang prima sehingga warna dari waktu ke waktu tetap sama. Setiap produk melewati proses preshrunk sehingga penyusutan setelah pencucian sangat minimal dibandingkan dengan jenis kaos lainnya.', 'Kaos', 'fight.jpg', 101000, 101000, 101000, 106000),
(7, 'Kaos Martial Arts Kick', 'T-Shirt Gildan Soft Style dibuat tanpa jahitan samping (built-up), menggunakan 100?han cotton dengan jahitan yang rapi, standar ketebalan yang diukur tepat serta pewarnaan dengan kualitas yang prima sehingga warna dari waktu ke waktu tetap sama. Setiap produk melewati proses preshrunk sehingga penyusutan setelah pencucian sangat minimal dibandingkan dengan jenis kaos lainnya.\r\n', 'Kaos', 'arts.jpg', 107000, 107000, 107000, 113000),
(8, 'Jaket Hoodie PECINTA GORENGAN', 'Hoodie tanpa resleting yang terbuat dari bahan Katun Baby Terry, Premium Quality. Hoodie diproduksi dengan standar dan quality control sangat ketat, setara dengan produk-produk yang ditawarkan di distro-distro terkenal di Bandung.', 'Jaket', 'jaketgoreng.jpg', 153000, 153000, 153000, 158000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customproduk`
--

CREATE TABLE `customproduk` (
  `idcustomproduk` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `ukuran` varchar(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `gambarcustomdepan` varchar(100) NOT NULL,
  `gambarcustombelakang` varchar(100) NOT NULL,
  `hargadesigndepan` int(20) NOT NULL,
  `hargadesignbelakang` int(20) NOT NULL,
  `ukurandesign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpesan`
--

CREATE TABLE `detailpesan` (
  `iddetailpesan` int(5) NOT NULL,
  `iduser` int(5) NOT NULL,
  `idcustomproduk` int(11) NOT NULL,
  `idproduk` int(5) NOT NULL,
  `gambardesigndepan` varchar(50) NOT NULL,
  `gambardesignbelakang` varchar(50) NOT NULL,
  `kuantiti` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `harga` int(15) NOT NULL,
  `tglpesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfmasi`
--

CREATE TABLE `konfmasi` (
  `idkonfirmasi` int(5) NOT NULL,
  `iddetailpesan` int(5) NOT NULL,
  `namabank` varchar(15) NOT NULL,
  `norekening` int(20) NOT NULL,
  `namarekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `pemesan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `pemesan` (
`nama` varchar(200)
,`telp` varchar(12)
,`iddetailpesan` int(5)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(5) NOT NULL,
  `namaproduk` varchar(25) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `gambardepan` varchar(100) NOT NULL,
  `gambarbelakang` varchar(100) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses`
--

CREATE TABLE `proses` (
  `idproses` int(5) NOT NULL,
  `iddetailpesan` int(5) NOT NULL,
  `tglselesai` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `nama`, `telp`, `pertanyaan`, `jawaban`) VALUES
(1, 'rahmantaufikur10@gmail.com', '12345', 'taufik', '081216142451', 'Apa nama hewan peliharaan anda?', 'asu');

-- --------------------------------------------------------

--
-- Struktur untuk view `pemesan`
--
DROP TABLE IF EXISTS `pemesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemesan`  AS  select `user`.`nama` AS `nama`,`user`.`telp` AS `telp`,`detailpesan`.`iddetailpesan` AS `iddetailpesan` from (`user` join `detailpesan` on((`user`.`iduser` = `detailpesan`.`iduser`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `bajupolos`
--
ALTER TABLE `bajupolos`
  ADD PRIMARY KEY (`idbajupolos`);

--
-- Indeks untuk tabel `bajuproduk`
--
ALTER TABLE `bajuproduk`
  ADD PRIMARY KEY (`idbajuproduk`);

--
-- Indeks untuk tabel `customproduk`
--
ALTER TABLE `customproduk`
  ADD PRIMARY KEY (`idcustomproduk`);

--
-- Indeks untuk tabel `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD PRIMARY KEY (`iddetailpesan`);

--
-- Indeks untuk tabel `konfmasi`
--
ALTER TABLE `konfmasi`
  ADD PRIMARY KEY (`idkonfirmasi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`idproses`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `iduser` (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bajupolos`
--
ALTER TABLE `bajupolos`
  MODIFY `idbajupolos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bajuproduk`
--
ALTER TABLE `bajuproduk`
  MODIFY `idbajuproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `customproduk`
--
ALTER TABLE `customproduk`
  MODIFY `idcustomproduk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfmasi`
--
ALTER TABLE `konfmasi`
  MODIFY `idkonfirmasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `proses`
--
ALTER TABLE `proses`
  MODIFY `idproses` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
