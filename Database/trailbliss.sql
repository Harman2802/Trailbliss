-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2025 at 04:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trailbliss`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `from_city` varchar(100) NOT NULL,
  `to_city` varchar(100) NOT NULL,
  `travel_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `passenger_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT 'Pending',
  `booking_status` varchar(20) DEFAULT 'Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `type`, `from_city`, `to_city`, `travel_date`, `price`, `user_id`, `booked_at`, `passenger_name`, `phone`, `email`, `payment_status`, `booking_status`) VALUES
(56, 'flight', 'delhi', 'goa', '2025-12-29', 411, 0, '2025-12-26 15:58:09', 'User', '1231231234', 'akky8198@gmail.com', 'Cash', 'Confirmed'),
(57, 'flight', 'delhi', 'kerala', '2026-01-09', 3535, 0, '2025-12-29 14:01:15', 'divu', '83848885888', 'div20102003@gmail.com', 'Cash', 'Confirmed'),
(58, 'flight', 'delhi', 'kerala', '2026-01-09', 5745, 0, '2025-12-29 15:02:21', 'divu', '83848885888', 'div20102003@gmail.com', 'Cash', 'Confirmed'),
(59, 'bus', 'delhi', 'kerala', '2026-01-09', 5272, 0, '2025-12-29 18:05:17', 'divu', '83848885888', 'div20102003@gmail.com', 'Cash', 'Cancelled'),
(60, 'train', 'delhi', 'kerala', '2026-01-08', 6460, 0, '2025-12-29 18:10:37', 'divu', '83848885888', 'div20102003@gmail.com', 'NetBanking', 'Confirmed'),
(61, 'train', 'delhi', 'kerala', '2026-01-08', 6460, 0, '2025-12-29 18:12:16', 'divu', '83848885888', 'div20102003@gmail.com', 'Cash', 'Confirmed'),
(62, 'train', 'delhi', 'kerala', '2026-01-08', 6460, 0, '2025-12-29 18:12:36', 'divu', '83848885888', 'div20102003@gmail.com', 'NetBanking', 'Confirmed'),
(63, 'bus', 'delhi', 'kerala', '2026-01-09', 1786, 0, '2025-12-30 03:29:54', 'divu', '83848885888', 'div20102003@gmail.com', 'Cash', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `from_city` varchar(50) DEFAULT NULL,
  `to_city` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `popularity_score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `from_city`, `to_city`, `travel_date`, `price`, `popularity_score`) VALUES
