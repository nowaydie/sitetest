-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2022 г., 19:51
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aviabilet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `idtickets` int NOT NULL,
  `departure` varchar(125) COLLATE utf8mb4_general_ci NOT NULL,
  `arrival` varchar(125) COLLATE utf8mb4_general_ci NOT NULL,
  `dateDeparture` varchar(125) COLLATE utf8mb4_general_ci NOT NULL,
  `dateArrival` varchar(125) COLLATE utf8mb4_general_ci NOT NULL,
  `places` int NOT NULL,
  `timeDeparture` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `timeArravel` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`idtickets`, `departure`, `arrival`, `dateDeparture`, `dateArrival`, `places`, `timeDeparture`, `timeArravel`, `price`) VALUES
(1, 'Москва', 'Стамбул', '12 нояб', '12 нояб', 100, '18:35', '23:35', 8219),
(2, 'Ростов-на-Дону', 'Москва', '13 нояб', '15 нояб', 100, '13:45', '15:30', 5000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`idtickets`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `idtickets` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
