-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 11:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `pass`, `status`) VALUES
(1, 'Lijin', 'lijinsanthosh@mca.ajce.in', '9605017280', 'lijin123*', 0),
(5, 'nikky george', 'nikky@gmail.com', '9478374873', 'nikkyfor123', 1),
(6, 'jacob', 'jacob@gmail.com', '3434345464', 'jacobfor123', 1),
(7, 'aksahi', 'akshai@mca.ajce.in', '2132343453', 'hello123', 1),
(8, 'manas p', 'manasp@mca.ajce.in', '2323428378', 'manas123*', 0),
(9, 'Lijin', 'neljinsanthosh158@gmail.com', '9605017280', 'pazham', 1),
(10, 'nikky george', 'nikkygeorgephilip@mca.ajce.in', '7594959975', 'nikky123*', 1),
(11, 'kk', 'jerinpjose@mca.ajce.in', '5598797987', 'jerin@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `contact` int(200) NOT NULL,
  `amt_bricks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `Name`, `email`, `address`, `date`, `contact`, `amt_bricks`) VALUES
(1, 'kjkj', '', 'jkjkj', '2021-11-24', 2147483647, 5454),
(2, 'nikky george', '', 'nikky home', '2021-11-27', 39487562, 4390),
(6, 'nevin', '', 'nechikattu', '2021-11-30', 2147483647, 657),
(9, 'christy', '', 'aojfnaosn', '2021-11-30', 344555555, 32342),
(10, 'christy', '', 'aojfnaosn', '2021-11-30', 344555555, 32342),
(11, 'albin', '', 'efwe wefw', '2021-11-27', 2147483647, 300),
(20, 'christy sabu', '', 'christyfor kannimala', '2021-12-03', 1232312, 9393),
(22, 'christy', '', 'sadaid aijsdai asjd', '2021-12-17', 2147483647, 345),
(23, 'kevin', '', 'sadas adsdasd', '2021-12-22', 2147483647, 2345),
(24, 'kuranwdw', '', 'wdqwedc  qwdqwd', '2021-12-22', 2147483647, 23245),
(26, 'kuranwdw', '', 'wdqwedc  qwdqwd', '2021-12-22', 2147483647, 23245),
(29, 'jacob joji', '', 'ajsnc askja asjncaijs', '2021-12-22', 2147483647, 1223),
(30, 'jacob joji', '', 'ajsnc askja asjncaijs', '2021-12-22', 2147483647, 1223),
(31, 'fgrddasd', '', 'asdad asdas ad', '2021-12-30', 2147483647, 343),
(32, 'fgrddasd', '', 'asdad asdas ad', '2021-12-30', 2147483647, 343),
(34, 'christy', '', 'sadbas sdakjs ', '2021-12-31', 2147483647, 700),
(35, 'abison', '', 'abidon family dnoedn', '2021-12-07', 2147483647, 980),
(37, 'abison mathew', '', 'abison valley', '2021-12-28', 2147483647, 350),
(38, 'ebin johnson', '', 'ebin nechikattu', '2021-12-18', 2147483647, 56),
(39, 'ebin johnson', '', 'frrkh rfr', '2021-12-23', 587654432, 20000),
(40, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 2000),
(41, 'Abyson mathew', '', 'abyson kmannal', '2021-12-25', 2147483647, 100),
(42, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 2000),
(43, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 324),
(44, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 324),
(45, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 34),
(46, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 34),
(47, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-17', 2147483647, 23456),
(48, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-17', 2147483647, 100),
(49, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-23', 2147483647, 234),
(50, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-22', 2147483647, 100),
(51, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 100),
(52, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-16', 2147483647, 100),
(53, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-30', 2147483647, 500),
(54, 'Lali', '', 'lali kunnothu', '2021-12-24', 2147483647, 200),
(55, 'Amal joy ', '', 'amal thengumoodan', '2021-12-24', 984884848, 150),
(56, 'Kunni', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-15', 2147483647, 1500),
(57, 'mridul', '', 'asjdniascda', '2021-12-24', 1231123123, 10),
(58, 'abison mathew', '', 'NECHIKATRT(H),NEDUMKUNNAM(PO),NEDUMKUNNAM', '2021-12-23', 2147483647, 40),
(59, 'abison mathew', '', 'NECHIKATRT(H),NEDUMKUNNAM(PO),NEDUMKUNNAM', '2021-12-23', 2147483647, 300),
(60, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-29', 2147483647, 98),
(61, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2021-12-29', 2147483647, 98),
(62, 'ebin johnson', '', 'wdcqwe ewq efq', '2022-02-25', 2147483647, 20),
(63, 'Katta', '', 'Kattapana', '2022-02-26', 2147483647, 0),
(64, 'Manas', '', 'Kozikode', '2022-02-25', 2147483647, 500),
(65, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-02-23', 2147483647, -78),
(66, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-03-18', 2147483647, 1500),
(67, 'Nevin santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-03-31', 2147483647, 41),
(68, 'frank mathews', '', 'lksaj AXAKSX ', '2022-04-06', 2147483647, 150),
(69, 'jose', '', 'kdkhwehcwi kwjd', '2022-04-13', 84654656, 50),
(70, 'wew', '', 'efwef', '2022-04-14', 2147483647, 12),
(71, 'wew', '', 'efwef', '2022-04-14', 2147483647, 12),
(72, 'dfn', '', 'kjkb', '2022-04-22', 2147483647, 12),
(73, 'Lijin Santhoshsdf', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-04-14', 2147483647, 6),
(74, 'Lijin Santhosh one', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-04-22', 2147483647, 100),
(75, 'Lijin Santhosh three', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-04-15', 2147483647, 100),
(76, 'Lijin Santhosh', '', 'Nechikattu h Nedumkunnam Kottayam', '2022-04-05', 2147483647, 4),
(77, 'anu alex', 'nikkygeorgephilip@mca.ajce.in', 'dasdas asds da', '2022-04-14', 2147483647, 100),
(78, 'manas p', 'nikkygeorgephilip@mca.ajce.in', 'cnj  sdnajsd ', '2022-04-21', 2147483647, 50),
(79, 'lig', 'manasp@mca.ajce.in', 'Nechikattu(h) Nedukunnam(po) kottayam', '2022-04-15', 2147483647, 4),
(80, 'Lijin Santhosh', 'lijinsanthosh@mca.ajce.in', 'Nechikattu h Nedumkunnam Kottayam', '2022-04-14', 2147483647, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(100) NOT NULL,
  `card_name` varchar(200) NOT NULL,
  `expiry_date` varchar(150) NOT NULL,
  `cvv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(20) NOT NULL,
  `stock` int(30) NOT NULL,
  `price` int(20) NOT NULL,
  `imageurl` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `size`, `stock`, `price`, `imageurl`, `category`) VALUES
(24, '4 inch solid Block', '12\"x8\"x4\"', 900, 22, 'product_image/4solidbr.jpg', 'Cement_ based_bricks'),
(35, 'concrete window', '4 x 3', 10, 2000, 'product_image/window.jpg', 'other_building_materials'),
(39, '4 inch Hollow Blocks', '12 x 6 x 4', 150, 22, 'product_image/hol1.jpg', 'Cement_ based_bricks'),
(43, 'cement', '34', 150, 450, 'product_image/cement.jpg', 'other_building_materials'),
(44, '6 Inch solid block', '12 x 8 x 6', 100, 38, 'product_image/6inch.jpg', 'Cement_ based_bricks'),
(45, '8 inch solid', '12 x 8 x 8', 2000, 46, 'product_image/8solid.jpg', 'Cement_ based_bricks'),
(46, 'M sand', '100 feet', 10000, 2500, 'product_image/msand.jpg', 'other_building_materials'),
(47, 'Inter locks', '16 x 6 x 5', 2000, 33, 'product_image/inter.jpg', 'other_building_materials'),
(48, '123', '12', 212, 2147483647, 'product_image/addproduct.php', 'Cement_ based_bricks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
