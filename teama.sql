-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2017 г., 15:08
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teama`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(5) NOT NULL,
  `post` int(5) NOT NULL,
  `author` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post`, `author`, `email`, `text`, `date`) VALUES
(28, 1, '111', '', 'cdsvfdv', '2017-05-06'),
(29, 1, '111', '', 'dddddr', '2017-05-06'),
(30, 1, '111', '', 'dddddr', '2017-05-06'),
(31, 1, '111', '', 'dasdasda', '2017-05-06'),
(32, 1, '111', '', 'dasdasda', '2017-05-06'),
(33, 1, '111', '', 'dasdas', '2017-05-06'),
(34, 1, '111', '', 'dasdas', '2017-05-06'),
(35, 1, '111', '', 'dasdas', '2017-05-06'),
(36, 1, 'suwdgwdg', '', 'sdcsdc', '2017-05-06'),
(37, 1, 'df', '', 'sdas', '2017-05-07'),
(38, 1, 'df', '', 'sdas', '2017-05-07'),
(39, 1, 'df', '', 'jinni', '2017-05-07');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `id_role` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `remember` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `phone`, `address`, `login`, `password`, `id_role`, `remember`, `ip`) VALUES
(41, 'df', 'mail@gmsil.com', '4134312', 'dfdsfs', 'qe', 'c20ad4d76fe97759aa27a0c99bff6710', 1, '', '127.0.0.1'),
(40, 'suwdgwdg', 'mail@gmail.com', '5648484', 'ededwdwdw', 'aziz', 'a01610228fe998f515a72dd730294d87', 1, '33d5ef5d51e93e3d877f064a67600e30', '127.0.0.1'),
(39, '111', 'a@mail.ru', '111', '111', 'shox', '698d51a19d8a121ce581499d7b701668', 2, '', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`id`, `link`, `title`) VALUES
(1, 'http://sarkor.uz', 'Оператор интернета'),
(2, 'http://kinozal.ru', 'Сайт кино'),
(3, 'http://player.uz', 'Сайт сериалов');

-- --------------------------------------------------------

--
-- Структура таблицы `head_cat`
--

CREATE TABLE IF NOT EXISTS `head_cat` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `head_cat`
--

INSERT INTO `head_cat` (`id`, `title`) VALUES
(1, 'Blog'),
(2, 'Portfolio'),
(3, 'About Us'),
(4, 'Contacts');

-- --------------------------------------------------------

--
-- Структура таблицы `home_news`
--

CREATE TABLE IF NOT EXISTS `home_news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home_news`
--

INSERT INTO `home_news` (`id`, `title`, `description`, `text`, `date`, `author`, `img`) VALUES
(1, 'Internet Shop', 'Internet Programing is one of recent projects for now.This project is done by our team members.Each member had his own task to do it so far. One of us worked for backend and others worked for frontend .Hopefully it will worth higher marks.', 'Internet Programing is one of recent projects for now.This project is done by our team members.Each member had his own task to do it so far. One of us worked for backend and others worked for frontend .Hopefully it will worth higher marks.Internet Programing is one of recent projects for now.This project is done by our team members.Each member had his own task to do it so far. One of us worked for backend and others worked for frontend .Hopefully it will worth higher marks.Internet Programing is one of recent projects for now.This project is done by our team members.Each member had his own task to do it so far. One of us worked for backend and others worked for frontend .Hopefully it will worth higher marks.Internet Programing is one of recent projects for now.This project is done by our team members.Each member had his own task to do it so far. One of us worked for backend and others worked for frontend .Hopefully it will worth higher marks.', '0000-00-00', 'Abdulaziz', 'images/portfolio/5.jpg'),
(2, 'ASR NEWS', 'Our company is receiving valuable projects from different companies. Bellow we specified the names of companies we recieved And our projects have been liked by CLICK and we made contract with themBy contract we are one of their web supporters.', 'Our company is receiving valuable projects from different companies. Bellow we specified the names of companies we recieved And our projects have been liked by CLICK and we made contract with themBy contract we are one of their web supporters.Our company is receiving valuable projects from different companies. Bellow we specified the names of companies we recieved And our projects have been liked by CLICK and we made contract with themBy contract we are one of their web supporters.', '0000-00-00', 'Abdulaziz', 'images/portfolio/2.jpg'),
(5, 'HOT VACANCIES', 'Asr recommends internship and jobs for skilled web developers. The salary is so high different type of ones we require.For those who are interested in this you can contact us.Our contact is given in contact section.Please send resume to chief manager''s', 'Asr recommends internship and jobs for skilled web developers. The salary is so high different type of ones we require.For those who are interested in this you can contact us.Our contact is given in contact section.Please send resume to chief manager''sAsr recommends internship and jobs for skilled web developers. The salary is so high different type of ones we require.For those who are interested in this you can contact us.Our contact is given in contact section.Please send resume to chief manager''s', '0000-00-00', 'Abdulaziz', 'images/portfolio/1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_news`
--

CREATE TABLE IF NOT EXISTS `portfolio_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio_news`
--

INSERT INTO `portfolio_news` (`id`, `title`, `description`, `text`, `img`) VALUES
(1, 'THE PROJECT TITLE', '\r\nSemper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed n', 'Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risusSemper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risusSemper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.\r\n\r\nDonec commodo tortor pellentesque nisl cursus volutpat. Sed sit amet odio et magna tempor posuere vestibulum ac risus', '1.jpg'),
(2, 'THE PROJECT TITLE', 'THE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLE', 'THE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLEv', '1.jpg'),
(3, 'THE PROJECT TITLE', 'THE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLE', 'THE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLETHE PROJECT TITLE', '1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `head_cat`
--
ALTER TABLE `head_cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home_news`
--
ALTER TABLE `home_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio_news`
--
ALTER TABLE `portfolio_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title_2` (`title`),
  ADD KEY `title_4` (`title`),
  ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `description` (`description`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `text` (`text`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `img` (`img`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `title_3` (`title`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `text_2` (`text`);
ALTER TABLE `portfolio_news`
  ADD FULLTEXT KEY `description_2` (`description`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `head_cat`
--
ALTER TABLE `head_cat`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `home_news`
--
ALTER TABLE `home_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `portfolio_news`
--
ALTER TABLE `portfolio_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