(1, 'Delhi', 'Agra', '2025-12-25', 500, 80),
(2, 'Agra', 'Delhi', '2025-12-25', 500, 75),
(3, 'Mumbai', 'Pune', '2025-12-26', 400, 70),
(4, 'Pune', 'Mumbai', '2025-12-26', 400, 65),
(5, 'Bangalore', 'Mysore', '2025-12-27', 350, 60),
(6, 'Mysore', 'Bangalore', '2025-12-27', 350, 55),
(7, 'Chennai', 'Pondicherry', '2025-12-28', 300, 50),
(8, 'Chennai', 'Patna', '2026-01-16', 299, 69),
(9, 'Bangalore', 'Dehradun', '2026-01-13', 497, 94),
(10, 'Bhubaneswar', 'Jaipur', '2026-01-18', 1369, 52),
(11, 'Trivandrum', 'Agra', '2025-12-31', 1861, 82),
(12, 'Kolkata', 'Delhi', '2026-01-12', 520, 82),
(13, 'Chennai', 'Trivandrum', '2026-01-12', 762, 54),
(14, 'Chandigarh', 'Delhi', '2026-01-15', 1110, 74),
(15, 'Mysore', 'Agra', '2026-01-03', 1530, 87),
(16, 'Delhi', 'Hyderabad', '2026-01-18', 873, 74),
(17, 'Varanasi', 'Trivandrum', '2026-01-11', 1531, 83),
(18, 'Mumbai', 'Chandigarh', '2026-01-18', 909, 64),
(19, 'Varanasi', 'Patna', '2025-12-24', 1616, 80),
(20, 'Mumbai', 'Ahmedabad', '2026-01-15', 1454, 66),
(21, 'Goa', 'Chandigarh', '2026-01-07', 1907, 94),
(22, 'Chennai', 'Bangalore', '2025-12-28', 323, 90),
(23, 'Hyderabad', 'Bhubaneswar', '2026-01-20', 1825, 79),
(24, 'Trivandrum', 'Goa', '2025-12-25', 1307, 79),
(25, 'Dehradun', 'Ahmedabad', '2026-01-05', 1333, 98),
(26, 'Bhubaneswar', 'Goa', '2026-01-11', 1949, 51),
(27, 'Patna', 'Goa', '2025-12-31', 570, 90),
(28, 'Coimbatore', 'Patna', '2026-01-08', 210, 80),
(29, 'Mumbai', 'Goa', '2025-12-27', 1604, 53),
(30, 'Bangalore', 'Trivandrum', '2026-01-07', 1519, 64),
(31, 'Dehradun', 'Goa', '2026-01-14', 460, 50),
(32, 'Trivandrum', 'Bhubaneswar', '2025-12-27', 973, 69),
(33, 'Mumbai', 'Chennai', '2026-01-10', 1559, 62),
(34, 'Kolkata', 'Pune', '2026-01-12', 1820, 78),
(35, 'Lucknow', 'Coimbatore', '2026-01-02', 1629, 94),
(36, 'Pune', 'Mumbai', '2026-01-19', 211, 69),
(37, 'Patna', 'Jaipur', '2026-01-03', 280, 68),
(38, 'Chennai', 'Varanasi', '2025-12-24', 942, 66),
(39, 'Goa', 'Bangalore', '2026-01-19', 613, 81),
(40, 'Patna', 'Delhi', '2025-12-22', 230, 77),
(41, 'Pune', 'Mysore', '2026-01-19', 1382, 93),
(42, 'Goa', 'Bangalore', '2025-12-26', 1244, 97),
(43, 'Trivandrum', 'Kolkata', '2026-01-17', 449, 92),
(44, 'Hyderabad', 'Dehradun', '2025-12-26', 1923, 97),
(45, 'Bangalore', 'Dehradun', '2026-01-19', 924, 57),
(46, 'Delhi', 'Pune', '2026-01-13', 1531, 92),
(47, 'Chennai', 'Mysore', '2025-12-22', 262, 62),
(48, 'Varanasi', 'Ahmedabad', '2026-01-15', 584, 73),
(49, 'Goa', 'Coimbatore', '2026-01-16', 211, 64),
(50, 'Mysore', 'Pune', '2025-12-22', 869, 79),
(51, 'Mysore', 'Dehradun', '2026-01-16', 424, 64),
(52, 'Bhubaneswar', 'Dehradun', '2026-01-05', 1650, 86),
(53, 'Coimbatore', 'Mysore', '2026-01-10', 1737, 79),
(54, 'Mysore', 'Dehradun', '2026-01-15', 1141, 77),
(55, 'Bhubaneswar', 'Trivandrum', '2025-12-30', 1335, 97),
(56, 'Mumbai', 'Varanasi', '2025-12-22', 1900, 71),
(57, 'Jaipur', 'Mysore', '2025-12-23', 1932, 62),
(58, 'Kolkata', 'Patna', '2026-01-15', 1900, 54),
(59, 'Pune', 'Patna', '2026-01-13', 741, 51),
(60, 'Mumbai', 'Lucknow', '2026-01-14', 1348, 95),
(61, 'Lucknow', 'Ahmedabad', '2025-12-24', 1534, 84),
(62, 'Goa', 'Kolkata', '2025-12-26', 1453, 58),
(63, 'Ahmedabad', 'Goa', '2026-01-09', 1334, 62),
(64, 'Goa', 'Varanasi', '2026-01-12', 495, 72),
(65, 'Kolkata', 'Delhi', '2026-01-15', 587, 52),
(66, 'Jaipur', 'Delhi', '2025-12-25', 1417, 74),
(67, 'Varanasi', 'Chennai', '2026-01-19', 1477, 83),
(68, 'Delhi', 'Varanasi', '2026-01-13', 1414, 96),
(69, 'Patna', 'Bangalore', '2025-12-29', 415, 61),
(70, 'Patna', 'Hyderabad', '2025-12-31', 1899, 91),
(71, 'Hyderabad', 'Delhi', '2026-01-12', 1903, 84),
(72, 'Bhubaneswar', 'Mysore', '2026-01-11', 655, 91),
(73, 'Jaipur', 'Varanasi', '2025-12-31', 732, 63),
(74, 'Jaipur', 'Varanasi', '2025-12-31', 1509, 66),
(75, 'Patna', 'Dehradun', '2025-12-23', 982, 90),
(76, 'Bhubaneswar', 'Kolkata', '2026-01-06', 1344, 64),
(77, 'Bangalore', 'Mysore', '2025-12-29', 1744, 58),
(78, 'Ahmedabad', 'Varanasi', '2026-01-15', 1339, 72),
(79, 'Mumbai', 'Ahmedabad', '2026-01-03', 707, 62),
(80, 'Trivandrum', 'Patna', '2026-01-10', 1895, 100),
(81, 'Patna', 'Trivandrum', '2026-01-15', 1320, 70),
(82, 'Dehradun', 'Bangalore', '2025-12-31', 1366, 73),
(83, 'Trivandrum', 'Mysore', '2026-01-12', 667, 100),
(84, 'Hyderabad', 'Dehradun', '2026-01-09', 938, 62),
(85, 'Trivandrum', 'Agra', '2026-01-05', 872, 91),
(86, 'Lucknow', 'Trivandrum', '2026-01-08', 1571, 66),
(87, 'Kolkata', 'Goa', '2025-12-23', 999, 92),
(88, 'Ahmedabad', 'Lucknow', '2026-01-01', 541, 77),
(89, 'Chandigarh', 'Bhubaneswar', '2026-01-14', 917, 93),
(90, 'Dehradun', 'Bhubaneswar', '2025-12-22', 355, 78),
(91, 'Patna', 'Pune', '2025-12-22', 1698, 54),
(92, 'Lucknow', 'Bhubaneswar', '2026-01-12', 1910, 85),
(93, 'Chennai', 'Varanasi', '2025-12-22', 1327, 57),
(94, 'Delhi', 'Chandigarh', '2026-01-12', 1930, 69),
(95, 'Patna', 'Lucknow', '2026-01-17', 1467, 52),
(96, 'Pune', 'Varanasi', '2026-01-01', 202, 71),
(97, 'Coimbatore', 'Agra', '2026-01-09', 1824, 58),
(98, 'Lucknow', 'Coimbatore', '2026-01-12', 1615, 68),
(99, 'Kolkata', 'Dehradun', '2025-12-22', 1206, 51),
(100, 'Agra', 'Varanasi', '2026-01-11', 228, 56),
(101, 'Varanasi', 'Trivandrum', '2026-01-10', 1443, 53),
(102, 'Bangalore', 'Lucknow', '2026-01-14', 1287, 57),
(103, 'Chandigarh', 'Bangalore', '2025-12-29', 1232, 93),
(104, 'Jaipur', 'Bhubaneswar', '2026-01-02', 452, 83),
(105, 'Bangalore', 'Jaipur', '2026-01-05', 1893, 70),
(106, 'Delhi', 'Ahmedabad', '2025-12-23', 927, 91),
(107, 'Agra', 'Goa', '2026-01-02', 1683, 91),
(108, 'Dehradun', 'Bhubaneswar', '2026-01-10', 1297, 67),
(109, 'Dehradun', 'Hyderabad', '2026-01-02', 1763, 77),
(110, 'Delhi', 'Kolkata', '2026-01-20', 1268, 91),
(111, 'Dehradun', 'Chennai', '2025-12-28', 1607, 100),
(112, 'Bhubaneswar', 'Trivandrum', '2025-12-27', 1151, 89),
(113, 'Bhubaneswar', 'Dehradun', '2025-12-30', 1789, 73),
(114, 'Delhi', 'Chandigarh', '2026-01-03', 1413, 84),
(115, 'Kolkata', 'Pune', '2026-01-15', 436, 63),
(116, 'Chennai', 'Goa', '2025-12-24', 384, 99),
(117, 'Kolkata', 'Mumbai', '2026-01-02', 1093, 98),
(118, 'Agra', 'Hyderabad', '2026-01-01', 419, 55),
(119, 'Coimbatore', 'Trivandrum', '2026-01-10', 411, 57),
(120, 'Bangalore', 'Goa', '2026-01-19', 465, 82),
(121, 'Chennai', 'Dehradun', '2025-12-29', 692, 68),
(122, 'Varanasi', 'Goa', '2025-12-27', 1215, 99),
(123, 'Mumbai', 'Lucknow', '2026-01-09', 1478, 72),
(124, 'Lucknow', 'Bangalore', '2026-01-14', 317, 67),
(125, 'Varanasi', 'Trivandrum', '2025-12-26', 229, 81),
(126, 'Kolkata', 'Dehradun', '2025-12-28', 558, 90),
(127, 'Varanasi', 'Ahmedabad', '2025-12-27', 521, 59),
(128, 'Ahmedabad', 'Lucknow', '2026-01-03', 422, 51),
(129, 'Mysore', 'Mumbai', '2025-12-29', 437, 74),
(130, 'Patna', 'Varanasi', '2025-12-28', 1112, 68),
(131, 'Trivandrum', 'Goa', '2026-01-11', 1512, 93),
(132, 'Jaipur', 'Lucknow', '2025-12-23', 1827, 51),
(133, 'Dehradun', 'Bangalore', '2025-12-27', 492, 90),
(134, 'Goa', 'Pune', '2026-01-15', 1804, 99),
(135, 'Coimbatore', 'Jaipur', '2026-01-20', 272, 54),
(136, 'Chandigarh', 'Coimbatore', '2025-12-23', 750, 67),
(137, 'Trivandrum', 'Chennai', '2026-01-06', 1307, 52),
(138, 'Ahmedabad', 'Mumbai', '2025-12-26', 1279, 66),
(139, 'Pune', 'Ahmedabad', '2026-01-02', 953, 79),
(140, 'Ahmedabad', 'Delhi', '2025-12-26', 1667, 56),
(141, 'Coimbatore', 'Mysore', '2026-01-03', 1669, 56),
(142, 'Bangalore', 'Pune', '2025-12-25', 1298, 88),
(143, 'Goa', 'Bangalore', '2026-01-14', 1801, 54),
(144, 'Agra', 'Pune', '2025-12-31', 1442, 63),
(145, 'Ahmedabad', 'Jaipur', '2026-01-11', 1518, 93),
(146, 'Chandigarh', 'Kolkata', '2026-01-11', 853, 71),
(147, 'Bhubaneswar', 'Delhi', '2025-12-25', 1256, 96),
(148, 'Varanasi', 'Chandigarh', '2026-01-17', 1757, 81),
(149, 'Patna', 'Varanasi', '2026-01-17', 1099, 75),
(150, 'Ahmedabad', 'Kolkata', '2026-01-18', 1321, 54),
(151, 'Pune', 'Trivandrum', '2025-12-30', 1691, 60),
(152, 'Patna', 'Varanasi', '2025-12-23', 688, 86),
(153, 'Agra', 'Jaipur', '2026-01-02', 1238, 95),
(154, 'Mumbai', 'Hyderabad', '2026-01-09', 1677, 73),
(155, 'Lucknow', 'Hyderabad', '2025-12-22', 1515, 65),
(156, 'Lucknow', 'Ahmedabad', '2026-01-20', 1843, 87),
(157, 'Mumbai', 'Mysore', '2026-01-07', 558, 78),
(158, 'Chandigarh', 'Amritsar', '2025-12-25', 800, 0),
(159, 'Ludhiana', 'Jalandhar', '2025-12-25', 400, 0),
(160, 'Delhi', 'Jaipur', '2025-12-26', 700, 0),
(161, 'Mumbai', 'Pune', '2025-12-26', 500, 0),
(162, 'Bangalore', 'Mysore', '2025-12-27', 600, 0),
(163, 'Goa', 'Pune', '2025-12-28', 900, 0),
(164, 'Chandigarh', 'Amritsar', '2025-12-25', 800, 0),
(165, 'Ludhiana', 'Jalandhar', '2025-12-25', 600, 0),
(166, 'Patiala', 'Chandigarh', '2025-12-25', 500, 0),
(167, 'Amritsar', 'Delhi', '2025-12-25', 1200, 0),
(168, 'Jalandhar', 'Chandigarh', '2025-12-25', 650, 0),
(169, 'Chandigarh', 'Amritsar', '2025-12-25', 800, 95),
(170, 'Ludhiana', 'Jalandhar', '2025-12-25', 600, 90),
(171, 'Patiala', 'Chandigarh', '2025-12-25', 500, 80),
(172, 'Amritsar', 'Delhi', '2025-12-25', 1200, 98),
(173, 'Jalandhar', 'Chandigarh', '2025-12-25', 650, 85),
(174, 'Mohali', 'Bathinda', '2025-12-25', 700, 87),
(175, 'Hoshiarpur', 'Patiala', '2025-12-25', 750, 83),
(176, 'Hyderabad', 'Delhi', '2026-01-07', 1542, 60),
(177, 'Lucknow', 'Delhi', '2026-01-20', 1816, 55),
(178, 'Dehradun', 'Jaipur', '2025-12-31', 1832, 51),
(179, 'Goa', 'Mysore', '2026-01-01', 595, 60),
(180, 'Patna', 'Pune', '2026-01-01', 689, 68),
(181, 'Agra', 'Bhubaneswar', '2026-01-12', 1803, 79),
(182, 'Bangalore', 'Coimbatore', '2026-01-02', 1320, 64),
(183, 'Bangalore', 'Varanasi', '2025-12-24', 1665, 91),
(184, 'Chennai', 'Goa', '2026-01-11', 979, 94),
(185, 'Mumbai', 'Chennai', '2026-01-09', 1286, 96),
(186, 'Dehradun', 'Bangalore', '2026-01-18', 408, 60),
(187, 'Patna', 'Ahmedabad', '2026-01-12', 674, 54),
(188, 'Varanasi', 'Goa', '2026-01-07', 628, 92),
(189, 'Agra', 'Patna', '2026-01-21', 429, 94),
(190, 'Chennai', 'Varanasi', '2026-01-09', 1546, 87),
(191, 'Bhubaneswar', 'Trivandrum', '2025-12-25', 318, 54),
(192, 'Mysore', 'Coimbatore', '2026-01-01', 836, 77),
(193, 'Varanasi', 'Delhi', '2026-01-06', 577, 71),
(194, 'Jaipur', 'Delhi', '2026-01-20', 763, 59),
(195, 'Mumbai', 'Lucknow', '2025-12-26', 289, 73),
(196, 'Coimbatore', 'Varanasi', '2026-01-16', 1977, 90),
(197, 'Chennai', 'Goa', '2026-01-08', 902, 52),
(198, 'Bangalore', 'Kolkata', '2025-12-23', 1162, 56),
(199, 'Bangalore', 'Goa', '2026-01-13', 1320, 92),
(200, 'Trivandrum', 'Bangalore', '2026-01-16', 1502, 69),
(201, 'Trivandrum', 'Coimbatore', '2026-01-07', 857, 61),
(202, 'Ahmedabad', 'Hyderabad', '2026-01-03', 286, 91),
(203, 'Kolkata', 'Jaipur', '2025-12-23', 1304, 72),
(204, 'Delhi', 'Varanasi', '2026-01-20', 1049, 72),
(205, 'Mumbai', 'Jaipur', '2026-01-04', 878, 58),
(206, 'Agra', 'Hyderabad', '2026-01-16', 1866, 79),
(207, 'Lucknow', 'Jaipur', '2026-01-07', 1202, 50),
(208, 'Mumbai', 'Pune', '2025-12-31', 1535, 67),
(209, 'Lucknow', 'Coimbatore', '2025-12-24', 243, 86),
(210, 'Lucknow', 'Mumbai', '2026-01-15', 1794, 89),
(211, 'Delhi', 'Kolkata', '2026-01-18', 1470, 83),
(212, 'Chennai', 'Mysore', '2026-01-03', 1614, 53),
(213, 'Patna', 'Chandigarh', '2026-01-07', 1684, 72),
(214, 'Trivandrum', 'Hyderabad', '2026-01-11', 1221, 50),
(215, 'Patna', 'Bhubaneswar', '2026-01-19', 1317, 99),
(216, 'Hyderabad', 'Kolkata', '2026-01-21', 332, 74),
(217, 'Goa', 'Varanasi', '2026-01-18', 1321, 83),
(218, 'Hyderabad', 'Lucknow', '2026-01-18', 1244, 52),
(219, 'Agra', 'Lucknow', '2026-01-18', 1053, 93),
(220, 'Mysore', 'Kolkata', '2026-01-20', 1692, 92),
(221, 'Goa', 'Mysore', '2026-01-17', 805, 55),
(222, 'Chandigarh', 'Kolkata', '2026-01-12', 1046, 80),
(223, 'Coimbatore', 'Mysore', '2025-12-26', 1995, 75),
(224, 'Chandigarh', 'Agra', '2025-12-23', 866, 60),
(225, 'Coimbatore', 'Lucknow', '2025-12-27', 1134, 64),
(226, 'Chennai', 'Delhi', '2026-01-13', 1443, 79),
(227, 'Ahmedabad', 'Kolkata', '2026-01-14', 1697, 52),
(228, 'Pune', 'Dehradun', '2026-01-06', 1605, 94),
(229, 'Bhubaneswar', 'Lucknow', '2025-12-30', 1319, 74),
(230, 'Ahmedabad', 'Goa', '2026-01-13', 1438, 58),
(231, 'Mysore', 'Coimbatore', '2026-01-05', 1146, 66),
(232, 'Lucknow', 'Delhi', '2026-01-09', 669, 73),
(233, 'Bangalore', 'Dehradun', '2026-01-16', 419, 63),
(234, 'Chandigarh', 'Goa', '2026-01-12', 1885, 79),
(235, 'Agra', 'Jaipur', '2025-12-31', 1433, 70),
(236, 'Goa', 'Dehradun', '2025-12-26', 259, 98),
(237, 'Delhi', 'Mysore', '2026-01-10', 1415, 68),
(238, 'Bhubaneswar', 'Dehradun', '2025-12-24', 1603, 93),
(239, 'Ahmedabad', 'Lucknow', '2026-01-16', 1548, 65),
(240, 'Ahmedabad', 'Hyderabad', '2025-12-31', 1923, 94),
(241, 'Trivandrum', 'Goa', '2026-01-07', 1114, 85),
(242, 'Trivandrum', 'Mysore', '2026-01-16', 1205, 79),
(243, 'Patna', 'Agra', '2025-12-28', 1573, 88),
(244, 'Coimbatore', 'Pune', '2026-01-09', 1443, 55),
(245, 'Trivandrum', 'Chennai', '2026-01-18', 344, 100),
(246, 'Coimbatore', 'Patna', '2025-12-28', 1294, 56),
(247, 'Chennai', 'Bangalore', '2025-12-30', 1611, 77),
(248, 'Ahmedabad', 'Trivandrum', '2026-01-17', 597, 79),
(249, 'Patna', 'Chennai', '2026-01-07', 1750, 86),
(250, 'Ahmedabad', 'Lucknow', '2026-01-18', 570, 75),
(251, 'Lucknow', 'Varanasi', '2025-12-24', 1863, 52),
(252, 'Pune', 'Bangalore', '2025-12-23', 1540, 77),
(253, 'Trivandrum', 'Ahmedabad', '2026-01-07', 1217, 92),
(254, 'Dehradun', 'Delhi', '2025-12-30', 758, 51),
(255, 'Coimbatore', 'Hyderabad', '2026-01-11', 1630, 100),
(256, 'Dehradun', 'Bangalore', '2025-12-25', 582, 97),
(257, 'Delhi', 'Patna', '2025-12-23', 358, 67),
(258, 'Varanasi', 'Kolkata', '2025-12-23', 1104, 88),
(259, 'Pune', 'Chandigarh', '2025-12-27', 1337, 96),
(260, 'Varanasi', 'Patna', '2026-01-14', 1083, 69),
(261, 'Trivandrum', 'Bhubaneswar', '2026-01-18', 345, 54),
(262, 'Varanasi', 'Jaipur', '2026-01-02', 690, 79),
(263, 'Bangalore', 'Coimbatore', '2025-12-31', 1744, 66),
(264, 'Chandigarh', 'Lucknow', '2026-01-15', 1658, 75),
(265, 'Goa', 'Bhubaneswar', '2025-12-29', 1534, 73),
(266, 'Coimbatore', 'Pune', '2025-12-29', 1542, 62),
(267, 'Dehradun', 'Jaipur', '2026-01-17', 478, 53),
(268, 'Dehradun', 'Goa', '2026-01-18', 437, 96),
(269, 'Bangalore', 'Patna', '2026-01-16', 1674, 97),
(270, 'Dehradun', 'Hyderabad', '2026-01-13', 1383, 96),
(271, 'Delhi', 'Hyderabad', '2026-01-14', 531, 56),
(272, 'Patna', 'Bangalore', '2025-12-31', 1815, 69),
(273, 'Pune', 'Hyderabad', '2026-01-18', 1993, 85),
(274, 'Patna', 'Chennai', '2026-01-05', 567, 95),
(275, 'Hyderabad', 'Dehradun', '2026-01-01', 1881, 71),
(276, 'Chandigarh', 'Dehradun', '2025-12-23', 1149, 88),
(277, 'Bangalore', 'Kolkata', '2026-01-16', 633, 100),
(278, 'Hyderabad', 'Patna', '2026-01-14', 417, 52),
(279, 'Lucknow', 'Jaipur', '2026-01-18', 1190, 53),
(280, 'Agra', 'Jaipur', '2026-01-14', 1037, 50),
(281, 'Mysore', 'Bhubaneswar', '2026-01-21', 1530, 74),
(282, 'Goa', 'Mumbai', '2025-12-31', 539, 92),
(283, 'Agra', 'Patna', '2026-01-05', 1280, 59),
(284, 'Trivandrum', 'Chennai', '2026-01-14', 373, 93),
(285, 'Mumbai', 'Lucknow', '2025-12-23', 1151, 78),
(286, 'Patna', 'Trivandrum', '2025-12-28', 1428, 65),
(287, 'Varanasi', 'Jaipur', '2026-01-02', 1363, 55),
(288, 'Hyderabad', 'Jaipur', '2026-01-14', 813, 96),
(289, 'Chennai', 'Chandigarh', '2026-01-07', 1366, 51),
(290, 'Kolkata', 'Bangalore', '2026-01-20', 1372, 79),
(291, 'Chandigarh', 'Lucknow', '2026-01-08', 1895, 70),
(292, 'Bhubaneswar', 'Pune', '2025-12-27', 806, 55),
(293, 'Varanasi', 'Jaipur', '2026-01-03', 1463, 61),
(294, 'Patna', 'Trivandrum', '2026-01-18', 663, 70),
(295, 'Bangalore', 'Delhi', '2026-01-09', 325, 87),
(296, 'Dehradun', 'Bangalore', '2026-01-13', 518, 61),
(297, 'Ahmedabad', 'Bhubaneswar', '2026-01-13', 1515, 74),
(298, 'Goa', 'Hyderabad', '2026-01-13', 431, 96),
(299, 'Delhi', 'Varanasi', '2025-12-23', 1559, 50),
(300, 'Delhi', 'Lucknow', '2026-01-04', 415, 91),
(301, 'Goa', 'Mysore', '2026-01-11', 1978, 85),
(302, 'Delhi', 'Bangalore', '2025-12-27', 445, 68),
(303, 'Chennai', 'Coimbatore', '2025-12-26', 287, 65),
(304, 'Bangalore', 'Lucknow', '2026-01-08', 710, 78),
(305, 'Trivandrum', 'Lucknow', '2026-01-08', 1122, 88),
(306, 'Bangalore', 'Delhi', '2025-12-28', 408, 65),
(307, 'Patna', 'Mumbai', '2026-01-19', 1385, 76),
(308, 'Kolkata', 'Lucknow', '2026-01-06', 403, 86),
(309, 'Hyderabad', 'Patna', '2025-12-26', 1792, 80),
(310, 'Ahmedabad', 'Varanasi', '2026-01-10', 1060, 97),
(311, 'Kolkata', 'Coimbatore', '2026-01-01', 512, 70),
(312, 'Pune', 'Goa', '2026-01-04', 1445, 72),
(313, 'Varanasi', 'Mysore', '2026-01-18', 1234, 88),
(314, 'Chandigarh', 'Varanasi', '2025-12-26', 1195, 90),
(315, 'Jaipur', 'Chandigarh', '2025-12-25', 1819, 93),
(316, 'Bhubaneswar', 'Ahmedabad', '2025-12-31', 1193, 71),
(317, 'Chandigarh', 'Jaipur', '2025-12-24', 965, 61),
(318, 'Agra', 'Varanasi', '2026-01-01', 908, 83),
(319, 'Mysore', 'Coimbatore', '2025-12-30', 1245, 77),
(320, 'Chennai', 'Patna', '2026-01-01', 1875, 95),
(321, 'Delhi', 'Bhubaneswar', '2026-01-21', 984, 88),
(322, 'Trivandrum', 'Patna', '2026-01-13', 1939, 69),
(323, 'Kolkata', 'Chennai', '2026-01-02', 1171, 86),
(324, 'Ahmedabad', 'Pune', '2026-01-09', 1255, 84),
(325, 'Dehradun', 'Chennai', '2025-12-23', 1119, 85);

