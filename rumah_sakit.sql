-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 09:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jenis_pelayanan` varchar(50) DEFAULT NULL,
  `acception` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tanggal_booking`, `jenis_pelayanan`, `acception`) VALUES
(1, 'Franky Napitupulu', '2017-12-14', 'Karang Gigi', 0),
(2, 'Bayu Prasetyo', '2017-12-22', 'Pasang Behel', NULL),
(3, 'Devi Pakpahan', '2017-12-23', '               Cabut Gigi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `username` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `karang` int(3) NOT NULL,
  `cabut` int(3) NOT NULL,
  `tambal` int(3) NOT NULL,
  `pemasangan` int(3) NOT NULL,
  `harga` int(16) NOT NULL,
  `id` int(6) NOT NULL,
  `no` int(11) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`username`, `tanggal`, `karang`, `cabut`, `tambal`, `pemasangan`, `harga`, `id`, `no`, `jam`) VALUES
('bungkam', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 87, '00:00:00'),
('bungkam', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 88, '00:00:00'),
('bungkam', '2018-01-11', 1, 0, 0, 0, 250000, 1003, 89, '00:00:00'),
('bungkam', '2018-01-11', 1, 0, 0, 0, 250000, 1002, 90, '00:00:00'),
('lalaposa', '2018-01-12', 1, 0, 0, 0, 250000, 1003, 91, '00:00:00'),
('jaidi', '2018-01-11', 1, 0, 0, 0, 250000, 1003, 92, '00:00:00'),
('kasang', '2018-01-11', 1, 0, 0, 0, 250000, 1003, 93, '00:00:00'),
('bungkam', '2018-01-11', 1, 0, 0, 0, 250000, 1003, 94, '00:00:00'),
('martin', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 95, '00:00:00'),
('ifs15023', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 105, '07:50:00'),
('Dr.Ruins Leon', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 106, '07:50:00'),
('admin', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 107, '07:50:00'),
('bayu', '2018-01-18', 1, 0, 0, 0, 250000, 1003, 108, '07:50:00'),
('ifs15023', '2018-01-12', 1, 0, 0, 0, 250000, 1003, 109, '07:00:00'),
('Dr.Ruins Leon', '2018-01-17', 1, 0, 0, 0, 250000, 1002, 110, '13:10:00'),
('Dr.Ruins Leon', '2018-01-18', 1, 1, 1, 1, 1000000, 1002, 111, '14:30:00'),
('admin', '2018-01-17', 0, 1, 1, 0, 550000, 1002, 112, '22:10:00'),
('Lohot', '2018-01-17', 1, 0, 0, 1, 550000, 1002, 113, '12:20:00'),
('Boda', '2018-01-18', 1, 0, 1, 0, 500000, 1003, 114, '07:30:00'),
('Lohot', '2018-01-18', 1, 0, 0, 0, 250000, 1003, 115, '13:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_user` int(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jadwal_praktik` varchar(50) NOT NULL,
  `alamat_dokter` varchar(30) NOT NULL,
  `pendidikan_dokter` varchar(30) NOT NULL,
  `biografi_dokter` varchar(200) NOT NULL,
  `pesan` int(8) NOT NULL,
  `hari1` varchar(15) NOT NULL,
  `hari2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_user`, `nama_dokter`, `departemen`, `jadwal_praktik`, `alamat_dokter`, `pendidikan_dokter`, `biografi_dokter`, `pesan`, `hari1`, `hari2`) VALUES
