-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Окт 17 2021 г., 17:31
-- Версия сервера: 8.0.26
-- Версия PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_nevatrip`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `event_id` int NOT NULL,
  `event_date` datetime NOT NULL,
  `barcode` varchar(120) NOT NULL,
  `user_id` int NOT NULL,
  `equal_price` int NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `event_id`, `event_date`, `barcode`, `user_id`, `equal_price`, `created`) VALUES
(1, 1, '2021-10-17 15:17:37', '', 1, 2900, '2021-10-17 15:17:37');

-- --------------------------------------------------------

--
-- Структура таблицы `order_tickets`
--

CREATE TABLE `order_tickets` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `ticket_type_name` varchar(120) NOT NULL,
  `amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_tickets`
--

INSERT INTO `order_tickets` (`id`, `order_id`, `ticket_type_name`, `amount`) VALUES
(1, 1, 'детский', 3),
(2, 1, 'взрослый', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_prices`
--

CREATE TABLE `ticket_prices` (
  `id` int NOT NULL,
  `event_id` int NOT NULL,
  `ticket_type_name` varchar(120) NOT NULL,
  `ticket_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `ticket_prices`
--

INSERT INTO `ticket_prices` (`id`, `event_id`, `ticket_type_name`, `ticket_price`) VALUES
(1, 1, 'детский', 500),
(2, 1, 'взрослый', 700);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Индексы таблицы `order_tickets`
--
ALTER TABLE `order_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `ticket_prices`
--
ALTER TABLE `ticket_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `order_tickets`
--
ALTER TABLE `order_tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ticket_prices`
--
ALTER TABLE `ticket_prices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_tickets`
--
ALTER TABLE `order_tickets`
  ADD CONSTRAINT `order_tickets_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `ticket_prices`
--
ALTER TABLE `ticket_prices`
  ADD CONSTRAINT `ticket_prices_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
