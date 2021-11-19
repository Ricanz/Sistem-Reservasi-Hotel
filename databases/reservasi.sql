-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 04:24 PM
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
  `foto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`jenis_kamar_id`, `jenis_kamar`, `kode_jenis_kamar`, `kapasitas`, `deskripsi_kamar`, `foto`) VALUES
(1, 'Superior', 'SP', 2, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'superior.jpeg'),
(2, 'Executive Deluxe', 'ED', 2, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'executive-deluxe.jpg'),
(3, 'Double Deluxe', 'DD', 2, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'double-deluxe.jpg'),
(4, 'Junior Suite', 'JS', 1, '- Menampilkan pemandangan kota <br>\r\n- WiFi Gratis <br>\r\n- Televisi LCD dengan channel TV premium channels <br>\r\n- Kamar mandi pribadi dengan shower, jubah mandi dan sandal <br>\r\n- Brankas (muat laptop), meja tulis, dan telepon; tempat tidur lipat / tambahan tersedia berdasarkan permintaan\r\n', 'junior-suite.jpg');

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
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kamar_id`, `jenis_kamar_id`, `tempat_tidur_id`, `no_kamar`, `lantai`, `bebas_rokok`, `status_kamar`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 1, 1, '311', 3, 'YA', 'Available', '2021-11-19', '2021-11-20'),
(2, 2, 2, '200', 2, 'YA', 'Available', '2021-11-19', '2021-11-19'),
(24, 2, 2, '233', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(25, 2, 2, '233', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(35, 1, 2, '121', 1, '0', 'available', '2021-11-19', '2021-11-19'),
(36, 4, 1, '231', 1, '0', 'available', '2021-11-19', '2021-11-20'),
(38, 1, 2, '123', 2, '0', 'available', '2021-11-19', '2021-11-20'),
(39, 3, 2, '234', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(40, 2, 2, '223', 1, '1', 'available', '2021-11-19', '2021-11-19'),
(41, 2, 2, '223', 1, '1', 'available', '2021-11-19', '2021-11-19'),
(42, 2, 2, '234', 2, '1', 'available', '2021-11-19', '2021-11-19'),
(43, 2, 2, '234', 2, '1', 'available', '2021-11-19', '2021-11-19'),
(44, 2, 2, '123', 233, '0', 'available', '2021-11-19', '2021-11-19'),
(45, 2, 2, '123', 233, '0', 'available', '2021-11-19', '2021-11-19'),
(46, 2, 2, '234', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(47, 2, 2, '234', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(48, 2, 2, '234', 2, '0', 'available', '2021-11-19', '2021-11-19'),
(49, 2, 2, '111', 1, '0', 'available', '2021-11-19', '2021-11-19'),
(50, 1, 1, '123', 123, '0', 'available', '2021-11-19', '2021-11-19');

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
  `nama_institusi` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat_pelanggan` varchar(200) DEFAULT NULL,
  `email_pelanggan` varchar(100) DEFAULT NULL,
  `status_pelanggan` varchar(20) DEFAULT NULL,
  `username_pel` varchar(20) DEFAULT NULL,
  `password_pel` varchar(20) DEFAULT NULL,
  `tgl_reservasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_pelanggan`, `no_identitas`, `nama_institusi`, `no_hp`, `alamat_pelanggan`, `email_pelanggan`, `status_pelanggan`, `username_pel`, `password_pel`, `tgl_reservasi`) VALUES
(1, 'riyanti', '12345', 'KG Nih Bos', '0987654321', 'lalala', 'riyanti@gmail.com', 'apanih', 'riyanti', 'riyanti', '2021-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `reservasi_id` int(11) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `nomor_nota` varchar(11) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `total_awal` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `total_akhir` double DEFAULT NULL,
  `deposit` double DEFAULT NULL,
  `nama_pemilik_kartu` varchar(50) DEFAULT NULL,
  `nomor_kartu` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tarif` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`tarif_id`, `jenis_kamar_id`, `tarif`) VALUES
(1, 1, 900000),
(2, 2, 3350000);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidur`
--

CREATE TABLE `tempat_tidur` (
  `tempat_tidur_id` int(11) NOT NULL,
  `jenis_tempat_tidur` varchar(10) DEFAULT NULL,
  `jumlah_bed_tersedia` int(11) DEFAULT NULL,
  `harga_tempat_tidur` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_tidur`
--

INSERT INTO `tempat_tidur` (`tempat_tidur_id`, `jenis_tempat_tidur`, `jumlah_bed_tersedia`, `harga_tempat_tidur`) VALUES
(1, 'Double', 50, 1),
(2, 'Twin', 60, NULL),
(3, 'King', 30, NULL),
(4, 'Single', 41, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`user_id`, `role_id`, `nama`, `email`, `username`, `password`, `no_ktp`, `no_hp`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'admin', 'admin', '1234', '1234'),
(2, 2, 'manager', 'manager@gmail.com', 'manager', 'manager', '1234', '1234'),
(3, 3, 'staff', 'staff@gmail.com', 'staff', 'staff', '1234', '1234'),
(4, 4, 'user', 'user@gmail.com', 'user', 'user', '1234', '1234');

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
  ADD PRIMARY KEY (`jenis_kamar_id`);

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
  ADD KEY `tempat_tidur_id` (`tempat_tidur_id`);

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
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`),
  ADD KEY `reservasi_id` (`reservasi_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

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
  ADD KEY `jenis_kamar_id` (`jenis_kamar_id`);

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
  ADD KEY `role_id` (`role_id`);

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
  MODIFY `jenis_kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_tamu`
--
ALTER TABLE `jenis_tamu`
  MODIFY `jenid_tamu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `tarif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  MODIFY `tempat_tidur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`tempat_tidur_id`) REFERENCES `tempat_tidur` (`tempat_tidur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`reservasi_id`) REFERENCES `reservasi` (`reservasi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tarif_ibfk_1` FOREIGN KEY (`jenis_kamar_id`) REFERENCES `jenis_kamar` (`jenis_kamar_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
