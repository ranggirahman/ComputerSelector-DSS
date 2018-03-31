-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 07:46 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Intel Core i7 5930K', 1, 10, 8.7, 0, 0, 6.2, 5.2, 6.2, 640, 359, 1.66667, 0.866667, 1.66667, 1.66667, 1.66667),
(2, 'Intel Core i7 5820K', 1, 9.6, 8.3, 0, 0, 6.1, 5.5, 6.1, 439, 5, 1.6, 0.916667, 1.6, 1.6, 1.6),
(3, 'AMD FX 8370', 2, 6.8, 6, 0, 0, 5.7, 6, 5.5, 169, 50, 1.13333, 1, 1.13333, 1.13333, 1.13333),
(4, 'Intel Core i3 4370', 1, 7.4, 10, 0, 7.2, 9.9, 6.5, 8.7, 179, 12, 1.23333, 1.08333, 1.23333, 1.23333, 1.23333),
(5, 'AMD FX 8370E', 2, 7.2, 5.2, 0, 0, 6.1, 5.8, 5.5, 249, 0, 1.2, 0.966667, 1.2, 1.2, 1.2),
(6, 'AMD FX 8320E', 2, 6.8, 5.7, 0, 0, 6.1, 6.6, 5.8, 109, 0, 1.13333, 1.1, 1.13333, 1.13333, 1.13333),
(7, 'Intel Core i7 5960X', 1, 9.4, 8.5, 0, 0, 6.1, 5, 6, 1110, 1, 1.56667, 0.833333, 1.56667, 1.56667, 1.56667),
(8, 'Intel Core i7 4790K', 1, 9.4, 10, 6.7, 6.6, 10, 6.6, 9.7, 399, 14, 1.56667, 1.1, 1.56667, 1.56667, 1.56667),
(9, 'Intel Pentium G3470', 1, 6.2, 9.5, 0, 0, 9.7, 8.5, 9, 89, 0, 1.03333, 1.41667, 1.03333, 1.03333, 1.03333),
(10, 'Intel Core i5 4690K', 1, 7.8, 9.2, 6.2, 6.7, 9.5, 6.7, 9.2, 350, 18, 1.3, 1.11667, 1.3, 1.3, 1.3),
(11, 'Intel Core i5 4690', 1, 7.4, 9, 5.9, 6.4, 9.5, 6.8, 9, 325, 3, 1.23333, 1.13333, 1.23333, 1.23333, 1.23333),
(12, 'Intel Core i7 4790', 1, 8.4, 9.1, 6.1, 6.8, 9.8, 6.3, 9.2, 359, 3, 1.4, 1.05, 1.4, 1.4, 1.4),
(13, 'Intel Core i5 4690S', 1, 8.8, 10, 6.9, 7.9, 8.8, 5.9, 8.3, 172, 0, 1.46667, 0.983333, 1.46667, 1.46667, 1.46667),
(14, 'Intel Core i5 4590S', 1, 7.9, 9.6, 6.8, 7.6, 8.5, 5.9, 8.1, 159, 0, 1.31667, 0.983333, 1.31667, 1.31667, 1.31667),
(15, 'Intel Core i5 4590', 1, 6.8, 8.6, 5.6, 6.1, 9.2, 6.9, 8.8, 294, 0, 1.13333, 1.15, 1.13333, 1.13333, 1.13333),
(16, 'Intel Core i7 4790S', 1, 9.9, 9.8, 6.9, 8, 9, 5.6, 8.4, 252, 0, 1.65, 0.933333, 1.65, 1.65, 1.65),
(17, 'Intel Core i3 4170', 1, 7.1, 8.7, 0, 7.3, 9.5, 7, 8.5, 155, 0, 1.18333, 1.16667, 1.18333, 1.18333, 1.18333),
(18, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 1.1, 1.15, 1.1, 1.1, 1.1),
(19, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 1.3, 0.833333, 1.3, 1.3, 1.3),
(20, 'AMD A6 7400K', 2, 6.2, 5.9, 7.3, 8.2, 7.8, 8.6, 8.2, 54, 1, 1.03333, 1.43333, 1.03333, 1.03333, 1.03333),
(21, 'Intel Core i3 4360', 1, 7.8, 9.6, 6.6, 7.8, 9.7, 6.4, 8.5, 229, 0, 1.3, 1.06667, 1.3, 1.3, 1.3),
(22, 'Intel Pentium G3240', 1, 5.9, 6.6, 0, 6.8, 8.5, 7, 7.8, 64, 1, 0.983333, 1.16667, 0.983333, 0.983333, 0.983333),
(23, 'Intel Celeron G1830', 1, 5.9, 6.2, 5.4, 0, 7.9, 7.7, 7.5, 52, 0, 0.983333, 1.28333, 0.983333, 0.983333, 0.983333),
(24, 'Intel Core i3 4150', 1, 7.3, 8.9, 6.3, 7.6, 9.3, 6.7, 8.3, 109, 0, 1.21667, 1.11667, 1.21667, 1.21667, 1.21667),
(25, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 1.1, 1.15, 1.1, 1.1, 1.1),
(26, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 1.3, 0.833333, 1.3, 1.3, 1.3),
(27, 'Intel Pentium G3440', 1, 6, 8.4, 0, 6.8, 9, 7.2, 8.2, 82, 1, 1, 1.2, 1, 1, 1),
(28, 'AMD A10 7850K', 2, 8.2, 7, 10, 9.9, 9.1, 7.2, 8.9, 155, 0, 1.36667, 1.2, 1.36667, 1.36667, 1.36667),
(29, 'AMD A4 7300', 2, 5.3, 6.4, 0, 6.6, 7.2, 10, 8.1, 44, 29, 0.883333, 1.66667, 0.883333, 0.883333, 0.883333),
(30, 'Intel Core i3 4160', 1, 7.1, 9, 6, 6.4, 9, 6.6, 8, 94, 0, 1.18333, 1.1, 1.18333, 1.18333, 1.18333),
(31, 'AMD A10 7870K', 2, 5.5, 5.5, 0, 10, 8.8, 8.3, 9.2, 160, 2, 0.916667, 1.38333, 0.916667, 0.916667, 0.916667);

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
(1, 'Office Task', '', 'work', 'select *from cpu order by s1 asc', 'select *from vga order by s1 desc', 'select *from ssd order by s1 asc', 2, 100, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 100),
(2, 'Home Usage', '', 'supervisor_account', 'select *from cpu order by s2 desc', 'select *from vga order by s2 asc', 'select *from ssd order by s2 desc ', 4, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 100, 100, 0, 0, 0),
(3, 'Gaming', '', 'games', 'select *from cpu order by s3 desc ', 'select *from vga order by s3 desc ', 'select *from ssd order by s3 desc ', 8, 100, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(4, 'Graphic Rendering', '', 'terrain', 'select *from cpu order by s4 desc', 'select *from vga order by s4 desc', 'select *from ssd order by s4 desc ', 16, 100, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 100),
(5, 'Computing, Simulation', '', 'gradient', 'select *from cpu order by s5 desc', 'select *from vga order by s5 desc', 'select *from ssd order by s5 desc', 32, 100, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 100, 0);

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
(1, 'Intel 750', 1, 10, 10, 10, 8.7, 9.2, 270, 21, 2.175, 2.5, 2.5, 2.175, 2.5),
(2, 'Toshiba HG6', 0, 6.7, 7.1, 7.5, 6.5, 6.8, 64, 1, 1.625, 1.675, 1.675, 1.625, 1.875),
(3, 'Plextor M6e Black Edition', 0, 6.3, 7, 8.6, 7, 7, 173, 11, 1.75, 1.575, 1.575, 1.75, 2.15),
(4, 'Plextor M6 Pro', 0, 6.4, 6.5, 7.3, 6.5, 6.5, 139, 0, 1.625, 1.6, 1.6, 1.625, 1.825),
(5, 'OCZ Vertex 460', 0, 6.5, 6.7, 7.9, 6.6, 6.7, 169, 1, 1.65, 1.625, 1.625, 1.65, 1.975),
(6, 'Corsair Force LS', 0, 5.8, 6.3, 7.8, 6.3, 6.4, 77, 0, 1.575, 1.45, 1.45, 1.575, 1.95),
(7, 'Crucial BX100', 0, 6.3, 6.5, 8.9, 6.8, 6.9, 92, 0, 1.7, 1.575, 1.575, 1.7, 2.225),
(8, 'Anglebird SSD wrk', 0, 6.3, 6.1, 7.6, 6.4, 6.5, 159, 0, 1.6, 1.575, 1.575, 1.6, 1.9),
(9, 'Crucial MX100', 0, 6, 6.5, 7.4, 6.3, 6.4, 179, 0, 1.575, 1.5, 1.5, 1.575, 1.85),
(10, 'Intel 730', 1, 6.7, 7.1, 8, 6.8, 7, 249, 331, 1.7, 1.675, 1.675, 1.7, 2),
(11, 'Plextor M6S', 0, 5.9, 6.2, 7.3, 6.4, 6.3, 64, 0, 1.6, 1.475, 1.475, 1.6, 1.825),
(12, 'Crucial M550', 0, 6, 6.6, 8.1, 6.5, 6.6, 128, 0, 1.625, 1.5, 1.5, 1.625, 2.025),
(13, 'SanDisk Extreme PRO SSD', 0, 6.3, 6.7, 7.7, 6.5, 6.6, 146, 0, 1.625, 1.575, 1.575, 1.625, 1.925),
(14, 'Toshiba HK4E', 0, 6.8, 6.9, 8.3, 6.9, 7, 958, 0, 1.725, 1.7, 1.7, 1.725, 2.075),
(15, 'Plextor S2C', 0, 6.5, 6, 8.4, 6.8, 6.8, 149, 0, 1.7, 1.625, 1.625, 1.7, 2.1),
(16, 'Gigastone Prime SS6200', 0, 6.2, 5.9, 8.3, 6.7, 6.7, 99, 0, 1.675, 1.55, 1.55, 1.675, 2.075),
(17, 'Kingstone HyperX Savage SSD', 0, 6.1, 6.5, 8, 6.7, 6.7, 119, 0, 1.675, 1.525, 1.525, 1.675, 2),
(18, 'Toshiba Q300', 0, 6.1, 5.6, 8, 6.3, 6.4, 119, 1, 1.575, 1.525, 1.525, 1.575, 2),
(19, 'Crucial MX200', 0, 6.1, 6.5, 8.1, 6.8, 6.7, 299, 0, 1.7, 1.525, 1.525, 1.7, 2.025),
(20, 'Toshiba HK3R2', 0, 6.8, 6.9, 8.1, 6.9, 7, 390, 2, 1.725, 1.7, 1.7, 1.725, 2.025),
(21, 'Plextor M7V', 0, 6.4, 6.5, 8.3, 6.7, 6.8, 129, 6, 1.675, 1.6, 1.6, 1.675, 2.075),
(22, 'Crucial BX200', 0, 6, 6.3, 8.1, 6.8, 6.7, 229, 0, 1.7, 1.5, 1.5, 1.7, 2.025),
(23, 'Plextor M6V', 0, 6.4, 6.2, 8.1, 6.8, 6.7, 151, 0, 1.7, 1.6, 1.6, 1.7, 2.025),
(24, 'Toshiba Q300 Pro', 0, 6.7, 6.7, 8.2, 6.8, 6.9, 119, 0, 1.7, 1.675, 1.675, 1.7, 2.05),
(25, 'Crucial MX300', 0, 6.3, 6.3, 8.2, 6.9, 6.9, 147, 0, 1.725, 1.575, 1.575, 1.725, 2.05),
(26, 'KingFast F8', 0, 5.7, 6, 7.4, 6.3, 6.2, 130, 0, 1.575, 1.425, 1.425, 1.575, 1.85),
(27, 'Kingston HyperX FURY', 0, 5.3, 6.3, 7.3, 6.1, 6.1, 148, 0, 1.525, 1.325, 1.325, 1.525, 1.825);

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
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `bcpu` int(11) NOT NULL,
  `bvga` int(11) NOT NULL,
  `bssd` int(11) NOT NULL,
  `storeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usertype`, `username`, `password`, `name`, `organization`, `bcpu`, `bvga`, `bssd`, `storeid`) VALUES
