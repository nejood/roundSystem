-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2018 at 05:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6719716_roundsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `archived_device`
--

CREATE TABLE `archived_device` (
  `device_pk` int(11) NOT NULL,
  `pc_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `windows` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mac_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projector_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projector_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smart_board_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `network_port` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TV` binary(1) DEFAULT NULL,
  `Escreen` binary(1) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `other` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `index_B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_name`, `index_B`) VALUES
('B10', 9),
('B12', 10),
('B2', 1),
('B3', 2),
('B32', 11),
('B4', 3),
('B41', 12),
('B42', 13),
('B420', 19),
('B43', 14),
('B5', 4),
('B61', 15),
('B63', 16),
('B64', 17),
('B67', 18),
('B7new', 6),
('B7old', 5),
('B8', 7),
('B9', 8),
('wmc10', 26),
('wmc11', 27),
('wmc12', 28),
('wmc13', 29),
('wmc2', 20),
('wmc431', 30),
('wmc5', 21),
('wmc6', 22),
('wmc7', 23),
('wmc8', 24),
('wmc9', 25);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_pk` int(11) NOT NULL,
  `building_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class_num` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_pk`, `building_name`, `class_num`, `room_type`, `floor`) VALUES
(1, 'B2', '2113', 'class', 'ground'),
(2, 'B2', '2118', 'class', 'ground'),
(3, 'B2', '2213', 'class', 'first'),
(4, 'B2', '2237', 'class', 'first'),
(5, 'B3', 'sm1', 'workshop', 'ground'),
(6, 'B3', 'sm2', 'workshop', 'ground'),
(7, 'B3', 'sm3', 'workshop', 'ground'),
(8, 'B3', 'sm4', 'workshop', 'ground'),
(9, 'B3', 'sm5', 'workshop', 'ground'),
(10, 'B3', 'sm6', 'workshop', 'ground'),
(11, 'B3', '301', 'class', 'ground'),
(12, 'B3', '302', 'class', 'ground'),
(13, 'B3', '303', 'class', 'ground'),
(14, 'B3', '304', 'class', 'ground'),
(15, 'B3', '335', 'class', 'second'),
(16, 'B3', '336', 'class', 'second'),
(17, 'B4', '401', 'class', 'ground'),
(18, 'B4', '402', 'class', 'ground'),
(19, 'B4', '403', 'class', 'ground'),
(20, 'B4', '404', 'class', 'ground'),
(21, 'B4', '405', 'class', 'ground'),
(22, 'B4', '406', 'class', 'ground'),
(23, 'B4', '407', 'class', 'ground'),
(24, 'B4', '408', 'class', 'ground'),
(25, 'B4', '409', 'class', 'ground'),
(26, 'B4', '410', 'class', 'first'),
(27, 'B4', '411', 'class', 'first'),
(28, 'B4', '412', 'class', 'first'),
(29, 'B4', '413', 'class', 'first'),
(30, 'B4', '414', 'class', 'first'),
(31, 'B4', '415', 'class', 'first'),
(32, 'B4', '416', 'class', 'first'),
(33, 'B4', '417', 'class', 'first'),
(34, 'B4', '418', 'class', 'first'),
(35, 'B4', '419', 'class', 'first'),
(36, 'B4', '420', 'class', 'first'),
(37, 'B5', '502', 'class', 'ground'),
(38, 'B5', '503', 'class', 'ground'),
(39, 'B5', '504', 'class', 'ground'),
(40, 'B5', '505', 'class', 'ground'),
(41, 'B5', '506', 'class', 'ground'),
(42, 'B5', '507', 'class', 'ground'),
(43, 'B5', '508', 'class', 'ground'),
(44, 'B5', '509', 'class', 'ground'),
(45, 'B5', '510', 'class', 'ground'),
(46, 'B5', '511', 'class', 'first'),
(47, 'B5', '512', 'class', 'first'),
(48, 'B5', '513', 'class', 'first'),
(49, 'B5', '514', 'class', 'first'),
(50, 'B5', '515', 'class', 'first'),
(51, 'B5', '516', 'class', 'first'),
(52, 'B7old', '1A', 'class', 'ground'),
(53, 'B7old', '2A', 'class', 'ground'),
(54, 'B7old', '3A', 'class', 'ground'),
(55, 'B7old', '4A', 'class', 'ground'),
(56, 'B7old', '94A', 'class', 'ground'),
(57, 'B7old', '101A', 'class', 'ground'),
(58, 'B7old', '102A', 'class', 'ground'),
(59, 'B7old', '104A', 'class', 'ground'),
(60, 'B7old', '103A', 'auditorium', 'ground'),
(61, 'B7old', '74B', 'class', 'first'),
(62, 'B7old', '78B', 'class', 'first'),
(63, 'B7old', '79B', 'class', 'first'),
(64, 'B7old', '80B', 'class', 'first'),
(65, 'B7old', '81B', 'class', 'first'),
(66, 'B7old', '99-98B', 'class', 'first'),
(67, 'B7old', '100B', 'class', 'first'),
(68, 'B7old', '102B', 'class', 'first'),
(69, 'B7old', '63C', 'class', 'second'),
(70, 'B7old', '64C', 'class', 'second'),
(71, 'B7old', '65C', 'class', 'second'),
(72, 'B7old', '66C', 'class', 'second'),
(73, 'B7old', '67C', 'class', 'second'),
(74, 'B7old', '72C', 'class', 'second'),
(75, 'B7old', '73C', 'class', 'second'),
(76, 'B7old', '77C', 'class', 'second'),
(77, 'B7old', '84C', 'class', 'second'),
(78, 'B7old', '86C', 'class', 'second'),
(79, 'B7old', '87C', 'class', 'second'),
(80, 'B7old', '90C', 'class', 'second'),
(81, 'B7old', '91C', 'class', 'second'),
(82, 'B7old', '19C', 'workshop', 'second'),
(83, 'B7old', '39C', 'workshop', 'second'),
(84, 'B7old', '69L', 'workshop-active learning', 'second'),
(85, 'B7new', '1130', 'class', 'ground'),
(86, 'B7new', '1131', 'class', 'ground'),
(87, 'B7new', '1132', 'class', 'ground'),
(88, 'B7new', '1133', 'class', 'ground'),
(89, 'B7new', '1135', 'class', 'ground'),
(90, 'B7new', '1142', 'class', 'ground'),
(91, 'B7new', '1155', 'class', 'ground'),
(92, 'B7new', '1156', 'class', 'ground'),
(93, 'B7new', '1162', 'class', 'ground'),
(94, 'B7new', '1164', 'class', 'ground'),
(95, 'B7new', '1165', 'class', 'ground'),
(96, 'B7new', '1166', 'class', 'ground'),
(97, 'B7new', '1167', 'class', 'ground'),
(98, 'B7new', '2130', 'class', 'first'),
(99, 'B7new', '2131', 'class', 'first'),
(100, 'B7new', '2141', 'class', 'first'),
(101, 'B7new', '2154', 'class', 'first'),
(102, 'B7new', '2163', 'workshop', 'first'),
(103, 'B7new', '2164', 'class', 'first'),
(104, 'B7new', '2165', 'class', 'first'),
(105, 'B7new', '2167', 'class', 'first'),
(106, 'B7new', '2168', 'class', 'first'),
(107, 'B8', '800', 'class', 'ground'),
(108, 'B8', '804', 'class', 'ground'),
(109, 'B8', '806', 'class', 'ground'),
(110, 'B8', '811', 'class', 'ground'),
(111, 'B8', '812', 'class', 'ground'),
(112, 'B8', '813', 'class', 'ground'),
(113, 'B8', '814', 'class', 'ground'),
(114, 'B8', '815', 'class', 'ground'),
(115, 'B8', '818', 'class', 'ground'),
(116, 'B8', '820', 'class', 'ground'),
(117, 'B8', '821', 'class', 'ground'),
(118, 'B8', '822', 'class', 'ground'),
(119, 'B8', '825', 'class', 'ground'),
(120, 'B8', '826', 'class', 'ground'),
(121, 'B8', '836', 'class', 'first'),
(122, 'B8', '848', 'class', 'first'),
(123, 'B8', '853', 'class', 'first'),
(124, 'B8', '842', 'workshop', 'first'),
(125, 'B8', '843', 'workshop', 'first'),
(126, 'B8', '844', 'workshop', 'first'),
(127, 'B8', '845', 'workshop', 'first'),
(128, 'B9', '901', 'class', 'ground'),
(129, 'B9', '902', 'class', 'ground'),
(130, 'B9', '903', 'class', 'ground'),
(131, 'B9', '904', 'class', 'ground'),
(132, 'B9', '905', 'class', 'ground'),
(133, 'B9', '914', 'class', 'first'),
(134, 'B9', '915', 'class', 'first'),
(135, 'B9', '916', 'class', 'first'),
(136, 'B9', '917', 'class', 'first'),
(137, 'B9', '918', 'class', 'first'),
(138, 'B9', '919', 'class', 'first'),
(139, 'B9', '920', 'class', 'first'),
(140, 'B9', '921', 'class', 'first'),
(141, 'B9', '922', 'class', 'first'),
(142, 'B9', '923', 'class', 'first'),
(143, 'B9', '924', 'class', 'first'),
(144, 'B9', '931', 'class', 'first'),
(145, 'B9', '932', 'class', 'first'),
(146, 'B9', '933', 'class', 'second'),
(147, 'B9', '934', 'class', 'second'),
(148, 'B9', '935', 'class', 'second'),
(149, 'B9', '936', 'class', 'second'),
(150, 'B9', '937', 'class', 'second'),
(151, 'B9', '938', 'class', 'second'),
(152, 'B9', '939', 'class', 'second'),
(153, 'B9', '940', 'class', 'second'),
(154, 'B9', '941', 'class', 'second'),
(155, 'B9', '942', 'class', 'second'),
(156, 'B9', '943', 'class', 'second'),
(157, 'B9', '944', 'class', 'second'),
(158, 'B9', '945', 'class', 'second'),
(159, 'B10', '1001', 'class', 'ground'),
(160, 'B10', '1002', 'class', 'ground'),
(161, 'B10', '1003', 'class', 'ground'),
(162, 'B10', '1004', 'class', 'ground'),
(163, 'B10', '1005', 'class', 'ground'),
(164, 'B10', '1006', 'class', 'ground'),
(165, 'B10', '1007', 'class', 'ground'),
(166, 'B10', '1008', 'class', 'ground'),
(167, 'B12', '1201', 'class', 'ground'),
(168, 'B12', '1202', 'class', 'ground'),
(169, 'B12', '1203', 'class', 'ground'),
(170, 'B12', '1204', 'class', 'ground'),
(171, 'B12', '1205', 'class', 'ground'),
(172, 'B12', '1206', 'class', 'ground'),
(173, 'B12', '1207', 'class', 'ground'),
(174, 'B12', '1208', 'class', 'ground'),
(175, 'B12', '1209', 'class', 'ground'),
(176, 'B12', '1210', 'class', 'ground'),
(177, 'B12', '1211', 'class', 'ground'),
(178, 'B12', '1212', 'class', 'ground'),
(179, 'B12', '1213', 'class', 'ground'),
(180, 'B12', '1214', 'class', 'ground'),
(181, 'B12', '1215', 'class', 'ground'),
(182, 'B12', '1216', 'class', 'ground'),
(183, 'B12', '1217', 'class', 'ground'),
(184, 'B12', '1218', 'class', 'ground'),
(185, 'B12', '1219', 'class', 'ground'),
(186, 'B12', '1220', 'class', 'ground'),
(187, 'B32', '3201', '', 'ground'),
(188, 'B32', '3202', '', 'ground'),
(189, 'B32', '3203', '', 'ground'),
(190, 'B32', '3204', '', 'ground'),
(191, 'B41', '315', 'class', 'second'),
(192, 'B41', '316', 'workshop', 'second'),
(193, 'B41', '319', 'workshop', 'second'),
(194, 'B41', '321', 'workshop', 'second'),
(195, 'B41', '219', '', ''),
(196, 'B41', '213', '', ''),
(197, 'B41', '205', '', ''),
(198, 'B41', '206', '', ''),
(199, 'B41', '207', '', ''),
(200, 'B41', '217', '', ''),
(201, 'B41', '216', '', ''),
(202, 'B41', '314', '', ''),
(203, 'B41', '313', '', ''),
(204, 'B41', '309', '', ''),
(205, 'B41', '317', '', ''),
(206, 'B42', '4201', 'class', 'ground'),
(207, 'B42', '4202', 'class', 'ground'),
(208, 'B42', '4203', 'class', 'ground'),
(209, 'B42', '4204', 'class', 'ground'),
(210, 'B42', '4205', 'class', 'ground'),
(211, 'B42', '4206', 'class', 'ground'),
(212, 'B42', '4207', 'class', 'ground'),
(213, 'B42', '4208', 'class', 'ground'),
(214, 'B42', '315', 'class', 'first'),
(215, 'B42', '1', 'workshop', 'ground'),
(216, 'B42', '2', 'workshop', 'ground'),
(217, 'B42', '3', 'workshop', 'ground'),
(218, 'B42', '11', 'workshop', 'first'),
(219, 'B42', '30', 'workshop', 'second'),
(220, 'B42', '23', '', 'first'),
(221, 'B42', '28', '', 'first'),
(222, 'B420', '101', 'class', 'ground'),
(223, 'B420', '102', 'class', 'ground'),
(224, 'B420', '103', 'class', 'ground'),
(225, 'B420', '104', 'class', 'ground'),
(226, 'B420', '105', 'class', 'ground'),
(227, 'B420', '106', 'class', 'ground'),
(228, 'B420', '107', 'class', 'ground'),
(229, 'B420', '108', 'class', 'ground'),
(230, 'B420', '111', 'class', 'ground'),
(231, 'B420', '112', 'class', 'ground'),
(232, 'B420', '201', 'class', 'first'),
(233, 'B420', '202', 'class', 'first'),
(234, 'B420', '203', 'class', 'first'),
(235, 'B420', '204', 'class', 'first'),
(236, 'B420', '205', 'class', 'first'),
(237, 'B420', '206', 'class', 'first'),
(238, 'B420', '207', 'class', 'first'),
(239, 'B420', '208', 'class', 'first'),
(240, 'B420', '209', 'class', 'first'),
(241, 'B420', '210', 'class', 'first'),
(242, 'B420', '211', 'class', 'first'),
(243, 'B420', '212', 'class', 'first'),
(244, 'B420', '213', 'class', 'first'),
(245, 'B420', '214', 'class', 'first'),
(246, 'B43', '4301', 'class', 'ground'),
(247, 'B43', '4302', 'class', 'ground'),
(248, 'B43', '4303', 'class', 'ground'),
(249, 'B43', '4304', 'class', 'ground'),
(250, 'B43', '4305', 'class', 'ground'),
(251, 'B43', '4306', 'class', 'ground'),
(252, 'B43', '4307', 'class', 'ground'),
(253, 'B43', '4308', 'class', 'ground'),
(254, 'B43', '4309', 'class', 'ground'),
(255, 'B43', '4310', 'workshop', 'ground'),
(256, 'B43', '4311', 'class', 'ground'),
(257, 'B43', '4312', 'class', 'ground'),
(258, 'B43', '4313', 'class', 'ground'),
(259, 'B43', '4314', 'class', 'ground'),
(260, 'B43', '4315', 'class', 'ground'),
(261, 'B43', '4316', 'class', 'ground'),
(262, 'B63', '101', 'class', 'ground'),
(263, 'B63', '103', 'class', 'ground'),
(264, 'B63', '104', 'class', 'ground'),
(265, 'B63', '105', 'class', 'ground'),
(266, 'B63', '106', 'class', 'ground'),
(267, 'B63', '108', 'class', 'ground'),
(268, 'B63', '109', 'class', 'ground'),
(269, 'B63', '110', 'class', 'ground'),
(270, 'B63', '111', 'class', 'ground'),
(271, 'B63', '113', 'class', 'ground'),
(272, 'B63', '114', 'class', 'ground'),
(273, 'B63', '115', 'class', 'ground'),
(274, 'B63', '116', 'class', 'ground'),
(275, 'B63', '119', 'class', 'ground'),
(276, 'B63', '120', 'class', 'ground'),
(277, 'B63', '205', 'class', 'first'),
(278, 'B63', '211', 'class', 'first'),
(279, 'B63', '212', 'class', 'first'),
(280, 'B63', '214', 'class', 'first'),
(281, 'B63', '302', 'class', 'second'),
(282, 'B63', '305', 'class', 'second'),
(283, 'B63', '306', 'class', 'second'),
(284, 'B63', '307', 'class', 'second'),
(285, 'B63', '308', 'class', 'second'),
(286, 'B63', '310', 'class', 'second'),
(287, 'B63', '311', 'class', 'second'),
(288, 'B63', '312', 'class', 'second'),
(289, 'B63', '314', 'class', 'second'),
(290, 'B63', '317', 'class', 'second'),
(291, 'B63', '318', 'class', 'second'),
(292, 'B63', '319', 'class', 'second'),
(293, 'B63', '320', 'class', 'second'),
(294, 'B63', '322', 'class', 'second'),
(295, 'B63', '323', 'class', 'second'),
(296, 'B63', '402', 'class', 'third'),
(297, 'B63', '405', 'class', 'third'),
(298, 'B63', '406', 'class', 'third'),
(299, 'B63', '407', 'class', 'third'),
(300, 'B63', '408', 'class', 'third'),
(301, 'B63', '410', 'class', 'third'),
(302, 'B63', '411', 'class', 'third'),
(303, 'B63', '412', 'class', 'third'),
(304, 'B63', '414', 'class', 'third'),
(305, 'B63', '417', 'class', 'third'),
(306, 'B63', '418', 'class', 'third'),
(307, 'B63', '419', 'class', 'third'),
(308, 'B63', '420', 'class', 'third'),
(309, 'B63', '422', 'class', 'third'),
(310, 'B63', '423', 'class', 'third'),
(311, 'B64', '17', '', 'ground'),
(312, 'B64', '6', '', 'ground'),
(313, 'B64', '7', '', 'ground'),
(314, 'B64', '4', '', 'ground'),
(315, 'B64', '9', '', 'ground'),
(316, 'B64', '10', '', 'ground'),
(317, 'B64', '11', '', 'ground'),
(318, 'B64', '101', '', 'first'),
(319, 'B64', '102', '', 'first'),
(320, 'B64', '103', '', 'first'),
(321, 'B64', '104', '', 'first'),
(322, 'B64', '107', 'lab', 'first'),
(323, 'B64', '108', 'lab', 'first'),
(324, 'B64', '110', '', 'first'),
(325, 'B64', '111', '', 'first'),
(326, 'B64', '113', '', 'first'),
(327, 'B64', '114', '', 'first'),
(328, 'B64', '115', '', 'first'),
(329, 'B64', '118', '', 'first'),
(330, 'B64', '119', '', 'first'),
(331, 'B64', '121', '', 'first'),
(332, 'B64', '122', '', 'first'),
(333, 'B61', 'G/104', '', 'ground'),
(334, 'B61', 'G/105', '', 'ground'),
(335, 'B61', 'G/106', '', 'ground'),
(336, 'B61', 'G/124', '', 'ground'),
(337, 'B61', 'G/125', '', 'ground'),
(338, 'B61', 'G/126', '', 'ground'),
(339, 'B61', 'G/127', '', 'ground'),
(340, 'B61', 'G/128', '', 'ground'),
(341, 'B61', 'G/129', '', 'ground'),
(342, 'B61', 'G/147', '', 'ground'),
(343, 'B61', 'G/148', '', 'ground'),
(344, 'B61', 'G/149', '', 'ground'),
(345, 'B61', 'F/102', '', 'first'),
(346, 'B61', 'F/103', '', 'first'),
(347, 'B61', 'F/104', '', 'first'),
(348, 'B61', 'F/105', '', 'first'),
(349, 'B61', 'F/106', '', 'first'),
(350, 'B61', 'F/119', '', 'first'),
(351, 'B61', 'F/120', '', 'first'),
(352, 'B61', 'F/121', '', 'first'),
(353, 'B61', 'F/122', '', 'first'),
(354, 'B61', 'F/123', '', 'first'),
(355, 'B61', 'F/124', '', 'first'),
(356, 'B61', 'F/125', '', 'first'),
(357, 'B61', 'F/127', '', 'first'),
(358, 'B61', 'F/128', '', 'first'),
(359, 'B61', 'F/144', '', 'first'),
(360, 'B61', 'F/145', '', 'first'),
(361, 'B61', 'F/146', '', 'first'),
(362, 'B61', 'F/147', '', 'first'),
(363, 'B61', 'F/148', '', 'first'),
(364, 'B67', 'G-64', 'class', 'ground'),
(365, 'B67', 'G-65', 'class', 'ground'),
(366, 'B67', 'G-66', 'class', 'ground'),
(367, 'B67', 'G-67', 'class', 'ground'),
(368, 'B67', 'G-69', 'class', 'ground'),
(369, 'B67', 'G-70', 'class', 'ground'),
(370, 'B67', 'G-71', 'class', 'ground'),
(371, 'B67', 'G-72', 'class', 'ground'),
(372, 'B67', 'G-73', 'class', 'ground'),
(373, 'B67', 'G-74', 'class', 'ground'),
(374, 'B67', 'G-75', 'class', 'ground'),
(375, 'B67', 'G-76', 'class', 'ground'),
(376, 'B67', 'F-165', 'class', 'first'),
(377, 'B67', 'F-166', 'class', 'first'),
(378, 'B67', 'F-167', 'class', 'first'),
(379, 'B67', 'F-168', 'class', 'first'),
(380, 'B67', 'F-169', 'class', 'first'),
(381, 'B67', 'F-170', 'class', 'first'),
(382, 'B67', 'F-171', 'class', 'first'),
(383, 'B67', 'F-172', 'class', 'first'),
(384, 'B67', 'F-173', 'class', 'first'),
(385, 'B67', 'F-174', 'class', 'first'),
(386, 'B67', 'F-175', 'class', 'first'),
(387, 'B67', 'F-176', 'class', 'first'),
(388, 'B67', 'S-259', 'class', 'second'),
(389, 'B67', 'S-260', 'class', 'second'),
(390, 'B67', 'S-264', 'class', 'second'),
(391, 'B67', 'S-265', 'class', 'second'),
(392, 'B67', 'S-266', 'class', 'second'),
(393, 'B67', 'S-267', 'class', 'second'),
(394, 'B67', 'S-268', 'class', 'second'),
(395, 'B67', 'S-269', 'class', 'second'),
(396, 'B67', 'S-270', 'class', 'second'),
(397, 'B67', 'S-271', 'class', 'second'),
(398, 'B67', 'S-272', 'class', 'second'),
(399, 'B67', 'S-273', 'class', 'second'),
(400, 'B67', 'S-274', 'class', 'second'),
(401, 'B67', 'S-275', 'class', 'second'),
(402, 'B67', 'S-276', 'class', 'second'),
(403, 'B67', 'T-359', 'class', 'third'),
(404, 'B67', 'T-360', 'class', 'third'),
(405, 'B67', 'T-364', 'class', 'third'),
(406, 'B67', 'T-365', 'class', 'third'),
(407, 'B67', 'T-366', 'class', 'third'),
(408, 'B67', 'T-367', 'class', 'third'),
(409, 'B67', 'T-368', 'class', 'third'),
(410, 'B67', 'T-369', 'class', 'third'),
(411, 'B67', 'T-370', 'class', 'third'),
(412, 'B67', 'T-371', 'class', 'third'),
(413, 'B67', 'T-372', 'class', 'third'),
(414, 'B67', 'T-373', 'class', 'third'),
(415, 'B67', 'T-374', 'class', 'third'),
(416, 'B67', 'T-375', 'class', 'third'),
(417, 'B67', 'T-376', 'class', 'third'),
(418, 'wmc2', '220/A', 'class', 'ground'),
(419, 'wmc2', '240/A', 'class', 'ground'),
(420, 'wmc2', '220/1', 'class', 'first'),
(421, 'wmc2', '240/1', 'class', 'first'),
(422, 'wmc5', '505/A', 'class', 'ground'),
(423, 'wmc5', '505/1', 'class', 'first'),
(424, 'wmc5', '561/1', 'class', 'first'),
(425, 'wmc5', '561/2', 'class', 'second'),
(426, 'wmc5', '562/2', 'class', 'second'),
(427, 'wmc6', '602/A', 'class', 'ground'),
(428, 'wmc6', '610/A', 'class', 'ground'),
(429, 'wmc6', '622/A', 'class', 'ground'),
(430, 'wmc6', '640/A', 'class', 'ground'),
(431, 'wmc6', '645', 'workshop', 'ground'),
(432, 'wmc6', '646', 'workshop', 'ground'),
(433, 'wmc6', '647', 'workshop', 'ground'),
(434, 'wmc6', '648', 'workshop', 'ground'),
(435, 'wmc6', '651', 'workshop', 'ground'),
(436, 'wmc6', '652', 'workshop', 'ground'),
(437, 'wmc6', '653', 'workshop', 'ground'),
(438, 'wmc6', '603/1', 'class', 'first'),
(439, 'wmc6', '602/1', 'workshop', 'first'),
(440, 'wmc6', '602/2', 'workshop', 'second'),
(441, 'wmc6', '603/2', 'class', 'second'),
(442, 'wmc6', '687/2', 'class', 'second'),
(443, 'wmc7', '728/A', 'class', 'ground'),
(444, 'wmc7', '725/1', 'class', 'first'),
(445, 'wmc7', '735/1', 'class', 'first'),
(446, 'wmc7', '743/2', 'class', 'second'),
(447, 'wmc8', '820', 'class', 'ground'),
(448, 'wmc8', '802', 'class', 'first'),
(449, 'wmc8', '810', 'class', 'first'),
(450, 'wmc8', '830', 'class', 'first'),
(451, 'wmc8', '831', 'class', 'first'),
(452, 'wmc8', '841', 'class', 'first'),
(453, 'wmc9', '902', 'class', 'first'),
(454, 'wmc9', '905', 'class', 'first'),
(455, 'wmc9', '910', 'class', 'first'),
(456, 'wmc9', '920', 'class', 'first'),
(457, 'wmc9', '955/1', 'class', 'first'),
(458, 'wmc10', '1044\n(1040)', 'class', 'ground'),
(459, 'wmc10', '1063\n(1062-\n1058)', 'class', 'ground'),
(460, 'wmc10', '1078', 'workshop', 'first'),
(461, 'wmc10', '1018\n(1020)', 'workshop', 'first'),
(462, 'wmc10', '1040', 'class', 'first'),
(463, 'wmc10', '1007', 'class', 'first'),
(464, 'wmc10', '1013', 'class', 'first'),
(465, 'wmc10', '1074\n(1059)', 'class', 'first'),
(466, 'wmc10', '1072\n(1055)', 'class', 'first'),
(467, 'wmc10', '1071\n(1053)', 'class', 'first'),
(468, 'wmc10', '1006', 'class', 'first'),
(469, 'wmc10', '1008', 'class', 'first'),
(470, 'wmc10', '1031', 'class', 'first'),
(471, 'wmc11', '1105', 'class', 'ground'),
(472, 'wmc11', '1107', 'class', 'ground'),
(473, 'wmc11', '1143', 'class', 'ground'),
(474, 'wmc11', '1143', 'class', 'first'),
(475, 'wmc12', '1240', 'class', 'ground'),
(476, 'wmc12', '1232', 'class', 'first'),
(477, 'wmc12', '1234', 'class', 'first'),
(478, 'wmc12', '1222', 'class', 'second'),
(479, 'wmc12', '1215', 'class', 'second'),
(480, 'wmc13', '1316', 'class', 'first'),
(481, 'wmc13', '1303', 'class', 'first'),
(482, 'wmc13', '1330', 'class', 'first'),
(483, 'wmc13', '1333', 'class', 'first'),
(484, 'wmc13', '1311', 'class', 'first'),
(485, 'wmc13', '1310', 'class', 'second'),
(486, 'wmc431', 'G04', '', 'ground'),
(487, 'wmc431', 'G07', '', 'ground'),
(488, 'wmc431', 'G08', '', 'ground'),
(489, 'wmc431', 'G09', '', 'ground'),
(490, 'wmc431', 'G10', '', 'ground'),
(491, 'wmc431', 'G11', '', 'ground'),
(492, 'wmc431', 'F03', '', 'first'),
(493, 'wmc431', 'F04', '', 'first'),
(494, 'wmc431', 'F08', '', 'first'),
(495, 'wmc431', 'F11', '', 'first'),
(496, 'wmc431', 'F12', '', 'first'),
(497, 'wmc431', 'F13', '', 'first'),
(498, 'wmc431', 'F14', '', 'first'),
(499, 'wmc431', 'F15', '', 'first'),
(500, 'wmc431', 'F17', '', 'first'),
(501, 'wmc431', 'F20', '', 'first'),
(502, 'wmc431', 'F21', '', 'first'),
(503, 'wmc431', 'S03', '', 'second'),
(504, 'wmc431', 'S04', '', 'second'),
(505, 'wmc431', 'S07', '', 'second'),
(506, 'wmc431', 'S08', '', 'second'),
(507, 'wmc431', 'S09', '', 'second'),
(508, 'wmc431', 'S11', '', 'second'),
(509, 'wmc431', 'S12', '', 'second'),
(510, 'wmc431', 'S13', '', 'second'),
(511, 'wmc431', 'S14', '', 'second'),
(512, 'wmc431', 'S17', '', 'second'),
(513, 'wmc431', 'S19', '', 'second'),
(514, 'wmc431', 'S21', '', 'second'),
(515, 'wmc431', 'S25', '', 'second'),
(516, 'wmc431', '20', '', ''),
(517, 'wmc431', '24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deviceinclass`
--

CREATE TABLE `deviceinclass` (
  `device_pk` int(11) NOT NULL,
  `class_pk` int(11) NOT NULL,
  `pc_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `windows` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mac_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_num` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projector_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projector_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smart_board_model` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `network_port` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TV` tinyint(1) DEFAULT NULL,
  `Escreen` tinyint(1) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `other` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deviceinclass`
--

INSERT INTO `deviceinclass` (`device_pk`, `class_pk`, `pc_name`, `windows`, `system_type`, `ram`, `mac_address`, `serial_num`, `pc_company`, `pc_model`, `projector_company`, `projector_model`, `smart_board_model`, `network_port`, `TV`, `Escreen`, `note`, `other`) VALUES
(1, 11, '264b3cl1', '7', '32', '', 'B8-AC-6F-89-54-3A', 'DBG3VW', 'DELL', '', '', '', '', '', 0, 0, '', ''),
(2, 12, '264b3cl2', '7', '32', '', 'B8-AC-6F-86-70-A3', '', '', '', '', '', '', '', 0, 0, '', ''),
(3, 13, '264b3cl3', '7', '64', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(4, 14, '264b3cl4', '7', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(5, 17, '264b4cl1', '7prof', '32bit', '', '', 'BHG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x4014WN', '', '', 0, 0, '', ''),
(6, 18, '264b4cl2', '7prof', '32bit', '', 'B8-Ac-6f-86-71-Aa', 'BGG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x4015WN', '', '', 0, 0, '', ''),
(7, 19, '264b4cl3', '7prof', '32bit', '', 'B8-Ac-6F-86-71-f4', 'FGG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x445', '', '', 0, 0, '', ''),
(8, 20, '264b4cl4', '7prof', '32bit', '', '00-26-Ba-8E-b6-cB', '5GG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x608', '', '', 0, 0, '', ''),
(9, 21, '264b4cl5', '7prof', '32bit', '', '', 'FGG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(10, 22, '264B4CL8', '7prof', '32bit', '', 'B8-AC-6F-86-71-18', 'JFG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(11, 23, '264b4cl7', '7profess', '32bit', '', '', 'HGG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x4505', '', '', 0, 0, '', ''),
(12, 24, '264b4cl8', '7profess', '32bit', '', 'B8-AC-6F-86-71-2F', 'DDG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x505', '', '', 0, 0, '', ''),
(13, 25, '264b4cl9', '7profess', '32bit', '', 'B8-AC-6F-86-71-33', '6GG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x608', '', '', 0, 0, '', ''),
(14, 26, '', '', '', '', '', '2BG3V4J', 'DELL', 'optiplex960', 'Hitachi', 'cp-x505', '', '', 0, 0, '', ''),
(15, 27, '264b4cl11', '7prof', '32bit', '', 'B8-Ac-6f-86-71-A1', '8GG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x608', '', '', 0, 0, '', ''),
(16, 28, '264b4cl12', '7prof', '32bit', '', 'B8-Ac-6f-86-71-7b', '4FG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x608', '', '', 0, 0, '', ''),
(17, 29, '264b4cl13', '7Enterprise', '64bit', '', '6c-3b-e5-19-35-a2', 'TRF3140K80', 'HP', '8300microtower', 'Htachi', 'cp-xY014WN', '', '', 0, 0, '', ''),
(18, 30, '264b4cl14', '7prof', '32bit', '', 'B8-Ac-6f-6f-c5', '2GG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(19, 31, '264b4cl15', '7prof', '32bit', '', 'B8-Ac-6f-86-71-1E', '9FG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(20, 32, '264B2CL16', '7prof', '32bit', '', 'B8-AC-6F-86-71-99', '9DG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-xY015WN', '', '', 0, 0, '', ''),
(21, 33, '264b4cl17', '7prof', '32bit', '', '00-26-B9-81-11-99', 'DHG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(22, 34, '264b4cl18', '7prof', '32bit', '', 'B8-Ac-8F-89-54-4D', '8BG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x505', '', '', 0, 0, '', ''),
(23, 35, '264b4cl19', '7prof', '32bit', '', 'B8-Ac-6f-86-72-5c', '4GG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x608', '', '', 0, 0, '', ''),
(24, 36, '264b4cl20', '7prof', '32bit', '', 'B8-Ac-6f-89-55-30', '3BG3V4J', 'DELL', 'optiplex960', 'Htachi', 'cp-x445', '', '', 0, 0, '', ''),
(25, 37, '264B5CL1', '7-PROF', '32', '', 'DB-5D-4C-82-DE-35', 'H9G3V4J', '', 'optiplex 960', '', 'CP-X608', '', 'C-f-CR1-D003-D004', 0, 0, '', ''),
(26, 38, '264B5CL2', '7-Enter price', '64', '', '6C-3B-E5-22-4D-3B', 'TRF3140NN9', '', 'optiplex 961', '', 'CP-X505', '', 'C-f-CR1-D09/D10', 0, 0, '', ''),
(27, 39, '264B5CL3', '7-PROFESS', '32', '', 'B8-AC-6F-86-71-EE', '1HG3V4J', '', 'optiplex 962', '', 'CP-X505', '', 'C-f-CR1-D17/D18', 0, 0, '', ''),
(28, 40, '264B5CL4', '7-Enter price', '64', '', 'B8-AC-6F-86-71-F1', '2bG3v4J', '', 'optiplex 963', '', 'CP-X4015 WN', '', 'C-f-CR1-D27/D28', 0, 0, '', ''),
(29, 41, '264B5CL5', '7-PROFESS', '32', '', 'B8-AC-6F-86-71-55', '1DG3V4J', '', 'optiplex 964', '', 'CP-X4015 WN', '', 'C-f-CR1-D35/D36', 0, 0, '', ''),
(30, 42, '264B5CL6', '7-PROF', '32', '', 'B8-AC-6F-86-71-0C', '8FG3V4J', '', 'optiplex 965', '', 'CP-X50X', '', 'C-f-CR1-D43/D44', 0, 0, '', ''),
(31, 43, '264B5CL7', '7-PROF', '32', '', 'B8-AC-6F-86-72-DC', '7DG3V4J', '', 'optiplex 966', '', 'CP-X50X', '', 'C-f-CR1-D51/D52', 0, 0, '', ''),
(32, 44, '264B5CL8', '7-PROFSSIONAL\n', '32-bit', '', 'B8-AC-6F-89-55-26', 'J9G3V4J', '', 'optiplex 967', '', 'CP-X4015 WN', '', 'IF-CR1-Dool/D002', 0, 0, '', ''),
(33, 45, '264B5CL9', '7-PROFSSIONAL\n', '32-bit', '', 'D8-5D-4C-82-FE-54', 'GCG3V4J', '', 'optiplex 968', '', 'CP-X608', '', 'IF-CR1-Doll/D012', 0, 0, '', ''),
(34, 46, '264B5CL10', '7-PROFSSIONAL\n', '32', '', 'OO-26-B9-85-D6-D3', '8CG3V4J', '', 'optiplex 969', '', 'CP-X505', '', 'IF-CR1-D19/D020', 0, 0, '', ''),
(35, 47, '264B5CL11', '7-PROF', '32', '', 'B8-AC-6F-89-54-3C', 'FBG3V4J', '', 'optiplex 970', '', 'CP-X4015 WN', '', 'IF-CR1-D025/D026', 0, 0, '', ''),
(36, 48, '264B5CL12', '7-PROFESS', '32', '', 'B8-AC-6F-86-6D-BF', '3HG3V4J', '', 'optiplex 971', '', 'CP-X505', '', 'IF-CR1-D033/D034', 0, 0, '', ''),
(37, 49, '264B5CL13', '7-PROF', '32', '', 'B8-AC-6F-86-6D-51', '8HG3V4J', '', 'optiplex 972', '', 'CP-X608', '', 'IF-CR1-D041/D042', 0, 0, '', ''),
(38, 50, '264B5CL14', '7-PROF', '32', '', 'B8-Ac-6F-86-6E-87', '1GG3V4J', '', 'optiplex 973', '', 'CP-X505', '', 'IF-CR1-D049/D050', 0, 0, '', ''),
(39, 51, '264B5CL15', '7-PROF', '32', '', 'B8-AC-67-86-71-8E', 'LGG3V4J', '', 'optiplex 974', '', 'CP-X608', '', 'IF-CR1-D057/D058', 0, 0, '', ''),
(40, 52, '264b7cl1', '7 ENT', '64', '8.00GB? 7.89GB', '50-65-F3-27-C3-F9', 'TRF54402P6', 'HP', '800', 'hitachi', 'cp-x608', '', 'GF-B-95', 0, 0, '', ''),
(41, 53, '264B7CL2', '7 ENT', '64', '8.00GB? 7.88GB', '6C-3B-E5-1F-5C-E3', 'TRF3140NKY', 'HP', '8300', 'hitachi', 'cp-x608', '', 'GF-CB-117,116', 0, 0, '', ''),
(42, 54, '264B7CL3', '7 ENT', '64', '12.0GB', '64-51-06-43-A1-68', 'TRF5020VKG', 'HP', '800', 'hitachi', 'cp-x608', '', 'GF-CA-15,16', 0, 0, '', ''),
(43, 55, '264B7CL4', '7 ENT', '32', '4.00GB? 3.10GB', '78-2B-CB-90-7A-38', 'J9HR05J', 'DELL', 'VOSTRO', 'hitachi', 'cp-x608', '', 'GF-CA-13,14', 0, 0, '', ''),
(44, 56, '264B7CL9', '7 ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-77-E3', 'G9HR05J', 'DELL', 'VOSTRO', 'hitachi', 'cp-x608', '', 'IF-B-23', 0, 0, '', ''),
(45, 57, '264B7CL5', '7ENT', '64', '8.00GB? 7.88GB', '6C-3B-E5-23-C7-3D', 'TRF3140K76', 'HP', '8300', 'hitachi', 'cp-x608', '', 'GF-A-132', 0, 0, '', ''),
(46, 58, '264B7CL6', '7 ENT', '64', '8.00GB? 7.88GB', '2C-D0-5A-8B-A8-21? 6C-3B-E5-1D-64-CE', 'TRF3140NLS', 'HP', '8300', 'hitachi', 'CP-X608', '', 'IF-A-81', 0, 0, '', ''),
(47, 59, '264B7CL7', '7ULT', '32', '4.00GB? 3.10GB', '78-2B-CB-8F-EE-AE', 'JQKQ05J', 'DELL', 'VOSTRO', 'hitachi', 'CP-X608', '', 'GF-C2-D76', 0, 0, '', ''),
(48, 60, '', '', '', '', '', '', '', '', 'hitachi', 'cp-x608', '', '', 0, 0, '', ''),
(49, 61, '264B7CL10', '7 ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-03-45', 'C2PR05J', 'DELL', 'VOSTRO', 'hitachi', 'CP-X445', '', 'IF-C-67', 0, 0, '', ''),
(50, 62, '264B7CL11', '7 ENT', '64', '4.00GB 3.89GB', '08-2E-5F-31-FC-82', 'TRF2260993', 'HP', '8200', 'hitachi', 'CP-X608', '', 'IF-D-73', 0, 0, '', ''),
(51, 63, '264B7CL12', '7 ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-4C-89', '26HR05J', 'DELL', 'VOSTRO', 'hitachi', 'CP-X608', '', '2F-D-22', 0, 0, '', ''),
(52, 64, '264B7CL13', '7 ULT', '32', '4.00GB 3.10GB', '78-2B-CB-8F-FE-CD', 'JCHR05J', 'DELL', 'VOSTRO', 'hitachi', 'CP-X445', '', 'IF-G-25', 0, 0, '', ''),
(53, 65, '264B7CL14', '7 ENT', '64', '4.00GB 3.85GB', '78-2B-CB-90-0A-29', '79HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'IF-G-20', 0, 0, '', ''),
(54, 66, '264B7CL15', '7 ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-46-BF', '9Q8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'IF-G-28', 0, 0, '', ''),
(55, 67, '264B7CL16', '7 PRO', '32', '4.00GB 3.21GB', 'B8-AC-6F-86-6E-E2', '5HG3V4J', 'DELL', 'OPTIPLEX960', 'HITACHI', 'CP-X4015WN', '', 'IF-G-34.35', 0, 0, '', ''),
(56, 68, '264B7CL17', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-08-6C', '43PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X445', '', 'IF-H-17', 0, 0, '', ''),
(57, 69, '264B7Cl21', '7ENT', '64', '4.00GB 3.85GB', '78-2B-CB-90-49-78', 'F5HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-F-96', 0, 0, '', ''),
(58, 70, '264B7Cl22', '7ENT', '64', '8.00GB 7.88GB', '6C-3B-E5-1D-E5-98', 'TRF3140KBT', 'HP', '8300', 'HITACHI', 'CP-X608', '', '2F-C88-60,61', 0, 0, '', ''),
(59, 71, '264B7CL23', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-06-41', '47HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-E-36', 0, 0, '', ''),
(60, 72, '264B7CL24', '7PRO', '32', '4.00GB 3.21GB', 'B8-AC-6F-86-6D-49', '4HG3V4J', 'DELL', 'OPTIPLEX960', 'HITACHI', 'CP-X608', '', '2F-F-124', 0, 0, '', ''),
(61, 73, '264B7CL25', '7ENT', '64', '8.00GB 7.88GB', '6C-3B-E5-1D-E5-5B', 'TRF3140KC9', 'HP', '8300', 'HITACHI', 'CP-X608', '', '2F-F-128', 0, 0, '', ''),
(62, 74, '264B7CL27', '7ENT', '64', '8.00GB 7.88GB', '6C-3B-E5-19-34-55', 'TRF3140KFW', 'HP', '8300', 'HITACHI', 'CP-X445', '', '2F-F-98', 0, 0, '', ''),
(63, 75, '264B7CL28', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-D7-18', '8R8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-F-103', 0, 0, '', ''),
(64, 76, '264B7CL29', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-D8-FA', '2T8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-F-107', 0, 0, '', ''),
(65, 77, '264B7CL30', 'ENT', '64', '4.00GB 3.10GB', '', 'D9HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', '2F-F-132? -3F-F-29', 0, 0, '', ''),
(66, 78, '264B7CL31', 'ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-49-32', 'H5HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'AVAYA', 0, 0, '', ''),
(67, 79, '264B7CL32', '8.1ENT', '64', '8.00GB 7.89GB', '50-65-F3-26-1B-B8', 'TRF54402YT', 'HP', '800', 'HITACHI', 'CP-X608', '', '2F-E-88', 0, 0, '', ''),
(68, 80, '264B7CL33', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-DB-6B', 'DQ8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-E-69', 0, 0, '', ''),
(69, 81, '264B7CL34', '7ENT', '64', '8.00GB 7.88GB', '6C-3B-E5-1D-E3-CH', 'TRF3140KFM', 'HP', '8300', 'HITACHI', 'CP-X608', '', '2F-C88-71', 0, 0, '', ''),
(70, 82, '264B7CL18', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-04-AB', '38HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '2F-F-78', 0, 0, '', ''),
(71, 83, '264b7cl19', '7ENT', '64', '4.00GB 3.85GB', '78-2B-CB-90-06-5E', 'G6HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', '3F-E-009', 0, 0, '', ''),
(72, 84, '264B7CL26', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-06-7E', 'J8HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4014 WN', '1', '2F-F-91', 0, 0, '', ''),
(73, 85, '264b7cl38', '7EN', '64', '', '78-2B-CB-90-78-33', 'BBHR05J', 'DELL', 'VOSTRO', 'HITACHI', '4015', '', 'GF-C2-P2-37', 0, 0, '', ''),
(74, 86, '264b7cl39', '7UL', '32', '', '78-2B-CB-8F-EA-D1', '', 'DELL', 'VOSTRO', 'HITACHI', '4014', '', '', 0, 0, '', ''),
(75, 87, '264b7cl40', '7EN', '64', '', '78-2B-CB-90-09-0F', 'C6HR05J', 'DELL', 'VOSTOR', 'HITACHI', 'CP-X608', '', 'GF-C2-P2-35', 0, 0, '', ''),
(76, 88, '264B7CL41', '7UL', '32', '', '78-2B-CB-90-4C-40', '66HR05J', 'DELL', 'VOSTOR', 'HITACHI', '4015', '', 'GF-C1-P2-01', 0, 0, '', ''),
(77, 89, '264b7cl42', '7UL', '32', '', '78-2B-CB-90-47-B5', '16HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4014WN', '', 'GF-C1-P2-02', 0, 0, '', ''),
(78, 90, '264b7cl44', '7UL', '32', '', '78-2B-CB-90-06-0E', '99HR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', 'GF-C2-P1-05', 0, 0, '', ''),
(79, 91, '\n264b7cl45', '7 UL', '32', '', '78-2B-CB-90-02-A6', '73PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', 'GF-C1-P1-05', 0, 0, '', ''),
(80, 92, '264b7cl46', '8.1 EN', '64', '', '', 'TRF54400HS', 'HP', '800G1TWR', 'HITACHI', 'CP-X608', '', 'GF-C1-P1-04', 0, 0, '', ''),
(81, 93, '264b7cl47', '7UL', '32', '', '78-2B-CB-90-09-D6', 'B2PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'GF-C1-P1-02', 0, 0, '', ''),
(82, 94, '264b7cl48', '7UL', '32', '', '', 'D2PR05J', 'DELL', 'VOSTRO', 'HITACHI', '', '', 'GF-C1-P1-01', 0, 0, '', ''),
(83, 95, '264b7cl49', '7EN', '32', '', '78-2B-CB-8F-E7-8C', '92PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', 'FG-C1-P2-34', 0, 0, '', ''),
(84, 96, '264b7cl50', '7UL', '32', '', '', '33PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'GF-C1-P1-37', 0, 0, '', ''),
(85, 97, '264b7cl51', '7EN', '64', '', '78-2B-CB-90-D3-8E', '2V8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'GF-C1-P1-36', 0, 0, '', ''),
(86, 98, '264b7cl52', '7UL', '32', '', '78-2B-CB-91-25-08', '3CNKK05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', 'GF-C1-P1-36', 0, 0, '', ''),
(87, 99, '264b7cl53', '7UL', '32', '', '78-2B-CB-91-25-08', 'GR8R06J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4014WN', '', 'F1-C2-P2-43', 0, 0, '', ''),
(88, 100, '264b7cl54', '7UL', '32', '', '78-2B-CB-90-D0-EC', 'HR8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015WN', '', 'F1-C1-P2-02', 0, 0, '', ''),
(89, 101, '264b7cl55', '7 PR', '32', '', 'B8-AC-6F-89-54-1A', '3CG3V4J', 'DELL', 'OPTIPLEX960', 'HITACHI', 'CP-X4015WN', '', 'F1-C1-P1-08', 0, 0, '', ''),
(90, 102, '264b7cl60', '7', '32', '', '3C-D9-2B-73-0C-7B', 'CZC1414WHO', 'HP', '8200', 'HITACHI', '', '', '', 0, 0, '', ''),
(91, 103, '264b7cl56', '7UL', '32', '', '78-2B-CB-90-D9-E9', 'GS8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'F1-C2-P2-42', 0, 0, '', ''),
(92, 104, '264b7cl57', '7UL', '32', '', '78-2B-CB-8F-FC-BE', '54PR05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X4015SWN', '', 'F1-C1-P2-39', 0, 0, '', ''),
(93, 105, '264b7cl58', '7UL', '32', '', '78-2B-CB-90-D4-DE', 'FS8R05J', 'DELL', 'VOSTRO', 'HITACHI', 'CP-X608', '', 'F1-C1-P2-41', 0, 0, '', ''),
(94, 106, '', '', '', '', '', '', 'DELL', '', 'HITACHI', 'CP-X608', '', 'F1-C1-P2-40', 0, 0, '', ''),
(95, 108, '246B8Cl12', '7/Ulti', '32-bit', '', '78-2B-CB-90-02-92', '27PR05J', 'Dell', 'Dell Vostro', 'Hitachi', 'CP-X4015WN', '', 'GF/5D026/027', 0, 0, '', ''),
(96, 110, '264B8Cl14', '7/Ulti', '32-bit', '', '78-2B-CB-90-7A-15', '1ChR05J', 'Dell', 'Dell Vostro', 'Hitachi', 'CP-X608', '', 'GF/5D071/075', 0, 0, '', ''),
(97, 111, '264B8Cl15', '7/Pro', '32-bit', '', 'B8-AC-6F-89-55-20', '99G3V4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X4014WN', '', 'GF/5D044/45', 0, 0, '', ''),
(98, 112, '264B8Cl16', '7/En', '64-bit', '', '78-2B-CB-90-4D-1C', '86HR05J', 'Dell', 'Dell Vostro', 'Hitachi', 'CP-X608', '', 'GF/5D066/067', 0, 0, '', ''),
(99, 113, '264B8Cl17', '7/En', '64-bit', '', '78-2B-CB-8F-E4-AA', '32PR05J', 'Dell', 'Dell Vostro', 'Hitachi', 'CP-X608', '', 'GF/5D052/051', 0, 0, '', ''),
(100, 114, '264B8Cl18', '7/Pro', '32-bit', '', 'B8-AC-6F-86-71-9D', '7GG3V4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X4015WN', '', 'GF/5D058/059', 0, 0, '', ''),
(101, 117, '264B8Cl11', '7/Ulti', '32-bit', '', '78-2B-CB-8F-EB-4D', '5GWQ05J', 'Dell', 'Dell Vostro', 'Hitachi', 'CP-X505', '', 'GF/6D-D108,109', 0, 0, '', ''),
(102, 118, '264B8Cl12', '7/En', '32-bit', '', 'E8-39-35-33-AE-99', 'TRF22609B3', 'HP', 'HP8200', 'Hitachi', 'CP-X608', '', 'GF/6D-D096,097', 0, 0, '', ''),
(103, 119, '', '', '', '', '', '9CG3V4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X445', '', 'GF/5D001-002', 0, 0, '', ''),
(104, 120, '264B8Cl14', '7/Pro', '32-bit', '', 'B8-AC-6F-86-72-00', 'JCG3V4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X608', '', 'GF/5D007-008', 0, 0, '', ''),
(105, 122, '264B8SlP8', '7/En', '32-bit', '', '', '76PYP4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X505', '', 'FF/3D/094/095', 0, 0, '', ''),
(106, 123, '', '', '', '', '', 'D6PYP4J', 'Dell', 'OPTIPLEX 960', 'Hitachi', 'CP-X505', '', 'FF/3D/109/110', 0, 0, '', ''),
(107, 124, '', '', '', '', '', 'TRF31706VL', 'HP', 'HP8300', 'Hitachi', 'CP-X608', '', 'FF/3D063', 0, 0, '', ''),
(108, 125, '', '', '', '', '', 'TRF3140NKB', 'HP', 'HP8300', 'Hitachi', 'CP-X4015WN', '', 'FF/3D078/077', 0, 0, '', ''),
(109, 126, '', '', '', '', '', 'TRF31706X9', 'HP', 'HP8300', 'Hitachi', 'CP-X608', '', 'FF/3D154', 0, 0, '', ''),
(110, 127, '', '', '', '', '', 'TRF3170GV5', 'HP', 'HP8300', 'Hitachi', 'CP-X4014WN', '', '', 0, 0, '', ''),
(111, 159, '264b10cl1', '7', '64', '', '74-EA-3A-84-EB-79', '', 'hp', '800', 'Hitachi', 'CP-x608', '', 'GF-CR1-D051/]052', 0, 0, '', ''),
(112, 160, '264b10cl2', '7', '64', '', 'B8-AC-5F-86-71-38', 'FFG3V4j', 'hp', '', 'Hitachi', 'CP-x608', '', '', 0, 0, '', ''),
(113, 161, '264b10cl3', '7', '64', '', '6C-3B-E5-1P-25-33', 'TRF3140K8L', 'hp', '8300', 'Hitachi', 'CP-x445', '', 'GF-CR1-D37-D38', 0, 0, '', ''),
(114, 162, '264b10cl4', '7', '32', '', '3C-D9-2B-77-8F-FC', 'CZC1414WUK', 'hp', '8200', 'Hitachi', 'CP-x4015wn', '', 'GF-CR1-D029', 0, 0, '', ''),
(115, 163, '264b10cl9', '7', '64', '', 'EC-B1-D7-60-6F-F5', 'CZC1414Wh0', 'hp', '8200', 'Hitachi', 'CP-x608', '', 'D021/D022', 0, 0, '', ''),
(116, 164, '264b10cl6', '7', '32', '', '3C-Dg-2B-77-8F-F1', 'C2C1414wk2', 'hp', '8200', 'Hitachi', 'CP-x608', '', 'GF-CR1-1D059/D060', 0, 0, '', ''),
(117, 165, '264b10cl7', '7', '32', '', '3C-D9-2B-68-BE-93', 'CZC1u1412LR1', 'hp', '8200', 'Hitachi', 'CP-x4015wn', '', 'D011/D012', 0, 0, '', ''),
(118, 166, '264b10cl8', '7', '32', '', '3C-D9-2B-6E-EF-5A', 'CZC14UWHL', 'hp', '8200', 'Hitachi', 'CP-x445', '', 'GF-CR1-D003/D004', 0, 0, '', ''),
(119, 170, '', '', '', '', '', '', '', '', 'hitachi', 'cp-x505', '', '', 0, 0, '', ''),
(120, 178, '', '', '', '', '', '', '', '', 'hitachi', 'cp-x505', '', '', 0, 0, '', ''),
(121, 187, '264b32cl1', '7', '64', '', '6c-3B-E5-1D-64-D1', 'TRF3140NLc', 'HP', 'HP 8300', 'Hitachi', 'CP-X608', '', 'GF-CR1-D19-D20', 0, 0, '', ''),
(122, 188, '2', '7', '64', '', '6c-3B-E5-1D-E3-B7', 'TRf3140k7j', 'HP', 'HP 8300', 'Hitachi', 'CP-X4015WN', '', 'GF-CR1-D067_D068', 0, 0, '', ''),
(123, 189, '3', '7', '64', '', '6c-3B-E5-2F-5D-1A', 'TRF3140NQQ', 'HP', 'HP 8300', 'Hitachi', 'CP-X4014WN', '', 'GF-CR1_D75-D76', 0, 0, '', ''),
(124, 190, '264b32cl4', '7', '64', '', '6c-3B-E5-0E-33-6A', 'TRF3140NQL', 'HP', 'HP 8300', 'Hitachi', 'CP-608', '', 'GF-CR1-D011-D012', 0, 0, '', ''),
(125, 220, '', '', '', '', '', '', '', '', 'hitachi', 'cp-x4015wn', '', '', 0, 0, '', ''),
(126, 222, '264b420cl1', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-78-47', '1BHR05J', 'Dell', 'Vostro', 'Hitachi', 'CP-X608', '', 'GF/B D019/020', 0, 0, '', ''),
(127, 223, '264b420cl2', '7ENT', '32', '4.00GB 3.10GB', '78-2B-CB-90-48-7E', '36HR05J', 'Dell', 'Vostro', 'Hitachi', 'CP-X505', '', 'GF/B D0010/011', 0, 0, '', ''),
(128, 224, '264b420cl3', '7ENT', '64', '8.00GB 7.89GB', '50-65-F3-22-AB-B5', 'TRF54402R1', 'HP', '800 G1', 'Hitachi', 'CP-X505', '', 'GF/B D154/155', 0, 0, '', ''),
(129, 225, '264b420cl4', '7', '32', '', '78-2B-CB-90-D7-86', 'CCHR05J', 'Dell', 'Vostro', 'Hitachi', 'cp-X608', '', 'GF/B D143/144', 0, 0, '', ''),
(130, 226, '264b420cl5', '7', '64', '', '64-51-06-3C-68-D9', 'TRF5020VKP', 'HP', '800 G1', 'Hitachi', 'cp-X505', '', 'GF/B D127/128', 0, 0, '', ''),
(131, 227, '264b420cl24', '7ultimale', '32', '', '78-2B-CB-90-78-E4', '2BHR05J', 'DELL', 'Vostro', 'Hitachi', 'CP-X505', '', 'GF/B D111/112', 0, 0, '', ''),
(132, 228, '264b420cl6', '7enterprise', '64', '', '50-65-F3-22-AC-72', 'TRF54402QQ', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'GF/B D 094/095', 0, 0, '', ''),
(133, 229, '264b420cl7', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-7A-D9', 'H9HR05J', 'DEEL', 'VOSTRO', 'Hitachi', 'CP-X4015WN', '', 'GF/B D083/084', 0, 0, '', ''),
(134, 230, '264b420cl9', '7PRO', '32', '4.00GB 3.21GB', 'B8-AC-6F-86-6E-2B', 'CHG3V4J', 'DEEL', 'OPTIPLEX960', 'Hitachi', 'CP-X4015WN', '', 'GF/B D050/051', 0, 0, '', ''),
(135, 231, '264b420cl8', '7ENT', '64', '4.00GB 3.84GB', 'B8-AC-6F-89-54-30', 'GBG3V4J', 'DEEL', 'OPTIPLEX960', 'Hitachi', 'CP-X505', '', 'GF/B D037/038', 0, 0, '', ''),
(136, 232, '264b420cl10', '7ENT', '64', '12.0GB', '64-51-06-42-9F-57', 'TRF5020TYB', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D019/020', 0, 0, '', ''),
(137, 233, '264b420cl11', '7ENT', '64', '12.0GB', '64-51-06-42-A3-B8', 'TRF5020VJW', 'HP', '800G1', 'Hitachi', 'CP-X608', '', 'FF/D D010/011', 0, 0, '', ''),
(138, 234, '264b420cl12', '7ENT', '64', '12.0GB', '64-51-06-42-9C-59', 'TRF5020TV1', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D189/190', 0, 0, '', ''),
(139, 235, '264b420cl13', '7ENT', '64', '12.0GB', '64-51-06-44-1F-F9', 'TRF5020VJG', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D178/179', 0, 0, '', ''),
(140, 236, '264b420cl14', '7ENT', '64', '12.0GB', '64-51-06-42-9C-7C', 'TRF45201SR', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D168/169', 0, 0, '', ''),
(141, 237, '264b420cl15', '7ENT', '64', '12.0GB', '64-51-06-3C-63-E3', 'TRF45201QJ', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D151/152', 0, 0, '', ''),
(142, 238, '264b420cl16', '7ENT', '64', '12.0GB', '64-51-06-44-1F-E4', 'TRF5020VKC', 'HP', '800G1', 'Hitachi', 'CP-X608', '', 'FF/D D135/136', 0, 0, '', ''),
(143, 239, '264b420cl17', '7enter', '64', '', 'EC-B1-D7-5E-F8-1B', 'TRF54400GM', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D119/120', 0, 0, '', ''),
(144, 240, '264b420cl18', '7enter', '64', '', '64-51-06-3C-66-56', 'TRF5020TXQ', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D107/108', 0, 0, '', ''),
(145, 241, '264b420cl19', '7enter', '64', '', '64-51-06-42-A3-BB', 'TRF5020VKN', 'HP', '800G1', 'Hitachi', 'CP-X505', '', 'FF/D D 092/093', 0, 0, '', ''),
(146, 242, '264b420cl20', '', '', '', '', '56HR05J', 'Dell', 'Vostro', 'Hitachi', 'CP-X505', '', 'IF-D D271,272', 0, 0, '', ''),
(147, 243, '264b420cl21', '7ENT', '64', '8.00GB 7.89GB', 'EC-B1-D7-60-70-2A', 'TRF54400GX', 'HP', '800 G1', 'Hitachi', 'CP-X608', '', 'FF/D D064/065', 0, 0, '', ''),
(148, 244, '264b420cl122', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-07-34', '53PR05J', 'Dell', 'Vostro', 'Hitachi', 'CP-X608', '', 'FF/D D050/051', 0, 0, '', ''),
(149, 245, '264b420cl123', '7ULT', '32', '4.00GB 3.10GB', '78-2B-CB-90-04-E2', '48HR05J', 'Dell', 'Vostro', 'Hitachi', 'CP-X505', '', 'FF/D D 035/036', 0, 0, '', ''),
(150, 246, '264b43cl1', 'win7', '32', '', '08-2E-5F-22-E7-A6', 'TRF200RT4', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X445', '', 'GF-C1-02\nGF-C1-03', 0, 0, '', ''),
(151, 247, '264b43cl2', 'win7', '32', '', '08-2E-5F-22-E5-AB', 'TRF2200LWB', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X445', '', 'GF-C1-06\nGF-CL-07', 0, 0, '', ''),
(152, 248, '264b43cl3', 'win7', '64', '', '08-2E-5F-31-F2-97', 'TRF2260985', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X608', '', 'GF-C1-13\nGF-C1-12', 0, 0, '', ''),
(153, 249, '264b43cl4', 'w7', '32', '', '08-2E-5F-31-FC-A6', 'TRF2260934', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'GF-C1-18\nGF-C1-17', 0, 0, '', ''),
(154, 250, '264b43cl5', 'w7', '32', '', '08-2E-5F-21-B2-90', 'TRF3300RT6', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'GF-C1-21\nGF-C1-23', 0, 0, '', ''),
(155, 251, '264b43cl6', 'w7', '32', '', '08-2E-5F-21-AF-5D', 'TRF2200RVF', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4015WN', '', 'GF-C2-26', 0, 0, '', ''),
(156, 252, '264b43cl7', 'w7', '32', '', '08-2E-5F-21-B2-B4', 'TRF2200RVK', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4015WN', '', 'GF-C2-32', 0, 0, '', ''),
(157, 253, '264b43cl8', 'w7', '32', '', 'E8-39-35-33-B2-AC', 'TRF2200QBX', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'GF-C2-36', 0, 0, '', ''),
(158, 254, '264b43cl9', 'w7', '32', '', '08-2E-5F-22-E3-BA', 'TRF226098W', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4014WN', '', 'GF-C2-41', 0, 0, '', ''),
(159, 255, '264b43cl10', 'w7', '32', '', '08-2E-5F-21-B1-4E', 'TRF2200Q8K', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'GF-C2-46', 0, 0, '', ''),
(160, 256, '264b43cl11', 'w7', '32', '', '08-2E-5F-22-E6-40', 'TRF2200QCL', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X608', '', 'GF-C2-01', 0, 0, '', ''),
(161, 257, '264b43cl12', 'w7', '32', '', '08-2E-5F-31-F0-8D', 'TRF226093W', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4014WN', '', 'GF-C2-07', 0, 0, '', ''),
(162, 258, '264b43cl13', 'w7', '32', '', '08-2E-5F-22-D0-4F', 'TRF2200Q9J', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4015WN', '', 'GF-C2-14', 0, 0, '', ''),
(163, 259, '264b43cl14', 'w7', '32', '', '08-2E-5F-22-D0-72', 'TRF2200Q9Z', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'GF-c2-17', 0, 0, '', ''),
(164, 260, '264b43cl15', 'w7', '32', '', 'E8-39-35-33-BB-44', 'TRF22609CB', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X505', '', 'Gf-C2-22', 0, 0, '', ''),
(165, 261, '264b43cl16', 'w7', '32', '', '08-2E-5F-31-F0-64', 'TRF2260942', 'HP', 'compaq8200Elite', 'Hitachi', 'CP-X4015WN', '', 'GF-C2-27', 0, 0, '', ''),
(166, 262, '264b663cl', '7', '32', '', '3C-D9-2B-6E-33-94', 'CZC1415HLL', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-059', 0, 0, '', ''),
(167, 263, '264b73cl2', '7', '64', '', '5O-65-F3-22-AC-26', 'TRF54402TR', 'HP', '800', 'Hitachi', 'CP-X608', '', 'GF_D-063', 0, 0, '', ''),
(168, 264, '', '7', '', '', '', 'TRF45201T3', 'HP', '800', 'Hitachi', 'CP-X608', '', 'GF_D-068', 0, 0, '', ''),
(169, 265, '264b63cl4', '7', '32', '', '3C-D9-2B-63-F4-AB', 'CZC1412LGT', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-075', 0, 0, '', ''),
(170, 266, '264b63cl5', '7', '32', '', '3C-D9-2B-68-B6-20', 'CZC1412LG3', 'Hp', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-079', 0, 0, '', ''),
(171, 267, '264b63cl6', '7', '32', '', '3C-D9-2B-72-0A-B8', 'CZC1415HKq', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-08', 0, 0, '', ''),
(172, 269, '264b63cl8', '7', '32', '', '3C-D9-2B-71-E0-7D', 'CZC1415HM7', 'HP', '8200', 'Hitachi', 'CP-X608', '', '', 0, 0, '', ''),
(173, 271, '264b63cl9', '7', '32', '', '3C-D9-2B-68-B7-7D', 'CZC1412LjK', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-23', 0, 0, '', ''),
(174, 272, '264b63cl10', '7', '32', '', '3C-D9-2B-68-BE-7D', 'CZC1412LFN', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-28', 0, 0, '', ''),
(175, 273, '264b63cl11', '7', '32', '', '3C-D9-2B-63-E5-C8', 'CZC1412LLf', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D33', 0, 0, '', ''),
(176, 274, '264b63cl12', '7', '32', '', '3C-D9-2B-6E-33-EE', 'CZC1415HHM', 'Hp', '8200', 'Hitachi', 'CP-X608', '', '', 0, 0, '', ''),
(177, 276, '264b63cl14', '7', '32', '', '3C-D9-2B-68-BE-E3', 'CZC1415LG2', 'Hp', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-53', 0, 0, '', ''),
(178, 277, '264b63cl24', '7', '32', '', '3C-D9-2B-63-E5-EB', 'CZC1412LHj', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-59', 0, 0, '', ''),
(179, 278, '264b63cl30', '7', '32', '', '3C-D9-2B-63-E5-BC', 'CZC1412LKL', 'Hp', '8200', 'Hitachi', 'CP-X608', '', 'GF_D-011', 0, 0, '', ''),
(180, 279, '264b63cl31', '7', '32', '', '3C-D9-2B-63-EE-35', 'CZC1412LJJ', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'FF_D-15', 0, 0, '', ''),
(181, 280, '264b63cl23', '7', '32', '', '3C-D9-2B-68-BE-B2', 'CZC1412LKl', 'HP', '8200', 'Hitachi', 'CP-X608', '', 'FF_D-19', 0, 0, '', ''),
(182, 281, '264b63cl46', '7', '32', '', '3C-D9-2B-63-BE-B2', 'CZC1412LFR', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-055', 0, 0, '', ''),
(183, 282, '264b63cl45', '7', '32', '', '3C-D9-2B-77-8D-C7', 'CZC1415HLT', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-059', 0, 0, '', ''),
(184, 283, '264b63cl44', '7', '32', '', '3C-D9-2B-68-BB-D7', 'CZC1415H58', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-064', 0, 0, '', ''),
(185, 284, '264b63cl43', '7', '32', '', '3C-D9-2B-6E-31-2B', 'CZc1412HG', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-067', 0, 0, '', ''),
(186, 285, '264b63cl42', '7', '32', '', '3C-D9-2B-68-4B-B8', 'CZC1412LDR', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-07', 0, 0, '', ''),
(187, 286, '264b63cl41', '7', '32', '', '3C-D9-2B-63-EF-11', 'CZC1415Hj5', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-11', 0, 0, '', ''),
(188, 287, '264b63cl40', '7', '32', '', '3C-D9-2B71-DC-3D', 'CZc1412LHM', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-15', 0, 0, '', ''),
(189, 288, '264b63cl39', '7', '32', '', '3C-D9-2B-63-F4-6A', 'CZC1412LHM', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'sF_D-019', 0, 0, '', ''),
(190, 289, '264b63cl32', '7', '32', '', '3C-D9-2B-73-0F-LE', 'CZC1415HH4', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-23', 0, 0, '', ''),
(191, 290, '264b63cl33', '7', '32', '', '3C-D9-2B-6E-34-98', 'CZC1415HKQ', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-27', 0, 0, '', ''),
(192, 291, '264b63cl34', '7', '32', '', '36C-D9-2B-63-E5-CE', 'CZC1412LK2', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', '', 0, 0, '', ''),
(193, 292, '264b63cl35', '7', '32', '', '3C-D9-2B-63-F4-6B', 'CZC1412LG', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-35', 0, 0, '', ''),
(194, 293, '264b63cl36', '7', '32', '', '3C-D9-2B-79-82-12', 'CZC1415HNP', 'Hp', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-043', 0, 0, '', ''),
(195, 294, '264b63cl37', '7', '32', '', '3C-D9-2B-71-DE-06', 'CZC1415HHZ', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'F_D-059', 0, 0, '', ''),
(196, 295, '264b63cl38', '7', '32', '', '3C-D9-2B-63-EC-B9', 'CZC1412LGV', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'SF_D-047', 0, 0, '', ''),
(197, 296, '', '', '', '', '', 'CZC1415HMN', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-55', 0, 0, '', ''),
(198, 297, '', '', '', '', '', 'CZC1415HGR', 'HP', '8200', 'Hitachi', 'CP-X4015', '', '3F/D-59', 0, 0, '', ''),
(199, 298, '264b63cl61', '7', '32', '', '3C-D9-2B-68-B6-18', 'CZC14126FV', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-63', 0, 0, '', ''),
(200, 299, '264b63cl58', '7', '32', '', '3C-D9-2B-6E-EF26', 'CZC1415HLR', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'TF/D-071', 0, 0, '', ''),
(201, 300, '264b63cl59', '7', '32', '', '3C-D9-2B-71-DA-0C', 'CZC1415HG2', 'HP', '8200', 'Hitachi', 'CP-X4014', '', 'TF/D-075', 0, 0, '', ''),
(202, 301, '264b63cl57', '7', '32', '', '3C-D9-2B-68-BE-9C', 'CZC14126DZ', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '', 0, 0, '', ''),
(203, 302, '', '', '', '', '', 'CZC1415HNV', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-11', 0, 0, '', ''),
(204, 303, '264b63cl55', '7', '32', '', '3C-D9-2B-68-BB-C2', 'CZC1412LJD', 'HP', '8200', 'Hitachi', 'CP-X4015', '', '3F/D-15', 0, 0, '', ''),
(205, 304, '264b63cl47', '7', '32', '', '3C-D9-2B-71-DF-62', 'CZC1415HMF', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-19', 0, 0, '', ''),
(206, 305, '264b63cl48', '7', '32', '', '3C-D9-2B-6E-EC-48', 'CZC1415HHN', 'HP', '8200', 'Hitachi', 'CP-X4041', '', '3F/D-23', 0, 0, '', ''),
(207, 306, '264b63cl49', '7', '32', '', '3C-D9-2B-6E-34-5E', 'CZC1415HNS', 'HP', '8200', 'N  ', 'CP-X4014', '', '3F/D-28', 0, 0, '', ''),
(208, 307, '264b63cl50', '7', '32', '', '3C-D9-2B-DE-2D', 'CZC1415HJH', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-36', 0, 0, '', ''),
(209, 308, '264b63cl52', '7', '32', '', '3C-D9-2B-73-0E-F4', 'CZC1415HN2', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-39', 0, 0, '', ''),
(210, 309, '', '', '', '', '', 'CZC1412LHL', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-47', 0, 0, '', ''),
(211, 310, '264b63cl54', '7', '32', '', '3C-D9-2B-6E-32-0C', 'CZC1415HLN', 'HP', '8200', 'Hitachi', 'CP-X4014', '', '3F/D-51', 0, 0, '', ''),
(212, 333, '', '', '', '', '', '', '', '', 'hitachi', 'cp-x608', '', '', 0, 0, '', ''),
(213, 364, '264b67cl1', '10 ent', '', '', '3c-53-82-53-ff-3a', 'Czc746921d', '', '', '', '', '', 'ground', 0, 0, '', ''),
(214, 365, '264b67cl2', '10 ent', '', '', '3c-52-82-53-ff-27', 'Czc746928H', '', '', '', '', '', 'ground', 0, 0, '', ''),
(215, 366, '264b67cl3', '10 ent', '', '', '3c-52-82-54-3D-13', 'Czc74692BT', '', '', '', '', '', 'ground', 0, 0, '', ''),
(216, 367, '264b67cl4', '10 ent', '', '', '3c-52-82-4F-32-C9', 'Czc746924G', '', '', '', '', '', 'ground', 0, 0, '', ''),
(217, 368, '264b67cl5', '10 ent', '', '', '3c-52-82-54--BO-68', 'Czc746924V', '', '', '', '', '', 'ground', 0, 0, '', ''),
(218, 369, '264b67cl6', '10 ent', '', '', '3c-52-82-53-FF-1D', 'Czc746923D', '', '', '', '', '', 'ground', 0, 0, '', ''),
(219, 370, '264b67cl7', '10 ent', '', '', '3c-52-82-53-FF-DB', 'Czc74692DT', '', '', '', '', '', '', 0, 0, '', ''),
(220, 371, '264b67cl8', '10 ent', '', '', '3c-52-82-54-AF-5F', 'Czc7469279', '', '', '', '', '', '', 0, 0, '', ''),
(221, 372, '264b67cl9', '10 ent', '', '', '3c-52-82-53-FF-C9', 'Czc74692HM', '', '', '', '', '', 'ground', 0, 0, '', ''),
(222, 373, '264b67cl10', '10 ent', '', '', '3c-52-82-57-A2-85', 'Czc74692H3', '', '', '', '', '', '', 0, 0, '', ''),
(223, 374, '264b67cl11', '10 ent', '', '', '3c-52-82-54-AF-4D', 'Czc746922J', '', '', '', '', '', 'ground', 0, 0, '', ''),
(224, 375, '264b67cl12', '10 ent', '', '', '', 'Czc746923N', '', '', '', '', '', 'DPP.3060G4', 0, 0, '', ''),
(225, 376, '264b67cl13', '10 ent', '', '', '3c-52-82-57-a3-b8', 'Czc746926z', '', '', '', '', '', 'DPP3.3118 F3', 0, 0, '', ''),
(226, 377, '264b67cl14', '10 ent', '', '', 'E4-42-A6-AF-BF-EF', 'Czc74692K1', '', '', '', '', '', 'ground', 0, 0, '', ''),
(227, 378, '264b67cl15', '10 ent', '', '', '3c-52-82-54-3b-25', 'Czc746924c', '', '', '', '', '', 'ground', 0, 0, '', ''),
(228, 379, '264b67cl16', '10 ent', '', '', '3c-52-82-53-fe-ef', 'Czc746922h', '', '', '', '', '', '', 0, 0, '', ''),
(229, 380, '264b67cl17', '10 ent', '', '', '', 'Czc746925Q', '', '', '', '', '', 'ground', 0, 0, '', ''),
(230, 381, '264b67cl18', '10 ent', '', '', '3C-52-82-54-3B-22', 'CZC746924T', '', '', '', '', '', 'ground', 0, 0, '', ''),
(231, 382, '264b67cl19', '10 ent', '', '', '3C-52-82-57-A2-3C', 'CZC7469257', '', '', '', '', '', 'ground', 0, 0, '', ''),
(232, 383, '264b67cl20', '10 ent', '', '', '3C-52-82-54-3A-B2', 'CZC7469219', '', '', '', '', '', 'ground', 0, 0, '', ''),
(233, 384, '264b67cl21', '10 ent', '', '', '3C-52-82-53-FE-8A', 'CZC746925H', '', '', '', '', '', 'ground', 0, 0, '', ''),
(234, 385, '264b67cl22', '10 ent', '', '', '3C-52-82-57-A3-A3', 'CZC74692CK', '', '', '', '', '', 'ground', 0, 0, '', ''),
(235, 386, '264b67cl23', '10 ent', '', '', '3C-52-82-4F-33-D4', 'CZC7469255', '', '', '', '', '', 'ground', 0, 0, '', ''),
(236, 387, '264b67cl24', '10 ent', '', '', '3C-52-82-57-A2-E8', 'CZC74692F7', '', '', '', '', '', 'DPP2.3066 F4', 0, 0, '', ''),
(237, 388, '264b67cl25', '10 ent', '', '', '3C-52-82-54-B0-76', 'CZC7469283', '', '', '', '', '', 'ground', 0, 0, '', ''),
(238, 389, '264b67cl26', '10 ent', '', '', '3C-52-82-54-3B-7F', 'CZC746926H', '', '', '', '', '', 'ground', 0, 0, '', ''),
(239, 390, '264b67cl27', '10 ent', '', '', '3C-52-82-53-FF-32', 'CZC746927M', '', '', '', '', '', 'DPP3.3116 S3', 0, 0, '', ''),
(240, 391, '264b67cl28', '10 ent', '', '', '3C-52-82-57-A1-FE', 'CZC7469268', '', '', '', '', '', 'DPP3.3116 S3', 0, 0, '', ''),
(241, 392, '264b67cl29', '10 ent', '', '', '3C-52-82-57-A1-17', 'CZC746923K', '', '', '', '', '', 'ground', 0, 0, '', ''),
(242, 393, '264b67cl30', '10 ent', '', '', '3C-52-82-54-3C-E4', 'CZC746926T', '', '', '', '', '', '', 0, 0, '', ''),
(243, 394, '264b67cl31', '10 ent', '', '', '3C-52-82-54-AA-98', 'CZC7469270', '', '', '', '', '', 'ground', 0, 0, '', ''),
(244, 395, '264b67cl32', '10 ent', '', '', '3C-52-82-53-FF-2A', 'CZC7469216', '', '', '', '', '', 'ground', 0, 0, '', ''),
(245, 396, '264b67cl33', '10 ent', '', '', '3C-52-82-54-3B-4B', 'CZC746925C', '', '', '', '', '', 'ground', 0, 0, '', ''),
(246, 397, '264b67cl34', '10 ent', '', '', '3C-52-82-57-A2-2D', 'CZC746920L', '', '', '', '', '', 'ground', 0, 0, '', ''),
(247, 398, '264b67cl35', '10 ent', '', '', '3C-52-82-53-FF-1C', 'CZC7469273', '', '', '', '', '', 'ground', 0, 0, '', ''),
(248, 399, '264b67cl36', '10 ent', '', '', '3C-52-82-57-A1-F6', 'CZC746922L', '', '', '', '', '', 'ground', 0, 0, '', ''),
(249, 400, '264b67cl37', '10 ent', '', '', '3C-52-82-54-9A-15', 'CZC746929P', '', '', '', '', '', 'ground', 0, 0, '', ''),
(250, 401, '264b67cl38', '10 ent', '', '', '3C-52-82-57-A2-26', 'CZC7469202', '', '', '', '', '', 'ground', 0, 0, '', ''),
(251, 402, '264b67cl39', '10 ent', '', '', '3C-52-82-57-A2-19', 'CZC7469264', '', '', '', '', '', 'DPP2.3066 S2', 0, 0, '', ''),
(252, 403, '264b67cl40', '10 ent', '', '', '82-54 - B0 - 6F', 'CZC746923X', '', '', '', '', '', 'ground', 0, 0, '', ''),
(253, 404, '264b67cl41', '10 ent', '', '', '3C - 52 - 82 - 53-FF-48', 'CZC7469261', '', '', '', '', '', 'ground', 0, 0, '', ''),
(254, 405, '264b67cl42', '10 ent', '', '', '', 'CZC746922M', '', '', '', '', '', 'ground', 0, 0, '', ''),
(255, 406, '264b67cl43', '10 ent', '', '', '', 'CZC746923T', '', '', '', '', '', 'ground', 0, 0, '', ''),
(256, 407, '264b67cl44', '10 ent', '', '', '3C - 52 - 82 - 54-B1-83', 'CZC74692D1', '', '', '', '', '', 'ground', 0, 0, '', ''),
(257, 408, '264b67cl45', '10 ent', '', '', '3C-52-82-4F-32-A7', 'CZC746924N', '', '', '', '', '', 'ground', 0, 0, '', ''),
(258, 409, '264b67cl46', '10 ent', '', '', '3C-52-82-53-FF-3C', 'CZC7469206', '', '', '', '', '', 'ground', 0, 0, '', ''),
(259, 410, '264b67cl47', '10 ent', '', '', '3C-52-82-53- FF-4A', 'CZC7469276', '', '', '', '', '', 'ground', 0, 0, '', ''),
(260, 411, '264b67cl48', '10 ent', '', '', '3C-52-82-54-3B-O2', 'CZC7469227', '', '', '', '', '', '', 0, 0, '', ''),
(261, 412, '264b67cl49', '10 ent', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(262, 413, '264b67cl50', '10 ent', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(263, 414, '264b67cl51', '10 ent', '', '', '3C-52-82-53-FF-4B', 'CZC746925P', '', '', '', '', '', 'ground', 0, 0, '', ''),
(264, 415, '264b67cl52', '10 ent', '', '', '', 'CZC7469297', '', '', '', '', '', 'ground', 0, 0, '', ''),
(265, 416, '264b67cl53', '10 ent', '', '', '3C-52-82-57-A1-67', 'CZC74692GR', '', '', '', '', '', 'ground', 0, 0, '', ''),
(266, 417, '264b67cl54', '10 ent', '', '', '3C-52-82-57-A0-9C', 'CZC7469298', '', '', '', '', '', 'DPP2 3066', 0, 0, '', ''),
(267, 458, 'cl12', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(268, 459, 'cl4', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(269, 461, 'cl6', '7 Pro', '32', '4GB', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(270, 464, 'cl5', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(271, 465, 'cl9', '7 Ent', '32', '4GB', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(272, 466, 'cl8', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(273, 467, 'cl7', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(274, 469, 'cl10', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 1, 0, '', ''),
(275, 470, 'cl11', '7Pro', '32', '4G', '', '', 'dell', '960', 'hitachi', 'H4015', '', '', 0, 0, '', ''),
(276, 486, '717B431CL1', 'win 8', '', '', '50-65-F3-26-1B-C6', 'TRF54402MP', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-33/2', 0, 0, '', ''),
(277, 487, '717B431CL2', 'win 8', '', '', '50-65-F3-27-C3-E8', 'TRF54402P9', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-19/2', 0, 0, '', ''),
(278, 488, '717B431CL3', 'win7', '', '', '50-65-F3-22-AC-55', 'TRF54402RF', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-04/2', 0, 0, '', ''),
(279, 489, '717B431CL4', 'win 8', '', '', '50-65-F3-27-C3-94', 'TRF544023C', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D01/1', 0, 0, '', ''),
(280, 490, '717B431CL5', 'win 8', '', '', 'EC-B1-D7-60-6F-FF', 'TRF544028S', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D12/1', 0, 0, '', ''),
(281, 491, '717B431CL6', 'win 8', '', '', 'EC-B1-D7-60-24-61', 'TRF544024D', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D97/1', 0, 0, '', ''),
(282, 492, '249B431Cl1', 'win 8', '', '', 'EC-B1-D7-60-6F-F3', 'TRF544028L', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-93/4', 0, 0, '', ''),
(283, 493, '249B431Cl2', '....', '', '', '50-65-F3-24-A2-4E', 'TRF54402PC', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D103/4', 0, 0, '', ''),
(284, 494, '249B431Cl11', 'win 8', '', '', '50-65-F3-26-1B-B9', 'TRF54402PH', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-158/3', 0, 0, '', ''),
(285, 495, '249B431Cl3', 'win 8', '', '', 'EC-B1-D7-60-70-06', 'TRF544027Q', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-104/3', 0, 0, '', ''),
(286, 496, '249B431Cl4', 'win 8', '', '', 'EC-B1-D7-60-70-01', 'TRF54400HC', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-94/3', 0, 0, '', ''),
(287, 497, '249B431Cl5', 'win 8', '', '', '50-65-F3-26-1B-FD', 'TRF54402SC', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D200/3', 0, 0, '', ''),
(288, 498, '249B431Cl6', 'win 8', '', '', '50-65-F3-26-1A-AD', 'TRF54402Y4', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-87/3', 0, 0, '', ''),
(289, 499, '249B431Cl7', 'win 8', '', '', 'EC-B1-D7-60-24-37', 'TRF544024S', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-76/3', 0, 0, '', ''),
(290, 500, '249B431Cl8', 'win 8', '', '', '50-65-F3-27-C3-F6', 'TRF54402N4', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-69/3', 0, 0, '', ''),
(291, 501, '249B431Cl9', 'win 8', '', '', '50-65-F3-27-C4-04', 'TRF54402NB', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-04/3', 0, 0, '', ''),
(292, 502, '249B431CL10', 'win 8', '', '', '50-65-F3-22-84-05', 'TRF5440279', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-03/4', 0, 0, '', ''),
(293, 503, ' 290B431Cl3', 'win 8', '', '', '50-65-F3-27-C9-46', 'TRF545017F', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-37/6', 0, 0, '', ''),
(294, 504, ' 290B431Cl4', 'win 8', '', '', 'EC-B1-D7-60-6F-FE', 'TRF544027G', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-47/6', 0, 0, '', ''),
(295, 505, '290B431Cl6', 'win 8', '', '', '50-65-F3-22-84-10', 'TRF54400G8', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-59/6', 0, 0, '', ''),
(296, 506, '290B431Cl7', 'win 8', '', '', 'EC-B1-D7-60-24-59', 'TRF5440262', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D55/5', 0, 0, '', ''),
(297, 507, '290B431Cl8', 'win 8', '', '', '50-65-F3-22-AC-18', 'TRF54402RX', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D49/5', 0, 0, '', ''),
(298, 508, '290B431Cl9', 'win 8', '', '', '50-65-F3-22-AB-FF', 'TRF544022Y', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D47/5', 0, 0, '', ''),
(299, 509, '290B431Cl10', 'win 7', '', '', 'EC-B1-D7-60-6F-F6', 'TRF54400G1', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D37/5', 0, 0, '', ''),
(300, 510, '290B431Cl11', 'win 8', '', '', '50-65-F3-22-AC-32', 'TRF54402QQ', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D35/5', 0, 0, '', ''),
(301, 511, '290B431Cl12', 'win 8', '', '', '50-65-F3-27-C3-F7', 'TRF54402N2', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D25/5', 0, 0, '', ''),
(302, 512, '290B431Cl13', 'win 8', '', '', 'EC-B1-D7-60-6F-A6', 'TRF5440286', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D23/5', 0, 0, '', ''),
(303, 513, '290B431Cl15', 'win 7', '', '', 'EC-B1-D7-60-70-2B', 'TRF54400GG', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D11/5', 0, 0, '', ''),
(304, 514, '290B431Cl17', 'win 8', '', '', '50-65-F3-22-83-F1', 'TRF54400H8', 'HP', 'EilteDesk\n800 GT TWR', 'SONEY', '', '', 'D-01/6', 0, 0, '', ''),
(305, 515, '290B431CL20', 'win 8', '', '', 'EC-B1-D7-5E-F7-BE', 'TRF5440250', 'HP', 'EilteDesk \n800 GT TWR', 'SONEY', '', '', 'D-20/6', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_type`
--

CREATE TABLE `maintenance_type` (
  `maintenace_pk` int(11) NOT NULL,
  `device_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maintenance_type` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maintenance_type`
--

INSERT INTO `maintenance_type` (`maintenace_pk`, `device_type`, `maintenance_type`) VALUES
(1, 'computer', 'fix projector control software'),
(2, 'computer', 'fix antivirus software'),
(3, 'computer', 'fix Micrsoft office sofware'),
(4, 'computer', 'system update'),
(5, 'video spliter', 'change spliter'),
(6, 'projector', 'change projector'),
(7, 'adaptor', 'change cable'),
(8, 'computer', 'change network cable'),
(9, 'computer', 'change pc'),
(10, 'projector', 'change projector lamp'),
(11, 'computer', 'change monitor'),
(12, 'projector', 'clean projector filter'),
(13, 'computer', 'change computer accessories'),
(14, 'computer', 'fix comoputer inside workshop'),
(15, 'electronic screen', 'fix electronic screen'),
(16, 'computer', 'fix network faults'),
(17, 'video spliter', 'spliter/cable maintenance'),
(18, 'projector', 'projector maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `malfunction`
--

CREATE TABLE `malfunction` (
  `malfunction_pk` int(11) NOT NULL,
  `device_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maintenace_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `malfunctionType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `building_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `class_num` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `executing_agency` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status_of_malfunction` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `malfunction_date` date NOT NULL,
  `date_of_maintenance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malfunctiontypes`
--

CREATE TABLE `malfunctiontypes` (
  `malfunctionType_pk` int(11) NOT NULL,
  `device_type` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `malfunction` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `malfunctiontypes`
--

INSERT INTO `malfunctiontypes` (`malfunctionType_pk`, `device_type`, `malfunction`) VALUES
(1, 'projector', 'pasted/lamp'),
(2, 'projector', 'projector is not conneted in computer '),
(3, 'projector', 'clear prejector filter'),
(4, 'computer', 'missing windows files'),
(5, 'projector', 'no input is detected in projector');

-- --------------------------------------------------------

--
-- Table structure for table `round`
--

CREATE TABLE `round` (
  `round_pk` int(11) NOT NULL,
  `building_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class_num` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `computer` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `monitor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `muse` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `keyboard` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `network` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `antivirus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `computer_note` text COLLATE utf8_unicode_ci NOT NULL,
  `video_spliter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `video_spliter_note` text COLLATE utf8_unicode_ci NOT NULL,
  `projector_control_app` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vga_cable` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vga_port` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lamp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `filter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `projector_note` text COLLATE utf8_unicode_ci NOT NULL,
  `electronic_screen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `electronic_screen_note` text COLLATE utf8_unicode_ci NOT NULL,
  `smart_board` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `smart_board_note` text COLLATE utf8_unicode_ci NOT NULL,
  `tv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tvnote` text COLLATE utf8_unicode_ci NOT NULL,
  `adapter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adnote` text COLLATE utf8_unicode_ci NOT NULL,
  `data_of_visit` date NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` int(15) NOT NULL,
  `user_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `RPass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `phone_no`, `user_type`, `password`, `RPass`) VALUES
('00013338', 'Amnah Barri', 'abarri@kau.edu.sa', 73860, 'Administrator', '00013338', ''),
('00016020', 'Badriah Al-khalifi', 'balkhelaifi@kau.edu.sa', 41648, 'viewr', '00016020', ''),
('00020265', 'Amal Bukhari', 'aabokhari@kau.edu.sa', 41642, 'viewr', '00020265', ''),
('00020328', 'Eman Habeeb', 'ehabeeb@kau.edu.sa', 41652, 'Tech. Assistant', '00020328', ''),
('00020646', 'Hanan Al-zahrani', 'haalzahrani6@kau.edu.sa', 27599, 'Technician', '00020646', ''),
('00021574', 'Ola Turabah', 'otorabah@kau.edu.sa', 27600, 'Technician', '00021574', ''),
('00022479', 'Norah Al-zahrani', 'naalzhrani@kau.edu.sa', 27630, 'Technician', '00022479', ''),
('00096122', 'Soha Al-selimani', 'salsalimani@kau.edu.sa', 41876, 'Tech. Assistant', '00096122', ''),
('07778795', 'Ayat Break', 'amabraik@kau.edu.sa', 41640, 'Technician', '07778795', ''),
('07778796', 'Laila Al-meteri', 'lbalmataryh@kau.edu.sa', 41646, 'Tech. Assistant', '07778796', '');

-- --------------------------------------------------------

--
-- Table structure for table `userandbuilding`
--

CREATE TABLE `userandbuilding` (
  `userAndBuilding_pk` int(11) NOT NULL,
  `building_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userandbuilding`
--

INSERT INTO `userandbuilding` (`userAndBuilding_pk`, `building_name`, `user_id`, `start_date`, `end_date`) VALUES
(1, 'B7new', '00020328', '0000-00-00', '2020-10-10'),
(2, 'B8', '00020328', '0000-00-00', '2020-10-10'),
(3, 'B10', '00020328', '0000-00-00', '2020-10-10'),
(4, 'B32', '00020328', '0000-00-00', '2020-10-10'),
(5, 'B63', '00020328', '0000-00-00', '2020-10-10'),
(6, 'wmc2', '00020328', '0000-00-00', '2020-10-10'),
(7, 'wmc5', '00020328', '0000-00-00', '2020-10-10'),
(8, 'wmc6', '00020328', '0000-00-00', '2020-10-10'),
(9, 'wmc8', '00020328', '0000-00-00', '2020-10-10'),
(10, 'wmc11', '00020328', '0000-00-00', '2020-10-10'),
(11, 'B4', '00021574', '0000-00-00', '2020-10-10'),
(12, 'B5', '00021574', '0000-00-00', '2020-10-10'),
(13, 'B12', '00021574', '0000-00-00', '2020-10-10'),
(14, 'B41', '00021574', '0000-00-00', '2020-10-10'),
(15, 'B42', '00021574', '0000-00-00', '2020-10-10'),
(16, 'B43', '00021574', '0000-00-00', '2020-10-10'),
(17, 'B3', '00021574', '0000-00-00', '2020-10-10'),
(18, 'wmc7', '00021574', '0000-00-00', '2020-10-10'),
(19, 'wmc12', '00021574', '0000-00-00', '2020-10-10'),
(20, 'wmc13', '00021574', '0000-00-00', '2020-10-10'),
(21, 'wmc431', '00021574', '0000-00-00', '2020-10-10'),
(22, 'B9', '00022479', '0000-00-00', '2020-10-10'),
(23, 'B7new', '00020646', '0000-00-00', '2020-10-10'),
(24, 'B8', '00020646', '0000-00-00', '2020-10-10'),
(25, 'B10', '00020646', '0000-00-00', '2020-10-10'),
(26, 'B32', '00020646', '0000-00-00', '2020-10-10'),
(27, 'B63', '00020646', '0000-00-00', '2020-10-10'),
(28, 'wmc2', '00020646', '0000-00-00', '2020-10-10'),
(29, 'wmc5', '00020646', '0000-00-00', '2020-10-10'),
(30, 'wmc6', '00020646', '0000-00-00', '2020-10-10'),
(31, 'wmc8', '00020646', '0000-00-00', '2020-10-10'),
(32, 'wmc11', '00020646', '0000-00-00', '2020-10-10'),
(33, 'B7old', '07778795', '0000-00-00', '2020-10-10'),
(34, 'B420', '07778795', '0000-00-00', '2020-10-10'),
(35, 'B67', '07778795', '0000-00-00', '2020-10-10'),
(36, 'wmc9', '07778795', '0000-00-00', '2020-10-10'),
(37, 'wmc10', '07778795', '0000-00-00', '2020-10-10'),
(38, 'wmc431', '07778795', '0000-00-00', '2020-10-10'),
(39, 'B7old', '07778796', '0000-00-00', '2020-10-10'),
(40, 'B420', '07778796', '0000-00-00', '2020-10-10'),
(41, 'B67', '07778796', '0000-00-00', '2020-10-10'),
(42, 'wmc9', '07778796', '0000-00-00', '2020-10-10'),
(43, 'wmc10', '07778796', '0000-00-00', '2020-10-10'),
(44, 'wmc431', '07778796', '0000-00-00', '2020-10-10'),
(45, 'B4', '00096122', '0000-00-00', '2020-10-10'),
(46, 'B5', '00096122', '0000-00-00', '2020-10-10'),
(47, 'B12', '00096122', '0000-00-00', '2020-10-10'),
(48, 'B41', '00096122', '0000-00-00', '2020-10-10'),
(49, 'B42', '00096122', '0000-00-00', '2020-10-10'),
(50, 'B43', '00096122', '0000-00-00', '2020-10-10'),
(51, 'B3', '00096122', '0000-00-00', '2020-10-10'),
(52, 'wmc7', '00096122', '0000-00-00', '2020-10-10'),
(53, 'wmc12', '00096122', '0000-00-00', '2020-10-10'),
(54, 'wmc13', '00096122', '0000-00-00', '2020-10-10'),
(55, 'wmc431', '00096122', '0000-00-00', '2020-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archived_device`
--
ALTER TABLE `archived_device`
  ADD PRIMARY KEY (`device_pk`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_name`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_pk`),
  ADD KEY `class_ibfk_1` (`building_name`);

--
-- Indexes for table `deviceinclass`
--
ALTER TABLE `deviceinclass`
  ADD PRIMARY KEY (`device_pk`),
  ADD KEY `device_pk` (`device_pk`),
  ADD KEY `deviceinclass_ibfk_1` (`class_pk`);

--
-- Indexes for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  ADD PRIMARY KEY (`maintenace_pk`),
  ADD KEY `maintenace_pk` (`maintenace_pk`);

--
-- Indexes for table `malfunction`
--
ALTER TABLE `malfunction`
  ADD PRIMARY KEY (`malfunction_pk`),
  ADD KEY `malfunction_pk` (`malfunction_pk`),
  ADD KEY `building_name` (`building_name`);

--
-- Indexes for table `malfunctiontypes`
--
ALTER TABLE `malfunctiontypes`
  ADD PRIMARY KEY (`malfunctionType_pk`),
  ADD KEY `malfunctionType_pk` (`malfunctionType_pk`);

--
-- Indexes for table `round`
--
ALTER TABLE `round`
  ADD PRIMARY KEY (`round_pk`),
  ADD KEY `round_pk` (`round_pk`),
  ADD KEY `building_name` (`building_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `userandbuilding`
--
ALTER TABLE `userandbuilding`
  ADD PRIMARY KEY (`userAndBuilding_pk`),
  ADD KEY `userandbuilding_ibfk_1` (`building_name`),
  ADD KEY `userandbuilding_ibfk_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `deviceinclass`
--
ALTER TABLE `deviceinclass`
  MODIFY `device_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  MODIFY `maintenace_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `malfunction`
--
ALTER TABLE `malfunction`
  MODIFY `malfunction_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malfunctiontypes`
--
ALTER TABLE `malfunctiontypes`
  MODIFY `malfunctionType_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `round`
--
ALTER TABLE `round`
  MODIFY `round_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userandbuilding`
--
ALTER TABLE `userandbuilding`
  MODIFY `userAndBuilding_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`building_name`) REFERENCES `building` (`building_name`) ON DELETE CASCADE;

--
-- Constraints for table `deviceinclass`
--
ALTER TABLE `deviceinclass`
  ADD CONSTRAINT `deviceinclass_ibfk_1` FOREIGN KEY (`class_pk`) REFERENCES `class` (`class_pk`) ON DELETE CASCADE;

--
-- Constraints for table `malfunction`
--
ALTER TABLE `malfunction`
  ADD CONSTRAINT `malfunction_ibfk_5` FOREIGN KEY (`building_name`) REFERENCES `building` (`building_name`);

--
-- Constraints for table `round`
--
ALTER TABLE `round`
  ADD CONSTRAINT `round_ibfk_1` FOREIGN KEY (`building_name`) REFERENCES `building` (`building_name`);

--
-- Constraints for table `userandbuilding`
--
ALTER TABLE `userandbuilding`
  ADD CONSTRAINT `userandbuilding_ibfk_1` FOREIGN KEY (`building_name`) REFERENCES `building` (`building_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `userandbuilding_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
