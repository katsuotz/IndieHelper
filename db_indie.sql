-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 03:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_indie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `foto`, `id_akun`) VALUES
(1, 'Irvan Lutfi Gunawan', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'user'),
(2, 'user', 'user', 'user'),
(3, 'user', 'user', 'user'),
(4, 'qwerty', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'user'),
(5, 'baba', 'b78b647728101ba462182b4c7e5b2ca57b9f5a99', 'user'),
(6, 'qwerty', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'user'),
(7, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'user'),
(8, 'ierjogrj', '270ef37afd75ceb9772cc838422cdd39eb909878', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` double NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama`, `foto`, `deskripsi`, `tgl`, `jumlah`, `id_kategori`, `tags`) VALUES
(11, 'aaaa', '', '', '2017-04-14 22:30:37', 0, 1, ''),
(12, 'aaaaaaaaaaa', '', '', '2017-04-14 22:31:44', 0, 1, ''),
(33, 'ggwp', '', '', '2017-04-15 10:42:24', 1000000, 1, ' {  "tags 0" : "gg",  "tags 1" : "wp",  } '),
(34, 'drtyuio', '', '', '2017-04-15 10:57:46', 623023, 1, ' {  "tags 0" : "jiewjf",  "tags 1" : "wefwef",  } '),
(35, 'ea', '["6512.jpg"]', '', '2017-04-15 13:16:06', 0, 1, ''),
(36, 'ea', '["6512.jpg"]', '', '2017-04-15 13:17:08', 0, 1, ''),
(37, 'ea', '["6512.jpg"]', '', '2017-04-15 13:17:13', 234234, 1, ' {  "tags 0" : "ewf",  } '),
(38, '', '[]', 'aa', '2017-04-15 13:30:29', 0, 1, ' {  } '),
(39, '', '[]', 'aa', '2017-04-15 13:30:44', 0, 1, ' {  } '),
(40, '', 'Array', 'aa', '2017-04-15 13:32:10', 0, 1, ' {  } '),
(42, '', 'Array', 'aa', '2017-04-15 13:33:31', 0, 1, ' {  } '),
(43, '', '', 'aa', '2017-04-15 13:33:59', 0, 1, ' {  } '),
(44, '', '["35177.jpg"]', 'aa', '2017-04-16 10:30:01', 0, 1, ' {  } '),
(45, '', '["DOTO.jpg"]', 'aa', '2017-04-16 10:31:02', 0, 1, ' {  } '),
(46, '', '["DOTO.jpg","fav-rate-tweet-1920x1080-games.png"]', 'aa', '2017-04-16 10:31:28', 0, 1, ' {  } '),
(47, '', '["DOTO.jpg","fav-rate-tweet-1920x1080-games.png","22068.jpg","153961.jpg","IMG_20161128_172849.jpg"]', 'aa', '2017-04-16 10:31:56', 0, 1, ' {  } '),
(48, '', '["812.jpg","671da0ac7207539415ce73059a475a43.jpg","903f5496a6a71ebf3d0e07724d63b7a1.jpg"]', 'aa', '2017-04-16 13:35:31', 0, 1, ' {  } ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL,
  `desc` text NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `foto`, `alamat`, `desc`, `id_akun`, `id_project`) VALUES
(1, 'qwerty', 'L', '', 'qwerty', '', 6, 0),
(2, 'user', 'L', 'default.jpg', 'user', '', 7, 0),
(3, 'weorihwer', 'L', 'default.jpg', 'ioerjgir', '', 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
