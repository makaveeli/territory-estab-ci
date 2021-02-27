-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 08:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dim_cakupan_wilayah`
--

CREATE TABLE `dim_cakupan_wilayah` (
  `id_cakupan_wilayah` int(11) NOT NULL,
  `id_kec_baru` int(9) NOT NULL,
  `nama_wilayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dim_calon_kecamatan`
--

CREATE TABLE `dim_calon_kecamatan` (
  `id_kec_baru` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `nama_kec_induk` varchar(100) NOT NULL,
  `nama_calon_kec` varchar(100) NOT NULL,
  `tahun_terbentuk` varchar(5) NOT NULL,
  `luas_wilayah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `id_provinsi` int(9) NOT NULL,
  `id_kota` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_provinsi`, `id_kota`) VALUES
(15, 'Cengkareng', 16, 15),
(16, 'Grogol Petamburan', 16, 15),
(17, 'Taman Sari', 16, 15),
(18, 'Tambora', 16, 15),
(19, 'Kebon Jeruk', 16, 15),
(20, 'Kalideres', 16, 15),
(21, 'Pal Merah', 16, 15),
(22, 'Kembangan', 16, 15),
(23, 'Kepulauan Seribu Utata', 16, 22),
(24, 'Kepulauan Seribu Selatan', 16, 22),
(25, 'Gambir', 16, 16),
(26, 'Sawah Besar', 16, 16),
(27, 'Kemayoran', 16, 16),
(28, 'Senen', 16, 16),
(29, 'Cempaka Putih', 16, 16),
(30, 'Menteng', 16, 16),
(31, 'Tanah Abang', 16, 16),
(32, 'Johar Baru', 16, 16),
(37, 'Penjaringan', 16, 19),
(38, 'Tanjung Priok', 16, 19),
(39, 'Koja', 16, 19),
(40, 'Cilincing', 16, 19),
(41, 'Pademangan', 16, 19),
(42, 'Kelapa Gading', 16, 19),
(43, 'Tebet', 16, 17),
(44, 'Setiabudi', 16, 17),
(45, 'Mampang Perapatan', 16, 17),
(46, 'Pasar Minggu', 16, 17),
(47, 'Kebayoran Lama', 16, 17),
(48, 'Cilandak', 16, 17),
(49, 'Kebayoran Baru', 16, 17),
(50, 'Pancoran', 16, 17),
(51, 'Jagakarsa', 16, 17),
(52, 'Pesanggrahan', 16, 17),
(53, 'Matraman', 16, 18),
(54, 'Pulogadung', 16, 18),
(55, 'Jatinegara', 16, 18),
(56, 'Kramatjati', 16, 18),
(57, 'Pasar Rebo', 16, 18),
(58, 'Cakung', 16, 18),
(59, 'Duren Sawit', 16, 18),
(60, 'Makasar', 16, 18),
(61, 'Ciracas', 16, 18),
(62, 'Cipayung', 16, 18),
(63, 'Sungailiat', 12, 42),
(64, 'Belinyu', 12, 42),
(65, 'Merawang', 12, 42),
(66, 'Mendo Barat', 12, 42),
(67, 'Pemali', 12, 42),
(68, 'Bakam', 12, 42),
(69, 'Riau Silip', 12, 42),
(70, 'Puding Besar', 12, 42),
(71, 'Tanjung Pandan', 12, 43),
(72, 'Membalong', 12, 43),
(73, 'Selat Nasik', 12, 43),
(74, 'Badau', 12, 43),
(75, 'Sijuk', 12, 43),
(76, 'Toboali', 12, 44),
(77, 'Lepar Pongok', 12, 44),
(78, 'Air Gegas', 12, 44),
(79, 'Simpang Rimba', 12, 44),
(80, 'Payung', 12, 44),
(81, 'Tukak Sadai', 12, 44),
(82, 'Pulaubesar', 12, 44),
(83, 'Kepulauan Pongok', 12, 44),
(84, 'Koba', 12, 45),
(85, 'Pangkalan Baru', 12, 45),
(86, 'Sungai Selan', 12, 45),
(87, 'Simpang Katis', 12, 45),
(88, 'Namang', 12, 45),
(89, 'Lubuk Besar', 12, 45),
(90, 'Muntok', 12, 46),
(91, 'Simpang Teritip', 12, 46),
(92, 'J ebus', 12, 46),
(93, 'Kelapa', 12, 46),
(94, 'Tempilang', 12, 46),
(95, 'Parittiga', 12, 46),
(96, 'Manggar', 12, 47),
(97, 'Gantung', 12, 47),
(98, 'Dendang', 12, 47),
(99, 'Kelapa Kampit', 12, 47),
(100, 'Damar', 12, 47),
(101, 'Simpang Renggiang', 12, 47),
(102, 'Simpang Pesak', 12, 47),
(103, 'Bukitintan', 12, 48),
(104, 'Taman Sari', 12, 48),
(105, 'Pangkal Balam', 12, 48),
(106, 'Rangkul', 12, 48),
(107, 'Gerunggang', 12, 48),
(108, 'Girimaya', 12, 48),
(109, 'Gabek', 12, 48),
(110, 'Pancung Soal', 6, 23),
(111, 'Ranah Pesisir', 6, 23),
(112, 'Lengayang', 6, 23),
(113, 'Batang Kapas', 6, 23),
(114, 'IV J urai', 6, 23),
(115, 'Bakam', 6, 23),
(116, 'Bayang', 6, 23),
(117, 'Koto XI Tarusan', 6, 23),
(118, 'Sutera', 6, 23),
(119, 'Lingo Sari Baganti', 6, 23),
(120, 'Lunang', 6, 23),
(121, 'Basa Ampek Balai Tapan', 6, 23),
(122, 'IV  Nagari Bayang Utara', 6, 23),
(123, 'Airpura', 6, 23),
(124, 'Ranah Ampek  Hulu Tapan', 6, 23),
(125, 'Silaut', 6, 23),
(126, 'Pantai Cermin', 6, 24),
(127, 'Lembah Gumanti', 6, 24),
(128, 'Payung Sekaki', 6, 24),
(129, 'Lembang J aya', 6, 24),
(130, 'Gunung Talang', 6, 24),
(131, 'Bukit Sundi', 6, 24),
(132, ' IX  Koto Sungai Lasi', 6, 24),
(133, 'Kubung', 6, 24),
(134, ' X  Koto Singkarak', 6, 24),
(135, 'X  Koto Diatas', 6, 24),
(136, ' J unjung Sirih', 6, 24),
(137, 'Hiliran Gumanti', 6, 24),
(138, 'Tigo Lurah', 6, 24),
(139, 'Danau  Kembar', 6, 24),
(140, 'Tanjung Gadang', 6, 25),
(141, 'Sijunjung', 6, 25),
(142, 'IV  Nagari', 6, 25),
(143, 'Kamang Baru', 6, 25),
(144, 'Lubuak  Tarok', 6, 25),
(145, 'Koto VII', 6, 25),
(146, ' Sumpur Kudus', 6, 25),
(147, 'Kupitan', 6, 25),
(148, 'Lubuk  Alung', 6, 27),
(149, 'Batang Anai', 6, 27),
(150, 'Nan Sabaris', 6, 27),
(151, 'x 11 Enam Lingkuang', 6, 27),
(152, 'VII Koto Sungai Sarik', 6, 27),
(153, 'V  Koto Kampung Dalam', 6, 27),
(154, 'Sungai Garingging', 6, 27),
(155, 'Sungai Limau', 6, 27),
(156, 'IV  Koto Aur Malintang', 6, 27),
(157, 'Ulakan Tapakih', 6, 27),
(158, 'Sintuak  Toboh Gadang', 6, 27),
(159, 'Padang Sago', 6, 27),
(160, 'Batang Gasan', 6, 27),
(161, 'V  Koto Timur', 6, 27),
(162, '2 x 11 Kayu  Tanam', 6, 27),
(163, 'Patamuan', 6, 27),
(164, 'Enam Lingkung', 6, 27),
(165, 'X  Koto', 6, 26),
(166, 'Batipuh', 6, 26),
(167, 'Rambatan', 6, 26),
(168, 'Lima Kaum', 6, 26),
(169, 'Tanjung Emas', 6, 26),
(170, 'Lintau  Buo', 6, 26),
(171, ' Sungayang', 6, 26),
(172, 'Sungai Tarab', 6, 26),
(173, ' Pariangan', 6, 26),
(174, 'Salimpaung', 6, 26),
(175, 'Padang Ganting', 6, 26),
(176, 'Tanjuang Baru', 6, 26),
(177, 'Lintau  Buo Utara', 6, 26),
(178, 'Batipuah Selatan', 6, 26),
(179, 'Tanjung Mutiara', 6, 28),
(180, ' Lubuk  Basung', 6, 28),
(181, 'Tanjung Raya', 6, 28),
(182, 'Matur', 6, 28),
(183, 'IV  Koto', 6, 28),
(184, 'Banuhampu', 6, 28),
(185, 'Ampek  Angkek', 6, 28),
(186, 'Baso', 6, 28),
(187, 'Tilatang Kamang', 6, 28),
(188, 'Palupuh', 6, 28),
(189, 'Pelembayan', 6, 28),
(190, 'Sungai Pua', 6, 28),
(191, 'Ampek  Nagari', 6, 28),
(192, 'Candung', 6, 28),
(193, 'Kamang Magek', 6, 28),
(194, 'Malalak', 6, 28);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `jumlah_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `id_provinsi`, `jumlah_kecamatan`) VALUES
(15, 'KOTA JAKARTA BARAT', 16, 8),
(16, 'KOTA JAKARTA PUSAT', 16, 8),
(17, 'KOTA JAKARTA SELATAN', 16, 10),
(18, 'KOTA JAKARTA TIMUR', 16, 10),
(19, 'KOTA JAKARTA UTARA', 16, 6),
(22, 'KAB. KEP. SERIBU', 16, 2),
(23, 'KAB. PESISIR SELATAN', 6, 15),
(24, 'KAB. SOLOK', 6, 14),
(25, 'KAB. SIJUNJUNG', 6, 8),
(26, 'KAB. TANAH DATAR', 6, 14),
(27, 'KAB. PADANG PARIAMAN', 6, 17),
(28, 'KAB. AGAM', 6, 16),
(29, 'KAB. LIMA PULUH KOTA', 6, 13),
(30, 'KAB. PASAMAN', 6, 12),
(31, 'KAB. KEPULAUAN MENTAWAI', 6, 10),
(32, 'KAB. DHARMASRAYA', 6, 11),
(33, 'KAB. SOLOK SELATAN', 6, 7),
(34, 'KAB. PASAMAN BARAT', 6, 11),
(35, 'KOTA PADANG', 6, 11),
(36, 'KOTA SOLOK', 6, 2),
(37, 'KOTA SAWAHLUNTO', 6, 4),
(38, 'KOTA PADANG PANJANG', 6, 2),
(39, 'KOTA BUKITTINGGI', 6, 3),
(40, 'KOTA PAYAKUMBUH', 6, 5),
(41, 'KOTA PARIAMAN', 6, 4),
(42, 'KAB. BANGKA', 12, 8),
(43, 'KAB. BELITUNG', 12, 5),
(44, 'KAB. BANGKA SELATAN', 12, 8),
(45, 'KAB. BANGKA TENGAH', 12, 6),
(46, 'KAB. BANGKA BARAT', 12, 6),
(47, 'KOTA BELITUNG TIMUR', 12, 7),
(48, 'KOTA PANGKAL PINANG', 12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL,
  `flag` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `flag`) VALUES
