-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 03:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4133903_furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id_cont` int(5) NOT NULL,
  `cont_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cont_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cont_subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cont_msg` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id_cont`, `cont_name`, `cont_email`, `cont_subject`, `cont_msg`) VALUES
(1, 'asd', 'ads', 'asd', ' asd');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `desSingkat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desPanjang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `addInfo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `g1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `g2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `merk` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_dekor` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `nama`, `harga`, `desSingkat`, `desPanjang`, `addInfo`, `g1`, `g2`, `rating`, `merk`, `tahun`, `kode_barang`, `jenis_dekor`) VALUES
(1, 'Sofa 2 Kursi Ondan', '6000000', 'Lebih Berwarna dengan Bluemingdale 2 Seater Sofa', 'Memiliki dudukan lengan yang menjangkau setiap sudut dan posisi dudukmu', 'Dimensi : 150cm x 80cm x 80cm', 'sofaku_1.jpg', 'sofaku_2.jpg', '5', 'Ondan', '2015', '30001', 'RUM'),
(2, 'Tempat Tidur Laci Joseph', '4800000', 'Tidak Termasuk Matras', 'Tampilan minimalis dengan perpaduan warna netral dan kayu yang menawan', 'Dimensi Keseluruhan : 114 cm x 216 cm x 100 cm', 'kasurku_1.jpg', 'kasurku_2,jpg', '1', 'Anaika', '2015', '30002', 'KAM'),
(3, 'Meja Makan Mutoyo', '9600000', 'Blora Dining Chair', 'Perpaduan unik meja makan berkapasitas 4 orang dengan kursi berdesain memukau', 'Dimensi Keseluruhan : 6cm', 'mejaku_1.jpg', 'mejaku_2.jpg', '5', 'Mutoyo', '2015', '30003', 'RUM'),
(4, 'Bantal Kat Cover Long', '120000', 'Santai Setiap Saat dengan Cushion Empuk nan Lembut', 'Visualnya yang hipnotik nan sederhana ampuh memikat siapapun yang hadir dalam ruang tamu', 'Dimensi Keseluruhan : 30 cm x 60 cm', 'bantalku_1.jpg', 'bantalku_2.jpg', '2', 'Mutoyo', '2015', '30004', 'KAM'),
(5, 'Rak Buku Gris Triangle', '5190000', 'Sticker : N/A', 'Dimensi Keseluruhan: Panjang 102 cm x Lebar 35 cm x Tinggi 120 cm', 'Lap dengan kain lembab ikuti arah alur kayu', 'rakbuku_1.jpg', 'rakbuku_2.jpg', '5', 'Triangle', '2015', '30005', 'RUM'),
(6, 'Wall Monstera Leaves', '336000', 'Sticker : N/A', 'Dimensi Keseluruhan: Panjang 42 cm x Lebar 32 cm x Tinggi 3,5 cm', 'Bisa dibersihkan menggunakan lap kering maupun basah untuk bagian permukaannya', 'wallku_1.jpg', 'wallku_2.jpg', '3', 'Monstera', '2016', '30006', 'RUM'),
(7, 'Karpet Zigzag', '924000', 'Material : Polyster', 'Jangan terkena air berwarna, bara api, asam/bahan kimia atau benda tajam.', 'Dry clean only', 'karpetku_1.jpg', 'karpetku_2.jpg', '5', 'Zigzag White Blue', '2015', '30007', 'KAM'),
(8, 'Lampu Bunny LED', '380000', 'Sticker : N/A', 'Cahaya lampu LED dapat berganti warna (Merah, Biru, Hijau, Kuning, Magenta, Cyan)', 'Bersihkan hanya menggunakan lap kering yang halus.', 'lampuku_1.jpg', 'lampuku_2.jpg', '4', 'Bunny LED', '2015', '30008', 'KAM'),
(11, 'Gorden Ulu', '600000', 'Pelengkap Tampilan Manis Jendela', 'Dengan warna textured dark grey, Ulu Curtain memberikan tampilan modern untuk interior ', 'Dimensi Keseluruhan: Panjang 140 cm x Tinggi 270 cm', 'gorden1.jpg', 'gorden2.jpg', '5', 'Ulu Semi Blackout', '2014', '30009', 'RUM'),
(13, 'Meja Taby', '799000', 'Finishing N/A', 'Dapat berfungsi sebagai meja sekaligus tempat penyimpanan barang', 'Dimensi Keseluruhan40cm x 37cm x 61cm', 'Tabel_1.jpg', 'Tabel_2.jpg', '3', 'Taby', '2014', '30010', 'RUM'),
(14, 'Pot Triangle', '100800', 'Finishing : No', 'Dimensi: Lebar 7 cm x Tinggi 11 cm', 'Material : Cement', 'pot_1.jpeg', 'pot_2.jpeg', '4', 'Concreate', '2017', '30011', 'RUM'),
(15, 'Brownie Bowl', '471000', '6 Piring Saji 6 Mangkuk', 'Dapat digunakan untuk restoran, peralatan makan harian, parcel, atau hadiah.', 'Material : Stoneware', 'mangkok_1.jpg', 'mangkok_2.jpg', '5', 'Brownie', '2016', '30012', 'RUM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cust`
--

CREATE TABLE `tb_cust` (
  `id_cust` int(5) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nohp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cust`
--

INSERT INTO `tb_cust` (`id_cust`, `nama`, `nohp`, `email`, `password`) VALUES
(1, 'Account', '089668858418', 'rafiirizqullah23@gmail.com', '123'),
(2, 'Maskedemaskow', '0888777888999', 'Maskede@gew.com', '96ddcc1813d12e276351f6bc98091ce6'),
(3, 'rafiirzq', '089668858418', 'rafiirizqullah23@gmail.com', 'tester123'),
(4, 'rafii', '089668858418', 'rafiirizqullah23@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Aulia Humaira', '081349432288', 'miraminul30@gmail.com', 'asemasem'),
(6, 'saya', '089668858418', 'rafiirizqullah23@gmail.com', '123'),
(7, 'aku', '089668858418', 'rafiirizqullah23@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'gatot', '0123', 'gatot@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'iqbal', '08999999', 'iqbal@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cust`
--
ALTER TABLE `tb_cust`
  ADD PRIMARY KEY (`id_cust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_cont` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_cust`
--
ALTER TABLE `tb_cust`
  MODIFY `id_cust` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
