-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 14 2018 г., 01:46
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
-- Структура таблицы `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `id` varchar(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `title1` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `o41` varchar(25) NOT NULL,
  `o42` varchar(25) NOT NULL,
  `o43` varchar(25) NOT NULL,
  `o44` varchar(25) NOT NULL,
  `o45` varchar(25) NOT NULL,
  `o46` varchar(25) NOT NULL,
  `o47` varchar(25) NOT NULL,
  `o48` varchar(25) NOT NULL,
  `o49` varchar(25) NOT NULL,
  `o50` varchar(25) NOT NULL,
  `o51` varchar(25) NOT NULL,
  `o52` varchar(25) NOT NULL,
  `o53` varchar(25) NOT NULL,
  `o54` varchar(25) NOT NULL,
  `o55` varchar(25) NOT NULL,
  `o56` varchar(25) NOT NULL,
  `o57` varchar(25) NOT NULL,
  `o58` varchar(25) NOT NULL,
  `o59` varchar(25) NOT NULL,
  `o60` varchar(25) NOT NULL,
  `o97` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `new`
--

INSERT INTO `new` (`id`, `title`, `title1`, `date`, `time`, `o41`, `o42`, `o43`, `o44`, `o45`, `o46`, `o47`, `o48`, `o49`, `o50`, `o51`, `o52`, `o53`, `o54`, `o55`, `o56`, `o57`, `o58`, `o59`, `o60`, `o97`) VALUES
('', 'авпваып', 'ваыпваып', '2018-06-05', '03:17:39', 'd', 'a', 'b', 'a', 'c', 'b', 'a', 'a', '', 'd', 'c', 'b', 'd', 'a', 'c', 'b', 'c', 'c', 'b', 'a', ''),
('', 'цйук', 'кйуц', '2018-06-14', '01:34:07', 'a', 'c', 'd', 'b', 'b', 'c', 'd', 'd', 'a', 'b', 'c', 'd', 'a', 'd', 'b', 'd', 'c', 'd', 'a', 'b', '17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
