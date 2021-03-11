-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2021 at 03:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws`
--

-- --------------------------------------------------------

--
-- Table structure for table `aws_category`
--

CREATE TABLE `aws_category` (
  `cate_id` varchar(100) DEFAULT NULL,
  `cate_title` varchar(255) DEFAULT NULL,
  `cate_note` text DEFAULT NULL,
  `cate_createdAt` datetime DEFAULT NULL,
  `cate_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_category`
--

INSERT INTO `aws_category` (`cate_id`, `cate_title`, `cate_note`, `cate_createdAt`, `cate_createdBy`) VALUES
('6d9202537db305bf8bff6eb7758784ae', 'ວຽກກໍ່ສ້າງ', '', '2021-03-06 21:28:17', 'admin'),
('e813b74a600555afdb6b60cb23a75c43', 'ວຽກກວດສອບ', '', '2021-03-06 21:28:34', 'admin'),
('bdbf38a089130799b8403cbfc7bee41a', 'ວຽກສະໜາມ', '', '2021-03-06 21:28:58', 'admin'),
('8389671daba80194470ec82e377300fd', 'ວຽກຝຶກອົບຮົມ', '', '2021-03-06 21:29:10', 'admin'),
('1304594f0a9315dbdf9aee514d9cefbc', 'ວຽກອອກແບບ', '', '2021-03-06 21:29:21', 'admin'),
('3f8623f1448584d42c6947a13f3c7298', 'ວຽກປະຈຳ', '', '2021-03-06 21:29:39', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aws_group`
--

