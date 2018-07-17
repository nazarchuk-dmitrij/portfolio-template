-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 17 2018 г., 18:12
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolio_contact`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mailbox`
--

CREATE TABLE `mailbox` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `mailbox`
--

INSERT INTO `mailbox` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'Dmytro Nazarchuk', 'nazarchuk.dmitrij@gmail.com', 'Seems that this task is almost done.\r\n\r\nCheers'),
(2, 'Dmytro Nazarchuk', 'nazarchuk.dmitrij@gmail.com', 'test'),
(3, 'Dmytro Nazarchuk', 'nazarchuk.dmitrij@gmail.com', 'Final test'),
(4, 'Dmytro Nazarchuk', 'nazarchuk.dmitrij@gmail.com', 'Final message, for real.'),
(5, 'Dmytro Nazarchuk', 'nazarchuk.dmitrij@gmail.com', 'Final message, for real.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
