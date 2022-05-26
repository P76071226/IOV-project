-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018-12-28 13:59:02
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
  `id` int(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `data`
--

INSERT INTO `data` (`user`, `hour`, `minute`, `message`, `price`, `month`, `day`, `id`) VALUES
('xy1904312', '20', '31', 'AA', 22, '12', '28', 28),
('xy1904312', '20', '36', 'AA', 2, '12', '28', 29),
('xy1904312', '21', '41', 'XDDDD', 122, '12', '28', 61),
('xy1904312', '21', '46', 'BBGGEFEF', 1232, '12', '28', 65),
('xy1904312', '22', '12', '55555555555', 222, '12', '28', 75),
('xy1904312', '22', '01', 'tttt', 2, '12', '28', 76),
('xy1904312', '', '', '', 0, '12', '', 80),
('xy1904312', '21', '56', 'IIIIIIIII', 1, '12', '28', 81),
('xy1904312', '21', '51', '$$$', 111, '12', '28', 69);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
