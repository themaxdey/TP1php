-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 11:37 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_AssetManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `Assets`
--

CREATE TABLE IF NOT EXISTS `Assets` (
  `id` int(11) NOT NULL,
  `market_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf32_bin NOT NULL,
  `slug` varchar(191) COLLATE utf32_bin DEFAULT NULL,
  `body` text COLLATE utf32_bin,
  `created` datetime DEFAULT NULL,
  `serviceField` varchar(191) COLLATE utf32_bin NOT NULL,
  `type` varchar(191) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `Assets`
--

INSERT INTO `Assets` (`id`, `market_id`, `title`, `slug`, `body`, `created`, `serviceField`, `type`) VALUES
(12, 1, 'Intuitive Surgical Inc. (ISRG)', 'ISRG', 'Intuitive Surgical makes the da Vinci Surgical System, a robotic surgery system that a surgeon can control from a console. It allows surgeons to perform complex, minimally invasive surgeries with accuracy and precision.', '2019-09-16 14:48:21', 'Health', 'Tangible'),
(13, 1, 'NetApp, Inc. (NTAP)', 'NTAP', 'NetApp is a cloud computing company that has spent most of 2018 delivering a string of better-than-expected earnings reports. Its most recent two quarterly reports beat analyst expectations by an average of almost 17 percent.', '2019-09-16 14:49:36', 'Service', 'Intangible'),
(14, 1, 'Amazon.com, Inc. (AMZN)', 'AMZN', 'Apparently, there were plenty of people who looked at Amazon’s $1,000-plus share price at the start of the year and thought to themselves, “Wow, what a bargain!” At least, enough people that the shares have shot up almost 50 percent since that point. And that’s after counting the nearly 15 percent drop the company experienced after hitting a 52-week high of over $2,000 a share in early September.', '2019-09-16 14:50:15', 'Service', 'Intangible'),
(15, 1, 'La chaise de matante', 'LCDM', 'Une chaine antique de quanlité exceptionnel. Fais à la main par des escalves décédé au boulot, cette chaise au confort exécrable vaut beaucoup de monnaie', '2019-09-16 14:52:35', 'Utilities', 'Tangible'),
(16, 1, 'Easter Negg', 'EGG', 'Yo Gab ? T''as tout traduit toi même ? Esti que c''est cancer ?', '2019-09-16 14:55:22', 'Energy', 'Current');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tags`
--

CREATE TABLE IF NOT EXISTS `assets_tags` (
  `asset_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Companies`
--

CREATE TABLE IF NOT EXISTS `Companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Companies`
--

INSERT INTO `Companies` (`id`, `name`, `location`) VALUES
(1, 'Apple', 'Californie');

-- --------------------------------------------------------

--
-- Table structure for table `companies_files`
--

CREATE TABLE IF NOT EXISTS `companies_files` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf32_bin NOT NULL,
  `date` date NOT NULL,
  `invoice` double NOT NULL,
  `description` varchar(100) COLLATE utf32_bin NOT NULL,
  `efface` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`id`, `user_id`, `asset_id`, `company_id`, `type`, `date`, `invoice`, `description`, `efface`) VALUES
(1, 5, 12, 1, 'Payment', '2019-10-14', 200, 'Payment de 200$ en aquisition de part', 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(4, '53838518_348876165750780_2267028011075239936_n.png', 'Files/', '2019-10-09 00:08:35', '2019-10-09 00:08:35', 1),
(5, 'appleLogo.png', 'Files/', '2019-10-09 00:33:28', '2019-10-09 00:33:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Markets`
--

CREATE TABLE IF NOT EXISTS `Markets` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Markets`
--

INSERT INTO `Markets` (`id`, `type`) VALUES
(5, 'Contact for Difference'),
(2, 'EFT'),
(3, 'Forex'),
(4, 'Options'),
(1, 'Stock');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20191014233321, 'Initial', '2019-10-15 03:33:22', '2019-10-15 03:33:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `email` varchar(100) COLLATE utf32_bin NOT NULL,
  `id` int(11) NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`email`, `id`, `user`, `password`, `phone`, `created`, `modified`) VALUES
('mdery@test.ca', 5, 'mdery', '$2y$10$gKiCIhixYWzmfet669WKyeo1Zxn.EL84t.Px6b8y64GywxgLxllPi', '123', '2019-10-08 22:47:18', '2019-10-08 22:47:18'),
('admin@test.ca', 6, 'admin', '$2y$10$IekBrMr5iysjpPu6MfolVuGO5SEiPltnNUAZq47Hstoqpn6IIYfKG', '', '2019-10-08 22:52:02', '2019-10-08 22:52:02'),
('admin@admin.ca', 7, 'admin', '$2y$10$PBsh.eGc7LkS4Q3guEgk..IpbjwcO.g3q9Gw/AMedXRQckX0leNa6', 'tg', '2019-10-08 22:54:15', '2019-10-08 22:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Assets`
--
ALTER TABLE `Assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `market_id` (`market_id`);

--
-- Indexes for table `assets_tags`
--
ALTER TABLE `assets_tags`
  ADD PRIMARY KEY (`asset_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `Companies`
--
ALTER TABLE `Companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies_files`
--
ALTER TABLE `companies_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK Customer_ID` (`user_id`),
  ADD KEY `PK Event_ID` (`id`),
  ADD KEY `FK_Register_ID` (`asset_id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `asset_id` (`asset_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `asset_id_2` (`asset_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `foreign_key` (`foreign_key`);

--
-- Indexes for table `Markets`
--
ALTER TABLE `Markets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Assets`
--
ALTER TABLE `Assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Companies`
--
ALTER TABLE `Companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companies_files`
--
ALTER TABLE `companies_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Markets`
--
ALTER TABLE `Markets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Assets`
--
ALTER TABLE `Assets`
  ADD CONSTRAINT `assets_ibfk_1` FOREIGN KEY (`market_id`) REFERENCES `Markets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assets_tags`
--
ALTER TABLE `assets_tags`
  ADD CONSTRAINT `assets_tags_ibfk_1` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assets_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Events`
--
ALTER TABLE `Events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`asset_id`) REFERENCES `Assets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `Companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
