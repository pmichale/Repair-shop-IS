-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2022 at 04:27 PM
-- Server version: 8.0.18
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m192291`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id_device` int(11) NOT NULL,
  `device_name` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id_device`, `device_name`) VALUES
(1, 'iPhone'),
(2, 'iPhone 3G'),
(3, 'iPhone 3GS'),
(4, 'iPhone 4'),
(5, 'iPhone 4S'),
(6, 'iPhone 5'),
(7, 'iPhone 5C'),
(8, 'iPhone 5S'),
(9, 'iPhone 6'),
(10, 'iPhone 6 Plus'),
(11, 'iPhone 6S'),
(12, 'iPhone 6S Plus'),
(13, 'iPhone SE (2016)'),
(14, 'iPhone 7'),
(15, 'iPhone 7 Plus'),
(16, 'iPhone 8'),
(17, 'iPhone 8 Plus'),
(18, 'iPhone X'),
(19, 'iPhone Xr'),
(20, 'iPhone XS'),
(21, 'iPhone XS Max'),
(22, 'iPhone 11'),
(23, 'iPhone 11 Pro'),
(24, 'iPhone 11 Pro Max'),
(25, 'iPhone SE (2020)'),
(26, 'iPhone 12 mini'),
(27, 'iPhone 12'),
(28, 'iPhone 12 Pro'),
(29, 'iPhone 12 Pro Max'),
(30, 'iPhone 13'),
(31, 'iPhone 13 Pro'),
(32, 'iPhone 13 Pro Max'),
(33, 'iPhone SE (2022)'),
(34, 'iPad'),
(35, 'iPad 2'),
(36, 'iPad 3'),
(37, 'iPad 4'),
(38, 'iPad (2017)'),
(39, 'iPad (2018)'),
(40, 'iPad (2019)'),
(41, 'iPad (2020)'),
(42, 'iPad (2021)'),
(43, 'iPad Air'),
(44, 'iPad Air 2'),
(45, 'iPad Air (2019)'),
(46, 'iPad Air (2020)'),
(47, 'iPad Air (2022)'),
(48, 'iPad mini'),
(49, 'iPad mini 2'),
(50, 'iPad mini 3'),
(51, 'iPad mini 4'),
(52, 'iPad mini (2019)'),
(53, 'iPad mini (2021)'),
(54, 'iPad Pro 9.7\"'),
(55, 'iPad Pro 12.9\" (2015)'),
(56, 'iPad Pro 12.9\" (2017)'),
(57, 'iPad Pro 12.9\" (2018)'),
(58, 'iPad Pro 12.9\" (2020)'),
(59, 'iPad Pro 12.9\" (2021)'),
(60, 'iPad Pro 10.5\"'),
(61, 'iPad Pro 11\" (2018)'),
(62, 'iPad Pro 11\" (2020)'),
(63, 'iPad Pro 11\" (2021)'),
(64, 'iPhone 13 mini');

-- --------------------------------------------------------

--
-- Table structure for table `device_color`
--

CREATE TABLE `device_color` (
  `id_device_color` int(11) NOT NULL,
  `color` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `device_color`
--

INSERT INTO `device_color` (`id_device_color`, `color`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Blue'),
(4, 'Green'),
(5, 'Pink'),
(6, 'Yellow'),
(7, 'Gold'),
(8, 'Silver'),
(9, 'Space Gray'),
(10, 'Rose Gold'),
(11, 'Jet Black'),
(12, 'Product Red'),
(13, 'Coral'),
(14, 'Purple'),
(15, 'Midnight Green'),
(16, 'Graphite'),
(17, 'Pacific Blue'),
(18, 'Starlight'),
(19, 'Midnight'),
(20, 'Pink'),
(21, 'Sierra Blue'),
(22, 'Alpine Green');

-- --------------------------------------------------------

--
-- Table structure for table `device_has_device_color`
--

CREATE TABLE `device_has_device_color` (
  `device_id_device` int(11) NOT NULL,
  `device_color_id_device_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `device_has_device_color`
--

