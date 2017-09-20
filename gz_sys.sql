-- phpMyAdmin SQL Dump
-- version 4.7.0-beta1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-09-20 06:53:51
-- 服务器版本： 5.5.53
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `bdm260603580_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `gz_bills`
--

CREATE TABLE `gz_bills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `type_id` varchar(10) NOT NULL DEFAULT '0' COMMENT '记账类型id 1月营业额 2支出工资',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='记账表';

--
-- 转存表中的数据 `gz_bills`
--

INSERT INTO `gz_bills` (`id`, `user_id`, `type_id`, `money`, `create_at`, `update_at`) VALUES
(1, 1, '1', '10000.00', NULL, NULL),
(2, 1, '2', '-8000.00', NULL, NULL),
(3, 2, '2', '-3000.00', NULL, NULL),
(4, 1, '1', '222.00', NULL, NULL),
(5, 1, '1', '222.00', NULL, NULL),
(6, 1, '1', '1.00', NULL, NULL),
(7, 1, '1', '22.00', '2017-09-19 16:00:00', NULL),
(8, 1, '3', '1000.00', '2017-09-20 03:48:22', '2017-09-20 03:48:22'),
(9, 2, '3', '100.00', '2017-09-20 05:51:08', '2017-09-20 05:51:08'),
(10, 3, '1', '100.00', '2017-09-20 05:55:51', '2017-09-20 05:55:51'),
(11, 3, '3', '400.00', '2017-09-20 05:56:04', '2017-09-20 05:56:04');

-- --------------------------------------------------------

--
-- 表的结构 `gz_category`
--

CREATE TABLE `gz_category` (
  `id` int(11) NOT NULL,
  `typename` varchar(20) NOT NULL DEFAULT '0' COMMENT '类型名称',
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='记账分类表';

--
-- 转存表中的数据 `gz_category`
--

INSERT INTO `gz_category` (`id`, `typename`, `create_at`, `update_at`) VALUES
(1, '月营业额', '2017-09-19 16:00:00', NULL),
(2, '支出工资', '2017-09-19 16:00:00', NULL),
(3, '杂货钱', '2017-09-19 16:00:00', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `gz_users`
--

CREATE TABLE `gz_users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(10) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `gz_users`
--

INSERT INTO `gz_users` (`id`, `username`, `password`, `nickname`, `create_at`, `update_at`) VALUES
(1, 'admin', '123456', '江河', '2017-09-18 16:00:00', '2017-09-18 16:00:00'),
(2, 'yuangong1', '123456', '舒婷', '2017-09-18 16:00:00', '2017-09-18 16:00:00'),
(3, 'yuangong2', '123456', '三大姑', '2017-09-18 16:00:00', '2017-09-18 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gz_bills`
--
ALTER TABLE `gz_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_category`
--
ALTER TABLE `gz_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gz_users`
--
ALTER TABLE `gz_users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `gz_bills`
--
ALTER TABLE `gz_bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `gz_category`
--
ALTER TABLE `gz_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `gz_users`
--
ALTER TABLE `gz_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
