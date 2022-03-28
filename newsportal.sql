-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 03:51 PM
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
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`id`, `judul`, `caption`, `link`) VALUES
(1, 'Coba Judul', 'Coba Caption', 'https://youtu.be/EK1R1Ii15fg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminEmailId` int(10) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminEmailId`, `AdminUserName`, `AdminPassword`) VALUES
(3, 'adminbos', '$2y$12$4h/jDzkaj666ivc9PjxgbuQCjxjMdUOdX6d0eA0s.a.Ub1.hkEe6K');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory_buku`
--

CREATE TABLE `tblcategory_buku` (
  `id` int(10) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory_galeri`
--

CREATE TABLE `tblcategory_galeri` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments_keran`
--

CREATE TABLE `tblcomments_keran` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `postingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments_keran`
--

INSERT INTO `tblcomments_keran` (`id`, `name`, `email`, `comment`, `postingDate`) VALUES
(1, 'Kaidou', 'kaido@gmail.com', 'kaidou the beast', '2020-08-06'),
(2, 'sgsdg', 'vsdsd', 'dsgsdg', '0000-00-00'),
(3, 'fwefge', 'gsdgds', 'dsgsdgsd', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(10) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `PostDetails` varchar(255) NOT NULL,
  `PostingDate` varchar(255) NOT NULL,
  `PostUrl` varchar(255) NOT NULL,
  `CategoryId` int(10) NOT NULL,
  `Is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblposts_event`
--

CREATE TABLE `tblposts_event` (
  `id` int(10) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `PostImageBg` varchar(255) NOT NULL,
  `PostDetails` varchar(255) NOT NULL,
  `PostingDate` varchar(255) NOT NULL,
  `PostUrl` varchar(255) NOT NULL,
  `Is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts_event`
--

INSERT INTO `tblposts_event` (`id`, `PostTitle`, `PostImage`, `PostImageBg`, `PostDetails`, `PostingDate`, `PostUrl`, `Is_Active`) VALUES
(1, 'csdcds', '42a16d486e491c74da87df73ca51fc70.jpg', '', '<p>cadscdsc<br></p>', '', 'csdcds', 1),
(2, 'csdcds', '42a16d486e491c74da87df73ca51fc70.jpg', '', '<p>cadscdsc<br></p>', '', 'csdcds', 1),
(3, 'guiuib', '38ceb58091db6209217ed65f785c04e9.jpg', '', '<p>buibiubui<br></p>', '', 'guiuib', 1),
(4, 'eeee', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'cba7af4a62bb8e92bd0d983292294f98.jpg', '<p>dsfsdvsdvsdf<br></p>', '', 'eeee', 1),
(5, 'eeee', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'cba7af4a62bb8e92bd0d983292294f98.jpg', '<p>dsfsdvsdvsdf<br></p>', '', 'eeee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts_materi`
--

CREATE TABLE `tblposts_materi` (
  `id` int(10) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostDetails` varchar(255) NOT NULL,
  `PostingDate` varchar(255) NOT NULL,
  `PostUrl` varchar(255) NOT NULL,
  `Is_Active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts_materi`
--

INSERT INTO `tblposts_materi` (`id`, `PostTitle`, `PostDetails`, `PostingDate`, `PostUrl`, `Is_Active`) VALUES
(1, 'Ngopi 1', '<p>www.instagram.com/mbmpknstan<br></p>', '', 'https://www.youtube.com/embed/tgbNymZ7vqY', 1),
(2, 'ngopi 2', '<p>sfsdfdsfdsf<br></p>', '', 'https://www.youtube.com/embed/tgbNymZ7vqY', 1),
(3, 'ngopi 3', '<p>svdvsdvdvdf<br></p>', '', 'https://www.youtube.com/embed/tgbNymZ7vqY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts_podcast`
--

CREATE TABLE `tblposts_podcast` (
  `id` int(12) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `PostDetails` varchar(255) NOT NULL,
  `PostingDate` text,
  `PostUrl` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts_podcast`
--

INSERT INTO `tblposts_podcast` (`id`, `PostTitle`, `PostImage`, `PostDetails`, `PostingDate`, `PostUrl`, `Is_Active`) VALUES
(1, 'Berbagi di tengah Keterbatasan', 'podcast1berbagiditengahketerbatasan.png', 'Podcast Ramadan - Berbagi di tengah Keterbatasan', NULL, 'https://open.spotify.com/episode/4pV3aiWcR6hdkaNigkoZE4?si=2In-rXsKSUy4A2WLyWQk8w', 1),
(2, 'Berbagi di tengah Keterbatasan', '38ceb58091db6209217ed65f785c04e9.jpg', 'xccvdsvdsvsd', NULL, 'Mengenal-Al-Fatihah', 1),
(3, 'Berbagi di tengah Keterbatasan', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'svdvdsv', NULL, 'https://open.spotify.com/episode/4pV3aiWcR6hdkaNigkoZE4?si=2In-rXsKSUy4A2WLyWQk8w', 1),
(4, 'Berbagi di tengah Keterbatasan', '7f53d5e9354cd2092b49c19c3f2c111f.jpg', 'svdvdsv', NULL, 'https://open.spotify.com/episode/4pV3aiWcR6hdkaNigkoZE4?si=2In-rXsKSUy4A2WLyWQk8w', 1),
(5, 'Berbagi di tengah Keterbatasan', '809c12b4341d1681cf3a8e143c5f495c.jpg', 'gsdgvsdvsdvsd', NULL, 'https://open.spotify.com/episode/4pV3aiWcR6hdkaNigkoZE4?si=2In-rXsKSUy4A2WLyWQk8w', 1),
(6, 'csdcvdsvcsdbuvbdsvbdsvusdb vuisdbuvids', '809c12b4341d1681cf3a8e143c5f495c.jpg', '<p>sc dsicv dsuivcndvnedivnodsnvods<br></p>', NULL, 'https://open.spotify.com/episode/4pV3aiWcR6hdkaNigkoZE4?si=2In-rXsKSUy4A2WLyWQk8w', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts_toko`
--

CREATE TABLE `tblposts_toko` (
  `id` int(10) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostImage` varchar(255) NOT NULL,
  `CategoryId` int(10) NOT NULL,
  `PostDetails` varchar(255) NOT NULL,
  `PostingDate` varchar(255) NOT NULL,
  `PostUrl` varchar(255) NOT NULL,
  `Is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminEmailId`);

--
-- Indexes for table `tblcomments_keran`
--
ALTER TABLE `tblcomments_keran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts_event`
--
ALTER TABLE `tblposts_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts_materi`
--
ALTER TABLE `tblposts_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts_podcast`
--
ALTER TABLE `tblposts_podcast`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminEmailId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcomments_keran`
--
ALTER TABLE `tblcomments_keran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblposts_event`
--
ALTER TABLE `tblposts_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblposts_materi`
--
ALTER TABLE `tblposts_materi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblposts_podcast`
--
ALTER TABLE `tblposts_podcast`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