(1001, 'Irsyad Muhammad', 'Umum', 'Senin - Kamis | 08.00 - 15.00', 'Pangaribuan', 'S1 FK UI', 'Lulus dengan IPK memuaskan', 7, 'Senin', 'Rabu'),
(1002, 'Pranata Audy', 'Gigi', 'Senin - Kamis | 08.00 - 15.00', 'Medan', 'S1 FK USU', 'Pernah bekerja di rumah sakit Adam Malik', 6, 'Rabu', 'Kamis'),
(1003, 'Jaidi', 'Anak', 'Senin - Kamis | 08.00 - 15.00', 'Medan', 'S1 FK USU', 'Pernah bekerja di rumah sakit Adam Malik', 3, 'Kamis', 'Jumat'),
(1004, 'Anugrah Pratama', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00', 'Jakarta', 'S1 FK UI', 'Pernah bekerja di rumah sakit Adam Malik, Medan ', 0, '', ''),
(1005, 'Dendi Abdul Rohim', 'THT', 'Senin - Kamis | 08.00 - 15.00', 'Bandung', 'S1 FK UNDIP', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1006, 'Kurniawan Aditya', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00', 'Tangerang', 'S1 FK USU', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1007, 'Arifin Muhammad', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00', 'Bandung', 'S1 FK UB', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1008, 'Gyats Haitsam', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00', 'Siantar', 'S1 FK USU', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1009, 'Dono Aditia', 'THT', 'Senin - Kamis | 08.00 - 15.00', 'Medan', 'S1 FK UI', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1010, 'Zeffry Irwanto', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00', 'Jakarta', 'S1 FK UI', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1011, 'Gustian M, dr', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00', 'Bandung', 'S1 FK UB', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1012, 'Septianti Amalia, S.PSi', 'Umum', 'Senin - Kamis | 08.00 - 15.00', 'Solo', 'S1 FK UI', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1013, 'Setyaningsih D, dr.SpA', 'Anak', 'Senin - Kamis | 08.00 - 15.00', 'Palembang', 'S1 FK UNDIP', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1014, 'Bayu, H.dr.SpB', 'Umum', 'Senin - Kamis | 08.00 - 15.00', 'Medan', 'S1 FK USU', 'Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', ''),
(1015, 'depak', 'umum', 'Senin - Kamis | 08.00 - 15.00', 'Tarutung', 'S1 FK UI', 'Lulus dengan IPK memuaskan dan Pernah bekerja di rumah sakit Adam Malik, Medan', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES
(11, 'Muhammad Ilyas Firdaus', 'alam kubur', 'P', '081264162'),
(16, 'Raffi Ahmad', 'Jonggol', 'L', '08126252153'),
(17, 'Kevin Julio', 'Cimahi', 'P', '08172352412'),
(18, 'Chelsea Islan', 'Jakarta', 'P', '082416242'),
(19, 'Raisa Ardiana', 'Sukabumi', 'P', '0212312415'),
(20, 'Tina Toon', 'Banyuwangi', 'P', '08098999'),
(21, 'Joshua', 'Surabaya', 'L', '08123122353'),
(22, 'Risa Tachibana', 'Jampang', 'P', '08124124412'),
(23, 'Sarah Ardelia', 'Bogor', 'P', '0812524124'),
(24, 'Jessica Mila', 'Madiun', 'P', '08235141212'),
(25, 'Ricky Harun', 'Lampung', 'L', '08235235235'),
(26, 'Alex', 'Medan', 'L', '12345678'),
(27, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pri`
--

CREATE TABLE `tbl_pri` (
  `no_ri` int(8) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `id_ruang` int(3) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `hari_menginap` int(3) NOT NULL,
  `diagnosa` text NOT NULL,
  `biaya` int(12) NOT NULL,
  `bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pri`
--

INSERT INTO `tbl_pri` (`no_ri`, `id_pasien`, `id_ruang`, `tanggal_checkin`, `tanggal_checkout`, `hari_menginap`, `diagnosa`, `biaya`, `bayar`) VALUES
(25, 19, 105, '2014-12-04', '2014-12-11', 7, 'asdasd', 2275000, 2275000),
(28, 16, 111, '2014-12-05', '2014-12-12', 7, 'ASDASDASD', 1519000, 0),
(29, 18, 111, '2014-12-12', '2014-12-16', 4, 'SDASDASD', 868000, 0),
(30, 16, 105, '2014-12-04', '2014-12-17', 13, 'ASDASDASD', 4225000, 4225000),
(31, 16, 111, '2014-12-11', '2014-12-17', 6, 'asdasd', 1302000, 0),
(32, 16, 111, '2014-12-11', '2014-12-17', 6, 'asdasd', 1302000, 0),
(33, 16, 111, '2014-12-11', '2014-12-17', 6, 'asdasd', 1302000, 23232323),
(34, 18, 107, '2014-12-04', '2014-12-17', 13, 'asdasd', 1911000, 4234),
(35, 16, 108, '2014-12-03', '2014-12-19', 16, 'asdasd', 1920000, 123123123),
(36, 20, 106, '2014-12-02', '2014-12-25', 23, 'asdasdasdasdasd', 4600000, 45645745),
(37, 19, 101, '2014-12-10', '2014-12-17', 7, 'gsfg', 2625000, 5345),
(38, 19, 0, '2014-12-10', '2017-12-17', 1103, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prj`
--

CREATE TABLE `tbl_prj` (
  `no_rj` int(8) NOT NULL,
  `id_dokter` varchar(5) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `biaya` int(10) NOT NULL,
  `bayar` int(12) DEFAULT NULL,
  `tindakan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prj`
--

INSERT INTO `tbl_prj` (`no_rj`, `id_dokter`, `id_pasien`, `departemen`, `tanggal`, `keluhan`, `diagnosa`, `biaya`, `bayar`, `tindakan`) VALUES
(14, '1004', 19, 'Kandungan', '2014-12-05 03:54:46', 'Mual-mual', ' aasasfsdfsdfsdf\r\nsdf\r\nsdf\r\nasdf\r\nasdf\r\n  ', 200000, 200000, 'Rawat Inap'),
(15, '', 21, 'Syaraf', '2014-12-06 01:30:30', 'sasdfasdg', NULL, 180000, 34534535, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id_resep` int(9) NOT NULL,
  `id_dokter` int(8) NOT NULL,
  `id_pasien` varchar(2) NOT NULL,
  `nama_resep` varchar(50) NOT NULL,
  `rincian_resep` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resep`
--

INSERT INTO `tbl_resep` (`id_resep`, `id_dokter`, `id_pasien`, `nama_resep`, `rincian_resep`, `tanggal`) VALUES
(1, 1004, '16', 'asdasdasd ', 'asdasdasd \r\nfgdsfgsdf\r\ngsdfg\r\nsdfg\r\nsdfg\r\ndsfg\r\nsdfg\r\nsdfg\r\ndsfg\r\ndsfg', '2014-12-05 08:19:00'),
(5, 1004, '17', 'aaaa', 'aaaaa\r\ndasdasd f\r\nas fs\r\nadfasdfasdf sadf\r\nasdf\r\nasdf\r\nasd fasdfasdf asdfasdf', '2014-12-05 18:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif_ri`
--

CREATE TABLE `tbl_tarif_ri` (
  `id_tarif_ri` int(4) NOT NULL,
  `perawatan` varchar(20) NOT NULL,
  `pelayanan` varchar(30) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `tarif` int(8) NOT NULL,
  `kapasitas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tarif_ri`
--

INSERT INTO `tbl_tarif_ri` (`id_tarif_ri`, `perawatan`, `pelayanan`, `tipe_kamar`, `tarif`, `kapasitas`) VALUES
(101, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas VIP', 375000, 1),
(102, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas I', 220000, 2),
(103, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas II', 153000, 3),
(104, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas III', 130000, 6),
(105, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas VIP', 325000, 1),
(106, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas I', 200000, 2),
(107, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas II', 147000, 3),
(108, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas III', 120000, 6),
(109, 'Ruang ICU', 'Dokter Spesials dan Umum', '', 200000, 2),
(110, 'Ruang ICU', 'Dokter Umum', '', 180000, 2),
(111, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas I', 217000, 2),
(112, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas II', 170000, 3),
(113, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas III', 136000, 6),
(114, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas VIP', 225000, 1),
(115, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas I', 192000, 2),
(116, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas II', 130000, 3),
(117, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas III', 130000, 6),
(118, 'Perinatologi', 'Dokter Umum', 'Kelas VIP', 200000, 1),
(119, 'Perinatologi', 'Dokter Umum', 'Kelas I', 172000, 2),
(120, 'Perinatologi', 'Dokter Umum', 'Kelas II', 130000, 3),
(121, 'Perinatologi', 'Dokter Umum', 'Kelas III', 120000, 6),
(122, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas VIP', 120000, 1),
(123, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas I', 100000, 2),
(124, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas II', 70000, 3),
(125, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas III', 30000, 6),
(126, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas VIP', 560000, 1),
(127, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas I', 470000, 2),
(128, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas II', 330000, 3),
(129, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas III', 270000, 6),
(130, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas VIP', 350000, 1),
(131, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas I', 300000, 2),
(132, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas II', 220000, 3),
(133, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas III', 190000, 6),
(134, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas VIP', 930000, 1),
(135, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas I', 750000, 2),
(136, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas II', 540000, 3),
(137, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas III', 470000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif_rj`
--

CREATE TABLE `tbl_tarif_rj` (
  `id_tarif_rj` int(3) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `tarif` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tarif_rj`
--

INSERT INTO `tbl_tarif_rj` (`id_tarif_rj`, `departemen`, `tarif`) VALUES
(5, 'Umum', 150000),
(6, 'Gigi', 160000),
(7, 'Anak', 180000),
(8, 'Kandungan', 200000),
(9, 'THT', 150000),
(10, 'Syaraf', 180000),
(11, 'Kulit dan Kelamin', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `grup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`, `hak_akses`, `grup`) VALUES
(2, 'ahmad', 'ahmad', 0, 'Departemen', 'Kandungan'),
(3, 'dendi', 'dendi', 0, 'Front Office', ''),
(5, 'tht', 'tht', 0, 'Departemen', 'THT'),
(6, 'umum', 'umum', 0, 'Departemen', 'Umum'),
(1001, 'irsyad', 'irsyad', 0, 'Dokter', 'Irsyad Muhammad, dr'),
(1002, 'vaksi', 'vaksi', 0, 'Dokter', 'Pranata Audy, dr.SpB'),
(1003, 'rafdi', 'rafdi', 0, 'Dokter', 'Jaidi, dr.SpA'),
(1004, 'adit', 'adit', 0, 'Dokter', 'Anugrah Pratama, dr.SpPD'),
(1007, 'ipin', 'ipin', 0, 'Dokter', 'Arifin Muhammad, dr.SpS.Mkes'),
(1010, 'zeffry', 'zeffry', 0, 'Dokter', 'Zeffry Irwanto, dr.SpM'),
(1011, 'kulitkelamin', 'kulitkelamin', 0, 'Departemen', 'Kulit dan Kelamin'),
(1012, 'syaraf', 'syaraf', 0, 'Departemen', 'Syaraf'),
(1013, 'gigi', 'gigi', 0, 'Departemen', 'Gigi'),
(1014, 'anak', 'anak', 0, 'Departemen', 'Anak'),
(1015, 'kandungan', 'kandungan', 0, 'Departemen', 'Kandungan'),
(1016, 'kandungan', 'kandungan', 0, 'Departemen', 'Kandungan'),
(2000, 'devi', ' devi', 0, 'Front Office', 'kandungan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pri`
--
ALTER TABLE `tbl_pri`
  ADD PRIMARY KEY (`no_ri`);

--
-- Indexes for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  ADD PRIMARY KEY (`no_rj`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `tbl_tarif_ri`
--
ALTER TABLE `tbl_tarif_ri`
  ADD PRIMARY KEY (`id_tarif_ri`);

--
-- Indexes for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
  ADD PRIMARY KEY (`id_tarif_rj`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_pri`
--
ALTER TABLE `tbl_pri`
  MODIFY `no_ri` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  MODIFY `no_rj` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id_resep` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_tarif_ri`
--
ALTER TABLE `tbl_tarif_ri`
  MODIFY `id_tarif_ri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
  MODIFY `id_tarif_rj` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  ADD CONSTRAINT `tbl_prj_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
