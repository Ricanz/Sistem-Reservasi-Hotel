-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 08:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_fasilitas`
--

CREATE TABLE `detail_fasilitas` (
  `detail_fasilitas_id` int(11) NOT NULL,
  `jenis_kamar_id` int(11) DEFAULT NULL,
  `fasilitas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `detail_reservasi_id` int(11) NOT NULL,
  `jenis_kamar_id` int(11) DEFAULT NULL,
  `reservasi_id` int(11) DEFAULT NULL,
  `jumlah_tempat_tidur` int(11) DEFAULT NULL,
  `jumlah_kamar` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `status_reservasi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `display_pict`
--

CREATE TABLE `display_pict` (
  `display_pict_id` int(11) NOT NULL,
  `display_pict` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `nama_fasilitas` varchar(30) DEFAULT NULL,
  `jumlah_tersedia_fasilitas` int(11) DEFAULT NULL,
  `harga_fasilitas` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`fasilitas_id`, `nama_fasilitas`, `jumlah_tersedia_fasilitas`, `harga_fasilitas`) VALUES
(1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `jenis_kamar_id` int(11) NOT NULL,
  `jenis_kamar` varchar(20) DEFAULT NULL,
  `kode_jenis_kamar` varchar(2) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `deskripsi_kamar` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tempat_tidur_id` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`jenis_kamar_id`, `jenis_kamar`, `kode_jenis_kamar`, `kapasitas`, `deskripsi_kamar`, `foto`, `total`, `tempat_tidur_id`, `harga`) VALUES