(1, 2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ranggi Rahman', 'UPI', 1000, 1000, 1000, 1),
(2, 0, 'dewi', 'ed1d859c50262701d92e5cbf39652792', 'Dewi', 'IBM', 1000, 1000, 1000, 1),
(3, 0, 'johar', 'd8f0dac6e7eda4e37e926b1ab5159dbe', 'Johar Ridha', 'Intel', 1000, 1000, 1000, 1);

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
(1, 'GeForce GTX 1080', 4, 10, 6.7, 9.7, 8.6, 9.1, 8.6, 9.5, 815, 43, 1.43333, 1.43333, 1.66667, 1.11667, 1.61667),
(2, 'GeForce GTX 980 Ti', 4, 9.4, 6.8, 9.2, 7.4, 8.5, 7.8, 8.7, 742, 2, 1.23333, 1.3, 1.56667, 1.13333, 1.53333),
(3, 'GeForce GTX TITAN X', 4, 9.5, 5.4, 8, 6.6, 5.4, 7.8, 7.2, 1365, 0, 1.1, 1.3, 1.58333, 0.9, 1.33333),
(4, 'GeForce GTX 970', 4, 8.2, 6.6, 7.7, 7.2, 7.9, 7.9, 7.6, 460, 0, 1.2, 1.31667, 1.36667, 1.1, 1.28333),
(5, 'Radeon RX 480', 2, 8.5, 6.6, 8.8, 7.8, 7.7, 7.8, 8.1, 629, 15, 1.3, 1.3, 1.41667, 1.1, 1.46667),
(6, 'Radeon R9 390', 2, 7.1, 9.1, 9.2, 6.2, 7, 5.5, 8, 525, 0, 1.03333, 0.916667, 1.18333, 1.51667, 1.53333),
(7, 'GeForce GTX TITAN Z', 4, 7, 7.2, 7.7, 5.2, 5.1, 6.4, 6.4, 1483, 0, 0.866667, 1.06667, 1.16667, 1.2, 1.28333),
(8, 'Radeon RX 470', 2, 9.1, 6.8, 10, 8.3, 5.1, 7, 8.5, 487, 3, 1.38333, 1.16667, 1.51667, 1.13333, 1.66667),
(9, 'Radeon R9 290X', 2, 7.2, 8.7, 8.5, 6.6, 7.8, 7.4, 8.1, 483, 5, 1.1, 1.23333, 1.2, 1.45, 1.41667),
(10, 'Radeon R9 290', 2, 8, 6.5, 8.7, 5.5, 6.7, 6.1, 7.2, 470, 0, 0.916667, 1.01667, 1.33333, 1.08333, 1.45),
(11, 'Radeon R9 380', 2, 9.6, 6.8, 8.9, 6, 5, 5, 7.7, 481, 40, 1, 0.833333, 1.6, 1.13333, 1.48333),
(12, 'Radeon R9 380X', 2, 7.6, 8.3, 7.7, 6.8, 7.6, 7, 7.7, 320, 0, 1.13333, 1.16667, 1.26667, 1.38333, 1.28333),
(13, 'GeForce GTX 960', 4, 8, 9.4, 7.1, 7.7, 5.1, 7, 8, 231, 0, 1.28333, 1.16667, 1.33333, 1.56667, 1.18333),
(15, 'Radeon R9 280', 2, 6.7, 6.2, 7.7, 5.6, 6.2, 6.9, 6.3, 269, 0, 0.933333, 1.15, 1.11667, 1.03333, 1.28333),
(16, 'GeForce GTX 950', 4, 7.2, 6.6, 7.4, 7.1, 5.1, 7.9, 6.9, 235, 0, 1.18333, 1.31667, 1.2, 1.1, 1.23333),
(17, 'Radeon R7 370', 2, 7.2, 6.5, 7.9, 6.6, 5, 7.3, 6.9, 289, 0, 1.1, 1.21667, 1.2, 1.08333, 1.31667),
(18, 'Radeon RX 460', 2, 6.8, 6.4, 7.8, 7.5, 5.2, 8.3, 7, 189, 0, 1.25, 1.38333, 1.13333, 1.06667, 1.3),
(19, 'GeForce GTX 750 Ti', 4, 6.5, 7.7, 7.3, 8.4, 5, 8.8, 7.3, 210, 0, 1.4, 1.46667, 1.08333, 1.28333, 1.21667),
(20, 'Radeon R7 360', 2, 6.5, 6.4, 7.1, 6.1, 5.1, 7.6, 6.3, 147, 1, 1.01667, 1.26667, 1.08333, 1.06667, 1.18333);

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
