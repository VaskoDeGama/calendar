-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 12 2016 г., 07:24
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `calendar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `zapisi`
--

CREATE TABLE IF NOT EXISTS `zapisi` (
  `text` text,
  `data` date DEFAULT '0000-00-00',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `zapisi`
--

INSERT INTO `zapisi` (`text`, `data`, `id`) VALUES
('test ', '2016-02-13', 14),
('test 2', '2016-02-13', 16),
('test 3', '2016-02-13', 17),
('Различие двух рассматриваемых методов заключается в том, что при использовании detach, jQuery не удаляет информацию о элементе и поэтому он может быть восстановлен.', '2016-02-21', 18),
('Различие двух рассматриваемых методов заключается в том, что при использовании detach, jQuery не удаляет информацию о элементе и поэтому он может быть восстановлен.', '2016-02-26', 19),
('уществуют две основные трактовки понятия «текст»: «имманентная» (расширенная, философски нагруженная) и «репрезентативная» (более частная).', '2016-02-29', 20),
('21323123123', '2016-02-25', 21),
('12312312124124124', '2016-02-13', 22),
('1488', '2016-02-22', 23),
('еуче', '2016-02-27', 24),
('123123123121ы12ы12', '2016-02-25', 25),
('vaska', '2016-02-28', 26),
('?,\n', '2016-02-27', 27),
('мфышшллфывф', '2016-02-24', 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
