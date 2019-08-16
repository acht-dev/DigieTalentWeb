-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 05:28 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digie`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(40) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `label` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `thumbnail` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `label`, `author`, `thumbnail`, `created_at`, `updated_at`) VALUES
('158cb66b-8d52-4046-afa1-e2f173', 'Seminar Sosialisasi Digital Talent Scholarship 2019', '<p style=\"text-align:justify\"><strong>Bekasi, Gunadarma &ndash;</strong>&nbsp;Agar Program Fresh Graduate Academy (FGA) Digital Talent Scholarship (DTS) dapat tersampaikan khalayak ramai, Universitas Gunadarma mengadakan sebuah Seminar yang bertajuk Sosialisasi Digital Talent Scholarship 2019. Seminar ini diadakan di Kampus J6 Universitas Gunadarma, Bekasi.</p>\r\n\r\n<p style=\"text-align:justify\">Beberapa pembicara diundang untuk memberi informasi dan pengarahan mengenai Fresh Graduate Academy Digital Talent Scholarship. Beberapa pembicara tersebut ialah Bapak Dr. Ir. Hedi M. Idris, MSc. dan Ibu Sri Cahaya Khoironi dari Kemkominfo RI, Bapak Dr. Anto Satriyo Nugroho dari BPPT, dan Bapak Dr. Andreas Hadiyono dari Universitas Gunadarma.</p>\r\n\r\n<p style=\"text-align:justify\">Peserta seminar datang dari berbagai kalangan dengan sebagian besarnya merupakan mahasiswa tingkat akhir dan alumni Universitas Gunadarma.</p>', 'Event', 'admin', 'sosialisasi.jpg', '0000-00-00', '2019-08-11'),
('16589e67-9095-4585-ae60-fd8bcb', 'Training of Trainer Machine Learning Internal 2019', '<p style=\"text-align:justify\"><strong>Depok, Gunadarma &ndash;</strong>&nbsp;Universitas Gunadarma menggelar sebuah Training of Training yang ditujukan untuk mempersiapkan instruktur yang akan menjadi pemateri dalam program Fresh Graduate Academy (FGA) Digital Talent Scholarship (DTS) 2019 dengan tema Machine Learning.</p>\r\n\r\n<p style=\"text-align:justify\">Training of Trainer dilaksanakan dalam waktu 4 hari dimulai dari tanggal 24-25 Mei 2019 dan 28-29 Juni 2019. Training of Trainer ini dihadiri oleh 19 dosen Universitas Gunadarma yang memiliki latar belakang Pemrograman Macine Learning.</p>\r\n\r\n<p style=\"text-align:justify\">Tujuan mendasar dari Training of Trainer ini ialah penyetaraan pemahaman materi dalam silabus yang telah disusun serta menyamakan standar pembelajaran yang akan diterima oleh peserta Digital Talent Scholarship.</p>\r\n', 'Event', 'admin', 'berita2.jpg', '0000-00-00', '0000-00-00'),
('34bfcd05-5867-45e7-b100-33d710', 'Finalisasi Modul FGA DTS Machine Learning 2019', '<p style=\"text-align:justify\"><strong>Depok, Gunadarma &ndash;</strong>&nbsp;Finalisasi Modul program Fresh Graduate Academy (FGA) Digital Talent Scholarship&nbsp;2019 diselenggarakan oleh Keminfo. Acara yang diselenggarakan di Margo Hotel, Depok pada tanggal 17-19 Juni 2019 ini ditujukan untuk melengkapi dan menyempurnakan modul-modul yang akan menjadi sumber mater bagi para instruktur.</p>\r\n\r\n<p style=\"text-align:justify\">Lima dosen Universitas Gunadarma; Dr. Andreas Hadiyono, Dr. Ida Astuti, Dr. Detty Purnamasari, Dr. Astie Darmayantie, dan Bapak Dennis A. Christie, diundang untuk menghadiri acara finalisasi modul ini dibawah arahan Dr. Akhmad Noor Setiawan dari Universitas Gadjah Mada.</p>\r\n\r\n<p style=\"text-align:justify\">Modul yang telah difinalisasi melingkupi materi tentang: Amazon Web Service (AWS), Pemrograman Python untuk Machine Learning, Matematika untuk Machine Learning, Algoritma Machine Learning, Project Machine Learning, Pengantar Jaringan Saraf Tiruan, Pengantar Deep Learning, dan Suplementary Material untuk Deep Learning.</p>', 'Event', 'admin', 'berita3.jpg', '0000-00-00', '2019-08-11'),
('3e54d7ae-e4ca-4ddc-add8-96106c', 'Seminar Pembukaan Digital Talent Scholarship 2019', '<p style=\"text-align:justify\"><strong>Bekasi, Gunadarma &ndash;</strong>&nbsp;Untuk memeriahkan program Fresh Graduate Academy (FGA) Digital Talent Scholarship (DTS) 2019, sebuah seminar pembukaan dilaksanakan di Kampus J6 Universitas Gunadarma, Bekasi. Program Fresh Graduate Academy Digital Talent Scholarship 2019 dibuka secara resmi oleh Rektor Universitas Gunadarma, Prof. Dr. E.S. Margianti, SE., MM dan Kepala Lembaga Layanan Pendidikan Tinggi Wilayah III DKI Jakarta, Dr. Ir. Illah Sailah, M.S</p>\r\n\r\n<p style=\"text-align:justify\">Seminar ini memiliki tema Machine Learning in Action. Beberapa pembicara yang diundang dalam acara seminar ini adalah Bapak Andreas Hadiyono dari Universitas Gunadarma, Bapak Fanky Christian dari Asosiasi Cloud Computing Indonesia, Bapak Herianto dari PT. Sinnex Metrodata Indonesia, dan Bapak David Hermawan, dari Intel.</p>\r\n\r\n<p style=\"text-align:justify\">Pembahasan yang didiskusikan pada seminar ini adalah tentang machine learning dan peranannya dalam Industri 4.0. Seminar ini dihadiri oleh berbagai kalangan dan juga seluruh peserta Digital Talent Scholarshop Machine Learning yang diterima di Universitas Gunadarma.</p>\r\n', 'Event', 'admin', 'berita4.jpg', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '1565708889.jpg', '2019-08-13 08:08:09', '2019-08-13 08:08:09'),
(2, '1565708889.jpg', '2019-08-13 08:08:09', '2019-08-13 08:08:09'),
(3, '1565708889.jpg', '2019-08-13 08:08:09', '2019-08-13 08:08:09'),
(4, '1565708889.png', '2019-08-13 08:08:09', '2019-08-13 08:08:09'),
(5, '1565708890.PNG', '2019-08-13 08:08:10', '2019-08-13 08:08:10'),
(6, '1565708890.PNG', '2019-08-13 08:08:10', '2019-08-13 08:08:10'),
(7, '1565708890.PNG', '2019-08-13 08:08:10', '2019-08-13 08:08:10'),
(8, '1565708988.jpg', '2019-08-13 08:09:48', '2019-08-13 08:09:48'),
(9, '1565708988.jpg', '2019-08-13 08:09:48', '2019-08-13 08:09:48'),
(10, '1565708989.jpg', '2019-08-13 08:09:49', '2019-08-13 08:09:49'),
(11, '1565708989.png', '2019-08-13 08:09:49', '2019-08-13 08:09:49'),
(12, '1565708989.PNG', '2019-08-13 08:09:49', '2019-08-13 08:09:49'),
(13, '1565708990.PNG', '2019-08-13 08:09:50', '2019-08-13 08:09:50'),
(14, '1565708990.PNG', '2019-08-13 08:09:50', '2019-08-13 08:09:50'),
(15, '1565709007.jpg', '2019-08-13 08:10:07', '2019-08-13 08:10:07'),
(16, '1565709008.jpg', '2019-08-13 08:10:08', '2019-08-13 08:10:08'),
(17, '1565709008.jpg', '2019-08-13 08:10:08', '2019-08-13 08:10:08'),
(18, '1565709126.jpg', '2019-08-13 08:12:06', '2019-08-13 08:12:06'),
(19, '1565709127.jpg', '2019-08-13 08:12:07', '2019-08-13 08:12:07'),
(20, '1565709127.jpg', '2019-08-13 08:12:07', '2019-08-13 08:12:07'),
(21, '1565709136.jpg', '2019-08-13 08:12:16', '2019-08-13 08:12:16'),
(22, '1565709137.jpg', '2019-08-13 08:12:17', '2019-08-13 08:12:17'),
(23, '1565709137.jpg', '2019-08-13 08:12:17', '2019-08-13 08:12:17'),
(24, '1565709172.png', '2019-08-13 08:12:52', '2019-08-13 08:12:52'),
(25, '1565709220.png', '2019-08-13 08:13:40', '2019-08-13 08:13:40'),
(26, '1565709220.png', '2019-08-13 08:13:40', '2019-08-13 08:13:40'),
(27, '1565709220.png', '2019-08-13 08:13:40', '2019-08-13 08:13:40'),
(28, '1565709250.png', '2019-08-13 08:14:10', '2019-08-13 08:14:10'),
(29, '1565744674.png', '2019-08-13 18:04:34', '2019-08-13 18:04:34'),
(30, '1565744674.jpg', '2019-08-13 18:04:34', '2019-08-13 18:04:34'),
(31, '1565744676.jpg', '2019-08-13 18:04:36', '2019-08-13 18:04:36'),
(32, '1565744676.jpg', '2019-08-13 18:04:36', '2019-08-13 18:04:36'),
(33, '1565744676.png', '2019-08-13 18:04:36', '2019-08-13 18:04:36'),
(34, '1565744676.PNG', '2019-08-13 18:04:36', '2019-08-13 18:04:36'),
(35, '1565744677.PNG', '2019-08-13 18:04:37', '2019-08-13 18:04:37'),
(36, '1565749075.jpg', '2019-08-13 19:17:55', '2019-08-13 19:17:55'),
(37, '1565749075.jpg', '2019-08-13 19:17:55', '2019-08-13 19:17:55'),
(38, '1565749075.png', '2019-08-13 19:17:55', '2019-08-13 19:17:55'),
(39, '1565749075.PNG', '2019-08-13 19:17:55', '2019-08-13 19:17:55'),
(40, '1565749076.PNG', '2019-08-13 19:17:56', '2019-08-13 19:17:56'),
(41, '1565749076.png', '2019-08-13 19:17:56', '2019-08-13 19:17:56'),
(42, '1565749076.jpg', '2019-08-13 19:17:56', '2019-08-13 19:17:56'),
(43, '1565749099.jpg', '2019-08-13 19:18:20', '2019-08-13 19:18:20'),
(44, '1565749100.png', '2019-08-13 19:18:20', '2019-08-13 19:18:20'),
(45, '1565749100.PNG', '2019-08-13 19:18:20', '2019-08-13 19:18:20'),
(46, '1565749100.PNG', '2019-08-13 19:18:20', '2019-08-13 19:18:20'),
(47, '1565749100.png', '2019-08-13 19:18:20', '2019-08-13 19:18:20'),
(48, '1565749101.jpg', '2019-08-13 19:18:21', '2019-08-13 19:18:21'),
(49, '1565749101.jpg', '2019-08-13 19:18:21', '2019-08-13 19:18:21'),
(50, '1565749111.jpg', '2019-08-13 19:18:31', '2019-08-13 19:18:31'),
(51, '1565749138.jpg', '2019-08-13 19:18:58', '2019-08-13 19:18:58'),
(52, '1565749142.jpg', '2019-08-13 19:19:02', '2019-08-13 19:19:02'),
(53, '1565749152.jpg', '2019-08-13 19:19:12', '2019-08-13 19:19:12'),
(54, '1565749152.PNG', '2019-08-13 19:19:12', '2019-08-13 19:19:12'),
(55, '1565749262.png', '2019-08-13 19:21:02', '2019-08-13 19:21:02'),
(56, '1565749262.PNG', '2019-08-13 19:21:02', '2019-08-13 19:21:02'),
(57, '1565749262.PNG', '2019-08-13 19:21:02', '2019-08-13 19:21:02'),
(58, '1565749263.jpg', '2019-08-13 19:21:03', '2019-08-13 19:21:03'),
(59, '1565749263.jpg', '2019-08-13 19:21:03', '2019-08-13 19:21:03'),
(60, '1565749263.jpg', '2019-08-13 19:21:03', '2019-08-13 19:21:03'),
(61, '1565749285.jpg', '2019-08-13 19:21:25', '2019-08-13 19:21:25'),
(62, '1565749285.png', '2019-08-13 19:21:25', '2019-08-13 19:21:25'),
(63, '1565749285.PNG', '2019-08-13 19:21:25', '2019-08-13 19:21:25'),
(64, '1565749285.PNG', '2019-08-13 19:21:25', '2019-08-13 19:21:25'),
(65, '1565749285.jpg', '2019-08-13 19:21:25', '2019-08-13 19:21:25'),
(66, '1565749286.jpg', '2019-08-13 19:21:26', '2019-08-13 19:21:26'),
(67, '1565749322.jpg', '2019-08-13 19:22:02', '2019-08-13 19:22:02'),
(68, '1565749322.png', '2019-08-13 19:22:02', '2019-08-13 19:22:02'),
(69, '1565749323.PNG', '2019-08-13 19:22:03', '2019-08-13 19:22:03'),
(70, '1565749323.PNG', '2019-08-13 19:22:03', '2019-08-13 19:22:03'),
(71, '1565749323.jpg', '2019-08-13 19:22:03', '2019-08-13 19:22:03'),
(72, '1565749323.jpg', '2019-08-13 19:22:03', '2019-08-13 19:22:03'),
(73, '1565749372.jpg', '2019-08-13 19:22:52', '2019-08-13 19:22:52'),
(74, '1565749372.PNG', '2019-08-13 19:22:52', '2019-08-13 19:22:52'),
(75, '1565749372.jpg', '2019-08-13 19:22:52', '2019-08-13 19:22:52'),
(76, '1565749373.PNG', '2019-08-13 19:22:53', '2019-08-13 19:22:53'),
(77, '1565749383.png', '2019-08-13 19:23:03', '2019-08-13 19:23:03'),
(78, '1565749383.png', '2019-08-13 19:23:03', '2019-08-13 19:23:03'),
(79, '1565749384.png', '2019-08-13 19:23:04', '2019-08-13 19:23:04'),
(80, '1565749410.png', '2019-08-13 19:23:30', '2019-08-13 19:23:30'),
(81, '1565749410.png', '2019-08-13 19:23:30', '2019-08-13 19:23:30'),
(82, '1565749892.png', '2019-08-13 19:31:32', '2019-08-13 19:31:32'),
(83, '1565749893.png', '2019-08-13 19:31:33', '2019-08-13 19:31:33'),
(84, '1565749893.png', '2019-08-13 19:31:33', '2019-08-13 19:31:33'),
(85, '1565749914.png', '2019-08-13 19:31:54', '2019-08-13 19:31:54'),
(86, '1565749950.png', '2019-08-13 19:32:30', '2019-08-13 19:32:30'),
(87, '1565749951.png', '2019-08-13 19:32:31', '2019-08-13 19:32:31'),
(88, '1565749951.png', '2019-08-13 19:32:31', '2019-08-13 19:32:31'),
(89, '1565749951.png', '2019-08-13 19:32:31', '2019-08-13 19:32:31'),
(90, '1565749973.png', '2019-08-13 19:32:53', '2019-08-13 19:32:53'),
(91, '1565749984.PNG', '2019-08-13 19:33:04', '2019-08-13 19:33:04'),
(92, '1565750000.jpg', '2019-08-13 19:33:20', '2019-08-13 19:33:20'),
(93, '1565750001.png', '2019-08-13 19:33:21', '2019-08-13 19:33:21'),
(94, '1565750001.png', '2019-08-13 19:33:21', '2019-08-13 19:33:21'),
(95, '1565750001.jpg', '2019-08-13 19:33:21', '2019-08-13 19:33:21'),
(96, '1565750042.jpg', '2019-08-13 19:34:02', '2019-08-13 19:34:02'),
(97, '1565750042.jpg', '2019-08-13 19:34:02', '2019-08-13 19:34:02'),
(98, '1565750043.jpg', '2019-08-13 19:34:03', '2019-08-13 19:34:03'),
(99, '1565750043.jpg', '2019-08-13 19:34:03', '2019-08-13 19:34:03'),
(100, '1565750043.PNG', '2019-08-13 19:34:03', '2019-08-13 19:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instruktur` varchar(40) NOT NULL,
  `no` int(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `no`, `nama`, `foto`, `deskripsi`, `kategori`) VALUES
