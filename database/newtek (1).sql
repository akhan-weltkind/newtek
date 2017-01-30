-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2017 г., 14:09
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_gallery`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lr_settings`
--

CREATE TABLE IF NOT EXISTS `lr_settings` (
  `id` int(10) unsigned NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_settings`
--

INSERT INTO `lr_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'slider_interval', '4000', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lr_slider`
--

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
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_h1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_tree`
--

INSERT INTO `lr_tree` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `lang`, `slug`, `title`, `content`, `module`, `template`, `active`, `in_menu`, `meta_title`, `meta_h1`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 26, 0, 'ru', '', 'Главная страница', '', '', 'index', 1, 0, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(2, 1, 2, 11, 1, 'ru', 'about', 'О компании', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(3, 2, 3, 4, 2, 'ru', 'polikristallicheskiy-modules3', 'Поликристалические модули3', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(4, 2, 5, 6, 2, 'ru', 'polikristallicheskiy-modules2', 'Поликристалические модули2', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(5, 2, 7, 8, 2, 'ru', 'active-product', 'Активный продукт', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(6, 2, 9, 10, 2, 'ru', 'where-buy', 'Где купить', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(7, 1, 12, 17, 1, 'ru', 'catalog', 'Каталог продукции', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(8, 7, 13, 14, 2, 'ru', 'polycrystalline-modules', 'Поликристалические модули', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(9, 7, 15, 16, 2, 'ru', 'monokristalicheskie-modules', 'Монокристалические модули', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(10, 1, 18, 19, 1, 'ru', 'about-solar-modules', 'О солнечных модулях', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(11, 1, 20, 21, 1, 'ru', 'technologies', 'Технологии', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(12, 1, 22, 23, 1, 'ru', 'projects', 'Проекты', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11'),
(13, 1, 24, 25, 1, 'ru', 'contacts', 'Контактная информация', '', '', 'inner', 1, 1, '', '', '', '', '2017-01-27 04:50:18', '2017-01-27 06:12:11');

-- --------------------------------------------------------

--
-- Структура таблицы `lr_users`
--

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
(1, 'admin', 'admin@admin.ru', '$2y$10$.uTa2pns1JaSKdVCHsymBeWyVB4MEQSnks0.J3JWKRQPbzQ4stAb2', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lr_widgets`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `lr_widgets`
--

INSERT INTO `lr_widgets` (`id`, `lang`, `protected`, `active`, `type`, `slug`, `title`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ru', 0, 1, 'html', 'head.phone', 'Номер для шапки', '8 800 2562 20 20', '', '2017-01-29 23:47:34', '2017-01-29 23:47:54'),
(2, 'en', 0, 1, 'html', 'head.phone', 'Номер телефона в шапке', '8 800 2562 20 20', '', '2017-01-30 00:02:22', '2017-01-30 00:02:22');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `lr_settings`
--
ALTER TABLE `lr_settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `lr_slider`
--
ALTER TABLE `lr_slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `lr_tree`
--
ALTER TABLE `lr_tree`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `lr_users`
--
ALTER TABLE `lr_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `lr_widgets`
--
ALTER TABLE `lr_widgets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