(4, 'ACEH', 2),
(5, 'SUMATERA UTARA', 2),
(6, 'SUMATERA BARAT', 2),
(7, 'RIAU', 2),
(8, 'KEPULAUAN RIAU', 2),
(9, 'JAMBI', 2),
(10, 'BENGKULU', 2),
(11, 'SUMATERA SELATAN', 2),
(12, 'KEPULAUAN BANGKA BELITUNG', 0),
(13, 'LAMPUNG', 2),
(14, 'BANTEN', 1),
(15, 'JAWA BARAT', 1),
(16, 'DKI JAKARTA', 1),
(17, 'JAWA TENGAH', 1),
(18, 'YOGYAKARTA', 1),
(19, 'JAWA TIMUR', 1),
(20, 'BALI', 1),
(21, 'NTB', 0),
(22, 'NTT', 0),
(23, 'KALIMANTAN BARAT', 0),
(24, 'KALIMANTAN SELATAN', 0),
(25, 'KALIMANTAN TENGAH', 0),
(26, 'KALIMANTAN TIMUR', 0),
(27, 'KALIMANTAN UTARA', 0),
(28, 'GORONTALO', 2),
(29, 'SULAWESI BARAT', 2),
(30, 'SULAWESI SELATAN', 2),
(31, 'SULAWESI TENGAH', 2),
(32, 'SULAWESI TENGGARA', 2),
(33, 'SULAWESI UTARA', 2),
(34, 'MALUKU', 0),
(35, 'MALUKU UTARA', 0),
(36, 'PAPUA BARAT', 0),
(37, 'PAPUA', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dim_cakupan_wilayah`
--
ALTER TABLE `dim_cakupan_wilayah`
  ADD PRIMARY KEY (`id_cakupan_wilayah`);

--
-- Indexes for table `dim_calon_kecamatan`
--
ALTER TABLE `dim_calon_kecamatan`
  ADD PRIMARY KEY (`id_kec_baru`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `provinsi_pk` (`id_provinsi`),
  ADD KEY `kota_pk` (`id_kota`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `kota_cs` (`id_provinsi`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dim_cakupan_wilayah`
--
ALTER TABLE `dim_cakupan_wilayah`
  MODIFY `id_cakupan_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dim_calon_kecamatan`
--
ALTER TABLE `dim_calon_kecamatan`
  MODIFY `id_kec_baru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
