-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 01:30 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

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
(1, 'Irvan Lutfi Gunawan', 'admin.jpg', 1);

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
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(7, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'user'),
(8, 'han', '4ff615253469989932532e926006ae5c995e5dd6', 'user'),
(9, 'jujun', '352b5328638f659ddc2d08fa22108e078917d9a6', 'user'),
(10, 'sunda', '6baa5492d21ad5cde334bd6e425b8ddd753e4158', 'user'),
(11, 'ui', '636117b25f17da7e91194e091cdb8dc49769a815', 'user'),
(12, 'zxc', 'a938dfdfbaa1f25ccbc39e16060f73c44e5ef0dd', 'user'),
(13, 'asd', 'f10e2821bbbea527ea02200352313bc059445190', 'user'),
(14, 'uio', 'c810f6f084b88c9b8ae437660a97860692ab9cd0', 'user'),
(15, 'dfg', 'bfc896e1ecd35d326871e60c70649a1e99571ffa', 'user'),
(16, 'asal', '17a3c6b449600b29b116c46196a4a7a295bcf2cd', 'user'),
(17, 'asal', '17a3c6b449600b29b116c46196a4a7a295bcf2cd', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_rekening`, `rekening`) VALUES
(1, 'Mandiri Lagih', 'NJul Kipli', '9123890132'),
(2, 'BCA', 'Kipli', '02341354');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `jumlah` int(15) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `feedback`, `jumlah`, `id_bank`, `id_project`, `id_user`, `status`) VALUES
(14, 'Bagus', 90000, 2, 17, 2, 'Sudah'),
(15, 'kasjdljda', 8000, 2, 17, 2, 'Sudah'),
(16, 'sdfghjkl;', 9000000, 1, 17, 2, 'Belum'),
(17, '800000', 100, 2, 17, 2, 'Sudah');

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
(1, 'Art'),
(2, 'Technology');

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
  `target` double NOT NULL,
  `income` double NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama`, `foto`, `deskripsi`, `tgl`, `target`, `income`, `id_kategori`, `id_user`) VALUES
(7, 'Asus Expire', '["TheRestaurant.jpg"]', 'Asus....', '2017-04-28 14:58:41', 8000000, 0, 1, 2),
(8, 'Hantu', '["attachment.png"]', 'alkdjasl', '2017-04-28 15:12:45', 80000, 0, 1, 2),
(10, 'Muter Lagih', '["9b2ccf2e7081c465b731c88c28c04ec6.jpg","","","",""]', 'Bandung', '2017-05-13 13:17:59', 900000, 0, 1, 2),
(17, 'Baba', '["6f8e63ddea3eb543a7f3f168434a6275.jpg","da259bf1a13efbdffac6741de7e2efb4.jpg","","",""]', 'aasds', '2017-05-13 14:13:22', 8000000, 9196100, 1, 2),
(18, 'Baba', '["depan.jpg"]', 'aasds', '2017-04-28 15:40:21', 80000, 0, 1, 2),
(19, 'a', '["samping1.jpg"]', 'asasa', '2017-04-28 15:40:59', 9000, 0, 1, 2);

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
  `deskripsi` text NOT NULL,
  `id_akun` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `foto`, `alamat`, `deskripsi`, `id_akun`, `email`) VALUES
(2, 'Irvan Lutfi Gunawan', 'L', 'irvan.jpg', 'Bandung, Indonesia', '', 7, 'irvan@gmial.com'),
(3, 'Hantuuu', 'L', 'ReminderLogo.png', 'han', '', 8, ''),
(4, 'jujun', 'L', '1493637608irvan.jpg', 'Babakan Ciparay', '', 9, ''),
(5, 'Sunda', 'L', '7527d938919cb032773c585937d7f5ed', 'sunda', '', 10, ''),
(6, 'as', 'L', '1079532ca1d97e65cf2004c913699c2e', 'ui', '', 11, ''),
(7, 'zxczxc', 'L', 'default.jpg', 'zxc', '', 12, ''),
(8, 'asd', 'L', 'jpg', 'asd', '', 13, ''),
(9, 'uio', 'L', '531d566709c5049d56bba9bdfe1f18b5jpg', 'uio', '', 14, ''),
(10, 'fdg', 'L', 'e4b43fbedfc40f5be5b7d1de8af17c86.jpg', 'dfg', '', 15, ''),
(11, 'Asal', '', 'a5eb1c43c6eb91b889584baca750b47f.jpg', 'Bandung,Indonesia', '', 16, ''),
(12, 'asal', 'P', '7a1a763e4164cced508f8e19777f0d10.jpg', 'asal', '', 17, '');

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
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `id_bank` (`id_bank`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `id_user` (`id_user`);

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
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_akun` (`id_akun`);

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
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donasi_ibfk_2` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donasi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
