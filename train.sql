-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 05:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindatabase`
--

CREATE TABLE `admindatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindatabase`
--

INSERT INTO `admindatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Joined_on`) VALUES
(1, 'Admin', 'admin@gmail.com', 'M', '1234567', '2000-10-17', '2021-08-14 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `bustransactions`
--

CREATE TABLE `bustransactions` (
  `T_No.` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `source` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dest` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Bus_No` int(11) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `thaiID` int(13) NOT NULL,
  `pin` int(4) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amt` int(10) NOT NULL,
  `bank_slip` varchar(225) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bustransactions`
--

INSERT INTO `bustransactions` (`T_No.`, `email`, `source`, `dest`, `Name`, `Bus_No`, `NoOfpass`, `thaiID`, `pin`, `Date`, `Amt`, `bank_slip`) VALUES
(20, 'teera@test.com', 'หาดใหญ่', 'กระบี่', 'teera', 101, 1, 2147483647, 0, '2024-04-20 19:25:38', 450, 'photo/431315658_343453764783627_1738712690831745139_n.jpg'),
(21, 'yanida@gmail.com', 'หาดใหญ่', 'กระบี่', 'yanida', 101, 2, 2147483647, 0, '2024-04-20 20:18:47', 900, 'photo/431305911_1155318572131895_4196721405184660323_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `source` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dest` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `class` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `Price` int(50) NOT NULL,
  `Route` varchar(25) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `source`, `dest`, `class`, `type`, `Price`, `Route`) VALUES
