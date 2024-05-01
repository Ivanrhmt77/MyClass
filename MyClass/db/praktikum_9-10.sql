-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 30, 2024 at 07:37 PM
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
-- Database: `praktikum_9-10`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `asal_sma` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nrp`, `jenis_kelamin`, `jurusan`, `semester`, `kelas`, `email`, `alamat`, `no_hp`, `asal_sma`) VALUES
('Midoriya Izuku', '3123599999', 'Laki-laki', 'D3 Teknik Informatika', '4', 'A', 'deku@it.student.pens.ac.id', 'TMB', '0813681283', 'UA Academy'),
('Kiyotaka Ayanokouji', '3123600000', 'Laki-laki', 'D4 Sains Data Terapan', '4', 'B', 'ayano@it.student.pens.ac.id', '', '087855310680', 'Koudo Ikusei'),
('Muhammad Rafi Rizaldi', '3123600001', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'aldi@it.student.pens.ac.id', 'TAMAN MENYANGGONG ASRI no.10 RT.25/RW.10 MENYANGGONG KLETEKKec.TAMAN, Kab. SIDOARJO 61257JAWA TIMUR', '082245168715', ''),
('Lintang Arum Sari', '3123600002', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'lintang@it.student.pens.ac.id', 'Jl. Puncak Borobudur, Perum. Griya Shanta blok G 301, RT.04, RW.15, Mojolangu, Lowokwaru, Kota Malang, 65142', '081216161728', ''),
('Zalfail Mumtaza Attamami', '3123600003', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'taza@it.student.pens.ac.id', 'Jalan Pramuka IV/18 RT 06 RW 02 Kel. Gunung Sekar Kec. Sampang / 69213', '082338232475', ''),
('Muhammad Fajar Siddiq', '3123600004', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'fajar@it.student.pens.ac.id', 'BERBEK 1G NO.20A WARU SIDOARJO KODE POS 61256', '081234828530', ''),
('Ivan Rahmat Prakasa', '3123600005', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'ivanrhmt@it.student.pens.ac.id', 'Perumnas Citra Arka Griya, blok D nomor 35, kelurahan Padang Lekat, kecamatan Kepahiang, kabupaten K', '083187144476', 'SMA Negeri 01 Kepahiang'),
('Fransiska Elsa Dina Mareta', '3123600006', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'elsa@it.student.pens.ac.id', 'Pakis Tirtosari V No. 75/60256', '085959594679', ''),
('Rifki Alaudin', '3123600007', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'rifki@it.student.pens.ac.id', 'Jalan Bola Voli E 25, Griya Japan Raya, Sooko, Mojokerto / 61361', '081217678979', 'SMA IT Aluswah'),
('Salwa Fadhila Rahmania', '3123600008', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'lala@it.student.pens.ac.id', 'Ngagel Jaya Barat 1 no. 4 / 60283', '081335519711', ''),
('Kansa Adeneva Riti Syarani', '3123600009', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'kansa@it.student.pens.ac.id', 'Jalan Mawar, Nambangrejo, Sukorejo, Ponorogo, Jawa Timur / 63453', '082143157889', ''),
('Yofi Yudistian', '3123600010', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'yofi@it.student.pens.ac.id', 'Gang Ampel, Dsn. Rembes, RT 003 / RW 001, Kode Pos 62391, Ds. Gesikharjo, Kec. Palang, Kab. Tuban, P', '085606512524', ''),
('Mohammad Rizaldy Ramadhan', '3123600011', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'rizaldy@it.student.pens.ac.id', 'Jl. Basuki Rahmat No. 105 Kab. Banyuwangi Prov. Jawa Timur 68414', '081252881115', ''),
('Adrian Mendienta Tumanggor', '3123600012', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'adrian@it.student.pens.ac.id', 'JL. Tegal Mulyorejo Baru No.99, Kejawaan Putih Tamba, Kec. Mulyorejo, Surabaya, Jawa Timur 60115', '088224001278', ''),
('Nanda Ahmad Zidan', '3123600013', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'nanda@it.student.pens.ac.id', 'JL. KH. BISRI SYANSURI NO.76, Denanyar, Jombang, Jawa Timur / 61416', '085792735207', ''),
('Shalsabilla Wahyu Arifhana', '3123600014', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'salsa@it.student.pens.ac.id', 'Perumahan Bukit Permai Mojoroto Blok D-18, Kec. Mojoroto, Kel. Mojoroto RT 15 RW 5 / 64112', '082141488675', ''),
('Nayla Herfiana Putri', '3123600015', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'nayla@it.student.pens.ac.id', 'TEMPUREJO 5 SBY Kota Surabaya Prov. Jawa Timur 60113', '089699442229', ''),
('Muhammad Alif Aditya', '3123600016', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'alif@it.student.pens.ac.id', 'Barito 1 No: 42A Kel. Mangundikaran Kec. Nganjuk Kab. Nganjuk Kab. Nganjuk Prov. Jawa Timur 64413', '081232714156', ''),
('Salma Afifa Azis', '3123600017', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'salma@it.student.pens.ac.id', 'JALAN RAYA PAPAR PARE RT 03 RW 08 DESA TEGOWANGI, PLEMAHAN, KAB KEDIRI Kab. Kediri Prov. Jawa Timur ', '085713261878', ''),
('Eugenia Valiant Van True', '3123600018', 'Perempuan', 'D4 Teknik Informatika', '2', 'A', 'vantrue@it.student.pens.ac.id', 'Magersari Permai AN 26 RT 043 RW 007 Kab. Sidoarjo Prov. Jawa Timur 61212', '081235564902', ''),
('Raihan Malano Arrasyid', '3123600019', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'malano@it.student.pens.ac.id', 'Perum Bumi Mentari Blok J.1 No. 9 Kota Depok Prov. Jawa Barat 16517', '085156726468', ''),
('Vemas Satria Edy Pratama', '3123600020', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'vemas@it.student.pens.ac.id', 'Dusun Kendalrejo RT002/RW006 ,Desa kendalrejo,Kecamatan Talun 66183', '081554242294', ''),
('Muhammad Zaidan Zhafiz Satrianto', '3123600021', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'zaidan@it.student.pens.ac.id', 'Jl. Merpati No 40AB, Betro, Sedati, Sidoarjo', '087855310680', ''),
('George Winston Kalim', '3123600022', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'george@it.student.pens.ac.id', 'JL. TALES IV NO 1, RT 3 / RW 10, Kelurahan Jagir, Kecamatan Wonokromo, Kota Surabaya Prov. Jawa Timu', '082132928170', ''),
('Muhammad Felda Hibatullah', '3123600023', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'ifel@it.student.pens.ac.id', 'Jalan Kalimantan A11 RT 2 RW 1 Sidorukun Indah Gresik / 61119', '085159520811', ''),
('Shafrial Azis', '3123600024', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'aril@it.student.pens.ac.id', 'Jl. KH. MOH KHOLIL VII/04 RT. 002 RW. 007 Kab. Bangkalan Prov. Jawa Timur / 69115', '081232431462', ''),
('Moch. Alif Akbar', '3123600025', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'akbar@it.student.pens.ac.id', 'Dusun joyomulyo RT. 3 RW. 7 Desa Kedawung Kulon Kec. Grati Kab. Pasuruan Prov. Jawa Timur 67184', '085156387774', ''),
('Renaldy Izza Briliandin Tino Saputra', '3123600026', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'izza@it.student.pens.ac.id', 'Lebak Timur 3 D No. 17 T Kota Surabaya Prov. Jawa Timur 60134', '081218667906', ''),
('Muhammad Raihan Ghani', '3123600027', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'ghani@it.student.pens.ac.id', 'Jl. Pajajaran Indah I No.36, RT/RW 06/13, Baranansiang, Bogor Timur, Kota Bogor, 16143', '081228843846', ''),
('Muhammad Zaky Mubarok', '3123600028', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'zaky@it.student.pens.ac.id', 'Jl. Krisna, RT01/RW01, Lembah, Babadan, Ponorogo', '085877567385', ''),
('Mohammad Zidan Wianto Putra', '3123600029', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'zidan@it.student.pens.ac.id', 'Jalan palem selatan III MC 39 pondok chandra 61256', '081330148235', ''),
('Aldino Matasik', '3123600030', 'Laki-laki', 'D4 Teknik Informatika', '2', 'A', 'aldino@it.student.pens.ac.id', 'Apartemen Puncak CBD, Jl. Keramat I, Jajar Tunggal, Kec. Wiyung, Surabaya, Jawa Timur 60229', '089512972855', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
