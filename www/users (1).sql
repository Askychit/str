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
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `password` varchar(35) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `reg_date` varchar(32) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `name_user` varchar(32) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `s` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `reg_date`, `name_user`, `lastname`, `s`) VALUES
(1, 'werwer', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sdaf@mail.ru', '05-06-2018 в 17:08', '', '', 0),
(2, 'Виктор', '123456789', '', '', '', '', 0),
(3, 'Victor', '25f9e794323b453885f5181f1b624d0b', 'asd@bk.ru', '05-06-2018 в 17:16', '', '', 0),
(4, 'admin', 'd910ffbefc6b1641bfacb761ef5a0cab', 'saf@mail.ru', '05-06-2018 в 17:48', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