(2055, 'ชุมทางหาดใหญ่', 'คลองแงะ', 'First', 'single', 400, '-'),
(2056, 'ชุมทางหาดใหญ่', 'ชุมทางเขาชุมทอง', 'First', 'single', 400, '-'),
(2057, 'ชุมทางหาดใหญ่', 'บ้านทุ่งหล่อ', 'First', 'single', 400, '-'),
(2058, 'ชุมทางหาดใหญ่', 'นครศรีธรรมราช', 'First', 'single', 400, '-'),
(2059, 'ชุมทางหาดใหญ่', 'ชุมทางทุ่งสง', 'First', 'single', 400, '-'),
(2060, 'ชุมทางหาดใหญ่', 'ตรัง', 'First', 'single', 400, '-'),
(2061, 'ชุมทางหาดใหญ่', 'ชุมทางบ้านทุ่งโพธิ์', 'First', 'single', 400, '-'),
(2062, 'ชุมทางหาดใหญ่', 'คีรีรัฐนิคม', 'First', 'single', 400, '-'),
(2063, 'ชุมทางหาดใหญ่', 'บ้านดอนเรียบ', 'First', 'single', 400, '-'),
(2064, 'ชุมทางหาดใหญ่', 'สุไหงโกลก', 'First', 'single', 400, '-'),
(2065, 'ชุมทางหาดใหญ่', 'ตันหยงมัส', 'First', 'single', 400, '-'),
(2066, 'ชุมทางหาดใหญ่', 'ไม้แก่น', 'First', 'single', 400, '-'),
(2067, 'ชุมทางหาดใหญ่', 'ยะลา', 'First', 'single', 400, '-'),
(2068, 'ชุมทางหาดใหญ่', 'นาประดู่', 'First', 'single', 400, '-'),
(2069, 'ชุมทางหาดใหญ่', 'โคกโพธิ์', 'First', 'single', 400, '-'),
(2070, 'ชุมทางหาดใหญ่', 'เทพา', 'First', 'single', 400, '-'),
(2071, 'ชุมทางหาดใหญ่', 'พัทลุง', 'First', 'single', 400, '-'),
(2072, 'ชุมทางหาดใหญ่', 'ชุมพร', 'First', 'single', 400, '-'),
(2073, 'ชุมทางหาดใหญ่', 'คลองแงะ', 'Second', 'single', 200, '-'),
(2074, 'ชุมทางหาดใหญ่', 'ชุมทางเขาชุมทอง', 'Second', 'single', 200, '-'),
(2075, 'ชุมทางหาดใหญ่', 'บ้านทุ่งหล่อ', 'Second', 'single', 200, '-'),
(2076, 'ชุมทางหาดใหญ่', 'นครศรีธรรมราช', 'Second', 'single', 200, '-'),
(2077, 'ชุมทางหาดใหญ่', 'ชุมทางทุ่งสง', 'Second', 'single', 200, '-'),
(2078, 'ชุมทางหาดใหญ่', 'ตรัง', 'Second', 'single', 200, '-'),
(2079, 'ชุมทางหาดใหญ่', 'ชุมทางบ้านทุ่งโพธิ์', 'Second', 'single', 200, '-'),
(2080, 'ชุมทางหาดใหญ่', 'คีรีรัฐนิคม', 'Second', 'single', 200, '-'),
(2081, 'ชุมทางหาดใหญ่', 'บ้านดอนเรียบ', 'Second', 'single', 200, '-'),
(2082, 'ชุมทางหาดใหญ่', 'สุไหงโกลก', 'Second', 'single', 200, '-'),
(2083, 'ชุมทางหาดใหญ่', 'ตันหยงมัส', 'Second', 'single', 200, '-'),
(2084, 'ชุมทางหาดใหญ่', 'ไม้แก่น', 'Second', 'single', 200, '-'),
(2085, 'ชุมทางหาดใหญ่', 'ยะลา', 'Second', 'single', 200, '-'),
(2086, 'ชุมทางหาดใหญ่', 'นาประดู่', 'Second', 'single', 200, '-'),
(2087, 'ชุมทางหาดใหญ่', 'โคกโพธิ์', 'Second', 'single', 200, '-'),
(2088, 'ชุมทางหาดใหญ่', 'เทพา', 'Second', 'single', 200, '-'),
(2089, 'ชุมทางหาดใหญ่', 'พัทลุง', 'Second', 'single', 200, '-'),
(2090, 'ชุมทางหาดใหญ่', 'ชุมพร', 'Second', 'single', 200, '-'),
(2091, 'chumthanghatyai', 'khlongngae', 'First', 'single', 400, '-'),
(2092, 'chumthanghatyai', 'chumthang kaohumthong', 'First', 'single', 400, '-'),
(2093, 'chumthanghatyai', 'banthunglor', 'First', 'single', 400, '-'),
(2094, 'chumthanghatyai', 'nakhonsithammarat', 'First', 'single', 400, '-'),
(2095, 'chumthanghatyai', 'chumthangthungsong', 'First', 'single', 400, '-'),
(2096, 'chumthanghatyai', 'trang', 'First', 'single', 400, '-'),
(2097, 'chumthanghatyai', 'chumtang banthungpho', 'First', 'single', 400, '-'),
(2098, 'chumthanghatyai', 'siratnikom', 'First', 'single', 400, '-'),
(2099, 'chumthanghatyai', 'bandonreap', 'First', 'single', 400, '-'),
(2100, 'chumthanghatyai', 'sungaikolok', 'First', 'single', 400, '-'),
(2101, 'chumthanghatyai', 'tanyongmas', 'First', 'single', 400, '-'),
(2102, 'chumthanghatyai', 'maikan', 'First', 'single', 400, '-'),
(2103, 'chumthanghatyai', 'yala', 'First', 'single', 400, '-'),
(2104, 'chumthanghatyai', 'napradu', 'First', 'single', 400, '-'),
(2105, 'chumthanghatyai', 'khokpho', 'First', 'single', 400, '-'),
(2106, 'chumthanghatyai', 'tapha', 'First', 'single', 400, '-'),
(2107, 'chumthanghatyai', 'phatthalung', 'First', 'single', 400, '-'),
(2108, 'chumthanghatyai', 'chumphon', 'First', 'single', 400, '-'),
(2109, 'chumthanghatyai', 'khlongngae', 'Second', 'single', 200, '-'),
(2110, 'chumthanghatyai', 'chumthang kaohumthong', 'Second', 'single', 200, '-'),
(2111, 'chumthanghatyai', 'banthunglor', 'Second', 'single', 200, '-'),
(2112, 'chumthanghatyai', 'nakhonsithammarat', 'Second', 'single', 200, '-'),
(2113, 'chumthanghatyai', 'chumthangthungsong', 'Second', 'single', 200, '-'),
(2114, 'chumthanghatyai', 'trang', 'Second', 'single', 200, '-'),
(2115, 'chumthanghatyai', 'chumtang banthungpho', 'Second', 'single', 200, '-'),
(2116, 'chumthanghatyai', 'siratnikom', 'Second', 'single', 200, '-'),
(2117, 'chumthanghatyai', 'bandonreap', 'Second', 'single', 200, '-'),
(2118, 'chumthanghatyai', 'sungaikolok', 'Second', 'single', 200, '-'),
(2119, 'chumthanghatyai', 'tanyongmas', 'Second', 'single', 200, '-'),
(2120, 'chumthanghatyai', 'maikan', 'Second', 'single', 200, '-'),
(2121, 'chumthanghatyai', 'yala', 'Second', 'single', 200, '-'),
(2122, 'chumthanghatyai', 'napradu', 'Second', 'single', 200, '-'),
(2123, 'chumthanghatyai', 'khokpho', 'Second', 'single', 200, '-'),
(2124, 'chumthanghatyai', 'tapha', 'Second', 'single', 200, '-'),
(2125, 'chumthanghatyai', 'phatthalung', 'Second', 'single', 200, '-'),
(2126, 'chumthanghatyai', 'chumphon', 'Second', 'single', 200, '-');

