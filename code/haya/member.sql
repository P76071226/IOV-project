-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-01-02 03:33:49
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `data`
--

CREATE TABLE `data` (
  `user` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `minute` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `month` varchar(2) NOT NULL,
  `day` varchar(2) NOT NULL,
  `id` int(20) UNSIGNED NOT NULL,
  `back` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `data`
--

INSERT INTO `data` (`user`, `hour`, `minute`, `message`, `price`, `month`, `day`, `id`, `back`) VALUES
('xy1904312', '22', '41', 'ABC', 100, '01', '01', 226, 0),
('xy1904312', '22', '31', 'BBB', 100, '01', '01', 227, 0),
('xy1904312', '23', '01', 'AA', 10, '01', '01', 228, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `susers`
--

CREATE TABLE `susers` (
  `userid` int(100) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `guid` varchar(32) DEFAULT NULL,
  `point` int(10) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `message1` varchar(255) DEFAULT NULL,
  `pro1` int(1) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `message2` varchar(255) DEFAULT NULL,
  `pro2` int(1) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `message3` varchar(255) DEFAULT NULL,
  `pro3` int(1) NOT NULL,
  `num` int(1) NOT NULL,
  `price1` varchar(255) DEFAULT NULL,
  `price2` varchar(255) DEFAULT NULL,
  `price3` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `susers`
--

INSERT INTO `susers` (`userid`, `user`, `password`, `guid`, `point`, `time1`, `message1`, `pro1`, `time2`, `message2`, `pro2`, `time3`, `message3`, `pro3`, `num`, `price1`, `price2`, `price3`) VALUES
(28, 'xy1904312', '*D4D53B1449CB708DA0F7A12CFC63831F49915038', NULL, 9790, '', '', 0, '', '', 0, '', '', 0, 1, '', '', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `susers`
--
ALTER TABLE `susers`
  ADD PRIMARY KEY (`userid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- 使用資料表 AUTO_INCREMENT `susers`
--
ALTER TABLE `susers`
  MODIFY `userid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
