-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 02:54 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `circle-tics`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `ID_Admin` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID_Admin`, `username`, `password`) VALUES
(1, 'admin1', '84f5d4f0de287080a1f4968518f24556'),
(2, 'admin2', '84f5d4f0de287080a1f4968518f24556');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `ID_Comment` int(4) NOT NULL AUTO_INCREMENT,
  `ID_User` int(4) NOT NULL,
  `ID_User_teman` int(4) NOT NULL,
  `Tanggal` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`ID_Comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID_Comment`, `ID_User`, `ID_User_teman`, `Tanggal`, `comment`) VALUES
(4, 1, 4, '18:58 25 Oct 2014', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ID_User` int(4) NOT NULL,
  `friend` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `ID_User`, `friend`) VALUES
(5, 3, '1'),
(6, 1, '3'),
(7, 1, '4'),
(8, 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ID_User` int(4) NOT NULL,
  `friend` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `hasilhitung`
--

CREATE TABLE IF NOT EXISTS `hasilhitung` (
  `ID_User` int(4) NOT NULL,
  `ID_User_Rekomendasi` int(4) NOT NULL,
  `korelasi` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasilhitung_cos`
--

CREATE TABLE IF NOT EXISTS `hasilhitung_cos` (
  `ID_User` int(4) NOT NULL,
  `ID_User_Rekomendasi` int(4) NOT NULL,
  `korelasi` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infouser`
--

CREATE TABLE IF NOT EXISTS `infouser` (
  `ID_User` int(4) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `sex` set('Male','Female') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` set('Teknik Informatika','Sistem Informasi') NOT NULL,
  `tahun_angkatan` int(4) NOT NULL,
  `status` set('Dosen','Mahasiswa','Alumni') NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `infouser`
--

INSERT INTO `infouser` (`ID_User`, `fullname`, `TTL`, `sex`, `alamat`, `telepon`, `email`, `jurusan`, `tahun_angkatan`, `status`, `tempat_bekerja`, `foto`) VALUES
(1, 'Dewi Wulan C. A', '19-Oktober-1993', 'Female', 'SBS', '081333399982', 'ulanbalabala@yahoo.com', 'Teknik Informatika', 2011, 'Mahasiswa', 'Belum', 'contoj.jpg'),
(2, 'Juita Tuhfati', '1992-September-20', 'Female', 'Cengkareng', '08111111111', 'juitatr@gmail.com', 'Teknik Informatika', 2012, 'Mahasiswa', 'Belum', '243393-despicable-me-2.jpg'),
(3, 'Fenny Irmanda', '1993-Juli-25', 'Female', 'Cengkareng', '08123456778', 'fennyirmanda@gmail.com', 'Teknik Informatika', 2012, 'Mahasiswa', 'Belum', '243393-despicable-me-2.jpg'),
(4, 'Amarullah Muhammad', '1993-Agustus-3', 'Male', 'Depok', '0812345432', 'amarullahm@gmail.com', 'Sistem Informasi', 2011, 'Mahasiswa', 'Belum', '243393-despicable-me-2.jpg'),
(5, 'Halimatussa'' Diyah', '1994-Mei-1', 'Female', 'Cempaka Putih', '0812345678', 'demongdede@yahoo.com', 'Sistem Informasi', 2011, 'Mahasiswa', 'Belum', '243393-despicable-me-2.jpg'),
(6, 'Mirza Syahputra', '1992-Februari-20', 'Male', 'Matraman', '081234321', 'mirzaaa@yahoo.com', 'Sistem Informasi', 2011, 'Mahasiswa', 'Belum', 'banana-potato-song-minions-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `interest_pemrograman`
--

CREATE TABLE IF NOT EXISTS `interest_pemrograman` (
  `ID_User` int(4) NOT NULL AUTO_INCREMENT,
  `bahasa_c` int(2) NOT NULL,
  `java` int(2) NOT NULL,
  `PHP` int(2) NOT NULL,
  `python` int(2) NOT NULL,
  `ruby` int(2) NOT NULL,
  `visual_basic` int(2) NOT NULL,
  `delphi` int(2) NOT NULL,
  `ASP` int(2) NOT NULL,
  `mobile_programming` int(2) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `interest_pemrograman`
--

INSERT INTO `interest_pemrograman` (`ID_User`, `bahasa_c`, `java`, `PHP`, `python`, `ruby`, `visual_basic`, `delphi`, `ASP`, `mobile_programming`) VALUES
(1, 4, 4, 7, 3, 2, 3, 3, 6, 5),
(2, 3, 4, 5, 1, 4, 4, 3, 4, 4),
(3, 5, 6, 7, 2, 3, 2, 3, 2, 4),
(4, 5, 4, 4, 2, 3, 4, 4, 7, 3),
(5, 2, 5, 4, 3, 3, 2, 3, 5, 5),
(6, 3, 2, 2, 1, 1, 4, 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_kerja`
--

CREATE TABLE IF NOT EXISTS `lowongan_kerja` (
  `id_lowongan` int(4) NOT NULL AUTO_INCREMENT,
  `ID_User` int(4) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `tags` set('mobile programming','desktop programming','system analyst','computer network','web programming','flash programming','web designer','computer graphics','information security') NOT NULL,
  PRIMARY KEY (`id_lowongan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id_lowongan`, `ID_User`, `tanggal`, `judul`, `info`, `tags`) VALUES
(1, 1, '06:00 08 Nov 2014', 'PT. Sumber Kaya Makmur Sejahtera', 'Dicari web programmer PHP untuk perusahaan', 'web programming'),
(3, 1, '07:33 13 Dec 2014', 'PT. Test', 'Dicari programmer untuk website', 'web programming');

-- --------------------------------------------------------

--
-- Table structure for table `shareinfo`
--

CREATE TABLE IF NOT EXISTS `shareinfo` (
  `id_share` int(4) NOT NULL AUTO_INCREMENT,
  `ID_User` int(4) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id_share`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shareinfo`
--

INSERT INTO `shareinfo` (`id_share`, `ID_User`, `tanggal`, `info`) VALUES
(1, 0, '08:26 18 Oct 2014', ''),
(4, 1, '08:31 18 Oct 2014', ''),
(5, 1, '08:35 18 Oct 2014', ''),
(6, 1, '08:36 18 Oct 2014', 'bro');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id_survey` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `ask1` set('ya','tidak') NOT NULL,
  `ask2` set('cepat','agak lambat','lambat') NOT NULL,
  `ask3` set('ya','tidak') NOT NULL,
  `ask4` set('ya','cukup','tidak') NOT NULL,
  PRIMARY KEY (`id_survey`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_survey`, `username`, `ask1`, `ask2`, `ask3`, `ask4`) VALUES
(1, 'dewiwulanca', 'ya', 'cepat', 'ya', 'cukup'),
(6, 'mirzasyahputra', 'ya', 'cepat', 'ya', 'cukup');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `ID_User` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ID_User`, `username`, `password`) VALUES
(1, 'dewiwulanca', '84f5d4f0de287080a1f4968518f24556'),
(2, 'juitatr', '84f5d4f0de287080a1f4968518f24556'),
(3, 'fennyirmanda', '84f5d4f0de287080a1f4968518f24556'),
(4, 'amarullahm', '84f5d4f0de287080a1f4968518f24556'),
(5, 'hlmhtsdyh', '84f5d4f0de287080a1f4968518f24556'),
(6, 'mirzasyahputra', '84f5d4f0de287080a1f4968518f24556');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `interest_pemrograman`
--
ALTER TABLE `interest_pemrograman`
  ADD CONSTRAINT `interest_pemrograman_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `infouser` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD CONSTRAINT `userlogin_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `infouser` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