-- --------------------------------------------------------

--
-- Table structure for table `pricebus`
--

CREATE TABLE `pricebus` (
  `No.` int(10) NOT NULL,
  `Bus_No.` int(20) NOT NULL,
  `source` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dest` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricebus`
--

INSERT INTO `pricebus` (`No.`, `Bus_No.`, `source`, `dest`, `Price`) VALUES
(1, 101, 'หาดใหญ่', 'กระบี่', 450),
(2, 102, 'หาดใหญ่', 'ชุมพร', 350),
(3, 103, 'หาดใหญ่', 'ตรัง', 299),
(4, 104, 'หาดใหญ่', 'นครศรีธรรมราช', 181),
(5, 105, 'หาดใหญ่', 'นราธิวาส', 190),
(6, 106, 'หาดใหญ่', 'ปัตตานี', 120),
(7, 107, 'หาดใหญ่', 'พังงา', 172),
(8, 108, 'หาดใหญ่', 'พัทลุง', 80),
(9, 109, 'หาดใหญ่', 'ภูเก็ต', 396),
(10, 110, 'หาดใหญ่', 'ยะลา', 103),
(11, 111, 'หาดใหญ่', 'ระนอง', 400),
(12, 112, 'หาดใหญ่', 'สงขลา', 34),
(13, 113, 'หาดใหญ่', 'สตูล', 149),
(14, 114, 'หาดใหญ่', 'สุราษฎ์ธานี', 400),
(26, 0, '', '', 0),
(27, 0, '', '', 0),
(28, 0, '', '', 0),
(29, 0, '', '', 0),
(30, 0, '', '', 0),
(31, 0, '', '', 0),
(32, 0, '', '', 0),
(33, 0, '', '', 0),
(34, 0, '', '', 0),
(35, 0, '', '', 0),
(36, 0, '', '', 0),
(37, 0, '', '', 0),
(38, 0, '', '', 0),
(39, 0, '', '', 0),
(40, 0, '', '', 0),
(41, 0, '', '', 0),
(42, 0, '', '', 0),
(43, 0, '', '', 0),
(44, 0, '', '', 0),
(45, 0, '', '', 0),
(46, 0, '', '', 0),
(47, 0, '', '', 0),
(48, 0, '', '', 0),
(49, 0, '', '', 0),
(50, 0, '', '', 0),
(51, 0, '', '', 0),
(52, 0, '', '', 0),
(53, 0, '', '', 0),
(54, 0, '', '', 0),
(55, 0, '', '', 0),
(56, 0, '', '', 0),
(57, 0, '', '', 0),
(58, 0, '', '', 0),
(59, 0, '', '', 0),
(60, 0, '', '', 0),
(61, 0, '', '', 0),
(62, 0, '', '', 0),
(63, 0, '', '', 0),
(64, 0, '', '', 0),
(65, 0, '', '', 0),
(66, 0, '', '', 0),
(67, 0, '', '', 0),
(68, 0, '', '', 0),
(69, 0, '', '', 0),
(70, 0, '', '', 0),
(71, 0, '', '', 0),
(72, 0, '', '', 0),
(73, 0, '', '', 0),
(74, 0, '', '', 0),
(75, 0, '', '', 0),
(76, 0, '', '', 0),
(77, 0, '', '', 0),
(78, 0, '', '', 0),
(79, 0, '', '', 0),
(80, 0, '', '', 0),
(81, 0, '', '', 0),
(82, 0, '', '', 0),
(83, 0, '', '', 0),
(84, 0, '', '', 0),
(85, 0, '', '', 0),
(86, 0, '', '', 0),
(87, 0, '', '', 0),
(88, 0, '', '', 0),
(89, 0, '', '', 0),
(90, 0, '', '', 0),
(91, 0, '', '', 0),
(92, 0, '', '', 0),
(93, 0, '', '', 0),
(94, 0, '', '', 0),
(95, 0, '', '', 0),
(96, 0, '', '', 0),
(97, 0, '', '', 0),
(98, 0, '', '', 0),
(99, 0, '', '', 0),
(100, 0, '', '', 0),
(101, 0, '', '', 0),
(102, 0, '', '', 0),
(103, 0, '', '', 0),
(104, 0, '', '', 0),
(105, 0, '', '', 0),
(106, 0, '', '', 0),
(107, 0, '', '', 0),
(108, 0, '', '', 0),
(109, 0, '', '', 0),
(110, 0, '', '', 0),
(111, 0, '', '', 0),
(112, 0, '', '', 0),
(113, 0, '', '', 0),
(114, 0, '', '', 0),
(115, 0, '', '', 0),
(116, 0, '', '', 0),
(117, 0, '', '', 0),
(118, 0, '', '', 0),
(119, 0, '', '', 0),
(120, 0, '', '', 0),
(121, 0, '', '', 0),
(122, 0, '', '', 0),
(123, 0, '', '', 0),
(124, 0, '', '', 0),
(125, 0, '', '', 0),
(126, 0, '', '', 0),
(127, 0, '', '', 0),
(128, 0, '', '', 0),
(129, 0, '', '', 0),
(130, 0, '', '', 0),
(131, 0, '', '', 0),
(132, 0, '', '', 0),
(133, 0, '', '', 0),
(134, 0, '', '', 0),
(135, 0, '', '', 0),
(136, 0, '', '', 0),
(137, 0, '', '', 0),
(138, 0, '', '', 0),
(139, 0, '', '', 0),
(140, 0, '', '', 0),
(141, 0, '', '', 0),
(142, 0, '', '', 0),
(143, 0, '', '', 0),
(144, 0, '', '', 0),
(145, 0, '', '', 0),
(146, 0, '', '', 0),
(147, 0, '', '', 0),
(148, 0, '', '', 0),
(149, 0, '', '', 0),
(150, 0, '', '', 0),
(151, 0, '', '', 0),
(152, 0, '', '', 0),
(153, 0, '', '', 0),
(154, 0, '', '', 0),
(155, 0, '', '', 0),
(156, 0, '', '', 0),
(157, 0, '', '', 0),
(158, 0, '', '', 0),
(159, 0, '', '', 0),
(160, 0, '', '', 0),
(161, 0, '', '', 0),
(162, 0, '', '', 0),
(163, 0, '', '', 0),
(164, 0, '', '', 0),
(165, 0, '', '', 0),
(166, 0, '', '', 0),
(167, 0, '', '', 0),
(168, 0, '', '', 0),
(169, 0, '', '', 0),
(170, 0, '', '', 0),
(171, 0, '', '', 0),
(172, 0, '', '', 0),
(173, 0, '', '', 0),
(174, 0, '', '', 0),
(175, 0, '', '', 0),
(176, 0, '', '', 0),
(177, 0, '', '', 0),
(178, 0, '', '', 0),
(179, 0, '', '', 0),
(180, 0, '', '', 0),
(181, 0, '', '', 0),
(182, 0, '', '', 0),
(183, 0, '', '', 0),
(184, 0, '', '', 0),
(185, 0, '', '', 0),
(186, 0, '', '', 0),
(187, 0, '', '', 0),
(188, 0, '', '', 0),
(189, 0, '', '', 0),
(190, 0, '', '', 0),
(191, 0, '', '', 0),
(192, 0, '', '', 0),
(193, 0, '', '', 0),
(194, 0, '', '', 0),
(195, 0, '', '', 0),
(196, 0, '', '', 0),
(197, 0, '', '', 0),
(198, 0, '', '', 0),
(199, 0, '', '', 0),
(200, 0, '', '', 0),
(201, 0, '', '', 0),
(202, 0, '', '', 0),
(203, 0, '', '', 0),
(204, 0, '', '', 0),
(205, 0, '', '', 0),
(206, 0, '', '', 0),
(207, 0, '', '', 0),
(208, 0, '', '', 0),
(209, 0, '', '', 0),
(210, 0, '', '', 0),
(211, 0, '', '', 0),
(212, 0, '', '', 0),
(213, 0, '', '', 0),
(214, 0, '', '', 0),
(215, 0, '', '', 0),
(216, 0, '', '', 0),
(217, 0, '', '', 0),
(218, 0, '', '', 0),
(219, 0, '', '', 0),
(220, 0, '', '', 0),
(221, 0, '', '', 0),
(222, 0, '', '', 0),
(223, 0, '', '', 0),
(224, 0, '', '', 0),
(225, 0, '', '', 0),
(226, 0, '', '', 0),
(227, 0, '', '', 0),
(228, 0, '', '', 0),
(229, 0, '', '', 0),
(230, 0, '', '', 0),
(231, 0, '', '', 0),
(232, 0, '', '', 0),
(233, 0, '', '', 0),
(234, 0, '', '', 0),
(235, 0, '', '', 0),
(236, 0, '', '', 0),
(237, 0, '', '', 0),
(238, 0, '', '', 0),
(239, 0, '', '', 0),
(240, 0, '', '', 0),
(241, 0, '', '', 0),
(242, 0, '', '', 0),
(243, 0, '', '', 0),
(244, 0, '', '', 0),
(245, 0, '', '', 0),
(246, 0, '', '', 0),
(247, 0, '', '', 0),
(248, 0, '', '', 0),
(249, 0, '', '', 0),
(250, 0, '', '', 0),
(251, 0, '', '', 0),
(252, 0, '', '', 0),
(253, 0, '', '', 0),
(254, 0, '', '', 0),
(255, 0, '', '', 0),
(256, 0, '', '', 0),
(257, 0, '', '', 0),
(258, 0, '', '', 0),
(259, 0, '', '', 0),
(260, 0, '', '', 0),
(261, 0, '', '', 0),
(262, 0, '', '', 0),
(263, 0, '', '', 0),
(264, 0, '', '', 0),
(265, 0, '', '', 0),
(266, 0, '', '', 0),
(267, 0, '', '', 0),
(268, 0, '', '', 0),
(269, 0, '', '', 0),
(270, 0, '', '', 0),
(271, 0, '', '', 0),
(272, 0, '', '', 0),
(273, 0, '', '', 0),
(274, 0, '', '', 0),
(275, 0, '', '', 0),
(276, 0, '', '', 0),
(277, 0, '', '', 0),
(278, 0, '', '', 0),
(279, 0, '', '', 0),
(280, 0, '', '', 0),
(281, 0, '', '', 0),
(282, 0, '', '', 0),
(283, 0, '', '', 0),
(284, 0, '', '', 0),
(285, 0, '', '', 0),
(286, 0, '', '', 0),
(287, 0, '', '', 0),
(288, 0, '', '', 0),
(289, 0, '', '', 0),
(290, 0, '', '', 0),
(291, 0, '', '', 0),
(292, 0, '', '', 0),
(293, 0, '', '', 0),
(294, 0, '', '', 0),
(295, 0, '', '', 0),
(296, 0, '', '', 0),
(297, 0, '', '', 0),
(298, 0, '', '', 0),
(299, 0, '', '', 0),
(300, 0, '', '', 0),
(301, 0, '', '', 0),
(302, 0, '', '', 0),
(303, 0, '', '', 0),
(304, 0, '', '', 0),
(305, 0, '', '', 0),
(306, 0, '', '', 0),
(307, 0, '', '', 0),
(308, 0, '', '', 0),
(309, 0, '', '', 0),
(310, 0, '', '', 0),
(311, 0, '', '', 0),
(312, 0, '', '', 0),
(313, 0, '', '', 0),
(314, 0, '', '', 0),
(315, 0, '', '', 0),
(316, 0, '', '', 0),
(317, 0, '', '', 0),
(318, 0, '', '', 0),
(319, 0, '', '', 0),
(320, 0, '', '', 0),
(321, 0, '', '', 0),
(322, 0, '', '', 0),
(323, 0, '', '', 0),
(324, 0, '', '', 0),
(325, 0, '', '', 0),
(326, 0, '', '', 0),
(327, 0, '', '', 0),
(328, 0, '', '', 0),
(329, 0, '', '', 0),
(330, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `T_No.` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `source` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `dest` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Class` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `Type` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `thaiID` int(13) NOT NULL,
  `pin` int(4) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amt` int(10) NOT NULL,
  `Route` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `bank_slip` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`T_No.`, `email`, `source`, `dest`, `Name`, `Class`, `Type`, `NoOfpass`, `thaiID`, `pin`, `Date`, `Amt`, `Route`, `bank_slip`) VALUES
(83, 'teera@test.com', 'ชุมทางหาดใหญ่', 'คลองแงะ', 'teera', 'First', '', 1, 2147483647, 0, '2024-04-19 20:53:08', 400, 'ชุมทางหาดใหญ่ชุมพร', 'photo/431305911_1155318572131895_4196721405184660323_n.jpg'),
(84, 'teera@test.com', 'ชุมทางหาดใหญ่', 'ชุมทางเขาชุมทอง', 'teera', 'First', '', 2, 2147483647, 0, '2024-04-20 19:06:06', 800, 'ชุมทางหาดใหญ่ชุมพร', 'photo/431305911_1155318572131895_4196721405184660323_n.jpg'),
(86, 'yanida@gmail.com', 'ชุมทางหาดใหญ่', 'คลองแงะ', 'yanida', 'First', '', 2, 2147483647, 0, '2024-04-21 21:59:45', 800, '', 'photo/431305911_1155318572131895_4196721405184660323_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `DoB` date NOT NULL,
  `Phone` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Phone`, `Joined_on`) VALUES
(51, 'yanida', 'yanida@gmail.com', 'F', '12345678', '2003-11-30', '0653326589', '2024-03-11 13:13:14'),
(52, 'teera', 'teera@test.com', 'M', '123456', '2000-01-18', '0812345678', '2024-04-18 07:41:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bustransactions`
--
ALTER TABLE `bustransactions`
  ADD PRIMARY KEY (`T_No.`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricebus`
--
ALTER TABLE `pricebus`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`T_No.`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bustransactions`
--
ALTER TABLE `bustransactions`
  MODIFY `T_No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2127;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `T_No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