(1, 'Superior', 'SP', 5, '                                                                                        - Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n                                                                                        ', 'superior.jpeg', 22, 1, 120000),
(2, 'Executive Deluxe', 'ED', 2, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'executive-deluxe.jpg', 18, 2, 300000),
(3, 'Double Deluxe', 'DD', 2, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'double-deluxe.jpg', 30, 3, 23000),
(4, 'Junior Suite', 'JS', 1, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'junior-suite.jpg', 26, 4, 234000),
(12, 'Kamar 4', '12', 12, '', 'WhatsApp Image 2021-11-17 at 9.13.55 AM.jpeg', 32, 2, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tamu`
--

CREATE TABLE `jenis_tamu` (
  `jenid_tamu_id` int(11) NOT NULL,
  `jenis_tamu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `kamar_id` int(11) NOT NULL,
  `jenis_kamar_id` int(11) DEFAULT NULL,
  `tempat_tidur_id` int(11) DEFAULT NULL,
  `no_kamar` varchar(6) DEFAULT NULL,
  `lantai` int(3) DEFAULT NULL,
  `bebas_rokok` varchar(10) DEFAULT NULL,
  `status_kamar` varchar(20) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kamar_id`, `jenis_kamar_id`, `tempat_tidur_id`, `no_kamar`, `lantai`, `bebas_rokok`, `status_kamar`, `harga`) VALUES
(25, 2, 2, '7000', 2, '0', 'available', 300000),
(40, 2, 2, '223', 1, '1', 'tersedia', 300000),
(41, 2, 2, '223', 1, '1', 'tersedia', 300000),
(42, 2, 2, '234', 2, '1', 'tersedia', 300000),
(43, 2, 2, '234', 2, '1', 'tersedia', 300000),
(44, 2, 2, '123', 233, '0', 'tersedia', 300000),
(45, 2, 2, '123', 233, '0', 'tersedia', 300000),
(47, 2, 2, '2000', 2, '0', 'tersedia', 300000),
(48, 2, 2, '234', 2, '0', 'tersedia', 300000),
(49, 2, 2, '111', 1, '0', 'tersedia', 300000),
(51, 2, 2, '444', 4, '0', 'tersedia', 300000),
(53, 1, 3, '568', 5, '0', 'tersedia', 120000),
(54, 2, 2, '1000', 10, '1', 'tersedia', NULL),
(55, 2, 3, '123', 2, '1', 'tersedia', 300000),
(56, 2, 4, '123', 34, '0', 'tidak tersedia', 300000),
(57, 2, 4, '450', 4, '0', 'tersedia', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `email_pegawai` varchar(100) DEFAULT NULL,
  `username_peg` varchar(20) DEFAULT NULL,
  `password_peg` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `role_id`, `nama_pegawai`, `email_pegawai`, `username_peg`, `password_peg`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 2, 'manager', 'manager@gmail.com', 'manager', 'manager'),
(3, 3, 'staff', 'staff@gmail.com', 'staff', 'staff'),
(4, 4, 'user', 'user@gmail.com', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `no_identitas` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `orang` int(3) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `kamar_id` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jenkel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_pelanggan`, `no_identitas`, `no_hp`, `alamat`, `email`, `orang`, `status`, `kamar_id`, `tgl_masuk`, `tgl_keluar`, `harga`, `jenkel`) VALUES
(2, 'Sayang kamu coba', '12345678', '12345678', 'Jl. Menari Bersama', 'riyanti@gmail.com', 3, '0', 53, '2021-11-20', '2021-11-23', 120000, 'Cewe'),
(6, 'tamu', '6256', '67535', '3ty36', 'hu@gmail.com', 23, '1', 48, '2021-11-20', '2021-11-23', 300000, 'Cowo'),
(7, 'Riyanti', '7635', '27665', 'pelanggan', 'riyanti@gmail.com', 23, '0', 53, '2021-11-20', '2021-11-22', 120000, 'Cewe'),
(9, 'Saefudin', '7524267', '765456', 'Jl. BRI Radio Dalam', 'saefudin@gmail.com', 2, '1', 55, '2021-11-20', '2021-11-22', 300000, 'Cowo'),
(10, 'Hamin', '896745', '632536', 'H. Zainudin', 'hakim@gmail.com', 2, '0', 56, '2021-11-18', '2021-11-20', 300000, 'Cowo');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nomor_nota` varchar(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `jenis_kamar_id` int(11) DEFAULT NULL,
  `total_awal` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `total_akhir` double DEFAULT NULL,
  `bayar` double DEFAULT NULL,
  `kembalian` double DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `pelanggan_id`, `user_id`, `nomor_nota`, `hari`, `jenis_kamar_id`, `total_awal`, `pajak`, `total_akhir`, `bayar`, `kembalian`, `tgl_bayar`) VALUES
(1, 2, 3, '231412', 20211120, NULL, 35235, 234, 324, 323, 32423, '2021-11-20'),
(2, 2, 1, '123', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 1, '12344', 2, 49, 600000, 60000, 660000, 4560000, 390000, '2021-11-20'),
(12, 2, 1, '12344', 2, 49, 600000, 60000, 660000, 4560000, 3900000, '2021-11-20'),
(16, 6, 1, '3566', 3, 48, 900000, 90000, 990000, 1000000, 10000, '2021-11-20'),
(18, 9, 1, '56ty62', 2, 55, 600000, 60000, 660000, 700000, 40000, '2021-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_fasilitas`
--

CREATE TABLE `pemesanan_fasilitas` (
  `pemesanan_fasilitas_id` int(11) NOT NULL,
  `pembayaran_id` int(11) DEFAULT NULL,
  `fasilitas_id` int(11) DEFAULT NULL,
  `jumlah_pemesanan` int(11) DEFAULT NULL,
  `tgl_pemakaian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `reservasi_id` int(11) NOT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `jenis_tamu_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  `nomor_reservasi` varchar(11) DEFAULT NULL,
  `tgl_reservasi` date DEFAULT NULL,
  `tgl_checking` date DEFAULT NULL,
  `tgl_checkout` date DEFAULT NULL,
  `total_dewasa` int(11) DEFAULT NULL,
  `total_anak` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `jaminan` double DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'staff'),
