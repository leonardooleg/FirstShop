-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 24 2019 г., 22:03
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart_storage`
--

INSERT INTO `cart_storage` (`id`, `cart_data`, `created_at`, `updated_at`) VALUES
('1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:2:{s:7:\"41F5DA0\";O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:20:\"App\\Models\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:7:\"cart_id\";s:7:\"41F5DA0\";s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"Товар № 4\";s:5:\"price\";d:146;s:8:\"quantity\";i:4;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:3:{s:5:\"color\";s:6:\"1F5DA0\";s:4:\"size\";s:11:\"XXL (56-58)\";s:3:\"img\";s:61:\"uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg\";}}s:10:\"conditions\";a:0:{}}}s:8:\"12C71F2D\";O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:20:\"App\\Models\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:7:\"cart_id\";s:8:\"12C71F2D\";s:2:\"id\";s:2:\"12\";s:4:\"name\";s:17:\"Товар № 12\";s:5:\"price\";d:146;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:3:{s:5:\"color\";s:6:\"C71F2D\";s:4:\"size\";s:7:\"XS (46)\";s:3:\"img\";s:61:\"uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg\";}}s:10:\"conditions\";a:0:{}}}}}', '2019-10-23 14:13:50', '2019-10-23 14:31:13');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `cloth` int(1) NOT NULL DEFAULT '0',
  `published` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `_lft`, `_rgt`, `parent_id`, `cloth`, `published`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(3, 'Tретья', 'tretya-1905192238', 1, 12, NULL, 0, 1, NULL, NULL, '2019-05-19 19:38:59', '2019-06-06 19:00:12'),
(18, 'Подтретья', '4444-2005192313', 10, 11, 3, 0, 1, NULL, NULL, '2019-05-20 20:13:50', '2019-06-06 19:00:46'),
(20, 'Четвертая', '6666-2105191327', 13, 14, NULL, 0, 1, NULL, NULL, '2019-05-21 10:27:25', '2019-06-06 19:00:58'),
(21, 'Пятая', '7777-2105191401', 15, 16, NULL, 0, 1, NULL, NULL, '2019-05-21 11:01:07', '2019-06-06 19:01:13'),
(24, 'Шестая', 'rrrrrr-2205192137', 17, 26, NULL, 0, 1, NULL, NULL, '2019-05-22 18:37:06', '2019-06-06 19:01:23'),
(25, 'Подшестая', 'ttttt-2205192137', 18, 25, 24, 0, 1, NULL, NULL, '2019-05-22 18:37:15', '2019-06-06 19:01:39'),
(26, 'ПодПодшестая', 'yyyyy-2205192152', 19, 24, 25, 1, 1, NULL, NULL, '2019-05-22 18:52:45', '2019-11-12 21:19:57'),
(27, 'Последняя', 'uuuu-2205192201', 20, 23, 26, 0, 1, NULL, NULL, '2019-05-22 19:01:04', '2019-06-06 19:02:01'),
(28, 'Тестовая', 'testovaya-1106191320', 21, 22, 27, 0, 1, NULL, NULL, '2019-06-11 10:20:20', '2019-06-11 10:20:20'),
(29, 'Мужские хиты', 'muzhskie-khity-0109191924', 27, 28, NULL, 0, 1, NULL, NULL, '2019-09-01 16:24:59', '2019-09-01 16:25:56'),
(30, 'Спорт', 'sport-0109191926', 30, 43, 31, 0, 1, NULL, NULL, '2019-09-01 16:26:07', '2019-09-01 20:06:57'),
(31, 'Распродажи', 'rasprodazhi-0109192306', 29, 44, NULL, 0, 1, NULL, NULL, '2019-09-01 20:06:51', '2019-09-01 20:07:07'),
(32, 'Единоборства', 'edinoborstva-0109192307', 31, 34, 30, 0, 1, NULL, NULL, '2019-09-01 20:07:24', '2019-09-01 20:07:24'),
(33, 'Бокс', 'boks-0109192307', 32, 33, 32, 0, 1, NULL, NULL, '2019-09-01 20:07:39', '2019-09-01 20:07:39'),
(34, 'Гонки', 'gonki-0409191546', 35, 42, 30, 1, 1, NULL, NULL, '2019-09-04 12:46:18', '2019-11-12 21:20:37'),
(35, 'Формула 1', 'formula-1-0409191546', 36, 37, 34, 0, 1, NULL, NULL, '2019-09-04 12:46:32', '2019-09-04 12:46:32'),
(36, 'Велоспорт', 'velosport-0409191546', 38, 39, 34, 0, 1, NULL, NULL, '2019-09-04 12:46:57', '2019-09-04 12:46:57'),
(37, 'Наскар', 'naskar-0409191547', 40, 41, 34, 0, 1, NULL, NULL, '2019-09-04 12:47:44', '2019-09-04 12:47:44'),
(38, 'Мужская одежда', 'muzhskaya-odezhda-3110191526', 45, 54, NULL, 0, 1, NULL, NULL, '2019-10-31 13:26:21', '2019-10-31 13:26:21'),
(39, 'Мужские футболки', 'muzhskie-futbolki-3110191526', 46, 53, 38, 0, 1, NULL, NULL, '2019-10-31 13:26:35', '2019-10-31 13:26:35'),
(40, 'Мужская футболка хлопок', 'muzhskaya-futbolka-khlopok-3110191526', 47, 52, 39, 1, 1, NULL, NULL, '2019-10-31 13:26:51', '2019-11-12 20:33:21'),
(41, 'Прикольные картинки', 'prikolnye-kartinki-3110191527', 48, 51, 40, 0, 1, NULL, NULL, '2019-10-31 13:27:05', '2019-10-31 13:27:05'),
(42, 'Модные', 'modnye-3110191527', 49, 50, 41, 0, 1, NULL, NULL, '2019-10-31 13:27:22', '2019-11-12 20:33:12');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryables`
--

