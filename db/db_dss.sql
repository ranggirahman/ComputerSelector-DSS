-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 06:39 PM
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
(1, 'Intel Core i7 5930k', 1, 10, 8.7, 0, 0, 6.2, 5.2, 6.2, 640, 268, 0, 0, 0, 0, 0),
(2, 'Intel Core i7 5820K', 1, 9.6, 8.3, 0, 0, 6.1, 5.5, 6.1, 439, 4, 0, 0, 0, 0, 0),
(3, 'AMD FX 8370', 2, 6.8, 6, 0, 0, 5.7, 6, 5.5, 169, 44, 0, 0, 0, 0, 0),
(4, 'Intel Core i3 4370', 1, 7.4, 10, 0, 7.2, 9.9, 6.5, 8.7, 179, 7, 0, 0, 0, 0, 0),
(5, 'AMD FX 8370E', 2, 7.2, 5.2, 0, 0, 6.1, 5.8, 5.5, 249, 0, 0, 0, 0, 0, 0),
(6, 'AMD FX 8320E', 2, 6.8, 5.7, 0, 0, 6.1, 6.6, 5.8, 109, 0, 0, 0, 0, 0, 0),
(7, 'Intel Core i7 5960X', 1, 9.4, 8.5, 0, 0, 6.1, 5, 6, 1110, 1, 0, 0, 0, 0, 0),
(8, 'Intel Core i7 4790K', 1, 9.4, 10, 6.7, 6.6, 10, 6.6, 9.7, 399, 10, 0, 0, 0, 0, 0),
(9, 'Intel Pentium G3470', 1, 6.2, 9.5, 0, 0, 9.7, 8.5, 9, 89, 0, 0, 0, 0, 0, 0),
(10, 'Intel Core i5 4690K', 1, 7.8, 9.2, 6.2, 6.7, 9.5, 6.7, 9.2, 350, 17, 0, 0, 0, 0, 0),
(11, 'Intel Core i5 4690', 1, 7.4, 9, 5.9, 6.4, 9.5, 6.8, 9, 325, 2, 0, 0, 0, 0, 0),
(12, 'Intel Core i7 4790', 1, 8.4, 9.1, 6.1, 6.8, 9.8, 6.3, 9.2, 359, 0, 0, 0, 0, 0, 0),
(13, 'Intel Core i5 4690S', 1, 8.8, 10, 6.9, 7.9, 8.8, 5.9, 8.3, 172, 0, 0, 0, 0, 0, 0),
(14, 'Intel Core i5 4590S', 1, 7.9, 9.6, 6.8, 7.6, 8.5, 5.9, 8.1, 159, 0, 0, 0, 0, 0, 0),
(15, 'Intel Core i5 4590', 1, 6.8, 8.6, 5.6, 6.1, 9.2, 6.9, 8.8, 294, 0, 0, 0, 0, 0, 0),
(16, 'Intel Core i7 4790S', 1, 9.9, 9.8, 6.9, 8, 9, 5.6, 8.4, 252, 0, 0, 0, 0, 0, 0),
(17, 'Intel Core i3 4170', 1, 7.1, 8.7, 0, 7.3, 9.5, 7, 8.5, 155, 0, 0, 0, 0, 0, 0),
(18, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 0, 0, 0, 0, 0),
(19, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 0, 0, 0, 0, 0),
(20, 'AMD A6 7400K', 2, 6.2, 5.9, 7.3, 8.2, 7.8, 8.6, 8.2, 54, 0, 0, 0, 0, 0, 0),
(21, 'Intel Core i3 4360', 1, 7.8, 9.6, 6.6, 7.8, 9.7, 6.4, 8.5, 229, 0, 0, 0, 0, 0, 0),
(22, 'Intel Pentium G3240', 1, 5.9, 6.6, 0, 6.8, 8.5, 7, 7.8, 64, 0, 0, 0, 0, 0, 0),
(23, 'Intel Celeron G1830', 1, 5.9, 6.2, 5.4, 0, 7.9, 7.7, 7.5, 52, 0, 0, 0, 0, 0, 0),
(24, 'Intel Core i3 4150', 1, 7.3, 8.9, 6.3, 7.6, 9.3, 6.7, 8.3, 109, 0, 0, 0, 0, 0, 0),
(25, 'Intel Core i5 4460', 1, 6.6, 7.9, 5.4, 5, 8.8, 6.9, 8.3, 199, 0, 0, 0, 0, 0, 0),
(26, 'Intel Core i5 4590T', 1, 7.8, 8.6, 9.2, 0, 6.2, 5, 7.9, 214, 0, 0, 0, 0, 0, 0),
(27, 'Intel Pentium G3440', 1, 6, 8.4, 0, 6.8, 9, 7.2, 8.2, 82, 0, 0, 0, 0, 0, 0),
(28, 'AMD A10 7850K', 2, 8.2, 7, 10, 9.9, 9.1, 7.2, 8.9, 155, 0, 0, 0, 0, 0, 0),
(29, 'AMD A4 7300', 2, 5.3, 6.4, 0, 6.6, 7.2, 10, 8.1, 44, 8, 0, 0, 0, 0, 0),
(30, 'Intel Core i3 4160', 1, 7.1, 9, 6, 6.4, 9, 6.6, 8, 94, 0, 0, 0, 0, 0, 0),
(31, 'AMD A10 7870K', 2, 5.5, 5.5, 0, 10, 8.8, 8.3, 9.2, 160, 1, 0, 0, 0, 0, 0);

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
(2, 'Intel Core i7 5930k', 'admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(3, 'GeForce GTX 1080', 'admin', 'Great Product');

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
-- Table structure for table `spesification`
--

CREATE TABLE `spesification` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `sicon` varchar(100) NOT NULL,
  `psyntax` varchar(300) NOT NULL,
  `vsyntax` varchar(300) NOT NULL,
  `ssyntax` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesification`
--

INSERT INTO `spesification` (`sid`, `sname`, `description`, `sicon`, `psyntax`, `vsyntax`, `ssyntax`) VALUES
(1, 'Office Task', '', 'work', 'select *from cpu order by performance asc ', 'select *from vga order by vgascore asc', 'select *from ssd order by readp asc'),
(2, 'Home Usage', '', 'supervisor_account', 'select *from cpu order by value desc ', 'select *from vga order by value asc', 'select *from ssd order by realwb desc '),
(3, 'Gaming', '', 'games', 'select *from cpu order by performance desc ', 'select *from vga order by gaming desc ', 'select *from ssd order by readp desc '),
(4, 'Graphic Rendering', '', 'terrain', 'select *from cpu order by performance desc', 'select *from vga order by graphics desc', 'select *from ssd order by bench desc '),
(5, 'Computing, Simulation', '', 'gradient', 'select *from cpu order by performance desc', 'select *from vga order by computing desc', 'select *from ssd order by realwb desc');

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
(5, 'dewi', 1, 1);

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
(1, 'Intel 750', 1, 10, 10, 10, 8.7, 9.2, 270, 20, 0, 0, 0, 0, 0),
(2, 'Toshiba HG6', 0, 6.7, 7.1, 7.5, 6.5, 6.8, 64, 1, 0, 0, 0, 0, 0),
(3, 'Plextor M6e Black Edition', 0, 6.3, 7, 8.6, 7, 7, 173, 10, 0, 0, 0, 0, 0),
(4, 'PLextor M6 Pro', 0, 6.4, 6.5, 7.3, 6.5, 6.5, 139, 0, 0, 0, 0, 0, 0),
(5, 'OCZ Vertex 460', 0, 6.5, 6.7, 7.9, 6.6, 6.7, 169, 1, 0, 0, 0, 0, 0),
(6, 'Corsair Force LS', 0, 5.8, 6.3, 7.8, 6.3, 6.4, 77, 0, 0, 0, 0, 0, 0),
(7, 'Crucial BX100', 0, 6.3, 6.5, 8.9, 6.8, 6.9, 92, 0, 0, 0, 0, 0, 0),
(8, 'Anglebird SSD wrk', 0, 6.3, 6.1, 7.6, 6.4, 6.5, 159, 0, 0, 0, 0, 0, 0),
(9, 'Crucial MX100', 0, 6, 6.5, 7.4, 6.3, 6.4, 179, 0, 0, 0, 0, 0, 0),
(10, 'Intel 730', 1, 6.7, 7.1, 8, 6.8, 7, 249, 0, 0, 0, 0, 0, 0),
(11, 'Plextor M6S', 0, 5.9, 6.2, 7.3, 6.4, 6.3, 64, 0, 0, 0, 0, 0, 0),
(12, 'Crucial M550', 0, 6, 6.6, 8.1, 6.5, 6.6, 128, 0, 0, 0, 0, 0, 0),
(13, 'SanDisk Extreme PRO SSD', 0, 6.3, 6.7, 7.7, 6.5, 6.6, 146, 0, 0, 0, 0, 0, 0),
(14, 'Toshiba HK4E', 0, 6.8, 6.9, 8.3, 6.9, 7, 958, 0, 0, 0, 0, 0, 0),
(15, 'Plextor S2C', 0, 6.5, 6, 8.4, 6.8, 6.8, 149, 0, 0, 0, 0, 0, 0),
(16, 'Gigastone Prime SS6200', 0, 6.2, 5.9, 8.3, 6.7, 6.7, 99, 0, 0, 0, 0, 0, 0),
(17, 'Kingstone HyperX Savage SSD', 0, 6.1, 6.5, 8, 6.7, 6.7, 119, 0, 0, 0, 0, 0, 0),
(18, 'Toshiba Q300', 0, 6.1, 5.6, 8, 6.3, 6.4, 119, 1, 0, 0, 0, 0, 0),
(19, 'Crucial MX200', 0, 6.1, 6.5, 8.1, 6.8, 6.7, 299, 0, 0, 0, 0, 0, 0),
(20, 'Toshiba HK3R2', 0, 6.8, 6.9, 8.1, 6.9, 7, 390, 1, 0, 0, 0, 0, 0),
(21, 'Plextor M7V', 0, 6.4, 6.5, 8.3, 6.7, 6.8, 129, 0, 0, 0, 0, 0, 0),
(22, 'Crucial BX200', 0, 6, 6.3, 8.1, 6.8, 6.7, 229, 0, 0, 0, 0, 0, 0),
(23, 'Plextor M6V', 0, 6.4, 6.2, 8.1, 6.8, 6.7, 151, 0, 0, 0, 0, 0, 0),
(24, 'Toshiba Q300 Pro', 0, 6.7, 6.7, 8.2, 6.8, 6.9, 119, 0, 0, 0, 0, 0, 0),
(25, 'Crucial MX300', 0, 6.3, 6.3, 8.2, 6.9, 6.9, 147, 0, 0, 0, 0, 0, 0),
(26, 'KingFast F8', 0, 5.7, 6, 7.4, 6.3, 6.2, 130, 0, 0, 0, 0, 0, 0),
(27, 'Kingston HyperX FURY', 0, 5.3, 6.3, 7.3, 6.1, 6.1, 148, 0, 0, 0, 0, 0, 0);

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
(1, 'GeForce GTX 1080', 4, 10, 6.7, 9.7, 8.6, 9.1, 8.6, 9.5, 815, 27, 0, 0, 0, 0, 0),
(2, 'GeForce GTX 980 Ti', 4, 9.4, 6.8, 9.2, 7.4, 8.5, 7.8, 8.7, 742, 1, 0, 0, 0, 0, 0),
(3, 'GeForce GTX TITAN X', 4, 9.5, 5.4, 8, 6.6, 5.4, 7.8, 7.2, 1365, 0, 0, 0, 0, 0, 0),
(4, 'GeForce GTX 970', 4, 8.2, 6.6, 7.7, 7.2, 7.9, 7.9, 7.6, 460, 0, 0, 0, 0, 0, 0),
(5, 'Radeon RX 480', 2, 8.5, 6.6, 8.8, 7.8, 7.7, 7.8, 8.1, 629, 2, 0, 0, 0, 0, 0),
(6, 'Radeon R9 390', 2, 7.1, 9.1, 9.2, 6.2, 7, 5.5, 8, 525, 0, 0, 0, 0, 0, 0),
(7, 'GTX TITAN Z', 4, 7, 7.2, 7.7, 5.2, 5.1, 6.4, 6.4, 1483, 0, 0, 0, 0, 0, 0),
(8, 'Radeon RX 470', 2, 9.1, 6.8, 10, 8.3, 5.1, 7, 8.5, 487, 2, 0, 0, 0, 0, 0),
(9, 'Radeon R9 290X', 2, 7.2, 8.7, 8.5, 6.6, 7.8, 7.4, 8.1, 483, 3, 0, 0, 0, 0, 0),
(10, 'Radeon R9 290', 2, 8, 6.5, 8.7, 5.5, 6.7, 6.1, 7.2, 470, 0, 0, 0, 0, 0, 0),
(11, 'Radeon R9 380', 2, 9.6, 6.8, 8.9, 6, 5, 5, 7.7, 481, 4, 0, 0, 0, 0, 0),
(12, 'Radeon R9 380X', 2, 7.6, 8.3, 7.7, 6.8, 7.6, 7, 7.7, 320, 0, 0, 0, 0, 0, 0),
(13, 'GeForce GTX 960', 4, 8, 9.4, 7.1, 7.7, 5.1, 7, 8, 231, 0, 0, 0, 0, 0, 0),
(15, 'Radeon R9 280', 2, 6.7, 6.2, 7.7, 5.6, 6.2, 6.9, 6.3, 269, 0, 0, 0, 0, 0, 0),
(16, 'GeForce GTX 950', 4, 7.2, 6.6, 7.4, 7.1, 5.1, 7.9, 6.9, 235, 0, 0, 0, 0, 0, 0),
(17, 'Radeon R7 370', 2, 7.2, 6.5, 7.9, 6.6, 5, 7.3, 6.9, 289, 0, 0, 0, 0, 0, 0),
(18, 'Radeon RX 460', 2, 6.8, 6.4, 7.8, 7.5, 5.2, 8.3, 7, 189, 0, 0, 0, 0, 0, 0),
(19, 'GeForce GTX 750 Ti', 4, 6.5, 7.7, 7.3, 8.4, 5, 8.8, 7.3, 210, 0, 0, 0, 0, 0, 0),
(20, 'Radeon R7 360', 2, 6.5, 6.4, 7.1, 6.1, 5.1, 7.6, 6.3, 147, 1, 0, 0, 0, 0, 0);

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
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `spesification`
--
ALTER TABLE `spesification`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spesification_response`
--
ALTER TABLE `spesification_response`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ssd`
--
ALTER TABLE `ssd`
  MODIFY `ssdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `storeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