-- --------------------------------------------------------

--
-- Table structure for table `cabs`
--

CREATE TABLE `cabs` (
  `id` int(11) NOT NULL,
  `pickup` varchar(50) DEFAULT NULL,
  `drop_location` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `popularity_score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabs`
--

INSERT INTO `cabs` (`id`, `pickup`, `drop_location`, `travel_date`, `price`, `popularity_score`) VALUES
(16, 'Hyderabad', 'Delhi', '2026-01-11', 1181, 91),
(17, 'Chandigarh', 'Lucknow', '2026-01-02', 2525, 86),
(18, 'Patna', 'Mumbai', '2026-01-05', 1850, 93),
(19, 'Kolkata', 'Dehradun', '2026-01-19', 1863, 90),
(20, 'Lucknow', 'Chandigarh', '2025-12-26', 2236, 72),
(21, 'Bangalore', 'Bhubaneswar', '2026-01-16', 804, 54),
(22, 'Delhi', 'Hyderabad', '2025-12-24', 1315, 82),
(23, 'Jaipur', 'Delhi', '2026-01-20', 2785, 94),
(24, 'Agra', 'Agra', '2025-12-27', 2569, 92),
(25, 'Varanasi', 'Mysore', '2026-01-19', 1345, 55),
(26, 'Delhi', 'Patna', '2025-12-22', 781, 56),
(27, 'Goa', 'Pune', '2026-01-03', 2752, 56),
(28, 'Bangalore', 'Delhi', '2026-01-15', 1471, 100),
(29, 'Chennai', 'Goa', '2026-01-04', 1011, 83),
(30, 'Mysore', 'Varanasi', '2026-01-14', 777, 94),
(31, 'Kolkata', 'Mumbai', '2026-01-03', 2216, 57),
(32, 'Mumbai', 'Ahmedabad', '2026-01-14', 1315, 68),
(33, 'Varanasi', 'Varanasi', '2026-01-08', 518, 56),
(34, 'Mumbai', 'Jaipur', '2026-01-16', 639, 68),
(35, 'Trivandrum', 'Bhubaneswar', '2025-12-25', 1866, 65),
(36, 'Pune', 'Mysore', '2025-12-26', 1622, 60),
(37, 'Hyderabad', 'Ahmedabad', '2026-01-05', 1482, 65),
(38, 'Jaipur', 'Hyderabad', '2026-01-10', 2460, 89),
(39, 'Kolkata', 'Goa', '2026-01-06', 619, 72),
(40, 'Mumbai', 'Hyderabad', '2025-12-24', 977, 76),
(41, 'Dehradun', 'Trivandrum', '2026-01-04', 1268, 76),
(42, 'Chandigarh', 'Lucknow', '2026-01-13', 2507, 87),
(43, 'Bhubaneswar', 'Chandigarh', '2025-12-28', 2172, 94),
(44, 'Delhi', 'Goa', '2025-12-23', 2779, 55),
(45, 'Lucknow', 'Patna', '2025-12-22', 2875, 64),
(46, 'Ahmedabad', 'Coimbatore', '2026-01-04', 2265, 67),
(47, 'Kolkata', 'Kolkata', '2026-01-09', 968, 72),
(48, 'Kolkata', 'Ahmedabad', '2025-12-30', 1446, 92),
(49, 'Varanasi', 'Mysore', '2026-01-18', 1174, 94),
(50, 'Chennai', 'Hyderabad', '2026-01-19', 651, 64),
(51, 'Jaipur', 'Agra', '2025-12-22', 2623, 65),
(52, 'Bangalore', 'Dehradun', '2026-01-03', 947, 81),
(53, 'Mysore', 'Hyderabad', '2026-01-07', 2109, 62),
(54, 'Hyderabad', 'Delhi', '2026-01-19', 1254, 62),
(55, 'Chandigarh', 'Chennai', '2026-01-12', 2019, 79),
(56, 'Pune', 'Trivandrum', '2025-12-29', 772, 82),
(57, 'Dehradun', 'Agra', '2025-12-25', 546, 58),
(58, 'Goa', 'Chandigarh', '2025-12-31', 2669, 80),
(59, 'Delhi', 'Lucknow', '2026-01-10', 1227, 80),
(60, 'Dehradun', 'Varanasi', '2026-01-05', 708, 87),
(61, 'Kolkata', 'Dehradun', '2026-01-04', 633, 61),
(62, 'Mysore', 'Pune', '2026-01-13', 591, 93),
(63, 'Mysore', 'Chennai', '2025-12-30', 1255, 69),
(64, 'Mysore', 'Ahmedabad', '2025-12-23', 1881, 77),
(65, 'Bhubaneswar', 'Delhi', '2025-12-24', 1663, 86),
(66, 'Ahmedabad', 'Trivandrum', '2026-01-02', 1976, 77),
(67, 'Ahmedabad', 'Delhi', '2026-01-05', 2508, 84),
(68, 'Bhubaneswar', 'Bangalore', '2026-01-04', 584, 68),
(69, 'Hyderabad', 'Varanasi', '2026-01-14', 2530, 89),
(70, 'Pune', 'Delhi', '2026-01-16', 619, 97),
(71, 'Delhi', 'Mumbai', '2026-01-16', 780, 87),
(72, 'Varanasi', 'Bhubaneswar', '2026-01-18', 809, 80),
(73, 'Patna', 'Pune', '2026-01-08', 580, 82),
(74, 'Chennai', 'Lucknow', '2025-12-23', 1993, 53),
(75, 'Bangalore', 'Agra', '2025-12-22', 2226, 79),
(76, 'Bangalore', 'Chandigarh', '2026-01-10', 2621, 84),
(77, 'Bhubaneswar', 'Agra', '2026-01-05', 1557, 78),
(78, 'Bangalore', 'Chennai', '2025-12-22', 944, 88),
(79, 'Agra', 'Trivandrum', '2025-12-22', 1527, 70),
(80, 'Trivandrum', 'Mysore', '2026-01-10', 2235, 99),
(81, 'Hyderabad', 'Mumbai', '2026-01-04', 975, 91),
(82, 'Bhubaneswar', 'Pune', '2025-12-27', 735, 64),
(83, 'Bangalore', 'Chandigarh', '2025-12-25', 2800, 74),
(84, 'Agra', 'Bangalore', '2026-01-08', 899, 94),
(85, 'Patna', 'Pune', '2026-01-14', 790, 56),
(86, 'Bhubaneswar', 'Agra', '2025-12-25', 2448, 82),
(87, 'Coimbatore', 'Mumbai', '2026-01-13', 2943, 67),
(88, 'Lucknow', 'Mumbai', '2025-12-28', 2777, 54),
(89, 'Chennai', 'Chandigarh', '2025-12-25', 1154, 50),
(90, 'Dehradun', 'Bhubaneswar', '2025-12-22', 1948, 84),
(91, 'Bangalore', 'Chandigarh', '2025-12-26', 1384, 78),
(92, 'Varanasi', 'Coimbatore', '2026-01-11', 598, 62),
(93, 'Hyderabad', 'Lucknow', '2026-01-20', 1771, 64),
(94, 'Varanasi', 'Bhubaneswar', '2026-01-08', 1431, 82),
(95, 'Trivandrum', 'Jaipur', '2026-01-10', 2850, 82),
(96, 'Bangalore', 'Lucknow', '2026-01-15', 2712, 75),
(97, 'Delhi', 'Delhi', '2025-12-29', 999, 62),
(98, 'Hyderabad', 'Lucknow', '2026-01-08', 2033, 72),
(99, 'Coimbatore', 'Hyderabad', '2026-01-10', 2731, 63),
(100, 'Delhi', 'Ahmedabad', '2026-01-09', 1579, 63),
(101, 'Jaipur', 'Mumbai', '2025-12-25', 569, 83),
(102, 'Bangalore', 'Jaipur', '2026-01-02', 2580, 85),
(103, 'Patna', 'Bhubaneswar', '2026-01-07', 2613, 56),
(104, 'Bangalore', 'Chennai', '2026-01-05', 857, 71),
(105, 'Mysore', 'Goa', '2026-01-01', 720, 74),
(106, 'Chandigarh', 'Amritsar', '2025-12-25', 2500, 0),
(107, 'Ludhiana', 'Jalandhar', '2025-12-25', 2000, 0),
(108, 'Patiala', 'Chandigarh', '2025-12-25', 1800, 0),
(109, 'Amritsar', 'Delhi', '2025-12-25', 3500, 0),
(110, 'Jalandhar', 'Chandigarh', '2025-12-25', 2200, 0),
(111, 'Chandigarh', 'Amritsar', '2025-12-25', 2500, 0),
(112, 'Ludhiana', 'Jalandhar', '2025-12-25', 2000, 0),
(113, 'Patiala', 'Chandigarh', '2025-12-25', 1800, 0),
(114, 'Amritsar', 'Delhi', '2025-12-25', 3500, 0),
(115, 'Jalandhar', 'Chandigarh', '2025-12-25', 2200, 0),
(116, 'Chandigarh', 'Amritsar', '2025-12-25', 2500, 95),
(117, 'Ludhiana', 'Jalandhar', '2025-12-25', 2000, 90),
(118, 'Patiala', 'Chandigarh', '2025-12-25', 1800, 80),
(119, 'Amritsar', 'Delhi', '2025-12-25', 3500, 98),
(120, 'Jalandhar', 'Chandigarh', '2025-12-25', 2200, 85),
(121, 'Mohali', 'Bathinda', '2025-12-25', 2400, 87),
(122, 'Hoshiarpur', 'Patiala', '2025-12-25', 2100, 83),
(123, 'Bangalore', 'Patna', '2026-01-10', 1848, 68),
(124, 'Mumbai', 'Chandigarh', '2026-01-12', 2118, 69),
(125, 'Mumbai', 'Goa', '2026-01-16', 1057, 81),
(126, 'Mumbai', 'Patna', '2025-12-26', 2707, 65),
(127, 'Agra', 'Hyderabad', '2025-12-30', 1330, 100),
(128, 'Patna', 'Varanasi', '2026-01-01', 657, 53),
(129, 'Chennai', 'Coimbatore', '2025-12-27', 1195, 64),
(130, 'Patna', 'Trivandrum', '2026-01-01', 2604, 86),
(131, 'Bangalore', 'Chandigarh', '2026-01-14', 1463, 54),
(132, 'Mumbai', 'Dehradun', '2025-12-25', 1667, 82),
(133, 'Jaipur', 'Mumbai', '2025-12-26', 577, 92),
(134, 'Kolkata', 'Pune', '2025-12-24', 1845, 86),
(135, 'Hyderabad', 'Patna', '2026-01-03', 2421, 85),
(136, 'Dehradun', 'Jaipur', '2025-12-25', 1994, 62),
(137, 'Agra', 'Bangalore', '2025-12-23', 2791, 77),
(138, 'Mumbai', 'Patna', '2026-01-13', 961, 68),
(139, 'Jaipur', 'Agra', '2026-01-16', 1036, 61),
(140, 'Mumbai', 'Lucknow', '2026-01-20', 1106, 98),
(141, 'Patna', 'Kolkata', '2025-12-24', 2731, 80),
(142, 'Mumbai', 'Mysore', '2026-01-16', 1005, 60),
(143, 'Chennai', 'Mysore', '2026-01-02', 2045, 99),
(144, 'Bhubaneswar', 'Bangalore', '2026-01-12', 911, 93),
(145, 'Hyderabad', 'Pune', '2026-01-18', 2033, 50),
(146, 'Agra', 'Bhubaneswar', '2025-12-31', 1673, 52),
(147, 'Delhi', 'Agra', '2026-01-07', 1699, 57),
(148, 'Kolkata', 'Jaipur', '2025-12-23', 2649, 98),
(149, 'Agra', 'Bhubaneswar', '2025-12-26', 641, 87),
(150, 'Ahmedabad', 'Mumbai', '2026-01-19', 2459, 97),
(151, 'Patna', 'Agra', '2026-01-08', 944, 99),
(152, 'Delhi', 'Dehradun', '2025-12-24', 1860, 85),
(153, 'Mysore', 'Trivandrum', '2026-01-13', 2454, 50),
(154, 'Kolkata', 'Agra', '2026-01-14', 862, 75),
(155, 'Hyderabad', 'Pune', '2026-01-06', 1228, 97),
(156, 'Bhubaneswar', 'Ahmedabad', '2026-01-18', 1118, 72),
(157, 'Hyderabad', 'Dehradun', '2026-01-14', 1081, 86),
(158, 'Goa', 'Pune', '2026-01-12', 1434, 96),
(159, 'Chandigarh', 'Pune', '2026-01-20', 1622, 53),
(160, 'Lucknow', 'Varanasi', '2025-12-24', 1959, 66),
(161, 'Mysore', 'Bhubaneswar', '2026-01-17', 2424, 68),
(162, 'Pune', 'Bangalore', '2025-12-24', 1731, 50),
(163, 'Ahmedabad', 'Chennai', '2026-01-16', 2013, 82),
(164, 'Jaipur', 'Chandigarh', '2026-01-03', 1183, 58),
(165, 'Agra', 'Mumbai', '2026-01-20', 1820, 60),
(166, 'Bhubaneswar', 'Ahmedabad', '2026-01-05', 1531, 63),
(167, 'Chennai', 'Pune', '2025-12-24', 2111, 68),
(168, 'Chennai', 'Chandigarh', '2025-12-26', 1427, 94),
(169, 'Dehradun', 'Ahmedabad', '2026-01-08', 2535, 70),
(170, 'Kolkata', 'Varanasi', '2026-01-08', 2301, 89),
(171, 'Delhi', 'Varanasi', '2025-12-24', 1794, 70),
(172, 'Chennai', 'Varanasi', '2025-12-30', 1636, 89),
(173, 'Varanasi', 'Trivandrum', '2026-01-08', 710, 53),
(174, 'Ahmedabad', 'Agra', '2026-01-15', 2219, 66),
(175, 'Coimbatore', 'Coimbatore', '2026-01-15', 2746, 87),
(176, 'Mumbai', 'Varanasi', '2026-01-07', 1388, 98),
(177, 'Ahmedabad', 'Chennai', '2026-01-15', 2016, 51),
(178, 'Jaipur', 'Chandigarh', '2026-01-19', 2128, 92),
(179, 'Kolkata', 'Mysore', '2026-01-21', 2812, 50),
(180, 'Coimbatore', 'Trivandrum', '2026-01-04', 1416, 56),
(181, 'Chennai', 'Ahmedabad', '2026-01-15', 1348, 54),
(182, 'Ahmedabad', 'Bhubaneswar', '2025-12-27', 963, 80),
(183, 'Hyderabad', 'Chandigarh', '2026-01-12', 1941, 53),
(184, 'Lucknow', 'Chennai', '2026-01-19', 2393, 57),
(185, 'Hyderabad', 'Hyderabad', '2025-12-26', 2237, 96),
(186, 'Pune', 'Delhi', '2026-01-18', 2360, 60),
(187, 'Ahmedabad', 'Chandigarh', '2025-12-26', 1030, 96),
(188, 'Delhi', 'Chennai', '2025-12-31', 2783, 55),
(189, 'Goa', 'Coimbatore', '2025-12-27', 764, 69),
(190, 'Agra', 'Pune', '2025-12-27', 1896, 97),
(191, 'Bangalore', 'Pune', '2025-12-31', 2730, 80),
(192, 'Patna', 'Bangalore', '2025-12-27', 2513, 97),
(193, 'Hyderabad', 'Ahmedabad', '2025-12-25', 1831, 61),
(194, 'Chandigarh', 'Lucknow', '2025-12-26', 1432, 88),
(195, 'Delhi', 'Goa', '2025-12-24', 2506, 73),
(196, 'Chandigarh', 'Jaipur', '2026-01-05', 1537, 65),
(197, 'Chennai', 'Hyderabad', '2026-01-11', 2048, 54),
(198, 'Dehradun', 'Agra', '2026-01-18', 944, 84),
(199, 'Chandigarh', 'Goa', '2026-01-16', 584, 65),
(200, 'Pune', 'Bhubaneswar', '2026-01-18', 2610, 64),
(201, 'Lucknow', 'Chennai', '2026-01-02', 661, 71),
(202, 'Goa', 'Dehradun', '2025-12-26', 1175, 100),
(203, 'Chennai', 'Delhi', '2026-01-10', 2235, 75),
(204, 'Goa', 'Bangalore', '2026-01-09', 1423, 85),
(205, 'Mumbai', 'Varanasi', '2026-01-02', 2501, 90),
(206, 'Mysore', 'Varanasi', '2025-12-25', 1215, 89),
(207, 'Mysore', 'Jaipur', '2026-01-07', 1572, 84),
(208, 'Mysore', 'Coimbatore', '2026-01-21', 2233, 65),
(209, 'Mumbai', 'Chandigarh', '2025-12-29', 1343, 95),
(210, 'Lucknow', 'Lucknow', '2025-12-27', 1007, 55),
(211, 'Hyderabad', 'Trivandrum', '2026-01-01', 1543, 59),
(212, 'Mumbai', 'Dehradun', '2026-01-21', 1262, 51),
(213, 'Hyderabad', 'Bhubaneswar', '2025-12-26', 2838, 90),
(214, 'Jaipur', 'Dehradun', '2025-12-29', 1419, 66),
(215, 'Pune', 'Patna', '2026-01-17', 2048, 82),
(216, 'Dehradun', 'Mumbai', '2025-12-25', 524, 70),
(217, 'Lucknow', 'Chandigarh', '2026-01-12', 2189, 98),
(218, 'Hyderabad', 'Kolkata', '2025-12-30', 672, 88),
(219, 'Coimbatore', 'Dehradun', '2026-01-01', 2886, 94),
(220, 'Varanasi', 'Hyderabad', '2025-12-24', 2945, 99),
(221, 'Mysore', 'Jaipur', '2026-01-16', 2319, 73),
(222, 'Mumbai', 'Hyderabad', '2026-01-20', 2389, 70);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `flight_from` varchar(100) DEFAULT NULL,
  `flight_to` varchar(100) DEFAULT NULL,
  `depart_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `trip_type` enum('oneway','round') NOT NULL DEFAULT 'oneway',
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_direct` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flight_from`, `flight_to`, `depart_date`, `return_date`, `trip_type`, `price`, `created_at`, `is_direct`) VALUES
(1, 'Delhi', 'Mumbai', '2025-10-10', NULL, 'oneway', 4500, '2025-12-30 02:40:35', 1),
(2, 'Delhi', 'Mumbai', '2025-10-10', NULL, 'oneway', 3200, '2025-12-30 02:40:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quick_query`
--

CREATE TABLE `quick_query` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `package` varchar(100) DEFAULT NULL,
  `guide` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `travel_date` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `persons` int(11) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `full_name`, `email`, `package`, `guide`, `description`, `travel_date`, `duration`, `persons`, `contact`, `payment_method`, `payment_details`, `created_at`, `name`, `amount`, `total_cost`) VALUES
