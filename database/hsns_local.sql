-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 09:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsns_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangluong`
--

CREATE TABLE IF NOT EXISTS `bangluong` (
  `id` int(10) unsigned NOT NULL,
  `mabl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `nam` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaylap` date DEFAULT NULL,
  `nguoilap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bangluong`
--

INSERT INTO `bangluong` (`id`, `mabl`, `thang`, `nam`, `noidung`, `ngaylap`, `nguoilap`, `ghichu`, `madv`, `created_at`, `updated_at`) VALUES
(5, '123456.1470302716', '02', '2016', 'Tháng 02/2016', '2016-08-04', 'Tester', NULL, '123456', '2016-08-04 09:25:16', '2017-01-18 03:19:46'),
(6, '123456.1470302772', '03', '2016', '', '2016-08-04', 'Tester', NULL, '123456', '2016-08-04 09:26:12', '2016-08-04 09:26:12'),
(9, '123456.1470382921', '05', '2016', '', '2016-08-05', 'Tester', NULL, '123456', '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(12, '123456.1470456027', '08', '2017', 'Tháng 08/2017', '2016-08-06', 'Tester', NULL, '123456', '2016-08-06 04:00:27', '2017-01-18 03:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `bangluong_ct`
--

CREATE TABLE IF NOT EXISTS `bangluong_ct` (
  `id` int(10) unsigned NOT NULL,
  `mabl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macvcq` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nb` int(10) unsigned DEFAULT NULL,
  `msngbac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tencanbo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masoms` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heso` double NOT NULL DEFAULT '0',
  `vuotkhung` double NOT NULL DEFAULT '0',
  `pcct` double NOT NULL DEFAULT '0',
  `pckct` double NOT NULL DEFAULT '0',
  `pck` double NOT NULL DEFAULT '0',
  `pccv` double NOT NULL DEFAULT '0',
  `pckv` double NOT NULL DEFAULT '0',
  `pcth` double NOT NULL DEFAULT '0',
  `pcdd` double NOT NULL DEFAULT '0',
  `pcdh` double NOT NULL DEFAULT '0',
  `pcld` double NOT NULL DEFAULT '0',
  `pcdbqh` double NOT NULL DEFAULT '0',
  `pcudn` double NOT NULL DEFAULT '0',
  `pctn` double NOT NULL DEFAULT '0',
  `pctnn` double NOT NULL DEFAULT '0',
  `pcdbn` double NOT NULL DEFAULT '0',
  `pcvk` double NOT NULL DEFAULT '0',
  `pckn` double NOT NULL DEFAULT '0',
  `pcdang` double NOT NULL DEFAULT '0',
  `pccovu` double NOT NULL DEFAULT '0',
  `pclt` double NOT NULL DEFAULT '0',
  `pcd` double NOT NULL DEFAULT '0',
  `pctr` double NOT NULL DEFAULT '0',
  `ptbhxh` double NOT NULL DEFAULT '0',
  `ptbhyt` double NOT NULL DEFAULT '0',
  `ptkpcd` double NOT NULL DEFAULT '0',
  `ptbhtn` double NOT NULL DEFAULT '0',
  `tonghs` double NOT NULL DEFAULT '0',
  `ttl` double NOT NULL DEFAULT '0',
  `giaml` double NOT NULL DEFAULT '0',
  `bhct` double NOT NULL DEFAULT '0',
  `tluong` double NOT NULL DEFAULT '0',
  `stbhxh` double NOT NULL DEFAULT '0',
  `stbhyt` double NOT NULL DEFAULT '0',
  `stkpcd` double NOT NULL DEFAULT '0',
  `stbhtn` double NOT NULL DEFAULT '0',
  `ttbh` double NOT NULL DEFAULT '0',
  `gttncn` double NOT NULL DEFAULT '0',
  `luongtn` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bangluong_ct`
--

