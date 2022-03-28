-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 06:54 AM
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
-- Table structure for table `tblposts_podcast`
--

CREATE TABLE `tblposts_podcast` (
  `id` int(12) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `PostDetails` varchar(255) DEFAULT NULL,
  `ust` varchar(255) NOT NULL,
  `PostingDate` text,
  `PostUrl` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts_podcast`
--

INSERT INTO `tblposts_podcast` (`id`, `PostTitle`, `PostImage`, `PostDetails`, `ust`, `PostingDate`, `PostUrl`, `Is_Active`) VALUES
(7, 'Tentang Menggambar', 'fc91f094117be82d93c7e33ca8201127.png', 'Menggambar merupakakan hal sering kita temui, bahkan menjadi hobi bahkan penghasilan bagi sebagain orang. Lalu bagaimakah pandangan Islam tentang menggambar ?', 'Ust. Saman', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/5sdEofKTITgbSoE9i8mAqS\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(8, 'Hati - Hati dengan Ikhtilat', 'e372089a6e5943656efad2d89e008a02.png', 'Bahaya terbesar yang ditimbulkan oleh ikhtilat adalah perzinaan, dan zina merupakan salah satu di antara dosa-dosa besar. Lalu apakah Ikthtilat itu?', 'Ust. Saman', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/4lvF6PEH7aBqSYAsSpFPrm\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(9, 'Musibah, Apa dan Bagaimana', '486bc686ffdc92dbee2af63560430e9b.png', '<p>Allah pasti akan menguji hamba-Nya, lalu bagaimana seharusnya kita menghadipi ujian dari Allah SWT? <br><br></p>', '', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/6vsa4gGWHDyQ4aTunygAar\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(10, 'Bekal Terbaikku', '7bde034c5a4045d7936ec1b2f73ea26d.png', '<p>Perjalanan ke tempat kerja paling tidak perlu bekal &nbsp;bensin atau uang \r\ntransport atau bakan mungkin bisa lebih, Lalu apakah bekal terbaik untuk\r\n kita persiapkan dalam perjalanan menuju kampung akhirat? <br><br></p>', 'Ust. Salbini', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/07zJ0863xM5KITEyD15kl5\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(11, 'Pintu - Pintu Rezeki', '2efb24d8f551e92f38274260d6d1d0fe.png', '<p>Dalam hidup ini, seseorang kadang diberikan kelapangan rezeki. \r\n&nbsp;Sebaliknya, terkadang rezeki dirasakan sempit, sehingga orang yang \r\nlemah &nbsp;hatinya kemudian berkeluh-kesah. Padahal, pintu-pintu rezeki amat\r\n luas. Lalu di manakah pintu - pi', '', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/5O85WC4WXJMRSiD91mvq0y\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(12, 'Fikih Salat', '175ee2d853eeacec3a7c2355ac73f1cd.png', '<p>Salat merupakan tiang agama, amalan yang bisa menjadi penentu diterima \r\natau tidaknya amalan lain. Lalu bagaimakah cara salat yang baik ?<br></p>', 'Ust. Saman', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/5ytW0us7iNfE1adxSu22oB\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(13, 'Fikih Zakat', '6c76cc0518773943bbd974b13f6a6e76.png', '<p>Sebagai instrumen yang masuk dalam salah satu Rukun Islam, zakat tentu \r\n&nbsp;saja memiliki aturan mengikat dari segi ilmu fiqihnya. Lalu seperti \r\napakah zakat itu?<br></p>', 'Ust. Saman', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/6jxTuLyM3VvB1WDU7vPvSE\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(14, 'Fikih Menikah', '7ab8379f7c00796c2f3043f1059edc54.png', '<p>Tidak ada obat yang lebih ampuh untuk dua orang yang saling mencintai \r\nselain menikah. Tetapi menikah bukan perkara yang main - main, itu \r\nadalah kunci untuk membangun generasi. Yuk belajar fikih pernikahan<br></p>', 'Ust. Saman', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/0pU9OOqCI0KR3mMkxHyR1j\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1),
(15, 'Apa Kabar Ramadan', '9ecd8c94a0f9e25b8876ba4ef17c2ae4.png', '<p>Tak terasa Ramadhan sudah di depan kita. Bagaimana persiapan menuju \r\nRamadhan ? Akankah Ramadhan kali ini bisa kita jadikan untuk \r\nmeningkatkan keimanan kita ?<br></p>', 'Ust. Salbini', NULL, '<iframe src=\"https://open.spotify.com/embed-podcast/episode/1Sbhed0OEOETUyTxTUgtQt\" width=\"100%\" height=\"232\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblposts_podcast`
--
ALTER TABLE `tblposts_podcast`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblposts_podcast`
--
ALTER TABLE `tblposts_podcast`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
