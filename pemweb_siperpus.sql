-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 01:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb_siperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `rincian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `penulis`, `rincian`) VALUES
('001', 'Belantara', 'Liu Cixin', 'Apa yang bakal terjadi bila manusia tahu Bumi akan diinvasi alien empat abad lagi?\r\nSesudah mengetahui keberadaan Bumi, peradaban Trisurya mengirimkan armada penyerbu, dan pengintai berupa proton cerdas—sofon—yang bisa mengetahui semua informasi di Bumi kecuali apa yang ada di dalam pikiran manusia. Itulah dasar Proyek Penghadap Tembok, di mana sejumlah ahli siasat ditugasi untuk membuat strategi dalam kepala mereka sendiri tanpa bisa diketahui Trisurya. Sementara itu, Bumi harus membangun armada antariksa, tapi apakah manusia bisa mengatasi perpecahan antarnegara dan antarideologi untuk melakukannya?\r\nInilah langkah peradaban manusia dalam persiapan untuk Perang Terakhir.'),
('002', 'Filosofi Teras', 'Henry Manampiring', 'Lebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.'),
('003', 'Intai Amfibi Marinir: Senyap Menjaga Indonesia', 'Tantahara dan Gani Kristanto', 'Intai Amfibi Marinir: Senyap Menjaga Indonesia berisi kumpulan cerita pengabdian pasukan Intai Amfibi Marinir yang tidak pernah dibukukan sebelumnya. Buku ini adalah buku pertama dan satu-satunya saat ini tentang pasukan Intai Amfibi Marinir.'),
('004', 'Junji Ito`s Cat Diary Yon and Mu', 'Ito Junji', 'Pentolan komik horor Jepang, Junji Ito, menyuguhkan kesehariannya sebagai “Komikus Horor J” dalam komik ini. Tadinya dia penyuka anjing, tapi jadi memelihara kucing atas keinginan tunangannya, A-ko. Mu, si anak kucing keturunan ras luar. Dan Yon, kucing manja berwajah terkutuk. Di luar dugaan J, para kucing tak kunjung akrab dengannya. Ayo semangat, J! Horor dan humor itu perbedaannya tipis. Inilah komik humor kucing besutan komikus horor!!'),
('005', 'Kaiju No. 8 Vol. 03', 'Naoya Matsumoto', 'Kafka berubah wujud menjadi Kaiju demi menolong Ichikawa dan Furuhashi. Kekuatannya yang luar biasa berhasil menaklukkan Kaiju berbentuk manusia yang melukai kedua temannya itu. Namun, anggota pasukan pertahanan lainnya muncul saat dia akan meluncurkan serangan penghabisan sehingga Kaiju lawannya berhasil melarikan diri. Setelah berhasil melaksanakan misinya, yaitu menolong Ichikawa dan Furuhashi, Kafka un pergi meninggalkan tempat pertarungan… dan berjumpa dengan Wakil Kapten Hoshina!!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `npm` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`username`, `password`, `npm`) VALUES
('anggota1', '1234', '20082010012'),
('anggota2', '4567', '20082010020'),
('rully', '444', '20082010020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `npm` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_buku`, `npm`, `tgl_pinjam`) VALUES
('0001', '005', '20082010020', '2022-07-01'),
('0002', '004', '20082010012', '2022-07-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
