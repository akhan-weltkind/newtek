-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2017 г., 11:47
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newtek`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lr_articles`
--

DROP TABLE IF EXISTS `lr_articles`;
CREATE TABLE IF NOT EXISTS `lr_articles` (
  `id` int(10) unsigned NOT NULL,
  `lang` enum('ru','en','ky') COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `preview` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_h1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_feedback`
--

DROP TABLE IF EXISTS `lr_feedback`;
CREATE TABLE IF NOT EXISTS `lr_feedback` (
  `id` int(10) unsigned NOT NULL,
  `lang` enum('ru','en','ky') COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `ip` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_gallery`
--

DROP TABLE IF EXISTS `lr_gallery`;
CREATE TABLE IF NOT EXISTS `lr_gallery` (
  `id` int(10) unsigned NOT NULL,
  `priority` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ky` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview_en` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `preview_ru` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `preview_ky` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `content_ky` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_gallery_images`
--

DROP TABLE IF EXISTS `lr_gallery_images`;
CREATE TABLE IF NOT EXISTS `lr_gallery_images` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_migrations`
--

DROP TABLE IF EXISTS `lr_migrations`;
CREATE TABLE IF NOT EXISTS `lr_migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_migrations`
--

INSERT INTO `lr_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_12_16_050109_create_news_table', 1),
(3, '2016_12_21_041106_create_articles_table', 1),
(4, '2016_12_28_074724_create_tree_table', 1),
(5, '2017_01_21_095612_create_feedback_table', 1),
(6, '2017_01_21_095933_create_settings_table', 1),
(7, '2017_01_23_055339_create_widgets_table', 1),
(8, '2017_01_23_074707_create_gallery_table', 1),
(9, '2017_01_23_075050_create_gallery_images_table', 1),
(12, '2017_01_26_112003_Slider', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `lr_news`
--

DROP TABLE IF EXISTS `lr_news`;
CREATE TABLE IF NOT EXISTS `lr_news` (
  `id` int(10) unsigned NOT NULL,
  `lang` enum('ru','en','ky') COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `preview` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `on_main` tinyint(4) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_h1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_news`
--

INSERT INTO `lr_news` (`id`, `lang`, `priority`, `title`, `date`, `preview`, `content`, `image`, `active`, `on_main`, `meta_title`, `meta_h1`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'ru', 0, 'Банкиры предложили сохранить накопления «молчунов» еще на два года', '2016-08-12', 'Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.', '<p>Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n', '1485837592_66849700.jpg', 1, 1, '', '', '', '', '2017-01-30 22:39:03', '2017-01-30 22:39:52'),
(2, 'ru', 0, '2 Банкиры предложили сохранить накопления «молчунов» еще на два года', '2017-01-18', '2 Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.', '<p>2 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>2 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>2 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>2 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n', '', 1, 1, '', '', '', '', '2017-01-30 22:41:11', '2017-01-31 06:17:51'),
(3, 'ru', 0, '3 Банкиры предложили сохранить накопления «молчунов» еще на два года. ', '2017-01-31', '3 Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления «молчунов» еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.', '<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n\r\n<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года. Ассоциация российских банков предлагает продлить право граждан на выбор между накопительной и распределительной пенсией еще на два года.</p>\r\n', '1485837702_38583700.jpg', 1, 1, '', '', '', '', '2017-01-30 22:41:42', '2017-01-30 22:41:42'),
(4, 'ru', 0, '4 Банкиры предложили сохранить накопления «молчунов» еще на два года. ', '2017-01-31', '3 Банкиры предложили сохранить накопления «молчунов» еще на два года. \r\n3 Банкиры предложили сохранить накопления «молчунов» еще на два года. \r\n3 Банкиры предложили сохранить накопления «молчунов» еще на два года. \r\n3 Банкиры предложили сохранить накопления «молчунов» еще на два года. \r\n3 Банкиры предложили сохранить накопления «молчунов» еще на два года. ', '<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.</p>\r\n\r\n<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.</p>\r\n\r\n<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.</p>\r\n\r\n<p>3 Банкиры предложили сохранить накопления &laquo;молчунов&raquo; еще на два года.</p>\r\n', '1485837746_35637500.jpg', 1, 1, '', '', '', '', '2017-01-30 22:42:26', '2017-01-30 22:42:26');

-- --------------------------------------------------------

--
-- Структура таблицы `lr_settings`
--

DROP TABLE IF EXISTS `lr_settings`;
CREATE TABLE IF NOT EXISTS `lr_settings` (
  `id` int(10) unsigned NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_settings`
--

INSERT INTO `lr_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'slider_interval', '4000', NULL, NULL),
(2, 'lat', '42.8753169', NULL, NULL),
(3, 'lng', '74.6192498', NULL, NULL),
(4, 'zoom', '16', NULL, NULL),
(5, 'feedback_email', 'xannn94@mail.ru,axiles94@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lr_slider`
--

DROP TABLE IF EXISTS `lr_slider`;
CREATE TABLE IF NOT EXISTS `lr_slider` (
  `id` int(10) unsigned NOT NULL,
  `lang` enum('ru','en') COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `title_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview` text COLLATE utf8_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_type` enum('in','out') COLLATE utf8_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_slider`
--

INSERT INTO `lr_slider` (`id`, `lang`, `title`, `title_color`, `preview`, `button`, `button_color`, `button_background`, `link`, `link_type`, `main_image`, `background_image`, `priority`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ru', 'Поликристаллические солнечные модули', '#000000', 'Кризис легитимности, на первый взгляд, верифицирует идеологический доиндустриальный тип политической культуры.', 'Подробнее', '#FFFFFF', '#2D2E83', '', 'in', '1485769621_47414000.png', '1485769621_81916000.jpg', 0, 1, '2017-01-30 03:47:01', '2017-01-30 05:04:59'),
(2, 'ru', 'Можно менять и фон и картинку, по разному короче можно и вот так даже', '#000000', 'Кризис легитимности, на первый взгляд, верифицирует идеологический', 'Подробнее', '#FFFFFF', '#2D2E83', 'https://google.com', 'out', '1485771787_26350800.png', '1485771787_58452600.jpg', 1, 1, '2017-01-30 04:23:07', '2017-01-30 04:26:43'),
(3, 'ru', 'Слайд без картинки и с оочень, ну очень длинным заголовком, прям в три строчки', '#000000', 'Кризис легитимности, на первый взгляд, верифицирует идеологический  Кризис легитимности, на первый взгляд, верифицирует идеологический  Кризис легитимности, на первый взгляд, верифицирует идеологический  Кризис легитимности, на первый взгляд, верифицирует идеологический  Кризис легитимности, на первый взгляд, верифицирует идеологический Кризис легитимности, на первый взгляд, верифицирует идеологический ', 'Подробнее', '#FFFFFF', '#2D2E83', '', 'out', '1485771927_63274100.png', '1485771928_01776300.jpg', 2, 1, '2017-01-30 04:25:27', '2017-01-30 05:04:21');

-- --------------------------------------------------------

--
-- Структура таблицы `lr_tree`
--

DROP TABLE IF EXISTS `lr_tree`;
CREATE TABLE IF NOT EXISTS `lr_tree` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `lang` enum('ru','en','ky') COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `in_menu` tinyint(4) NOT NULL,
  `in_footer_menu` tinyint(4) NOT NULL,
  `footer_column` tinyint(4) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_h1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_tree`
--

INSERT INTO `lr_tree` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `lang`, `slug`, `title`, `content`, `module`, `template`, `active`, `in_menu`, `in_footer_menu`, `footer_column`, `meta_title`, `meta_h1`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 28, 0, 'ru', '', 'Главная', '', '', 'index', 1, 0, 0, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 05:33:49'),
(2, 1, 2, 13, 1, 'ru', 'about', 'О компании', '<p>\r\n						  54,2% территории расположено на высоте до 150 м над уровнем моря 36,9% - от 150 до 300 м н.у.м., 5,7% - от 300 до 500 м н.у.м., 2,9 &ndash; от 500 до №1000 м н.у.м.\r\n						</p>\r\n						<p>\r\n						  Общая площадь Польши &ndash; 312 658 км2 (по площади занимает 69 место в мире, и 9 в Европе);\r\n						</p>\r\n						<p>\r\n						  Общая протяжённость границ &ndash; 3 528 км, из них &ndash; 3 054 км сухопутных, и 528 морских.\r\n						</p>\r\n						<p>\r\n						  Территория Польши составляет 312 677 кв.км), территориальные воды - 8 682 кв.км (12-мильная зона). Форма Польши на карте напоминает круг, геометрическая граница которого располагается к юго-западу от Лодзи - 19о07&#39; в.д., 51о55&#39; с.ш.\r\n						</p>\r\n						<h2>\r\n						  Я приближался к месту моего назначения.\r\n						</h2>\r\n						<p>\r\n						  В Бишкеке в честь Дня независимости состоится фотовыставка на тему &laquo;Улыбки Кыргызстана&raquo;\r\n						</p>\r\n						<p>\r\n						  <span class="red">Территория Польши</span>простирается от 49o00&rsquo; до 54о50&rsquo; северной широты и от 14o07&rsquo; до 24o08&rsquo; восточной долготы.\r\n						  <br />\r\n						  54,2% территории расположено на высоте до 150 м над уровнем моря 36,9% - от 150 до 300 м н.у.м., 5,7% - от 300 до 500 м н.у.м., 2,9 &ndash; от 500 до 1000 м н.у.м.\r\n						</p>\r\n						<p>\r\n						  Общая площадь Польши &ndash; 312 658 км2 (по площади занимает 69 место в мире, и 9 в Европе);\r\n						</p>\r\n						<p>\r\n						  Общая протяжённость границ &ndash; 3 528 км, из них &ndash; 3 054 км сухопутных, и 528 морских.\r\n						</p>\r\n						<p>\r\n						  Территория Польши составляет 312 677 кв.км), территориальные воды - 8 682 кв.км (12-мильная зона). Форма Польши на карте напоминает круг, геометрическая граница которого располагается к юго-западу от Лодзи - 19о07&#39; в.д., 51о55&#39; с.ш.\r\n						</p>\r\n						<p>\r\n						  Наиболее удалёнными точками Польши являются:\r\n						</p>\r\n						<ul class="bullet">\r\n						  <li>мыс Розеве (Rozewie) - 54о50&#39;;</li>\r\n						  <li>вершина Ополонек (Opolonek) в Бесчадах (Bieszczady) - 49о00&#39;;</li>\r\n						  <li>изгиб р. Одры (Odra) на запад от г. Цедыни (Cedynia) - 14о07&#39;;</li>\r\n						  <li>изгиб р. Буг (Bug) на восток около г. Хородла (Horodl) - 24о08&#39;.</li>\r\n						</ul>\r\n						<h3>\r\n						  Границы:\r\n						</h3>\r\n						<p>\r\n						  Современные границы Польши определились по окончанию 2 мировой войны. Их длина сократилась почти на 2000 км по сравнению с довоенными (1939 г).\r\n						</p>\r\n						<p>\r\n						  На 31 декабря 1945 года территория Польши составляла 311,7 тыс. кв.км., а до войны - 208,9 тыс.кв.км. В состав Польши вошли &quot;присоединённые земли&quot; - 100,9 тыс.кв.км. и 1,9 тыс.кв.км. - территория бывшего <a href="#">Вольного города Гданьска.</a>\r\n						</p>\r\n						<p>\r\n						  Сегодняшняя территория Польши составляет 312 685 кв.км.,\r\n						</p>\r\n						<p>\r\n						  Общая протяжённость границ составляла в 1947 году 3566 км., из них граница с Германией - 456 км, с Чехословакией - 1292 км, с СССР - 1321 км, остальное - 497 км - морская граница. Сегодня длина границ составляет 3582 км, из них морских - 528 км.\r\n						  <br />\r\n						  <q>\r\n						    Границы устанавливались в разное время разными способами. Граница с СССР была определена соглашением от 16 августа\r\n						  </q>\r\n						  1945 года и соглашением 25 марта 1957 года. Второе соглашение определило балтийскую часть границ с СССР. Граница с ГДР была определена на переговорах 6 июля 1950 года, а граница с Чехословакией - на переговорах 13 июня 1958 года.\r\n						</p>\r\n						<p>\r\n						  После политического передела в последних десятилетиях (образования новых государств) польские границы составляют: с Россией (Калининградская область) - 210 км, с Литвой - 103 км, с Белоруссией - 416 км, с Украиной - 529 км, со Словакией - 539 км, с Чехией - 790 км, с Германией - 467 км, длина морских границ - 528 км.\r\n						</p>\r\n						<h3>\r\n						  Климат:\r\n						</h3>\r\n						<p>\r\n						  Океанские воздушные массы придают климату мягкость. Преобладают западные ветры, приносящие прохладу и дожди летом и снегопады зимой.\r\n						</p>\r\n						<p>\r\n						  Восточные ветры приносят жару летом, и морозы зимой.\r\n						  <br />\r\n						  Средняя температура июля - плюс 17,9o, января &ndash; минус 4,5o.\r\n						</p>\r\n						<h1>\r\n						  Восьмого декабря 1915 года Мэгги Клири исполнилось четыре года.\r\n						</h1>\r\n						<p>\r\n						  Прибрав после завтрака посуду, мать молча сунула ей в руки сверток в коричневой бумаге и велела идти во двор. И вот Мэгги сидит на корточках под кустом утесника у ворот и нетерпеливо теребит сверток.\r\n						</p>\r\n						<h2>\r\n						  Не так-то легко развернуть неловкими пальцами плотную бумагу\r\n						</h2>\r\n						<p>\r\n						  от нее немножко пахнет большим магазином в Уэхайне, и Мэгги догадывается: то, что внутри, не сами делали и никто не дал, а &mdash; вот чудеса! &mdash; купили в магазине. С одного уголка начинает просвечивать что-то тонкое, золотистое; Мэгги еще торопливей набрасывается на обертку, отдирает от нее длинные неровные полосы.\r\n						</p>\r\n						<h3>\r\n						  Конечно, это чудо\r\n						</h3>\r\n						<p>\r\n						  За всю свою жизнь Мэгги только раз была в Уэхайне &mdash; давно-давно, еще в мае, ее туда взяли, потому что она была пай-девочкой. Она забралась тогда в двуколку рядом с матерью и вела себя лучше некуда, но от волнения почти ничего не видела и не запомнила, только одну Агнес.\r\n						</p>\r\n						<h4>\r\n						  Красавица кукла сидела на прилавке нарядная\r\n						</h4>\r\n						<p>\r\n						  в розовом шелковом кринолине, пышно отделанном кремовыми кружевными оборками. Мэгги в ту же минуту окрестила ее Агнес &mdash; она не знала более изысканного имени, достойного такой необыкновенной красавицы. Но потом долгие месяцы она лишь безнадежно тосковала по Агнес;\r\n						</p>\r\n						<h5>\r\n						  ведь у Мэгги никогда еще не было никаких кукол\r\n						</h5>\r\n						<p>\r\n						  она даже не подозревала, что маленьким девочкам полагаются куклы. Она превесело играла свистульками, рогатками и помятыми оловянными солдатиками, которых уже повыбрасывали старшие братья, руки у нее всегда были перепачканы, башмаки в грязи.\r\n						</p>\r\n						<h6>\r\n						  Мэгги и в голову не пришло, что Агнес &mdash; игрушка.\r\n						</h6>\r\n						<p>\r\n						  Она провела ладонью по складкам ярко-розового платья &mdash; такого великолепного платья она никогда не видала на живой женщине &mdash; и любовно взяла куклу на руки. У Агнес руки и ноги на шарнирах, их можно повернуть и согнуть как угодно; даже шея и тоненькая стройная талия сгибаются.\r\n						</p>\r\n						<ul class="bullet">\r\n						  <li>Золотистые волосы высоко зачесаны и разубраны жемчужинками,</li>\r\n						  <li>открытая нежно-розовая шея и плечи выступают из пены кружев, сколотых жемчужной булавкой. Тонко разрисованное фарфоровое личико не покрыли глазурью</li>\r\n						  <li>и оно матовое, нежное, совсем как человеческое. Удивительно живые синие глаза блестят, ресницы из настоящих волос, радужная оболочка</li>\r\n						</ul>\r\n						<ol class="bullet">\r\n						  <li>вся в лучиках и окружена темно-синим ободком; к восторгу Мэгги,</li>\r\n						  <li>оказалось, что если Агнес положить на спину, глаза у нее закрываются.</li>\r\n						  <li>На одной румяной щеке чернеет родинка, темно-красный рот чуть приоткрыт, виднеются крохотные белые зубы.</li>\r\n						</ol>\r\n						<table class="table">\r\n						  <thead>\r\n						    <tr>\r\n						      <th>\r\n						        Заголовок первого столбца\r\n						      </th>\r\n						      <th>\r\n						        Очень, очень, очень, приочень длинный заголовок второго столбца таблицы\r\n						      </th>\r\n						    </tr>\r\n						  </thead>\r\n						  <tbody>\r\n						    <tr>\r\n						      <td>\r\n						        Мэгги уютно скрестила ноги, осторожно усадила куклу\r\n						      </td>\r\n						      <td>\r\n						        на колени к себе &mdash; сидела и не сводила с нее глаз.\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Она все еще сидела там, под кустом, когда из зарослей высокой травы\r\n						      </td>\r\n						      <td>\r\n						        так близко к забору ее неудобно косить\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        вынырнули Джек и Хьюги. Волосы Мэгги, как у истинной Клири\r\n						      </td>\r\n						      <td>\r\n						        пылали точно маяк: всем детям в семье, кроме Фрэнка, досталось это наказанье\r\n						      </td>\r\n						    </tr>\r\n						  </tbody>\r\n						</table>\r\n						<p>\r\n						  пылали точно<i>маяк</i>: всем детям в<strong>семье, кроме Фрэнка</strong>, досталось это наказанье &mdash; у всех рыжие вихры, только разных оттенков. Джек весело подтолкнул брата локтем &mdash; гляди, мол. Переглядываясь,<b>ухмыляясь</b>, они подобрались к ней с двух сторон, будто они солдаты и <u>устроили облаву на изменника маори</u>. Да Мэгги все равно бы их не услышала, она была поглощена одной только Агнес и что-то ей тихонько напевала.\r\n						</p>\r\n						<h1>\r\n						  Heading 1\r\n						</h1>\r\n						<h2>\r\n						  Heading 2\r\n						</h2>\r\n						<h3>\r\n						  Heading 3\r\n						</h3>\r\n						<h4>\r\n						  Heading 4\r\n						</h4>\r\n						<h5>\r\n						  Heading 5\r\n						</h5>\r\n						<h6>\r\n						  Heading 6\r\n						</h6>\r\n						<h1>\r\n						  Text-level semantics\r\n						</h1>\r\n						<p>\r\n						  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m.\r\n						</p>\r\n						<p>\r\n						  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m.\r\n						</p>\r\n						<hr />\r\n						<p>\r\n						  The <a href="#">a element </a>example\r\n						  <br />\r\n						  The \r\n						  <abbr>\r\n						    abbr element \r\n						  </abbr>\r\n						  and \r\n						  <abbr title="Title text">\r\n						    abbr element with title \r\n						  </abbr>\r\n						  examples\r\n						  <br />\r\n						  The <b>b element </b>example\r\n						  <br />\r\n						  The <cite>cite element </cite>example\r\n						  <br />\r\n						  The \r\n						  <code>\r\n						    code element \r\n						  </code>\r\n						  example\r\n						  <br />\r\n						  The <del>del element </del>example\r\n						  <br />\r\n						  The \r\n						  <dfn>\r\n						    dfn element \r\n						  </dfn>\r\n						  and \r\n						  <dfn title="Title text">\r\n						    dfn element with title \r\n						  </dfn>\r\n						  examples\r\n						  <br />\r\n						  The <em>em element </em>example\r\n						  <br />\r\n						  The <i>i element </i>example\r\n						  <br />\r\n						  The img element <img alt="" src="http://lorempixel.com/16/16" />example\r\n						  <br />\r\n						  The <ins>ins element </ins>example\r\n						  <br />\r\n						  The \r\n						  <kbd>\r\n						    kbd element \r\n						  </kbd>\r\n						  example\r\n						  <br />\r\n						  The \r\n						  <q>\r\n						    q element \r\n						    <q>\r\n						      inside \r\n						    </q>\r\n						    a q element \r\n						  </q>\r\n						  example\r\n						  <br />\r\n						  The <s>s element </s>example\r\n						  <br />\r\n						  The \r\n						  <samp>\r\n						    samp element \r\n						  </samp>\r\n						  example\r\n						  <br />\r\n						  The <small>small element </small>example\r\n						  <br />\r\n						  The <span>span element </span>example\r\n						  <br />\r\n						  The <span class="red">red span element </span>example\r\n						  <br />\r\n						  The <strong>strong element </strong>example\r\n						  <br />\r\n						  The <sub>sub element </sub>example\r\n						  <br />\r\n						  The <sup>sup element </sup>example\r\n						  <br />\r\n						  The <u>u element </u>example\r\n						  <br />\r\n						  The \r\n						  <var>\r\n						    var element \r\n						  </var>\r\n						  example\r\n						</p>\r\n						<h1>\r\n						  Embedded content\r\n						</h1>\r\n						<h3>\r\n						  IMG\r\n						</h3>\r\n						<p>\r\n						  <img alt="" src="http://lorempixel.com/100/100" /><a href="#"><img alt="" src="http://lorempixel.com/100/100" /></a>\r\n						</p>\r\n						<p>\r\n						  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m.\r\n						</p>\r\n						<h3>\r\n						  PRE\r\n						</h3>\r\n						<pre>\r\n						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et me.			\r\n						</pre>\r\n						<pre>\r\n						<code>\r\n						&lt;html&gt;\r\n						&lt;head&gt;\r\n						&lt;title&gt;Page Title&lt;/title&gt;\r\n						&lt;/head&gt;\r\n						&lt;body&gt;\r\n						&lt;div class=&quot;main&quot;&gt; &lt;div&gt;\r\n						&lt;/body&gt;\r\n						&lt;/html&gt;\r\n						</code>\r\n						</pre>\r\n						<h3>\r\n						  BLOCKQUOTE\r\n						</h3>\r\n						<blockquote>\r\n						  <p>\r\n						    Some sort of famous witty quote marked up with a &lt;blockquote&gt; and a child &lt;p&gt; element.\r\n						  </p>\r\n						</blockquote>\r\n						<blockquote>\r\n						  Even better philosophical quote marked up with just a &lt;blockquote&gt; element.\r\n						</blockquote>\r\n						<h3>\r\n						  ORDERED LIST\r\n						</h3>\r\n						<ol class="bullet">\r\n						  <li>list item 1</li>\r\n						  <li>list item 1\r\n						    <ol class="bullet">\r\n						      <li>list item 2</li>\r\n						      <li>list item 2\r\n						        <ol class="bullet">\r\n						          <li>list item 3</li>\r\n						          <li>list item 3</li>\r\n						        </ol>\r\n						      </li>\r\n						      <li>list item 2</li>\r\n						      <li>list item 2</li>\r\n						    </ol>\r\n						  </li>\r\n						  <li>list item 1</li>\r\n						  <li>list item 1</li>\r\n						</ol>\r\n						<h3>\r\n						  UNORDERED LIST\r\n						</h3>\r\n						<ul class="bullet">\r\n						  <li>list item 1</li>\r\n						  <li>list item 1\r\n						    <ul class="bullet">\r\n						      <li>list item 2</li>\r\n						      <li>list item 2\r\n						        <ul class="bullet">\r\n						          <li>list item 3</li>\r\n						          <li>list item 3</li>\r\n						        </ul>\r\n						      </li>\r\n						      <li>list item 2</li>\r\n						      <li>list item 2</li>\r\n						    </ul>\r\n						  </li>\r\n						  <li>list item 1</li>\r\n						  <li>list item 1</li>\r\n						</ul>\r\n						<h3>\r\n						  DESCRIPTION LIST\r\n						</h3>\r\n						<dl>\r\n						  <dt>\r\n						    Description name\r\n						  </dt>\r\n						  <dd>\r\n						    Description value\r\n						  </dd>\r\n						  <dt>\r\n						    Description name\r\n						  </dt>\r\n						  <dd>\r\n						    Description value\r\n						  </dd>\r\n						  <dd>\r\n						    Description value\r\n						  </dd>\r\n						  <dt>\r\n						    Description name\r\n						  </dt>\r\n						  <dt>\r\n						    Description name\r\n						  </dt>\r\n						  <dd>\r\n						    Description value\r\n						  </dd>\r\n						</dl>\r\n						<h1>\r\n						  TABULAR DATA\r\n						</h1>\r\n						<table class="table">\r\n						  <caption>\r\n						    Jimi Hendrix - albums\r\n						  </caption>\r\n						  <thead>\r\n						    <tr>\r\n						      <th>\r\n						        Album\r\n						      </th>\r\n						      <th>\r\n						        Year\r\n						      </th>\r\n						      <th>\r\n						        Price\r\n						      </th>\r\n						    </tr>\r\n						  </thead>\r\n						  <tbody>\r\n						    <tr>\r\n						      <td>\r\n						        Are You Experienced\r\n						      </td>\r\n						      <td>\r\n						        1967\r\n						      </td>\r\n						      <td>\r\n						        $10.00\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Axis: Bold as Love\r\n						      </td>\r\n						      <td>\r\n						        1967\r\n						      </td>\r\n						      <td>\r\n						        $12.00\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Electric Ladyland\r\n						      </td>\r\n						      <td>\r\n						        1968\r\n						      </td>\r\n						      <td>\r\n						        $10.00\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Band of Gypsys\r\n						      </td>\r\n						      <td>\r\n						        1970\r\n						      </td>\r\n						      <td>\r\n						        $12.00\r\n						      </td>\r\n						    </tr>\r\n						  </tbody>\r\n						  <tfoot>\r\n						    <tr>\r\n						      <th>\r\n						        Album\r\n						      </th>\r\n						      <th>\r\n						        Year\r\n						      </th>\r\n						      <th>\r\n						        Price\r\n						      </th>\r\n						    </tr>\r\n						  </tfoot>\r\n						</table>\r\n						<table class="table">\r\n						  <caption>\r\n						    Pre-installed fonts\r\n						  </caption>\r\n						  <thead>\r\n						    <tr>\r\n						      <th colspan="4">\r\n						        Mac\r\n						      </th>\r\n						      <th colspan="4">\r\n						        Windows\r\n						      </th>\r\n						    </tr>\r\n						    <tr>\r\n						      <th>\r\n						        Serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Sans-serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Sans-serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						    </tr>\r\n						  </thead>\r\n						  <tbody>\r\n						    <tr>\r\n						      <td>\r\n						        Times\r\n						      </td>\r\n						      <td>\r\n						        96.23\r\n						      </td>\r\n						      <td>\r\n						        Helvetica\r\n						      </td>\r\n						      <td>\r\n						        99.71\r\n						      </td>\r\n						      <td>\r\n						        Georgia\r\n						      </td>\r\n						      <td>\r\n						        98.55\r\n						      </td>\r\n						      <td>\r\n						        Verdana\r\n						      </td>\r\n						      <td>\r\n						        99.40\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Georgia\r\n						      </td>\r\n						      <td>\r\n						        94.20\r\n						      </td>\r\n						      <td>\r\n						        Geneva\r\n						      </td>\r\n						      <td>\r\n						        98.84\r\n						      </td>\r\n						      <td>\r\n						        Times New Roman\r\n						      </td>\r\n						      <td>\r\n						        98.60\r\n						      </td>\r\n						      <td>\r\n						        Tahoma\r\n						      </td>\r\n						      <td>\r\n						        99.30\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Times New Roman\r\n						      </td>\r\n						      <td>\r\n						        93.62\r\n						      </td>\r\n						      <td>\r\n						        Lucida Grande\r\n						      </td>\r\n						      <td>\r\n						        99.13\r\n						      </td>\r\n						      <td>\r\n						        Palatino Linotype\r\n						      </td>\r\n						      <td>\r\n						        98.04\r\n						      </td>\r\n						      <td>\r\n						        Arial\r\n						      </td>\r\n						      <td>\r\n						        99.15\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Hoefler Text\r\n						      </td>\r\n						      <td>\r\n						        88.70\r\n						      </td>\r\n						      <td>\r\n						        Arial\r\n						      </td>\r\n						      <td>\r\n						        97.10\r\n						      </td>\r\n						      <td>\r\n						        Book Antiqua\r\n						      </td>\r\n						      <td>\r\n						        86.09\r\n						      </td>\r\n						      <td>\r\n						        Trebuchet MS\r\n						      </td>\r\n						      <td>\r\n						        99.00\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Baskerville\r\n						      </td>\r\n						      <td>\r\n						        88.60\r\n						      </td>\r\n						      <td>\r\n						        Verdana\r\n						      </td>\r\n						      <td>\r\n						        96.81\r\n						      </td>\r\n						      <td>\r\n						        Garamond\r\n						      </td>\r\n						      <td>\r\n						        86.24\r\n						      </td>\r\n						      <td>\r\n						        Lucida Sans Unicode\r\n						      </td>\r\n						      <td>\r\n						        98.25\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Didot\r\n						      </td>\r\n						      <td>\r\n						        87.72\r\n						      </td>\r\n						      <td>\r\n						        Helvetica Neue\r\n						      </td>\r\n						      <td>\r\n						        94.74\r\n						      </td>\r\n						      <td>\r\n						        Cambria\r\n						      </td>\r\n						      <td>\r\n						        54.51\r\n						      </td>\r\n						      <td>\r\n						        Franklin Gothic Medium\r\n						      </td>\r\n						      <td>\r\n						        97.89\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Big Caslon\r\n						      </td>\r\n						      <td>\r\n						        85.10\r\n						      </td>\r\n						      <td>\r\n						        Trebuchet MS\r\n						      </td>\r\n						      <td>\r\n						        94.20\r\n						      </td>\r\n						      <td>\r\n						        Constantia\r\n						      </td>\r\n						      <td>\r\n						        53.81\r\n						      </td>\r\n						      <td>\r\n						        Calibri\r\n						      </td>\r\n						      <td>\r\n						        54.76\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Palatino\r\n						      </td>\r\n						      <td>\r\n						        79.71\r\n						      </td>\r\n						      <td>\r\n						        Gill Sans\r\n						      </td>\r\n						      <td>\r\n						        91.52\r\n						      </td>\r\n						      <td>\r\n						        Goudy Old Style\r\n						      </td>\r\n						      <td>\r\n						        51.30\r\n						      </td>\r\n						      <td>\r\n						        Candara\r\n						      </td>\r\n						      <td>\r\n						        54.31\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Lucida Bright\r\n						      </td>\r\n						      <td>\r\n						        64.90\r\n						      </td>\r\n						      <td>\r\n						        Futura\r\n						      </td>\r\n						      <td>\r\n						        91.01\r\n						      </td>\r\n						      <td>\r\n						        Baskerville Old Face\r\n						      </td>\r\n						      <td>\r\n						        49.10\r\n						      </td>\r\n						      <td>\r\n						        Gill Sans MT\r\n						      </td>\r\n						      <td>\r\n						        51.74\r\n						      </td>\r\n						    </tr>\r\n						    <tr>\r\n						      <td>\r\n						        Garamond\r\n						      </td>\r\n						      <td>\r\n						        23.84\r\n						      </td>\r\n						      <td>\r\n						        Optima\r\n						      </td>\r\n						      <td>\r\n						        90.14\r\n						      </td>\r\n						      <td>\r\n						        Bodoni MT\r\n						      </td>\r\n						      <td>\r\n						        47.89\r\n						      </td>\r\n						      <td>\r\n						        Segoe UI\r\n						      </td>\r\n						      <td>\r\n						        45.04\r\n						      </td>\r\n						    </tr>\r\n						  </tbody>\r\n						  <tfoot>\r\n						    <tr>\r\n						      <th>\r\n						        Serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Sans-serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						      <th>\r\n						        Sans-serif\r\n						      </th>\r\n						      <th>\r\n						        %\r\n						      </th>\r\n						    </tr>\r\n						    <tr>\r\n						      <th colspan="4">\r\n						        Mac\r\n						      </th>\r\n						      <th colspan="4">\r\n						        Windows\r\n						      </th>\r\n						    </tr>\r\n						  </tfoot>\r\n						</table>', '', 'inner', 1, 1, 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 05:04:56'),
(3, 2, 3, 4, 2, 'ru', 'us', 'О нас', '', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 02:57:54'),
(4, 2, 5, 6, 2, 'ru', 'history', 'История', '<p>history</p>\r\n', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 02:58:48'),
(5, 2, 7, 8, 2, 'ru', 'quality', 'Качество продукции', '<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации &quot;Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..&quot; Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам &quot;lorem ipsum&quot; сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>\r\n', '', 'inner', 1, 1, 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 04:41:25'),
(6, 2, 9, 10, 2, 'ru', 'trade-marks', 'Торговые марки', '<pre data-fulltext="" data-placeholder="Перевод" dir="ltr" id="tw-target-text">\r\nTrade marks</pre>\r\n', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 03:34:44'),
(7, 1, 14, 19, 1, 'ru', 'catalog', 'Каталог продукции', '', '', 'inner', 1, 1, 1, 3, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 04:30:12'),
(8, 7, 15, 16, 2, 'ru', 'polycrystalline-modules', 'Поликристалические модули', '', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 03:43:31'),
(9, 7, 17, 18, 2, 'ru', 'monokristalicheskie-modules', 'Монокристалические модули', '', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 03:43:41'),
(10, 1, 20, 21, 1, 'ru', 'about-solar-modules', 'О солнечных модулях', '', 'news', 'list', 1, 1, 1, 2, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 05:18:58'),
(11, 1, 22, 23, 1, 'ru', 'technologies', 'Технологии', '', '', 'inner', 1, 1, 1, 2, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 04:30:35'),
(12, 1, 24, 25, 1, 'ru', 'projects', 'Проекты', '', '', 'inner', 1, 1, 1, 2, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 04:30:40'),
(13, 1, 26, 27, 1, 'ru', 'contacts', 'Контакты', '<h6>Контактные данные:</h6>\r\n<ul>\r\n	<li class="contacts__item"><b>Почта:</b> <a href="mailto:info@gmail.com">info@gmail.com</a></li>\r\n	<li class="contacts__item"><b>Телефон:</b> +996 551 756 436 (есть WhatsApp)</li>\r\n	<li class="contacts__item"><b>Скайп:</b> <a href="skype:weltkind_">skypename</a></li>\r\n	<li class="contacts__item"><b>Адрес:</b> 720000, Кыргызстан, г.Бишкек, пр.Чуй 130, 456</li>\r\n</ul>\r\n', 'feedback', 'inner', 1, 1, 1, 2, '', '', '', '', '2017-01-27 04:50:18', '2017-01-31 23:05:37'),
(14, 2, 11, 12, 2, 'ru', 'vacancy', 'Вакансии', '<p>сущ.</p>\r\n\r\n<p>vacancy</p>\r\n\r\n<p>сущ.</p>\r\n\r\n<p>vacancy</p>\r\n\r\n<p>сущ.</p>\r\n\r\n<p>vacancy</p>\r\n\r\n<p>сущ.</p>\r\n\r\n<p>vacancy</p>\r\n', '', 'inner', 1, 1, 1, 0, '', '', '', '', '2017-01-31 03:35:30', '2017-01-31 03:35:30');

-- --------------------------------------------------------

--
-- Структура таблицы `lr_users`
--

DROP TABLE IF EXISTS `lr_users`;
CREATE TABLE IF NOT EXISTS `lr_users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_users`
--

INSERT INTO `lr_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.ru', '$2y$10$.uTa2pns1JaSKdVCHsymBeWyVB4MEQSnks0.J3JWKRQPbzQ4stAb2', 'sE6r4IEyjKv3aROM4ubz25YokWO2oNv1SpqZOi0cZbiVrbG9GyaGBriakaig', '0000-00-00 00:00:00', '2017-01-30 21:51:46');

-- --------------------------------------------------------

--
-- Структура таблицы `lr_widgets`
--

DROP TABLE IF EXISTS `lr_widgets`;
CREATE TABLE IF NOT EXISTS `lr_widgets` (
  `id` int(10) unsigned NOT NULL,
  `lang` enum('ru','en','ky') COLLATE utf8_unicode_ci NOT NULL,
  `protected` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `type` enum('html','wysiwyg') COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_widgets`
--

INSERT INTO `lr_widgets` (`id`, `lang`, `protected`, `active`, `type`, `slug`, `title`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ru', 0, 1, 'html', 'head.phone', 'Номер для шапки', '8 800 2562 20 20', '', '2017-01-29 23:47:34', '2017-01-29 23:47:54'),
(2, 'en', 0, 1, 'html', 'head.phone', 'Номер телефона в шапке', '8 800 2562 20 20', '', '2017-01-30 00:02:22', '2017-01-30 00:02:22'),
(3, 'ru', 0, 1, 'html', 'index.about', 'Текст для блока "О компании" на главной странице', '<h2 class="info-title">О компании</h2>\r\n            <p class="about__descr">New-Tek LLC — это кыргызко германская компания, занимающаяся производством и поставкой солнечных модулей, разработкой и реализацией инновационных проектов в области солнечной энергетики в СНГ, Европе и на Ближнем Востоке.</p>\r\n            <p>Наша цель — внедрение альтернативных возобновляемых источников энергии, чтобы изменить и улучшить жизнь людей и мир вокруг них. Мы хотим сохранить этот мир для следующих поколений.</p>\r\n            ', '', '2017-01-30 22:14:42', '2017-01-30 22:14:42'),
(4, 'ru', 0, 1, 'html', 'index.counts.1', 'Производительная мощность завода мВт', '30', '', '2017-01-30 22:25:28', '2017-01-30 22:26:29'),
(5, 'ru', 0, 1, 'html', 'index.counts.2', 'тыс солнечных модулей ежегодно', '120', '', '2017-01-30 22:26:55', '2017-01-30 22:26:55'),
(6, 'ru', 0, 1, 'html', 'index.counts.3', 'тыс метров современного производственного комплекса', '10', '', '2017-01-30 22:27:20', '2017-01-30 22:27:20'),
(7, 'ru', 0, 1, 'html', 'index.counts.4', 'лет лет совокупного опыта инженеров и специалистов в области энергетики', '45', '', '2017-01-30 22:27:40', '2017-01-30 22:27:40'),
(9, 'ru', 0, 1, 'html', 'footer.copyright', 'copyright в футере', '<span>© 2010-2016, «NewTek»</span>\r\n<span>Все права защищены</span>', '', '2017-01-30 23:45:53', '2017-01-30 23:45:53'),
(10, 'ru', 0, 1, 'html', 'footer.contacts', 'Контакты в футере', '<span>Звоните по будням, с 9 до 19</span>\r\n<span class="footer-phone">8 800 5623 20 20</span>', '', '2017-01-30 23:57:25', '2017-01-30 23:58:04'),
(12, 'ru', 0, 1, 'html', 'email.name', 'Имя от которого разслылаются письма', 'NewTek', '', '2017-02-01 02:29:01', '2017-02-01 02:29:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lr_articles`
--
ALTER TABLE `lr_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_lang_index` (`lang`),
  ADD KEY `articles_priority_index` (`priority`);

--
-- Индексы таблицы `lr_feedback`
--
ALTER TABLE `lr_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_lang_index` (`lang`);

--
-- Индексы таблицы `lr_gallery`
--
ALTER TABLE `lr_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_priority_index` (`priority`);

--
-- Индексы таблицы `lr_gallery_images`
--
ALTER TABLE `lr_gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `lr_migrations`
--
ALTER TABLE `lr_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lr_news`
--
ALTER TABLE `lr_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_lang_index` (`lang`),
  ADD KEY `news_priority_index` (`priority`);

--
-- Индексы таблицы `lr_settings`
--
ALTER TABLE `lr_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lr_slider`
--
ALTER TABLE `lr_slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lr_tree`
--
ALTER TABLE `lr_tree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tree_parent_id_index` (`parent_id`),
  ADD KEY `tree_lft_index` (`lft`),
  ADD KEY `tree_rgt_index` (`rgt`),
  ADD KEY `tree_lang_index` (`lang`),
  ADD KEY `tree_slug_index` (`slug`);

--
-- Индексы таблицы `lr_users`
--
ALTER TABLE `lr_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `lr_widgets`
--
ALTER TABLE `lr_widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `widgets_lang_index` (`lang`),
  ADD KEY `widgets_type_index` (`type`),
  ADD KEY `widgets_slug_index` (`slug`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lr_articles`
--
ALTER TABLE `lr_articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lr_feedback`
--
ALTER TABLE `lr_feedback`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `lr_gallery`
--
ALTER TABLE `lr_gallery`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lr_gallery_images`
--
ALTER TABLE `lr_gallery_images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lr_migrations`
--
ALTER TABLE `lr_migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `lr_news`
--
ALTER TABLE `lr_news`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `lr_settings`
--
ALTER TABLE `lr_settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `lr_slider`
--
ALTER TABLE `lr_slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `lr_tree`
--
ALTER TABLE `lr_tree`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `lr_users`
--
ALTER TABLE `lr_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `lr_widgets`
--
ALTER TABLE `lr_widgets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `lr_gallery_images`
--
ALTER TABLE `lr_gallery_images`
  ADD CONSTRAINT `gallery_images_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `lr_gallery` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
