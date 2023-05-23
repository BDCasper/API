-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 14:38
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Subscribers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(12) NOT NULL,
  `Номер телефона` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Адресс` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `День недели` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Период доставки` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Корзина` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Срок подписки` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscriber`
--

INSERT INTO `subscriber` (`id`, `Номер телефона`, `Адресс`, `День недели`, `Период доставки`, `Корзина`, `Срок подписки`) VALUES
(1, '+77762420000', 'г.Уральск, ул.Кунаева 55/2, кв.120', 'Суббота', 'Каждую 7 неделю', 'Картошка 5кг, Капуста 4кг, Coca-cola 1L 5шт', '2023-06-21'),
(27, '+7776242600', 'г.Астана', 'Среда', 'Каждую 2 неделю', 'Морковка', '2023-06-23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
