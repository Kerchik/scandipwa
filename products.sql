-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 17 2019 г., 11:56
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `listofproducts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_sku` text NOT NULL,
  `product_name` text NOT NULL,
  `product_price` double NOT NULL,
  `product_extra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_sku`, `product_name`, `product_price`, `product_extra`) VALUES
(70, 'GGWP0789', 'War and Peace', 20, 'Weight: 2 KG'),
(71, 'TR5465', 'Chair', 35, 'Dimension: 24x45x15'),
(72, 'TR1345', 'Chair', 45, 'Dimension: 13x45x15'),
(73, 'GGWP1547', '1984', 15, 'Weight: 2 KG'),
(74, 'JVC1345', 'Acme DISK', 1.75, 'Size: 850 MB'),
(75, 'JVC8735', 'Acme DISC', 1.55, 'Size: 600 MB'),
(76, 'GGWP6712', 'Crime and Punishment', 23, 'Weight: 2.3 KG'),
(77, 'GGWP6338', 'Harry Potter', 14, 'Weight: 1.6 KG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