INSERT INTO `bangluong_ct` (`id`, `mabl`, `macvcq`, `mapb`, `id_nb`, `msngbac`, `macanbo`, `tencanbo`, `masoms`, `heso`, `vuotkhung`, `pcct`, `pckct`, `pck`, `pccv`, `pckv`, `pcth`, `pcdd`, `pcdh`, `pcld`, `pcdbqh`, `pcudn`, `pctn`, `pctnn`, `pcdbn`, `pcvk`, `pckn`, `pcdang`, `pccovu`, `pclt`, `pcd`, `pctr`, `ptbhxh`, `ptbhyt`, `ptkpcd`, `ptbhtn`, `tonghs`, `ttl`, `giaml`, `bhct`, `tluong`, `stbhxh`, `stbhyt`, `stkpcd`, `stbhtn`, `ttbh`, `gttncn`, `luongtn`, `created_at`, `updated_at`) VALUES
(8, '123456.1470302716', '123456.1467365409', NULL, NULL, '13.095', '123456.1468029570', 'Trần Văn Hải', NULL, 3.36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3.36, 4065600, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3926450, '2016-08-04 09:25:16', '2016-08-04 09:25:16'),
(9, '123456.1470302716', '123456.1467365409', NULL, NULL, '06.031', '123456.1468029889', 'Lê Hải Hà', NULL, 4.32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.32, 5227200, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5088050, '2016-08-04 09:25:16', '2016-08-04 09:25:16'),
(10, '123456.1470302716', '123456.1467365409', NULL, NULL, '13.094', '123456.1468034144', 'Vũ Hoàng Long', NULL, 4.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.4, 5324000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5184850, '2016-08-04 09:25:16', '2016-08-04 09:25:16'),
(11, '123456.1470302716', '123456.1468292225', NULL, NULL, '13.095', '123456.1468374147', 'Lê Văn Hải', NULL, 4.65, 0, 0, 0, 0, 0.45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5.1, 6171000, 500000, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5531850, '2016-08-04 09:25:16', '2017-01-18 08:18:44'),
(12, '123456.1470302716', '123456.1468292214', NULL, NULL, '01.003', '123456.1469502156', 'Trần Thị Nở', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3630000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3490850, '2016-08-04 09:25:16', '2016-08-04 09:25:16'),
(13, '123456.1470302772', '123456.1467365409', NULL, NULL, '13.095', '123456.1468029570', 'Trần Văn Hải', NULL, 3.36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3.36, 4065600, 500000, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3426450, '2016-08-04 09:26:12', '2016-08-05 01:26:10'),
(14, '123456.1470302772', '123456.1467365409', NULL, NULL, '06.031', '123456.1468029889', 'Lê Hải Hà', NULL, 4.32, 0.4, 0, 0, 0, 0.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5.02, 6074200, 500000, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5435050, '2016-08-04 09:26:12', '2016-08-04 09:41:06'),
(15, '123456.1470302772', '123456.1467365409', NULL, NULL, '13.094', '123456.1468034144', 'Vũ Hoàng Long', NULL, 4.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.4, 5324000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5184850, '2016-08-04 09:26:12', '2016-08-04 09:26:12'),
(16, '123456.1470302772', '123456.1468292225', NULL, NULL, '13.095', '123456.1468374147', 'Lê Văn Hải', NULL, 4.65, 0, 0, 0, 0, 0.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5.05, 6110500, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5971350, '2016-08-04 09:26:12', '2016-08-04 09:26:12'),
(17, '123456.1470302772', '123456.1468292214', NULL, NULL, '01.003', '123456.1469502156', 'Trần Thị Nở', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3630000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3490850, '2016-08-04 09:26:12', '2016-08-04 09:26:12'),
(28, '123456.1470382921', '123456.1467365409', NULL, NULL, '13.095', '123456.1468029570', 'Trần Văn Hải', NULL, 3.36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3.36, 4065600, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3926450, '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(29, '123456.1470382921', '123456.1467365409', NULL, NULL, '06.031', '123456.1468029889', 'Lê Hải Hà', NULL, 4.32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.32, 5227200, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5088050, '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(30, '123456.1470382921', '123456.1467365409', NULL, NULL, '13.094', '123456.1468034144', 'Vũ Hoàng Long', NULL, 4.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.4, 5324000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5184850, '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(31, '123456.1470382921', '123456.1468292225', NULL, NULL, '13.095', '123456.1468374147', 'Lê Văn Hải', NULL, 4.65, 0, 0, 0, 0, 0.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5.05, 6110500, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5971350, '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(32, '123456.1470382921', '123456.1468292214', NULL, NULL, '01.003', '123456.1469502156', 'Trần Thị Nở', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3630000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3490850, '2016-08-05 07:42:01', '2016-08-05 07:42:01'),
(33, '123456.1470456027', '123456.1467365409', NULL, NULL, '06.031', '123456.1468029889', 'Lê Hải Hà', NULL, 4.32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.32, 5227200, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5088050, '2016-08-06 04:00:27', '2016-08-06 04:00:27'),
(34, '123456.1470456027', '123456.1467365409', NULL, NULL, '13.094', '123456.1468034144', 'Vũ Hoàng Long', NULL, 4.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.4, 5324000, 150000, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 5034850, '2016-08-06 04:00:27', '2016-08-08 07:24:45'),
(35, '123456.1470456027', '123456.1468292214', NULL, NULL, '01.003', '123456.1469502156', 'Trần Thị Nở', NULL, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3630000, 0, 0, 0, 96800, 18150, 12100, 12100, 139150, 0, 3490850, '2016-08-06 04:00:27', '2016-08-06 04:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `dmchucvucq`
--

CREATE TABLE IF NOT EXISTS `dmchucvucq` (
  `id` int(10) unsigned NOT NULL,
  `macvcq` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tencv` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sapxep` int(11) NOT NULL DEFAULT '99',
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmchucvucq`
--

INSERT INTO `dmchucvucq` (`id`, `macvcq`, `tencv`, `ghichu`, `sapxep`, `madv`, `created_at`, `updated_at`) VALUES
(1, '123456.1467187910', 'Hiệu trưởng', 'Người lãnh đạo', 1, NULL, '2016-06-29 08:11:50', '2016-06-29 08:12:33'),
(2, '123456.1467190430', 'Phó hiệu trưởng', 'Tham mưu, giúp việc cho lãnh đạo', 2, NULL, '2016-06-29 08:53:50', '2016-07-01 09:33:11'),
(3, '123456.1467365409', 'Trưởng phòng', '', 3, NULL, '2016-07-01 09:30:09', '2016-07-01 09:30:09'),
(4, '123456.1468292172', 'Phó trưởng phòng', '', 4, NULL, '2016-07-12 02:56:12', '2016-07-12 02:56:39'),
(5, '123456.1468292214', 'Nhân viên', '', 5, NULL, '2016-07-12 02:56:54', '2017-02-22 07:29:37'),
(6, '123456.1468292225', 'Nhân viên chuyên môn', '', 5, NULL, '2016-07-12 02:57:05', '2016-07-12 02:57:05'),
(7, '1234561.1487750155', 'Kế toán', '', 7, NULL, '2017-02-22 07:55:55', '2017-02-22 07:56:41'),
(8, '1234561.1487750163', 'Kế toán trưởng', '', 6, NULL, '2017-02-22 07:56:03', '2017-02-22 07:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `dmchucvud`
--

CREATE TABLE IF NOT EXISTS `dmchucvud` (
  `id` int(10) unsigned NOT NULL,
  `macvd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tencv` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sapxep` int(11) NOT NULL DEFAULT '99',
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmchucvud`
--

INSERT INTO `dmchucvud` (`id`, `macvd`, `tencv`, `ghichu`, `sapxep`, `madv`, `created_at`, `updated_at`) VALUES
(1, '123456.1467190529', 'Bí thư', '', 1, NULL, '2016-06-29 08:55:29', '2016-07-09 01:36:38'),
(2, '123456.1467365376', 'Phó bí thư', '', 2, NULL, '2016-07-01 09:29:36', '2016-07-01 09:29:36'),
(3, '123456.1487748549', 'Đảng viên', '', 4, NULL, '2017-02-22 07:29:09', '2017-02-22 07:55:34'),
(4, '1234561.1487750129', 'Uỷ viên', '', 3, NULL, '2017-02-22 07:55:29', '2017-02-22 07:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `dmdantoc`
--

CREATE TABLE IF NOT EXISTS `dmdantoc` (
  `id` int(10) unsigned NOT NULL,
  `dantoc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thieuso` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdantoc`
--

INSERT INTO `dmdantoc` (`id`, `dantoc`, `thieuso`, `created_at`, `updated_at`) VALUES
(1, 'Kinh(việt)', 0, NULL, NULL),
(2, 'Tày', 1, NULL, NULL),
(3, 'Thái', 1, NULL, NULL),
(4, 'Hoa', 1, NULL, NULL),
(5, 'Khơ me', 1, NULL, NULL),
(6, 'Mường', 1, NULL, NULL),
(7, 'Nùng', 1, NULL, NULL),
(8, 'Mông (mèo)', 1, NULL, NULL),
(9, 'Dao', 1, NULL, NULL),
(10, 'Gia Rai', 1, NULL, NULL),
(11, 'Ngái', 1, NULL, NULL),
(12, 'Ê Đê', 1, NULL, NULL),
(13, 'Bana', 1, NULL, NULL),
(14, 'Xu đăng', 1, NULL, NULL),
(15, 'Sán chay', 1, NULL, NULL),
(16, 'Cơ Ho', 1, NULL, NULL),
(17, 'Chăm (chàm)', 1, NULL, NULL),
(18, 'Sán Dìu', 1, NULL, NULL),
(19, 'H`Rê', 1, NULL, NULL),
(20, 'M`Nông', 1, NULL, NULL),
(21, 'Ra Glai', 1, NULL, NULL),
(22, 'Xtiêng', 1, NULL, NULL),
(23, 'Bru', 1, NULL, NULL),
(24, 'Thổ', 1, NULL, NULL),
(25, 'Giáy', 1, NULL, NULL),
(26, 'Cơ Tu', 1, NULL, NULL),
(27, 'Giẻ Triêng', 1, NULL, NULL),
(28, 'Mạ', 1, NULL, NULL),
(29, 'Khơ mú', 1, NULL, NULL),
(30, 'Co', 1, NULL, NULL),
(31, 'Tà Ôi', 1, NULL, NULL),
(32, 'Chơ ro', 1, NULL, NULL),
(33, 'Kháng', 1, NULL, NULL),
(34, 'Xinh Mun', 1, NULL, NULL),
(35, 'Hà Nhì', 1, NULL, NULL),
(36, 'Chu Ru', 1, NULL, NULL),
(37, 'Lào', 1, NULL, NULL),
(38, 'La Chí', 1, NULL, NULL),
(39, 'La Ha', 1, NULL, NULL),
(40, 'Phù La', 1, NULL, NULL),
(41, 'La Hủ', 1, NULL, NULL),
(42, 'Lù', 1, NULL, NULL),
(43, 'Lô Lô', 1, NULL, NULL),
(44, 'Chứt', 1, NULL, NULL),
(45, 'Máng', 1, NULL, NULL),
(46, 'Pò Thẻn', 1, NULL, NULL),
(47, 'Cơ Lao', 1, NULL, NULL),
(48, 'Cống', 1, NULL, NULL),
(49, 'Bố Y', 1, NULL, NULL),
(50, 'Si La', 1, NULL, NULL),
(51, 'Pu Péo', 1, NULL, NULL),
(52, 'Brâu', 1, NULL, NULL),
(53, 'Ơ Đu', 1, NULL, NULL),
(54, 'Rơ măm', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dmdonvi`
--

CREATE TABLE IF NOT EXISTS `dmdonvi` (
  `id` int(10) unsigned NOT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lanhdao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `songuoi` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdonvi`
--

INSERT INTO `dmdonvi` (`id`, `madv`, `tenct`, `tendv`, `diachi`, `sodt`, `lanhdao`, `songuoi`, `created_at`, `updated_at`) VALUES
(1, '1234560', 'Tên đơn vị cấp trên', 'Phòng giáo dục Huyện Cuộc sống', NULL, NULL, 'Admin', 0, NULL, NULL),
(2, '1234561', 'Phòng giáo dục Huyện Cuộc sống', 'Trường mầm non Cuộc sống', NULL, NULL, NULL, 0, NULL, NULL),
(3, '1234562', 'Phòng giáo dục Huyện Cuộc sống', 'Trường Tiểu học Cuộc sống', NULL, NULL, NULL, 0, NULL, NULL),
(4, '1234563', 'Phòng giáo dục Huyện Cuộc sống', 'Trường Trung học cơ sở Cuộc sống', NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dmngachcc`
--

CREATE TABLE IF NOT EXISTS `dmngachcc` (
  `id` int(10) unsigned NOT NULL,
  `msngbac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenngbac` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dmphanloaict`
--

CREATE TABLE IF NOT EXISTS `dmphanloaict` (
  `id` int(10) unsigned NOT NULL,
  `phanloaict` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kieuct` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenct` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhomct` int(11) NOT NULL DEFAULT '99',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmphanloaict`
--

INSERT INTO `dmphanloaict` (`id`, `phanloaict`, `kieuct`, `tenct`, `nhomct`, `created_at`, `updated_at`) VALUES
(1, 'Đang công tác', 'Biên chế', 'Biên chế', 1, NULL, NULL),
(2, 'Đang công tác', 'Biên chế', 'Tập sự, thử việc', 1, NULL, NULL),
(3, 'Đang công tác', 'Biên chế', 'Hợp đồng không thời hạn', 1, NULL, NULL),
(4, 'Đang công tác', 'Hợp đồng', 'Hợp đồng dài hạn', 2, NULL, NULL),
(5, 'Đang công tác', 'Hợp đồng', 'Hợp đồng ngắn hạn', 2, NULL, NULL),
(6, 'Đang công tác', 'Hợp đồng', 'Hợp đồng lao động đặc biệt', 2, NULL, NULL),
(7, 'Đang công tác', 'Hợp đồng', 'Hợp đồng Nghị định 68', 2, NULL, NULL),
(8, 'Đang công tác', 'Hợp đồng', 'Hợp đồng tạm tuyển', 2, NULL, NULL),
(9, 'Đang công tác', 'Hợp đồng', 'Giáo viên thỉnh giảng', 2, NULL, NULL),
(10, 'Đang công tác', 'Hợp đồng', 'Hợp đồng lần đầu', 2, NULL, NULL),
(11, 'Đã thôi công tác', 'Nghỉ chế độ', 'Nghỉ hưu', 4, NULL, NULL),
(12, 'Đã thôi công tác', 'Nghỉ chế độ', 'Nghỉ mất sức lao động', 4, NULL, NULL),
(13, 'Đã thôi công tác', 'Thuyên chuyển', 'Chuyển đi', 3, NULL, NULL),
(14, 'Đã thôi công tác', 'Cho thôi việc', 'Cho thôi việc', 5, NULL, NULL),
(15, 'Đã thôi công tác', 'Cho thôi việc', 'Bỏ việc', 5, NULL, NULL),
(16, 'Đã thôi công tác', 'Cho thôi việc', 'Khác', 5, NULL, NULL),
(17, 'Chuyển trường', 'Biên chế', 'Biên chế', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dmphongban`
--

CREATE TABLE IF NOT EXISTS `dmphongban` (
  `id` int(10) unsigned NOT NULL,
  `mapb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenpb` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diengiai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sapxep` int(11) NOT NULL DEFAULT '99',
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmphongban`
--

INSERT INTO `dmphongban` (`id`, `mapb`, `tenpb`, `diengiai`, `sapxep`, `madv`, `created_at`, `updated_at`) VALUES
(4, 'PB0004', 'Phòng tổng hợp', '', 3, '123456', NULL, '2017-02-22 07:54:46'),
(11, 'PB0011', 'Phòng kế toán', '', 4, '123456', NULL, '2017-02-22 07:54:51'),
(12, '123456.1467172980395', 'Phòng chuyên môn', 'Thực hiện các nội dung chuyên môn', 1, '123456', '2016-06-29 04:03:10', '2017-02-22 07:54:31'),
(14, '123456.1467186118', 'Phòng bảo vệ', '', 2, '123456', '2016-06-29 07:41:58', '2017-02-22 07:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `dmphucap`
--

CREATE TABLE IF NOT EXISTS `dmphucap` (
  `id` int(10) unsigned NOT NULL,
  `mapc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenpc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hesopc` double DEFAULT '0',
  `baohiem` tinyint(1) DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmphucap`
--

INSERT INTO `dmphucap` (`id`, `mapc`, `tenpc`, `hesopc`, `baohiem`, `ghichu`, `created_at`, `updated_at`) VALUES
(2, 'PCCV', 'Phụ cấp chức vụ', 0.4, 1, NULL, NULL, NULL),
(3, 'PCCT', 'Phụ cấp chuyên trách', 0, 0, NULL, NULL, NULL),
(4, 'PCDBN', 'Phụ cấp đặc biệt khác của ngành', 0, 0, NULL, NULL, NULL),
(5, 'PCDBQH', 'Phụ cấp đại biểu Quốc hội, đại biểu Hội đồng nhân dân', 0, 0, NULL, NULL, NULL),
(6, 'PCDD', 'Phụ cấp đắt đỏ', 0, 0, NULL, NULL, NULL),
(7, 'PCDH', 'Phụ cấp độc hại, nguy hiểm', 0, 0, NULL, NULL, NULL),
(8, 'PCKCT', 'Phụ cấp không chuyên trách', 0, 0, NULL, NULL, NULL),
(9, 'PCKV', 'Phụ cấp khu vực', 0, 0, NULL, NULL, NULL),
(10, 'PCKN', 'Phụ cấp kiêm nhiệm', 0, 0, NULL, NULL, NULL),
(11, 'PCD', 'Phụ cấp làm đêm', 0, 0, NULL, NULL, NULL),
(12, 'PCLD', 'Phụ cấp lưu động', 0, 0, NULL, NULL, NULL),
(13, 'PCTNN', 'Phụ cấp thâm niên nghề', 0, 0, NULL, NULL, NULL),
(14, 'PCVK', 'Phụ cấp thâm niên vượt khung', 0, 1, NULL, NULL, NULL),
(15, 'PCLT', 'Phụ cấp thêm giờ', 0, 0, NULL, NULL, NULL),
(16, 'PCTH', 'Phụ cấp thu hút', 0, 0, NULL, NULL, NULL),
(17, 'PCTN', 'Phụ cấp trách nhiệm theo nghề, theo công việc', 0, 0, NULL, NULL, NULL),
(18, 'PCTr', 'Phụ cấp trực', 0, 0, NULL, NULL, NULL),
(19, 'PCUDN', 'Phụ cấp ưu đãi nghề', 0, 0, NULL, NULL, NULL),
(20, 'PCK', 'Phụ cấp khác', 0, 0, NULL, NULL, NULL),
(21, 'PCDANG', 'Phụ cấp Đảng', 0, 0, NULL, NULL, NULL),
(22, 'PCCoVu', 'Phụ cấp công vụ', 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dmquanhegd`
--

CREATE TABLE IF NOT EXISTS `dmquanhegd` (
  `id` int(10) unsigned NOT NULL,
  `quanhe` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nhom` int(11) NOT NULL DEFAULT '99',
  `sapxep` int(11) NOT NULL DEFAULT '99',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmquanhegd`
--

INSERT INTO `dmquanhegd` (`id`, `quanhe`, `nhom`, `sapxep`, `created_at`, `updated_at`) VALUES
(1, 'Ông nội', 2, 1, NULL, NULL),
(2, 'Ông ngoại', 2, 1, NULL, NULL),
(3, 'Ông nội vợ', 3, 1, NULL, NULL),
(4, 'Ông ngoại vợ', 3, 1, NULL, NULL),
(5, 'Ông nội chồng', 3, 1, NULL, NULL),
(6, 'Ông ngoại chồng', 3, 1, NULL, NULL),
(7, 'Bà nội', 2, 2, NULL, NULL),
(8, 'Bà ngoại', 2, 2, NULL, NULL),
(9, 'Bà nội vợ', 3, 2, NULL, NULL),
(10, 'Bà ngoại vợ', 3, 2, NULL, NULL),
(11, 'Cha đẻ', 2, 3, NULL, NULL),
(12, 'Mẹ đẻ', 2, 3, NULL, NULL),
(13, 'Cha vợ', 3, 3, NULL, NULL),
(14, 'Cha chồng', 3, 3, NULL, NULL),
(15, 'Mẹ vợ', 3, 3, NULL, NULL),
(16, 'Mẹ chồng', 3, 3, NULL, NULL),
(17, 'Cha kế', 2, 3, NULL, NULL),
(18, 'Mẹ kế', 2, 3, NULL, NULL),
(19, 'Cha nuôi', 2, 3, NULL, NULL),
(20, 'Mẹ nuôi', 2, 3, NULL, NULL),
(21, 'Bác', 2, 4, NULL, NULL),
(22, 'Chú', 2, 4, NULL, NULL),
(23, 'Cô', 2, 4, NULL, NULL),
(24, 'Cậu', 2, 4, NULL, NULL),
(25, 'Gì', 2, 4, NULL, NULL),
(26, 'Anh ruột', 2, 5, NULL, NULL),
(27, 'Chị ruột', 2, 5, NULL, NULL),
(28, 'Em ruột', 2, 5, NULL, NULL),
(29, 'Anh vợ', 3, 5, NULL, NULL),
(30, 'Chị vợ', 3, 5, NULL, NULL),
(31, 'Em vợ', 3, 5, NULL, NULL),
(32, 'Anh chồng', 3, 5, NULL, NULL),
(33, 'Chị chồng', 3, 5, NULL, NULL),
(34, 'Em chồng', 3, 5, NULL, NULL),
(35, 'Vợ', 1, 6, NULL, NULL),
(36, 'Chồng', 1, 6, NULL, NULL),
(37, 'Con', 1, 7, NULL, NULL),
(38, 'Con nuôi', 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dshettapsu`
--

CREATE TABLE IF NOT EXISTS `dshettapsu` (
  `id` int(10) unsigned NOT NULL,
  `mahts` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquanqd` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayxet` date DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dshettapsu`
--

INSERT INTO `dshettapsu` (`id`, `mahts`, `soqd`, `ngayqd`, `nguoiky`, `coquanqd`, `noidung`, `ngayxet`, `madv`, `created_at`, `updated_at`) VALUES
(1, '123456.1486695914', '', '2017-02-28', 'abc', '', '', '2017-02-28', '123456', '2017-02-10 03:05:14', '2017-02-10 03:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `dshuutri`
--

CREATE TABLE IF NOT EXISTS `dshuutri` (
  `id` int(10) unsigned NOT NULL,
  `maht` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` date DEFAULT NULL,
  `nguoiky` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquanqd` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayxet` date DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dshuutri`
--

INSERT INTO `dshuutri` (`id`, `maht`, `soqd`, `ngayqd`, `nguoiky`, `coquanqd`, `noidung`, `ngayxet`, `madv`, `created_at`, `updated_at`) VALUES
(1, '123456.1486434580', '159753', '2017-02-01', 'A', '15678', '123546987', '2017-02-01', '123456', '2017-02-07 02:29:40', '2017-02-10 02:00:30'),
(2, '123456.1486434877', '', '2017-02-02', '', '', '', '2017-02-28', '123456', '2017-02-07 02:34:37', '2017-02-07 02:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `dsnangluong`
--

CREATE TABLE IF NOT EXISTS `dsnangluong` (
  `id` int(10) unsigned NOT NULL,
  `manl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loaids` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquanqd` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayxet` date DEFAULT NULL,
  `kemtheo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dsnangluong`
--

INSERT INTO `dsnangluong` (`id`, `manl`, `loaids`, `soqd`, `ngayqd`, `nguoiky`, `coquanqd`, `noidung`, `ngayxet`, `kemtheo`, `madv`, `created_at`, `updated_at`) VALUES
(13, '123456.1470628550', NULL, 'QD/NL-UBND', '2016-08-01', 'Hoang Van Anh', 'UBND', '', '2016-08-01', '', '123456', '2016-08-08 03:55:50', '2016-08-09 01:56:59'),
(14, '123456.1486605064', NULL, '', '2017-02-01', '', '', '', '2020-02-01', '', '123456', '2017-02-09 01:51:04', '2017-02-09 01:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `general_configs`
--

CREATE TABLE IF NOT EXISTS `general_configs` (
  `id` int(10) unsigned NOT NULL,
  `tuoinu` int(11) NOT NULL DEFAULT '0',
  `tuoinam` int(11) NOT NULL DEFAULT '0',
  `tinh` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `huyen` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luongcb` double NOT NULL DEFAULT '0',
  `bhxh` double NOT NULL DEFAULT '0',
  `bhyt` double NOT NULL DEFAULT '0',
  `bhtn` double NOT NULL DEFAULT '0',
  `kpcd` double NOT NULL DEFAULT '0',
  `stkpcd` double NOT NULL DEFAULT '0',
  `stbhtn_dv` double NOT NULL DEFAULT '0',
  `stbhyt_dv` double NOT NULL DEFAULT '0',
  `stbhxh_dv` double NOT NULL DEFAULT '0',
  `stkpcd_dv` double NOT NULL DEFAULT '0',
  `stbhtn` double NOT NULL DEFAULT '0',
  `stbhyt` double NOT NULL DEFAULT '0',
  `stbhxh` double NOT NULL DEFAULT '0',
  `bhxh_dv` double NOT NULL DEFAULT '0',
  `bhyt_dv` double NOT NULL DEFAULT '0',
  `bhtn_dv` double NOT NULL DEFAULT '0',
  `kpcd_dv` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_configs`
--

INSERT INTO `general_configs` (`id`, `tuoinu`, `tuoinam`, `tinh`, `huyen`, `luongcb`, `bhxh`, `bhyt`, `bhtn`, `kpcd`, `stkpcd`, `stbhtn_dv`, `stbhyt_dv`, `stbhxh_dv`, `stkpcd_dv`, `stbhtn`, `stbhyt`, `stbhxh`, `bhxh_dv`, `bhyt_dv`, `bhtn_dv`, `kpcd_dv`, `created_at`, `updated_at`) VALUES
(1, 55, 60, NULL, NULL, 1210000, 8, 1.5, 1, 1, 12100, 0, 0, 0, 0, 12100, 18150, 96800, 18, 3, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hosobaohiemyte`
--

CREATE TABLE IF NOT EXISTS `hosobaohiemyte` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `ngaylinhthe` date DEFAULT NULL,
  `noidangky` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sothebh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosobinhbau`
--

CREATE TABLE IF NOT EXISTS `hosobinhbau` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ketqua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosocanbo`
--

CREATE TABLE IF NOT EXISTS `hosocanbo` (
  `id` int(10) unsigned NOT NULL,
  `mapb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macvcq` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macvd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macongchuc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sunghiep` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tencanbo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nsxa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nshuyen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nstinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qqxa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qqhuyen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qqtinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tongiao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tpgd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hktt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytd` date DEFAULT NULL,
  `cqtd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lvtd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaybn` date DEFAULT NULL,
  `ngayvao` date DEFAULT NULL,
  `cvcn` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lvhd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguontd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `httd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaybc` date DEFAULT NULL,
  `tdgdpt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tdcm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chuyennganh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidt` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoadt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `llct` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qlnhanuoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngoaingu` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdonn` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdoth` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayvd` date DEFAULT NULL,
  `ngayvdct` date DEFAULT NULL,
  `noikn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayctctxh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cvtcxh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynn` date DEFAULT NULL,
  `ngayxn` date DEFAULT NULL,
  `qhcn` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dhpt` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stct` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ttsk` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chieucao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cannang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhommau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongtat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sothuongtat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuongbinh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giadinhcs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socmnd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycap` date DEFAULT NULL,
  `noicap` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lichsubt` text COLLATE utf8_unicode_ci,
  `lichsuct` text COLLATE utf8_unicode_ci,
  `thannhannn` text COLLATE utf8_unicode_ci,
  `tnxbt` text COLLATE utf8_unicode_ci,
  `soBHXH` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayBHXH` date DEFAULT NULL,
  `thangtapsu` int(11) NOT NULL DEFAULT '0',
  `sodt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sotk` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennganhang` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tthn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bhtn` tinyint(1) NOT NULL DEFAULT '1',
  `madv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `msngbac` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date NOT NULL,
  `ngayden` date NOT NULL,
  `heso` double NOT NULL DEFAULT '0',
  `bac` int(11) NOT NULL DEFAULT '0',
  `vuotkhung` double NOT NULL DEFAULT '0',
  `pthuong` double NOT NULL DEFAULT '0',
  `pcct` double NOT NULL DEFAULT '0',
  `pck` double NOT NULL DEFAULT '0',
  `pccv` double NOT NULL DEFAULT '0',
  `pckv` double NOT NULL DEFAULT '0',
  `pcth` double NOT NULL DEFAULT '0',
  `pcdd` double NOT NULL DEFAULT '0',
  `pcdh` double NOT NULL DEFAULT '0',
  `pcld` double NOT NULL DEFAULT '0',
  `pcdbqh` double NOT NULL DEFAULT '0',
  `pcudn` double NOT NULL DEFAULT '0',
  `pctn` double NOT NULL DEFAULT '0',
  `pctnn` double NOT NULL DEFAULT '0',
  `pcdbn` double NOT NULL DEFAULT '0',
  `pcvk` double NOT NULL DEFAULT '0',
  `pckn` double NOT NULL DEFAULT '0',
  `pcdang` double NOT NULL DEFAULT '0',
  `pccovu` double NOT NULL DEFAULT '0',
  `pclt` double NOT NULL DEFAULT '0',
  `pcd` double NOT NULL DEFAULT '0',
  `pctr` double NOT NULL DEFAULT '0',
  `pckct` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hosocanbo`
--

INSERT INTO `hosocanbo` (`id`, `mapb`, `macvcq`, `macvd`, `macanbo`, `anh`, `macongchuc`, `sunghiep`, `tencanbo`, `tenkhac`, `ngaysinh`, `gioitinh`, `nsxa`, `nshuyen`, `nstinh`, `qqxa`, `qqhuyen`, `qqtinh`, `dantoc`, `tongiao`, `tpgd`, `hktt`, `noio`, `ngaytd`, `cqtd`, `lvtd`, `ngaybn`, `ngayvao`, `cvcn`, `lvhd`, `nguontd`, `httd`, `ngaybc`, `tdgdpt`, `tdcm`, `chuyennganh`, `noidt`, `hinhthuc`, `khoadt`, `llct`, `qlnhanuoc`, `ngoaingu`, `trinhdonn`, `trinhdoth`, `ngayvd`, `ngayvdct`, `noikn`, `ngayctctxh`, `cvtcxh`, `ngaynn`, `ngayxn`, `qhcn`, `dhpt`, `stct`, `ttsk`, `chieucao`, `cannang`, `nhommau`, `thuongtat`, `sothuongtat`, `thuongbinh`, `giadinhcs`, `socmnd`, `ngaycap`, `noicap`, `lichsubt`, `lichsuct`, `thannhannn`, `tnxbt`, `soBHXH`, `ngayBHXH`, `thangtapsu`, `sodt`, `email`, `sotk`, `tennganhang`, `tthn`, `bhtn`, `madv`, `created_at`, `updated_at`, `msngbac`, `ngaytu`, `ngayden`, `heso`, `bac`, `vuotkhung`, `pthuong`, `pcct`, `pck`, `pccv`, `pckv`, `pcth`, `pcdd`, `pcdh`, `pcld`, `pcdbqh`, `pcudn`, `pctn`, `pctnn`, `pcdbn`, `pcvk`, `pckn`, `pcdang`, `pccovu`, `pclt`, `pcd`, `pctr`, `pckct`) VALUES
(9, '123456.1467172980395', '123456.1467187910', NULL, '1234561.1487750452', '', '', 'Viên chức', 'Nguyễn Thị Lan', '', '1970-02-01', 'Nữ', '', '', '', '', '', '', 'Kinh(việt)', '', NULL, '', '', NULL, '', 'Giáo dục', NULL, '2005-01-01', '', 'Giáo dục', NULL, '', '2000-02-01', '', 'Đại học', '', '', '', NULL, '', '', 'Tiếng Anh', 'B', 'A', NULL, NULL, '', NULL, '', NULL, NULL, '', '', '', '', '', '', 'Nhóm máu A', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, 0, '', '', '', '', '', 1, '1234561', '2017-02-22 08:00:52', '2017-02-22 08:00:52', '15a.205', '2015-01-01', '2017-01-01', 4.98, 9, 0, 100, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hosocanbo_truoctd`
--

CREATE TABLE IF NOT EXISTS `hosocanbo_truoctd` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `nghenghiep` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquan` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosochucvu`
--

CREATE TABLE IF NOT EXISTS `hosochucvu` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mapb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `macvcq` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `noidungqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` date DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosochucvud`
--

CREATE TABLE IF NOT EXISTS `hosochucvud` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `macvd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `noidungqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosocongtac`
--

CREATE TABLE IF NOT EXISTS `hosocongtac` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date NOT NULL,
  `ngayden` date NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linhvuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noiden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosocongtacnn`
--

CREATE TABLE IF NOT EXISTS `hosocongtacnn` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date NOT NULL,
  `ngayden` date NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doandi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kinhphi` double NOT NULL DEFAULT '0',
  `nguonkp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nuoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosodaotao`
--

CREATE TABLE IF NOT EXISTS `hosodaotao` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `tencoso` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chuyennganh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vanbang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosokhenthuong`
--

CREATE TABLE IF NOT EXISTS `hosokhenthuong` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capqd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosokyluat`
--

CREATE TABLE IF NOT EXISTS `hosokyluat` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capqd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosollvt`
--

CREATE TABLE IF NOT EXISTS `hosollvt` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `quanham` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qhcn` tinyint(1) NOT NULL DEFAULT '0',
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosoluanchuyen`
--

CREATE TABLE IF NOT EXISTS `hosoluanchuyen` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaylc` date DEFAULT NULL,
  `mapb` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macvcq` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soqd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayqd` date DEFAULT NULL,
  `nguoiky` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosoluong`
--

CREATE TABLE IF NOT EXISTS `hosoluong` (
  `id` int(10) unsigned NOT NULL,
  `manl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahts` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nb` int(10) unsigned DEFAULT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msngbac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `bac` int(11) NOT NULL DEFAULT '1',
  `heso` double NOT NULL DEFAULT '0',
  `vuotkhung` double NOT NULL DEFAULT '0',
  `pthuong` double NOT NULL DEFAULT '100',
  `ketqua` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosonhanxetdg`
--

CREATE TABLE IF NOT EXISTS `hosonhanxetdg` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `danhgia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhanxet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xeploai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosophucap`
--

CREATE TABLE IF NOT EXISTS `hosophucap` (
  `id` int(10) unsigned NOT NULL,
  `mapc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytu` date DEFAULT NULL,
  `ngayden` date DEFAULT NULL,
  `hesopc` double NOT NULL DEFAULT '0',
  `ghichupc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosoquanhegd`
--

CREATE TABLE IF NOT EXISTS `hosoquanhegd` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhe` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thongtinct` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosotailieu`
--

CREATE TABLE IF NOT EXISTS `hosotailieu` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybangiao` date DEFAULT NULL,
  `nguoinhan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tentailieu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosothanhtra`
--

CREATE TABLE IF NOT EXISTS `hosothanhtra` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `tenthanhtra` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xeploai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ketluan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosotinhtrangct`
--

CREATE TABLE IF NOT EXISTS `hosotinhtrangct` (
  `id` int(10) unsigned NOT NULL,
  `macanbo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maht` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahts` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phanloaict` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kieuct` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenct` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hientai` tinyint(1) NOT NULL DEFAULT '0',
  `madv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hosotinhtrangct`
--

INSERT INTO `hosotinhtrangct` (`id`, `macanbo`, `maht`, `mahts`, `phanloaict`, `kieuct`, `tenct`, `hientai`, `madv`, `created_at`, `updated_at`) VALUES
(1, '1234561.1487750452', NULL, NULL, 'Đang công tác', 'Biên chế', 'Biên chế', 1, NULL, '2017-02-22 08:00:52', '2017-02-22 08:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_00_103124_create_dmquanhegd_table', 1),
('2016_06_00_104204_create_ngachbac_table', 1),
('2016_06_10_102423_create_dmchucvucq_table', 1),
('2016_06_10_102650_create_dmchucvucd_table', 1),
('2016_06_10_103018_create_dmphongban_table', 1),
('2016_06_10_103042_create_dmphucap_table', 1),
('2016_06_10_103346_create_hosocanbo_table', 1),
('2016_06_19_101922_create_bangluong_table', 1),
('2016_06_19_102217_create_dshuutri_table', 1),
('2016_06_19_102235_create_dsnangluong_table', 1),
('2016_06_19_102256_create_dshettapsu_table', 1),
('2016_06_19_102728_create_dmdantoc_table', 1),
('2016_06_19_102806_create_dmdonvi_table', 1),
('2016_06_20_101936_create_bangluongct_table', 1),
('2016_06_20_102913_create_dmngachcc_table', 1),
('2016_06_20_102959_create_dmphanloaict_table', 1),
('2016_06_20_103244_create_hosobaohiemyte_table', 1),
('2016_06_20_103318_create_hosobinhbau_table', 1),
('2016_06_20_103416_create_hosochucvu_table', 1),
('2016_06_20_103459_create_hosocongtac_table', 1),
('2016_06_20_103518_create_hosocongtacnn_table', 1),
('2016_06_20_103548_create_hosodaotao_table', 1),
('2016_06_20_103620_create_hosokhenthuong_table', 1),
('2016_06_20_103644_create_hosokyluat_table', 1),
('2016_06_20_103730_create_hosollvt_table', 1),
('2016_06_20_103758_create_hosoluanchuyen_table', 2),
('2016_06_20_103816_create_hosoluong_table', 3),
('2016_06_20_103848_create_hosonhanxetdg_table', 3),
('2016_06_20_103913_create_hosophucap_table', 3),
('2016_06_20_103939_create_hosoquanhegd_table', 3),
('2016_06_20_104016_create_hosothanhtra_table', 3),
('2016_06_20_104136_create_hosotinhtrangct_table', 4),
('2016_06_20_104226_create_hosotailieu_table', 4),
('2016_06_20_163429_create_hosochucvud_table', 4),
('2016_06_21_095024_create_hosocanbo_truoctd_table', 4),
('2016_06_21_163453_create_general_configs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ngachbac`
--

CREATE TABLE IF NOT EXISTS `ngachbac` (
  `id` int(10) unsigned NOT NULL,
  `msngbac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plnb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tennb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namnb` int(11) NOT NULL DEFAULT '0',
  `bac` int(11) NOT NULL DEFAULT '1',
  `heso` double NOT NULL DEFAULT '0',
  `vk` double NOT NULL DEFAULT '0',
  `ptvk` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=557 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ngachbac`
--

INSERT INTO `ngachbac` (`id`, `msngbac`, `plnb`, `tennb`, `namnb`, `bac`, `heso`, `vk`, `ptvk`, `created_at`, `updated_at`) VALUES
(1, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 1, 6.2, 0, 0, NULL, NULL),
(2, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 1, 6.2, 0, 0, NULL, NULL),
(3, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 1, 6.2, 0, 0, NULL, NULL),
(4, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 1, 6.2, 0, 0, NULL, NULL),
(5, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 1, 4.4, 0, 0, NULL, NULL),
(6, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 1, 4.4, 0, 0, NULL, NULL),
(7, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 1, 4.4, 0, 0, NULL, NULL),
(8, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 1, 4.4, 0, 0, NULL, NULL),
(9, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 1, 4, 0, 0, NULL, NULL),
(10, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 1, 4, 0, 0, NULL, NULL),
(11, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 1, 4, 0, 0, NULL, NULL),
(12, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 1, 2.34, 0, 0, NULL, NULL),
(13, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 1, 2.34, 0, 0, NULL, NULL),
(14, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(15, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 1, 2.34, 0, 0, NULL, NULL),
(16, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(17, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(18, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(19, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 1, 2.34, 0, 0, NULL, NULL),
(20, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(21, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 1, 2.34, 0, 0, NULL, NULL),
(22, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 1, 2.34, 0, 0, NULL, NULL),
(23, '17a.170', 'CC-VC loại Ao', 'Thư viện viên (cao đẳng)', 3, 1, 2.1, 0, 0, NULL, NULL),
(24, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 1, 2.1, 0, 0, NULL, NULL),
(25, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 1, 2.1, 0, 0, NULL, NULL),
(26, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 1, 2.1, 0, 0, NULL, NULL),
(27, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 1, 2.1, 0, 0, NULL, NULL),
(28, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 1, 2.1, 0, 0, NULL, NULL),
(29, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 1, 2.1, 0, 0, NULL, NULL),
(30, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 1, 1.86, 0, 0, NULL, NULL),
(31, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 1, 1.86, 0, 0, NULL, NULL),
(32, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 1, 1.86, 0, 0, NULL, NULL),
(33, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 1, 1.86, 0, 0, NULL, NULL),
(34, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 1, 1.86, 0, 0, NULL, NULL),
(35, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 1, 1.86, 0, 0, NULL, NULL),
(36, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 1, 1.86, 0, 0, NULL, NULL),
(37, '01.004', 'CC-VC loại B', 'Cán sự', 2, 1, 1.86, 0, 0, NULL, NULL),
(38, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 1, 1.86, 0, 0, NULL, NULL),
(39, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 1, 1.5, 0, 0, NULL, NULL),
(40, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 1, 1.35, 0, 0, NULL, NULL),
(41, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 1, 1.5, 0, 0, NULL, NULL),
(42, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 1, 2.05, 0, 0, NULL, NULL),
(43, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 1, 1.65, 0, 0, NULL, NULL),
(44, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 1, 1.35, 0, 0, NULL, NULL),
(45, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 1, 1, 0, 0, NULL, NULL),
(46, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 1, 1.5, 0, 0, NULL, NULL),
(47, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 1, 2.05, 0, 0, NULL, NULL),
(48, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 2, 6.56, 0, 0, NULL, NULL),
(49, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 2, 6.56, 0, 0, NULL, NULL),
(50, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 2, 6.56, 0, 0, NULL, NULL),
(51, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 2, 6.56, 0, 0, NULL, NULL),
(52, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 2, 4.74, 0, 0, NULL, NULL),
(53, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 2, 4.74, 0, 0, NULL, NULL),
(54, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 2, 4.74, 0, 0, NULL, NULL),
(55, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 2, 4.74, 0, 0, NULL, NULL),
(56, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 2, 4.34, 0, 0, NULL, NULL),
(57, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 2, 4.34, 0, 0, NULL, NULL),
(58, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 2, 4.34, 0, 0, NULL, NULL),
(59, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 2, 2.67, 0, 0, NULL, NULL),
(60, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 2, 2.67, 0, 0, NULL, NULL),
(61, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(62, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 2, 2.67, 0, 0, NULL, NULL),
(63, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(64, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(65, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(66, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 2, 2.67, 0, 0, NULL, NULL),
(67, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(68, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 2, 2.67, 0, 0, NULL, NULL),
(69, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 2, 2.67, 0, 0, NULL, NULL),
(70, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 2, 2.41, 0, 0, NULL, NULL),
(71, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 2, 2.41, 0, 0, NULL, NULL),
(72, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 2, 2.41, 0, 0, NULL, NULL),
(73, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 2, 2.41, 0, 0, NULL, NULL),
(74, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 2, 2.41, 0, 0, NULL, NULL),
(75, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 2, 2.41, 0, 0, NULL, NULL),
(76, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 2, 2.06, 0, 0, NULL, NULL),
(77, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 2, 2.06, 0, 0, NULL, NULL),
(78, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 2, 2.06, 0, 0, NULL, NULL),
(79, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 2, 2.06, 0, 0, NULL, NULL),
(80, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 2, 2.06, 0, 0, NULL, NULL),
(81, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 2, 2.06, 0, 0, NULL, NULL),
(82, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 2, 2.06, 0, 0, NULL, NULL),
(83, '01.004', 'CC-VC loại B', 'Cán sự', 2, 2, 2.06, 0, 0, NULL, NULL),
(84, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 2, 2.06, 0, 0, NULL, NULL),
(85, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 2, 1.68, 0, 0, NULL, NULL),
(86, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 2, 1.53, 0, 0, NULL, NULL),
(87, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 2, 1.68, 0, 0, NULL, NULL),
(88, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 2, 2.23, 0, 0, NULL, NULL),
(89, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 2, 1.83, 0, 0, NULL, NULL),
(90, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 2, 1.53, 0, 0, NULL, NULL),
(91, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 2, 1.18, 0, 0, NULL, NULL),
(92, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 2, 1.68, 0, 0, NULL, NULL),
(93, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 2, 2.23, 0, 0, NULL, NULL),
(94, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 3, 6.92, 0, 0, NULL, NULL),
(95, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 3, 6.92, 0, 0, NULL, NULL),
(96, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 3, 6.92, 0, 0, NULL, NULL),
(97, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 3, 6.92, 0, 0, NULL, NULL),
(98, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 3, 5.08, 0, 0, NULL, NULL),
(99, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 3, 5.08, 0, 0, NULL, NULL),
(100, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 3, 5.08, 0, 0, NULL, NULL),
(101, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 3, 5.08, 0, 0, NULL, NULL),
(102, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 3, 4.68, 0, 0, NULL, NULL),
(103, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 3, 4.68, 0, 0, NULL, NULL),
(104, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 3, 4.68, 0, 0, NULL, NULL),
(105, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 3, 3, 0, 0, NULL, NULL),
(106, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 3, 3, 0, 0, NULL, NULL),
(107, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 3, 3, 0, 0, NULL, NULL),
(108, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 3, 3, 0, 0, NULL, NULL),
(109, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 3, 3, 0, 0, NULL, NULL),
(110, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 3, 3, 0, 0, NULL, NULL),
(111, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 3, 3, 0, 0, NULL, NULL),
(112, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 3, 3, 0, 0, NULL, NULL),
(113, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 3, 3, 0, 0, NULL, NULL),
(114, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 3, 3, 0, 0, NULL, NULL),
(115, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 3, 3, 0, 0, NULL, NULL),
(116, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 3, 2.72, 0, 0, NULL, NULL),
(117, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 3, 2.72, 0, 0, NULL, NULL),
(118, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 3, 2.72, 0, 0, NULL, NULL),
(119, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 3, 2.72, 0, 0, NULL, NULL),
(120, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 3, 2.72, 0, 0, NULL, NULL),
(121, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 3, 2.72, 0, 0, NULL, NULL),
(122, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 3, 2.26, 0, 0, NULL, NULL),
(123, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 3, 2.26, 0, 0, NULL, NULL),
(124, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 3, 2.26, 0, 0, NULL, NULL),
(125, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 3, 2.26, 0, 0, NULL, NULL),
(126, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 3, 2.26, 0, 0, NULL, NULL),
(127, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 3, 2.26, 0, 0, NULL, NULL),
(128, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 3, 2.26, 0, 0, NULL, NULL),
(129, '01.004', 'CC-VC loại B', 'Cán sự', 2, 3, 2.26, 0, 0, NULL, NULL),
(130, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 3, 2.26, 0, 0, NULL, NULL),
(131, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 3, 1.86, 0, 0, NULL, NULL),
(132, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 3, 1.71, 0, 0, NULL, NULL),
(133, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 3, 1.86, 0, 0, NULL, NULL),
(134, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 3, 2.41, 0, 0, NULL, NULL),
(135, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 3, 2.01, 0, 0, NULL, NULL),
(136, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 3, 1.71, 0, 0, NULL, NULL),
(137, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 3, 1.36, 0, 0, NULL, NULL),
(138, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 3, 1.86, 0, 0, NULL, NULL),
(139, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 3, 2.41, 0, 0, NULL, NULL),
(140, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 4, 7.28, 0, 0, NULL, NULL),
(141, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 4, 7.28, 0, 0, NULL, NULL),
(142, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 4, 7.28, 0, 0, NULL, NULL),
(143, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 4, 7.28, 0, 0, NULL, NULL),
(144, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 4, 5.42, 0, 0, NULL, NULL),
(145, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 4, 5.42, 0, 0, NULL, NULL),
(146, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 4, 5.42, 0, 0, NULL, NULL),
(147, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 4, 5.42, 0, 0, NULL, NULL),
(148, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 4, 5.02, 0, 0, NULL, NULL),
(149, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 4, 5.02, 0, 0, NULL, NULL),
(150, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 4, 5.02, 0, 0, NULL, NULL),
(151, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 4, 3.33, 0, 0, NULL, NULL),
(152, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 4, 3.33, 0, 0, NULL, NULL),
(153, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(154, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 4, 3.33, 0, 0, NULL, NULL),
(155, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(156, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(157, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(158, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 4, 3.33, 0, 0, NULL, NULL),
(159, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(160, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 4, 3.33, 0, 0, NULL, NULL),
(161, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 4, 3.33, 0, 0, NULL, NULL),
(162, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 4, 3.03, 0, 0, NULL, NULL),
(163, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 4, 3.03, 0, 0, NULL, NULL),
(164, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 4, 3.03, 0, 0, NULL, NULL),
(165, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 4, 3.03, 0, 0, NULL, NULL),
(166, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 4, 3.03, 0, 0, NULL, NULL),
(167, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 4, 3.03, 0, 0, NULL, NULL),
(168, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 4, 2.46, 0, 0, NULL, NULL),
(169, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 4, 2.46, 0, 0, NULL, NULL),
(170, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 4, 2.46, 0, 0, NULL, NULL),
(171, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 4, 2.46, 0, 0, NULL, NULL),
(172, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 4, 2.46, 0, 0, NULL, NULL),
(173, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 4, 2.46, 0, 0, NULL, NULL),
(174, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 4, 2.46, 0, 0, NULL, NULL),
(175, '01.004', 'CC-VC loại B', 'Cán sự', 2, 4, 2.46, 0, 0, NULL, NULL),
(176, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 4, 2.46, 0, 0, NULL, NULL),
(177, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 4, 2.04, 0, 0, NULL, NULL),
(178, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 4, 1.89, 0, 0, NULL, NULL),
(179, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 4, 2.04, 0, 0, NULL, NULL),
(180, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 4, 2.59, 0, 0, NULL, NULL),
(181, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 4, 2.19, 0, 0, NULL, NULL),
(182, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 4, 1.89, 0, 0, NULL, NULL),
(183, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 4, 1.54, 0, 0, NULL, NULL),
(184, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 4, 2.04, 0, 0, NULL, NULL),
(185, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 4, 2.59, 0, 0, NULL, NULL),
(186, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 5, 7.64, 0, 0, NULL, NULL),
(187, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 5, 7.64, 0, 0, NULL, NULL),
(188, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 5, 7.64, 0, 0, NULL, NULL),
(189, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 5, 7.64, 0, 0, NULL, NULL),
(190, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 5, 5.76, 0, 0, NULL, NULL),
(191, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 5, 5.76, 0, 0, NULL, NULL),
(192, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 5, 5.76, 0, 0, NULL, NULL),
(193, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 5, 5.76, 0, 0, NULL, NULL),
(194, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 5, 5.36, 0, 0, NULL, NULL),
(195, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 5, 5.36, 0, 0, NULL, NULL),
(196, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 5, 5.36, 0, 0, NULL, NULL),
(197, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 5, 3.36, 0, 0, NULL, NULL),
(198, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 5, 3.66, 0, 0, NULL, NULL),
(199, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(200, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 5, 3.66, 0, 0, NULL, NULL),
(201, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(202, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(203, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(204, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 5, 3.66, 0, 0, NULL, NULL),
(205, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(206, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 5, 3.36, 0, 0, NULL, NULL),
(207, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 5, 3.36, 0, 0, NULL, NULL),
(208, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 5, 3.34, 0, 0, NULL, NULL),
(209, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 5, 3.34, 0, 0, NULL, NULL),
(210, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 5, 3.34, 0, 0, NULL, NULL),
(211, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 5, 3.34, 0, 0, NULL, NULL),
(212, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 5, 3.34, 0, 0, NULL, NULL),
(213, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 5, 3.34, 0, 0, NULL, NULL),
(214, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 5, 2.66, 0, 0, NULL, NULL),
(215, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 5, 2.66, 0, 0, NULL, NULL),
(216, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 5, 2.66, 0, 0, NULL, NULL),
(217, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 5, 2.66, 0, 0, NULL, NULL),
(218, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 5, 2.66, 0, 0, NULL, NULL),
(219, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 5, 2.66, 0, 0, NULL, NULL),
(220, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 5, 2.66, 0, 0, NULL, NULL),
(221, '01.004', 'CC-VC loại B', 'Cán sự', 2, 5, 2.66, 0, 0, NULL, NULL),
(222, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 5, 2.66, 0, 0, NULL, NULL),
(223, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 5, 2.22, 0, 0, NULL, NULL),
(224, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 5, 2.07, 0, 0, NULL, NULL),
(225, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 5, 2.22, 0, 0, NULL, NULL),
(226, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 5, 2.77, 0, 0, NULL, NULL),
(227, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 5, 2.37, 0, 0, NULL, NULL),
(228, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 5, 2.07, 0, 0, NULL, NULL),
(229, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 5, 1.72, 0, 0, NULL, NULL),
(230, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 5, 2.22, 0, 0, NULL, NULL),
(231, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 5, 2.77, 0, 0, NULL, NULL),
(232, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 6, 8, 0, 0, NULL, NULL),
(233, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 6, 8, 0, 0, NULL, NULL),
(234, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 6, 8, 0, 0, NULL, NULL),
(235, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 6, 8, 0, 0, NULL, NULL),
(236, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 6, 6.1, 0, 0, NULL, NULL),
(237, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 6, 6.1, 0, 0, NULL, NULL),
(238, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 6, 6.1, 0, 0, NULL, NULL),
(239, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 6, 6.1, 0, 0, NULL, NULL),
(240, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 6, 5.7, 0, 0, NULL, NULL),
(241, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 6, 5.7, 0, 0, NULL, NULL),
(242, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 6, 5.7, 0, 0, NULL, NULL),
(243, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 6, 3.99, 0, 0, NULL, NULL),
(244, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 6, 3.99, 0, 0, NULL, NULL),
(245, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(246, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 6, 3.99, 0, 0, NULL, NULL),
(247, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(248, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(249, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(250, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 6, 3.99, 0, 0, NULL, NULL),
(251, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(252, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 6, 3.99, 0, 0, NULL, NULL),
(253, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 6, 3.99, 0, 0, NULL, NULL),
(254, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 6, 3.65, 0, 0, NULL, NULL),
(255, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 6, 3.65, 0, 0, NULL, NULL),
(256, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 6, 3.65, 0, 0, NULL, NULL),
(257, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 6, 3.65, 0, 0, NULL, NULL),
(258, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 6, 3.65, 0, 0, NULL, NULL),
(259, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 6, 3.65, 0, 0, NULL, NULL),
(260, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 6, 2.86, 0, 0, NULL, NULL),
(261, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 6, 2.86, 0, 0, NULL, NULL),
(262, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 6, 2.86, 0, 0, NULL, NULL),
(263, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 6, 2.86, 0, 0, NULL, NULL),
(264, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 6, 2.86, 0, 0, NULL, NULL),
(265, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 6, 2.86, 0, 0, NULL, NULL),
(266, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 6, 2.86, 0, 0, NULL, NULL),
(267, '01.004', 'CC-VC loại B', 'Cán sự', 2, 6, 2.86, 0, 0, NULL, NULL),
(268, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 6, 2.86, 0, 0, NULL, NULL),
(269, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 6, 2.4, 0, 0, NULL, NULL),
(270, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 6, 2.25, 0, 0, NULL, NULL),
(271, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 6, 2.4, 0, 0, NULL, NULL),
(272, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 6, 2.95, 0, 0, NULL, NULL),
(273, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 6, 2.55, 0, 0, NULL, NULL),
(274, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 6, 2.25, 0, 0, NULL, NULL),
(275, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 6, 1.9, 0, 0, NULL, NULL),
(276, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 6, 2.4, 0, 0, NULL, NULL),
(277, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 6, 2.95, 0, 0, NULL, NULL),
(278, '15.109', 'CC-VC loại A3.1', 'Giáo sư - Giảng viên cao cấp', 3, 7, 8, 1, 5, NULL, NULL),
(279, '13.093', 'CC-VC loại A3.1', 'Kỹ sư cao cấp', 3, 7, 8, 1, 5, NULL, NULL),
(280, '13.090', 'CC-VC loại A3.1', 'Nghiên cứu viên cao cấp', 3, 7, 8, 1, 5, NULL, NULL),
(281, '01.001', 'CC-VC loại A3.1', 'Chuyên viên cao cấp', 3, 7, 8, 1, 5, NULL, NULL),
(282, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 7, 6.44, 0, 0, NULL, NULL),
(283, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 7, 6.44, 0, 0, NULL, NULL),
(284, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 7, 6.44, 0, 0, NULL, NULL),
(285, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 7, 6.44, 0, 0, NULL, NULL),
(286, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 7, 6.04, 0, 0, NULL, NULL),
(287, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 7, 6.04, 0, 0, NULL, NULL),
(288, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 7, 6.04, 0, 0, NULL, NULL),
(289, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 7, 4.32, 0, 0, NULL, NULL),
(290, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 7, 4.32, 0, 0, NULL, NULL),
(291, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(292, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 7, 4.32, 0, 0, NULL, NULL),
(293, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(294, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(295, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(296, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 7, 4.32, 0, 0, NULL, NULL),
(297, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(298, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 7, 4.32, 0, 0, NULL, NULL),
(299, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 7, 4.32, 0, 0, NULL, NULL),
(300, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 7, 3.96, 0, 0, NULL, NULL),
(301, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 7, 3.96, 0, 0, NULL, NULL),
(302, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 7, 3.96, 0, 0, NULL, NULL),
(303, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 7, 3.96, 0, 0, NULL, NULL),
(304, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 7, 3.96, 0, 0, NULL, NULL),
(305, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 7, 3.96, 0, 0, NULL, NULL),
(306, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 7, 3.06, 0, 0, NULL, NULL),
(307, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 7, 3.06, 0, 0, NULL, NULL),
(308, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 7, 3.06, 0, 0, NULL, NULL),
(309, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 7, 3.06, 0, 0, NULL, NULL),
(310, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 7, 3.06, 0, 0, NULL, NULL),
(311, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 7, 3.06, 0, 0, NULL, NULL),
(312, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 7, 3.06, 0, 0, NULL, NULL),
(313, '01.004', 'CC-VC loại B', 'Cán sự', 2, 7, 3.06, 0, 0, NULL, NULL),
(314, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 7, 3.06, 0, 0, NULL, NULL),
(315, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 7, 2.58, 0, 0, NULL, NULL),
(316, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 7, 2.43, 0, 0, NULL, NULL),
(317, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 7, 2.58, 0, 0, NULL, NULL),
(318, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 7, 3.13, 0, 0, NULL, NULL),
(319, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 7, 2.73, 0, 0, NULL, NULL),
(320, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 7, 2.43, 0, 0, NULL, NULL),
(321, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 7, 2.08, 0, 0, NULL, NULL),
(322, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 7, 2.58, 0, 0, NULL, NULL),
(323, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 7, 3.13, 0, 0, NULL, NULL),
(324, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 8, 6.78, 0, 0, NULL, NULL),
(325, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 8, 6.78, 0, 0, NULL, NULL),
(326, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 8, 6.78, 0, 0, NULL, NULL),
(327, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 8, 6.78, 0, 0, NULL, NULL),
(328, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 8, 6.38, 0, 0, NULL, NULL),
(329, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 8, 6.38, 0, 0, NULL, NULL),
(330, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 8, 6.38, 0, 0, NULL, NULL),
(331, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 8, 4.65, 0, 0, NULL, NULL),
(332, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 8, 4.65, 0, 0, NULL, NULL),
(333, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(334, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 8, 4.65, 0, 0, NULL, NULL),
(335, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(336, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(337, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(338, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 8, 4.65, 0, 0, NULL, NULL),
(339, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(340, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 8, 4.65, 0, 0, NULL, NULL),
(341, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 8, 4.65, 0, 0, NULL, NULL),
(342, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 8, 4.27, 0, 0, NULL, NULL),
(343, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 8, 4.27, 0, 0, NULL, NULL),
(344, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 8, 4.27, 0, 0, NULL, NULL),
(345, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 8, 4.27, 0, 0, NULL, NULL),
(346, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 8, 4.27, 0, 0, NULL, NULL),
(347, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 8, 4.27, 0, 0, NULL, NULL),
(348, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 8, 3.26, 0, 0, NULL, NULL),
(349, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 8, 3.26, 0, 0, NULL, NULL),
(350, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 8, 3.26, 0, 0, NULL, NULL),
(351, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 8, 3.26, 0, 0, NULL, NULL),
(352, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 8, 3.26, 0, 0, NULL, NULL),
(353, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 8, 3.26, 0, 0, NULL, NULL),
(354, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 8, 3.26, 0, 0, NULL, NULL),
(355, '01.004', 'CC-VC loại B', 'Cán sự', 2, 8, 3.26, 0, 0, NULL, NULL),
(356, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 8, 3.26, 0, 0, NULL, NULL),
(357, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 8, 2.76, 0, 0, NULL, NULL),
(358, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 8, 2.61, 0, 0, NULL, NULL),
(359, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 8, 2.76, 0, 0, NULL, NULL),
(360, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 8, 3.31, 0, 0, NULL, NULL),
(361, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 8, 2.91, 0, 0, NULL, NULL),
(362, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 8, 2.61, 0, 0, NULL, NULL),
(363, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 8, 2.26, 0, 0, NULL, NULL),
(364, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 8, 2.76, 0, 0, NULL, NULL),
(365, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 8, 3.31, 0, 0, NULL, NULL),
(366, '13.091', 'CC-VC loại A2.1', 'Nghiên cứu viên chính', 3, 9, 6.78, 1, 5, NULL, NULL),
(367, '15.110', 'CC-VC loại A2.1', 'Phó giáo sư - Giảng viên chính', 3, 9, 6.78, 1, 5, NULL, NULL),
(368, '01.002', 'CC-VC loại A2.1', 'Chuyên viên chính', 3, 9, 6.78, 1, 5, NULL, NULL),
(369, '13.094', 'CC-VC loại A2.1', 'Kỹ sư chính', 3, 9, 6.78, 1, 5, NULL, NULL),
(370, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 9, 6.38, 1, 5, NULL, NULL),
(371, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 9, 6.38, 1, 5, NULL, NULL),
(372, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 9, 6.38, 1, 5, NULL, NULL),
(373, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 9, 4.98, 0, 0, NULL, NULL),
(374, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 9, 4.98, 0, 0, NULL, NULL),
(375, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(376, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 9, 4.98, 0, 0, NULL, NULL),
(377, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(378, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(379, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(380, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 9, 4.98, 0, 0, NULL, NULL),
(381, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(382, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 9, 4.98, 0, 0, NULL, NULL),
(383, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 9, 4.98, 0, 0, NULL, NULL),
(384, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 9, 4.58, 0, 0, NULL, NULL),
(385, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 9, 4.58, 0, 0, NULL, NULL),
(386, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 9, 4.58, 0, 0, NULL, NULL),
(387, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 9, 4.58, 0, 0, NULL, NULL),
(388, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 9, 4.58, 0, 0, NULL, NULL),
(389, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 9, 4.58, 0, 0, NULL, NULL),
(390, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 9, 3.46, 0, 0, NULL, NULL),
(391, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 9, 3.46, 0, 0, NULL, NULL),
(392, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 9, 3.46, 0, 0, NULL, NULL),
(393, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 9, 3.46, 0, 0, NULL, NULL),
(394, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 9, 3.46, 0, 0, NULL, NULL),
(395, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 9, 3.46, 0, 0, NULL, NULL),
(396, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 9, 3.46, 0, 0, NULL, NULL),
(397, '01.004', 'CC-VC loại B', 'Cán sự', 2, 9, 3.46, 0, 0, NULL, NULL),
(398, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 9, 3.46, 0, 0, NULL, NULL),
(399, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 9, 2.94, 0, 0, NULL, NULL),
(400, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 9, 2.79, 0, 0, NULL, NULL),
(401, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 9, 2.94, 0, 0, NULL, NULL),
(402, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 9, 3.49, 0, 0, NULL, NULL),
(403, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 9, 3.09, 0, 0, NULL, NULL),
(404, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 9, 2.79, 0, 0, NULL, NULL),
(405, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 9, 2.44, 0, 0, NULL, NULL),
(406, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 9, 2.94, 0, 0, NULL, NULL),
(407, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 9, 3.49, 0, 0, NULL, NULL),
(408, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 10, 6.38, 1, 8, NULL, NULL),
(409, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 10, 6.38, 1, 8, NULL, NULL),
(410, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 10, 6.38, 1, 8, NULL, NULL),
(411, '15.113', 'CC-VC loại A1', 'Giáo viên trung học', 3, 10, 4.98, 1, 5, NULL, NULL),
(412, '15a.203', 'CC-VC loại A1', 'Giáo viên tiểu học cao cấp', 3, 10, 4.98, 1, 5, NULL, NULL),
(413, '13.092', 'CC-VC loại A1', 'Nghiên cứu viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(414, '15a.201', 'CC-VC loại A1', 'Giáo viên trung học chính', 3, 10, 4.98, 1, 5, NULL, NULL),
(415, '06.031', 'CC-VC loại A1', 'Kế toán viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(416, '15.111', 'CC-VC loại A1', 'Giảng viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(417, '17.170', 'CC-VC loại A1', 'Thư viện viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(418, '15a.205', 'CC-VC loại A1', 'Giáo viên mầm non cao cấp', 3, 10, 4.98, 1, 5, NULL, NULL),
(419, '01.003', 'CC-VC loại A1', 'Chuyên viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(420, '13.095', 'CC-VC loại A1', 'Kỹ sư', 3, 10, 4.98, 1, 5, NULL, NULL),
(421, '18.181', 'CC-VC loại A1', 'Huấn luyện viên', 3, 10, 4.98, 1, 5, NULL, NULL),
(422, '15a.204', 'CC-VC loại Ao', 'Giáo viên tiểu học chính', 3, 10, 4.89, 0, 0, NULL, NULL),
(423, '15c.207', 'CC-VC loại Ao', 'Giáo viên THPT chưa đạt chuẩn', 3, 10, 4.98, 0, 0, NULL, NULL),
(424, 'Ao', 'CC-VC loại Ao', 'Ngạch mới (Cao đẳng)', 3, 10, 4.98, 0, 0, NULL, NULL),
(425, '15a.206', 'CC-VC loại Ao', 'Giáo viên mầm non chính', 3, 10, 4.89, 0, 0, NULL, NULL),
(426, '15c.208', 'CC-VC loại Ao', 'Giáo viên THCS chưa đạt chuẩn', 3, 10, 4.89, 0, 0, NULL, NULL),
(427, '15a.202', 'CC-VC loại Ao', 'Giáo viên trung học cơ sở', 3, 10, 4.89, 0, 0, NULL, NULL),
(428, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 10, 3.66, 0, 0, NULL, NULL),
(429, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 10, 3.66, 0, 0, NULL, NULL),
(430, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 10, 3.66, 0, 0, NULL, NULL),
(431, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 10, 3.66, 0, 0, NULL, NULL),
(432, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 10, 3.66, 0, 0, NULL, NULL),
(433, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 10, 3.66, 0, 0, NULL, NULL),
(434, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 10, 3.66, 0, 0, NULL, NULL),
(435, '01.004', 'CC-VC loại B', 'Cán sự', 2, 10, 3.66, 0, 0, NULL, NULL),
(436, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 10, 3.66, 0, 0, NULL, NULL),
(437, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 10, 3.12, 0, 0, NULL, NULL),
(438, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 10, 2.97, 0, 0, NULL, NULL),
(439, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 10, 3.12, 0, 0, NULL, NULL),
(440, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 10, 3.67, 0, 0, NULL, NULL),
(441, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 10, 3.27, 0, 0, NULL, NULL),
(442, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 10, 2.97, 0, 0, NULL, NULL),
(443, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 10, 2.62, 0, 0, NULL, NULL),
(444, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 10, 3.12, 0, 0, NULL, NULL),
(445, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 10, 3.67, 0, 0, NULL, NULL),
(446, '17.169', 'CC-VC loại A2.2', 'Thư viện viên chính', 3, 11, 6.38, 1, 11, NULL, NULL),
(447, '15.112', 'CC-VC loại A2.2', 'Giáo viên trung học cao cấp', 3, 11, 6.38, 1, 11, NULL, NULL),
(448, '06.030', 'CC-VC loại A2.2', 'Kế toán viên chính', 3, 11, 6.38, 1, 11, NULL, NULL),
(449, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 11, 3.86, 0, 0, NULL, NULL),
(450, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 11, 3.86, 0, 0, NULL, NULL),
(451, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 11, 3.86, 0, 0, NULL, NULL),
(452, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 11, 3.86, 0, 0, NULL, NULL),
(453, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 11, 3.86, 0, 0, NULL, NULL),
(454, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 11, 3.86, 0, 0, NULL, NULL),
(455, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 11, 3.86, 0, 0, NULL, NULL),
(456, '01.004', 'CC-VC loại B', 'Cán sự', 2, 11, 3.86, 0, 0, NULL, NULL),
(457, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 11, 3.86, 0, 0, NULL, NULL),
(458, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 11, 3.3, 0, 0, NULL, NULL),
(459, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 11, 3.15, 0, 0, NULL, NULL),
(460, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 11, 3.3, 0, 0, NULL, NULL),
(461, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 11, 3.85, 0, 0, NULL, NULL),
(462, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 11, 3.45, 0, 0, NULL, NULL),
(463, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 11, 3.15, 0, 0, NULL, NULL),
(464, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 11, 2.8, 0, 0, NULL, NULL),
(465, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 11, 3.3, 0, 0, NULL, NULL),
(466, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 11, 3.85, 0, 0, NULL, NULL),
(467, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 12, 4.06, 0, 0, NULL, NULL),
(468, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 12, 4.06, 0, 0, NULL, NULL),
(469, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 12, 4.06, 0, 0, NULL, NULL),
(470, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 12, 4.06, 0, 0, NULL, NULL),
(471, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 12, 4.06, 0, 0, NULL, NULL),
(472, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 12, 4.06, 0, 0, NULL, NULL),
(473, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 12, 4.06, 0, 0, NULL, NULL),
(474, '01.004', 'CC-VC loại B', 'Cán sự', 2, 12, 4.06, 0, 0, NULL, NULL),
(475, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 12, 4.06, 0, 0, NULL, NULL),
(476, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 12, 3.48, 0, 0, NULL, NULL),
(477, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 12, 3.33, 0, 0, NULL, NULL),
(478, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 12, 3.48, 0, 0, NULL, NULL),
(479, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 12, 4.03, 0, 0, NULL, NULL),
(480, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 12, 3.63, 0, 0, NULL, NULL),
(481, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 12, 3.33, 0, 0, NULL, NULL),
(482, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 12, 2.98, 0, 0, NULL, NULL),
(483, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 12, 3.48, 0, 0, NULL, NULL),
(484, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 12, 4.03, 0, 0, NULL, NULL),
(485, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 13, 4.06, 1, 5, NULL, NULL),
(486, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 13, 4.06, 1, 5, NULL, NULL),
(487, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 13, 4.06, 1, 5, NULL, NULL),
(488, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 13, 4.06, 1, 5, NULL, NULL),
(489, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 13, 4.06, 1, 5, NULL, NULL),
(490, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 13, 4.06, 1, 5, NULL, NULL),
(491, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 13, 4.06, 1, 5, NULL, NULL),
(492, '01.004', 'CC-VC loại B', 'Cán sự', 2, 13, 4.06, 1, 5, NULL, NULL),
(493, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 13, 4.06, 1, 5, NULL, NULL),
(494, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 13, 3.48, 1, 5, NULL, NULL),
(495, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 13, 3.33, 1, 5, NULL, NULL),
(496, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 13, 3.48, 1, 5, NULL, NULL),
(497, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 13, 4.03, 1, 5, NULL, NULL),
(498, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 13, 3.63, 1, 5, NULL, NULL),
(499, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 13, 3.33, 1, 5, NULL, NULL),
(500, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 13, 2.98, 1, 5, NULL, NULL),
(501, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 13, 3.48, 1, 5, NULL, NULL),
(502, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 13, 4.03, 1, 5, NULL, NULL),
(503, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 14, 4.06, 1, 7, NULL, NULL),
(504, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 14, 4.06, 1, 7, NULL, NULL),
(505, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 14, 4.06, 1, 7, NULL, NULL),
(506, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 14, 4.06, 1, 7, NULL, NULL),
(507, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 14, 4.06, 1, 7, NULL, NULL),
(508, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 14, 4.06, 1, 7, NULL, NULL),
(509, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 14, 4.06, 1, 7, NULL, NULL),
(510, '01.004', 'CC-VC loại B', 'Cán sự', 2, 14, 4.06, 1, 7, NULL, NULL),
(511, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 14, 4.06, 1, 7, NULL, NULL),
(512, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 14, 3.48, 1, 7, NULL, NULL),
(513, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 14, 3.33, 1, 7, NULL, NULL),
(514, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 14, 3.48, 1, 7, NULL, NULL),
(515, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 14, 4.03, 1, 7, NULL, NULL),
(516, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 14, 3.63, 1, 7, NULL, NULL),
(517, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 14, 3.33, 1, 7, NULL, NULL),
(518, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 14, 2.98, 1, 7, NULL, NULL),
(519, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 14, 3.48, 1, 7, NULL, NULL),
(520, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 14, 4.03, 1, 7, NULL, NULL),
(521, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 15, 4.06, 1, 9, NULL, NULL),
(522, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 15, 4.06, 1, 9, NULL, NULL),
(523, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 15, 4.06, 1, 9, NULL, NULL),
(524, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 15, 4.06, 1, 9, NULL, NULL),
(525, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 15, 4.06, 1, 9, NULL, NULL),
(526, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 15, 4.06, 1, 9, NULL, NULL),
(527, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 15, 4.06, 1, 9, NULL, NULL),
(528, '01.004', 'CC-VC loại B', 'Cán sự', 2, 15, 4.06, 1, 9, NULL, NULL),
(529, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 15, 4.06, 1, 9, NULL, NULL),
(530, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 15, 3.48, 1, 9, NULL, NULL),
(531, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 15, 3.33, 1, 9, NULL, NULL),
(532, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 15, 3.48, 1, 9, NULL, NULL),
(533, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 15, 4.03, 1, 9, NULL, NULL),
(534, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 15, 3.63, 1, 9, NULL, NULL),
(535, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 15, 3.33, 1, 9, NULL, NULL),
(536, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 15, 2.98, 1, 9, NULL, NULL),
(537, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 15, 3.48, 1, 9, NULL, NULL),
(538, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 15, 4.03, 1, 9, NULL, NULL),
(539, '17.171', 'CC-VC loại B', 'Thư viện trung cấp', 2, 16, 4.06, 1, 11, NULL, NULL),
(540, '16.119', 'CC-VC loại B', 'Y sĩ', 2, 16, 4.06, 1, 11, NULL, NULL),
(541, '13.096', 'CC-VC loại B', 'Kỹ thuật viên', 2, 16, 4.06, 1, 11, NULL, NULL),
(542, '06.032', 'CC-VC loại B', 'Kế toán viên trung cấp', 2, 16, 4.06, 1, 11, NULL, NULL),
(543, '17.171', 'CC-VC loại B', 'Thư viện viên trung cấp', 2, 16, 4.06, 1, 11, NULL, NULL),
(544, '15.115', 'CC-VC loại B', 'Giáo viên mầm non', 2, 16, 4.06, 1, 11, NULL, NULL),
(545, '15c.209', 'CC-VC loại B', 'Giáo viên tiểu học chưa đạt chuẩn', 2, 16, 4.06, 1, 11, NULL, NULL),
(546, '01.004', 'CC-VC loại B', 'Cán sự', 2, 16, 4.06, 1, 11, NULL, NULL),
(547, '15.114', 'CC-VC loại B', 'Giáo viên tiểu học', 2, 16, 4.06, 1, 11, NULL, NULL),
(548, '06.035', 'CC-VC loại C.2', 'Thủ quỹ cơ quan, đơn vị', 2, 16, 3.48, 1, 11, NULL, NULL),
(549, '06.033', 'CC-VC loại C.3', 'Kế toán viên sơ cấp', 2, 16, 3.33, 1, 11, NULL, NULL),
(550, '01.006', 'NV thừa hành, phục vụ', 'Nhân viên đánh máy', 2, 16, 3.48, 1, 11, NULL, NULL),
(551, '01.010', 'NV thừa hành, phục vụ', 'Lái xe cơ quan', 2, 16, 4.03, 1, 11, NULL, NULL),
(552, '01.007', 'NV thừa hành, phục vụ', 'Nhân viên kỹ thuật', 2, 16, 3.63, 1, 11, NULL, NULL),
(553, '01.008', 'NV thừa hành, phục vụ', 'Nhân viên văn thư', 2, 16, 3.33, 1, 11, NULL, NULL),
(554, '01.009', 'NV thừa hành, phục vụ', 'Nhân viên phục vụ', 2, 16, 2.98, 1, 11, NULL, NULL),
(555, '01.011', 'NV thừa hành, phục vụ', 'Nhân viên bảo vệ', 2, 16, 3.48, 1, 11, NULL, NULL),
(556, '01.005', 'NV thừa hành, phục vụ', 'Kỹ thuật viên đánh máy', 2, 16, 4.03, 1, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloaingach`
--

CREATE TABLE IF NOT EXISTS `phanloaingach` (
  `id` int(11) NOT NULL,
  `msngbac` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phanloaingach`
--

INSERT INTO `phanloaingach` (`id`, `msngbac`, `phanloai`) VALUES
(1, '01.001', 'Chuyên viên cao cấp'),
(2, '13.090', 'Chuyên viên cao cấp'),
(3, '13.093', 'Chuyên viên cao cấp'),
(4, '15.109', 'Chuyên viên cao cấp'),
(5, '01.002', 'Chuyên viên chính'),
(6, '13.091', 'Chuyên viên chính'),
(7, '13.094', 'Chuyên viên chính'),
(8, '15.110', 'Chuyên viên chính'),
(9, '06.030', 'Chuyên viên chính'),
(10, '15.112', 'Chuyên viên chính'),
(11, '17.169', 'Chuyên viên chính'),
(12, '01.003', 'Chuyên viên'),
(13, '06.031', 'Chuyên viên'),
(14, '13.092', 'Chuyên viên'),
(15, '13.095', 'Chuyên viên'),
(16, '15.111', 'Chuyên viên'),
(17, '15.113', 'Chuyên viên'),
(18, '17.170', 'Chuyên viên'),
(19, '18.181', 'Chuyên viên'),
(20, 'Ao', 'Cán sự'),
(21, '15c.207', 'Cán sự'),
(22, '01.004', 'Cán sự'),
(23, '06.032', 'Cán sự'),
(24, '13.096', 'Cán sự'),
(25, '16.119', 'Cán sự'),
(26, '17.171', 'Cán sự'),
(27, '15.115', 'Cán sự'),
(28, '06.035', 'Khác'),
(29, '06.033', 'Khác'),
(30, '01.005', 'Khác'),
(31, '01.010', 'Khác'),
(32, '01.007', 'Khác'),
(33, '01.006', 'Khác'),
(34, '01.011', 'Khác'),
(35, '01.008', 'Khác'),
(36, '01.009', 'Khác'),
(37, '15a.206', 'Khác'),
(38, '15a.205', 'Khác'),
(39, '15.114', 'Khác'),
(40, '15a.204', 'Khác'),
(41, '15a.203', 'Khác'),
(42, '15a.202', 'Khác'),
(43, '15a.201', 'Khác'),
(44, '17.171', 'Khác'),
(45, '17a.170', 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `madv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sadmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '0',
  `length` int(10) DEFAULT '10',
  `status_page` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `email`, `status`, `madv`, `maxa`, `mahuyen`, `level`, `sadmin`, `permission`, `page`, `length`, `status_page`, `created_at`, `updated_at`) VALUES
(1, 'Hưởng Vũ', 'huongvu', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', '', NULL, NULL, 'T', 'ssa', NULL, 0, 0, 0, NULL, NULL),
(2, 'Trường Mầm non', 'mamnon', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', '', '1234561', NULL, 'X', '', NULL, 0, 0, 0, NULL, '2017-02-22 05:48:56'),
(3, 'Trường Tiểu học', 'tieuhoc', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', '', '1234562', NULL, 'X', '', NULL, 0, 0, 0, NULL, '2017-02-22 05:48:56'),
(4, 'Trường Trung học', 'trunghoc', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', '', '1234563', NULL, 'X', '', NULL, 0, 0, 0, NULL, '2017-02-22 05:48:56'),
(5, 'Phòng giáo dục', 'phonggiaoduc', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', '', '1234560', '1234560', 'H', '', NULL, 0, 0, 0, NULL, '2017-02-22 05:48:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangluong`
--
ALTER TABLE `bangluong`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bangluong_mabl_unique` (`mabl`);

--
-- Indexes for table `bangluong_ct`
--
ALTER TABLE `bangluong_ct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bangluong_ct_macvcq_foreign` (`macvcq`),
  ADD KEY `bangluong_ct_mapb_foreign` (`mapb`),
  ADD KEY `bangluong_ct_id_nb_foreign` (`id_nb`),
  ADD KEY `bangluong_ct_mabl_foreign` (`mabl`);

--
-- Indexes for table `dmchucvucq`
--
ALTER TABLE `dmchucvucq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmchucvucq_macvcq_unique` (`macvcq`);

--
-- Indexes for table `dmchucvud`
--
ALTER TABLE `dmchucvud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmchucvud_macvd_unique` (`macvd`);

--
-- Indexes for table `dmdantoc`
--
ALTER TABLE `dmdantoc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmdantoc_dantoc_unique` (`dantoc`);

--
-- Indexes for table `dmdonvi`
--
ALTER TABLE `dmdonvi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmdonvi_madv_unique` (`madv`),
  ADD UNIQUE KEY `dmdonvi_tendv_unique` (`tendv`);

--
-- Indexes for table `dmngachcc`
--
ALTER TABLE `dmngachcc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmphanloaict`
--
ALTER TABLE `dmphanloaict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmphongban`
--
ALTER TABLE `dmphongban`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmphongban_mapb_unique` (`mapb`);

--
-- Indexes for table `dmphucap`
--
ALTER TABLE `dmphucap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmphucap_mapc_unique` (`mapc`);

--
-- Indexes for table `dmquanhegd`
--
ALTER TABLE `dmquanhegd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dmquanhegd_quanhe_unique` (`quanhe`);

--
-- Indexes for table `dshettapsu`
--
ALTER TABLE `dshettapsu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dshettapsu_mahts_unique` (`mahts`);

--
-- Indexes for table `dshuutri`
--
ALTER TABLE `dshuutri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dshuutri_maht_unique` (`maht`);

--
-- Indexes for table `dsnangluong`
--
ALTER TABLE `dsnangluong`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dsnangluong_manl_unique` (`manl`);

--
-- Indexes for table `general_configs`
--
ALTER TABLE `general_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosobaohiemyte`
--
ALTER TABLE `hosobaohiemyte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosobaohiemyte_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosobinhbau`
--
ALTER TABLE `hosobinhbau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosobinhbau_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosocanbo`
--
ALTER TABLE `hosocanbo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hosocanbo_macanbo_unique` (`macanbo`),
  ADD KEY `hosocanbo_mapb_foreign` (`mapb`),
  ADD KEY `hosocanbo_macvcq_foreign` (`macvcq`),
  ADD KEY `hosocanbo_macvd_foreign` (`macvd`);

--
-- Indexes for table `hosocanbo_truoctd`
--
ALTER TABLE `hosocanbo_truoctd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosocanbo_truoctd_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosochucvu`
--
ALTER TABLE `hosochucvu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosochucvu_macanbo_foreign` (`macanbo`),
  ADD KEY `hosochucvu_macvcq_foreign` (`macvcq`);

--
-- Indexes for table `hosochucvud`
--
ALTER TABLE `hosochucvud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosochucvud_macanbo_foreign` (`macanbo`),
  ADD KEY `hosochucvud_macvd_foreign` (`macvd`);

--
-- Indexes for table `hosocongtac`
--
ALTER TABLE `hosocongtac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosocongtac_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosocongtacnn`
--
ALTER TABLE `hosocongtacnn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosocongtacnn_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosodaotao`
--
ALTER TABLE `hosodaotao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosodaotao_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosokhenthuong`
--
ALTER TABLE `hosokhenthuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosokhenthuong_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosokyluat`
--
ALTER TABLE `hosokyluat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosokyluat_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosollvt`
--
ALTER TABLE `hosollvt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosollvt_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosoluanchuyen`
--
ALTER TABLE `hosoluanchuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosoluanchuyen_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosoluong`
--
ALTER TABLE `hosoluong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosoluong_id_nb_foreign` (`id_nb`),
  ADD KEY `hosoluong_macanbo_foreign` (`macanbo`),
  ADD KEY `hosoluong_manl_foreign` (`manl`),
  ADD KEY `hosoluong_mahts_foreign` (`mahts`);

--
-- Indexes for table `hosonhanxetdg`
--
ALTER TABLE `hosonhanxetdg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosonhanxetdg_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosophucap`
--
ALTER TABLE `hosophucap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosophucap_mapc_foreign` (`mapc`),
  ADD KEY `hosophucap_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosoquanhegd`
--
ALTER TABLE `hosoquanhegd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosoquanhegd_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosotailieu`
--
ALTER TABLE `hosotailieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosotailieu_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosothanhtra`
--
ALTER TABLE `hosothanhtra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosothanhtra_macanbo_foreign` (`macanbo`);

--
-- Indexes for table `hosotinhtrangct`
--
ALTER TABLE `hosotinhtrangct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hosotinhtrangct_macanbo_foreign` (`macanbo`),
  ADD KEY `hosotinhtrangct_maht_foreign` (`maht`),
  ADD KEY `hosotinhtrangct_mahts_foreign` (`mahts`);

--
-- Indexes for table `ngachbac`
--
ALTER TABLE `ngachbac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `phanloaingach`
--
ALTER TABLE `phanloaingach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangluong`
--
ALTER TABLE `bangluong`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bangluong_ct`
--
ALTER TABLE `bangluong_ct`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `dmchucvucq`
--
ALTER TABLE `dmchucvucq`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dmchucvud`
--
ALTER TABLE `dmchucvud`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmdantoc`
--
ALTER TABLE `dmdantoc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `dmdonvi`
--
ALTER TABLE `dmdonvi`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmngachcc`
--
ALTER TABLE `dmngachcc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dmphanloaict`
--
ALTER TABLE `dmphanloaict`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `dmphongban`
--
ALTER TABLE `dmphongban`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dmphucap`
--
ALTER TABLE `dmphucap`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `dmquanhegd`
--
ALTER TABLE `dmquanhegd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `dshettapsu`
--
ALTER TABLE `dshettapsu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dshuutri`
--
ALTER TABLE `dshuutri`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dsnangluong`
--
ALTER TABLE `dsnangluong`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `general_configs`
--
ALTER TABLE `general_configs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hosobaohiemyte`
--
ALTER TABLE `hosobaohiemyte`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosobinhbau`
--
ALTER TABLE `hosobinhbau`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosocanbo`
--
ALTER TABLE `hosocanbo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hosocanbo_truoctd`
--
ALTER TABLE `hosocanbo_truoctd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosochucvu`
--
ALTER TABLE `hosochucvu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosochucvud`
--
ALTER TABLE `hosochucvud`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosocongtac`
--
ALTER TABLE `hosocongtac`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosocongtacnn`
--
ALTER TABLE `hosocongtacnn`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosodaotao`
--
ALTER TABLE `hosodaotao`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosokhenthuong`
--
ALTER TABLE `hosokhenthuong`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosokyluat`
--
ALTER TABLE `hosokyluat`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosollvt`
--
ALTER TABLE `hosollvt`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosoluanchuyen`
--
ALTER TABLE `hosoluanchuyen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosoluong`
--
ALTER TABLE `hosoluong`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosonhanxetdg`
--
ALTER TABLE `hosonhanxetdg`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosophucap`
--
ALTER TABLE `hosophucap`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosoquanhegd`
--
ALTER TABLE `hosoquanhegd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosotailieu`
--
ALTER TABLE `hosotailieu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosothanhtra`
--
ALTER TABLE `hosothanhtra`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosotinhtrangct`
--
ALTER TABLE `hosotinhtrangct`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ngachbac`
--
ALTER TABLE `ngachbac`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=557;
--
-- AUTO_INCREMENT for table `phanloaingach`
--
ALTER TABLE `phanloaingach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangluong_ct`
--
ALTER TABLE `bangluong_ct`
  ADD CONSTRAINT `bangluong_ct_id_nb_foreign` FOREIGN KEY (`id_nb`) REFERENCES `ngachbac` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bangluong_ct_mabl_foreign` FOREIGN KEY (`mabl`) REFERENCES `bangluong` (`mabl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangluong_ct_macvcq_foreign` FOREIGN KEY (`macvcq`) REFERENCES `dmchucvucq` (`macvcq`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bangluong_ct_mapb_foreign` FOREIGN KEY (`mapb`) REFERENCES `dmphongban` (`mapb`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hosobaohiemyte`
--
ALTER TABLE `hosobaohiemyte`
  ADD CONSTRAINT `hosobaohiemyte_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosobinhbau`
--
ALTER TABLE `hosobinhbau`
  ADD CONSTRAINT `hosobinhbau_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosocanbo`
--
ALTER TABLE `hosocanbo`
  ADD CONSTRAINT `hosocanbo_macvcq_foreign` FOREIGN KEY (`macvcq`) REFERENCES `dmchucvucq` (`macvcq`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hosocanbo_macvd_foreign` FOREIGN KEY (`macvd`) REFERENCES `dmchucvud` (`macvd`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hosocanbo_mapb_foreign` FOREIGN KEY (`mapb`) REFERENCES `dmphongban` (`mapb`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hosocanbo_truoctd`
--
ALTER TABLE `hosocanbo_truoctd`
  ADD CONSTRAINT `hosocanbo_truoctd_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosochucvu`
--
ALTER TABLE `hosochucvu`
  ADD CONSTRAINT `hosochucvu_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosochucvu_macvcq_foreign` FOREIGN KEY (`macvcq`) REFERENCES `dmchucvucq` (`macvcq`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hosochucvud`
--
ALTER TABLE `hosochucvud`
  ADD CONSTRAINT `hosochucvud_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosochucvud_macvd_foreign` FOREIGN KEY (`macvd`) REFERENCES `dmchucvud` (`macvd`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hosocongtac`
--
ALTER TABLE `hosocongtac`
  ADD CONSTRAINT `hosocongtac_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosocongtacnn`
--
ALTER TABLE `hosocongtacnn`
  ADD CONSTRAINT `hosocongtacnn_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosodaotao`
--
ALTER TABLE `hosodaotao`
  ADD CONSTRAINT `hosodaotao_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosokhenthuong`
--
ALTER TABLE `hosokhenthuong`
  ADD CONSTRAINT `hosokhenthuong_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosokyluat`
--
ALTER TABLE `hosokyluat`
  ADD CONSTRAINT `hosokyluat_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosollvt`
--
ALTER TABLE `hosollvt`
  ADD CONSTRAINT `hosollvt_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosoluanchuyen`
--
ALTER TABLE `hosoluanchuyen`
  ADD CONSTRAINT `hosoluanchuyen_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosoluong`
--
ALTER TABLE `hosoluong`
  ADD CONSTRAINT `hosoluong_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosoluong_mahts_foreign` FOREIGN KEY (`mahts`) REFERENCES `dshettapsu` (`mahts`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosoluong_manl_foreign` FOREIGN KEY (`manl`) REFERENCES `dsnangluong` (`manl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosonhanxetdg`
--
ALTER TABLE `hosonhanxetdg`
  ADD CONSTRAINT `hosonhanxetdg_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosophucap`
--
ALTER TABLE `hosophucap`
  ADD CONSTRAINT `hosophucap_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosophucap_mapc_foreign` FOREIGN KEY (`mapc`) REFERENCES `dmphucap` (`mapc`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `hosoquanhegd`
--
ALTER TABLE `hosoquanhegd`
  ADD CONSTRAINT `hosoquanhegd_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosotailieu`
--
ALTER TABLE `hosotailieu`
  ADD CONSTRAINT `hosotailieu_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosothanhtra`
--
ALTER TABLE `hosothanhtra`
  ADD CONSTRAINT `hosothanhtra_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosotinhtrangct`
--
ALTER TABLE `hosotinhtrangct`
  ADD CONSTRAINT `hosotinhtrangct_macanbo_foreign` FOREIGN KEY (`macanbo`) REFERENCES `hosocanbo` (`macanbo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosotinhtrangct_maht_foreign` FOREIGN KEY (`maht`) REFERENCES `dshuutri` (`maht`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosotinhtrangct_mahts_foreign` FOREIGN KEY (`mahts`) REFERENCES `dshettapsu` (`mahts`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
