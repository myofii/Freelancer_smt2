-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 03:38 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`OrderID` int(11) NOT NULL,
  `userID` int(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalOrder` int(11) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `userID`, `quantity`, `totalOrder`, `OrderDate`) VALUES
(21, 7, 0, 47000, '2019-07-26 09:19:14'),
(22, 7, 0, 45000, '2019-08-07 12:08:48'),
(23, 7, 0, 47000, '2019-08-07 13:52:11'),
(24, 7, 0, 47000, '2019-08-07 13:53:35'),
(25, 7, 0, 47000, '2019-08-07 13:55:57'),
(26, 7, 0, 47000, '2019-08-07 14:00:52'),
(27, 7, 0, 47000, '2019-08-07 14:02:29'),
(28, 7, 0, 142000, '2019-08-07 14:02:58'),
(29, 7, 0, 196000, '2019-08-07 14:03:29'),
(30, 7, 0, 196000, '2019-08-07 14:10:59'),
(31, 7, 0, 196000, '2019-08-07 14:19:26'),
(32, 7, 0, 196000, '2019-08-07 14:21:50'),
(33, 9, 0, 0, '2019-08-07 15:56:58'),
(34, 9, 0, 0, '2019-08-07 16:00:39'),
(35, 9, 0, 0, '2019-08-07 16:01:17'),
(36, 9, 0, 0, '2019-08-07 16:01:46'),
(37, 9, 0, 60000, '2019-08-07 16:03:02'),
(38, 7, 0, 60000, '2019-08-08 04:47:56'),
(39, 9, 0, 47000, '2019-08-08 13:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
`CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Logo'),
(2, 'Poster'),
(3, 'Spanduk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`ProductID` int(12) NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductLongDesc` text COLLATE latin1_german2_ci NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `ProductImg` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserID` varchar(30) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=1009 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductLongDesc`, `CategoryID`, `ProductImg`, `UserID`) VALUES
(1, 'Desain Poster Kualitas Tinggi', 50000, '- Klien menjelaskan sekilas tentang event (suasana, warna, gambar kasar tentang event)\r\n- Klien memberikan detail seperti ''nama event'', ''tempat dan waktu event'' dan informasi yang dibutuhkan designer untuk poster\r\n- Klien bisa share ''design'' apa yang mereka prefer supaya ada referensi untuk designer.\r\n- File yang dikirimkan dalam bentuk (JPEG/PNG/TIFF) sesuai permintaan klien dan dikirimkan setelah pembayaran berhasil', 2, 'a1.png', '7'),
(2, 'LOGO PROFESSIONAL MURMER', 45000, '2 Konsep Desain Logo File Logo JPG File Logo PNG Mockup Logo Preview JPG Masterfile (File Vector) CDR atau AI REVISI MAKSIMUM 2 KALI\r\n\r\n \r\n\r\nBONUS : Dapatkan 1 Free Business Card Design dengan cara memberikan rating bintang 5 dan review positif. Mudah kan :)', 1, '1.jpg', '7'),
(3, 'Logo Bisnis Elegan Murah', 50000, '2 Konsep Desain Logo File Logo JPG File Logo PNG Mockup Logo Preview JPG Masterfile (File Vector) CDR atau AI REVISI MAKSIMUM 2 KALI\r\n\r\n \r\n\r\nBONUS : Dapatkan 1 Free Business Card Design dengan cara memberikan rating bintang 5 dan review positif. Mudah kan :)', 1, '2.jpg', '7'),
(4, 'Desain Logo Berkualitas', 54000, '2 Konsep Desain Logo File Logo JPG File Logo PNG Mockup Logo Preview JPG Masterfile (File Vector) CDR atau AI REVISI MAKSIMUM 2 KALI\r\n\r\n \r\n\r\nBONUS : Dapatkan 1 Free Business Card Design dengan cara memberikan rating bintang 5 dan review positif. Mudah kan :)', 1, '3.jpg', '7'),
(5, 'Desain Logo Premium Murmer', 47000, '2 Konsep Desain Logo File Logo JPG File Logo PNG Mockup Logo Preview JPG Masterfile (File Vector) CDR atau AI REVISI MAKSIMUM 2 KALI\r\n\r\n \r\n\r\nBONUS : Dapatkan 1 Free Business Card Design dengan cara memberikan rating bintang 5 dan review positif. Mudah kan :)', 1, '4.jpg', '7'),
(6, 'Desain Logo Bisnis Berkualitas', 60000, '2 Konsep Desain Logo File Logo JPG File Logo PNG Mockup Logo Preview JPG Masterfile (File Vector) CDR atau AI REVISI MAKSIMUM 2 KALI\r\n\r\n \r\n\r\nBONUS : Dapatkan 1 Free Business Card Design dengan cara memberikan rating bintang 5 dan review positif. Mudah kan :)', 1, '5.jpg', '7'),
(1004, 'Desain Poster Murah Meriah', 450000, '- Klien menjelaskan sekilas tentang event (suasana, warna, gambar kasar tentang event) - Klien memberikan detail seperti ''nama event'', ''tempat dan waktu event'' dan informasi yang dibutuhkan designer untuk poster - Klien bisa share ''design'' apa yang mereka prefer supaya ada referensi untuk designer. - File yang dikirimkan dalam bentuk (JPEG/PNG/TIFF) sesuai permintaan klien dan dikirimkan setelah pembayaran berhasil', 2, 'images.jpg', '9'),
(1005, 'Desain Poster Buat Bisnis Murah', 50000, '- Klien menjelaskan sekilas tentang event (suasana, warna, gambar kasar tentang event) - Klien memberikan detail seperti ''nama event'', ''tempat dan waktu event'' dan informasi yang dibutuhkan designer untuk poster - Klien bisa share ''design'' apa yang mereka prefer supaya ada referensi untuk designer. - File yang dikirimkan dalam bentuk (JPEG/PNG/TIFF) sesuai permintaan klien dan dikirimkan setelah pembayaran berhasil', 2, 'PAMFLET-EYOCO.jpg', '9'),
(1006, 'Desain Poster Buat Usaha Murmer', 47000, '- Klien menjelaskan sekilas tentang event (suasana, warna, gambar kasar tentang event) - Klien memberikan detail seperti ''nama event'', ''tempat dan waktu event'' dan informasi yang dibutuhkan designer untuk poster - Klien bisa share ''design'' apa yang mereka prefer supaya ada referensi untuk designer. - File yang dikirimkan dalam bentuk (JPEG/PNG/TIFF) sesuai permintaan klien dan dikirimkan setelah pembayaran berhasil', 2, 'Contoh desain poster promosi 1.png', '9'),
(1007, 'Desain Spanduk Murah Meriah', 38000, '- Desain banner yang sesuai keinginatn\r\n\r\n- Durasi tanpa ada batasan\r\n\r\n- Harga terjangkau\r\n\r\n- Durasi pengerjaan cepat\r\n\r\n- Soft file akan dikirim dalam format .psd, .png (HD Image)', 3, 'images (2).jpg', '9'),
(1008, 'Desain Spanduk Bisnis Berkualitas', 60000, '- Desain banner yang sesuai keinginatn\r\n\r\n- Durasi tanpa ada batasan\r\n\r\n- Harga terjangkau\r\n\r\n- Durasi pengerjaan cepat\r\n\r\n- Soft file akan dikirim dalam format .psd, .png (HD Image)', 3, 'images (1).jpg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `shopingcart`
--

CREATE TABLE IF NOT EXISTS `shopingcart` (
`CartID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPice` int(11) NOT NULL,
  `ProductID` int(12) DEFAULT NULL,
  `userID` int(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `shopingcart`
--

INSERT INTO `shopingcart` (`CartID`, `Quantity`, `TotalPice`, `ProductID`, `userID`) VALUES
(81, 1, 47000, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(30) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhoneNumber` int(11) NOT NULL,
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserPhoneNumber`, `UserRegistrationDate`, `UserAddress`) VALUES
(7, 'yofi', 'yofi', 2147483647, '2019-07-18 17:48:04', 'PCR'),
(9, 'fadhil', 'fadhil', 9230842, '2019-07-18 23:47:41', 'fadhil'),
(10, 'hjv', 'hjg', 2222, '2019-07-26 08:14:58', 'ghjfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ProductID`), ADD KEY `fk_category` (`CategoryID`);

--
-- Indexes for table `shopingcart`
--
ALTER TABLE `shopingcart`
 ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `shopingcart`
--
ALTER TABLE `shopingcart`
MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