(4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `tarif_id` int(11) NOT NULL,
  `jenis_kamar_id` int(11) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  `tempat_tidur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`tarif_id`, `jenis_kamar_id`, `tarif`, `tempat_tidur_id`) VALUES
(1, 1, 10000, 2),
(2, 2, 3350000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidur`
--

CREATE TABLE `tempat_tidur` (
  `tempat_tidur_id` int(11) NOT NULL,
  `jenis_tempat_tidur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_tidur`
--

INSERT INTO `tempat_tidur` (`tempat_tidur_id`, `jenis_tempat_tidur`) VALUES
(1, 'Double'),
(2, 'Twin'),
(3, 'King'),
(4, 'Single'),
(7, 'Sizes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role` enum('admin','manager','staff') DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `no_ktp` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role`, `nama`, `email`, `username`, `password`, `no_ktp`, `no_hp`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '1234', '1234'),
(2, 'manager', 'manager', 'manager@gmail.com', 'manager', 'manager', '1234', '1234'),
(3, 'staff', 'staff', 'staff@gmail.com', 'staff', 'staff', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD PRIMARY KEY (`detail_fasilitas_id`),
  ADD KEY `jenis_kamar_id` (`jenis_kamar_id`),
  ADD KEY `fasilitas_id` (`fasilitas_id`);

--
-- Indexes for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD PRIMARY KEY (`detail_reservasi_id`),
  ADD KEY `jenis_kamar_id` (`jenis_kamar_id`),
  ADD KEY `reservasi_id` (`reservasi_id`);

--
-- Indexes for table `display_pict`
--
ALTER TABLE `display_pict`
  ADD PRIMARY KEY (`display_pict_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`jenis_kamar_id`),
  ADD KEY `tempat_tidur_id` (`tempat_tidur_id`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `jenis_tamu`
--
ALTER TABLE `jenis_tamu`
  ADD PRIMARY KEY (`jenid_tamu_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kamar_id`),
  ADD KEY `jenis_kamar_id` (`jenis_kamar_id`),
  ADD KEY `tempat_tidur_id` (`tempat_tidur_id`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`),
  ADD KEY `kamar_id` (`kamar_id`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kamar_id` (`jenis_kamar_id`);

--
-- Indexes for table `pemesanan_fasilitas`
--
ALTER TABLE `pemesanan_fasilitas`
  ADD PRIMARY KEY (`pemesanan_fasilitas_id`),
  ADD KEY `pembayaran_id` (`pembayaran_id`),
  ADD KEY `fasilitas_id` (`fasilitas_id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`reservasi_id`),
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `jenis_tamu_id` (`jenis_tamu_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`tarif_id`),
  ADD KEY `jenis_kamar_id` (`jenis_kamar_id`),
  ADD KEY `tempat_tidur_id` (`tempat_tidur_id`);

--
-- Indexes for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  ADD PRIMARY KEY (`tempat_tidur_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  MODIFY `detail_fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  MODIFY `detail_reservasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `display_pict`
--
ALTER TABLE `display_pict`
  MODIFY `display_pict_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `jenis_kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jenis_tamu`
--
ALTER TABLE `jenis_tamu`
  MODIFY `jenid_tamu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesanan_fasilitas`
--
ALTER TABLE `pemesanan_fasilitas`
  MODIFY `pemesanan_fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `reservasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `tarif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  MODIFY `tempat_tidur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD CONSTRAINT `detail_fasilitas_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_fasilitas_ibfk_2` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`fasilitas_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `detail_reservasi_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_reservasi_ibfk_2` FOREIGN KEY (`reservasi_id`) REFERENCES `reservasi` (`reservasi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD CONSTRAINT `jenis_kamar_ibfk_1` FOREIGN KEY (`tempat_tidur_id`) REFERENCES `tempat_tidur` (`tempat_tidur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`tempat_tidur_id`) REFERENCES `tempat_tidur` (`tempat_tidur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_3` FOREIGN KEY (`harga`) REFERENCES `jenis_kamar` (`harga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_ibfk_2` FOREIGN KEY (`harga`) REFERENCES `jenis_kamar` (`harga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `kamar` (`kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan_fasilitas`
--
ALTER TABLE `pemesanan_fasilitas`
  ADD CONSTRAINT `pemesanan_fasilitas_ibfk_1` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`pembayaran_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_fasilitas_ibfk_2` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`fasilitas_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`jenis_tamu_id`) REFERENCES `jenis_tamu` (`jenid_tamu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_3` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `tarif_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tarif_ibfk_2` FOREIGN KEY (`tempat_tidur_id`) REFERENCES `tempat_tidur` (`tempat_tidur_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