(1, 'Haarman', 'pharmanjot786@gmail.com', 'east_india', '', 'klkl', '2025-12-02', '1-3 Days', 1, '09592290249', NULL, NULL, '2025-11-30 15:56:58', NULL, NULL, NULL),
(41, 'user', 'akky8198@gmail.com', 'north_india', 'Arjun Singh', 'dhgkjlk', '2025-12-28', '4-7 Days', 1, '456789123', NULL, NULL, '2025-12-26 16:02:10', NULL, NULL, NULL),
(42, 'user', 'akky8198@gmail.com', 'north_india', 'Arjun Singh', 'dhgkjlk', '2025-12-28', '4-7 Days', 1, '456789123', 'Cash', NULL, '2025-12-26 16:02:16', NULL, 8000.00, NULL),
(43, 'divu', 'div20102003@gmail.com', 'west_india', 'Arjun Singh', 'hey', '2026-01-08', '8-10 Days', 6, '8284845308', NULL, NULL, '2025-12-29 13:27:39', NULL, NULL, NULL),
(44, 'divu', 'div20102003@gmail.com', 'east_india', 'Rohit Sharma', 'hey', '2026-01-07', '8-10 Days', 6, '8284845308', NULL, NULL, '2025-12-29 13:56:52', NULL, NULL, NULL),
(45, 'divu', 'div20102003@gmail.com', 'east_india', 'Rohit Sharma', 'hey', '2026-01-07', '8-10 Days', 6, '8284845308', 'NetBanking', NULL, '2025-12-29 13:57:01', NULL, 7000.00, NULL),
(46, 'divu', 'div20102003@gmail.com', 'south_india', '', 'A', '2026-01-07', '1-3 Days', 6, '8284845308', NULL, NULL, '2025-12-29 18:04:02', NULL, NULL, NULL),
(47, 'divu', 'div20102003@gmail.com', 'south_india', '', 'A', '2026-01-07', '1-3 Days', 6, '8284845308', 'Cash', NULL, '2025-12-29 18:04:15', NULL, 10000.00, NULL),
(48, 'divu', 'div20102003@gmail.com', 'north_india', '', 'hlo', '2026-01-07', '4-7 Days', 6, '8284845308', NULL, NULL, '2025-12-30 03:29:28', NULL, NULL, NULL),
(49, 'divu', 'div20102003@gmail.com', 'north_india', '', 'hlo', '2026-01-07', '4-7 Days', 6, '8284845308', 'Cash', NULL, '2025-12-30 03:29:31', NULL, 8000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `type` enum('flight','bus','train','cab') DEFAULT NULL,
  `from_city` varchar(50) DEFAULT NULL,
  `to_city` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `travel_time` time DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `direct` tinyint(1) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `type`, `from_city`, `to_city`, `travel_date`, `travel_time`, `price`, `direct`, `rating`) VALUES
