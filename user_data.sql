-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 11 2022 г., 18:55
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `UID` int(50) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`UID`, `Name`, `Age`, `Email`, `Phone`, `Gender`) VALUES
(1, 'Alex', '22', 'alex@textmail.com', '1243453425', 'male'),
(2, 'Helen', '17', 'helen@textmail.com', '6457634543', 'female'),
(3, 'Max', '45', 'Max-1@textmail.com', '7657324322', 'male'),
(4, 'John', '12', 'j@textmail.com', '9345723467', 'male'),
(5, 'Ivan', '77', 'Ivan-777@textmail.com', '2345324543', 'male'),
(6, 'Peter', '35', 'pp@textmail.com', '7456342343', 'male'),
(7, 'Ann', '53', 'annie@textmail.com', '8563445233', 'female'),
(8, 'Matt', '33', 'mett@textmail.com', '6435433452', 'male'),
(9, 'Kate', '21', 'katerina@textmail.com', '2453546444', 'female'),
(10, 'Jack', '43', 'jj@textmail.com', '8967443234', 'male'),
(11, 'Taras', '37', 'tar@somemail.com', '5464353534', 'male'),
(12, 'Leo D.', '42', 'leo@gmail.com', '3534522456', 'male');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