CREATE TABLE `categoryables` (
  `category_id` int(11) NOT NULL,
  `categoryable_id` int(11) NOT NULL,
  `categoryable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categoryables`
--

INSERT INTO `categoryables` (`category_id`, `categoryable_id`, `categoryable_type`) VALUES
(3, 4, 'App\\Models\\Product'),
(18, 4, 'App\\Models\\Product'),
(18, 5, 'App\\Models\\Product'),
(3, 6, 'App\\Models\\Product'),
(18, 7, 'App\\Models\\Product'),
(20, 8, 'App\\Models\\Product'),
(20, 9, 'App\\Models\\Product'),
(24, 11, 'App\\Models\\Product'),
(27, 13, 'App\\Models\\Product'),
(25, 10, 'App\\Models\\Product'),
(26, 10, 'App\\Models\\Product'),
(27, 10, 'App\\Models\\Product'),
(3, 3, 'App\\Models\\Product'),
(18, 3, 'App\\Models\\Product'),
(24, 3, 'App\\Models\\Product'),
(25, 3, 'App\\Models\\Product'),
(26, 3, 'App\\Models\\Product'),
(27, 3, 'App\\Models\\Product'),
(27, 14, 'App\\Models\\Product'),
(27, 12, 'App\\Models\\Product'),
(18, 15, 'App\\Models\\Product'),
(20, 18, 'App\\Models\\Product'),
(31, 17, 'App\\Models\\Product'),
(30, 17, 'App\\Models\\Product'),
(33, 17, 'App\\Models\\Product'),
(34, 17, 'App\\Models\\Product'),
(35, 17, 'App\\Models\\Product'),
(36, 17, 'App\\Models\\Product'),
(37, 17, 'App\\Models\\Product'),
(38, 16, 'App\\Models\\Product'),
(39, 16, 'App\\Models\\Product'),
(40, 16, 'App\\Models\\Product'),
(41, 16, 'App\\Models\\Product'),
(42, 16, 'App\\Models\\Product'),
(21, 19, 'App\\Models\\Product');

-- --------------------------------------------------------

--
-- Структура таблицы `cloths`
--

CREATE TABLE `cloths` (
  `id_cloths` int(10) NOT NULL,
  `cloths` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cloths`
--

INSERT INTO `cloths` (`id_cloths`, `cloths`, `specifications`, `created_at`, `updated_at`) VALUES
(1, 'Шолк', 'крутой материал для одежды', NULL, NULL),
(2, 'Синтетика', 'Ужасный материал', NULL, NULL),
(3, 'хлопок', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id_color` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `color_code` varchar(20) NOT NULL,
  `color_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id_color`, `color`, `color_code`, `color_desc`) VALUES
(1, 'белый', 'ffffff', ''),
(2, 'черный', '000000', ''),
(3, 'голубой', '0000CD', ''),
(4, 'синий', '0000FF', ''),
(5, 'темно-синий', '00008B', ''),
(6, 'красный', 'FF0000', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_25_224625_create_products_table', 1),
(4, '2018_10_27_230750_create_cloths_table', 1),
(5, '2018_10_27_232202_create_specifications_table', 1),
(6, '2018_11_02_220319_create_categories_table', 2),
(7, '2019_01_20_211730_create_category_product_table', 3),
(8, '2019_01_30_150603_create_category_products_table', 4),
(9, '2019_05_18_201308_create_shops_table', 4),
(10, '2019_05_19_113832_create_categories_table', 5),
(11, '2019_05_25_133314_create_categoryable_table', 6),
(12, '2019_05_25_152433_create_products_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_short` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(20) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL,
  `viewed` int(11) DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description_short`, `description`, `image`, `next_images`, `meta_title`, `meta_description`, `meta_keyword`, `price`, `published`, `viewed`, `likes`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(3, 'Товар № 3', 'proveryaem-dalshe-2805192110', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', 'Мета заголовок2', 'Мета описание2', 'слово, третье', 146, 0, 0, 0, 1, 1, '2019-05-28 18:10:12', '2019-05-28 18:22:01'),
(4, 'Товар № 4', 'vtoraya-statya-2805192153', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', 'Мета заголовок', 'Мета описание', 'слово,два,три', 146, 0, 0, 0, 1, 1, '2019-05-28 18:53:46', '2019-05-28 18:53:56'),
(5, 'Товар № 5', '2-2805192224', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:24:53', '2019-05-28 19:24:53'),
(6, 'Товар № 6', '3-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:25:03', '2019-05-28 19:25:03'),
(7, 'Товар № 7', '4-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:25:11', '2019-05-28 19:25:11'),
(8, 'Товар № 8', '5-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:25:20', '2019-05-28 19:25:20'),
(9, 'Товар № 9', '6-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:25:28', '2019-05-28 19:25:28'),
(10, 'Товар № 10', '7-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', '7', NULL, NULL, 146, 0, 0, 0, 1, 1, '2019-05-28 19:25:37', '2019-05-30 20:39:34'),
(11, 'Товар № 11', '888-2805192225', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, NULL, '2019-05-28 19:25:49', '2019-05-28 19:25:49'),
(12, 'Товар № 12', '9-2805192226', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', '9', '99', NULL, 146, 0, 0, 0, 1, 1, '2019-05-28 19:26:00', '2019-06-03 09:28:48'),
(13, 'Товар № 13', '10-2805192226', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', '10', NULL, NULL, 146, 0, 0, 0, 1, 1, '2019-05-28 19:26:11', '2019-05-30 20:39:16'),
(14, 'Товар № 14', '111-2805192226', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', '11', '11', NULL, 146, 0, 0, 0, 1, 1, '2019-05-28 19:26:22', '2019-06-02 08:21:14'),
(15, 'Товар № 15', 'pervaya-s-foto-0106192241', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, 1, '2019-06-01 19:41:25', '2019-06-06 16:26:59'),
(16, 'Товар № 16', 'vtoraya-s-foto-0606191928', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', 'ф івіф', 'вфів', 'фі віф, фі вф', 146, 1, 0, 0, 1, 1, '2019-06-06 16:28:32', '2019-10-31 13:28:16'),
(17, 'Товар № 17', 'tretya-s-foto-0606191929', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', 'ф вфі', 'фів', 'ффіф', 146, 0, 0, 0, 1, 1, '2019-06-06 16:29:47', '2019-09-04 17:52:50'),
(18, 'Товар № 18', 'as-dsa-d-0606191935', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', 'a d', 'a sdfff', NULL, 146, 0, 0, 0, 1, 1, '2019-06-06 16:35:59', '2019-06-06 17:53:37'),
(19, 'Товар № 19', 'as-da-d-0606191936', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', '<p>Краткое описание Краткое описание Краткое описание Краткое описание</p>', 'uploads/product/HkKvuE1NV91P19BzJeemFCNGLK5hJ7cwf0aapA7Z.jpeg', '[\"uploads/product/rCNMZCicuk8gsbtGjbbGiDUoAdGILwUWKEalFvrn.jpeg\",\"uploads/product/nd7yv9GQzvBr8sIgp5FFYw9RfRrp9YsBZ2J0PzAk.jpeg\",\"uploads/product/VAY8DCnYLR7xbYR6orKUhgjSnaMx1NIsvfMx17Rr.jpeg\"]', NULL, NULL, NULL, 146, 0, 0, 0, 1, 1, '2019-06-06 16:36:57', '2019-11-15 12:36:59');

-- --------------------------------------------------------

--
-- Структура таблицы `sexes`
--

CREATE TABLE `sexes` (
  `id_sex` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `sex_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sexes`
--

INSERT INTO `sexes` (`id_sex`, `sex`, `sex_desc`) VALUES
(1, 'женская', ''),
(2, 'мужская', ''),
(3, 'децкая', '');

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(11) NOT NULL,
  `id_sex` int(11) NOT NULL,
  `size_world` varchar(50) NOT NULL,
  `size_rus` int(50) NOT NULL,
  `size_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`id_size`, `id_sex`, `size_world`, `size_rus`, `size_desc`) VALUES
(1, 2, 'XS', 46, ''),
(2, 2, 'S', 48, ''),
(3, 1, 'XXS', 40, ''),
(4, 1, 'XS', 42, '');

-- --------------------------------------------------------

--
-- Структура таблицы `textiles`
--

CREATE TABLE `textiles` (
  `id` int(20) NOT NULL,
  `textiles_category` int(50) NOT NULL,
  `textiles_cloths` int(50) NOT NULL,
  `textiles_sex` int(20) NOT NULL,
  `textiles_type` int(20) NOT NULL,
  `textiles_size` int(20) NOT NULL,
  `textiles_color` int(20) NOT NULL,
  `textiles_qty` int(50) NOT NULL,
  `textiles_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `textiles`
--

INSERT INTO `textiles` (`id`, `textiles_category`, `textiles_cloths`, `textiles_sex`, `textiles_type`, `textiles_size`, `textiles_color`, `textiles_qty`, `textiles_desc`, `created_at`, `updated_at`) VALUES
(1, 26, 1, 1, 1, 3, 2, 2342, 'фів фів  фів', '2019-10-26 17:53:13', '2019-11-14 09:36:03'),
(2, 40, 2, 1, 1, 2, 3, 234, 'А фіа фа фа фі', '2019-10-26 18:47:32', '2019-11-14 09:35:44'),
(3, 40, 3, 2, 1, 3, 2, 131, 'вфыв фыв', '2019-10-26 18:51:48', '2019-11-14 09:35:36'),
(4, 40, 3, 3, 4, 4, 6, 1314, 'вфыв фыв', '2019-10-26 18:52:30', '2019-11-14 09:35:53'),
(5, 40, 3, 3, 4, 4, 6, 3424, 'а ыва выа вы', '2019-10-26 18:53:29', '2019-11-13 16:23:37'),
(6, 40, 2, 1, 2, 4, 4, 5, 'а ів аіва ів7856857', '2019-10-26 18:54:06', '2019-11-14 09:35:26'),
(7, 26, 3, 2, 2, 2, 6, 121, 'фів іф11231', '2019-10-26 18:55:00', '2019-11-13 16:22:45');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id_type` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `type_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id_type`, `type`, `type_desc`) VALUES
(1, 'футболка', ''),
(2, 'свитшот', ''),
(3, 'лонгслив', ''),
(4, 'толстовка', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'leonardooleg2@gmail.com', NULL, '$2y$10$rSM39GyorybaGavvQ09x1./7t7ogOHwoOlZissX6wi5w8gw0dsWnu', '0g8OZsxXntYMUCIWzVNANdnSxdvPLfekSP0HQuaRE5OixcmBi7x4ZW5NMp2P', '2019-08-08 18:17:50', '2019-08-08 18:17:50'),
(2, 'Demo', 'demo@demo.com', NULL, '$2y$10$92p13CseKQ0B0dR4xsh09ua/4Xv0EVJ426oI5l6JfMHHNfE78lth2', NULL, '2019-08-16 14:32:13', '2019-08-16 14:32:13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_storage_id_index` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`id_cloths`),
  ADD KEY `id_cloths` (`id_cloths`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Индексы таблицы `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id_sex`),
  ADD KEY `id_sex` (`id_sex`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`),
  ADD KEY `id_sex` (`id_sex`);

--
-- Индексы таблицы `textiles`
--
ALTER TABLE `textiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `textiles_color` (`textiles_color`),
  ADD KEY `textiles_sex` (`textiles_sex`),
  ADD KEY `textiles_size` (`textiles_size`),
  ADD KEY `textiles_type` (`textiles_type`),
  ADD KEY `textiles_cloths` (`textiles_cloths`),
  ADD KEY `textiles_category` (`textiles_category`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `cloths`
--
ALTER TABLE `cloths`
  MODIFY `id_cloths` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id_sex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `textiles`
--
ALTER TABLE `textiles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_ibfk_1` FOREIGN KEY (`id_sex`) REFERENCES `sexes` (`id_sex`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `textiles`
--
ALTER TABLE `textiles`
  ADD CONSTRAINT `textiles_ibfk_1` FOREIGN KEY (`textiles_color`) REFERENCES `colors` (`id_color`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `textiles_ibfk_2` FOREIGN KEY (`textiles_sex`) REFERENCES `sexes` (`id_sex`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `textiles_ibfk_3` FOREIGN KEY (`textiles_size`) REFERENCES `sizes` (`id_size`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `textiles_ibfk_4` FOREIGN KEY (`textiles_type`) REFERENCES `types` (`id_type`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `textiles_ibfk_5` FOREIGN KEY (`textiles_cloths`) REFERENCES `cloths` (`id_cloths`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
