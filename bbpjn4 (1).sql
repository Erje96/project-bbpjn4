-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 06:09 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbpjn4`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `tempat`, `judul`) VALUES
(1, '2015-12-11 09:00:07', 'Ruang Pendopo dan Sapta Taruna', 'Pasar Murah dan Bazar '),
(2, '2015-12-04 07:00:07', 'Bertempat di Kampus PUPR', 'Pentas Hiburan dan Makanan Rakyat'),
(3, '2015-12-03 07:00:07', 'Bertempat di Lapangan Upacara Bendera Kementerian PUPR.', 'Upacara Peringatan Hari Bakti PUPR ke 70'),
(4, '2015-12-03 09:00:07', 'Tempat : Taman Makam Pahlawan Tanah Kusir', 'Ziarah ');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` int(11) NOT NULL,
  `author` varchar(155) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi_berita`, `tanggal`, `gambar`, `author`) VALUES
(1, '<p>\r\n	<span style="font-size:14px;">Pembangunan Jalan Tol Soreang-Pasir Koja Dimulai</span></p>\r\n', '<p class="yiv0874360814MsoNormal" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Pembangunan jalan tol Soreang-Pasir Koja di Kabupaten Bandung di mulai hari ini. Jalan tol sepanjang&nbsp; 8,15 Km tersebut merupakan infrastruktur pendukung pelaksanaan Pekan Olahraga Nasional (PON) XVI yang akan diadakan di Jawa Barat pada September 2016.</p>\r\n<p class="yiv0874360814MsoNormal" id="yui_3_16_0_1_1441881930124_3618" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;<span id="yui_3_16_0_1_1441881930124_3619" style="box-sizing: border-box; border-color: inherit;">Konstruksi tol Soreang-Pasir Koja ditandai dengan&nbsp;<em id="yui_3_16_0_1_1441881930124_3676" style="box-sizing: border-box; font-style: italic; border-color: inherit;">groundbreaking</em>&nbsp;yang dilakukan Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR) Basuki Hadimuljono di Bandung, Kamis (10/9). Basuki mengatakan, jalan tol Soreang-Pasir Koja akan menghubungkan Kota Bandung dan Kabupaten Bandung serta terkoneksi dengan jalan tol Padalarang-Cileunyi.</span></p>\r\n<p class="yiv0874360814MsoNormal" id="yui_3_16_0_1_1441881930124_3712" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;<span id="yui_3_16_0_1_1441881930124_3713" style="box-sizing: border-box; border-color: inherit;">&ldquo;Potensi-potensi yang ada di Kabupaten Bandung, terutama potensi di sektor pariwisata dapat dimaksimalkan sehingga Kabupaten Bandung dapat menjadi primadona baru pariwisata di Jawa Barat,&rdquo; terang Basuki.</span></p>\r\n<p class="yiv0874360814MsoNormal" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;Jalan tol dengan nilai investasi sebesar Rp 1,51 triliun tersebut&nbsp; diharapkan akan merangsang pelaku usaha untuk berinvestasi, sebagaimana yang terjadi pasca pembangunan jalan tol Cikopo-Palimanan, saat ini mulai banyak dibangun fasilitas pendukung bisnis di kawasan tersebut.</p>\r\n<p class="yiv0874360814MsoNormal" id="yui_3_16_0_1_1441881930124_3669" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Sebagai informasi, Perjanjian Pengusahaan Jalan Tol (PPJT) Soreang-Pasir Koja telah ditandatangani pada 4 September 2015. Menteri PUPR memberikan apresiasi kepada PT Citra Marga Lintas Jabar selaku Badan Usaha Jalan Tol (BUJT) ruas tol tersebut yang telah berkomitmen untuk memulai pelaksanaan konstruksi jalan tol ini meskipun saat ini pengadaan tanah belum selesai seluruhnya.</p>\r\n<p class="yiv0874360814MsoNormal" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;Direktur Jenderal (Dirjen) Bina Marga Hediyanto Husaini menerangkan, saat ini progres pembebasan tanah tol Soreang-Pasir Koja sudah 87 persen. Percepatan pengadaan lahan penting guna mencapai target beroperasinya jalan tol tersebut jelang PON XVI. Selain itu keberadaan tol tersebut diharapkan dapat mengatasi kemacetan di kawasan Bandung Selatan seperti daerah Kopo.</p>\r\n<p class="yiv0874360814MsoNormal" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;&ldquo;Saya yakin kita semua, termasuk masyarakat Bandung pasti menginginkan pembangunan tolnya cepat selesai, karena itu masalah tanah harus rampung agar tidak mengganggu konstruksi,&rdquo; ucap Hediyanto.</p>\r\n<p class="yiv0874360814MsoNormal" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;<span id="yui_3_16_0_1_1441881930124_3667" style="box-sizing: border-box; border-color: inherit;">Jalan tol tersebut diharapkan menjadi jalan tol berkualitas terbaik dengan memperhatikan aspek keselamatan, kenyamanan, dan juga lingkungan sehingga dapat dijadikan contoh untuk pembangunan jalan tol lain, tidak hanya di Indonesia tetapi juga di dunia internasional.</span></p>\r\n<p class="yiv0874360814MsoNormal" id="yui_3_16_0_1_1441881930124_3668" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	<span id="yui_3_16_0_1_1441881930124_3624" style="box-sizing: border-box; border-color: inherit;">Dalam kesempatan yang sama, Dirjen Bina Marga juga menyampaikan rencana groundbreaking sejumlah ruas tol lainnya hingga akhir 2015. Beberapa ruas tol lainnya yang akan segera mulai dibangun yaitu Cileunyi-Sumedang-Dawuan, Pemalang-Batang, Gempol-Pasuruan, Balikpapan-Samarinda&nbsp;dan Manado-Bitung.</span></p>\r\n<p class="yiv0874360814MsoNormal" id="yui_3_16_0_1_1441881930124_3623" style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	<span id="yui_3_16_0_1_1441881930124_3622" style="box-sizing: border-box; border-color: inherit;">&ldquo;Semua ini sebagai bentuk upaya pemerintah meningkatkan konektivitas wilayah, yang pada akhirnya mendorong kesejahteraan masyarakat dan peningkatan daya saing Indonesia,&rdquo; sambung Hediyanto.</span></p>\r\n', '2015-11-02', 2, 'admin'),
(2, '<p>\r\n	Lelang Dini Tahap III, Ditjen Bina Marga Tenderkan Rp 5,91 Triliun</p>\r\n', '<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Direktorat Jenderal (Ditjen) Bina Marga, Kementerian Pekerjaan Umum dan Perumahan Rakyat (Kemen PUPR), melakukan pelelangan dini paket-paket pekerjaan Tahun Anggaran 2016 tahap III senilai Rp 5,91 triliun di Jakarta pada Jumat (30/10). Jumlah paket yang dilelangkan berjumlah 567 paket, dimana 240 paket diantaranya merupakan pekerjaan pengawasan dan 112 paket adalah pekerjaan perencanaan.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Direktur Jenderal (Dirjen) Bina Marga, Hediyanto W. Husaini mengatakan, dengan pelelangan kali ini secara total Ditjen Bina Marga telah melelangkan pekerjaan tahun 2016 senilai Rp 19 triliun. Sebagai informasi, Ditjen Bina Marga pada tahap I melelangkan Rp 3,71 triliun (61 paket) dan tahap II senilai Rp 9,32 triliun (305 paket).</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&ldquo;Sisa Rp 10 triliun lagi harus dilelangkan pada dua bulan ke depan, yaitu pada akhir November dan Desember agak awal,&rdquo; terang Hediyanto.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Lebih lanjut, Hediyanto menargetkan pada awal Januari, 60 persen dari total anggaran Tahun 2016 Ditjen Bina Marga sudah ditandatangani paket kontraknya. Dilanjutkan pada akhir Januari senilai 80 persen dan seluruh paket pekerjaan diharapkan rampung ditandatangani pada Maret 2016. Dirjen Bina Marga bahkan mengatakan akan melakukan penandatanganan paket pekerjaan secara serempak dari beberapa lokasi daerah dengan<span class="Apple-converted-space">&nbsp;</span><em style="box-sizing: border-box; font-style: italic; border-color: inherit;">teleconference</em>.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Pelelangan dini, menurut Hediyanto merupakan upaya Ditjen Bina Marga untuk menjawab tantangan pembangunan infrastruktur. Dengan alokasi anggaran terbesar di tingkat Ditjen di Indonesia, sudah sepatutnya Ditjen Bina Marga menjadi pionir dalam upaya pelelangan dini. Dalam kesempatan tersebut, tak lupa Dia meminta bahwa semua paket yang telah dilakukan pelelangan dini untuk dimonitor prosesnya agar berjalan sesuai rencana.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Sementara itu, Direktur Pengembangan Jaringan Jalan (PJJ) Soebagiono menyebutkan, paket yang dilelangkan pada tahap III ini didominasi oleh paket pekerjaan pengawasan. Hal tersebut sebagai cara untuk menyelaraskan dengan paket-paket pekerjaan fisik yang telah dilelangkan terlebih dahulu pada tahap I dan II. Apalagi pelelangan paket pekerjaan pengawasan juga cukup memakan waktu yaitu selama 60 hari.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&ldquo;Paket-paket pengawasan perlu dipercepat, karena paket fisik sudah mulai lelang lebih dulu, jadi supaya<span class="Apple-converted-space">&nbsp;</span><em style="box-sizing: border-box; font-style: italic; border-color: inherit;">inline</em><span class="Apple-converted-space">&nbsp;</span>nanti saat pekerjaan dimulai,&rdquo; ungkap Soebagiono. Dari total Rp 5,91 triliun yang dilakukan lelang dini kali ini, Rp 5,77 triliun diantaranya merupakan alokasi dalam bentuk Rupiah Murni (RPM) dan Rp 140,57 miliar merupakan Surat Berharga Syariah Negara (SBSN). (KompuBM)</p>\r\n', '2015-11-02', 3, 'admin'),
(3, '<p>\r\n	Jelang Musim Hujan, Dirjen Bina Marga Periksa Kondisi Pantura</p>\r\n', '<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2349" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2351" style="box-sizing: border-box; border-color: inherit;">Dalam rangka mengantisipasi musim hujan yang segera datang, Direktorat Jenderal (Ditjen) Bina Marga terus mempercepat beberapa penanganan jalan di Pantai Utara (Pantura) Jawa. Secara umum, kondisi jalan Pantura Jawa, khususnya ruas Jawa Barat dan Jawa Tengah sudah baik dan siap menghadapi musim hujan.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2355" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2357" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2361" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2363" style="box-sizing: border-box; border-color: inherit;">Hal tersebut disampaikan, Direktur Jenderal (Dirjen) Bina Marga, Hediyanto W. Husaini usai meninjau jalur Pantura mulai dari Jakarta hingga Semarang, Jawa Tengah pada Minggu (11/10). Dalam pemantauan lapangan tersebut, Hediyanto didampingi Direktur Jembatan, Hedy Rahadian, Direktur Preservasi, Nurdin Manurung, Kepala Balai Besar Pelaksana Jalan Nasional (BPJN) Wilayah IV, Bambang Hartadi dan Kepala BPJN Wilayah V, Ketut Darmawahana.</span></div>\r\n<div class="yiv9337374850" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2367" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2369" style="box-sizing: border-box; border-color: inherit;">&ldquo;Banyak hal yang harus kita lihat dan yang tidak terduga yang muncul karena musim panas berjalan lebih panjang, dikhawatirkan musim hujan akan turun dengan hebat juga, yang berakibat pada jalan kita yang aspalnya akan tergeser, longsor, serta gorong-gorong yang tidak berjalan,&rdquo; ujar Hediyanto, di Semarang , Minggu (11/10) malam.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_2041" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2374" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2378" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2380" style="box-sizing: border-box; border-color: inherit;">Untuk mengurangi resiko buruk pada jalan Pantura, Dirjen Bina Marga meninjau dari Simpang Jomin &ndash; Cikampek &ndash; Semarang. Hediyanto menginstruksikan para &nbsp;Satuan Kerja (Satker) dan Pejabat Pembuat Komitmen (PPK) terkait untuk mempercepat pekerjaan yang sekiranya bisa dipercepat.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1968" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2385" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2389" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2391" style="box-sizing: border-box; border-color: inherit;">&ldquo;Membersihkan drainase, tutup lapisan tambalan jalan pada bulan-bulan lalu, yang harus ditutup lagi agar tidak menjadi titik lemah pada musim penghujan,&rdquo; tegasnya.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1969" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2396" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2400" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2402" style="box-sizing: border-box; border-color: inherit;">Adapun titik yang harus diberi perhatian khusus yaitu daerah Patrol, Sukamandi, Eretan, Ciasem, Batas Losari, sebagian Pekalongan dan Kali Ungu. Beberapa titik tersebut memang sudah menjadi langganan banjir tiap musim hujan sementara sisanya memiliki aspal yang tak sempurna.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1970" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2407" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2411" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2413" style="box-sizing: border-box; border-color: inherit;">Selain jalan, kondisi jembatan juga mendapat perhatian, salah satunya jembatan Cimalaya pada ruas Batas Kota Cikampek &ndash; Batas Kabupaten Subang (Km.jkt 107+200) arah Cirebon. Hasil pantauan di lapangan menemukan aspal bagian oprit sudah berlubang dan terjadi penurunan tanah.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1976" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2418" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" dir="ltr" id="yiv9337374850yui_3_16_0_1_1444621345760_2345" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2344" style="box-sizing: border-box; border-color: inherit;">&ldquo;Jembatan ini sudah empat kali diperbaiki hanya saja tanahnya yang selalu turun terus. Saya sudah instruksi untuk diperbaiki,&rdquo; ungkap Hediyanto.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1986" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2425" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2429" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2431" style="box-sizing: border-box; border-color: inherit;">Hediyanto juga menjelaskan, pemerintah terus berupaya melakukan pembebasan lahan untuk kebutuhan tol mulai dari Kanci &ndash; Pejagan, Pejagan &ndash; Pemalang, Pemalang &ndash; Pekalongan, Batang &ndash; Semarang, secara total, masih ada sekitar 130 Km lahan yang harus dibebaskan.</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444619188631_1990" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2436" style="box-sizing: border-box; border-color: inherit;">&nbsp;</span></div>\r\n<div class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2440" style="box-sizing: border-box; border-color: inherit; color: rgb(51, 51, 51); font-family: ''Open Sans''; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span class="yiv9337374850" id="yiv9337374850yui_3_16_0_1_1444621345760_2442" style="box-sizing: border-box; border-color: inherit;">&ldquo;Mudah-mudahan Oktober Tahun 2016 pengadaan tanah untuk tol Trans Jawa mulai dari Pejagan &ndash; Semarang sudah selesai. &nbsp;Sehingga pada 2018 konstruksinya rampung,&rdquo; katanya. (Ange/KompuBM)</span></div>\r\n', '2015-11-02', 4, 'admin'),
(4, '<p>\r\n	Ditjen Bina Marga Lelangkan Paket Pekerjaan 2016 Senilai Rp 9,32 Triliun</p>\r\n', '<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Direktorat Jenderal (Ditjen) Bina Marga Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) melakukan peluncuran (launching) lelang dini kegiatan Tahun Anggaran (TA) 2016 tahap II senilai Rp 9,32 triliun. Sebanyak 305 paket penanganan jalan dan jembatan yang tersebar di seluruh Indonesia mulai dilelangkan pada hari ini, Rabu (30/9) di Jakarta.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Pagu anggaran Ditjen Bina Marga TA. 2016 adalah sebesar &plusmn;&nbsp;Rp.&nbsp;46 triliun.&nbsp;Sebagai informasi, peluncuran lelang dini tahap II kali ini melanjutkan peluncuran sejenis pada Agustus lalu. Pada bulan lalu, Ditjen Bina Marga juga telah melakukan launching dini TA 2016 sebanyak 61 paket dengan nilai Rp 3,71 triliun.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Direktur Jenderal (Dirjen) Bina Marga, Hediyanto W. Husaini mengatakan, dengan upaya ini, Ditjen Bina Marga telah melakukan pelelangan awal kegiatan 2016 sebanyak 366 paket dengan nilai total Rp 13,03 triliun.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&ldquo;Pelelangan dini sendiri akan terus dilakukan setiap bulannya hingga akhir 2015,&rdquo; ungkap Hediyanto.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Strategi pelelangan dini dalam pengelolaan pagu anggaran 2016 merupakan pelaksanaan dari Instruksi Menteri PUPR No. 3 Tahun 2015 tentang Percepatan Pelaksanaan Anggaran Tahun Anggaran 2015 dan Pelelangan Dini Tahun 2016 di Kementerian PUPR.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	<a href="http://118.97.214.236/webdev/wp-content/uploads/2015/11/00-30092015-1.jpg" style="box-sizing: border-box; text-decoration: none; word-wrap: break-word; color: rgb(51, 122, 183); border-color: inherit; background-color: transparent;"><img alt="00-30092015 1" class="alignnone size-medium wp-image-316" height="396" src="http://118.97.214.236/webdev/wp-content/uploads/2015/11/00-30092015-1-595x396.jpg" style="box-sizing: border-box; border: 0px inherit; vertical-align: middle; max-width: 100%; margin: 0px; height: auto;" width="595" /></a></p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Hediyanto menjelaskan, adapun paket-paket TA 2016 di Lingkungan Ditjen Bina Marga yang akan dilaksanakan lelang dini merupakan paket-paket yang dibiayai melalui Anggaran Pendapatan dan Belanja Negara (APBN) baik berasal dari dana Rupiah Murni (RPM) maupun Surat Berharga Syariah Negara (SBSN).</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Paket-paket tersebut tersebar di 34 provinsi dengan komposisi Rp 8,53 triliun berasal dari RPM dan Rp 787,61 miliar dari SBSN. Nilai lelang yang diluncurkan pada tahap II ini sendiri melebihi nilai yang ditargetkan sebelumnya yaitu sebesar Rp 7,62 triliun. Selanjutnya pada Oktober, November dan Desember akan kembali dilakukan lelang dini TA 2016 masing-masing senilai Rp 8,5 triliun, Rp 5,74 triliun dan Rp 2,76 triliun.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Dari 366 paket yang telah dilelangkan pada tahap 1 dan tahap 2 kali ini, 111 paket diantaranya (dengan nilai total Rp 7,18 triliun) merupakan pekerjaaan penanganan jalan dan jembatan yang nilainya lebih dari Rp 50 miliar. Sedangkan 100 paket (dengan nilai total Rp 3,85 triliun) merupakan pekerjaan yang nilainya antara Rp 30 miliar hingga Rp 50 miliar.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Selain itu ada 86 paket (dengan nilai total Rp 1,6 triliun) adalah kontrak yang bernilai Rp 10 miliar &ndash; Rp 30 miliar dan 69 paket lainnya (Rp 0,4 triliun) adalah pekerjaan dengan nilai kontrak kurang dari Rp 10 miliar.</p>\r\n<p style="box-sizing: border-box; padding: 0px; margin: 0px 0px 10px; word-wrap: break-word; border-color: inherit; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&ldquo;Dengan strategi lelang dini yang kita lakukan mulai dari bulan Agustus hingga Desember nantinya, kita rencanakan pada bulan Januari kita sudah menandatangani kontrak paket tahun anggaran 2016 senilai Rp 16,73 triliun,&rdquo; sebut Dirjen Bina Marga.</p>\r\n', '2015-11-02', 5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
`id` int(11) NOT NULL,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('6e27d432aa407f7317b8ee3a4cee0742', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0', 1464665011, 'a:10:{s:9:"user_data";s:0:"";s:9:"user_name";s:5:"admin";s:6:"status";s:1:"0";s:12:"is_logged_in";b:1;s:17:"pengguna_selected";N;s:22:"search_string_selected";N;s:5:"order";N;s:10:"order_type";N;s:15:"berita_selected";N;s:23:"flash:old:flash_message";s:7:"updated";}');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
`id_foto` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_foto` date NOT NULL,
  `tipe` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_foto`, `nama`, `filename`, `keterangan`, `tanggal_foto`, `tipe`) VALUES
(1, 'berita 2016-05-23', '1273049_571598489572763_326830345_o7.jpg', '<p>\r\n	ASD</p>\r\n', '2016-05-23', 'Berita'),
(2, 'berita 2016-05-23', 'pasirkoja.jpg', '<p style="box-sizing: border-box; font-size: 18px; font-weight: 500; line-height: 1.1; clear: both; padding: 0px; margin: 10px 0px; word-wrap: break-word; text-rendering: optimizelegibility; font-family: Aileron-Bold; color: rgb(51, 51, 51); border-color: inherit; font-style: normal; font-variant: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">\r\n	<a href="http://bbpjn4.net/web/pembangunan-jalan-tol-soreang-pasir-koja-dimulai.html" style="box-sizing: border-box; text-decoration: none; word-wrap: break-word; color: inherit; border-color: inherit; background-color: transparent;">Pembangunan Jalan Tol Soreang-Pasir Koja Dimulai</a></p>\r\n', '2016-05-23', 'Berita'),
(3, 'berita 2016-05-24', 'berita20151031203458-1.jpg', '<p>\r\n	Lelang Dini Tahap III, Ditjen Bina Marga Tenderkan Rp 5,91 Triliun</p>\r\n', '2016-05-24', 'Berita'),
(4, 'berita 2016-05-24', '03.pantura-smg_.jpg', '<p>\r\n	Jelang Musim Hujan, Dirjen Bina Marga Periksa Kondisi Pantura</p>\r\n', '2016-05-24', 'Berita'),
(5, 'berita 2016-05-24', '00-30092015-2.jpg', '<p>\r\n	Ditjen Bina Marga Lelangkan Paket Pekerjaan 2016 Senilai Rp 9,32 Triliun</p>\r\n', '2016-05-24', 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `foto` int(11) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `pengaduan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `status`) VALUES
(1, 'alfin', 'alfin.fz@gmail.com', 'adoss', 'd67a5614ce183eeb211c4b0c175a6e40', 0),
(5, 'asd', 'asd@asd.das', 'aasd', '8f60c8102d29fcd525162d02eed4566b', 0),
(6, 'adas', 'asdasd@as.hg', 'adad', '8f4031bfc7640c5f267b11b6fe0c2507', 1),
(7, 'admin', 'admin@admin.dss', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(8, 'pengguna', 'pengguna@penguna.edo', 'pengguna', '8b097b8a86f9d6a991357d40d3d58634', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_cookies`
--
ALTER TABLE `ci_cookies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ci_cookies`
--
ALTER TABLE `ci_cookies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