('0665d4ac-456c-4f31-aee0-fe5c2a', 9, 'Dr. RIFKI KOSASIH., S.Si., M.Si.', 'rifki.png', 'Lecturer - Gunadarma University', 'Pengajar'),
('0b327405-1f8f-4ea3-bf13-dde573', 11, 'DENNIS APRILLA CHRISTIE, ST., MMSI., MSc', 'dennis.png', 'Lecturer - Gunadarma University\r\nPart of Research and Development Team in GUARD  (Gunadarma University Aeronautics and Robotic Division)\r\n', 'Pengajar'),
('0e627acd-926b-4647-bbaf-d1197d', 2, 'Dr. Andreas Hadiyono, S.T.,MMSi', 'andreas.png', 'Lecturer - Gunadarma University\r\nStafff Coordinator of International Collaboration - Gunadarma University \r\n2010-2014 Technical consultant, Official web site of the President of Republic of Indonesia [http://www.presidenri.go.id]\r\n2010-now Technical consultant, Official web site of vice President of Republic of Indonesia [http://www.wapresri.go.id]\r\n2010-now Technical consultant, Official Portal of Ministry of Youth and Sport, Republic of Indonesia [http://www.kemenpora.go.id]\r\n', 'Pengajar'),
('76c7bba3-ca8b-4e78-992d-33ac70', 4, 'Dr. DETTY PURNAMASARI', 'detty.png', 'Staff of Doctoral Programmer', 'Pengajar'),
('8f7c921d-9cb0-4c2d-9d90-25cdf8', 8, 'Dr. Tri Handhika, S.Si, M.Si', 'tri.png', 'Full-time Lecturer - Gunadarma University\r\nPart-time Lecturer - University of Indonesia\r\nPart-time Lecturer - Institute of Risk Management & Insurance\r\nTrainer - The Indonesian Capital Market Institute\r\nData Science Consultant - PT Metra Digital Media, Telkom Group\r\nSenior Researcher - PT Sanga Sanga Grup\r\n', 'Pengajar'),
('95777c5b-30f7-4ad2-bcbf-de58ba', 18, 'HARRIS ANGGARA GULTOM, ST., MMSI', 'harris.png', 'Lecturer - Gunadarma University', 'Pengajar'),
('9b8c3b3e-2330-406b-a9cb-fdab68', 13, 'LULU MAWADDAH WISUDAWATI , ST., MMSI., M', 'lulu.png', 'Lecturer - Gunadarma University', 'Pengajar'),
('a686a8ea-cc08-4715-bfe5-10f3e2', 10, 'Dr. SIGIT WIDIYANTO, ST., MMSI., MSc', 'sigit.png', 'Staff Pengembangan Sistem Manajemen Akademik (PSMA) Online\r\nStaff Pengajar di universitas gunadarma\r\n', 'Pengajar'),
('a6d7e50e-7c38-4215-8260-c8de2d', 5, 'Dr. Ida Astuti SKom, MMSI', 'ida.png', 'Lecturer - Gunadarma University', 'Pengajar'),
('af12b937-ee9e-460b-bb92-502b23', 17, 'EVANS WINANDA WIRGA, ST, MMSI', 'evans.png', 'Lecturer - Gunadarma University\r\nSimbada (Sistem Managemen Barang Daerah)Kota Pekalongan\r\nStaff IBC Gunadarma (D541)\r\nCOO Bhayanaka Digital\r\nCOO Robotedukasi(robotedukasi.com)\r\nCo-Founder KemangKres\r\n', 'Pengajar'),
('dc3e7982-9eac-4b46-bca4-28ddf8', 3, 'Dr. SUTRESNA WATI, ST. MMSI.', 'sutresna.png', 'Lecturer - Gunadarma University\r\nStaff of International Collaboration\r\nIT Staff - Beasiswa Unggulan Program, Ministry of National Education, Republic of Indonesia [http://beasiswaunggulan.kemdiknas.go.id]\r\nTechnical consultant, Official web site of the President of Republic of Indonesia [http://www.presidenri.go.id]\r\nTechnical consultant, Official web site of vice President of Republic of Indonesia [http://www.wapresri.go.id]\r\nTechnical consultant, Official Portal of Ministry of Youth and Sport,', 'Pengajar'),
('e97dbff0-c692-48f8-a651-9c76b8', 7, 'Dr. AHMAD SABRI', 'ahmad.png', 'Lecture staff in Informatics Department, Gunadarma University\r\n- Research staff on Center for Computational Mathematics Studies (Pusat Studi Komputasi Matematika)\r\n- Combinatorialist \r\n- Member of Indonesia Mathematical Society (see indoms.org)\r\n- Reviewer for Mathematical Reviews\r\n- Member of France Alumni\r\n', 'Pengajar'),
('eaa5a232-ed99-4160-93ba-3b9d80', 15, 'I Komang Sugiartha, S.Kom., MMSI', 'komang.png', 'Lecturer - Gunadarma University\r\nResearch Assistant Incubator Business Center - Gunadarma University \r\nHead of Robotics and Course Development - Robot Edukasi\r\n\r\n', 'Pengajar'),
('ecb23b29-6db9-43d2-9ef9-2b58d1', 16, 'ISRAM RASAL S.T., M.M.S.I., M.Sc.', 'isram.png', 'Lecturer - Gunadarma University\r\nAnother activities:\r\n- Ikatan Alumni Prancis Indonesia\r\n- Ikatan Ilmuwan Internasional Indonesia\r\n', 'Pengajar'),
('f0a54be5-be15-4eae-bab7-753335', 14, 'Koko Bachrudin, S.Kom., MMSI.', 'koko.png', 'Lecturer - Universitas Gunadarma\r\nInternational Office Staff - Universitas Gunadarma\r\nSystem Administrator, Official Portal Kementerian Pemuda dan olahraga, republik indonesia [http://www.kemenpora.go.id]\r\nNetwork Designer, SIMBADA(Sistem Manajemen Barang Daerah) Kotawaringin timur dan Pekalongan - Gunadarma University\r\nAnggota tim kajian akademik: Kemenkes, kemenpanRB, Kominfo, dan pembda kabupaten Tegal\r\n', 'Pengajar'),
('f2006f87-7933-45e8-9d60-25f003', 19, 'ELYNA FAZRIYATI', 'elyna.png', 'Lecturer - Gunadarma University\r\nStaff LePKom\r\n', 'Pengajar'),
('f2f0c55a-6791-455b-acb1-aef554', 6, 'Dr. ASTIE DARMAYANTIE, ST, MMSI, MSc.', 'astie.png', 'Lecturer - Gunadarma University', 'Pengajar'),
('fd94d750-d306-4b78-867b-374bf7', 1, 'Dr. rer. nat. I MADE WIRYANA, S.Si., S.K', 'made.png', 'Lecturer - Gunadarma University\r\nCoordinator of International Collaboration - Gunadarma University \r\nEvaluator Sistem Pemerintahan Berbasis Elektronik (SPBE) - KemenpanRB\r\n', 'Pengajar');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_13_040440_create_images_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(3) NOT NULL,
  `penyelengara` varchar(30) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `nama_peserta` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asal_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `penyelengara`, `tema`, `nama_peserta`, `no_hp`, `email`, `asal_provinsi`) VALUES