INSERT INTO `device_has_device_color` (`device_id_device`, `device_color_id_device_color`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(14, 1),
(15, 1),
(19, 1),
(22, 1),
(25, 1),
(26, 1),
(27, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(48, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(19, 2),
(22, 2),
(25, 2),
(26, 2),
(27, 2),
(35, 2),
(36, 2),
(37, 2),
(7, 3),
(19, 3),
(26, 3),
(27, 3),
(30, 3),
(47, 3),
(64, 3),
(7, 4),
(22, 4),
(26, 4),
(27, 4),
(46, 4),
(7, 5),
(30, 5),
(47, 5),
(53, 5),
(64, 5),
(7, 6),
(19, 6),
(22, 6),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(15, 7),
(16, 7),
(17, 7),
(20, 7),
(21, 7),
(23, 7),
(24, 7),
(28, 7),
(29, 7),
(31, 7),
(32, 7),
(38, 7),
(39, 7),
(40, 7),
(41, 7),
(44, 7),
(45, 7),
(50, 7),
(51, 7),
(52, 7),
(54, 7),
(55, 7),
(56, 7),
(60, 7),
(1, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(18, 8),
(20, 8),
(21, 8),
(23, 8),
(24, 8),
(28, 8),
(29, 8),
(31, 8),
(32, 8),
(38, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 8),
(43, 8),
(44, 8),
(45, 8),
(46, 8),
(48, 8),
(49, 8),
(50, 8),
(51, 8),
(52, 8),
(54, 8),
(55, 8),
(56, 8),
(57, 8),
(58, 8),
(59, 8),
(60, 8),
(61, 8),
(62, 8),
(63, 8),
(8, 9),
(9, 9),
(10, 9),
(11, 9),
(12, 9),
(13, 9),
(16, 9),
(17, 9),
(18, 9),
(20, 9),
(21, 9),
(23, 9),
(24, 9),
(38, 9),
(39, 9),
(40, 9),
(41, 9),
(42, 9),
(43, 9),
(44, 9),
(45, 9),
(46, 9),
(47, 9),
(49, 9),
(50, 9),
(51, 9),
(52, 9),
(53, 9),
(54, 9),
(55, 9),
(56, 9),
(57, 9),
(58, 9),
(59, 9),
(60, 9),
(61, 9),
(62, 9),
(63, 9),
(11, 10),
(12, 10),
(13, 10),
(14, 10),
(15, 10),
(46, 10),
(54, 10),
(55, 10),
(60, 10),
(14, 11),
(15, 11),
(15, 12),
(16, 12),
(17, 12),
(19, 12),
(22, 12),
(25, 12),
(26, 12),
(27, 12),
(30, 12),
(33, 12),
(64, 12),
(19, 13),
(22, 14),
(47, 14),
(53, 14),
(23, 15),
(24, 15),
(28, 16),
(29, 16),
(31, 16),
(32, 16),
(28, 17),
(29, 17),
(30, 18),
(33, 18),
(47, 18),
(53, 18),
(64, 18),
(30, 19),
(33, 19),
(64, 19),
(31, 21),
(32, 21),
(31, 22),
(32, 22);

-- --------------------------------------------------------

--
-- Table structure for table `device_has_device_storage`
--

CREATE TABLE `device_has_device_storage` (
  `device_id_device` int(11) NOT NULL,
  `device_storage_id_device_storage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `device_has_device_storage`
--

INSERT INTO `device_has_device_storage` (`device_id_device`, `device_storage_id_device_storage`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(7, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(43, 3),
(44, 3),
(48, 3),
(49, 3),
(50, 3),
(51, 3),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(43, 4),
(48, 4),
(49, 4),
(54, 4),
(55, 4),
(5, 5),
(6, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(37, 5),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 5),
(52, 5),
(53, 5),
(54, 5),
(55, 5),
(56, 5),
(60, 5),
(9, 6),
(10, 6),
(11, 6),
(12, 6),
(13, 6),
(14, 6),
(15, 6),
(16, 6),
(17, 6),
(19, 6),
(22, 6),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6),
(33, 6),
(37, 6),
(38, 6),
(39, 6),
(40, 6),
(41, 6),
(43, 6),
(44, 6),
(49, 6),
(50, 6),
(51, 6),
(54, 6),
(55, 6),
(57, 6),
(58, 6),
(59, 6),
(61, 6),
(62, 6),
(63, 6),
(64, 6),
(14, 7),
(15, 7),
(16, 7),
(17, 7),
(18, 7),
(19, 7),
(20, 7),
(21, 7),
(22, 7),
(23, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 7),
(30, 7),
(31, 7),
(32, 7),
(33, 7),
(42, 7),
(45, 7),
(46, 7),
(47, 7),
(52, 7),
(53, 7),
(56, 7),
(57, 7),
(58, 7),
(59, 7),
(60, 7),
(61, 7),
(62, 7),
(63, 7),
(64, 7),
(20, 8),
(21, 8),
(23, 8),
(24, 8),
(28, 8),
(29, 8),
(30, 8),
(31, 8),
(32, 8),
(56, 8),
(57, 8),
(58, 8),
(59, 8),
(60, 8),
(61, 8),
(62, 8),
(63, 8),
(64, 8),
(31, 9),
(32, 9),
(57, 9),
(58, 9),
(59, 9),
(61, 9),
(62, 9),
(63, 9),
(59, 10),
(63, 10);

-- --------------------------------------------------------

--
-- Table structure for table `device_storage`
--

CREATE TABLE `device_storage` (
  `id_device_storage` int(11) NOT NULL,
  `storage` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `device_storage`
--

INSERT INTO `device_storage` (`id_device_storage`, `storage`) VALUES
(1, '4 GB'),
(2, '8 GB'),
(3, '16 GB'),
(4, '32 GB'),
(5, '64 GB'),
(6, '128 GB'),
(7, '256 GB'),
(8, '512 GB'),
(9, '1 TB'),
(10, '2 TB');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `initial_state` longtext COLLATE utf8mb4_czech_ci NOT NULL,
  `resulting_state` longtext COLLATE utf8mb4_czech_ci NOT NULL,
  `IMEI_SN` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_device_storage` int(11) DEFAULT NULL,
  `id_device_color` int(11) DEFAULT NULL,
  `reservation_id_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `initial_state`, `resulting_state`, `IMEI_SN`, `user_id`, `id_device_storage`, `id_device_color`, `reservation_id_reservation`) VALUES
(19, 'běžné opotřebení, špinavý', 'Proběhlo čištění. Test OK.', 'ABCD1234', 1, 7, 8, 1),
(20, 'běžné opotřebení, slabá baterie', 'Byla vyměněna baterie. Test OK.', '48392104801298409', 1, 5, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `order_has_part`
--

CREATE TABLE `order_has_part` (
  `part_id_part` int(11) NOT NULL,
  `orders_id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `order_has_part`
--

INSERT INTO `order_has_part` (`part_id_part`, `orders_id_order`) VALUES
(4, 20),
(15, 19);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id_part` int(11) NOT NULL,
  `part_name` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id_part`, `part_name`, `price`) VALUES
(1, 'Displej', 2999),
(2, 'Housing', 2499),
(3, 'Lightning port', 1499),
(4, 'Baterie', 990),
(5, 'Home button', 849),
(6, 'Volume button', 990),
(7, 'Speaker', 549),
(8, 'Ear speaker', 999),
(9, 'Rear Camera', 2499),
(10, 'Front Camera', 1299),
(11, 'Diagnostika', 499),
(13, 'Camera lens', 799),
(15, 'Čištění', 299);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `customer_name` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `phone_number` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `problem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `reservation_date` datetime NOT NULL,
  `device_id_device` int(11) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `customer_name`, `phone_number`, `mail`, `problem`, `reservation_date`, `device_id_device`, `create_date`) VALUES
(1, 'Petr Michálek', '158', '192291@vutbr.cz', 'špinavý', '2022-05-05 18:19:00', 18, '2022-05-04 16:20:09'),
(20, 'Eva', '911', 'eva@eva.com', 'slabá baterie', '2022-05-19 21:22:00', 16, '2022-05-04 16:22:23'),
(21, 'Eva Michálková', '737431641', '221523@vut.cz', 'Rychlé vybíjení telefonu', '2022-05-04 16:38:00', 16, '2022-05-04 16:39:29'),
(22, 'Klarka Zostra Vy', '694200023', 'kl.arka@email.ru', 'Rozbity zada a trochu fotak', '2022-05-05 16:38:00', 25, '2022-05-04 16:39:40'),
(23, 'Prokop Dveře', '+421902922099', 'prokop.dv@seznam.cz', 'Pokazené tlačítko', '2022-05-08 12:00:00', 16, '2022-05-04 16:43:08'),
(24, 'Kajko Lustr', '888456258', 'XXkarohentaYY@teslamail.real', 'Baterka se nafoukla a rozbila záda a displej', '2022-05-06 16:41:00', 32, '2022-05-04 16:43:48'),
(25, 'Liam Effrone', '777800855', 'duchsvety@volaj.gb', 'Uklouznul mi ve sprse a ohnul se ram', '2022-05-20 16:45:00', 1, '2022-05-04 16:46:50'),
(26, 'Kamila Ženatá', '737911420', 'kung.fu.zanda@seznam.cz', 'Rozbitý displej', '2022-05-09 10:30:00', 59, '2022-05-04 16:52:29'),
(27, 'Standa Braník', '456312798', 'vut@vut.cz', 'baterie', '2022-05-06 11:11:00', 12, '2022-05-04 18:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_czech_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '2c0607b715d324b6309a59c5f5fcc6f1523e5c9832b10da7a48a711e26b65171e2244ac24b9b1bce8062e9884c05dfa83528c1e60539fd8a60b82c54cde395ae0111', 'Admine'),
(2, 'test', '4ec8d5c5d2b21f3b714095ba2bb3195ad8076996632527c152d4086dd1b4685d9f798d0a0f9a235e2af7c7b4c909e9da5a1774a1172456eb36c799e908b97f290929', 'Teste'),
(3, 'jirka', 'fd60f19361ef700a7f026819bc8851b2a4d3c30fe50409c502d69c471c9df05916174a6328f67c7e9bad1a4a8a301f70b9bd324328f8114cb02b87c102b80f1e0309', 'Jirko'),
(4, 'bean', '7483a103a1d704f5b1b2afa25e3343ad4cf8fade3a93f7209941adf9d9998891af78aaa1badc733d04b13ffaf3e7f5f7e26b5a8f08aa1b45eecd3a0c3f31d6c90089', 'Tiabeanie'),
(5, 'tira', '5cc983649b47f00b20fd40f7d218775058c49aa15a14a628bd7107c8b49a6197e7100bea1ef76c829926aa95d5b763e6a539a911fe6476e67f0cb332f67c46e10354', 'Tiramisu'),
(6, 'admin2', '2c0607b715d324b6309a59c5f5fcc6f1523e5c9832b10da7a48a711e26b65171e2244ac24b9b1bce8062e9884c05dfa83528c1e60539fd8a60b82c54cde395ae0111', 'Admine'),
(9, 'mazikeen', '8df3c682f7d95cdbb4ee3a07f5fb1f3deadd3b177ba62201915478e92bc0dff78ec9b10b7d8b0834ea35abf615ed07b090c6b86e9ba1126c4dfa167feb70c31e0386', 'Maze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indexes for table `device_color`
--
ALTER TABLE `device_color`
  ADD PRIMARY KEY (`id_device_color`);

--
-- Indexes for table `device_has_device_color`
--
ALTER TABLE `device_has_device_color`
  ADD PRIMARY KEY (`device_id_device`,`device_color_id_device_color`),
  ADD KEY `fk_device_has_device_color_device_color1_idx` (`device_color_id_device_color`),
  ADD KEY `fk_device_has_device_color_device1_idx` (`device_id_device`);

--
-- Indexes for table `device_has_device_storage`
--
ALTER TABLE `device_has_device_storage`
  ADD PRIMARY KEY (`device_id_device`,`device_storage_id_device_storage`),
  ADD KEY `fk_device_has_device_storage_device_storage1_idx` (`device_storage_id_device_storage`),
  ADD KEY `fk_device_has_device_storage_device1_idx` (`device_id_device`);

--
-- Indexes for table `device_storage`
--
ALTER TABLE `device_storage`
  ADD PRIMARY KEY (`id_device_storage`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`,`reservation_id_reservation`),
  ADD KEY `fk_order_employee1_idx` (`user_id`),
  ADD KEY `fk_order_device_storage1_idx` (`id_device_storage`),
  ADD KEY `fk_order_device_color1_idx` (`id_device_color`),
  ADD KEY `fk_orders_reservation1_idx` (`reservation_id_reservation`);

--
-- Indexes for table `order_has_part`
--
ALTER TABLE `order_has_part`
  ADD PRIMARY KEY (`part_id_part`,`orders_id_order`),
  ADD KEY `fk_orders_has_parts_parts1_idx` (`part_id_part`),
  ADD KEY `fk_orders_has_parts_orders1_idx` (`orders_id_order`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id_part`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `fk_reservation_device1_idx` (`device_id_device`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `device_color`
--
ALTER TABLE `device_color`
  MODIFY `id_device_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `device_storage`
--
ALTER TABLE `device_storage`
  MODIFY `id_device_storage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device_has_device_color`
--
ALTER TABLE `device_has_device_color`
  ADD CONSTRAINT `fk_device_has_device_color_device1` FOREIGN KEY (`device_id_device`) REFERENCES `device` (`id_device`),
  ADD CONSTRAINT `fk_device_has_device_color_device_color1` FOREIGN KEY (`device_color_id_device_color`) REFERENCES `device_color` (`id_device_color`);

--
-- Constraints for table `device_has_device_storage`
--
ALTER TABLE `device_has_device_storage`
  ADD CONSTRAINT `fk_device_has_device_storage_device1` FOREIGN KEY (`device_id_device`) REFERENCES `device` (`id_device`),
  ADD CONSTRAINT `fk_device_has_device_storage_device_storage1` FOREIGN KEY (`device_storage_id_device_storage`) REFERENCES `device_storage` (`id_device_storage`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_device_color1` FOREIGN KEY (`id_device_color`) REFERENCES `device_color` (`id_device_color`),
  ADD CONSTRAINT `fk_order_device_storage1` FOREIGN KEY (`id_device_storage`) REFERENCES `device_storage` (`id_device_storage`),
  ADD CONSTRAINT `fk_order_employee1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_orders_reservation1` FOREIGN KEY (`reservation_id_reservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Constraints for table `order_has_part`
--
ALTER TABLE `order_has_part`
  ADD CONSTRAINT `fk_orders_has_parts_orders1` FOREIGN KEY (`orders_id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `fk_orders_has_parts_parts1` FOREIGN KEY (`part_id_part`) REFERENCES `parts` (`id_part`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_device1` FOREIGN KEY (`device_id_device`) REFERENCES `device` (`id_device`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
