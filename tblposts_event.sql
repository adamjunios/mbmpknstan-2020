-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 06:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblposts_event`
--

CREATE TABLE `tblposts_event` (
  `id` int(10) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `PostImageBg` varchar(255) NOT NULL,
  `PostDetails` varchar(9999) NOT NULL,
  `PostingDate` varchar(255) NOT NULL,
  `PostUrl` varchar(255) NOT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `line` varchar(255) DEFAULT NULL,
  `Is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts_event`
--

INSERT INTO `tblposts_event` (`id`, `PostTitle`, `PostImage`, `PostImageBg`, `PostDetails`, `PostingDate`, `PostUrl`, `ig`, `line`, `Is_Active`) VALUES
(1, 'csdcds', '42a16d486e491c74da87df73ca51fc70.jpg', '', '<p>cadscdsc<br></p>', '', 'csdcds', NULL, NULL, 0),
(2, 'csdcds', '42a16d486e491c74da87df73ca51fc70.jpg', '', '<p>cadscdsc<br></p>', '', 'csdcds', NULL, NULL, 0),
(3, 'guiuib', '38ceb58091db6209217ed65f785c04e9.jpg', '', '<p>buibiubui<br></p>', '', 'guiuib', NULL, NULL, 0),
(4, 'eeee', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'cba7af4a62bb8e92bd0d983292294f98.jpg', '<p>dsfsdvsdvsdf<br></p>', '', 'eeee', NULL, NULL, 0),
(5, 'Galaksi ', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'cba7af4a62bb8e92bd0d983292294f98.jpg', 'Galaksi (Gathering Muslim Akuntansi) merupakan program tahunan dari IMMSI berupa tabligh akbar yang diadakan untuk mahasiswa akuntansi di PKN STAN.\r\n\r\n<br><br>\r\nAdapun tujuan dari kegiatan GALAKSI 1441 H ini ialah :\r\n<br><br>\r\nSebagai Lembaga Dakwah Jurusan (LDJ), IMMSI mengambil sikap proaktif untuk menyampaikan mengenai budaya (baca: budaya Islami) yang ada di PKN STAN. Salah satu tujuan dari hal ini adalah agar mahasiswa PKN STAN dapat lebih mengenal, taat, dan bergantung hanya kepada Allah Subhanahu wa ta\'ala. Berangkat dari permasalahan yang telah ada dan dapat ditarik bahwa \"benang merah\" dari permasalahan ini salah satunya adalah karena \"jauh\" dari ketaatan kepada Rabb Yang Maha Kuasa, maka IMMSI melalui GALAKSI Insyaa Allah siap untuk mengatasinya.', '04/10/2020', 'eeee', 'https://instagram.com/immsipknstan?igshid=6quyzn33wi32', '', 1),
(6, 'Stan Islamic Week 1442 H', '5f1d4ece460ed6877c62949f5f0406af.png', '1a338e394c19e9a15ad6a12bcc635110jpeg', 'STAN Islamic Week (SIW) 1442 H adalah rangkaian kegiatan yang diselenggarakan oleh Masjid Baitul Maal (MBM) PKN STAN dengan tujuan untuk mengeratkan silaturahmi dan ukhuwah islamiyah diantara mahasiswa dan mahasiswi muslim, terutama di masa pandemi ini kita tidak dapat bertatap muka dan bertegur sapa secara langsung. Acara STAN Islamic Week ini juga menjadi ajang pengembangan bakat untuk mahasiswa muslim dan muslimah PKN STAN.\r\n<br><br>\r\nSTAN Islamic Week memiliki banyak rangkaian kegiatan yaitu Youth Muslim Competition (YMC), Youth Muslim Forum (YMF), Tabligh Akbar, dan Sedekah Nasional. YMC merupakan kegiatan lomba islami, adapun kegiatan lomba yang akan diadakan adalah MTQ (Ikhwan & Akhwat), Da’i (Ikhwan & Akhwat), Azan (Ikhwan), Cipta Puisi, Fun Art, dan Video Kreatif. YMF merupakan kegiatan kelas kepenulisan yang dilaksanakan selama tiga pertemuan dalam sepekan untuk meningkatkan kemampuan skill kepenulisan yang akan dipergunakan untuk menulis karya ilmiah, jurnal, dan sebagainya.\r\n<br><br>\r\nSelanjutnya SIW juga akan mengadakan Tabligh Akbar. Tabligh Akbar merupakan kajian umum dalam skala yang besar untuk meningkatkan ketaqwaan dan semangat jiwa pemuda islam dengan mengundang pembicara ternama. Yang terakhir ialah Sedekah Nasional. Sedekah nasional diawali dengan melakukan open donation kemudian seluruh dana yang telah terkumpulkan disalurkan ke beberapa titik di seluruh indonesia berupa bantuan sembako dan keperluan sehari-hari rumah tangga dan disalurkan kepada yang membutuhkan.\r\n', '', 'Stan-Islamic-Week-1442-H', NULL, NULL, 1),
(7, 'Tax Islamic Fair 2020', '849e9fa3120ba39f8f45b7869d2c2bae.png', 'f19c9085129709ee14d013be869df69b.png', '<p>Tax Islamic Fair adalah sebuah rangkaian acara yang terdiri dari lomba essai, lomba poster, lomba cipta dan baca puisi, serta talkshow. Talkshow kali ini mengundang pembicara - pembicara yang berkompeten di bidangnya. Semua rangkaian kegiatan Tax Islamic Fair terbuka untuk umum serta tidak dipungut biaya alais gratis tis tis...<br></p>', '', 'Tax-Islamic-Fair-2020', NULL, NULL, 0),
(8, 'Tax Islamic Fair 2020', 'dc294017d15d7520b702269b6009f637.png', 'f9d8cfcc2111d99ae179d9ffb274340c.png', 'Tax Islamic Fair adalah sebuah rangkaian acara yang terdiri dari lomba essai, lomba poster, lomba cipta dan baca puisi, serta talkshow. Talkshow kali ini mengundang pembicara - pembicara yang berkompeten di bidangnya. Semua rangkaian kegiatan Tax Islamic Fair terbuka untuk umum serta tidak dipungut biaya alias gratis.', '', 'Tax-Islamic-Fair-2020', 'https://www.instagram.com/taxislamicfair', 'https://www.instagram.com/taxislamicfair', 1),
(9, 'vkndfccv dsk', 'b60ff820918e737c620ec9e6e530a7ef.png', 'fc91f094117be82d93c7e33ca8201127.png', '<p>sdvcsd<br></p>', '', 'vkndfccv-dsk', 'ssdvsd', 'dsvsd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblposts_event`
--
ALTER TABLE `tblposts_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblposts_event`
--
ALTER TABLE `tblposts_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
