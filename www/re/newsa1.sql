-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 18 2018 г., 01:35
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `testir`
--

-- --------------------------------------------------------

--
-- Структура таблицы `newsa1`
--

CREATE TABLE IF NOT EXISTS `newsa1` (
  `id` varchar(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `title1` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `o21` varchar(25) NOT NULL,
  `o22` varchar(25) NOT NULL,
  `o23` varchar(25) NOT NULL,
  `o24` varchar(25) NOT NULL,
  `o25` varchar(25) NOT NULL,
  `o26` varchar(25) NOT NULL,
  `o27` varchar(25) NOT NULL,
  `o28` varchar(25) NOT NULL,
  `o29` varchar(25) NOT NULL,
  `o30` varchar(25) NOT NULL,
  `o31` varchar(25) NOT NULL,
  `o32` varchar(25) NOT NULL,
  `o33` varchar(25) NOT NULL,
  `o34` varchar(25) NOT NULL,
  `o35` varchar(25) NOT NULL,
  `o36` varchar(25) NOT NULL,
  `o37` varchar(25) NOT NULL,
  `o38` varchar(25) NOT NULL,
  `o39` varchar(25) NOT NULL,
  `o40` varchar(25) NOT NULL,
  `o98` varchar(25) NOT NULL,
  `w1` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newsa1`
--

INSERT INTO `newsa1` (`id`, `title`, `title1`, `date`, `time`, `o21`, `o22`, `o23`, `o24`, `o25`, `o26`, `o27`, `o28`, `o29`, `o30`, `o31`, `o32`, `o33`, `o34`, `o35`, `o36`, `o37`, `o38`, `o39`, `o40`, `o98`, `w1`) VALUES
('', 'Ринат', 'Залялетдинов', '2018-06-18', '01:26:13', 'c', 'd', 'b', 'd', 'b', 'c', 'b', 'a', 'd', 'c', 'a', 'c', 'c', 'a', 'd', 'b', 'b', 'd', 'b', 'a', '15', ''),
('', 'Янбухтин', 'Дмитрий', '2018-06-18', '01:26:59', 'b', 'a', 'b', 'a', 'c', 'b', 'a', 'b', 'd', 'c', 'b', 'd', 'b', 'c', 'b', 'b', 'b', 'a', 'd', 'a', '18', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
