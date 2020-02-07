-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Лют 06 2020 р., 17:21
-- Версія сервера: 8.0.18
-- Версія PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `artip`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `_lft`, `_rgt`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 24, NULL, 'Вступникам', 'vstupnikam', '2020-01-15 03:56:09', '2020-01-15 05:12:47'),
(2, 25, 64, NULL, 'Студентам', 'studentam', '2020-01-15 03:56:20', '2020-01-15 03:56:20'),
(3, 65, 74, NULL, 'Випускникам', 'vipusknikam', '2020-01-15 03:56:32', '2020-01-15 03:56:32'),
(4, 75, 82, NULL, 'Співпраця', 'spivpracya', '2020-01-15 03:56:44', '2020-01-15 03:56:44'),
(5, 83, 104, NULL, 'Про нас', 'pro-nas', '2020-01-15 03:56:52', '2020-01-15 05:06:22'),
(6, 2, 3, 1, 'Подати документи', 'podati-dokumenti', '2020-01-15 03:57:09', '2020-01-15 03:57:09'),
(7, 4, 11, 1, 'Спеціальності', 'specialnosti', '2020-01-15 03:57:26', '2020-01-15 03:57:26'),
(8, 5, 6, 7, 'Бакалавр', 'bakalavr', '2020-01-15 03:57:49', '2020-01-15 03:57:49'),
(9, 7, 8, 7, 'Магістр', 'magistr', '2020-01-15 03:58:02', '2020-01-15 03:58:02'),
(10, 9, 10, 7, 'Ліцензія та сертифікати про акредитацію', 'licenziya-ta-sertifikati-pro-akreditaciyu', '2020-01-15 04:17:33', '2020-01-15 04:17:33'),
(11, 12, 23, 1, 'Вступ 2020', 'vstup-2020', '2020-01-15 04:37:38', '2020-01-15 04:37:38'),
(12, 13, 14, 11, 'Правила прийому МОН України 2020', 'pravila-priyomu-mon-ukrajini-2020', '2020-01-15 04:38:29', '2020-01-15 04:38:29'),
(13, 15, 16, 11, 'Правила прийому до академії 2020', 'pravila-priyomu-do-akademiji-2020', '2020-01-15 04:39:17', '2020-01-15 04:39:17'),
(14, 17, 18, 11, 'Календар подій', 'kalendar-podiy', '2020-01-15 04:40:15', '2020-01-15 04:40:15'),
(15, 19, 20, 11, 'Перелік конкурсних предметів', 'perelik-konkursnih-predmetiv', '2020-01-15 04:40:59', '2020-01-15 04:40:59'),
(16, 21, 22, 11, 'Програми фахових всупних випробувань', 'programi-fahovih-vsupnih-viprobuvan', '2020-01-15 04:41:39', '2020-01-15 04:41:39'),
(20, 26, 37, 2, 'Освіта', 'osvita', '2020-01-15 07:15:20', '2020-01-15 07:15:20'),
(21, 38, 43, 2, 'Дозвілля студентів', 'dozvillya-studentiv', '2020-01-15 07:15:45', '2020-01-15 07:15:45'),
(22, 39, 40, 21, 'Дозвілля', 'dozvillya', '2020-01-15 07:16:03', '2020-01-15 07:16:03'),
(23, 41, 42, 21, 'Спорт', 'sport', '2020-01-15 07:16:14', '2020-01-15 07:16:14'),
(24, 27, 28, 20, 'Нормативно-правова база', 'normativno-pravova-baza', '2020-01-15 07:16:48', '2020-01-15 07:16:48'),
(25, 66, 67, 3, 'Випускники', 'vipuskniki', '2020-01-15 07:17:12', '2020-01-15 07:17:12'),
(26, 76, 77, 4, 'Партнери', 'partneri', '2020-01-15 07:18:45', '2020-01-15 07:18:45'),
(27, 84, 85, 5, 'Історія академії', 'istoriya-akademiji', '2020-01-15 07:19:06', '2020-01-15 15:11:45'),
(28, 29, 30, 20, 'Графік навчального процесу', 'grafik-navchalnogo-procesu', '2020-01-15 14:46:28', '2020-01-15 14:46:28'),
(29, 31, 32, 20, 'Електронний ресурс академії', 'elektronniy-resurs-akademiji', '2020-01-15 14:47:04', '2020-01-15 14:47:04'),
(30, 33, 34, 20, 'Студентська документація', 'studentska-dokumentaciya', '2020-01-15 14:48:17', '2020-01-15 14:48:17'),
(31, 35, 36, 20, 'Перелік дисциплін та вільним вибором студента', 'perelik-disciplin-ta-vilnim-viborom-studenta', '2020-01-15 14:49:35', '2020-01-15 14:49:35'),
(32, 44, 55, 2, 'Наука', 'nauka', '2020-01-15 14:50:04', '2020-01-15 14:50:04'),
(33, 45, 46, 32, 'Наукові конференції', 'naukovi-konferenciji', '2020-01-15 14:51:08', '2020-01-15 14:51:08'),
(34, 47, 48, 32, 'Наукові збірники', 'naukovi-zbirniki', '2020-01-15 14:51:34', '2020-01-15 14:51:34'),
(35, 49, 50, 32, 'Антиплагіат', 'antiplagiat', '2020-01-15 14:51:56', '2020-01-15 14:51:56'),
(36, 51, 52, 32, 'Репозиторій', 'repozitoriy', '2020-01-15 14:52:20', '2020-01-15 14:52:20'),
(37, 53, 54, 32, 'Запрошення на конференції', 'zaproshennya-na-konferenciji', '2020-01-15 14:52:51', '2020-01-15 14:52:51'),
(38, 56, 63, 2, 'Студентська рада', 'studentska-rada', '2020-01-15 14:53:36', '2020-01-15 14:53:36'),
(39, 57, 58, 38, 'Положення про студентську раду', 'polozhennya-pro-studentsku-radu', '2020-01-15 14:55:11', '2020-01-15 14:55:11'),
(40, 59, 60, 38, 'Склад студентської ради', 'sklad-studentskoji-radi', '2020-01-15 14:55:44', '2020-01-15 14:55:44'),
(41, 61, 62, 38, 'Діяльність студентської ради', 'diyalnist-studentskoji-radi', '2020-01-15 14:56:20', '2020-01-15 14:56:20'),
(42, 68, 69, 3, 'Події', 'podiji', '2020-01-15 14:57:28', '2020-01-15 14:57:28'),
(43, 70, 71, 3, 'Історії успіху випускників', 'istoriji-uspihu-vipusknikiv', '2020-01-15 14:58:43', '2020-01-15 14:58:43'),
(44, 72, 73, 3, 'Залишити відгук', 'zalishiti-vidguk', '2020-01-15 14:59:10', '2020-01-15 14:59:10'),
(45, 78, 79, 4, 'Міжнародна співпраця', 'mizhnarodna-spivpracya', '2020-01-15 15:00:12', '2020-01-15 15:00:12'),
(46, 80, 81, 4, 'Договір про співробітництво', 'dogovir-pro-spivrobitnictvo', '2020-01-15 15:00:50', '2020-01-15 15:00:50'),
(47, 86, 87, 5, 'Здобутки', 'zdobutki', '2020-01-15 15:01:18', '2020-01-15 15:01:18'),
(48, 88, 89, 5, 'Структура', 'struktura', '2020-01-15 15:01:38', '2020-01-15 15:01:38'),
(49, 90, 91, 5, 'Керівництво та адміністрація', 'kerivnictvo-ta-administraciya', '2020-01-15 15:02:08', '2020-01-15 15:02:08'),
(50, 92, 93, 5, 'Спеціальності', 'specialnosti', '2020-01-15 15:02:28', '2020-01-15 15:02:28'),
(51, 94, 95, 5, 'Нормативні документи', 'normativni-dokumenti', '2020-01-15 15:02:53', '2020-01-15 15:02:53'),
(52, 96, 97, 5, 'Ліцензування та акредитація', 'licenzuvannya-ta-akreditaciya', '2020-01-15 15:03:22', '2020-01-15 15:03:22'),
(53, 98, 99, 5, 'Освіта', 'osvita', '2020-01-15 15:03:41', '2020-01-15 15:03:41'),
(54, 100, 101, 5, 'Наука', 'nauka', '2020-01-15 15:03:58', '2020-01-15 15:03:58'),
(55, 102, 103, 5, 'Публічна інформація', 'publichna-informaciya', '2020-01-15 15:04:20', '2020-01-15 15:04:20');

