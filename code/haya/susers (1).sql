-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018-12-28 13:58:56
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
(1, 'test', '*196BDEDE2AE4F84CA44C47D54D78478C7E2BD7B7', 'c14940c14a2602c5ba7368eb5a402446', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(2, 'test2', '*1F0D99642D6993BB01767CE45C5F1CFF7BC85B66', 'cfbd9cf46bada56644de8cfede11f0ed', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(3, 'xy1904312', '*D4D53B1449CB708DA0F7A12CFC63831F49915038', 'ba4027f488b778e9bf56dac2ca4b6076', 1941, '12/28 22:01', 'tttt', 0, '12/28 22:12', '55555555555', 0, '', '', 0, 2, '2', '222', ''),
(4, '123', '*CFA9B2920D182DD9D72C260E31B16207C021FFD0', '', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '', 0, 0, '0', '0', '0'),
(5, 'qqqq', '*BF5716DBC27BF5E26279E21FB25E480EA9387F56', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(6, 'qqqqq', '*EFCA7C5AB5458048C0BC8BB310791D436B129249', 'b19d96b1d16dc8e735f5bad4984e68dd', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(7, 'xyz', '*39C549BDECFBA8AFC3CE6B948C9359A0ECE08DE2', 'eb49b8378b4aa4bf9bc02a061244b1ef', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(8, 'xyz', '*39C549BDECFBA8AFC3CE6B948C9359A0ECE08DE2', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(9, 'xyz', '*3D07E0D0A6AB1EB78DA1D222570ED89455FB7045', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(10, '500', '', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(11, '1234', '*AA803D048B666A933E512AA53B36C70174A37D1E', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(19, 'a123', '*0D2DF88EC59FC5C87F221725D8AD09FE8806AD6F', 'd85293edd4b640274cc240dc94c072cc', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(18, 'cial6', '*DAC0F4BBE29C260D95DF204871DE58AE1B68C250', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(20, '', '', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(21, 'DDD', '*A2D0E0B08150359B2527D3A4D7A1D9ECE2D7ECB8', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(22, 'EEE', '*F8247DD9713F6A58A479132B0BF400BFB48A59E3', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(23, 'EEEE', '*F8247DD9713F6A58A479132B0BF400BFB48A59E3', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(24, 'GGG', '*344EF2C7781AAE2A0060211672B863AE1EA81DA0', '10f1470e0280766ef8faf522b86061db', 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(25, '', '', NULL, 0, '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0', 0, '0000-00-00 00:00:00', '0', 0, 0, '0', '0', '0'),
(26, 'asd', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', NULL, 1999, '12/28 17:26', 'popopop', 0, '12/28 17:36', 'i have 2000 point', 0, '', NULL, 0, -20, '100', '1', NULL),
(27, '11111', '*58D24DFDC5B5D55D6F6A25496AB51B74AA0FF7C9', NULL, 1, '12/28 17:36', 'HELLO', 0, '12/ :', '', 0, '', NULL, 0, 2, '99', '', NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `susers`
--
ALTER TABLE `susers`
  ADD PRIMARY KEY (`userid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `susers`
--
ALTER TABLE `susers`
  MODIFY `userid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
