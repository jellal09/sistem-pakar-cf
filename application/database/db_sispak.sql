-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 08:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kd_admin` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kd_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kd_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kd_gejala`, `nama_gejala`) VALUES
('G001', 'Tunas muda keriting'),
('G002', 'Tunas kering'),
('G003', 'Tunas mati'),
('G004', 'Daun menggulung'),
('G005', 'Terdapat jamur berwarna hitam'),
('G006', 'Terdapat bercak melingkar keperakan'),
('G007', 'Tunas atau daun muda mengkerut'),
('G008', 'Tunas atau daun muda menggulung'),
('G009', 'Daun muda mudah rontok'),
('G010', 'Terdapat bekas keperakan pada tangkai'),
('G011', 'Timbul bercak kuning atau coklat pada daun'),
('G012', 'Timbul bercak keperakan atau coklat pada buah'),
('G013', 'Pada tunas muda atau buah muda terdapat bercak coklat kehitaman, tengahnya berwarna lebih terang'),
('G014', 'Terdapat bercak pada buah disertai dengan cairan'),
('G015', 'Terdapat lubang pada buah'),
('G016', 'Buah busuk dan berguguran'),
('G017', 'Bunga rontok'),
('G019', 'Helai daun menebal'),
('G020', 'Daun berguguran'),
('G021', 'Daun kering'),
('G022', 'Daun pada ujung tunas menghitam'),
('G023', 'Terdapat bekas luka berwarna coklat keabuan pada buah'),
('G024', 'Bekas berwarna kuning pada buah'),
('G025', 'Buah gugur'),
('G026', 'Buah kering'),
('G027', 'Terdapat kutu seperti kapas putih pada buah'),
('G028', 'Terdapat lubang kecil di bagian tengahnya'),
('G029', 'Buah busuk'),
('G030', 'Terdapat belatung di dalam buah'),
('G031', 'Pertumbuhan tanaman lambat'),
('G032', 'Daun pucat'),
('G033', 'Ukuran daun kecil'),
('G034', 'Daun berwarna kuning'),
('G035', 'Ranting dan cabang kering'),
('G036', 'Terjadi retakan pada pada kulit'),
('G037', 'Terdapat lubang pada daun tua'),
('G038', 'Ranting muda mati'),
('G039', 'Buah terasa asam'),
('G040', 'Biji buah rusak'),
('G041', 'Buah berukuran kecil'),
('G042', 'Pangkal buah berwarna oranye'),
('G043', 'Muncul tonjolan di bawah daun'),
('G044', 'Muncul tonjolan pada batang atau akar'),
('G045', 'Kulit memprodukis gom'),
('G046', 'Kulit kayu berwarna keabuan'),
('G047', 'Kulit menjadi kering'),
('G048', 'Kulit kayu pecah'),
('G049', 'Kulit kayu mengelupas'),
('G050', 'Tepung berwarna putih pada tanaman'),
('G053', 'Daun muda mengkerut'),
('G054', 'Bercak kecil pada daun'),
('G055', 'Bercak kecil pada tangkai'),
('G056', 'Bercak kecil pada buah'),
('G057', 'Muncul semacam gabus berwarna kuning atau oranye'),
('G058', 'Tepung berwarna hijau kebiruan pada kulit buah'),
('G059', 'Pangkal buah busuk'),
('G060', 'Munculnya warna coklat pada tangkai buah'),
('G061', 'Ujung daun berwarna kuning'),
('G062', 'Cabang menjadi kering'),
('G063', 'Tanaman menjadi kering'),
('G064', 'Luka yang terus membesar pada tepi daun'),
('G065', 'Layu pada tunas muda'),
('G066', 'Kuncup bunga menjadi layu'),
('G067', 'Pangkal buah membesar'),
('G068', 'Timbulnya bercak hijau gelap'),
('G069', 'Terdapat luka berdiameter 3-5 mm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `kd_hasil` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_pengguna` varchar(10) NOT NULL,
  `penyakit` text NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `cf_hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`kd_hasil`, `tanggal`, `kd_pengguna`, `penyakit`, `kd_gejala`, `kd_penyakit`, `cf_hasil`) VALUES
(1, '2022-04-25', 'USR0001', 'a:4:{s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP002\";s:6:\"0.5600\";s:5:\"HP003\";s:6:\"0.4000\";s:5:\"HP004\";s:6:\"0.2000\";}', 'a:4:{s:4:\"', 'HP001', 0.7),
(2, '2022-04-25', 'USR0002', 'a:2:{s:5:\"HP012\";s:6:\"0.8680\";s:5:\"HP001\";s:6:\"0.8260\";}', 'a:4:{s:4:\"', 'HP012', 0.868),
(3, '2022-04-25', 'USR0003', 'a:5:{s:5:\"HP011\";s:6:\"0.7000\";s:5:\"HP007\";s:6:\"0.5600\";s:5:\"HP006\";s:6:\"0.5600\";s:5:\"HP005\";s:6:\"0.5000\";s:5:\"HP009\";s:6:\"0.4200\";}', 'a:4:{s:4:\"', 'HP011', 0.7),
(4, '2022-05-05', 'USR0004', 'a:4:{s:5:\"HP001\";s:6:\"0.8260\";s:5:\"HP004\";s:6:\"0.7360\";s:5:\"HP005\";s:6:\"0.7000\";s:5:\"HP003\";s:6:\"0.4000\";}', 'a:6:{s:4:\"', 'HP001', 0.826),
(5, '2022-05-11', 'USR0005', 'a:5:{s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP006\";s:6:\"0.5600\";s:5:\"HP007\";s:6:\"0.5600\";s:5:\"HP002\";s:6:\"0.4200\";s:5:\"HP004\";s:6:\"0.4000\";}', 'a:4:{s:4:\"', 'HP001', 0.7),
(6, '2022-05-11', 'USR0006', 'a:3:{s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP002\";s:6:\"0.5600\";s:5:\"HP004\";s:6:\"0.2000\";}', 'a:3:{s:4:\"', 'HP001', 0.7),
(7, '2022-05-19', 'USR0007', 'a:5:{s:5:\"HP006\";s:6:\"0.7000\";s:5:\"HP007\";s:6:\"0.7000\";s:5:\"HP001\";s:6:\"0.5600\";s:5:\"HP004\";s:6:\"0.5000\";s:5:\"HP005\";s:6:\"0.4000\";}', 'a:4:{s:4:\"', 'HP006', 0.7),
(8, '2022-05-20', 'USR0008', 'a:5:{s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP014\";s:6:\"0.7000\";s:5:\"HP008\";s:6:\"0.5600\";s:5:\"HP010\";s:6:\"0.4200\";s:5:\"HP022\";s:6:\"0.3000\";}', 'a:5:{s:4:\"', 'HP001', 0.7),
(9, '2022-05-20', 'USR0009', 'a:2:{s:5:\"HP001\";s:6:\"0.6832\";s:5:\"HP002\";s:6:\"0.4200\";}', 'a:3:{s:4:\"', 'HP001', 0.6832),
(10, '2022-05-29', 'USR0011', 'a:5:{s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP004\";s:6:\"0.5800\";s:5:\"HP008\";s:6:\"0.5600\";s:5:\"HP009\";s:6:\"0.4200\";s:5:\"HP022\";s:6:\"0.1800\";}', 'a:5:{s:4:\"', 'HP001', 0.7),
(11, '2022-06-01', 'USR0012', 'a:2:{s:5:\"HP001\";s:6:\"0.9604\";s:5:\"HP017\";s:6:\"0.7000\";}', 'a:3:{s:4:\"', 'HP001', 0.9604),
(12, '2022-06-05', 'USR0014', 'a:5:{s:5:\"HP001\";s:6:\"0.8064\";s:5:\"HP002\";s:6:\"0.7000\";s:5:\"HP017\";s:6:\"0.5600\";s:5:\"HP004\";s:6:\"0.3000\";s:5:\"HP005\";s:6:\"0.2400\";}', 'a:5:{s:4:\"', 'HP001', 0.8064),
(13, '2022-06-09', 'USR0017', 'a:2:{s:5:\"HP001\";s:6:\"0.9730\";s:5:\"HP017\";s:6:\"0.7000\";}', 'a:3:{s:4:\"', 'HP001', 0.973),
(14, '2022-06-09', 'USR0018', 'a:2:{s:5:\"HP002\";s:6:\"0.9100\";s:5:\"HP008\";s:6:\"0.6000\";}', 'a:2:{s:4:\"', 'HP002', 0.91),
(15, '2022-06-09', 'USR0019', 'a:1:{s:5:\"HP003\";s:6:\"0.8236\";}', 'a:4:{s:4:\"', 'HP003', 0.8236),
(16, '2022-06-09', 'USR0020', 'a:1:{s:5:\"HP004\";s:6:\"0.8600\";}', 'a:3:{s:4:\"', 'HP004', 0.86),
(17, '2022-06-09', 'USR0021', 'a:1:{s:5:\"HP005\";s:6:\"0.7900\";}', 'a:2:{s:4:\"', 'HP005', 0.79),
(18, '2022-06-09', 'USR0022', 'a:2:{s:5:\"HP006\";s:6:\"0.8800\";s:5:\"HP007\";s:6:\"0.6000\";}', 'a:2:{s:4:\"', 'HP006', 0.88),
(19, '2022-06-09', 'USR0023', 'a:2:{s:5:\"HP007\";s:6:\"0.9360\";s:5:\"HP006\";s:6:\"0.6000\";}', 'a:3:{s:4:\"', 'HP007', 0.936),
(20, '2022-06-09', 'USR0024', 'a:4:{s:5:\"HP008\";s:6:\"0.9983\";s:5:\"HP002\";s:6:\"0.7000\";s:5:\"HP017\";s:6:\"0.6000\";s:5:\"HP013\";s:6:\"0.4000\";}', 'a:6:{s:4:\"', 'HP008', 0.9983),
(21, '2022-06-09', 'USR0025', 'a:3:{s:5:\"HP009\";s:6:\"0.9865\";s:5:\"HP010\";s:6:\"0.7000\";s:5:\"HP022\";s:6:\"0.5800\";}', 'a:4:{s:4:\"', 'HP009', 0.9865),
(22, '2022-06-09', 'USR0026', 'a:3:{s:5:\"HP010\";s:6:\"0.9892\";s:5:\"HP009\";s:6:\"0.7000\";s:5:\"HP022\";s:6:\"0.6400\";}', 'a:4:{s:4:\"', 'HP010', 0.9892),
(23, '2022-06-09', 'USR0027', 'a:3:{s:5:\"HP011\";s:6:\"0.9640\";s:5:\"HP014\";s:6:\"0.7000\";s:5:\"HP020\";s:6:\"0.6000\";}', 'a:3:{s:4:\"', 'HP011', 0.964),
(24, '2022-06-09', 'USR0028', 'a:1:{s:5:\"HP012\";s:6:\"0.9640\";}', 'a:3:{s:4:\"', 'HP012', 0.964),
(25, '2022-06-09', 'USR0029', 'a:2:{s:5:\"HP013\";s:6:\"0.7480\";s:5:\"HP008\";s:6:\"0.7000\";}', 'a:3:{s:4:\"', 'HP013', 0.748),
(26, '2022-06-09', 'USR0030', 'a:3:{s:5:\"HP014\";s:6:\"0.9935\";s:5:\"HP011\";s:6:\"0.7000\";s:5:\"HP020\";s:6:\"0.6000\";}', 'a:5:{s:4:\"', 'HP014', 0.9935),
(27, '2022-06-09', 'USR0031', 'a:1:{s:5:\"HP015\";s:6:\"0.5800\";}', 'a:2:{s:4:\"', 'HP015', 0.58),
(28, '2022-06-09', 'USR0032', 'a:1:{s:5:\"HP016\";s:6:\"0.9942\";}', 'a:5:{s:4:\"', 'HP016', 0.9942),
(29, '2022-06-09', 'USR0033', 'a:1:{s:5:\"HP016\";s:6:\"0.9942\";}', 'a:5:{s:4:\"', 'HP016', 0.9942),
(30, '2022-06-09', 'USR0034', 'a:3:{s:5:\"HP017\";s:6:\"0.9946\";s:5:\"HP001\";s:6:\"0.7000\";s:5:\"HP008\";s:6:\"0.6000\";}', 'a:6:{s:4:\"', 'HP017', 0.9946),
(31, '2022-06-09', 'USR0035', 'a:1:{s:5:\"HP018\";s:6:\"0.9892\";}', 'a:4:{s:4:\"', 'HP018', 0.9892),
(32, '2022-06-09', 'USR0036', 'a:1:{s:5:\"HP019\";s:6:\"0.9160\";}', 'a:3:{s:4:\"', 'HP019', 0.916),
(33, '2022-06-09', 'USR0037', 'a:3:{s:5:\"HP020\";s:6:\"0.9664\";s:5:\"HP011\";s:6:\"0.7000\";s:5:\"HP014\";s:6:\"0.7000\";}', 'a:4:{s:4:\"', 'HP020', 0.9664),
(34, '2022-06-09', 'USR0038', 'a:1:{s:5:\"HP021\";s:6:\"0.9640\";}', 'a:3:{s:4:\"', 'HP021', 0.964),
(35, '2022-06-09', 'USR0039', 'a:3:{s:5:\"HP009\";s:6:\"0.9100\";s:5:\"HP010\";s:6:\"0.9100\";s:5:\"HP022\";s:6:\"0.7732\";}', 'a:4:{s:4:\"', 'HP009', 0.91),
(36, '2022-06-09', 'USR0040', 'a:1:{s:5:\"HP023\";s:6:\"0.9100\";}', 'a:2:{s:4:\"', 'HP023', 0.91),
(37, '2022-06-09', 'USR0041', 'a:3:{s:5:\"HP010\";s:6:\"0.9100\";s:5:\"HP009\";s:6:\"0.8800\";s:5:\"HP022\";s:6:\"0.7732\";}', 'a:4:{s:4:\"', 'HP010', 0.91),
(38, '2022-06-11', 'USR0042', 'a:3:{s:5:\"HP001\";s:6:\"0.6000\";s:5:\"HP002\";s:6:\"0.5000\";s:5:\"HP003\";s:6:\"0.4000\";}', 'a:3:{s:4:\"', 'HP001', 0.6),
(39, '2022-06-13', 'USR0043', 'a:3:{s:5:\"HP010\";s:6:\"0.9100\";s:5:\"HP009\";s:6:\"0.8800\";s:5:\"HP022\";s:6:\"0.7732\";}', 'a:4:{s:4:\"', 'HP010', 0.91),
(40, '2022-06-24', 'USR0044', 'a:1:{s:5:\"HP001\";s:6:\"0.6984\";}', 'a:2:{s:4:\"', 'HP001', 0.6984),
(41, '2022-06-24', 'USR0045', 'a:2:{s:5:\"HP001\";s:6:\"0.8673\";s:5:\"HP017\";s:6:\"0.4800\";}', 'a:3:{s:4:\"', 'HP001', 0.8673);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kondisi`
--

CREATE TABLE `tb_kondisi` (
  `kd_kondisi` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `bobot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kondisi`
--

INSERT INTO `tb_kondisi` (`kd_kondisi`, `kondisi`, `bobot`) VALUES
(1, 'Sangat Yakin', '1'),
(2, 'Cukup Yakin', '0.8'),
(3, 'Yakin', '0.6'),
(4, 'Kurang Yakin', '0.4'),
(5, 'Tidak Yakin', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `kd_pengetahuan` int(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`kd_pengetahuan`, `kd_gejala`, `kd_penyakit`, `mb`, `md`, `cf_pakar`) VALUES
(1, 'G001', 'HP001', 0.8, 0.2, 0.6),
(2, 'G002', 'HP001', 0.8, 0.1, 0.7),
(3, 'G003', 'HP001', 0.8, 0.1, 0.7),
(4, 'G004', 'HP002', 0.8, 0.2, 0.6),
(5, 'G005', 'HP002', 0.8, 0.3, 0.5),
(6, 'G006', 'HP003', 0.6, 0.3, 0.3),
(7, 'G007', 'HP003', 0.6, 0.3, 0.3),
(8, 'G008', 'HP003', 0.6, 0.2, 0.4),
(9, 'G009', 'HP003', 0.6, 0.2, 0.4),
(10, 'G010', 'HP004', 0.6, 0.3, 0.3),
(11, 'G011', 'HP004', 0.6, 0.1, 0.5),
(12, 'G012', 'HP004', 0.8, 0.2, 0.6),
(13, 'G013', 'HP005', 0.6, 0.3, 0.3),
(14, 'G014', 'HP005', 0.7, 0.2, 0.5),
(15, 'G015', 'HP006', 0.8, 0.2, 0.6),
(16, 'G016', 'HP006', 0.8, 0.1, 0.7),
(17, 'G015', 'HP007', 0.8, 0.3, 0.5),
(18, 'G017', 'HP007', 0.8, 0.2, 0.6),
(20, 'G019', 'HP008', 0.8, 0.1, 0.7),
(21, 'G004', 'HP008', 0.8, 0.2, 0.6),
(22, 'G020', 'HP008', 0.8, 0.1, 0.7),
(23, 'G021', 'HP008', 0.8, 0.2, 0.6),
(24, 'G022', 'HP008', 0.8, 0.2, 0.6),
(25, 'G023', 'HP008', 0.6, 0.2, 0.4),
(26, 'G024', 'HP009', 0.8, 0.3, 0.5),
(27, 'G025', 'HP009', 0.8, 0.2, 0.6),
(28, 'G026', 'HP009', 0.8, 0.1, 0.7),
(29, 'G027', 'HP009', 0.8, 0.1, 0.7),
(30, 'G028', 'HP010', 0.8, 0.2, 0.6),
(31, 'G029', 'HP010', 0.8, 0.1, 0.7),
(32, 'G025', 'HP010', 0.8, 0.1, 0.7),
(33, 'G030', 'HP010', 0.8, 0.1, 0.7),
(34, 'G031', 'HP011', 0.8, 0.2, 0.6),
(35, 'G032', 'HP011', 0.8, 0.1, 0.7),
(36, 'G033', 'HP011', 0.8, 0.1, 0.7),
(37, 'G034', 'HP012', 0.8, 0.1, 0.7),
(38, 'G035', 'HP012', 0.8, 0.1, 0.7),
(39, 'G036', 'HP012', 0.8, 0.2, 0.6),
(40, 'G037', 'HP013', 0.6, 0.2, 0.4),
(41, 'G020', 'HP013', 0.6, 0.2, 0.4),
(42, 'G038', 'HP013', 0.6, 0.3, 0.3),
(43, 'G033', 'HP014', 0.7, 0.2, 0.5),
(44, 'G039', 'HP014', 0.8, 0.2, 0.6),
(45, 'G040', 'HP014', 0.8, 0.2, 0.6),
(46, 'G041', 'HP014', 0.8, 0.1, 0.7),
(47, 'G042', 'HP014', 0.4, 0.2, 0.2),
(48, 'G043', 'HP015', 0.6, 0.3, 0.3),
(49, 'G044', 'HP015', 0.6, 0.2, 0.4),
(50, 'G045', 'HP016', 0.7, 0.1, 0.6),
(51, 'G046', 'HP016', 0.7, 0.2, 0.5),
(52, 'G047', 'HP016', 0.8, 0.2, 0.6),
(53, 'G048', 'HP016', 0.8, 0.2, 0.6),
(54, 'G049', 'HP016', 0.8, 0.1, 0.7),
(55, 'G050', 'HP017', 0.8, 0.2, 0.6),
(58, 'G053', 'HP017', 0.6, 0.3, 0.3),
(59, 'G021', 'HP017', 0.8, 0.3, 0.5),
(60, 'G003', 'HP017', 0.8, 0.2, 0.6),
(61, 'G054', 'HP018', 0.8, 0.1, 0.7),
(62, 'G055', 'HP018', 0.8, 0.1, 0.7),
(63, 'G056', 'HP018', 0.8, 0.1, 0.7),
(64, 'G057', 'HP018', 0.8, 0.2, 0.6),
(65, 'G058', 'HP019', 0.6, 0.3, 0.3),
(66, 'G059', 'HP019', 0.8, 0.1, 0.7),
(67, 'G060', 'HP019', 0.8, 0.2, 0.6),
(68, 'G061', 'HP020', 0.8, 0.1, 0.7),
(69, 'G033', 'HP020', 0.8, 0.2, 0.6),
(70, 'G062', 'HP020', 0.8, 0.2, 0.6),
(71, 'G063', 'HP020', 0.6, 0.3, 0.3),
(72, 'G064', 'HP021', 0.8, 0.1, 0.7),
(73, 'G065', 'HP021', 0.8, 0.1, 0.7),
(74, 'G066', 'HP021', 0.8, 0.2, 0.6),
(75, 'G067', 'HP022', 0.4, 0.3, 0.1),
(76, 'G029', 'HP022', 0.6, 0.2, 0.4),
(77, 'G026', 'HP022', 0.6, 0.3, 0.3),
(78, 'G025', 'HP022', 0.6, 0.2, 0.4),
(79, 'G068', 'HP023', 0.8, 0.1, 0.7),
(80, 'G069', 'HP023', 0.8, 0.1, 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `kd_pengguna` varchar(10) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`kd_pengguna`, `nama_pengguna`) VALUES
('USR0001', 'desta'),
('USR0002', 'siska'),
('USR0003', 'dio'),
('USR0004', 'winko'),
('USR0005', 'shogun'),
('USR0006', 'miko'),
('USR0007', 'fio'),
('USR0008', 'loid'),
('USR0009', 'anya'),
('USR0010', 'doko'),
('USR0011', 'bison'),
('USR0012', 'roi'),
('USR0013', 'fafa'),
('USR0014', 'kiano'),
('USR0015', 'fiola'),
('USR0016', 'klila'),
('USR0017', ''),
('USR0018', '1'),
('USR0019', '2'),
('USR0020', '2'),
('USR0021', '2'),
('USR0022', '2'),
('USR0023', '2'),
('USR0024', '2'),
('USR0025', '2'),
('USR0026', '2'),
('USR0027', '2'),
('USR0028', '2'),
('USR0029', '2'),
('USR0030', '2'),
('USR0031', '2'),
('USR0032', '2'),
('USR0033', '2'),
('USR0034', '2'),
('USR0035', '2'),
('USR0036', '2'),
('USR0037', '2'),
('USR0038', '2'),
('USR0039', '2'),
('USR0040', '2'),
('USR0041', '2'),
('USR0042', 'yoyo'),
('USR0043', 'fian'),
('USR0044', 'desta'),
('USR0045', 'desta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `penanganan_penyakit` text NOT NULL,
  `detail_penyakit` text NOT NULL,
  `kategori` enum('Hama','Penyakit') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kd_penyakit`, `nama_penyakit`, `penanganan_penyakit`, `detail_penyakit`, `kategori`, `gambar`) VALUES
('HP001', 'Kutu Loncat jeruk(Diaphorina Citri)', 'Pengendalian dengan insektisida hendaknya dilakukan pada saat tanaman menjelang dan saat bertunas. Insektisida yang cukup efektif ialah yang mengandung bahan aktif Dimethoate (Perfekthion, Roxion 4 EC, Rogor 40 EC dan Cygon), Monocrothopos (Azodrin 60 WSC) dan endosulfan (Thiodan 3G, 35 EC dan Dekasulfan 350 EC)', 'Hama ini menyerang tangkai dan kuncup daun, tunas, serta daun-daun muda. Serangan ringan mengakibatkan tunas-tunas muda keriting dan pertumbuhannya terhambat, serangan berat dapat mengakibatkan tunas-tunas menjadi keriting dan mati.', 'Hama', 'kutu_loncat_jeruk.jpg'),
('HP002', 'Kutu Daun (Toxopetra citricidus, Aphis gossypii)', 'Pengendalian dilakukan segera setelah koloni kutu terlihat pada tunas, yakni dengan insektisida yang mengandung bahan aktif Methidathion (Supracide 40 EC), Dimethoate (Perfekthion, Rogor 40 EC Cygon), Diazinon (Basudin 60 EC, 10 G, Basazinon 30 EC), Phosphamidon (Dimeccron 50 SCW), Malathion (Gisonthion 50 EC, 50 WP), Confidor dan Afugan', 'Hama ini menyerang tunas muda dan bunga dengan menghisap cairannya sehingga menyebabkan daun menggulung dan membekas samoai daun dewasa. Kutu tersebut menghasilkan embun madu berlebihan melapisi permukaan daun dan merangsang tumbuhnya jamur berwarna hitam', 'Hama', 'kutu_daun_jeruk.jpg'),
('HP003', 'Ulat Peliang Daun (Phyllocnistis citrella S.)', 'Pengendalian secara kimiawi adalah disemprot melalui daun dengan insektisida Methidathion (Supracide 40 EC, Basudin 60 EC), Malathion (Gisonthion 50 EC, 50 WP), Diazinon (Basazinon 45/30EC). Bila serangan tidak parah cukup daunnya dipetik dan dibenam dalam tanah', 'Ulat menyerang daun muda dan meninggalkan bekas seperti alur melingkar transparan atau keperak-perakan. Serangan berat terjadi pada tanaman sedang bertunas, yang mengakibatkan tunas atau daun muda berkerut, menggulung mudah rontok dan tumbuh tidak normal', 'Hama', 'ulat_peliang_daun.jpg'),
('HP004', 'Tungau (Tenuipalpus sp., Eriophyes sheldoni, Tetranychus sp.)', 'Pengendaliannya dapat dilakukan dengan penyemprotan Propaargite (Omite), Cyhexation (Plictran), Difocol (Kelthane), Oxythioquimox (Morestan 25 WP, Dicarbam 50 WP) pada awal peningkatan populasi, efektif menekan populasi tungau ', 'Tungau menyerang tangkai, daun dan buah. Serangan pada tangkai meninggalkan bekas keperak-perakan, pada daun timbul bercak kuning atau coklat, dan pada buah menyebabkan bercak keperak-perakan atau coklat. Populasinya menigkat pada musim kemarau.', 'Hama', 'tungau.jpg'),
('HP005', 'Kutu Penghisap Daun (Helopeltis antonii)', 'Penggunaan insektisida Fenitrotion mothion (Sumicidine 50 EC), Fenithion (Lebycid), Metamidofos (Tamaron), Methomil (Lannate 25 WP), cukup efektif untuk menekan populasi Helopeltis', 'Bercak- bercak coklat kehitaman dengan pusat berwarna lebih terang terdapat  pada tunas-tunas muda atau buah muda yang terserang. Pada buah bercak-bercak ini biasanya disertai dengan mengalirnya cairan buah yang kemudian kering membentuk semacam blendok yang akhirnya menjadi bercak nekrosis. Bercak bisa terjadi secara tunggal, namun apabila serangan berat biasanya bercak-bercak saling berangkai sehingga perkembangan tunas terganggu dan kadang-kadang mengakibatkan tunas kering', 'Hama', 'kutu_penghisap_daun.jpg'),
('HP006', 'Ulat Penggerek Buah (Citripestis sagittiferella)', 'Pengendalian secara mekanis dapat dilakukan dengan memetik buah-buah yang terinfeksi kemudian dibenam atau dibakar. Pengendalian secara kimiawi adalah dengan menggunakan insektisida Methomyl (Lannate 25 WP, Nudrin 24 WSC) dan Methidathion (Supracide 40 EC) yang disemprotkan pada saat buah berumur 2-5 bulan cukup efektif menekan timbulnya kerusakan karena Citripestis ', 'Ulat ini menggerek buah sampai ke daging buah, terlihat bekas lubang yang mengeluarkan getah seperti blendok, kadang-kadang tertutup dengan kotoran. Bagian buah yang terserang adalah separuh bagian bawah dan apabila serangan berat, buah-buah akan busuk dan gugur. Buah yang peka terhadap serangan hama ini adalah buah yang berumur 2-5 bulan dari jenis jeruk besar, manis, kates, Satsuma, navel orange, dan grape fruit, sedangkan keprok dan siem relatif tidak disukai', 'Hama', 'ulat_penggerek_buah.jpg'),
('HP007', 'Ulat Penggerek Bunga (Prays sp.)', 'Pengendalian secara kimia dapat dilakukan dengan penyemprotan insektisida dengan bahan aktif Methomyl (Lannate 25 WP) atau Methidathion (Supracide 40 EC) ', 'Kerusakan bunga atau buah jeruk biasanya disebabkan oleh dua jenis ulat yang sulit dibedakan. Prays citri terutama menyerang kuncup bunga jeruk manis atau jeruk besar yang belum mekar sehingga apabila buah berkembang akan meninggalkan bekas lubang-lubang bergaris tengah 0,3 -0,5 cm. Bunga-bunga yang terserang parah mudah rontok atau gugur. Infeksi sekunder sering terjadi melalui luka dan menyebabkan buah-buah muda gugur sebelum tua', 'Hama', 'ulat_penggerek_bunga_dan_buah.jpg'),
('HP008', 'Thrips (Scirtotfrips citri)', 'Pengendalian yang bisa dilakukan antara lain dengan menjaga agar lingkungan tajuk tanaman tidak terlalu rapat sehingga cahaya matahari bisa menerobos sampai ke bagian dalam tajuk. Hindarkan penggunaan mulsa jerami, karena dapat digunakan oleh Thrips untuk meletakkan telur. Penggunaan insektisida dengan bahan aktif Dicofol (Kelthane) atau Z propargite (Omite) terutama pada saat tanaman sedang bertunas, berbunga dan pembentukan buah pada musim kemarau cukup efektif mengendalikan populasi Thrips ', 'Serangan Thrips pada tangkai dan daun muda mengakibatkan helai daun menebal, kedua sisi tepi daun agak menggulung ke atas, dan pertumbuhannya tidak normal. Daun pada ujung Tunas menjadi hitam, kering kemudian gugur. Serangan pada buah terjadi ketika buah masih sangat muda (sebesar biji kacang hijau), dengan meninggalkan bekas luka berwarna coklat keabu-abuan yang kadang-kadang disertai garis nekrosis di sekeliling luka. Bekas luka ini tampak di permukaan kulit buah di sekeliling tangkai', 'Hama', 'thrips.jpg'),
('HP009', 'Kutu Dompolan (Planococcus citri)', 'Planococcus citri dikendalikan oleh beberapa musuh alam, sehingga populasinya relatif rendah. Pengendalian secara kimiawi dapat dilakukan dengan penyemprotan insektisida b.a. Methomyl (Lannate 25 WP), Triazophos (Fostathion 40 EC), Carbaryl (Sevin 85 S), Methidathion (Supracide 40 EC), mencegah datangnya semut yang sering memindahkan kutu serta mengatur kepadatan tajuk tanaman agar tidak terlalu padat dan saling menaungi ', 'Kutu menyerang tangkai buah dan meninggalkan bekas berwarna kuning,  kemudian kering sehingga banyak buah-buah yang gugur. Pada bagian tanaman yang terserang tampak dipenuhi oleh kutu-kutu seperti kapas', 'Hama', 'kutu_dompolan.jpg'),
('HP010', 'Lalat Buah (Dacus sp.)', 'Pengendalian dapat dilakukan dengan insektisida Fenthion (Lebaycid 550 EC), Dimethoathe (Roxion 40 EC, Rogor 40 EC) dicampur dengan Feromon Methyl-Eugenol atau Protein-Hydrolisate diketahui efektif untuk mengendalikan lalat buah ', 'Dacus sp. menyerang buah-buah terutama yang hampir masak, sehingga menyebabkan buah menjadi busuk, biasanya terdapat lubang kecil di bagian tengahnya, kemudian gugur. Apabila dibelah, pada daging buah terdapat belatung-belatung kecil yang biasanya meloncat apabila tersentuh. Lalat buah lebih tertarik pada buah jeruk yang berkulit tipis. Hama ini biasanya menyerang bersamaan dengan Citripestis sagittiferella, sehingga kadang-kadang sulit membedakan serangan kedua hama tersebut', 'Hama', 'lalat_buah.jpg'),
('HP011', 'Nematoda atau Cacing', 'Pengendalian terhadap hama ini dapat dilakukan dengan pemberian nematisida yang disiramkan pada tanah sekitar tanaman, atau diberikan bersamaan dengan pemupukan ', 'Nematoda sering terabaikan, padahal sebenarnya banyak sekali Nematoda yang hidup di dalam tanah dan dapat merusak akar tanaman. Gejala serangan terlihat pada pertumbuhan yang terhambat, daun mengecil, dan pucat', 'Hama', '1.png'),
('HP012', 'Kutu Sisik (Lepidosaphes beckii, Unaspis citri)', 'Secara kimia, populasi kutu dapat dikendalikan dengan menggunakan pestisida dengan bahan aktif Diazinon (Basudin 60 EC, 10 G, Basazinon 45/30 EC), Phophamidon (Dimecron 50 SCW), Dichlorphos (Nogos 50 EC), Methidathion (Supracide 40 EC). Perlu diperhatikan bahwa penggunaan Dicofol (Kelthane) sebagai pengendali tungau mendukung meningkatnya populasi kutu ini ', 'Kutu ini menyerang daun, buah dan tangkai, menyukai tempat-tempat terlindung seperti di bawah permukaan daun, dan di sepanjang ibu tulang daun. Hama ini mengakibatkan daun-daun berwarna kuning, bercak-bercak khlorotis dan seringkali mengakibatkan defoliasi. Pada serangan berat mengakibatkan ranting dan cabang kering serta terjadi retakan-retakan pada kulit. Serangan di sekeliling batang menyebabkan buah gugur, serangan pada buah mengakibatkan kualitas buah menurun karena kulit buah tampak kotor dan bila dibersihkan akan meninggalkan bekas bercak hijau atau kuning pada kulit bawah', 'Hama', 'kutu_sisik.jpg'),
('HP013', 'Kumbang Belalai (Maleuterpes dentipes)', 'Pengendalian terhadap hama ini adalah dengan sanitasi kebun, lingkungan perakaran perlu dijaga agar tidak terlalu lembab, serta penggunaan insektisida Carbaryl (Sevin 85 S) dan Diazinon (Basudin 60 EC, 10 G, Cymbush 5 EC dan Ripord 5 EC) pada tanah di sekitar batang ', 'Kumbang dewasa umumnya menyerang daun-daun tua pada ranting-ranting atau dahan-dahan bagian bawah, dengan meninggalkan lubang lubang bekas gerekan. Kumbang ini tidak menyerang daun-daun muda, serangan berat mengakibatkan daun gugur dan ranting-ranting muda terkadang mati', 'Hama', 'kumbang_belalai.jpg'),
('HP014', 'Citrus Vein Phloem Degeneration (CVPD)', 'Tanaman jeruk yang terinfeksi CVPD tidak dapat disembuhkan dengan penggunaan pestisida atau bahan kimia lainnya. Pengendalian Penyakit ini pada dasarnya ditekankan pada usaha-usaha pencegahan (preventif). ', 'Penyebabnya adalah organisme seperti bakteri (Bacterium Like Organism atau BLO). Patogen CVPD di alam secara geografis menyebar dari satu daerah ke daerah lain. Masuknya penyakit ini ke dalam suatu kebun disebabkan oleh bahan tanaman (tunas mata tempel) yang terinfeksi. Sedangkan penyebarannya ke tanaman lain dalam satu kebun biasanya melalui perantaraan vektor kutu loncat Diaphorina citri atau penggunaan budwood yang terinfeksi', 'Penyakit', 'CVPD.jpg'),
('HP015', 'Woody Gall (Vein Enation)', 'Virus ini menular melalui mata tempel dan melalui beberapa jenis kutu daun, Toxoptera citridus, Alphis gossypii, dan Myzus persicae. Karenanya, serangan CVEV hampir selalu bersama-sama dengan CTV. Penyakit ini dapat dicegah dengan menggunakan mata tempel yang bebas penyakit dan mengendalikan vektor seperti pada pengendalian kutu daun ', 'Pada tanaman jeruk nipis infeksi Citrus Vein Enation Virus (CVEV) menyebabkan munculnya tonjolan-tonjolan (enation) yang tersebar tidak beraturan pada tulang daun di permukaan bawah daun. Gejala ini mula-mula berukuran kecil dan mulai tampak pada daun-daun muda yang biasanya terjadi 2-3 bulan sejak penularan. Gejala tersebut semakin jelas pada daun tua, gejala tonjolan-tonjolan ini bisa terjadi pada sebagian atau seluruh daun', 'Penyakit', 'woddy_gall.jpg'),
('HP016', 'Penyakit Blendok', 'Penyakit ini dapat dikendalikan dengan pengelolaan tanaman yang baik seperti pemotongan cabang-cabang yang terinfeksi, atau mengerok luka-luka kecil pada batang akibat infeksi, kemudian bekas potongan atau kerokan tersebut disebut dengan Carbolineum atau fungisida Copper yang dicampur minyak kayu. Penyemprotan Benomyl pada kulit 2 kali dalam 1 tahun dapat mencegah timbulnya Diplodia ', 'Penyakit ini disebabkan oleh jamur Diplodia Natalensis. Gejala serangan dapat dilihat pada batang atau cabang, seringkali dimulai di sekitar ketiak cabang. Kulit memproduksi gom yang kadang-kadang menarik perhatian kumbang. Bersamaan dengan keringnya gom, kulit yang terserang berangsur-angsur kering dengan meninggalkan bekas berwarna hitam. Bila infeksi menyebar ke bagian kayu, warna kayu berubah menjadi keabu-abuan. Pada stadium selanjutnya timbul piknidia jamur, menyebabkan kulit menjadi kering, pecah dan mengelupas', 'Penyakit', 'penyakit_blendok.jpg'),
('HP017', 'Embun Tepung', 'Pengendalian terhadap penyakit ini adalah dengan penyemprotan fungisida Pyrazophos (Afugas) dan Bupirimate (Nimrot 25 EC) ', 'Penyebab penyakit ini adalah jamur odidium tingitanium. Tepung-tepung berwarna putih berkembang pada tunas, daun-daun muda dan tangkai-tangkai daun, khususnya pada bagian permukaan atas. Pertumbuhannya menyebar tidak teratur ke seluruh permukaan daun yang menyebabkan daun-daun muda mengkerut dan kering tetapi daun tidak gugur dari tangkainya. Apabila serangan parah, tunas kadang-kadang mati', 'Penyakit', 'embun_tepung.jpg'),
('HP018', 'Penyakit Kudis', 'Batang bawah di mana penyakit biasanya berkembang hendaknya dipangkas secara teratur. Penyemprotan perlu dilakukan secara teratur dengan menggunakan fungisida Dithiocarbamate/Benomyl (Benlate) ', 'Penyebab penyakit ini adalah jamur Sphaceloma fawcetti. Berawal dari bercak kecil jernih pada daun, tangkai atau buah. Kerja ini secara pelan-pelan berkembang menjadi semacam gabus berwarna kuning atau orange. Umumnya Penyakit ini menyerang tanaman di pembibitan, khususnya menyerang jaringan-jaringan muda batang bawah Rough dan Sour Orange', 'Penyakit', 'penyakit_kudis.jpg'),
('HP019', 'Busuk Buah', 'Pengendalian yang cukup efektif terhadap penyakit ini antara lain adalah menghindari kerusakan mekanis pada saat panen dan pengepakan, pencelupan buah-buah dalam air panas atau larutan fungisida Benomyl atau Thiobendazol (Benlate) atau dengan penambahan lilin-lilin khusus. Penyebaran Phytopthora biasanya melalui percikan-percikan air dari tanah, maka bagian bawah pohon hendaknya dipangkas atau disangga agar dompolan buah tidak terlalu dekat dari permukaan tanah ', 'Penyebab penyakit ini adalah jamur Penicillium spp., Phytophthora citriphthora, dan Botryodiplodia theobromae. Green mould disebabkan oleh Penicillium digitatum yang membentuk tepung-tepung padat berwarna hijau-kebiruan pada permukaan kulit buah', 'Penyakit', 'busuk_buah.jpg'),
('HP020', 'Busuk Akar dan Pangkal Batang', 'Pengendalian terhadap penyakit ini dapat dilakukan secara kultur teknis melalui pengolahan tanah dan pengairan yang baik. Penggunaan batang bawah yang peka terhadap SO dan RL hendaknya dihindari. Tanah untuk pembibitan sebaiknya disterilisasi dengan bahan kimia (terutama pembibitan dalam polybag), seperti Dazomet, metam-sodium atau metalaxyl. Tinggi tempelan sekurang-kurangnya 20 cm diatas permukaan tanah supaya tanaman dapat ditanam lebih dalam. Bibit jeruk hendaknya ditanam pada gundukan kecil dengan saluran air di sekitarnya dan rumput yang tumbuh di sekitar batang harus dibersihkan. Apabila infeksi awal segera terlihat, kulit yang terinfeksi dikelupas dengan pisau dan diberi fungisida ', 'Penyebab penyakit ini adalah jamur Phytophthora Nicotianae var. Parasitica. Gejala busuk akar mula-mula terlihat jelas pada daun, terutama daun-daun paling ujung yang berukuran lebih kecil berwarna kuning dan pertunasan nya kurang segar. Cabang-cabang yang terserang menjadi kering dan biasanya tidak terjadi pertumbuhan baru. Bila akar terserang parah, seluruh tanaman menjadi kering dengan cepat', 'Penyakit', 'busuk_akar.jpg'),
('HP021', 'Antraknose ', 'Pengendalian dapat dilakukan secara mekanis dengan memangkas cabang-cabang yang mengalami dieback, yang biasanya merupakan sumber infeksi. Dapat juga menggunakan fungisida campuran Copper bordeaux untuk digunakan pada musim penghujan ', 'Penyebab penyakit ini adalah jamur Colletotrichum sp. Serangan jamur ini biasanya hanya terjadi pada daun, tangkai, dan buah, terutama daun yang hampir tua. Serangan ditandai adanya luka luka yang terus membesar/berkembang, Biasanya pada tepi daun bagian ujung. Pada tunas tunas muda khususnya untuk jeruk nipis, spesies Colletotrichum menyebabkan wither-tip ( gejala layu kemudian kering yang dimulai dari ujung tunas). Gejala ini merupakan gejala awal dieback (kematian Tunas atau ranting dimulai dari ujung ke bagian pangkal) dan bersifat lebih agresif. Gejala lain terjadi pada kuncup bunga berupa layu. Cendawan ini memproduksi spora-spora pada jaringan mati pada kondisi basah atau lembab', 'Penyakit', 'antraknose.jpg'),
('HP022', 'Buah Gugur Prematur', 'Pengendalian yang cukup efektif terhadap jamur ini adalah menekan perkembangan penyakit gugur buah prematur dengan penyemprotan benomyl (Benlate) atau Caprafol 2 kali, yaitu pada saat mekarnya kuncup bunga dan 2 minggu berikutnya ', 'Penyebab penyakit ini adalah jamur Fusarium sp., Colletotrichum sp., dan Alternaria sp. 2 sampai 4 Minggu sebelum panen merupakan periode peka terhadap penyakit ini. Serangan jamur ini menyebabkan buah gugur sebelum masak. Gejala serangan diawali dengan membesarnya pangkal buah, kemudian busuk kering dan akhirnya gugur. Umumnya jamur ini menginfeksi bunga dan buah pada pohon-pohon yang terinfeksi oleh penyebab lain, sehingga sambungan antara buah dengan tangkai menjadi lemah', 'Penyakit', 'buah_gugur_prematur.jpg'),
('HP023', 'Kanker', 'Apabila serangan hebat, perlu dilakukan pengendalian dengan menyemprot daun-daun muda dan buah dengan fungisida Copper misalnya Bubur Bordeaux, Copper Oxychlorida dan mencegah kerusakan yang ditimbulkan oleh ulat belalang daun. Di pembibitan serangan kanker dapat ditekan dengan pencelupan mata tempel dalam 1000 ppm streptomicyn selama 1 jam sebelum ditempel ', 'Penyebab penyakit ini adalah bakteri Xanthomonas Campestris Cv. Citri. Luka karena kanker berasal dari timbulnya bercak kecil berwarna hijau gelap, kadang-kadang berwarna kuning di sepanjang tepinya. Seringkali luka membesar dan tampak sebagai gabus yang bagian tengahnya pecah. Tidak seperti kudis, luka terjadi pada bagian atas dan bawah permukaan daun. Luka pada buah-buah dan tangkai gejala serupa dengan gejala pada daun, tetapi tidak disertai warna kuning di tepinya. Luka-luka ini berdiameter 3-5 mm, pada infeksi berat bercak-bercak tersebut cenderung untuk bergabung', 'Penyakit', 'kanker.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`kd_hasil`);

--
-- Indexes for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  ADD PRIMARY KEY (`kd_kondisi`);

--
-- Indexes for table `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`kd_pengetahuan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`kd_pengguna`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `kd_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `kd_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  MODIFY `kd_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `kd_pengetahuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