-- --------------------------------------------------------

--
-- Структура таблиці `category_content`
--

CREATE TABLE `category_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `content`
--

CREATE TABLE `content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_widget` tinyint(1) NOT NULL DEFAULT '0',
  `content_type_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `content_translations`
--

CREATE TABLE `content_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` int(11) NOT NULL,
  `locale` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `content_types`
--

INSERT INTO `content_types` (`id`, `display_name`, `service_name`) VALUES
(1, 'Статті', 'articles'),
(2, 'Новини', 'news'),
(3, 'Сторінки', 'single-pages'),
(4, 'Оголошення', 'annonces'),
(5, 'Віджет', 'widget'),
(6, 'Слайдер', 'slides');

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `media_content`
--

CREATE TABLE `media_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_28_130641_create_failed_jobs_table', 1),
(4, '2019_12_25_135439_content', 2),
(5, '2019_12_25_150213_media', 2),
(6, '2019_12_25_150233_content_types', 2),
(7, '2019_12_27_053641_is_published_type', 3),
(8, '2019_12_27_083103_change_column', 4),
(9, '2019_12_27_121450_extra_columns_media', 5),
(10, '2020_01_13_150640_categories', 6),
(11, '2020_01_14_111008_category_content', 7),
(12, '2020_01_14_133550_media_content', 8),
(13, '2020_01_16_112555_slug_content', 9),
(14, '2020_01_16_114518_date_content', 9),
(15, '2020_01_27_165952_submission', 10),
(16, '2020_01_29_065551_content_translations', 11),
(20, '2020_02_05_181700_submission_extra', 12);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `submissions`
--

CREATE TABLE `submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_answered` tinyint(1) NOT NULL DEFAULT '0',
  `owner_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `access_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en_US',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `locale`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alexander', 'alexander.shtikcher@probegin.com', '$2y$10$00OxA.hmVrY1lpaiTginvOXw5sn9mV/Uic.3YAyHl1qJ9fMHvDysK', 'uk_UA', NULL, 'Lw2ywWiUjXYcwJlNQPT4mWEBB8RvvUwrSZI3cSixorZybmsMwId58DoGjaIY', '2019-12-23 06:31:28', '2020-01-13 08:07:50');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Індекси таблиці `category_content`
--
ALTER TABLE `category_content`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `content_translations`
--
ALTER TABLE `content_translations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `media_content`
--
ALTER TABLE `media_content`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Індекси таблиці `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблиці `category_content`
--
ALTER TABLE `category_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `content_translations`
--
ALTER TABLE `content_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `media_content`
--
ALTER TABLE `media_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблиці `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
