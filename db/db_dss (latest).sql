-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2021 at 06:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpuid` int(11) NOT NULL,
  `cpuname` varchar(100) NOT NULL,
  `pdid` int(11) NOT NULL,
  `performance` float NOT NULL,
  `single` float NOT NULL,
  `intg` float NOT NULL,
  `intgocl` float NOT NULL,
  `ppw` float NOT NULL,
  `value` float NOT NULL,
  `cpuscore` float NOT NULL,
  `cpuprice` int(11) NOT NULL,
  `cpuview` int(11) NOT NULL,
  `s1` float NOT NULL,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s4` float NOT NULL,
  `s5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpuid`, `cpuname`, `pdid`, `performance`, `single`, `intg`, `intgocl`, `ppw`, `value`, `cpuscore`, `cpuprice`, `cpuview`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES
(1, 'Intel Core i7 5930K', 1, 10, 8.7, 0, 0, 6.2, 5.2, 6.2, 640, 365, 6.545, 5.335, 9.075, 8.375, 8.92),
(2, 'Intel Core i7 5820K', 1, 9.6, 8.3, 0, 0, 6.1, 5.5, 6.1, 439, 8, 6.43, 5.265, 8.775, 8.12, 8.595),
(3, 'AMD FX 8370', 2, 6.8, 6, 0, 0, 5.7, 6, 5.5, 169, 52, 5.285, 4.57, 6.57, 6.325, 6.445),
(4, 'Intel Core i3 4370', 1, 7.4, 10, 0, 7.2, 9.9, 6.5, 8.7, 179, 12, 6.795, 7.33, 7.69, 8.325, 8.285),
(5, 'AMD FX 8370E', 2, 7.2, 5.2, 0, 0, 6.1, 5.8, 5.5, 249, 3, 5.145, 4.69, 6.85, 6.485, 6.725),
(6, 'AMD FX 8320E', 2, 6.8, 5.7, 0, 0, 6.1, 6.6, 5.8, 109, 2, 5.41, 4.795, 6.655, 6.44, 6.515),
(7, 'Intel Core i7 5960X', 1, 9.4, 8.5, 0, 0, 6.1, 5, 6, 1110, 1, 6.28, 5.135, 8.585, 8, 8.485),
(8, 'Intel Core i7 4790K', 1, 9.4, 10, 6.7, 6.6, 10, 6.6, 9.7, 399, 15, 8.335, 8.36, 9.21, 9.36, 9.61),
(9, 'Intel Pentium G3470', 1, 6.2, 9.5, 0, 0, 9.7, 8.5, 9, 89, 0, 6.96, 6.325, 6.945, 7.8, 7.405),
(10, 'Intel Core i5 4690K', 1, 7.8, 9.2, 6.2, 6.7, 9.5, 6.7, 9.2, 350, 18, 7.665, 7.835, 7.93, 8.325, 8.365),
(11, 'Intel Core i5 4690', 1, 7.4, 9, 5.9, 6.4, 9.5, 6.8, 9, 325, 3, 7.5, 7.69, 7.63, 8.105, 8.085),
(12, 'Intel Core i7 4790', 1, 8.4, 9.1, 6.1, 6.8, 9.8, 6.3, 9.2, 359, 3, 7.67, 7.965, 8.365, 8.645, 8.82),
(13, 'Intel Core i5 4690S', 1, 8.8, 10, 6.9, 7.9, 8.8, 5.9, 8.3, 172, 0, 7.945, 7.955, 8.57, 8.69, 8.92),
(14, 'Intel Core i5 4590S', 1, 7.9, 9.6, 6.8, 7.6, 8.5, 5.9, 8.1, 159, 0, 7.59, 7.61, 7.845, 8.105, 8.22),
(15, 'Intel Core i5 4590', 1, 6.8, 8.6, 5.6, 6.1, 9.2, 6.9, 8.8, 294, 0, 7.22, 7.405, 7.14, 7.68, 7.58),
(16, 'Intel Core i7 4790S', 1, 9.9, 9.8, 6.9, 8, 9, 5.6, 8.4, 252, 0, 8.09, 8.18, 9.375, 9.23, 9.665),
(17, 'Intel Core i3 4170', 1, 7.1, 8.7, 0, 7.3, 9.5, 7, 8.5, 155, 0, 6.525, 7.2, 7.41, 7.93, 7.86),
(18, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 6.945, 7.025, 6.915, 7.375, 7.28),
(19, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 7.29, 5.77, 7.4, 7.24, 7.48),
(20, 'AMD A6 7400K', 2, 6.2, 5.9, 7.3, 8.2, 7.8, 8.6, 8.2, 54, 2, 7.09, 7.555, 6.585, 6.795, 6.57),
(21, 'Intel Core i3 4360', 1, 7.8, 9.6, 6.6, 7.8, 9.7, 6.4, 8.5, 229, 0, 7.745, 8.06, 7.94, 8.405, 8.455),
(22, 'Intel Pentium G3240', 1, 5.9, 6.6, 0, 6.8, 8.5, 7, 7.8, 64, 2, 5.65, 6.48, 6.305, 6.765, 6.62),
(23, 'Intel Celeron G1830', 1, 5.9, 6.2, 5.4, 0, 7.9, 7.7, 7.5, 52, 0, 6.54, 5.94, 6.295, 6.625, 6.43),
(24, 'Intel Core i3 4150', 1, 7.3, 8.9, 6.3, 7.6, 9.3, 6.7, 8.3, 109, 0, 7.47, 7.805, 7.52, 7.98, 7.96),
(25, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 6.945, 7.025, 6.915, 7.375, 7.28),
(26, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 7.29, 5.77, 7.4, 7.24, 7.48),
(27, 'Intel Pentium G3440', 1, 6, 8.4, 0, 6.8, 9, 7.2, 8.2, 82, 1, 6.21, 6.78, 6.54, 7.23, 6.99),
(28, 'AMD A10 7850K', 2, 8.2, 7, 10, 9.9, 9.1, 7.2, 8.9, 155, 0, 7.915, 8.645, 8.13, 8.145, 8.305),
(29, 'AMD A4 7300', 2, 5.3, 6.4, 0, 6.6, 7.2, 10, 8.1, 44, 29, 6.285, 6.53, 6.015, 6.41, 5.885),
(30, 'Intel Core i3 4160', 1, 7.1, 9, 6, 6.4, 9, 6.6, 8, 94, 0, 7.355, 7.45, 7.335, 7.81, 7.765),
(31, 'AMD A10 7870K', 2, 5.5, 5.5, 0, 10, 8.8, 8.3, 9.2, 160, 4, 5.68, 7.175, 6.11, 6.605, 6.325);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `resid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `resuser` varchar(20) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_comment`
--

