-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2020 at 12:51 AM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atsitco`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `history` varchar(225) DEFAULT NULL,
  `history_img` varchar(225) DEFAULT NULL,
  `mission` varchar(225) DEFAULT NULL,
  `mission_img` varchar(225) DEFAULT NULL,
  `value` varchar(225) DEFAULT NULL,
  `value_img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `history`, `history_img`, `mission`, `mission_img`, `value`, `value_img`) VALUES
(1, 'Comming Soon...', 'undraw_svg_2.svg', 'Comming Soon...', 'undraw_svg_3.svg', 'Comming Soon...', 'undraw_svg_4.svg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`) VALUES
(1, 'admin@eptechno.com', '202cb962ac59075b964b07152d234b70', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `company_name` varchar(225) DEFAULT NULL,
  `company_fullname` varchar(225) DEFAULT NULL,
  `address` longtext,
  `phone` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `company_logo` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `company_name`, `company_fullname`, `address`, `phone`, `email`, `company_logo`) VALUES
(1, 'ATSITCO', 'Advanced Technology Solutions', 'Al Malaz Salahaldeen, \r\nP0 Box - 320450\r\nRiyadh -11343', '[{\"phone\":\"966112346211\"},{\"phone\":\"\"},{\"phone\":\"\"}]', '[{\"email\":\" info@atsitco.com\"},{\"email\":\"sale@atsitco.com\"},{\"email\":\"\"}]', 'atsitco_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `partner_name` varchar(225) DEFAULT NULL,
  `logo` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `logo`) VALUES
(5, 'ds', 'aboutus610.jpg'),
(6, 'sds', 'aboutus38.jpg'),
(7, 'dsd', '001.jpg'),
(8, 'dd', 'aboutus611.jpg'),
(9, 'fdf', 'aboutus612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `infra` longtext,
  `security` longtext,
  `network` longtext,
  `hardware` longtext,
  `lowcur` longtext,
  `infra_img` varchar(225) DEFAULT NULL,
  `security_img` varchar(225) DEFAULT NULL,
  `network_img` varchar(225) DEFAULT NULL,
  `hardware_img` varchar(225) DEFAULT NULL,
  `lowcur_img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `infra`, `security`, `network`, `hardware`, `lowcur`, `infra_img`, `security_img`, `network_img`, `hardware_img`, `lowcur_img`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and \r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Comming Soon', 'Comming Soon', 'Comming Soon', 'Comming Soon', 'aboutus6.jpg', 'aboutus3.jpg', 'aboutus61.jpg', 'aboutus62.jpg', 'aboutus31.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
