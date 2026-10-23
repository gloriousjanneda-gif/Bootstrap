-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2026 at 06:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moto_garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_whatsapp` varchar(50) NOT NULL,
  `tipe_motor` varchar(100) NOT NULL,
  `kategori_cc` varchar(50) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `tanggal_booking` date DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `nama_lengkap`, `nomor_whatsapp`, `tipe_motor`, `kategori_cc`, `jenis_layanan`, `tanggal_booking`, `catatan`, `created_at`) VALUES
(1, 'a', '0812345678', 'Vario 150', '100cc - 150cc', 'Tune-up Rutin', NULL, 'sering mogok', '2026-10-23 01:54:33'),
(2, 'a', '0812345678', 'Vario 150', '100cc - 150cc', 'Tune-up Rutin', NULL, 'sering mogok', '2026-10-23 01:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `dyno_results`
--

CREATE TABLE `dyno_results` (
  `id` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `hp_before` float NOT NULL,
  `hp_after` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dyno_results`
--

INSERT INTO `dyno_results` (`id`, `rpm`, `hp_before`, `hp_after`) VALUES
(1, 3000, 12.5, 14.2),
(2, 4000, 16.8, 19.5),
(3, 5000, 22.1, 25.8),
(4, 6000, 27.3, 31.2),
(5, 7000, 31.4, 36),
(6, 8000, 33, 38.5),
(7, 9000, 30.2, 36.8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `badge_class` varchar(100) NOT NULL,
  `price_display` varchar(100) NOT NULL,
  `details_json` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `category`, `description`, `icon_class`, `badge_class`, `price_display`, `details_json`) VALUES
(1, 'Commuter Routine', '100cc - 150cc', 'Perawatan berkala harian presisi tinggi untuk kenyamanan dan efisiensi bahan bakar motor Anda.', 'fa-motorcycle', 'bg-warning text-dark', 'Rp 75.000', '[\"Ganti Oli & Filter\", \"Pembersihan Injektor / Karburator\", \"Pengecekan Busi & Filter Udara\", \"Setel Rantai & Rem\"]'),
(2, 'Sport & Mid-Bike', '250cc - 600cc', 'Optimasi performa mesin multi-silinder dengan kalibrasi throttle body dan diagnosis elektronik.', 'fa-bolt', 'bg-info text-dark', 'Rp 250.000', '[\"Sync Throttle Body\", \"Flushing Cairan Pendingin (Coolant)\", \"Diagnosis Komputer ECU\", \"Dyno Check Basic\"]'),
(3, 'Superbike Master', '600cc - 1000cc', 'Penanganan khusus MOGE / Superbike dengan standar mekanik balap dan perlengkapan modern.', 'fa-shield-halved', 'bg-danger text-white', 'Rp 500.000', '[\"Full Computer Diagnostic\", \"Dyno Tuning Remap ECU\", \"Pengecekan Kompresi Silinder\", \"Valvetrain & Chain Tension Inspection\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dyno_results`
--
ALTER TABLE `dyno_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dyno_results`
--
ALTER TABLE `dyno_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