INSERT INTO `product_comment` (`resid`, `product_name`, `resuser`, `comment`) VALUES
(1, 'Intel Core i7 5930k', 'admin', 'Powerful Performance '),
(3, 'GeForce GTX 1080', 'admin', 'Great Product'),
(4, 'Intel 730', 'admin', 'Great Feature');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `pdid` int(11) NOT NULL,
  `pdname` varchar(20) NOT NULL,
  `pdimg` varchar(100) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`pdid`, `pdname`, `pdimg`, `query`) VALUES
(0, 'Other', 'img/product/Other.png', '#'),
(1, 'Intel', 'img/product/Intel.png', 'https://ark.intel.com/search?q='),
(2, 'AMD', 'img/product/AMD.png', 'https://products.amd.com/en-us/search#k='),
(4, 'Nvidia', 'img/product/Nvidia.png', 'https://www.geforce.com/hardware/desktop-gpus?keys=');

-- --------------------------------------------------------

--
-- Table structure for table `product_response`
--

CREATE TABLE `product_response` (
  `resid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `resuser` varchar(20) NOT NULL,
  `likestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_response`
--

INSERT INTO `product_response` (`resid`, `product_name`, `resuser`, `likestatus`) VALUES
(1, 'Intel 730', 'admin', 1),
(2, 'Radeon RX 480', 'admin', 1),
(3, 'Intel Core i7 5930k', 'admin', 1),
(4, 'GeForce GTX 1080', 'admin', 0),
(5, 'AMD FX 8370', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spesification`
--

CREATE TABLE `spesification` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `sicon` varchar(100) NOT NULL,
  `psyntax` varchar(300) NOT NULL,
  `vsyntax` varchar(300) NOT NULL,
  `ssyntax` varchar(300) NOT NULL,
  `mram` int(11) NOT NULL,
  `pcperformance` int(11) NOT NULL,
  `pcsingle` int(11) NOT NULL,
  `pcintg` int(11) NOT NULL,
  `pcintgocl` int(11) NOT NULL,
  `pcppw` int(11) NOT NULL,
  `pcvalue` int(11) NOT NULL,
  `pvgaming` int(11) NOT NULL,
  `pvgraphics` int(11) NOT NULL,
  `pvcomputing` int(11) NOT NULL,
  `pvppw` int(11) NOT NULL,
  `pvvalue` int(11) NOT NULL,
  `pvnap` int(11) NOT NULL,
  `psreadp` int(11) NOT NULL,
  `pswritep` int(11) NOT NULL,
  `psrealwb` int(11) NOT NULL,
  `psbench` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesification`
--

INSERT INTO `spesification` (`sid`, `sname`, `description`, `sicon`, `psyntax`, `vsyntax`, `ssyntax`, `mram`, `pcperformance`, `pcsingle`, `pcintg`, `pcintgocl`, `pcppw`, `pcvalue`, `pvgaming`, `pvgraphics`, `pvcomputing`, `pvppw`, `pvvalue`, `pvnap`, `psreadp`, `pswritep`, `psrealwb`, `psbench`) VALUES
(1, 'Office Task', '', 'work', 'select *from cpu order by s1 asc', 'select *from vga order by s1 desc', 'select *from ssd order by s1 asc', 2, 25, 25, 15, 0, 5, 30, 0, 15, 0, 40, 30, 15, 25, 20, 45, 10),
(2, 'Home Usage', '', 'supervisor_account', 'select *from cpu order by s2 desc', 'select *from vga order by s2 asc', 'select *from ssd order by s2 desc ', 4, 20, 5, 10, 15, 30, 20, 20, 25, 0, 20, 20, 15, 25, 25, 40, 10),
(3, 'Gaming', '', 'games', 'select *from cpu order by s3 desc ', 'select *from vga order by s3 desc ', 'select *from ssd order by s3 desc ', 6, 75, 5, 0, 0, 10, 10, 60, 15, 0, 10, 5, 10, 35, 15, 15, 35),
(4, 'Graphic Rendering', '', 'terrain', 'select *from cpu order by s4 desc', 'select *from vga order by s4 desc', 'select *from ssd order by s4 desc ', 16, 50, 15, 0, 0, 25, 10, 15, 45, 15, 15, 5, 5, 20, 50, 20, 10),
(5, 'Computing, Simulation', '', 'gradient', 'select *from cpu order by s5 desc', 'select *from vga order by s5 desc', 'select *from ssd order by s5 desc', 32, 65, 10, 0, 0, 25, 0, 5, 25, 50, 15, 5, 0, 30, 20, 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `spesification_response`
--

CREATE TABLE `spesification_response` (
  `resid` int(11) NOT NULL,
  `resuser` varchar(20) NOT NULL,
  `ressid` int(11) NOT NULL,
  `feedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesification_response`
--

INSERT INTO `spesification_response` (`resid`, `resuser`, `ressid`, `feedback`) VALUES
(2, 'admin', 1, 1),
(3, 'admin', 4, 2),
(4, 'admin', 3, 1),
(5, 'dewi', 1, 1),
(6, 'admin', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ssd`
--

CREATE TABLE `ssd` (
  `ssdid` int(11) NOT NULL,
  `ssdname` varchar(100) NOT NULL,
  `pdid` int(11) NOT NULL,
  `readp` float NOT NULL,
  `writep` float NOT NULL,
  `realwb` float NOT NULL,
  `bench` float NOT NULL,
  `ssdscore` float NOT NULL,
  `ssdprice` int(11) NOT NULL,
  `ssdview` int(11) NOT NULL,
  `s1` float NOT NULL,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s4` float NOT NULL,
  `s5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssd`
--

INSERT INTO `ssd` (`ssdid`, `ssdname`, `pdid`, `readp`, `writep`, `realwb`, `bench`, `ssdscore`, `ssdprice`, `ssdview`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES
(1, 'Intel 750', 1, 10, 10, 10, 8.7, 9.2, 270, 22, 9.87, 9.87, 9.545, 9.87, 9.74),
(2, 'Toshiba HG6', 0, 6.7, 7.1, 7.5, 6.5, 6.8, 64, 2, 7.12, 7.1, 6.81, 7.04, 6.98),
(3, 'Plextor M6e Black Edition', 0, 6.3, 7, 8.6, 7, 7, 173, 11, 7.545, 7.465, 6.995, 7.18, 7.27),
(4, 'Plextor M6 Pro', 0, 6.4, 6.5, 7.3, 6.5, 6.5, 139, 0, 6.835, 6.795, 6.585, 6.64, 6.71),
(5, 'OCZ Vertex 460', 0, 6.5, 6.7, 7.9, 6.6, 6.7, 169, 1, 7.18, 7.12, 6.775, 6.89, 6.98),
(6, 'Corsair Force LS', 0, 5.8, 6.3, 7.8, 6.3, 6.4, 77, 0, 6.85, 6.775, 6.35, 6.5, 6.6),
(7, 'Crucial BX100', 0, 6.3, 6.5, 8.9, 6.8, 6.9, 92, 0, 7.56, 7.44, 6.895, 6.97, 7.22),
(8, 'Anglebird SSD wrk', 0, 6.3, 6.1, 7.6, 6.4, 6.5, 159, 0, 6.855, 6.78, 6.5, 6.47, 6.67),
(9, 'Crucial MX100', 0, 6, 6.5, 7.4, 6.3, 6.4, 179, 0, 6.76, 6.715, 6.39, 6.56, 6.58),
(10, 'Intel 730', 1, 6.7, 7.1, 8, 6.8, 7, 249, 338, 7.375, 7.33, 6.99, 7.17, 7.19),
(11, 'Plextor M6S', 0, 5.9, 6.2, 7.3, 6.4, 6.3, 64, 1, 6.64, 6.585, 6.33, 6.38, 6.48),
(12, 'Crucial M550', 0, 6, 6.6, 8.1, 6.5, 6.6, 128, 0, 7.115, 7.04, 6.58, 6.77, 6.85),
(13, 'SanDisk Extreme PRO SSD', 0, 6.3, 6.7, 7.7, 6.5, 6.6, 146, 0, 7.03, 6.98, 6.64, 6.8, 6.84),
(14, 'Toshiba HK4E', 0, 6.8, 6.9, 8.3, 6.9, 7, 958, 0, 7.505, 7.435, 7.075, 7.16, 7.29),
(15, 'Plextor S2C', 0, 6.5, 6, 8.4, 6.8, 6.8, 149, 0, 7.285, 7.165, 6.815, 6.66, 7.03),
(16, 'Gigastone Prime SS6200', 0, 6.2, 5.9, 8.3, 6.7, 6.7, 99, 0, 7.135, 7.015, 6.645, 6.52, 6.87),
(17, 'Kingstone HyperX Savage SSD', 0, 6.1, 6.5, 8, 6.7, 6.7, 119, 0, 7.095, 7.02, 6.655, 6.74, 6.87),
(18, 'Toshiba Q300', 0, 6.1, 5.6, 8, 6.3, 6.4, 119, 1, 6.875, 6.755, 6.38, 6.25, 6.61),
(19, 'Crucial MX200', 0, 6.1, 6.5, 8.1, 6.8, 6.7, 299, 0, 7.15, 7.07, 6.705, 6.77, 6.92),
(20, 'Toshiba HK3R2', 0, 6.8, 6.9, 8.1, 6.9, 7, 390, 2, 7.415, 7.355, 7.045, 7.12, 7.23),
(21, 'Plextor M7V', 0, 6.4, 6.5, 8.3, 6.7, 6.8, 129, 7, 7.305, 7.215, 6.805, 6.86, 7.05),
(22, 'Crucial BX200', 0, 6, 6.3, 8.1, 6.8, 6.7, 229, 0, 7.085, 6.995, 6.64, 6.65, 6.85),
(23, 'Plextor M6V', 0, 6.4, 6.2, 8.1, 6.8, 6.7, 151, 0, 7.165, 7.07, 6.765, 6.68, 6.95),
(24, 'Toshiba Q300 Pro', 0, 6.7, 6.7, 8.2, 6.8, 6.9, 119, 0, 7.385, 7.31, 6.96, 7.01, 7.17),
(25, 'Crucial MX300', 0, 6.3, 6.3, 8.2, 6.9, 6.9, 147, 0, 7.215, 7.12, 6.795, 6.74, 6.99),
(26, 'KingFast F8', 0, 5.7, 6, 7.4, 6.3, 6.2, 130, 0, 6.585, 6.515, 6.21, 6.25, 6.39),
(27, 'Kingston HyperX FURY', 0, 5.3, 6.3, 7.3, 6.1, 6.1, 148, 0, 6.48, 6.43, 6.03, 6.28, 6.26);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `storeid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeid`, `name`, `query`) VALUES
(1, 'Amazon', 'https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords='),
(2, 'Bukalapak', 'https://www.bukalapak.com/products?utf8=?&source=navbar&from=omnisearch&search_source=omnisearch_keywords_history&search%5Bkeywords%5D='),
(3, 'Bhinneka', 'https://www.bhinneka.com/search.aspx?Search=');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `usertype` int(11) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `scq` int(11) NOT NULL,
  `sca` varchar(200) NOT NULL,
  `bcpu` int(11) NOT NULL,
  `bvga` int(11) NOT NULL,
  `bssd` int(11) NOT NULL,
  `storeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usertype`, `username`, `password`, `name`, `organization`, `scq`, `sca`, `bcpu`, `bvga`, `bssd`, `storeid`) VALUES
(1, 2, 'ranggirahman@gmail.com', 'db02cda1496afded3fe782a4e412525f', 'Ranggi Rahman', 'UPI', 0, '', 500, 400, 300, 1),
(2, 0, 'vita@cochs.com', '21232f297a57a5a743894a0e4a801fc3', 'Vita', 'IBM', 0, '', 1000, 1000, 1000, 1),
(3, 0, 'user@cochs.com', '21232f297a57a5a743894a0e4a801fc3', 'Johar Ridha', 'Intel', 0, '', 500, 400, 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

CREATE TABLE `vga` (
  `vgaid` int(11) NOT NULL,
  `vganame` varchar(100) NOT NULL,
  `pdid` int(11) NOT NULL,
  `gaming` float NOT NULL,
  `graphics` float NOT NULL,
  `computing` float NOT NULL,
  `ppw` float NOT NULL,
  `value` float NOT NULL,
  `nap` float NOT NULL,
  `vgascore` float NOT NULL,
  `vgaprice` int(11) NOT NULL,
  `vgaview` int(11) NOT NULL,
  `s1` float NOT NULL,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s4` float NOT NULL,
  `s5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`vgaid`, `vganame`, `pdid`, `gaming`, `graphics`, `computing`, `ppw`, `value`, `nap`, `vgascore`, `vgaprice`, `vgaview`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES
(1, 'GeForce GTX 1080', 4, 10, 6.7, 9.7, 8.6, 9.1, 8.6, 9.5, 815, 57, 8.465, 8.505, 9.18, 8.145, 8.77),
(2, 'GeForce GTX 980 Ti', 4, 9.4, 6.8, 9.2, 7.4, 8.5, 7.8, 8.7, 742, 2, 7.7, 7.93, 8.605, 7.775, 8.305),
(3, 'GeForce GTX TITAN X', 4, 9.5, 5.4, 8, 6.6, 5.4, 7.8, 7.2, 1365, 0, 6.24, 6.82, 8.22, 6.705, 7.085),
(4, 'GeForce GTX 970', 4, 8.2, 6.6, 7.7, 7.2, 7.9, 7.9, 7.6, 460, 0, 7.425, 7.495, 7.815, 7.225, 7.385),
(5, 'Radeon RX 480', 2, 8.5, 6.6, 8.8, 7.8, 7.7, 7.8, 8.1, 629, 16, 7.59, 7.62, 8.035, 7.51, 8.03),
(6, 'Radeon R9 390', 2, 7.1, 9.1, 9.2, 6.2, 7, 5.5, 8, 525, 0, 6.77, 7.16, 7.145, 8.095, 8.51),
(7, 'GeForce GTX TITAN Z', 4, 7, 7.2, 7.7, 5.2, 5.1, 6.4, 6.4, 1483, 0, 5.65, 6.22, 6.695, 6.8, 7.035),
(8, 'Radeon RX 470', 2, 9.1, 6.8, 10, 8.3, 5.1, 7, 8.5, 487, 6, 6.92, 7.25, 8.265, 7.775, 8.655),
(9, 'Radeon R9 290X', 2, 7.2, 8.7, 8.5, 6.6, 7.8, 7.4, 8.1, 483, 5, 7.395, 7.605, 7.415, 8.02, 8.165),
(10, 'Radeon R9 290', 2, 8, 6.5, 8.7, 5.5, 6.7, 6.1, 7.2, 470, 0, 6.1, 6.58, 7.27, 6.895, 7.535),
(11, 'Radeon R9 380', 2, 9.6, 6.8, 8.9, 6, 5, 5, 7.7, 481, 40, 5.67, 6.57, 8.13, 7.235, 7.78),
(12, 'Radeon R9 380X', 2, 7.6, 8.3, 7.7, 6.8, 7.6, 7, 7.7, 320, 0, 7.295, 7.525, 7.565, 7.78, 7.705),
(13, 'GeForce GTX 960', 4, 8, 9.4, 7.1, 7.7, 5.1, 7, 8, 231, 1, 7.07, 7.56, 7.935, 8.255, 7.71),
(15, 'Radeon R9 280', 2, 6.7, 6.2, 7.7, 5.6, 6.2, 6.9, 6.3, 269, 0, 6.065, 6.285, 6.51, 6.445, 6.885),
(16, 'GeForce GTX 950', 4, 7.2, 6.6, 7.4, 7.1, 5.1, 7.9, 6.9, 235, 0, 6.545, 6.715, 7.065, 6.875, 7.03),
(17, 'Radeon R7 370', 2, 7.2, 6.5, 7.9, 6.6, 5, 7.3, 6.9, 289, 0, 6.21, 6.48, 6.935, 6.795, 7.175),
(18, 'Radeon RX 460', 2, 6.8, 6.4, 7.8, 7.5, 5.2, 8.3, 7, 189, 0, 6.765, 6.745, 6.88, 6.87, 7.225),
(19, 'GeForce GTX 750 Ti', 4, 6.5, 7.7, 7.3, 8.4, 5, 8.8, 7.3, 210, 0, 7.335, 7.225, 7.025, 7.485, 7.41),
(20, 'Radeon R7 360', 2, 6.5, 6.4, 7.1, 6.1, 5.1, 7.6, 6.3, 147, 1, 6.07, 6.28, 6.485, 6.47, 6.645);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpuid`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- Indexes for table `product_response`
--
ALTER TABLE `product_response`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `spesification`
--
ALTER TABLE `spesification`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `spesification_response`
--
ALTER TABLE `spesification_response`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`ssdid`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`storeid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`vgaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_response`
--
ALTER TABLE `product_response`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spesification`
--
ALTER TABLE `spesification`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spesification_response`
--
ALTER TABLE `spesification_response`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ssd`
--
ALTER TABLE `ssd`
  MODIFY `ssdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `storeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vga`
--
ALTER TABLE `vga`
  MODIFY `vgaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