(1, 'bus', 'Delhi', 'Jalandhar', '0000-00-00', '10:00:00', 1419, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `from_station` varchar(50) DEFAULT NULL,
  `to_station` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `popularity_score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `from_station`, `to_station`, `travel_date`, `price`, `popularity_score`) VALUES
(1, 'Delhi', 'Mumbai', '2025-12-25', 1200, 95),
(2, 'Mumbai', 'Delhi', '2025-12-25', 1200, 90),
(3, 'Delhi', 'Kolkata', '2025-12-26', 1500, 85),
(4, 'Kolkata', 'Delhi', '2025-12-26', 1500, 80),
(5, 'Bangalore', 'Chennai', '2025-12-27', 900, 75),
(6, 'Chennai', 'Bangalore', '2025-12-27', 900, 70),
(7, 'Mumbai', 'Goa', '2025-12-28', 800, 65),
(8, 'Goa', 'Mumbai', '2025-12-28', 800, 60),
(9, 'Trivandrum', 'Agra', '2026-01-11', 773, 73),
(10, 'Coimbatore', 'Jaipur', '2026-01-17', 1143, 83),
(46, 'Varanasi', 'Bangalore', '2025-12-28', 2715, 54),
(47, 'Varanasi', 'Jaipur', '2026-01-18', 2980, 52),
(48, 'Kolkata', 'Bhubaneswar', '2025-12-23', 1832, 68),
(49, 'Goa', 'Chandigarh', '2025-12-24', 571, 97),
(50, 'Kolkata', 'Patna', '2026-01-11', 3948, 92),
(51, 'Hyderabad', 'Trivandrum', '2026-01-03', 1709, 78),
(52, 'Jaipur', 'Mysore', '2025-12-23', 3834, 67),
(53, 'Jaipur', 'Chandigarh', '2026-01-10', 4612, 84),
(54, 'Chandigarh', 'Lucknow', '2025-12-30', 2565, 99),
(55, 'Agra', 'Delhi', '2025-12-30', 4918, 51),
(56, 'Pune', 'Goa', '2026-01-06', 329, 70),
(57, 'Delhi', 'Bangalore', '2026-01-08', 4249, 55),
(58, 'Agra', 'Trivandrum', '2026-01-19', 1684, 64),
(59, 'Dehradun', 'Agra', '2026-01-09', 1163, 80),
(60, 'Hyderabad', 'Bhubaneswar', '2026-01-14', 324, 81),
(61, 'Chennai', 'Jaipur', '2026-01-08', 4249, 54),
(62, 'Patna', 'Varanasi', '2026-01-16', 1589, 56),
(63, 'Mumbai', 'Coimbatore', '2026-01-14', 1555, 54),
(64, 'Mysore', 'Pune', '2026-01-01', 1691, 86),
(65, 'Chennai', 'Kolkata', '2026-01-07', 3951, 62),
(66, 'Hyderabad', 'Pune', '2026-01-04', 4844, 90),
(67, 'Agra', 'Chandigarh', '2026-01-03', 328, 56),
(68, 'Dehradun', 'Varanasi', '2026-01-15', 4680, 59),
(69, 'Mysore', 'Bangalore', '2026-01-11', 630, 57),
(70, 'Bhubaneswar', 'Dehradun', '2026-01-15', 3211, 92),
(71, 'Patna', 'Bhubaneswar', '2025-12-30', 490, 98),
(72, 'Chandigarh', 'Coimbatore', '2026-01-14', 2722, 59),
(73, 'Kolkata', 'Delhi', '2025-12-29', 375, 94),
(74, 'Jaipur', 'Mumbai', '2026-01-18', 619, 77),
(75, 'Ahmedabad', 'Bhubaneswar', '2026-01-07', 4036, 83),
(76, 'Hyderabad', 'Trivandrum', '2026-01-05', 4414, 50),
(77, 'Delhi', 'Hyderabad', '2025-12-28', 3949, 54),
(78, 'Hyderabad', 'Mysore', '2025-12-28', 724, 86),
(79, 'Jaipur', 'Delhi', '2026-01-02', 4536, 74),
(80, 'Delhi', 'Varanasi', '2025-12-23', 2523, 76),
(81, 'Dehradun', 'Bhubaneswar', '2026-01-03', 3361, 91),
(82, 'Trivandrum', 'Dehradun', '2025-12-24', 2284, 62),
(83, 'Ahmedabad', 'Trivandrum', '2026-01-10', 630, 61),
(84, 'Mysore', 'Ahmedabad', '2025-12-28', 4149, 68),
(85, 'Agra', 'Mysore', '2026-01-02', 1174, 61),
(86, 'Mysore', 'Jaipur', '2026-01-19', 937, 93),
(87, 'Goa', 'Bhubaneswar', '2026-01-03', 3699, 62),
(88, 'Coimbatore', 'Trivandrum', '2026-01-11', 4373, 62),
(89, 'Goa', 'Mysore', '2026-01-04', 404, 72),
(90, 'Bangalore', 'Lucknow', '2025-12-25', 4691, 99),
(91, 'Hyderabad', 'Kolkata', '2025-12-23', 3255, 99),
(92, 'Delhi', 'Ahmedabad', '2026-01-08', 4239, 64),
(93, 'Mysore', 'Patna', '2025-12-25', 1866, 82),
(94, 'Chandigarh', 'Mumbai', '2026-01-04', 3352, 82),
(95, 'Varanasi', 'Hyderabad', '2025-12-29', 891, 85),
(96, 'Bhubaneswar', 'Chennai', '2025-12-29', 3917, 63),
(97, 'Trivandrum', 'Pune', '2026-01-20', 918, 80),
(98, 'Jaipur', 'Pune', '2026-01-12', 4196, 100),
(99, 'Ahmedabad', 'Chennai', '2026-01-19', 1940, 100),
(100, 'Chandigarh', 'Kolkata', '2026-01-05', 3513, 56),
(101, 'Bangalore', 'Ahmedabad', '2025-12-30', 1422, 56),
(102, 'Chennai', 'Kolkata', '2026-01-12', 2365, 53),
(103, 'Trivandrum', 'Patna', '2025-12-27', 2500, 72),
(104, 'Agra', 'Jaipur', '2026-01-16', 4877, 76),
(105, 'Patna', 'Lucknow', '2026-01-04', 4917, 59),
(106, 'Mumbai', 'Delhi', '2026-01-12', 4695, 98),
(107, 'Ahmedabad', 'Mysore', '2025-12-27', 460, 85),
(108, 'Bhubaneswar', 'Jaipur', '2025-12-24', 2337, 54),
(109, 'Agra', 'Varanasi', '2025-12-22', 1746, 81),
(110, 'Kolkata', 'Chandigarh', '2026-01-02', 4610, 52),
(111, 'Kolkata', 'Chandigarh', '2026-01-05', 4758, 58),
(112, 'Patna', 'Ahmedabad', '2025-12-28', 3621, 88),
(113, 'Chandigarh', 'Pune', '2025-12-24', 1146, 54),
(114, 'Delhi', 'Jaipur', '2026-01-05', 3156, 60),
(115, 'Agra', 'Pune', '2026-01-19', 3696, 88),
(116, 'Jaipur', 'Chennai', '2025-12-29', 4673, 98),
(117, 'Mysore', 'Pune', '2025-12-24', 2596, 92),
(118, 'Coimbatore', 'Bhubaneswar', '2026-01-13', 1521, 59),
(119, 'Goa', 'Lucknow', '2026-01-17', 3476, 81),
(120, 'Jaipur', 'Mysore', '2026-01-18', 2824, 56),
(121, 'Patna', 'Bhubaneswar', '2026-01-01', 1767, 70),
(122, 'Bangalore', 'Ahmedabad', '2026-01-15', 867, 92),
(123, 'Coimbatore', 'Varanasi', '2025-12-26', 1922, 73),
(124, 'Kolkata', 'Lucknow', '2025-12-25', 3149, 55),
(125, 'Lucknow', 'Mumbai', '2026-01-03', 2044, 92),
(126, 'Agra', 'Hyderabad', '2025-12-23', 2128, 68),
(127, 'Agra', 'Ahmedabad', '2026-01-15', 3549, 55),
(128, 'Lucknow', 'Coimbatore', '2026-01-03', 2572, 86),
(129, 'Hyderabad', 'Chennai', '2026-01-19', 954, 96),
(130, 'Coimbatore', 'Pune', '2025-12-27', 3521, 51),
(131, 'Lucknow', 'Dehradun', '2025-12-23', 466, 93),
(132, 'Kolkata', 'Patna', '2026-01-16', 1348, 77),
(133, 'Lucknow', 'Bangalore', '2026-01-10', 4429, 61),
(134, 'Coimbatore', 'Jaipur', '2026-01-15', 1016, 84),
(135, 'Mumbai', 'Goa', '2025-12-29', 996, 94),
(136, 'Dehradun', 'Chennai', '2025-12-27', 2789, 61),
(137, 'Dehradun', 'Chennai', '2026-01-10', 918, 59),
(138, 'Lucknow', 'Patna', '2026-01-16', 3670, 50),
(139, 'Mumbai', 'Delhi', '2025-12-31', 925, 61),
(140, 'Jaipur', 'Chandigarh', '2025-12-28', 4458, 98),
(141, 'Patna', 'Delhi', '2025-12-29', 1421, 70),
(142, 'Chennai', 'Coimbatore', '2026-01-09', 4787, 58),
(143, 'Mumbai', 'Delhi', '2025-12-24', 4590, 64),
(144, 'Hyderabad', 'Mysore', '2026-01-13', 4714, 88),
(145, 'Patna', 'Dehradun', '2026-01-14', 4941, 85),
(146, 'Coimbatore', 'Mumbai', '2025-12-24', 4030, 68),
(147, 'Kolkata', 'Varanasi', '2026-01-18', 2606, 60),
(148, 'Bangalore', 'Chandigarh', '2026-01-07', 310, 78),
(149, 'Coimbatore', 'Chennai', '2025-12-29', 3188, 89),
(150, 'Bhubaneswar', 'Hyderabad', '2026-01-08', 4158, 93),
(151, 'Trivandrum', 'Bangalore', '2025-12-29', 3099, 59),
(152, 'Delhi', 'Agra', '2025-12-30', 1139, 63),
(153, 'Varanasi', 'Agra', '2025-12-22', 4367, 54),
(154, 'Ahmedabad', 'Chandigarh', '2025-12-25', 4303, 86),
(155, 'Chennai', 'Hyderabad', '2026-01-01', 4845, 96),
(156, 'Mumbai', 'Bhubaneswar', '2026-01-17', 2047, 75),
(157, 'Chandigarh', 'Mumbai', '2025-12-23', 3773, 74),
(158, 'Patna', 'Delhi', '2026-01-02', 2530, 85),
(159, 'Ahmedabad', 'Chandigarh', '2025-12-31', 1109, 65),
(160, 'Bhubaneswar', 'Ahmedabad', '2025-12-29', 4942, 87),
(161, 'Chennai', 'Coimbatore', '2026-01-14', 4008, 71),
(162, 'Dehradun', 'Coimbatore', '2026-01-12', 1495, 55),
(163, 'Varanasi', 'Goa', '2026-01-03', 2247, 94),
(164, 'Delhi', 'Jaipur', '2025-12-24', 2940, 57),
(165, 'Jaipur', 'Ahmedabad', '2025-12-28', 2155, 67),
(166, 'Goa', 'Bhubaneswar', '2026-01-07', 4305, 98),
(167, 'Trivandrum', 'Mumbai', '2026-01-14', 1477, 92),
(168, 'Chandigarh', 'Delhi', '2025-12-26', 4117, 75),
(169, 'Agra', 'Chandigarh', '2026-01-12', 4770, 68),
(170, 'Lucknow', 'Hyderabad', '2026-01-20', 2494, 51),
(171, 'Chandigarh', 'Pune', '2025-12-25', 2604, 78),
(172, 'Bhubaneswar', 'Ahmedabad', '2025-12-25', 1619, 65),
(173, 'Agra', 'Mumbai', '2026-01-18', 1532, 58),
(174, 'Jaipur', 'Pune', '2026-01-05', 1080, 68),
(175, 'Mysore', 'Chandigarh', '2026-01-19', 413, 91),
(176, 'Bangalore', 'Trivandrum', '2026-01-10', 1373, 58),
(177, 'Bhubaneswar', 'Pune', '2025-12-30', 4414, 67),
(178, 'Bhubaneswar', 'Mumbai', '2025-12-26', 1585, 86),
(179, 'Chennai', 'Goa', '2026-01-12', 2084, 67),
(180, 'Mysore', 'Bhubaneswar', '2026-01-10', 1914, 75),
(181, 'Varanasi', 'Jaipur', '2026-01-05', 1322, 58),
(182, 'Chennai', 'Lucknow', '2026-01-05', 3988, 94),
(183, 'Mysore', 'Trivandrum', '2026-01-08', 2311, 86),
(184, 'Kolkata', 'Bangalore', '2026-01-07', 4477, 100),
(185, 'Agra', 'Lucknow', '2026-01-04', 2087, 63),
(186, 'Mysore', 'Delhi', '2026-01-14', 3189, 98),
(187, 'Chandigarh', 'Chennai', '2025-12-26', 2382, 85),
(188, 'Varanasi', 'Trivandrum', '2025-12-27', 4516, 89),
(189, 'Varanasi', 'Bhubaneswar', '2026-01-15', 2907, 92),
(190, 'Dehradun', 'Delhi', '2026-01-12', 4869, 60),
(191, 'Varanasi', 'Delhi', '2025-12-30', 4780, 50),
(192, 'Mysore', 'Lucknow', '2026-01-08', 4042, 60),
(193, 'Chandigarh', 'Delhi', '2025-12-22', 2768, 70),
(194, 'Bhubaneswar', 'Coimbatore', '2026-01-12', 3825, 98),
(195, 'Agra', 'Chennai', '2025-12-27', 4137, 76),
(196, 'Mysore', 'Varanasi', '2025-12-31', 1813, 65),
(197, 'Jaipur', 'Bangalore', '2025-12-28', 398, 56),
(198, 'Lucknow', 'Hyderabad', '2026-01-04', 2991, 96),
(199, 'Dehradun', 'Hyderabad', '2025-12-23', 2838, 86),
(200, 'Trivandrum', 'Delhi', '2025-12-29', 4388, 95),
(201, 'Ahmedabad', 'Mysore', '2025-12-23', 4861, 75),
(202, 'Chandigarh', 'Kolkata', '2026-01-18', 2581, 53),
(203, 'Chennai', 'Delhi', '2026-01-10', 2073, 82),
(204, 'Bangalore', 'Chennai', '2025-12-24', 2325, 85),
(205, 'Trivandrum', 'Ahmedabad', '2025-12-22', 577, 62),
(206, 'Bhubaneswar', 'Patna', '2026-01-15', 2177, 99),
(207, 'Agra', 'Lucknow', '2026-01-08', 1511, 50),
(208, 'Varanasi', 'Ahmedabad', '2026-01-08', 3031, 95),
(209, 'Chandigarh', 'Amritsar', '2025-12-25', 500, 0),
(210, 'Ludhiana', 'Delhi', '2025-12-25', 600, 0),
(211, 'Patiala', 'Mumbai', '2025-12-26', 1200, 0),
(212, 'Jalandhar', 'Bangalore', '2025-12-27', 1500, 0),
(213, 'Delhi', 'Kolkata', '2025-12-28', 1300, 0),
(214, 'Bangalore', 'Hyderabad', '2025-12-29', 700, 0),
(215, 'Chandigarh', 'Amritsar', '2025-12-25', 400, 0),
(216, 'Ludhiana', 'Jalandhar', '2025-12-25', 350, 0),
(217, 'Patiala', 'Chandigarh', '2025-12-25', 300, 0),
(218, 'Amritsar', 'Delhi', '2025-12-25', 500, 0),
(219, 'Jalandhar', 'Chandigarh', '2025-12-25', 360, 0),
(220, 'Chandigarh', 'Amritsar', '2025-12-25', 400, 95),
(221, 'Ludhiana', 'Jalandhar', '2025-12-25', 350, 90),
(222, 'Patiala', 'Chandigarh', '2025-12-25', 300, 80),
(223, 'Amritsar', 'Delhi', '2025-12-25', 500, 98),
(224, 'Jalandhar', 'Chandigarh', '2025-12-25', 360, 85),
(225, 'Mohali', 'Bathinda', '2025-12-25', 380, 87),
(226, 'Hoshiarpur', 'Patiala', '2025-12-25', 340, 83),
(227, 'Ahmedabad', 'Bangalore', '2025-12-28', 1664, 73),
(228, 'Hyderabad', 'Chennai', '2025-12-27', 3514, 59),
(229, 'Pune', 'Agra', '2026-01-08', 2175, 100),
(230, 'Chennai', 'Delhi', '2026-01-18', 2554, 82),
(231, 'Bangalore', 'Goa', '2026-01-16', 450, 70),
(232, 'Trivandrum', 'Agra', '2025-12-24', 3261, 65),
(233, 'Chennai', 'Chandigarh', '2026-01-02', 3106, 63),
(234, 'Trivandrum', 'Delhi', '2026-01-14', 3188, 78),
(235, 'Coimbatore', 'Dehradun', '2026-01-06', 4138, 81),
(236, 'Bangalore', 'Pune', '2025-12-23', 1714, 50),
(237, 'Hyderabad', 'Goa', '2025-12-26', 1853, 98),
(238, 'Coimbatore', 'Mysore', '2025-12-24', 3236, 96),
(239, 'Bangalore', 'Agra', '2026-01-20', 2845, 82),
(240, 'Delhi', 'Agra', '2026-01-04', 2037, 90),
(241, 'Mysore', 'Chandigarh', '2025-12-24', 4483, 56),
(242, 'Dehradun', 'Bhubaneswar', '2026-01-21', 649, 97),
(243, 'Bangalore', 'Agra', '2026-01-18', 532, 73),
(244, 'Mumbai', 'Bhubaneswar', '2026-01-06', 3465, 79),
(245, 'Hyderabad', 'Trivandrum', '2025-12-23', 2846, 93),
(246, 'Dehradun', 'Delhi', '2026-01-21', 656, 89),
(247, 'Ahmedabad', 'Pune', '2025-12-24', 3428, 51),
(248, 'Patna', 'Chandigarh', '2025-12-25', 1690, 69),
(249, 'Lucknow', 'Chennai', '2026-01-16', 2702, 100),
(250, 'Trivandrum', 'Ahmedabad', '2025-12-28', 1330, 96),
(251, 'Pune', 'Varanasi', '2026-01-08', 4212, 100),
(252, 'Pune', 'Mumbai', '2025-12-29', 779, 94),
(253, 'Goa', 'Kolkata', '2026-01-01', 3525, 77),
(254, 'Bhubaneswar', 'Mysore', '2026-01-13', 1963, 79),
(255, 'Lucknow', 'Delhi', '2025-12-25', 3709, 95),
(256, 'Hyderabad', 'Goa', '2026-01-20', 1727, 78),
(257, 'Jaipur', 'Coimbatore', '2026-01-03', 3208, 70),
(258, 'Goa', 'Coimbatore', '2026-01-15', 4876, 66),
(259, 'Pune', 'Bangalore', '2025-12-24', 2954, 61),
(260, 'Bhubaneswar', 'Pune', '2026-01-01', 2353, 57),
(261, 'Ahmedabad', 'Kolkata', '2026-01-11', 3125, 98),
(262, 'Delhi', 'Goa', '2025-12-31', 4957, 59),
(263, 'Mysore', 'Dehradun', '2026-01-18', 1931, 57),
(264, 'Patna', 'Goa', '2026-01-18', 2727, 73),
(265, 'Hyderabad', 'Coimbatore', '2026-01-10', 706, 52),
(266, 'Bhubaneswar', 'Bangalore', '2026-01-01', 2415, 56),
(267, 'Bhubaneswar', 'Kolkata', '2026-01-09', 3763, 84),
(268, 'Trivandrum', 'Bhubaneswar', '2026-01-10', 2616, 83),
(269, 'Trivandrum', 'Bangalore', '2026-01-09', 1028, 59),
(270, 'Patna', 'Bhubaneswar', '2025-12-26', 3986, 69),
(271, 'Mysore', 'Bangalore', '2026-01-13', 1681, 58),
(272, 'Goa', 'Lucknow', '2025-12-26', 2214, 88),
(273, 'Dehradun', 'Agra', '2026-01-17', 2049, 63),
(274, 'Agra', 'Mysore', '2026-01-02', 2760, 74),
(275, 'Bhubaneswar', 'Agra', '2026-01-18', 3824, 66),
(276, 'Dehradun', 'Trivandrum', '2025-12-28', 3985, 95),
(277, 'Agra', 'Lucknow', '2026-01-06', 1520, 50),
(278, 'Jaipur', 'Ahmedabad', '2026-01-05', 836, 83),
(279, 'Pune', 'Ahmedabad', '2025-12-23', 1012, 85),
(280, 'Lucknow', 'Patna', '2026-01-09', 4769, 56),
(281, 'Coimbatore', 'Hyderabad', '2026-01-11', 350, 87),
(282, 'Patna', 'Hyderabad', '2025-12-29', 3972, 83),
(283, 'Dehradun', 'Goa', '2025-12-26', 3105, 81),
(284, 'Chennai', 'Chandigarh', '2026-01-20', 4591, 58),
(285, 'Dehradun', 'Chennai', '2025-12-26', 1384, 74),
(286, 'Dehradun', 'Mumbai', '2026-01-12', 2194, 50),
(287, 'Chennai', 'Pune', '2026-01-11', 1998, 62),
(288, 'Mysore', 'Lucknow', '2025-12-29', 3198, 65),
(289, 'Ahmedabad', 'Patna', '2026-01-18', 4225, 53),
(290, 'Chandigarh', 'Agra', '2026-01-04', 2856, 66),
(291, 'Agra', 'Mumbai', '2026-01-08', 536, 68),
(292, 'Ahmedabad', 'Mysore', '2026-01-14', 1629, 59),
(293, 'Lucknow', 'Bangalore', '2026-01-01', 937, 72),
(294, 'Bhubaneswar', 'Ahmedabad', '2026-01-19', 3142, 62),
(295, 'Chandigarh', 'Mysore', '2025-12-27', 4445, 58),
(296, 'Patna', 'Chennai', '2026-01-08', 2638, 83),
(297, 'Coimbatore', 'Pune', '2026-01-16', 4663, 93),
(298, 'Coimbatore', 'Patna', '2026-01-12', 3389, 60),
(299, 'Jaipur', 'Mysore', '2026-01-21', 3921, 77),
(300, 'Coimbatore', 'Mumbai', '2025-12-27', 2351, 79),
(301, 'Hyderabad', 'Goa', '2026-01-15', 664, 52),
(302, 'Ahmedabad', 'Bangalore', '2026-01-10', 3941, 56),
(303, 'Kolkata', 'Lucknow', '2026-01-15', 4805, 82),
(304, 'Agra', 'Kolkata', '2025-12-23', 2005, 73),
(305, 'Dehradun', 'Bangalore', '2025-12-27', 1816, 75),
(306, 'Coimbatore', 'Lucknow', '2025-12-24', 761, 65),
(307, 'Jaipur', 'Bangalore', '2026-01-12', 375, 62),
(308, 'Jaipur', 'Lucknow', '2026-01-06', 4046, 97),
(309, 'Ahmedabad', 'Goa', '2026-01-16', 435, 78),
(310, 'Dehradun', 'Chennai', '2026-01-10', 3030, 61),
(311, 'Pune', 'Mumbai', '2025-12-26', 2065, 56),
(312, 'Jaipur', 'Goa', '2025-12-28', 574, 87),
(313, 'Kolkata', 'Mysore', '2025-12-31', 4202, 99),
(314, 'Chandigarh', 'Jaipur', '2026-01-18', 3088, 84),
(315, 'Varanasi', 'Mumbai', '2026-01-14', 941, 80),
(316, 'Ahmedabad', 'Goa', '2026-01-17', 2792, 70),
(317, 'Agra', 'Mumbai', '2026-01-07', 4696, 73),
(318, 'Chandigarh', 'Kolkata', '2026-01-20', 2353, 85),
(319, 'Bangalore', 'Trivandrum', '2026-01-19', 3225, 64),
(320, 'Chennai', 'Ahmedabad', '2025-12-31', 1543, 57),
(321, 'Goa', 'Agra', '2026-01-16', 873, 65),
(322, 'Delhi', 'Agra', '2026-01-10', 3307, 79),
(323, 'Mumbai', 'Agra', '2026-01-03', 1662, 100),
(324, 'Mysore', 'Ahmedabad', '2026-01-09', 1841, 72),
(325, 'Mumbai', 'Dehradun', '2026-01-21', 4378, 91),
(326, 'Hyderabad', 'Kolkata', '2026-01-17', 792, 75),
(327, 'Trivandrum', 'Hyderabad', '2025-12-28', 2345, 93),
(328, 'Ahmedabad', 'Jaipur', '2025-12-23', 2088, 74),
(329, 'Delhi', 'Mumbai', '2026-01-16', 2666, 54),
(330, 'Bhubaneswar', 'Coimbatore', '2026-01-04', 1768, 74),
(331, 'Dehradun', 'Mumbai', '2025-12-31', 2996, 87),
(332, 'Coimbatore', 'Chennai', '2026-01-02', 519, 98),
(333, 'Pune', 'Agra', '2026-01-04', 667, 77),
(334, 'Mysore', 'Bhubaneswar', '2025-12-25', 1096, 78),
(335, 'Hyderabad', 'Mumbai', '2025-12-23', 1964, 89),
(336, 'Dehradun', 'Mysore', '2025-12-29', 2364, 79),
(337, 'Lucknow', 'Agra', '2026-01-01', 2359, 73),
(338, 'Mysore', 'Chandigarh', '2025-12-26', 467, 89),
(339, 'Agra', 'Mysore', '2026-01-06', 4159, 61),
(340, 'Dehradun', 'Kolkata', '2025-12-28', 1792, 92),
(341, 'Patna', 'Bangalore', '2026-01-04', 3155, 90),
(342, 'Chandigarh', 'Delhi', '2025-12-25', 341, 78),
(343, 'Trivandrum', 'Patna', '2025-12-27', 2235, 89),
(344, 'Delhi', 'Chennai', '2025-12-26', 2183, 81),
(345, 'Chennai', 'Lucknow', '2025-12-23', 1189, 57),
(346, 'Coimbatore', 'Bangalore', '2025-12-27', 4911, 87),
(347, 'Chandigarh', 'Bangalore', '2026-01-12', 1370, 60),
(348, 'Mysore', 'Mumbai', '2025-12-29', 4740, 53),
(349, 'Coimbatore', 'Delhi', '2025-12-30', 3359, 84),
(350, 'Bhubaneswar', 'Chandigarh', '2025-12-25', 1326, 99),
(351, 'Coimbatore', 'Patna', '2025-12-25', 2594, 72),
(352, 'Varanasi', 'Trivandrum', '2026-01-06', 1290, 55),
(353, 'Coimbatore', 'Trivandrum', '2025-12-27', 4019, 68),
(354, 'Mumbai', 'Jaipur', '2026-01-07', 4369, 82),
(355, 'Patna', 'Hyderabad', '2025-12-29', 2350, 64),
(356, 'Hyderabad', 'Agra', '2026-01-14', 2402, 68),
(357, 'Coimbatore', 'Mysore', '2026-01-14', 4763, 58),
(358, 'Ahmedabad', 'Jaipur', '2026-01-04', 1977, 53),
(359, 'Mysore', 'Chennai', '2025-12-23', 387, 72),
(360, 'Hyderabad', 'Chandigarh', '2026-01-12', 658, 51),
(361, 'Hyderabad', 'Chandigarh', '2026-01-16', 2352, 72),
(362, 'Hyderabad', 'Varanasi', '2026-01-20', 1208, 72),
(363, 'Hyderabad', 'Ahmedabad', '2025-12-28', 2484, 51),
(364, 'Patna', 'Dehradun', '2026-01-15', 1521, 100),
(365, 'Bhubaneswar', 'Bangalore', '2025-12-23', 2590, 80),
(366, 'Pune', 'Trivandrum', '2026-01-19', 1528, 52),
(367, 'Chennai', 'Delhi', '2025-12-27', 4850, 54),
(368, 'Pune', 'Lucknow', '2026-01-20', 4804, 64),
(369, 'Lucknow', 'Pune', '2025-12-31', 3730, 71),
(370, 'Goa', 'Chandigarh', '2026-01-02', 3751, 100),
(371, 'Kolkata', 'Goa', '2026-01-02', 3900, 51),
(372, 'Bangalore', 'Dehradun', '2026-01-21', 2425, 89),
(373, 'Agra', 'Lucknow', '2026-01-02', 3955, 64),
(374, 'Varanasi', 'Ahmedabad', '2026-01-20', 3955, 93),
(375, 'Agra', 'Trivandrum', '2026-01-19', 3011, 67),
(376, 'Chandigarh', 'Kolkata', '2026-01-07', 2208, 76),
(377, 'Hyderabad', 'Bangalore', '2026-01-05', 3149, 77),
(378, 'Goa', 'Ahmedabad', '2026-01-15', 1253, 61),
(379, 'Coimbatore', 'Agra', '2026-01-14', 859, 51),
(380, 'Varanasi', 'Bangalore', '2026-01-10', 2077, 79),
(381, 'Coimbatore', 'Pune', '2025-12-28', 4762, 54),
(382, 'Coimbatore', 'Dehradun', '2026-01-01', 3452, 72),
(383, 'Chennai', 'Goa', '2025-12-26', 4001, 83),
(384, 'Trivandrum', 'Dehradun', '2026-01-08', 4193, 95),
(385, 'Goa', 'Pune', '2026-01-12', 2992, 99),
(386, 'Agra', 'Kolkata', '2026-01-08', 1236, 64),
(387, 'Jaipur', 'Bangalore', '2026-01-06', 3642, 61),
(388, 'Chennai', 'Trivandrum', '2025-12-25', 1992, 60),
(389, 'Bangalore', 'Hyderabad', '2026-01-18', 3885, 78),
(390, 'Mysore', 'Jaipur', '2026-01-04', 4811, 94),
(391, 'Dehradun', 'Chandigarh', '2025-12-30', 4502, 82),
(392, 'Agra', 'Pune', '2026-01-14', 1014, 55),
(393, 'Coimbatore', 'Varanasi', '2025-12-24', 1656, 93),
(394, 'Chandigarh', 'Pune', '2026-01-16', 2112, 99),
(395, 'Chandigarh', 'Coimbatore', '2026-01-07', 4904, 79),
(396, 'Bhubaneswar', 'Bangalore', '2026-01-14', 3466, 60),
(397, 'Patna', 'Jaipur', '2026-01-19', 3098, 96),
(398, 'Delhi', 'Hyderabad', '2025-12-28', 1583, 78),
(399, 'Hyderabad', 'Dehradun', '2026-01-03', 2267, 85),
(400, 'Lucknow', 'Mumbai', '2026-01-21', 485, 70),
(401, 'Bhubaneswar', 'Coimbatore', '2026-01-03', 4327, 75),
(402, 'Dehradun', 'Mysore', '2026-01-19', 1109, 50),
(403, 'Coimbatore', 'Bhubaneswar', '2025-12-25', 2670, 70),
(404, 'Bhubaneswar', 'Varanasi', '2026-01-15', 2953, 97),
(405, 'Mysore', 'Trivandrum', '2026-01-12', 2631, 54),
(406, 'Hyderabad', 'Chandigarh', '2026-01-13', 1436, 72),
(407, 'Kolkata', 'Hyderabad', '2026-01-01', 2500, 57),
(408, 'Goa', 'Mumbai', '2026-01-03', 1746, 95),
(409, 'Hyderabad', 'Trivandrum', '2025-12-25', 2754, 88),
(410, 'Ahmedabad', 'Delhi', '2025-12-31', 3495, 63),
(411, 'Trivandrum', 'Pune', '2026-01-12', 950, 52),
(412, 'Coimbatore', 'Ahmedabad', '2026-01-16', 3007, 78),
(413, 'Hyderabad', 'Dehradun', '2026-01-09', 3899, 89),
(414, 'Coimbatore', 'Delhi', '2025-12-26', 1365, 75),
(415, 'Pune', 'Varanasi', '2026-01-08', 3759, 100),
(416, 'Chandigarh', 'Mumbai', '2025-12-26', 1092, 96),
(417, 'Chennai', 'Ahmedabad', '2025-12-27', 654, 85),
(418, 'Dehradun', 'Lucknow', '2025-12-24', 4028, 81),
(419, 'Agra', 'Bangalore', '2025-12-31', 4030, 95),
(420, 'Jaipur', 'Delhi', '2026-01-14', 3458, 95),
(421, 'Bhubaneswar', 'Mysore', '2026-01-06', 982, 97),
(422, 'Chennai', 'Goa', '2026-01-12', 2795, 85),
(423, 'Chennai', 'Bhubaneswar', '2026-01-03', 3749, 69),
(424, 'Agra', 'Chandigarh', '2025-12-25', 2965, 56),
(425, 'Chandigarh', 'Bangalore', '2025-12-29', 969, 70),
(426, 'Pune', 'Varanasi', '2025-12-30', 2485, 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabs`
--
ALTER TABLE `cabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_query`
--
ALTER TABLE `quick_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `cabs`
--
ALTER TABLE `cabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quick_query`
--
ALTER TABLE `quick_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