CREATE TABLE `aws_group` (
  `group_id` varchar(100) DEFAULT NULL,
  `group_title` varchar(255) DEFAULT NULL,
  `group_member` text DEFAULT NULL,
  `group_note` varchar(255) DEFAULT NULL,
  `group_createdAt` datetime DEFAULT NULL,
  `group_createdBy` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_group`
--

INSERT INTO `aws_group` (`group_id`, `group_title`, `group_member`, `group_note`, `group_createdAt`, `group_createdBy`) VALUES
(NULL, 'test', NULL, NULL, NULL, NULL),
('2012311259', 'xcxc', NULL, NULL, '2020-12-31 00:00:00', NULL),
('2012311205', 'sdsds', NULL, NULL, '2020-12-31 00:00:00', NULL),
('2012311208', 'cdsdsds', NULL, NULL, '2020-12-31 00:00:00', NULL),
('2101230718', 'gfgfgfg', NULL, NULL, '2021-01-23 00:00:00', NULL),
('2101230724', 'cvcvcvcvcvcvc', NULL, NULL, '2021-01-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aws_history_login`
--

CREATE TABLE `aws_history_login` (
  `login_id` varchar(100) NOT NULL,
  `login_user` varchar(255) DEFAULT NULL,
  `login_host` varchar(255) DEFAULT NULL,
  `login_address` varchar(255) DEFAULT NULL,
  `login_lat` varchar(255) DEFAULT NULL,
  `login_long` varchar(255) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `years` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_history_login`
--

INSERT INTO `aws_history_login` (`login_id`, `login_user`, `login_host`, `login_address`, `login_lat`, `login_long`, `login_time`, `years`) VALUES
('2102270101', 'admin', 'kieng.local', '', '', '', '2021-02-27 01:02:00', '2020'),
('2102270234', 'admin', 'kieng.local', '', '', '', '2021-02-27 02:02:00', '2021'),
('2102270239', 'admin', 'kieng.local', '', '', '', '2021-02-27 14:02:00', '2021'),
('2102270240', 'admin', 'kieng.local', '', '', '', '2021-02-27 02:02:00', '2021'),
('2102270309', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 15:02:00', '2021'),
('2102270310', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 15:02:00', '2021'),
('2102270317', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 15:02:00', '2021'),
('2102270321', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 15:02:00', '2021'),
('2102270325', 'admin', 'kieng.local', '', '', '', '2021-02-27 03:02:00', '2021'),
('2102270342', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 15:02:00', '2021'),
('2102270617', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270632', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270633', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270651', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270654', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270656', 'admin', 'kieng', '', '', '', '2021-02-27 18:02:00', '2021'),
('2102270705', 'admin', 'kieng.local', '', '', '', '2021-02-27 07:02:00', '2021'),
('2102270818', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 20:02:00', '2021'),
('2102271041', 'admin', 'kieng.local', '', '', '', '2021-02-27 10:02:00', '2021'),
('2102271114', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 23:02:00', '2021'),
('2102271218', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-27 12:02:00', '2021'),
('2102280132', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-02-28 13:02:00', '2021'),
('2102280517', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 17:02:00', '2021'),
('2102280601', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 18:02:00', '2021'),
('2102280626', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 18:02:00', '2021'),
('2102280632', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 18:02:00', '2021'),
('2102280633', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 18:02:00', '2021'),
('2102280706', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280707', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280710', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280712', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280718', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280724', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280726', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280729', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280753', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 19:02:00', '2021'),
('2102280826', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 20:02:00', '2021'),
('2102280835', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 20:02:00', '2021'),
('2102280856', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-02-28 20:02:00', '2021'),
('2103010259', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 14:20:59', '2021'),
('2103010549', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 17:47:49', '2021'),
('2103010605', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 18:51:05', '2021'),
('2103010817', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 20:14:17', '2021'),
('2103010920', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 21:12:20', '2021'),
('2103011235', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-01 12:13:35', '2021'),
('2103020112', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:17:12', '2021'),
('2103020113', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:20:13', '2021'),
('2103020119', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:16:19', '2021'),
('2103020121', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:23:21', '2021'),
('2103020138', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:06:38', '2021'),
('2103020140', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:13:40', '2021'),
('2103020147', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:20:47', '2021'),
('2103020150', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 13:14:50', '2021'),
('2103020347', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 15:03:47', '2021'),
('2103020400', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:36:00', '2021'),
('2103020407', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:36:07', '2021'),
('2103020416', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:35:16', '2021'),
('2103020418', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:34:18', '2021'),
('2103020424', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:34:24', '2021'),
('2103020436', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:34:36', '2021'),
('2103020443', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:36:43', '2021'),
('2103020446', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:34:46', '2021'),
('2103020449', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:33:49', '2021'),
('2103020455', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-02 16:36:55', '2021'),
('2103021001', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 10:57:01', '2021'),
('2103021036', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 10:56:36', '2021'),
('2103021104', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 11:19:04', '2021'),
('2103021108', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 11:08:08', '2021'),
('2103021110', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 11:11:10', '2021'),
('2103021200', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 12:15:00', '2021'),
('2103021241', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 12:04:41', '2021'),
('2103021247', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-02 12:08:47', '2021'),
('2103030404', 'admin', 'kieng.local', '', '', '', '2021-03-03 16:43:04', '2021'),
('2103030420', 'admin', 'kieng.local', '', '', '', '2021-03-03 16:28:20', '2021'),
('2103030907', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:43:07', '2021'),
('2103030910', 'admin', 'kieng.local', '', '', '', '2021-03-03 09:40:10', '2021'),
('2103030916', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:21:16', '2021'),
('2103030919', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:28:19', '2021'),
('2103030920', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:28:20', '2021'),
('2103030921', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:28:21', '2021'),
('2103030929', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:45:29', '2021'),
('2103030930', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 21:59:30', '2021'),
('2103031113', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 23:11:13', '2021'),
('2103031224', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-03 12:00:24', '2021'),
('2103040937', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-04 21:35:37', '2021'),
('2103041014', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-04 10:21:14', '2021'),
('2103060231', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 14:33:31', '2021'),
('2103060245', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 14:38:45', '2021'),
('2103060259', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 14:48:59', '2021'),
('2103060406', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 16:06:56', '2021'),
('2103060410', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 16:10:35', '2021'),
('2103060411', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 16:11:53', '2021'),
('2103060412', 'admin', 'kieng.local', 'Vientiane', '17.9667', '102.6000', '2021-03-06 16:12:17', '2021'),
('2103060703', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-06 19:03:16', '2021'),
('8574e0d55fb9880ca90a7c2070cd1aae', 'admin', 'kieng', 'Vientiane', '17.9667', '102.6000', '2021-03-06 22:03:55', '2021'),
('f5cac4d06fbde2ab70ef7e120b218739', 'admin', 'kieng.local', '', '', '', '2021-03-07 08:40:28', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `aws_menu`
--

CREATE TABLE `aws_menu` (
  `menu_id` varchar(50) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `menu_note` text DEFAULT NULL,
  `menu_icon` varchar(25) DEFAULT NULL,
  `menu_createdAt` datetime DEFAULT NULL,
  `menu_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_menu`
--

INSERT INTO `aws_menu` (`menu_id`, `menu_title`, `menu_note`, `menu_icon`, `menu_createdAt`, `menu_createdBy`) VALUES
('1', 'ການມອບວຽກ', '', 'amazon', '2021-03-06 20:38:18', 'admin'),
('4572f18d0dbedca90dfed7b6649c03aa', 'ການຕິດຕາມວຽກ', '', 'thumb-tack', '2021-03-06 20:41:24', 'admin'),
('bdc66e04ed3cfbe50b8d24fd492b48b7', 'ການລາຍງານວຽກ', '', 'rocket', '2021-03-06 20:44:04', 'admin'),
('a949b71bbe154f4ec75dfeefed946541', 'ລາຍງານຂໍ້ມູນທັງໝົດ', '', 'line-chart', '2021-03-06 20:45:53', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aws_profile_system`
--

CREATE TABLE `aws_profile_system` (
  `p_id` varchar(50) DEFAULT NULL,
  `p_title` varchar(55) DEFAULT NULL,
  `p_contact1` varchar(55) DEFAULT NULL,
  `p_contact2` varchar(25) DEFAULT NULL,
  `p_contact3` varchar(25) DEFAULT NULL,
  `p_detail` varchar(255) DEFAULT NULL,
  `p_status` varchar(25) DEFAULT NULL,
  `p_logo` varchar(255) DEFAULT NULL,
  `p_createdAt` datetime DEFAULT NULL,
  `p_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_profile_system`
--

INSERT INTO `aws_profile_system` (`p_id`, `p_title`, `p_contact1`, `p_contact2`, `p_contact3`, `p_detail`, `p_status`, `p_logo`, `p_createdAt`, `p_createdBy`) VALUES
('2102250704', 'ບໍລິສັດ ກຸ່ມດວງຈະເລີນກໍ່ສ້າງ ຈຳກັດ', '020 56475833', '', '', '', 'true', '205159.png', '2021-03-06 00:00:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aws_project`
--

CREATE TABLE `aws_project` (
  `proj_id` varchar(50) NOT NULL,
  `proj_title` varchar(255) DEFAULT NULL,
  `proj_note` text DEFAULT NULL,
  `proj_createdAt` datetime DEFAULT NULL,
  `proj_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_project`
--

INSERT INTO `aws_project` (`proj_id`, `proj_title`, `proj_note`, `proj_createdAt`, `proj_createdBy`) VALUES
('2012240715', 'ໂຄງການກໍ່ສ້າງອາຄານ', '', NULL, NULL),
('2012240724', 'ໂຄງການທາງລົດໄຟ', '', NULL, NULL),
('2012240736', 'ໂຄງການເກັບກູ້ສາຍໄຟ', '', NULL, NULL),
('2012240747', 'ໂຄງການຂົນສົ່ງຖານຫີນ', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aws_rank`
--

CREATE TABLE `aws_rank` (
  `rank_id` varchar(50) NOT NULL,
  `rank_title` varchar(255) DEFAULT NULL,
  `rank_note` text DEFAULT NULL,
  `rank_createdAt` datetime DEFAULT NULL,
  `rank_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aws_rank`
--

INSERT INTO `aws_rank` (`rank_id`, `rank_title`, `rank_note`, `rank_createdAt`, `rank_createdBy`) VALUES
('1adea844f905f0f10944816620e82699', 'ໂຊເຟີລົດ', '', '2021-03-06 21:40:50', 'admin'),
('2012240715', 'ປະທານ', '', '2021-03-06 21:40:04', 'admin'),
('2012240724', 'ບັນຊີ-ການເງິນ', '', '2021-03-06 21:40:21', 'admin'),
('2012240736', 'ນັກອອກແບບ', '', '2021-03-06 21:40:35', 'admin'),
('2012240747', 'ໜ່ວຍວິໄຈ', '', '2021-03-06 21:41:09', 'admin'),
('845048b01d24b224d68e2fe0a1cabbd1', 'ໄອທີ', '', '2021-03-06 21:40:41', 'admin'),
('859385712bef8d831e738f231478aa98', 'ໜ່ວຍກວດສອບ', '', '2021-03-06 21:41:23', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aws_submenu`
--

CREATE TABLE `aws_submenu` (
  `subm_id` varchar(50) DEFAULT NULL,
  `sub_menu_id` varchar(50) DEFAULT NULL,
  `subm_title` varchar(255) DEFAULT NULL,
  `subm_link` varchar(255) DEFAULT NULL,
  `subm_note` text DEFAULT NULL,
  `subm_createdAt` datetime DEFAULT NULL,
  `subm_createdBy` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `aws_submenu`
--

INSERT INTO `aws_submenu` (`subm_id`, `sub_menu_id`, `subm_title`, `subm_link`, `subm_note`, `subm_createdAt`, `subm_createdBy`) VALUES
('bc21b012a3958d7fc915046c0e415b4c', '1', 'ມອບວຽກເປັນກຸ່ມ', '', '', '2021-03-06 22:49:05', 'admin'),
('8fd0555ebad1816dd14fa86ebdbaa33e', '1', 'ມອບວຽກເປັນບຸກຄົນ', '', '', '2021-03-06 22:47:42', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aws_users`
--

CREATE TABLE `aws_users` (
  `user_id` varchar(100) NOT NULL,
  `user_fname` varchar(100) DEFAULT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_gender` varchar(20) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_tel` varchar(20) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role` varchar(100) DEFAULT NULL,
  `user_status` varchar(30) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `user_createdAt` datetime DEFAULT NULL,
  `user_createdBy` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `aws_users`
--

INSERT INTO `aws_users` (`user_id`, `user_fname`, `user_lname`, `user_gender`, `user_address`, `user_tel`, `user_name`, `user_password`, `user_role`, `user_status`, `user_img`, `user_createdAt`, `user_createdBy`) VALUES
('2011200803', 'ແອັດມິນ', 'ບໍລິການ', 'FEMALE', 'ວຽງຈັນ', '020 56756440', 'admin', '202cb962ac59075b964b07152d234b70', 'ADMIN', 'true', '354822.jpeg', '2021-03-06 16:01:27', 'admin'),
('2011200851', 'ກ້ຽງ', 'ຈັນທະວີໄຊ', 'MALE', 'ວຽງຈັນ', '020 56676624', 'kieng', '202cb962ac59075b964b07152d234b70', 'ADMIN', 'true', '544112.png', '2021-03-06 21:44:54', 'admin'),
('2011200921', 'ສົມເພັດ', 'ແພງສີລັດ', 'FEMALE', 'ວຽງຈັນ', '020 5938533', 'phet', '202cb962ac59075b964b07152d234b70', 'ADMIN', 'true', '647650.png', '2021-03-06 15:58:34', 'admin'),
('2012011006', 'ອຸດອນ', 'ຄຳມວ່ນ', 'MALE', 'ໂພນມີໄຊ', '020 5968495', 'done', '202cb962ac59075b964b07152d234b70', 'USERS', 'true', '159185.png', '2021-03-06 00:00:00', 'admin'),
('2102060110', 'ສັນຕິ', 'ວາງບົວຊົງ', 'MALE', 'ວຽງຈັນ', '56676625', 'sunti', '202cb962ac59075b964b07152d234b70', 'ADMIN', 'true', '844809.png', '2021-03-06 15:57:07', 'admin'),
('2103060325', 'ກວາງ', 'ວັນນະວົງ', 'MALE', 'ນະຄອນຫຼວງ', '204859363', 'admin', '', 'ADMIN', 'true', '971630.png', '2021-03-06 15:27:42', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aws_history_login`
--
ALTER TABLE `aws_history_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `aws_project`
--
ALTER TABLE `aws_project`
  ADD PRIMARY KEY (`proj_id`) USING BTREE;

--
-- Indexes for table `aws_rank`
--
ALTER TABLE `aws_rank`
  ADD PRIMARY KEY (`rank_id`) USING BTREE;

--
-- Indexes for table `aws_users`
--
ALTER TABLE `aws_users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