(1, 'Universitas Gunadarm', 'Machine Learning', 'Aditya', '6.28E+12', 'adityaadarfinnaa@gmail.com', 'DKI Jakarta'),
(2, 'Universitas Gunadarm', 'Machine Learning', 'Aditya Ramadani', '6.29E+11', 'adirazu@gmail.com', 'Jawa Barat'),
(3, 'Universitas Gunadarm', 'Machine Learning', 'Ahlan Pakradiga', '6.29E+12', 'ahlanpakradiga@gmail.com', 'Jawa Barat'),
(4, 'Universitas Gunadarm', 'Machine Learning', 'Ahmad Rais Shid', '6.28E+12', 'arshidiq83@gmail.com', 'DKI Jakarta'),
(5, 'Universitas Gunadarm', 'Machine Learning', 'Aldhy Putra Mah', '6.29E+12', 'aldhymahardika46@gmail.com', 'DKI Jakarta'),
(6, 'Universitas Gunadarm', 'Machine Learning', 'aldi saputra', '6.29E+13', 'aldivonray@gmail.com', 'Jawa Barat'),
(7, 'Universitas Gunadarm', 'Machine Learning', 'Amalia Nur Syam', '6.29E+12', 'amalianursyamsina@gmail.com', 'Jawa Barat'),
(8, 'Universitas Gunadarm', 'Machine Learning', 'Andhi Rachman S', '6.28E+12', 'korosens666@gmail.com', 'Jawa Barat'),
(9, 'Universitas Gunadarm', 'Machine Learning', 'Andreas Renaldy', '6.29E+11', 'renaldyandreas12@gmail.com', 'Jawa Barat'),
(10, 'Universitas Gunadarm', 'Machine Learning', 'Andri ', '6.29E+11', 'andrijanuarofficial@gmail.com', 'JawabBarat'),
(11, 'Universitas Gunadarm', 'Machine Learning', 'Andri Andriansy', '6.28E+12', 'andriandriansyah296@gmail.com', 'Jawa Barat'),
(12, 'Universitas Gunadarm', 'Machine Learning', 'Anella Prisdaya', '6.29E+12', 'anella.damanik16@gmail.com', 'Jawa Barat'),
(13, 'Universitas Gunadarm', 'Machine Learning', 'Annisa Tsamarah', '6.28E+12', 'annisatsamarah95@gmail.com', 'Banten'),
(14, 'Universitas Gunadarm', 'Machine Learning', 'APRILIA PUTRI D', '6.29E+11', 'apriliaputridewanty@gmail.com', 'Jawa Barat'),
(15, 'Universitas Gunadarm', 'Machine Learning', 'Arviena Jasmine', '6.29E+12', 'arviena1004@gmail.com', 'Jawa Barat'),
(16, 'Universitas Gunadarm', 'Machine Learning', 'Audro Gideon Ha', '6.28E+12', 'agideonh_qweasdzxc@hotmail.com', 'Jawa Barat'),
(17, 'Universitas Gunadarm', 'Machine Learning', 'Bagas Ardian', '6.29E+12', 'bagasardian88@gmail.com', 'DKI Jakarta'),
(18, 'Universitas Gunadarm', 'Machine Learning', 'Bobby Putra Ema', '6.28E+12', 'bobbyhoult@gmail.com', 'Jawa Barat'),
(19, 'Universitas Gunadarm', 'Machine Learning', 'brain aulia bia', '6.28E+12', 'brain.auliabian@gmail.com', 'Jawa Barat'),
(20, 'Universitas Gunadarm', 'Machine Learning', 'Budi Rakiso S.K', '6.29E+12', 'dhierakiso@gmail.com', 'Jawa Barat'),
(21, 'Universitas Gunadarm', 'Machine Learning', 'Danan Nugrakart', '6.29E+12', 'Danan.nr@gmail.com', 'Jawa Barat'),
(22, 'Universitas Gunadarm', 'Machine Learning', 'Dian Damayanti', '6.29E+12', 'diandamayanti018@gmail.com', 'Jawa Barat'),
(23, 'Universitas Gunadarm', 'Machine Learning', 'Dicka Agung Dia', '6.28E+12', 'dicka.adputra@gmail.com', 'Jawa Barat'),
(24, 'Universitas Gunadarm', 'Machine Learning', 'Dinar Rahayu', '6.28E+12', 'rahayu.dinar@gmail.com', 'Jawa Barat'),
(25, 'Universitas Gunadarm', 'Machine Learning', 'Dita Apriliana', '6.28E+12', 'ditaapriliana09@gmail.com', 'Jawa Barat'),
(26, 'Universitas Gunadarm', 'Machine Learning', 'Dwi Setyo Adi', '6.29E+12', 'dwisetyoadisutrisno28@gmail.co', 'Jawa Barat'),
(27, 'Universitas Gunadarm', 'Machine Learning', 'Edwien Soraya', '6.29E+12', 'edwien.soraya@gmail.com', 'DKI Jakarta'),
(28, 'Universitas Gunadarm', 'Machine Learning', 'Eka Setiawaty', '6.28E+12', 'ekasethya@gmail.com', 'DKI Jakarta'),
(29, 'Universitas Gunadarm', 'Machine Learning', 'Ekmal Rizki Rah', '6.29E+12', 'ekmal.rizki@gmail.com', 'Jawa Barat'),
(30, 'Universitas Gunadarm', 'Machine Learning', 'Erwin kardinto', '6.29E+12', 'erwinsays31@gmail.com', 'DKI Jakarta'),
(31, 'Universitas Gunadarm', 'Machine Learning', 'Fahrul Andrian', '6.29E+12', 'fahrulandrian135@gmail.com', 'DKI Jakarta'),
(32, 'Universitas Gunadarm', 'Machine Learning', 'Fairuz Hanif Ra', '6.29E+12', 'fairuzhrabbani@gmail.com', 'DKI Jakarta'),
(33, 'Universitas Gunadarm', 'Machine Learning', 'Farchan Nurazmi', '6.28E+12', 'farchan84@gmail.com', 'Jawa Barat'),
(34, 'Universitas Gunadarm', 'Machine Learning', 'Fitrahadi Arief', '6.29E+11', 'fitrahadiarief30@gmail.com', 'Jawa Barat'),
(35, 'Universitas Gunadarm', 'Machine Learning', 'gemmailhampurna', '6.29E+11', 'gemmailhampurnama@gmail.com', 'Jawa Barat'),
(36, 'Universitas Gunadarm', 'Machine Learning', 'Gustia Nur Dian', '6.29E+12', 'gstnrdn@gmail.com', 'Jawa Barat'),
(37, 'Universitas Gunadarm', 'Machine Learning', 'Havid Rinaldy', '6.29E+12', 'havidrinaldy08@gmail.com', 'Jawa Barat'),
(38, 'Universitas Gunadarm', 'Machine Learning', 'Icmi Alam Fikri', '6.28E+12', 'icmialam@gmail.com', 'Jawa Barat'),
(39, 'Universitas Gunadarm', 'Machine Learning', 'Ikbal Rullah', '6.28E+12', 'rullahikbal@gmail.com', 'DKI Jakarta'),
(40, 'Universitas Gunadarm', 'Machine Learning', 'Indra Rahmanto', '6.28E+12', 'indra.rrmt@gmail.com', 'Jawa Barat'),
(41, 'Universitas Gunadarm', 'Machine Learning', 'Indri Ayuningty', '6.29E+12', 'ayuningtyasindri@gmail.com', 'Jawa Barat'),
(42, 'Universitas Gunadarm', 'Machine Learning', 'Joice Lidya Mor', '6.29E+12', 'joicelidya@gmail.com', 'DKI Jakarta'),
(43, 'Universitas Gunadarm', 'Machine Learning', 'Kamilia Octavia', '6.29E+12', 'kamiliaoct@gmail.com', 'Jawa Barat'),
(44, 'Universitas Gunadarm', 'Machine Learning', 'Luky ilyas sapu', '6.29E+12', 'lukyilyas@gmail.com', 'Banten'),
(45, 'Universitas Gunadarm', 'Machine Learning', 'Meutia Rizka Sw', '6.29E+12', 'meutiarizkas@gmail.com', 'Jawa Barat'),
(46, 'Universitas Gunadarm', 'Machine Learning', 'Mila Aprilliyan', '6.29E+12', 'milaaprilliyani1@gmail.com', 'Jawa Barat'),
(47, 'Universitas Gunadarm', 'Machine Learning', 'Mochammad Faish', '6.28E+12', 'faishalriza04@gmail.com', 'Jawa Barat'),
(48, 'Universitas Gunadarm', 'Machine Learning', 'Mohammad Febria', '6.29E+12', 'febrian0530@gmail.com', 'Jawa Timur'),
(49, 'Universitas Gunadarm', 'Machine Learning', 'Monyta Rahmania', '6.28E+12', 'monyta.rahmania@gmail.com', 'Jawa Barat'),
(50, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Ari Ha', '6.29E+12', 'muhartan25@gmail.com', 'Jawa Barat'),
(51, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Dimas ', '6.28E+12', 'dragwills@gmail.com', 'Jawa Barat'),
(52, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Ega S', '6.28E+12', 'simatupang.ega@gmail.com', 'Jawa Barat'),
(53, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Fadla ', '6.28E+12', 'fadla.abdussalam@gmail.com', 'Jawa Barat'),
(54, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Farras', '6.29E+12', 'farrasalyafi@gmail.com', 'Jawa Barat'),
(55, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Handik', '6.29E+12', 'handika.fadhlan@yahoo.co.id', 'Jawa Barat'),
(56, 'Universitas Gunadarm', 'Machine Learning', 'Muhammad Indra ', '6.28E+12', 'indrayudhaputra@gmail.com', 'Jawa Barat'),
(57, 'Universitas Gunadarm', 'Machine Learning', 'Mutia', '6.28E+12', 'tia.mutia98@gmail.com', 'Jawa Barat'),
(58, 'Universitas Gunadarm', 'Machine Learning', 'Nadhifa Irbah', '6.28E+12', 'dhifa.irbah309@gmail.com', 'Jawa Barat'),
(59, 'Universitas Gunadarm', 'Machine Learning', 'nur faizah isla', '6.29E+12', 'nurfaizah1097@gmail.com', 'Jawa Barat'),
(60, 'Universitas Gunadarm', 'Machine Learning', 'Prisky Ratna An', '6.28E+12', 'priskyra@gmail.com', 'DKI Jakarta'),
(61, 'Universitas Gunadarm', 'Machine Learning', 'Putri Auliana R', '6.28E+12', '14611226@alumni.uii.ac.id', 'Jawa Barat'),
(62, 'Universitas Gunadarm', 'Machine Learning', 'Raden Adhitya A', '6.29E+12', 'ardiansyah.raar@gmail.com', 'DKI Jakarta'),
(63, 'Universitas Gunadarm', 'Machine Learning', 'Raf\'il Dwiyan A', '6.29E+12', 'rafildwiyan@gmail.com', 'Jawa Barat'),
(64, 'Universitas Gunadarm', 'Machine Learning', 'Reezky illmawat', '6.28E+12', 'rhhezkyillma@gmail.com', 'Jawa Barat'),
(65, 'Universitas Gunadarm', 'Machine Learning', 'Rendito Hasri W', '6.28E+12', 'rendi0997@gmail.com', 'Jawa Barat'),
(66, 'Universitas Gunadarm', 'Machine Learning', 'Reza Aditya', '6.29E+12', 'rezaa503@gmail.com', 'DKI Jakarta'),
(67, 'Universitas Gunadarm', 'Machine Learning', 'Ridwan Nur Hafi', '6.29E+12', 'ridwannurha@gmail.com', 'Jawa Barat'),
(68, 'Universitas Gunadarm', 'Machine Learning', 'Rocky Daniel', '6.29E+12', 'rockydaniel182@gmail.com', 'Jawa Barat '),
(69, 'Universitas Gunadarm', 'Machine Learning', 'ROOSFINA PANGES', '6.29E+12', 'roosfina.pangesti@gmail.com', 'Jawa Barat'),
(70, 'Universitas Gunadarm', 'Machine Learning', 'SAADILLAH PULUN', '6.28E+12', 'zsaadzzz@gmail.com', 'Jawa Barat'),
(71, 'Universitas Gunadarm', 'Machine Learning', 'Shinta Larasati', '6.28E+12', 'shintalarasatti@gmail.com', 'Jawa Barat'),
(72, 'Universitas Gunadarm', 'Machine Learning', 'Sri Rahayu Gant', '6.28E+12', '07.srirahayu@gmail.com', 'Jawa Barat'),
(73, 'Universitas Gunadarm', 'Machine Learning', 'Supriyana', '6.28E+12', 'supriyana259@gmail.com', 'Jawa Barat'),
(74, 'Universitas Gunadarm', 'Machine Learning', 'Syarif Sagaf Ad', '6.29E+12', 'assegaf819@gmail.com', 'Jawa Barat'),
(75, 'Universitas Gunadarm', 'Machine Learning', 'Syifa Mutiara S', '6.28E+12', 'syifamss@gmail.com', 'Jawa Barat'),
(76, 'Universitas Gunadarm', 'Machine Learning', 'Taripar BonJovi', '6.28E+12', 'mt93117013@gmail.com', 'Banten'),
(77, 'Universitas Gunadarm', 'Machine Learning', 'Tedy Sepdiansah', '6.28E+12', 'tedysepdiansah@live.com', 'DKI Jakarta'),
(78, 'Universitas Gunadarm', 'Machine Learning', 'Toby Zulkarnain', '6.28E+12', 'toby.zulka@gmail.com', 'DKI Jakarta'),
(79, 'Universitas Gunadarm', 'Machine Learning', 'Tony Sanjaya', '6.29E+12', 'tonysanjaya18@gmail.com', 'Jawa Barat'),
(80, 'Universitas Gunadarm', 'Machine Learning', 'Vandam Caesaria', '6.29E+12', 'vandam.kpj10@gmail.com', 'Jawa Barat'),
(81, 'Universitas Gunadarm', 'Machine Learning', 'Wahyu Aji Santo', '6.28E+12', 'wasantoso422@gmail.com', 'Jawa Barat'),
(82, 'Universitas Gunadarm', 'Machine Learning', 'Yogie Wirarisma', '6.29E+11', 'yogie.wira.5@gmail.com', 'Jawa Barat'),
(83, 'Universitas Gunadarm', 'Machine Learning', 'Yudhi Giyantoro', '6.29E+13', 'yudhigiyantoro@gmail.com', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `foto`) VALUES
('admin', 'admin', 'Shyfa', 'index.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
