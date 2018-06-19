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
-- Структура таблицы `newsa`
--

CREATE TABLE IF NOT EXISTS `newsa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `title1` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` varchar(11) NOT NULL,
  `q3` varchar(11) NOT NULL,
  `q4` varchar(11) NOT NULL,
  `q5` varchar(11) NOT NULL,
  `q6` varchar(11) NOT NULL,
  `q7` varchar(11) NOT NULL,
  `q8` varchar(11) NOT NULL,
  `q9` varchar(11) NOT NULL,
  `q10` varchar(11) NOT NULL,
  `o1` varchar(11) NOT NULL,
  `o2` varchar(11) NOT NULL,
  `o3` varchar(11) NOT NULL,
  `o4` varchar(11) NOT NULL,
  `o5` varchar(11) NOT NULL,
  `o6` varchar(11) NOT NULL,
  `o7` varchar(11) NOT NULL,
  `o8` varchar(11) NOT NULL,
  `o9` varchar(11) NOT NULL,
  `o10` varchar(11) NOT NULL,
  `o11` varchar(11) NOT NULL,
  `o12` varchar(11) NOT NULL,
  `o13` varchar(11) NOT NULL,
  `o14` varchar(11) NOT NULL,
  `o15` varchar(11) NOT NULL,
  `o16` varchar(11) NOT NULL,
  `o17` varchar(11) NOT NULL,
  `o18` varchar(11) NOT NULL,
  `o19` varchar(11) NOT NULL,
  `o20` varchar(11) NOT NULL,
  `o99` varchar(25) NOT NULL,
  `w1` varchar(11) NOT NULL,
  `w2` varchar(11) NOT NULL,
  `w3` varchar(11) NOT NULL,
  `w4` varchar(11) NOT NULL,
  `w5` varchar(11) NOT NULL,
  `w6` varchar(11) NOT NULL,
  `w7` varchar(11) NOT NULL,
  `w8` varchar(11) NOT NULL,
  `w9` varchar(11) NOT NULL,
  `w10` varchar(11) NOT NULL,
  `author` varchar(11) NOT NULL,
  `text` text NOT NULL,
  `dol` varchar(11) NOT NULL,
  `img` varchar(11) NOT NULL,
  `tel` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

--
-- Дамп данных таблицы `newsa`
--

INSERT INTO `newsa` (`id`, `title`, `title1`, `date`, `time`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `o7`, `o8`, `o9`, `o10`, `o11`, `o12`, `o13`, `o14`, `o15`, `o16`, `o17`, `o18`, `o19`, `o20`, `o99`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `author`, `text`, `dol`, `img`, `tel`) VALUES
(95, 'Лиана', 'Хайруллина', '2018-06-05', '14:03:38', '', '', '', '', '', '', '', '', '', '', 'b', 'b', 'b', 'a', 'd', 'b', 'c', 'c', 'a', 'd', 'c', 'a', 'a', 'c', 'a', 'd', 'b', 'd', 'a', 'a', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 'Ибрагимов', 'Руслан', '2018-06-14', '11:51:23', '', '', '', '', '', '', '', '', '', '', '', 'b', 'd', 'c', 'a', 'a', 'd', 'd', 'b', 'c', 'b', 'b', 'b', 'c', 'b', 'd', 'a', 'c', 'd', 'a', '20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 'Плахотин', 'Никита', '2018-06-14', '11:51:52', '', '', '', '', '', '', '', '', '', '', '', 'a', 'b', 'c', 'd', 'a', 'c', 'a', 'b', 'b', 'd', 'b', 'a', 'd', 'b', 'c', 'd', 'c', 'b', 'c', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 'Баскова', 'Анастасия', '2018-06-14', '11:52:23', '', '', '', '', '', '', '', '', '', '', '', 'a', 'c', 'a', 'b', 'c', 'd', 'b', 'c', 'b', 'd', 'b', 'a', 'd', 'd', 'a', 'a', 'b', 'b', 'b', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
